<?php

final class PhabricatorBaseScn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'scn';
  }

  protected function getTranslations() {
    return array(
      'No application \'%s\'!' => 'Nudda appricazzioni \'%s\'!',
      'Can Configure Application' => 'Pò cunfigurari l\'appricazzioni',
      'Can Use Application' => 'Pò usari l\'appricazzioni',
      'No application!' => 'Nudda appricazzioni!',
      '%s Application' => 'Appricazzioni %s',
      'Developer Tools' => 'Strummenta dû sviluppaturi',
    );
  }

}
