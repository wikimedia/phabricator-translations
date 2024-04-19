<?php

final class PhabricatorPhurlDeDE
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'de_DE';
  }

  protected function getTranslations() {
    return array(
      'URL' => 'URL',
      '[Phurl]' => '[Phurl]',
      'New URL.' => 'Neue URL.',
      'No URLs found.' => 'Keine URLs gefunden.',
      '%s changed the name of %s from %s to %s.' => '%s bennante %s von %s zu %s um.',
      'Edit URL: %s' => 'URL bearbeiten: %s',
      'Create New URL' => 'Neue URL erstellen',
    );
  }

}
