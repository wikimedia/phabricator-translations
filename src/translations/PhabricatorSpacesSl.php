<?php

final class PhabricatorSpacesSl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sl';
  }

  protected function getTranslations() {
    return array(
      '%s archived space %s.' => '%s je arhiviral_a prostor %s.',
      '%s archived this space.' => '%s je arhiviral_a ta prostor.',
    );
  }

}
