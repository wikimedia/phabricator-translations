<?php

final class PhabricatorManiphestUr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ur';
  }

  protected function getTranslations() {
    return array(
      'Merged' => 'ضم ہو گیا',
      'Needs Triage' => 'ترتیب درکار',
      'Recently Closed' => 'حال ہی میں بند کیا گیا',
      'Valid setting' => 'درست ترتیبات',
      'Assign task to me' => 'کام مجھے سونپیں',
      'Closed, Duplicate' => 'چربہ تھا، بند کر دیا گیا',
      'Search...' => 'تلاش۔۔۔',
      'Wishlist' => 'فہرست مطالبات',
      'Priorities' => 'ترجیحات',
      'WORKBOARD' => 'میدان عمل',
      'High' => 'بلند',
    );
  }

}
