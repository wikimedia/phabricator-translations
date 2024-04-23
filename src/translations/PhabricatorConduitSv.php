<?php

final class PhabricatorConduitSv
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sv';
  }

  protected function getTranslations() {
    return array(
      'List of integers.' => 'Lista över heltal.',
      'List of project tags.' => 'Lista över projekttaggar.',
      'Execute the call as the given user. (If omitted, the call will be executed as an omnipotent user.)' => 'Kör anropet som den angivna användaren. (Om detta utelämnas kommer anropet köras som en omnipotent användare.)',
      'This server requires authentication.' => 'Denna server kräver autentisering.',
    );
  }

}
