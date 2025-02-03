<?php

final class PhabricatoravaCoreAr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ar';
  }

  protected function getTranslations() {
    return array(
      'Anti-Vandalism' => 'مكافحة التخريب',
      'The username for whom transactions will be rolled back.' => 'اسم المستخدم الذي سيتم إرجاع المعاملات الخاصة به.',
      'No action' => 'لا رد فعل',
      'Scan for vandalism' => 'البحث عن التخريب',
    );
  }

}
