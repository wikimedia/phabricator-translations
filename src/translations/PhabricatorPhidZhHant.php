<?php

final class PhabricatorPhidZhHant
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hant';
  }

  protected function getTranslations() {
    return array(
      'Retrieve information about an arbitrary PHID.' => '檢索有關任意 PHID 的資訊。',
      'Requested handle "%s" was not loaded.' => '請求的處理「%s」並未載入。',
      'Restricted %s' => '受限的%s',
      'Trying to mutate a %s, but this is not permitted; handle lists are immutable.' => '嘗試變動%s；但不被允許，處理清單為不可變動。',
      '%s class "%s" has an invalid %s property. PHID constants must be a four character uppercase string.' => '%s類別「%s」有無效的屬性%s。PHID 常數應為四個大寫字母的字串。',
      'Attempting to load PHID "%s", but it was not requested by any handle list.' => '嘗試載入的 PHID「%s」沒有被任何處理清單請求。',
      'The objects you have listed include objects of the wrong type (%s).' => '您所列出的對象裡包含有錯誤類型對象（%s）。',
      'Application Email' => '申請電子郵件',
      'Look up objects by name.' => '依名稱查找對象。',
      'Trying to render a handle which does not exist!' => '嘗試呈現一個不存在的處理！',
      'Retrieve information about arbitrary PHIDs.' => '檢索有關任意 PHID 的資訊。',
      'Unknown Object (%s)' => '未知對象（%s）',
      'The objects you have listed include objects which do not exist (%s).' => '您所列出的對象裡包含有不存在對象（%s）。',
      'Trying to create a new sublist of an existing handle list, but PHID "%s" does not appear in the parent list.' => '嘗試建立現有處理清單的子清單，但 PHID「%s」並未出現在父級清單裡。',
      'Replaced by \'phid.query\'.' => '替換為「phid.query」。',
      'The objects you have listed include objects of the wrong type (%s) and objects which do not exist (%s).' => '您所列出的對象含有錯誤類型對象（%s），以及不存在對象（%s）。',
      'No such object exists.' => '不存在這樣的對象。',
      'Can not generate PHID with no type.' => '無法產生沒有類型的 PHID。',
    );
  }

}
