<?php

final class PhabricatorPeopleZhHans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hans';
  }

  protected function getTranslations() {
    return array(
      'Blurb' => '宣传',
      'Filter IP' => '过滤IP',
      'You are creating a new **standard** user account.' => '您正在创建新的**标准**用户账户。',
      'Disable User?' => '禁用用户？',
      'Manage User' => '管理用户',
      'Delete User' => '删除用户',
      'Email: Add Address' => '电子邮件：添加地址',
      'User account "%s" is already approved. You can only approve accounts that are not yet approved.' => '用户账号“%s”已被认证，你现在可以认证其他未被认证的账户了。',
      'Stores the real name of the user, like "Abraham Lincoln".' => '存储用户的真实姓名，例如“亚伯拉罕·林肯”。',
      'Invite Users' => '邀请用户',
      'Approves a user.' => '认证一名用户。',
      'MediaWiki username.' => 'MediaWiki用户名。',
      'Musician' => '音乐家',
      'Relationships' => '关系',
      'Email is already primary!' => '电子邮件已为首选！',
      'The user\'s real name.' => '用户的真实姓名。',
      'Not a Normal User' => '不是一般用户',
      'Roles' => '角色',
      'Approved user account "%s".' => '已认证用户账号“%s"',
      'Edit Profile Picture' => '编辑个人图片',
      'Save Profile' => '保存资料',
      'Edit Profile: %s' => '编辑个人资料：%s',
      'Log Out %s' => '注销%s',
    );
  }

}
