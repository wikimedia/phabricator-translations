<?php

final class PhabricatorHomeTh
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'th';
  }

  protected function getTranslations() {
    return array(
      'Command Center' => 'ศูนย์ควบคุมคำสั่ง',
      'More Applications' => 'แอพลิเคชันเพิ่มเติม',
      'Built-in Homepage' => 'หน้าหลักที่มีให้',
    );
  }

}
