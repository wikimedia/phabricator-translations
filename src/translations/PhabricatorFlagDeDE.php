<?php

final class PhabricatorFlagDeDE
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'de_DE';
  }

  protected function getTranslations() {
    return array(
      'Flag For Later' => 'Für später markieren',
      'Flag %s' => '%s markieren',
      'Create Flag' => 'Markierung erstellen',
      'You can flag this %s if you want to remember to look at it later.' => 'Du kannst diesen %s makieren, um dir zu merken es später anzusehen.',
      'Remove %s Flag' => 'Markierung %s entfernen',
    );
  }

}
