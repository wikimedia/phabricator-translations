<?php

final class PhabricatorPholioKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
      'No image attached!' => '첨부된 그림이 없습니다!',
      'Undo' => '실행 취소',
      '%s updated image descriptions of %s.' => '%s님이 %s의 그림 설명을 업데이트했습니다.',
      'File is not viewable.' => '파일을 볼 수 없습니다.',
      'No image exists with PHID "%s".' => 'PHID "%s"의 이미지가 존재하지 않습니다.',
      'Unknown (ID %d)' => '알 수 없음 (ID %s)',
      'Image "%s":' => '이미지 "%s":',
      '%s updated images of %s.' => '%s님이 %s의 그림을 업데이트했습니다.',
    );
  }

}
