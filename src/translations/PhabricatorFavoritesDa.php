<?php

final class PhabricatorFavoritesDa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'da';
  }

  protected function getTranslations() {
    return array(
      'Edit Favorites' => 'Rediger favoritter',
      'Favorite Items' => 'Favoritelementer',
    );
  }

}
