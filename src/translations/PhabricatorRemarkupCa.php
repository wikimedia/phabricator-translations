<?php

final class PhabricatorRemarkupCa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ca';
  }

  protected function getTranslations() {
    return array(
      'Process text through remarkup in Phabricator context.' => 'Processa el text ressaltat en el context de Phabricator.',
      'Invalid markup engine.' => 'Motor de marcatge no vàlid.',
      'Content may not be empty.' => 'El contingut no pot estar buit.',
    );
  }

}
