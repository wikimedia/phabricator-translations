<?php

final class PhabricatorPeoplePa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'pa';
  }

  protected function getTranslations() {
    return array(
      '[%s] Welcome to %s' => '[%s] ਜੀ ਆਇਆਂ ਨੂੰ %s ਉੱਤੇ',
      'Login: Failure' => 'ਦਾਖ਼ਲ ਹੋਣਾ: ਅਸਫ਼ਲ',
      'Any Owner' => 'ਕੋਈ ਵੀ ਮਾਲਕ',
      'Email: Recovery Link' => 'ਈਮੇਲ: ਮੁੜ-ਪ੍ਰਾਪਤੀ ਕੜੀ',
    );
  }

}
