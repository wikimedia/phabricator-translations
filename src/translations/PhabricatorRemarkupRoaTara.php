<?php

final class PhabricatorRemarkupRoaTara
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'roa_Tara';
  }

  protected function getTranslations() {
    return array(
      'Process text through remarkup in Phabricator context.' => 'Processe teste cu \'u remarkup jndr\'à \'u condeste Phabricator.',
      'Invalid markup engine.' => 'Motore de markup invalide.',
      'Content may not be empty.' => '\'U condenute non ge pò essere vacande.',
    );
  }

}
