<?php

final class PhabricatorAuditMy
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'my';
  }

  protected function getTranslations() {
    return array(
      'USERS' => 'အသုံးပြုသူများ',
      'none' => 'ဘာမှမရှိ',
    );
  }

}
