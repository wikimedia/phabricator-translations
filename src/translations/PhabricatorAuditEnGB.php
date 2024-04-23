<?php

final class PhabricatorAuditEnGB
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en_GB';
  }

  protected function getTranslations() {
    return array(
      'No synchronization changes for "%s".' => 'No synchronisation changes for "%s".',
      'Failed to load commit during transaction finalization!' => 'Failed to load commit during transaction finalisation!',
      'Synchronizing "%s": "%s" -> "%s".' => 'Synchronising "%s": "%s" -> "%s".',
    );
  }

}
