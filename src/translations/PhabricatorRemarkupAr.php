<?php

final class PhabricatorRemarkupAr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ar';
  }

  protected function getTranslations() {
    return array(
  'Invalid markup engine.' => 'محرك تعليم غير صحيح.',
  'Process text through remarkup.' => 'معالجة النص من خلال إعادة التدوين.',
  'Mentioning and Embedding objects' => 'ذكر وتضمين الأشياء',
  'Specialized Syntax' => 'بناء الجملة المتخصص',
  'Remarkup Reference' => 'مرجع Remarkup',
  'Input' => 'مدخل',
  'Contents must be a list of strings.' => 'يجب أن تكون المحتويات عبارة عن قائمة من السلاسل النصية.',
  'Reference' => 'مرجع',
);
  }

}
