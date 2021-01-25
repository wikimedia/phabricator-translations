<?php

final class PhabricatorAuditZhHant
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hant';
  }

  protected function getTranslations() {
    return array(
      'A commit is created.' => '一個提交已建立。',
      'USERS' => '使用者',
      'Find commits with particular identifiers (usually, hashes). Supports full or partial identifiers (like "abcd12340987..." or "abcd1234") and qualified or unqualified identifiers (like "rXabcd1234" or "abcd1234").' => '查找帶有特定識別碼（通常是雜湊值）的提交。支援整體或部分的識別碼（例如像「abcd12340987...」或是「abcd1234」），以及合乎或不合規範的識別碼（例如像「rXabcd1234」或是「abcd1234」）。',
      '%s resigned from auditing %s.' => '%s放棄此稽查%s。',
      'Specified maximum date must come after specified minimum date.' => '指定的最大日期必須晚於指定的最小日期。',
      'A commit\'s projects change.' => '提交的專案更改。',
      '%s added subscribers: %s.' => '%s添加了訂閱者：%s。',
      'Query audit requests.' => '查詢稽查請求。',
      'Specify "--all" to affect everything, or a list of specific commits or repositories to affect.' => '指定「--all」來影響所有內容，或著是指定別的提交清單、版本庫來影響。',
      'Update all commits in all repositories.' => '更新在所有版本庫的所有提交。',
      '%s added subscribers...' => '%s添加了訂閱者…',
      'A commit is closed.' => '一個提交已關閉。',
      '%s added auditors...' => '%s添加了稽查者…',
      '%s resigned from this audit.' => '%s放棄此稽查。',
      'Updating "%s" (%s)...' => '正在更新「%s」（%s）…',
      '%s removed auditors from %s: %s.' => '%s移除了來自%s的稽查者：%s。',
      'Select only audits in a given list of repositories.' => '僅選擇在指定版本庫清單裡的稽查。',
      'No synchronization changes for "%s".' => '沒有對於「%s」的同步更改。',
      'Find or exclude unreachable commits which are not ancestors of any branch, tag, or ref.' => '尋找或排除掉並非任何分支、標籤、或參照之源始的無法訪問提交。',
      'Welcome to Audit' => '歡迎來到稽查',
      'Select only audits for commits on or after the given date.' => '僅選擇在指定日期之後的提交稽查。',
      'Object "%s" is not a valid object.' => '物件「%s」不是有效的物件。',
      'Hide Unreachable Commits' => '隱藏無法訪問的提交',
      'Audit Not Required' => '不需要稽查',
      '%s committed %s (authored by %s).' => '%s提交了%s（作者為%s）。',
      'Select only audits for commits on or before the given date.' => '僅選擇在指定日期之前的提交稽查。',
      'All Commits' => '所有提交',
      '%s added auditors to %s: %s.' => '%s添加了稽查者到%s：%s。',
      'Select only audits with the given IDs.' => '僅選擇指定 ID 的稽查。',
      'A commit has an auditor resign.' => '提交有稽查者放棄。',
      'Find commits with given audit statuses.' => '尋找帶有指定稽查狀態的提交。',
      'Select only audits in the given status. By default, only open audits are selected.' => '僅選擇依照指定狀態的稽查。預設僅會選擇狀態為開放的稽查。',
      'Auditors: %s' => '稽查者：%s',
      'Object "%s" is not a valid repository or commit.' => '物件「%s」不是有效的版本庫或提交。',
      'Unable to parse date "%s". Use a format like "%s".' => '無法解析日期「%s」。請使用像是「%s」的格式。',
      'Failed to load commit during transaction finalization!' => '在處理完成期間載入提交失敗！',
      'Update commits to make their summary audit state reflect the state of their actual audit requests. This can fix inconsistencies in database state if audit requests have been mangled accidentally (or on purpose).' => '更新提交來讓它們的摘要稽查狀態反應出實際稽查請求狀態。若稽查請求被意外（或出於目的）中斷，這可以修正資料庫狀態不一致情況。',
      'A commit has auditors added.' => '提交添加了稽查者。',
      'Select only audits by a given list of users.' => '僅選擇依照指定使用者清單的稽查。',
      'Identifiers' => '識別碼',
      '%s edited subscribers; added: %s, removed: %s.' => '%s編輯了訂閱者，添加了：%s，移除了：%s。',
      'Failed to reload commit ("%s").' => '重新載入提交失敗（「%s」）。',
      'Auditor' => '稽查者',
      '%s closed the audit of %s.' => '%s關閉了%s的稽查。',
      'none' => '無',
      '%s removed auditors: %s.' => '%s移除了稽查者：%s。',
      'Show what would be deleted, but do not actually delete anything.' => '顯示將要被刪除的（不會做出刪除）。',
      'Select only audits for the given commits.' => '僅選擇指定提交的稽查。',
      'Find commits which affect given packages.' => '尋找影響到指定套件的提交。',
      'Show Only Unreachable Commits' => '僅顯示無法訪問的提交',
      '(This commit affected more than %d files. Only %d are shown here and additional ones are truncated.)' => '（此提交影響超過 %s 個檔案。在此僅顯示出%s，其餘的皆被截斷。）',
      'Other commit activity not listed above occurs.' => '未列於上方所發生的其它提交活動。',
      'Update package relationships for commits.' => '更新提交的套件關係。',
      'Find commits where given users, projects, or packages are auditors.' => '查找指定使用者、專案、或是套件為稽查者的提交。',
      '%s removed subscribers: %s.' => '%s移除了訂閱者：%s。',
      'Synchronizing "%s": "%s" -> "%s".' => '「%s」同步中：「%s」->「%s」。',
      '%s edited auditors; added: %s, removed: %s.' => '%s編輯了稽查者，添加了：%s，移除了：%s。',
      'No audits match the query.' => '沒有符合查詢的稽查。',
      'Find commits which are ancestors of a particular ref, like "master".' => '尋找為特定參照之源始的提交，例如「master」。',
      'Was CC\'d' => '抄收',
      'Post-commit code review and auditing. Audits you are assigned to will appear here.' => '提交後的程式碼檢閱與稽查。您所分配到的稽查會顯示於此。',
      'Ancestors Of' => '源始',
      '%s committed %s.' => '%s提交了%s。',
      'Find commits authored by particular users.' => '尋找由特定使用者作出的提交。',
      'Really delete these %s audit(s)? They will be permanently deleted and can not be recovered.' => '準備要刪除這 %s 個稽查？它們會被永久刪除並且無法還原。',
      'A commit has a concerned raised against it.' => '有提交被引起關注。',
      'Someone comments on a commit.' => '有人在提交上做了評論。',
      'Find commits where given users, projects, or packages are responsible for the next steps in the audit workflow.' => '查找指定使用者、專案、或套件是負責稽查工作流程後續步驟的提交。',
      'Specify either a list of objects to affect or "--all", but not both.' => '指定要影響的物件清單或著是用「--all」，不能兩者同時進行。',
      'This is a dry run, so no changes will be made.' => '此為空運行，不會做出任何更改。',
      'Audits' => '稽查',
      'Unreachable' => '無法訪問',
      'Active Audits' => '現行稽查',
      'Browse and Audit Commits' => '瀏覽並稽查提交',
      'Delete audit requests matching parameters.' => '刪除符合參數的稽查請求。',
      '%s closed this audit.' => '%s關閉了此稽查。',
      'Find commits in particular repositories.' => '在特定版本庫裡查找提交。',
      'No such user with username "%s"!' => '沒有像「%s」這樣使用者名稱的使用者！',
      'No such commit "%s"!' => '沒有「%s」這樣的提交！',
      'Deleting audit %d...' => '正在刪除稽查%s…',
      'Update named commits and repositories.' => '更新命名的提交與版本庫。',
      '%s added auditors: %s.' => '%s添加了稽查者：%s。',
      'A commit\'s subscribers change.' => '提交的訂閱者更改。',
      'Audit Requested' => '稽查已請求',
      'Audit' => '稽查',
      'No commits found.' => '找不到提交。',
      '%s added auditors to %s...' => '%s添加了稽查者到%s…',
      '%s edited auditors for %s; added: %s, removed: %s.' => '%s編輯了%s的稽查者，添加了：%s，移除了：%s。',
      'A commit is accepted.' => '一個提交已接受。',
    );
  }

}
