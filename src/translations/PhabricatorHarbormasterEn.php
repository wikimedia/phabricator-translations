<?php

final class PhabricatorHarbormasterEn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en';
  }

  protected function getTranslations() {
    return array(
      'Build Artifact' => 'Build Artifact',
      'Plan %d %s' => 'Plan %s %s',
      'Waiting for Message' => 'Waiting for Message',
      'Harbormaster Artifacts' => 'Harbormaster Artifacts',
      'Updating build %d of buildable %s...' => 'Updating build %s of buildable %s...',
      'TEST RESULT' => 'TEST RESULT',
      'Browse Dependencies' => 'Browse Dependencies',
      'Unable to Pause Build' => 'Unable to Pause Build',
      'Search for builds by containing revision or repository.' => 'Search for builds by containing revision or repository.',
      'Started at %s' => 'Started at %s',
      'Valid Output' => 'Valid Output',
      'Failed to gzdeflate() log data!' => 'Failed to gzdeflate() log data!',
      'Deadlocked' => 'Deadlocked',
      'Buildkite did not return a "%s"!' => 'Buildkite did not return a "%s"!',
      'For example:' => 'For example:',
      'OK: Ignored event.' => 'OK: Ignored event.',
      'Behavior: %s' => 'Behavior: %s',
      'Build Passed' => 'Build Passed',
      'You can only restart some builds.' => 'You can only restart some builds.',
      'Resume Build' => 'Resume Build',
      'Retrieve information about Harbormaster build targets.' => 'Retrieve information about Harbormaster build targets.',
      'Unable to identify the protocol for URI "%s". URIs must be fully qualified and have an identifiable protocol.' => 'Unable to identify the protocol for URI "%s". URIs must be fully qualified and have an identifiable protocol.',
      'Log Not Finalized' => 'Log Not Finalized',
      'PHID of the object this build is building.' => 'PHID of the object this build is building.',
      'No build plans found.' => 'No build plans found.',
      'This plan can not be run manually.' => 'This plan can not be run manually.',
      'Artifact "%s" not found!' => 'Artifact "%s" not found!',
      'Run a command on Drydock resource.' => 'Run a command on Drydock resource.',
      '%s Skipped Test(s)' => '%s Skipped Test(s)',
      'Severity of the message.' => 'Severity of the message.',
      'The build plan for this build is configured to prevent users who can not edit it from issuing commands to the build, and you do not have permission to edit the build plan.' => 'The build plan for this build is configured to prevent users who can not edit it from issuing commands to the build, and you do not have permission to edit the build plan.',
      'You can not pause a build that uses an autoplan.' => 'You can not pause a build that uses an autoplan.',
      'Search for targets with given statuses.' => 'Search for targets with given statuses.',
      'Unsound' => 'Unsound',
      'Run a build in CircleCI.' => 'Run a build in CircleCI.',
      'View External Build Results' => 'View External Build Results',
      'Build with Buildkite' => 'Build with Buildkite',
      'Attempt to load log bytes (%d - %d) failed: failed to load a single contiguous range. Actual ranges: %s.' => 'Attempt to load log bytes (%s - %s) failed: failed to load a single contiguous range. Actual ranges: %s.',
      'Not A Haiku' => 'Not A Haiku',
      '%s Broken Test(s)' => '%s Broken Test(s)',
      'Resuming' => 'Resuming',
      'Publishing "%s"...' => 'Publishing "%s"...',
      'Line Map for "%s"' => 'Line Map for "%s"',
      'The name of the build target.' => 'The name of the build target.',
      'Edit Plan' => 'Edit Plan',
      'Use %s instead.' => 'Use %s instead.',
      'This test has too much data to display inline.' => 'This test has too much data to display inline.',
      'Run %d' => 'Run %s',
      'Organization Name' => 'Organization Name',
      'True if this artifact has been released.' => 'True if this artifact has been released.',
      'Browse Builds' => 'Browse Builds',
      'Expected "%s" property to contain a dictionary.' => 'Expected "%s" property to contain a dictionary.',
      'You must have edit permission on this build plan to pause, abort, resume, or restart it.' => 'You must have edit permission on this build plan to pause, abort, resume, or restart it.',
      'Really Delete Step?' => 'Really Delete Step?',
      'or' => 'or',
      'Completed' => 'Completed',
      'Revisions are not sent for review until the build completes, but they will be sent for review even if it fails.' => 'Revisions are not sent for review until the build completes, but they will be sent for review even if it fails.',
      'WARNING: This build step is new and experimental!
    To build **revisions** with Buildkite, they must:
      - belong to a tracked repository;
      - the repository must have a Staging Area configured;
      - you must configure a Buildkite pipeline for that Staging Area; and
      - you must configure the webhook described below.
    To build **commits** with Buildkite, they must:
      - belong to a tracked repository;
      - you must configure a Buildkite pipeline for that repository; and
      - you must configure the webhook described below.
    Webhook Configuration
    =====================
    In {nav Settings} for your Organization in Buildkite, under
    {nav Notification Services}, add a new **Webook Notification**.
    Use these settings:
      - **Webhook URL**: %s
      - **Token**: The "Webhook Token" field below and the "Token" field in
        Buildkite should both be set to the same nonempty value (any random
        secret). You can use copy/paste the value Buildkite generates into
        this form.
      - **Events**: Only **build.finish** needs to be active.
    Environment
    ===========
    These variables will be available in the build environment:
    | Variable | Description |
    |----------|-------------|
    | `HARBORMASTER_BUILD_TARGET_PHID` | PHID of the Build Target.' => 'WARNING: This build step is new and experimental!
    To build **revisions** with Buildkite, they must:
      - belong to a tracked repository;
      - the repository must have a Staging Area configured;
      - you must configure a Buildkite pipeline for that Staging Area; and
      - you must configure the webhook described below.
    To build **commits** with Buildkite, they must:
      - belong to a tracked repository;
      - you must configure a Buildkite pipeline for that repository; and
      - you must configure the webhook described below.
    Webhook Configuration
    =====================
    In {nav Settings} for your Organization in Buildkite, under
    {nav Notification Services}, add a new **Webook Notification**.
    Use these settings:
      - **Webhook URL**: %s
      - **Token**: The "Webhook Token" field below and the "Token" field in
        Buildkite should both be set to the same nonempty value (any random
        secret). You can use copy/paste the value Buildkite generates into
        this form.
      - **Events**: Only **build.finish** needs to be active.
    Environment
    ===========
    These variables will be available in the build environment:
    | Variable | Description |
    |----------|-------------|
    | `HARBORMASTER_BUILD_TARGET_PHID` | PHID of the Build Target.',
      'You can not resume this build because it is already restarting.' => 'You can not resume this build because it is already restarting.',
      'Output Artifacts' => 'Output Artifacts',
      'Manage Build Plans' => 'Manage Build Plans',
      'Default Build Plan View Policy' => 'Default Build Plan View Policy',
      'Choose a build target to attach the log to with "--target".' => 'Choose a build target to attach the log to with "--target".',
      'Build Preparing' => 'Build Preparing',
      'This test result has %s bytes of Remarkup test details. Remarkup blocks longer than %s bytes are not rendered inline when showing test summaries.' => 'This test result has %s bytes of Remarkup test details. Remarkup blocks longer than %s bytes are not rendered inline when showing test summaries.',
      'Edit Buildable' => 'Edit Buildable',
      'Call includes "lint" parameter. This parameter must be omitted when the receiver is not a Build Target.' => 'Call includes "lint" parameter. This parameter must be omitted when the receiver is not a Build Target.',
      'This build can not be restarted because it is an automatic build.' => 'This build can not be restarted because it is an automatic build.',
      'Started After' => 'Started After',
      'Specify exactly one buildable, by object name.' => 'Specify exactly one buildable, by object name.',
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
    ',
      'Enable Plan' => 'Enable Plan',
      'Unable to Abort Build' => 'Unable to Abort Build',
      'Unable to Load File' => 'Unable to Load File',
      'Edit Build: %s' => 'Edit Build: %s',
      'The object PHID of the object (usually a diff or commit) being built.' => 'The object PHID of the object (usually a diff or commit) being built.',
      'Build Target' => 'Build Target',
      'Unable to determine how to fetch changes: this buildable does not identify a commit or a staging ref. You may need to configure a repository staging area.' => 'Unable to determine how to fetch changes: this buildable does not identify a commit or a staging ref. You may need to configure a repository staging area.',
      'Failed to load build plan ("%s").' => 'Failed to load build plan ("%s").',
      'Run plan __id__ on __buildable__.' => 'Run plan __id__ on __buildable__.',
      'Step %d' => 'Step %s',
      'Build Started' => 'Build Started',
      'Done. Total byte size of affected logs: %s -> %s.' => 'Done. Total byte size of affected logs: %s -> %s.',
      'Build %d: %s' => 'Build %s: %s',
      '%s aborted this build.' => '%s aborted this build.',
      'Disable Build Plan' => 'Disable Build Plan',
      'Search for targets of a given build.' => 'Search for targets of a given build.',
      'Enable Build Plan' => 'Enable Build Plan',
      'Webhook Token' => 'Webhook Token',
      'When creating an artifact, you will choose an `artifactType` from this table. These types of artifacts are supported:' => 'When creating an artifact, you will choose an `artifactType` from this table. These types of artifacts are supported:',
      'Aborting' => 'Aborting',
      '%s Other Test(s)' => '%s Other Test(s)',
      'A buildable inherits policies from the underlying object.' => 'A buildable inherits policies from the underlying object.',
      'Build Steps' => 'Build Steps',
      'Harbormaster Builds' => 'Harbormaster Builds',
      '%s paused this build.' => '%s paused this build.',
      'Sleep for %s seconds.' => 'Sleep for %s seconds.',
      '%s created this build step.' => '%s created this build step.',
      'Buildable Name' => 'Buildable Name',
      'If Complete' => 'If Complete',
      'This object does not support builds with Buildkite.' => 'This object does not support builds with Buildkite.',
      'Search for targets completed on or before a particular date.' => 'Search for targets completed on or before a particular date.',
      'Compress, decompress, store or destroy build logs.' => 'Compress, decompress, store or destroy build logs.',
      'Target %d' => 'Target %s',
      'The build the target is associated with.' => 'The build the target is associated with.',
      'Received' => 'Received',
      'Use "plain" to remove encoding, or "compress" to compress logs.' => 'Use "plain" to remove encoding, or "compress" to compress logs.',
      'Default Build Plan Edit Policy' => 'Default Build Plan Edit Policy',
      'Unused Output' => 'Unused Output',
      'Abort Older Builds' => 'Abort Older Builds',
      'Pause Build' => 'Pause Build',
      'Interacting with External Build Systems' => 'Interacting with External Build Systems',
      'Progress on this build will be discarded. Really abort build?' => 'Progress on this build will be discarded. Really abort build?',
      'Artifact %d' => 'Artifact %s',
      'Path to the file containing the lint message, from the project root.' => 'Path to the file containing the lint message, from the project root.',
      'No artifacts found.' => 'No artifacts found.',
      'A build step has the same policies as its build plan.' => 'A build step has the same policies as its build plan.',
      'Rebuilding log "%s"...' => 'Rebuilding log "%s"...',
      '%s Failed Test(s)' => '%s Failed Test(s)',
      'Unknown mode "%s". Valid modes are: %s.' => 'Unknown mode "%s". Valid modes are: %s.',
      'Wait for previous commits to finish building the current plan before continuing.' => 'Wait for previous commits to finish building the current plan before continuing.',
      'No handler found for %s' => 'No handler found for %s',
      'Follow Log' => 'Follow Log',
      'You can not resume a build that uses an autoplan.' => 'You can not resume a build that uses an autoplan.',
      'Explicitly update the builds for __buildable__.' => 'Explicitly update the builds for __buildable__.',
      'Path to the file where the test is declared, relative to the project root.' => 'Path to the file where the test is declared, relative to the project root.',
      'Apply transactions to create a new build step or edit an existing one.' => 'Apply transactions to create a new build step or edit an existing one.',
      'Show more details about operations as they are performed. Slow! But also very reassuring!' => 'Show more details about operations as they are performed. Slow! But also very reassuring!',
      'Lint message code identifying the type of message, like "ERR123".' => 'Lint message code identifying the type of message, like "ERR123".',
      'Build will pause.' => 'Build will pause.',
      'This is an autoplan (a builtin plan provided by an application) so it can not be edited.' => 'This is an autoplan (a builtin plan provided by an application) so it can not be edited.',
      'Make an authenticated HTTP %s request to %s.' => 'Make an authenticated HTTP %s request to %s.',
      'The build target this artifact is attached to.' => 'The build target this artifact is attached to.',
      'Sent a restart message to build.' => 'Sent a restart message to build.',
      'Line number in the file where the text which triggered the message first appears. The first line of the file is line 1, not line 0.' => 'Line number in the file where the text which triggered the message first appears. The first line of the file is line 1, not line 0.',
      'Buildables' => 'Buildables',
      'The artifact key.' => 'The artifact key.',
      'Build step "%s" has step group key "%s", but no step group with that key exists.' => 'Build step "%s" has step group key "%s", but no step group with that key exists.',
      'When Complete' => 'When Complete',
      'Show all logs.' => 'Show all logs.',
      'Invalid buildable PHID "%s".' => 'Invalid buildable PHID "%s".',
      'Find out information about buildables.' => 'Find out information about buildables.',
      'ID of build plan to run.' => 'ID of build plan to run.',
      'Run Build Plan Manually' => 'Run Build Plan Manually',
      'Limit the rate at which the log is written, to test live log streaming.' => 'Limit the rate at which the log is written, to test live log streaming.',
      'Running for %s' => 'Running for %s',
      'Show More Above' => 'Show More Above',
      '**rebuild-log** --id __id__ [__options__]
    **rebuild-log** --all' => '**rebuild-log** --id __id__ [__options__]
    **rebuild-log** --all',
      '%s created this build plan.' => '%s created this build plan.',
      'Search for builds running a given build plan.' => 'Search for builds running a given build plan.',
      'You do not have permission to create Harbormaster build plans.' => 'You do not have permission to create Harbormaster build plans.',
      'Epoch timestamp for target completion, if the target has completed.' => 'Epoch timestamp for target completion, if the target has completed.',
      'Build plan "%s" does not exist.' => 'Build plan "%s" does not exist.',
      'You can not pause this build because it is already aborting.' => 'You can not pause this build because it is already aborting.',
      'Pause the build.' => 'Pause the build.',
      'You can not abort this biuld because it is already complete.' => 'You can not abort this biuld because it is already complete.',
      'Really resume %s build(s)?' => 'Really resume %s build(s)?',
      'Uploaded File' => 'Uploaded File',
      'Force the buildable to update even if no build status changes occur during normal update.' => 'Force the buildable to update even if no build status changes occur during normal update.',
      'INVALID' => 'INVALID',
      'Unable to load object "%s" to receive message.' => 'Unable to load object "%s" to receive message.',
      'Request OK
    ' => 'Request OK
    ',
      'The object PHID of the Harbormaster Build being built.' => 'The object PHID of the Harbormaster Build being built.',
      'Logs must be fully written and processed before they can be downloaded. This log is still being written or processed.' => 'Logs must be fully written and processed before they can be downloaded. This log is still being written or processed.',
      '%s restarted this build.' => '%s restarted this build.',
      'Harbormaster Buildables' => 'Harbormaster Buildables',
      'Sleep' => 'Sleep',
      'Writing log, slowly...' => 'Writing log, slowly...',
      'Unknown CircleCI build type "%s". Expected "%s" or "%s".' => 'Unknown CircleCI build type "%s". Expected "%s" or "%s".',
      'You must openBuildLog() before you can append() content to the log.' => 'You must openBuildLog() before you can append() content to the log.',
      'Plan %d' => 'Plan %s',
      'Drydock: Run Command' => 'Drydock: Run Command',
      'Abort the build, discarding progress.' => 'Abort the build, discarding progress.',
      'Buildables may receive control commands like "abort" and "restart". Sending a control command to a Buildable is the same as sending it to each Build for the Buildable.' => 'Buildables may receive control commands like "abort" and "restart". Sending a control command to a Buildable is the same as sending it to each Build for the Buildable.',
      'Coverage information for this test.' => 'Coverage information for this test.',
      'This attachment exists solely to provide compatibility with the message format returned by an outdated API method. It will be taken away at some point and you should not rely on these fields being available.' => 'This attachment exists solely to provide compatibility with the message format returned by an outdated API method. It will be taken away at some point and you should not rely on these fields being available.',
      'The build plan name.' => 'The build plan name.',
      'View Current Build' => 'View Current Build',
      'Next Steps' => 'Next Steps',
      'Fragment' => 'Fragment',
      'Build target this log is attached to.' => 'Build target this log is attached to.',
      'Work will continue on all builds. Really resume?' => 'Work will continue on all builds. Really resume?',
      'Already Restarting' => 'Already Restarting',
      'Stores a URI.' => 'Stores a URI.',
      'Edit Build Step: %s' => 'Edit Build Step: %s',
      'rXYZ, R123, D456, ...' => 'rXYZ, R123, D456, ...',
      'Rebuild all logs.' => 'Rebuild all logs.',
      'Attempting to access unknown build status property ("%s").' => 'Attempting to access unknown build status property ("%s").',
      'Rebuild the file and summary for a log. This is primarily intended to make it easier to develop new log summarizers.' => 'Rebuild the file and summary for a log. This is primarily intended to make it easier to develop new log summarizers.',
      'Standalone Log Fragment' => 'Standalone Log Fragment',
      'Harbormaster Build Steps' => 'Harbormaster Build Steps',
      'You can report test results when updating the state of a build target. The
    simplest way to do this is to report all the results alongside a `pass` or
    `fail` message, but you can also send a `work` message to report intermediate
    results.
    To provide unit test results, pass a list of results in the `unit`
    parameter. Each result should be a dictionary with these keys:
    %s
    The `result` parameter recognizes these test results:
    %s
    This is a simple, valid value for the `unit` parameter. It reports one passing
    test and one failing test:
    ```lang=json
    %s
    ```' => 'You can report test results when updating the state of a build target. The
    simplest way to do this is to report all the results alongside a `pass` or
    `fail` message, but you can also send a `work` message to report intermediate
    results.
    To provide unit test results, pass a list of results in the `unit`
    parameter. Each result should be a dictionary with these keys:
    %s
    The `result` parameter recognizes these test results:
    %s
    This is a simple, valid value for the `unit` parameter. It reports one passing
    test and one failing test:
    ```lang=json
    %s
    ```',
      'Origin' => 'Origin',
      'Build Status' => 'Build Status',
      'Run At' => 'Run At',
      'No build plan behavior with key "%s" exists.' => 'No build plan behavior with key "%s" exists.',
      'The build may not be restarted.' => 'The build may not be restarted.',
      'Initiators' => 'Initiators',
      'Runtime duration of the test, in seconds.' => 'Runtime duration of the test, in seconds.',
      'Lint Messages' => 'Lint Messages',
      'Missing Dependency' => 'Missing Dependency',
      'Search for targets started on or after a particular date.' => 'Search for targets started on or after a particular date.',
      'This target has no associated artifacts.' => 'This target has no associated artifacts.',
      'Choose Build Statuses' => 'Choose Build Statuses',
      'Search for targets started on or before a particular date.' => 'Search for targets started on or before a particular date.',
      'New Step: %s' => 'New Step: %s',
      'This build plan will deadlock when executed, due to circular dependencies present in the build plan. Examine the step list and resolve the deadlock.' => 'This build plan will deadlock when executed, due to circular dependencies present in the build plan. Examine the step list and resolve the deadlock.',
      'This older log is missing required rendering data. To rebuild rendering data, run: %s' => 'This older log is missing required rendering data. To rebuild rendering data, run: %s',
      '%s changed the %s behavior for this plan from %s to %s.' => '%s changed the %s behavior for this plan from %s to %s.',
      'No such buildable "%s"!' => 'No such buildable "%s"!',
      'Receiver object (of class "%s") is not a valid receiver.' => 'Receiver object (of class "%s") is not a valid receiver.',
      'PHID of the object that is built.' => 'PHID of the object that is built.',
      'Harbormaster Build Logs' => 'Harbormaster Build Logs',
      'QUEUED' => 'QUEUED',
      'Retrieve information about Harbormaster build steps.' => 'Retrieve information about Harbormaster build steps.',
      'Edit Harbormaster Build Configurations' => 'Edit Harbormaster Build Configurations',
      'WARNING: This build step is new and experimental!
    To build **revisions** with CircleCI, they must:
      - belong to a tracked repository;
      - the repository must have a Staging Area configured;
      - the Staging Area must be hosted on GitHub; and
      - you must configure the webhook described below.
    To build **commits** with CircleCI, they must:
      - belong to a repository that is being imported from GitHub; and
      - you must configure the webhook described below.
    Webhook Configuration
    =====================
    Add this webhook to your `circle.yml` file to make CircleCI report results
    to Harbormaster. Until you install this hook, builds will hang waiting for
    a response from CircleCI.
    ```lang=yml
    notify:
      webhooks:
        - url: %s
    ```
    Environment
    ===========
    These variables will be available in the build environment:
    | Variable | Description |
    |----------|-------------|
    | `HARBORMASTER_BUILD_TARGET_PHID` | PHID of the Build Target.
    ' => 'WARNING: This build step is new and experimental!
    To build **revisions** with CircleCI, they must:
      - belong to a tracked repository;
      - the repository must have a Staging Area configured;
      - the Staging Area must be hosted on GitHub; and
      - you must configure the webhook described below.
    To build **commits** with CircleCI, they must:
      - belong to a repository that is being imported from GitHub; and
      - you must configure the webhook described below.
    Webhook Configuration
    =====================
    Add this webhook to your `circle.yml` file to make CircleCI report results
    to Harbormaster. Until you install this hook, builds will hang waiting for
    a response from CircleCI.
    ```lang=yml
    notify:
      webhooks:
        - url: %s
    ```
    Environment
    ===========
    These variables will be available in the build environment:
    | Variable | Description |
    |----------|-------------|
    | `HARBORMASTER_BUILD_TARGET_PHID` | PHID of the Build Target.
    ',
      'Search for builds started by someone or something in particular.' => 'Search for builds started by someone or something in particular.',
      'Any user who can view the plan can run it manually.' => 'Any user who can view the plan can run it manually.',
      'When a build is restarted, side effects associated with the build may occur again.' => 'When a build is restarted, side effects associated with the build may occur again.',
      'The build may be restarted.' => 'The build may be restarted.',
      'Resume work on a previously paused build.' => 'Resume work on a previously paused build.',
      'Automatic `arc unit` step.' => 'Automatic `arc unit` step.',
      'Build Plan' => 'Build Plan',
      'Drydock lease PHID "%s" does not correspond to a valid lease.' => 'Drydock lease PHID "%s" does not correspond to a valid lease.',
      'The name of this build.' => 'The name of this build.',
      'File PHID "%s" does not correspond to a valid file.' => 'File PHID "%s" does not correspond to a valid file.',
      'Name one or more buildables to publish, like "B123".' => 'Name one or more buildables to publish, like "B123".',
      'Pausing' => 'Pausing',
      'Manual' => 'Manual',
      'The name of the build step.' => 'The name of the build step.',
      'All Builds' => 'All Builds',
      'No such object "%s" exists.' => 'No such object "%s" exists.',
      'Object ("%s") claims "%s" is a GitHub repository URI, but the path ("%s") does not have enough components (expected at least two).' => 'Object ("%s") claims "%s" is a GitHub repository URI, but the path ("%s") does not have enough components (expected at least two).',
      'Create Buildable' => 'Create Buildable',
      'To run a build manually, you normally must have permission to edit the related build plan. If you would prefer that anyone who can see the build plan be able to run and restart the build, you can change the behavior here.
    Note that this controls access to all build management actions: "Run Plan Manually", "Restart", "Abort", "Pause", and "Resume".
    WARNING: This may be unsafe, particularly if the build has side effects like deployment.
    If you weaken this policy, an attacker with control of an account that has "Can View" permission but not "Can Edit" permission can manually run this build against any old version of the code, including versions with known security issues.
    If running the build has a side effect like deploying code, they can force deployment of a vulnerable version and then escalate into an attack against the deployed service.' => 'To run a build manually, you normally must have permission to edit the related build plan. If you would prefer that anyone who can see the build plan be able to run and restart the build, you can change the behavior here.
    Note that this controls access to all build management actions: "Run Plan Manually", "Restart", "Abort", "Pause", and "Resume".
    WARNING: This may be unsafe, particularly if the build has side effects like deployment.
    If you weaken this policy, an attacker with control of an account that has "Can View" permission but not "Can Edit" permission can manually run this build against any old version of the code, including versions with known security issues.
    If running the build has a side effect like deploying code, they can force deployment of a vulnerable version and then escalate into an attack against the deployed service.',
      'Build Log %d (%s - %s)' => 'Build Log %s (%s - %s)',
      'Lease Working Copy' => 'Lease Working Copy',
      'No Build Plan Permission' => 'No Build Plan Permission',
      'No behavior with key "%s" exists. Valid keys are: %s.' => 'No behavior with key "%s" exists. Valid keys are: %s.',
      'Nameless Test (%d)' => 'Nameless Test (%s)',
      'Really restart build?' => 'Really restart build?',
      '%s renamed this build plan from "%s" to "%s".' => '%s renamed this build plan from "%s" to "%s".',
      'Completed After' => 'Completed After',
      '%s resumed this buildable.' => '%s resumed this buildable.',
      'Force logs to rebuild even if they appear to be in good shape already.' => 'Force logs to rebuild even if they appear to be in good shape already.',
      'You can not process build log chunks unless the log lock is held.' => 'You can not process build log chunks unless the log lock is held.',
      'Unit Tests' => 'Unit Tests',
      'No buildables found.' => 'No buildables found.',
      'Invalid build log PHID "%s".' => 'Invalid build log PHID "%s".',
      'References a host lease from Drydock.' => 'References a host lease from Drydock.',
      'Type a build status name...' => 'Type a build status name...',
      'Short message name, like "Syntax Error".' => 'Short message name, like "Syntax Error".',
      'Stores a reference to file data.' => 'Stores a reference to file data.',
      'Edit Step: %s' => 'Edit Step: %s',
      'Optional namespace for this test. This is organizational and is often a class or module name, like "ExampleTestCase".' => 'Optional namespace for this test. This is organizational and is often a class or module name, like "ExampleTestCase".',
      'Buildkite' => 'Buildkite',
      'Built for %s' => 'Built for %s',
      'Create a build artifact.' => 'Create a build artifact.',
      'Pause, abort, restart, and report results for builds.' => 'Pause, abort, restart, and report results for builds.',
      'Step Type' => 'Step Type',
      'You must openBuildLog() before you can closeBuildLog().' => 'You must openBuildLog() before you can closeBuildLog().',
      'Unknown Input' => 'Unknown Input',
      'HTTP Request' => 'HTTP Request',
      'Skipped' => 'Skipped',
      'Optional label for this URI.' => 'Optional label for this URI.',
      'Harbormaster' => 'Harbormaster',
      'Build Log' => 'Build Log',
      'Control Commands' => 'Control Commands',
      'If Viewable' => 'If Viewable',
      'Users must be able to see a build target to view its build log.' => 'Users must be able to see a build target to view its build log.',
      'Waiting for %s' => 'Waiting for %s',
      'Query Harbormaster buildables.' => 'Query Harbormaster buildables.',
      'Create Build Plan' => 'Create Build Plan',
      'Call omits required "type" parameter. Specify the type of message you want to send.' => 'Call omits required "type" parameter. Specify the type of message you want to send.',
      '%s disabled this build plan.' => '%s disabled this build plan.',
      'Create Build' => 'Create Build',
      'Reading log content from stdin...' => 'Reading log content from stdin...',
      'No messages for this build target.' => 'No messages for this build target.',
      'View in CircleCI' => 'View in CircleCI',
      '%s aborted this buildable.' => '%s aborted this buildable.',
      'Hold Drafts' => 'Hold Drafts',
      'All Plans' => 'All Plans',
      'You can not resume this build because it is already aborting.' => 'You can not resume this build because it is already aborting.',
      'Unable to Resume Build' => 'Unable to Resume Build',
      'Runnable' => 'Runnable',
      'No active Herald rules trigger this build.' => 'No active Herald rules trigger this build.',
      'You can not specify both "--id" and "--all". Choose one or the other.' => 'You can not specify both "--id" and "--all". Choose one or the other.',
      'Revisions are not sent for review until the build completes, and are returned to the author for updates if the build fails.' => 'Revisions are not sent for review until the build completes, and are returned to the author for updates if the build fails.',
      'Invalid build ID "%s".' => 'Invalid build ID "%s".',
      'This engine is used to edit Harbormaster builds.' => 'This engine is used to edit Harbormaster builds.',
      'Started Before' => 'Started Before',
      'The URI to store.' => 'The URI to store.',
      'Type a build plan name...' => 'Type a build plan name...',
      'Harbormaster Build %s ("%s") for %s' => 'Harbormaster Build %s ("%s") for %s',
      'Updating Build Targets' => 'Updating Build Targets',
      'Delete Build Step' => 'Delete Build Step',
      'Step %d.%d' => 'Step %s.%s',
      'Log "%s" is still live. Logs can not be finalized until they have closed.' => 'Log "%s" is still live. Logs can not be finalized until they have closed.',
      'Use this method to attach artifacts to build targets while running builds. Artifacts can be used to carry data through a complex build workflow, provide extra information to users, or store build results.' => 'Use this method to attach artifacts to build targets while running builds. Artifacts can be used to carry data through a complex build workflow, provide extra information to users, or store build results.',
      'This engine is used to edit Harbormaster build steps.' => 'This engine is used to edit Harbormaster build steps.',
      'Modify running builds, and report build results.' => 'Modify running builds, and report build results.',
      'OK: No Harbormaster target PHID.' => 'OK: No Harbormaster target PHID.',
      'Each artifact also needs an `artifactKey`, which names the artifact. Finally, you will provide some `artifactData` to fill in the content of the artifact. The data you provide depends on what type of artifact you are creating.' => 'Each artifact also needs an `artifactKey`, which names the artifact. Finally, you will provide some `artifactData` to fill in the content of the artifact. The data you provide depends on what type of artifact you are creating.',
      'Local Name' => 'Local Name',
      'Long explanation of the lint message.' => 'Long explanation of the lint message.',
      'This step has an invalid implementation (%s).' => 'This step has an invalid implementation (%s).',
      'Build Target PHID' => 'Build Target PHID',
      'Build/CI' => 'Build/CI',
      'rXabcdef, PHID-DIFF-1234, ...' => 'rXabcdef, PHID-DIFF-1234, ...',
      'Applying plan %s to new buildable %s...' => 'Applying plan %s to new buildable %s...',
      'Bad Input Type' => 'Bad Input Type',
      'True if this is a manual buildable.' => 'True if this is a manual buildable.',
      'Upload %s from %s.' => 'Upload %s from %s.',
      'Search for targets completed on or after a particular date.' => 'Search for targets completed on or after a particular date.',
      'Publish a buildable. This is primarily useful for developing and debugging applications which have buildable objects.' => 'Publish a buildable. This is primarily useful for developing and debugging applications which have buildable objects.',
      'Search for builds running against particular buildables.' => 'Search for builds running against particular buildables.',
      'Specify exactly one buildable object, by object name.' => 'Specify exactly one buildable object, by object name.',
      'Can Create Build Plans' => 'Can Create Build Plans',
      'You can not abort a build that uses an autoplan.' => 'You can not abort a build that uses an autoplan.',
      'You can not pause this build because it is already pausing.' => 'You can not pause this build because it is already pausing.',
      'Add Build Step' => 'Add Build Step',
      'No such build target "%s"!' => 'No such build target "%s"!',
      'My Builds' => 'My Builds',
      'Insufficent Build Plan Permission' => 'Insufficent Build Plan Permission',
      'Restarting' => 'Restarting',
      'Write rate must be more than 0 bytes/sec.' => 'Write rate must be more than 0 bytes/sec.',
      'Required Input' => 'Required Input',
      'The current UNIX timestamp.' => 'The current UNIX timestamp.',
      'Object "%s" is not a Harbormaster Buildable!' => 'Object "%s" is not a Harbormaster Buildable!',
      'Length of the log in bytes.' => 'Length of the log in bytes.',
      'Report that work on the target is ongoing. This message can be used to report partial results during a build.' => 'Report that work on the target is ongoing. This message can be used to report partial results during a build.',
      'Really pause %s build(s)?' => 'Really pause %s build(s)?',
      'This group has no available build steps.' => 'This group has no available build steps.',
      'Stores a URI.
    With `ui.external`, you can use this artifact type to add links to build results in an external build system.' => 'Stores a URI.
    With `ui.external`, you can use this artifact type to add links to build results in an external build system.',
      'CircleCI' => 'CircleCI',
      'Trigger a build in Buildkite.' => 'Trigger a build in Buildkite.',
      'Call omits required "receiver" parameter. Specify the PHID of the object you want to send a message to.' => 'Call omits required "receiver" parameter. Specify the PHID of the object you want to send a message to.',
      'When' => 'When',
      'Search for only manual or automatic buildables.' => 'Search for only manual or automatic buildables.',
      'New plan name.' => 'New plan name.',
      'You can only abort some builds. Work will halt immediately on builds you can abort. Progress will be discarded, and builds must be completely restarted if you want them to complete.' => 'You can only abort some builds. Work will halt immediately on builds you can abort. Progress will be discarded, and builds must be completely restarted if you want them to complete.',
      'Harbormaster Build Targets' => 'Harbormaster Build Targets',
      'Sleep for a specified number of seconds.' => 'Sleep for a specified number of seconds.',
      'The current status of this build.' => 'The current status of this build.',
      'Reporting Lint Results' => 'Reporting Lint Results',
      'Make an HTTP %s request to %s.' => 'Make an HTTP %s request to %s.',
      'Status "%s" is not a valid build plan status. Valid statuses are: %s.' => 'Status "%s" is not a valid build plan status. Valid statuses are: %s.',
      'A file containing the log data.' => 'A file containing the log data.',
      '<Invalid URI>' => '<Invalid URI>',
      'You can not issue this command because you do not have permission to access the build plan for this build.' => 'You can not issue this command because you do not have permission to access the build plan for this build.',
      'Artifact Name' => 'Artifact Name',
      'Build Artifact %d' => 'Build Artifact %s',
      'Object "%s" is not a buildable!' => 'Object "%s" is not a buildable!',
      'Use %s to specify a build plan to run.' => 'Use %s to specify a build plan to run.',
      'Input Artifacts' => 'Input Artifacts',
      'Revisions are sent for review regardless of the status of the build.' => 'Revisions are sent for review regardless of the status of the build.',
      'Unknown chunk encoding "%s"!' => 'Unknown chunk encoding "%s"!',
      'Object ("%s") claims "%s" is a GitHub repository URI, but the domain does not appear to be GitHub.' => 'Object ("%s") claims "%s" is a GitHub repository URI, but the domain does not appear to be GitHub.',
      'Usually, builds may be restarted by users who have permission to edit the related build plan. (You can change who is allowed to restart a build by adjusting the "Runnable" behavior.)
    Restarting a build may be useful if you suspect it has failed for environmental or circumstantial reasons unrelated to the actual code, and want to give it another chance at glory.
    If you want to prevent a build from being restarted, you can change when it may be restarted by adjusting this behavior. This may be useful to prevent accidents where a build with a dangerous side effect (like deployment) is restarted improperly.' => 'Usually, builds may be restarted by users who have permission to edit the related build plan. (You can change who is allowed to restart a build by adjusting the "Runnable" behavior.)
    Restarting a build may be useful if you suspect it has failed for environmental or circumstantial reasons unrelated to the actual code, and want to give it another chance at glory.
    If you want to prevent a build from being restarted, you can change when it may be restarted by adjusting this behavior. This may be useful to prevent accidents where a build with a dangerous side effect (like deployment) is restarted improperly.',
      'The name of this build plan.' => 'The name of this build plan.',
      'Opened a new build log:' => 'Opened a new build log:',
      'Unable to determine how to clone the repository for this buildable: it is not associated with a tracked repository.' => 'Unable to determine how to clone the repository for this buildable: it is not associated with a tracked repository.',
      '"arc land" never warns that the build is still running or has failed.' => '"arc land" never warns that the build is still running or has failed.',
      'This build can not be restarted because the build plan is configured to prevent the build from restarting unless it has failed, and it has not failed.' => 'This build can not be restarted because the build plan is configured to prevent the build from restarting unless it has failed, and it has not failed.',
      '"arc land" warns if the build has failed, but ignores the build if it is still running.' => '"arc land" warns if the build has failed, but ignores the build if it is still running.',
      'View URI for the buildable.' => 'View URI for the buildable.',
      'This build can not be restarted because the build plan is configured to prevent the build from restarting.' => 'This build can not be restarted because the build plan is configured to prevent the build from restarting.',
      'You can use this method (`harbormaster.sendmessage`) to send control commands
    to Buildables and Builds.
    Specify the Build or Buildable to receive the control command by providing its
    PHID in the `receiver` parameter.
    Sending a control command to a Buildable has the same effect as sending it to
    each Build for the Buildable. For example, sending a "Pause" message to a
    Buildable will pause all builds for the Buildable (or at least attempt to).
    When sending control commands, the `unit` and `lint` parameters of this API
    method must be omitted. You can not report lint or unit results directly to
    a Build or Buildable, and can not report them alongside a control command.
    More broadly, you can not report build results directly to a Build or
    Buildable. Instead, report results to a Build Target.
    See below for a list of control commands.
    ' => 'You can use this method (`harbormaster.sendmessage`) to send control commands
    to Buildables and Builds.
    Specify the Build or Buildable to receive the control command by providing its
    PHID in the `receiver` parameter.
    Sending a control command to a Buildable has the same effect as sending it to
    each Build for the Buildable. For example, sending a "Pause" message to a
    Buildable will pause all builds for the Buildable (or at least attempt to).
    When sending control commands, the `unit` and `lint` parameters of this API
    method must be omitted. You can not report lint or unit results directly to
    a Build or Buildable, and can not report them alongside a control command.
    More broadly, you can not report build results directly to a Build or
    Buildable. Instead, report results to a Build Target.
    See below for a list of control commands.
    ',
      'You must choose a name for your build plan.' => 'You must choose a name for your build plan.',
      'Build Targets may receive build status and result messages, like "pass" or "fail".' => 'Build Targets may receive build status and result messages, like "pass" or "fail".',
      'If you abort all builds, work will halt immediately. Work will be discarded, and builds must be completely restarted.' => 'If you abort all builds, work will halt immediately. Work will be discarded, and builds must be completely restarted.',
      'Reporting Unit Results' => 'Reporting Unit Results',
      'Argument "%s" does not name a buildable. Provide one or more valid buildable monograms or PHIDs.' => 'Argument "%s" does not name a buildable. Provide one or more valid buildable monograms or PHIDs.',
      'Edit Step' => 'Edit Step',
      'The ID of the current build.' => 'The ID of the current build.',
      'Progress on running builds will be discarded.' => 'Progress on running builds will be discarded.',
      'Submit builds into the build queue normally instead of running them in the foreground.' => 'Submit builds into the build queue normally instead of running them in the foreground.',
      '%s resumed this build.' => '%s resumed this build.',
      'This input is required, but not configured.' => 'This input is required, but not configured.',
      'Bad build target ID "%d".' => 'Bad build target ID "%s".',
      'Edit Build' => 'Edit Build',
      'Restart %s build(s)?' => 'Restart %s build(s)?',
      'This build log is already open!' => 'This build log is already open!',
      'Show Only Automated Builds' => 'Show Only Automated Builds',
      'Format for the text provided in "details". Valid values are "text" (default) or "remarkup". This controls how test details are rendered when shown to users.' => 'Format for the text provided in "details". Valid values are "text" (default) or "remarkup". This controls how test details are rendered when shown to users.',
      'Build Target ID' => 'Build Target ID',
      'Build will restart.' => 'Build will restart.',
      'Unable to load the file for this log. The file may have been destroyed.' => 'Unable to load the file for this log. The file may have been destroyed.',
      'Short test name, like "ExampleTest".' => 'Short test name, like "ExampleTest".',
      'Active Plans' => 'Active Plans',
      'Restartable' => 'Restartable',
      'Unit %d' => 'Unit %s',
      'Harbormaster build target "%s" is not a Buildkite build step. Only Buildkite steps may be updated via the Buildkite hook.' => 'Harbormaster build target "%s" is not a Buildkite build step. Only Buildkite steps may be updated via the Buildkite hook.',
      'Choose a build plan behavior for "%s".' => 'Choose a build plan behavior for "%s".',
      'New View (Prototype)' => 'New View (Prototype)',
      'After completing this build step Harbormaster can continue the build normally, or it can pause the build and wait for a message. If you are using this build step to trigger some work in an external system, you may want wait for that system to perform the work and report results back.
    If you select **Continue Build Normally**, the build plan will proceed once this step finishes.
    If you select **Wait For Message**, the build plan will pause indefinitely once this step finishes. To resume the build, an external system must call `harbormaster.sendmessage` with the build target PHID, and either `"pass"` or `"fail"` to indicate the result for this step. After the result is recorded, the build plan will resume.' => 'After completing this build step Harbormaster can continue the build normally, or it can pause the build and wait for a message. If you are using this build step to trigger some work in an external system, you may want wait for that system to perform the work and report results back.
    If you select **Continue Build Normally**, the build plan will proceed once this step finishes.
    If you select **Wait For Message**, the build plan will pause indefinitely once this step finishes. To resume the build, an external system must call `harbormaster.sendmessage` with the build target PHID, and either `"pass"` or `"fail"` to indicate the result for this step. After the result is recorded, the build plan will resume.',
      'Disable this build plan? It will no longer be executed automatically.' => 'Disable this build plan? It will no longer be executed automatically.',
      'Ship Some Freight' => 'Ship Some Freight',
      '"arc land" warns if the build is still running or has failed.' => '"arc land" warns if the build is still running or has failed.',
      'View Details' => 'View Details',
      'Buildable' => 'Buildable',
      'Only users who can edit the plan can run it manually.' => 'Only users who can edit the plan can run it manually.',
      'Unable to find fetch!' => 'Unable to find fetch!',
      'arc lint + arc unit' => 'arc lint + arc unit',
      '%s restarted this buildable.' => '%s restarted this buildable.',
      'Really abort build?' => 'Really abort build?',
      'The build step description.' => 'The build step description.',
      'Browse Build Plans' => 'Browse Build Plans',
      'The PHID of the user or Object that initiated the build, if applicable.' => 'The PHID of the user or Object that initiated the build, if applicable.',
      'All Buildables' => 'All Buildables',
      'Also Clone' => 'Also Clone',
      'Query information about build artifacts.' => 'Query information about build artifacts.',
      'Unable to Send Command' => 'Unable to Send Command',
      'No behavior option is marked as the default option (for behavior "%s"). Exactly one option must be marked as the default option.' => 'No behavior option is marked as the default option (for behavior "%s"). Exactly one option must be marked as the default option.',
      'Select all active builds.' => 'Select all active builds.',
      'Preparing' => 'Preparing',
      'Build Plans' => 'Build Plans',
      'Edit Buildable: %s' => 'Edit Buildable: %s',
      'Unable to load build target "%s".' => 'Unable to load build target "%s".',
      'Retrieve information about Harbormaster build plans.' => 'Retrieve information about Harbormaster build plans.',
      'File to create an artifact from.' => 'File to create an artifact from.',
      'You can only resume some builds. Work will continue on builds you have permission to resume.' => 'You can only resume some builds. Work will continue on builds you have permission to resume.',
      'All Artifacts' => 'All Artifacts',
      'Attempt to load log bytes (%d - %d) failed: the loaded range (%d - %d) does not span the requested range.' => 'Attempt to load log bytes (%s - %s) failed: the loaded range (%s - %s) does not span the requested range.',
      'The current status of this buildable.' => 'The current status of this buildable.',
      'Standalone Fragment' => 'Standalone Fragment',
      'Wait For Message' => 'Wait For Message',
      'Builds may receive control commands like "pause", "resume", "abort", and "restart".' => 'Builds may receive control commands like "pause", "resume", "abort", and "restart".',
      'Edit Build Plan' => 'Edit Build Plan',
      'Select one or more builds by ID.' => 'Select one or more builds by ID.',
      'Unable to find lines.' => 'Unable to find lines.',
      '%s empty logs are hidden.' => '%s empty logs are hidden.',
      'Delete Step' => 'Delete Step',
      'No builds found.' => 'No builds found.',
      'OK: Processed event.' => 'OK: Processed event.',
      'Status for the build target.' => 'Status for the build target.',
      'CircleCI did not return a "%s"!' => 'CircleCI did not return a "%s"!',
      'Message Type' => 'Message Type',
      'Artifact Type' => 'Artifact Type',
      'Object "%s" is not a HarbormasterBuildable (it is a "%s"). Name one or more buildables to publish, like "B123".' => 'Object "%s" is not a HarbormasterBuildable (it is a "%s"). Name one or more buildables to publish, like "B123".',
      'Load or create build autotargets.' => 'Load or create build autotargets.',
      'Apply transactions to create a new build plan or edit an existing one.' => 'Apply transactions to create a new build plan or edit an existing one.',
      'Apply transactions to create a new build or edit an existing one.' => 'Apply transactions to create a new build or edit an existing one.',
      'Warn When Landing' => 'Warn When Landing',
      'Attempting to access unknown buildable status property ("%s").' => 'Attempting to access unknown buildable status property ("%s").',
      'The current status of this build plan.' => 'The current status of this build plan.',
      'Unknown Status ("%s")' => 'Unknown Status ("%s")',
      'You can not restart this build because you do not have permission to access the build plan.' => 'You can not restart this build because you do not have permission to access the build plan.',
      'Edit Build Plan: %s' => 'Edit Build Plan: %s',
      'View in Buildkite' => 'View in Buildkite',
      'Multiple behavior options (for behavior "%s") have the same key ("%s"). Each option must have a unique key.' => 'Multiple behavior options (for behavior "%s") have the same key ("%s"). Each option must have a unique key.',
      'No implementation is specified!' => 'No implementation is specified!',
      '(This is an explicit exception.)' => '(This is an explicit exception.)',
      'Abort Build' => 'Abort Build',
      'Artifacts' => 'Artifacts',
      'Invalid Implementation ("%s")!' => 'Invalid Implementation ("%s")!',
      'Apply transactions to create a new buildable or edit an existing one.' => 'Apply transactions to create a new buildable or edit an existing one.',
      'View Full Test Results (%s)' => 'View Full Test Results (%s)',
      '<Unknown Artifact Type>' => '<Unknown Artifact Type>',
      'Multiple behavior options (for behavior "%s") are marked as default options ("%s" and "%s"). Exactly one option must be marked as the default option.' => 'Multiple behavior options (for behavior "%s") are marked as default options ("%s" and "%s"). Exactly one option must be marked as the default option.',
      'Behavior configuration for the build plan.' => 'Behavior configuration for the build plan.',
      'You can not pause this build because it is already paused.' => 'You can not pause this build because it is already paused.',
      'Byte position on the line where the text which triggered the message starts. The first byte on the line is byte 1, not byte 0. This position is byte-based (not character-based) because not all lintable files have a valid character encoding.' => 'Byte position on the line where the text which triggered the message starts. The first byte on the line is byte 1, not byte 0. This position is byte-based (not character-based) because not all lintable files have a valid character encoding.',
      'Unable to inflate log chunk!' => 'Unable to inflate log chunk!',
      'Search for artifacts attached to particular build targets.' => 'Search for artifacts attached to particular build targets.',
      'Testing Utilities' => 'Testing Utilities',
      'Search for builds with given statuses.' => 'Search for builds with given statuses.',
      'Restart Harbormaster builds.' => 'Restart Harbormaster builds.',
      'Value "%s" is not a valid option for behavior "%s". Valid options are: %s.' => 'Value "%s" is not a valid option for behavior "%s". Valid options are: %s.',
      'Automatic `arc lint` step.' => 'Automatic `arc lint` step.',
      'PHID of the object containing this buildable.' => 'PHID of the object containing this buildable.',
      'Call includes "unit" parameter. This parameter must be omitted when the receiver is not a Build Target.' => 'Call includes "unit" parameter. This parameter must be omitted when the receiver is not a Build Target.',
      'Variables' => 'Variables',
      'The buildable does not wait for the build.' => 'The buildable does not wait for the build.',
      'Unknown Unit Message ("%s")' => 'Unknown Unit Message ("%s")',
      '%s: %s -> %s' => '%s: %s -> %s',
      'Search for builds of particular objects.' => 'Search for builds of particular objects.',
      'Show More Below' => 'Show More Below',
      'Search for targets created on or after a particular date.' => 'Search for targets created on or after a particular date.',
      'Build Target ID to attach the log to.' => 'Build Target ID to attach the log to.',
      'Restart Builds' => 'Restart Builds',
      'Additional human-readable information about the failure.' => 'Additional human-readable information about the failure.',
      'Trigger a build in CircleCI.' => 'Trigger a build in CircleCI.',
      'Aborted' => 'Aborted',
      'Create Build Step' => 'Create Build Step',
      'Plan Behaviors' => 'Plan Behaviors',
      'If true, display this URI in the UI as an link to additional build details in an external build system.' => 'If true, display this URI in the UI as an link to additional build details in an external build system.',
      'Write a new Harbormaster build log. This is primarily intended to make development and testing easier.' => 'Write a new Harbormaster build log. This is primarily intended to make development and testing easier.',
      'Update only this build.' => 'Update only this build.',
      'Pause Builds' => 'Pause Builds',
      'Search for targets created on or before a particular date.' => 'Search for targets created on or before a particular date.',
      'Run build plans' => 'Run build plans',
      'Use one of "--id" or "--active" to select builds, but not both.' => 'Use one of "--id" or "--active" to select builds, but not both.',
      'Resume Builds' => 'Resume Builds',
      'RESTARTING' => 'RESTARTING',
      'This build step has since been deleted on the build plan.  Some information may be omitted.' => 'This build step has since been deleted on the build plan.  Some information may be omitted.',
      'There is no implementation available for artifacts of type "%s".' => 'There is no implementation available for artifacts of type "%s".',
      'Build Step' => 'Build Step',
      '**publish** __buildable__ ...' => '**publish** __buildable__ ...',
      'Syntax Error' => 'Syntax Error',
      'This dependency specifies a build step which doesn\'t exist.' => 'This dependency specifies a build step which doesn\'t exist.',
      'All builds will restart.' => 'All builds will restart.',
      'Valid Input' => 'Valid Input',
      'This input is bound to an artifact ("%s") which does not exist at this stage in the build process.' => 'This input is bound to an artifact ("%s") which does not exist at this stage in the build process.',
      'Unknown log chunk encoding ("%s")!' => 'Unknown log chunk encoding ("%s")!',
      'No builds to restart.' => 'No builds to restart.',
      'Build target ("%s") has the wrong type of build step. Only CircleCI build steps may be updated via the CircleCI webhook.' => 'Build target ("%s") has the wrong type of build step. Only CircleCI build steps may be updated via the CircleCI webhook.',
      'Completed at %s' => 'Completed at %s',
      'Build' => 'Build',
      'Make HTTP Request' => 'Make HTTP Request',
      'Really pause build?' => 'Really pause build?',
      'If updating generates tasks, queue them for the daemons instead of executing them in this process.' => 'If updating generates tasks, queue them for the daemons instead of executing them in this process.',
      'This build plan does not have any build steps yet, so it will not do anything when run.' => 'This build plan does not have any build steps yet, so it will not do anything when run.',
      'Type another build step name...' => 'Type another build step name...',
      'Buildable %d' => 'Buildable %s',
      'Really restart %s build(s)?' => 'Really restart %s build(s)?',
      '"arc land" warns if the build is still running, but ignores the build if it has failed.' => '"arc land" warns if the build is still running, but ignores the build if it has failed.',
      'Recent Builds' => 'Recent Builds',
      'Rename the plan.' => 'Rename the plan.',
      'Edit Harbormaster Build Step Configurations' => 'Edit Harbormaster Build Step Configurations',
      'Users must be able to see a build target to see its artifacts.' => 'Users must be able to see a build target to see its artifacts.',
      'Harbormaster build objects work somewhat differently from objects in many other
    applications. Most application objects can be edited directly using synchronous
    APIs (like `maniphest.edit`, `differential.revision.edit`, and so on).
    However, builds require long-running background processing and Habormaster
    objects have a more complex lifecycle than most other application objects and
    may spend significant periods of time locked by daemon processes during build
    execition. A synchronous edit might need to wait an arbitrarily long amount of
    time for this lock to become available so the edit could be applied.
    Additionally, some edits may also require an arbitrarily long amount of time to
    //complete//. For example, aborting a build may execute cleanup steps which
    take minutes (or even hours) to complete.
    Since a synchronous API could not guarantee it could return results to the
    caller in a reasonable amount of time, the edit API for Harbormaster build
    objects is asynchronous: to update a Harbormaster build or build target, use
    this API (`harbormaster.sendmessage`) to send it a message describing an edit
    you would like to effect or additional information you want to provide.
    The message will be processed by the daemons once the build or target reaches
    a suitable state to receive messages.
    Select an object to send a message to using the `receiver` parameter. This
    API method can send messages to multiple types of objects:
    <table>
      <tr>
        <th>Object Type</th>
        <th>PHID Example</th>
        <th>Description</th>
      </tr>
      <tr>
        <td>Harbormaster Buildable</td>
        <td>`PHID-HMBB-...`</td>
        <td>%s</td>
      </tr>
      <tr>
        <td>Harbormaster Build</td>
        <td>`PHID-HMBD-...`</td>
        <td>%s</td>
      </tr>
      <tr>
        <td>Harbormaster Build Target</td>
        <td>`PHID-HMBT-...`</td>
        <td>%s</td>
      </tr>
    </table>
    See below for specifics on sending messages to different object types.' => 'Harbormaster build objects work somewhat differently from objects in many other
    applications. Most application objects can be edited directly using synchronous
    APIs (like `maniphest.edit`, `differential.revision.edit`, and so on).
    However, builds require long-running background processing and Habormaster
    objects have a more complex lifecycle than most other application objects and
    may spend significant periods of time locked by daemon processes during build
    execition. A synchronous edit might need to wait an arbitrarily long amount of
    time for this lock to become available so the edit could be applied.
    Additionally, some edits may also require an arbitrarily long amount of time to
    //complete//. For example, aborting a build may execute cleanup steps which
    take minutes (or even hours) to complete.
    Since a synchronous API could not guarantee it could return results to the
    caller in a reasonable amount of time, the edit API for Harbormaster build
    objects is asynchronous: to update a Harbormaster build or build target, use
    this API (`harbormaster.sendmessage`) to send it a message describing an edit
    you would like to effect or additional information you want to provide.
    The message will be processed by the daemons once the build or target reaches
    a suitable state to receive messages.
    Select an object to send a message to using the `receiver` parameter. This
    API method can send messages to multiple types of objects:
    <table>
      <tr>
        <th>Object Type</th>
        <th>PHID Example</th>
        <th>Description</th>
      </tr>
      <tr>
        <td>Harbormaster Buildable</td>
        <td>`PHID-HMBB-...`</td>
        <td>%s</td>
      </tr>
      <tr>
        <td>Harbormaster Build</td>
        <td>`PHID-HMBD-...`</td>
        <td>%s</td>
      </tr>
      <tr>
        <td>Harbormaster Build Target</td>
        <td>`PHID-HMBT-...`</td>
        <td>%s</td>
      </tr>
    </table>
    See below for specifics on sending messages to different object types.',
      'Build Failed' => 'Build Failed',
      'The buildable waits for the build, and fails if the build fails.' => 'The buildable waits for the build, and fails if the build fails.',
      'References a working copy lease from Drydock.' => 'References a working copy lease from Drydock.',
      'PHID of the build plan being run.' => 'PHID of the build plan being run.',
      'Build Log %d' => 'Build Log %s',
      'Queued at %s' => 'Queued at %s',
      'Pipeline Name' => 'Pipeline Name',
      'You must have edit permission on this build plan to run it manually.' => 'You must have edit permission on this build plan to run it manually.',
      'Data Hash' => 'Data Hash',
      'Automatic Buildable' => 'Automatic Buildable',
      'Lines' => 'Lines',
      'Updating Builds' => 'Updating Builds',
      'The specified buildable does not have a build with ID "%s".' => 'The specified buildable does not have a build with ID "%s".',
      'If Building' => 'If Building',
      'Find out information about builds.' => 'Find out information about builds.',
      'Edit Build Step' => 'Edit Build Step',
      'Edit Harbormaster Build Plan Configurations' => 'Edit Harbormaster Build Plan Configurations',
      'Buildkite request to target "%s" had the wrong authentication token. The Buildkite pipeline and Harbormaster build step must be configured with the same token.' => 'Buildkite request to target "%s" had the wrong authentication token. The Buildkite pipeline and Harbormaster build step must be configured with the same token.',
      'Throw Exception' => 'Throw Exception',
      'Harbormaster Query Builds' => 'Harbormaster Query Builds',
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
    ',
      'Can Not Restart Autobuild' => 'Can Not Restart Autobuild',
      'The object PHID of the Harbormaster Buildable being built.' => 'The object PHID of the Harbormaster Buildable being built.',
      'HTTP Method' => 'HTTP Method',
      'Restart the build, discarding all progress.' => 'Restart the build, discarding all progress.',
      'Epoch timestamp for target start, if the target has started.' => 'Epoch timestamp for target start, if the target has started.',
      'Affects Buildable' => 'Affects Buildable',
      'Build a working copy in Drydock.' => 'Build a working copy in Drydock.',
      'Harbormaster Build Plans' => 'Harbormaster Build Plans',
      'If you pause this build, work will halt once the current steps complete. You can resume the build later.' => 'If you pause this build, work will halt once the current steps complete. You can resume the build later.',
      'Harbormaster User Guide' => 'Harbormaster User Guide',
      'Object ("%s") does not implement interface "%s". Only objects which implement this interface can be built with CircleCI.' => 'Object ("%s") does not implement interface "%s". Only objects which implement this interface can be built with CircleCI.',
      'If Editable' => 'If Editable',
      'Build Target %d' => 'Build Target %s',
      'Completed Before' => 'Completed Before',
      'Download Log' => 'Download Log',
      'Make an HTTP request.' => 'Make an HTTP request.',
      'Drydock Host' => 'Drydock Host',
      'Consumed' => 'Consumed',
      'When users create revisions in Differential, the default behavior is to hold them in the "Draft" state until all builds pass. Once builds pass, the revisions promote and are sent for review, which notifies reviewers.
    The general intent of this workflow is to make sure reviewers are only spending time on review once changes survive automated tests. If a change does not pass tests, it usually is not really ready for review.
    If you want to promote revisions out of "Draft" before builds pass, or promote revisions even when builds fail, you can change the promotion behavior. This may be useful if you have very long-running builds, or some builds which are not very important.
    Users may always use "Request Review" to promote a "Draft" revision, even if builds have failed or are still in progress.' => 'When users create revisions in Differential, the default behavior is to hold them in the "Draft" state until all builds pass. Once builds pass, the revisions promote and are sent for review, which notifies reviewers.
    The general intent of this workflow is to make sure reviewers are only spending time on review once changes survive automated tests. If a change does not pass tests, it usually is not really ready for review.
    If you want to promote revisions out of "Draft" before builds pass, or promote revisions even when builds fail, you can change the promotion behavior. This may be useful if you have very long-running builds, or some builds which are not very important.
    Users may always use "Request Review" to promote a "Draft" revision, even if builds have failed or are still in progress.',
      'Browse Build Initiators' => 'Browse Build Initiators',
      'Run Plan Manually' => 'Run Plan Manually',
      'The PHID of the build plan this build step belongs to.' => 'The PHID of the build plan this build step belongs to.',
      'Unexpected Error' => 'Unexpected Error',
      'Add Step' => 'Add Step',
      'When run against a revision, this build step will abort any older copies of
    the same build plan which are currently running against older diffs.
    There are some nuances to the behavior:
      - if this build step is triggered manually, it won\'t abort anything;
      - this build step won\'t abort manual builds;
      - this build step won\'t abort anything if the diff it is building isn\'t
        the active diff when it runs.
    Build results on outdated diffs often aren\'t very important, so this may
    reduce build queue load without any substantial cost.' => 'When run against a revision, this build step will abort any older copies of
    the same build plan which are currently running against older diffs.
    There are some nuances to the behavior:
      - if this build step is triggered manually, it won\'t abort anything;
      - this build step won\'t abort manual builds;
      - this build step won\'t abort anything if the diff it is building isn\'t
        the active diff when it runs.
    Build results on outdated diffs often aren\'t very important, so this may
    reduce build queue load without any substantial cost.',
      'The object PHID of the container (usually a revision or repository) for the object being built.' => 'The object PHID of the container (usually a revision or repository) for the object being built.',
      'Only Restartable if Failed' => 'Only Restartable if Failed',
      'Processing Harbormaster build log #%d...' => 'Processing Harbormaster build log #%s...',
      'Targets' => 'Targets',
      'No such implementation "%s" exists!' => 'No such implementation "%s" exists!',
      'You can not send this command to any of the current builds for this buildable.' => 'You can not send this command to any of the current builds for this buildable.',
      'Build Step %d: %s' => 'Build Step %s: %s',
      'Started %s build(s): %s.' => 'Started %s build(s): %s.',
      'Message type "%s" is not supported.' => 'Message type "%s" is not supported.',
      '%s paused this buildable.' => '%s paused this buildable.',
      'Create an artifact of this type by passing `%s` as the `artifactType`. When creating an artifact of this type, provide these parameters as a dictionary to `artifactData`:' => 'Create an artifact of this type by passing `%s` as the `artifactType`. When creating an artifact of this type, provide these parameters as a dictionary to `artifactData`:',
      'Choose an archival mode with --mode.' => 'Choose an archival mode with --mode.',
      'Build with CircleCI' => 'Build with CircleCI',
      'You can only pause some builds. Once the current steps complete, work will halt on builds you can pause. You can resume the builds later.' => 'You can only pause some builds. Once the current steps complete, work will halt on builds you can pause. You can resume the builds later.',
      'Can Not Run Plan' => 'Can Not Run Plan',
      'Users must be able to see a build to view its build targets.' => 'Users must be able to see a build to view its build targets.',
      'Build Variables' => 'Build Variables',
      'The PHID of the current build target.' => 'The PHID of the current build target.',
      'Write completed. Closing log...' => 'Write completed. Closing log...',
      'No recent builds.' => 'No recent builds.',
      'This engine is used to edit Harbormaster buildables.' => 'This engine is used to edit Harbormaster buildables.',
      'You are viewing an older run of this build. %s' => 'You are viewing an older run of this build. %s',
      'You must choose a revision or commit to build.' => 'You must choose a revision or commit to build.',
      'No build step provides autotarget "%s"!' => 'No build step provides autotarget "%s"!',
      'Stored Chunks' => 'Stored Chunks',
      'Restart Build' => 'Restart Build',
      'No details provided.' => 'No details provided.',
      'Other Build Steps' => 'Other Build Steps',
      '%s Unsound Test(s)' => '%s Unsound Test(s)',
      'You can not resume this build because it is not paused. You can only resume a paused build.' => 'You can not resume this build because it is not paused. You can only resume a paused build.',
      'Log data hashes differ! Something is tragically wrong!' => 'Log data hashes differ! Something is tragically wrong!',
      'Build will abort.' => 'Build will abort.',
      'Like unit test results, you can report lint results when updating the state
    of a build target. The `lint` parameter should contain results as a list of
    dictionaries with these keys:
    %s
    The `severity` parameter recognizes these severity levels:
    %s
    This is a simple, valid value for the `lint` parameter. It reports one error
    and one warning:
    ```lang=json
    %s
    ```
    ' => 'Like unit test results, you can report lint results when updating the state
    of a build target. The `lint` parameter should contain results as a list of
    dictionaries with these keys:
    %s
    The `severity` parameter recognizes these severity levels:
    %s
    This is a simple, valid value for the `lint` parameter. It reports one error
    and one warning:
    ```lang=json
    %s
    ```
    ',
      'Step' => 'Step',
      'All Steps' => 'All Steps',
      'Run command %s on %s.' => 'Run command %s on %s.',
      'Show Only Manual Builds' => 'Show Only Manual Builds',
      'No line map.' => 'No line map.',
      'Report that the target is complete, and the target has failed.' => 'Report that the target is complete, and the target has failed.',
      'When building a revision, abort copies of this build plan which are currently running against older diffs.' => 'When building a revision, abort copies of this build plan which are currently running against older diffs.',
      'Are you sure you want to delete this step? This can\'t be undone!' => 'Are you sure you want to delete this step? This can\'t be undone!',
      'Build messages have the same policies as their receivers.' => 'Build messages have the same policies as their receivers.',
      'This build plan can not be run manually.' => 'This build plan can not be run manually.',
      'Report that the target is complete, and the target has passed.' => 'Report that the target is complete, and the target has passed.',
      'This build plan has conflicts in one or more build steps. Examine the step list and resolve the listed errors.' => 'This build plan has conflicts in one or more build steps. Examine the step list and resolve the listed errors.',
      'Containers' => 'Containers',
      'The number of seconds to sleep for.' => 'The number of seconds to sleep for.',
      'This input is bound to the wrong artifact type. It is bound to a "%s" artifact, but should be bound to a "%s" artifact.' => 'This input is bound to the wrong artifact type. It is bound to a "%s" artifact, but should be bound to a "%s" artifact.',
      'Stop Following Log' => 'Stop Following Log',
      'Flow Control' => 'Flow Control',
      'Manual Buildable' => 'Manual Buildable',
      'Run a build in Buildkite.' => 'Run a build in Buildkite.',
      'Built instantly' => 'Built instantly',
      'Save Build Step' => 'Save Build Step',
      'Enter the name of a revision or commit.' => 'Enter the name of a revision or commit.',
      'Option' => 'Option',
      'Arcanist Lint Results' => 'Arcanist Lint Results',
      'Edit Harbormaster Buildable Configurations' => 'Edit Harbormaster Buildable Configurations',
      'You can not pause this build because it is already restarting.' => 'You can not pause this build because it is already restarting.',
      'Continue Build Normally' => 'Continue Build Normally',
      'Drydock working copy lease to create an artifact from.' => 'Drydock working copy lease to create an artifact from.',
      'Autoplan' => 'Autoplan',
      'Unable to load repository with PHID "%s".' => 'Unable to load repository with PHID "%s".',
      'Test engine running the test, like "JavascriptTestEngine". This primarily prevents collisions between tests with the same name in different test suites (for example, a Javascript test and a Python test).' => 'Test engine running the test, like "JavascriptTestEngine". This primarily prevents collisions between tests with the same name in different test suites (for example, a Javascript test and a Python test).',
      'Container' => 'Container',
      'Choose a build log to rebuild with "--id", or rebuild all logs with "--all".' => 'Choose a build log to rebuild with "--id", or rebuild all logs with "--all".',
      'Depends On' => 'Depends On',
      'Build will resume.' => 'Build will resume.',
      'Run build plans: %s.' => 'Run build plans: %s.',
      'Declining to make service call because `phabricator.silent` is enabled in configuration.' => 'Declining to make service call because `phabricator.silent` is enabled in configuration.',
      'Build Logs' => 'Build Logs',
      'The buildable waits for the build, but does not fail if the build fails.' => 'The buildable waits for the build, but does not fail if the build fails.',
      'The person (or thing) that started this build.' => 'The person (or thing) that started this build.',
      'View Build' => 'View Build',
      'Really abort %s build(s)?' => 'Really abort %s build(s)?',
      '(%d - %d)' => '(%s - %s)',
      'Object "%s" does not implement interface "%s". Autotargets may only be queried for buildable objects.' => 'Object "%s" does not implement interface "%s". Autotargets may only be queried for buildable objects.',
      '%s enabled this build plan.' => '%s enabled this build plan.',
      'Stored Bytes' => 'Stored Bytes',
      'Work will continue on the build. Really resume?' => 'Work will continue on the build. Really resume?',
      'Log to rebuild.' => 'Log to rebuild.',
      'Run By Herald Rules' => 'Run By Herald Rules',
      'When a user attempts to `arc land` a revision and that revision has ongoing or failed builds, the default behavior of `arc` is to warn them about those builds and give them a chance to reconsider: they may want to wait for ongoing builds to complete, or fix failed builds before landing the change.
    If you do not want to warn users about this build, you can change the warning behavior. This may be useful if the build takes a long time to run (so you do not expect users to wait for it) or the outcome is not important.
    This warning is only advisory. Users may always elect to ignore this warning and continue, even if builds have failed.
    This setting also affects the warning that is published to revisions when commits land with ongoing or failed builds.' => 'When a user attempts to `arc land` a revision and that revision has ongoing or failed builds, the default behavior of `arc` is to warn them about those builds and give them a chance to reconsider: they may want to wait for ongoing builds to complete, or fix failed builds before landing the change.
    If you do not want to warn users about this build, you can change the warning behavior. This may be useful if the build takes a long time to run (so you do not expect users to wait for it) or the outcome is not important.
    This warning is only advisory. Users may always elect to ignore this warning and continue, even if builds have failed.
    This setting also affects the warning that is published to revisions when commits land with ongoing or failed builds.',
      'Edit Behavior: %s' => 'Edit Behavior: %s',
      'Result of the test.' => 'Result of the test.',
      'Use "--id" or "--active" to select builds.' => 'Use "--id" or "--active" to select builds.',
      'Unable to load build log "%s".' => 'Unable to load build log "%s".',
      'Upload a file.' => 'Upload a file.',
      'Build Plan Prevents Restart' => 'Build Plan Prevents Restart',
      'Unable to load API token ("%s")!' => 'Unable to load API token ("%s")!',
      'Find out information about build logs.' => 'Find out information about build logs.',
      '%s Passed Test(s)' => '%s Passed Test(s)',
      'Sending Messages' => 'Sending Messages',
      'ERROR:' => 'ERROR:',
      'Builtins' => 'Builtins',
      'Build %d' => 'Build %s',
      'Harbormaster build target "%s" does not exist.' => 'Harbormaster build target "%s" does not exist.',
      'If you pause all builds, work will halt once the current steps complete. You can resume the builds later.' => 'If you pause all builds, work will halt once the current steps complete. You can resume the builds later.',
      'Call specifies both "receiver" and "buildTargetPHID". When using the modern "receiver" parameter, omit the deprecated "buildTargetPHID" parameter.' => 'Call specifies both "receiver" and "buildTargetPHID". When using the modern "receiver" parameter, omit the deprecated "buildTargetPHID" parameter.',
      'Host Artifact' => 'Host Artifact',
      'No Unit Tests' => 'No Unit Tests',
      'All Targets' => 'All Targets',
      'Throw an exception.' => 'Throw an exception.',
      'Query Harbormaster builds.' => 'Query Harbormaster builds.',
      'View All Builds' => 'View All Builds',
      'If Failed' => 'If Failed',
      'Builds for this buildable:' => 'Builds for this buildable:',
      'The artifact type.' => 'The artifact type.',
      'Search for logs that belong to a particular build target.' => 'Search for logs that belong to a particular build target.',
      'Type the name of a user, application or Herald rule...' => 'Type the name of a user, application or Herald rule...',
      'This build plan does not have any build steps yet.' => 'This build plan does not have any build steps yet.',
      'Build Targets' => 'Build Targets',
      'Really resume build?' => 'Really resume build?',
      'Build generation this target belongs to. When builds restart, a new generation with new targets is created.' => 'Build generation this target belongs to. When builds restart, a new generation with new targets is created.',
      'External Link' => 'External Link',
      'You can not pause this build because it has already completed.' => 'You can not pause this build because it has already completed.',
      'Unknown build step field "%s"!' => 'Unknown build step field "%s"!',
      'URI "%s" does not have an allowable protocol. Configure protocols in `%s`. Allowed protocols are: %s.' => 'URI "%s" does not have an allowable protocol. Configure protocols in `%s`. Allowed protocols are: %s.',
      'Wait for Previous Commits to Build' => 'Wait for Previous Commits to Build',
      'Disable Plan' => 'Disable Plan',
      'Enable this build plan?' => 'Enable this build plan?',
      'Drydock Working Copy' => 'Drydock Working Copy',
      'This buildable has no builds, so you can not issue any commands.' => 'This buildable has no builds, so you can not issue any commands.',
      'Show More (%s Bytes)' => 'Show More (%s Bytes)',
      'The overall state of a buildable (like a commit or revision) is normally the aggregation of the individual states of all builds that have run against it.
    Buildables are "building" until all builds pass (which changes them to "pass"), or any build fails (which changes them to "fail").
    You can change this behavior if you do not want to wait for this build, or do not care if it fails.' => 'The overall state of a buildable (like a commit or revision) is normally the aggregation of the individual states of all builds that have run against it.
    Buildables are "building" until all builds pass (which changes them to "pass"), or any build fails (which changes them to "fail").
    You can change this behavior if you do not want to wait for this build, or do not care if it fails.',
      'The build may be restarted if it has failed.' => 'The build may be restarted if it has failed.',
      'A build inherits policies from its buildable.' => 'A build inherits policies from its buildable.',
      'You can not abort this build because it is already aborting.' => 'You can not abort this build because it is already aborting.',
      'Arcanist Unit Results' => 'Arcanist Unit Results',
      'This build is already restarting. You can not reissue a restart command to a restarting build.' => 'This build is already restarting. You can not reissue a restart command to a restarting build.',
      'The following variables can be used in most fields. To reference a variable, use `%s` in a field.' => 'The following variables can be used in most fields. To reference a variable, use `%s` in a field.',
      'This engine is used to edit Harbormaster build plans.' => 'This engine is used to edit Harbormaster build plans.',
      'This function definition is not a haiku.' => 'This function definition is not a haiku.',
      'You can not resume this build because it is already resuming.' => 'You can not resume this build because it is already resuming.',
      '(null)' => '(null)',
      'Progress on this build will be discarded and the build will restart. Side effects of the build will occur again. Really restart build?' => 'Progress on this build will be discarded and the build will restart. Side effects of the build will occur again. Really restart build?',
      'Search for builds by buildable status.' => 'Search for builds by buildable status.',
      'Abort Builds' => 'Abort Builds',
      'Upload From Host' => 'Upload From Host',
      'The build step the target runs.' => 'The build step the target runs.',
    );
  }

}
