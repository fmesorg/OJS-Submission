<?php

/**
 * @file classes/citation/WebService.inc.php
 *
 * Copyright (c) 2000-2013 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class WebService
 * @ingroup webservice
 *
 * @brief Abstract base class for a web service.
 */


define('WEBSERVICE_RETRIES', 2);
define('WEBSERVICE_MICROSECONDS_BEFORE_RETRY', 100000);

define('WEBSERVICE_RESPONSE_OK', 200);

import('lib.pkp.classes.webservice.WebServiceRequest');

class WebService {
	/** @var string */
	var $_authUsername;
	/** @var string */
	var $_authPassword;

	/** @var integer */
	var $_lastResponseStatus;

	//
	// Setters and Getters
	//
	/**
	 * Sets an (optional) authentication username.
	 * @param $authUsername string
	 */
	function setAuthUsername($authUsername) {
		$this->_authUsername = str_replace(':', '', $authUsername);
	}

	/**
	 * Sets an (optional) authentication password.
	 * @param $authPassword string
	 */
	function setAuthPassword($authPassword) {
		$this->_authPassword = $authPassword;
	}

	/**
	 * Returns the last error produced by a web service.
	 * @return integer
	 */
	function getLastResponseStatus() {
		return $this->_lastResponseStatus;
	}


	//
	// Public API
	//
	/**
	 * Call a web service
	 * @param $webServiceRequest WebServiceRequest
	 * @return string the result of the web service or null in case of an error.
	 */
	function &call(&$webServiceRequest) {
		assert(is_a($webServiceRequest, 'WebServiceRequest'));

		switch($webServiceRequest->getMethod()) {
			case 'POST':
				if ($webServiceRequest->getAsync()) {
					$result = $this->_callPostWebServiceAsync($webServiceRequest);
				} else {
					$result = $this->_callPostWebService($webServiceRequest);
				}
				break;

			case 'GET':
				$result = $this->_callGetWebService($webServiceRequest);
				break;

			default:
				// We currently only support GET and POST requests
				assert(false);
		}

		// Catch web service errors
		$nullVar = null;
		if (!$result) return $nullVar;

		// Clean the result
		$result = stripslashes($result);
		if ( Config::getVar('i18n', 'charset_normalization') == 'On' && !String::utf8_compliant($result) ) {
			$result = String::utf8_normalize($result);
		}

		return $result;
	}


	//
	// Private helper methods
	//
	/**
	 * Call a POST based web services
	 * @param $webServiceRequest WebServiceRequest
	 * @return string the web service result or null on failure
	 */
	function _callPostWebService($webServiceRequest) {
		$url = $webServiceRequest->getUrl();
		$postOptions = $webServiceRequest->getParams();

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		$headers = array('Accept: ' . $webServiceRequest->getAccept());
		foreach($webServiceRequest->getHeaders() as $header => $content) {
			$headers[] = $header . ': ' . $content;
		}
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $postOptions);

		// Set up basic authentication if required.
		$this->_authenticateRequest($ch);

		// Relax timeout a little bit for slow servers
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);

		// POST to the web service
		for ($retries = 0; $retries < WEBSERVICE_RETRIES; $retries++) {
			if ($result = @curl_exec($ch)) break;

			// Wait for a short interval before trying again
			usleep(WEBSERVICE_MICROSECONDS_BEFORE_RETRY);
		}

		$this->_lastResponseStatus = (int)curl_getinfo($ch, CURLINFO_HTTP_CODE);

		curl_close($ch);
		return $result;
	}

	/**
	 * Call a GET based web services
	 * @param $webServiceRequest WebServiceRequest
	 * @return string the web service result or null on failure
	 */
	function _callGetWebService(&$webServiceRequest) {
		// Prepare the request URL
		$url = $webServiceRequest->getUrl();
		$queryString = '';
		foreach($webServiceRequest->getParams() as $key => $values) {
			// GET requests can contain repeated parameter keys.
			if (is_scalar($values)) $values = array($values);
			foreach($values as $value) {
				if (empty($queryString)) {
					$queryString = '?';
				} else {
					$queryString .= '&';
				}
				$queryString .= urlencode($key).'='.urlencode($value);
			}
		}
		$url = $url.$queryString;

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		$headers = $this->_buildHeaders($webServiceRequest);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

		// Set up basic authentication if required.
		$this->_authenticateRequest($ch);

		// Relax timeout a little bit for slow servers
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);

		// POST to the web service
		for ($retries = 0; $retries < WEBSERVICE_RETRIES; $retries++) {
			if ($result = @curl_exec($ch)) break;

			// Wait for a short interval before trying again
			usleep(WEBSERVICE_MICROSECONDS_BEFORE_RETRY);
		}

		$this->_lastResponseStatus = (int)curl_getinfo($ch, CURLINFO_HTTP_CODE);

		curl_close($ch);
		return $result;
	}

	/**
	 * Execute an asynchronous web service request.
	 *
	 * NB: Web services must read the request all at once
	 * (i.e. they may not stream content in bit by bit)
	 * as we close the connection before we get a response.
	 * This also means that web services must be immune
	 * to the client closing the connection.
	 *
	 * @param $webServiceRequest WebServiceRequest
	 * @return string the web service result or null on failure
	 */
	function _callPostWebServiceAsync($webServiceRequest) {
		// Parse the request URL.
		$url = $webServiceRequest->getUrl();
		$urlParts = parse_url($url);

		// Authentication.
		$username = $this->_authUsername;
		if (!is_null($username)) {
			$password = $this->_authPassword;
			$webServiceRequest->setHeader('Authorization', 'Basic ' . base64_encode("$username:$password"));
		}

		// Headers
		if (!$webServiceRequest->hasHeader('Content-Type')) {
			// Our default content type for async POST requests is XML.
			$webServiceRequest->setHeader('Content-Type', 'text/xml; charset=utf-8');
		}
		$headers = $this->_buildHeaders($webServiceRequest);

		// We expect raw payload.
		$payload = $webServiceRequest->getParams();
		assert(is_string($payload));

		// Open the socket.
		$fp = fsockopen(
			$urlParts['host'],
			isset($urlParts['port'])?$urlParts['port']:80,
			$errno, $errstr, 30
		);

		if (!$fp) {
			return false;
		} else {
			$path = $urlParts['path'] . (isset($urlParts['query']) ? '?' . $urlParts['query'] : '');
			$host = $urlParts['host'] . ':' . (isset($urlParts['port']) ? $urlParts['port'] : '80');
			$out = "POST " . $path . " HTTP/1.1\r\n";
			$out.= "Host: " . $host . "\r\n";
			foreach ($headers as $header) {
				$out.= "$header\r\n";
			}
			$out.= "Content-Length: " . strlen($payload) . "\r\n";
			$out.= "Connection: Close\r\n\r\n";
			$out .= $payload;
			fwrite($fp, $out);

			// We close the connection before we get the
			// response. This only works if the web service
			// reads the whole content at once and is immune
			// to the client prematurely closing the connection.
			fclose($fp);
			return '';
		}
	}

	/**
	 * Adds (optional) authentication information to a curl request
	 * @param $ch object Reference to a curl handle.
	 */
	function _authenticateRequest(&$ch) {
		$username = $this->_authUsername;
		if (!is_null($username)) {
			$password = $this->_authPassword;
			curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
			curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
		}
	}

	/**
	 * Build and set the headers in a cURL
	 * request
	 *
	 * @param $webServiceRequest WebServiceRequest
	 * @return An array with headers.
	 */
	function _buildHeaders(&$webServiceRequest) {
		$headers = array('Accept: ' . $webServiceRequest->getAccept());
		foreach($webServiceRequest->getHeaders() as $header => $content) {
			// Remove colons and spaces from the header name.
			$header = str_replace(array(' ', ':'), array('', ''), $header);
			$headerLine = $header . ': ' . $content;
			// Remove CR/LF from the header line to avoid CRLF attacks.
			// (We do not allow folded header content).
			$headerLine = str_replace(array("\n", "\r"), array('', ''), $headerLine);
			$headers[] = $headerLine;
		}
		return $headers;
	}
}

?>
