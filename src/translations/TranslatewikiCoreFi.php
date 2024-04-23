<?php

final class TranslatewikiCoreFi
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fi';
  }

  protected function getTranslations() {
    return array(
      'NONE' => 'EI MITÄÄN',
      'Done.' => 'Valmis.',
      'PLURAL' => 'MONIKKO',
    );
  }

}
