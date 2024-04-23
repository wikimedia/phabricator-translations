<?php

final class PhabricatorMacroEnGB
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en_GB';
  }

  protected function getTranslations() {
    return array(
      'Audio Behavior' => 'Audio Behaviour',
      'Save Audio Behavior' => 'Save Audio Behaviour',
      'The file you uploaded is invalid: it is not recognizable as a valid audio file.' => 'The file you uploaded is invalid: it is not recognisable as a valid audio file.',
    );
  }

}
