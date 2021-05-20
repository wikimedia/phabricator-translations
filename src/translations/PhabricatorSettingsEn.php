<?php

final class PhabricatorSettingsEn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en';
  }

  protected function getTranslations() {
    return array(
      '12 Hour, 2:34 PM' => '12 Hour, 2:34 PM',
      'When a revision is updated, Phabricator attempts to bring inline comments on the older version forward to the new changes. You can disable this behavior if you prefer comments stay anchored in one place.' => 'When a revision is updated, Phabricator attempts to bring inline comments on the older version forward to the new changes. You can disable this behavior if you prefer comments stay anchored in one place.',
      'Default (%s)' => 'Default (%s)',
      'You haven\'t added any contact numbers to your account.' => 'You haven\'t added any contact numbers to your account.',
      'Conpherence Column Visible' => 'Conpherence Column Visible',
      'External Editor' => 'External Editor',
      'This web browser does not support desktop notifications. Only application notifications will be sent for this browser regardless of this preference.' => 'This web browser does not support desktop notifications. Only application notifications will be sent for this browser regardless of this preference.',
      'Choose Factor Type' => 'Choose Factor Type',
      'Page Titles' => 'Page Titles',
      'Personal Account Settings' => 'Personal Account Settings',
      'ISO 8601: 2000-02-28' => 'ISO 8601: 2000-02-28',
      'Global Default Settings' => 'Global Default Settings',
      'Self Actions' => 'Self Actions',
      'Choose which language you would like the Phabricator UI to use.' => 'Choose which language you would like the Phabricator UI to use.',
      'Email Notifications' => 'Email Notifications',
      'Show Unified Diffs' => 'Show Unified Diffs',
      'Diff Preferences' => 'Diff Preferences',
      'Saturday' => 'Saturday',
      'Change Primary Address' => 'Change Primary Address',
      'Send Stamps' => 'Send Stamps',
      'Show Older Inlines' => 'Show Older Inlines',
      'Select the format you prefer for editing dates.' => 'Select the format you prefer for editing dates.',
      'On Small Screens' => 'On Small Screens',
      'A verification email has been sent. Click the link in the email to verify your address.' => 'A verification email has been sent. Click the link in the email to verify your address.',
      'Enable Email Notifications' => 'Enable Email Notifications',
      'Generic Editor' => 'Generic Editor',
      'Edit global default settings for all users.' => 'Edit global default settings for all users.',
      'The **Add "Re:" Prefix** setting adds "Re:" in front of all messages, even if they are not replies. If you use **Mail.app** on Mac OS X, this may improve mail threading.
    | Setting                | Example Mail Subject
    |------------------------|----------------
    | Enable "Re:" Prefix  | `Re: [Differential] [Accepted] D123: Example Revision`
    | Disable "Re:" Prefix | `[Differential] [Accepted] D123: Example Revision`' => 'The **Add "Re:" Prefix** setting adds "Re:" in front of all messages, even if they are not replies. If you use **Mail.app** on Mac OS X, this may improve mail threading.
    | Setting                | Example Mail Subject
    |------------------------|----------------
    | Enable "Re:" Prefix  | `Re: [Differential] [Accepted] D123: Example Revision`
    | Disable "Re:" Prefix | `[Differential] [Accepted] D123: Example Revision`',
      'No settings panels are available.' => 'No settings panels are available.',
      'Empty string is not a valid setting for "%s".' => 'Empty string is not a valid setting for "%s".',
      'Adjust Timezone' => 'Adjust Timezone',
      '%s updated her profile' => '%s updated her profile',
      'Add Contact Number' => 'Add Contact Number',
      'With **Vary Subjects** enabled, most mail subject lines will include a brief description of their content, like `[Closed]` for a notification about someone closing a task.
    | Setting              | Example Mail Subject
    |----------------------|----------------
    | Vary Subjects        | `[Maniphest] [Closed] T123: Example Task`
    | Do Not Vary Subjects | `[Maniphest] T123: Example Task`
    This can make mail more useful, but some clients have difficulty threading these messages. Disabling this option may improve threading at the cost of making subject lines less useful.' => 'With **Vary Subjects** enabled, most mail subject lines will include a brief description of their content, like `[Closed]` for a notification about someone closing a task.
    | Setting              | Example Mail Subject
    |----------------------|----------------
    | Vary Subjects        | `[Maniphest] [Closed] T123: Example Task`
    | Do Not Vary Subjects | `[Maniphest] T123: Example Task`
    This can make mail more useful, but some clients have difficulty threading these messages. Disabling this option may improve threading at the cost of making subject lines less useful.',
      'Value "%s" is not valid for setting "%s": valid values are %s.' => 'Value "%s" is not valid for setting "%s": valid values are %s.',
      'You can opt to receive plain text email from Phabricator instead of HTML email. Plain text email works better with some clients.' => 'You can opt to receive plain text email from Phabricator instead of HTML email. Plain text email works better with some clients.',
      'Extra Settings' => 'Extra Settings',
      'Are you sure you want to delete this address? You will no longer be able to use it to login.' => 'Are you sure you want to delete this address? You will no longer be able to use it to login.',
      'You can customize the font used when showing monospaced text, including source code. You should enter a valid CSS font declaration like: `13px Consolas`' => 'You can customize the font used when showing monospaced text, including source code. You should enter a valid CSS font declaration like: `13px Consolas`',
      'Enable Self Action Mail' => 'Enable Self Action Mail',
      'You haven\'t added any SSH Public Keys.' => 'You haven\'t added any SSH Public Keys.',
      'MacVim' => 'MacVim',
      'All Messages' => 'All Messages',
      'This browser has been granted permission to send desktop notifications for this Phabricator instance.' => 'This browser has been granted permission to send desktop notifications for this Phabricator instance.',
      'Save Preference' => 'Save Preference',
      'Email Format' => 'Email Format',
      'Your browser timezone and profile timezone are now in agreement (%s).' => 'Your browser timezone and profile timezone are now in agreement (%s).',
      'Edit Authentication Factor' => 'Edit Authentication Factor',
      'Changing your password will terminate any other outstanding login sessions.' => 'Changing your password will terminate any other outstanding login sessions.',
      'You have no linked accounts.' => 'You have no linked accounts.',
      'Active Login Sessions' => 'Active Login Sessions',
      'Edit Global Settings' => 'Edit Global Settings',
      'Ignore Conflict' => 'Ignore Conflict',
      'Vary Subjects' => 'Vary Subjects',
      'Delete Authentication Factor' => 'Delete Authentication Factor',
      '%s updated their profile' => '%s updated their profile',
      'Current Setting' => 'Current Setting',
      'Visual Studio Code' => 'Visual Studio Code',
      'Provider: %s' => 'Provider: %s',
      'Use Variable-Width Font' => 'Use Variable-Width Font',
      'Use Plain Text: [Differential]' => 'Use Plain Text: [Differential]',
      '⚪ Ignore' => '⚪ Ignore',
      'Date Format' => 'Date Format',
      'Your browser timezone (%s) differs from your profile timezone (%s). You can ignore this conflict or adjust your profile setting to match your client.' => 'Your browser timezone (%s) differs from your profile timezone (%s). You can ignore this conflict or adjust your profile setting to match your client.',
      'This install does not have any active MFA providers configured. At least one provider must be configured and active before you can add new MFA factors.' => 'This install does not have any active MFA providers configured. At least one provider must be configured and active before you can add new MFA factors.',
      'Select the format you prefer for editing and displaying time.' => 'Select the format you prefer for editing and displaying time.',
      'The conflict between your browser and profile timezone settings will be ignored.' => 'The conflict between your browser and profile timezone settings will be ignored.',
      'Terminate All Sessions' => 'Terminate All Sessions',
      'Your account is linked with all available providers.' => 'Your account is linked with all available providers.',
      'Timezone Ignored Offset' => 'Timezone Ignored Offset',
      'External Accounts' => 'External Accounts',
      'If you disable **Self Actions**, Phabricator will not notify you about actions you take.' => 'If you disable **Self Actions**, Phabricator will not notify you about actions you take.',
      'Verification Email Sent' => 'Verification Email Sent',
      'Add External Account' => 'Add External Account',
      'Mail Headers and Body' => 'Mail Headers and Body',
      'You haven\'t added any authentication factors to your account yet.' => 'You haven\'t added any authentication factors to your account yet.',
      'To set a new password, request a password reset link from the login screen and then follow the instructions.' => 'To set a new password, request a password reset link from the login screen and then follow the instructions.',
      'Multi-Factor Auth' => 'Multi-Factor Auth',
      'You can choose to use either a monospaced or variable-width font in textareas in the UI. Textareas are used for editing descriptions and writing comments, among other things.' => 'You can choose to use either a monospaced or variable-width font in textareas in the UI. Textareas are used for editing descriptions and writing comments, among other things.',
      'Disable Self Action Mail' => 'Disable Self Action Mail',
      'Filetree Visible' => 'Filetree Visible',
      'Grant Permission' => 'Grant Permission',
      'Edit Settings Configurations' => 'Edit Settings Configurations',
      'Monospaced Textareas' => 'Monospaced Textareas',
      'Really remove the authentication factor %s from your account?' => 'Really remove the authentication factor %s from your account?',
      'Mail Headers' => 'Mail Headers',
      'Old Password' => 'Old Password',
      'Conpherence Column Minimize' => 'Conpherence Column Minimize',
      'Display Preferences' => 'Display Preferences',
      'Add Auth Factor' => 'Add Auth Factor',
      'You don\'t have any active sessions.' => 'You don\'t have any active sessions.',
      'Changes saved.' => 'Changes saved.',
      'Authentication factors must have a name to identify them.' => 'Authentication factors must have a name to identify them.',
      'Choose the default behavior of the global search in the main menu.' => 'Choose the default behavior of the global search in the main menu.',
      'Hypertext Transfer Protocol' => 'Hypertext Transfer Protocol',
      'Diffusion Blame' => 'Diffusion Blame',
      'The dialog asking for permission to send desktop notifications was closed without granting permission. Only application notifications will be sent.' => 'The dialog asking for permission to send desktop notifications was closed without granting permission. Only application notifications will be sent.',
      'Really delete address \'%s\'?' => 'Really delete address \'%s\'?',
      'Another user already has this email.' => 'Another user already has this email.',
      'Change primary email address?' => 'Change primary email address?',
      'Monospaced Font' => 'Monospaced Font',
      'HTML Email' => 'HTML Email',
      'Global Defaults' => 'Global Defaults',
      'Conpherence Sound' => 'Conpherence Sound',
      'Enable "Re:" Prefix' => 'Enable "Re:" Prefix',
      'Phabricator can send real-time notifications to your web browser or to your desktop. Select where you want to receive these real-time updates.' => 'Phabricator can send real-time notifications to your web browser or to your desktop. Select where you want to receive these real-time updates.',
      'Change Timezone' => 'Change Timezone',
      'DarkConsole Visible' => 'DarkConsole Visible',
      'DarkConsole is a debugging console for developing and troubleshooting Phabricator applications. After enabling DarkConsole, press the {nav `} key on your keyboard to toggle it on or off.' => 'DarkConsole is a debugging console for developing and troubleshooting Phabricator applications. After enabling DarkConsole, press the {nav `} key on your keyboard to toggle it on or off.',
      'Supported Protocol' => 'Supported Protocol',
      'You are adding too many email addresses to your account too quickly.' => 'You are adding too many email addresses to your account too quickly.',
      'You can adjust **Application Settings** here to customize when you are emailed and notified.
    | Setting | Effect
    | ------- | -------
    | Email | You will receive an email and a notification, but the notification will be marked "read".
    | Notify | You will receive an unread notification only.
    | Ignore | You will receive nothing.
    If an update makes several changes (like adding CCs to a task, closing it, and adding a comment) you will receive the strongest notification any of the changes is configured to deliver.
    These preferences **only** apply to objects you are connected to (for example, Revisions where you are a reviewer or tasks you are CC\'d on). To receive email alerts when other objects are created, configure [[ /herald/ | Herald Rules ]].' => 'You can adjust **Application Settings** here to customize when you are emailed and notified.
    | Setting | Effect
    | ------- | -------
    | Email | You will receive an email and a notification, but the notification will be marked "read".
    | Notify | You will receive an unread notification only.
    | Ignore | You will receive nothing.
    If an update makes several changes (like adding CCs to a task, closing it, and adding a comment) you will receive the strongest notification any of the changes is configured to deliver.
    These preferences **only** apply to objects you are connected to (for example, Revisions where you are a reviewer or tasks you are CC\'d on). To receive email alerts when other objects are created, configure [[ /herald/ | Herald Rules ]].',
      'You must enter your current password.' => 'You must enter your current password.',
      'Europe: 28-02-2000' => 'Europe: 28-02-2000',
      'The old password you entered is incorrect.' => 'The old password you entered is incorrect.',
      '◐ Notify' => '◐ Notify',
      'This browser has denied permission to send desktop notifications for this Phabricator instance. Consult your browser settings / documentation to figure out how to clear this setting, do so, and then re-visit this page to grant permission.' => 'This browser has denied permission to send desktop notifications for this Phabricator instance. Consult your browser settings / documentation to figure out how to clear this setting, do so, and then re-visit this page to grant permission.',
      '%s updated his profile' => '%s updated his profile',
      'You can change your date and time preferences in Settings.' => 'You can change your date and time preferences in Settings.',
      'Timezone Calibrated' => 'Timezone Calibrated',
      'Limited Translations' => 'Limited Translations',
      'Email Delivery' => 'Email Delivery',
      'Send Test Notification' => 'Send Test Notification',
      'Monospaced font value "%s" is unsafe. You may only enter letters, numbers, spaces, commas, periods, hyphens, forward slashes, and double quotes' => 'Monospaced font value "%s" is unsafe. You may only enter letters, numbers, spaces, commas, periods, hyphens, forward slashes, and double quotes',
      'Edit settings for your personal account.' => 'Edit settings for your personal account.',
      'Create Settings' => 'Create Settings',
      'Many text editors can be configured as URI handlers for special protocols like `editor://`. If you have installed and configured such an editor, Phabricator can generate links that you can click to open files locally.
    Provide a URI pattern for building external editor URIs in your environment. For example, if you use TextMate on macOS, the pattern for your machine may look something like this:
    ```name="Example: TextMate on macOS"
    %s
    ```
    For complete instructions on editor configuration, see **[[ %s | %s ]]**.
    See the tables below for a list of supported variables and protocols.' => 'Many text editors can be configured as URI handlers for special protocols like `editor://`. If you have installed and configured such an editor, Phabricator can generate links that you can click to open files locally.
    Provide a URI pattern for building external editor URIs in your environment. For example, if you use TextMate on macOS, the pattern for your machine may look something like this:
    ```name="Example: TextMate on macOS"
    %s
    ```
    For complete instructions on editor configuration, see **[[ %s | %s ]]**.
    See the tables below for a list of supported variables and protocols.',
      'Use Unicode Glyphs: ⚙' => 'Use Unicode Glyphs: ⚙',
      'Editor Link' => 'Editor Link',
      'Silly Translations' => 'Silly Translations',
      'Send Plain Text Email' => 'Send Plain Text Email',
      'DarkConsole' => 'DarkConsole',
      'Filetree Width' => 'Filetree Width',
      'Hypertext Transfer Protocol over SSL' => 'Hypertext Transfer Protocol over SSL',
      'Phabricator normally shows diffs in a side-by-side layout on large screens and automatically switches to a unified view on small screens (like mobile phones). If you prefer unified diffs even on large screens, you can select them for use on all displays.' => 'Phabricator normally shows diffs in a side-by-side layout on large screens and automatically switches to a unified view on small screens (like mobile phones). If you prefer unified diffs even on large screens, you can select them for use on all displays.',
      'Search Scope' => 'Search Scope',
      'Email Preferences' => 'Email Preferences',
      'You don\'t have any active tokens.' => 'You don\'t have any active tokens.',
      'Send another copy of the verification email to %s?' => 'Send another copy of the verification email to %s?',
      '24 Hour, 14:34' => '24 Hour, 14:34',
      'If you disable **Email Notifications**, Phabricator will never send email to notify you about events. This preference overrides all your other settings.
    //You will still receive some administrative email, like password reset email.//' => 'If you disable **Email Notifications**, Phabricator will never send email to notify you about events. This preference overrides all your other settings.
    //You will still receive some administrative email, like password reset email.//',
      'Disable "Re:" Prefix' => 'Disable "Re:" Prefix',
      'Sublime Text' => 'Sublime Text',
      'Conpherence Widget Pane Visible' => 'Conpherence Widget Pane Visible',
      'Disable Email Notifications' => 'Disable Email Notifications',
      'Phabricator uses unicode glyphs in page titles to provide a compact representation of the current application. You can substitute plain text instead if these glyphs do not display on your system.' => 'Phabricator uses unicode glyphs in page titles to provide a compact representation of the current application. You can substitute plain text instead if these glyphs do not display on your system.',
      'Expired' => 'Expired',
      'No Notifications' => 'No Notifications',
      'Vim' => 'Vim',
      'Password Algorithms' => 'Password Algorithms',
      'This browser has not yet granted permission to send desktop notifications for this Phabricator instance.' => 'This browser has not yet granted permission to send desktop notifications for this Phabricator instance.',
      'Your password is currently hashed using an algorithm which is no longer available on this install.' => 'Your password is currently hashed using an algorithm which is no longer available on this install.',
      'Replaced With' => 'Replaced With',
      'Send HTML Email' => 'Send HTML Email',
      'Translation' => 'Translation',
      'Settings %d' => 'Settings %s',
      'Time Format' => 'Time Format',
      'Permission for desktop notifications was denied. Only application notifications will be sent.' => 'Permission for desktop notifications was denied. Only application notifications will be sent.',
      'Send Notifications' => 'Send Notifications',
      'Number' => 'Number',
      'Permanently Linked' => 'Permanently Linked',
      'Account Setup Issues' => 'Account Setup Issues',
      'Authentication Factors' => 'Authentication Factors',
      'Web and Desktop' => 'Web and Desktop',
      'Sunday' => 'Sunday',
      'US: 2/28/2000' => 'US: 2/28/2000',
      'External Editor URI Variables' => 'External Editor URI Variables',
      'User Guide: Configuring an External Editor' => 'User Guide: Configuring an External Editor',
      'You have no account setup issues.' => 'You have no account setup issues.',
      'Personal Settings' => 'Personal Settings',
      'Web Only' => 'Web Only',
      'Disable Vary Subjects' => 'Disable Vary Subjects',
      'Developer/Test Translations' => 'Developer/Test Translations',
      'User Preferences' => 'User Preferences',
      'No Sounds' => 'No Sounds',
      'Create Global Defaults' => 'Create Global Defaults',
      'Enable Vary Subjects' => 'Enable Vary Subjects',
      'TextMate' => 'TextMate',
      'No MFA Providers' => 'No MFA Providers',
      'There is no known application setting with key "%s".' => 'There is no known application setting with key "%s".',
      'Choose the default sound behavior for new Conpherence rooms.' => 'Choose the default sound behavior for new Conpherence rooms.',
      'Policy Favorites' => 'Policy Favorites',
      'If you have difficulty reading the Phabricator UI, this setting may make Phabricator more accessible.' => 'If you have difficulty reading the Phabricator UI, this setting may make Phabricator more accessible.',
      'Conpherence Notifications' => 'Conpherence Notifications',
      'Friday' => 'Friday',
      'Timezone "%s" is not a valid timezone identifier.' => 'Timezone "%s" is not a valid timezone identifier.',
      'Select your local timezone.' => 'Select your local timezone.',
      'Note: Removing an email address from your account will invalidate any outstanding password reset links.' => 'Note: Removing an email address from your account will invalidate any outstanding password reset links.',
      'Click "Save Preference" to persist these changes.' => 'Click "Save Preference" to persist these changes.',
      'Week Starts On' => 'Week Starts On',
      'Emacs' => 'Emacs',
      'Remove Factor' => 'Remove Factor',
      'Your account does not currently have a password set. You can choose a password by performing a password reset.' => 'Your account does not currently have a password set. You can choose a password by performing a password reset.',
      '' => '',
      'Disabled (an administrator has disabled login for this account provider).' => 'Disabled (an administrator has disabled login for this account provider).',
      'IntelliJ IDEA' => 'IntelliJ IDEA',
      'If you change your primary address, Phabricator will send all email to %s.' => 'If you change your primary address, Phabricator will send all email to %s.',
      'Send Another Verification Email?' => 'Send Another Verification Email?',
      'Because the algorithm implementation is missing, your password can not be used or updated.' => 'Because the algorithm implementation is missing, your password can not be used or updated.',
      'Verify' => 'Verify',
      'Edit Settings: %s' => 'Edit Settings: %s',
      'Add "Re:" Prefix' => 'Add "Re:" Prefix',
      'Desktop Only' => 'Desktop Only',
      'Account Settings' => 'Account Settings',
      'View Configuration' => 'View Configuration',
      'Supported Editor Protocols' => 'Supported Editor Protocols',
      'Add Authentication Factor' => 'Add Authentication Factor',
      'Choose which day a calendar week should begin on.' => 'Choose which day a calendar week should begin on.',
      'Account Activity Logs' => 'Account Activity Logs',
      'Date and Time' => 'Date and Time',
      'Use Monospaced Font' => 'Use Monospaced Font',
      'The strength of your stored password hash can be upgraded. To upgrade, either: log out and log in using your password; or change your password.' => 'The strength of your stored password hash can be upgraded. To upgrade, either: log out and log in using your password; or change your password.',
      'Save Preferences' => 'Save Preferences',
      'Phabricator is not configured to allow any editor protocols.' => 'Phabricator is not configured to allow any editor protocols.',
      '⚫ Email' => '⚫ Email',
      'New Setting' => 'New Setting',
      'Pronoun' => 'Pronoun',
      'Choose the default notification behavior for Conpherence rooms.' => 'Choose the default notification behavior for Conpherence rooms.',
      'DarkConsole Tab' => 'DarkConsole Tab',
      'Note: Changing your primary email address will invalidate any outstanding password reset links.' => 'Note: Changing your primary email address will invalidate any outstanding password reset links.',
      'Sessions and Logs' => 'Sessions and Logs',
      'Your primary email address is unverified. You will not be able to receive email until you verify it.' => 'Your primary email address is unverified. You will not be able to receive email until you verify it.',
      'Pinned Applications' => 'Pinned Applications',
      'Revoke All' => 'Revoke All',
      'No settings panel group with key "%s" exists!' => 'No settings panel group with key "%s" exists!',
      'Linked Accounts and Authentication' => 'Linked Accounts and Authentication',
      'Choose the pronoun you prefer.' => 'Choose the pronoun you prefer.',
      'Conflict Ignored' => 'Conflict Ignored',
      'This engine is used to edit settings.' => 'This engine is used to edit settings.',
      'Default (Unknown, "%s")' => 'Default (Unknown, "%s")',
      'Primary Email Unverified' => 'Primary Email Unverified',
      'HiSec' => 'HiSec',
    );
  }

}
