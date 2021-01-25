<?php

final class PhabricatorPholioZhHant
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hant';
  }

  protected function getTranslations() {
    return array(
      'This mock will be closed.' => '此畫面模型將會關閉。',
      'This image will be removed from the mock.' => '此圖片將從畫面模型裡移除。',
      '%s replaced %s with %s.' => '%s 以%3$s替換了%2$s。',
      'Edit Mock: %s' => '編輯畫面模型：%s',
      'View Mock' => '檢視畫面模型',
      'Review Mocks and Design' => '檢閱畫面模型與設計',
      '%s added %d image(s): %s.' => '%s 添加了 %s 張圖片：%s。',
      'Close Mock' => '關閉畫面模型',
      '%s closed mock %s.' => '%s關閉了畫面模型%s。',
      'A mock\'s status changes.' => '畫面模型的狀態更改。',
      'Open Mocks' => '開放畫面模型',
      'No image attached!' => '沒有附加圖片！',
      '%s closed this mock.' => '%s關閉了此畫面模型。',
      '%s removed %s task(s) for %s: %s.' => '%s 移除了 %s 個對於%s的任務：%s。',
      '%s created this mock.' => '%s建立了此畫面模型。',
      'Pholio Mocks' => 'Pholio 畫面模型',
      '%s removed %d image(s): %s.' => '%s 移除了 %s 張圖片：%s。',
      '%s edited task(s) for %s, added %s: %s; removed %s: %s.' => '%s 編輯了對於%s的任務，已添加%s：%s，已移除%s：%s。',
      'Undo' => '還原',
      'React to mocks being created or updated.' => '對正在建立或更新的畫面模型做出反應。',
      'Image ("%s") does not specify which image it replaces.' => '圖片（「%s」）沒有指定替代的圖片。',
      'Upload sets of images for review with revision history and inline comments.' => '上傳帶有修訂歷史與行內註釋的圖片集以供檢閱。',
      'Pholio' => 'Pholio',
      'Image ("%s") belongs to the wrong object ("%s", expected "%s").' => '圖片（「%s」）屬於錯誤的對象（「%s」，預期為「%s」）。',
      '%s updated the mock\'s description.' => '%s更新了畫面模型的描述。',
      '%s updated image descriptions of %s.' => '%s 更新了%s的圖片描述。',
      'File is not viewable.' => '檔案不可檢視。',
      'Edit Inline Comment' => '編輯行內註釋',
      '%s added an inline comment to %s.' => '%s 添加了行內註釋到%s。',
      'You can not query for inline comments without also querying for images.' => '您不能在沒有查詢圖片情況下查詢行內註釋。',
      'Someone comments on a mock.' => '有人在畫面模型上做了註釋。',
      'Uploading Image...' => '正在上傳圖片…',
      'History Beckons' => '召喚歷史',
      'Mock Fields' => '畫面模型欄位',
      'Pholio Mock' => 'Pholio 畫面模型',
      'Open Pholio Mock' => '開放 Pholio 畫面模型',
      'Create Mock' => '建立畫面模型',
      'All Mocks' => '所有畫面模型',
      'Click here, or drag and drop images to add them to the mock.' => '在此點擊，或是托放圖片來添加到畫面模型。',
      'A mock\'s owner can always view and edit it.' => '畫面模型的擁有者可以對其做出檢視與編輯。',
      'Interacting with Pholio Mocks' => '與 Pholio 畫面模型互動',
      'Upload Complete...' => '上傳完成…',
      'Things before they were cool.' => '在事情看起來沒問題之前。',
      'Current Revision' => '目前修訂版本',
      '[Pholio]' => '[Pholio]',
      '%s opened mock %s.' => '%s開放了畫面模型%s。',
      'Mock Description' => '畫面模型描述',
      '%s edited task(s), added %s: %s; removed %s: %s.' => '%s 編輯了任務，已添加%s：%s，已移除%s：%s。',
      '%s updated an image\'s (%s) description.' => '%s 更新了圖片（%s）的描述。',
      'Open Mock' => '開放畫面模型',
      'Replaced image ("%s") belongs to the wrong mock ("%s", expected "%s").' => '替代圖片（「%s」）屬於錯誤的畫面模型（「%s」，預期為「%s」）。',
      'Other mock activity not listed above occurs.' => '未列於上方所發生的其它畫面模型活動。',
      'MOCK DETAIL' => '畫面模型詳細資訊',
      '%s opened this mock.' => '%s開放了此畫面模型。',
      'Mock History' => '畫面模型歷史',
      'Email Commands: Mocks' => '電子郵件指令：Mocks',
      'No image exists with PHID "%s".' => '不存在帶有 PHID「%s」的圖片。',
      '%s renamed an image (%s) from %s to %s.' => '%s 已將圖片（%s）從%s重新命名成%s。',
      '%s updated an image\'s (%s) sequence.' => '%s 更新了圖片（%s）的序列。',
      '%s updated image sequence of %s.' => '%s 更新了%s的圖片序列。',
      '%s added inline comment(s).' => '%s 添加了行內註釋。',
      'Mock image names must not be longer than %s character(s).' => '畫面模型圖片的名稱不可超過 %s 個字元。',
      'Unknown (ID %d)' => '未知（ID %s）',
      'Edit Mock' => '編輯畫面模型',
      'By %s on %s' => '在 %2$s 由 %1$s',
      'Mocks must have a name.' => '畫面模型必須要有名稱。',
      'Image "%s":' => '圖片「%s」：',
      'Close Pholio Mock' => '關閉 Pholio 畫面模型',
      '%s updated images of %s.' => '%s 更新了%s的圖片。',
      '%s added %s task(s) for %s: %s.' => '%s 添加了 %s 個對於%s的任務：%s。',
      'You must add at least one image to the mock.' => '您必須添加至少一個圖片到畫面模型裡。',
      'This page documents the commands you can use to interact with mocks in Pholio.' => '此頁面記錄了您可與在 Pholio 裡的畫面模型互動的指令。',
      'Unable to load replacement image ("%s"): %s' => '無法載入取代圖片（「%s」）：%s',
      '%s renamed this mock from %s to %s.' => '%s將此畫面模型從%s改名成%s。',
      'Test rules which run when a mock is created or updated.' => '在畫面模型建立或更新時運行的測試規則。',
      'Inline Comment' => '行內註釋',
      'Mock names must not be longer than %s character(s).' => '畫面模型的名稱不可超過 %s 個字元。',
      '%s updated the image names of %s.' => '%s 已上傳%s名稱圖片。',
      'Unable to load replaced image ("%s"): %s' => '無法載入替代圖片（「%s」）：%s',
      'This mock will become open again.' => '此畫面模型將會再次開放。',
      'Create a Mock' => '建立一個畫面模型',
      '%s edited image(s), added %d: %s; removed %d: %s.' => '%s 編輯了圖片，已添加%s：%s，已移除%s：%s。',
      'Mock images or descriptions change.' => '畫面模型圖片或描述更改。',
    );
  }

}
