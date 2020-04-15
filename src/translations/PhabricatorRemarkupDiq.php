<?php

final class PhabricatorRemarkupDiq
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'diq';
  }

  protected function getTranslations() {
    return array(
      'Process text through remarkup in Phabricator context.' => 'Zey Phabricatoriraya vatışiya metini karfinê.',
      'Invalid markup engine.' => 'Nêraverde motorê biçımkerdışi',
      'Content may not be empty.' => 'Zerrek veng nêbeno.',
    );
  }

}
