<?php

final class PhabricatorPhpastAr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ar';
  }

  protected function getTranslations() {
    return array(
      'PHPAST' => 'بي إتش بي AST',
      'Node %d: %s' => 'العقدة %s: %s',
      'Generate XHP AST' => 'إنشاء XHP AST',
      'Token %d: %s' => 'رمز %s دولار: %s',
      'XHPAST View' => 'عرض XHPAST',
      'Parse' => 'تحليل',
      'No such AST!' => 'لا يوجد مثل هذا AST!',
      'Visual PHP Parser' => 'محلل PHP مرئي',
    );
  }

}
