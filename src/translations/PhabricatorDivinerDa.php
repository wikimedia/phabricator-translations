<?php

final class PhabricatorDivinerDa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'da';
  }

  protected function getTranslations() {
    return array(
      'Article has no %s!' => 'Artiklen har nummeret %s!',
      'Type a book name...' => 'Indtast et bognavn...',
      'Deleting %s document(s).' => 'Sletter %s dokument(er).',
      'Article' => 'Artikel',
      'Books' => 'Bøger',
      'No books found.' => 'Ingen bøger fundet.',
      'Edit Book' => 'Rediger bog',
      'Find' => 'Find',
      'Other Methods' => 'Andre metoder',
      'Book' => 'Bog',
      'Browse Books' => 'Gennemse bøger',
    );
  }

}
