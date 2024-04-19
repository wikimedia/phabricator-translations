<?php

final class PhabricatorHarbormasterZhHans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hans';
  }

  protected function getTranslations() {
    return array(
      'Build Artifact' => '构建人工制品',
      'Plan %d %s' => '计划%s %s',
      'Waiting for Message' => '正在等待消息',
      'Updating build %d of buildable %s...' => '正在更新可构建%2$s的构造%1$s...',
      'TEST RESULT' => '测试结果',
      'Browse Dependencies' => '浏览依赖性',
      'Unable to Pause Build' => '无法暂停构造',
      'Started at %s' => '在%s开始',
      'Valid Output' => '有效输出',
      'For example:' => '例如：',
      'OK: Ignored event.' => '好的：已忽略活动。',
      'Run %d' => '运行%s',
      'Done. Total byte size of affected logs: %s -> %s.' => '完成。受影响日志的总字节大小：%s -> %s。',
      'Object ("%s") claims "%s" is a GitHub repository URI, but the domain does not appear to be GitHub.' => '对象（“%s”）主张“%s”是GitHub存储库URI，但域名似乎不是GitHub的域名。',
      '(null)' => '（空）',
    );
  }

}
