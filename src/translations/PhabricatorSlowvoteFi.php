<?php

final class PhabricatorSlowvoteFi
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fi';
  }

  protected function getTranslations() {
    return array(
      'Someone changes the poll details.' => 'Joku muutti äänestystietoja.',
    );
  }

}
