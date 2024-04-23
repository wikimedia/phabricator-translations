<?php

final class PhabricatorAuthHu
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'hu';
  }

  protected function getTranslations() {
    return array(
      '%s renamed this provider from %s to %s.' => '%s átnevezte ezt a provider-t erről: %s, erre: %s.',
      '%s enabled login.' => '%s engedélyezte a belépést.',
      'Disable Contact Number' => 'Kapcsolattartási szám tiltása',
      'This key has been revoked. Choose or generate a new, unique key.' => 'Ez a kulcs vissza lett vonva. Újat kell választani vagy generálni.',
      'SSH Key Actions' => 'SSH kulcs műveletek',
      'Adding a PKCS8 keyfile to the cache can be very dangerous. If the PKCS8 file really encodes a different public key than the one specified, an attacker could use it to gain unauthorized access.
    Generally, you should use this option only in a development environment where ssh-keygen is broken and it is inconvenient to fix it, and only if you are certain you understand the risks. You should never cache a PKCS8 file you did not generate yourself.' => 'PKCS8 kulcsfájl hozzáadása a gyorsítótárhoz nagyon veszélyes lehet. Ha a PKCS8 fájl valóban a megadottól eltérő nyilvános kulcsot kódol, a támadó felhasználhatja arra jogosulatlan hozzáféréshez. Általában ezt az opciót csak olyan fejlesztési környezetben kell használni, ahol az ssh-keygen nem működik és nehéz megjavítani, és csak is akkor, ha biztos, minden 
     kockázat ismert. Soha nem szabad gyorsítótárazni egy PKCS8 fájlt, amelyet nem saját maga hozott létre.',
      'This provider ("%s") already exists, and you can not add more than one instance of it. You can edit the existing provider, or you can choose a different provider.' => 'Ez a provider ("%s") már létezik, és csak egy példányát adhat hozzá. Lehet szerkeszteni a meglévőt, vagy másikat választani.',
      'Edit Contact Number' => 'Kapcsolattartási szám szerkesztése',
      'Passwords' => 'Jelszavak',
      'Algorithm' => 'Algoritmusok',
      'You must specify the username of the account to recover.' => 'A felhasználónevet kötelező megadni a helyreállításhoz.',
      'Revoke Tokens' => 'Tokenek visszavonása',
      'There are too many configured default registration providers.' => 'Túl sok a konfigurált alapértelmezett regisztrációs provider.',
      'Unlink "%s" Account?' => '"%s" fiók leválasztható?',
      'You must confirm the selected password.' => 'A kiválasztott jelszót meg kell erősíteni.',
      'Edit Auth Messages' => 'Auth üzenetek szerkesztése',
      'Complete enrolling your phone with Duo:' => 'A telefon bejegyzésének befejezése a Duo segítségével:',
      'Unknown session type "%s".' => 'Nem ismert munkamenet típus: "%s".',
      'Setup Admin Account' => 'Admin fiók beállítása',
      'Enable Contact Number' => 'Kapcsolattartási szám engedélyezése',
      'Create New Duo Account' => 'Új Duo fiók létrehozása',
      'To add a TOTP factor to your account, you will first need to install a mobile authenticator application on your phone. Two applications which work well are **Google Authenticator** and **Authy**, but any other TOTP application should also work.
    If you haven\'t already, download and install a TOTP application on your phone now. Once you\'ve launched the application and are ready to add a new TOTP code, continue to the next step.' => 'TOTP használatához először telepítenie kell egy mobil hitelesítő alkalmazást a telefonjára. A **Google Authenticator** vagy az **Authy** ajánlott, de minden más TOTP alkalmazásnak is megfelelő lehet. Ha sikeresen elindult alkalmazás és készen áll új TOTP-kód hozzáadására, folytassa a következő lépéssel.',
      'Must Verify Email' => 'Az e-mail megerősítése kötelező',
      'Verify Email' => 'E-mail megerősítése',
      'Unable to Log In' => 'Nem lehet bejelentkezni',
      'No public key was provided.' => 'Nem lett publikus kulcs megadva.',
      'TOTP Code' => 'TOTP kód',
      'Too Short' => 'Túl rövid',
      'Not Distinct' => 'Nem különböző',
      'Wrong Account' => 'Rossz fiók',
      'Already Registered' => 'Már regisztrált',
      'SECURITY WARNING' => 'BIZTONSÁGI FIGYELMEZTETÉS',
      'Strength' => 'Erősség',
      'Anonymous Password' => 'Anonim jelszó',
      'Use the button below to log in as: %s' => 'A gombbal be lehet jelentkezni mint: %s',
      'Active OAuth Token' => 'Aktív OAuth token',
      'Google' => 'Google',
      'Edit Message' => 'Üzenet szerkesztése',
      'The contact number.' => 'A kapcsolattartási szám.',
      'Wait' => 'Várakozás',
      'No matching SSH keys.' => 'Nincs passzoló SSH kulcs.',
      'Use %s Username' => 'Phabricator felhasználónév használata',
      'Authentication Error' => 'Hitelesítési hiba',
      'Text Message (SMS)' => 'SMS üzenet',
      'Allows Registration' => 'Regisztráció engedélyezése',
      'SSH KEY DETAIL' => 'SSH-KULCS RÉSZLETEI',
    );
  }

}
