<?php

final class PhabricatorPonderJa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ja';
  }

  protected function getTranslations() {
    return array(
      'Email Commands: Questions' => 'メール コマンド: 質問',
      '%s updated the question details.' => '%s が質問の詳細を更新しました。',
      '%s reopened this question.' => '%s がこの質問を再オープンしました。',
      '%s closed %s as invalid.' => '%s が %s を無効としてクローズしました。',
      '%s closed this question as invalid.' => '%s がこの質問を無効としてクローズしました。',
      '%s updated %s from %s to %s.' => '%s が %s を %s から %s に更新しました。',
      '%s updated the question details for %s.' => '%s が %s の質問詳細を更新しました。',
      '%s updated the question from %s to %s.' => '%s が質問を %s から %s に更新しました。',
      'Show %d Comment(s)' => '%s 件のコメントを表示',
      '%s added %s.' => '%s が %s を追加しました。',
    );
  }

}
