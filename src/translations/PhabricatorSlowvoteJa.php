<?php

final class PhabricatorSlowvoteJa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ja';
  }

  protected function getTranslations() {
    return array(
      '%s updated the description for this poll.' => '%s がこの投票所の説明を更新しました。',
      '%s created this poll.' => '%s がこの投票所を作成しました。',
      '%s edited the description of %s.' => '%s が %s の説明を編集しました。',
      '%s changed the poll question from "%s" to "%s".' => '%s が投票所の質問を「%s」から「%s」に変更しました。',
      '%s (%d / %d)' => '%s (%s / %s)',
    );
  }

}
