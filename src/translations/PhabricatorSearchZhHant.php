<?php

final class PhabricatorSearchZhHant
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hant';
  }

  protected function getTranslations() {
    return array(
      'Search Engines' => '搜尋引擎',
      'Full-Text Search' => '全文搜尋',
      'NOTE' => '注意',
      'Fulltext Search' => '全文搜尋',
      'Searched For:' => '搜尋：',
    );
  }

}
