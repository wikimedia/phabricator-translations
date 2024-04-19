<?php

final class PhabricatorSlowvoteIt
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'it';
  }

  protected function getTranslations() {
    return array(
      'In this poll, you may only vote for one option.' => 'In questo sondaggio, puoi votare solo per un\'opzione.',
    );
  }

}
