<?php

final class PhabricatoravaCoreRu
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ru';
  }

  protected function getTranslations() {
    return array(
      'Anti-Vandalism' => 'Антивандализм',
      'Vandalism detected' => 'Обнаружение вандализма',
      'Scan for vandalism' => 'Сканировать на предмет вандализма',
    );
  }

}
