<?php

final class PhabricatorHarbormasterEnGB
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en_GB';
  }

  protected function getTranslations() {
    return array(
      'Behavior: %s' => 'Behaviour: %s',
      'Log Not Finalized' => 'Log Not Finalised',
      'Organization Name' => 'Organisation Name',
      'You can use this method to send control commands to Buildables and Builds.
    This table summarizes which object types may receive control commands:
    <table>
      <tr>
        <th>Object Type</th>
        <th>PHID Example</th>
        <th />
        <th>Description</th>
      </tr>
      <tr>
        <td>Harbormaster Buildable</td>
        <td>`PHID-HMBB-...`</td>
        <td>{icon check color=green}</td>
        <td>Buildables may receive control commands.</td>
      </tr>
      <tr>
        <td>Harbormaster Build</td>
        <td>`PHID-HMBD-...`</td>
        <td>{icon check color=green}</td>
        <td>Builds may receive control commands.</td>
      </tr>
      <tr>
        <td>Harbormaster Build Target</td>
        <td>`PHID-HMBT-...`</td>
        <td>{icon times color=red}</td>
        <td>You may **NOT** send control commands to build targets.</td>
      </tr>
    </table>
    You can send these commands:
    %s
    To send a command message, specify the PHID of the object you would like to
    receive the message using the `receiver` parameter, and specify the message
    type using the `type` parameter.
    ' => 'You can use this method to send control commands to Buildables and Builds.
    This table summarises which object types may receive control commands:
    <table>
      <tr>
        <th>Object Type</th>
        <th>PHID Example</th>
        <th />
        <th>Description</th>
      </tr>
      <tr>
        <td>Harbormaster Buildable</td>
        <td>`PHID-HMBB-...`</td>
        <td>{icon check color=green}</td>
        <td>Buildables may receive control commands.</td>
      </tr>
      <tr>
        <td>Harbormaster Build</td>
        <td>`PHID-HMBD-...`</td>
        <td>{icon check color=green}</td>
        <td>Builds may receive control commands.</td>
      </tr>
      <tr>
        <td>Harbormaster Build Target</td>
        <td>`PHID-HMBT-...`</td>
        <td>{icon times color=red}</td>
        <td>You may **NOT** send control commands to build targets.</td>
      </tr>
    </table>
    You can send these commands:
    %s
    To send a command message, specify the PHID of the object you would like to
    receive the message using the `receiver` parameter, and specify the message
    type using the `type` parameter.',
      'Optional namespace for this test. This is organizational and is often a class or module name, like "ExampleTestCase".' => 'Optional namespace for this test. This is organisational and is often a class or module name, like "ExampleTestCase".',
      'Log "%s" is still live. Logs can not be finalized until they have closed.' => 'Log "%s" is still live. Logs can not be finalised until they have closed.',
      'If you run external builds, you can use this method to publish build results
    back into Harbormaster after the external system finishes work (or as it makes
    progress).
    To report build status or results, you must send a message to the appropriate
    Build Target. This table summarizes which object types may receive build status
    and result messages:
    <table>
      <tr>
        <th>Object Type</th>
        <th>PHID Example</th>
        <th />
        <th>Description</th>
      </tr>
      <tr>
        <td>Harbormaster Buildable</td>
        <td>`PHID-HMBB-...`</td>
        <td>{icon times color=red}</td>
        <td>Buildables may **NOT** receive status or result messages.</td>
      </tr>
      <tr>
        <td>Harbormaster Build</td>
        <td>`PHID-HMBD-...`</td>
        <td>{icon times color=red}</td>
        <td>Builds may **NOT** receive status or result messages.</td>
      </tr>
      <tr>
        <td>Harbormaster Build Target</td>
        <td>`PHID-HMBT-...`</td>
        <td>{icon check color=green}</td>
        <td>Report build status and results to Build Targets.</td>
      </tr>
    </table>
    The simplest way to use this method to report build results is to call it once
    after the build finishes with a `pass` or `fail` message. This will record the
    build result, and continue the next step in the build if the build was waiting
    for a result.
    When you send a status message about a build target, you can optionally include
    detailed `lint` or `unit` results alongside the message. See below for details.
    If you want to report intermediate results but a build hasn\'t completed yet,
    you can use the `work` message. This message doesn\'t have any direct effects,
    but allows you to send additional data to update the progress of the build
    target. The target will continue waiting for a completion message, but the UI
    will update to show the progress which has been made.
    When sending a message to a build target to report the status or results of
    a build, your message must include a `type` which describes the overall state
    of the build. For example, use `pass` to tell Harbormaster that a build target
    completed successfully.
    Supported message types are:
    %s
    ' => 'If you run external builds, you can use this method to publish build results
    back into Harbormaster after the external system finishes work (or as it makes
    progress).
    To report build status or results, you must send a message to the appropriate
    Build Target. This table summarises which object types may receive build status
    and result messages:
    <table>
      <tr>
        <th>Object Type</th>
        <th>PHID Example</th>
        <th />
        <th>Description</th>
      </tr>
      <tr>
        <td>Harbormaster Buildable</td>
        <td>`PHID-HMBB-...`</td>
        <td>{icon times color=red}</td>
        <td>Buildables may **NOT** receive status or result messages.</td>
      </tr>
      <tr>
        <td>Harbormaster Build</td>
        <td>`PHID-HMBD-...`</td>
        <td>{icon times color=red}</td>
        <td>Builds may **NOT** receive status or result messages.</td>
      </tr>
      <tr>
        <td>Harbormaster Build Target</td>
        <td>`PHID-HMBT-...`</td>
        <td>{icon check color=green}</td>
        <td>Report build status and results to Build Targets.</td>
      </tr>
    </table>
    The simplest way to use this method to report build results is to call it once
    after the build finishes with a `pass` or `fail` message. This will record the
    build result, and continue the next step in the build if the build was waiting
    for a result.
    When you send a status message about a build target, you can optionally include
    detailed `lint` or `unit` results alongside the message. See below for details.
    If you want to report intermediate results but a build hasn\'t completed yet,
    you can use the `work` message. This message doesn\'t have any direct effects,
    but allows you to send additional data to update the progress of the build
    target. The target will continue waiting for a completion message, but the UI
    will update to show the progress which has been made.
    When sending a message to a build target to report the status or results of
    a build, your message must include a `type` which describes the overall state
    of the build. For example, use `pass` to tell Harbormaster that a build target
    completed successfully.
    Supported message types are:
    %s',
      'Edit Behavior: %s' => 'Edit Behaviour: %s',
    );
  }

}
