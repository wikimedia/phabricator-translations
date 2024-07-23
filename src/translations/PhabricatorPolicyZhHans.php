<?php

final class PhabricatorPolicyZhHans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hans';
  }

  protected function getTranslations() {
    return array(
      'Access Denied: %s' => '访问被拒绝：%s',
      'Space:' => '空间：',
      'Note:' => '注意：',
      'All Users' => '所有用户',
      'You do not have permission to view this object.' => '你无权查看该项目。',
      'Spaces Documentation' => '空间文档',
      'This object has a custom policy controlling who can take this action.' => '此对象有一个自定义方针来控制可以进行此操作的人。',
      'New space PHID.' => '新空间PHID。',
    );
  }

}
