<?php

final class PhabricatorBaseEn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en';
  }

  protected function getTranslations() {
    return array(
      'No application \'%s\'!' => 'No application \'%s\'!',
      'This application is required, so all users must have access to it.' => 'This application is required, so all users must have access to it.',
      'Can Configure Application' => 'Can Configure Application',
      'Can Use Application' => 'Can Use Application',
      'Core Applications' => 'Core Applications',
      'No application!' => 'No application!',
      '%s Application' => '%s Application',
      'Developer Tools' => 'Developer Tools',
      'Request includes restricted parameter "%s", but this controller ("%s") does not whitelist it. Refusing to serve this request because it might be part of a redirection attack.' => 'Request includes restricted parameter "%s", but this controller ("%s") does not whitelist it. Refusing to serve this request because it might be part of a redirection attack.',
      'Unknown capability \'%s\'!' => 'Unknown capability \'%s\'!',
      'Unable to find transaction query for object of class "%s".' => 'Unable to find transaction query for object of class "%s".',
    );
  }

}
