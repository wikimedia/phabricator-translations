<?php

final class PhabricatorFilesFa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fa';
  }

  protected function getTranslations() {
    return array(
      'New alt text.' => 'متن جایگزین تازه',
      '%s removed the alternate text for this file (was %s).' => '%s متن جایگزین برای این پرونده را حذف کرد (%s بود).',
      '%s removed the alternate text for %s (was %s).' => '%s متن جایگزین %s را حذف کرد (%s بود)',
      'Alt Text' => 'متن جایگزین',
      'Default Alt Text' => 'متن جایگزین پیش‌فرض',
      'Custom Alt Text' => 'متن جایگزین سفارشی',
      '%s set the alternate text for %s to %s.' => '%s متن جایگزین برای %s را روی %s تنظیم کرد.',
      'Human-readable file description.' => 'توصیف انسان‌خواندنی پرونده.',
      'File alternate text must not be longer than %s character(s).' => 'متن جایگزین پرونده نباید طولانی‌تر از %s نویسه باشد.',
      '%s set the alternate text for this file to %s.' => '%s متن جایگزین برای این پرونده را روی %s تنظیم کرد.',
      '%s: Updating metadata... ' => '%s: در حال روزآمدسازی فراداده‌ها...',
      'Set the file alt text.' => 'تنظیم متن جایگزین پرونده.',
    );
  }

}
