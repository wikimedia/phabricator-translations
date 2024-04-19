<?php

final class PhabricatorChatlogSl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sl';
  }

  protected function getTranslations() {
    return array(
      '(Deprecated)' => '(Opuščeno)',
      'Jump' => 'Skoči',
      'Retrieve chatter.' => 'Pridobi klepet.',
      'Newer' => 'Novejši',
      'Jump to Bottom' => 'Skoči na dno',
      'Older' => 'Starejši',
      'ChatLog' => 'Dnevnik klepeta',
      'Channel List' => 'Seznam kanalov',
      'Hide Dates' => 'Skrij datume',
      'Channel Log' => 'Dnevnik kanala',
      'Search Dates' => 'Poišči datume',
      'Newest' => 'Novejši',
      'Record chatter.' => 'Snemanje klepeta.',
    );
  }

}
