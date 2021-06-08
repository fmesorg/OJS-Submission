<?php return array (
  'topic' => 
  array (
    0 => 
    array (
      'attributes' => 
      array (
        'id' => 'conference/topic/000042',
        'locale' => 'en_US',
        'title' => 'Versions',
        'toc' => 'conference/toc/000009',
        'key' => 'conference.generalManagement.readingTools.versions',
      ),
      'value' => '',
    ),
  ),
  'section' => 
  array (
    0 => 
    array (
      'attributes' => 
      array (
      ),
      'value' => '<p>The Reading Tools Versions page, available from the main Reading Tools page, lists the available Related Items versions and corresponding configuration options (Validate; Metadata; Contexts; Edit; Delete) for each set. New versions can be added to this list by clicking the Create Version link at the bottom of the page, and the original sets can be reset to their default configuration by clicking Restore Versions to Defaults.</p>',
    ),
    1 => 
    array (
      'attributes' => 
      array (
        'title' => 'Version Configuration Options',
      ),
      'value' => '<p><em>Validate:</em><br /> This feature runs through search databases associated with the Related Item (please note that this does take time to complete) and will result in a statement for each of the associated item databases attesting to its validity (specifically, whether the URL specified for the database works or not) and the source of problem, if one exists. If a URL is listed as invalid the Conference Manager should manually verify and, if need be, fix the offending URL by click the Edit link beside the listed URL. </p>
		<p><em>Metadata:</em><br /> The metadata for each version provides the title, a key, a brief description, etc., about that field or discipline, which can be edited. </p>
		<p><em>Contexts:</em><br /> Each Related Item version consists of various groupings, or contexts, of databases (e.g., Author\'s Work, Look up Terms, Related Studies, etc.) with each context in turn consisting of a number of relevant search databases. For further information, see {help_topic key="conference.generalManagement.readingTools.contexts" text="Contexts"}.</p>
		<p><em>Export:</em><br /> If the Conference Manager develops additional Reading Tools, these can be exported to the Public Knowledge Project for use by other conferences in related fields.</p>
		<p><em>Delete:</em><br /> This will delete the version in question from the Versions list. This can be undone by clicking the Restore Versions to Defaults link at the bottom of the page, however this will revert <em>all</em> changes in all versions.</p>',
    ),
  ),
); ?>