<?php

final class PhabricatorDoorkeeperZhHant
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hant';
  }

  protected function getTranslations() {
    return array(
      'Phabricator is running in silent mode.' => 'Phabricator 在安靜模式下運行。',
      'Available publishers class names are:' => '可用的發布者類別名稱為：',
      'To enable synchronization into Asana, enter an Asana Workspace ID here.
    NOTE: This feature is new and experimental.' => '要啟動同步到 Asana，請在此輸入 Asana 工作空間 ID。
    註：此為新的實驗功能。',
      'JIRA %s %s' => 'JIRA %s %s',
      'Workspace ID' => '工作空間 ID',
      '%s has no visible object on the other side; this likely indicates the Asana task has been deleted.' => '%s 在另一端沒有可見的物件，這可能表示著 Asana 任務已被刪除。',
      'Using publisher \'%s\'.' => '使用發布者「%s」。',
      'Connect to Other Software' => '連接到其它軟體',
      'Failed to update object %s using user %s.' => '使用用戶 %2$s 來更新物件 %1$s 失敗。',
      'You can find an Asana project ID by clicking the project in Asana and then examining the URL:
      lang=txt
      https://app.asana.com/0/12345678901234567890/111111111111111111
                              ^^^^^^^^^^^^^^^^^^^^
                            This is the ID to use.
    ' => '您可以透過點擊在 Asana 的專案，然後檢查網址來找出 Asana 專案 ID：
      lang=txt
      https://app.asana.com/0/12345678901234567890/111111111111111111
                              ^^^^^^^^^^^^^^^^^^^^
                            這是要使用的 ID。',
      'No Asana provider configured.' => '沒有設置 Asana 提供者。',
      'Asana integration options.' => 'Asana 整合選項。',
      'JIRA integration is configured not to post anything.' => 'JIRA 整合被設置成不發布任何事物。',
      'Skipping main task update, object is no longer visible.' => '忽略主任務更新，物件將不再可見。',
      'Doorkeeper' => 'Doorkeeper',
      'Imported From' => '匯入自',
      'When Phabricator creates tasks in Asana, it can add the tasks to Asana projects based on which application the corresponding object in Phabricator comes from. For example, you can add code reviews in Asana to a "Differential" project.
    NOTE: This feature is new and experimental.' => '當 Phabricator 在 Asana 建立任務時，會依據相應來自 Phabricator 物件的應用程式，來添加任務到 Asana 專案。例如，您可以添加在 Asana 代碼檢視到「Differential」專案。
    註：此為新的實驗功能。',
      'No related users have linked Asana accounts.' => '沒有已連結到 Asana 帳號的關聯使用者。',
      'Story is about an unsupported object type.' => 'Story 是有關未支援的物件類型。',
      'No JIRA provider configured.' => '沒有設置 JIRA 提供者。',
      '%s could not be loaded.' => '%s 無法載入。',
      'External Object' => '外部物件',
      'JIRA %s' => 'JIRA %s',
      'Asana Task %s' => 'Asana 任務 %s',
      'GitHub Issue %s' => 'GitHub 問題 %s',
      'Asana Workspace ID to publish into.' => '要發布到的 Asana 工作空間 ID。',
      '⚠ DO NOT EDIT THIS TASK ⚠
    ☠ Your changes will not be reflected in Phabricator.
    ☠ Your changes will be destroyed the next time state is synchronized.' => '⚠ 不要編輯此任務 ⚠
    ☠ 您的更改內容不會反應在 Phabricator 上。
    ☠ 您的更改內容會在下一次狀態為同步時被消除。',
      'Removing subtask edge to %s, foreign object is not visible.' => '移除子任務邊際至%s，外來物件為不可見。',
      'Integration with Asana' => '與 Asana 整合',
      'Doorkeeper worker \'%s\' is not enabled.' => 'Doorkeeper 工作者「%s」未啟動。',
      'Object has no followers or active/passive users.' => '物件沒有關注者或積極/消極使用者。',
      'Skipping main task update, cursor is ahead of the story.' => '跳過主任務更新，游標在 Story 前頭。',
      'Asana: %s' => 'Asana：%s',
      'Failed to load external object after collision.' => '在衝突後載入外部物件失敗。',
      'To specify projects to add tasks to, enter a JSON map with publisher class names as keys and a list of project IDs as values. For example, to put Differential tasks into Asana projects with IDs `123` and `456`, enter:
      lang=txt
      {
        "DifferentialDoorkeeperRevisionFeedStoryPublisher" : [123, 456]
      }
    ' => '要指定要添加任務的專案，請輸入以發布類別名稱作為鍵、專案 ID 清單作為值的 JSON 對應內容。例如，將 Differential 任務放入到帶有 ID `123` 與 `456` 的 Asana 專案，請輸入：
      lang=txt
      {
        "DifferentialDoorkeeperRevisionFeedStoryPublisher" : [123, 456]
      }',
      'Synchronization of child task from Asana failed!' => '從 Asana 同步子任務失敗！',
      'Story is about an object with no linked JIRA issues.' => 'Story 是沒有連結到 JIRA 問題的物件。',
      'GitHub User %s' => 'GitHub 使用者 %s',
      'GitHub Issue ID "%s" is not properly formatted. Expected an ID in the form "owner/repository#123".' => 'GitHub 問題 ID「%s」格式不正確 。預期形式的 ID 為「owner/repository#123」。',
      'Workspace Name' => '工作空間名稱',
      'Unable to find any Asana user with valid credentials to pull an OAuth token out of.' => '無法找到任何帶有能取出 OAuth 權杖之有效憑證的 Asana 使用者。',
      'Synchronization of parent task from Asana failed!' => '從 Asana 同步上級任務失敗！',
      'Optional Asana projects to use as application tags.' => '使用為應用程式標籤的選用 Asana 專案。',
      'The Asana Workspaces your linked account has access to are:
    %s' => '您的連結帳號能存取的 Asana 工作空間為：
    %s',
      'No users to act on linked JIRA objects.' => '沒有使用者可以對連結的 JIRA 物件進行操作。',
      'Updating main task.' => '更新主要任務中。',
      'Story object has no corresponding external JIRA objects.' => 'Story 物件沒有相應的外部 JIRA 物件。',
    );
  }

}
