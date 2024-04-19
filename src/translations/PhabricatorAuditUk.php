<?php

final class PhabricatorAuditUk
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'uk';
  }

  protected function getTranslations() {
    return array(
      'USERS' => 'КОРИСТУВАЧІ',
      'Updating "%s" (%s)...' => 'Оновлення «%s» (%s)…',
      'none' => 'жоден',
      'Synchronizing "%s": "%s" -> "%s".' => 'Синхронізація «%s»: «%s» -> «%s».',
    );
  }

}
