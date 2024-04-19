<?php

final class PhabricatorProjectZhHant
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hant';
  }

  protected function getTranslations() {
    return array(
      'Over-due Tasks' => '逾期工單',
      'Tasks Closed' => '已關閉工單',
      'Closed Tasks' => '已關閉工單',
      'Project %s' => '專案「%s」',
      'Apply Filter' => '套用搜尋條件',
      '(Default)' => '（預設）',
      'Move Tasks' => '移動工單',
    );
  }

}
