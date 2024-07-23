<?php

final class PhabricatorSpacesJa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ja';
  }

  protected function getTranslations() {
    return array(
      'You do not have permission to create spaces.' => 'スペースを作成する権限がありません。',
    );
  }

}
