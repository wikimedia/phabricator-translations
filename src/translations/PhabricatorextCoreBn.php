<?php

final class PhabricatorextCoreBn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'bn';
  }

  protected function getTranslations() {
    return array(
      'MediaWiki' => 'মিডিয়াউইকি',
      'Invalid' => 'অবৈধ',
      'Required' => 'বাধ্যতামূলক',
      'Gerrit' => 'গেরিট',
      'Comments' => 'মন্তব্যসমূহ',
    );
  }

}