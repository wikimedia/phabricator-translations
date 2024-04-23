<?php

final class PhabricatorAuthSv
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sv';
  }

  protected function getTranslations() {
    return array(
      'Algorithm' => 'Algoritm',
      'Unable to Log In' => 'Kunde inte logga in',
      'LDAP Port' => 'LDAP-port',
      'Log In with LDAP' => 'Logga in med LDAP',
      'LDAP Username: ' => 'LDAP-användarnamn:',
      'Terminate Session?' => 'Avsluta session?',
      'Wrong Account' => 'Fel konto',
      'Enter LDAP Credentials' => 'Ange LDAP-inloggningsuppgifter',
      'Use the button below to log in as: %s' => 'Använd knappen nedan för att logga in som: %s',
      'Refresh LDAP Account' => 'Uppdatera LDAP-konto',
      'Connecting to LDAP...' => 'Ansluter till LDAP...',
      'Auth' => 'Autentisering',
      'Log In (%s)' => 'Logga in (%s)',
      'Log In or Register with LDAP' => 'Logga in eller registrera med LDAP',
      'Edit SSH Key' => 'Redigera SSH-nyckel',
      'Terminate Session' => 'Avsluta session',
      'Link LDAP Account' => 'Länka LDAP-konto',
      'ldap.example.com' => 'ldap.exempel.com',
      'Log in to %s' => 'Logga in på Phabricator',
      'Register an Account' => 'Registrera ett konto',
      'LDAP Password' => 'LDAP-lösenord',
      'Register New Account' => 'Registrera ett nytt konto',
      'Login Required' => 'Inloggning krävs',
      'Confirm Account Link' => 'Bekräfta kontolänk',
      'Create a New Account' => 'Skapa ett nytt konto',
      'There is no account associated with that email address.' => 'Inget konto associeras med den e-postadressen.',
      'Create Accounts' => 'Skapa konton',
      'Register Account' => 'Registrera konto',
      'Create New Account' => 'Skapa nytt konto',
      'Log In' => 'Logga in',
      'LDAP' => 'LDAP',
      'LDAP Username' => 'LDAP-användarnamn',
      'Previously Invited' => 'Tidigare inbjudna',
      'LDAP Hostname' => 'LDAP-värdnamn',
      'LDAP Password: ' => 'LDAP-lösenord:',
      'Allow users to log in or register using a username and password.' => 'Låter användare logga in eller registrera med ett användarnamn och lösenord.',
      'Your login session is invalid, and clearing the session cookie was unsuccessful. Try clearing your browser cookies.' => 'Din inloggningssession är ogiltig och det gick inte att rensa sessionskakorna. Försök att rensa dina webbläsarkakor.',
    );
  }

}
