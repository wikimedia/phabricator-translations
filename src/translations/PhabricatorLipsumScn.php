<?php

final class PhabricatorLipsumScn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'scn';
  }

  protected function getTranslations() {
    return array(
      'LIPSUM' => 'LIPSUM',
      'OOPS' => 'OPS',
    );
  }

}
