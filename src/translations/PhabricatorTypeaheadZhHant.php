<?php

final class PhabricatorTypeaheadZhHant
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hant';
  }

  protected function getTranslations() {
    return array(
      'Typeahead Results' => 'Typeahead 結果',
      'Typeahead' => 'Typeahead',
      'This datasource ("%s") can not evaluate the function "%s(...)".' => '此資料來源（「%s」）無法評估函式「%s(...)」。',
      'Function Help' => '函式說明',
      'In addition to typing user and project names to build queries, you can also type the names of special functions which give you more options and the ability to express more complex queries.
    Functions have an internal name (like `%s`) and a human-readable name, like `Current Viewer`. In general, you can type either one to select the function. You can also click the {nav icon=search} button on any typeahead control to browse available functions and find this documentation.
    This documentation uses the internal names to make it clear where tokens begin and end. Specifically, you will find queries written out like this in the documentation:
    %s
    When this query is actually shown in the control, it will look more like this:
    %s' => '除了輸入使用者與專案名稱來建置查詢之外，您也可以輸入能為您提供更多選項與表達更多複雜查詢的特殊函式名稱。
    函式具有內部名稱（像是 `%s`）以及易於理解的名稱（像是 `Current Viewer`）。通常，您可以輸入兩者其一來選擇函式。您也可以在任何 typeahead 控件點擊 {nav icon=search} 按鈕來瀏覽可用函式，並查找其文件。
    此文件使用內部名稱來明確表示出開頭與結尾。具體來說，您會在文件裡找到像是以下寫法的查詢：
    %s
    當查詢實際上顯示在控件時，應像是：
    %s',
      'Invalid Parameters' => '無效參數',
      'Source Class' => '來源類別',
      'Raw Query' => '原始查詢',
      'Token Results (%s)' => '表示結果（%s）',
      'Configured datasource class "%s" must be a valid subclass of "%s".' => '設置的資料來源類別「%s」必須是「%s」的有效子類別。',
      'Token Name' => '表示名稱',
      'Reference: Advanced Functions' => '參照：進階函式',
      'Image URI' => '圖像 URI',
      'Select' => '選擇',
      'Typeahead functions are an advanced feature which allow you to build more powerful queries. This document explains functions available for the selected control.
    For general help with search, see the [[ %s | Search User Guide ]] in the documentation.
    Note that different controls support //different// functions (depending on what the control is doing), so these specific functions may not work everywhere. You can always check the help for a control to review which functions are available for that control.' => 'Typeahead 函式是能允許您建置出更強大查詢的進階功能。此文件解釋用於所選控件可用的函式。
    對於搜尋的一般說明，請查看在文件裡的[[ %s |搜尋使用者指南]]。
    請注意不同的控件支援//不同//的函式（取決於控件所作行為）,因此這些特定函式可能無法在所有地方使用。您可以隨時查看控件的說明，來檢視能用於控件的可用函式。',
      'Display Name' => '顯示名稱',
      'This table briefly describes available functions for this control. For details on a particular function, see the corresponding section below.' => '此表格簡要描述了用於此控件的可用函式。有關特定函式的詳細資訊，請查看以下對應的段落。',
      'This source is not usable directly.' => '此來源不能直接使用。',
      'Unable to parse function and arguments for token "%s".' => '無法解析「%s」表式的函式與引數。',
      'Token Query' => '表示查詢',
      'Invalid Function: %s' => '無效函式：%s',
      'More Results' => '更多結果',
      'Browse Objects' => '瀏覽對象',
      'Typeahead Function Help' => 'Typeahead 函式說明',
      'Sprite' => '拼合圖',
      'The HTTP parameter named "parameters" for this request is not a valid JSON parameter. JSON is required. Exception: %s' => '用於此請求，名為「parameters」的 HTTP 參數不是有效的 JSON 參數。JSON 為必需。例外：%s',
      'Function Quick Reference' => '函式快速參照',
      'Auto' => '自動',
      'You reach the edge of the abyss.' => '您抵達了深淵的邊際。',
      'Priority Type' => '優先類型',
      'Using Typeahead Functions' => '使用 Typeahead 函式',
    );
  }

}
