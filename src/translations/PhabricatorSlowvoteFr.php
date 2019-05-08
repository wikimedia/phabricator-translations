<?php

final class PhabricatorSlowvoteFr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr';
  }

  protected function getTranslations() {
    return array(
      'Close Poll' => 'Arrêter le sondage',
      'Create a Poll' => 'Créer un sondage',
      'Option ("%s") is not a valid poll option. You may only vote for valid options.' => 'L\'option (« %s ») n\'est pas une option de sondage valide. Vous ne pouvez voter que pour des options valides.',
      'No such poll exists.' => 'Il n\'existe pas de tel sondage.',
      'Polls must have a question.' => 'Les sondages doivent comporter une question.',
      'Reopen Poll' => 'Redémarrer le sondage',
      '%s made poll responses appear in a fixed order.' => '%s affiche les réponses de sondage dans un ordre déterminé.',
      'Conduct Polls' => 'Gérer un sondage',
      'Show choices in random order.' => 'Afficher les choix dans un ordre quelconque.',
      '%s updated the description for this poll.' => '%s a modifié la description de ce sondage.',
      '%s reopened this poll.' => '%s a réouvert ce sondage.',
      'You must vote for at least one option.' => 'Vous devez voter pour au moins une option.',
      '%s created this poll.' => '%s a créé ce sondage.',
      'Reopen' => 'Rouvrir',
      '%s closed this poll.' => '%s a fermé ce sondage.',
      'All Polls' => 'Tous les sondages.',
      'Someone changes the poll details.' => 'Quelqu\'un a modifié les détails du sondage.',
      'Are you sure you want to close the poll?' => 'Êtes-vous sûr de vouloir d\'arrêter le sondage  ?',
      'You must vote for something.' => 'Vous devez voter pour quelque chose.',
      'Retrieve an array of information about a poll.' => 'Obtenir un tableau d\'information concernant un sondage.',
      '%s changed who can see the responses of %s.' => '%s a modifié ceux qui pouvaient voir les réponses de %s.',
      'Someone votes on a poll.' => 'Quelqu\'un a voté pour un sondage.',
      'Create Poll' => 'Créer un sondage',
      'You must ask a poll question.' => 'Vous devez poser une question de sondage.',
      'No polls found.' => 'Aucune sondage trouvé.',
      'In this poll, you may only vote for one option.' => 'Dans cettte enquête, vous ne pouvez voter que pour une option.',
      'Voting improves cardiovascular endurance.' => 'Voter améliore l\'endurance cardiovasculaire.',
      'Stand For Something' => 'Représenter quelque chose',
      'Plurality (Single Choice)' => 'Pluralité (choix unique)',
    );
  }

}
