<?php

final class PhabricatorSearchAr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ar';
  }

  protected function getTranslations() {
    return array(
  'No results.' => 'لا توجد نتائج.',
  'Global Search' => 'البحث العالمي',
  '%s Queries' => '%s استعلامات',
  'Profile picture' => 'صورة الملف الشخصي',
  'Item Status' => 'حالة العنصر',
  '%s (Not Available)' => '%s (غير متاح)',
);
  }

}
