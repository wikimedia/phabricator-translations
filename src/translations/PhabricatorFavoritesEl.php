<?php

final class PhabricatorFavoritesEl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'el';
  }

  protected function getTranslations() {
    return array(
      'Edit Favorites' => 'Επεξεργασία αγαπημένων',
      'Favorite Items' => 'Αγαπημένα αντικείμενα',
    );
  }

}
