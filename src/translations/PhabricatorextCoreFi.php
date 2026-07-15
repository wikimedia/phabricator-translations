<?php

final class PhabricatorextCoreFi
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fi';
  }

  protected function getTranslations() {
    return array(
  'Next: %s' => 'Seuraava: %s',
  'Unresolved code review comments: %d' => 'Ratkaisemattomat koodinkatselmointikommentit: %d',
  'Cannot Lock Task' => 'Tehtävän lukitseminen epäonnistui',
  'Show related patches' => 'Näytä liittyvät pätsit',
  'No deployments on fridays' => 'Ei käyttöönottoja perjantaisin',
  'Unknown policies: %s' => 'Tuntemattomat käytännöt: %s',
  'ChangeId' => 'ChangeId',
  'Release Details' => 'Julkaisun tiedot',
  'LDAP User' => 'LDAP-käyttäjä',
  'MediaWiki' => 'MediaWiki',
  'unknown' => 'tuntematon',
  'View Change in Gerrit' => 'Näytä muutos Gerritissä',
  'You must disable the user before rolling back their activity' => 'Käyttäjätunnus pitää ottaa pois käytöstä ennen sen aktiviteettien perumista',
  'open' => 'avoin',
  'MediaWiki Instance Name' => 'MediaWiki-instanssin nimi',
  'Secret Token' => 'Salainen avain',
  'Name' => 'Nimi',
  'Gerrit Patches' => 'Gerrit-pätsit',
  '%s Line(s) removed' => '%s rivi(ä) poistettu',
  'Code Review Started' => 'Koodin katselmointi aloitettu',
  'Hide Instructions' => 'Piilota käyttöohjeet',
  'locked' => 'lukittu',
  'How this works' => 'Näin se toimii',
  'Use [[%s|this form]] to create one.' => 'Luo käyttäen tätä [[%s|lomaketta]].',
  'MediaWiki User' => 'MediaWiki-käyttäjä',
  'Open Tasks' => 'Avoimet tehtävät',
  'Unknown' => 'Tuntematon',
  'Global Accounts' => 'Järjestelmänlaajuiset tunnukset',
  'Object Type' => 'Objektin tyyppi',
  'Previous: %s' => 'Edellinen: %s',
  'No Permission' => 'Ei oikeutta',
  'merged' => 'yhdistetty',
  'closed' => 'suljettu',
  'Required' => 'Vaadittu',
  'Abandoned' => 'Hylätty',
  '%s Line(s) added' => '%s rivi(ä) lisätty',
);
  }

}
