<?php

final class PhabricatorFavoritesId
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'id';
  }

  protected function getTranslations() {
    return array(
      'Edit Favorites' => 'Sunting Favorit',
      'Favorite Items' => 'Butir Favorit',
    );
  }

}
