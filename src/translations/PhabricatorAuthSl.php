<?php

final class PhabricatorAuthSl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sl';
  }

  protected function getTranslations() {
    return array(
      '%s enabled login.' => '%s je omogočil_a prijavo.',
      'Passwords' => 'Gesla',
      'Allow Login:' => 'Dovoli prijavo:',
      'Already Registered' => 'Že registrirano',
      '/settings/panel/contact/' => '/settings/panel/contact/',
      'You must enter an LDAP password.' => 'Vnesti morate geslo LDAP.',
      'The contact number.' => 'Kontaktna številka.',
      'Text Message (SMS)' => 'Besedilno sporočilo (SMS)',
      'Special users like daemons and mailing lists are not permitted to log in via the web. Log in as a normal user instead.' => 'Posebnim uporabnikom, kot so demoni in dopisni seznami, ni dovoljena prijava prek spleta. Namesto tega se prijavite kot običajni uporabnik.',
      'Login Screen Instructions' => 'Navodila za prijavni zaslon',
      'Public SSH Key' => 'Javni ključ SSH',
      'Upload Public Key' => 'Naloži javni ključ',
      'Log In (%s)' => 'Prijava (%s)',
      'Login Failure' => 'Prijava ni uspela',
      'Revoke Public Key' => 'Prekliči javni ključ',
      'Message Preview' => 'Predogled sporočila',
      'Already Accepted Invite' => 'Povabilo že sprejeto',
      'Edit Contact Numbers' => 'Uredi kontaktne številke',
      'CHANGES TO MESSAGE' => 'SPREMEMBE SPOROČILA',
      'Link LDAP Account' => 'Poveži LDAP račun',
      'Link Accounts' => 'Poveži račune',
      'Log Out?' => 'Odjava?',
      'Account Disabled' => 'Račun onemogočen',
      'Edit SSH Public Key' => 'Urejanje javnega ključa SSH',
      'One-Time Login' => 'Enkratna prijava',
      'Actual exception: %s' => 'Dejanska izjema: %s',
      'Link Account' => 'Poveži račun',
      'Login/Registration' => 'Prijava/registracija',
      'Domain' => 'Domena',
      '%s, exception=%s' => '%s, izjema=%s',
      '%s disabled login.' => '%s je onemogočil_a prijavo.',
      'Query public keys.' => 'Poizvedba po javnih ključih.',
      'Number Disabled' => 'Številka onemogočena',
      'Login Required' => 'Potrebna je prijava',
      'Email Login' => 'E-poštna prijava',
      '**Step 2 of 2**: In this step, you will configure JIRA.
    **Create a JIRA Application**: Log into JIRA and go to **Administration**, then **Add-ons**, then **Application Links**. Click the button labeled **Add Application Link**, and use these settings to create an application:
      - **Server URL**: `%s`
      - Then, click **Next**. On the second page:
      - **Application Name**: `%s`
      - **Application Type**: `Generic Application`
      - Then, click **Create**.
    **Configure Your Application**: Find the application you just created in the table, and click the **Configure** link under **Actions**. Select **Incoming Authentication** and click the **OAuth** tab (it may be selected by default). Then, use these settings:
      - **Consumer Key**: Set this to the "Consumer Key" value in the form above.
      - **Consumer Name**: `%s`
      - **Public Key**: Set this to the "Public Key" value in the form above.
      - **Consumer Callback URL**: `%s`
    Click **Save** in JIRA. Authentication should now be configured, and this provider should work correctly.' => '**Korak 2 od 2**: V tem koraku boste konfigurirali program JIRA.
    **Ustvarite aplikacijo JIRA**: Prijavite se v program JIRA in pojdite na **Administration** (upravljanje), nato **Add-ons** (dodatki), nato **Application Links** (povezave aplikacij). Kliknite gumb, označen z **Add Application Link** (dodaj povezavo aplikacije), in za ustvaritev aplikacije uporabite naslednje nastavitve:
      - **Server URL** (URL strežnika): `%s`
      - Nato kliknite **Next** (naprej). Na drugi strani:
      - **Application Name** (ime aplikacije): `Phabricator`
      - **Application Type** (vrsta aplikacije): `Generic Application`
      - Nato kliknite **Create** (ustvari).
    **Konfigurirajte aplikacijo**: V tabeli poiščite aplikacijo, ki ste jo pravkar ustvarili, in kliknite povezavo **Configure** (konfiguriraj) pod **Actions** (dejanja). Izberite **Incoming Authentication** (vhodna aplikacija) in klinite zavihek **OAuth** (lahko je izbran po privzetem). Nato uporabite naslednje nastavitve:
      - **Consumer Key** (ključ odjemalca): Ta parameter nastavite na vrednost »Consumer Key« (ključ odjemalca) v obrazcu zgoraj.
      - **Consumer Name** (ime odjemalca): »Phabricator«
      - **Public Key** (javni ključ): Ta parameter nastavite na vrednost »Public Key« (javni ključ) v obrazcu zgoraj.
      - **Consumer Callback URL** (povratni URL odjemalca): »%s«
    V programu JIRA kliknite **Save** (shrani). Avtentikacija bi morala biti zdaj konfigurirana in ta ponudnik bi moral ustrezno delovati.',
      'Confirm Account Link' => 'Povezava za potrditev računa',
      'Refresh Account Link' => 'Osveži povezavo na račun',
      'Permanent Account Link' => 'Trajna povezava na račun',
      'ActiveDirectory Domain' => 'Domena ActiveDirectory',
      'Multi-Factor Login' => 'Večfaktorska prijava',
      'Create Accounts' => 'Ustvari račune',
      'Link %s Account' => 'Poveži račun %s',
      'Contact Number' => 'Kontaktna številka',
      'Multi-Factor' => 'Večfaktorsko',
      'Factor Type' => 'Vrsta faktorja',
      'Confirm Link' => 'Potrdi povezavo',
      'Log In' => 'Prijava',
      'Already Accepted' => 'Že sprejeto',
      'Contact numbers must have a contact number.' => 'Kontaktne številke morajo imeti kontaktno številko.',
      'Login and Registration Providers' => 'Ponudniki prijave in registracije',
      'Search Attributes' => 'Iskani atributi',
      'Message Text' => 'Besedilo sporočila',
      'LDAP Exception: %s' => 'Izjema LDAP: %s',
      'LDAP search failed.' => 'Iskanje LDAP je spodletelo.',
      'Allow Auto Login' => 'Dovoli samodejno prijavo',
      'Allow Linking Accounts' => 'Dovoli povezovanje računov',
      'Always Search' => 'Vedno poišči',
      'Login Failed' => 'Prijava ni uspela',
      'Already Associated' => 'Že povezano',
      'Missing Client ID Cookie' => 'Manjka piškotek ID-ja stranke',
    );
  }

}
