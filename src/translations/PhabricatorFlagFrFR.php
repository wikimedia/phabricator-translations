<?php

final class PhabricatorFlagFrFR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr_FR';
  }

  protected function getTranslations() {
    return array(
      'Removed "%s" flag.' => 'A retiré l’indicateur « %s ».',
      'Marked with "%s" flag.' => 'Marqué avec l’indicateur « %s ».',
      'Personal Bookmarks' => 'Signets personnels',
      'Query flag markers.' => 'Rechercher les marqueurs d’indicateur.',
      'Clear a flag.' => 'Effacer un drapeau.',
      'Purple' => 'Pourpre',
      'Unknown groupBy parameter: %s' => 'Paramètre groupBy inconnu : %s',
      'Mark with %s flag.' => 'Marquer avec l’indicateur %s.',
      'Flags are private. Only you can view or edit your flags.' => 'Les indicateurs sont privés. Vous seul pouvez voir ou modifier vos indicateurs.',
      'Must pass an id or an objectPHID.' => 'Vous devez passer un identifiant ou un objectPHID.',
      'Already marked with %s flag.' => 'Déjà marqué avec l’indicateur %s.',
      'Remove %s flag.' => 'Retirer l’indicateur %s.',
      'Flag For Later' => 'Indiquer pour plus tard',
      'Remove flag' => 'Retirer l’indicateur',
      'You are not the creator of this flag.' => 'Vous n’êtes pas le créateur de cet indicateur.',
      'Flag %s' => 'Indicateur %s',
      'Removed Flag' => 'Indicateur retiré',
      'Create or modify a flag.' => 'Créer ou modifier un indicateur.',
      'Create Flag' => 'Créer un indicateur',
      'Marked with flag of the wrong color ("%s").' => 'Marqué avec l’indicateur de la mauvaise couleur (« %s »)',
      'You can flag this %s if you want to remember to look at it later.' => 'Vous pouvez marquer ce %s si vous voulez vous souvenir de le regarder plus tard.',
      'No flags found.' => 'Aucun indicateur trouvé.',
      'Bad flag ID.' => 'Mauvais identifiant d’indicateur.',
      'Remove %s Flag' => 'Retirer l’indicateur %s',
      'All Object Types' => 'Tous les types d’objet',
      'Already Marked' => 'Déjà marqué.',
      'Flag Color' => 'Couleur d’indicateur.',
      'Mark with flag' => 'Marquer avec un indicateur',
      'Did Not Remove Flag' => 'N’a pas retiré l’indicateur',
      'Not marked with any flag.' => 'Non marqué par un indicateur.',
      'Flagged' => 'Marqué',
    );
  }

}
