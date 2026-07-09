<?php

final class PhabricatoravaCoreTr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'tr';
  }

  protected function getTranslations() {
    return array(
  'Anti-Vandalism' => 'Anti-Vandalizm',
  'compute score for given transactions.' => 'Verilen işlemler için puanı hesaplayın.',
  'Vandalism detected' => 'Vandalizm bulundu',
  'Larger values inflate the overall score. This should be a value between 2 and 10.' => '',
  'Larger values result in a faster decay which means that older edits score lower.  Each edit is scored, then the score is multiplied by the age multiplier. The multiplier is calculated as follows: age_factor = multiplier * (age / age^decay). Age is how long ago the edit occurred, in seconds.' => '',
  'The username for whom transactions will be rolled back.' => '',
  'No vandalism detected.' => 'Vandalizm bulunamadı.',
  'The time period examined when scoring edits made by a user.' => '',
  'For each action taken by a user, phabricator records one or more transactions. The type of transaction reflects what action was taken. When Antivandalism is responding to user activity, each transaction is assigned a base score and the scores are then added together and multiplied by a factor based on the frequency of activity the user has generated. Faster editing produces a larger multiplier. The final score is compared to the value in **antivandalism.max-score**.  If the score is too high, then the account is either logged out of all sessions or disabled. To customize scores, provide a json-formatted map of transaction type keys with floating-point values. For most purposes, values should be between 0.0 and 1.0 for all transaction types.' => '',
  'Adjust the base scores for each transaction type' => '',
  'Whether to disable a user account when they have reached the antivandalism.max-score multiplied by a threshold in the codebase.' => '',
  'Quarantine the vandal account.' => 'Vandal hesabı engelleyin.',
  'The rate of decay applied to the age component of the score.' => '',
  'The multiplier applied to the age component of the score.' => '',
  'You must provide either --user or --user-phid' => '',
  'Options for tuning the antivandalism filter.' => '',
  'Default scores applied to edits that change a text field.' => '',
  'The specified username / userPHID was not found' => 'Belirtilen kullanıcı adı / userPHID bulunamadı',
  'Disable vandal accounts.' => 'Vandal hesapları devre dışı bırakın.',
  'The username for whom transactions will be scored.' => 'kullanıcıad for whom transeylems be scored.',
  '%s triggered vandalism countermeasures (%s) by editing %s.' => '',
  'Minimum length below which a penalty is applied. See also: antivandalism.short-text-penalty' => '',
  'Maximum score which a user is allowed to reach before they get logged out.' => '',
  'No action' => 'Eylem yok',
  'This constant is added to the score when an edit results in very short title or description.' => '',
  'Scan for vandalism' => 'Vandalizm taraması yap',
  'These are the default scores applied to edits on text fields suchas task title or description. The base score is multiplied by a factor which is determined by how much the text was changed. What this means is that edits which only add text are scored lower than edits which remove or alter existing text. The base score for each field should represent its relative importance.' => '',
);
  }

}
