<?php

final class PhabricatorCalendarSl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sl';
  }

  protected function getTranslations() {
    return array(
      'Import Disabled' => 'Uvoz onemogočen',
      'Exports' => 'Izvozi',
      'Cancel this event?' => 'Prekličem dogodek?',
      'Imported Events' => 'Uvoženi dogodki',
      'Imported By' => 'Uvoznik',
      'Cancel the event.' => 'Prekliči dogodek.',
      'Started background processing.' => 'V ozadju se je začela obdelava.',
      'Would you like to decline this event?' => 'Ali želite odkloniti ta dogodek?',
      'Imported' => 'Uvoženo',
      'No imported events.' => 'Ni uvoženih dogodkov.',
      'Decline Event' => 'Odkloni dogodek',
      'Create New Export' => 'Ustvari nov izvoz',
      'Can Not Edit Imported Event' => 'Uvožene dogodka ni mogoče urejati',
      'One-Time Event' => 'Enkratni dogodek',
      '%s imported an ICS file.' => '%s je bilo uvoženo kot datoteka ICS.',
      'True to delete imported events.' => '»Res« za izbris uvoženih dogodkov.',
      'New export query key.' => 'Nov ključ zahtevka za izvoz.',
      'Edit this event and all events in the series which occur on or after %s. This will overwrite previous edits!' => 'Uredi ta dogodek in vse dogodke v nizu, ki se zgodijo %s ali pozneje. To bo prepisalo prejšnje spremembe!',
      'Create New Event' => 'Ustvari nov dogodek',
      'Found unexpected "END" without a "BEGIN".' => 'Najden nepričakovan »END« brez »BEGIN«.',
      'No Events Imported' => 'Ni uvoženih dogodkov',
      'Invalid iteration interval ("%d"), must be at least 1.' => 'Neveljaven interval iteracije (»%s«), biti mora vsaj 1.',
      'Cancel Event' => 'Prekliči dogodek',
      'EVENT DESCRIPTION' => 'OPIS DOGODKA',
      'True to cancel the event.' => 'Res je za preklic dogodka.',
      'Cancel Only This Event' => 'Prekliči samo ta dogodek',
      'Delete Imported Events' => 'Izbriši uvožene dogodke',
      'No Imported Events' => 'Ni uvoženih dogodkov',
      'Decline' => 'Odkloni',
      'Unnamed Imported Event' => 'Nepoimenovani uvoženi dogodek',
      'Cancel or restore the event.' => 'Prekličite ali obnovite dogodek.',
      'Log Messages' => 'Sporočila dnevnika',
      'Imported Event' => 'Uvoženi dogodek',
      'List View' => 'Pogled seznama',
    );
  }

}
