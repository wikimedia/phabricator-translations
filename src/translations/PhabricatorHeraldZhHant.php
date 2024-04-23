<?php

final class PhabricatorHeraldZhHant
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hant';
  }

  protected function getTranslations() {
    return array(
      'Added Comment' => '已添加評論',
      'Comment content' => '評論內容',
      'Add comment: %s' => '添加評論：%s',
      'Added a comment: %s' => '已添加評論：%s',
    );
  }

}
