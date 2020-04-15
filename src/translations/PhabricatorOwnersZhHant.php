<?php

final class PhabricatorOwnersZhHant
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hant';
  }

  protected function getTranslations() {
    return array(
      '"" (empty string)' => '""（空字串）',
      'Package name is required.' => '套件名稱為必填。',
      'Create New Package' => '建立新套件',
      'Include' => '包含',
      'Path Exists in Repository' => '存在版本庫上的路徑',
      'Included Paths' => '已包含路徑',
      'Owners Packages' => '擁有者套件',
      'Auto Review' => '自動檢閱',
      'Packages: Invalid Owner' => '套件：無效擁有者',
      'Path Not Found On Default Branch' => '在預設分支找不到路徑',
      'Parameter should be a phid.' => '參數應為 phid。',
      'Packages: %s' => '套件：%s',
      'owner' => '擁有者',
      'The package description.' => '套件描述。',
      'Save Paths' => '儲存路徑',
      'Edit Paths' => '編輯路徑',
      'Owners User Guide' => '擁有者的使用者指南',
      'Dominion' => 'Dominion',
      'Configure Owners.' => '設置擁有者。',
      'Weak' => '弱',
      'Strong (Control All Paths)' => '強（控制全部的路徑）',
      'Custom Owners fields.' => '自定義擁有者欄位。',
      'Dominion setting information.' => 'Dominion 設定資訊。',
      'Review All Changes' => '檢閱全部的更改',
      'Owners Package' => '擁有者套件',
      'Browse Packages by Owner' => '按擁有者區分來瀏覽套件',
      'Change package dominion rules.' => '更改套件的 Dominion 規則。',
      'No Autoreview' => '無自動檢閱',
      'Create a Package' => '建立套件',
      '[Package]' => '[套件]',
      'Owned' => '已擁有',
      '%s added %s owner(s): %s.' => '%s添加了 %s 位擁有者：%s。',
      'Human-readable description of the package.' => '套件的人類可讀描述。',
      'Auditing' => '正在稽查',
      'Strong' => '強',
      'Packages: ...' => '套件：…',
      'Activate Package' => '有效套件',
      'This package will become active again.' => '此套件將會再次生效。',
      '%s activated this package.' => '%s啟用了此套件。',
      'List of package owners.' => '套件擁有者清單。',
      'PACKAGE DETAIL' => '套件詳細資訊',
      'Edit Paths: %s' => '編輯路徑：%s',
      'Package %d' => '套件%s',
      'Add New Path' => '添加新路徑',
      '%s changed the audit rule for this package from %s to %s.' => '%s已將此套件的稽查規則從%s更改為%s。',
      'Active Packages' => '有效套件',
      'Exclude' => '排除',
      'Archive Package' => '封存套件',
      'Weak (Control Unowned Paths)' => '弱（控制未擁有的路徑）',
      'Auto audit information.' => '自動稽查資訊。',
      'This package will be marked as archived.' => '此套件將會被標記為封存。',
    );
  }

}
