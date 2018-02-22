<?php

final class PhabricatorFlagZhHant
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hant';
  }

  protected function getTranslations() {
    return array(
      'Marked with "%s" flag.' => '標記為"%s"旗標。',
      'Personal Bookmarks' => '個人書籤',
      'Clear a flag.' => '清除旗標。',
      'Purple' => '紫色',
      'Mark with %s flag.' => '標記為"%s"旗標。',
      'Flags are private. Only you can view or edit your flags.' => '此旗標設為私人。只有您自己可以查看或編輯您的旗標。',
      'Flag For Later' => '稍後標記',
      'You are not the creator of this flag.' => '您並非此旗標的建立者。',
      'Flag %s' => '%s旗標',
      'Create or modify a flag.' => '建立或修改旗標。',
      'Create Flag' => '建立旗標',
      'Remove %s Flag' => '移除%s旗標。',
      'All Object Types' => '所有的物件種類',
      'Already Marked' => '已經標記',
      'Flag Color' => '旗標顏色',
    );
  }

}
