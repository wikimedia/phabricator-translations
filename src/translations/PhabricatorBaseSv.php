<?php

final class PhabricatorBaseSv
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sv';
  }

  protected function getTranslations() {
    return array(
      'No Login Required' => 'Ingen inloggning krävs',
    );
  }

}
