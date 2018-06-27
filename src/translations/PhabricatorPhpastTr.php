<?php

final class PhabricatorPhpastTr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'tr';
  }

  protected function getTranslations() {
    return array(
      'PHPAST' => 'PHPAST',
      'Node %d: %s' => 'Node %s: %s',
      'Generate XHP AST' => 'XHP AST Oluştur',
      'Token %d: %s' => 'Token %s: %s',
      'XHPAST View' => 'XHPAST Görüntüle',
      'Parse' => 'Ayrıştırma',
      'No such AST!' => 'Böyle bir AST yok!',
      'Visual PHP Parser' => 'Görsel PHP Ayrıştırıcısı',
    );
  }

}
