<?php

final class PhabricatorHelpBn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'bn';
  }

  protected function getTranslations() {
    return array(
      '%s Help' => '%s সাহায্য',
      'Keyboard Shortcuts' => 'কীবোর্ড শর্টকাট',
    );
  }

}
