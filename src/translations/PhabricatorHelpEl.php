<?php

final class PhabricatorHelpEl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'el';
  }

  protected function getTranslations() {
    return array(
      'Close any dialog, including this one.' => 'Κλείστε οποιονδήποτε διάλογο, συμπεριλαμβανομένου αυτού.',
      '%s Help' => '%s Βοήθεια',
      'Keyboard Shortcuts' => 'Συντομεύσεις Πληκτρολογίου',
    );
  }

}
