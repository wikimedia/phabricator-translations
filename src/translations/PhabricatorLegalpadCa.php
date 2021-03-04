<?php

final class PhabricatorLegalpadCa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ca';
  }

  protected function getTranslations() {
    return array(
      'The PHID of the document signed by this signature.' => 'El PHID del document signat per aquesta signatura.',
      'All Signatures' => 'Totes les signatures',
      'Unverified Email' => 'Correu electrònic no verificat',
      'Create New Document' => 'Crea un document nou',
      'Indicates if the signature is verified.' => 'Indica si es verifica la signatura.',
      'The version of the document that was signed.' => 'La versió del document que es va signar.',
      'Type of signature required' => 'Tipus de signatura requerida',
      'Only administrators may change whether a document requires a signature.' => 'Només els administradors poden canviar si un document requereix una signatura.',
      'Signed At' => 'Signat a',
      'The type of signature.' => 'El tipus de signatura.',
      'Signature Type' => 'Tipus de signatura',
      '%s updated the document signature type.' => '%s ha actualitzat el tipus de signatura del document.',
      '%s set the document %s to require signatures.' => '%s ha establert el document %s per requerir signatures.',
      'I agree to the terms laid forth above.' => 'Accepto els termes exposats anteriorment.',
      'Signature Details' => 'Detalls de la signatura',
      'Email Commands: Legalpad Documents' => 'Ordres de correu electrònic: Documents Legalpad',
      '%s added %s required legal document(s): %s.' => '%s ha afegit %s documents legals requerits: %s.',
      'That user does not exist.' => 'Aquest usuari no existeix.',
      'Search for documents signed by given users.' => 'Cerqueu documents signats per determinats usuaris.',
      'Company name is required.' => 'Es requereix el nom de l\'empresa.',
      'Legalpad Document' => 'Document Legalpad',
      '%s edited %s required legal document(s), added %s: %s; removed %s: %s.' => '%s ha editat %s documents legals requerits, afegit %s: %s; suprimit %s: %s.',
      'Document Title.' => 'Títol del document.',
      'A valid email is required.' => 'Cal un correu electrònic vàlid.',
      'Unable to Verify Signature' => 'No es pot verificar la signatura',
      'Signed By' => 'Signat per',
      'Contact Email' => 'Correu electrònic del contacte',
      'Document Body' => 'Cos del document',
      'Contact name is required.' => 'Cal un nom de contacte.',
      'No signatures match the query.' => 'No hi ha signatures que coincideixin amb la consulta.',
      'Interacting with Legalpad Documents' => 'Interacció amb documents Legalpad',
      '%s updated the document text.' => '%s ha actualitzat el text del document.',
      'Signed on %s' => 'Signat el %s',
      '%s renamed this document from %s to %s.' => '%s ha reanomenat aquest document de "%s" a "%s".',
      'The body of text of the document.' => 'El cos del text del document.',
      'Not Signed' => 'No signat',
      '%s document(s) are already signed: %s.' => '%s document(s) ja estan signats: %s.',
      'You must choose a company to add an exemption for.' => 'Has de triar una empresa per afegir una exempció.',
      '%s set the document %s to not require signatures.' => '%s ha establert el document %s per no requerir signatures.',
      '%s edited %s required legal document(s) for %s, added %s: %s; removed %s: %s.' => '%s ha editat %s documents legals requerits per %s, afegit %s: %s; eliminat %s: %s.',
      'Email Contains' => 'El correu electrònic conté',
      'Signature Already Verified' => 'Signatura ja verificada',
      'You do not have permission to create new documents.' => 'No teniu permís per crear documents nous.',
      '%s:
    This email address was used to sign a Legalpad document in Phabricator:
      %s
    Please verify you own this email address and accept the agreement by clicking this link:
      %s
    Your signature is not valid until you complete this verification step.
    You can review the document here:
      %s
    ' => '%s: 
    Aquesta adreça de correu electrònic es va utilitzar per signar un document Legalpad a Phabricator: 
      %s 
    Verifiqueu que teniu aquesta adreça de correu electrònic i accepteu l\'acord fent clic en aquest enllaç: 
      %s 
    La teva signatura no és vàlida fins que completis aquest pas de verificació. 
    Podeu revisar el document aquí: 
      %s',
      'This document has an unknown signature type ("%s").' => 'Aquest document té un tipus de signatura desconegut (\'%s\').',
      '[Legalpad]' => '[Legalpad]',
      'Legalpad Documents' => 'Documents Legalpad',
      'Legalpad Signatures' => 'Signatures Legalpad',
      'You signed this document on %s.' => 'Heu signat aquest document el %s.',
      'Thank you for signing this document. Please check your email to verify your signature and complete the process.' => 'Gràcies per signar aquest document. Comproveu el vostre correu electrònic per verificar la vostra signatura i completeu el procés.',
      'Create documents and track signatures. Can also be re-used in other areas of Phabricator, like CLAs.' => 'Creeu documents i feu un seguiment de signatures. També es pot tornar a utilitzar en altres àrees de Phabricator, com ara els CLA.',
      'Last Updated' => 'Última actualització',
      'Read information about legalpad documents.' => 'Llegiu informació sobre documents de legalpad.',
      'This document requires a corporate signatory. You must log in to accept this document on behalf of a company you represent.' => 'Aquest document requereix un signant corporatiu. Heu d\'iniciar la sessió per acceptar aquest document en nom d\'una empresa que representeu.',
      'Search for signatures with an email that contains a given string.' => 'Cerqueu signatures amb un correu electrònic que contingui una cadena determinada.',
      'Search for signatures with a name that contains a given string.' => 'Cerqueu signatures amb un nom que contingui una cadena determinada.',
      'Not Signable' => 'No es pot signar',
      'Signed' => 'Signat',
      'The signature is now verified.' => 'Ara la signatura ja està verificada.',
      'Notes' => 'Notes',
      'Legalpad' => 'Legalpad',
      'View/Sign Document' => 'Veure/signar el document',
      'Only documents with signature type "individual" may require signing to use Phabricator.' => 'Només els documents amb tipus de signatura "particular" poden requerir signar per utilitzar Phabricator.',
      'The PHID of the signer.' => 'El PHID del signant.',
      'Mail receiver is not a LegalpadDocument!' => 'El receptor de correu no és un LegalpadDocument!',
      'You must choose a user to exempt.' => 'Heu de triar un usuari per eximir.',
      'You have already signed this document!' => 'Ja heu signat aquest document.',
      'Verify Signature' => 'Verifica la signatura',
      'Signed Documents' => 'Documents signats',
      'This signature has already been verified.' => 'Aquesta signatura ja s\'ha verificat.',
      'Please verify this document signature.' => 'Verifiqueu la signatura d’aquest document.',
      'Create a Document' => 'Crear un document',
      'You can record a signature exemption if a user has signed an equivalent document. Other applications will behave as through the user has signed this document.' => 'Podeu registrar una exempció de signatura si un usuari ha signat un document equivalent. Altres aplicacions es comportaran a través de que l\'usuari ha signat aquest document.',
      'Company Name' => 'Nom de l\'empresa',
      '%s updated the document text for %s.' => '%s ha actualitzat el text del document per %s.',
      '%s added %s required legal document(s) to %s: %s.' => '%s ha afegit %s documents legals requerits a %s: %s.',
      'Email field is required.' => 'El camp de correu electrònic és obligatori.',
      'Exempt User' => 'Usuari exempt',
      'Company address is required.' => 'Es requereix l\'adreça de l\'empresa.',
      'Contact Name' => 'Nom de contacte',
      'DOCUMENT' => 'DOCUMENT',
      'Require document signatures: %s.' => 'Requereix les signatures del document: %s.',
      'Updated By' => 'Actualitzat per',
      'The name of the signer.' => 'El nom del signant.',
      'The email address specified is associated with an account. Please login to that account and sign this document again.' => 'L\'adreça de correu especificada està associada amb un compte. Si us plau, inicieu la sessió a aquest compte i torneu a signar aquest document.',
      '%s updated the document preamble.' => '%s ha actualitzat el preàmbul del document.',
      'Corporations' => 'Empreses',
      'Verified, Corporate' => 'Verificat, corporatiu',
      '%s removed %s required legal document(s): %s.' => '%s ha suprimit %s documents legals requerits: %s.',
      '%s set the document text.' => '%s estableix el text del document.',
      'You must check "I agree to the terms laid forth above."' => 'Heu de marcar \'Accepto els termes exposats anteriorment\'.',
      '[Legalpad] Signature Verification' => '[Legalpad] Verificació de signatura',
      'This page documents the commands you can use to interact with documents in Legalpad.' => 'Aquesta pàgina documenta les ordres que podeu utilitzar per interactuar amb documents a Legalpad.',
      'Add Signature Exemption' => 'Afegeix una exempció de signatura',
      'No Signature Required' => 'No cal signatura',
      'Add Exemption' => 'Afegir una exempció',
      'The author of a document can always view and edit it.' => 'L’autor d’un document sempre el pot visualitzar i editar.',
      'Can Create Documents' => 'Pot crear documents',
      '%s removed %s required legal document(s) from %s: %s.' => '%s ha eliminat %s documents legals requerits des de %s: %s.',
      'Contributors' => 'Col·laboradors',
      'The preamble of the document.' => 'El preàmbul del document.',
      '%s set the document to require signatures.' => '%s estableix que el document requereix signatures.',
      'Individuals' => 'Particulars',
      'You do not need to sign this document. %s added a signature exemption for you on %s.' => 'No heu de signar aquest document. %s us ha afegit una exempció de signatura en %s.',
      '**Legalpad** is a simple application for tracking signatures and legal agreements. At the moment, it is primarily intended to help open source projects keep track of Contributor License Agreements.' => '**Legalpad** és una aplicació senzilla per al seguiment de signatures i acords legals. De moment, està destinat principalment a ajudar els projectes de codi obert a fer un seguiment dels acords de llicència de col·laboradors.',
    );
  }

}
