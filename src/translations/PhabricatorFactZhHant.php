<?php

final class PhabricatorFactZhHant
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hant';
  }

  protected function getTranslations() {
    return array(
      'Analyze from the beginning, ignoring cursors.' => '從開頭分析，忽略游標。',
      'Iterator \'%s\' does not exist.' => '疊代器「%s」不存在。',
      'Manually invoke fact analyzers.' => '手動調用實情分析器。',
      'No fact engines support generating facts for this object.' => '沒有支援此對象來產生實情的實情引擎。',
      'Executing a fact query requires facts.' => '執行實情查詢需要有實情。',
      'Process only iterator __name__.' => '僅處理疊代器 __name__。',
      'Cursor %s does not exist or is already reset.' => '游標%s不存在或是已被重新設定。',
      'No cursors.' => '沒有游標。',
      'Fact Extraction Report' => '實情提取報告',
      'Dimension' => '尺寸',
      'Processing %s...' => '正在處理%s…',
      'No Stored Datapoints' => '未有存儲的資料點',
      '%sms' => '%s ms',
      'Processing cursor \'%s\'.' => '正在游標「%s」…',
      'Show a list of fact engines.' => '顯示實情引擎清單。',
      'Chart and Analyze Data' => '圖表與分析資料',
      'Really destroy all facts? They will need to be rebuilt through analysis, which may take some time.' => '確定要銷毀所有實情？這些會需要透過分析來重新建置，並且會耗費一些時間。',
      '%s (Transactions)' => '%s（處理次數）',
      'Show a list of fact iterators and cursors.' => '顯示實情疊代器與游標的清單。',
      'Failed to load or generate dimension ID ("%s") for dimension key "%s".' => '載入或產生用於尺寸鍵「%2$s」 的尺寸 ID （「%1$s」）失敗。',
      'Destroy all facts.' => '銷毀所有實情。',
      'Facts' => '實情',
      'Resetting cursor %s...' => '正在重新設定游標%s…',
      'Not Stored' => '尚未存儲',
      'Reset cursor __cursor__.' => '重新設定游標 __cursor__。',
      'Skip analysis of aggregate facts.' => '略過匯總實情的分析。',
      'No Engines' => '沒有引擎',
      'Destroying table \'%s\'...' => '正在銷毀表格「%s」…',
      'Fact' => '實情',
      'Unknown fact ("%s") for engine "%s".' => '引擎「%2$s」的未知實情（「%1$s」）',
      'Fact "%s"' => '實情「%s」',
      'Consistent Fact' => '實情一致',
      'Not Generated' => '未產生',
    );
  }

}
