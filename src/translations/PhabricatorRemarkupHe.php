<?php

final class PhabricatorRemarkupHe
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'he';
  }

  protected function getTranslations() {
    return array(
      'Invalid markup engine.' => 'מנוע עיצוב בלתי־תקין.',
      'Process text through remarkup.' => 'עיבוד טקסט ב־remarkup בהקשר של Phabricator.',
      'Content may not be empty.' => 'ייתכן שהתוכן אינו ריק.',
    );
  }

}
