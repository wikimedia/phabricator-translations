<?php

final class PhabricatorCountdownMy
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'my';
  }

  protected function getTranslations() {
    return array(
      'Minutes' => 'မိနစ်',
      'Hours' => 'နာရီ',
      'Days' => 'ရက်',
    );
  }

}
