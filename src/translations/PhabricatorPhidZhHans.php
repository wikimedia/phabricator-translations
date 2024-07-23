<?php

final class PhabricatorPhidZhHans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hans';
  }

  protected function getTranslations() {
    return array(
      'Retrieve information about an arbitrary PHID.' => '检索有关任意PHID的信息。',
      'Requested handle "%s" was not loaded.' => '请求的处理“%s”并未加载。',
      'Restricted %s' => '受限制的%s',
      'Trying to mutate a %s, but this is not permitted; handle lists are immutable.' => '尝试改变%s，但这并不允许；处理列表不可变。',
      '%s class "%s" has an invalid %s property. PHID constants must be a four character uppercase string.' => '%s类的“%s”有无效的%s属性。PHID常量必须是由四个大写字母组成的字符串。',
      'Attempting to load PHID "%s", but it was not requested by any handle list.' => '试图加载PHID“%s”，但没有任何处理列表请求它。',
      'The objects you have listed include objects of the wrong type (%s).' => '您列出的对象中有一些包含了错误的类型（%s）。',
      'Application Email' => '应用电子邮件',
      'Look up objects by name.' => '按名称查找对象。',
      'Trying to render a handle which does not exist!' => '试图渲染一个不存在的句柄！',
      'Retrieve information about arbitrary PHIDs.' => '检索有关任意PHID的信息。',
      'Unknown Object (%s)' => '未知对象（%s）',
      'The objects you have listed include objects which do not exist (%s).' => '您列举的对象包含不存在的对象（%s）。',
      'Trying to create a new sublist of an existing handle list, but PHID "%s" does not appear in the parent list.' => '试图创建现有句柄列表的新的子列表，但PHID“%s”并未在父表中出现。',
      'Replaced by \'phid.query\'.' => '已替换为“phid.query”。',
      'The objects you have listed include objects of the wrong type (%s) and objects which do not exist (%s).' => '您列出的对象中有些对象的类型有误（%s），有些对象不存在（%s）。',
      'No such object exists.' => '不存在这种对象。',
      'Can not generate PHID with no type.' => '不能生成没有类型的PHID。',
    );
  }

}
