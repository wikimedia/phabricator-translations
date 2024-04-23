<?php

final class PhabricatorDivinerMy
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'my';
  }

  protected function getTranslations() {
    return array(
      'Return' => 'ပြန်လာရန်',
      'Article' => 'ဆောင်းပါး',
      'Book' => 'စာအုပ်',
    );
  }

}
