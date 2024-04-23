<?php

final class PhabricatorRemarkupCa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ca';
  }

  protected function getTranslations() {
    return array(
      'Invalid markup engine.' => 'Motor de marcatge no vàlid.',
      'Process text through remarkup.' => 'Processa el text ressaltat en el context de Phabricator.',
      'Content may not be empty.' => 'El contingut no pot estar buit.',
    );
  }

}
