<?php

final class PhabricatorTransactionsLv
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'lv';
  }

  protected function getTranslations() {
    return array(
      '🔒 Locked' => '🔒 Aizslēgts',
      '✘ Hidden' => '✘ Paslēpts',
      'export' => 'eksportēt',
      '%s wrote:' => '%s rakstīja:',
      'Edit Comment' => 'Labot komentāru',
    );
  }

}
