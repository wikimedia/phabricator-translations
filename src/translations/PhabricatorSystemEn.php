<?php

final class PhabricatorSystemEn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en';
  }

  protected function getTranslations() {
    return array(
      'Phabricator is currently configured with no writable ("master") database, so it can not write new information anywhere. Phabricator will run in read-only mode until an administrator reconfigures it with a writable database.' => 'Phabricator is currently configured with no writable ("master") database, so it can not write new information anywhere. Phabricator will run in read-only mode until an administrator reconfigures it with a writable database.',
      'This system does not have the "%s" extension installed, so character encodings are not supported. Install "%s" to enable support.' => 'This system does not have the "%s" extension installed, so character encodings are not supported. Install "%s" to enable support.',
      'This mode is active because it is enabled in the configuration option "%s".' => 'This mode is active because it is enabled in the configuration option "%s".',
      'Panic!' => 'Panic!',
      'No Writable Database' => 'No Writable Database',
      'Destroying %s **%s**...
    ' => 'Destroying %s **%s**...
    ',
      'Object "%s" can not be destroyed (it does not implement %s).' => 'Object "%s" can not be destroyed (it does not implement %s).',
      'No Encoding Support' => 'No Encoding Support',
      'No such object "%s" exists!' => 'No such object "%s" exists!',
      'Severed From Master' => 'Severed From Master',
      'Engine: Destruction' => 'Engine: Destruction',
      'This request was served from a replica database. Replica databases may lag behind the master, so very recent activity may not be reflected in the UI. This data will be restored if the master database is restored, but may have been lost if the master database has been reduced to a pile of ash.' => 'This request was served from a replica database. Replica databases may lag behind the master, so very recent activity may not be reflected in the UI. This data will be restored if the master database is restored, but may have been lost if the master database has been reduced to a pile of ash.',
      'Permanently destroy objects.' => 'Permanently destroy objects.',
      'Choose a syntax highlighting to use.' => 'Choose a syntax highlighting to use.',
      '%d / hour' => '%s / hour',
      'This may happen if there is a temporary network anomaly on the server side, like cosmic radiation or spooky ghosts. If this failure was caused by a transient service interruption, Phabricator will recover momentarily.' => 'This may happen if there is a temporary network anomaly on the server side, like cosmic radiation or spooky ghosts. If this failure was caused by a transient service interruption, Phabricator will recover momentarily.',
      'Rate Limiting Actions' => 'Rate Limiting Actions',
      'Highlighting' => 'Highlighting',
      'Unable to Reach Master' => 'Unable to Reach Master',
      'Phabricator was unable to connect to the writable ("master") database while handling this request, and automatically degraded into read-only mode.' => 'Phabricator was unable to connect to the writable ("master") database while handling this request, and automatically degraded into read-only mode.',
      'Permanently destroyed %s object(s).' => 'Permanently destroyed %s object(s).',
      'Choose Encoding' => 'Choose Encoding',
      'Destroying objects may cause related objects to stop working, and may leave scattered references to objects which no longer exist. In most cases, it is much better to disable or archive objects instead of destroying them. This risk is greatest when deleting complex or highly connected objects like repositories, projects and users.
    These tattered edges are an expected consequence of destroying objects, and the Phabricator upstream will not help you fix them. We strongly recommend disabling or archiving objects instead.' => 'Destroying objects may cause related objects to stop working, and may leave scattered references to objects which no longer exist. In most cases, it is much better to disable or archive objects instead of destroying them. This risk is greatest when deleting complex or highly connected objects like repositories, projects and users.
    These tattered edges are an expected consequence of destroying objects, and the Phabricator upstream will not help you fix them. We strongly recommend disabling or archiving objects instead.',
      'IMPORTANT' => 'IMPORTANT',
      'Quite Unsettling' => 'Quite Unsettling',
      'Destruction Logs' => 'Destruction Logs',
      'This likely indicates a severe misconfiguration or major service interruption.' => 'This likely indicates a severe misconfiguration or major service interruption.',
      'Destroying objects...' => 'Destroying objects...',
      'Read-only mode was enabled by the explicit action of a human administrator, so you can get more information about why it has been turned on by rolling your chair away from your desk and yelling "Hey! Why is Phabricator in read-only mode??!" using your very loudest outside voice.' => 'Read-only mode was enabled by the explicit action of a human administrator, so you can get more information about why it has been turned on by rolling your chair away from your desk and yelling "Hey! Why is Phabricator in read-only mode??!" using your very loudest outside voice.',
      'This mode is active because no database has a "%s" role in the configuration option "%s".' => 'This mode is active because no database has a "%s" role in the configuration option "%s".',
      'This may also indicate that a more serious failure has occurred. If this interruption does not resolve on its own, Phabricator will soon detect the persistent disruption and degrade into read-only mode until the issue is resolved.' => 'This may also indicate that a more serious failure has occurred. If this interruption does not resolve on its own, Phabricator will soon detect the persistent disruption and degrade into read-only mode until the issue is resolved.',
      'Select Character Encoding' => 'Select Character Encoding',
      'Select Syntax Highlighting' => 'Select Syntax Highlighting',
      'DATA WILL BE PERMANENTLY DESTROYED' => 'DATA WILL BE PERMANENTLY DESTROYED',
      'Choose Highlighting' => 'Choose Highlighting',
      'An administrator has placed Phabricator into read-only mode.' => 'An administrator has placed Phabricator into read-only mode.',
      'Objects will be permanently destroyed. There is no way to undo this operation or ever retrieve this data unless you maintain external backups.' => 'Objects will be permanently destroyed. There is no way to undo this operation or ever retrieve this data unless you maintain external backups.',
      'Phabricator has consistently been unable to reach the writable ("master") database while processing recent requests.' => 'Phabricator has consistently been unable to reach the writable ("master") database while processing recent requests.',
      'Aborted, your objects are safe.' => 'Aborted, your objects are safe.',
      'No Object URI' => 'No Object URI',
      'Show a log of permanently destroyed objects.' => 'Show a log of permanently destroyed objects.',
      'Cache engine extension "%s" returned object (of class "%s") with no PHID.' => 'Cache engine extension "%s" returned object (of class "%s") with no PHID.',
      'System' => 'System',
      'You are performing too many actions too quickly.' => 'You are performing too many actions too quickly.',
      'Phabricator will periodically retry the connection and recover once service is restored. Most causes of persistent service interruption will require administrative intervention in order to restore service.' => 'Phabricator will periodically retry the connection and recover once service is restored. Most causes of persistent service interruption will require administrative intervention in order to restore service.',
      'Choose a text encoding to use.' => 'Choose a text encoding to use.',
      'These %s object(s) will be destroyed forever:' => 'These %s object(s) will be destroyed forever:',
      'In read-only mode you can read existing information, but you will not be able to edit objects or create new objects until this mode is disabled.' => 'In read-only mode you can read existing information, but you will not be able to edit objects or create new objects until this mode is disabled.',
      'This mode may be used to perform temporary maintenance, test configuration, or archive an installation permanently.' => 'This mode may be used to perform temporary maintenance, test configuration, or archive an installation permanently.',
      'DELETING OBJECTS OFTEN BREAKS THINGS' => 'DELETING OBJECTS OFTEN BREAKS THINGS',
      'Cache engine extension "%s" did not return a list of linked objects.' => 'Cache engine extension "%s" did not return a list of linked objects.',
      'This usually occurs when an administrator is actively working on fixing a temporary configuration or deployment problem.' => 'This usually occurs when an administrator is actively working on fixing a temporary configuration or deployment problem.',
      '%d / minute' => '%s / minute',
      'Destroy objects without prompting.' => 'Destroy objects without prompting.',
      'The maximum allowed rate for this action is %s. You are taking actions at a rate of %s.' => 'The maximum allowed rate for this action is %s. You are taking actions at a rate of %s.',
      'Are you absolutely certain you want to destroy these %s object(s)?' => 'Are you absolutely certain you want to destroy these %s object(s)?',
      'Administrative Read-Only Mode' => 'Administrative Read-Only Mode',
      '%d / second' => '%s / second',
      'As an administrator, you can review status information from the %s control panel. This may provide more information about the current state of affairs.' => 'As an administrator, you can review status information from the %s control panel. This may provide more information about the current state of affairs.',
      'Although this may be the result of a misconfiguration or operational error, this is also the state you reach if a meteor recently obliterated a datacenter.' => 'Although this may be the result of a misconfiguration or operational error, this is also the state you reach if a meteor recently obliterated a datacenter.',
      'Object "%s" exists, but does not have a URI to redirect to.' => 'Object "%s" exists, but does not have a URI to redirect to.',
      'Specify one or more objects to destroy.' => 'Specify one or more objects to destroy.',
    );
  }

}
