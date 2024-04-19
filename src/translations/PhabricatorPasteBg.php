<?php

final class PhabricatorPasteBg
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'bg';
  }

  protected function getTranslations() {
    return array(
      'Change language used for syntax highlighting.' => 'Промяна на езика използван за оцветяване на синтаксиса.',
      'Language to use for syntax highlighting.' => 'Език за оцветяване на синтаксиса.',
      'Browse Languages' => 'Преглед на езиците',
    );
  }

}
