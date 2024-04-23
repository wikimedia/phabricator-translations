<?php

final class PhabricatorBaseMy
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'my';
  }

  protected function getTranslations() {
    return array(
      'Email Verification Required' => 'အီးမေးလ် အတည်ပြုချက် လိုအပ်သည်',
      'Admin Required' => 'အက်ဒမင် လိုအပ်ပါသည်',
    );
  }

}
