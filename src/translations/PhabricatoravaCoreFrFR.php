<?php

final class PhabricatoravaCoreFrFR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr_FR';
  }

  protected function getTranslations() {
    return array(
  'Anti-Vandalism' => 'Anti-Vandalisme',
  'compute score for given transactions.' => 'calcule le score pour les transactions déterminées.',
  'Vandalism detected' => 'Vandalisme détecté',
  'Larger values inflate the overall score. This should be a value between 2 and 10.' => 'Une valeur plus élevée gonfle le score global. Elle doit être comprise entre 2 et 10.',
  'Larger values result in a faster decay which means that older edits score lower.  Each edit is scored, then the score is multiplied by the age multiplier. The multiplier is calculated as follows: age_factor = multiplier * (age / age^decay). Age is how long ago the edit occurred, in seconds.' => 'Une valeur plus élevée entraîne une dégradation plus rapide, ce qui signifie qu’une modification plus ancienne obtient un score plus faible. Chaque modification est notée, puis le score est multiplié par le multiplicateur d’âge. Ce multiplicateur est calculé comme suit : facteur_âge = multiplicateur * (âge / âge^dégradation). L’âge correspond au temps écoulé depuis la modification, en secondes.',
  'The username for whom transactions will be rolled back.' => 'Le nom d\'utilisateur pour lequel les transactions seront annulées.',
  'No vandalism detected.' => 'Aucun vandalisme détecté.',
  'The time period examined when scoring edits made by a user.' => 'La période de temps examinée pour la notation des modifications effectuées par un utilisateur.',
  'For each action taken by a user, phabricator records one or more transactions. The type of transaction reflects what action was taken. When Antivandalism is responding to user activity, each transaction is assigned a base score and the scores are then added together and multiplied by a factor based on the frequency of activity the user has generated. Faster editing produces a larger multiplier. The final score is compared to the value in **antivandalism.max-score**.  If the score is too high, then the account is either logged out of all sessions or disabled. To customize scores, provide a json-formatted map of transaction type keys with floating-point values. For most purposes, values should be between 0.0 and 1.0 for all transaction types.' => 'Pour chaque action effectuée par un utilisateur, phabricator enregistre une ou plusieurs transactions. Le type de transaction reflète l’action effectuée. Lorsqu’Antivandalism analyse l’activité d’un utilisateur, un score de base est attribué à chaque transaction, puis les scores sont additionnés et multipliés par un facteur basé sur la rapidité de l’action effectuée par l’utilisateur. Une édition plus rapide produit un multiplicateur plus important. Le score final est comparé à la valeur dans **antivandalism.max-score**. Si le score est trop élevé, le compte est alors soit déconnecté de toutes les sessions, soit désactivé. Pour personnaliser les scores, fournissez une carte au format json des clés de type de transaction avec des valeurs à virgule flottante. Dans la plupart des cas, les valeurs doivent être comprises entre 0,0 et 1,0 pour tous les types de transaction.',
  'Adjust the base scores for each transaction type' => 'Ajustez les scores de base pour chaque type de transaction',
  'Quarantine the vandal account.' => 'Mettez en quarantaine le compte vandale.',
  'You must provide either --user or --user-phid' => 'Vous devez fournir soit --user, soit --user-phid',
  'Options for tuning the antivandalism filter.' => 'Options de réglage du filtre antivandalism.',
  'The specified username / userPHID was not found' => 'Le nom ou le PHID de l’utilisateur spécifié n’a pas été trouvé',
  'Disable vandal accounts.' => 'Désactivez les comptes vandales.',
  'The username for whom transactions will be scored.' => 'Le nom d\'utilisateur pour lequel les transactions seront calculées.',
  '%s triggered vandalism countermeasures (%s) by editing %s.' => '%s a déclenché des contre-mesures de vandalisme (%s) en modifiant %s.',
  'No action' => 'Aucune action',
  'Scan for vandalism' => 'Scan pour le vandalisme',
);
  }

}
