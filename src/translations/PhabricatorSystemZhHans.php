<?php

final class PhabricatorSystemZhHans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hans';
  }

  protected function getTranslations() {
    return array(
      'No Writable Database' => '没有可写数据库',
      'Destroying %s **%s**...
    ' => '正在毁坏%s **%s**...',
      'No Encoding Support' => '没有编码支持',
      'No such object "%s" exists!' => '不存在对象“%s”！',
      '%d / hour' => '%s/小时',
      'Highlighting' => '高亮中',
      'IMPORTANT' => '重要',
      'Quite Unsettling' => '相当混乱',
      'This likely indicates a severe misconfiguration or major service interruption.' => '这很可能表明严重的配置错误，或主要服务中断。',
      'Destroying objects...' => '正在毁坏对象...',
      'This mode is active because no database has a "%s" role in the configuration option "%s".' => '此模式已激活，因为在配置选项“%2$s”中没有数据库有“%1$s”角色。',
      'Select Character Encoding' => '选择字符编码',
      'Select Syntax Highlighting' => '选择语法高亮',
      'DATA WILL BE PERMANENTLY DESTROYED' => '数据将会永久毁坏',
      'Choose Highlighting' => '选择高亮',
      'Aborted, your objects are safe.' => '已中止，您的对象是安全的。',
      'System' => '系统',
      'DELETING OBJECTS OFTEN BREAKS THINGS' => '正在删除经常破坏事情的对象',
      '%d / minute' => '%s/分钟',
      'The maximum allowed rate for this action is %s. You are taking actions at a rate of %s.' => '此操作的最大允许速率为%s。您正在以%s速率进行操作。',
      '%d / second' => '%s/秒',
    );
  }

}
