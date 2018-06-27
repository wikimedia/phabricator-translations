<?php

final class PhabricatorFavoritesFr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr';
  }

  protected function getTranslations() {
    return array(
      'Edit Favorites' => 'Modifier les favoris',
      'Favorite Items' => 'Eléments favoris',
    );
  }

}
