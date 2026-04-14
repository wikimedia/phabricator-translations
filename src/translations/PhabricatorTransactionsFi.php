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
  'Warnings' => 'Varoitukset',
  'Take Action' => 'Ryhdy toimiin',
  'Form Disabled' => 'Lomake poistettu käytöstä',
  'Recipient Removed' => 'Vastaanottaja poistettu',
  'Primary Fields' => 'Ensisijaiset kentät',
  'Export format.' => 'Vie muoto.',
  '🔒 Locked' => '🔒 Lukittu',
  'New Object' => 'Uusi objekti',
  'Type an object type name...' => 'Kirjoita objektityypin nimi...',
  '%s enabled this form.' => '%s otti tämän lomakkeen käyttöön.',
  'Edit Configurations' => 'Muokkaa konfiguraatioita',
  'Validation Errors' => 'Validointivirheet',
  'Browse Forms' => 'Selaa lomakkeita',
  'Using HTTP Parameters' => 'Käyttäen HTTP-parametreja',
  'Enable Form' => 'Ota lomake käyttöön',
  'Create Forms' => 'Luo lomakkeita',
  'Post as Comment' => 'Lähetä kommenttina',
  'Edit Configuration' => 'Muokkaa konfiguraatiota',
  'Query does not match any objects.' => 'Kysely ei vastaa mitään objektia.',
  '✘ Hidden' => '✘ Piilotettu',
  '%s rescinded a token.' => '%s perui merkin.',
  '%s awarded a token.' => '%s myönsi merkin.',
  '%s added a comment to %s.' => '%s lisäsi kommentin kohteeseen %s.',
  'Post Comment' => 'Lähetä kommentti',
  '%s wrote:' => '%s kirjoitti:',
  'EMAIL PREFERENCES' => 'SÄHKÖPOSTIASETUKSET',
  'EDIT DETAILS' => 'MUOKKAA TIETOJA',
  '(Show Details)' => '(Näytä tiedot)',
  'Do you want to post your comment anyway?' => 'Haluatko silti julkaista kommenttisi?',
  'This comment was removed by %s.' => 'Tämä kommentti poistettiin käyttäjän %s toimesta.',
  '%s removed %s subscriber(s): %s.' => '%s poisti %s tilaaja(a): %s.',
);
  }

}
