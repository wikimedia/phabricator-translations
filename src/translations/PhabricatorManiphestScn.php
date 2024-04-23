<?php

final class PhabricatorManiphestScn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'scn';
  }

  protected function getTranslations() {
    return array(
      'Merged' => 'Junciutu',
      '○ %s' => '○ %s',
      'Merged In' => 'Junciutu n',
      'Invalid Key' => 'Chiavi nun vàlida',
      '(No Project)' => '(Nuddu pruggettu)',
      'Low' => 'Vasciu',
      'High' => 'Àuta',
      '● %s' => '● %s',
      'Assigned' => 'Assignatu',
    );
  }

}
