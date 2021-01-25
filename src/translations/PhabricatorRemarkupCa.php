<?php

final class PhabricatorRemarkupCa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ca';
  }

  protected function getTranslations() {
    return array(
      'Process text through remarkup in Phabricator context.' => 'Processa el text per resenyalització en el contexte de Phabricator.',
      'Invalid markup engine.' => 'Motor de senyalització no vàlid.',
      'Content may not be empty.' => 'El contingut no pot estar buit.',
    );
  }

}
