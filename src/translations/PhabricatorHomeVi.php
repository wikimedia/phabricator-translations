<?php

final class PhabricatorHomeVi
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'vi';
  }

  protected function getTranslations() {
    return array(
      'Command Center' => 'Trung tâm chỉ huy',
      'More Applications' => 'Nhiều ứng dụng hơn',
      'Built-in Homepage' => 'Trang chủ tích hợp',
    );
  }

}
