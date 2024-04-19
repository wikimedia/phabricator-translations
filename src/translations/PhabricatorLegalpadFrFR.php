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
      'Type of signature required' => 'Type de signature exigé',
      'Only administrators may change whether a document requires a signature.' => 'Seuls les administrateurs peuvent changer si un document exige une signature.',
      'Signed At' => 'Signé à',
      'Signature Type' => 'Type de signature',
      '%s updated the document signature type.' => '%s a actualisé le type de signature du document.',
      '%s set the document %s to require signatures.' => '%s a défini le document %s comme exigeant des signatures.',
      'I agree to the terms laid forth above.' => 'J’accepte les termes énoncés ci-dessus.',
      'Signature Details' => 'Détails de la signature',
      'Email Commands: Legalpad Documents' => 'Commandes de courriel : documents Legalpad',
      '%s added %s required legal document(s): %s.' => '%s a ajouté %s document(s) juridique(s) exigé(s) : %s.',
      'That user does not exist.' => 'Cet utilisateur n’existe pas.',
      'Search for documents signed by given users.' => 'Rechercher des documents signés par des utilisateurs donnés.',
      'Company name is required.' => 'Le nom de l’entreprise est exigé.',
      'Legalpad Document' => 'Document Legalpad',
      '%s edited %s required legal document(s), added %s: %s; removed %s: %s.' => '%s a modifié %s document(s) juridique(s) exigé(s) ; en a ajouté %s : %s ; en a retiré %s : %s.',
      'Document Title.' => 'Titre du document.',
      'A valid email is required.' => 'Une adresse de courriel valide est exigée.',
      'Only documents with signature type "individual" may require signing to log in.' => 'Seuls les documents avec le type de signature « individuelle » peuvent exiger une signature pour se connecter.',
      'Unable to Verify Signature' => 'Impossible de vérifier la signature',
      'Signed By' => 'Signé par',
      'Contact Email' => 'Courriel de contact',
      'Document Body' => 'Corps du document',
      'The PHID of the signer' => 'Le PHID du signataire.',
      'Contact name is required.' => 'Le nom de contact est exigé.',
      'No signatures match the query.' => 'Aucune signature ne correspond à la requête.',
      'Interacting with Legalpad Documents' => 'En interaction avec des documents Legalpad',
      '%s updated the document text.' => '%s a actualisé le document textuel.',
      'Signed on %s' => 'Signé le %s',
      '%s renamed this document from %s to %s.' => '%s a renommé ce document de %s en %s.',
      'The body of text of the document.' => 'Le corps de texte du document.',
      'Not Signed' => 'Non signé',
      '%s document(s) are already signed: %s.' => '%s document(s) est/sont déjà signé(s) : %s.',
      'You must choose a company to add an exemption for.' => 'Vous devez choisir une entreprise pour laquelle il faut ajouter une exemption.',
      '%s set the document %s to not require signatures.' => '%s a modifié le document %s pour ne plus exiger de signatures.',
      '%s edited %s required legal document(s) for %s, added %s: %s; removed %s: %s.' => '%s a modifié %s document(s) juridique(s) exigé(s) pour %s ; en a ajouté %s : %s ; en a retiré %s : %s.',
      'Email Contains' => 'Le courriel contient',
      'Signature Already Verified' => 'Signature déjà vérifiée',
      'You do not have permission to create new documents.' => 'Vous n’avez pas la permission de créer de nouveaux documents.',
      'This document has an unknown signature type ("%s").' => 'Ce document a un type de signature inconnu (« %s »).',
      '[Legalpad]' => '[Legalpad]',
      'The name used by the signer.' => 'Le nom du signataire.',
      'Legalpad Documents' => 'Documents Legalpad',
      'Legalpad Signatures' => 'Signatures Legalpad',
      'You signed this document on %s.' => 'Vous avez signé ce document le %s.',
      'Thank you for signing this document. Please check your email to verify your signature and complete the process.' => 'Merci de signer ce document. Veuillez consulter vos courriels pour vérifier votre signature et compléter le processus.',
      'Last Updated' => 'Dernière mise à jour',
      'Read information about legalpad documents.' => 'Lire les informations concernant les documents de Legalpad.',
      'This document requires a corporate signatory. You must log in to accept this document on behalf of a company you represent.' => 'Ce document exige une signature d’entreprise. Vous devez vous connecter pour faire accepter ce document de la part d’une entreprise que vous représentez.',
      'Not Signable' => 'Impossible à signer',
      'Signed' => 'Signé',
      'The signature is now verified.' => 'La signature est maintenant vérifiée.',
      'Notes' => 'Notes',
      'Signature Required to Log In' => 'Signature exigée pour se connecter',
      'Legalpad' => 'Legalpad',
      'View/Sign Document' => 'Voir / signer le document',
      'Mail receiver is not a LegalpadDocument!' => 'Le destinataire du courriel n’est pas un document Legalpad valide (\'\'LegalpadDocument\'\') !',
      'You must choose a user to exempt.' => 'Vous devez choisir un utilisateur à exempter.',
      'You have already signed this document!' => 'Vous avez déjà signé ce document !',
      'Verify Signature' => 'Vérifier la signature',
      'Signed Documents' => 'Documents signés',
      'This signature has already been verified.' => 'Cette signature a déjà été vérifiée.',
      'Please verify this document signature.' => 'Veuillez vérifier la signature de ce document.',
      'Create a Document' => 'Créer un document',
      'You can record a signature exemption if a user has signed an equivalent document. Other applications will behave as through the user has signed this document.' => 'Vous pouvez enregistrer une dispense de signature si un utilisateur a signé un document équivalent. Les autres applications se comporteront comme si l’utilisateur avait signé ce document.',
      'Company Name' => 'Nom de l’entreprise',
      '%s updated the document text for %s.' => '%s a mis à jour le texte du document %s.',
      '%s added %s required legal document(s) to %s: %s.' => '%s a ajouté %s document(s) juridique(s) exigé(s) à %s : %s.',
      'Email field is required.' => 'Le champ d’adresse de courriel est exigé.',
      'The email used by the signer.' => 'L’adresse courriel du signataire.',
      'Exempt User' => 'Utilisateur dispensé',
      'Company address is required.' => 'L’adresse de l\'entreprise est exigée.',
      'Contact Name' => 'Nom de contact',
      'DOCUMENT' => 'DOCUMENT',
      'Require document signatures: %s.' => 'Exiger les signatures du document : %s.',
      'Updated By' => 'Mis à jour par',
      'The email address specified is associated with an account. Please login to that account and sign this document again.' => 'L’adresse de courriel indiquée est associée à un compte. Connectez-vous à ce compte et signez à nouveau ce document.',
      '%s updated the document preamble.' => '%s a mis à jour le préambule du document.',
      'Corporations' => 'Entreprises',
      'Verified, Corporate' => 'Vérifiée, en entreprise',
      '%s removed %s required legal document(s): %s.' => '%s a retiré %s document(s) juridique(s) exigé(s) : %s.',
      '%s set the document text.' => '%s a défini le texte du document.',
      'You must check "I agree to the terms laid forth above."' => 'Vous devez cocher « J’accepte les conditions énoncées ci-dessus. »',
      '[Legalpad] Signature Verification' => '[Legalpad] Vérification de la signature',
      'This page documents the commands you can use to interact with documents in Legalpad.' => 'Cette page documente les commandes que vous pouvez utiliser pour interagir avec des documents dans Legalpad.',
      'Add Signature Exemption' => 'Ajouter une dispense de signature',
      'No Signature Required' => 'Aucune signature exigée',
      'Add Exemption' => 'Ajouter une dispense',
      'The author of a document can always view and edit it.' => 'L’auteur d’un document peut toujours le voir et le modifier.',
      'Can Create Documents' => 'Peut créer des documents',
      '%s removed %s required legal document(s) from %s: %s.' => '%s a retiré %s document(s) juridique(s) exigé(s) de %s : %s.',
      'Contributors' => 'Contributeurs',
      'The preamble of the document.' => 'Le préambule du document.',
      '%s set the document to require signatures.' => '%s a défini que le document exige des signatures.',
      'Individuals' => 'Individuels',
      'New document title.' => 'Nouveau titre de document.',
      'Configure creation and editing documents in Legalpad.' => 'Configurer la création et la modification de documents dans Legalpad.',
      'Signature Verified' => 'Signature vérifiée',
      'NOTE: You can only see your own signatures and signatures on documents you have permission to edit.' => 'Remarque : vous ne pouvez voir que vos propres signatures et les signatures sur les documents que vous êtes autorisé(e) à modifier.',
      '%s updated the document preamble for %s.' => '%s a mis à jour le préambule du document %s.',
      'Legalpad User Guide' => 'Guide utilisateur de Legalpad',
      '%s set the document to not require signatures.' => '%s a défini que le document n’exige aucune signature.',
      'You can not sign a document on behalf of a corporation unless you are logged in.' => 'Vous ne pouvez pas signer un document au nom d’une entreprise tant que vous n’êtes pas connecté(e).',
      'Exemption By' => 'Dispensé par',
      'Who Should Sign?' => 'Qui doit signer ?',
      'Name field is required.' => 'Le champ Nom est exigé.',
      'You do not need to sign this document. %s added a signature exemption for you on %s.' => 'Vous n’avez pas besoin de signer ce document. %s vous a dispensé de signer le %s.',
      'New document preamble.' => 'Nouveau préambule du document',
      'Find Signatures' => 'Rechercher des signatures',
      'Search for documents with given creators.' => 'Rechercher des documents avec des créateurs donnés.',
      'Required %s signature(s): %s.' => '%s signature(s) exigée(s) : %s.',
      'Configure Legalpad Forms' => 'Configurer les formulaires de Legalpad',
      'The signature verification code is incorrect, or the signature has been invalidated. Make sure you followed the link in the email correctly.' => 'Le code de vérification de la signature est incorrect, ou bien la signature a été invalidée. Assurez-vous d’avoir correctement suivi le lien inclus dans le courriel.',
      'Agreements and Signatures' => 'Accords et signatures',
      '%s updated the document signature type for %s.' => '%s a mis à jour le type de signature du document pour %s.',
      'Required Signature' => 'Signature exigée',
      'Verify Signature?' => 'Vérifier la signature ?',
      'signers of legalpad documents' => 'signataires de documents Legalpad',
      'Company Address' => 'Adresse de l’entreprise',
      'CHANGES TO DOCUMENT PREAMBLE' => 'CHANGEMENTS AU PRÉAMBULE DU DOCUMENT',
      '**Legalpad** is a simple application for tracking signatures and legal agreements. At the moment, it is primarily intended to help open source projects keep track of Contributor License Agreements.' => '**Legalpad** est une application simple permettant de suivre les signatures et les acceptations de documents juridiques. Pour le moment, il a principalement pour but d’aider les projets à code source ouvert à garder un suivi des Accords de licence du contributeur.',
      'Unknown field: %s' => 'Champ inconnu : %s',
      'New document body.' => 'Nouveau corps de document.',
      'Search for signatures by given users.' => 'Rechercher des signatures par des utilisateurs donnés.',
      'Marks this document as required signing.' => 'Marque ce document comme devant être signé.',
      'Signers' => 'Signataires',
      'Search for documents with given contributors.' => 'Rechercher des documents avec des contributeurs donnés.',
      'Signatures' => 'Signatures',
      'Exemption' => 'Dispense',
      'View Signatures' => 'Voir les signatures',
      'Signed Older Version' => 'Ancienne version signée',
      'CHANGES TO DOCUMENT TEXT' => 'CHANGEMENTS AU TEXTE DU DOCUMENT',
      'Version %d (%s)' => 'Version %s (%s)',
      'You have not signed this document yet.' => 'Vous n’avez pas encore signé ce document.',
      'Require signatures' => 'Exiger des signatures',
      'Contact email is required.' => 'L’adresse de courriel de contact est nécessaire.',
      'Agree and Sign Document' => 'Accepter et signer le document',
      'Already Signed' => 'Déjà signé',
      'Verified, Current' => 'Vérifiée, version actuelle',
      'Signing User' => 'Utilisateur signataire',
      'That user has already signed this document.' => 'Cet utilisateur a déjà signé ce document.',
      'New document signature type.' => 'Nouveau type de signature du document.',
      'Sign Document' => 'Signer le document',
    );
  }

}
