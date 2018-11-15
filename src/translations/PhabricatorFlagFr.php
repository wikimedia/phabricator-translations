<?php

final class PhabricatorFlagFr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr';
  }

  protected function getTranslations() {
    return array(
      'Marked with "%s" flag.' => 'Marqué avec la balise « %s ».',
      'Personal Bookmarks' => 'Signets personnels',
      'Query flag markers.' => 'Rechercher les marqueurs d\'étiquette.',
      'Clear a flag.' => 'Effacer un indicateur.',
      'Purple' => 'Pourpre',
      'Unknown groupBy parameter: %s' => 'Paramètre groupBy inconnu: %s',
      'Mark with %s flag.' => 'Marquer avec l\'indicateur %s.',
      'Flags are private. Only you can view or edit your flags.' => 'Les balises sont privées. Vous pouvez seulement voir ou éditer vos balises.',
      'Must pass an id or an objectPHID.' => 'Vous devez entrer un ID ou un objectPHID.',
      'Already marked with %s flag.' => 'Déjà marqué avec la balise %s.',
      'Flag For Later' => 'Balise pour plus tard',
      'You are not the creator of this flag.' => 'Vous n\'êtes pas le créateur de cette balise.',
      'Flag %s' => 'Balise %s',
      'Create or modify a flag.' => 'Créer ou modifier une balise.',
      'Create Flag' => 'Créer une balise',
      'You can flag this %s if you want to remember to look at it later.' => 'Vous pouvez marquer ce %s si vous voulez vous souvenir de le regarder plus tard.',
      'No flags found.' => 'Pas de balises trouvées.',
      'Bad flag ID.' => 'Mauvais ID de balise.',
      'Remove %s Flag' => 'Déplacer la balise %s',
      'All Object Types' => 'Tous les types d\'objets',
      'Already Marked' => 'Déjà marqué.',
      'Flag Color' => 'Couleur de balise.',
      'Mark with flag' => 'Marquer avec une balise',
      'Flagged' => 'Marqué',
    );
  }

}
