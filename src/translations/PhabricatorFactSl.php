<?php

final class PhabricatorFactSl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sl';
  }

  protected function getTranslations() {
    return array(
      'Dimension' => 'Mera',
      'Processing %s...' => 'Obdelovanje %s ...',
      'Processing cursor \'%s\'.' => 'Kazalec obdelave »%s«.',
      'Failed to load or generate dimension ID ("%s") for dimension key "%s".' => 'Ni bilo mogoče naložiti ali ustvariti ID-ja (»%s«) mere za ključ »%s« mere.',
      'Chart configurations are not mutable. You can not update or overwrite an existing chart configuration.' => 'Konfiguracije grafikonov niso spremenljive. Obstoječe konfiguracije grafikona ne morete posodobiti ali prepisati.',
    );
  }

}
