<?php

final class PhabricatorFilesZhHans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hans';
  }

  protected function getTranslations() {
    return array(
      'Dust Detector' => '灰尘检测器',
      'bell' => '铃声',
      'New alt text.' => '新的替换文本',
      'NONE' => '无',
      '%s removed the alternate text for this file (was %s).' => '%s已被从该文件中移除（曾为%s）',
      'ERROR' => '错误',
      'Supported' => '受支持',
      'Mechanical' => '机械性',
      'Failures!' => '失败！',
      'Preview (220px)' => '预览（220px）',
      '%s removed the alternate text for %s (was %s).' => '%s已将为%s的备用文本移除（曾为%s）',
      'DANGEROUS' => '危险',
      'glass' => '类',
      'Alt Text' => '替代文本',
      'File Sources' => '文件来源',
      'No such file "%s"!' => '没有文件“%s”！',
      'Builtin ("%s")' => '内置（“%s”）',
      'globe' => '全球',
      'Refusing to assess image dimensions of chunked file.' => '拒绝评估分块文件的图像尺寸。',
      'Unable to parse this document as JSON: %s' => '未能将该文档作为JSON:%s来解析。',
      '%d×%d px' => '%s × %s 像素',
      'Default Alt Text' => '默认替代文本',
      'Not Applicable' => '不适用',
      'Custom Alt Text' => '自定义替代文本',
      'Download file %s (%s)?' => '下载文件%s （%s）吗？',
      '%s set the alternate text for %s to %s.' => '%s为%s给%s设置备用文本',
      '%s changed the alternate text for this file from %s to %s.' => '%s已将备用文本从%s更改为%s.',
      'Human-readable file description.' => '人类可读的文件描述。',
      'File alternate text must not be longer than %s character(s).' => '备用文本文件必须不超过%s字。',
      '%s set the alternate text for this file to %s.' => '%s为%s给该文件设置备用文本',
      'Set the file alt text.' => '将文本设置为备用文件。',
      'language' => '语言',
      'Select a specific storage key to cycle to.' => '选择比容量关键词以进行循环。',
      '%s changed the alternate text for %s from %s to %s.' => '%s已将%s的备用文本从%s更改为%s。',
      'No document engine can render the contents of this file.' => '无文档引擎可呈现该文件的内容。',
      'No content engine can render this document.' => '没有文档引擎可以呈现该文件的内容。',
      'Failed to "json_decode(...)" JSON document after successfully decoding it with "phutil_json_decode(...).' => '"json_decode(...)"失败，JSON 文档之后成功通过 "phutil_json_decode(...)解码。',
    );
  }

}