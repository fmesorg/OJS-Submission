<?php return array (
  'plugins.importexport.native.displayName' => 'Papers XML Plugin',
  'plugins.importexport.native.description' => 'Import and export papers',
  'plugins.importexport.native.cliUsage' => 'Usage: {$scriptName} {$pluginName} [command] ...
Commands:
	import [xmlFileName] [conference_path] [sched_conf_path] [user_name] ...
	export [xmlFileName] [conference_path] [sched_conf_path] papers [paperId1] [paperId2] ...
	export [xmlFileName] [conference_path] [sched_conf_path] paper [paperId]

Additional parameters are required for importing data as follows, depending
on the root node of the XML document.

If the root node is <paper> or <papers>, additional parameters are required.
The following formats are accepted:

{$scriptName} {$pluginName} import [xmlFileName] [conference_path]
	[sched_conf_path] [user_name] track_id [trackId]

{$scriptName} {$pluginName} import [xmlFileName] [conference_path]
	[sched_conf_path] [user_name] track_name [trackName]

{$scriptName} {$pluginName} import [xmlFileName] [conference_path]
	[sched_conf_path] [user_name] track_abbrev [trackAbbrev]',
  'plugins.importexport.native.export' => 'Export Data',
  'plugins.importexport.native.export.tracks' => 'Export Tracks',
  'plugins.importexport.native.export.papers' => 'Export Papers',
  'plugins.importexport.native.selectPaper' => 'Select Paper',
  'plugins.importexport.native.import.papers' => 'Import Papers',
  'plugins.importexport.native.import.papers.description' => 'The file you are importing contains one or more papers. You must choose a track to import these papers into; if you do not wish to import them all into the same track, you may either separate them into different XML files or move them into the appropriate tracks after importing.',
  'plugins.importexport.native.import' => 'Import Data',
  'plugins.importexport.native.import.description' => 'This plugin supports data import based on the native.dtd Document Type Definition. Supported root nodes are &lt;paper&gt; and &lt;papers&gt;.',
  'plugins.importexport.native.import.error' => 'Import Error',
  'plugins.importexport.native.import.error.description' => 'One or more errors occurred during import. Please check to ensure that the format of the import file correctly matches the specification. Specific details of the import errors are listed below.',
  'plugins.importexport.native.cliError' => 'ERROR:',
  'plugins.importexport.native.error.uploadFailed' => 'The upload failed; please ensure that uploads are allowed on your server and that the file is not too big for your PHP and web server configuration.',
  'plugins.importexport.native.error.unknownUser' => 'The specified user, "{$userName}", does not exist.',
  'plugins.importexport.native.error.unknownConference' => 'The specified conference or scheduled conference path, "{$conferencePath}" or "{$schedConfPath}" (respectively), does not exist.',
  'plugins.importexport.native.export.error.couldNotWrite' => 'Could not write to the file "{$fileName}".',
  'plugins.importexport.native.export.error.trackNotFound' => 'No track matched the specifier "{$trackIdentifier}".',
  'plugins.importexport.native.export.error.paperNotFound' => 'No paper matched the specified paper ID "{$paperId}".',
  'plugins.importexport.native.import.error.unsupportedRoot' => 'This plugin does not support the supplied root node "{$rootName}". Please ensure that the file is correctly formed and try again.',
  'plugins.importexport.native.import.error.invalidBooleanValue' => 'An invalid boolean value "{$value}" was specified. Please use "true" or "false".',
  'plugins.importexport.native.import.error.invalidDate' => 'An invalid date "{$value}" was specified.',
  'plugins.importexport.native.import.error.unknownEncoding' => 'Data was embedded using an unknown encoding type "{$type}".',
  'plugins.importexport.native.import.error.couldNotWriteFile' => 'Unable to save a local copy of "{$originalName}".',
  'plugins.importexport.native.import.error.illegalUrl' => 'The specified URL "{$url}" was illegal. Web-submitted imports support only http, https, ftp, or ftps methods.',
  'plugins.importexport.native.import.error.unknownSuppFileType' => 'An unknown supplementary file type "{$suppFileType}" was specified.',
  'plugins.importexport.native.import.error.couldNotCopy' => 'A specified URL "{$url}" could not be copied to a local file.',
  'plugins.importexport.native.import.error.paperTitleLocaleUnsupported' => 'A paper title ("{$paperTitle}") was provided in a locale ("{$locale}") that this conference does not support.',
  'plugins.importexport.native.import.error.paperAbstractLocaleUnsupported' => 'A paper abstract was provided for the paper "{$paperTitle}" in a locale ("{$locale}") that this conference does not support.',
  'plugins.importexport.native.import.error.galleyLabelMissing' => 'The paper "{$paperTitle}" in the track "{$trackTitle}" was missing a galley label.',
  'plugins.importexport.native.import.error.suppFileMissing' => 'The paper "{$paperTitle}" in the track "{$trackTitle}" was missing a supplementary file.',
  'plugins.importexport.native.import.error.galleyFileMissing' => 'The paper "{$paperTitle}" in the track "{$trackTitle}" was missing a galley file.',
  'plugins.importexport.native.import.error.trackTitleLocaleUnsupported' => 'A track title ("{$trackTitle}") was provided in a locale ("{$locale}") that this conference does not support.',
  'plugins.importexport.native.import.error.trackAbbrevLocaleUnsupported' => 'A track abbreviation ("{$trackAbbrev}") was provided in a locale ("{$locale}") that this conference does not support.',
  'plugins.importexport.native.import.error.trackIdentifyTypeLocaleUnsupported' => 'A track identifying type ("{$trackIdentifyType}") was provided in a locale ("{$locale}") that this conference does not support.',
  'plugins.importexport.native.import.error.trackPolicyLocaleUnsupported' => 'A track policy ("{$trackPolicy}") was provided in a locale ("{$locale}") that this conference does not support.',
  'plugins.importexport.native.import.error.trackTitleMismatch' => 'The track title "{$track1Title}" and the track title "{$track2Title}" matched the different existing conference tracks.',
  'plugins.importexport.native.import.error.trackTitleMatch' => 'The track title "{$trackTitle}" matched an existing conference track, but another title of this track doesn\'t match with another title of the existing conference track.',
  'plugins.importexport.native.import.error.trackAbbrevMismatch' => 'The track abbreviation "{$track1Abbrev}" and the track abbreviation "{$track2Abbrev}" matched the different existing conference tracks.',
  'plugins.importexport.native.import.error.trackAbbrevMatch' => 'The track abbreviation "{$trackAbbrev}" matched an existing conference track, but another abbreviation of this track doesn\'t match with another abbreviation of the existing conference track.',
  'plugins.importexport.native.import.error.paperDisciplineLocaleUnsupported' => 'A paper discipline was provided for the paper "{$paperTitle}" in a locale ("{$locale}") that this conference does not support.',
  'plugins.importexport.native.import.error.paperTypeLocaleUnsupported' => 'A paper type was provided for the paper "{$paperTitle}" in a locale ("{$locale}") that this conference does not support.',
  'plugins.importexport.native.import.error.paperSubjectLocaleUnsupported' => 'A paper subject was provided for the paper "{$paperTitle}" in a locale ("{$locale}") that this conference does not support.',
  'plugins.importexport.native.import.error.paperSubjectClassLocaleUnsupported' => 'A paper subject classification was provided for the paper "{$paperTitle}" in a locale ("{$locale}") that this conference does not support.',
  'plugins.importexport.native.import.error.paperCoverageGeoLocaleUnsupported' => 'A paper geographical coverage was provided for the paper "{$paperTitle}" in a locale ("{$locale}") that this conference does not support.',
  'plugins.importexport.native.import.error.paperCoverageChronLocaleUnsupported' => 'A paper chronological coverage was provided for the paper "{$paperTitle}" in a locale ("{$locale}") that this conference does not support.',
  'plugins.importexport.native.import.error.paperCoverageSampleLocaleUnsupported' => 'A paper sample coverage was provided for the paper "{$paperTitle}" in a locale ("{$locale}") that this conference does not support.',
  'plugins.importexport.native.import.error.paperSponsorLocaleUnsupported' => 'A paper sponsor was provided for the paper "{$paperTitle}" in a locale ("{$locale}") that this conference does not support.',
  'plugins.importexport.native.import.error.paperAuthorCompetingInterestsLocaleUnsupported' => 'A author competing interest was provided for the author "{$authorFullName}" of the paper "{$paperTitle}" in a locale ("{$locale}") that this conference does not support.',
  'plugins.importexport.native.import.error.paperAuthorBiographyLocaleUnsupported' => 'A author biography was provided for the author "{$authorFullName}" of the paper "{$paperTitle}" in a locale ("{$locale}") that this conference does not support.',
  'plugins.importexport.native.import.error.galleyLocaleUnsupported' => 'A galley of the paper "{$paperTitle}" was provided in a locale ("{$locale}") that this conference does not support.',
  'plugins.importexport.native.import.error.paperSuppFileTitleLocaleUnsupported' => 'A supplementary file title ("{$suppFileTitle}") of the paper "{$paperTitle}" was provided in a locale ("{$locale}") that this conference does not support.',
  'plugins.importexport.native.import.error.paperSuppFileCreatorLocaleUnsupported' => 'A creator of the supplementary file "{$suppFileTitle}" of the paper "{$paperTitle}" was provided in a locale ("{$locale}") that this conference does not support.',
  'plugins.importexport.native.import.error.paperSuppFileSubjectLocaleUnsupported' => 'A subject of the supplementary file "{$suppFileTitle}" of the paper "{$paperTitle}" was provided in a locale ("{$locale}") that this conference does not support.',
  'plugins.importexport.native.import.error.paperSuppFileTypeOtherLocaleUnsupported' => 'A custom type of the supplementary file "{$suppFileTitle}" of the paper "{$paperTitle}" was provided in a locale ("{$locale}") that this conference does not support.',
  'plugins.importexport.native.import.error.paperSuppFileDescriptionLocaleUnsupported' => 'A description of the supplementary file "{$suppFileTitle}" of the paper "{$paperTitle}" was provided in a locale ("{$locale}") that this conference does not support.',
  'plugins.importexport.native.import.error.paperSuppFilePublisherLocaleUnsupported' => 'A publisher of the supplementary file "{$suppFileTitle}" of the paper "{$paperTitle}" was provided in a locale ("{$locale}") that this conference does not support.',
  'plugins.importexport.native.import.error.paperSuppFileSponsorLocaleUnsupported' => 'A sponsor of the supplementary file "{$suppFileTitle}" of the paper "{$paperTitle}" was provided in a locale ("{$locale}") that this conference does not support.',
  'plugins.importexport.native.import.error.paperSuppFileSourceLocaleUnsupported' => 'A source of the supplementary file "{$suppFileTitle}" of the paper "{$paperTitle}" was provided in a locale ("{$locale}") that this conference does not support.',
  'plugins.importexport.native.import.success' => 'Import Successful',
  'plugins.importexport.native.import.success.description' => 'The import was successful. Successfully-imported items are listed below.',
); ?>