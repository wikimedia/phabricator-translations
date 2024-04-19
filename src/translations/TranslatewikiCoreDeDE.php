<?php

final class TranslatewikiCoreDeDE
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'de_DE';
  }

  protected function getTranslations() {
    return array(
      'Writing data (%s, %s) to "%s"...' => 'Schreibe Daten (%s, %s) zu "%s"...',
      'Done.' => 'Fertig.',
    );
  }

}
