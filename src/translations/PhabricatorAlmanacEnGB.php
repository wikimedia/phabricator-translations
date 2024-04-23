<?php

final class PhabricatorAlmanacEnGB
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en_GB';
  }

  protected function getTranslations() {
    return array(
      'Service "%s" is unrecognized, restricted, or you do not have permission to edit it.' => 'Service "%s" is unrecognised, restricted, or you do not have permission to edit it.',
      'Service type "%s" is unrecognized. Valid types are: %s.' => 'Service type "%s" is unrecognised. Valid types are: %s.',
      'Almanac device status "%s" is unrecognized. Valid status values are: %s.' => 'Almanac device status "%s" is unrecognised. Valid status values are: %s.',
      'Device "%s" is unrecognized, restricted, or you do not have permission to edit it.' => 'Device "%s" is unrecognised, restricted, or you do not have permission to edit it.',
    );
  }

}
