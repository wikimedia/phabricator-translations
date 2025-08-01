<?php

final class PhabricatorFeedVi
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'vi';
  }

  protected function getTranslations() {
    return array(
      'Call %s before publishing!' => 'Gọi %s trước khi xuất bản!',
    );
  }

}
