<?php

final class PhabricatorBaseAr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ar';
  }

  protected function getTranslations() {
    return array(
      'No application \'%s\'!' => 'لا حاجة لتقديم طلب مقابل %s!',
      'This application is required, so all users must have access to it.' => 'هذا التطبيق مطلوب، لذا يجب أن يتمكن جميع المستخدمين من الوصول إليه.',
      'Can Configure Application' => 'يمكن تهيئة التطبيق',
      'Can Use Application' => 'يمكن استخدام التطبيق',
      'Core Applications' => 'التطبيقات الأساسية',
      'No application!' => 'لا حاجة لتقديم طلب!',
      '%s Application' => 'طلب بقيمة %s',
      'Developer Tools' => 'أدوات المطورين',
      'Request includes restricted parameter "%s", but this controller ("%s") does not whitelist it. Refusing to serve this request because it might be part of a redirection attack.' => 'يتضمن الطلب مُعاملًا مُقيّدًا " %s "، لكن وحدة التحكم هذه (" %s ") لا تسمح به. لذا، نرفض معالجة هذا الطلب لاحتمالية كونه جزءًا من هجوم إعادة توجيه.',
      'Unknown capability \'%s\'!' => 'قدرة غير معروفة \' %s \'!',
      'Unable to find transaction query for object of class "%s".' => 'تعذر العثور على استعلام المعاملة لكائن من الفئة "%s".',
    );
  }

}
