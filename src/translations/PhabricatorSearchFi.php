<?php

final class PhabricatorSearchFi
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fi';
  }

  protected function getTranslations() {
    return array(
  'No results.' => 'Ei tuloksia.',
  'Search Engines' => 'Hakumoottorit',
  'N/A' => '–',
  'Add to Dashboard' => 'Lisää kojelautaan',
  'Query: %s' => 'Kysely: %s',
  '—' => '—',
  'Queries' => 'Kyselyt',
  'Profile Menu' => 'Profiilivalikko',
  'Menu Items' => 'Valikkokohteet',
  'Hide Query' => 'Piilota kysely',
  'Delete Query' => 'Poista kysely',
  'Current Menu Items' => 'Nykyiset valikkokohteet',
  'Full Name' => 'Koko nimi',
  'No Content' => 'Ei sisältöä',
  '"2022-12-25" or "7 days ago"...' => '"2022-12-25" tai "7 päivää sitten"...',
  'Project Menu' => 'Projektivalikko',
  'Archived Dashboard' => 'Arkistoitu kojelauta',
  'Save Query' => 'Tallenna kysely',
  'SELECT' => 'VALITSE',
  'Error: You (%s) are trying to make too many changes at once (%s changes of type "%s") but lack permissions to do so. File a request on [[mw:Talk:Phabricator/Help]].' => 'Virhe: käyttäjätunnuksellasi (%s) yritetään tehdä liian monta muokkausta samanaikaisesti (%s muutosta, joiden tyyppi on tyypin %s), mutta sinulla ei ole tähän tarvittavaa käyttöoikeutta. Tee pyyntö täällä: [[mw:Talk:Phabricator/Help]].',
  'This menu currently has no items.' => 'Tässä valikossa ei ole kohteita tällä hetkellä.',
  'Saved Queries' => 'Tallennetut kyselyt',
  'Current Mentions' => 'Nykyiset maininnat',
  'Created By Me' => 'Minun luoma',
  'Order By' => 'Järjestä:',
  'Edit Query' => 'Muokkaa kyselyä',
  'This dashboard has been archived.' => 'Tämä kojelauta on arkistoitu.',
);
  }

}
