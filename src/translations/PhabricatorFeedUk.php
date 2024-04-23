<?php

final class PhabricatorFeedUk
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'uk';
  }

  protected function getTranslations() {
    return array(
      'All Transactions' => 'Усі транзакції',
      'Review Recent Activity' => 'Переглянути недавню активність',
    );
  }

}
