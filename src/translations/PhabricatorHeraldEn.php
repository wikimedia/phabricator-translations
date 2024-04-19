<?php

final class PhabricatorHeraldEn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en';
  }

  protected function getTranslations() {
    return array(
      'An object name is required.' => 'An object name is required.',
      'No object exists by that name.' => 'No object exists by that name.',
      'Unable to retrieve profile: profiler stack is not empty. The stack has %s frame(s); the final frame has type "%s" and key "%s".' => 'Unable to retrieve profile: profiler stack is not empty. The stack has %s frame(s); the final frame has type "%s" and key "%s".',
      'Rule must have a name.' => 'Rule must have a name.',
      'Webhook ID to call' => 'Webhook ID to call',
      'Invalid Targets' => 'Invalid Targets',
      'Affected Objects' => 'Affected Objects',
      '(Invalid List)' => '(Invalid List)',
      'Herald field "%s" has unknown standard type "%s".' => 'Herald field "%s" has unknown standard type "%s".',
      'Object rules inherit the edit policies of their objects.' => 'Object rules inherit the edit policies of their objects.',
      'This is an old transcript which uses an obsolete log format. Detailed action information is not available.' => 'This is an old transcript which uses an obsolete log format. Detailed action information is not available.',
      'Applies To' => 'Applies To',
      'You can not create a rule for that object, because you do not have permission to edit it. You can only create rules for objects you can edit.' => 'You can not create a rule for that object, because you do not have permission to edit it. You can only create rules for objects you can edit.',
      'The selected content type ("%s") is not recognized by Herald.' => 'The selected content type ("%s") is not recognized by Herald.',
      'Regular expression pair is not a pair!' => 'Regular expression pair is not a pair!',
      'Call webhooks: %s.' => 'Call webhooks: %s.',
      'You must %s to a boolean first!' => 'You must %s to a boolean first!',
      'Disable the rule.' => 'Disable the rule.',
      'Create Webhook' => 'Create Webhook',
      'This action has no effect on %s target(s): %s.' => 'This action has no effect on %s target(s): %s.',
      '%s edited this rule.' => '%s edited this rule.',
      'Failed to decode rule data.' => 'Failed to decode rule data.',
      'Unloadable Targets' => 'Unloadable Targets',
      'Set the "silent" flag on the request.' => 'Set the "silent" flag on the request.',
      'Rule failed because an exception occurred while evaluating it.' => 'Rule failed because an exception occurred while evaluating it.',
      'Unknown reason ("%s").' => 'Unknown reason ("%s").',
      'When all of these conditions are met:' => 'When all of these conditions are met:',
      'all of' => 'all of',
      '%s changed hook status from %s to %s.' => '%s changed hook status from %s to %s.',
      'Back to Content Types' => 'Back to Content Types',
      'lacks bit' => 'lacks bit',
      'Type a Herald rule name...' => 'Type a Herald rule name...',
      '%s changed the URI for this webhook from %s to %s.' => '%s changed the URI for this webhook from %s to %s.',
      'This adapter can not trigger on objects.' => 'This adapter can not trigger on objects.',
      'The first regexp in the regexp pair, "%s", is not a valid regexp.' => 'The first regexp in the regexp pair, "%s", is not a valid regexp.',
      'Unknown Field ("%s")' => 'Unknown Field ("%s")',
      'The regular expression pair "%s" is not valid JSON. Enter a valid JSON array with two elements.' => 'The regular expression pair "%s" is not valid JSON. Enter a valid JSON array with two elements.',
      'Specify a webhook to call with "--id".' => 'Specify a webhook to call with "--id".',
      'Matched' => 'Matched',
      'Webhook status "%s" is not valid. Valid statuses are: %s.' => 'Webhook status "%s" is not valid. Valid statuses are: %s.',
      'Webhook names can be no longer than %s characters.' => 'Webhook names can be no longer than %s characters.',
      'Version Issue' => 'Version Issue',
      'Unable to pop profiler stack: profiler stack is empty.' => 'Unable to pop profiler stack: profiler stack is empty.',
      'Set the "secure" flag on the request.' => 'Set the "secure" flag on the request.',
      'This %s rule triggers for %s.' => 'This %s rule triggers for %s.',
      'Take these actions %s' => 'Take these actions %s',
      'Unknown view key "%s".' => 'Unknown view key "%s".',
      'HMAC Key' => 'HMAC Key',
      'Expected condition value to be an array.' => 'Expected condition value to be an array.',
      'All Transcripts' => 'All Transcripts',
      'does not contain' => 'does not contain',
      'Webhook %d' => 'Webhook %s',
      'Invalid Content Type' => 'Invalid Content Type',
      'Browse Herald Adapters' => 'Browse Herald Adapters',
      'Run On Host' => 'Run On Host',
      'Test Webhook' => 'Test Webhook',
      'No Targets' => 'No Targets',
      'Specify "--enable" or "--disable", but not both.' => 'Specify "--enable" or "--disable", but not both.',
      'only the first time this rule matches:' => 'only the first time this rule matches:',
      'Herald rule "%s" does not have an evaluation result.' => 'Herald rule "%s" does not have an evaluation result.',
      'This was a dry run to test Herald rules, no actions were executed.' => 'This was a dry run to test Herald rules, no actions were executed.',
      'Rule failed automatically because it is an object rule which is not relevant for this object.' => 'Rule failed automatically because it is an object rule which is not relevant for this object.',
      '[Herald]' => '[Herald]',
      'Profiler' => 'Profiler',
      'Object Rule' => 'Object Rule',
      'Rule Name' => 'Rule Name',
      'Disabled Rules' => 'Disabled Rules',
      'This engine is used to edit webhooks.' => 'This engine is used to edit webhooks.',
      'Unable to pop profiler stack: expected frame of type "%s" with key "%s", but found frame of type "%s" with key "%s".' => 'Unable to pop profiler stack: expected frame of type "%s" with key "%s", but found frame of type "%s" with key "%s".',
      'Rule failed automatically because it has no conditions.' => 'Rule failed automatically because it has no conditions.',
      'When %s these conditions are met:' => 'When %s these conditions are met:',
      'Object is of wrong type for adapter!' => 'Object is of wrong type for adapter!',
      'Type an adapter name...' => 'Type an adapter name...',
      'Specify an object to test rules for with "--object".' => 'Specify an object to test rules for with "--object".',
      'Enable Rule' => 'Enable Rule',
      'Unknown Field: "%s"' => 'Unknown Field: "%s"',
      'Search for rules with given authors.' => 'Search for rules with given authors.',
      'Webhook' => 'Webhook',
      'This action specifies no targets.' => 'This action specifies no targets.',
      'Called webhooks: %s.' => 'Called webhooks: %s.',
      'Herald Transcript %s' => 'Herald Transcript %s',
      'Take these actions the first time this rule matches:' => 'Take these actions the first time this rule matches:',
      'Forbidden' => 'Forbidden',
      '<Unknown Action "%s">' => '<Unknown Action "%s">',
      'In Silent Mode' => 'In Silent Mode',
      'Action: %s' => 'Action: %s',
      'Any condition matched.' => 'Any condition matched.',
      'Global Rule' => 'Global Rule',
      'Search for rules of given types.' => 'Search for rules of given types.',
      'Do nothing.' => 'Do nothing.',
      'Details of this transcript have been garbage collected.' => 'Details of this transcript have been garbage collected.',
      'This server is running in silent mode, so it will not publish webhooks. To adjust this setting, see @{config:phabricator.silent} in Config.' => 'This server is running in silent mode, so it will not publish webhooks. To adjust this setting, see @{config:phabricator.silent} in Config.',
      'You do not have permission to manage global Herald rules.' => 'You do not have permission to manage global Herald rules.',
      'The second regexp in the regexp pair, "%s", is not a valid regexp.' => 'The second regexp in the regexp pair, "%s", is not a valid regexp.',
      'Test rules which run when another Herald rule is created or updated.' => 'Test rules which run when another Herald rule is created or updated.',
      'Edit Attributes' => 'Edit Attributes',
      'Effect type passed to "%s" must be a scalar string.' => 'Effect type passed to "%s" must be a scalar string.',
      'Old Transcript' => 'Old Transcript',
      'Is newly created' => 'Is newly created',
      'Regenerate HMAC Key' => 'Regenerate HMAC Key',
      'Specify a content type to run rules for. For this object, valid content types are: %s.' => 'Specify a content type to run rules for. For this object, valid content types are: %s.',
      'Herald' => 'Herald',
      'React to Herald rules being created or updated.' => 'React to Herald rules being created or updated.',
      'Object state prevented rule evaluation.' => 'Object state prevented rule evaluation.',
      'This action has no effect.' => 'This action has no effect.',
      'Prevent' => 'Prevent',
      'exists' => 'exists',
      'Regenerate the HMAC key used to sign requests made by this webhook?' => 'Regenerate the HMAC key used to sign requests made by this webhook?',
      'Two HeraldFields (of classes "%s" and "%s") have the same field key ("%s") after expansion for an object of class "%s" inside adapter "%s". Each field must have a unique field key.' => 'Two HeraldFields (of classes "%s" and "%s") have the same field key ("%s") after expansion for an object of class "%s" inside adapter "%s". Each field must have a unique field key.',
      'Unable to load specified object ("%s").' => 'Unable to load specified object ("%s").',
      'Invalid Action' => 'Invalid Action',
      'Webhooks must have a URI.' => 'Webhooks must have a URI.',
      'URI for the webhook.' => 'URI for the webhook.',
      'Invalid Rule Type' => 'Invalid Rule Type',
      '%s target(s) do not have permission to see this object: %s.' => '%s target(s) do not have permission to see this object: %s.',
      'Webhook HMAC Key' => 'Webhook HMAC Key',
      '%s changed the URI for %s from %s to %s.' => '%s changed the URI for %s from %s to %s.',
      'Hook Disabled' => 'Hook Disabled',
      'Silent Mode' => 'Silent Mode',
      'Conditions' => 'Conditions',
      'Create Notification Rules' => 'Create Notification Rules',
      'The selected rule type ("%s") is not supported by the selected content type ("%s").' => 'The selected rule type ("%s") is not supported by the selected content type ("%s").',
      'Rule could not be processed because it was created with a newer version of Herald.' => 'Rule could not be processed because it was created with a newer version of Herald.',
      'Test run complete. Transcript:' => 'Test run complete. Transcript:',
      'Take these actions if this rule did not match the last time:' => 'Take these actions if this rule did not match the last time:',
      'does not exist' => 'does not exist',
      'include all of' => 'include all of',
      'Browse Rule Types' => 'Browse Rule Types',
      'Run rules on this object.' => 'Run rules on this object.',
      'Invalid Condition' => 'Invalid Condition',
      'Invalid URI' => 'Invalid URI',
      'matches regexp' => 'matches regexp',
      'Enter an object to test rules for, like a Diffusion commit (e.g., `rX123`) or a Differential revision (e.g., `D123`). You will be shown the results of a dry run on the object.' => 'Enter an object to test rules for, like a Diffusion commit (e.g., `rX123`) or a Differential revision (e.g., `D123`). You will be shown the results of a dry run on the object.',
      'true' => 'true',
      'Unknown rule type "%s"!' => 'Unknown rule type "%s"!',
      'This was a dry run, so no actions were taken.' => 'This was a dry run, so no actions were taken.',
      'Webhooks must have a name.' => 'Webhooks must have a name.',
      'Save Rule' => 'Save Rule',
      'every time this rule matches:' => 'every time this rule matches:',
      'Associated hook ("%s") for webhook request ("%s") has invalid fetch URI: %s' => 'Associated hook ("%s") for webhook request ("%s") has invalid fetch URI: %s',
      '%s disabled this rule.' => '%s disabled this rule.',
      'A personal rule can only be edited by its owner.' => 'A personal rule can only be edited by its owner.',
      'Edit Herald Rule: %s' => 'Edit Herald Rule: %s',
      'Webhook URIs can be no longer than %s characters.' => 'Webhook URIs can be no longer than %s characters.',
      'Expected object (of class "%s") to return a transaction template (of class "%s"), but it returned something else ("%s").' => 'Expected object (of class "%s") to return a transaction template (of class "%s"), but it returned something else ("%s").',
      'Webhook request ("%s", to "%s") failed (%s / %s). The request will be retried.' => 'Webhook request ("%s", to "%s") failed (%s / %s). The request will be retried.',
      'Webhook Request %d' => 'Webhook Request %s',
      'Watch for danger!' => 'Watch for danger!',
      'Status mode for the webhook.' => 'Status mode for the webhook.',
      'Related Fields' => 'Related Fields',
      'New Test Request' => 'New Test Request',
      'Rule failed automatically because it is a personal rule and its owner is invalid or disabled.' => 'Rule failed automatically because it is a personal rule and its owner is invalid or disabled.',
      'New Action' => 'New Action',
      'No Effect' => 'No Effect',
      'Instead of making calls in the foreground, add the tasks to the daemon queue.' => 'Instead of making calls in the foreground, add the tasks to the daemon queue.',
      'Changes triggered by Herald rules.' => 'Changes triggered by Herald rules.',
      'The %s repository is not tracked.' => 'The %s repository is not tracked.',
      'View HMAC Key' => 'View HMAC Key',
      'No field with key "%s" is available to Herald adapter "%s".' => 'No field with key "%s" is available to Herald adapter "%s".',
      'Unable to load specified webhook ("%s").' => 'Unable to load specified webhook ("%s").',
      'Invalid Object' => 'Invalid Object',
      'Did nothing.' => 'Did nothing.',
      'is myself' => 'is myself',
      'Modify a rule, bypassing policies. This workflow can disable problematic personal rules.' => 'Modify a rule, bypassing policies. This workflow can disable problematic personal rules.',
      'This rule has a recursive dependency on itself and can not be evaluated.' => 'This rule has a recursive dependency on itself and can not be evaluated.',
      'Object Transcript' => 'Object Transcript',
      'Herald Rules' => 'Herald Rules',
      'Create Herald Rule' => 'Create Herald Rule',
      'Disable Rule' => 'Disable Rule',
      'Apply changes to this rule.' => 'Apply changes to this rule.',
      'Rule names can be no longer than %s characters.' => 'Rule names can be no longer than %s characters.',
      'false' => 'false',
      'Enable the rule.' => 'Enable the rule.',
      'Affects: %s' => 'Affects: %s',
      'Unable to build a new transaction for adapter object; it does not implement "%s".' => 'Unable to build a new transaction for adapter object; it does not implement "%s".',
      'Supporting Applications' => 'Supporting Applications',
      'Transcript %s' => 'Transcript %s',
      'Webhook request ("%s", to "%s") failed (%s / %s). The request will not be retried.' => 'Webhook request ("%s", to "%s") failed (%s / %s). The request will not be retried.',
      'Rules must have a name.' => 'Rules must have a name.',
      '//There are no available Herald events for this object.//' => '//There are no available Herald events for this object.//',
      'An unknown error occurred while evaluating this condition. No additional information is available.' => 'An unknown error occurred while evaluating this condition. No additional information is available.',
      'does not match regexp' => 'does not match regexp',
      'You have permission to create and manage global rules.' => 'You have permission to create and manage global rules.',
      '%s renamed this rule from %s to %s.' => '%s renamed this rule from %s to %s.',
      'This rule matched, but did not take any actions because it is configured to act only if it did not match the last time.' => 'This rule matched, but did not take any actions because it is configured to act only if it did not match the last time.',
      'Wrong Rule Type' => 'Wrong Rule Type',
      'Content Type' => 'Content Type',
      'if this rule did not match the last time:' => 'if this rule did not match the last time:',
      'Global rules notify anyone about events. Global rules can bypass access control policies and act on any object.' => 'Global rules notify anyone about events. Global rules can bypass access control policies and act on any object.',
      'Make a total of __N__ copies of the call.' => 'Make a total of __N__ copies of the call.',
      'This rule is only supposed to be repeated a single time, and it has already been applied.' => 'This rule is only supposed to be repeated a single time, and it has already been applied.',
      'Webhook Request' => 'Webhook Request',
      'Unknown Action ("%s")' => 'Unknown Action ("%s")',
      'Search for rules affecting given types of content.' => 'Search for rules affecting given types of content.',
      'When any of these conditions are met:' => 'When any of these conditions are met:',
      'Utility' => 'Utility',
      'No rules found.' => 'No rules found.',
      'Webhook request ("%s") is not in "%s" status (actual status is "%s"). Declining call to hook.' => 'Webhook request ("%s") is not in "%s" status (actual status is "%s"). Declining call to hook.',
      'Browse Herald Rules' => 'Browse Herald Rules',
      'Edit Webhook' => 'Edit Webhook',
      'No implementation is available for rule "%s".' => 'No implementation is available for rule "%s".',
      'Herald rules will not trigger until tracking is enabled.' => 'Herald rules will not trigger until tracking is enabled.',
      'Edit Webhook: %s' => 'Edit Webhook: %s',
      'Create Herald Rule: %s' => 'Create Herald Rule: %s',
      'Global Herald rules can be edited by users with the "Can Manage Global Rules" Herald application permission.' => 'Global Herald rules can be edited by users with the "Can Manage Global Rules" Herald application permission.',
      'Recursion' => 'Recursion',
      '%s (Disabled)' => '%s (Disabled)',
      'You must choose an object to associate this rule with.' => 'You must choose an object to associate this rule with.',
      'Added Comment' => 'Added Comment',
      'Second regular expression is invalid!' => 'Second regular expression is invalid!',
      'Create Rule' => 'Create Rule',
      'Unable to load webhook request ("%s"). It may have been garbage collected.' => 'Unable to load webhook request ("%s"). It may have been garbage collected.',
      'The specified content type ("%s") does not support dry runs. Choose a testable content type. For this object, valid content types are: %s.' => 'The specified content type ("%s") does not support dry runs. Choose a testable content type. For this object, valid content types are: %s.',
      'Firehose' => 'Firehose',
      'Queueing webhook calls...' => 'Queueing webhook calls...',
      'Hook Error' => 'Hook Error',
      'Regular expression "%s" in Herald rule "%s" is not valid, or exceeded backtracking or recursion limits while executing. Verify the expression and correct it or rewrite it with less backtracking.' => 'Regular expression "%s" in Herald rule "%s" is not valid, or exceeded backtracking or recursion limits while executing. Verify the expression and correct it or rewrite it with less backtracking.',
      'No adapter exists for Herald content type "%s".' => 'No adapter exists for Herald content type "%s".',
      'You do not have permission to create or manage global rules.' => 'You do not have permission to create or manage global rules.',
      'Many requests to this webhook have failed recently (at least %s errors in the last %s seconds). New requests are temporarily paused.' => 'Many requests to this webhook have failed recently (at least %s errors in the last %s seconds). New requests are temporarily paused.',
      'Call webhooks' => 'Call webhooks',
      'Another Herald rule' => 'Another Herald rule',
      'What' => 'What',
      'include none of' => 'include none of',
      'Unable to load Herald rule with ID or monogram "%s".' => 'Unable to load Herald rule with ID or monogram "%s".',
      'Edit Rule' => 'Edit Rule',
      'any of' => 'any of',
      'Dry Run' => 'Dry Run',
      'Condition references a rule which does not exist!' => 'Condition references a rule which does not exist!',
      'Show Only Enabled Rules' => 'Show Only Enabled Rules',
      'Webhook %d %s' => 'Webhook %s %s',
      'This object ("%s") has more than %s transactions in its most recent transaction group; this is too many.' => 'This object ("%s") has more than %s transactions in its most recent transaction group; this is too many.',
      'Did Nothing' => 'Did Nothing',
      'Choose the object this rule will act on (for example, enter `rX` to act on the `rX` repository, or `#project` to act on a project).' => 'Choose the object this rule will act on (for example, enter `rX` to act on the `rX` repository, or `#project` to act on a project).',
      'No action with key "%s" is available to Herald adapter "%s".' => 'No action with key "%s" is available to Herald adapter "%s".',
      'Specified object could not be loaded.' => 'Specified object could not be loaded.',
      'Can Create Webhooks' => 'Can Create Webhooks',
      'Author Not Active' => 'Author Not Active',
      'Test content rules for an object. Executes a dry run, like the web UI test console.' => 'Test content rules for an object. Executes a dry run, like the web UI test console.',
      'Personal rules notify you about events. You own them, but they can only affect you. Personal rules only trigger for objects you have permission to see.' => 'Personal rules notify you about events. You own them, but they can only affect you. Personal rules only trigger for objects you have permission to see.',
      'Comment content' => 'Comment content',
      '%s target(s) are invalid or of the wrong type: %s.' => '%s target(s) are invalid or of the wrong type: %s.',
      'has bit' => 'has bit',
      'Submit transactions for a particular object.' => 'Submit transactions for a particular object.',
      'The selected rule type ("%s") is not recognized by Herald.' => 'The selected rule type ("%s") is not recognized by Herald.',
      'Run Duration' => 'Run Duration',
      'No conditions matched.' => 'No conditions matched.',
      'Test Console' => 'Test Console',
      'Browse Webhooks' => 'Browse Webhooks',
      'Field: %s' => 'Field: %s',
      'The %s repository is still importing.' => 'The %s repository is still importing.',
      'Transcripts' => 'Transcripts',
      'Content source' => 'Content source',
      'RULE DETAIL' => 'RULE DETAIL',
      'Rule/Content Mismatch' => 'Rule/Content Mismatch',
      'Run rules for this content type.' => 'Run rules for this content type.',
      'Add comment: %s' => 'Add comment: %s',
      'Rule type' => 'Rule type',
      'is' => 'is',
      'This rule will become active again.' => 'This rule will become active again.',
      'Specify a content type to run rules for. The specified content type ("%s") is not valid. For this object, valid content types are: %s.' => 'Specify a content type to run rules for. The specified content type ("%s") is not valid. For this object, valid content types are: %s.',
      'Herald Actions' => 'Herald Actions',
      'No active Herald rules call this webhook.' => 'No active Herald rules call this webhook.',
      'Transcript %d' => 'Transcript %s',
      'Can Manage Global Rules' => 'Can Manage Global Rules',
      'Called Webhooks' => 'Called Webhooks',
      'Requests which are currently authenticated with the old key may fail.' => 'Requests which are currently authenticated with the old key may fail.',
      'Added a comment: %s' => 'Added a comment: %s',
      'To view a transcript, you must be able to view the object the transcript is about.' => 'To view a transcript, you must be able to view the object the transcript is about.',
      'This rule type is not supported by the selected content type.' => 'This rule type is not supported by the selected content type.',
      'Herald User Guide' => 'Herald User Guide',
      'Rule Owner' => 'Rule Owner',
      'Trigger Object' => 'Trigger Object',
      'Object Monograms' => 'Object Monograms',
      'Really enable this rule?' => 'Really enable this rule?',
      'Take these actions every time this rule matches:' => 'Take these actions every time this rule matches:',
      'A flexible rules engine that can notify and act on other actions such as tasks, diffs, and commits.' => 'A flexible rules engine that can notify and act on other actions such as tasks, diffs, and commits.',
      'Personal Rule' => 'Personal Rule',
      'Already Applied' => 'Already Applied',
      'Rule Fields' => 'Rule Fields',
      'Show Only Inactive Rules' => 'Show Only Inactive Rules',
      '%s enabled this rule.' => '%s enabled this rule.',
      'Rule repetition string constant "%s" is unknown.' => 'Rule repetition string constant "%s" is unknown.',
      'Unknown condition "%s"!' => 'Unknown condition "%s"!',
      'Specified "--count" must be larger than 0.' => 'Specified "--count" must be larger than 0.',
      'is true' => 'is true',
      'This rule triggers for %s.' => 'This rule triggers for %s.',
      'Found more than one ("%s") applied edge transactions with given edge type ("%s"); expected zero or one.' => 'Found more than one ("%s") applied edge transactions with given edge type ("%s"); expected zero or one.',
      'Rule Type' => 'Rule Type',
      'Applying changes to %s: %s...' => 'Applying changes to %s: %s...',
      'H%d' => 'H%s',
      'User Guide: Webhooks' => 'User Guide: Webhooks',
      'Unable to load object ("%s") for webhook request ("%s").' => 'Unable to load object ("%s") for webhook request ("%s").',
      'Result code "%s" is unknown.' => 'Result code "%s" is unknown.',
      'Field Values' => 'Field Values',
      'contains' => 'contains',
      'Type a webhook name...' => 'Type a webhook name...',
      'Call a webhook.' => 'Call a webhook.',
      'Recent Requests' => 'Recent Requests',
      'Two HeraldActions (of classes "%s" and "%s") have the same action key ("%s") after expansion for an object of class "%s" inside adapter "%s". Each action must have a unique action key.' => 'Two HeraldActions (of classes "%s" and "%s") have the same action key ("%s") after expansion for an object of class "%s" inside adapter "%s". Each action must have a unique action key.',
      'Object rules notify anyone about events. They are bound to an object (like a repository) and can only act on that object. You must be able to edit an object to create object rules for it. Other users who can edit the object can edit its rules.' => 'Object rules notify anyone about events. They are bound to an object (like a repository) and can only act on that object. You must be able to edit an object to create object rules for it. Other users who can edit the object can edit its rules.',
      'Conditions were met for %s' => 'Conditions were met for %s',
      'Transcript IDs' => 'Transcript IDs',
      'Rule evaluation result is unknown.' => 'Rule evaluation result is unknown.',
      'Calling webhook...' => 'Calling webhook...',
      'The regular expression "%s" is not valid. Regular expressions must have enclosing characters (e.g. "@/path/to/file@", not "/path/to/file") and be syntactically correct.' => 'The regular expression "%s" is not valid. Regular expressions must have enclosing characters (e.g. "@/path/to/file@", not "/path/to/file") and be syntactically correct.',
      'Herald Transcript' => 'Herald Transcript',
      '%s target(s) could not be loaded: %s.' => '%s target(s) could not be loaded: %s.',
      'Unknown Effect ("%s")' => 'Unknown Effect ("%s")',
      'Herald Transcripts' => 'Herald Transcripts',
      'Herald rules will not trigger until import completes.' => 'Herald rules will not trigger until import completes.',
      'Do nothing' => 'Do nothing',
      '%s %s %s' => '%s %s %s',
      '%s created this webhook.' => '%s created this webhook.',
      '<Unknown Field "%s">' => '<Unknown Field "%s">',
      'Show Only Disabled Rules' => 'Show Only Disabled Rules',
      'Use flags to specify at least one edit to apply to the rule (for example, use "--disable" to disable a rule).' => 'Use flags to specify at least one edit to apply to the rule (for example, use "--disable" to disable a rule).',
      'No Herald rules applied to this object.' => 'No Herald rules applied to this object.',
      'This transcript has an invalid or inaccessible adapter.' => 'This transcript has an invalid or inaccessible adapter.',
      'Request Timeout' => 'Request Timeout',
      'All conditions matched.' => 'All conditions matched.',
      'matches regexp pair' => 'matches regexp pair',
      'Content type' => 'Content type',
      'Object produced non-array value!' => 'Object produced non-array value!',
      'Action "%s" is not forbidden!' => 'Action "%s" is not forbidden!',
      'does not match:' => 'does not match:',
      'Herald Webhooks' => 'Herald Webhooks',
      'Rule failed because an exception occurred.' => 'Rule failed because an exception occurred.',
      'Type a rule type...' => 'Type a rule type...',
      'This action does not support rules of type "%s".' => 'This action does not support rules of type "%s".',
      'Authored by %s' => 'Authored by %s',
      'Really disable this rule?' => 'Really disable this rule?',
      'Choose Object' => 'Choose Object',
      'Acting user' => 'Acting user',
      'Rule for' => 'Rule for',
      'is any of' => 'is any of',
      'is not' => 'is not',
      'Success, got HTTP %s from webhook.' => 'Success, got HTTP %s from webhook.',
      'Not all conditions matched.' => 'Not all conditions matched.',
      'Active Rules' => 'Active Rules',
      'is not myself' => 'is not myself',
      'Run Test' => 'Run Test',
      'matches:' => 'matches:',
      'Show Only Active Rules' => 'Show Only Active Rules',
      'No object exists with that name.' => 'No object exists with that name.',
      'Edit Webhook Configurations' => 'Edit Webhook Configurations',
      'New Condition' => 'New Condition',
      'Global rules can bypass access controls.' => 'Global rules can bypass access controls.',
      'Object Link' => 'Object Link',
      'This was a dry run, so no actions were actually taken.' => 'This was a dry run, so no actions were actually taken.',
      'include any of' => 'include any of',
      'This change applied silently, so mail and other notifications will not be sent.' => 'This change applied silently, so mail and other notifications will not be sent.',
      'This rule has a dependency cycle and can not be evaluated:' => 'This rule has a dependency cycle and can not be evaluated:',
      'Requested At' => 'Requested At',
      'Unknown condition \'%s\'.' => 'Unknown condition \'%s\'.',
      'Associated hook ("%s") for webhook request ("%s") is disabled.' => 'Associated hook ("%s") for webhook request ("%s") is disabled.',
      'Rule Transcript' => 'Rule Transcript',
      'HTTP Status Code' => 'HTTP Status Code',
      'Unable to render value for unknown field type ("%s").' => 'Unable to render value for unknown field type ("%s").',
      'No webhooks found.' => 'No webhooks found.',
      'Run At Epoch' => 'Run At Epoch',
      '%s changed %s from %s to %s.' => '%s changed %s from %s to %s.',
      'Regular expression pair is not valid JSON!' => 'Regular expression pair is not valid JSON!',
      'You do not have permission to create webhooks.' => 'You do not have permission to create webhooks.',
      'is not any of' => 'is not any of',
      'This object is not of an allowed type for the rule. Rules can only trigger on certain objects.' => 'This object is not of an allowed type for the rule. Rules can only trigger on certain objects.',
      'This rule was created with a newer version of Herald. You can not view or edit it in this older version. Upgrade your software.' => 'This rule was created with a newer version of Herald. You can not view or edit it in this older version. Upgrade your software.',
      'Called By Herald Rules' => 'Called By Herald Rules',
      'Regnerate Key' => 'Regnerate Key',
      'View Full Transcript' => 'View Full Transcript',
      'No valid object provided for object rule!' => 'No valid object provided for object rule!',
      'Herald rule "%s" already has an evaluation result.' => 'Herald rule "%s" already has an evaluation result.',
      'This rule will no longer activate.' => 'This rule will no longer activate.',
      'Specify a rule to edit with "--rule <id|monogram>".' => 'Specify a rule to edit with "--rule <id|monogram>".',
      'is false' => 'is false',
      'First regular expression is invalid!' => 'First regular expression is invalid!',
      'Rule failed automatically because it is a personal rule and its owner does not have permission to view the object.' => 'Rule failed automatically because it is a personal rule and its owner does not have permission to view the object.',
      '%s renamed this webhook from %s to %s.' => '%s renamed this webhook from %s to %s.',
      'Name of the webhook.' => 'Name of the webhook.',
      'Webhooks' => 'Webhooks',
      'The regular expression pair "%s" must have exactly two elements.' => 'The regular expression pair "%s" must have exactly two elements.',
      'No transcripts found.' => 'No transcripts found.',
    );
  }

}
