{**
 * templates/rt/sent.tpl
 *
 * Copyright (c) 2003-2013 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * RT Email Sent page.
 *
 *}
{strip}
{assign var=pageTitle value="email.email"}
{include file="rt/header.tpl"}
{/strip}

<p>{translate key="rt.email.sent"}</p>

{include file="rt/footer.tpl"}

