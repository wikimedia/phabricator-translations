<?php

final class PhabricatorPhrictionZhHant
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hant';
  }

  protected function getTranslations() {
    return array(
      'The path to the document.' => '文件的路徑。',
      'No such document.' => '沒有這樣的文件。',
      'Edit Older Version %s...' => '編輯較舊版本 %s…',
      'DOCUMENT DIFF' => '文件差異',
      'A moved document can not be moved again.' => '移動過的文件不能再次移動。',
      'Next Change »' => '下一次更改 »',
      'Last Edited' => '最新編輯',
      'Publish Draft' => '發布草稿',
      'Moved' => '已移動',
      'Other document activity not listed above occurs.' => '未列於上方所發生的其它文件活動。',
      'Version %d of %d: ' => '%2$s的版本 %1$s：',
      'DOCUMENT CONTENT' => '文件內容',
      'EDIT NOTES' => '編輯註解',
      'Missing Ancestor' => '缺少源始',
      'This document has been moved to %s. You can edit it to put new content here, or use history to revert to an earlier version.' => '此文件已被移動到%s。您可以編輯它來放入新的內容，或是使用歷史功能來還原成較舊的版本。',
      'Retrieve information about a Phriction document.' => '取得關於 Phriction 文件的資訊。',
      'A document\'s subscribers change.' => '文件的訂閱者更改。',
      'Unknown document status \'%s\'!' => '未知的文件狀態「%s」！',
      'Overwrite Changes' => '覆寫更改',
      'Can Not Delete Document!' => '無法刪除文件！',
      'No parent/ancestor paths specified.' => '沒有指定上層/源始路徑。',
      'Unknown URI type \'%s\'!' => '不明的 URI 類型「%s」！',
      'Document path "%s" is not a valid path. The normalized form of this path is "%s".' => '文件路徑「%s」不是有效的路徑。此路徑的規範格式為「%s」。',
      'Stubbed' => '已存根',
      'There is no document here, but you may create it.' => '在此沒有文件，而您可以來建立一份。',
      'Edit Notes' => '編輯註解',
      'Phriction Wiki Document' => 'Phriction wiki 文件',
      'Phriction Document' => 'Phriction 文件',
      'You can not move this document there, because it would overwrite an existing document which is already at that location. Move or delete the existing document first.' => '您無法移動此文件到那裡，因為這會覆寫已在該位置上的現有文件。請先移動或刪除現有文件。',
      'To edit a wiki document, you must also be able to view all of its ancestors.' => '要編輯一份 wiki 文件，您必須要有權限能檢視該文件的所有源始。',
      'Content Changes' => '內容更改',
      'This version of the document is already the published version.' => '此文件的版本已是發布版本。',
      'Document Hierarchy' => '文件等級',
      'More...' => '更多…',
      'A document\'s title changes.' => '文件的標題更改。',
      'Save and Publish' => '儲存與發布',
      'Current Path' => '目前路徑',
      '(Untitled Document)' => '（無標題文件）',
      'Phriction User Guide' => 'Phriction 使用者指南',
      '%s moved this document to %s.' => '%s移動了此文件到 %s。',
      'Content' => '內容',
      'Update a Phriction document.' => '更新一份 Phriction 文件。',
      'Revert the published version of this document to an older version?' => '還原此文件的發布版本到這個較舊的版本？',
      'Document Content' => '文件內容',
      'Version %d' => '版本 %s',
      'Last Author' => '最新作者',
      'Another user made changes to this document after you began editing it. Do you want to overwrite their changes? (If you choose to overwrite their changes, you should review the document edit history to see what you overwrote, and then make another edit to merge the changes if necessary.)' => '有其他使用者在您編輯時做出了對於此文件的更改，您要覆寫掉他們的更改內容嗎？（如果您選擇覆寫他們的更改，您應檢閱文件修改歷史來查看您所覆寫的內容，如有需要的話再進行另一次編輯來將更改內容合併。）',
      'Can not create document because the parent document with slug %s does not exist!' => '無法建立文件，因為帶有識別%s的父級文件不存在！',
      'Edit Phriction Document Configurations' => '編輯 Phriction 文件設置',
      'Accept Path' => '接受路徑',
      'Content object "%s" can not be published because it belongs to a different document.' => '無法發布內容物件「%s」，因為這隸屬在不同的文件下。',
      'Edit Current Version %s...' => '編輯目前版本 %s…',
      'Edit this Document' => '建立此文件',
      'Document History: %s' => '文件歷史：%s',
      'Ancestor Paths' => '源始路徑',
      'To view a wiki document, you must also be able to view all of its ancestors. The most-restrictive view policy of this document\'s ancestors is "%s".' => '要檢視 wiki 文件，您必須也要能夠檢視該文件的所有源始。此文件源始的最嚴格檢視方針為「%s」。',
      'Wiki Documents' => 'wiki 文件',
      'This document has been moved. You can edit it to put new content here, or use history to revert to an earlier version.' => '此文件已被移動。您可以編輯它來放入新的內容，或是使用歷史功能來還原成較舊的版本。',
      'Edit Draft Version %s...' => '編輯草稿版本 %s…',
      'Document this content is for.' => '此內容的文件。',
      'You are viewing an unpublished draft of this document.' => '您正在檢視此文件的未發布草稿。',
      '%s deleted this document.' => '%s刪除了此文件。',
      '<%s>' => '<%s>',
      'This method is frozen and will eventually be deprecated. New code should use "phriction.content.search" instead.' => '此方法已被凍結，並將會被棄用。新的代碼應改用「phriction.content.search」。',
      'An already deleted document can not be deleted.' => '無法刪除已刪除過的文件。',
      'Stub' => '小作品',
      'This method is frozen and will eventually be deprecated. New code should use "phriction.document.search" instead.' => '此方法已被凍結，並將會被棄用。新的代碼應改用「phriction.document.search」。',
      '%s published a new version of %s.' => '%s發布了%s的新版本。',
      'No such document exists.' => '不存在這樣的文件。',
      'Edit Existing Document?' => '編輯現有文件？',
      'Read information about Phriction documents.' => '閱讀關於 Phriction 文件的資訊。',
      'The document %s already exists. Do you want to edit it instead?' => '文件「%s」已存在。您想要改成來編輯它嗎？',
      'A deleted document can not be moved.' => '刪除過的文件無法移動。',
      'Printable Page' => '可列印頁面',
      'Welcome to Phriction' => '歡迎來到 Phriction',
      'CHANGES TO DOCUMENT CONTENT' => '更改文件內容',
      '%s moved %s from %s' => '%s從%3$s移動了%2$s。',
      'This document is empty. You can edit it to put some proper content here.' => '此文件為空。您可以編輯它並放入一些合適的內容。',
      'Publish Draft?' => '發布草稿？',
      'A document is deleted.' => '文件已刪除。',
      'Would you like to use the path %s instead?' => '您想要改成用路徑 %s？',
      'Delete Document?' => '刪除文件？',
      'Document Deleted' => '文件已刪除',
      'Content version.' => '內容版本。',
      'Documents must have content.' => '文件必須要有內容。',
      'You can not move a document to its existing location. Choose a different location to move the document to.' => '您不能移動文件到現有位置。請挑選不同位置來移動文件。',
      '"%s" <%s>' => '「%s」<%s>',
      'Document History' => '文件歷史',
      'Draft %d' => '草稿 %s',
      'Original Change' => '原有更改',
      'Empty Parent Document' => '空白父級文件',
      'Document already exists!' => '文件已存在！',
      '%s moved %s to %s.' => '%s移動了%s到%s。',
      'Phriction is a simple and easy to use wiki for keeping track of documents and their changes.' => 'Phriction 是個用於追蹤文件與其更改情況的簡單易用 wiki。',
      '« Previous Change' => '« 上一次更改',
      'The path you entered (%s) is not a valid wiki document path. Paths may not contain spaces or special characters.' => '您所輸入的路徑（%s）不是有效的 wiki 文件路徑。路徑不能包含空白或是特殊字元。',
      'View Draft Version' => '檢視草稿版本',
      'Edit Conflict' => '編輯衝突',
      '%s edited the content of %s.' => '%s編輯了%s的內容。',
      'This document has unpublished draft changes.' => '此文件有未發布的草稿變更。',
      'Version %s vs %s' => '版本 %s vs %s',
      '%s edited the content of this document.' => '%s編輯了此文件的內容。',
      'This document is already deleted. You must specify content to re-create the document and make further edits.' => '此文件已被刪除。您必須指定內容來重新建立文件，來做出進一步編輯。',
      'Parent Paths' => '上層路徑',
      '%s published a new version of this document.' => '%s發布了此文件的新版本。',
      'You are viewing the current published version of this document.' => '您正在檢視此文件的目前發布版本。',
      'Update the published version of this document to this newer version?' => '更新此文件的發布版本到這個較新的版本？',
      '%s changed the title from %s to %s.' => '%s已將標題從%s更改成%s。',
      'Publish Older Version?' => '發布較舊版本？',
      'Hierarchy' => '等級',
      'Save as Draft' => '儲存成草稿',
      'Edited by %s' => '由%s編輯',
      'No Document Here' => '在此沒有文件',
      'A document\'s content changes.' => '文章的內容更改。',
      'A moved document can not be deleted.' => '移動過的文件不能被刪除。',
      'Adjust Path' => '調整路徑',
      'Read information about Phriction document history.' => '閱讀關於 Phriction 文件歷史的資訊。',
      'Test rules which run when a wiki document is created or updated.' => '在 wiki 文件建立或更新時運行的測試規則。',
      'A stub document can not be deleted.' => '內容短小的文件不能被刪除。',
      'Can not move document because the parent document with slug %s does not exist!' => '無法移動文件，因為帶有識別%s的父級文件不存在！',
      '%s by %s, %s' => '由%2$s%1$s，%s',
      'Publish Older Version' => '發布較舊版本',
      'Create this Document' => '建立此文件',
      'This engine is used to edit Phriction documents.' => '此引擎使用來編輯 Phriction 文件。',
      'Edits' => '編輯',
      'Already Published' => '已發布過',
      'Retrieve history about a Phriction document.' => '取得關於 Phriction 文件的歷史。',
      'Unable to load Content object with PHID "%s".' => '無法載入 PHID 為「%s」的內容物件。',
      'Create a Phriction document.' => '建立一份 Phriction 文件。',
      'You are viewing an older version of this document, as it appeared on %s.' => '您正在檢視此文件的舊版本，如同在%s所示。',
      'Status information about the document.' => '關於文件的狀態資訊。',
      'React to wiki documents being created or updated.' => '對正在創建或更新的 wiki 文件做出反應。',
      'Document Fields' => '文件欄位',
      'All Content' => '所有內容',
      'Phriction Content' => 'Phriction 內容',
      'Phriction Document Content' => 'Phriction 文件內容',
      'Created through child' => '透過子項建立',
      'Page Not Found' => '找不到頁面',
      'New Document' => '新文件',
      '%s stubbed out this document when creating %s.' => '%s在建立%s時將此文件根除。',
      'Empty Document' => '空文件',
      'Move Here' => '移動到此',
      'Get the content of documents or document histories.' => '取得文件或文件歷史的內容。',
      'Create a new document at' => '建立一個新文件在',
      'New Path' => '新路徑',
      'Phriction Documents' => 'Phriction 文件',
      'A stub document can not be moved.' => '內容短小的文件無法移動。',
      'You can not create a document which does not have a parent.' => '您不能建立沒有父級文件的文件。',
      'Most Recent Change' => '最近更改',
      'Really delete this document? You can recover it later by reverting to a previous version.' => '確定要刪除此文件？您可以事後透過還原功能來恢復成之前的版本。',
      'This document has been deleted. You can edit it to put new content here, or use history to revert to an earlier version.' => '此文件已被刪除。您可以編輯它來放入新的內容，或是使用歷史功能來還原成較舊的版本。',
      'Wiki Document %d' => 'wiki 文件：%s',
      'Move Away' => '移走',
    );
  }

}
