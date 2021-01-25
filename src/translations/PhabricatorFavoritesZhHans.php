<?php

final class PhabricatorFavoritesZhHans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hans';
  }

  protected function getTranslations() {
    return array(
      'Edit Favorites' => '编辑收藏',
      'Favorite Items' => '收藏条目',
    );
  }

}
