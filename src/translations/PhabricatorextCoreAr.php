<?php

final class PhabricatorextCoreAr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ar';
  }

  protected function getTranslations() {
    return array(
      'Escalate' => 'التصاعد',
      'Next: %s' => 'التالي: %s',
      'Standard Phabricator.' => 'فابريكاتور القياسي.',
      'Merged' => 'مندمجة',
      'Release Details' => 'تفاصيل الإصدار',
      'Open Tasks' => 'المهمات المفتوحة',
      'Unknown' => 'غير معروف',
      'No Permission' => 'تحتاج إذن',
      'Required' => 'مطلوب',
      'Abandoned' => 'مهجور',
      'Comments' => 'التعليقات',
      'Change type to "%s"' => 'تغيير النوع إلى "%s"',
    );
  }

}
