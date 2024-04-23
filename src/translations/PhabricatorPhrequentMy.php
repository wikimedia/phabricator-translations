<?php

final class PhabricatorPhrequentMy
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'my';
  }

  protected function getTranslations() {
    return array(
      'Stop Time' => 'ရပ်ချိန်',
      'Start Time' => 'စချိန်',
      'Stop' => 'ရပ်',
    );
  }

}
