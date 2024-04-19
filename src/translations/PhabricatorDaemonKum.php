<?php

final class PhabricatorDaemonKum
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'kum';
  }

  protected function getTranslations() {
    return array(
      'Average Queue Time' => 'Гезикни орта заманы',
      'Average Duration' => 'Орта узакълыгъы',
    );
  }

}
