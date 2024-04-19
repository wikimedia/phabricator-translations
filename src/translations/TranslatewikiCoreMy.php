<?php

final class TranslatewikiCoreMy
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'my';
  }

  protected function getTranslations() {
    return array(
      'NONE' => 'ဘာမှမရှိ',
      'Done.' => 'ပြီးပြီ',
    );
  }

}
