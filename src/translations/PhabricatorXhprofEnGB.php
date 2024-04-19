<?php

final class PhabricatorXhprofEnGB
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en_GB';
  }

  protected function getTranslations() {
    return array(
      'Failed to unserialize XHProf profile!' => 'Failed to unserialise XHProf profile!',
    );
  }

}
