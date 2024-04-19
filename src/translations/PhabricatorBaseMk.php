<?php

final class PhabricatorBaseMk
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'mk';
  }

  protected function getTranslations() {
    return array(
      'Request includes restricted parameter "%s", but this controller ("%s") does not whitelist it. Refusing to serve this request because it might be part of a redirection attack.' => 'Во барањето е вклучен ограничениот параметар „%s“, но овој контролор („%s“) не го става на белиот список. Нема да го опслужам ова барање бидејќи може да биде дел од пренасочувачки напад.',
    );
  }

}
