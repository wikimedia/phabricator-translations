<?php

final class PhabricatorCacheDa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'da';
  }

  protected function getTranslations() {
    return array(
      'APCu' => 'APCu',
      '"%s" Disabled' => '"%s" deaktiveret',
      'APC' => 'APC',
      '"%s" Enabled' => '"%s" aktiveret',
      'Unknown cache format.' => 'Ukendt cache-format.',
      'Purge all caches.' => 'Ryd alle cacher.',
      'OPcache Disabled' => 'OPcache deaktiveret',
      'APC/APCu Disabled' => 'APC/APCu deaktiveret',
      '"%s" is currently enabled, but should probably be disabled.' => '"%s" er på nuværende tidspunkt aktiveret, men bør sikkert være deaktiveret.',
      'PHP Extension \'APC\' Not Installed' => 'PHP-udvidelsen \'APC\' er ikke installeret',
    );
  }

}
