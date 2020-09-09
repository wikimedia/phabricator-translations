<?php

final class PhabricatorMacroZhHant
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hant';
  }

  protected function getTranslations() {
    return array(
      'Play audio continuously, treating the macro as an audio source. Best for ambient sounds.' => '持續播放音訊，將表情圖視為音訊來源。最適合用於環境音效。',
      'This page documents the commands you can use to interact with image macros.' => '此頁面記錄了您可與表情圖圖片互動的指令。',
      'Create Meme' => '建立迷因',
      'Active Macros' => '有效表情圖',
      'Validity of macro "%s"' => '表情圖「%s」的效度',
      'Upload New Audio' => '上傳新音訊',
      'Image Macro "%s"' => '表情圖圖片「%s」',
      'MACRO DETAIL' => '表情圖詳細資訊',
      'Macro Image' => '表情圖圖片',
      'Image File' => '圖片檔案',
      'Name of the macro.' => '表情圖名稱。',
      'Create a Macro' => '建立一個表情圖',
      'Type an emoji name...' => '輸入表情圖示名稱…',
      'Apply transactions to create a new macro or edit an existing one.' => '申請辦理來建立新的或編輯現有表情圖。',
      'Do not play audio.' => '不能播放音訊。',
      'Edit Macro %s' => '編輯表情圖%s',
      '%s set the audio for %s to loop.' => '%s將用於%s的音訊設定成循環播放。',
      '(Marked With Any Flag)' => '（以任何標籤標記）',
      'Active and Disabled Macros' => '有效與已停用的表情圖',
      'Disabled Macros' => '已停用表情圖',
      'Configure creation and editing of Macro images.' => '設置表情圖的建立與編輯。',
      'Created on %s' => '建立於 %s',
      'Can Manage Macros' => '可管理表情圖',
      '%s renamed this macro from %s to %s.' => '%s將此表情圖從%s改名成%s。',
      '%s set the audio for %s to play once.' => '%s將用於%s的音訊設定成播放一次。',
      'Edit Audio: %s' => '編輯音訊：%s',
      'New macro name.' => '新的表情圖名稱。',
      'No matching flags.' => '沒有符合的標籤。',
      'Audio Behavior' => '音訊行為',
      'To change the audio for a macro, you must upload an audio file.' => '要更改表情圖的音訊，您必須要上傳一個音訊檔案。',
      'Image macros must have a file.' => '表情圖圖片必須是檔案。',
      'Save Audio Behavior' => '儲存音訊行為',
      '%s set the audio to play once.' => '%s將音訊設定成播放一次。',
      'Macro %s: %s %s' => '表情圖%s：%s %s',
      'Image file to import.' => '匯入的圖片檔案。',
      '%s changed the image for this macro.' => '%s更改了用於此表情圖的圖片。',
      'Do Not Play' => '無法播放',
      'Below' => '以下',
      'Created in ages long past' => '建立在很久之前',
      '%s changed the image for %s.' => '%s更改了用於%s的圖片。',
      'Above' => '以上',
      'Macro' => '表情圖',
      'Edit Audio' => '編輯音訊',
      'Failed to imagecreatefromstring() image template data.' => 'imagecreatefromstring() 圖片模板資料失敗。',
      'Create Macro' => '建立表情圖',
      'Behavior' => '行為',
      'Macro name.' => '表情圖名稱。',
      '%s disabled the audio for %s.' => '%s停用了用於%s的音訊。',
      'Macro name "%s" be: at least three characters long; and contain only lowercase letters, digits, hyphens, colons, underscores, and emoji; and not be composed entirely of latin symbols.' => '表情圖名稱「%s」為：至少三個字元長度，只能包含小寫字母、數字、連字號、冒號、底線、以及表情圖示，並且不能完全由拉丁文符號組成。',
      'Macro "%s"' => '表情圖「%s」',
      'Macro was not found.' => '找不到表情圖。',
      'Activate Macro' => '啟用表情圖',
      'The file you uploaded is invalid: it is not recognizable as a valid audio file.' => '您上船的檔案無效：無法識別為是有效的音訊檔案。',
      'Image Macro' => '表情圖圖片',
      'Macro name is required.' => '表情圖名稱為必填。',
      '[Macro]' => '[表情圖]',
      'Macros' => '表情圖',
      'Retrieve image macro information.' => '取得表情圖圖片資訊。',
      'Configure Macro Image Forms' => '設置表情圖圖片形式',
      'Play audio once, when the viewer looks at the macro.' => '當檢視者觀看表情圖時，播放一次音訊。',
      'Create New Macro' => '建立新的表情圖',
      'Image Macros and Memes' => '表情圖圖片與迷因',
      '%s set the audio to loop.' => '%s將音訊設定成循環播放。',
      'Edit Macro' => '編輯表情圖',
      'Masterfully imagined by %s on %s.' => '由%s在%s精巧地想像出。',
      '%s changed the audio for %s from %s to %s.' => '%s已將用於%s的音訊從%s更改為%s。',
      'Really disable the much-beloved image macro %s? It will be sorely missed.' => '確定要停用這被受喜愛的表情圖圖片%s？我們會想念的。',
      'Audio File' => '音訊檔案',
      'Generate a meme.' => '產生一個迷因。',
      'No such macro.' => '沒有這樣的表情圖。',
      '%s disabled this macro.' => '%s停用了此表情圖。',
      'Browse Macros' => '瀏覽表情圖',
      '%s restored this macro.' => '%s恢復了此表情圖。',
      '%s attached audio to %s: %s.' => '%s附加音訊到%s：%s。',
      '%s attached audio: %s.' => '%s附加了音訊：%s。',
      '%s created this macro.' => '%s建立了此表情圖。',
      'Macros must have a name.' => '表情圖必須要有名稱。',
      '%s restored %s.' => '%s恢復了%s。',
      'Interacting with Macros' => '與表情圖互動',
      'Marked with Flag' => '以旗標標記',
      'Allows creating and editing macros.' => '允許建立與編輯表情圖。',
      'Archive Macro' => '封存表情圖',
      'Play Continuously' => '持續播放',
      'Loop' => '循環',
      '%s disabled the audio for this macro.' => '%s停用了用於此表情圖的音訊。',
      'Create easy to remember shortcuts to images and memes.' => '建立圖片與迷因的好記快捷辦法。',
      '(No Filtering)' => '（無篩選）',
      'Really disable macro?' => '確定停用表情圖？',
      'Llama Diorama' => 'Llama Diorama',
      'Browse Emojis' => '瀏覽表情圖示',
      '%s changed the audio for this macro from %s to %s.' => '%s已將此表情圖的音訊從%s更改為%s。',
      'You do not have permission to manage image macros.' => '您沒有權限管理表情圖圖片。',
      'Template "%s" is not a valid template.' => '模版「%s」不是有效的模版。',
      'Email Commands: Macros' => '電子郵件指令：Macros',
      'Type a macro name...' => '輸入表情圖名稱…',
      'Macro "%s" already exists.' => '表情圖「%s」已存在。',
      'Play Once' => '播放一次',
    );
  }

}