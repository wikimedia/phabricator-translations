<?php

final class PhabricatorAlmanacKn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'kn';
  }

  protected function getTranslations() {
    return array(
      'Name of the service.' => 'ಸೇವೆಯ ಹೆಸರು.',
      'Namespace' => 'ನಾಮವರ್ಗ',
      'Namespace Name' => 'ನಾಮವರ್ಗದ ಹೆಸರು',
      'Address of the service.' => 'ಸೇವೆಯ ವಿಳಾಸ.',
      'Namespace %s' => 'ನಾಮವರ್ಗ %s',
      'Service %d' => 'ಸೇವೆ %s',
      'All Namespaces' => 'ಎಲ್ಲಾ ನಾಮವರ್ಗಗಳು',
      'Namespaces' => 'ನಾಮವರ್ಗಗಳು',
      'All Services' => 'ಎಲ್ಲಾ ಸೇವೆಗಳು',
    );
  }

}
