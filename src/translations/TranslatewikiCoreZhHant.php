<?php

final class TranslatewikiCoreZhHant
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hant';
  }

  protected function getTranslations() {
    return array(
      'Provide the path to a library to export translations from.' => '提供用來匯出翻譯的來源庫路徑。',
      'Unable to extract string with unrecognized "%%" pattern, "%s": %s.' => '無法提取帶有未認可「%%」模式的字串，「%s」：%s。',
      'NONE' => '無',
      'Provide a locale code with "--locale".' => '以「--locale」來提供地區代碼。',
      'Ignoring string "%s"; not present in translation source file.' => '忽略未在翻譯來源檔案裡提供的字串「%s」。',
      'Provide the path to exactly one library to export translations from.' => '準確提供一個用來匯出翻譯的來源庫路徑。',
      'Provide a project name to export strings under with "--as".' => '以「--as」提供專案名來匯出字串。',
      'Raw strings' => '原始字串',
      'Name of the project that a translation file is being generated for.' => '正在產生翻譯檔案的專案名稱。',
      'Extracting library strings...' => '正在提取庫裡頭的字串…',
      'GENDER' => '性別',
      'Locale code for the generated source.' => '用於所產生來源碼的地區代碼。',
      'Provide a classname with "--class".' => '以「--class」來提供類別名稱。',
      'Read %s string(s).' => '讀取%s串字串。',
      'Class name to generate.' => '要產生的類別名稱。',
      'Frequency Data' => '頻率資料',
      'Provide a JSON source file with "--source".' => '以「--source」來提供 JSON 來源。',
      'Generate a Phabricator translation classfile.' => '產生 Phabricator 翻譯類別檔案。',
      'JSON source file containing translation strings.' => 'JSON 來源檔案包含翻譯字串。',
      'Export translation strings from a libphutil library.' => '從 libphutil 庫匯出翻譯字串。',
      'Writing data (%s, %s) to "%s"...' => '正在寫入資料（%s，%s）到「%s」…',
      'Expected library string extraction to genrate file "%s", but no such file exists!' => '預期提取庫字串來產生檔案「%s」，但不存在這樣的檔案！',
      'Name for the project being exported. Exported files will be written to "projects/" using this name.' => '匯出中的專案名稱。匯出檔案將會使用此名稱寫入至「projects/」。',
      'Used in:' => '使用於：',
      'English strings' => '英文字串',
      'Context strings' => '語境字串',
      'Provide a project name with "--project".' => '以「--project」來提供專案。',
      'Variable Types: %s.' => '變數類型：%s。',
      'Provide an output file with "--out".' => '以「--out」來提供輸出檔案。',
      'Base URI for browsing files in the project being exported.' => '用於在專案匯出時瀏覽檔案的基本 URI。',
      'Pass --clean to the underlying extractor to drop caches before extracting strings and do a full clean rebuild. Slow!' => '傳遞 -- 清除底層的提取器以在提取字串前去除快取，並執行完整的清除重置，過程會較慢！',
      'Done.' => '完成。',
      'Location to write the generated translation file.' => '寫入產生的翻譯檔案的位置。',
      'PLURAL' => '複數',
    );
  }

}
