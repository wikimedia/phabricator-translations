<?php

final class PhabricatorDifferentialSl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sl';
  }

  protected function getTranslations() {
    return array(
      'Show File Contents' => 'Prikažine vsebino datoteke',
      'You can not commandeer this revision because it has already been closed. You can only commandeer open or abandoned revisions.' => 'Te redakcije si ne morete prisvojiti, ker je že zaprta. Prisvojite si lahko samo odprte ali opuščene redakcije.',
      'Invalid revision ID "%s".' => 'Neveljaven ID redakcije »%s«.',
      'This file has %d collapsed inline comment(s).' => 'Ta datoteka ima %s strnjen(ih) medbesedilni(h) komentar(jev)',
      'Abandon a revision.' => 'Opuščena revizija.',
      'Added Reviewers' => 'Dodani pregledovalci',
      'Accepted Earlier' => 'Sprejeto prej',
      'Merged Revisions' => 'Združene redakcije',
      'Fix build failures and update the revision.' => 'Odpravi napake pri gradnji in posodobi redakcijo.',
      'This image was deleted.' => 'Ta slika je bila izbrisana.',
      'Jump to previous inline comment, including collapsed comments.' => 'Skoči na prejšnji medbesedilni komentar, vključno s strnjenimi komentarji.',
      'Planned Changes To' => 'Načrtovane spremembe v',
      'This directory was added.' => 'Ta imenik je bil dodan.',
      'Planned Changes' => 'Načrtovane spremembe',
      'This revision has already been abandoned.' => 'Ta redakcija je že bila opuščena.',
      'Other Revisions' => 'Druge redakcije',
      'This symlink was added.' => 'Ta simbolzna povezava je bila dodana.',
      'Revision Contents' => 'Vsebina redakcije',
      '%s abandoned this revision.' => '%s je opustil_a to redakcijo.',
      'Load Changes' => 'Naloži spremembe',
      'Abandon Revision' => 'Opuščena revizija',
      'No revisions are ready to land.' => 'Za uveljavitev ni pripravljena nobena redakcija.',
      'This file is larger than %s, so syntax highlighting is disabled by default.' => 'Datoteka je večja od %s, zato je označevanje skladnje po privzetem onemogočeno.',
      'Accepted Prior Diff' => 'Sprejeta predhodna razlika',
      'Requested Review' => 'Zahtevani pregled',
      'Lists associated JIRA issues.' => 'Navede povezane težave JIRA.',
      'Close a Differential revision.' => 'Zapri diferencialno redakcijo.',
      'Image Dimensions' => 'Mere slike',
      'Abandoned Revisions' => 'Opuščene redakcije',
      'Hide "Done" Inlines' => 'Skrij vrstice »Opravljeno«.',
      'You can not abandon this revision because you are not the author. You can only abandon revisions you own. You can change this behavior by adjusting the "%s" setting in Config.' => 'Te revizije ne morete opustiti, ker niste avtor. Opustite lahko samo revizije, ki so v vaši lasti. To vedenje lahko spremenite tako, da prilagodite nastavitev »%s« v Config.',
      'Contents Modified' => 'Vsebina spremenjena',
      'You can not abandon this revision because it has already been closed. Only open revisions can be abandoned.' => 'Te revizije ne morete opustiti, ker je že zaprta. Opustiti je mogoče samo odprte revizije.',
      'Jump to next inline comment, including collapsed comments.' => 'Skoči na naslednji medbesedilni komentar, vključno s strnjenimi komentarji.',
      'Hide Collapsed Inlines' => 'Skrij strnjene vključitve',
      'You can not reclaim this revision because his revision is not abandoned.' => 'Te redakcije ne morete znova pridobiti, ker ni opuščena.',
      'This revision will be abandoned and closed.' => 'Ta redakcija bo opuščena in zaprta.',
      '%s published %s for review.' => '%s je objavil_a %s za pregled.',
      '%s abandoned %s.' => '%s je opustil_a %s.',
      'Must Review' => 'Potrebuje pregled',
      'New Changes Shown' => 'Prikazane nove spremembe',
      'Requested A Review Of' => 'Zahtevan pregled',
      '%s Review Request' => '%s zahtevek za pregled',
      '%s requested review of %s.' => '%s je zahteval_a pregled %s.',
      'Begin Review Now' => 'Začnite pregled zdaj',
      'Commit Close Explanation' => 'Objavi pojasnilo zaprtja',
      'Requested Changes' => 'Zahtevane spremembe',
      'Pre-Commit Review' => 'Pregled pred potrditvijo',
      'Left' => 'Levo',
      'This large diff affects %s files. Files without inline comments have been collapsed.' => 'Ta obsežna razlika vpliva na %s datotek. Datoteke brez znotrajvrstičnih komentarjev so bile strnjene.',
      'Revision was not found.' => 'Redakcija ni bila najdena.',
      'Allows any user to abandon revisions.' => 'Omogoča vsakemu uporabniku, da opusti revizije.',
      'Lint Errors' => 'Napake analize Lint',
      'Table of Contents' => 'Kazalo vsebine',
      'Tree' => 'Drevo',
      'Should "Accepted" revisions remain "Accepted" after updates?' => 'Ali naj »Sprejete« redakcije po posodobitvah ostanejo »Sprejete«?',
      'Invalid or missing field "%s": %s' => 'Neveljavno ali manjkajoče polje »%s«: %s',
      'Configure Differential code review.' => 'Konfiguriranje pregleda kode Differential.',
      'Show Raw File (Left)' => 'Pokaži neobdelano datoteko (levo)',
      'New revision title.' => 'Novi naslov redakcije.',
      'Close Revision' => 'Zapri redakcijo',
      'Request Review' => 'Zahtevaj pregled',
      'File Mode' => 'Način datoteke',
      'React to new diffs being uploaded, before writes occur.
    These rules can reject diffs before they are written to permanent storage, to prevent users from accidentally uploading private keys or other sensitive information.' => 'Reagiranje na nove razlike, ki se nalagajo, preden pride do zapisa.
    Ta pravila lahko zavrnejo razlike, preden se zapišejo v trajno shrambo, da uporabnikom preprečijo nenamerno nalaganje zasebnih ključev ali drugih občutljivih podatkov.',
      'Select a blocking reviewer.' => 'Izberite blokirajočega pregledovalca.',
      'Editing Comment' => 'Uredi komentar',
      'Review Actions' => 'Pregled dejanj',
      'Request Changes' => 'Zahtevaj spremembe',
      'Treat Accepted Revisions as "Open"' => 'Obravnavaj sprejete redakcije kot »Odprte«',
      'You can not reclaim this revision because it has not been abandoned. Only abandoned revisions can be reclaimed.' => 'Te redakcije ne morete znova zahtevati, ker ni bila opuščena. Znova lahko zahtevate samo opuščene redakcije.',
      'This file was added.' => 'Ta datoteka je bila dodana.',
      'Waiting on Review' => 'Čaka na pregled',
      'This submodule was added.' => 'Ta podmodul je bil dodan.',
      'Plan Changes' => 'Načrtovanje sprememb',
      'Ready to Review' => 'Pripravljeno za pregled',
      'Blocking Review' => 'Pregled blokiranja',
      '%s is now accepted and ready to land.' => '%s je zdaj sprejeta in pripravljena za uveljavitev.',
      'If you set this to true, any user can abandon any revision. If false, only the submitter can abandon a revision.' => 'Če to nastavite na »true«, lahko vsak uporabnik opusti katero koli revizijo. Če je »false«, lahko revizijo opusti le predlagatelj.',
      'Lists associated tasks.' => 'Navede povezana opravila.',
      'Diff not found.' => 'Razlika ni bila najdena.',
      'Keyboard Reference' => 'Tipkovnična referenca',
      'Diff was not found.' => 'Razlike ni bilo mogoče najti',
      'Requested Changes To' => 'Zahtevane spremembe v',
      'Revision title' => 'Naslov redakcije',
      'Needs Review' => 'Potrebuje pregled',
      'Invalid changeset ID "%s"!' => 'Neveljaven ID nabora sprememb »%s«!',
      'Review Requested' => 'Pregled je zahtevan',
      'List of file regexps that should be treated as if they are generated by an automatic process, and thus be hidden by default in Differential.
    NOTE: This property is cached, so you will need to purge the cache after making changes if you want the new configuration to affect existing revisions. For instructions, see **[[ %s | Managing Caches ]]** in the documentation.' => 'Seznam regularnih izrazov datoteke, ki jih je treba obravnavati, kot da so ustvarjeni z avtomatiziranim postopkom, in zato skriti v Differential.
    OPOMBA: Ta lastnost se predpomni, zato boste morali po opravljenih spremembah počistiti predpomnilnik, če želite, da nova konfiguracija vpliva na obstoječe redakcije. Za navodila glejte **[[ %s | Managing Caches ]]** v dokumentaciji.',
      'The revision title.' => 'Naslov redakcije.',
      'Accepted (by %s)' => 'Sprejeto (od %s)',
    );
  }

}
