<?php

final class PhabricatorPholioRu
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ru';
  }

  protected function getTranslations() {
    return array(
      'Pholio Mocks' => 'Наброски',
      'Pholio' => 'Наброски',
      'Pholio Mock' => 'Набросок',
      'Close Pholio Mock' => 'Закрыть набросок',
    );
  }

}
