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
      'Provides instructions for applying a local patch using just git.' => 'Provides instructions for applying a local patch using just git.',
      'Standard Phabricator.' => 'Standard Phabricator.',
      'Auto-generated release schedule details.' => 'Auto-generated release schedule details.',
      '**MediaWiki Instance Name**
    Choose a permanent name for this instance of MediaWiki.Phabricator uses this name internally to keep track of this instance of MediaWiki, in case the URL changes later.
    Use lowercase letters, digits, and period. For example: 
    `mediawiki`, `mediawiki.mycompany` or `mediawiki.engineering` are reasonable names.' => '**MediaWiki Instance Name**
    Choose a permanent name for this instance of MediaWiki.Phabricator uses this name internally to keep track of this instance of MediaWiki, in case the URL changes later.
    Use lowercase letters, digits, and period. For example: 
    `mediawiki`, `mediawiki.mycompany` or `mediawiki.engineering` are reasonable names.',
      'Merged' => 'Merged',
      '**Step 2 of 2**: Create a MediaWiki auth consumer for this Phabricator instance.
    NOTE: Propose a consumer with the form at this url: %s
    Provide the following settings on the consumer registration:
      - **Callback URL:** Set this to: `%s`
      - **Grants:** `Basic Rights` is all that is needed for authentication.
    After you register the consumer, a **Consumer Key** and **Consumer Secret** will be provided to you by MediaWiki. To complete configuration of phabricator, copy the provided keys into the corresponding fields above.
    NOTE: Before Phabricator can successfully authenticate to your MediaWiki, a wiki admin must approve the oauth consumer registration using the form which can be found at the following url: %s' => '**Step 2 of 2**: Create a MediaWiki auth consumer for this Phabricator instance.
    NOTE: Propose a consumer with the form at this url: %s
    Provide the following settings on the consumer registration:
      - **Callback URL:** Set this to: `%s`
      - **Grants:** `Basic Rights` is all that is needed for authentication.
    After you register the consumer, a **Consumer Key** and **Consumer Secret** will be provided to you by MediaWiki. To complete configuration of phabricator, copy the provided keys into the corresponding fields above.
    NOTE: Before Phabricator can successfully authenticate to your MediaWiki, a wiki admin must approve the oauth consumer registration using the form which can be found at the following url: %s',
      'Gerrit Projects' => 'Gerrit Projects',
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
      'Secret Key' => 'Secret Key',
      'This adds a link to search maniphest for open tasks which are tagged with this project.
    NOTE: This feature is provided by a Wikimedia-maintained extension, ProjectBurnupGraphProfileMenuItem. See {rPHEX} for the source.' => 'This adds a link to search maniphest for open tasks which are tagged with this project.
    NOTE: This feature is provided by a Wikimedia-maintained extension, ProjectBurnupGraphProfileMenuItem. See {rPHEX} for the source.',
      'Show verbose output.' => 'Show verbose output.',
      'OAuth JWT wasn\'t valid at this time' => 'OAuth JWT wasn\'t valid at this time',
      'Any serious bugs affecting `%s` should be added as subtasks beneath this one.' => 'Any serious bugs affecting `%s` should be added as subtasks beneath this one.',
      'The username for whom transactions will be rolled back.' => 'The username for whom transactions will be rolled back.',
      'ChangeId' => 'ChangeId',
      'Only admins can call this API' => 'Only admins can call this API',
      'OAuth provider returned an error response.' => 'OAuth provider returned an error response.',
      'Ensure Security Task Policies are Enforced' => 'Ensure Security Task Policies are Enforced',
      'Release Details' => 'Release Details',
      'Allow' => 'Allow',
      'This MediaWiki Train Deployment is scheduled for the week of' => 'This MediaWiki Train Deployment is scheduled for the week of',
      'Query users by ldap username.' => 'Query users by ldap username.',
      'LDAP User' => 'LDAP User',
      'Invalid action \'%s\'!' => 'Invalid action \'%s\'!',
      'Shows the gerrit Change ID for a commit.' => 'Shows the gerrit Change ID for a commit.',
      'This adds a link to search maniphest for open tasks which are tagged with this project.
    NOTE: This feature is provided by a Wikimedia-maintained extension, ProjectOpenTasksProfileMenuItemextension. See {rPHEX} for the source.' => 'This adds a link to search maniphest for open tasks which are tagged with this project.
    NOTE: This feature is provided by a Wikimedia-maintained extension, ProjectOpenTasksProfileMenuItemextension. See {rPHEX} for the source.',
      'MediaWiki' => 'MediaWiki',
      'MediaWiki Base URI' => 'MediaWiki Base URI',
      'The requested project does not exist' => 'The requested project does not exist',
      'Burnup Graph' => 'Burnup Graph',
      'Change type to "%s."' => 'Change type to "%s."',
      'Execute searches for Policies.' => 'Execute searches for Policies.',
      'Find public transactions by a particular user.' => 'Find public transactions by a particular user.',
      'Execute a rollback.' => 'Execute a rollback.',
      'Deny' => 'Deny',
      'Consumer Key is required' => 'Consumer Key is required',
      'Invalid' => 'Invalid',
      'View Change in Gerrit' => 'View Change in Gerrit',
      'You must disable the user before rolling back their activity' => 'You must disable the user before rolling back their activity',
      'Link to Open Tasks' => 'Link to Open Tasks',
      'ElasticSearch' => 'ElasticSearch',
      'Disable ElasticSearch' => 'Disable ElasticSearch',
      'MediaWiki Instance Name' => 'MediaWiki Instance Name',
      'Limit the number of transaction rows to process. Default: 10000' => 'Limit the number of transaction rows to process. Default: 10000',
      'objectType is required.' => 'objectType is required.',
      'Unknown or missing ldap names: %s' => 'Unknown or missing ldap names: %s',
      'NOTE: Copy the keys generated by the MediaWiki OAuth consumer registration and paste them here.' => 'NOTE: Copy the keys generated by the MediaWiki OAuth consumer registration and paste them here.',
      'Invalid rule class \'%s\'!' => 'Invalid rule class \'%s\'!',
      'Phabricator transaction rollback tool.' => 'Phabricator transaction rollback tool.',
      'Enable this to use the experimental ElasticSearch fulltext backend.' => 'Enable this to use the experimental ElasticSearch fulltext backend.',
      'This task has no related gerrit patches.' => 'This task has no related gerrit patches.',
      'Gerrit Patches' => 'Gerrit Patches',
      'You must provide either --user or --user-phid' => 'You must provide either --user or --user-phid',
      'For more info about deployment blockers, see [[ https://wikitech.wikimedia.org/wiki/Deployments/Holding_the_train | Holding the train ]].' => 'For more info about deployment blockers, see [[ https://wikitech.wikimedia.org/wiki/Deployments/Holding_the_train | Holding the train ]].',
      'Sort by Last Update' => 'Sort by Last Update',
      '%s Line(s) removed' => '%s Line(s) removed',
      'Escalate security issue' => 'Escalate security issue',
      'Consumer Secret is required' => 'Consumer Secret is required',
      'OAuth JWT aud didn\'t match expected consumer key' => 'OAuth JWT aud didn\'t match expected consumer key',
      'Related Changes in Gerrit:' => 'Related Changes in Gerrit:',
      'Code Review Started' => 'Code Review Started',
      'Enable expert mode to reveal additional "advanced" options in the Phabricator UI.' => 'Enable expert mode to reveal additional "advanced" options in the Phabricator UI.',
      'Changed Type' => 'Changed Type',
      'Full-Text Search backend that uses ElasticSearch.' => 'Full-Text Search backend that uses ElasticSearch.',
      'Enforce Task Security Policy' => 'Enforce Task Security Policy',
      'Hide Instructions' => 'Hide Instructions',
      'Rules do not have any effect.' => 'Rules do not have any effect.',
      'users subscribed to' => 'users subscribed to',
      'Execute a dry run, changes will not be writen back to the database.' => 'Execute a dry run, changes will not be writen back to the database.',
      'PHIDs required' => 'PHIDs required',
      'Branch `%s` and deploy to %s Wikis.' => 'Branch `%s` and deploy to %s Wikis.',
      '**Step 1 of 2**: Provide the name and URI for your MediaWiki install.
    In the next step, you will create an auth consumer in MediaWiki to be used by Phabricator oauth.' => '**Step 1 of 2**: Provide the name and URI for your MediaWiki install.
    In the next step, you will create an auth consumer in MediaWiki to be used by Phabricator oauth.',
      'Expert Mode.' => 'Expert Mode.',
      'The specified username / userPHID was not found' => 'The specified username / userPHID was not found',
      'See https://wikitech.wikimedia.org/wiki/Deployments for full schedule.' => 'See https://wikitech.wikimedia.org/wiki/Deployments for full schedule.',
      'Browse Gerrit Projects' => 'Browse Gerrit Projects',
      'You cannot lock this task because it is already protected by a custom security policy.' => 'You cannot lock this task because it is already protected by a custom security policy.',
      'Wikimedia Customizations' => 'Wikimedia Customizations',
      'Missing or malformed parameter.' => 'Missing or malformed parameter.',
      'MediaWiki base URI should include protocol (like "https://").' => 'MediaWiki base URI should include protocol (like "https://").',
      'Blocked on Code Review' => 'Blocked on Code Review',
      'How this works' => 'How this works',
      'Create custom access control policy objects.' => 'Create custom access control policy objects.',
      'Use [[%s|this form]] to create one.' => 'Use [[%s|this form]] to create one.',
      'MediaWiki User' => 'MediaWiki User',
      'Change type to' => 'Change type to',
      'Reset security settings' => 'Reset security settings',
      'Open Tasks' => 'Open Tasks',
      'Unknown' => 'Unknown',
      'OAuth error: this account has been blocked in MediaWiki.' => 'OAuth error: this account has been blocked in MediaWiki.',
      'Global Accounts' => 'Global Accounts',
      'Milestone Navigation Links' => 'Milestone Navigation Links',
      'Patch without arc' => 'Patch without arc',
      'Previous: %s' => 'Previous: %s',
      'Query users by MediaWiki username.' => 'Query users by MediaWiki username.',
      'Expand Instructions' => 'Expand Instructions',
      'You cannot roll back the activity of a privileged user.' => 'You cannot roll back the activity of a privileged user.',
      'Any open subtask(s) block the train from moving forward. This means no further deployments until the blockers are resolved.' => 'Any open subtask(s) block the train from moving forward. This means no further deployments until the blockers are resolved.',
      'Download zip' => 'Download zip',
      'The full URL to your MediaWiki install, up to but not including "index.php"' => 'The full URL to your MediaWiki install, up to but not including "index.php"',
      'Download Archive' => 'Download Archive',
      'This panel shows navigation links to other milestones in the same series.' => 'This panel shows navigation links to other milestones in the same series.',
      'Expert Mode' => 'Expert Mode',
      'Unknown or missing mediawiki names: %s' => 'Unknown or missing mediawiki names: %s',
      'After reverting transactions, delete the reverted transaction records.' => 'After reverting transactions, delete the reverted transaction records.',
      'No Permission' => 'No Permission',
      'Series Navigation' => 'Series Navigation',
      'Enable ElasticSearch' => 'Enable ElasticSearch',
      'Find stuff in elastic piles.' => 'Find stuff in elastic piles.',
      'Consumer Key' => 'Consumer Key',
      'Required' => 'Required',
      'Number of open tasks over time' => 'Number of open tasks over time',
      'Abandoned' => 'Abandoned',
      'Gerrit' => 'Gerrit',
      '%s Line(s) added' => '%s Line(s) added',
      'If something is serious enough to warrant a rollback then you should bring it to the attention of deployers on the [[ https://www.mediawiki.org/wiki/MediaWiki_on_IRC | #wikimedia-operations IRC channel ]].' => 'If something is serious enough to warrant a rollback then you should bring it to the attention of deployers on the [[ https://www.mediawiki.org/wiki/MediaWiki_on_IRC | #wikimedia-operations IRC channel ]].',
      'If you have a risky change in this week\'s train add a comment to this task using the {icon train spin}{icon fire color=red} [[ https://wikitech.wikimedia.org/wiki/Deployments/Risky_change_template | Risky patch template ]]' => 'If you have a risky change in this week\'s train add a comment to this task using the {icon train spin}{icon fire color=red} [[ https://wikitech.wikimedia.org/wiki/Deployments/Risky_change_template | Risky patch template ]]',
      'Link to Burnup Graph' => 'Link to Burnup Graph',
      'Comments' => 'Comments',
      'Skip OFFSET rows before processing the remaining tranactions.' => 'Skip OFFSET rows before processing the remaining tranactions.',
      'Download tar.gz' => 'Download tar.gz',
      'Change type to "%s"' => 'Change type to "%s"',
    );
  }

}
