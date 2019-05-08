<?php

final class PhabricatorFavoritesNb
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'nb';
  }

  protected function getTranslations() {
    return array(
      'Edit Favorites' => 'Rediger favoritter',
      'Favorite Items' => 'Favorittelementer',
      'Favorites Menu' => 'Favorittmeny',
    );
  }

}
