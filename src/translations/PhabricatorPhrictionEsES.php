<?php

final class PhabricatorPhrictionEsES
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'es_ES';
  }

  protected function getTranslations() {
    return array(
      '%s moved %s from %s' => '%s movió %s desde %s',
      '%s moved %s to %s.' => '%s movió %s a %s.',
    );
  }

}
