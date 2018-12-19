<?php

final class PhabricatorLegalpadFr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr';
  }

  protected function getTranslations() {
    return array(
      'All Signatures' => 'Toutes les signatures',
      'Unverified Email' => 'Adresse de courriel non vérifiée',
      'Create New Document' => 'Créer un nouveau document',
      'Type of signature required' => 'Type de signature requis',
      'Signature Type' => 'Type de signature',
      '%s updated the document signature type.' => '%s a actualisé le type de signature du document.',
      'Signature Details' => 'Détails de la signature',
      'That user does not exist.' => 'Cet utilisateur n\'existe pas.',
      'Search for documents signed by given users.' => 'Chercher les documents signés par certains utilisateurs.',
      'Company name is required.' => 'Le nom de l\'entreprise est requis.',
      'Document Title.' => 'Titre du document.',
      'A valid email is required.' => 'Une adresse courriel valide est requise.',
      'Signed By' => 'Signé par',
      'Document Body' => 'Corps du document',
      'The body of text of the document.' => 'Le corps de texte du document.',
      'Not Signed' => 'Non signé',
      'Signature Already Verified' => 'Signature déjà vérifiée',
      'You do not have permission to create new documents.' => 'Vous n\'avez pas la permission de créer de nouveaux documents.',
      'Signed' => 'Signé',
      'The signature is now verified.' => 'La signature est maintenant vérifiée.',
      'Notes' => 'Notes',
      'View/Sign Document' => 'Voir/Signer le document',
      'You have already signed this document!' => 'Vous avez déjà signé ce document!',
      'Verify Signature' => 'Vérifier la signature',
      'Signed Documents' => 'Documents signés',
      'This signature has already been verified.' => 'Cette signature a déjà été vérifiée.',
      'Please verify this document signature.' => 'Veuillez vérifier la signature de ce document.',
      'Create a Document' => 'Créer un document',
      'Company Name' => 'Nom de la société',
      'Email field is required.' => 'Le champ d\'adresse courriel est requis.',
      'Company address is required.' => 'L\'adresse de l\'entreprise est requise.',
      'DOCUMENT' => 'DOCUMENT',
      'Contributors' => 'Contributeurs',
      'New document title.' => 'Nouveau titre de document.',
      'Search for documents with given creators.' => 'Chercher des documents avec des créateurs donnés.',
      'Company Address' => 'Adresse de la société',
      'Unknown field: %s' => 'Champ inconnu: %s',
      'New document body.' => 'Nouveau corps de document.',
      'Search for documents with given contributors.' => 'Chercher des documents avec des contributeurs donnés.',
      'Signatures' => 'Signatures',
      'View Signatures' => 'Voir les signatures',
      'Already Signed' => 'Déjà signé',
      'Sign Document' => 'Signer le document',
    );
  }

}
