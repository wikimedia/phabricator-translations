<?php

final class PhabricatorTypeaheadHi
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'hi';
  }

  protected function getTranslations() {
    return array(
      'Typeahead' => 'आगे लिखें',
      'This source is not usable directly.' => 'यह स्रोत सीधे प्रयोग करने योग्य नहीं है|',
    );
  }

}
