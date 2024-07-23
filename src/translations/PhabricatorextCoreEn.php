<?php

final class PhabricatorextCoreEn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en';
  }

  protected function getTranslations() {
    return array(
      'Escalate' => 'Escalate',
      'Next: %s' => 'Next: %s',
      'Standard Phabricator.' => 'Standard Phabricator.',
      'Auto-generated release schedule details.' => 'Auto-generated release schedule details.',
      'Consumer Token' => 'Consumer Token',
      'This adds a link to search Maniphest for open tasks which are tagged with this project.\\n\\nNOTE: This feature is provided by a Wikimedia-maintained extension in ProjectOpenTasksProfileMenuItem.php. See https://gitlab.wikimedia.org/repos/phabricator/extensions for the source.' => 'This adds a link to search Maniphest for open tasks which are tagged with this project.\\n\\nNOTE: This feature is provided by a Wikimedia-maintained extension in ProjectOpenTasksProfileMenuItem.php. See https://gitlab.wikimedia.org/repos/phabricator/extensions for the source.',
      'Merged' => 'Merged',
      'Unresolved code review comments: %d' => 'Unresolved code review comments: %s',
      'Customize query in gerrit' => 'Customize query in gerrit',
      'Cannot Lock Task' => 'Cannot Lock Task',
      'Deploy `%s` to %s Wikis.' => 'Deploy `%s` to %s Wikis.',
      'Unknown objectType \'%s\'' => 'Unknown objectType \'%s\'',
      'You do not have permission to escalate tasks as security issues. This action can only be taken by authorized users.' => 'You do not have permission to escalate tasks as security issues. This action can only be taken by authorized users.',
      'Show related patches' => 'Show related patches',
      'Related Links' => 'Related Links',
      'No deployments on fridays' => 'No deployments on fridays',
      'You must provide either a username or userPHID' => 'You must provide either a username or userPHID',
      'MediaWiki base URI is required.' => 'MediaWiki base URI is required.',
      'Unknown policies: %s' => 'Unknown policies: %s',
      'OAuth JWT nonce didn\'t match what we sent.' => 'OAuth JWT nonce didn\'t match what we sent.',
      'Protect as security issue' => 'Protect as security issue',
      'OAuth JWT iss didn\'t match expected server name' => 'OAuth JWT iss didn\'t match expected server name',
      'Show verbose output.' => 'Show verbose output.',
      'OAuth JWT wasn\'t valid at this time' => 'OAuth JWT wasn\'t valid at this time',
      'Any serious bugs affecting `%s` should be added as subtasks beneath this one.' => 'Any serious bugs affecting `%s` should be added as subtasks beneath this one.',
      'The username for whom transactions will be rolled back.' => 'The username for whom transactions will be rolled back.',
      'No "security" task subtype is defined in "maniphest.subtypes" in this installation. Please file a bug report.' => 'No "security" task subtype is defined in "maniphest.subtypes" in this installation. Please file a bug report.',
      'ChangeId' => 'ChangeId',
      'Only admins can call this API' => 'Only admins can call this API',
      'OAuth provider returned an error response.' => 'OAuth provider returned an error response.',
      'Ensure Security Task Policies are Enforced' => 'Ensure Security Task Policies are Enforced',
      'Release Details' => 'Release Details',
      'Allow' => 'Allow',
      'This MediaWiki Train Deployment is scheduled for the week of' => 'This MediaWiki Train Deployment is scheduled for the week of',
      'WIP - Work in Progress' => 'WIP - Work in Progress',
      'Query users by ldap username.' => 'Query users by ldap username.',
      'LDAP User' => 'LDAP User',
      'Related Changes in GitLab:' => 'Related Changes in GitLab:',
      'Invalid action \'%s\'!' => 'Invalid action \'%s\'!',
      'Shows the gerrit Change ID for a commit.' => 'Shows the gerrit Change ID for a commit.',
      'This adds a link to the burnup graph of this project.\\n\\nNOTE: This feature is provided by a Wikimedia-maintained extension in ProjectBurnupGraphProfileMenuItem.php. See https://gitlab.wikimedia.org/repos/phabricator/extensions for the source.' => 'This adds a link to the burnup graph of this project.\\n\\nNOTE: This feature is provided by a Wikimedia-maintained extension in ProjectBurnupGraphProfileMenuItem.php. See https://gitlab.wikimedia.org/repos/phabricator/extensions for the source.',
      'MediaWiki' => 'MediaWiki',
      'MediaWiki Base URI' => 'MediaWiki Base URI',
      'Burnup Graph' => 'Burnup Graph',
      'Change type to "%s."' => 'Change type to "%s."',
      'Execute searches for Policies.' => 'Execute searches for Policies.',
      'Find public transactions by a particular user.' => 'Find public transactions by a particular user.',
      'Skip OFFSET rows before processing the remaining transactions.' => 'Skip OFFSET rows before processing the remaining transactions.',
      'Execute a rollback.' => 'Execute a rollback.',
      '**Step 2 of 2**: Create a MediaWiki OAuth consumer for this Phabricator instance.
    NOTE: Propose an OAuth 1.0a consumer with the form at this URL: %s
    Provide the following settings on the consumer registration:
      - **OAuth "callback" URL:** Set this to: `%s`
      - **Allow consumer to specify a callback in requests and use "callback" URL above as a required prefix:** Enable this setting.
      - **Applicable grants:** `Basic Rights` is all that is needed for authentication.
    After you register the consumer, a **Consumer Token** and consumer **Secret Token** will be provided to you by MediaWiki. To complete configuration of Phabricator, copy the provided keys into the corresponding fields above.
    NOTE: Before Phabricator can successfully authenticate to your MediaWiki, a wiki admin must approve the OAuth consumer registration using the form which can be found at the following url: %s' => '**Step 2 of 2**: Create a MediaWiki OAuth consumer for this Phabricator instance.
    NOTE: Propose an OAuth 1.0a consumer with the form at this URL: %s
    Provide the following settings on the consumer registration:
      - **OAuth "callback" URL:** Set this to: `%s`
      - **Allow consumer to specify a callback in requests and use "callback" URL above as a required prefix:** Enable this setting.
      - **Applicable grants:** `Basic Rights` is all that is needed for authentication.
    After you register the consumer, a **Consumer Token** and consumer **Secret Token** will be provided to you by MediaWiki. To complete configuration of Phabricator, copy the provided keys into the corresponding fields above.
    NOTE: Before Phabricator can successfully authenticate to your MediaWiki, a wiki admin must approve the OAuth consumer registration using the form which can be found at the following url: %s',
      'Deny' => 'Deny',
      'Invalid' => 'Invalid',
      'Blocked on Code Review - Needs Changes' => 'Blocked on Code Review - Needs Changes',
      'View Change in Gerrit' => 'View Change in Gerrit',
      'You must disable the user before rolling back their activity' => 'You must disable the user before rolling back their activity',
      'Link to Open Tasks' => 'Link to Open Tasks',
      'MediaWiki Instance Name' => 'MediaWiki Instance Name',
      'Secret Token' => 'Secret Token',
      'Secret Token is required' => 'Secret Token is required',
      'Limit the number of transaction rows to process. Default: 10000' => 'Limit the number of transaction rows to process. Default: 10000',
      'objectType is required.' => 'objectType is required.',
      'Unknown or missing ldap names: %s' => 'Unknown or missing ldap names: %s',
      'NOTE: Copy the keys generated by the MediaWiki OAuth consumer registration and paste them here.' => 'NOTE: Copy the keys generated by the MediaWiki OAuth consumer registration and paste them here.',
      'Invalid rule class \'%s\'!' => 'Invalid rule class \'%s\'!',
      'Phabricator transaction rollback tool.' => 'Phabricator transaction rollback tool.',
      'This task has no related gerrit patches.' => 'This task has no related gerrit patches.',
      'Gerrit Patches' => 'Gerrit Patches',
      'This task has no related GitLab merge requests.' => 'This task has no related GitLab merge requests.',
      'Customize query in GitLab' => 'Customize query in GitLab',
      'You must provide either --user or --user-phid' => 'You must provide either --user or --user-phid',
      'For more info about deployment blockers, see [[ https://wikitech.wikimedia.org/wiki/Deployments/Holding_the_train | Holding the train ]].' => 'For more info about deployment blockers, see [[ https://wikitech.wikimedia.org/wiki/Deployments/Holding_the_train | Holding the train ]].',
      'Sort by Last Update' => 'Sort by Last Update',
      'Consumer Token is required' => 'Consumer Token is required',
      '%s Line(s) removed' => '%s Line(s) removed',
      'Escalate security issue' => 'Escalate security issue',
      'OAuth JWT aud didn\'t match expected consumer key' => 'OAuth JWT aud didn\'t match expected consumer key',
      'Related Changes in Gerrit:' => 'Related Changes in Gerrit:',
      'Code Review Started' => 'Code Review Started',
      'Enable expert mode to reveal additional "advanced" options in the Phabricator UI.' => 'Enable expert mode to reveal additional "advanced" options in the Phabricator UI.',
      'Changed Type' => 'Changed Type',
      'OAuth error: Login failed because your MediaWiki account "%s" is blocked' => 'OAuth error: Login failed because your MediaWiki account "%s" is blocked',
      'Enforce Task Security Policy' => 'Enforce Task Security Policy',
      'Hide Instructions' => 'Hide Instructions',
      'Rules do not have any effect.' => 'Rules do not have any effect.',
      '**Step 1 of 2**: Provide the name and URI for your MediaWiki install.
    In the next step, you will create an OAuth consumer in MediaWiki to be used by Phabricator OAuth.' => '**Step 1 of 2**: Provide the name and URI for your MediaWiki install.
    In the next step, you will create an OAuth consumer in MediaWiki to be used by Phabricator OAuth.',
      'users subscribed to' => 'users subscribed to',
      'Execute a dry run, changes will not be writen back to the database.' => 'Execute a dry run, changes will not be writen back to the database.',
      'PHIDs required' => 'PHIDs required',
      'Cannot Protect as Security Issue' => 'Cannot Protect as Security Issue',
      'Branch `%s` and deploy to %s Wikis.' => 'Branch `%s` and deploy to %s Wikis.',
      'No project tags "Security" and "Security-Team" exist in this installation. Please file a bug report.' => 'No project tags "Security" and "Security-Team" exist in this installation. Please file a bug report.',
      'Expert Mode.' => 'Expert Mode.',
      'No project tag "acl*security" exists in this installation. Please file a bug report.' => 'No project tag "acl*security" exists in this installation. Please file a bug report.',
      'The specified username / userPHID was not found' => 'The specified username / userPHID was not found',
      'See https://wikitech.wikimedia.org/wiki/Deployments for full schedule.' => 'See https://wikitech.wikimedia.org/wiki/Deployments for full schedule.',
      'You cannot lock this task because it is already protected by a custom security policy.' => 'You cannot lock this task because it is already protected by a custom security policy.',
      'Wikimedia Customizations' => 'Wikimedia Customizations',
      'Missing or malformed parameter.' => 'Missing or malformed parameter.',
      'MediaWiki base URI should include protocol (like "https://").' => 'MediaWiki base URI should include protocol (like "https://").',
      'How this works' => 'How this works',
      'Create custom access control policy objects.' => 'Create custom access control policy objects.',
      'Use [[%s|this form]] to create one.' => 'Use [[%s|this form]] to create one.',
      'MediaWiki User' => 'MediaWiki User',
      'Change type to' => 'Change type to',
      'Reset security settings' => 'Reset security settings',
      'Open Tasks' => 'Open Tasks',
      'Unknown' => 'Unknown',
      '**MediaWiki Instance Name**
    Choose a permanent name for this instance of MediaWiki. Phabricator uses this name internally to keep track of this instance of MediaWiki, in case the URL changes later.
    Use lowercase letters, digits, and period. For example: 
    `mediawiki`, `mediawiki.mycompany` or `mediawiki.engineering` are reasonable names.' => '**MediaWiki Instance Name**
    Choose a permanent name for this instance of MediaWiki. Phabricator uses this name internally to keep track of this instance of MediaWiki, in case the URL changes later.
    Use lowercase letters, digits, and period. For example: 
    `mediawiki`, `mediawiki.mycompany` or `mediawiki.engineering` are reasonable names.',
      'GitLab Patches' => 'GitLab Patches',
      'Global Accounts' => 'Global Accounts',
      'Milestone Navigation Links' => 'Milestone Navigation Links',
      'Previous: %s' => 'Previous: %s',
      'Query users by MediaWiki username.' => 'Query users by MediaWiki username.',
      'Expand Instructions' => 'Expand Instructions',
      'You cannot roll back the activity of a privileged user.' => 'You cannot roll back the activity of a privileged user.',
      'Any open subtask(s) block the train from moving forward. This means no further deployments until the blockers are resolved.' => 'Any open subtask(s) block the train from moving forward. This means no further deployments until the blockers are resolved.',
      'The full URL to your MediaWiki install, up to but not including "index.php"' => 'The full URL to your MediaWiki install, up to but not including "index.php"',
      'This panel shows navigation links to other milestones in the same series.' => 'This panel shows navigation links to other milestones in the same series.',
      'Expert Mode' => 'Expert Mode',
      'Unknown or missing mediawiki names: %s' => 'Unknown or missing mediawiki names: %s',
      'After reverting transactions, delete the reverted transaction records.' => 'After reverting transactions, delete the reverted transaction records.',
      'No Permission' => 'No Permission',
      'Series Navigation' => 'Series Navigation',
      'Required' => 'Required',
      'Number of open tasks over time' => 'Number of open tasks over time',
      'Abandoned' => 'Abandoned',
      '%s Line(s) added' => '%s Line(s) added',
      'If something is serious enough to warrant a rollback then you should bring it to the attention of deployers on the [[ https://www.mediawiki.org/wiki/MediaWiki_on_IRC | #wikimedia-operations IRC channel ]].' => 'If something is serious enough to warrant a rollback then you should bring it to the attention of deployers on the [[ https://www.mediawiki.org/wiki/MediaWiki_on_IRC | #wikimedia-operations IRC channel ]].',
      'If you have a risky change in this week\'s train add a comment to this task using the {icon train spin}{icon fire color=red} [[ https://wikitech.wikimedia.org/wiki/Deployments/Risky_change_template | Risky patch template ]]' => 'If you have a risky change in this week\'s train add a comment to this task using the {icon train spin}{icon fire color=red} [[ https://wikitech.wikimedia.org/wiki/Deployments/Risky_change_template | Risky patch template ]]',
      'Link to Burnup Graph' => 'Link to Burnup Graph',
      'Comments' => 'Comments',
      'Change type to "%s"' => 'Change type to "%s"',
    );
  }

}
