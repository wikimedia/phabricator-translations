<?php

final class PhabricatorPasteKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
      '%s updated the title for %s from untitled to %s.' => '%s님이 %s의 제목을 제목 없음에서 %s(으)로 업데이트했습니다.',
      'This paste will be marked as expired.' => '이 붙여넣기는 기간이 만료된 것으로 표시됩니다.',
      'View URI for the paste.' => '붙여넣기를 위한 URI를 표시합니다.',
      '[Paste]' => '[붙여넣기]',
    );
  }

}
