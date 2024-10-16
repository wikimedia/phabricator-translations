<?php

final class PhabricatorAuthFi
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fi';
  }

  protected function getTranslations() {
    return array(
      'Passwords' => 'Salasanat',
      'Algorithm' => 'Algoritmi',
      'You must confirm the selected password.' => 'Sinun täytyy vahvistaa valittu salasana.',
      'Verify Email' => 'Vahvista sähköposti',
      'Unable to Log In' => 'Ei voida kirjautua sisään',
      'LDAP Port' => 'LDAP-portti',
      'Log In with LDAP' => 'Kirjaudu sisään LDAP:lla',
      'TOTP Code' => 'TOTP-koodi',
      'Too Short' => 'Liian lyhyt',
      'You denied this request. Wait %s second(s) to try again.' => 'Hylkäsit tämän pyynnön. Odota %s sekunti(a) yrittääksesi uudelleen.',
      'LDAP Username: ' => 'LDAP-käyttäjänimi:',
      'Allow Login:' => 'Salli kirjautuminen:',
      '%s (%s) MFA Code: %s' => '%s (%s) MFA-koodi: %s',
      'Wrong Account' => 'Väärä tili',
      'SECURITY WARNING' => 'TURVALLISUUSVAROITUS',
      'Set Test Message' => 'Aseta testiviesti',
      '/settings/panel/contact/' => '/settings/panel/contact/',
      'The private key will not be retained.' => 'Yksityistä avainta ei säilytetä.',
      'Edit Message' => 'Muokkaa viestiä',
      'Wait' => 'Odota',
      'No matching SSH keys.' => 'Ei vastaavia SSH-avaimia.',
      'Use %s Username' => 'Käytä %s-käyttäjänimeä',
      'Authentication Error' => 'Todennusvirhe',
      'Text Message (SMS)' => 'Tekstiviesti (SMS)',
      'Yes (Optional)' => 'Kyllä (valinnainen)',
      'firstname, lastname' => 'etunimi, sukunimi',
      'Asana' => 'Asana',
      'MFA' => 'MFA',
      'Send Another Email' => 'Lähetä toinen sähköposti',
      'Public SSH Key' => 'Julkinen SSH-avain',
      'All Keys' => 'Kaikki avaimet',
      'Upload Public Key' => 'Tallenna julkinen avain',
      'Log In (%s)' => 'Kirjaudu sisään (%s)',
      'Skip This Step' => 'Ohita tämä vaihe',
      'Login Failure' => 'Kirjautumisvirhe',
      'Your account has been disabled.' => 'Käyttäjätunnuksesi on poistettu käytöstä.',
      'Twitter' => 'Twitter',
      'Log In or Register with LDAP' => 'Kirjaudu sisään tai rekisteröidy LDAP:lla',
      'Next Step' => 'Seuraava vaihe',
      'Send SMS' => 'Lähetä tekstiviesti',
      'Not Installed' => 'Ei asennettu',
      'Send a login link to your email address.' => 'Lähetä kirjautumislinkki sähköpostiosoitteeseesi.',
      'Edit SSH Key' => 'Muokkaa SSH-avainta',
      'SSH Key %d' => 'SSH-avain %s',
      'App Code' => 'Sovelluskoodi',
      'You are already logged in.' => 'Olet jo kirjautuneena sisään.',
      'Username or Email' => 'Käyttäjänimi tai sähköposti',
      'Amazon' => 'Amazon',
      '%s updated the message text.' => '%s päivitti viestin tekstin.',
      'OAuth1 Account' => 'OAuth1-tili',
      'Link Accounts' => 'Linkitä tunnuksia',
      'Create Admin Account' => 'Luo järjestelmänvalvojan tili',
      'Log Out?' => 'Kirjaudu ulos?',
      'Unlink External Account' => 'Poista ulkoisen tilin linkitys',
      'Log in to %s' => 'Kirjaudu sisään Phabricatoriin',
      'Facebook' => 'Facebook',
      'LDAP Version' => 'LDAP-versio',
      'LDAP Password' => 'LDAP-salasana',
      'Edit SSH Public Key' => 'Muokkaa julkista SSH-avainta',
      'One-Time Login' => 'Kertakirjautuminen',
      'Register New Account' => 'Rekisteröi uusi käyttäjätunnus',
      'Are you sure you want to log out?' => 'Haluatko varmasti kirjautua ulos?',
      'Link Account' => 'Linkitä tili',
      'Login/Registration' => 'Kirjautuminen/Rekisteröityminen',
      'Allow Logins' => 'Salli kirjautumiset',
      'Domain' => 'Verkkotunnus',
      'Twitch.tv' => 'Twitch.tv',
      'View Active Keys' => 'Näytä aktiiviset avaimet',
      'SSH Key %d: %s' => 'SSH-avain %s: %s',
      'SMS' => 'SMS',
      'Sent By' => 'Lähettänyt',
      'Download Private Key (%s)' => 'Lataa yksityinen avain (%s)',
      'Set Account Password' => 'Aseta tilin salasana',
      'Forgot your password?' => 'Unohditko salasanasi?',
      'Authentication Canceled' => 'Todennus peruutettu',
      'Login Required' => 'Sisäänkirjautuminen vaaditaan',
      'Verified User Email' => 'Vahvistettu käyttäjän sähköpostiosoite',
      'Verify Email Address' => 'Vahvista sähköpostiosoite',
      '%s created this password.' => '%s loi tämän salasanan.',
      'Create a New Account' => 'Luo uusi käyttäjätunnus',
      'JIRA' => 'JIRA',
      'Very Weak' => 'Erittäin heikko',
      'Verify %s' => 'Vahvista %s',
      '[SSH Key]' => '[SSH-avain]',
      '%s created this key.' => '%s loi tämän avaimen.',
      'Mobile App (TOTP)' => 'Mobiilisovellus (TOTP)',
      'SMS Code' => 'SMS-koodi',
      'Register Account' => 'Rekisteröi tili',
      'Accepted By' => 'Hyväksynyt',
      '%s is required!' => '%s on pakollinen!',
      'Create New Account' => 'Luo uusi käyttäjätunnus',
      'Log In' => 'Kirjaudu sisään',
      'Already Accepted' => 'Jo hyväksytty',
      'Log Out Anyway' => 'Kirjaudu ulos joka tapauksessa',
      'Wait for Approval' => 'Odota hyväksyntää',
      'LDAP Username' => 'LDAP-käyttäjänimi',
      'Trouble logging in?' => 'Ongelmia kirjautumisessa?',
      'Allow Auto Login' => 'Salli automaattinen kirjautuminen',
      'Check Your Email' => 'Tarkista sähköpostisi',
      'Captcha' => 'Captcha',
      'OAuth2 Account' => 'OAuth2-tili',
      'LDAP Hostname' => 'LDAP-isäntänimi',
      'SSH Keys' => 'SSH-avaimet',
      'LDAP Password: ' => 'LDAP-salasana:',
      'WordPress.com' => 'WordPress.com',
      'Default Message' => 'Oletusviesti',
      'Login cookie was set correctly, but your login session is not valid. Try clearing cookies and logging in again.' => 'Kirjautumiseväste asetettiin oikein, mutta kirjautumisistuntosi ei ole kelvollinen. Yritä tyhjentää evästeet ja kirjautua uudelleen.',
      'Login Failed' => 'Kirjautuminen epäonnistui',
      'Use TLS' => 'Käytä TLS:ää',
      'You will no longer be able to use your %s account to log in.' => 'Et voi enää käyttää %s-tiliäsi kirjautuaksesi Phabricatoriin.',
      'Username/Password' => 'Käyttäjänimi/Salasana',
      'Email Address Already in Use' => 'Sähköpostiosoite on jo käytössä',
      'Again' => 'Uudelleen',
    );
  }

}
