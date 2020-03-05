<?php

final class PhabricatorPhurlZhHant
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'zh_Hant';
  }

  protected function getTranslations() {
    return array(
      'Alias' => '別名',
      'Edit Phurl' => '編輯 Phurl',
      'URL' => 'URL',
      'All URLs' => '所有 URL',
      '%s changed the alias from %s to %s.' => '%s 已將別名從 %s 更改成 %s。',
      'The alias to give the URL.' => '指定 URL 的別名。',
      'The alias you provided (%s) must contain at least one letter.' => '您所提供的別名（%s）必須至少要有一個字元。',
      'Configure creation and editing forms in Phurl.' => '設置在 Phurl 的建立與編輯形式。',
      'New URL description.' => '新 URL 描述',
      '[Phurl]' => '[Phurl]',
      'The URL to shorten.' => '要縮短的 URL。',
      'Select a phurl...' => '選擇一個 phurl…',
      '%s changed the destination URL from %s to %s.' => '%s 已將目的 URL 從 %s 更改成 %s。',
      'New URL.' => '新 URL。',
      'A description of the URL.' => '添加 URL 的描述。',
      'The alias you provided (%s) may only contain latin letters, digits, periods, and hyphens.' => '您所提供的別名（%s）僅能包含拉丁字母、數字、半形句號與連字號。',
      'This alias is already in use.' => '此別名已被使用。',
      'This domain can only be used to open URLs shortened using the Phurl application. The URL you are trying to access does not have a Phurl URL associated with it.' => '此網域僅能用於開啟使用 Phurl 應用程式縮短的 URL。您所嘗試存取的 URL 沒有與此關聯的 Phurl URL。',
      'Phurls must have a name.' => 'Phurl 必須要有名稱。',
      'Shorten your favorite URL.' => '縮短您個人喜愛的 URL。',
      'No URLs found.' => '查無 URL。',
      'URL path is required' => '需要 URL 路徑',
      '%s changed the name of %s from %s to %s.' => '%s 已將 %s 的名稱從 %s 更改成 %s。',
      'Read information about Phurl URLS.' => '讀取有關 Phurl URL 的資訊。',
      'Edit URL: %s' => '編輯 URL：%s',
      'Can Create Phurl URLs' => '可建立 Phurl URL',
      'URL name.' => 'URL 名稱。',
      'Long URLs' => '長 URL',
      'Create New URL' => '建立新的 URL',
      'URL DESCRIPTION' => 'URL 描述',
      'New alias.' => '新別名。',
      'The owner of a URL can always view and edit it.' => 'URL 的擁有者可檢視與編輯該 URL。',
      'Original URL' => '原先 URL',
      'The pre-shortened URL.' => '預先縮短的 URL。',
      'The protocol of the URL is invalid.' => 'URL 的協定無效。',
      '%s changed the alias of %s from %s to %s.' => '%s 已將 %s 的別名從 %s 更改成 %s。',
      'Apply transactions to create a new Phurl URL or edit an existing one.' => '申請辦理來建立新的或編輯現有的 Phurl URL。',
      'Short URL' => '短網址',
      'Shorten a URL' => '縮短一個 URL',
      'Invalid URL' => '無效 URL',
      'New URL name.' => '新 URL 名稱。',
      '%s changed the destination URL %s from %s to %s.' => '%s 已將目的 URL %s 從 %s 更改成 %s。',
      'You do not have permission to create a Phurl URL.' => '您沒有權限建立 Phurl URL。',
      'Search for Phurl URLs by the non-shortened URL.' => '透過未縮址的 URL 來搜尋 Phurl URL。',
      'The alias for the URL.' => 'URL 的別名。',
      'URL long description.' => 'URL 詳細描述。',
      'URL must match approved domains / protocols.' => 'URL 必須相符所允許的網域/協定。',
      '%s created this URL.' => '%s 建立了此 URL。',
      'Phurls must have an alias.' => 'Phurl 必須要有別名。',
      'Phurl URLs' => 'Phurl URL',
      'CHANGES TO PHURL DESCRIPTION' => '更改 PHURL 描述',
      'Search for Phurl URLs by name substring.' => '透過名稱子字串來搜尋 Phurl URL。',
      'Browse Phurl URLs' => '瀏覽 Phurl URL',
      'URL Shortener' => 'URL 縮址',
      'Visit URL' => '參訪 URL',
      'A URL\'s details change.' => 'URL 的詳情更改。',
      'Configure Phurl Forms' => '設置 Phurl 形式',
      'Search for Phurl URLs by alias.' => '透過別名來搜尋 Phurl URL。',
      'URL DETAIL' => 'URL 詳情',
      'The alias can be no longer than %d characters.' => '別名不可超過 %s 個字元。',
      'Create URL' => '建立 URL',
      '%s changed the name of the URL from %s to %s.' => '%s 已將 URL 名稱從 %s 更改成 %s。',
      'Create reusable, memorable, shorter URLs for easy accessibility.' => '建立容易存取的可重複使用、好記、較簡短的 URL。',
    );
  }

}
