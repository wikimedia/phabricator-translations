<?php

final class PhabricatorDrydockZhHans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hans';
  }

  protected function getTranslations() {
    return array(
      'All Operations' => '所有操作',
      'Repository Operation %d' => '存储库操作%s',
      'Failed to acquire slot locks: %s.' => '无法获得位置锁定：%s。',
      'Show Details' => '显示详情',
      'Type a lease ID (exact match)...' => '输入租约ID（精确匹配）',
    );
  }

}
