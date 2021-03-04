<?php

final class PhabricatorextCoreFi
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fi';
  }

  protected function getTranslations() {
    return array(
      'Next: %s' => 'Seuraava: %s',
      'Standard Phabricator.' => 'Phabricatorin perustila.',
      'Gerrit Projects' => 'Gerrit-projektit',
      'Unresolved code review comments: %d' => 'Ratkaisemattomat koodinkatselmointikommentit: %s',
      'Cannot Lock Task' => 'Tehtävän lukitseminen epäonnistui',
      'Show related patches' => 'Näytä liittyvät pätsit',
      'No deployments on fridays' => 'Ei käyttöönottoja perjantaisin',
      'Unknown policies: %s' => 'Tuntemattomat käytännöt: %s',
      'Secret Key' => 'Salainen avain',
      'ChangeId' => 'ChangeId',
      'Release Details' => 'Julkaisun tiedot',
      'Allow' => 'Salli',
      'MediaWiki' => 'MediaWiki',
      'The requested project does not exist' => 'Pyydettyä projektia ei ole',
      'Change type to "%s."' => 'Vaihda tyypiksi ”%s”.',
      'Deny' => 'Kiellä',
      'View Change in Gerrit' => 'Näytä muutos Gerritissä',
      'You must disable the user before rolling back their activity' => 'Käyttäjätunnus pitää ottaa pois käytöstä ennen sen aktiviteettien perumista',
      'ElasticSearch' => 'ElasticSearch',
      'Disable ElasticSearch' => 'Poista ElasticSearch käytöstä',
      'MediaWiki Instance Name' => 'MediaWiki-instanssin nimi',
      'Enable this to use the experimental ElasticSearch fulltext backend.' => 'Ota tämä käyttöön jos haluat käyttää kokeellista ElasticSearch-kokotekstitaustaosaa.',
      'Gerrit Patches' => 'Gerrit-pätsit',
      '%s Line(s) removed' => '%s rivi(ä) poistettu',
      'Code Review Started' => 'Koodin katselmointi aloitettu',
      'Hide Instructions' => 'Piilota käyttöohjeet',
      'Expert Mode.' => 'Asiantuntijatila.',
      'How this works' => 'Näin se toimii',
      'Create custom access control policy objects.' => 'Luo mukautettuja käyttöoikeuskäytäntöobjekteja.',
      'Use [[%s|this form]] to create one.' => 'Luo käyttäen tätä [[%s|lomaketta]].',
      'MediaWiki User' => 'MediaWiki-käyttäjä',
      'Change type to' => 'Vaihda tyypiksi',
      'Open Tasks' => 'Avoimet tehtävät',
      'Unknown' => 'Tuntematon',
      'Global Accounts' => 'Järjestelmänlaajuiset tunnukset:',
      'Previous: %s' => 'Edellinen: %s',
      'Download zip' => 'Lataa zip',
      'Download Archive' => 'Lataa arkisto',
      'Expert Mode' => 'Asiantuntijatila',
      'No Permission' => 'Ei oikeutta',
      'Enable ElasticSearch' => 'Ota ElasticSearch käyttöön',
      'Required' => 'Vaadittu',
      'Number of open tasks over time' => 'Avoimien tehtävien lukumäärä ajan kuluessa',
      'Abandoned' => 'Hylätty',
      'Gerrit' => 'Gerrit',
      '%s Line(s) added' => '%s rivi(ä) lisätty',
      'Download tar.gz' => 'Lataa tar.gz',
      'Change type to "%s"' => 'Vaihda tyypiksi ”%s”',
    );
  }

}
