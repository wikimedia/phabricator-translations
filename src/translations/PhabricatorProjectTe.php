<?php

final class PhabricatorProjectTe
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'te';
  }

  protected function getTranslations() {
    return array(
      'Timeline' => 'కాలరేఖ',
      'Month' => 'నెల',
      '%d month(s)' => '%s నెల(లు)',
      'Members' => 'సభ్యులు',
      'Background Color' => 'వెనుతలపు రంగు',
      '(Default)' => '(అప్రమేయం)',
      '%d day(s)' => '%s రోజు(లు)',
      'Week' => 'వారం',
    );
  }

}
