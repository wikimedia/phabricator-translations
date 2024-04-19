<?php

final class PhabricatorXhprofHi
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'hi';
  }

  protected function getTranslations() {
    return array(
      'Parent Calls' => 'मूल जनक का आह्वान',
      'Metrics for this Call' => 'इस कॉल के लिए मेट्रिक्स',
      'Drop .xhprof Files to Import' => 'आयात करने के लिए .xhprof फ़ाइलें ड्रॉप करें',
      'Child Calls' => 'संतान का आह्वान',
    );
  }

}
