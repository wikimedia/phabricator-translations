<?php

final class PhabricatorDoorkeeperZhHans
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hans';
  }

  protected function getTranslations() {
    return array(
      'JIRA %s %s' => 'JIRA %s %s',
      'Workspace ID' => '工作空间ID',
      '⚠ DO NOT EDIT THIS TASK ⚠
    ☠ Your changes will not be reflected in %s.
    ☠ Your changes will be destroyed the next time state is synchronized.' => '⚠不要编辑此任务⚠
    ☠您的更改将不会反映在%s上。
    ☠您的更改将在下次同步状态时被破坏。',
    );
  }

}
