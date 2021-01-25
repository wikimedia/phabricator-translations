<?php

final class PhabricatorPeopleEn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en';
  }

  protected function getTranslations() {
    return array(
      'Blurb' => 'Blurb',
      'Filter IP' => 'Filter IP',
      'You are creating a new **standard** user account.' => 'You are creating a new **standard** user account.',
      'Pass true to find only administrators, or false to omit administrators.' => 'Pass true to find only administrators, or false to omit administrators.',
      'Disable User?' => 'Disable User?',
      'Multi-Factor: Remove Factor' => 'Multi-Factor: Remove Factor',
      'Users can not be permanently destroyed from the web interface. See %s in the documentation for more information.' => 'Users can not be permanently destroyed from the web interface. See %s in the documentation for more information.',
      'Manage User' => 'Manage User',
      'Confirm' => 'Confirm',
      'Validity of \'%s\'.' => 'Validity of \'%s\'.',
      'Make real names optional' => 'Make real names optional',
      'Hisec: Exit' => 'Hisec: Exit',
      'Delete User' => 'Delete User',
      'You can not change usernames because you are not an administrator. Only administrators can change usernames.' => 'You can not change usernames because you are not an administrator. Only administrators can change usernames.',
      'Email: Add Address' => 'Email: Add Address',
      'Event Date' => 'Event Date',
      'You can not send welcome mail to this user because their account is disabled.' => 'You can not send welcome mail to this user because their account is disabled.',
      'Stores the real name of the user, like "Abraham Lincoln".' => 'Stores the real name of the user, like "Abraham Lincoln".',
      'Pass true to find only mailing lists, or false to omit mailing lists.' => 'Pass true to find only mailing lists, or false to omit mailing lists.',
      'You must be an administrator to create administrators.' => 'You must be an administrator to create administrators.',
      'Condolences on forgetting your password. You can use this link to reset it:
      %s
    After you set a new password, consider writing it down on a sticky note and attaching it to your monitor so you don\'t forget again! Choosing a very short, easy-to-remember password like "cat" or "1234" might also help.
    Best Wishes,
    Phabricator
    ' => 'Condolences on forgetting your password. You can use this link to reset it:
      %s
    After you set a new password, consider writing it down on a sticky note and attaching it to your monitor so you don\'t forget again! Choosing a very short, easy-to-remember password like "cat" or "1234" might also help.
    Best Wishes,
    Phabricator
    ',
      'Obsoleted by "%s".' => 'Obsoleted by "%s".',
      'User Accounts and Profiles' => 'User Accounts and Profiles',
      'Login: Partial Login' => 'Login: Partial Login',
      'User has not been awarded any badges.' => 'User has not been awarded any badges.',
      'Invite Users' => 'Invite Users',
      'Revise Invites' => 'Revise Invites',
      'Type a log type name...' => 'Type a log type name...',
      'Sort of a social utility.' => 'Sort of a social utility.',
      '[Phabricator] Email Verification' => '[Phabricator] Email Verification',
      'Send Invitations' => 'Send Invitations',
      'Confirm Approval' => 'Confirm Approval',
      'User account to act on.' => 'User account to act on.',
      'User has not been created yet!' => 'User has not been created yet!',
      'The user\'s username.' => 'The user\'s username.',
      '%s empowered this user as an administrator.' => '%s empowered this user as an administrator.',
      'Musician' => 'Musician',
      'Make real names required' => 'Make real names required',
      'Already Approved' => 'Already Approved',
      'After you set up your account, you can log in to Phabricator in the future by going here:' => 'After you set up your account, you can log in to Phabricator in the future by going here:',
      'After you have set a password, you can log in to Phabricator in the future by going here:' => 'After you have set a password, you can log in to Phabricator in the future by going here:',
      'Account Activity' => 'Account Activity',
      'Relationships' => 'Relationships',
      'Remove %s as an administrator? They will no longer be able to perform administrative functions on this Phabricator install.' => 'Remove %s as an administrator? They will no longer be able to perform administrative functions on this Phabricator install.',
      'Username and email must be unique.' => 'Username and email must be unique.',
      '%s sent this user a test notification.' => '%s sent this user a test notification.',
      'The email will identify you as the sender. You may optionally replace the [[ %s | default custom mail body ]] with different text by providing a message below.' => 'The email will identify you as the sender. You may optionally replace the [[ %s | default custom mail body ]] with different text by providing a message below.',
      'User has already been created!' => 'User has already been created!',
      'Only administrators can disapprove users.' => 'Only administrators can disapprove users.',
      'You can use this link to set a password on your account:
      %s
    ' => 'You can use this link to set a password on your account:
      %s
    ',
      'Not an Administrator' => 'Not an Administrator',
      '%s defrocked this user.' => '%s defrocked this user.',
      'Show Only Bots' => 'Show Only Bots',
      'Email is already primary!' => 'Email is already primary!',
      'Pass true to find only users who are enrolled in MFA, or false to omit these users.' => 'Pass true to find only users who are enrolled in MFA, or false to omit these users.',
      'Create a mailing list user to represent an existing, external mailing list like a Google Group or a Mailman list.' => 'Create a mailing list user to represent an existing, external mailing list like a Google Group or a Mailman list.',
      'If you already have an account, you can follow the link to quickly verify this email address.' => 'If you already have an account, you can follow the link to quickly verify this email address.',
      '%s (%s) has changed your Phabricator username.' => '%s (%s) has changed your Phabricator username.',
      '%s (%s) has created an account for you.' => '%s (%s) has created an account for you.',
      'Create Mailing List User' => 'Create Mailing List User',
      'Disable or enable the user.' => 'Disable or enable the user.',
      'The user\'s real name.' => 'The user\'s real name.',
      'Only admins can call this method.' => 'Only admins can call this method.',
      'Hide Mailing Lists' => 'Hide Mailing Lists',
      'User does not belong to any projects.' => 'User does not belong to any projects.',
      'Joined Before' => 'Joined Before',
      'User Activity Logs' => 'User Activity Logs',
      'True to disable the user.' => 'True to disable the user.',
      'Email: Reassign' => 'Email: Reassign',
      'Conduit: Read Certificate Failure' => 'Conduit: Read Certificate Failure',
      'To begin on such a grand journey, requires but just a single step.' => 'To begin on such a grand journey, requires but just a single step.',
      'Turn a user account into an administrator account.' => 'Turn a user account into an administrator account.',
      'Can Create (non-bot) Users' => 'Can Create (non-bot) Users',
      'Confirm Invites' => 'Confirm Invites',
      'Query users.' => 'Query users.',
      'No accounts found.' => 'No accounts found.',
      'Bot' => 'Bot',
      'Create New Bot' => 'Create New Bot',
      '[Phabricator] Account Login Link' => '[Phabricator] Account Login Link',
      'User profiles configuration.' => 'User profiles configuration.',
      'New username is required.' => 'New username is required.',
      'Search for activity affecting specific users.' => 'Search for activity affecting specific users.',
      'Account Menu' => 'Account Menu',
      'Remove as Administrator?' => 'Remove as Administrator?',
      'This function includes results which have any owner. It excludes unassigned or unowned results.' => 'This function includes results which have any owner. It excludes unassigned or unowned results.',
      'Engineering' => 'Engineering',
      'Approved' => 'Approved',
      'Information on user profiles on this install is publicly visible.' => 'Information on user profiles on this install is publicly visible.',
      'This email address (%s) is no longer your primary email address. Going forward, Phabricator will send all email to your new primary email address (%s).' => 'This email address (%s) is no longer your primary email address. Going forward, Phabricator will send all email to your new primary email address (%s).',
      'Email: Remove Address' => 'Email: Remove Address',
      'You do not have permission to browse the user directory.' => 'You do not have permission to browse the user directory.',
      'User title, like "CEO" or "Assistant to the Manager".' => 'User title, like "CEO" or "Assistant to the Manager".',
      'This account has been disabled.' => 'This account has been disabled.',
      'Not a Normal User' => 'Not a Normal User',
      'Search for actions by remote address.' => 'Search for actions by remote address.',
      'Select results with any owner.' => 'Select results with any owner.',
      'Roles' => 'Roles',
      'Hide Users With MFA' => 'Hide Users With MFA',
      'User Picture' => 'User Picture',
      'Choose User Icon' => 'Choose User Icon',
      'Enabled user account "%s".' => 'Enabled user account "%s".',
      'Email Not Verified' => 'Email Not Verified',
      'Usernames' => 'Usernames',
      'Create New User' => 'Create New User',
      '%s empowered %s as an administrator.' => '%s empowered %s as an administrator.',
      'Obsoleted by method "user.edit".' => 'Obsoleted by method "user.edit".',
      'Bots' => 'Bots',
      'You do not have permission to create users.' => 'You do not have permission to create users.',
      'This user has already been approved.' => 'This user has already been approved.',
      'User Profiles' => 'User Profiles',
      'Awarded by %s' => 'Awarded by %s',
      'Mailing Lists' => 'Mailing Lists',
      'Admin' => 'Admin',
      '[Phabricator] Account Password Link' => '[Phabricator] Account Password Link',
      'This function allows you to change the behavior of a query based on who is running it. When you use this function, you will be the current viewer, so it works like you typed your own username.
    However, if you save a query using this function and send it to someone else, it will work like //their// username was the one that was typed. This can be useful for building dashboard panels that always show relevant information to the user who is looking at them.' => 'This function allows you to change the behavior of a query based on who is running it. When you use this function, you will be the current viewer, so it works like you typed your own username.
    However, if you save a query using this function and send it to someone else, it will work like //their// username was the one that was typed. This can be useful for building dashboard panels that always show relevant information to the user who is looking at them.',
      'You can use this link to reset your Phabricator password:
      %s
    ' => 'You can use this link to reset your Phabricator password:
      %s
    ',
      'Configure User Forms' => 'Configure User Forms',
      '  %s' => '  %s',
      'After a time, your efforts fail. You can not adjust your own status as an administrator.' => 'After a time, your efforts fail. You can not adjust your own status as an administrator.',
      'Rename User' => 'Rename User',
      'Hisec: Enter' => 'Hisec: Enter',
      'You are creating a new **bot** user account.' => 'You are creating a new **bot** user account.',
      'Hide Bots' => 'Hide Bots',
      'No open, assigned tasks.' => 'No open, assigned tasks.',
      'You can not send this user welcome mail because they are not a normal user and can not log in to the web interface. Special users (like bots and mailing lists) are unable to establish web sessions.' => 'You can not send this user welcome mail because they are not a normal user and can not log in to the web interface. Special users (like bots and mailing lists) are unable to establish web sessions.',
      '%s approved this user.' => '%s approved this user.',
      'User icon to accompany their title.' => 'User icon to accompany their title.',
      'User Details' => 'User Details',
      'users' => 'users',
      'Phabricator Account "%s" Approved' => 'Phabricator Account "%s" Approved',
      'To send invites, you must enter at least one email address.' => 'To send invites, you must enter at least one email address.',
      'Approve User' => 'Approve User',
      'Find users whose usernames contain a substring.' => 'Find users whose usernames contain a substring.',
      'It is generally safe to rename users, but changing usernames may create occasional minor complications or confusion with text that contains the old username.' => 'It is generally safe to rename users, but changing usernames may create occasional minor complications or confusion with text that contains the old username.',
      'Can Browse User Directory' => 'Can Browse User Directory',
      'This is now your primary email address (%s). Going forward, Phabricator will send all email here.' => 'This is now your primary email address (%s). Going forward, Phabricator will send all email here.',
      '%s disabled this user.' => '%s disabled this user.',
      'Pass true to find only users awaiting administrative approval, or false to omit these users.' => 'Pass true to find only users awaiting administrative approval, or false to omit these users.',
      'Disable User' => 'Disable User',
      'Picture From %s' => 'Picture From %s',
      'Pass true to find only disabled users, or false to omit disabled users.' => 'Pass true to find only disabled users, or false to omit disabled users.',
      'Availability' => 'Availability',
      'Allow %s to access this Phabricator install?' => 'Allow %s to access this Phabricator install?',
      'emails' => 'emails',
      'Login: Failure' => 'Login: Failure',
      'administrators' => 'administrators',
      'You can not send an email login link to this email address because the associated user account is disabled.' => 'You can not send an email login link to this email address because the associated user account is disabled.',
      'Lookup PHIDs by username. Obsoleted by "%s".' => 'Lookup PHIDs by username. Obsoleted by "%s".',
      'Affected User' => 'Affected User',
      'Enable User' => 'Enable User',
      'message' => 'message',
      'The user will receive an email notifying them that you changed their username.' => 'The user will receive an email notifying them that you changed their username.',
      'Create a bot/script user account, to automate interactions with other systems. These users can not use the web interface, but can use the API.' => 'Create a bot/script user account, to automate interactions with other systems. These users can not use the web interface, but can use the API.',
      'User account "%s" is already an administrator. You can only empower accounts that are not yet administrators.' => 'User account "%s" is already an administrator. You can only empower accounts that are not yet administrators.',
      'Usernames must contain only numbers, letters, period, underscore, and hyphen, and can not end with a period. They must have no more than %d characters.' => 'Usernames must contain only numbers, letters, period, underscore, and hyphen, and can not end with a period. They must have no more than %s characters.',
      '[Phabricator] Username Changed' => '[Phabricator] Username Changed',
      'Hisec: Failed Attempt' => 'Hisec: Failed Attempt',
      'Animal' => 'Animal',
      'Get availability information for users.' => 'Get availability information for users.',
      'The email will contain a link that the user may use to log in to their account. This link bypasses authentication requirements and allows them to log in without credentials. Sending a copy of this email can be useful if the original was lost or never sent.' => 'The email will contain a link that the user may use to log in to their account. This link bypasses authentication requirements and allows them to log in without credentials. Sending a copy of this email can be useful if the original was lost or never sent.',
      'Email: Change Primary' => 'Email: Change Primary',
      'Love,
    Phabricator' => 'Love,
    Phabricator',
      'Executive' => 'Executive',
      'Add new simple fields to user profiles.' => 'Add new simple fields to user profiles.',
      'New Username: %s' => 'New Username: %s',
      'Browse Any Owner' => 'Browse Any Owner',
      'Hide Disabled Users' => 'Hide Disabled Users',
      'Enable %s? They will be able to access Phabricator and receive email again.' => 'Enable %s? They will be able to access Phabricator and receive email again.',
      'Email address must be @%s' => 'Email address must be @%s',
      'Logistics' => 'Logistics',
      'Users can view their activity and activity that affects them.' => 'Users can view their activity and activity that affects them.',
      'Approve' => 'Approve',
      'Login: Signed Required Legalpad Documents' => 'Login: Signed Required Legalpad Documents',
      'Your Phabricator account (%s) has been approved by %s. You can login here:' => 'Your Phabricator account (%s) has been approved by %s. You can login here:',
      '[Phabricator] Primary Address Changed' => '[Phabricator] Primary Address Changed',
      'Read information about users.' => 'Read information about users.',
      'Unknown CSS variable "%s"!' => 'Unknown CSS variable "%s"!',
      'To log in to your account for the first time, follow this link:' => 'To log in to your account for the first time, follow this link:',
      'Email address must be at one of: %s' => 'Email address must be at one of: %s',
      'Shows user join date.' => 'Shows user join date.',
      'Hide Unapproved Users' => 'Hide Unapproved Users',
      'Any Owner' => 'Any Owner',
      'User account "%s" is not disabled. You can only enable accounts that are disabled.' => 'User account "%s" is not disabled. You can only enable accounts that are disabled.',
      'To log in to Phabricator, follow this link and set a password:' => 'To log in to Phabricator, follow this link and set a password:',
      'Action Name' => 'Action Name',
      'Find user accounts created before a given time.' => 'Find user accounts created before a given time.',
      'The email will identify you as the sender. You may optionally include additional text in the mail body by specifying it below.' => 'The email will identify you as the sender. You may optionally include additional text in the mail body by specifying it below.',
      'Not Approved' => 'Not Approved',
      'Type "anyone()"...' => 'Type "anyone()"...',
      'Email addresses should be in the form "user@domain.com". The maximum length of an email address is %s characters.' => 'Email addresses should be in the form "user@domain.com". The maximum length of an email address is %s characters.',
      'Administrators are limited in their ability to access or edit these accounts after account creation.' => 'Administrators are limited in their ability to access or edit these accounts after account creation.',
      'Edit User: %s' => 'Edit User: %s',
      'User has no primary email address!' => 'User has no primary email address!',
      'Empower %s as an administrator? They will be able to create users, approve users, make and remove administrators, delete accounts, and perform other administrative functions on this Phabricator install.' => 'Empower %s as an administrator? They will be able to create users, approve users, make and remove administrators, delete accounts, and perform other administrative functions on this Phabricator install.',
      '%s renamed this user from %s to %s.' => '%s renamed this user from %s to %s.',
      'Choose the type of user account to create. For a detailed explanation of user account types, see [[ %s | User Guide: Account Roles ]].' => 'Choose the type of user account to create. For a detailed explanation of user account types, see [[ %s | User Guide: Account Roles ]].',
      'Approve the user.' => 'Approve the user.',
      'Another user already has the username "%s".' => 'Another user already has the username "%s".',
      'Recent Revisions' => 'Recent Revisions',
      'Shows roles like "Administrator" and "Disabled".' => 'Shows roles like "Administrator" and "Disabled".',
      'Edit Profile Picture' => 'Edit Profile Picture',
      'Has MFA' => 'Has MFA',
      'Projects (%s)' => 'Projects (%s)',
      'Save Profile' => 'Save Profile',
      'You do not have permission to disable or enable users.' => 'You do not have permission to disable or enable users.',
      'Pass true to find only bots, or false to omit bots.' => 'Pass true to find only bots, or false to omit bots.',
      'To permanently destroy this user, run this command from the command line:' => 'To permanently destroy this user, run this command from the command line:',
      'No recent revisions.' => 'No recent revisions.',
      'Can\'t remove primary email!' => 'Can\'t remove primary email!',
      'User Accounts' => 'User Accounts',
      'Create a standard user account.' => 'Create a standard user account.',
      'Show Only Disabled Users' => 'Show Only Disabled Users',
      'Email not owned by user!' => 'Email not owned by user!',
      'Find user accounts created after a given time.' => 'Find user accounts created after a given time.',
      'Edit Profile: %s' => 'Edit Profile: %s',
      'Make Administrator' => 'Make Administrator',
      'Always require real name for user profiles.' => 'Always require real name for user profiles.',
      'If everything looks good, click **Send Invitations** to deliver email invitations these users. Otherwise, edit the email list or personal message at the bottom of the page to revise the invitations.' => 'If everything looks good, click **Send Invitations** to deliver email invitations these users. Otherwise, edit the email list or personal message at the bottom of the page to revise the invitations.',
      'Administrators have greater access to edit these accounts.' => 'Administrators have greater access to edit these accounts.',
      'Anyone' => 'Anyone',
      'Joined After' => 'Joined After',
      'Search for activity by specific users.' => 'Search for activity by specific users.',
      'Remove Administrator' => 'Remove Administrator',
      'You are creating a new **mailing list** user account.' => 'You are creating a new **mailing list** user account.',
      'Permanently disable specified users (admin only).' => 'Permanently disable specified users (admin only).',
      'Create a standard user account. These users can log in to Phabricator, use the web interface and API, and receive email.' => 'Create a standard user account. These users can log in to Phabricator, use the web interface and API, and receive email.',
      'If you rename this user, the old username will no longer be tied to the user account. Anything which uses the old username in raw text (like old commit messages) may no longer associate correctly.' => 'If you rename this user, the old username will no longer be tied to the user account. Anything which uses the old username in raw text (like old commit messages) may no longer associate correctly.',
      'Activity Log %d' => 'Activity Log %s',
      'Make Administrator?' => 'Make Administrator?',
      'Hide Administrators' => 'Hide Administrators',
      'You can not send an email login link to this email address because the associated user account is not a normal user account and can not log in to the web interface.' => 'You can not send an email login link to this email address because the associated user account is not a normal user account and can not log in to the web interface.',
      'You must be an administrator to rename users.' => 'You must be an administrator to rename users.',
      'Select and reorder user profile fields.' => 'Select and reorder user profile fields.',
      'Empowered user account "%s".' => 'Empowered user account "%s".',
      'Type a username...' => 'Type a username...',
      'Send Welcome Email' => 'Send Welcome Email',
      'Search for activity in particular sessions.' => 'Search for activity in particular sessions.',
      'Find results which are assigned to anyone.' => 'Find results which are assigned to anyone.',
      'Primary email addresses can not be reassigned.' => 'Primary email addresses can not be reassigned.',
      'Old Username: %s' => 'Old Username: %s',
      'Edit Settings' => 'Edit Settings',
      'User Administration' => 'User Administration',
      'Create Standard User' => 'Create Standard User',
      '[Phabricator] Welcome to Phabricator' => '[Phabricator] Welcome to Phabricator',
      'None of the provided addresses are valid invite recipients. Review the table below for details. Revise the address list to continue.' => 'None of the provided addresses are valid invite recipients. Review the table below for details. Revise the address list to continue.',
      '%s defrocked %s.' => '%s defrocked %s.',
      'User Email' => 'User Email',
      'Non existent user PHID.' => 'Non existent user PHID.',
      'User does not own email!' => 'User does not own email!',
      'Verified' => 'Verified',
      'Browse Log Types' => 'Browse Log Types',
      'This method is frozen and will eventually be deprecated. New code should use "user.search" instead.' => 'This method is frozen and will eventually be deprecated. New code should use "user.search" instead.',
      'To invite users to Phabricator, enter their email addresses below. Separate addresses with commas or newlines.' => 'To invite users to Phabricator, enter their email addresses below. Separate addresses with commas or newlines.',
      'Login: Upgrade to Full' => 'Login: Upgrade to Full',
      'Create User' => 'Create User',
      'Unapproved Account' => 'Unapproved Account',
      'Select current viewer.' => 'Select current viewer.',
      'Change Username' => 'Change Username',
      'People' => 'People',
      'True to approve the user.' => 'True to approve the user.',
      'Please verify that you own this email address (%s) by clicking this link:' => 'Please verify that you own this email address (%s) by clicking this link:',
      'Disable the user.' => 'Disable the user.',
      'Email is not verified!' => 'Email is not verified!',
      'Approve or reject the user.' => 'Approve or reject the user.',
      'Email has already been created!' => 'Email has already been created!',
      'Old Username' => 'Old Username',
      'To register an account and get started, follow this link:' => 'To register an account and get started, follow this link:',
      'Username is invalid! %s' => 'Username is invalid! %s',
      'All of the addresses appear to be valid invite recipients. Confirm the actions below to continue.' => 'All of the addresses appear to be valid invite recipients. Confirm the actions below to continue.',
      'Find users by exact username.' => 'Find users by exact username.',
      'User Availability' => 'User Availability',
      'Failed to load UserCacheType to manage key "%s". This cache type is required.' => 'Failed to load UserCacheType to manage key "%s". This cache type is required.',
      'Email: Verify Address' => 'Email: Verify Address',
      'Activity Log ID: #%d' => 'Activity Log ID: #%s',
      'Can Disable Users' => 'Can Disable Users',
      'Research' => 'Research',
      'Some of the addresses you entered do not appear to be valid recipients. Review the table below. You can revise the address list, or ignore these errors and continue.' => 'Some of the addresses you entered do not appear to be valid recipients. Review the table below. You can revise the address list, or ignore these errors and continue.',
      'Try as you might, you find you can not disable your own account.' => 'Try as you might, you find you can not disable your own account.',
      'Create a new user for use with automated scripts.' => 'Create a new user for use with automated scripts.',
      '%s rejected this user.' => '%s rejected this user.',
      'You must be an administrator to approve users.' => 'You must be an administrator to approve users.',
      'External Account Identifier' => 'External Account Identifier',
      'Conduit: Read Certificate' => 'Conduit: Read Certificate',
      '**Why do bot accounts need an email address?**
    Although bots do not normally receive email from Phabricator, they can interact with other systems which require an email address. Examples include:
      - If the account takes actions which //send// email, we need     an address to use in the //From// header.
      - If the account creates commits, Git and Mercurial require     an email address for authorship.
      - If you send email //to// Phabricator on behalf of the     account, the address can identify the sender.
      - Some internal authentication functions depend on accounts     having an email address.
    The address will automatically be verified, so you do not need to be able to receive mail at this address, and can enter some invalid or nonexistent (but correctly formatted) address like `bot@yourcompany.com` if you prefer.' => '**Why do bot accounts need an email address?**
    Although bots do not normally receive email from Phabricator, they can interact with other systems which require an email address. Examples include:
      - If the account takes actions which //send// email, we need     an address to use in the //From// header.
      - If the account creates commits, Git and Mercurial require     an email address for authorship.
      - If you send email //to// Phabricator on behalf of the     account, the address can identify the sender.
      - Some internal authentication functions depend on accounts     having an email address.
    The address will automatically be verified, so you do not need to be able to receive mail at this address, and can enter some invalid or nonexistent (but correctly formatted) address like `bot@yourcompany.com` if you prefer.',
      'Approval Queue' => 'Approval Queue',
      'Spy' => 'Spy',
      'List of account roles.' => 'List of account roles.',
      'Mailing List' => 'Mailing List',
      'Administrators can always view all activity.' => 'Administrators can always view all activity.',
      'Only you can edit your information.' => 'Only you can edit your information.',
      'Unless you have a very good reason to delete this user, consider disabling them instead.' => 'Unless you have a very good reason to delete this user, consider disabling them instead.',
      'Edit Profile' => 'Edit Profile',
      'Show Only Mailing Lists' => 'Show Only Mailing Lists',
      'Verified email addresses can not be reassigned.' => 'Verified email addresses can not be reassigned.',
      'Browse Owners' => 'Browse Owners',
      'Enable a disabled user account.' => 'Enable a disabled user account.',
      'User is Disabled' => 'User is Disabled',
      'Shows when a user is away or busy.' => 'Shows when a user is away or busy.',
      'Send "Welcome to Phabricator" email with login instructions.' => 'Send "Welcome to Phabricator" email with login instructions.',
      'Select a user account to act on with "--user <username>".' => 'Select a user account to act on with "--user <username>".',
      'Hi %s' => 'Hi %s',
      'Retrieve information about the logged-in user.' => 'Retrieve information about the logged-in user.',
      'Search for particular types of activity.' => 'Search for particular types of activity.',
      'Log Out %s' => 'Log Out %s',
      'Disable %s? They will no longer be able to access Phabricator or receive email.' => 'Disable %s? They will no longer be able to access Phabricator or receive email.',
      'This workflow will send this user ("%s") a copy of the "Welcome to Phabricator" email that users normally receive when their accounts are created by an administrator.' => 'This workflow will send this user ("%s") a copy of the "Welcome to Phabricator" email that users normally receive when their accounts are created by an administrator.',
      'Configure creation and editing forms for users.' => 'Configure creation and editing forms for users.',
      'Re-enable specified users (admin only).' => 'Re-enable specified users (admin only).',
      '    Username: %s' => '    Username: %s',
      'Email Invitations' => 'Email Invitations',
      'Create New Mailing List' => 'Create New Mailing List',
      'You can not enable or disable your own account.' => 'You can not enable or disable your own account.',
      'Get Well Soon,
    Phabricator' => 'Get Well Soon,
    Phabricator',
      'Logout' => 'Logout',
      'Approve Account' => 'Approve Account',
      'Email has not been created yet!' => 'Email has not been created yet!',
      'This function includes results which have no owner. Use a query like this to find unassigned results:
    %s
    If you combine this function with other functions, the query will return results which match the other selectors //or// have no owner. For example, this query will find results which are owned by `alincoln`, and will also find results which have no owner:
    %s' => 'This function includes results which have no owner. Use a query like this to find unassigned results:
    %s
    If you combine this function with other functions, the query will return results which match the other selectors //or// have no owner. For example, this query will find results which are owned by `alincoln`, and will also find results which have no owner:
    %s',
      'You can use this login link to regain access to your Phabricator account:
      %s
    ' => 'You can use this login link to regain access to your Phabricator account:
      %s
    ',
      'Enable User?' => 'Enable User?',
      'Update Preview' => 'Update Preview',
      'Short blurb about the user.' => 'Short blurb about the user.',
      'IP' => 'IP',
      'Multi-Factor: Add Factor' => 'Multi-Factor: Add Factor',
      'Apply transactions to edit a user. (Users can not be created via the API.)' => 'Apply transactions to edit a user. (Users can not be created via the API.)',
      'Needs Approval' => 'Needs Approval',
      'Show Only Users With MFA' => 'Show Only Users With MFA',
      'Invites' => 'Invites',
      'Show Only Administrators' => 'Show Only Administrators',
      'Something Stays Your Hand' => 'Something Stays Your Hand',
      'Unapproved' => 'Unapproved',
      'Browse No Owner' => 'Browse No Owner',
      'New Username' => 'New Username',
      'User PHID' => 'User PHID',
      'External accounts can only be edited by the account owner.' => 'External accounts can only be edited by the account owner.',
      'The "Has MFA" query constraint may only be used by administrators, to prevent attackers from using it to target weak accounts.' => 'The "Has MFA" query constraint may only be used by administrators, to prevent attackers from using it to target weak accounts.',
      'Actor PHID' => 'Actor PHID',
      'You can not send welcome mail because you are not an administrator. Only administrators may send welcome mail.' => 'You can not send welcome mail because you are not an administrator. Only administrators may send welcome mail.',
      'User Since' => 'User Since',
      '%s enabled this user.' => '%s enabled this user.',
      'Create Bot User' => 'Create Bot User',
      'You can optionally include a heartfelt personal message in the email.' => 'You can optionally include a heartfelt personal message in the email.',
      'Email: Recovery Link' => 'Email: Recovery Link',
      'Account Type' => 'Account Type',
      'Show Only Unapproved Users' => 'Show Only Unapproved Users',
    );
  }

}
