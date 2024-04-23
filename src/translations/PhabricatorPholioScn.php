<?php

final class PhabricatorPholioScn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'scn';
  }

  protected function getTranslations() {
    return array(
      'Undo' => 'Annulla',
      'Image "%s":' => 'Mmàggini "%s":',
    );
  }

}
