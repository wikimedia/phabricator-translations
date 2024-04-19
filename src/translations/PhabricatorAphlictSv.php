<?php

final class PhabricatorAphlictSv
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sv';
  }

  protected function getTranslations() {
    return array(
      'Send a notification to a user.' => 'Skicka en avisering till en användare.',
      'Message to send.' => 'Meddelande att skicka.',
    );
  }

}
