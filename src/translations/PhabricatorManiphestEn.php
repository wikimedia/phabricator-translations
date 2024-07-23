<?php

final class PhabricatorManiphestEn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en';
  }

  protected function getTranslations() {
    return array(
      'Create Task' => 'Create Task',
      'Burnup Rate' => 'Burnup Rate',
      'Triage' => 'Triage',
      'Define task subtypes.' => 'Define task subtypes.',
      '%s removed %s as the assignee of this task.' => '%s removed %s as the assignee of this task.',
      'Priority of the task.' => 'Priority of the task.',
      'Weigh In' => 'Weigh In',
      'Task Fields' => 'Task Fields',
      'Assignee' => 'Assignee',
      'Open Parents' => 'Open Parents',
      'Update an existing Maniphest task.' => 'Update an existing Maniphest task.',
      'List of columns to move the task to.' => 'List of columns to move the task to.',
      'A task\'s subscribers change.' => 'A task\'s subscribers change.',
      'Oldest open task, excluding those with Low or Wishlist priority.' => 'Oldest open task, excluding those with Low or Wishlist priority.',
      'Change Points' => 'Change Points',
      'Returns information about the possible statuses for Maniphest tasks.' => 'Returns information about the possible statuses for Maniphest tasks.',
      '%s closed %s as %s.' => '%s closed %s as %s.',
      'This task has been locked.' => 'This task has been locked.',
      '%s added %s commit(s) to %s: %s.' => '%s added %s commit(s) to %s: %s.',
      'Edits Locked' => 'Edits Locked',
      '%s claimed %s.' => '%s claimed %s.',
      'TASK DETAIL' => 'TASK DETAIL',
      'The task already has the selected owner.' => 'The task already has the selected owner.',
      '%s closed this task as a duplicate by committing %s.' => '%s closed this task as a duplicate by committing %s.',
      'Search Subtasks' => 'Search Subtasks',
      'Merged' => 'Merged',
      'Closed after %s' => 'Closed after %s',
      'Changed Task Priority' => 'Changed Task Priority',
      'Retrieve Maniphest task transactions.' => 'Retrieve Maniphest task transactions.',
      'New task name.' => 'New task name.',
      '%s changed the point value for this task from %s to %s.' => '%s changed the point value for this task from %s to %s.',
      'Changed task priority to "%s".' => 'Changed task priority to "%s".',
      'Tasks must have a title.' => 'Tasks must have a title.',
      'Retrieve information about possible Maniphest task status values.' => 'Retrieve information about possible Maniphest task status values.',
      'Oldest (Pri)' => 'Oldest (Pri)',
      'Tasks with edits locked may only be edited by their owner.' => 'Tasks with edits locked may only be edited by their owner.',
      'Unblock' => 'Unblock',
      'Select and reorder task fields.' => 'Select and reorder task fields.',
      'Description Preview' => 'Description Preview',
      '%s changed the subtype of %s from "%s" to "%s".' => '%s changed the subtype of %s from "%s" to "%s".',
      'Configuration defines no task status with special attribute "%s", but you must specify a status which fills this special role.' => 'Configuration defines no task status with special attribute "%s", but you must specify a status which fills this special role.',
      'Oldest open task.' => 'Oldest open task.',
      'Duplicates Merged Here' => 'Duplicates Merged Here',
      'Change the parents of this task.' => 'Change the parents of this task.',
      'You can only select a parent task when creating a transaction for the first time.' => 'You can only select a parent task when creating a transaction for the first time.',
      'Subtasks' => 'Subtasks',
      'Update has no effect.' => 'Update has no effect.',
      '○ %s' => '○ %s',
      'Maniphest Reports' => 'Maniphest Reports',
      'Update the task description.' => 'Update the task description.',
      'From Email' => 'From Email',
      'List of related commit PHIDs.' => 'List of related commit PHIDs.',
      'Show Only Tasks With Open Parents' => 'Show Only Tasks With Open Parents',
      'Needs Triage' => 'Needs Triage',
      'Mentioned In' => 'Mentioned In',
      'Minimal Valid Config' => 'Minimal Valid Config',
      'The source task is associated with the destination commit.' => 'The source task is associated with the destination commit.',
      'Story Points' => 'Story Points',
      'Closed, Spite' => 'Closed, Spite',
      'NOTE: This table reflects tasks currently in the project. If a task was opened in the past but added to the project recently, it is counted on the day it was opened, not the day it was categorized. If a task was part of this project in the past but no longer is, it is not counted at all. This table may not agree exactly with the chart above.' => 'NOTE: This table reflects tasks currently in the project. If a task was opened in the past but added to the project recently, it is counted on the day it was opened, not the day it was categorized. If a task was part of this project in the past but no longer is, it is not counted at all. This table may not agree exactly with the chart above.',
      '%s changed file(s), attached %s: %s; detached %s: %s.' => '%s changed file(s), attached %s: %s; detached %s: %s.',
      '%s closed this task as a duplicate of %s.' => '%s closed this task as a duplicate of %s.',
      'Set Sail for Adventure' => 'Set Sail for Adventure',
      'Allows you to edit, add, or remove the task statuses available in Maniphest,
    like "Open", "Resolved" and "Invalid". The configuration should contain a map
    of status constants to status specifications (see defaults below for examples).
    The constant for each status should be 1-12 characters long and  contain only
    lowercase letters and digits. Valid examples are "open", "closed", and
    "invalid". Users will not normally see these values.
    The keys you can provide in a specification are:
      - `name` //Required string.// Name of the status, like "Invalid".
      - `name.full` //Optional string.// Longer name, like "Closed, Invalid". This
        appears on the task detail view in the header.
      - `name.action` //Optional string.// Action name for email subjects, like
        "Marked Invalid".
      - `closed` //Optional bool.// Statuses are either "open" or "closed".
        Specifying `true` here will mark the status as closed (like "Resolved" or
        "Invalid"). By default, statuses are open.
      - `special` //Optional string.// Mark this status as special. The special
        statuses are:
        - `default` This is the default status for newly created tasks. You must
          designate one status as default, and it must be an open status.
        - `closed` This is the default status for closed tasks (for example, tasks
          closed via the "!close" action in email or via the quick close button in
          Maniphest). You must designate one status as the default closed status,
          and it must be a closed status.
        - `duplicate` This is the status used when tasks are merged into one
          another as duplicates. You must designate one status for duplicates,
          and it must be a closed status.
      - `transaction.icon` //Optional string.// Allows you to choose a different
        icon to use for this status when showing status changes in the transaction
        log. Please see UIExamples, Icons and Images for a list.
      - `transaction.color` //Optional string.// Allows you to choose a different
        color to use for this status when showing status changes in the transaction
        log.
      - `silly` //Optional bool.// Marks this status as silly, and thus wholly
        inappropriate for use by serious businesses.
      - `prefixes` //Optional list<string>.// Allows you to specify a list of
        text prefixes which will trigger a task transition into this status
        when mentioned in a commit message. For example, providing "closes" here
        will allow users to move tasks to this status by writing `Closes T123` in
        commit messages.
      - `suffixes` //Optional list<string>.// Allows you to specify a list of
        text suffixes which will trigger a task transition into this status
        when mentioned in a commit message, after a valid prefix. For example,
        providing "as invalid" here will allow users to move tasks
        to this status by writing `Closes T123 as invalid`, even if another status
        is selected by the "Closes" prefix.
      - `keywords` //Optional list<string>.// Allows you to specify a list
        of keywords which can be used with `!status` commands in email to select
        this status.
      - `disabled` //Optional bool.// Marks this status as no longer in use so
        tasks can not be created or edited to have this status. Existing tasks with
        this status will not be affected, but you can batch edit them or let them
        die out on their own.
      - `claim` //Optional bool.// By default, closing an unassigned task claims
        it. You can set this to `false` to disable this behavior for a particular
        status.
      - `locked` //Optional string.// Lock tasks in this status. Specify "comments"
        to lock comments (users who can edit the task may override this lock).
        Specify "edits" to prevent anyone except the task owner from making edits.
      - `mfa` //Optional bool.// Require all edits to this task to be signed with
        multi-factor authentication.
    Statuses will appear in the UI in the order specified. Note the status marked
    `special` as `duplicate` is not settable directly and will not appear in UI
    elements, and that any status marked `silly` does not appear if the software
    is configured with `phabricator.serious-business` set to true.
    Examining the default configuration and examples below will probably be helpful
    in understanding these options.
    ' => 'Allows you to edit, add, or remove the task statuses available in Maniphest,
    like "Open", "Resolved" and "Invalid". The configuration should contain a map
    of status constants to status specifications (see defaults below for examples).
    The constant for each status should be 1-12 characters long and  contain only
    lowercase letters and digits. Valid examples are "open", "closed", and
    "invalid". Users will not normally see these values.
    The keys you can provide in a specification are:
      - `name` //Required string.// Name of the status, like "Invalid".
      - `name.full` //Optional string.// Longer name, like "Closed, Invalid". This
        appears on the task detail view in the header.
      - `name.action` //Optional string.// Action name for email subjects, like
        "Marked Invalid".
      - `closed` //Optional bool.// Statuses are either "open" or "closed".
        Specifying `true` here will mark the status as closed (like "Resolved" or
        "Invalid"). By default, statuses are open.
      - `special` //Optional string.// Mark this status as special. The special
        statuses are:
        - `default` This is the default status for newly created tasks. You must
          designate one status as default, and it must be an open status.
        - `closed` This is the default status for closed tasks (for example, tasks
          closed via the "!close" action in email or via the quick close button in
          Maniphest). You must designate one status as the default closed status,
          and it must be a closed status.
        - `duplicate` This is the status used when tasks are merged into one
          another as duplicates. You must designate one status for duplicates,
          and it must be a closed status.
      - `transaction.icon` //Optional string.// Allows you to choose a different
        icon to use for this status when showing status changes in the transaction
        log. Please see UIExamples, Icons and Images for a list.
      - `transaction.color` //Optional string.// Allows you to choose a different
        color to use for this status when showing status changes in the transaction
        log.
      - `silly` //Optional bool.// Marks this status as silly, and thus wholly
        inappropriate for use by serious businesses.
      - `prefixes` //Optional list<string>.// Allows you to specify a list of
        text prefixes which will trigger a task transition into this status
        when mentioned in a commit message. For example, providing "closes" here
        will allow users to move tasks to this status by writing `Closes T123` in
        commit messages.
      - `suffixes` //Optional list<string>.// Allows you to specify a list of
        text suffixes which will trigger a task transition into this status
        when mentioned in a commit message, after a valid prefix. For example,
        providing "as invalid" here will allow users to move tasks
        to this status by writing `Closes T123 as invalid`, even if another status
        is selected by the "Closes" prefix.
      - `keywords` //Optional list<string>.// Allows you to specify a list
        of keywords which can be used with `!status` commands in email to select
        this status.
      - `disabled` //Optional bool.// Marks this status as no longer in use so
        tasks can not be created or edited to have this status. Existing tasks with
        this status will not be affected, but you can batch edit them or let them
        die out on their own.
      - `claim` //Optional bool.// By default, closing an unassigned task claims
        it. You can set this to `false` to disable this behavior for a particular
        status.
      - `locked` //Optional string.// Lock tasks in this status. Specify "comments"
        to lock comments (users who can edit the task may override this lock).
        Specify "edits" to prevent anyone except the task owner from making edits.
      - `mfa` //Optional bool.// Require all edits to this task to be signed with
        multi-factor authentication.
    Statuses will appear in the UI in the order specified. Note the status marked
    `special` as `duplicate` is not settable directly and will not appear in UI
    elements, and that any status marked `silly` does not appear if the software
    is configured with `phabricator.serious-business` set to true.
    Examining the default configuration and examples below will probably be helpful
    in understanding these options.
    ',
      'Recently Closed' => 'Recently Closed',
      'One of a task\'s subtasks changes status.' => 'One of a task\'s subtasks changes status.',
      'Assigned Task' => 'Assigned Task',
      'File ("%s", with MIME type "%s") is not a viewable image file.' => 'File ("%s", with MIME type "%s") is not a viewable image file.',
      '%s updated the cover image for %s.' => '%s updated the cover image for %s.',
      'Transaction specifies both "beforePHID" and "beforePHIDs". Specify only "beforePHIDs".' => 'Transaction specifies both "beforePHID" and "beforePHIDs". Specify only "beforePHIDs".',
      '%s updated the task description for %s.' => '%s updated the task description for %s.',
      'Activates a points field on tasks. You can use points for estimation or
    planning. If configured, points will appear on workboards.
    To activate points, set this value to a map with these keys:
      - `enabled` //Optional bool.// Use `true` to enable points, or
        `false` to disable them.
      - `label` //Optional string.// Label for points, like "Story Points" or
        "Estimated Hours". If omitted, points will be called "Points".
      - `action` //Optional string.// Label for the action which changes points
        in Maniphest, like "Change Estimate". If omitted, the action will
        be called "Change Points".
    See the example below for a starting point.' => 'Activates a points field on tasks. You can use points for estimation or
    planning. If configured, points will appear on workboards.
    To activate points, set this value to a map with these keys:
      - `enabled` //Optional bool.// Use `true` to enable points, or
        `false` to disable them.
      - `label` //Optional string.// Label for points, like "Story Points" or
        "Estimated Hours". If omitted, points will be called "Points".
      - `action` //Optional string.// Label for the action which changes points
        in Maniphest, like "Change Estimate". If omitted, the action will
        be called "Change Points".
    See the example below for a starting point.',
      'Status set to invalid value.' => 'Status set to invalid value.',
      'Status "%s" is marked as default, but it is a closed status. The default status should be an open status.' => 'Status "%s" is marked as default, but it is a closed status. The default status should be an open status.',
      '[Maniphest]' => '[Maniphest]',
      '%s lowered the priority of %s from %s to %s.' => '%s lowered the priority of %s from %s to %s.',
      'Parameter "fullText" is no longer supported. Use method "maniphest.search" with the "query" constraint instead.' => 'Parameter "fullText" is no longer supported. Use method "maniphest.search" with the "query" constraint instead.',
      'Search for tasks with given statuses.' => 'Search for tasks with given statuses.',
      'Task Has Revision' => 'Task Has Revision',
      'Unbreak Now!' => 'Unbreak Now!',
      'Change Story Points' => 'Change Story Points',
      'Configure point values for tasks.' => 'Configure point values for tasks.',
      'This task is locked. Edit it anyway?' => 'This task is locked. Edit it anyway?',
      'Create a task in a workboard column.' => 'Create a task in a workboard column.',
      'Search for tasks with given priorities.' => 'Search for tasks with given priorities.',
      'Configure the cutoff for the "Recently Closed" column.' => 'Configure the cutoff for the "Recently Closed" column.',
      'Original task author.' => 'Original task author.',
      'Information about task priority.' => 'Information about task priority.',
      '%s detached %s file(s): %s.' => '%s detached %s file(s): %s.',
      'Valid setting' => 'Valid setting',
      'Open Subtasks' => 'Open Subtasks',
      'Close a task. This changes the task status to the default closed status. For a more powerful (but less concise) way to change task statuses, see `%s`.' => 'Close a task. This changes the task status to the default closed status. For a more powerful (but less concise) way to change task statuses, see `%s`.',
      '%s removed %s parent task(s): %s.' => '%s removed %s parent task(s): %s.',
      '%s added %s subtask(s): %s.' => '%s added %s subtask(s): %s.',
      'Assign a task to a specific user.' => 'Assign a task to a specific user.',
      'Date Closed (Latest First)' => 'Date Closed (Latest First)',
      'Merged In' => 'Merged In',
      '%s edited %s commit(s), added %s: %s; removed %s: %s.' => '%s edited %s commit(s), added %s: %s; removed %s: %s.',
      'Date Closed' => 'Date Closed',
      'Edit Related Tasks...' => 'Edit Related Tasks...',
      'This task is connected to more than %s other tasks. Only direct parents and subtasks are shown here. Use %s to show more of the graph.' => 'This task is connected to more than %s other tasks. Only direct parents and subtasks are shown here. Use %s to show more of the graph.',
      'A task\'s owner changes.' => 'A task\'s owner changes.',
      '%s updated the cover image to %s.' => '%s updated the cover image to %s.',
      '%s created subtask %s.' => '%s created subtask %s.',
      'Bulk Edit Selected »' => 'Bulk Edit Selected »',
      'No tasks found.' => 'No tasks found.',
      'Can Bulk Edit Tasks' => 'Can Bulk Edit Tasks',
      'Estimated number of hours this will take.' => 'Estimated number of hours this will take.',
      '(Up For Grabs)' => '(Up For Grabs)',
      'Related commits.' => 'Related commits.',
      'Assign task to: %s.' => 'Assign task to: %s.',
      'Status "%s" is marked as the default status for closing tasks, but is not a closed status. It should be a closed status.' => 'Status "%s" is marked as the default status for closing tasks, but is not a closed status. It should be a closed status.',
      'Value for key "%s" should be a dictionary.' => 'Value for key "%s" should be a dictionary.',
      'Assigned task to: %s.' => 'Assigned task to: %s.',
      'Key "%s" is not a valid status constant. Status constants must be 1-64 alphanumeric characters and cannot be exclusively digits. For example, "%s" or "%s" are reasonable choices.' => 'Key "%s" is not a valid status constant. Status constants must be 1-64 alphanumeric characters and cannot be exclusively digits. For example, "%s" or "%s" are reasonable choices.',
      'Current task owner, if task is assigned.' => 'Current task owner, if task is assigned.',
      'Empty withOwners() constraint is not valid.' => 'Empty withOwners() constraint is not valid.',
      'List of subtask PHIDs.' => 'List of subtask PHIDs.',
      'Default view policy for newly created tasks.' => 'Default view policy for newly created tasks.',
      'Show Only Tasks Without Open Parents' => 'Show Only Tasks Without Open Parents',
      '%s changed the task status from %s to %s by committing %s.' => '%s changed the task status from %s to %s by committing %s.',
      'New task description.' => 'New task description.',
      '%s removed the point value for %s.' => '%s removed the point value for %s.',
      'Mocks' => 'Mocks',
      'All Time' => 'All Time',
      '%s removed the point value for this task.' => '%s removed the point value for this task.',
      'Closer' => 'Closer',
      '%s added %s parent task(s): %s.' => '%s added %s parent task(s): %s.',
      'Change the related commits for this task.' => 'Change the related commits for this task.',
      'Subtask' => 'Subtask',
      'Configuration has two statuses both marked with the special attribute "%s" ("%s" and "%s"). There should be only one.' => 'Configuration has two statuses both marked with the special attribute "%s" ("%s" and "%s"). There should be only one.',
      'Points' => 'Points',
      'Set priority to' => 'Set priority to',
      'Configuration is not valid. Maniphest priority configurations must be dictionaries.' => 'Configuration is not valid. Maniphest priority configurations must be dictionaries.',
      'The task description.' => 'The task description.',
      'Filter By Project' => 'Filter By Project',
      '%s claimed this task.' => '%s claimed this task.',
      'Close This Task As a Duplicate Of' => 'Close This Task As a Duplicate Of',
      '%s removed %s subtask(s) for %s: %s.' => '%s removed %s subtask(s) for %s: %s.',
      'Untitled Task' => 'Untitled Task',
      '%s edited parent task(s) for %s, added %s: %s; removed %s: %s.' => '%s edited parent task(s) for %s, added %s: %s; removed %s: %s.',
      'Read information about task statuses.' => 'Read information about task statuses.',
      'Move a task to one or more workboard columns.' => 'Move a task to one or more workboard columns.',
      '%s added a cover image to %s.' => '%s added a cover image to %s.',
      'Edit Subtasks' => 'Edit Subtasks',
      '%s assigned this task to %s.' => '%s assigned this task to %s.',
      '%s placed %s up for grabs.' => '%s placed %s up for grabs.',
      'Change status to: %s.' => 'Change status to: %s.',
      '%s raised the priority of this task from %s to %s.' => '%s raised the priority of this task from %s to %s.',
      'No Forms' => 'No Forms',
      'Hours Config' => 'Hours Config',
      'Type a task subtype name...' => 'Type a task subtype name...',
      'File ("%s", with MIME type "%s") can not be transformed into a thumbnail. You may be missing support for this file type in the "GD" extension.' => 'File ("%s", with MIME type "%s") can not be transformed into a thumbnail. You may be missing support for this file type in the "GD" extension.',
      'To change the priority of a task, specify the desired priority, like `%s`. This table shows the configured names for priority levels.
    %s
    If you specify an invalid priority, the command is ignored. This command has no effect if you do not specify a priority.' => 'To change the priority of a task, specify the desired priority, like `%s`. This table shows the configured names for priority levels.
    %s
    If you specify an invalid priority, the command is ignored. This command has no effect if you do not specify a priority.',
      '%s edited %s revision(s), added %s: %s; removed %s: %s.' => '%s edited %s revision(s), added %s: %s; removed %s: %s.',
      'Assign task to me' => 'Assign task to me',
      '%s changed the status of %s, a subtask of %s, from %s to %s.' => '%s changed the status of %s, a subtask of %s, from %s to %s.',
      'Tasks to Close and Merge' => 'Tasks to Close and Merge',
      '%s updated the task description.' => '%s updated the task description.',
      'Task to make this a subtask of.' => 'Task to make this a subtask of.',
      '%s added %s revision(s) to %s: %s.' => '%s added %s revision(s) to %s: %s.',
      'Owner PHID' => 'Owner PHID',
      'Closed, Duplicate' => 'Closed, Duplicate',
      'Epoch timestamp when the task was closed.' => 'Epoch timestamp when the task was closed.',
      'task author' => 'task author',
      'This method is frozen and will eventually be deprecated. New code should use "transaction.search" instead.' => 'This method is frozen and will eventually be deprecated. New code should use "transaction.search" instead.',
      'Apply transactions to create a new task or edit an existing one.' => 'Apply transactions to create a new task or edit an existing one.',
      'Browse Assignees' => 'Browse Assignees',
      '%s attached %d file(s) of %s: %s' => '%s attached %s file(s) of %s: %s',
      'Status of the task.' => 'Status of the task.',
      'Open Tasks by User and Priority (%s)' => 'Open Tasks by User and Priority (%s)',
      'You can not lock this task because it does not have an owner. No one would be able to edit the task. Assign the task to an owner before locking it.' => 'You can not lock this task because it does not have an owner. No one would be able to edit the task. Assign the task to an owner before locking it.',
      'Information about task status.' => 'Information about task status.',
      'List of task monograms, as array.' => 'List of task monograms, as array.',
      'Set description to' => 'Set description to',
      'Subtasks.' => 'Subtasks.',
      '%s closed this task as %s.' => '%s closed this task as %s.',
      'Merge Into Selected Task' => 'Merge Into Selected Task',
      'PHID of the parent task.' => 'PHID of the parent task.',
      'Configure Maniphest.' => 'Configure Maniphest.',
      '%s edited subtask(s) for %s, added %s: %s; removed %s: %s.' => '%s edited subtask(s) for %s, added %s: %s; removed %s: %s.',
      'A task is moved between columns on a workboard.' => 'A task is moved between columns on a workboard.',
      'Updated Before' => 'Updated Before',
      '%s changed the status of %s from %s to %s by committing %s.' => '%s changed the status of %s from %s to %s by committing %s.',
      'The source task has been closed as a duplicate of the destination task.' => 'The source task has been closed as a duplicate of the destination task.',
      'Type a task status name or function...' => 'Type a task status name or function...',
      '%s changed the point value for %s from %s to %s.' => '%s changed the point value for %s from %s to %s.',
      '%s removed %s mock(s) for %s: %s.' => '%s removed %s mock(s) for %s: %s.',
      '%s created this task.' => '%s created this task.',
      'You can use this transaction type to create a task into a particular workboard
    column, or move an existing task between columns.
    The transaction value can be specified in several forms. Some are simpler but
    less powerful, while others are more complex and more powerful.
    The simplest valid value is a single column PHID:
    ```lang=json
    "PHID-PCOL-1111"
    ```
    This will move the task into that column, or create the task into that column
    if you are creating a new task. If the task is currently on the board, it will
    be moved out of any exclusive columns. If the task is not currently on the
    board, it will be added to the board.
    You can also perform multiple moves at the same time by passing a list of
    PHIDs:
    ```lang=json
    ["PHID-PCOL-2222", "PHID-PCOL-3333"]
    ```
    This is equivalent to performing each move individually.
    The most complex and most powerful form uses a dictionary to provide additional
    information about the move, including an optional specific position within the
    column.
    The target column should be identified as `columnPHID`, and you may select a
    position by passing either `beforePHIDs` or `afterPHIDs`, specifying the PHIDs
    of tasks currently in the column that you want to move this task before or
    after:
    ```lang=json
    [
      {
        "columnPHID": "PHID-PCOL-4444",
        "beforePHIDs": ["PHID-TASK-5555"]
      }
    ]
    ```
    When you specify multiple PHIDs, the task will be moved adjacent to the first
    valid PHID found in either of the lists. This allows positional moves to
    generally work as users expect even if the client view of the board has fallen
    out of date and some of the nearby tasks have moved elsewhere.' => 'You can use this transaction type to create a task into a particular workboard
    column, or move an existing task between columns.
    The transaction value can be specified in several forms. Some are simpler but
    less powerful, while others are more complex and more powerful.
    The simplest valid value is a single column PHID:
    ```lang=json
    "PHID-PCOL-1111"
    ```
    This will move the task into that column, or create the task into that column
    if you are creating a new task. If the task is currently on the board, it will
    be moved out of any exclusive columns. If the task is not currently on the
    board, it will be added to the board.
    You can also perform multiple moves at the same time by passing a list of
    PHIDs:
    ```lang=json
    ["PHID-PCOL-2222", "PHID-PCOL-3333"]
    ```
    This is equivalent to performing each move individually.
    The most complex and most powerful form uses a dictionary to provide additional
    information about the move, including an optional specific position within the
    column.
    The target column should be identified as `columnPHID`, and you may select a
    position by passing either `beforePHIDs` or `afterPHIDs`, specifying the PHIDs
    of tasks currently in the column that you want to move this task before or
    after:
    ```lang=json
    [
      {
        "columnPHID": "PHID-PCOL-4444",
        "beforePHIDs": ["PHID-TASK-5555"]
      }
    ]
    ```
    When you specify multiple PHIDs, the task will be moved adjacent to the first
    valid PHID found in either of the lists. This allows positional moves to
    generally work as users expect even if the client view of the board has fallen
    out of date and some of the nearby tasks have moved elsewhere.',
      'Search...' => 'Search...',
      'Task Graph' => 'Task Graph',
      'Allows you to edit or override the default priorities available in Maniphest,
    like "High", "Normal" and "Low". The configuration should contain a map of
    numeric priority values (where larger numbers correspond to higher priorities)
    to priority specifications (see defaults below for examples).
    The keys you can define for a priority are:
      - `name` //Required string.// Name of the priority.
      - `keywords` //Required list<string>.// List of unique keywords which identify
        this priority, like "high" or "low". Each priority must have at least one
        keyword and two priorities may not share the same keyword.
      - `short` //Optional string.// Alternate shorter name, used in UIs where
        there is less space available.
      - `color` //Optional string.// Color for this priority, like "red" or
        "blue".
      - `disabled` //Optional bool.// Set to true to prevent users from choosing
        this priority when creating or editing tasks. Existing tasks will not be
        affected, and can be batch edited to a different priority or left to
        eventually die out.
    You can choose the default priority for newly created tasks with
    "maniphest.default-priority".' => 'Allows you to edit or override the default priorities available in Maniphest,
    like "High", "Normal" and "Low". The configuration should contain a map of
    numeric priority values (where larger numbers correspond to higher priorities)
    to priority specifications (see defaults below for examples).
    The keys you can define for a priority are:
      - `name` //Required string.// Name of the priority.
      - `keywords` //Required list<string>.// List of unique keywords which identify
        this priority, like "high" or "low". Each priority must have at least one
        keyword and two priorities may not share the same keyword.
      - `short` //Optional string.// Alternate shorter name, used in UIs where
        there is less space available.
      - `color` //Optional string.// Color for this priority, like "red" or
        "blue".
      - `disabled` //Optional bool.// Set to true to prevent users from choosing
        this priority when creating or editing tasks. Existing tasks will not be
        affected, and can be batch edited to a different priority or left to
        eventually die out.
    You can choose the default priority for newly created tasks with
    "maniphest.default-priority".',
      'Parent IDs' => 'Parent IDs',
      'Wishlist' => 'Wishlist',
      'When moving objects between columns on a board, columns must be identified by PHIDs. This transaction uses "%s" to identify a column, but that is not a valid column PHID.' => 'When moving objects between columns on a board, columns must be identified by PHIDs. This transaction uses "%s" to identify a column, but that is not a valid column PHID.',
      'Points value must be numeric or empty.' => 'Points value must be numeric or empty.',
      'This method is frozen and will eventually be deprecated. New code should use "maniphest.search" instead.' => 'This method is frozen and will eventually be deprecated. New code should use "maniphest.search" instead.',
      'Custom Maniphest fields.' => 'Custom Maniphest fields.',
      'Key "%s" is not a valid priority constant. Priority constants must be nonnegative integers.' => 'Key "%s" is not a valid priority constant. Priority constants must be nonnegative integers.',
      'You do not have permission to bulk edit tasks.' => 'You do not have permission to bulk edit tasks.',
      '%s removed %s mock(s): %s.' => '%s removed %s mock(s): %s.',
      '%s edited mock(s), added %s: %s; removed %s: %s.' => '%s edited mock(s), added %s: %s; removed %s: %s.',
      'Default task priority for create flows.' => 'Default task priority for create flows.',
      'Show Only Tasks With Open Subtasks' => 'Show Only Tasks With Open Subtasks',
      'Merge Duplicates Into This Task' => 'Merge Duplicates Into This Task',
      '%s lowered the priority of this task from %s to %s.' => '%s lowered the priority of this task from %s to %s.',
      '(Not Assigned)' => '(Not Assigned)',
      '(Ungrouped)' => '(Ungrouped)',
      'Task' => 'Task',
      'Test rules which run when a task is created or updated.' => 'Test rules which run when a task is created or updated.',
      'List of custom fields for Maniphest tasks.
    For details on adding custom fields to Maniphest, see [[ %s | %s ]] in the
    documentation.' => 'List of custom fields for Maniphest tasks.
    For details on adding custom fields to Maniphest, see [[ %s | %s ]] in the
    documentation.',
      'React to tasks being created or updated.' => 'React to tasks being created or updated.',
      'Blocker' => 'Blocker',
      'Type a task priority name...' => 'Type a task priority name...',
      'Configure Maniphest priority names.' => 'Configure Maniphest priority names.',
      'This method is frozen and will eventually be deprecated. New code should use "maniphest.edit" instead.' => 'This method is frozen and will eventually be deprecated. New code should use "maniphest.edit" instead.',
      'Close As Duplicate' => 'Close As Duplicate',
      'Reassigned' => 'Reassigned',
      'Change the task status.' => 'Change the task status.',
      'Block' => 'Block',
      'Claimed' => 'Claimed',
      'New task point value.' => 'New task point value.',
      'Configuration is not valid. Maniphest points configuration must be a dictionary.' => 'Configuration is not valid. Maniphest points configuration must be a dictionary.',
      'Returns information about the possible priorities for Maniphest tasks.' => 'Returns information about the possible priorities for Maniphest tasks.',
      'One or more PHIDs were invalid for %s.' => 'One or more PHIDs were invalid for %s.',
      'Mentions' => 'Mentions',
      'Select All' => 'Select All',
      'This task has no parent tasks and no subtasks, so there is no graph to draw.' => 'This task has no parent tasks and no subtasks, so there is no graph to draw.',
      'User who is responsible for the task.' => 'User who is responsible for the task.',
      'Task Author' => 'Task Author',
      'Closed Before' => 'Closed Before',
      'Subtask IDs' => 'Subtask IDs',
      'Configure Maniphest Task Forms' => 'Configure Maniphest Task Forms',
      '(No Project)' => '(No Project)',
      'This task is directly connected to more than %s other tasks, which is too many tasks to display. Use %s to browse parents or subtasks.' => 'This task is directly connected to more than %s other tasks, which is too many tasks to display. Use %s to browse parents or subtasks.',
      'Duplicates' => 'Duplicates',
      'Task Locked' => 'Task Locked',
      'Edit Task: %s' => 'Edit Task: %s',
      '%s merged %s task(s) %s into %s.' => '%s merged %s task(s) %s into %s.',
      'No tasks.' => 'No tasks.',
      'Feature Request' => 'Feature Request',
      'Priorities' => 'Priorities',
      'Priority Name' => 'Priority Name',
      'Task description.' => 'Task description.',
      'Current Subtasks' => 'Current Subtasks',
      'Change the subtasks of this task.' => 'Change the subtasks of this task.',
      'Task Has Commit' => 'Task Has Commit',
      'Type a task status name...' => 'Type a task status name...',
      'Save Subtasks' => 'Save Subtasks',
      'Assign yourself as the owner of a task. To assign another user, see `%s`.' => 'Assign yourself as the owner of a task. To assign another user, see `%s`.',
      'Task Burn Rate for All Tasks' => 'Task Burn Rate for All Tasks',
      'Task Priority' => 'Task Priority',
      '%s added %s subtask(s) for %s: %s.' => '%s added %s subtask(s) for %s: %s.',
      'Parent Task' => 'Parent Task',
      'Parent tasks.' => 'Parent tasks.',
      'File PHID ("%s") is invalid, or you do not have permission to view it.' => 'File PHID ("%s") is invalid, or you do not have permission to view it.',
      'Priority set to invalid value.' => 'Priority set to invalid value.',
      'Points value must be nonnegative.' => 'Points value must be nonnegative.',
      'Type a username or "none"...' => 'Type a username or "none"...',
      'Maniphest Project Name Cache' => 'Maniphest Project Name Cache',
      'Comma-separated list of task IDs.' => 'Comma-separated list of task IDs.',
      'To assign a task to another user, provide their username. For example, to assign a task to `%s`, write `%s`.
    If you omit the username or the username is not valid, this behaves like `%s` and assigns the task to you instead.' => 'To assign a task to another user, provide their username. For example, to assign a task to `%s`, write `%s`.
    If you omit the username or the username is not valid, this behaves like `%s` and assigns the task to you instead.',
      'Edit Parent Tasks' => 'Edit Parent Tasks',
      'Spite' => 'Spite',
      'Email Commands: Tasks' => 'Email Commands: Tasks',
      'This task is directly connected to more than %s other tasks. Use %s to browse parents or subtasks, or %s to show more of the graph.' => 'This task is directly connected to more than %s other tasks. Use %s to browse parents or subtasks, or %s to show more of the graph.',
      'Comma-separated list of task monograms.' => 'Comma-separated list of task monograms.',
      '%s edited %s commit(s) for %s, added %s: %s; removed %s: %s.' => '%s edited %s commit(s) for %s, added %s: %s; removed %s: %s.',
      'Set title to' => 'Set title to',
      'Graph' => 'Graph',
      'Retrieve information about a Maniphest task, given its ID.' => 'Retrieve information about a Maniphest task, given its ID.',
      'Search for tasks owned by a user from a list.' => 'Search for tasks owned by a user from a list.',
      '%s assigned %s to %s.' => '%s assigned %s to %s.',
      'Use Maniphest to track bugs, features, todos, or anything else you need to get done. Tasks assigned to you will appear here.' => 'Use Maniphest to track bugs, features, todos, or anything else you need to get done. Tasks assigned to you will appear here.',
      'Edit Task' => 'Edit Task',
      'Default edit policy for newly created tasks.' => 'Default edit policy for newly created tasks.',
      'Change the priority of a task.' => 'Change the priority of a task.',
      '%s closed %s, a subtask of %s, as %s.' => '%s closed %s, a subtask of %s, as %s.',
      'The source task has had the destination task closed as a duplicate and merged into it.' => 'The source task has had the destination task closed as a duplicate and merged into it.',
      'Mixture of PHIDs, IDs and monograms.' => 'Mixture of PHIDs, IDs and monograms.',
      'Send email to these addresses to create tasks. %s' => 'Send email to these addresses to create tasks. %s',
      'Low' => 'Low',
      'The author of this task can take this action.' => 'The author of this task can take this action.',
      'Configure Maniphest task statuses.' => 'Configure Maniphest task statuses.',
      'Save Parent Tasks' => 'Save Parent Tasks',
      'WORKBOARD' => 'WORKBOARD',
      'Week To Date' => 'Week To Date',
      'Set status to' => 'Set status to',
      'Burnup' => 'Burnup',
      'Current Mocks' => 'Current Mocks',
      '%s added %s mock(s) for %s: %s.' => '%s added %s mock(s) for %s: %s.',
      'Other task activity not listed above occurs.' => 'Other task activity not listed above occurs.',
      'Override Task Lock' => 'Override Task Lock',
      'Points Config' => 'Points Config',
      'Current Parent Tasks' => 'Current Parent Tasks',
      'Recently Means' => 'Recently Means',
      'User who closed the task, if the task is closed.' => 'User who closed the task, if the task is closed.',
      '%s added %s mock(s): %s.' => '%s added %s mock(s): %s.',
      '%s reassigned %s from %s to %s.' => '%s reassigned %s from %s to %s.',
      'Related Objects' => 'Related Objects',
      'A task\'s priority changes.' => 'A task\'s priority changes.',
      'Merge Duplicates In' => 'Merge Duplicates In',
      'Raised Priority' => 'Raised Priority',
      'Oldest (All)' => 'Oldest (All)',
      'No such Maniphest task exists.' => 'No such Maniphest task exists.',
      '%s raised the priority of %s from %s to %s.' => '%s raised the priority of %s from %s to %s.',
      'Edit Mocks' => 'Edit Mocks',
      'High' => 'High',
      'Move on Workboard' => 'Move on Workboard',
      'Search for tasks with given subtypes.' => 'Search for tasks with given subtypes.',
      'Closer PHID' => 'Closer PHID',
      'The title of the task.' => 'The title of the task.',
      'Changed Status' => 'Changed Status',
      'Comma-separated list of task PHIDs.' => 'Comma-separated list of task PHIDs.',
      'Column move transaction specifies column PHID "%s", but there is no corresponding column with this PHID.' => 'Column move transaction specifies column PHID "%s", but there is no corresponding column with this PHID.',
      'Save Related Mocks' => 'Save Related Mocks',
      'Wontfix' => 'Wontfix',
      'List of task PHIDs, as array.' => 'List of task PHIDs, as array.',
      '%s renamed this task from %s to %s.' => '%s renamed this task from %s to %s.',
      'Updated After' => 'Updated After',
      'To change the status of a task, specify the desired status, like `%s`. This table shows the configured names for statuses.
    %s
    If you specify an invalid status, the command is ignored. This command has no effect if you do not specify a status.
    To quickly close a task, see `%s`.' => 'To change the status of a task, specify the desired status, like `%s`. This table shows the configured names for statuses.
    %s
    If you specify an invalid status, the command is ignored. This command has no effect if you do not specify a status.
    To quickly close a task, see `%s`.',
      'There was an unexpected error displaying the task graph. Use %s to browse parents or subtasks, or %s to show the graph.' => 'There was an unexpected error displaying the task graph. Use %s to browse parents or subtasks, or %s to show the graph.',
      'TASK DESCRIPTION' => 'TASK DESCRIPTION',
      '%s closed %s as %s by committing %s.' => '%s closed %s as %s by committing %s.',
      'Read information about task priorities.' => 'Read information about task priorities.',
      'Change the task point value.' => 'Change the task point value.',
      'Create as a subtask of another task.' => 'Create as a subtask of another task.',
      '● %s' => '● %s',
      'Show Only Tasks Without Open Subtasks' => 'Show Only Tasks Without Open Subtasks',
      'Task priority "%s" is not a valid task priority. Use a priority keyword to choose a task priority: %s.' => 'Task priority "%s" is not a valid task priority. Use a priority keyword to choose a task priority: %s.',
      '%s closed %s as a duplicate by committing %s.' => '%s closed %s as a duplicate by committing %s.',
      'Transaction specifies both "afterPHID" and "afterPHIDs". Specify only "afterPHIDs".' => 'Transaction specifies both "afterPHID" and "afterPHIDs". Specify only "afterPHIDs".',
      'Task Unassigned' => 'Task Unassigned',
      'Reassign the task.' => 'Reassign the task.',
      'Week of %s' => 'Week of %s',
      'Task Burn Rate for Project %s' => 'Task Burn Rate for Project %s',
      '%s changed file(s) for %s, attached %d: %s; detached %d: %s' => '%s changed file(s) for %s, attached %s: %s; detached %s: %s',
      '%s closed subtask %s as %s.' => '%s closed subtask %s as %s.',
      'Open Tasks by Project and Priority (%s)' => 'Open Tasks by Project and Priority (%s)',
      'You do not have access to any forms which can be used to create a subtask.' => 'You do not have access to any forms which can be used to create a subtask.',
      'Configure how users create and edit tasks.' => 'Configure how users create and edit tasks.',
      'Assign task to rule author.' => 'Assign task to rule author.',
      'You can not lock this task and unassign it at the same time because no one will be able to edit it anymore. Lock the task or remove the owner, but not both.' => 'You can not lock this task and unassign it at the same time because no one will be able to edit it anymore. Lock the task or remove the owner, but not both.',
      '%s detached %d file(s) of %s: %s' => '%s detached %s file(s) of %s: %s',
      'Opened' => 'Opened',
      '%s closed %s as a duplicate.' => '%s closed %s as a duplicate.',
      '%s removed %s parent task(s) for %s: %s.' => '%s removed %s parent task(s) for %s: %s.',
      'Edit Related Mocks' => 'Edit Related Mocks',
      'The source object has the destination object as a parent.' => 'The source object has the destination object as a parent.',
      'Maniphest Task' => 'Maniphest Task',
      '%s set the cover image to %s.' => '%s set the cover image to %s.',
      'By User' => 'By User',
      'Two different task priorities ("%s" and "%s") have the same keyword ("%s"). Keywords must uniquely identify priorities.' => 'Two different task priorities ("%s" and "%s") have the same keyword ("%s"). Keywords must uniquely identify priorities.',
      'List of parent task PHIDs.' => 'List of parent task PHIDs.',
      'Change the status of a task.' => 'Change the status of a task.',
      'CHANGES TO TASK DESCRIPTION' => 'CHANGES TO TASK DESCRIPTION',
      'Close and Merge Selected Tasks' => 'Close and Merge Selected Tasks',
      'Key "%s" is not a valid priority keyword. Priority keywords must be 1-64 alphanumeric characters and cannot be exclusively digits. For example, "%s" or "%s" are reasonable choices.' => 'Key "%s" is not a valid priority keyword. Priority keywords must be 1-64 alphanumeric characters and cannot be exclusively digits. For example, "%s" or "%s" are reasonable choices.',
      'Browse Priorities' => 'Browse Priorities',
      'Unbreak!' => 'Unbreak!',
      'The task already has the selected priority.' => 'The task already has the selected priority.',
      'Assign to' => 'Assign to',
      '%s edited %s revision(s) for %s, added %s: %s; removed %s: %s.' => '%s edited %s revision(s) for %s, added %s: %s; removed %s: %s.',
      'The owner of a task can always view and edit it.' => 'The owner of a task can always view and edit it.',
      'A task\'s status changes.' => 'A task\'s status changes.',
      'Rename the task.' => 'Rename the task.',
      'You can not interact with this task because it is locked.' => 'You can not interact with this task because it is locked.',
      'Someone comments on a task.' => 'Someone comments on a task.',
      'New task status constant.' => 'New task status constant.',
      '%s added %s parent task(s) for %s: %s.' => '%s added %s parent task(s) for %s: %s.',
      'Closed After' => 'Closed After',
      'New task owner, or `null` to unassign.' => 'New task owner, or `null` to unassign.',
      '%s closed this task as a duplicate.' => '%s closed this task as a duplicate.',
      'Status "%s" is marked as the status for closing tasks as duplicates, but it is not a closed status. It should be a closed status.' => 'Status "%s" is marked as the status for closing tasks as duplicates, but it is not a closed status. It should be a closed status.',
      'Wish' => 'Wish',
      '%s set the point value for %s to %s.' => '%s set the point value for %s to %s.',
      'This task is connected to more than %s other tasks. Only direct parents and subtasks are shown here.' => 'This task is connected to more than %s other tasks. Only direct parents and subtasks are shown here.',
      'Search for tasks closed by certain users.' => 'Search for tasks closed by certain users.',
      '%s edited parent task(s), added %s: %s; removed %s: %s.' => '%s edited parent task(s), added %s: %s; removed %s: %s.',
      '%s removed %s revision(s) from %s: %s.' => '%s removed %s revision(s) from %s: %s.',
      '%s merged %s task(s): %s.' => '%s merged %s task(s): %s.',
      '%s edited mock(s) for %s, added %s: %s; removed %s: %s.' => '%s edited mock(s) for %s, added %s: %s; removed %s: %s.',
      '%s reassigned this task from %s to %s.' => '%s reassigned this task from %s to %s.',
      'Triaged' => 'Triaged',
      'The source object has the destination object as a subtask.' => 'The source object has the destination object as a subtask.',
      '%s removed %s commit(s) from %s: %s.' => '%s removed %s commit(s) from %s: %s.',
      'Task Owner' => 'Task Owner',
      'By Project' => 'By Project',
      '%s triaged %s as %s priority.' => '%s triaged %s as %s priority.',
      'Change priority to: %s.' => 'Change priority to: %s.',
      'Batch Task Editor' => 'Batch Task Editor',
      'Search Parent Tasks' => 'Search Parent Tasks',
      'Subscribed' => 'Subscribed',
      'Unknown Status' => 'Unknown Status',
      'A task\'s associated projects change.' => 'A task\'s associated projects change.',
      'Interacting with Maniphest Tasks' => 'Interacting with Maniphest Tasks',
      '%s changed the task status from %s to %s.' => '%s changed the task status from %s to %s.',
      'List of task IDs, as array.' => 'List of task IDs, as array.',
      'Month To Date' => 'Month To Date',
      'Specify exactly one of \'%s\' and \'%s\'.' => 'Specify exactly one of \'%s\' and \'%s\'.',
      'Edit Locked Task' => 'Edit Locked Task',
      'Assigned' => 'Assigned',
      '%s reopened %s as %s by committing %s.' => '%s reopened %s as %s by committing %s.',
      'Change Estimate' => 'Change Estimate',
      'Closed as Duplicate' => 'Closed as Duplicate',
      '%s merged task %s into %s.' => '%s merged task %s into %s.',
      'Estimated Hours' => 'Estimated Hours',
      '%s changed the status of subtask %s from %s to %s.' => '%s changed the status of subtask %s from %s to %s.',
      'Lowered Priority' => 'Lowered Priority',
      'Execute complex searches for Maniphest tasks.' => 'Execute complex searches for Maniphest tasks.',
      'Closed By' => 'Closed By',
      'This page documents the commands you can use to interact with tasks in Maniphest. These commands work when creating new tasks via email and when replying to existing tasks.' => 'This page documents the commands you can use to interact with tasks in Maniphest. These commands work when creating new tasks via email and when replying to existing tasks.',
      '%s closed this task as %s by committing %s.' => '%s closed this task as %s by committing %s.',
      'Allows you to define task subtypes. Subtypes let you hide fields you don\'t
    need to simplify the workflows for editing tasks.
    To define subtypes, provide a list of subtypes. Each subtype should be a
    dictionary with these keys:
      - `key` //Required string.// Internal identifier for the subtype, like
        "task", "feature", or "bug".
      - `name` //Required string.// Human-readable name for this subtype, like
        "Task", "Feature Request" or "Bug Report".
      - `tag` //Optional string.// Tag text for this subtype.
      - `color` //Optional string.// Display color for this subtype.
      - `icon` //Optional string.// Icon for the subtype.
      - `children` //Optional map.// Configure options shown to the user when
         they "Create Subtask". See below.
      - `fields` //Optional map.// Configure field behaviors. See below.
      - `mutations` //Optional list.// Configure which subtypes this subtype
        can easily be converted to by using the "Change Subtype" action. See below.
    Each subtype must have a unique key, and you must define a subtype with
    the key "%s", which is used as a default subtype.
    The tag text (`tag`) is used to set the text shown in the subtype tag on list
    views and workboards. If you do not configure it, the default subtype will have
    no subtype tag and other subtypes will use their name as tag text.
    The `children` key allows you to configure which options are presented to the
    user when they "Create Subtask" from a task of this subtype. You can specify
    these keys:
      - `subtypes`: //Optional list<string>.// Show users creation forms for these
        task subtypes.
      - `forms`: //Optional list<string|int>.// Show users these specific forms,
        in order.
    If you don\'t specify either constraint, users will be shown creation forms
    for the same subtype.
    For example, if you have a "quest" subtype and do not configure `children`,
    users who click "Create Subtask" will be presented with all create forms for
    "quest" tasks.
    If you want to present them with forms for a different task subtype or set of
    subtypes instead, use `subtypes`:
    ```
      {
        ...
        "children": {
          "subtypes": ["objective", "boss", "reward"]
        }
        ...
      }
    ```
    If you want to present them with specific forms, use `forms` and specify form
    IDs:
    ```
      {
        ...
        "children": {
          "forms": [12, 16]
        }
        ...
      }
    ```
    When specifying forms by ID explicitly, the order you specify the forms in will
    be used when presenting options to the user.
    If only one option would be presented, the user will be taken directly to the
    appropriate form instead of being prompted to choose a form.
    The `fields` key can configure the behavior of custom fields on specific
    task subtypes. For example:
    ```
      {
        ...
        "fields": {
          "custom.some-field": {
            "disabled": true
          }
        }
        ...
      }
    ```
    Each field supports these options:
      - `disabled` //Optional bool.// Allows you to disable fields on certain
        subtypes.
      - `name` //Optional string.// Custom name of this field for the subtype.
    The `mutations` key allows you to control the behavior of the "Change Subtype"
    action above the comment area. By default, this action allows users to change
    the task subtype into any other subtype.
    If you\'d prefer to make it more difficult to change subtypes or offer only a
    subset of subtypes, you can specify the list of subtypes that "Change Subtypes"
    offers. For example, if you have several similar subtypes and want to allow
    tasks to be converted between them but not easily converted to other types,
    you can make the "Change Subtypes" control show only these options like this:
    ```
      {
        ...
        "mutations": ["bug", "issue", "defect"]
        ...
      }
    ```
    If you specify an empty list, the "Change Subtypes" action will be completely
    hidden.
    This mutation list is advisory and only configures the UI. Tasks may still be
    converted across subtypes freely by using the Bulk Editor or API.
    ' => 'Allows you to define task subtypes. Subtypes let you hide fields you don\'t
    need to simplify the workflows for editing tasks.
    To define subtypes, provide a list of subtypes. Each subtype should be a
    dictionary with these keys:
      - `key` //Required string.// Internal identifier for the subtype, like
        "task", "feature", or "bug".
      - `name` //Required string.// Human-readable name for this subtype, like
        "Task", "Feature Request" or "Bug Report".
      - `tag` //Optional string.// Tag text for this subtype.
      - `color` //Optional string.// Display color for this subtype.
      - `icon` //Optional string.// Icon for the subtype.
      - `children` //Optional map.// Configure options shown to the user when
         they "Create Subtask". See below.
      - `fields` //Optional map.// Configure field behaviors. See below.
      - `mutations` //Optional list.// Configure which subtypes this subtype
        can easily be converted to by using the "Change Subtype" action. See below.
    Each subtype must have a unique key, and you must define a subtype with
    the key "%s", which is used as a default subtype.
    The tag text (`tag`) is used to set the text shown in the subtype tag on list
    views and workboards. If you do not configure it, the default subtype will have
    no subtype tag and other subtypes will use their name as tag text.
    The `children` key allows you to configure which options are presented to the
    user when they "Create Subtask" from a task of this subtype. You can specify
    these keys:
      - `subtypes`: //Optional list<string>.// Show users creation forms for these
        task subtypes.
      - `forms`: //Optional list<string|int>.// Show users these specific forms,
        in order.
    If you don\'t specify either constraint, users will be shown creation forms
    for the same subtype.
    For example, if you have a "quest" subtype and do not configure `children`,
    users who click "Create Subtask" will be presented with all create forms for
    "quest" tasks.
    If you want to present them with forms for a different task subtype or set of
    subtypes instead, use `subtypes`:
    ```
      {
        ...
        "children": {
          "subtypes": ["objective", "boss", "reward"]
        }
        ...
      }
    ```
    If you want to present them with specific forms, use `forms` and specify form
    IDs:
    ```
      {
        ...
        "children": {
          "forms": [12, 16]
        }
        ...
      }
    ```
    When specifying forms by ID explicitly, the order you specify the forms in will
    be used when presenting options to the user.
    If only one option would be presented, the user will be taken directly to the
    appropriate form instead of being prompted to choose a form.
    The `fields` key can configure the behavior of custom fields on specific
    task subtypes. For example:
    ```
      {
        ...
        "fields": {
          "custom.some-field": {
            "disabled": true
          }
        }
        ...
      }
    ```
    Each field supports these options:
      - `disabled` //Optional bool.// Allows you to disable fields on certain
        subtypes.
      - `name` //Optional string.// Custom name of this field for the subtype.
    The `mutations` key allows you to control the behavior of the "Change Subtype"
    action above the comment area. By default, this action allows users to change
    the task subtype into any other subtype.
    If you\'d prefer to make it more difficult to change subtypes or offer only a
    subset of subtypes, you can specify the list of subtypes that "Change Subtypes"
    offers. For example, if you have several similar subtypes and want to allow
    tasks to be converted between them but not easily converted to other types,
    you can make the "Change Subtypes" control show only these options like this:
    ```
      {
        ...
        "mutations": ["bug", "issue", "defect"]
        ...
      }
    ```
    If you specify an empty list, the "Change Subtypes" action will be completely
    hidden.
    This mutation list is advisory and only configures the UI. Tasks may still be
    converted across subtypes freely by using the Bulk Editor or API.
    ',
      '%s changed the subtype of this task from "%s" to "%s".' => '%s changed the subtype of this task from "%s" to "%s".',
      'Create a new Maniphest task.' => 'Create a new Maniphest task.',
      'Create New Task' => 'Create New Task',
      'Read information about tasks.' => 'Read information about tasks.',
      'New task priority constant.' => 'New task priority constant.',
      '%s reopened this task as %s by committing %s.' => '%s reopened this task as %s by committing %s.',
      'Choose a default priority for newly created tasks. You can review and adjust available priorities by using the %s configuration option. The default value (`90`) corresponds to the default "Needs Triage" priority.' => 'Choose a default priority for newly created tasks. You can review and adjust available priorities by using the %s configuration option. The default value (`90`) corresponds to the default "Needs Triage" priority.',
      'The source task is associated with the destination revision.' => 'The source task is associated with the destination revision.',
      'Changed Task Status' => 'Changed Task Status',
      'Changed Project Column' => 'Changed Project Column',
      'Subtype of the task.' => 'Subtype of the task.',
      'Unassigned task.' => 'Unassigned task.',
      '%s edited subtask(s), added %s: %s; removed %s: %s.' => '%s edited subtask(s), added %s: %s; removed %s: %s.',
      'Task status ("%s") has unrecognized value for "locked" configuration ("%s"). Supported values are: "%s", "%s".' => 'Task status ("%s") has unrecognized value for "locked" configuration ("%s"). Supported values are: "%s", "%s".',
      '%s removed %s subtask(s): %s.' => '%s removed %s subtask(s): %s.',
      'Mentioned Here' => 'Mentioned Here',
      'Closed, Wontfix' => 'Closed, Wontfix',
      'This method is frozen and will eventually be deprecated. New code should use "maniphest.status.search" instead.' => 'This method is frozen and will eventually be deprecated. New code should use "maniphest.status.search" instead.',
      'Unknown status query \'%s\'!' => 'Unknown status query \'%s\'!',
      'Group PHID ("%s") component of cursor ("%s") is not valid.' => 'Group PHID ("%s") component of cursor ("%s") is not valid.',
      '%s set the point value for this task to %s.' => '%s set the point value for this task to %s.',
      'Change the priority of the task.' => 'Change the priority of the task.',
      'Page Size' => 'Page Size',
      '%s reopened this task as %s.' => '%s reopened this task as %s.',
      '%s reopened %s, a subtask of %s, as %s.' => '%s reopened %s, a subtask of %s, as %s.',
      'Name of the task.' => 'Name of the task.',
      'Spited' => 'Spited',
      'Lock Error' => 'Lock Error',
      'Tasks and Bugs' => 'Tasks and Bugs',
      'Revisions and Commits' => 'Revisions and Commits',
      'Parent task identifier "%s" does not identify a visible task.' => 'Parent task identifier "%s" does not identify a visible task.',
      'Assign / Claim' => 'Assign / Claim',
      '%s reopened subtask %s as %s.' => '%s reopened subtask %s as %s.',
      'Point value of the task.' => 'Point value of the task.',
      'Search for tasks with given authors.' => 'Search for tasks with given authors.',
      'The task already has the selected status.' => 'The task already has the selected status.',
      'Clear Selection' => 'Clear Selection',
      '%s reopened %s as "%s".' => '%s reopened %s as "%s".',
      '%s triaged this task as %s priority.' => '%s triaged this task as %s priority.',
      'This task has no related commits or revisions.' => 'This task has no related commits or revisions.',
      'Changed task status to "%s".' => 'Changed task status to "%s".',
      'View Standalone Graph' => 'View Standalone Graph',
      'Choose Subtype' => 'Choose Subtype',
      'You can not remove the owner of this task because it is locked and no one would be able to edit the task. Reassign the task or unlock it before removing the owner.' => 'You can not remove the owner of this task because it is locked and no one would be able to edit the task. Reassign the task or unlock it before removing the owner.',
    );
  }

}
