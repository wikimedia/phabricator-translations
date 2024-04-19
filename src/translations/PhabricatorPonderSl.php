<?php

final class PhabricatorPonderSl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sl';
  }

  protected function getTranslations() {
    return array(
      'Close Question' => 'Zapri vprašanje',
      'Answer Comment' => 'Komentar odgovora',
      'Question title.' => 'Naslov vprašanja.',
      'Answer History' => 'Zgodovina odgovora',
      'Answer Preview' => 'Predogled odgovora',
      'New question title.' => 'Nov naslov vprašanja.',
      'Already Answered' => 'Že odgovorjeno',
    );
  }

}
