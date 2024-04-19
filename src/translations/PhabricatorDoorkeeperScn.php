<?php

final class PhabricatorDoorkeeperScn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'scn';
  }

  protected function getTranslations() {
    return array(
      'JIRA %s %s' => 'JIRA %s %s',
      'Workspace ID' => 'ID dû spazziu di travagghiu',
      'JIRA %s' => 'JIRA %s',
      'GitHub User %s' => 'Utenti GitHub %s',
      'Workspace Name' => 'Nomu dû spazziu di travagghiu',
    );
  }

}
