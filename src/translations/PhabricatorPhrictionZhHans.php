<?php

final class PhabricatorPhrictionZhHans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hans';
  }

  protected function getTranslations() {
    return array(
      'The path to the document.' => '文档的路径。',
      'No such document.' => '没有这个文档。',
      'Edit Older Version %s...' => '编辑旧版本%s…',
      'DOCUMENT DIFF' => '文档差异',
      'A moved document can not be moved again.' => '已移动的文档不能再次移动。',
      'Next Change »' => '下一步更改»',
      'Last Edited' => '最后更新',
      'Publish Draft' => '发布草稿',
      'Moved' => '已移动',
      'EDIT NOTES' => '编辑注释',
      'Stub' => '小作品',
      'Content version.' => '当前版本。',
      'Parent Paths' => '父调用',
    );
  }

}
