<?php

final class PhabricatorPhrictionSl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sl';
  }

  protected function getTranslations() {
    return array(
      'Last Edited' => 'Zadnje urejanje',
      'Missing Ancestor' => 'Manjkajoči prednik',
      'Overwrite Changes' => 'Prepis sprememb',
      'You can not move this document there, because it would overwrite an existing document which is already at that location. Move or delete the existing document first.' => 'Tega dokumenta ne morete prestaviti tja, ker bi prepisal obstoječi dokument, ki je že na tem mestu. Najprej prestavite ali izbrišite obstoječi dokument.',
      'Content Changes' => 'Spremembe vsebine',
      'More...' => 'Več ...',
      'Content' => 'Vsebina',
      'Version %d' => 'Redakcija %s',
      'Last Author' => 'Zadnji avtor',
      'Another user made changes to this document after you began editing it. Do you want to overwrite their changes? (If you choose to overwrite their changes, you should review the document edit history to see what you overwrote, and then make another edit to merge the changes if necessary.)' => 'Ta dokumente je po tem, ko ste ga začeli urejati, spremenil drug uporabnik. Ali želite prepisati njihove spremembe? (Če se odločite prepisati njihove spremembe, morate pregledati zgodovino urejanja dokumenta, da vidite, kaj ste prepisali, nato pa po potrebi opravite novo urejanje, da združite spremembe.)',
      'Document History' => 'Zgodovina dokumenta',
      'Welcome' => 'Pozdravljeni',
      'Edits' => 'Urejanja',
      'Already Published' => 'Že objavljeno',
      'Page Not Found' => 'Stran ni bila najdena',
    );
  }

}
