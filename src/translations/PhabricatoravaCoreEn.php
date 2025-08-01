<?php

final class PhabricatoravaCoreEn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en';
  }

  protected function getTranslations() {
    return array(
      'Anti-Vandalism' => 'Anti-Vandalism',
      'compute score for given transactions.' => 'compute score for given transactions.',
      'Vandalism detected' => 'Vandalism detected',
      'Larger values inflate the overall score. This should be a value between 2 and 10.' => 'Larger values inflate the overall score. This should be a value between 2 and 10.',
      'Larger values result in a faster decay which means that older edits score lower.  Each edit is scored, then the score is multiplied by the age multiplier. The multiplier is calculated as follows: age_factor = multiplier * (age / age^decay). Age is how long ago the edit occurred, in seconds.' => 'Larger values result in a faster decay which means that older edits score lower.  Each edit is scored, then the score is multiplied by the age multiplier. The multiplier is calculated as follows: age_factor = multiplier * (age / age^decay). Age is how long ago the edit occurred, in seconds.',
      'The username for whom transactions will be rolled back.' => 'The username for whom transactions will be rolled back.',
      'No vandalism detected.' => 'No vandalism detected.',
      'The time period examined when scoring edits made by a user.' => 'The time period examined when scoring edits made by a user.',
      'For each action taken by a user, phabricator records one or more transactions. The type of transaction reflects what action was taken. When Antivandalism is responding to user activity, each transaction is assigned a base score and the scores are then added together and multiplied by a factor based on the frequency of activity the user has generated. Faster editing produces a larger multiplier. The final score is compared to the value in **antivandalism.max-score**.  If the score is too high, then the account is either logged out of all sessions or disabled. To customize scores, provide a json-formatted map of transaction type keys with floating-point values. For most purposes, values should be between 0.0 and 1.0 for all transaction types.' => 'For each action taken by a user, phabricator records one or more transactions. The type of transaction reflects what action was taken. When Antivandalism is responding to user activity, each transaction is assigned a base score and the scores are then added together and multiplied by a factor based on the frequency of activity the user has generated. Faster editing produces a larger multiplier. The final score is compared to the value in **antivandalism.max-score**.  If the score is too high, then the account is either logged out of all sessions or disabled. To customize scores, provide a json-formatted map of transaction type keys with floating-point values. For most purposes, values should be between 0.0 and 1.0 for all transaction types.',
      'Adjust the base scores for each transaction type' => 'Adjust the base scores for each transaction type',
      'Whether to disable a user account when they have reached the antivandalism.max-score multiplied by a threshold in the codebase.' => 'Whether to disable a user account when they have reached the antivandalism.max-score multiplied by a threshold in the codebase.',
      'Quarantine the vandal account.' => 'Quarantine the vandal account.',
      'The rate of decay applied to the age component of the score.' => 'The rate of decay applied to the age component of the score.',
      'The multiplier applied to the age component of the score.' => 'The multiplier applied to the age component of the score.',
      'You must provide either --user or --user-phid' => 'You must provide either --user or --user-phid',
      'Options for tuning the antivandalism filter.' => 'Options for tuning the antivandalism filter.',
      'Default scores applied to edits that change a text field.' => 'Default scores applied to edits that change a text field.',
      'The specified username / userPHID was not found' => 'The specified username / userPHID was not found',
      'Disable vandal accounts.' => 'Disable vandal accounts.',
      'The username for whom transactions will be scored.' => 'The username for whom transactions will be scored.',
      '%s triggered vandalism countermeasures (%s) by editing %s.' => '%s triggered vandalism countermeasures (%s) by editing %s.',
      'Minimum length below which a penalty is applied. See also: antivandalism.short-text-penalty' => 'Minimum length below which a penalty is applied. See also: antivandalism.short-text-penalty',
      'Maximum score which a user is allowed to reach before they get logged out.' => 'Maximum score which a user is allowed to reach before they get logged out.',
      'No action' => 'No action',
      'This constant is added to the score when an edit results in very short title or description.' => 'This constant is added to the score when an edit results in very short title or description.',
      'Scan for vandalism' => 'Scan for vandalism',
      'These are the default scores applied to edits on text fields suchas task title or description. The base score is multiplied by a factor which is determined by how much the text was changed. What this means is that edits which only add text are scored lower than edits which remove or alter existing text. The base score for each field should represent its relative importance.' => 'These are the default scores applied to edits on text fields suchas task title or description. The base score is multiplied by a factor which is determined by how much the text was changed. What this means is that edits which only add text are scored lower than edits which remove or alter existing text. The base score for each field should represent its relative importance.',
    );
  }

}
