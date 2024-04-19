<?php

final class PhabricatorMetaBn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'bn';
  }

  protected function getTranslations() {
    return array(
      '%s uninstalled %s.' => '%s %s আনইনস্টল করেছেন।',
      '%s installed %s.' => '%s %s ইনস্টল করেছেন।',
    );
  }

}
