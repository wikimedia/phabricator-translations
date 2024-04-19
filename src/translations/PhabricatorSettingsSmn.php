<?php

final class PhabricatorSettingsSmn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'smn';
  }

  protected function getTranslations() {
    return array(
      'Saturday' => 'Lávurdâh',
      'Date Format' => 'Peivimere häämi',
      'No Notifications' => 'Iä almottâsah',
      'Translation' => 'Jurgâlus',
      'Settings %d' => 'Asâttâsah %s',
      'Number' => 'Nummeer',
      'Sunday' => 'Pasepeivi',
      'Friday' => 'Vástuppeivi',
      'Edit Settings: %s' => 'Mute asâttâsâid: %s',
      'Save Preferences' => 'Vuorkkii asâttâsâid',
    );
  }

}
