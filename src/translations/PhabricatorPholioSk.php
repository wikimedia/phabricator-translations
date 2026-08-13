<?php

final class PhabricatorPholioSk
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sk';
  }

  protected function getTranslations() {
    return array(
  'This mock will be closed.' => 'Táto maketa bude zavretá.',
  'This image will be removed from the mock.' => 'Tento obrázok bude z makety odstránený.',
  '%s replaced %s with %s.' => '%s nahradil %s obrázkom %s.',
  'Edit Mock: %s' => 'Upraviť maketu: %s',
  'Mock images must have a title.' => 'Obrázky makety musia mať nadpis.',
  'View Mock' => 'Zobraziť maketu',
  'Review Mocks and Design' => 'Posudzujte makety a dizajn',
  '%s added %d image(s): %s.' => array(
    
    array(
      '%s pridal obrázok: %3$s.',
      '%s pridal obrázky: %3$s.',
    ),
  ),
  'Close Mock' => 'Zavrieť maketu',
  '%s closed mock %s.' => '%s zavrel maketu %s.',
  'A mock\'s status changes.' => 'Zmení sa stav makety.',
  'Open Mocks' => 'Otvorené makety',
  'No image attached!' => 'Nie je priložený žiadny obrázok!',
  '%s closed this mock.' => '%s zavrel túto maketu.',
  '%s removed %s task(s) for %s: %s.' => array(
    
    array(
      '%s odstránil úlohu pre %3$s: %4$s',
      '%s odstránil úlohy pre %3$s: %4$s',
    ),
  ),
  '%s created this mock.' => '%s vytvoril túto maketu.',
  'Pholio Mocks' => 'Makety Pholio',
  '%s removed %d image(s): %s.' => array(
    
    array(
      '%s odstránil obrázok: %3$s.',
      '%s odstránil obrázky: %3$s.',
    ),
  ),
  'Mock image titles must not be longer than %s character(s).' => array(
    'Nadpisy obrázkov makety nesmú byť dlhšie ako %s znak.',
    'Nadpisy obrázkov makety nesmú byť dlhšie ako %s znaky.',
    'Nadpisy obrázkov makety nesmú byť dlhšie ako %s znakov.',
  ),
  '%s edited task(s) for %s, added %s: %s; removed %s: %s.' => '%s upravil úlohy pre %s: pridané: %4$s; odstránené: %6$s.',
  'Undo' => 'Späť',
  'React to mocks being created or updated.' => 'Reagovať na vytvorenie alebo aktualizáciu makiet.',
  'The author of a mock can always view and edit it.' => 'Autor makety ju môže vždy zobraziť a upraviť.',
  'Image ("%s") does not specify which image it replaces.' => 'Obrázok („%s“) neurčuje, ktorý obrázok nahrádza.',
  'Upload sets of images for review with revision history and inline comments.' => 'Nahrávajte sady obrázkov na posúdenie s históriou revízií a vloženými komentármi.',
  'Pholio' => 'Pholio',
  'Image ("%s") belongs to the wrong object ("%s", expected "%s").' => 'Obrázok („%s“) patrí k nesprávnemu objektu („%s“, očakávalo sa „%s“).',
  '%s updated the mock\'s description.' => '%s aktualizoval popis makety.',
  '%s updated image descriptions of %s.' => '%s aktualizoval popisy obrázkov makety %s.',
  'File is not viewable.' => 'Súbor sa nedá zobraziť.',
  'Edit Inline Comment' => 'Upraviť vložený komentár',
  '%s added an inline comment to %s.' => '%s pridal vložený komentár k %s.',
  'You can not query for inline comments without also querying for images.' => 'Nie je možné dopytovať vložené komentáre bez toho, aby ste dopytovali aj obrázky.',
  'Someone comments on a mock.' => 'Niekto okomentuje maketu.',
  'Uploading Image...' => 'Obrázok sa nahráva...',
  'History Beckons' => 'História volá',
  'Mock Fields' => 'Polia makety',
  'Pholio Mock' => 'Maketa Pholio',
  'Open Pholio Mock' => 'Otvoriť maketu Pholio',
  'Create Mock' => 'Vytvoriť maketu',
  'All Mocks' => 'Všetky makety',
  'Click here, or drag and drop images to add them to the mock.' => 'Kliknite sem alebo presuňte obrázky myšou, aby ste ich pridali do makety.',
  'Interacting with Pholio Mocks' => 'Práca s maketami Pholio',
  'Upload Complete...' => 'Nahrávanie dokončené...',
  'Things before they were cool.' => 'Veci ešte predtým, než boli cool.',
  'Current Revision' => 'Aktuálna revízia',
  '[Pholio]' => '[Pholio]',
  '%s opened mock %s.' => '%s otvoril maketu %s.',
  'Mock Description' => 'Popis makety',
  '%s edited task(s), added %s: %s; removed %s: %s.' => '%s upravil úlohy, pridané: %3$s; odstránené: $5$s',
  '%s updated an image\'s (%s) description.' => '%s aktualizoval popis obrázka (%s).',
  'Open Mock' => 'Otvoriť maketu',
  'Replaced image ("%s") belongs to the wrong mock ("%s", expected "%s").' => 'Nahradený obrázok („%s“) patrí k nesprávnej makete („%s“, očakávalo sa „%s“).',
  'Other mock activity not listed above occurs.' => 'Nastane iná aktivita makety, ktorá nie je uvedená vyššie.',
  'MOCK DETAIL' => 'PODROBNOSTI MAKETY',
  '%s opened this mock.' => '%s otvoril túto maketu.',
  'Mock History' => 'História makety',
  'Email Commands: Mocks' => 'E-mailové príkazy: makety',
  'No image exists with PHID "%s".' => 'Neexistuje žiadny obrázok s PHID „%s“.',
  '%s renamed an image (%s) from %s to %s.' => '%s premenoval obrázok (%s) z %s na %s.',
  '%s updated an image\'s (%s) sequence.' => '%s aktualizoval poradie obrázka (%s).',
  '%s updated image sequence of %s.' => '%s aktualizoval poradie obrázkov makety %s.',
  '%s added inline comment(s).' => '%s pridal vložené komentáre.',
  'Unknown (ID %d)' => 'Neznáme (ID %d)',
  'Edit Mock' => 'Upraviť maketu',
  'By %s on %s' => 'Od %s dňa %s',
  'Mocks must have a name.' => 'Makety musia mať názov.',
  'Image "%s":' => 'Obrázok „%s“:',
  'Close Pholio Mock' => 'Zavrieť maketu Pholio',
  '%s updated images of %s.' => '%s aktualizoval obrázky makety %s.',
  '%s added %s task(s) for %s: %s.' => array(
    
    array(
      '%s pridal úlohu pre %3$s: %4$s',
      '%s pridal úlohy pre %3$s: %4$s',
    ),
  ),
  'You must add at least one image to the mock.' => 'Do makety musíte pridať aspoň jeden obrázok.',
  'This page documents the commands you can use to interact with mocks in Pholio.' => 'Táto stránka dokumentuje príkazy, ktoré môžete použiť na prácu s maketami v Pholiu.',
  'Unable to load replacement image ("%s"): %s' => 'Nepodarilo sa načítať náhradný obrázok („%s“): %s',
  '%s renamed this mock from %s to %s.' => '%s premenoval túto maketu z %s na %s.',
  'Comment cannot be empty.' => 'Komentár nemôže byť prázdny.',
  'Test rules which run when a mock is created or updated.' => 'Otestovať pravidlá, ktoré sa spustia pri vytvorení alebo aktualizácii makety.',
  'Inline Comment' => 'Vložený komentár',
  'Mock names must not be longer than %s character(s).' => array(
    'Názvy makiet nesmú byť dlhšie ako %s znak.',
    'Názvy makiet nesmú byť dlhšie ako %s znaky.',
    'Názvy makiet nesmú byť dlhšie ako %s znakov.',
  ),
  '%s updated the image names of %s.' => '%s aktualizoval názvy obrázkov makety %s.',
  'Unable to load replaced image ("%s"): %s' => 'Nepodarilo sa načítať nahradený obrázok („%s“): %s',
  'This mock will become open again.' => 'Táto maketa bude opäť otvorená.',
  'Create a Mock' => 'Vytvoriť maketu',
  '%s edited image(s), added %d: %s; removed %d: %s.' => '%s upravil obrázky, pridané: %3$s; odstránené: %5$s',
  'Mock images or descriptions change.' => 'Zmenia sa obrázky alebo popisy makety.',
);
  }

}
