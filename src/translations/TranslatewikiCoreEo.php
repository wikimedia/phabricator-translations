<?php

final class TranslatewikiCoreEo
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'eo';
  }

  protected function getTranslations() {
    return array(
      'Writing data (%s, %s) to "%s"...' => 'Skribado de datumoj (%s, %s) en „%s”…',
      'Used in:' => 'Uzata en:',
    );
  }

}
