<?php

final class PhabricatorFavoritesTr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'tr';
  }

  protected function getTranslations() {
    return array(
      'Edit Favorites' => 'Favorileri Düzenle',
      'Favorite Items' => 'Favori Ögeler',
    );
  }

}
