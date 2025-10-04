<?php

final class PhabricatorFeedLn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ln';
  }

  protected function getTranslations() {
    return array(
      'Feed query minimum range must be lower than maximum range.' => 'Intervalle minimum ya query ya alimentation esengeli ezala na se koleka range maximum.',
    );
  }

}
