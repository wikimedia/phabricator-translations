<?php

final class PhabricatorAphlictLb
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'lb';
  }

  protected function getTranslations() {
    return array(
      'Send a notification to a user.' => 'Schéckt engem Benotzer eng Notifikatioun.',
      'You must %s first!' => 'Dir musst fir d\'éischt %s!',
    );
  }

}
