<?php

final class PhabricatorFactLb
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'lb';
  }

  protected function getTranslations() {
    return array(
      'View Data' => 'Donnéeë weisen',
      'Dimension' => 'Dimensioun',
      '%sms' => '%sms',
      '%s (Transactions)' => '%s (Transaktiounen)',
      'Not Generated' => 'Net generéiert',
    );
  }

}
