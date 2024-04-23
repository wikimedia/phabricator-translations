<?php

final class PhabricatorPhrictionSms
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sms';
  }

  protected function getTranslations() {
    return array(
      'Last Edited' => 'Mââimõssân muttum',
      'Publish Draft' => 'Õlmstââʹtt hämmaz',
      'Content' => 'Siiskâž',
      'Version %d' => 'Versio %s',
      'Edit Current Version %s...' => 'Muuʼtt ânnʼjõž versio %s...',
      'Publish Draft?' => 'Õlmstââʹtt-a hämmaz?',
      'Draft %d' => 'Häämas %s',
      'Save as Draft' => 'Ruõkk hämmsen',
      'Welcome' => 'Tiõrvpueʹttem',
      'Edits' => 'Muttâz',
      'Page Not Found' => 'Seidd ij käunnʼjam',
    );
  }

}
