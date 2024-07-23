<?php

final class PhabricatoravaCoreEn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en';
  }

  protected function getTranslations() {
    return array(
      'For each action taken by a user, phabricator records one or more transactions. The type of transaction reflects what action was taken. When Antivandalism is responding to user activity, each transaction is assigned a base score and the scores are then added together and multiplied by a factor based on the frequency of activity the user has generated. Faster editing produces a larger multiplier. The final score is compared to the value in **antivandalism.max-score**.  If the score is too high, thenthe account is either logged out of all sessions or disabled. To customize scores, provide a json-formatted map of transaction type keys with floating-point values. For most purposes, values should be between 0.0 and 1.0 for all transaction types.' => 'For each action taken by a user, phabricator records one or more transactions. The type of transaction reflects what action was taken. When Antivandalism is responding to user activity, each transaction is assigned a base score and the scores are then added together and multiplied by a factor based on the frequency of activity the user has generated. Faster editing produces a larger multiplier. The final score is compared to the value in **antivandalism.max-score**.  If the score is too high, thenthe account is either logged out of all sessions or disabled. To customize scores, provide a json-formatted map of transaction type keys with floating-point values. For most purposes, values should be between 0.0 and 1.0 for all transaction types.',
      'Anti-Vandalism' => 'Anti-Vandalism',
      'compute score for given transactions.' => 'compute score for given transactions.',
      'Vandalism detected' => 'Vandalism detected',
      'The username for whom transactions will be rolled back.' => 'The username for whom transactions will be rolled back.',
      'No vandalism detected.' => 'No vandalism detected.',
      'The time period examined when scoring edits made by a user.' => 'The time period examined when scoring edits made by a user.',
      'Adjust the base scores for each transaction type' => 'Adjust the base scores for each transaction type',
      'Quarantine the vandal account.' => 'Quarantine the vandal account.',
      'The number of tasks a new user can edit before we react.' => 'The number of tasks a new user can edit before we react.',
      'You must provide either --user or --user-phid' => 'You must provide either --user or --user-phid',
      'Options for tuning the antivandalism filter.' => 'Options for tuning the antivandalism filter.',
      'Disable the accounts of vandals when these limits are exceeded' => 'Disable the accounts of vandals when these limits are exceeded',
      'The specified username / userPHID was not found' => 'The specified username / userPHID was not found',
      'Disable vandal accounts.' => 'Disable vandal accounts.',
      'The username for whom transactions will be scored.' => 'The username for whom transactions will be scored.',
      '%s triggered vandalism countermeasures (%s) by editing %s.' => '%s triggered vandalism countermeasures (%s) by editing %s.',
      'No action' => 'No action',
      'Scan for vandalism' => 'Scan for vandalism',
    );
  }

}
