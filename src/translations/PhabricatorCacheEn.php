<?php

final class PhabricatorCacheEn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en';
  }

  protected function getTranslations() {
    return array(
      '%s is not available; unable to read deflated data!' => '%s is not available; unable to read deflated data!',
      'APCu' => 'APCu',
      '"%s" Disabled' => '"%s" Disabled',
      '"%s" Enabled in Production' => '"%s" Enabled in Production',
      'Select caches to purge with "--all" or "--caches". Available caches are: %s.' => 'Select caches to purge with "--all" or "--caches". Available caches are: %s.',
      'APC Has Noisy Configuration' => 'APC Has Noisy Configuration',
      'APC' => 'APC',
      'OPcache is not configured properly for development.' => 'OPcache is not configured properly for development.',
      'General Cache (TTL)' => 'General Cache (TTL)',
      'Enabling APC/APCu will improve performance.' => 'Enabling APC/APCu will improve performance.',
      'Zend OPcache Not Installed' => 'Zend OPcache Not Installed',
      '"%s" Enabled' => '"%s" Enabled',
      'Markup Cache' => 'Markup Cache',
      'The PHP "Zend OPcache" extension is installed, but not enabled in your PHP configuration. Enabling it will dramatically improve Phabricator performance. Edit the "%s" setting to enable the extension.' => 'The PHP "Zend OPcache" extension is installed, but not enabled in your PHP configuration. Enabling it will dramatically improve Phabricator performance. Edit the "%s" setting to enable the extension.',
      'General Cache' => 'General Cache',
      'Unknown cache format.' => 'Unknown cache format.',
      'Two objects (of classes "%s" and "%s") generate the same map value ("%s"). Each object must generate a unique map value.' => 'Two objects (of classes "%s" and "%s") generate the same map value ("%s"). Each object must generate a unique map value.',
      'OPcache Not Configured for Production' => 'OPcache Not Configured for Production',
      'Installing the "Zend OPcache" extension will dramatically improve performance.' => 'Installing the "Zend OPcache" extension will dramatically improve performance.',
      'Only strings may be written to the DB cache!' => 'Only strings may be written to the DB cache!',
      'Purge all caches.' => 'Purge all caches.',
      'Specify either "--all" or "--caches", not both.' => 'Specify either "--all" or "--caches", not both.',
      'APC/APCu Extensions Not Enabled' => 'APC/APCu Extensions Not Enabled',
      'PHP Extension "APCu" Not Installed' => 'PHP Extension "APCu" Not Installed',
      'Zend OPcache Not Enabled' => 'Zend OPcache Not Enabled',
      'Noisy APC' => 'Noisy APC',
      'Drop data from readthrough caches.' => 'Drop data from readthrough caches.',
      'Cache purger "%s" is not recognized. Available caches are: %s.' => 'Cache purger "%s" is not recognized. Available caches are: %s.',
      'OPcache Disabled' => 'OPcache Disabled',
      'APC/APCu Disabled' => 'APC/APCu Disabled',
      '"%s" is currently enabled, but should probably be disabled.' => '"%s" is currently enabled, but should probably be disabled.',
      'APC User Cache' => 'APC User Cache',
      'OPcache Config' => 'OPcache Config',
      'Adjust APC settings to quiet unnecessary errors.' => 'Adjust APC settings to quiet unnecessary errors.',
      'OPcache is not configured ideally for production.' => 'OPcache is not configured ideally for production.',
      '"%s" is currently disabled, but should probably be enabled.' => '"%s" is currently disabled, but should probably be enabled.',
      'OPcache' => 'OPcache',
      'Serializing cache can not write objects (for key "%s")!' => 'Serializing cache can not write objects (for key "%s")!',
      'In development, OPcache should be configured to always reload code so nothing needs to be restarted after making changes. To do this, enable "%s" and set "%s" to 0.' => 'In development, OPcache should be configured to always reload code so nothing needs to be restarted after making changes. To do this, enable "%s" and set "%s" to 0.',
      'The "%s" setting is currently enabled in your PHP configuration. In production mode, "%s" should be disabled. This will improve performance slightly.' => 'The "%s" setting is currently enabled in your PHP configuration. In production mode, "%s" should be disabled. This will improve performance slightly.',
      'Purging "%s" cache...' => 'Purging "%s" cache...',
      'Installing the "APCu" PHP extension will improve performance. This extension is strongly recommended. Without it, Phabricator must rely on a very inefficient disk-based cache.' => 'Installing the "APCu" PHP extension will improve performance. This extension is strongly recommended. Without it, Phabricator must rely on a very inefficient disk-based cache.',
      'Installing the PHP extension \'APC\' (Alternative PHP Cache) will dramatically improve performance. Note that APC versions 3.1.14 and 3.1.15 are broken; 3.1.13 is recommended instead.' => 'Installing the PHP extension \'APC\' (Alternative PHP Cache) will dramatically improve performance. Note that APC versions 3.1.14 and 3.1.15 are broken; 3.1.13 is recommended instead.',
      'Purge a specific set of caches.' => 'Purge a specific set of caches.',
      'The APC or APCu PHP extensions are installed, but not enabled in your PHP configuration. Enabling these extensions will improve Phabricator performance. Edit the "%s" setting to enable these extensions.' => 'The APC or APCu PHP extensions are installed, but not enabled in your PHP configuration. Enabling these extensions will improve Phabricator performance. Edit the "%s" setting to enable these extensions.',
      'When using "--caches", you must select at least one valid cache to purge.' => 'When using "--caches", you must select at least one valid cache to purge.',
      'Some versions of APC may emit unnecessary errors into the error log under the current APC settings. To resolve this, enable "%s" and disable "%s" in your PHP configuration.' => 'Some versions of APC may emit unnecessary errors into the error log under the current APC settings. To resolve this, enable "%s" and disable "%s" in your PHP configuration.',
      'The "%s" setting is currently disabled in your PHP configuration, but Phabricator is running in development mode. This option should normally be enabled in development so you do not need to restart anything after making changes to the code.' => 'The "%s" setting is currently disabled in your PHP configuration, but Phabricator is running in development mode. This option should normally be enabled in development so you do not need to restart anything after making changes to the code.',
      'In production, OPcache should be configured to never revalidate code. This will slightly improve performance. To do this, disable "%s" in your PHP configuration.' => 'In production, OPcache should be configured to never revalidate code. This will slightly improve performance. To do this, disable "%s" in your PHP configuration.',
      '"%s" Disabled in Development' => '"%s" Disabled in Development',
      'OPcache Not Configured for Development' => 'OPcache Not Configured for Development',
      'Failed to inflate data!' => 'Failed to inflate data!',
      'Zend OPcache' => 'Zend OPcache',
      'Enabling OPcache will dramatically improve performance.' => 'Enabling OPcache will dramatically improve performance.',
      'PHP Extension \'APC\' Not Installed' => 'PHP Extension \'APC\' Not Installed',
    );
  }

}
