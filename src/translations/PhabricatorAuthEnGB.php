<?php

final class PhabricatorAuthEnGB
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en_GB';
  }

  protected function getTranslations() {
    return array(
      'An authorization request will be pushed to the Duo application on your phone.' => 'An authorisation request will be pushed to the Duo application on your phone.',
      'A text message with an authorization code will be sent to your primary contact number.' => 'A text message with an authorisation code will be sent to your primary contact number.',
      'A keypair has been generated, and the public key has been added as a recognized key.' => 'A keypair has been generated, and the public key has been added as a recognised key.',
      'You may optionally customize the enrollment message users are presented with by providing a replacement message below:' => 'You may optionally customise the enrollment message users are presented with by providing a replacement message below:',
      'You have failed too many attempts to synchronize new multi-factor authentication methods in a short period of time.' => 'You have failed too many attempts to synchronise new multi-factor authentication methods in a short period of time.',
      'Customize Messages' => 'Customise Messages',
      'Customized' => 'Customised',
      'If you do not recognize this change, it may indicate your account has been compromised.' => 'If you do not recognise this change, it may indicate your account has been compromised.',
      'Really revoke all tokens? Among other temporary authorizations, this will disable any outstanding password reset or account recovery links.' => 'Really revoke all tokens? Among other temporary authorisations, this will disable any outstanding password reset or account recovery links.',
      'Analyze and diagnose issues with LDAP configuration.' => 'Analyse and diagnose issues with LDAP configuration.',
      'Really revoke this token? Any temporary authorization it enables will be disabled.' => 'Really revoke this token? Any temporary authorisation it enables will be disabled.',
      'Customize Enroll Message' => 'Customise Enroll Message',
      'Your account has too many outstanding, incomplete MFA synchronization attempts. Wait an hour and try again.' => 'Your account has too many outstanding, incomplete MFA synchronisation attempts. Wait an hour and try again.',
      'Customize Message' => 'Customise Message',
    );
  }

}
