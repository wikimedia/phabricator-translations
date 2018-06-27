<?php

final class PhabricatorFavoritesCs
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'cs';
  }

  protected function getTranslations() {
    return array(
      'Edit Favorites' => 'Editovat oblíbené',
      'Favorite Items' => 'Oblíbené položky',
    );
  }

}
