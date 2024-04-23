<?php

final class PhabricatorChatlogLb
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'lb';
  }

  protected function getTranslations() {
    return array(
      'Newer' => 'Méi nei',
      'Older' => 'Méi al',
      'Newest' => 'Neist',
    );
  }

}
