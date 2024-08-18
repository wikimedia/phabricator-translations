<?php

final class PhabricatorFavoritesNl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'nl';
  }

  protected function getTranslations() {
    return array(
      'Edit Favorites' => 'Favorieten bewerken',
      'Favorite Items' => 'Favoriete items',
    );
  }

}
