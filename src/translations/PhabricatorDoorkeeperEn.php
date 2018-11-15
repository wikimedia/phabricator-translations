<?php

final class PhabricatorDoorkeeperEn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en';
  }

  protected function getTranslations() {
    return array(
      'Phabricator is running in silent mode.' => 'Phabricator is running in silent mode.',
      'Available publishers class names are:' => 'Available publishers class names are:',
      'To enable synchronization into Asana, enter an Asana Workspace ID here.
    NOTE: This feature is new and experimental.' => 'To enable synchronization into Asana, enter an Asana Workspace ID here.
    NOTE: This feature is new and experimental.',
      'JIRA %s %s' => 'JIRA %s %s',
      'Workspace ID' => 'Workspace ID',
      '%s has no visible object on the other side; this likely indicates the Asana task has been deleted.' => '%s has no visible object on the other side; this likely indicates the Asana task has been deleted.',
      'Using publisher \'%s\'.' => 'Using publisher \'%s\'.',
      'Connect to Other Software' => 'Connect to Other Software',
      'Failed to update object %s using user %s.' => 'Failed to update object %s using user %s.',
      'You can find an Asana project ID by clicking the project in Asana and then examining the URL:
      lang=txt
      https://app.asana.com/0/12345678901234567890/111111111111111111
                              ^^^^^^^^^^^^^^^^^^^^
                            This is the ID to use.
    ' => 'You can find an Asana project ID by clicking the project in Asana and then examining the URL:
      lang=txt
      https://app.asana.com/0/12345678901234567890/111111111111111111
                              ^^^^^^^^^^^^^^^^^^^^
                            This is the ID to use.
    ',
      'No Asana provider configured.' => 'No Asana provider configured.',
      'Asana integration options.' => 'Asana integration options.',
      'JIRA integration is configured not to post anything.' => 'JIRA integration is configured not to post anything.',
      'Skipping main task update, object is no longer visible.' => 'Skipping main task update, object is no longer visible.',
      'Doorkeeper' => 'Doorkeeper',
      'Imported From' => 'Imported From',
      'When Phabricator creates tasks in Asana, it can add the tasks to Asana projects based on which application the corresponding object in Phabricator comes from. For example, you can add code reviews in Asana to a "Differential" project.
    NOTE: This feature is new and experimental.' => 'When Phabricator creates tasks in Asana, it can add the tasks to Asana projects based on which application the corresponding object in Phabricator comes from. For example, you can add code reviews in Asana to a "Differential" project.
    NOTE: This feature is new and experimental.',
      'No related users have linked Asana accounts.' => 'No related users have linked Asana accounts.',
      'Story is about an unsupported object type.' => 'Story is about an unsupported object type.',
      'No JIRA provider configured.' => 'No JIRA provider configured.',
      '%s could not be loaded.' => '%s could not be loaded.',
      'External Object' => 'External Object',
      'JIRA %s' => 'JIRA %s',
      'Asana Task %s' => 'Asana Task %s',
      'GitHub Issue %s' => 'GitHub Issue %s',
      'Asana Workspace ID to publish into.' => 'Asana Workspace ID to publish into.',
      '⚠ DO NOT EDIT THIS TASK ⚠
    ☠ Your changes will not be reflected in Phabricator.
    ☠ Your changes will be destroyed the next time state is synchronized.' => '⚠ DO NOT EDIT THIS TASK ⚠
    ☠ Your changes will not be reflected in Phabricator.
    ☠ Your changes will be destroyed the next time state is synchronized.',
      'Removing subtask edge to %s, foreign object is not visible.' => 'Removing subtask edge to %s, foreign object is not visible.',
      'Unsupported Doorkeeper tag view mode "%s". Supported modes are: %s.' => 'Unsupported Doorkeeper tag view mode "%s". Supported modes are: %s.',
      'Integration with Asana' => 'Integration with Asana',
      'Doorkeeper worker \'%s\' is not enabled.' => 'Doorkeeper worker \'%s\' is not enabled.',
      'Object has no followers or active/passive users.' => 'Object has no followers or active/passive users.',
      'Skipping main task update, cursor is ahead of the story.' => 'Skipping main task update, cursor is ahead of the story.',
      'Asana: %s' => 'Asana: %s',
      'Failed to load external object after collision.' => 'Failed to load external object after collision.',
      'To specify projects to add tasks to, enter a JSON map with publisher class names as keys and a list of project IDs as values. For example, to put Differential tasks into Asana projects with IDs `123` and `456`, enter:
      lang=txt
      {
        "DifferentialDoorkeeperRevisionFeedStoryPublisher" : [123, 456]
      }
    ' => 'To specify projects to add tasks to, enter a JSON map with publisher class names as keys and a list of project IDs as values. For example, to put Differential tasks into Asana projects with IDs `123` and `456`, enter:
      lang=txt
      {
        "DifferentialDoorkeeperRevisionFeedStoryPublisher" : [123, 456]
      }
    ',
      'Synchronization of child task from Asana failed!' => 'Synchronization of child task from Asana failed!',
      'Story is about an object with no linked JIRA issues.' => 'Story is about an object with no linked JIRA issues.',
      'GitHub User %s' => 'GitHub User %s',
      'GitHub Issue ID "%s" is not properly formatted. Expected an ID in the form "owner/repository#123".' => 'GitHub Issue ID "%s" is not properly formatted. Expected an ID in the form "owner/repository#123".',
      'Workspace Name' => 'Workspace Name',
      'Unable to find any Asana user with valid credentials to pull an OAuth token out of.' => 'Unable to find any Asana user with valid credentials to pull an OAuth token out of.',
      'Synchronization of parent task from Asana failed!' => 'Synchronization of parent task from Asana failed!',
      'Optional Asana projects to use as application tags.' => 'Optional Asana projects to use as application tags.',
      'The Asana Workspaces your linked account has access to are:
    %s' => 'The Asana Workspaces your linked account has access to are:
    %s',
      'No users to act on linked JIRA objects.' => 'No users to act on linked JIRA objects.',
      'Updating main task.' => 'Updating main task.',
      'Story object has no corresponding external JIRA objects.' => 'Story object has no corresponding external JIRA objects.',
    );
  }

}
