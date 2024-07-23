<?php

final class PhabricatorTypeaheadSrEC
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sr_EC';
  }

  protected function getTranslations() {
    return array(
      'Unable to parse function and arguments for token "%s".' => 'Није могуће рашчланити функцију и аргументе за токен „%s”.',
    );
  }

}
