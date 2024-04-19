<?php

final class PhabricatorPhameSms
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sms';
  }

  protected function getTranslations() {
    return array(
      'You do not have permission to create a blog.' => 'Tuʹst ij leäkku vuõiggâdvuõtt bloog raajjâd.',
      'Archive' => 'Arkiiv',
      '404 Not Found' => '404 Ij käunnʼjam',
      'About %s' => 'Lââʹssteâđ %s pirr',
    );
  }

}
