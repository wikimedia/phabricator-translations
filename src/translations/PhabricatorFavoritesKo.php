<?php

final class PhabricatorFavoritesKo
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko';
  }

  protected function getTranslations() {
    return array(
      'Edit Favorites' => '즐겨찾기 편집',
      'Favorite Items' => '즐겨찾기 항목',
    );
  }

}
