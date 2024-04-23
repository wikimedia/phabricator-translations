<?php

final class PhabricatorAuditDiq
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'diq';
  }

  protected function getTranslations() {
    return array(
      'A commit is created.' => 'Yew taahut vıraziya',
      'USERS' => 'KARBERİ',
      'All Commits' => 'Taahuti pêro',
      'Identifiers' => 'Şınasnayoğ',
      'none' => 'çıniyo',
      'Ancestors Of' => 'Kalıkê',
      '%s committed %s.' => '%s %s taahut kerdo .',
      'Unreachable' => 'Nêresiyeno',
      'No commits found.' => 'Wed nêvêniya.',
    );
  }

}
