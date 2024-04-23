<?php

final class PhabricatorAlmanacKy
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ky';
  }

  protected function getTranslations() {
    return array(
      'Namespace' => 'Аталыш мейкиндиги',
      'Namespace %d' => '%s аталыш мейкиндиги',
      'Namespace %s' => '%s аталыш мейкиндиги',
      'Namespaces' => 'Аталыш мейкиндиктери',
    );
  }

}
