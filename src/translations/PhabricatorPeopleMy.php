<?php

final class PhabricatorPeopleMy
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'my';
  }

  protected function getTranslations() {
    return array(
      'Confirm' => 'အတည်ပြုရန်',
      'Musician' => 'ဂီတပညာရှင်',
      'Admin' => 'အက်ဒမင်',
      'users' => 'အသုံးပြုသူများ',
    );
  }

}
