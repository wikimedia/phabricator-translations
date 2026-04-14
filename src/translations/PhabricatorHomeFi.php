<?php

final class PhabricatorHomeFi
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fi';
  }

  protected function getTranslations() {
    return array(
  'Command Center' => 'Komentokeskus',
  'More Applications' => 'Lisää sovelluksia',
  'Built-in Homepage' => 'Sisäänrakennettu kotisivu',
);
  }

}
