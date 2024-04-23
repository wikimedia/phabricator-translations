<?php

final class PhabricatorDaemonNl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'nl';
  }

  protected function getTranslations() {
    return array(
      'Lock Logs' => 'Logboeken vergrendelen',
      'Held' => 'Vastgehouden',
      'Lock' => 'Vergrendelen',
    );
  }

}
