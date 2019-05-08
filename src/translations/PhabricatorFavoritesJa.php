<?php

final class PhabricatorFavoritesJa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ja';
  }

  protected function getTranslations() {
    return array(
      'Edit Favorites' => 'お気に入りを編集',
      'Favorite Items' => 'お気に入りのアイテム',
      'Favorites Menu' => 'お気に入りメニュー',
    );
  }

}
