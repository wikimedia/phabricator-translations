<?php

final class PhabricatorFilesSl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sl';
  }

  protected function getTranslations() {
    return array(
      'Found no template resource (for emblem "%s") with dimensions %dx%d.' => 'Ni najdenega vira predloge (za emblem »%s«) z merami %s × %s.',
      'New alt text.' => 'Novo alternativno besedilo',
      'ERROR' => 'NAPAKA',
      'Preview (220px)' => 'Predogled (220 px)',
      '%s: Would update file dimensions (dry run)' => '%s: Posodobil bi mere slike (suhi zagon)',
      'Alt Text' => 'Alternativno besedilo',
      'Processed %s file(s) with no errors.' => array(
        'Obdelana %s datoteka, brez napak.',
        'Obdelani %s datoteki, brez napak.',
        'Obdelane %s datoteke, brez napak.',
        'Obdelanih %s datotek, brez napak.',
      ),
      'Save Image' => 'Shrani sliko',
      'Refusing to assess image dimensions of chunked file.' => 'Zavrnitev ocene mer slike razkosane datoteke.',
      'Failed to load file.' => 'Nalaganje datoteke ni uspelo.',
      'bar-chart' => 'palični grafikon',
      'Found no background template resource for dimensions %dx%d.' => 'Ni najdenega vira predloge ozadja za mere %s × %s.',
      'This image (with dimensions %spx x %spx) is too large to transform. The image has %s pixels, but transforms are limited to images with %s or fewer pixels.' => 'Ta slika (z merami %s px × %s px) je prevelika za preoblikovanje. Slika ima %s slikovnih pik, vendar so transformacije omejene na slike s %s ali manj slikovnih pik.',
      'info-circle' => 'info-krog',
      'Default Alt Text' => 'Privzeto alternativno besedilo',
      'Custom Alt Text' => 'Alternativno besedilo po meri',
      'View' => 'Ogled',
      'This file is larger than %s, so syntax highlighting was skipped.' => 'Datoteka je večja od %s, zato je bilo označevanje skladnje preskočeno.',
      'View as PDF' => 'Ogled kot PDF',
      'file-text' => 'besedilo datoteke',
      'Dimensions' => 'Mere',
      'OVERWRITE' => 'PREPIŠI',
      'Unable to determine image dimensions with imagesx()/imagesy(): %s' => 'Ni mogoče določiti mer slike z imagesx()/imagesy(): %s',
      'Compose Image' => 'Sestavi sliko',
      'Storage Format' => 'Format shranjevanja',
      '%s: Image dimensions already exist.' => '%s: mere slike že obstajajo.',
      'File Visibility' => 'Vidnost datoteke',
      'Wide Open Sky' => 'Široko odprto nebo',
      'language' => 'jezik',
      'Can not create an image with nonpositive dimensions.' => 'Ni mogoče ustvariti slike z nepozitivnimi merami.',
      'Rebuild image dimension information.' => 'Obnovi informacije o merah slike.',
      'Choose Background Color' => 'Izberite barvo ozadja',
      'Refusing to assess image dimensions of file chunk.' => 'Zavrnitev ocene mer slike kosa datoteke.',
    );
  }

}
