<?php

final class PhabricatorSpacesZhHant
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hant';
  }

  protected function getTranslations() {
    return array(
      '%s updated the space description for %s.' => '%s更新了%s的空間描述。',
      '(This error generally indicates that %s is enabled, but there are no spaces with a "%s" view policy. These settings are contradictory and imply a misconfiguration.)' => '（此錯誤通常代表著是%s已啟用，但沒有具有「%s」檢視方針的空間。這些設定互相衝突，代表有設置錯誤。）',
      'Spaces User Guide' => '空間使用者指南',
      'Hide Active Spaces' => '隱藏有效空間',
      '%s updated the space description.' => '%s更新了空間描述。',
      '%s archived space %s.' => '%s存檔了空間%s。',
      'PHID of the policy space this object is part of.' => '此對象所屬的方針空間 PHID。',
      'Default edit policy for newly created spaces.' => '新建立空間的預設編輯方針。',
      'Only the first space created can be the default space, and it must remain the default space evermore.' => '僅有第一個空間可用做為預設空間，且必須要一直保留有預設空間。',
      'Search for objects in certain spaces.' => '在特定空間來搜尋對象。',
      'Activate Space: %s' => '啟用空間：%s',
      'Support for Spaces' => '空間支援',
      '%s renamed space %s from %s to %s.' => '%s已將空間%s從%s重新命名成%s。',
      'Create a Space' => '建立空間',
      'Alternate Space' => '備用空間',
      '%s activated this space.' => '%s 啟用了此空間。',
      'Archive Space: %s' => '存檔空間：%s',
      'Spaces must have a name.' => '空間必須要有名稱。',
      'Existing objects in this Space will be hidden from query results by default.' => '預設會將來自查詢結果裡此空間中現有對象給隱藏。',
      '%s made this the default space.' => '%s弄出了此預設空間。',
      '%s archived this space.' => '%s存檔了此空間。',
      'Type a space name...' => '輸入空間名稱…',
      'Existing objects will no longer be hidden from query results.' => '現有對象將不再從查詢結果裡隱藏。',
      'You do not have permission to create spaces.' => '您沒有權限來建立空間。',
      'Ask someone to give you access to a space so you can view and create objects.' => '請求某人給予您空間存取權限，以讓您可以檢視和建立對象。',
      'Default Space' => '預設空間',
      'Archive Space' => '存檔空間',
      'CHANGES TO SPACE DESCRIPTION' => '更改空間描述',
      'Default view policy for newly created spaces.' => '新建立空間的預設檢視方針。',
      'Spaces' => '空間',
      'Drift Aimlessly' => '無目的漂移',
      'Browse Spaces' => '瀏覽空間',
      'Can Create Spaces' => '可建立空間',
      'All Spaces' => '所有空間',
      'Control access to groups of objects.' => '控制對象群組的存取。',
      'If you activate this space, you will be able to create objects inside it again.' => '若您啟用了此空間，您可以再次在裡頭建立新的對象。',
      'Create Space' => '建立空間',
      'Log in, or ask someone to create a public space which logged out users are permitted to access.' => '登入或是請求某人建立允許已登出使用者可存取的公用空間。',
      'Policy Namespaces' => '方針命名空間',
      '%s activated space %s.' => '%s啟用了空間%s。',
      '%s created this space.' => '%s建立了此空間。',
      'Space %s: %s' => '空間%s：%s',
      'No Access to Spaces' => '不可存取空間',
      '%s renamed this space from %s to %s.' => '%s將此空間從%s改名成%s。',
      'No spaces found.' => '沒有找到空間。',
      'This install uses spaces to organize objects, but logged out users do not have access to any spaces.' => '此安裝使用空間來組織對象，但已登出使用者沒有存取任何空間的權限。',
      'Edit Space' => '編輯空間',
      'Test Space' => '測試空間',
      '%s made space %s the default space.' => '%s弄出了預設空間%s。',
      'NOTE: You are creating the **default space**. All existing objects will be put into this space. You must create a default space before you can create other spaces.' => '註：您正在建立**預設空間**。所有現有的對象將會放置到此空間裡。在您建立其它空間之前，您必須先建立預設空間。',
      'Activate Space' => '啟用空間',
      'PhabricatorSpacesApplication' => 'Phabricator 空間應用程式',
      'Show Only Active Spaces' => '僅顯示有效的空間',
      'Policy namespaces to segment object visibility throughout your instance.' => '您整個實例裡細分對象可見性的方針名稱空間。',
      'If you archive this Space, you will no longer be able to create new objects inside it.' => '若您存檔了此空間，您將不可在裡頭建立新的對象。',
      '%s created space %s.' => '%s建立了空間%s。',
      'Default Space #2' => '預設空間 #2',
      'Active Spaces' => '有效空間',
      'This install uses spaces to organize objects, but your account does not have access to any spaces.' => '此安裝使用空間來組織對象，但您的帳號沒有存取任何空間的權限。',
    );
  }

}
