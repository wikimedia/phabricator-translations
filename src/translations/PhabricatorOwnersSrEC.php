<?php

final class PhabricatorOwnersSrEC
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sr_EC';
  }

  protected function getTranslations() {
    return array(
      'Validating...' => 'Провера ваљаности…',
      'owner' => 'власник',
      'Review All Changes' => 'Прегледајте све промене',
      'Ignored Attributes' => 'Занемарени атрибути',
    );
  }

}
