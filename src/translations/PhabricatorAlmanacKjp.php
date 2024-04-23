<?php

final class PhabricatorAlmanacKjp
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'kjp';
  }

  protected function getTranslations() {
    return array(
      'Add Interface' => 'မ်ုဆူ့ဍုဂ် လိက်မေံဍွယ်',
      'Reset' => 'မ်ုပ္တုံၮါင်',
      'Edit Interface' => 'မ်ုအင်းတာင် လိက်မေံဍွယ်',
      'Delete Interface' => 'မ်ုထုဂ်ၜါ် လိက်မေံဍွယ်',
      '%s:%s (%s on %s)' => '%s:%s (%s ခဝ့် %s)',
      'Create Interface' => 'မ်ုပ္တုံ လိက်မေံဍွယ်',
    );
  }

}
