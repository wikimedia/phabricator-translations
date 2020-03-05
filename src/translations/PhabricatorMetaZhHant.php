<?php

final class PhabricatorMetaZhHant
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hant';
  }

  protected function getTranslations() {
    return array(
      'Information' => '資訊',
      'This application cannot be uninstalled, because it is required for Phabricator to work.' => '此應用程式無法被解除安裝，因為在 Phabricator 運作上有所需要。',
      'Syntax' => '語法',
      'You cannot install an installed application.' => '您不能安裝已安裝過的應用程式。',
      'Show First-Party Applications' => '顯示第一方應用程式',
      'Create Application' => '建立應用程式',
      'Unknown order "%s"!' => '不明排序「%s」！',
      'Really Uninstall Application?' => '確定解除安裝應用程式？',
      'Prototypes Not Enabled' => '原型未啟用',
      'Really uninstall the %s application?' => '確定解除安裝應用程式%s？',
      'Policy does not exist.' => '方針不存在。',
      'Launcher' => '啟動器',
      'To manage prototypes, enable them by setting %s in your Phabricator configuration.' => '要管理原型，請透過在您的 Phabricator 設置裡，設定%s來啓動它們',
      'This application is a prototype. %s' => '此應用程式為原型。%s',
      'This is very unusual and will leave you without any content on the Phabricator home page. You should only do this if you are certain you know what you are doing.' => '這樣做是不尋常的，因為不會在 Phabricator 首頁留下任何內容。您應該要確定清楚您在做什麼再進行。',
      'Completely Break Phabricator' => '完全中斷 Phabricator',
      '%s installed this application.' => '%s 安裝了此應用程式。',
      'Confirmation' => '確認',
      'Explore More Applications' => '瀏覽更多應用程式',
      'Uninstalled' => '已解除安裝',
      'Show Uninstalled Applications' => '顯示已解除安裝應用程式',
      'Launchable' => '可執行',
      'Save Policies' => '儲存方針',
      'Browse Applications' => '瀏覽應用程式',
      'Prototype' => '原型',
      'Edit Policies: %s' => '編輯方針：%s',
      'Create New Application' => '建立新的應用程式',
      '%s changed the "%s" policy from "%s" to "%s".' => '%s 將方針「%s」從「%s」改成「%s」。',
      'Extension' => '擴充',
      'Validation Failed' => '驗證失敗',
      'Show Installed Applications' => '顯示已安裝應用程式',
      '%s uninstalled this application.' => '%s 解除安裝了此應用程式。',
      'Capability "%s" is not editable for this application.' => '性能「%s」對於此應用程式為不可編輯。',
      'Configure' => '設置',
      'Mail Commands Overview' => '郵件指令概要',
      'Show Launchable Applications' => '顯示可執行的應用程式',
      'Show Released Applications' => '顯示已釋出的應用程式',
      'Show Non-Launchable Applications' => '顯示無法執行的應用程式',
      '%s uninstalled %s.' => '%s 解除安裝了%s。',
      'Can\'t set non-public policies to public.' => '不能設定非公共方針為公共。',
      '%s installed %s.' => '%s 安裝了%s。',
      'Phabricator is not currently configured to accept inbound mail. You won\'t be able to interact with objects over email until inbound mail is set up.' => 'Phabricator 目前未設置接受站內郵件。在站內郵件設定好之前，您無法與對象互動。',
      'Configure Application Forms' => '設置應用程式形式',
      'Show Applications w/ App Email Support' => '顯示有應用程式郵件支援的應用程式',
      'Uninstall' => '解除安裝',
      'After configuring Phabricator to process inbound mail, you can interact with objects (like tasks and revisions) over email. For information on configuring Phabricator, see **[[ %s | Configuring Inbound Email ]]**.
    In most cases, you can reply to email you receive from Phabricator to leave comments. You can also use **mail commands** to take a greater range of actions (like claiming a task or requesting changes to a revision) without needing to log in to the web UI.
    Mail commands are keywords which start with an exclamation point, like `!claim`. Some commands may take parameters, like `!assign alincoln`.
    To use mail commands, write one command per line at the beginning or end of your mail message. For example, you could write this in a reply to task email to claim the task:
    ```
    !claim
    I\'ll take care of this.
    ```
    When Phabricator receives your mail, it will process any commands first, then post the remaining message body as a comment. You can execute multiple commands at once:
    ```
    !assign alincoln
    !close
    I just talked to @alincoln, and he showed me that he fixed this.
    ```
    ' => '在設置完 Phabricator 處理站內郵件之後，您可以用郵件與對象（像是任務與修訂版本）互動。有關設置 Phabricator 的資訊，請查看**[[ %s |設置站內郵件]]**。
    在多數情況下，您可以回覆從 Phabricator 收到的郵件來留下評註。您也可以使用**郵件指令**，以不需透過登入到網頁使用介面來進行更多範圍的操作（像是聲明任務或是請求對修訂版本更改）。
    郵件指令是以驚歎號為開頭的關鍵字，像是 `!claim`。有些指令會需要補充參數，比如 `!assign alincoln`.
    郵件指令的使用，是在您的郵件訊息的開頭或結尾處編寫一行指令。例如，您可以在任務郵件的回覆中編寫以下內容來聲明任務：
    ```
    !claim
    I\'ll take care of this.
    ```
    當 Phabricator 收到您的郵件，會優先處理任何指令，然後將剩餘的訊息正文以評註發布。另外您可以一次執行多個指令：
    ```
    !assign alincoln
    !close
    I just talked to @alincoln, and he showed me that he fixed this.
    ```',
      'Can\'t set the policy to a policy you can\'t view!' => '無法將方針設定成您無法檢視的方針！',
      'Type an application name...' => '輸入應用程式名稱…',
      'Install %s application?' => '安裝應用程式%s？',
      'Quick Reference' => '快速參考',
      'Show Applications w/o App Email Support' => '顯示沒有應用程式郵件支援的應用程式',
      'Are you absolutely certain you want to uninstall the Home application?' => '您確定要解除安裝首要應用程式？',
      'Configure creation and editing forms in Applications.' => '設置在應用程式的建立與編輯形式。',
      'Provenance' => '出處',
      'Show Prototype Applications' => '顯示原型應用程式',
      '%s changed the "%s" policy for application %s from "%s" to "%s".' => '%s 將用於應用程式「%3$s」的方針「%2$s」從「%s」更改成「%s」。',
      'Edit Application: %s' => '編輯應用程式：%s',
      'Show Third-Party Applications' => '顯示第三方應用程式',
      'This table summarizes the available mail commands. For details on a specific command, see the command section below.' => '此表格總結了可用的郵件指令。有關特定指令的詳細內容，請查看以下指令段落。',
      'Show All Applications' => '顯示全部的應用程式',
      'Install' => '安裝',
    );
  }

}
