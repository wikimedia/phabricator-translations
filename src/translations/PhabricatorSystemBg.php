<?php

final class PhabricatorSystemBg
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'bg';
  }

  protected function getTranslations() {
    return array(
      'Choose a syntax highlighting to use.' => 'Изберете оцветяването на синтаксиса, което искате да използвате.',
      'Select Syntax Highlighting' => 'Избор на оцветяване на синтаксиса',
    );
  }

}
