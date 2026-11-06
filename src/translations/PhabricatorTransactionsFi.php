<?php

final class PhabricatorTransactionsFi
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fi';
  }

  protected function getTranslations() {
    return array(
  '%s added a comment.' => '%s lisäsi kommentin.',
  'Empty Comment' => 'Tyhjä kommentti',
  'Edit Form Defaults' => 'Muokkaa lomakkeen oletusarvoja',
  'In %s, %s wrote:' => '%2$s kirjoitti kommentissa %s:',
  'Email Body Text' => 'Sähköpostin leipäteksti',
  'Optional instructions, shown above the form.' => 'Valinnaiset ohjeet, jotka esitetään lomakkeen yläpuolella.',
  'Name of the form.' => 'Lomakkeen nimi.',
  'Default Create Form' => 'Oletusluontilomake',
  '%s changed the visibility for %s.' => '%s on muutti kohteen %s näkyvyyttä.',
  '%s changed the subtype of %s from "%s" to "%s".' => '%s vaihtoi kohteen %s alatyypin %s alatyyppiin %s.',
  'Warnings' => 'Varoitukset',
  'Form Disabled' => 'Lomake poistettu käytöstä',
  'Recipient Removed' => 'Vastaanottaja poistettu',
  'Primary Fields' => 'Ensisijaiset kentät',
  '%s changed the subtype of this object from "%s" to "%s".' => '%s vaihtoi tämän objektin alatyypin %s alatyyppiin %s.',
  'Export format.' => 'Vie muoto.',
  '🔒 Locked' => '🔒 Lukittu',
  'New Object' => 'Uusi objekti',
  'Type an object type name...' => 'Kirjoita objektityypin nimi...',
  '%s enabled this form.' => '%s otti tämän lomakkeen käyttöön.',
  'Edit Configurations' => 'Muokkaa konfiguraatioita',
  'Validation Errors' => 'Validointivirheet',
  'Browse Forms' => 'Selaa lomakkeita',
  'Using HTTP Parameters' => 'Käyttäen HTTP-parametreja',
  '%s removed mention from %s of %s.' => '%s poisti maininnan kohteesta %s/%s.',
  'Enable Form' => 'Ota lomake käyttöön',
  'Create Forms' => 'Luo lomakkeita',
  'Post as Comment' => 'Lähetä kommenttina',
  'Edit Configuration' => 'Muokkaa konfiguraatiota',
  'Query does not match any objects.' => 'Kysely ei vastaa mitään objektia.',
  '✘ Hidden' => '✘ Piilotettu',
  '%s rescinded a token.' => '%s perui merkin.',
  '%s awarded a token.' => '%s myönsi merkin.',
  '%s added a comment to %s.' => '%s lisäsi kommentin kohteeseen %s.',
  'Specify transaction PHID to show.' => 'Anna näytettävä tapahtuman PHID.',
  'Group ID' => 'Ryhmätunnus',
  'Post Comment' => 'Lähetä kommentti',
  '%s wrote:' => '%s kirjoitti:',
  'Show Group ID column (table only).' => 'Näytä ryhmätunnusten sarake (vain taulukoissa).',
  'EMAIL PREFERENCES' => 'SÄHKÖPOSTIASETUKSET',
  '%s removed mention from %s.' => '%s poisti maininnan kohteesta %s.',
  'Error: You (%s) are trying to make too many changes at once but lack permissions to do so. File a request on [[mw:Talk:Phabricator/Help]].' => 'Virhe: käyttäjätunnuksellasi (%s) yritetään tehdä liian monta muokkausta samanaikaisesti, mutta sinulla ei ole tähän tarvittavaa käyttöoikeutta. Tee pyyntö täällä: [[mw:Talk:Phabricator/Help]].',
  'Detailed view of a transaction.' => 'Tapahtuman tarkka näkymä.',
  'Show transaction history by a user' => 'Näytä käyttäjän tapahtumahistoria',
  '%s removed mention of %s.' => '%s poisti maininnan %s.',
  'Filter by transaction type' => 'Suodata tapahtumatyypin mukaisesti',
  'EDIT DETAILS' => 'MUOKKAA TIETOJA',
  'Has Comment?' => 'Onko siinä kommentteja?',
  '(Show Details)' => '(Näytä tiedot)',
  '%s removed mention of %s from %s.' => '%s poisti maininnan %s kohteesta %s.',
  'Transaction PHID to show.' => 'Näytettävä tapahtuman PHID.',
  'User "%s" was not found' => 'Käyttäjää %s ei löytynyt',
  'Object "%s" was not found' => 'Objektia %s ei löytynyt',
  'Find out what to do instead' => 'Katso, mitä voit tehdä sen sijaan',
  'Do you want to post your comment anyway?' => 'Haluatko silti julkaista kommenttisi?',
  '%s Action(s) Have No Effect' => array(
    'Toimenpiteellä ei ole vaikutusta',
    'Toimenpiteillä ei ole vaikutusta',
  ),
  'This comment was removed by %s.' => 'Tämä kommentti poistettiin käyttäjän %s toimesta.',
  '%s removed %s subscriber(s): %s.' => '%s poisti %s tilaaja(a): %s.',
);
  }

}
