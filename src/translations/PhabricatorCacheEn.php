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
      'Select caches to purge with "--all" or "--caches". Available caches are: %s.' => 'Select caches to purge with "--all" or "--caches". Available caches are: %s.',
      'The APCu PHP extension is installed, but not enabled in your PHP configuration. Enabling this extension will improve performance. Edit the "%s" setting to enable this extension.' => 'The APCu PHP extension is installed, but not enabled in your PHP configuration. Enabling this extension will improve performance. Edit the "%s" setting to enable this extension.',
      'OPcache is not configured properly for development.' => 'OPcache is not configured properly for development.',
      'General Cache (TTL)' => 'General Cache (TTL)',
      'Zend OPcache Not Installed' => 'Zend OPcache Not Installed',
      'Markup Cache' => 'Markup Cache',
      'General Cache' => 'General Cache',
      'Unknown cache format.' => 'Unknown cache format.',
      'Two objects (of classes "%s" and "%s") generate the same map value ("%s"). Each object must generate a unique map value.' => 'Two objects (of classes "%s" and "%s") generate the same map value ("%s"). Each object must generate a unique map value.',
      'OPcache Not Configured for Production' => 'OPcache Not Configured for Production',
      'The PHP "Zend OPcache" extension is installed, but not enabled in your PHP configuration. Enabling it will dramatically improve performance. Edit the "%s" setting to enable the extension.' => 'The PHP "Zend OPcache" extension is installed, but not enabled in your PHP configuration. Enabling it will dramatically improve performance. Edit the "%s" setting to enable the extension.',
      'Installing the "Zend OPcache" extension will dramatically improve performance.' => 'Installing the "Zend OPcache" extension will dramatically improve performance.',
      'Only strings may be written to the DB cache!' => 'Only strings may be written to the DB cache!',
      'Purge all caches.' => 'Purge all caches.',
      'Specify either "--all" or "--caches", not both.' => 'Specify either "--all" or "--caches", not both.',
      'PHP Extension "APCu" Not Installed' => 'PHP Extension "APCu" Not Installed',
      'Zend OPcache Not Enabled' => 'Zend OPcache Not Enabled',
      'Drop data from readthrough caches.' => 'Drop data from readthrough caches.',
      'Cache purger "%s" is not recognized. Available caches are: %s.' => 'Cache purger "%s" is not recognized. Available caches are: %s.',
      'Installing the "APCu" PHP extension will improve performance. This extension is strongly recommended. Without it, this software must rely on a very inefficient disk-based cache.' => 'Installing the "APCu" PHP extension will improve performance. This extension is strongly recommended. Without it, this software must rely on a very inefficient disk-based cache.',
      'OPcache Disabled' => 'OPcache Disabled',
      'APCu Extension Not Enabled' => 'APCu Extension Not Enabled',
      'OPcache Config' => 'OPcache Config',
      'OPcache is not configured ideally for production.' => 'OPcache is not configured ideally for production.',
      'OPcache' => 'OPcache',
      'Serializing cache can not write objects (for key "%s")!' => 'Serializing cache can not write objects (for key "%s")!',
      'In development, OPcache should be configured to always reload code so nothing needs to be restarted after making changes. To do this, enable "%s" and set "%s" to 0.' => 'In development, OPcache should be configured to always reload code so nothing needs to be restarted after making changes. To do this, enable "%s" and set "%s" to 0.',
      'Purging "%s" cache...' => 'Purging "%s" cache...',
      'Purge a specific set of caches.' => 'Purge a specific set of caches.',
      'When using "--caches", you must select at least one valid cache to purge.' => 'When using "--caches", you must select at least one valid cache to purge.',
      'In production, OPcache should be configured to never revalidate code. This will slightly improve performance. To do this, disable "%s" in your PHP configuration.' => 'In production, OPcache should be configured to never revalidate code. This will slightly improve performance. To do this, disable "%s" in your PHP configuration.',
      'OPcache Not Configured for Development' => 'OPcache Not Configured for Development',
      'Failed to inflate data!' => 'Failed to inflate data!',
      'Zend OPcache' => 'Zend OPcache',
      'Enabling OPcache will dramatically improve performance.' => 'Enabling OPcache will dramatically improve performance.',
      'Enabling APCu will improve performance.' => 'Enabling APCu will improve performance.',
      'APCu Disabled' => 'APCu Disabled',
    );
  }

}
