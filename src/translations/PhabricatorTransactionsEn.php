<?php

final class PhabricatorTransactionsEn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en';
  }

  protected function getTranslations() {
    return array(
      'Lock / Hide Fields' => 'Lock / Hide Fields',
      'You do not have any MFA factors attached to your account, so you can not sign this transaction group with MFA. Add MFA to your account in Settings.' => 'You do not have any MFA factors attached to your account, so you can not sign this transaction group with MFA. Add MFA to your account in Settings.',
      'Unmark as "Edit" Form' => 'Unmark as "Edit" Form',
      'Parameter "%s" is not a list of transactions.' => 'Parameter "%s" is not a list of transactions.',
      'Transactions have no effect:' => 'Transactions have no effect:',
      'This endpoint supports these types of transactions. See below for detailed information about each transaction type.' => 'This endpoint supports these types of transactions. See below for detailed information about each transaction type.',
      'To silence this edit, run this command:' => 'To silence this edit, run this command:',
      'In call to "transaction.search", selected object (of type "%s") does not implement "%s", so transactions can not be loaded for it.' => 'In call to "transaction.search", selected object (of type "%s") does not implement "%s", so transactions can not be loaded for it.',
      'Builtin Form "%s"' => 'Builtin Form "%s"',
      '%s added a comment.' => '%s added a comment.',
      'Empty Comment' => 'Empty Comment',
      'The selected %s policy excludes you. Choose a %s policy which allows you to %s the object.' => 'The selected %s policy excludes you. Choose a %s policy which allows you to %s the object.',
      'All users are already subscribed to this %s.' => 'All users are already subscribed to this %s.',
      'Edge transaction has no \'%s\'!' => 'Edge transaction has no \'%s\'!',
      'No object exists with PHID "%s".' => 'No object exists with PHID "%s".',
      'You can not edit this comment because the conversation is locked.' => 'You can not edit this comment because the conversation is locked.',
      'Reorder Edit Forms' => 'Reorder Edit Forms',
      'Reorder Create Forms' => 'Reorder Create Forms',
      'Edit Form Defaults' => 'Edit Form Defaults',
      'The %s action(s) you are taking have no effect:' => 'The %s action(s) you are taking have no effect:',
      '%s removed %s subscriber(s) for %s: %s.' => '%s removed %s subscriber(s) for %s: %s.',
      'New Mode' => 'New Mode',
      'Engine: Editor' => 'Engine: Editor',
      '%s moved %s to %s on the %s board.' => '%s moved %s to %s on the %s board.',
      'To continue, configure multi-factor authentication in Settings.' => 'To continue, configure multi-factor authentication in Settings.',
      'Calls to "transaction.search" must specify either an "objectType" or an "objectIdentifier"' => 'Calls to "transaction.search" must specify either an "objectType" or an "objectIdentifier"',
      'SearchEngine class to export data from.' => 'SearchEngine class to export data from.',
      'In %s, %s wrote:' => 'In %s, %s wrote:',
      'Unmark as Create Form' => 'Unmark as Create Form',
      'Mark as Edit Form' => 'Mark as Edit Form',
      'Edges already exist; transaction has no effect.' => 'Edges already exist; transaction has no effect.',
      '%s updated the preamble for this form.' => '%s updated the preamble for this form.',
      '%s changed the default value for field %s.' => '%s changed the default value for field %s.',
      '%s marked %s inline comment(s) as done.' => '%s marked %s inline comment(s) as done.',
      'Email Body Text' => 'Email Body Text',
      'Optional instructions, shown above the form.' => 'Optional instructions, shown above the form.',
      'This transaction group requires MFA to apply, but you can not provide an MFA response via Conduit. Edit this object via the web UI.' => 'This transaction group requires MFA to apply, but you can not provide an MFA response via Conduit. Edit this object via the web UI.',
      'Subtype key "%s" does not identify a valid subtype.' => 'Subtype key "%s" does not identify a valid subtype.',
      'Name of the form.' => 'Name of the form.',
      'No search engines match "%s". Available engines which support data export are: %s.' => 'No search engines match "%s". Available engines which support data export are: %s.',
      'Default Create Form' => 'Default Create Form',
      '%s changed the visibility for %s.' => '%s changed the visibility for %s.',
      'Warnings' => 'Warnings',
      'Expected "newTransactionWarning()" to return an object of class "PhabricatorTransactionWarning", got something else ("%s") from transaction of class "%s".' => 'Expected "newTransactionWarning()" to return an object of class "PhabricatorTransactionWarning", got something else ("%s") from transaction of class "%s".',
      '%s edited subscriber(s), added %s: %s; removed %s: %s.' => '%s edited subscriber(s), added %s: %s; removed %s: %s.',
      'Take Action' => 'Take Action',
      'Use "--output <path>" to specify an output file, or "--output -" to print to stdout.' => 'Use "--output <path>" to specify an output file, or "--output -" to print to stdout.',
      'Form Disabled' => 'Form Disabled',
      'Failed to serialize() value for key "%s".' => 'Failed to serialize() value for key "%s".',
      '%s marked %s inline comment(s) as not done.' => '%s marked %s inline comment(s) as not done.',
      'Recipient Removed' => 'Recipient Removed',
      'EditField (with key "%s", of class "%s") is generating transactions, but has no EditType.' => 'EditField (with key "%s", of class "%s") is generating transactions, but has no EditType.',
      'Bulk Edit Actions' => 'Bulk Edit Actions',
      'Primary Fields' => 'Primary Fields',
      '%s updated %s attached file(s), removed %s: %s; modified %s: %s.' => '%s updated %s attached file(s), removed %s: %s; modified %s: %s.',
      '%s attached %s referenced file(s): %s.' => '%s attached %s referenced file(s): %s.',
      '%s moved %s on %s board(s): %s.' => '%s moved %s on %s board(s): %s.',
      'Export format.' => 'Export format.',
      'Drag and drop fields to change the order in which they appear in the application "Create" menu.' => 'Drag and drop fields to change the order in which they appear in the application "Create" menu.',
      'Invalid \'%s\' value for Edge transaction. Value should contain only keys \'%s\' (add edges), \'%s\' (remove edges) and \'%s\' (set edges).' => 'Invalid \'%s\' value for Edge transaction. Value should contain only keys \'%s\' (add edges), \'%s\' (remove edges) and \'%s\' (set edges).',
      'Monogram "%s" identifies an object of the wrong type. Loaded object has class "%s", but this editor operates on objects of type "%s".' => 'Monogram "%s" identifies an object of the wrong type. Loaded object has class "%s", but this editor operates on objects of type "%s".',
      '🔒 Locked' => '🔒 Locked',
      'New Object' => 'New Object',
      'Type an object type name...' => 'Type an object type name...',
      '%s enabled this form.' => '%s enabled this form.',
      'EditEngine "%s" created or loaded an invalid object: object (of class "%s") must implement "%s", but does not.' => 'EditEngine "%s" created or loaded an invalid object: object (of class "%s") must implement "%s", but does not.',
      'Edit Configurations' => 'Edit Configurations',
      'Edit type (with key "%s") is missing a Conduit parameter type.' => 'Edit type (with key "%s") is missing a Conduit parameter type.',
      'Validation Errors' => 'Validation Errors',
      'You are about to apply a bulk edit which will affect %s object(s).' => 'You are about to apply a bulk edit which will affect %s object(s).',
      'You do not have access to any forms which are enabled and marked as edit forms.' => 'You do not have access to any forms which are enabled and marked as edit forms.',
      'Edit engine (of class "%s") does not support subtypes, so subtype transactions can not be applied to it.' => 'Edit engine (of class "%s") does not support subtypes, so subtype transactions can not be applied to it.',
      'You are editing the default values for this form.' => 'You are editing the default values for this form.',
      'This job is already configured to run silently.' => 'This job is already configured to run silently.',
      'Failed to base64 encode value for key "%s".' => 'Failed to base64 encode value for key "%s".',
      'This form ("%s") has been disabled, so it can not be used.' => 'This form ("%s") has been disabled, so it can not be used.',
      'Browse Forms' => 'Browse Forms',
      'Constraint "authorPHIDs" to "transaction.search" requires nonempty list, empty list provided.' => 'Constraint "authorPHIDs" to "transaction.search" requires nonempty list, empty list provided.',
      'Specify an export format with "--format".' => 'Specify an export format with "--format".',
      'Using HTTP Parameters' => 'Using HTTP Parameters',
      'Subtype "%s" is not valid: subtype keys must have a minimum length of 3 bytes.' => 'Subtype "%s" is not valid: subtype keys must have a minimum length of 3 bytes.',
      'Expected a query key or a set of query constraints.' => 'Expected a query key or a set of query constraints.',
      'Enable Form' => 'Enable Form',
      '%s edited edge metadata for %s.' => '%s edited edge metadata for %s.',
      'Create Forms' => 'Create Forms',
      'Post as Comment' => 'Post as Comment',
      'Edit Configuration' => 'Edit Configuration',
      '%s updated %s attached file(s), added %s: %s; modified %s: %s.' => '%s updated %s attached file(s), added %s: %s; modified %s: %s.',
      'Query does not match any objects you have permission to edit.' => 'Query does not match any objects you have permission to edit.',
      'Mark this form as an edit form? Users who can view it will be able to use it to edit objects.' => 'Mark this form as an edit form? Users who can view it will be able to use it to edit objects.',
      'Query does not match any objects.' => 'Query does not match any objects.',
      'Read transactions and comments for a particular object or an entire object type.' => 'Read transactions and comments for a particular object or an entire object type.',
      '✘ Hidden' => '✘ Hidden',
      'EditEngine BuiltinKey contains an invalid key character "/".' => 'EditEngine BuiltinKey contains an invalid key character "/".',
      '%s rescinded a token.' => '%s rescinded a token.',
      '%s awarded a token.' => '%s awarded a token.',
      'New object subtype key.' => 'New object subtype key.',
      'This comment was signed with MFA, so edits to it must also be signed with MFA. You do not have any MFA factors attached to your account, so you can not sign this edit. Add MFA to your account in Settings.' => 'This comment was signed with MFA, so edits to it must also be signed with MFA. You do not have any MFA factors attached to your account, so you can not sign this edit. Add MFA to your account in Settings.',
      '%s added a comment to %s.' => '%s added a comment to %s.',
      '%s changed locked and hidden fields.' => '%s changed locked and hidden fields.',
      'Edit Form %d: %s' => 'Edit Form %s: %s',
      'Output path already exists. Use "--overwrite" to overwrite it.' => 'Output path already exists. Use "--overwrite" to overwrite it.',
      'Change Subtype' => 'Change Subtype',
      'Drag and drop fields to reorder them.' => 'Drag and drop fields to reorder them.',
      '%s removed %d subscriber(s): %s.' => '%s removed %s subscriber(s): %s.',
      'Not an Edit Form' => 'Not an Edit Form',
      'Mark Form' => 'Mark Form',
      'EditEngine ("%s") contains an invalid key character "/".' => 'EditEngine ("%s") contains an invalid key character "/".',
      'Change Default Values' => 'Change Default Values',
      '%s added %s watcher(s) for %s: %s.' => '%s added %s watcher(s) for %s: %s.',
      'No default edit engine configuration for bulk edit.' => 'No default edit engine configuration for bulk edit.',
      'After running this command, reload this page to see the new setting.' => 'After running this command, reload this page to see the new setting.',
      'Save Defaults' => 'Save Defaults',
      'Change how forms in other applications are created and edited. Advanced!' => 'Change how forms in other applications are created and edited. Advanced!',
      'Form Order' => 'Form Order',
      'Mention In' => 'Mention In',
      'HTTP Parameters' => 'HTTP Parameters',
      'Transaction has type "%s", but that transaction type is not supported by this editor (%s).' => 'Transaction has type "%s", but that transaction type is not supported by this editor (%s).',
      'Edit Engines' => 'Edit Engines',
      'Disable this form? Users will no longer be able to use it.' => 'Disable this form? Users will no longer be able to use it.',
      'Bulk Editor' => 'Bulk Editor',
      'Aliases
    -------
    Aliases are alternate recognized keys for a field. For example, a field with
    a complex key like `examplePHIDs` might be have a simple version of that key
    as an alias, like `example`.
    Aliases work just like the primary key when prefilling forms. They make it
    easier to remember and use HTTP parameters by providing more natural ways to do
    some prefilling.
    For example, if a field has `examplePHIDs` as a key but has aliases `example`
    and `examples`, these three URIs will all do the same thing:
    ```
    %s?examplePHIDs=...
    %s?examples=...
    %s?example=...
    ```
    If a URI specifies multiple default values for a field, the value using the
    primary key has precedence. Generally, you can not mix different aliases in
    a single URI.
    ' => 'Aliases
    -------
    Aliases are alternate recognized keys for a field. For example, a field with
    a complex key like `examplePHIDs` might be have a simple version of that key
    as an alias, like `example`.
    Aliases work just like the primary key when prefilling forms. They make it
    easier to remember and use HTTP parameters by providing more natural ways to do
    some prefilling.
    For example, if a field has `examplePHIDs` as a key but has aliases `example`
    and `examples`, these three URIs will all do the same thing:
    ```
    %s?examplePHIDs=...
    %s?examples=...
    %s?example=...
    ```
    If a URI specifies multiple default values for a field, the value using the
    primary key has precedence. Generally, you can not mix different aliases in
    a single URI.
    ',
      'Transaction edge specification contains unexpected key "%s".' => 'Transaction edge specification contains unexpected key "%s".',
      'Support Applications' => 'Support Applications',
      'File attachment mode "%s" (for file "%s") is invalid. Valid modes are: %s.' => 'File attachment mode "%s" (for file "%s") is invalid. Valid modes are: %s.',
      'Transaction must have a PHID before calling %s!' => 'Transaction must have a PHID before calling %s!',
      'EditEngine ("%s") returned no builtin engine configurations, but an edit engine must have at least one configuration.' => 'EditEngine ("%s") returned no builtin engine configurations, but an edit engine must have at least one configuration.',
      'This transaction group requires MFA to apply, but the Editor was not configured with a Request. This workflow can not perform an MFA check.' => 'This transaction group requires MFA to apply, but the Editor was not configured with a Request. This workflow can not perform an MFA check.',
      'Working Set' => 'Working Set',
      'Field Types
    -----------
    Fields in this form have the types described in the table below. This table
    shows how to format values for each field type.' => 'Field Types
    -----------
    Fields in this form have the types described in the table below. This table
    shows how to format values for each field type.',
      'Subtype configuration is invalid: there is no subtype defined with key "%s". This subtype is required and must be defined.' => 'Subtype configuration is invalid: there is no subtype defined with key "%s". This subtype is required and must be defined.',
      'Make comments.' => 'Make comments.',
      'No Manage Permission' => 'No Manage Permission',
      'Via Content Source' => 'Via Content Source',
      'The object being edited does not implement any standard interfaces (like PhabricatorSubscribableInterface) which allow CCs to be generated automatically. Override the "getMailCC()" method and generate CCs explicitly.' => 'The object being edited does not implement any standard interfaces (like PhabricatorSubscribableInterface) which allow CCs to be generated automatically. Override the "getMailCC()" method and generate CCs explicitly.',
      'Really remove this comment?' => 'Really remove this comment?',
      'No MFA' => 'No MFA',
      '%s removed %s contributor(s) for %s: %s.' => '%s removed %s contributor(s) for %s: %s.',
      'Export format ("%s") is not enabled.' => 'Export format ("%s") is not enabled.',
      'This object has been locked.' => 'This object has been locked.',
      'Changed Policy' => 'Changed Policy',
      'You can not apply transactions which already have IDs/PHIDs!' => 'You can not apply transactions which already have IDs/PHIDs!',
      'Forms' => 'Forms',
      'File attachment mode (for file "%s") is invalid. Expected a string, found "%s".' => 'File attachment mode (for file "%s") is invalid. Expected a string, found "%s".',
      'Hide Edit Forms' => 'Hide Edit Forms',
      'Disable Form' => 'Disable Form',
      'This form ("%s") is not marked as an edit form, so it can not be used to edit objects.' => 'This form ("%s") is not marked as an edit form, so it can not be used to edit objects.',
      'You must provide multi-factor credentials to comment or make changes, but you do not have multi-factor authentication configured on your account.' => 'You must provide multi-factor credentials to comment or make changes, but you do not have multi-factor authentication configured on your account.',
      '%s edited a custom field on %s.' => '%s edited a custom field on %s.',
      'Mention' => 'Mention',
      'export' => 'export',
      'Call to setShouldRequireMFA() is too late: this Editor has already checked for MFA requirements.' => 'Call to setShouldRequireMFA() is too late: this Editor has already checked for MFA requirements.',
      'You have not selected any objects to edit.' => 'You have not selected any objects to edit.',
      'Work has already started on job "%s". Jobs can not be reconfigured after they have been started.' => 'Work has already started on job "%s". Jobs can not be reconfigured after they have been started.',
      'Post Comment' => 'Post Comment',
      '%s moved this task to %s on the %s board.' => '%s moved this task to %s on the %s board.',
      'Enable this form? Users who can see it will be able to use it to create objects.' => 'Enable this form? Users who can see it will be able to use it to create objects.',
      'Specify one or more queries to export with "--query".' => 'Specify one or more queries to export with "--query".',
      '%s changed the order in which this form appears in the "Edit" menu.' => '%s changed the order in which this form appears in the "Edit" menu.',
      'View Herald Transcript' => 'View Herald Transcript',
      'Unmark this form as a create form? It will still function properly, but no longer be reachable directly from the application "Create" menu.' => 'Unmark this form as a create form? It will still function properly, but no longer be reachable directly from the application "Create" menu.',
      'You can not select this %s policy, because you would no longer be able to %s the object.' => 'You can not select this %s policy, because you would no longer be able to %s the object.',
      'Removing a comment prevents anyone (including you) from reading it. Removing a comment also hides the comment\'s edit history and prevents it from being edited.' => 'Removing a comment prevents anyone (including you) from reading it. Removing a comment also hides the comment\'s edit history and prevents it from being edited.',
      '%s removed %s contributor(s): %s.' => '%s removed %s contributor(s): %s.',
      'Editor method "queuePublishing()" was called, but no publishable object is present. This Editor is not ready to publish.' => 'Editor method "queuePublishing()" was called, but no publishable object is present. This Editor is not ready to publish.',
      '%s created %s in the %s space.' => '%s created %s in the %s space.',
      '%s added this form to the "Create" menu.' => '%s added this form to the "Create" menu.',
      'This %s already has that interact policy.' => 'This %s already has that interact policy.',
      'You will be required to provide multi-factor credentials to make changes.' => 'You will be required to provide multi-factor credentials to make changes.',
      '%s renamed this form from %s to %s.' => '%s renamed this form from %s to %s.',
      'Transaction edge data must either be the edge PHID or an edge specification dictionary.' => 'Transaction edge data must either be the edge PHID or an edge specification dictionary.',
      '**Locked** fields are visible in the form, but their values can not be changed
    by the user.
    **Hidden** fields are not visible in the form.
    Any assigned default values are still respected, even if the field is locked
    or hidden.' => '**Locked** fields are visible in the form, but their values can not be changed
    by the user.
    **Hidden** fields are not visible in the form.
    Any assigned default values are still respected, even if the field is locked
    or hidden.',
      'Unmark as Edit Form' => 'Unmark as Edit Form',
      'Method Details' => 'Method Details',
      'No Default Create Forms' => 'No Default Create Forms',
      'Subtype configuration is invalid: subtype with key "%s" specifies both child subtypes and child forms. Specify one or the other, but not both.' => 'Subtype configuration is invalid: subtype with key "%s" specifies both child subtypes and child forms. Specify one or the other, but not both.',
      'You can not sign a transaction group that has no other effects.' => 'You can not sign a transaction group that has no other effects.',
      'Some of your %s action(s) have no effect:' => 'Some of your %s action(s) have no effect:',
      'No Edit Forms' => 'No Edit Forms',
      'Mark this form as a create form? It will appear in the application "Create" menus by default.' => 'Mark this form as a create form? It will appear in the application "Create" menus by default.',
      '%s added %s unsubscriber(s) for %s: %s.' => '%s added %s unsubscriber(s) for %s: %s.',
      'Calls to "transaction.search" must not specify both an "objectType" and an "objectIdentifier".' => 'Calls to "transaction.search" must not specify both an "objectType" and an "objectIdentifier".',
      'Edit Defaults' => 'Edit Defaults',
      'Encryption Required' => 'Encryption Required',
      'Form name is required.' => 'Form name is required.',
      'No object exists with ID "%s".' => 'No object exists with ID "%s".',
      '%s wrote:' => '%s wrote:',
      'Change subtype to' => 'Change subtype to',
      'Extension "%s" defines a bulk edit group with the same key ("%s") as the main editor or another extension. Each bulk edit group must have a unique key.' => 'Extension "%s" defines a bulk edit group with the same key ("%s") as the main editor or another extension. Each bulk edit group must have a unique key.',
      'Save Edit Order' => 'Save Edit Order',
      'File "%s" is invalid: it could not be loaded, or you do not have permission to view it. You must be able to see a file to attach it to an object.' => 'File "%s" is invalid: it could not be loaded, or you do not have permission to view it. You must be able to see a file to attach it to an object.',
      '%s removed %s unsubscriber(s): %s.' => '%s removed %s unsubscriber(s): %s.',
      'EMAIL PREFERENCES' => 'EMAIL PREFERENCES',
      '%s edited this object (transaction type "%s").' => '%s edited this object (transaction type "%s").',
      'Mark as "Edit" Form' => 'Mark as "Edit" Form',
      '%s edited watcher(s) for %s, added %s: %s; removed %s: %s.' => '%s edited watcher(s) for %s, added %s: %s; removed %s: %s.',
      'This %s already has that edit policy.' => 'This %s already has that edit policy.',
      'Conversation Locked' => 'Conversation Locked',
      'You do not have permission to configure forms for this application.' => 'You do not have permission to configure forms for this application.',
      'Transaction ("%s", of type "%s") requires a handle ("%s") that it did not load.' => 'Transaction ("%s", of type "%s") requires a handle ("%s") that it did not load.',
      'Choose the object **subtype** that this form should create and edit.' => 'Choose the object **subtype** that this form should create and edit.',
      'Unmark this form as an edit form? It will no longer be able to be used to edit objects.' => 'Unmark this form as an edit form? It will no longer be able to be used to edit objects.',
      'Configure bulk job __id__ to run silently (without sending mail or publishing notifications).' => 'Configure bulk job __id__ to run silently (without sending mail or publishing notifications).',
      'User Guide: Customizing Forms' => 'User Guide: Customizing Forms',
      'Make Editable' => 'Make Editable',
      '%s disabled this form.' => '%s disabled this form.',
      '%s created an object: %s.' => '%s created an object: %s.',
      'Make this builtin form editable?' => 'Make this builtin form editable?',
      'Duplicate Form' => 'Duplicate Form',
      'Drag and drop fields to change their priority for edits. When a user edits an object, they will be shown the first form in this list that they have permission to see.' => 'Drag and drop fields to change their priority for edits. When a user edits an object, they will be shown the first form in this list that they have permission to see.',
      '%s added %d subscriber(s): %s.' => '%s added %s subscriber(s): %s.',
      'Unmark as "Create" Form' => 'Unmark as "Create" Form',
      'Exception when processing transaction of type "%s": %s' => 'Exception when processing transaction of type "%s": %s',
      'In call to "transaction.search", specified "objectIdentifier" ("%s") does not exist.' => 'In call to "transaction.search", specified "objectIdentifier" ("%s") does not exist.',
      '%s created this object in space %s.' => '%s created this object in space %s.',
      'Engine: Edit' => 'Engine: Edit',
      '%s changed the interact policy for %s.' => '%s changed the interact policy for %s.',
      '%s removed %s watcher(s) for %s: %s.' => '%s removed %s watcher(s) for %s: %s.',
      'When an object (like a task) is edited, the relevant application creates a
    "transaction" and applies it. This list of transactions on each object is the
    basis for essentially all edits and comments. Reviewing the transaction
    record allows you to see who edited an object, when, and how their edit changed
    things.
    One common reason to call this method is that you\'re implementing a webhook and
    just received a notification that an object has changed. See the Webhooks
    documentation for more detailed discussion of this use case.
    One Object Type at a Time
    =========================
    This API method can query transactions for any type of object which supports
    transactions, but only one type of object can be queried per call. For example:
    you can retrieve transactions affecting Tasks, or you can retrieve transactions
    affecting Revisions, but a single call can not retrieve both.
    This is a technical limitation arising because (among other reasons) there is
    no global ordering on transactions.
    To find transactions for a specific object (like a particular task), pass the
    object PHID or an appropriate object identifier (like `T123`) as an
    `objectIdentifier`.
    To find all transactions for an object type, pass the object type constant as
    an `objectType`. For example, the correct identifier for tasks is `TASK`. (You
    can quickly find an unknown type constant by looking at the PHID of an object
    of that type.)
    Constraints
    ===========
    These constraints are supported:
      - `phids` //Optional list<phid>.// Find specific transactions by PHID. This
        is most likely to be useful if you\'re responding to a webhook notification
        and want to inspect only the related events.
      - `authorPHIDs` //Optional list<phid>.// Find transactions with particular
        authors.
    Transaction Format
    ==================
    Each transaction has custom data describing what the transaction did. The
    format varies from transaction to transaction. The easiest way to figure out
    exactly what a particular transaction looks like is to make the associated kind
    of edit to a test object, then query that object.
    Not all transactions have data: by default, transactions have a `null` "type"
    and no additional data. This API does not expose raw transaction data because
    some of it is internal, oddly named, misspelled, confusing, not useful, or
    could create security or policy problems to expose directly.
    New transactions are exposed (with correctly spelled, comprehensible types and
    useful, reasonable fields) as we become aware of use cases for them.
    ' => 'When an object (like a task) is edited, the relevant application creates a
    "transaction" and applies it. This list of transactions on each object is the
    basis for essentially all edits and comments. Reviewing the transaction
    record allows you to see who edited an object, when, and how their edit changed
    things.
    One common reason to call this method is that you\'re implementing a webhook and
    just received a notification that an object has changed. See the Webhooks
    documentation for more detailed discussion of this use case.
    One Object Type at a Time
    =========================
    This API method can query transactions for any type of object which supports
    transactions, but only one type of object can be queried per call. For example:
    you can retrieve transactions affecting Tasks, or you can retrieve transactions
    affecting Revisions, but a single call can not retrieve both.
    This is a technical limitation arising because (among other reasons) there is
    no global ordering on transactions.
    To find transactions for a specific object (like a particular task), pass the
    object PHID or an appropriate object identifier (like `T123`) as an
    `objectIdentifier`.
    To find all transactions for an object type, pass the object type constant as
    an `objectType`. For example, the correct identifier for tasks is `TASK`. (You
    can quickly find an unknown type constant by looking at the PHID of an object
    of that type.)
    Constraints
    ===========
    These constraints are supported:
      - `phids` //Optional list<phid>.// Find specific transactions by PHID. This
        is most likely to be useful if you\'re responding to a webhook notification
        and want to inspect only the related events.
      - `authorPHIDs` //Optional list<phid>.// Find transactions with particular
        authors.
    Transaction Format
    ==================
    Each transaction has custom data describing what the transaction did. The
    format varies from transaction to transaction. The easiest way to figure out
    exactly what a particular transaction looks like is to make the associated kind
    of edit to a test object, then query that object.
    Not all transactions have data: by default, transactions have a `null` "type"
    and no additional data. This API does not expose raw transaction data because
    some of it is internal, oddly named, misspelled, confusing, not useful, or
    could create security or policy problems to expose directly.
    New transactions are exposed (with correctly spelled, comprehensible types and
    useful, reasonable fields) as we become aware of use cases for them.
    ',
      '%s moved %s from %s to %s on the %s board.' => '%s moved %s from %s to %s on the %s board.',
      'EditEngine "%s" created or loaded an invalid object: object must actually be an object, but is of some other type ("%s").' => 'EditEngine "%s" created or loaded an invalid object: object must actually be an object, but is of some other type ("%s").',
      '%s edited unsubscriber(s) for %s, added %s: %s; removed %s: %s.' => '%s edited unsubscriber(s) for %s, added %s: %s; removed %s: %s.',
      'Attempting to apply a transaction (of class "%s", with type "%s") which has not been constructed correctly: %s' => 'Attempting to apply a transaction (of class "%s", with type "%s") which has not been constructed correctly: %s',
      '%s modified %s attached file(s): %s.' => '%s modified %s attached file(s): %s.',
      'Unable to load transactions: %s.' => 'Unable to load transactions: %s.',
      'Subtype configuration is invalid: subtype with key "%s" has no name. Subtypes must have a name.' => 'Subtype configuration is invalid: subtype with key "%s" has no name. Subtypes must have a name.',
      'Comment to add, formatted as remarkup.' => 'Comment to add, formatted as remarkup.',
      'Transaction with key "%s" has invalid type "%s". This type is not recognized. Valid types are: %s.' => 'Transaction with key "%s" has invalid type "%s". This type is not recognized. Valid types are: %s.',
      'Show Only Create Forms' => 'Show Only Create Forms',
      'You can not interact with this object because it is locked.' => 'You can not interact with this object because it is locked.',
      'This object is already in that space.' => 'This object is already in that space.',
      'Expected "newTimelineView()" to return an object of class "%s" (in engine "%s").' => 'Expected "newTimelineView()" to return an object of class "%s" (in engine "%s").',
      'This %s already has that join policy.' => 'This %s already has that join policy.',
      '%s shifted this object from the %s space to the %s space.' => '%s shifted this object from the %s space to the %s space.',
      '%s changed the interact policy from "%s" to "%s".' => '%s changed the interact policy from "%s" to "%s".',
      'Create Form' => 'Create Form',
      '%s moved this task on %s board(s): %s.' => '%s moved this task on %s board(s): %s.',
      'Unable to load query for transaction object "%s"!' => 'Unable to load query for transaction object "%s"!',
      'Changed Subscribers' => 'Changed Subscribers',
      'Comment for this transaction was not loaded.' => 'Comment for this transaction was not loaded.',
      'Raw Comment' => 'Raw Comment',
      '%s created this object with interact policy "%s".' => '%s created this object with interact policy "%s".',
      'Save Create Order' => 'Save Create Order',
      '%s updated subscribers of %s.' => '%s updated subscribers of %s.',
      '%s created this object.' => '%s created this object.',
      'Unknown export format ("%s"). Known formats are: %s.' => 'Unknown export format ("%s"). Known formats are: %s.',
      'You have not chosen any edits to apply.' => 'You have not chosen any edits to apply.',
      'No herald adapter specified.' => 'No herald adapter specified.',
      'Comment History' => 'Comment History',
      'Unable to load object with PHID "%s"!' => 'Unable to load object with PHID "%s"!',
      'Edit Form' => 'Edit Form',
      'You can not apply transactions which already have %s!' => 'You can not apply transactions which already have %s!',
      '%s edited an edge.' => '%s edited an edge.',
      '%s unsubscribed.' => '%s unsubscribed.',
      '%s edited contributor(s) for %s, added %s: %s; removed %s: %s.' => '%s edited contributor(s) for %s, added %s: %s; removed %s: %s.',
      'Subtype configuration is invalid: two subtypes use the same key ("%s"). Each subtype must have a unique key.' => 'Subtype configuration is invalid: two subtypes use the same key ("%s"). Each subtype must have a unique key.',
      'Parameter "%s" must contain a list of transaction descriptions, but item with key "%s" is missing a "type" field. Each transaction must have a type field.' => 'Parameter "%s" must contain a list of transaction descriptions, but item with key "%s" is missing a "type" field. Each transaction must have a type field.',
      'This transaction is supposed to have an %s set, but it does not!' => 'This transaction is supposed to have an %s set, but it does not!',
      'Comment Preview' => 'Comment Preview',
      'Untitled Form' => 'Untitled Form',
      '%s edited subscriber(s) for %s, added %s: %s; removed %s: %s.' => '%s edited subscriber(s) for %s, added %s: %s; removed %s: %s.',
      'Unsupported bulk edit type "%s".' => 'Unsupported bulk edit type "%s".',
      'Validation errors:' => 'Validation errors:',
      'This object has no select fields.' => 'This object has no select fields.',
      'Mentioned User' => 'Mentioned User',
      'List of PHIDs to set.' => 'List of PHIDs to set.',
      'This comment was signed with MFA, so you will be required to provide MFA credentials to make changes.' => 'This comment was signed with MFA, so you will be required to provide MFA credentials to make changes.',
      '%s added %s unsubscriber(s): %s.' => '%s added %s unsubscriber(s): %s.',
      'EDIT DETAILS' => 'EDIT DETAILS',
      '%s edited a custom field (with key "%s").' => '%s edited a custom field (with key "%s").',
      'No Create Permission' => 'No Create Permission',
      'Edge transactions must have PHIDs or edge specs as values (found value "%s" on transaction of type "%s").' => 'Edge transactions must have PHIDs or edge specs as values (found value "%s" on transaction of type "%s").',
      'Remove Action: %s' => 'Remove Action: %s',
      'Show Only Edit Forms' => 'Show Only Edit Forms',
      'This is a standard **ApplicationEditor** method which allows you to create and modify objects by applying transactions. For documentation on these endpoints, see **[[ %s | Conduit API: Using Edit Endpoints ]]**.' => 'This is a standard **ApplicationEditor** method which allows you to create and modify objects by applying transactions. For documentation on these endpoints, see **[[ %s | Conduit API: Using Edit Endpoints ]]**.',
      'HTTP Parameters: %s' => 'HTTP Parameters: %s',
      'Edit Form: %s' => 'Edit Form: %s',
      '%s moved this task from %s to %s on the %s board.' => '%s moved this task from %s to %s on the %s board.',
      'List of PHIDs to remove.' => 'List of PHIDs to remove.',
      'Create New Form' => 'Create New Form',
      'This application is not configured with any forms for creating objects that are visible to you and enabled.' => 'This application is not configured with any forms for creating objects that are visible to you and enabled.',
      'Select Fields
    -------------
    Some fields support selection from a specific set of values. When prefilling
    these fields, use the value in the **Value** column to select the appropriate
    setting.
    ' => 'Select Fields
    -------------
    Some fields support selection from a specific set of values. When prefilling
    these fields, use the value in the **Value** column to select the appropriate
    setting.
    ',
      'Transaction requires handles and it did not load them.' => 'Transaction requires handles and it did not load them.',
      '(Show Details)' => '(Show Details)',
      '%s edited this %s.' => '%s edited this %s.',
      '%s edited a custom field.' => '%s edited a custom field.',
      'Apply remaining actions?' => 'Apply remaining actions?',
      'Two bulk edit groups have the same key ("%s"). Each bulk edit group must have a unique key.' => 'Two bulk edit groups have the same key ("%s"). Each bulk edit group must have a unique key.',
      'If the output file already exists, overwrite it instead of raising an error.' => 'If the output file already exists, overwrite it instead of raising an error.',
      'List of PHIDs to add.' => 'List of PHIDs to add.',
      'You have not moved this object to any columns it is not already in.' => 'You have not moved this object to any columns it is not already in.',
      'Failed to reload object identified by monogram "%s" when querying by PHID.' => 'Failed to reload object identified by monogram "%s" when querying by PHID.',
      'Configure Form' => 'Configure Form',
      'Edit Locked Object' => 'Edit Locked Object',
      'You can not post an empty comment.' => 'You can not post an empty comment.',
      'Field "%s" has a bulk edit group key ("%s") with no corresponding bulk edit group.' => 'Field "%s" has a bulk edit group key ("%s") with no corresponding bulk edit group.',
      'Exported data to "%s".' => 'Exported data to "%s".',
      '%s edited subscriber(s), added %d: %s; removed %d: %s.' => '%s edited subscriber(s), added %s: %s; removed %s: %s.',
      'Mail extension ("%s") defines a stamp template with the same key ("%s") as another template. Each stamp template must have a unique key.' => 'Mail extension ("%s") defines a stamp template with the same key ("%s") as another template. Each stamp template must have a unique key.',
      'File attachment transaction must have a map of files to attachment modes, found "%s".' => 'File attachment transaction must have a map of files to attachment modes, found "%s".',
      '%s updated %s attached file(s), added %s: %s; removed %s: %s.' => '%s updated %s attached file(s), added %s: %s; removed %s: %s.',
      '%s changed the order in which this form appears in the "Create" menu.' => '%s changed the order in which this form appears in the "Create" menu.',
      '%s named this form %s.' => '%s named this form %s.',
      '%s added %s subscriber(s) for %s: %s.' => '%s added %s subscriber(s) for %s: %s.',
      '%s mentioned this in %s.' => '%s mentioned this in %s.',
      '%s created this object with join policy "%s".' => '%s created this object with join policy "%s".',
      'Subtype configuration is invalid: it must be a list of subtype specifications.' => 'Subtype configuration is invalid: it must be a list of subtype specifications.',
      'Transaction Summary' => 'Transaction Summary',
      'Use Form' => 'Use Form',
      'The command "!%s" is not a supported mail command. Valid commands for this object are: %s.' => 'The command "!%s" is not a supported mail command. Valid commands for this object are: %s.',
      'Parameter "%s" must contain a list of transaction descriptions, but item with key "%s" is not a dictionary.' => 'Parameter "%s" must contain a list of transaction descriptions, but item with key "%s" is not a dictionary.',
      'Edit Comment' => 'Edit Comment',
      '%s marked this form as an edit form.' => '%s marked this form as an edit form.',
      'Edge transactions must have destination PHIDs as in edge lists (found key "%s" on transaction of type "%s").' => 'Edge transactions must have destination PHIDs as in edge lists (found key "%s" on transaction of type "%s").',
      'This transaction group requires MFA to apply, but the Editor was not configured with a Cancel URI. This workflow can not perform an MFA check.' => 'This transaction group requires MFA to apply, but the Editor was not configured with a Cancel URI. This workflow can not perform an MFA check.',
      'EditEngine ("%s") returned builtin engine configurations, but one (with key "%s") is missing a builtin key. Provide a builtin key for each configuration (you can omit it from the first configuration in the list to automatically assign the default key).' => 'EditEngine ("%s") returned builtin engine configurations, but one (with key "%s") is missing a builtin key. Provide a builtin key for each configuration (you can omit it from the first configuration in the list to automatically assign the default key).',
      'Monogram "%s" does not identify a valid object.' => 'Monogram "%s" does not identify a valid object.',
      'Silent Edit' => 'Silent Edit',
      'Reorder Fields' => 'Reorder Fields',
      'Task has invalid task data.' => 'Task has invalid task data.',
      'Add Action...' => 'Add Action...',
      'Detached' => 'Detached',
      'This transaction should generate its %s automatically, but has already had one set!' => 'This transaction should generate its %s automatically, but has already had one set!',
      '%s removed this form from the "Create" menu.' => '%s removed this form from the "Create" menu.',
      'Type a form name...' => 'Type a form name...',
      'Custom field transaction \'%s\' does not implement integration for %s.' => 'Custom field transaction \'%s\' does not implement integration for %s.',
      'Specified queries use different engines: query "%s" uses engine "%s", not "%s". All queries must run on the same engine.' => 'Specified queries use different engines: query "%s" uses engine "%s", not "%s". All queries must run on the same engine.',
      '%s changed the join policy from "%s" to "%s".' => '%s changed the join policy from "%s" to "%s".',
      '%s updated subscribers...' => '%s updated subscribers...',
      'Remove Comment' => 'Remove Comment',
      'Transaction (of type "%s") has no effect.' => 'Transaction (of type "%s") has no effect.',
      'Make Builtin Editable' => 'Make Builtin Editable',
      'Editor ("%s") has no mail stamp template with provided key ("%s").' => 'Editor ("%s") has no mail stamp template with provided key ("%s").',
      'You can not shift this object in the selected space, because the space does not exist or you do not have access to it.' => 'You can not shift this object in the selected space, because the space does not exist or you do not have access to it.',
      'Export data to a flat file (JSON, CSV, Excel, etc).' => 'Export data to a flat file (JSON, CSV, Excel, etc).',
      'You must choose a space for this object.' => 'You must choose a space for this object.',
      'Edit Forms' => 'Edit Forms',
      'Mark as Create Form' => 'Mark as Create Form',
      '%s added %s subscriber(s): %s.' => '%s added %s subscriber(s): %s.',
      'Unmark Form' => 'Unmark Form',
      'Parameter "%s" must contain a list of transaction descriptions, but item with key "%s" is missing a "value" field. Each transaction must have a value field.' => 'Parameter "%s" must contain a list of transaction descriptions, but item with key "%s" is missing a "value" field. Each transaction must have a value field.',
      'Subtype "%s" is not valid: subtype keys may only contain lowercase latin letters ("a" through "z").' => 'Subtype "%s" is not valid: subtype keys may only contain lowercase latin letters ("a" through "z").',
      'Capability not supported.' => 'Capability not supported.',
      'Use "--id" to choose a bulk job to make silent.' => 'Use "--id" to choose a bulk job to make silent.',
      'Change Form Subtype' => 'Change Form Subtype',
      '%s added %s contributor(s): %s.' => '%s added %s contributor(s): %s.',
      '%s removed %s watcher(s): %s.' => '%s removed %s watcher(s): %s.',
      '%s created this object with edit policy "%s".' => '%s created this object with edit policy "%s".',
      'Unable to load bulk job with ID "%s".' => 'Unable to load bulk job with ID "%s".',
      '%s added %s watcher(s): %s.' => '%s added %s watcher(s): %s.',
      'Task has no object PHID!' => 'Task has no object PHID!',
      'Transaction type \'%s\' is missing an internal apply implementation!' => 'Transaction type \'%s\' is missing an internal apply implementation!',
      '%s attached files...' => '%s attached files...',
      'Old Mode' => 'Old Mode',
      'Flag "--overwrite" has no effect when outputting to stdout.' => 'Flag "--overwrite" has no effect when outputting to stdout.',
      'You do not have permission to create these objects.' => 'You do not have permission to create these objects.',
      'Export the data selected by one or more queries.' => 'Export the data selected by one or more queries.',
      'Bulk Edit' => 'Bulk Edit',
      'Write output to a file. If omitted, output will be sent to stdout.' => 'Write output to a file. If omitted, output will be sent to stdout.',
      'You will be required to provide multi-factor credentials to comment or make changes.' => 'You will be required to provide multi-factor credentials to comment or make changes.',
      '%s shifted %s from the %s space to the %s space.' => '%s shifted %s from the %s space to the %s space.',
      'EditEngine ("%s") returned builtin engine configurations, but at least two specify the same builtin key ("%s"). Engines must have unique builtin keys.' => 'EditEngine ("%s") returned builtin engine configurations, but at least two specify the same builtin key ("%s"). Engines must have unique builtin keys.',
      'This comment has been deleted.' => 'This comment has been deleted.',
      'Add Another Action' => 'Add Another Action',
      'Template Objects
    ----------------
    Instead of specifying each field value individually, you can specify another
    object to use as a template. Some of the initial fields will be copied from the
    template object.
    Specify a template object with the `template` parameter. You can use an ID,
    PHID, or monogram (for objects which have monograms). For example, you might
    use URIs like these:
    ```
    %s?template=123
    %s?template=PHID-WXYZ-abcdef...
    %s?template=T123
    ```
    You can combine the `template` parameter with HTTP parameters: the template
    object will be copied first, then any HTTP parameters will be read.
    When using `template`, these fields will be copied:' => 'Template Objects
    ----------------
    Instead of specifying each field value individually, you can specify another
    object to use as a template. Some of the initial fields will be copied from the
    template object.
    Specify a template object with the `template` parameter. You can use an ID,
    PHID, or monogram (for objects which have monograms). For example, you might
    use URIs like these:
    ```
    %s?template=123
    %s?template=PHID-WXYZ-abcdef...
    %s?template=T123
    ```
    You can combine the `template` parameter with HTTP parameters: the template
    object will be copied first, then any HTTP parameters will be read.
    When using `template`, these fields will be copied:',
      'Hide Create Forms' => 'Hide Create Forms',
      'Configure a bulk job to execute silently.' => 'Configure a bulk job to execute silently.',
      'Custom field transaction has no \'%s\'!' => 'Custom field transaction has no \'%s\'!',
      '%s signed these changes with MFA.' => '%s signed these changes with MFA.',
      'When creating objects in the web interface, you can use HTTP parameters to
    prefill fields in the form. This allows you to quickly create a link to a
    form with some of the fields already filled in with default values.
    To prefill a form, start by finding the URI for the form you want to prefill.
    Do this by navigating to the relevant application, clicking the "Create" button
    for the type of object you want to create, and then copying the URI out of your
    browser\'s address bar. It will usually look something like this:
    ```
    %s
    ```
    However, `your.install.com` will be the domain where your copy of this software
    is installed, and `application/` will be the URI for an application. Some
    applications have multiple forms for creating objects or URIs that look a little
    different than this example, so the URI may not look exactly like this.
    To prefill the form, add properly encoded HTTP parameters to the URI. You
    should end up with something like this:
    ```
    %s?title=Platyplus&body=Ornithopter
    ```
    If the form has `title` and `body` fields of the correct types, visiting this
    link will prefill those fields with the values "Platypus" and "Ornithopter"
    respectively.
    The rest of this document shows which parameters you can add to this form and
    how to format them.
    Supported Fields
    ----------------
    This form supports these fields:
    ' => 'When creating objects in the web interface, you can use HTTP parameters to
    prefill fields in the form. This allows you to quickly create a link to a
    form with some of the fields already filled in with default values.
    To prefill a form, start by finding the URI for the form you want to prefill.
    Do this by navigating to the relevant application, clicking the "Create" button
    for the type of object you want to create, and then copying the URI out of your
    browser\'s address bar. It will usually look something like this:
    ```
    %s
    ```
    However, `your.install.com` will be the domain where your copy of this software
    is installed, and `application/` will be the URI for an application. Some
    applications have multiple forms for creating objects or URIs that look a little
    different than this example, so the URI may not look exactly like this.
    To prefill the form, add properly encoded HTTP parameters to the URI. You
    should end up with something like this:
    ```
    %s?title=Platyplus&body=Ornithopter
    ```
    If the form has `title` and `body` fields of the correct types, visiting this
    link will prefill those fields with the values "Platypus" and "Ornithopter"
    respectively.
    The rest of this document shows which parameters you can add to this form and
    how to format them.
    Supported Fields
    ----------------
    This form supports these fields:
    ',
      'SearchEngine class ("%s") does not support data export.' => 'SearchEngine class ("%s") does not support data export.',
      '%s unmarked this form as an edit form.' => '%s unmarked this form as an edit form.',
      'Multiple search engines match "%s": %s.' => 'Multiple search engines match "%s": %s.',
      'Mark as "Create" Form' => 'Mark as "Create" Form',
      'Failed to base64_decode() value for key "%s".' => 'Failed to base64_decode() value for key "%s".',
      'Create another form with the same settings as this one?' => 'Create another form with the same settings as this one?',
      'Change Field Order' => 'Change Field Order',
      'Forms must have a name.' => 'Forms must have a name.',
      '%s changed the default values for field %s.' => '%s changed the default values for field %s.',
      'This EditField does not provide a Bulk EditType with key "%s".' => 'This EditField does not provide a Bulk EditType with key "%s".',
      'EditEngine ("%s") returned builtin engine configurations, but none are marked as default and the first configuration has a different builtin key already. Mark a builtin as default or omit the key from the first configuration' => 'EditEngine ("%s") returned builtin engine configurations, but none are marked as default and the first configuration has a different builtin key already. Mark a builtin as default or omit the key from the first configuration',
      '%s marked %s inline comment(s) as done and %s inline comment(s) as not done.' => '%s marked %s inline comment(s) as done and %s inline comment(s) as not done.',
      '!%s (or %s)' => '!%s (or %s)',
      '%s reordered the fields in this form.' => '%s reordered the fields in this form.',
      'This is a preview of the current form configuration.' => 'This is a preview of the current form configuration.',
      '%s changed the edit policy for %s.' => '%s changed the edit policy for %s.',
      'All Forms' => 'All Forms',
      'This %s already has that view policy.' => 'This %s already has that view policy.',
      '%s subscribed.' => '%s subscribed.',
      'Transactions are visible to users that can see the object which was acted upon. Some transactions - in particular, comments - are editable by the transaction author.' => 'Transactions are visible to users that can see the object which was acted upon. Some transactions - in particular, comments - are editable by the transaction author.',
      'Subtype configuration is invalid: subtype with key "%s" specifies that it can mutate into subtype "%s", but that is not a valid subtype.' => 'Subtype configuration is invalid: subtype with key "%s" specifies that it can mutate into subtype "%s", but that is not a valid subtype.',
      'Subtype "%s" is not a valid subtype.' => 'Subtype "%s" is not a valid subtype.',
      'Query "%s" is unknown. To run a builtin query like "all" or "active", also specify the search engine with "--class".' => 'Query "%s" is unknown. To run a builtin query like "all" or "active", also specify the search engine with "--class".',
      'The source object has a comment which mentions the destination object.' => 'The source object has a comment which mentions the destination object.',
      '%s removed %s unsubscriber(s) for %s: %s.' => '%s removed %s unsubscriber(s) for %s: %s.',
      'For full details, run `/bin/mail show-inbound --id %d`' => 'For full details, run `/bin/mail show-inbound --id %s`',
      'This object is locked. Edit it anyway?' => 'This object is locked. Edit it anyway?',
      '%s Action(s) With No Effect' => '%s Action(s) With No Effect',
      'Configured job "%s" to run silently.' => 'Configured job "%s" to run silently.',
      'View Form Configurations' => 'View Form Configurations',
      'In call to "transaction.search", specified "objectType" ("%s") is unknown. Valid object types are: %s.' => 'In call to "transaction.search", specified "objectType" ("%s") is unknown. Valid object types are: %s.',
      '%s removed %s attached file(s): %s.' => '%s removed %s attached file(s): %s.',
      '%s ("%s")' => '%s ("%s")',
      'Comments are visible to users who can see the object which was commented on. Comments can be edited by their authors.' => 'Comments are visible to users who can see the object which was commented on. Comments can be edited by their authors.',
      'Custom field transaction has invalid \'%s\'; field \'%s\' is disabled or does not exist.' => 'Custom field transaction has invalid \'%s\'; field \'%s\' is disabled or does not exist.',
      'This object has no fields with aliases.' => 'This object has no fields with aliases.',
      'Do you want to post your comment anyway?' => 'Do you want to post your comment anyway?',
      'All Edit Engines' => 'All Edit Engines',
      '%s Action(s) Have No Effect' => '%s Action(s) Have No Effect',
      'This EditField does not provide a Conduit EditType with key "%s".' => 'This EditField does not provide a Conduit EditType with key "%s".',
      'None of the fields on this object support templating.' => 'None of the fields on this object support templating.',
      'Edge transaction includes edge of type \'%s\', but transaction is of type \'%s\'. Each edge transaction must alter edges of only one type.' => 'Edge transaction includes edge of type \'%s\', but transaction is of type \'%s\'. Each edge transaction must alter edges of only one type.',
      'This comment was removed by %s.' => 'This comment was removed by %s.',
      'Apply Remaining Actions' => 'Apply Remaining Actions',
      '%s edited watcher(s), added %s: %s; removed %s: %s.' => '%s edited watcher(s), added %s: %s; removed %s: %s.',
      '%s edited unsubscriber(s), added %s: %s; removed %s: %s.' => '%s edited unsubscriber(s), added %s: %s; removed %s: %s.',
      '%s changed the join policy for %s.' => '%s changed the join policy for %s.',
      'Object Locked' => 'Object Locked',
      'Edit Form Configuration' => 'Edit Form Configuration',
      'Query "%s" is not a recognized query for class "%s".' => 'Query "%s" is not a recognized query for class "%s".',
      'Constraint "phids" to "transaction.search" requires nonempty list, empty list provided.' => 'Constraint "phids" to "transaction.search" requires nonempty list, empty list provided.',
      'You can not remove this comment because the conversation is locked.' => 'You can not remove this comment because the conversation is locked.',
      '%s updated a token.' => '%s updated a token.',
      'Form Preview' => 'Form Preview',
      '%s changed the subtype of this form from %s to %s.' => '%s changed the subtype of this form from %s to %s.',
      'If you start work now, this edit will send mail and publish notifications normally.' => 'If you start work now, this edit will send mail and publish notifications normally.',
      'If you start work now, this edit will be applied silently: it will not send mail or publish notifications.' => 'If you start work now, this edit will be applied silently: it will not send mail or publish notifications.',
      '%s edited contributor(s), added %s: %s; removed %s: %s.' => '%s edited contributor(s), added %s: %s; removed %s: %s.',
      'Transaction type \'%s\' is missing an external apply implementation!' => 'Transaction type \'%s\' is missing an external apply implementation!',
      'The subtype "%s" is not a valid subtype.' => 'The subtype "%s" is not a valid subtype.',
      '%s updated %s attached file(s), added %s: %s; removed %s: %s; modified %s: %s.' => '%s updated %s attached file(s), added %s: %s; removed %s: %s; modified %s: %s.',
      'Form %d' => 'Form %s',
      'Configure Forms for Configuring Forms' => 'Configure Forms for Configuring Forms',
      '%s added %s contributor(s) for %s: %s.' => '%s added %s contributor(s) for %s: %s.',
      '%s changed the edit policy from "%s" to "%s".' => '%s changed the edit policy from "%s" to "%s".',
      'The source object is mentioned in a comment on the destination object.' => 'The source object is mentioned in a comment on the destination object.',
      'You can not shift this object into the selected space, because the space is archived. Objects can not be created inside (or moved into) archived spaces.' => 'You can not shift this object into the selected space, because the space is archived. Objects can not be created inside (or moved into) archived spaces.',
      'Capability not supported!' => 'Capability not supported!',
      '%s created this object with visibility "%s".' => '%s created this object with visibility "%s".',
      'Override Lock' => 'Override Lock',
      'You can not apply transactions which already have commentVersions!' => 'You can not apply transactions which already have commentVersions!',
      'Object Monogram' => 'Object Monogram',
      'Subtype "%s" is not valid: subtype keys must be no longer than 64 bytes.' => 'Subtype "%s" is not valid: subtype keys must be no longer than 64 bytes.',
      'Will Copy' => 'Will Copy',
      '%s removed %s subscriber(s): %s.' => '%s removed %s subscriber(s): %s.',
      'Transaction comment must not yet have a PHID!' => 'Transaction comment must not yet have a PHID!',
      '%s changed the visibility from "%s" to "%s".' => '%s changed the visibility from "%s" to "%s".',
      'Unable to load configuration for this EditEngine ("%s").' => 'Unable to load configuration for this EditEngine ("%s").',
      'Invalid \'%s\' value for PHID transaction. Value should contain only keys \'%s\' (add PHIDs), \'%s\' (remove PHIDs) and \'%s\' (set PHIDS).' => 'Invalid \'%s\' value for PHID transaction. Value should contain only keys \'%s\' (add PHIDs), \'%s\' (remove PHIDs) and \'%s\' (set PHIDS).',
      'Change the object subtype.' => 'Change the object subtype.',
    );
  }

}
