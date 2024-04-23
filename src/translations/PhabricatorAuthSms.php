<?php

final class PhabricatorAuthSms
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sms';
  }

  protected function getTranslations() {
    return array(
      'LDAP Username: ' => 'LDAP-õõʹnninõmm:',
      'Wrong Account' => 'Vââǥǥlaž õõʹnnitobldõk',
      'Log In (%s)' => 'Ǩeeʹrjtõõđ sizz (%s)',
      'You are already logged in.' => 'Leäk juʹn ǩeeʹrjtõõttâm sizz.',
      'Username or Email' => 'Õõʹnninõmm leʹbe e-pååʹštaddrõs',
      '%s failed!' => '%s ij oʹnnstam!',
      'Log Out?' => 'Haaʹlääk-a ǩeeʹrjtõõttâd åålǥas?',
      'LDAP Password' => 'LDAP-peittsääʹnn',
      'Username or password are incorrect.' => 'Õõʹnninõmm leʹbe peittsääʹnn lij vââǥǥlaž.',
      'Unable to connect to LDAP server (%s:%d).' => 'LDAP-serveera õhttummuš ij oʹnnstam (%s:%s).',
      'Forgot your password?' => 'Väjldõʹttiǩ-a ton jiijjad peittsääʹn?',
      'Login Required' => 'Õõlǥak ǩeeʹrjtõõttâd sizz',
      'Create a New Account' => 'Raaj ođđ tobdldõõǥǥ',
      'Mobile App (TOTP)' => 'Mobiilsuåvldõs (TOTP)',
      '%s is required!' => '%s lij pääkklaž.',
      'Create New Account' => 'Raaj ođđ tobdldõõǥǥ',
      'Log In' => 'Ǩeeʹrjtõõđ sizz',
      'LDAP Username' => 'LDAP-õõʹnninõmm',
      'LDAP Password: ' => 'LDAP-peittsääʹnn:',
      'Login Failed' => 'Sizzǩeeʹrjtõõttmõš ij oʹnnstam',
      'Username/Password' => 'Õõʹnninõmm/peittsääʹnn',
    );
  }

}
