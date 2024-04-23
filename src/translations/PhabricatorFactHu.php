<?php

final class PhabricatorFactHu
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'hu';
  }

  protected function getTranslations() {
    return array(
      'Analyze from the beginning, ignoring cursors.' => 'Elemezze az elejétől, figyelmen kívül hagyva a kurzorokat.',
      'Iterator \'%s\' does not exist.' => 'Iterátor \'%s\' nem létezik.',
      'Facts' => 'tények',
      'Skip analysis of aggregate facts.' => 'Az aggregált tények elemzéseinek kihagyása.',
    );
  }

}
