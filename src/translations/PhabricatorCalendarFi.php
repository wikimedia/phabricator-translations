<?php

final class PhabricatorCalendarFi
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fi';
  }

  protected function getTranslations() {
    return array(
      'ICS File' => 'ICS-tiedosto',
      'Exports' => 'Viennit',
      'Imported events can not be edited.' => 'Tuotuja tapahtumia ei voi muokata Phabricatorissa.',
      'Weekly' => 'Viikoittain',
      'Meeting' => 'Kokous',
      'Imported By' => 'Tuonut',
      'Edit Event' => 'Muokkaa tapahtumaa',
      'Import %d' => 'Tuo %s',
      'Cancelled Events' => 'Peruutetut tapahtumat',
      'Imported' => 'Tuotu',
      '.ics File' => '.ics tiedosto',
      '[Calendar]' => '[Kalenteri]',
      'Create Event' => 'Luo tapahtuma',
      'Busy' => 'Kiireinen',
      'Deleted Event' => 'Poistettu tapahtuma',
      'Month View' => 'Kuukausinäkymä',
      'Yearly' => 'Vuosittain',
      'Next Update' => 'Seuraava päivitys',
      '%s created this event.' => '%s loi tämän tapahtuman.',
      'All Events' => 'Kaikki tapahtumat',
      'Availability: %s' => 'Saatavuus: %s',
      'Create New Event' => 'Luo uusi tapahtuma',
      'Calendar User Guide' => 'Kalenterin käyttäjäopas',
      'Unknown Message' => 'Tuntematon viesti',
      'Holiday' => 'Loma',
      'Edit Only This Event' => 'Muokkaa vain tätä tapahtumaa',
      'Export as .ics' => 'Vie .ics-muodossa',
      'Orphan' => 'Orpo',
      'Accept' => 'Hyväksy',
      'Monthly' => 'Kuukausittain',
      'Source File' => 'Lähdetiedosto',
      '%s cancelled this event.' => '%s perui tämän tapahtuman.',
      'Join' => 'Liity',
      '%s - %s' => '%s - %s',
      'Imports' => 'Tuonnit',
      'Unknown Message "%s"' => 'Tuntematon viesti "%s"',
      'Imported Event' => 'Tuotu tapahtuma',
      'Export %d %s' => 'Vie %s %s',
    );
  }

}
