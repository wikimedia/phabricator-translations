<?php

final class PhabricatorPhrictionPa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'pa';
  }

  protected function getTranslations() {
    return array(
      'Publish Draft' => 'ਖਰੜਾ ਛਾਪੋ',
      'Publish Draft?' => 'ਖਰੜਾ ਪ੍ਰਕਾਸ਼ਿਤ ਕਰਨਾ ਹੈ?',
      'Draft %d' => 'ਖਰੜਾ %s',
      'This document has unpublished draft changes.' => 'ਇਸ ਲਿਖਤ ਵਿੱਚ ਨਾ-ਛਾਪੇ ਹੋਏ ਖਰੜਾ ਦੀ ਤਬਦੀਲੀਆਂ ਹਨ।',
      'Save as Draft' => 'ਖਰੜੇ ਵਜੋਂ ਸੰਭਾਲੋ',
    );
  }

}
