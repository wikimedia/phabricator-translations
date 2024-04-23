<?php

final class PhabricatorGuidesZhHant
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hant';
  }

  protected function getTranslations() {
    return array(
      'Create a Repository' => '建立版本庫',
      'If you are here for code review, let\'s set up your first repository.' => '若您要在此審查程式碼，來開始設定您第一個的版本庫。',
      'You\'ve configured at least one setting from the web interface.' => '您已從網頁介面設置至少一個設定。',
      'You\'ve created at least one task.' => '您已建立至少一個任務。',
      'Project tags define everything. Create them for teams, tags, or actual projects.' => '專案標籤定義任何事物。請替團隊、標籤、或是現有專案來建立它們。',
      'See all available applications.' => '查看所有包含在 Phabricator 的應用程式。',
      'Explore Applications' => '瀏覽應用程式',
      '%s has been successfully installed. These next guides will take you through configuration and new user orientation. These steps are optional, and you can go through them in any order. If you want to get back to this guide later on, you can find it in {icon globe} **Applications** under {icon map-o} **Guides**.' => 'Phabricator 已成功安裝。接下來的指南會帶領您完成設置、與新的使用者熟悉情況。這些步驟為可選，並且可以按任何順序來瀏覽。若您想要事後返回此指南，您可以在{icon map-o}**指南**下的{icon globe}**應用程式**來找到。',
      'Skip' => '略過',
      'Quick Start' => '快速開始',
      'Configure account settings for all users, or just yourself' => '為所有使用者、或是您自己來設置帳號設定',
      'Change the name and add your company logo, just to give it a little extra polish.' => '更改名稱並添加您公司的標誌，只需一些額外修飾。',
      'You\'ve set up a real-time notification server.' => '您已設定即時通知伺服器。',
      'You have some unresolved setup issues to take care of.' => '您需要處理一些未解決的安裝問題。',
      'Create some work for the interns in Maniphest.' => '在 Maniphest 為實習生建立一些工作。',
      'Your invitations have been accepted. You will not be alone on this journey.' => '您的邀請已被接收，您不會只能獨自一人行事。',
      'You\'ve configured at least one authentication provider.' => '您已設置至少一個驗證提供方。',
      'Short Tutorials' => '簡短教程',
      'If you\'re new to this software, these optional steps can help you learn the basics. Feel free to set things up for how you work best and explore these features at your own pace.' => '若您是 Phabricator 新手，這些可選步驟能協助您了解基本內容。從概念上來說，Phabricator 是以圖形、版本庫、任務作為架構，且所有專案皆彼此獨立。您可隨時為您的工作方式來設定 Phabricator，並依照自己的進度來探索這些功能。',
      'You\'ve created at least one repository.' => '您已建立至少一個版本庫。',
      'Guides' => '指南',
      'Learn how to configure mail and other options.' => '了解如何在 Phabricator 設置電子郵件與其它選項。',
      'Invite the rest of your team to get started.' => '邀請您團隊裡的其他成員來開始使用 Phabricator。',
      'User Account Settings' => '使用者帳號設定',
      'You\'ve adjusted at least one setting on your account.' => '您已在您的帳號調整至少一個設定。',
      'Real-time notifications can be delivered with WebSockets.' => 'Phabricator 能以 WebSockets 來即時傳遞通知。',
      'Personalize your Install' => '個人化您的安裝',
      'Invite Collaborators' => '邀請協作',
      'You\'ve created at least one project.' => '您已建立至少一項專案。',
      'It looks amazing, good work. Home Sweet Home.' => '這看起來很棒，做得好。是個出色的首頁。',
      'Two guidance extensions generated guidance with the same key ("%s"). Each piece of guidance must have a unique key.' => '兩個指南擴充產生了帶有相同鍵（"%s"）的指導。各項指導內容必須帶有不重複的唯一鍵。',
      'Notification Server' => '通知伺服器',
      'Resolve Setup Issues' => '解決設定問題',
      'Authentication providers allow users to register accounts and log in.' => '認證提供方允許使用者註冊帳號且登入到 Phabricator。',
      'You\'ve resolved (or ignored) all outstanding setup issues.' => '您已解決（或忽略）所有未完成的設定問題。',
    );
  }

}
