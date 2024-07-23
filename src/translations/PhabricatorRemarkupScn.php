<?php

final class PhabricatorRemarkupScn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'scn';
  }

  protected function getTranslations() {
    return array(
      'Invalid markup engine.' => 'Muturi di markup nun vàliddu.',
      'Content may not be empty.' => 'Lu cuntinutu nun pò èssiri vacanti.',
    );
  }

}
