<?php

final class PhabricatorConduitMy
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'my';
  }

  protected function getTranslations() {
    return array(
      'Caller' => 'ခေါ်ဆိုသူ',
      'Stability' => 'တည်ငြိမ်မှု',
      'Errors' => 'အမှားများ',
      'Stable' => 'တည်ငြိမ်သော',
    );
  }

}
