<?php

final class PhabricatorNuanceSms
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sms';
  }

  protected function getTranslations() {
    return array(
      'User %s' => 'Õõʹnni %s',
      'Tag %s' => 'Ǩeâlǥal %s',
      'Source %d' => 'Käivv %s',
    );
  }

}
