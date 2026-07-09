<?php

final class PhabricatorPhpastAr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ar';
  }

  protected function getTranslations() {
    return array(
  'Generate PHP AST' => 'إنشاء شجرة بناء الجملة المجردة (AST) بلغة PHP',
  'PHPAST' => 'بي إتش بي AST',
  'Node %d: %s' => 'العقدة %d: %s',
  'Generate XHP AST' => 'إنشاء XHP AST',
  'Use PHPAST' => 'استخدم PHPAST',
  'Token %d: %s' => 'رمز %d دولار: %s',
  'Use XHPAST' => 'استخدم XHPAST',
  'XHPAST View' => 'عرض XHPAST',
  'PHPAST View' => 'عرض PHPAST',
  'Parse' => 'تحليل',
  'No such AST!' => 'لا يوجد مثل هذا AST!',
  'Visual PHP Parser' => 'محلل PHP مرئي',
);
  }

}
