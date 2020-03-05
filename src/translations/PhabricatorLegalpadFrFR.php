<?php

final class PhabricatorLegalpadFrFR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr_FR';
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
      'Legalpad Document' => 'Document Legalpad',
      '%s edited %s required legal document(s), added %s: %s; removed %s: %s.' => array(
        array(
          '%s a modifié %s document légal requis, en a ajouté %s : %s, et en a supprimé %s : %s.',
          '%s a modifié %s documents légaux requis, en a ajouté %s : %s, et en a supprimé %s : %s.',
        ),
      ),
      'Document Title.' => 'Titre du document.',
      'A valid email is required.' => 'Une adresse courriel valide est requise.',
      'Unable to Verify Signature' => 'Impossible de vérifier la signature',
      'Signed By' => 'Signé par',
      'Contact Email' => 'Courriel de contact',
      'Document Body' => 'Corps du document',
      'Contact name is required.' => 'Le nom de contact est requis.',
      'No signatures match the query.' => 'Aucune signature ne correspond à la requête.',
      'Interacting with Legalpad Documents' => 'En interaction avec des Documents Legalpad',
      '%s updated the document text.' => '%s a actualisé le document textuel.',
      'Signed on %s' => 'Signé le %s',
      '%s renamed this document from %s to %s.' => '%s a renommé ce document de %s en %s.',
      'The body of text of the document.' => 'Le corps de texte du document.',
      'Not Signed' => 'Non signé',
      '%s document(s) are already signed: %s.' => '%s document(s) est/sont déjà signé(s) :%s.',
      'You must choose a company to add an exemption for.' => 'Vous devez choisir une compagnie où ajouter une exception.',
      '%s set the document %s to not require signatures.' => '%s a modifié le document %s pour ne plus nécessiter de signatures.',
      '%s edited %s required legal document(s) for %s, added %s: %s; removed %s: %s.' => array(
        array(
          '%s a modifié %s document légal requis pour %s, ajouté %s : %s ; retiré %s : %s.',
          '%s a modifié %s documents légaux requis pour %s, ajouté %s : %s ; retiré %s : %s.',
        ),
      ),
      'Email Contains' => 'Le courriel contient',
      'Signature Already Verified' => 'Signature déjà vérifiée',
      'You do not have permission to create new documents.' => 'Vous n\'avez pas la permission de créer de nouveaux documents.',
      '%s:
    This email address was used to sign a Legalpad document in Phabricator:
      %s
    Please verify you own this email address and accept the agreement by clicking this link:
      %s
    Your signature is not valid until you complete this verification step.
    You can review the document here:
      %s
    ' => '%s :
    Cette adresse courriel a été utilisée pour signer un document Legalpad sur Phabricator :
      %s
    Veuillez vérifier que vous possédez cette adresse courriel et accepter l’accord en cliquant sur ce lien :
      %s
    Votre signature restera non valide jusqu’à la complétion de cette étape de vérification.
    Vous pouvez relire le document ici :
      %s',
      'This document has an unknown signature type ("%s").' => 'Ce document a un type de signature inconnu (« %s »).',
      '[Legalpad]' => '[Legalpad]',
      'Legalpad Documents' => 'Documents Legalpad',
      'Legalpad Signatures' => 'Signatures Legalpad',
      'You signed this document on %s.' => 'Vous avez signé ce document le %s.',
      'Thank you for signing this document. Please check your email to verify your signature and complete the process.' => 'Merci de signer ce document. Veuillez consulter votre courriel pour vérifier votre signature et compléter le processus.',
      'Last Updated' => 'Dernière mise à jour',
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
