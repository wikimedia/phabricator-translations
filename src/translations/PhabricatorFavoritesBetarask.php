<?php

final class PhabricatorFavoritesBetarask
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'betarask';
  }

  protected function getTranslations() {
    return array(
      'Edit Favorites' => 'Рэдагаваць абранае',
      'Favorite Items' => 'Абраныя элемэнты',
    );
  }

}
