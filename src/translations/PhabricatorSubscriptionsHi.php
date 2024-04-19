<?php

final class PhabricatorSubscriptionsHi
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'hi';
  }

  protected function getTranslations() {
    return array(
      'Removed %s subscriber(s): %s.' => '%s ग्राहक हटा दिए गए: %s',
    );
  }

}
