<?php

final class PhabricatorPhrictionLb
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'lb';
  }

  protected function getTranslations() {
    return array(
      'Last Edited' => 'Lescht Ännerung',
      'Publish Draft' => 'Brouillon publizéieren',
      'Version %d of %d: ' => 'Versioun %s vu(n) %s:',
      'Save and Publish' => 'späicheren a publizéieren',
      'Version %d' => 'Versioun %s',
      'Publish Draft?' => 'Brouillon publizéieren?',
      'Draft %d' => 'Brouillon %s',
      '%s moved %s to %s.' => '%s huet %s op %s geréckelt.',
      'Publish Older Version?' => 'Méi al Versioun publizéieren?',
      'Save as Draft' => 'Als Brouillon späicheren',
      'Welcome' => 'Wëllkomm',
      'Publish Older Version' => 'Méi al Versioun publizéieren',
      'Already Published' => 'Scho verëffentlecht',
    );
  }

}
