<?php

final class PhabricatorFeedFrFR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr_FR';
  }

  protected function getTranslations() {
    return array(
      'Call %s before publishing!' => 'Appelez %s avant de publier !',
      'Dictionary with various data of the story' => 'Dictionnaire avec diverses données de l’histoire',
      'All Stories' => 'Toutes les histoires',
      'Query the feed for stories' => 'Interroger le flux pour les histoires',
      'Story type must be a valid class name and must subclass %s. \'%s\' is not a subclass of %s.' => 'Le type d’histoire doit être un nom de classe valide et doit être une sous-classe de %s. « %s » n’est pas une sous-classe de %s.',
      'Full HTML presentation of story' => 'Présentation de l’histoire en HTML complet',
      '(Unable to render story of class %s for Doorkeeper.)' => '(Impossible de rendre l’histoire de la classe %s pour Doorkeeper.)',
      'Story has no primary object!' => 'Histoire sans objet primaire !',
      'Republishing story...' => 'Nouvelle publication de l’histoire…',
      'Story is asking for an object it did not request (\'%s\')!' => 'L’histoire demande un objet qu’elle n’a pas requêté (« %s ») !',
      'Simple one-line plain text representation of story' => 'Représentation de l’histoire sous forme de texte simple en ligne',
      'Include Projects' => 'Inclure les projets',
      'Specify a story key to republish.' => 'Spécifier une clé d’histoire à republier.',
      'The specified "Created Before" date is earlier in time than the specified "Created After" date, so this query can never match any results.' => 'La date spécifiée « Créé avant » est antérieure à la date spécifiée « Créé après », donc cette requête ne peut jamais correspondre à un résultat.',
      'The specified "Occurs Before" date is earlier in time than the specified "Occurs After" date, so this query can never match any results.' => 'La date spécifiée « Se produit avant » est antérieure à la date spécifiée « Se produit après », cette requête ne peut donc jamais correspondre à un résultat.',
      'Republish a feed event to all consumers.' => 'Publier à nouveau un événement du fil à tous les consommateurs.',
      'Include Users' => 'Inclure les utilisateurs',
      'Feed Story Failed to Render (%s)' => 'L’histoire du flux a échoué à être rendue (%s)',
      'Story' => 'Histoire',
      'Specify exactly one story key to republish.' => 'Spécifier exactement une clé d’histoire à publier à nouveau.',
      'You must call %s if you %s!' => 'Vous devez appeler %s si vous %s !',
      'Unloaded Object \'%s\'' => 'Objet « %s » déchargé',
      'No story exists with key "%s"!' => 'Aucune histoire n’existe avec la clé « %s » !',
      'Feed options.' => 'Options du fil.',
      'Deprecated.' => 'Obsolète.',
      'No Stories.' => 'Aucune histoire.',
      'Story contains only the title of the story' => 'L’histoire contient seulement le titre de l\'histoire',
      'Unsupported view type, possibles are: %s' => 'Type d’affichage non pris en charge, les valeurs possibles sont : %s',
      'Object Types' => 'Type d’objet',
      'Transaction Logs' => 'Journaux des transactions',
      'Trying to retrieve markup field key "%s", but this feed story did not request it be rendered.' => 'Essai de récupération de la clé du champ de marquage « %s », mais l’histoire du fil n’a pas demandé à ce qu’elle soit rendue.',
      'Feed Stories' => 'Histoires du fil',
      'Unknown rendering target: %s' => 'Cible de rendu inconnue : %s',
      'Include stories about projects I am a member of.' => 'Comprendre des histoires sur des projets desquels je suis membre.',
      'All Transactions' => 'Toutes les transactions',
      'Story type must be a valid class name and must subclass %s. \'%s\' is not a loadable class.' => 'Le type d’histoire doit être un nom de classe valide et doit être une sous-classe de %s. « %s » n’est pas une classe chargeable.',
      'Feed story (with key "%s") does not exist or could not be loaded.' => 'Le fil de l’histoire (avec la clé « %s ») n’existe pas ou ne peut pas être chargé.',
      'Review Recent Activity' => 'Voir l’activité récente',
    );
  }

}
