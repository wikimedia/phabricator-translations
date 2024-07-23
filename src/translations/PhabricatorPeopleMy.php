<?php

final class PhabricatorPeopleMy
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'my';
  }

  protected function getTranslations() {
    return array(
      'Musician' => 'ဂီတပညာရှင်',
      'Admin' => 'အက်ဒမင်',
      'users' => 'အသုံးပြုသူများ',
    );
  }

}
