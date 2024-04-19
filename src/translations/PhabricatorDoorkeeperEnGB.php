<?php

final class PhabricatorDoorkeeperEnGB
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en_GB';
  }

  protected function getTranslations() {
    return array(
      'To enable synchronization into Asana, enter an Asana Workspace ID here.
    NOTE: This feature is new and experimental.' => 'To enable synchronisation into Asana, enter an Asana Workspace ID here.
    NOTE: This feature is new and experimental.',
      'Synchronization of child task from Asana failed!' => 'Synchronisation of child task from Asana failed!',
      'Synchronization of parent task from Asana failed!' => 'Synchronisation of parent task from Asana failed!',
    );
  }

}
