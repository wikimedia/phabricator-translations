<?php

final class PhabricatorFavoritesZhHans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hans';
  }

  protected function getTranslations() {
    return array(
      'Edit Favorites' => '编辑收藏夹',
      'Favorite Items' => '兴趣项目',
    );
  }

}
