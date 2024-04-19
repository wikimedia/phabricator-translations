<?php

final class PhabricatorMacroZhHans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hans';
  }

  protected function getTranslations() {
    return array(
      'Create Meme' => '创建表情包',
      'Active Macros' => '活动宏',
      'Upload New Audio' => '上传新音频',
      'MACRO DETAIL' => '宏的详情',
      'Macro Image' => '宏图像',
      'Image File' => '图像文件',
      'Name of the macro.' => '宏名称。',
      'Create a Macro' => '创建宏',
    );
  }

}
