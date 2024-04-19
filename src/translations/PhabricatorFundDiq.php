<?php

final class PhabricatorFundDiq
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'diq';
  }

  protected function getTranslations() {
    return array(
      'Find Backers' => 'Pheştiger bıvênê',
      'Fund Backers' => 'Pheştigerê foni',
      'Fund Backing' => 'Pheştiya foni',
      'Fund' => 'Fon',
      'Back %s %s' => '%s ra peyser %s',
      '%s refunded %s to %s for %s.' => '%s, %s ya %s ra peyser berdo %s.',
      'Backers' => 'Pheştigeri',
      'Donate' => 'Bexş',
      'Fund %s %s' => 'Fon %s %s',
      'All Backers' => 'Pheştigeri pêroyi',
    );
  }

}
