<?php

final class PhabricatorRemarkupAr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ar';
  }

  protected function getTranslations() {
    return array(
      'Invalid markup engine.' => 'محرك تعليم غير صحيح.',
      'Content may not be empty.' => 'المحتوى لا ينبغي أن يكون فارغا.',
    );
  }

}
