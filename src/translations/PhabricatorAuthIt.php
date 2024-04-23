<?php

final class PhabricatorAuthIt
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'it';
  }

  protected function getTranslations() {
    return array(
      'Passwords' => 'Password',
      'Algorithm' => 'Algoritmo',
      'You must confirm the selected password.' => 'Devi confermare la password selezionata.',
      'Google' => 'Google',
      'Edit Message' => 'Modifica messaggio',
      'Wait' => 'Aspetta',
      'Authentication Error' => 'Errore d\'autenticazione',
      'Yes (Optional)' => 'Sì (facoltativo)',
      'Minimum length of %d characters.' => 'Lunghezza minima di %s caratteri.',
      'Disqus' => 'Disqus',
      'Skip This Step' => 'Salta questo passaggio',
      'Your account has been disabled.' => 'La tua utenza è stata disabilitata.',
      'Twitter' => 'Twitter',
      'Revoke Public Key' => 'Revoca chiave pubblica',
      'Not Installed' => 'Non installato',
      'ldap.example.com' => 'ldap.example.com',
      'Revoke SSH Public Key' => 'Revoca chiave SSH pubblica',
      'Amazon' => 'Amazon',
      'Log Out?' => 'Uscire?',
      'Facebook' => 'Facebook',
      'Revoked' => 'Revocato',
      'Revoke SSH Key' => 'Revoca chiave SSH',
      'Download Private Key (%s)' => 'Scarica chiave privata (%s)',
      '%s created this password.' => '%s ha creato questa password.',
      'ldaps://ldaps.example.com/' => 'ldaps://ldaps.example.com/',
      '%s revoked this key.' => '%s ha revocato questa chiave.',
      'Log In' => 'Entra',
      'Captcha' => 'Captcha',
      'WordPress.com' => 'WordPress.com',
      'Again' => 'Ancora',
    );
  }

}
