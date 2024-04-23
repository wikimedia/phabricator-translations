<?php

final class PhabricatorLegalpadSl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sl';
  }

  protected function getTranslations() {
    return array(
      'That user does not exist.' => 'Ta uporabnik ne obstaja.',
      'Document Title.' => 'Naslov dokumenta.',
      'Contact Email' => 'E-pošta za stik',
      'Last Updated' => 'Zadnja posodobitev',
      'Contact Name' => 'Ime stika',
      'New document title.' => 'Nov naslov dokumenta.',
      'Already Signed' => 'Že podpisano',
    );
  }

}
