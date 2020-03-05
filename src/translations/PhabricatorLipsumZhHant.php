<?php

final class PhabricatorLipsumZhHant
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hant';
  }

  protected function getTranslations() {
    return array(
      'Argument "%s" does not match the name of any generators.' => '引數「%s」不符合任何產生器的名稱。',
      'A lipsum generator is registered with key "%s". This key is reserved.' => 'lipsum 產生器以關鍵字「%s」註冊，而該關鍵字為保留字。',
      'Failed to load a random user. You may need to generate more test users first.' => '載入隨機使用者失敗，您可能得先產生更多的測試使用者。',
      'Generate objects without prompting for confirmation.' => '不需提示確認來產生物件。',
      'LIPSUM' => 'LIPSUM',
      'Unable to load symbol %s: this class does not exist.' => '無法載入符號 %s：此類別不存在。',
      'Generator ("%s") was unable to generate an object.' => '產生器（「%s」）無法產生物件。',
      'OOPS' => '哎呀',
      'This command generates synthetic test data, including user accounts. It is intended for use in development environments so you can test features more easily. There is no easy way to delete this data or undo the effects of this command. If you run it in a production environment, it will pollute your data with large amounts of meaningless garbage that you can not get rid of.' => '此指令能產生綜合測試資料，包含有使用者帳號。這主要用於開發環境裡，來讓您可以測試功能更容易。因為沒有可以簡單刪除或撤銷這類型資料的方法，所以如果您在生產環境執行它，這將會填塞大量讓您難以處理的無意義資料內容。',
      'Generate synthetic test objects.' => '產生綜合測試物件。',
      'class' => '類別',
      'Generating synthetic test objects forever. Use ^C to stop when satisfied.' => '永遠產生綜合測試物件。當已足夠時按下 ^C 來停止。',
      'Generated "%s": %s' => '已產生「%s」：%s',
      'Choose which type or types of test data you want to generate, or select "%s".' => '挑選您想要產生的類型或測試資料類型，或是選擇「%s」。',
      'Generate objects as quickly as possible.' => '盡快產生物件。',
      'Argument "%s" is ambiguous, and matches multiple generators: %s.' => '引數「%s」內容不明確，符合多個產生器：%s。',
      'lipsum is a development and testing tool and may only be run on installs in developer mode. Enable "%s" in your configuration to enable lipsum.' => 'lipsum 是開發與測試用工具，並且只能在開發者模式下安裝與執行。在您的設置裡啟用「%s」來啟用 lipsum。',
      'Selected generators: %s.' => '已選產生器：%s。',
      'GENERATORS' => '產生器',
      'Are you sure you want to generate piles of garbage?' => '您確定要產生大量用不到的東西嗎？',
    );
  }

}
