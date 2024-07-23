<?php

final class PhabricatoravaCoreNl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'nl';
  }

  protected function getTranslations() {
    return array(
      'Vandalism detected' => 'Vandalisme gedetecteerd',
      'No vandalism detected.' => 'Geen vandalisme gedetecteerd.',
    );
  }

}
