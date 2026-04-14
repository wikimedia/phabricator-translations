<?php

final class PhabricatorPhamePa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'pa';
  }

  protected function getTranslations() {
    return array(
  'Archive' => 'ਪੁਰਾਲੇਖ',
  '%s marked %s as a draft.' => '%s ਨੇ %s ਨੂੰ ਖਰੜੇ ਵਜੋਂ ਨਿਸ਼ਾਨਦੇਹੀ ਕੀਤਾ।',
  'Unpublished draft by %s in %s.' => '%2$s ਵਿੱਚ %s ਵੱਲੋਂ ਨਾ-ਛਾਪਿਆ ਖਰੜਾ।',
);
  }

}
