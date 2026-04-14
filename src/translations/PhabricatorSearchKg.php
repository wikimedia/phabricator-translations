<?php

final class PhabricatorSearchKg
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'kg';
  }

  protected function getTranslations() {
    return array(
  'Global Search' => 'Bansosa na Ntoto ya Mvimba',
  'Select an item type...' => 'Pona mutindu ya kima...',
  '%s Search' => 'Kusosa ya 1',
  'Query is too long (%s bytes, maximum is %s bytes). Please use more specific search criteria.' => 'Kusosa kele nda mingi (%s bytes, mingi kele %s bytes). Sadila mutindu ya sikisiki ya kusosa.',
  'Open Items' => 'Mambu ya Kukangula',
  '%s Queries' => 'Bangyufula ya %s',
  'Excluding Search' => 'Katula Kusosa',
  'Query has too many search tokens (%s tokens, maximum is %s tokens). Please use more specific search criteria.' => 'Query kele ti ba token mingi ya kusosa (%s tokens, maximum kele %s tokens). Sadila mutindu ya sikisiki ya kusosa.',
  'Browse Item Types' => 'Mitindu ya Mambu ya Browse',
  'Profile picture' => 'Kifwanisu ya muntu',
  'Item Status' => 'Kisika ya bo ke binga yo',
  'Global Queries' => 'Bangyufula ya Nsi-Ntoto ya Mvimba',
  'Item Types' => 'Mitindu ya Mambu',
  'System Saved Queries' => 'Bansosa ya Bo Me Salama',
);
  }

}
