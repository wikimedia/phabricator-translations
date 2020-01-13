<?php

final class PhabricatorCelerityZhHant
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hant';
  }

  protected function getTranslations() {
    return array(
      'Use Standard Colors' => '使用標準色彩',
      'No resource source exists with name "%s"!' => '不存在名稱為「%s」的資源來源！',
      'Unable to render resource "%s", which has unknown type "%s".' => '無法呈現資源「%s」，此含有未知類型「%s」。',
      'Writing map "%s".' => '正在寫入對應「%s」。',
      'Use High Contrast Colors' => '使用高對比色彩',
      'Dark Mode (Experimental)' => '暗黑模式（實驗功能）',
      'Use Larger Font Size' => '使用更大的字體大小',
      'Found %d binary resources.' => '找到%s二進位資源。',
      'No resource with symbol "%s" exists in source "%s"!' => '符號為「%s」的資源不存在於來源「%s」裡！',
      'Celerity' => 'Celerity',
      'Package specification for "%s" includes "%s", but that symbol is not %s by any resource.' => '用於「%s」的封包規格含有「%s」，但符號不再由任何資源%s。',
      'Attempting to resolve unknown resource, "%s".' => '嘗試解決未知的資源「%s」。',
      'Rebuilt "%s" syntax CSS.' => '重新建置「%s」語法 CSS。',
      'CSS file \'%s\' has unknown variable \'%s\'.' => 'CSS 檔案「%s」有未知的變數「%s」。',
      'Literal %s is not allowed inside inline script.' => '在行內手稿不允許逐字%s。',
      'Binary' => '二進位',
      'Use Red/Green (Deuteranopia) Colors' => '使用紅/綠（綠色盲）色彩',
      'Resource "%s" must %s at most one Celerity target.' => '資源「%s」必須%s在至少一個 Celerity 目標。',
      'Cycle detected in resource graph: %s' => '在資源圖表偵測到的循環：%s',
      'Rebuild syntax highlighting CSS.' => '重新建置語法凸顯 CSS。',
      'Resource source defines two resources with the same name, "%s". One is defined in the "%s" map; the other in the "%s" map. Each resource must have a unique name.' => '資源來源定義出兩個同名的資源「%s」。其中一個定義在「%s」對應，另一個在「%s」對應。任一資源皆要為獨一的名稱。',
      'Resource "%s" does not have a header doc comment. Encode dependency data in a header docblock.' => '來源「%s」不可有標頭 doc 註解。相關性資料編碼在 docblock 標頭。',
      'Package specification for "%s" includes resources of multiple types (%s, %s). Each package may only contain one type of resource.' => '用於「%s」的封包規格含有多種類型資源（%s、%s）。任一封包應僅能包含一個資源類型。',
      'Rebuilding %d resource source(s).' => '重新建置 %s 個資源來源。',
      'Found %d text resources.' => '找到%s文字資源。',
      'Expected file \'%s\' in \'%s\' to be a sprite source ending in \'%s\'.' => '預期於「%2$s」的檔案「%1$s」為在「%s」結尾的 Sprite 來源。',
      'Only static resources may be served.' => '僅能提供靜態資源。',
      'Rebuilding resource source "%s" (%s)...' => '正在重新建置資源來源「%s」（%s）…',
      'Resources name "%s" is not valid; it must contain only lowercase latin letters and digits.' => '資源名稱「%s」無效，這只能包含小寫拉丁字母與數字。',
      'Attempting to add more metadata after metadata has been locked.' => '鎖定詮釋資料後嘗試添加更多詮釋資料。',
      'Rebuild static resource maps.' => '重新建置靜態資源對應。',
      'Found %d packages.' => '找到%s封包。',
    );
  }

}
