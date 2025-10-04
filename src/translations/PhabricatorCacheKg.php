<?php

final class PhabricatorCacheKg
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'kg';
  }

  protected function getTranslations() {
    return array(
      'The APCu PHP extension is installed, but not enabled in your PHP configuration. Enabling this extension will improve performance. Edit the "%s" setting to enable this extension.' => 'Bo me tula ndonga ya APCu PHP, kansi yo me salama ve na mutindu na nge ya PHP. Kupesa nzila na kutomisa kisalu yai. Yidika "%s" sambu na kupesa nzila na ndonga yai.',
      'APCu Extension Not Enabled' => 'Kuyalumuna APCu Me Salama Ve',
      'Enabling APCu will improve performance.' => 'Kupesa APCu nzila ta tomisa kisalu.',
      'APCu Disabled' => 'APCu ya kele ti bifu na nitu',
    );
  }

}
