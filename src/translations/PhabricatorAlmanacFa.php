<?php

final class PhabricatorAlmanacFa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fa';
  }

  protected function getTranslations() {
    return array(
      'Name of the service.' => 'نام سرویس',
      'Namespace' => 'فضای نام',
      'Add Property' => 'افزودن ویژگی',
      'Name of the network.' => 'نام شبکه.',
      'Add Interface' => 'افزودن رابط',
      'Create Service' => 'ایجاد سرویس',
      'Edit Namespace' => 'ویرایش فضای نام',
      'Network %d' => 'شبکهٔ %s',
      'Namespace Name' => 'نام فضای نام',
      'Device status information.' => 'اطلاعات وضعیت دستگاه.',
      'Device Disabled' => 'دستگاه غیرفعال شد',
      'Device status.' => 'وضعیت دستگاه.',
      'Active Devices' => 'دستگاه‌های فعال',
    );
  }

}
