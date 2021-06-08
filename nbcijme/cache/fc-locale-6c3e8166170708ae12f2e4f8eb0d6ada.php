<?php return array (
  'plugins.importexport.nlm.displayName' => 'NLM XML Export Plugin',
  'plugins.importexport.nlm.description' => 'Export paper metadata in NLM Meeting Abstracts XML format for indexing.',
  'plugins.importexport.nlm.export' => 'Export Data',
  'plugins.importexport.nlm.export.papers' => 'Export Papers',
  'plugins.importexport.nlm.export.selectPaper' => 'Select Papers to export.',
  'plugins.importexport.nlm.cliUsage' => 'Usage: 
{$scriptName} {$pluginName} [xmlFileName] [conference_path] papers [paperId1] [paperId2] ...',
  'plugins.importexport.nlm.cliError' => 'ERROR:',
  'plugins.importexport.nlm.export.error.paperNotFound' => 'No paper matched the specified paper ID "{$paperId}".',
  'plugins.importexport.nlm.export.error.unknownConference' => 'Unknown conference path {$conferencePath}',
  'plugins.importexport.nlm.export.error.couldNotWrite' => 'Could not the specified file "{$fileName}"',
); ?>