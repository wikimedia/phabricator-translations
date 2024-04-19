<?php

final class PhabricatorFavoritesFi
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fi';
  }

  protected function getTranslations() {
    return array(
      'Edit Favorites' => 'Muokkaa suosikkeja',
      'Favorite Items' => 'Suosikkikohteet',
    );
  }

}
