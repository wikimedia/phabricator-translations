<?php

final class PhabricatorPhluxZhHant
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hant';
  }

  protected function getTranslations() {
    return array(
      'Update Variable' => '更新變數',
      'Variable value must be valid JSON.' => '變數值必須是有效的 JSON。',
      'Lowercase letters, digits, dot and hyphen only.' => '僅限小寫字母、數字、點號、和連字號。',
      'Edit Variable: %s' => '編輯變數：%s',
      'Key/Value Configuration Store' => '鍵/值設置儲存',
      'Variable "%s"' => '變數「%s」',
      'Phlux Variables' => 'Phlux 變數',
      'Enter value as JSON.' => '輸入值為 JSON。',
      'Variable key must be unique.' => '變數的鍵必須為唯一。',
      'Create Variable' => '建立變數',
      'Phlux' => 'Phlux',
      '%s updated this variable.' => '%s 更新了此變數。',
      '%s created this variable.' => '%s 建立了此變數。',
      'Edit Variable' => '編輯變數',
      'Variable List' => '變數清單',
      'Variable key is required.' => '變數的鍵為必須。',
      'Variable key "%s" must contain only lowercase letters, digits, period, and hyphen.' => '變數的鍵「%s」僅限小寫字母、數字、半形句號、和連字號。',
    );
  }

}
