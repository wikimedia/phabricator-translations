<?php

final class PhabricatorPolicyTe
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'te';
  }

  protected function getTranslations() {
    return array(
      'Other Policies' => 'ఇతర విధానాలు',
      'Note:' => 'గమనిక:',
      '[%s] (%s) %s // %s' => '[%s] (%s) %s // %s',
    );
  }

}
