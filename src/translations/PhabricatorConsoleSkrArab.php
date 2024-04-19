<?php

final class PhabricatorConsoleSkrArab
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'skr_Arab';
  }

  protected function getTranslations() {
    return array(
      'Site' => 'سائٹ',
      'Error Log' => 'خرابی لاڳ',
      'Replay' => 'ولدا چلاؤ',
    );
  }

}
