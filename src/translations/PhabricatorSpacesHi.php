<?php

final class PhabricatorSpacesHi
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'hi';
  }

  protected function getTranslations() {
    return array(
      '%s made space %s the default space.' => '%s ने स्थान %s को डिफ़ॉल्ट स्थान बनाया है|',
    );
  }

}
