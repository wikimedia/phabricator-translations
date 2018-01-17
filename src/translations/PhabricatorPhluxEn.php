<?php

final class PhabricatorPhluxEn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en';
  }

  protected function getTranslations() {
    return array(
      'Update Variable' => 'Update Variable',
      'Variable value must be valid JSON.' => 'Variable value must be valid JSON.',
      'Lowercase letters, digits, dot and hyphen only.' => 'Lowercase letters, digits, dot and hyphen only.',
      'Edit Variable: %s' => 'Edit Variable: %s',
      'Key/Value Configuration Store' => 'Key/Value Configuration Store',
      'Variable "%s"' => 'Variable "%s"',
      'Phlux Variables' => 'Phlux Variables',
      'Enter value as JSON.' => 'Enter value as JSON.',
      'Variable key must be unique.' => 'Variable key must be unique.',
      'Create Variable' => 'Create Variable',
      'Phlux' => 'Phlux',
      '%s updated this variable.' => '%s updated this variable.',
      '%s created this variable.' => '%s created this variable.',
      'Edit Variable' => 'Edit Variable',
      'Variable List' => 'Variable List',
      'Variable key is required.' => 'Variable key is required.',
      'Variable key "%s" must contain only lowercase letters, digits, period, and hyphen.' => 'Variable key "%s" must contain only lowercase letters, digits, period, and hyphen.',
    );
  }

}
