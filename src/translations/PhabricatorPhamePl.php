<?php

final class PhabricatorPhamePl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'pl';
  }

  protected function getTranslations() {
    return array(
      'Write a Post' => 'Napisz posta',
      'Manage Blogs' => 'Zarządzaj blogami',
      'Blog description.' => 'Opis bloga.',
    );
  }

}
