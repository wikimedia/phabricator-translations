<?php

final class PhabricatorFavoritesCsCS
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'cs_CS';
  }

  protected function getTranslations() {
    return array(
      'Edit Favorites' => 'Editovat oblíbené',
      'Favorite Items' => 'Oblíbené položky',
    );
  }

}
