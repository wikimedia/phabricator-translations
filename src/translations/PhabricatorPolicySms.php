<?php

final class PhabricatorPolicySms
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sms';
  }

  protected function getTranslations() {
    return array(
      'Select Project' => 'Vaʹlljed projeeʹkt',
      'All Users' => 'Puk õõʹnni',
    );
  }

}
