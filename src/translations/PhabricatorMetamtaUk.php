<?php

final class PhabricatorMetamtaUk
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'uk';
  }

  protected function getTranslations() {
    return array(
      'Type a username, project, mailing list, package, or function...' => 'Введіть ім’я користувача, проєкт, список розсилки, пакет чи функцію…',
      'Unhandled Exception' => 'Необроблений виняток',
      'Unhandled Exception: %s' => 'Необроблений виняток: %s',
    );
  }

}
