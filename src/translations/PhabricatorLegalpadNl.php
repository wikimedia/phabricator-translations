<?php

final class PhabricatorLegalpadNl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'nl';
  }

  protected function getTranslations() {
    return array(
  '%s:

This email address was used to sign a Legalpad document in %s:

  %s

Please verify you own this email address and accept the agreement by clicking this link:

  %s

Your signature is not valid until you complete this verification step.

You can review the document here:

  %s
' => '%s:

Dit e-mailadres is gebruikt om een Legalpad-document te ondertekenen in %s:

  %s

Verifieer dat u eigenaar bent van dit e-mailadres en accepteer de overeenkomst door op deze koppeling te klikken:

  %s

Uw handtekening is niet geldig totdat u deze verificatiestap hebt voltooid.

U kunt het document hier bekijken:

  %s',
  'All Signatures' => 'Alle handtekeningen',
  'Unverified Email' => 'Niet-geverifieerd e-mailadres',
  'Create New Document' => 'Nieuw document aanmaken',
  'Type of signature required' => 'Vereist type handtekening',
  'Only administrators may change whether a document requires a signature.' => 'Alleen beheerders mogen wijzigen of een document een handtekening vereist.',
  'Signed At' => 'Ondertekend op',
  'Signature Type' => 'Handtekeningtype',
  '%s updated the document signature type.' => '%s heeft het handtekeningtype van het document bijgewerkt.',
  '%s set the document %s to require signatures.' => '%s heeft ingesteld dat document %s handtekeningen vereist.',
  'I agree to the terms laid forth above.' => 'Ik ga akkoord met de bovenstaande voorwaarden.',
  'Signature Details' => 'Handtekeningdetails',
  'Email Commands: Legalpad Documents' => 'E-mailopdrachten: Legalpad-documenten',
  '%s added %s required legal document(s): %s.' => array(
    
    array(
      '%s heeft vereist juridisch document toegevoegd: %3$s.',
      '%s heeft vereiste juridische documenten toegevoegd: %3$s.',
    ),
  ),
  'That user does not exist.' => 'Die gebruiker bestaat niet.',
  'Search for documents signed by given users.' => 'Zoeken naar documenten die door bepaalde gebruikers zijn ondertekend.',
  'Company name is required.' => 'Bedrijfsnaam is vereist.',
  'Legalpad Document' => 'Legalpad-document',
  '%s edited %s required legal document(s), added %s: %s; removed %s: %s.' => '%s heeft vereiste juridische documenten bewerkt; toegevoegd: %4$s; verwijderd: %6$s.',
  'Document Title.' => 'Documenttitel.',
  'A valid email is required.' => 'Een geldig e-mailadres is vereist.',
  'Only documents with signature type "individual" may require signing to log in.' => 'Alleen documenten met handtekeningtype "individueel" kunnen ondertekening vereisen om aan te melden.',
  'Document signers' => 'Documentondertekenaars',
  'Unable to Verify Signature' => 'Kan handtekening niet verifiëren',
  'Legalpad Document Body' => 'Legalpad-documenttekst',
  'Signed By' => 'Ondertekend door',
  'Read information about legalpad document signatures.' => 'Informatie over Legalpad-documenthandtekeningen lezen.',
  'All Documents' => 'Alle documenten',
  'Get the full content for each document.' => 'De volledige inhoud van elk document ophalen.',
  'Contact Email' => 'Contact-e-mailadres',
  'Document Body' => 'Documenttekst',
  'The PHID of the signer' => 'De PHID van de ondertekenaar',
  'Contact name is required.' => 'Contactnaam is vereist.',
  'No signatures match the query.' => 'Er zijn geen handtekeningen die overeen komen met de zoekopdracht.',
  'Interacting with Legalpad Documents' => 'Werken met Legalpad-documenten',
  '%s updated the document text.' => '%s heeft de documenttekst bijgewerkt.',
  'Signed on %s' => 'Ondertekend op %s',
  '%s renamed this document from %s to %s.' => '%s heeft dit document hernoemd van %s naar %s.',
  'The body of text of the document.' => 'De tekst van het document.',
  'Not Signed' => 'Niet ondertekend',
  '%s document(s) are already signed: %s.' => array(
    '%s document is al ondertekend: %s.',
    '%s documenten zijn al ondertekend: %s.',
  ),
  'You must choose a company to add an exemption for.' => 'U moet een bedrijf kiezen om een vrijstelling voor toe te voegen.',
  '%s set the document %s to not require signatures.' => '%s heeft ingesteld dat document %s geen handtekeningen vereist.',
  '%s edited %s required legal document(s) for %s, added %s: %s; removed %s: %s.' => '%s heeft vereiste juridische documenten voor %3$s bewerkt; toegevoegd: %5$s; verwijderd: %7$s.',
  'Email Contains' => 'E-mail bevat',
  'Signature Already Verified' => 'Handtekening al geverifieerd',
  'You do not have permission to create new documents.' => 'U hebt geen toestemming om nieuwe documenten aan te maken.',
  'This user who created this document' => 'De gebruiker die dit document heeft aangemaakt',
  'This document has an unknown signature type ("%s").' => 'Dit document heeft een onbekend handtekeningtype ("%s").',
  '[Legalpad]' => '[Legalpad]',
  'The name used by the signer.' => 'De naam die door de ondertekenaar is gebruikt.',
  'Legalpad Documents' => 'Legalpad-documenten',
  'Legalpad Signatures' => 'Legalpad-handtekeningen',
  'You signed this document on %s.' => 'U hebt dit document ondertekend op %s.',
  'Create documents and track signatures.' => 'Documenten aanmaken en handtekeningen bijhouden.',
  'Thank you for signing this document. Please check your email to verify your signature and complete the process.' => 'Bedankt voor het ondertekenen van dit document. Controleer uw e-mail om uw handtekening te verifiëren en het proces te voltooien.',
  'Last Updated' => 'Laatst bijgewerkt',
  'Read information about legalpad documents.' => 'Informatie over Legalpad-documenten lezen.',
  'This document requires a corporate signatory. You must log in to accept this document on behalf of a company you represent.' => 'Dit document vereist een zakelijke ondertekenaar. U moet aanmelden om dit document namens een bedrijf dat u vertegenwoordigt te accepteren.',
  'Search for documents created after a certain date.' => 'Zoeken naar documenten die na een bepaalde datum zijn aangemaakt.',
  'Not Signable' => 'Niet ondertekbaar',
  'Signed' => 'Ondertekend',
  'The signature is now verified.' => 'De handtekening is nu geverifieerd.',
  'Notes' => 'Opmerkingen',
  'Signature Required to Log In' => 'Handtekening vereist om aan te melden',
  'Legalpad' => 'Legalpad',
  'View/Sign Document' => 'Document bekijken/ondertekenen',
  'Legalpad Signature' => 'Legalpad-handtekening',
  'Mail receiver is not a LegalpadDocument!' => 'E-mailontvanger is geen LegalpadDocument!',
  'You must choose a user to exempt.' => 'U moet een gebruiker kiezen om vrij te stellen.',
  'You have already signed this document!' => 'U hebt dit document al ondertekend!',
  'Verify Signature' => 'Handtekening verifiëren',
  'Signed Documents' => 'Ondertekende documenten',
  'This signature has already been verified.' => 'Deze handtekening is al geverifieerd.',
  'Please verify this document signature.' => 'Verifieer deze documenthandtekening.',
  'Create a Document' => 'Een document aanmaken',
  'You can record a signature exemption if a user has signed an equivalent document. Other applications will behave as through the user has signed this document.' => 'U kunt een handtekeningvrijstelling vastleggen als een gebruiker een gelijkwaardig document heeft ondertekend. Andere toepassingen gedragen zich alsof de gebruiker dit document heeft ondertekend.',
  'Company Name' => 'Bedrijfsnaam',
  '%s updated the document text for %s.' => '%s heeft de documenttekst voor %s bijgewerkt.',
  '%s added %s required legal document(s) to %s: %s.' => array(
    
    array(
      '%s heeft een vereist juridisch documenttoegevoegd aan %3$s: %4$s.',
      '%s heeft vereiste juridische documententoegevoegd aan %3$s: %4$s.',
    ),
  ),
  'Email field is required.' => 'E-mailveld is vereist.',
  'The email used by the signer.' => 'Het e-mailadres dat door de ondertekenaar is gebruikt.',
  'Exempt User' => 'Gebruiker vrijstellen',
  'Company address is required.' => 'Bedrijfsadres is vereist.',
  'Contact Name' => 'Contactnaam',
  'DOCUMENT' => 'DOCUMENT',
  'Require document signatures: %s.' => 'Documenthandtekeningen vereisen: %s.',
  'Updated By' => 'Bijgewerkt door',
  'The email address specified is associated with an account. Please login to that account and sign this document again.' => 'Het opgegeven e-mailadres is gekoppeld aan een account. Meld u aan bij dat account en onderteken dit document opnieuw.',
  '%s updated the document preamble.' => '%s heeft de documentpreambule bijgewerkt.',
  'Corporations' => 'Bedrijven',
  'Verified, Corporate' => 'Geverifieerd, zakelijk',
  '%s removed %s required legal document(s): %s.' => array(
    
    array(
      '%s heeft een vereist juridisch document verwijderd: %3$s.',
      '%s heeft vereiste juridische documenten verwijderd: %3$s.',
    ),
  ),
  '%s set the document text.' => '%s heeft de documenttekst ingesteld.',
  'You must check "I agree to the terms laid forth above."' => 'U moet "Ik ga akkoord met de bovenstaande voorwaarden" aanvinken.',
  '[Legalpad] Signature Verification' => '[Legalpad] Handtekeningverificatie',
  'This page documents the commands you can use to interact with documents in Legalpad.' => 'Deze pagina documenteert de opdrachten die u kunt gebruiken om met documenten in Legalpad te werken.',
  'Add Signature Exemption' => 'Handtekeningvrijstelling toevoegen',
  'No Signature Required' => 'Geen handtekening vereist',
  'Add Exemption' => 'Vrijstelling toevoegen',
  'The author of a document can always view and edit it.' => 'De auteur van een document kan het altijd bekijken en bewerken.',
  'Can Create Documents' => 'Kan documenten aanmaken',
  '%s removed %s required legal document(s) from %s: %s.' => array(
    
    array(
      '%s heeft een vereist juridisch document verwijderd van %3$s: %4$s.',
      '%s heeft vereiste juridische documenten verwijderd van %3$s: %4$s.',
    ),
  ),
  'Contributors' => 'Bijdragers',
  'The preamble of the document.' => 'De preambule van het document.',
  '%s set the document to require signatures.' => '%s heeft ingesteld dat het document handtekeningen vereist.',
  'Individuals' => 'Individuen',
  'Whether or not this signature is an exemption' => 'Of deze handtekening een vrijstelling is of niet',
  'Search for signatures created before a certain date.' => 'Zoeken naar handtekeningen die vóór een bepaalde datum zijn aangemaakt.',
  'Search for signatures with a name containing the given string.' => 'Zoeken naar handtekeningen met een naam die de opgegeven tekst bevat.',
  'The PHID of the document' => 'De PHID van het document',
  'New document title.' => 'Nieuwe documenttitel.',
  'Configure creation and editing documents in Legalpad.' => 'Aanmaken en bewerken van documenten in Legalpad configureren.',
  'Signature Verified' => 'Handtekening geverifieerd',
  'The number of versions of this document' => 'Het aantal versies van dit document',
  'NOTE: You can only see your own signatures and signatures on documents you have permission to edit.' => 'OPMERKING: U kunt alleen uw eigen handtekeningen zien en handtekeningen op documenten die u mag bewerken.',
  '%s updated the document preamble for %s.' => '%s heeft de documentpreambule voor %s bijgewerkt.',
  'Legalpad User Guide' => 'Legalpad-gebruikershandleiding',
  '%s set the document to not require signatures.' => '%s heeft ingesteld dat het document geen handtekeningen vereist.',
  'You can not sign a document on behalf of a corporation unless you are logged in.' => 'U kunt een document niet namens een bedrijf ondertekenen tenzij u bent aangemeld.',
  'Exemption By' => 'Vrijstelling door',
  'Who Should Sign?' => 'Wie moet ondertekenen?',
  'Name field is required.' => 'Naamveld is vereist.',
  'You do not need to sign this document. %s added a signature exemption for you on %s.' => 'U hoeft dit document niet te ondertekenen. %s heeft op %s een handtekeningvrijstelling voor u toegevoegd.',
  'New document preamble.' => 'Nieuwe documentpreambule.',
  'Find Signatures' => 'Handtekeningen zoeken',
  'Search for documents with given creators.' => 'Zoeken naar documenten met bepaalde makers.',
  'Required %s signature(s): %s.' => array(
    '%s handtekening vereist: %s.',
    '%s handtekeningen vereist: %s.',
  ),
  'Configure Legalpad Forms' => 'Legalpad-formulieren configureren',
  'The signature verification code is incorrect, or the signature has been invalidated. Make sure you followed the link in the email correctly.' => 'De handtekeningverificatiecode is incorrect, of de handtekening is ongeldig gemaakt. Controleer of u de koppeling in de e-mail correct hebt gevolgd.',
  'Search for documents created before a certain date.' => 'Zoeken naar documenten die vóór een bepaalde datum zijn aangemaakt.',
  'Agreements and Signatures' => 'Overeenkomsten en handtekeningen',
  'Search for signatures on the given documents' => 'Zoeken naar handtekeningen op de opgegeven documenten',
  '%s updated the document signature type for %s.' => '%s heeft het handtekeningtype van het document voor %s bijgewerkt.',
  'Required Signature' => 'Vereiste handtekening',
  'Verify Signature?' => 'Handtekening verifiëren?',
  'signers of legalpad documents' => 'ondertekenaars van Legalpad-documenten',
  'Company Address' => 'Bedrijfsadres',
  'CHANGES TO DOCUMENT PREAMBLE' => 'WIJZIGINGEN IN DOCUMENTPREAMBULE',
  '**Legalpad** is a simple application for tracking signatures and legal agreements. At the moment, it is primarily intended to help open source projects keep track of Contributor License Agreements.' => '**Legalpad** is een eenvoudige toepassing voor het bijhouden van handtekeningen en juridische overeenkomsten. Op dit moment is het voornamelijk bedoeld om opensourceprojecten te helpen bij het bijhouden van Contributor License Agreements.',
  'Unknown field: %s' => 'Onbekend veld: %s',
  'New document body.' => 'Nieuwe documenttekst.',
  'Search for signatures by given users.' => 'Zoeken naar handtekeningen van bepaalde gebruikers.',
  'Marks this document as required signing.' => 'Markeert dit document als verplicht te ondertekenen.',
  'The title of this document' => 'De titel van dit document',
  'Signers' => 'Ondertekenaars',
  'Search for documents with given contributors.' => 'Zoeken naar documenten met bepaalde bijdragers.',
  'Signatures' => 'Handtekeningen',
  'Exemption' => 'Vrijstelling',
  'View Signatures' => 'Handtekeningen bekijken',
  'Signed Older Version' => 'Oudere versie ondertekend',
  'Search for signatures created after a certain date.' => 'Zoeken naar handtekeningen die na een bepaalde datum zijn aangemaakt.',
  'CHANGES TO DOCUMENT TEXT' => 'WIJZIGINGEN IN DOCUMENTTEKST',
  'Version %d (%s)' => 'Versie %d (%s)',
  'Get the signer list for the project.' => 'De lijst met ondertekenaars voor het project ophalen.',
  'Whether signatures on this doc are required to use this install' => 'Of handtekeningen op dit document vereist zijn om deze installatie te gebruiken',
  'You have not signed this document yet.' => 'U hebt dit document nog niet ondertekend.',
  'Require signatures' => 'Handtekeningen vereisen',
  'Contact email is required.' => 'Contact-e-mailadres is vereist.',
  'Agree and Sign Document' => 'Akkoord gaan en document ondertekenen',
  'Already Signed' => 'Al ondertekend',
  'Verified, Current' => 'Geverifieerd, actueel',
  'Signing User' => 'Ondertekende gebruiker',
  'That user has already signed this document.' => 'Die gebruiker heeft dit document al ondertekend.',
  'Search for signatures with an email containing the given string.' => 'Zoeken naar handtekeningen met een e-mailadres dat de opgegeven tekst bevat.',
  'New document signature type.' => 'Nieuw documenthandtekeningtype.',
  'Sign Document' => 'Document ondertekenen',
  'The PHID of the user who granted the exemption' => 'De PHID van de gebruiker die de vrijstelling heeft verleend',
);
  }

}
