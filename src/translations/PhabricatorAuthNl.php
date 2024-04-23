<?php

final class PhabricatorAuthNl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'nl';
  }

  protected function getTranslations() {
    return array(
      'Passwords' => 'Wachtwoorden',
      'Too Short' => 'Te kort',
      'LDAP Username: ' => 'LDAP-gebruikersnaam:',
      'Google' => 'Google',
      'firstname, lastname' => 'voornaam, achternaam',
      'Minimum length of %d characters.' => 'Minimaal %s tekens lang.',
      'Slack' => 'Slack',
      'Twitter' => 'Twitter',
      'Next Step' => 'Volgende stap',
      'Not Installed' => 'Niet geïnstalleerd',
      'No user exists with username "%s".' => 'Er bestaat geen gebruiker met de gebruikersnaam "%s".',
      'Amazon' => 'Amazon',
      'Log Out?' => 'Afmelden?',
      'Facebook' => 'Facebook',
      'LDAP Version' => 'LDAP-versie',
      'Revoked' => 'Ingetrokken',
      'Account Disabled' => 'Account uitgeschakeld',
      'LDAP Password' => 'LDAP wachtwoord',
      'Username or password are incorrect.' => 'Gebruikersnaam of wachtwoord is onjuist.',
      'Are you sure you want to log out?' => 'Weet u zeker dat u zich wilt afmelden?',
      'Email Sent' => 'E-mail verzonden',
      'Twitch.tv' => 'Twitch.tv',
      'Sent By' => 'Verstuurd door',
      'Download Private Key (%s)' => 'Persoonlijke sleutel ophalen (%s)',
      'Set Account Password' => 'Profielwachtwoord instellen',
      'Forgot your password?' => 'Wachtwoord vergeten?',
      'Login Required' => 'Aanmelden verplicht',
      'Bitbucket' => 'Bitbucket',
      'Unable to find LDAP account!' => 'Kan het LDAP-account niet vinden!',
      'Create a New Account' => 'Nieuw account aanmaken',
      'Very Weak' => 'Erg zwak',
    );
  }

}
