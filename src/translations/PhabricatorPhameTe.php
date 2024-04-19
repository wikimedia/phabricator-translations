<?php

final class PhabricatorPhameTe
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'te';
  }

  protected function getTranslations() {
    return array(
      'here' => 'ఇక్కడ',
      'Blog' => 'బ్లాగు',
      'Blog description.' => 'బ్లాగు వివరణ.',
      'Recent Posts' => 'ఇటీవలి టపాలు',
      'Blogs' => 'బ్లాగులు',
      'No description.' => 'వివరణ లేదు.',
      'Blog Posts' => 'బ్లాగు టపాలు',
    );
  }

}
