<?php

final class PhabricatorFavoritesHu
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'hu';
  }

  protected function getTranslations() {
    return array(
      'Edit Favorites' => 'Kedvencek szerkesztése',
      'Favorite Items' => 'Kedvenc elemek',
    );
  }

}
