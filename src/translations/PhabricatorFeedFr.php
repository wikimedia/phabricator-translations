<?php

final class PhabricatorFeedFr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr';
  }

  protected function getTranslations() {
    return array(
      'Call %s before publishing!' => 'Appelez %s avant de publier!',
      'Dictionary with various data of the story' => 'Dictionnaire avec des données variées provenant de l\'histoire',
      'All Stories' => 'Toutes les histoires',
      'Query the feed for stories' => 'Interroger le flux pour les histoires',
      'Creation (Newest First)' => 'Création (la plus récente en premier)',
      'Story type must be a valid class name and must subclass %s. \'%s\' is not a subclass of %s.' => 'Le type d’histoire doit être un nom de classe valide et doit être une sous-classe de %s. \'%s\' n’est pas une sous-classe de %s.',
      'Full HTML presentation of story' => 'Tout l\'HTML de la présentation de l\'histoire',
      '(Unable to render story of class %s for Doorkeeper.)' => '(Impossible de rendre l’histoire de classe %s pour Doorkeeper.)',
      'Story has no primary object!' => 'Histoire sans objet primaire !',
      'Republishing story...' => 'Nouvelle publication de l’histoire…',
      'Story is asking for an object it did not request (\'%s\')!' => 'L’histoire demande un objet qu\'elle n’a pas requêté (\'%s\') !',
      'Simple one-line plain text representation of story' => 'Représentation de l\'histoire en ligne sous forme de texte simple non formaté',
      'Include Projects' => 'Inclure les projets',
      'Publish a story to the feed.' => 'Publier une histoire dans le fil.',
      'Specify a story key to republish.' => 'Spécifier une clé d’histoire à republier.',
      'The specified "Occurs Before" date is earlier in time than the specified "Occurs After" date, so this query can never match any results.' => 'La date « Se produit avant » spécifiée est antérieure à la date « Se produit après » spécifiée, donc cette requête ne peut jamais correspondre à un résultat.',
      'Republish a feed event to all consumers.' => 'Publier de nouveau un événement du fil à tous les consommateurs.',
      'Include Users' => 'Inclure les utilisateurs',
      'Feed Story Failed to Render (%s)' => 'L’histoire du flux a échoué à être rendue (%s)',
      'Story' => 'Histoire',
      'Full dictionary of story data plus rendered HTML' => 'Dictionnaire complet des données de l’histoire plus HTML rendu',
      'Specify exactly one story key to republish.' => 'Spécifier exactement une clé d’histoire à republier.',
      'You must call %s if you %s!' => 'Vous devez appeler %s si vous %s !',
      'Unloaded Object \'%s\'' => 'Objet \'%s\' déchargé',
      'No story exists with key "%s"!' => 'Aucune histoire n’existe avec la clé « %s » !',
      'Feed options.' => 'Options du fil.',
      'Creation (Oldest First)' => 'Création (les plus anciens en premier)',
      'Deprecated.' => 'Obsolète.',
      'No Stories.' => 'Pas d\'histoires.',
      'Story contains only the title of the story' => 'L\'histoire contient seulement le titre de l\'histoire',
      'Unsupported view type, possibles are: %s' => 'Type d’affichage non supporté, les valeurs possibles sont : %s',
      'Trying to retrieve markup field key "%s", but this feed story did not request it be rendered.' => 'Essai de récupération de la clé du champ de marquage « %s », mais l’histoire du fil n’a pas demandé à ce qu’elle soit rendue.',
      'Feed Stories' => 'Histoires du fil',
      'Unknown rendering target: %s' => 'Cible de rendu inconnue : %s',
      'Include stories about projects I am a member of.' => 'Comprendre des histoires sur des projets desquels je suis membre.',
      'Story type must be a valid class name and must subclass %s. \'%s\' is not a loadable class.' => 'Le type d’histoire doit être un nom de classe valide et doit être une sous-classe de %s. «&nbsp;%s&nbsp;» n’est pas une classe chargeable.',
      'Feed story (with key "%s") does not exist or could not be loaded.' => 'Le fil de l’histoire (avec la clé «&nbsp;%s&nbsp;») n’existe pas ou ne peut pas être chargé.',
      'Review Recent Activity' => 'Voir l\'activité récente',
    );
  }

}
