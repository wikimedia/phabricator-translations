<?php

final class PhabricatorRemarkupDiq
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'diq';
  }

  protected function getTranslations() {
    return array(
      'Invalid markup engine.' => 'Nêraverde motorê biçımkerdışi',
      'Process text through remarkup.' => 'Zey Phabricatoriraya vatışiya metini karfinê.',
      'Content may not be empty.' => 'Zerrek veng nêbeno.',
    );
  }

}
