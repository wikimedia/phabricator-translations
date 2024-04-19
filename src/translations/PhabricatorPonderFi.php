<?php

final class PhabricatorPonderFi
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fi';
  }

  protected function getTranslations() {
    return array(
      'Hide Comments' => 'Piilota kommentit',
      'Add a Comment' => 'Lisää kommentti',
    );
  }

}
