<?php

final class PhabricatorFlagEnGB
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en_GB';
  }

  protected function getTranslations() {
    return array(
      'Marked with flag of the wrong color ("%s").' => 'Marked with flag of the wrong colour ("%s").',
      'Flag Color' => 'Flag Colour',
    );
  }

}
