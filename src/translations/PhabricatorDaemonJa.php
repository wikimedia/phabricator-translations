<?php

final class PhabricatorDaemonJa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ja';
  }

  protected function getTranslations() {
    return array(
      'Archived Tasks' => 'アーカイブ済みのタスク',
      'Task %d' => 'タスク %s',
    );
  }

}
