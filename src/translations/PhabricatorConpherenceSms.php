<?php

final class PhabricatorConpherenceSms
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sms';
  }

  protected function getTranslations() {
    return array(
      'Send' => 'Vuõlttâd',
      'Last updated %s' => 'Mââimõssân peiʹvvuum %s',
    );
  }

}
