<?php return array (
  'topic' => 
  array (
    0 => 
    array (
      'attributes' => 
      array (
        'id' => 'conference/topic/000025',
        'locale' => 'en_US',
        'title' => 'All Enrolled Users',
        'toc' => 'conference/toc/000003',
        'key' => 'conference.users.allUsers',
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
      'value' => '<p>The All Enrolled Users page lists all users in the system that are currently enrolled with the hosted conference, and provides a search function to find particular users by name, email address, etc. The Conference Manager can edit, remove, or disable accounts; \'removing\' a user will remove the user account from the hosted conference enrollment list, but not from the system itself, whereas the disable option stops the user account from being logged into*. Additionally, the Site Administrator is able to temporarily log in as any user by using the Log In As link, which is particularly useful for troubleshooting or committing work on behalf of the user.</p>
		<p>The Conference Manager can send an email to multiple users by checking the box beside their name (or, to send an email to all listed users, by clicking the Select All button), and clicking the Send Email button.</p>
		<p>The Conference Manager can also enroll a user already registered with the system to the hosted conference by clicking the Enroll Existing User link and searching for the username in question; can create a new user by clicking the Create New User link and filling in the subsequent profile/registration form; and can sync enrollment between hosted conferences, which adds the selected user/roles from the current hosted conference to the selected hosted conference.</p>
		
		<p>*Please note that it is impossible to simply delete a user from the system: instead, one user should be merged into another user\'s account. This is so that any of the user\'s system data -- including papers, abstracts, and other info -- are not inadvertently orphaned.</p>',
    ),
  ),
); ?>