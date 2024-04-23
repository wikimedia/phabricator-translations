<?php

final class PhabricatorSystemDiq
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'diq';
  }

  protected function getTranslations() {
    return array(
      'Panic!' => 'Panik!',
      'No Writable Database' => 'Nusiyaye database çıniyo',
      'Destroying %s **%s**...
    ' => '%s **%s** kenêno vıni ...',
      'Severed From Master' => 'Wıstay ra bıriyayo',
      'Engine: Destruction' => 'Motor: İmha',
      '%d / hour' => '%s / seate',
      'System' => 'Sistem',
      '%d / second' => '%s / saniye',
    );
  }

}
