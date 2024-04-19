<?php

final class PhabricatorTypeaheadUk
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'uk';
  }

  protected function getTranslations() {
    return array(
      'This datasource ("%s") can not evaluate the function "%s(...)".' => 'Це джерело даних («%s») не може оцінити функцію «%s(...)».',
    );
  }

}
