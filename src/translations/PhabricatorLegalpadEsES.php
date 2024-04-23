<?php

final class PhabricatorLegalpadEsES
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'es_ES';
  }

  protected function getTranslations() {
    return array(
      'All Signatures' => 'Todas las firmas',
      'Unverified Email' => 'Correo electrónico no verificado',
      'Create New Document' => 'Crear documento nuevo',
      'Type of signature required' => 'Tipo de firma requerida',
      'Signed At' => 'Firmado el',
      'Signature Type' => 'Tipo de firma',
      '%s updated the document signature type.' => '%s actualizó el tipo de firma del documento.',
      '%s set the document %s to require signatures.' => '%s ajustó el documento %s para requerir firmas.',
      'I agree to the terms laid forth above.' => 'Estoy de acuerdo con los términos mencionados más arriba.',
      'Signature Details' => 'Detalles de la firma',
      'Email Commands: Legalpad Documents' => 'Órdenes por correo electrónico: Documentos de Legalpad',
      '%s added %s required legal document(s): %s.' => '%s añadió %s firma(s) requeridas para el/los documento(s): %s.',
      'That user does not exist.' => 'Ese usuario no existe.',
      'Search for documents signed by given users.' => 'Buscar los documentos firmados por una serie de usuarios dados.',
      'Company name is required.' => 'Se requiere el nombre de la empresa.',
      'Legalpad Document' => 'Documento de Legalpad',
      '%s edited %s required legal document(s), added %s: %s; removed %s: %s.' => '%s editó %s documento(s) legal(es) requerido(s), añadido %s: %s; retirado %s: %s.',
      'Document Title.' => 'Título del documento.',
      'A valid email is required.' => 'Se requiere un correo electrónico válido.',
      'Only documents with signature type "individual" may require signing to log in.' => 'Solo los documentos con tipo de firma "individual" pueden requerir ser firmados para usar Phabricator.',
      'Unable to Verify Signature' => 'No se puede verificar la firma',
      'Signed By' => 'Firmado por',
      'Contact Email' => 'Correo electrónico de contacto',
      'Document Body' => 'Cuerpo del documento',
      'Contact name is required.' => 'Se requiere un nombre de contacto.',
      'No signatures match the query.' => 'No existen firmas que coincidan con la consulta.',
      'Interacting with Legalpad Documents' => 'Interactuando con los documentos de Legalpad',
      '%s updated the document text.' => '%s actualizó el texto del documento.',
      'Signed on %s' => 'Firmado el %s',
      '%s renamed this document from %s to %s.' => '%s cambió el nombre de este documento de «%s» a «%s».',
      'The body of text of the document.' => 'El cuerpo de texto del documento',
      'Not Signed' => 'No firmado',
      '%s document(s) are already signed: %s.' => '%s documento(s) ya se encuentra(n) firmado(s): %s.',
      'You must choose a company to add an exemption for.' => 'Tienes que escoger una compañía para añadirla como excepción.',
      '%s set the document %s to not require signatures.' => '%s ajustó el documento %s para no requerir firmas.',
      '%s edited %s required legal document(s) for %s, added %s: %s; removed %s: %s.' => '%s editó %s documento(s) legal(es) para %s, añadido %s: %s; retirado %s: %s.',
      'Email Contains' => 'El correo electrónico contiene',
      'Signature Already Verified' => 'Firma ya verificada',
      'You do not have permission to create new documents.' => 'No tienes permiso para crear nuevos documentos.',
      'This document has an unknown signature type ("%s").' => 'Este documento tiene un tipo de firma desconocida ("%s").',
      'Legalpad Documents' => 'Documentos de Legalpad',
      'Legalpad Signatures' => 'Firmas de Legalpad',
      'You signed this document on %s.' => 'Has firmado este documento con fecha %s.',
      'Thank you for signing this document. Please check your email to verify your signature and complete the process.' => 'Gracias por firmar este documento. Por favor revisa tu correo electrónico para verificar la firma y completar el proceso.',
      'Last Updated' => 'Última actualización',
      'This document requires a corporate signatory. You must log in to accept this document on behalf of a company you represent.' => 'Este documento requiere un firmante corporativo. Debes iniciar sesión para firmar este documento en nombre de la compañía a la que representas.',
      'Not Signable' => 'No firmable',
      'Signed' => 'Firmado',
      'The signature is now verified.' => 'La firma está ahora verificada.',
      'Notes' => 'Notas',
      'Signature Required to Log In' => 'Firma requerida para usar Phabricator',
      'Legalpad' => 'Legalpad',
      'View/Sign Document' => 'Ver o firmar el documento',
      'Mail receiver is not a LegalpadDocument!' => '¡El receptor del correo no es un LegalpadDocument!',
      'You must choose a user to exempt.' => 'Debes escoger a un usuario a eximir.',
      'You have already signed this document!' => '¡Ya has firmado este documento!',
      'Verify Signature' => 'Verificar firma',
      'Signed Documents' => 'Documentos firmados',
      'This signature has already been verified.' => 'Esta firma ya ha sido verificada.',
      'Please verify this document signature.' => 'Por favor verifica la firma de este documento.',
      'Create a Document' => 'Crear un documento',
      'You can record a signature exemption if a user has signed an equivalent document. Other applications will behave as through the user has signed this document.' => 'Puedes registrar una exención de firma si el usuario ha firmado un documento equivalente. Otras aplicaciones se comportarán como si el usuario hubiese firmado este documento.',
      'Company Name' => 'Nombre de la compañía',
      '%s updated the document text for %s.' => '%s actualizó el texto del documento para %s.',
      '%s added %s required legal document(s) to %s: %s.' => '%s añadió %s documento(s) legal(es) requerido(s) a %s: %s.',
      'Email field is required.' => 'El campo del correo electrónico es obligatorio.',
      'Exempt User' => 'Usuario exento',
      'Company address is required.' => 'Se requiere el nombre de la empresa.',
      'Contact Name' => 'Nombre de contacto',
      'DOCUMENT' => 'DOCUMENTO',
      'Require document signatures: %s.' => 'Requerir la firma del documento: %s.',
      'Updated By' => 'Actualizado por',
      'The email address specified is associated with an account. Please login to that account and sign this document again.' => 'La dirección de correo electrónico especificada está asociada con una cuenta. Por favor inicia sesión en dicha cuenta para firmar este documento nuevamente.',
      '%s updated the document preamble.' => '%s actualizó el preámbulo del documento.',
      'Corporations' => 'Compañías',
      'Verified, Corporate' => 'Verificada, corporativa',
      '%s removed %s required legal document(s): %s.' => '%s retiró %s documento(s) legal(es) requerido(s): %s.',
      '%s set the document text.' => '%s ajustó el texto del documento.',
      'You must check "I agree to the terms laid forth above."' => 'Debes hacer clic en "Estoy de acuerdo con los términos señalados más arriba."',
      '[Legalpad] Signature Verification' => '[Legalpad] Verificación de firma',
      'This page documents the commands you can use to interact with documents in Legalpad.' => 'Esta página recoge los comandos que puedes usar para interactuar con los documentos de Legalpad.',
      'Add Signature Exemption' => 'Añadir exención de firma',
      'No Signature Required' => 'No se requiere ninguna firma',
      'Add Exemption' => 'Añadir exención',
      'The author of a document can always view and edit it.' => 'El autor del documento siempre puede verlo y editarlo.',
      'Can Create Documents' => 'Puede crear documentos',
      '%s removed %s required legal document(s) from %s: %s.' => '%s retiró %s documento(s) legal(es) requerido(s) de %s: %s.',
      'Contributors' => 'Colaboradores',
      'The preamble of the document.' => 'El preámbulo del documento.',
      '%s set the document to require signatures.' => '%s ajustó el documento para requerir firmas.',
      'Individuals' => 'Individuales',
      'New document title.' => 'Nuevo título del documento.',
      'Configure creation and editing documents in Legalpad.' => 'Configurar la creación y edición de documentos en Legalpad.',
      'Signature Verified' => 'Firma verificada',
      'NOTE: You can only see your own signatures and signatures on documents you have permission to edit.' => 'NOTA: solo puedes ver tus propias firmas y las firmas en los documentos que tienes permiso para editar.',
      '%s updated the document preamble for %s.' => '%s actualizó el preámbulo del documento %s.',
      'Legalpad User Guide' => 'Manual del usuario de Legalpad',
      '%s set the document to not require signatures.' => '%s ajustó el documento para no requerir firmas.',
      'You can not sign a document on behalf of a corporation unless you are logged in.' => 'No puedes firmar un documento en nombre de una compañía a menos que hayas iniciado sesión.',
      'Exemption By' => 'Eximido por',
      'Who Should Sign?' => '¿Quién debe firmar?',
      'Name field is required.' => 'El campo del nombre es obligatorio.',
      'You do not need to sign this document. %s added a signature exemption for you on %s.' => 'No tienes que firmar este documento. %s te eximió de ello en %s.',
      'New document preamble.' => 'Nuevo preámbulo del documento.',
      'Find Signatures' => 'Buscar firmas',
      'Search for documents with given creators.' => 'Buscar documentos por creador.',
      'Required %s signature(s): %s.' => 'Se requiere(n) %s firma(s): %s.',
      'Configure Legalpad Forms' => 'Configurar los formularios de Legalpad',
      'The signature verification code is incorrect, or the signature has been invalidated. Make sure you followed the link in the email correctly.' => 'El código de verificación de la firma es incorrecto, o la firma ha sido invalidada. Por favor asegúrate de que seguiste correctamente el enlace proporcionado por correo electrónico.',
      'Agreements and Signatures' => 'Acuerdos y firmas',
      '%s updated the document signature type for %s.' => '%s actualizó el tipo de firma para el documento %s.',
      'Required Signature' => 'Firma requerida',
      'Verify Signature?' => '¿Verificar firma?',
      'signers of legalpad documents' => 'firmantes de documentos de legalpad',
      'Company Address' => 'Dirección de la compañía',
      'CHANGES TO DOCUMENT PREAMBLE' => 'CAMBIOS AL PREÁMBULO DEL DOCUMENTO',
      '**Legalpad** is a simple application for tracking signatures and legal agreements. At the moment, it is primarily intended to help open source projects keep track of Contributor License Agreements.' => '**Legalpad** es una aplicación simple para el seguimiento de firmas y acuerdos legales. Por el momento está concebido para ayudar a los proyectos de código abierto a mantener los acuerdos de licencia y colaboración ("Contributor License Agreements").',
      'Unknown field: %s' => 'Campo desconocido: %s',
      'New document body.' => 'Nuevo cuerpo del documento.',
      'Marks this document as required signing.' => 'Marcar este documento como de firma obligatoria.',
      'Signers' => 'Firmantes',
      'Search for documents with given contributors.' => 'Buscar documentos por colaboradores dados.',
      'Signatures' => 'Firmas',
      'Exemption' => 'Exención',
      'View Signatures' => 'Ver firmas',
      'Signed Older Version' => 'Firmada una versión antigua',
      'CHANGES TO DOCUMENT TEXT' => 'CAMBIOS AL TEXTO DEL DOCUMENTO',
      'Version %d (%s)' => 'Versión %s (%s)',
      'You have not signed this document yet.' => 'Todavía no has firmado este documento.',
      'Require signatures' => 'Requerir firmas',
      'Contact email is required.' => 'Se requiere una dirección de correo electrónico de contacto.',
      'Agree and Sign Document' => 'Consentir y firmar documento',
      'Already Signed' => 'Ya firmado',
      'Verified, Current' => 'Verificada, versión actual',
      'Signing User' => 'Usuario firmante',
      'That user has already signed this document.' => 'Ese usuario ya ha firmado este documento.',
      'New document signature type.' => 'Nuevo tipo de firma del documento.',
      'Sign Document' => 'Firmar documento',
    );
  }

}
