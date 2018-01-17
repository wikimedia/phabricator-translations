<?php

final class PhabricatorBaseEn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en';
  }

  protected function getTranslations() {
    return array(
      'No application \'%s\'!' => 'No application \'%s\'!',
      'Expect user \'%s\' to be allowed access to \'%s\'.' => 'Expect user \'%s\' to be allowed access to \'%s\'.',
      'Can Configure Application' => 'Can Configure Application',
      'Can Use Application' => 'Can Use Application',
      'Application Controller' => 'Application Controller',
      'Public + configured' => 'Public + configured',
      'Public Access' => 'Public Access',
      'Core Applications' => 'Core Applications',
      'No Login Required' => 'No Login Required',
      'No application!' => 'No application!',
      '%s Application' => '%s Application',
      'Email Verification Required' => 'Email Verification Required',
      'Developer Tools' => 'Developer Tools',
      'This application is required for Phabricator to operate, so all users must have access to it.' => 'This application is required for Phabricator to operate, so all users must have access to it.',
      'Expect user \'%s\' to be denied access to \'%s\'.' => 'Expect user \'%s\' to be denied access to \'%s\'.',
      'Request includes restricted parameter "%s", but this controller ("%s") does not whitelist it. Refusing to serve this request because it might be part of a redirection attack.' => 'Request includes restricted parameter "%s", but this controller ("%s") does not whitelist it. Refusing to serve this request because it might be part of a redirection attack.',
      'Unknown capability \'%s\'!' => 'Unknown capability \'%s\'!',
      'Admin Required' => 'Admin Required',
      'Email Verification Required, With Exception' => 'Email Verification Required, With Exception',
      'Allow Disabled' => 'Allow Disabled',
    );
  }

}
