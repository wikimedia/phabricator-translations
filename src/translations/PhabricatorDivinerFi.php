<?php

final class PhabricatorDivinerFi
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fi';
  }

  protected function getTranslations() {
    return array(
      'Deleting %s document(s).' => 'Poistetaan %s dokumentti(a).',
      'Creating %s document(s).' => 'Luodaan %s dokumentti(a).',
      'Books' => 'Kirjat',
      'No books found.' => 'Kirjoja ei löytynyt.',
      'Edit Book' => 'Muokkaa kirjaa',
    );
  }

}
