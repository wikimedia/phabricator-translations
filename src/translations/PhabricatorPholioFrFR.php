<?php

final class PhabricatorPholioFrFR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr_FR';
  }

  protected function getTranslations() {
    return array(
      'This mock will be closed.' => 'Cette simulation sera fermée.',
      'This image will be removed from the mock.' => 'Cette image sera retirée de la simulation.',
      '%s replaced %s with %s.' => '%s a remplacé %s par %s.',
      'Edit Mock: %s' => 'Modifier la simulation : %s',
      'View Mock' => 'Afficher le Mock',
      'Review Mocks and Design' => 'Passer en revue les maquettes et la conception',
      '%s added %d image(s): %s.' => array(
        array(
          '%s a ajouté %s image : %s.',
          '%s a ajouté %s images : %s.',
        ),
      ),
      'Close Mock' => 'Fermer la simulation',
      '%s closed mock %s.' => '%s a fermé la simulation %s.',
      'A mock\'s status changes.' => 'Changements d’état d’une maquette.',
      'Open Mocks' => 'Maquettes ouvertes',
      'No image attached!' => 'Aucune image attachée !',
      '%s closed this mock.' => '%s a fermé cette simulation.',
      '%s removed %s task(s) for %s: %s.' => '%s a retiré %s tâche(s) pour %s : %s.',
      '%s created this mock.' => '%s a créé cette simulation.',
      'Pholio Mocks' => 'Maquettes de Pholio',
      '%s removed %d image(s): %s.' => '%s a retiré %s image(s) : %s.',
      '%s edited task(s) for %s, added %s: %s; removed %s: %s.' => '%s a modifié une ou plusieurs tâches pour %s ; en a ajouté %s : %s ; en a retiré %s : %s.',
      'Undo' => 'Défaire',
      'React to mocks being created or updated.' => 'Réagir aux maquettes créées ou mises à jour.',
      'Image ("%s") does not specify which image it replaces.' => 'L’image (« %s ») ne précise pas quelle image elle remplace.',
      'Upload sets of images for review with revision history and inline comments.' => 'Téléverser des jeux d’images à passer en revue avec l’historique de révision et les commentaires en ligne.',
      'Pholio' => 'Pholio',
      'Image ("%s") belongs to the wrong object ("%s", expected "%s").' => 'L’image (« %s ») appartient au mauvais objet (« %s », attendu « %s »).',
      '%s updated the mock\'s description.' => '%s a mis à jour la description de la simulation.',
      '%s updated image descriptions of %s.' => '%s a mis à jour les descriptions d’images de %s.',
      'File is not viewable.' => 'Le fichier n’est pas visualisable.',
      'Edit Inline Comment' => 'Modifier le commentaire en ligne.',
      '%s added an inline comment to %s.' => '%s a ajouté un commentaire en ligne à %s.',
      'You can not query for inline comments without also querying for images.' => 'Vous ne pouvez pas demander les commentaires en ligne sans demander également les images.',
      'Someone comments on a mock.' => 'Quelqu’un commente une maquette.',
      'Uploading Image...' => 'Téléversement de l’image...',
      'History Beckons' => 'Signalements en historique',
      'Mock Fields' => 'Champs de simulation',
      'Pholio Mock' => 'Simulation de Pholio',
      'Open Pholio Mock' => 'Ouvrir une simulation de Pholio',
      'Create Mock' => 'Créer une simulation',
      'All Mocks' => 'Toutes les maquettes',
      'Click here, or drag and drop images to add them to the mock.' => 'Cliquez ici ou glissez et déposez des images à ajouter à la simulation.',
      'A mock\'s owner can always view and edit it.' => 'Un propriétaire de simulation peut toujours la visualiser et la modifier.',
      'Interacting with Pholio Mocks' => 'Interactions avec les maquettes de Pholio',
      'Upload Complete...' => 'Téléversement terminé...',
      'Things before they were cool.' => 'Les choses avant qu’elles étaient cool.',
      'Current Revision' => 'Version actuelle',
      '[Pholio]' => '[Pholio]',
      '%s opened mock %s.' => '%s a ouvert la simulation %s.',
      'Mock Description' => 'Description de la simulation',
      '%s edited task(s), added %s: %s; removed %s: %s.' => '%s a modifié une ou plusieurs tâches ; en a ajouté %s : %s ; en a retiré %s : %s.',
      '%s updated an image\'s (%s) description.' => '%s a mis à jour la description d’une image (%s).',
      'Open Mock' => 'Ouvrir la simulation',
      'Replaced image ("%s") belongs to the wrong mock ("%s", expected "%s").' => 'L’image remplacée (« %s ») appartient à la mauvaise simulation (« %s » obtenu, « %s » attendu).',
      'Other mock activity not listed above occurs.' => 'D’autres activités de simulation non listées ci-dessus ont lieu.',
      'MOCK DETAIL' => 'DÉTAIL DE LA SIMULATION',
      '%s opened this mock.' => '%s a ouvert cette simulation.',
      'Mock History' => 'Historique de la simulation',
      'Email Commands: Mocks' => 'Commandes de courriel : maquettes',
      'No image exists with PHID "%s".' => 'Aucune image n’existe avec le PHID « %s ».',
      '%s renamed an image (%s) from %s to %s.' => '%s a renommé une image (%s) de « %s » en « %s ».',
      '%s updated an image\'s (%s) sequence.' => '%s a mis à jour la séquence d’une image (%s).',
      '%s updated image sequence of %s.' => '%s a mis à jour la séquence d’images de %s.',
      '%s added inline comment(s).' => '%s a ajouté des commentaires en ligne.',
      'Mock image names must not be longer than %s character(s).' => array(
        'Les noms d’image de maquette ne doivent pas dépasser %s caractère.',
        'Les noms d’image de maquette ne doivent pas dépasser %s caractères.',
      ),
      'Unknown (ID %d)' => 'Inconnu (identifiant %s)',
      'Edit Mock' => 'Modifier la simulation',
      'By %s on %s' => 'Par %s sur %s',
      'Mocks must have a name.' => 'Les maquettes doivent avoir un nom.',
      'Image "%s":' => 'Image « %s » :',
      'Close Pholio Mock' => 'Fermer la simulation de Pholio',
      '%s updated images of %s.' => '%s a mis à jour des images de %s.',
      '%s added %s task(s) for %s: %s.' => '%s a ajouté %s tâche(s) pour %s : %s.',
      'You must add at least one image to the mock.' => 'Vous devez ajouter au moins une image à la simulation.',
      'This page documents the commands you can use to interact with mocks in Pholio.' => 'Cette page documente les commandes que vous pouvez utiliser pour interagir avec les maquettes dans Pholio.',
      'Unable to load replacement image ("%s"): %s' => 'Impossible de charger l’image de remplacement (« %s ») : %s',
      '%s renamed this mock from %s to %s.' => '%s a renommé cette simulation de « %s » en « %s ».',
      'Comment cannot be empty.' => 'Le commentaire ne peut pas être vide.',
      'Test rules which run when a mock is created or updated.' => 'Règles de test qui s’exécutent quand une simulation est créée ou mise à jour.',
      'Inline Comment' => 'Commentaire en ligne',
      'Mock names must not be longer than %s character(s).' => array(
        'Les noms de maquette ne doivent pas dépasser %s caractère.',
        'Les noms de maquette ne doivent pas dépasser %s caractères.',
      ),
      '%s updated the image names of %s.' => '%s a mis à jour les noms d’images de %s.',
      'Unable to load replaced image ("%s"): %s' => 'Impossible de charger l’image remplacée (« %s ») : %s',
      'This mock will become open again.' => 'Cette simulation sera ouverte à nouveau.',
      'Create a Mock' => 'Créer une simulation',
      '%s edited image(s), added %d: %s; removed %d: %s.' => '%s a modifié une ou plusieurs images ; en a ajouté %s : %s ; en a retiré %s : %s.',
      'Mock images or descriptions change.' => 'changement d’images ou de descriptions d’une simulation.',
    );
  }

}
