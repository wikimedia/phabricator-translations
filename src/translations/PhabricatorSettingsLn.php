<?php

final class PhabricatorSettingsLn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ln';
  }

  protected function getTranslations() {
    return array(
      'Unlink' => 'Kolongola lien',
      'Refresh' => 'Bozongisa sika',
      'Zed' => 'Zed',
      'Ignore new setting and keep %s' => 'Ignorer paramètre ya sika pe bomba %s',
      'NOTE: You already have an Auth Factor configured. Adding another factor will require you to always provide all Auth Factors instead of selecting one of your Auth Factors.' => 'NOTE: Ozali déjà na Auth Factor configuré. Kobakisa facteur mosusu ekosenga yo opesa tango nionso ba Facteurs nionso ya Auth na esika ya kopona moko ya ba Facteurs ya Auth na yo.',
    );
  }

}
