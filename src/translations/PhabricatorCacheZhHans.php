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
      '"%s" Disabled' => '“%s”已禁用',
      '"%s" Enabled in Production' => '“%s”已在产品中启用',
      'APC' => 'APC',
      'General Cache (TTL)' => '通用缓存（TTL）',
      '"%s" Enabled' => '“%s”已启用',
      'Purge all caches.' => '刷新所有缓存。',
      'OPcache Disabled' => 'OPcache已禁用',
      'APC/APCu Disabled' => 'APC/APCu已禁用',
      'APC User Cache' => 'APC用户缓存',
      'OPcache Config' => 'OPcache配置',
      'OPcache' => 'OPcache',
      'Purging "%s" cache...' => '正在刷新“%s”缓存...',
      'Zend OPcache' => 'Zend OPcache',
    );
  }

}
