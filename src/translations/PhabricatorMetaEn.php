<?php

final class PhabricatorMetaEn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en';
  }

  protected function getTranslations() {
    return array(
      'Information' => 'Information',
      'This application cannot be uninstalled, because it is required for Phabricator to work.' => 'This application cannot be uninstalled, because it is required for Phabricator to work.',
      'Syntax' => 'Syntax',
      'You cannot install an installed application.' => 'You cannot install an installed application.',
      'Show First-Party Applications' => 'Show First-Party Applications',
      'Create Application' => 'Create Application',
      'Unknown order "%s"!' => 'Unknown order "%s"!',
      'Really Uninstall Application?' => 'Really Uninstall Application?',
      'Prototypes Not Enabled' => 'Prototypes Not Enabled',
      'Really uninstall the %s application?' => 'Really uninstall the %s application?',
      'Policy does not exist.' => 'Policy does not exist.',
      'Launcher' => 'Launcher',
      'To manage prototypes, enable them by setting %s in your Phabricator configuration.' => 'To manage prototypes, enable them by setting %s in your Phabricator configuration.',
      'This application is a prototype. %s' => 'This application is a prototype. %s',
      'This is very unusual and will leave you without any content on the Phabricator home page. You should only do this if you are certain you know what you are doing.' => 'This is very unusual and will leave you without any content on the Phabricator home page. You should only do this if you are certain you know what you are doing.',
      'Completely Break Phabricator' => 'Completely Break Phabricator',
      '%s installed this application.' => '%s installed this application.',
      'Confirmation' => 'Confirmation',
      'Explore More Applications' => 'Explore More Applications',
      'Uninstalled' => 'Uninstalled',
      'Show Uninstalled Applications' => 'Show Uninstalled Applications',
      'Launchable' => 'Launchable',
      'Save Policies' => 'Save Policies',
      'Browse Applications' => 'Browse Applications',
      'Prototype' => 'Prototype',
      'Edit Policies: %s' => 'Edit Policies: %s',
      'Create New Application' => 'Create New Application',
      'Extension' => 'Extension',
      'Validation Failed' => 'Validation Failed',
      'Show Installed Applications' => 'Show Installed Applications',
      '%s uninstalled this application.' => '%s uninstalled this application.',
      'Capability "%s" is not editable for this application.' => 'Capability "%s" is not editable for this application.',
      'Configure' => 'Configure',
      'Mail Commands Overview' => 'Mail Commands Overview',
      'Show Launchable Applications' => 'Show Launchable Applications',
      'Show Released Applications' => 'Show Released Applications',
      'Show Non-Launchable Applications' => 'Show Non-Launchable Applications',
      '%s uninstalled %s.' => '%s uninstalled %s.',
      'Can\'t set non-public policies to public.' => 'Can\'t set non-public policies to public.',
      '%s installed %s.' => '%s installed %s.',
      'Phabricator is not currently configured to accept inbound mail. You won\'t be able to interact with objects over email until inbound mail is set up.' => 'Phabricator is not currently configured to accept inbound mail. You won\'t be able to interact with objects over email until inbound mail is set up.',
      'Configure Application Forms' => 'Configure Application Forms',
      'Show Applications w/ App Email Support' => 'Show Applications w/ App Email Support',
      'Uninstall' => 'Uninstall',
      'After configuring Phabricator to process inbound mail, you can interact with objects (like tasks and revisions) over email. For information on configuring Phabricator, see **[[ %s | Configuring Inbound Email ]]**.
    In most cases, you can reply to email you receive from Phabricator to leave comments. You can also use **mail commands** to take a greater range of actions (like claiming a task or requesting changes to a revision) without needing to log in to the web UI.
    Mail commands are keywords which start with an exclamation point, like `!claim`. Some commands may take parameters, like `!assign alincoln`.
    To use mail commands, write one command per line at the beginning or end of your mail message. For example, you could write this in a reply to task email to claim the task:
    ```
    !claim
    I\'ll take care of this.
    ```
    When Phabricator receives your mail, it will process any commands first, then post the remaining message body as a comment. You can execute multiple commands at once:
    ```
    !assign alincoln
    !close
    I just talked to @alincoln, and he showed me that he fixed this.
    ```
    ' => 'After configuring Phabricator to process inbound mail, you can interact with objects (like tasks and revisions) over email. For information on configuring Phabricator, see **[[ %s | Configuring Inbound Email ]]**.
    In most cases, you can reply to email you receive from Phabricator to leave comments. You can also use **mail commands** to take a greater range of actions (like claiming a task or requesting changes to a revision) without needing to log in to the web UI.
    Mail commands are keywords which start with an exclamation point, like `!claim`. Some commands may take parameters, like `!assign alincoln`.
    To use mail commands, write one command per line at the beginning or end of your mail message. For example, you could write this in a reply to task email to claim the task:
    ```
    !claim
    I\'ll take care of this.
    ```
    When Phabricator receives your mail, it will process any commands first, then post the remaining message body as a comment. You can execute multiple commands at once:
    ```
    !assign alincoln
    !close
    I just talked to @alincoln, and he showed me that he fixed this.
    ```
    ',
      'Can\'t set the policy to a policy you can\'t view!' => 'Can\'t set the policy to a policy you can\'t view!',
      'Type an application name...' => 'Type an application name...',
      'Install %s application?' => 'Install %s application?',
      'Quick Reference' => 'Quick Reference',
      'Show Applications w/o App Email Support' => 'Show Applications w/o App Email Support',
      'Are you absolutely certain you want to uninstall the Home application?' => 'Are you absolutely certain you want to uninstall the Home application?',
      '%s changed the %s policy for application %s from %s to %s.' => '%s changed the %s policy for application %s from %s to %s.',
      'Configure creation and editing forms in Applications.' => 'Configure creation and editing forms in Applications.',
      'Provenance' => 'Provenance',
      'Show Prototype Applications' => 'Show Prototype Applications',
      '%s changed the %s policy from %s to %s.' => '%s changed the %s policy from %s to %s.',
      'Edit Application: %s' => 'Edit Application: %s',
      'Show Third-Party Applications' => 'Show Third-Party Applications',
      'This table summarizes the available mail commands. For details on a specific command, see the command section below.' => 'This table summarizes the available mail commands. For details on a specific command, see the command section below.',
      'Show All Applications' => 'Show All Applications',
      'Install' => 'Install',
    );
  }

}
