<?php

final class PhabricatorLegalpadSk
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sk';
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

Táto e-mailová adresa bola použitá na podpísanie dokumentu Legalpad v %s:

  %s

Kliknutím na tento odkaz overte, že vám táto e-mailová adresa patrí, a prijmite dohodu:

  %s

Váš podpis nie je platný, kým nedokončíte tento overovací krok.

Dokument si môžete prezrieť tu:

  %s',
  'All Signatures' => 'Všetky podpisy',
  'Unverified Email' => 'Neoverený e-mail',
  'Create New Document' => 'Vytvoriť nový dokument',
  'Type of signature required' => 'Vyžadovaný typ podpisu',
  'Only administrators may change whether a document requires a signature.' => 'Iba správcovia môžu zmeniť, či dokument vyžaduje podpis.',
  'Signed At' => 'Podpísané dňa',
  'Signature Type' => 'Typ podpisu',
  '%s updated the document signature type.' => '%s aktualizoval typ podpisu dokumentu.',
  '%s set the document %s to require signatures.' => '%s nastavil dokument %s tak, aby vyžadoval podpisy.',
  'I agree to the terms laid forth above.' => 'Súhlasím s vyššie uvedenými podmienkami.',
  'Signature Details' => 'Podrobnosti podpisu',
  'Email Commands: Legalpad Documents' => 'E-mailové príkazy: dokumenty Legalpad',
  '%s added %s required legal document(s): %s.' => array(
    
    array(
      '%s pridal povinný právny dokument: %3$s.',
      '%s pridal povinné právne dokumenty: %3$s.',
    ),
  ),
  'That user does not exist.' => 'Tento používateľ neexistuje.',
  'Search for documents signed by given users.' => 'Vyhľadať dokumenty podpísané zadanými používateľmi.',
  'Company name is required.' => 'Názov spoločnosti je povinný.',
  'Legalpad Document' => 'Dokument Legalpad',
  '%s edited %s required legal document(s), added %s: %s; removed %s: %s.' => '%s upravil povinné právne dokumenty, pridané: %4$s; odstránené: %6$s.',
  'Document Title.' => 'Nadpis dokumentu.',
  'A valid email is required.' => 'Vyžaduje sa platný e-mail.',
  'Only documents with signature type "individual" may require signing to log in.' => 'Prihlásenie môžu vyžadovať podpisom iba dokumenty s typom podpisu „individual“.',
  'Document signers' => 'Podpisujúci dokumentu',
  'Unable to Verify Signature' => 'Podpis sa nepodarilo overiť',
  'Legalpad Document Body' => 'Telo dokumentu Legalpad',
  'Signed By' => 'Podpísal',
  'Read information about legalpad document signatures.' => 'Čítať informácie o podpisoch dokumentov Legalpad.',
  'All Documents' => 'Všetky dokumenty',
  'Get the full content for each document.' => 'Získať úplný obsah každého dokumentu.',
  'Contact Email' => 'Kontaktný e-mail',
  'Document Body' => 'Telo dokumentu',
  'The PHID of the signer' => 'PHID podpisujúceho',
  'Contact name is required.' => 'Meno kontaktnej osoby je povinné.',
  'No signatures match the query.' => 'Dopytu nezodpovedajú žiadne podpisy.',
  'Interacting with Legalpad Documents' => 'Práca s dokumentmi Legalpad',
  '%s updated the document text.' => '%s aktualizoval text dokumentu.',
  'Signed on %s' => 'Podpísané %s',
  '%s renamed this document from %s to %s.' => '%s premenoval tento dokument z %s na %s.',
  'The body of text of the document.' => 'Text tela dokumentu.',
  'Not Signed' => 'Nepodpísané',
  '%s document(s) are already signed: %s.' => array(
    'Už je podpísaný %s dokument: %s.',
    'Už sú podpísané %s dokumenty: %s.',
    'Už je podpísaných %s dokumentov: %s.',
  ),
  'You must choose a company to add an exemption for.' => 'Musíte vybrať spoločnosť, pre ktorú sa má pridať výnimka.',
  '%s set the document %s to not require signatures.' => '%s nastavil dokument %s tak, aby nevyžadoval podpisy.',
  '%s edited %s required legal document(s) for %s, added %s: %s; removed %s: %s.' => '%s upravil povinné právne dokumenty pre %3$s, pridané %5$s; odstránené %7$s.',
  'Email Contains' => 'E-mail obsahuje',
  'Signature Already Verified' => 'Podpis je už overený',
  'You do not have permission to create new documents.' => 'Nemáte oprávnenie vytvárať nové dokumenty.',
  'This user who created this document' => 'Používateľ, ktorý vytvoril tento dokument',
  'This document has an unknown signature type ("%s").' => 'Tento dokument má neznámy typ podpisu („%s“).',
  '[Legalpad]' => '[Legalpad]',
  'The name used by the signer.' => 'Meno, ktoré použil podpisujúci.',
  'Legalpad Documents' => 'Dokumenty Legalpad',
  'Legalpad Signatures' => 'Podpisy Legalpad',
  'You signed this document on %s.' => 'Tento dokument ste podpísali %s.',
  'Create documents and track signatures.' => 'Vytvárajte dokumenty a sledujte podpisy.',
  'Thank you for signing this document. Please check your email to verify your signature and complete the process.' => 'Ďakujeme, že ste podpísali tento dokument. Skontrolujte si e-mail, overte svoj podpis a dokončite tak proces.',
  'Last Updated' => 'Naposledy aktualizované',
  'Read information about legalpad documents.' => 'Čítať informácie o dokumentoch Legalpad.',
  'This document requires a corporate signatory. You must log in to accept this document on behalf of a company you represent.' => 'Tento dokument vyžaduje podpis za spoločnosť. Ak ho chcete prijať v mene spoločnosti, ktorú zastupujete, musíte sa prihlásiť.',
  'Search for documents created after a certain date.' => 'Vyhľadať dokumenty vytvorené po určitom dátume.',
  'Not Signable' => 'Nedá sa podpísať',
  'Signed' => 'Podpísané',
  'The signature is now verified.' => 'Podpis je teraz overený.',
  'Notes' => 'Poznámky',
  'Signature Required to Log In' => 'Na prihlásenie je potrebný podpis',
  'Legalpad' => 'Legalpad',
  'View/Sign Document' => 'Zobraziť/podpísať dokument',
  'Legalpad Signature' => 'Podpis Legalpad',
  'Mail receiver is not a LegalpadDocument!' => 'Príjemca pošty nie je LegalpadDocument!',
  'You must choose a user to exempt.' => 'Musíte vybrať používateľa, ktorému sa udelí výnimka.',
  'You have already signed this document!' => 'Tento dokument ste už podpísali!',
  'Verify Signature' => 'Overiť podpis',
  'Signed Documents' => 'Podpísané dokumenty',
  'This signature has already been verified.' => 'Tento podpis už bol overený.',
  'Please verify this document signature.' => 'Overte, prosím, tento podpis dokumentu.',
  'Create a Document' => 'Vytvoriť dokument',
  'You can record a signature exemption if a user has signed an equivalent document. Other applications will behave as through the user has signed this document.' => 'Ak používateľ podpísal rovnocenný dokument, môžete zaznamenať výnimku z podpisu. Ostatné aplikácie sa budú správať tak, ako keby používateľ tento dokument podpísal.',
  'Company Name' => 'Názov spoločnosti',
  '%s updated the document text for %s.' => '%s aktualizoval text dokumentu %s.',
  '%s added %s required legal document(s) to %s: %s.' => array(
    
    array(
      '%s pridal do %3$s povinný právny dokument: %4$s.',
      '%s pridal do %3$s povinné právne dokumenty: %4$s.',
    ),
  ),
  'Email field is required.' => 'Pole e-mail je povinné.',
  'The email used by the signer.' => 'E-mail, ktorý použil podpisujúci.',
  'Exempt User' => 'Udeliť výnimku používateľovi',
  'Company address is required.' => 'Adresa spoločnosti je povinná.',
  'Contact Name' => 'Meno kontaktnej osoby',
  'DOCUMENT' => 'DOKUMENT',
  'Require document signatures: %s.' => 'Vyžadovať podpisy dokumentov: %s.',
  'Updated By' => 'Aktualizoval',
  'The email address specified is associated with an account. Please login to that account and sign this document again.' => 'Zadaná e-mailová adresa je priradená k účtu. Prihláste sa, prosím, do tohto účtu a podpíšte tento dokument znova.',
  '%s updated the document preamble.' => '%s aktualizoval preambulu dokumentu.',
  'Corporations' => 'Spoločnosti',
  'Verified, Corporate' => 'Overené, za spoločnosť',
  '%s removed %s required legal document(s): %s.' => array(
    
    array(
      '%s odstránil povinný právny dokument: %3$s.',
      '%s odstránil povinné právne dokumenty: %3$s.',
    ),
  ),
  '%s set the document text.' => '%s nastavil text dokumentu.',
  'You must check "I agree to the terms laid forth above."' => 'Musíte zaškrtnúť „Súhlasím s vyššie uvedenými podmienkami.“',
  '[Legalpad] Signature Verification' => '[Legalpad] Overenie podpisu',
  'This page documents the commands you can use to interact with documents in Legalpad.' => 'Táto stránka dokumentuje príkazy, ktoré môžete použiť na prácu s dokumentmi v Legalpade.',
  'Add Signature Exemption' => 'Pridať výnimku z podpisu',
  'No Signature Required' => 'Podpis sa nevyžaduje',
  'Add Exemption' => 'Pridať výnimku',
  'The author of a document can always view and edit it.' => 'Autor dokumentu ho môže vždy zobraziť a upraviť.',
  'Can Create Documents' => 'Môže vytvárať dokumenty',
  '%s removed %s required legal document(s) from %s: %s.' => array(
    
    array(
      '%s odstránil z %3$s povinný právny dokument: %4$s.',
      '%s odstránil z %3$s povinné právne dokumenty: %4$s.',
    ),
  ),
  'Contributors' => 'Prispievatelia',
  'The preamble of the document.' => 'Preambula dokumentu.',
  '%s set the document to require signatures.' => '%s nastavil dokument tak, aby vyžadoval podpisy.',
  'Individuals' => 'Jednotlivci',
  'Whether or not this signature is an exemption' => 'Či je tento podpis výnimkou',
  'Search for signatures created before a certain date.' => 'Vyhľadať podpisy vytvorené pred určitým dátumom.',
  'Search for signatures with a name containing the given string.' => 'Vyhľadať podpisy, ktorých meno obsahuje zadaný reťazec.',
  'The PHID of the document' => 'PHID dokumentu',
  'New document title.' => 'Nový nadpis dokumentu.',
  'Configure creation and editing documents in Legalpad.' => 'Konfigurovať vytváranie a úpravu dokumentov v Legalpade.',
  'Signature Verified' => 'Podpis overený',
  'The number of versions of this document' => 'Počet verzií tohto dokumentu',
  'NOTE: You can only see your own signatures and signatures on documents you have permission to edit.' => 'POZNÁMKA: Vidíte iba svoje vlastné podpisy a podpisy na dokumentoch, ktoré máte oprávnenie upravovať.',
  '%s updated the document preamble for %s.' => '%s aktualizoval preambulu dokumentu %s.',
  'Legalpad User Guide' => 'Používateľská príručka k Legalpadu',
  '%s set the document to not require signatures.' => '%s nastavil dokument tak, aby nevyžadoval podpisy.',
  'You can not sign a document on behalf of a corporation unless you are logged in.' => 'Dokument v mene spoločnosti nemôžete podpísať, pokiaľ nie ste prihlásení.',
  'Exemption By' => 'Výnimku udelil',
  'Who Should Sign?' => 'Kto má podpísať?',
  'Name field is required.' => 'Pole meno je povinné.',
  'You do not need to sign this document. %s added a signature exemption for you on %s.' => 'Tento dokument nemusíte podpisovať. %s vám %s pridal výnimku z podpisu.',
  'New document preamble.' => 'Nová preambula dokumentu.',
  'Find Signatures' => 'Nájsť podpisy',
  'Search for documents with given creators.' => 'Vyhľadať dokumenty so zadanými tvorcami.',
  'Required %s signature(s): %s.' => array(
    'Vyžadovaný podpis: %2$s.',
    'Vyžadované podpisy: %2$s.',
  ),
  'Configure Legalpad Forms' => 'Konfigurovať formuláre Legalpadu',
  'The signature verification code is incorrect, or the signature has been invalidated. Make sure you followed the link in the email correctly.' => 'Overovací kód podpisu je nesprávny alebo bol podpis zneplatnený. Uistite sa, že ste správne použili odkaz z e-mailu.',
  'Search for documents created before a certain date.' => 'Vyhľadať dokumenty vytvorené pred určitým dátumom.',
  'Agreements and Signatures' => 'Dohody a podpisy',
  'Search for signatures on the given documents' => 'Vyhľadať podpisy na zadaných dokumentoch',
  '%s updated the document signature type for %s.' => '%s aktualizoval typ podpisu dokumentu %s.',
  'Required Signature' => 'Vyžadovaný podpis',
  'Verify Signature?' => 'Overiť podpis?',
  'signers of legalpad documents' => 'podpisujúci dokumentov Legalpad',
  'Company Address' => 'Adresa spoločnosti',
  'CHANGES TO DOCUMENT PREAMBLE' => 'ZMENY PREAMBULY DOKUMENTU',
  '**Legalpad** is a simple application for tracking signatures and legal agreements. At the moment, it is primarily intended to help open source projects keep track of Contributor License Agreements.' => '**Legalpad** je jednoduchá aplikácia na sledovanie podpisov a právnych dohôd. Momentálne je určená predovšetkým na to, aby projektom s otvoreným zdrojovým kódom pomáhala sledovať licenčné zmluvy prispievateľov.',
  'Unknown field: %s' => 'Neznáme pole: %s',
  'New document body.' => 'Nové telo dokumentu.',
  'Search for signatures by given users.' => 'Vyhľadať podpisy od zadaných používateľov.',
  'Marks this document as required signing.' => 'Označí tento dokument ako povinný na podpis.',
  'The title of this document' => 'Nadpis tohto dokumentu',
  'Signers' => 'Podpisujúci',
  'Search for documents with given contributors.' => 'Vyhľadať dokumenty so zadanými prispievateľmi.',
  'Signatures' => 'Podpisy',
  'Exemption' => 'Výnimka',
  'View Signatures' => 'Zobraziť podpisy',
  'Signed Older Version' => 'Podpísaná staršia verzia',
  'Search for signatures created after a certain date.' => 'Vyhľadať podpisy vytvorené po určitom dátume.',
  'CHANGES TO DOCUMENT TEXT' => 'ZMENY TEXTU DOKUMENTU',
  'Version %d (%s)' => 'Verzia %d (%s)',
  'Get the signer list for the project.' => 'Získať zoznam podpisujúcich pre projekt.',
  'Whether signatures on this doc are required to use this install' => 'Či sú podpisy tohto dokumentu potrebné na používanie tejto inštalácie',
  'You have not signed this document yet.' => 'Tento dokument ste ešte nepodpísali.',
  'Require signatures' => 'Vyžadovať podpisy',
  'Contact email is required.' => 'Kontaktný e-mail je povinný.',
  'Agree and Sign Document' => 'Súhlasiť a podpísať dokument',
  'Already Signed' => 'Už podpísané',
  'Verified, Current' => 'Overené, aktuálne',
  'Signing User' => 'Podpisujúci používateľ',
  'That user has already signed this document.' => 'Tento používateľ už tento dokument podpísal.',
  'Search for signatures with an email containing the given string.' => 'Vyhľadať podpisy, ktorých e-mail obsahuje zadaný reťazec.',
  'New document signature type.' => 'Nový typ podpisu dokumentu.',
  'Sign Document' => 'Podpísať dokument',
  'The PHID of the user who granted the exemption' => 'PHID používateľa, ktorý udelil výnimku',
);
  }

}
