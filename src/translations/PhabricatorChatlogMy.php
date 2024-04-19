<?php

final class PhabricatorChatlogMy
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'my';
  }

  protected function getTranslations() {
    return array(
      'Newer' => 'ပိုသစ်သော',
      'Older' => 'ပိုဟောင်းသော',
      'Newest' => 'အသစ်ဆုံး',
    );
  }

}
