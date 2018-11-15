<?php

final class PhabricatorFavoritesRu
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ru';
  }

  protected function getTranslations() {
    return array(
      'Edit Favorites' => 'Редактировать Избранное',
      'Favorite Items' => 'Избранные элементы',
    );
  }

}
