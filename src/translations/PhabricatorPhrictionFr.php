<?php

final class PhabricatorPhrictionFr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr';
  }

  protected function getTranslations() {
    return array(
      'The path to the document.' => 'Chemin du document.',
      'Last Edited' => 'Dernière modification',
      'Moved' => 'Déplacé',
      'DOCUMENT CONTENT' => 'CONTENU DU DOCUMENT',
      'Can Not Delete Document!' => 'Impossible de supprimer le document!',
      'No parent/ancestor paths specified.' => 'Pas de chemins spécifiés vers les parents/ancêtres.',
      'Unknown URI type \'%s\'!' => 'Type inconnu d\'URI « %s » !',
      'Document path "%s" is not a valid path. The normalized form of this path is "%s".' => 'Le chemin du document « %s » n\'est pas un chemin valide. La forme normalisée de ce chemin est « %s ».',
      'To edit a wiki document, you must also be able to view all of its ancestors.' => 'Pour modifier un document du wiki, vous devez être aussi capable de voir tous ses ancêtres.',
      'More...' => 'Plus…',
      'A document\'s title changes.' => 'Les changements de titre d\'un document.',
      'Current Path' => 'Chemin actuel',
      '(Untitled Document)' => '(Document sans titre)',
      'Content' => 'Contenu',
      'Document Content' => 'Contenu du document',
      'Last Author' => 'Dernier auteur',
      'Ancestor Paths' => 'Chemins vers les ancêtres',
      'To view a wiki document, you must also be able to view all of its ancestors. The most-restrictive view policy of this document\'s ancestors is "%s".' => 'Pour afficher un document wiki, vous devez aussi être autorisé à afficher tous ses ancêtres. La politique d\'affichage la plus restrictive parmi les ancêtres de ce document est « %s ».',
      'Document this content is for.' => 'Renseigner en disant à quoi sert ce contenu.',
      '%s deleted this document.' => '%s a supprimé ce document.',
      '<%s>' => '<%s>',
      'This method is frozen and will eventually be deprecated. New code should use "phriction.content.search" instead.' => 'Cette méthode est gelée et deviendra éventuellement obsolète. Le nouveau code doit utiliser  « phriction.content.search » à la place.',
      'Stub' => 'Ébauche',
      'This method is frozen and will eventually be deprecated. New code should use "phriction.document.search" instead.' => 'Cette méthode est gelée et deviendra éventuellement obsolète. Le nouveau code doit utiliser  « phriction.document.search » à la place.',
      'Read information about Phriction documents.' => 'Lire les informations concernant les documents Phriction.',
      'Printable Page' => 'Page imprimable',
      'Welcome to Phriction' => 'Bienvenue sur Phriction',
      'Delete Document?' => 'Voulez-vous supprimer le document?',
      'Document Deleted' => 'Document supprimé',
      'Content version.' => 'Version de contenu.',
      'Document History' => 'Historique du document',
      'Document already exists!' => 'Le document existe déjà!',
      'Parent Paths' => 'Chemins des parents',
      'Hierarchy' => 'Hiérarchie',
      'Edit Current Version' => 'Modifier la version actuelle',
      'Edited by %s' => 'Modifié par %s',
      'No Document Here' => 'Aucun document ici',
      'Read information about Phriction document history.' => 'Lire les informations concernant l\'historique du document de Phriction.',
      'Create this Document' => 'Créer ce document',
      'Edits' => 'Modifications',
      'Status information about the document.' => 'Informations sur l\'état du document.',
      'All Content' => 'Tout le contenu',
      'Phriction Content' => 'Contenu Phriction',
      'Phriction Document Content' => 'Contenu de document Phriction',
      'Page Not Found' => 'Page non trouvée',
      'New Document' => 'Nouveau document',
      'Move Here' => 'Déplacer ici',
      'Get the content of documents or document histories.' => 'Obtenir le contenu des documents ou leur historique.',
      'New Path' => 'Nouveau chemin',
    );
  }

}
