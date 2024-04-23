<?php

final class PhabricatorPholioZhHans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hans';
  }

  protected function getTranslations() {
    return array(
      'This mock will be closed.' => '此模拟将被关闭。',
      'This image will be removed from the mock.' => '此图片将从模拟中移除。',
      '%s replaced %s with %s.' => '%s将%s替换为%s。',
      'Edit Mock: %s' => '编辑模拟：%s',
      'Review Mocks and Design' => '复核模拟和设计',
      '%s added %d image(s): %s.' => '%s添加了%s个图片：%s。',
      'Close Mock' => '关闭模拟',
      '%s closed mock %s.' => '%s关闭了模拟%s。',
      'Open Mocks' => '开放模拟',
      '%s closed this mock.' => '%s关闭了此模拟。',
      '%s edited task(s) for %s, added %s: %s; removed %s: %s.' => '%s编辑了%s的任务，添加了%s个：%s；移除了%s个：%s。',
      '%s edited task(s), added %s: %s; removed %s: %s.' => '%s编辑了任务，添加了%s个：%s；移除了%s个：%s个。',
      'Edit Mock' => '编辑仿制',
    );
  }

}
