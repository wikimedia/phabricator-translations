<?php

final class PhabricatorFlagZhHans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hans';
  }

  protected function getTranslations() {
    return array(
      'Marked with "%s" flag.' => '已标记为“%s”。',
      'Personal Bookmarks' => '个人书签',
      'Query flag markers.' => '查询标记。',
      'Clear a flag.' => '清空标记。',
      'Purple' => '紫色',
      'Unknown groupBy parameter: %s' => '未知分组依据参数：%s',
      'Mark with %s flag.' => '标记为%s。',
      'Flags are private. Only you can view or edit your flags.' => '标记是私有的。只有您可以查看或编辑您的标记。',
      'Must pass an id or an objectPHID.' => '必须通过一个id或对象PHID。',
      'Already marked with %s flag.' => '已标记为%s。',
      'Flag For Later' => '标记用于日后',
      'You are not the creator of this flag.' => '您不是此标记的创建者。',
      'Flag %s' => '标记%s',
      'Create or modify a flag.' => '创建或修改标记。',
      'Create Flag' => '创建标记',
      'You can flag this %s if you want to remember to look at it later.' => '如果您希望记住以便日后查看，您可以标记此%s。',
      'No flags found.' => '找不到标记。',
      'Bad flag ID.' => '错误的标记ID。',
      'Remove %s Flag' => '移除%s标记',
      'All Object Types' => '所有对象类型',
      'Already Marked' => '已经标记',
      'Flag Color' => '标记颜色',
      'Mark with flag' => '进行标记',
      'Flagged' => '已标记',
    );
  }

}
