<?php

final class PhabricatorDoorkeeperFi
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fi';
  }

  protected function getTranslations() {
    return array(
      'Workspace ID' => 'Työtilan tunnus',
      'External Object' => 'Ulkoinen objekti',
      'GitHub User %s' => 'GitHub-käyttäjä %s',
      'This software is running in silent mode.' => 'Phabricator toimii hiljaisessa tilassa.',
    );
  }

}
