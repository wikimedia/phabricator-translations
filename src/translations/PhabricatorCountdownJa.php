<?php

final class PhabricatorCountdownJa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ja';
  }

  protected function getTranslations() {
    return array(
      '%s updated the countdown description for %s.' => '%s が %s のカウントダウン説明を更新しました。',
      '%s updated the countdown description.' => '%s がカウントダウンの説明を更新しました。',
      '%s updated the countdown end for %s from %s to %s.' => '%s が %s のカウントダウン終了を %s から %s に更新しました。',
      '%s updated the countdown end from %s to %s.' => '%s がカウントダウン終了を %s から %s に更新しました。',
      '%s updated the title for this countdown from %s to %s.' => '%s がこのカウントダウンのタイトルを %s から %s に更新しました。',
    );
  }

}
