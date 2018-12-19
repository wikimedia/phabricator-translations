<?php

final class PhabricatorFavoritesPl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'pl';
  }

  protected function getTranslations() {
    return array(
      'Edit Favorites' => 'Edytuj ulubione',
      'Favorite Items' => 'Ulubione elementy',
    );
  }

}
