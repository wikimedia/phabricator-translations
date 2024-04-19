<?php

final class PhabricatorConpherenceZhHans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hans';
  }

  protected function getTranslations() {
    return array(
      '%s edited participant(s), added %d: %s; removed %d: %s.' => '%s编辑了参与者，添加了%s：%s；移除了%s：%s。',
      'Show Newer Messages' => '显示新消息',
      'Room name.' => '房间名称。',
      'Leave Room' => '离开房间',
      'Initial Participants' => '最初参与者',
      'You must choose a file when uploading a new room picture.' => '当您上传新房间图片时，您必须选择一个文件。',
      '%s set the room topic to %s.' => '%s将房间话题设置为%s。',
      'Conpherence Threads' => 'Conpherence讨论串',
      'Room does not exist or logged in user can not see it.' => '房间不存在，或登录用户不能查看它。',
      'Ting' => 'Ting',
      'Rooms' => '房间',
      'Edit Room' => '编辑房间',
      'EMAIL PREFERENCES FOR THIS ROOM' => '此房间的电子邮件参数设置',
      'Search Rooms' => '搜索房间',
      'Messages: %d' => '消息：%s',
      'Configure Conpherence Forms' => '配置Conpherence格式',
      'CONPHERENCE DETAIL' => 'CONPHERENCE详情',
    );
  }

}
