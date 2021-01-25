<?php

final class PhabricatorFavoritesAr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ar';
  }

  protected function getTranslations() {
    return array(
      'Edit Favorites' => 'عدل المفضلات',
      'Favorite Items' => 'العناصر المفضلة',
    );
  }

}
