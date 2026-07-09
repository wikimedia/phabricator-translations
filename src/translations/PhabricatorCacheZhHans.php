<?php

final class PhabricatorCacheZhHans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hans';
  }

  protected function getTranslations() {
    return array(
  '%s is not available; unable to read deflated data!' => '%s不可用；无法阅读取消标记的数据！',
  'APCu' => 'APCu',
  'APCu Disabled' => 'APC/APCu已禁用',
  'General Cache (TTL)' => '通用缓存（TTL）',
  'Purge all caches.' => '刷新所有缓存。',
  'OPcache Disabled' => 'OPcache已禁用',
  'OPcache Config' => 'OPcache配置',
  'OPcache' => 'OPcache',
  'Purging "%s" cache...' => '正在刷新“%s”缓存...',
  'Zend OPcache' => 'Zend OPcache',
);
  }

}
