<?php

final class PhabricatorConduitKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
      'JSON' => 'JSON',
      'cURL' => 'cURL',
      'Human Readable' => '사람이 읽을 수 있음',
      'No such user "%s" exists.' => '"%s" 사용자가 존재하지 않습니다.',
      'Invalid JSON input.' => '유효하지 않은 JSON 입력입니다.',
      '<parameters>' => '<parameters>',
      'Caller PHID' => '호출자 PHID',
      '<api-token>' => '<api-token>',
      'See error message for details.' => '자세한 사항은 오류 메시지를 참고하십시오.',
      'A PHID.' => 'PHID입니다.',
      '(Wildcard)' => '(와일드카드)',
      'Errors' => '오류',
      'User PHID.' => '사용자 PHID입니다.',
      'Username.' => '사용자 이름입니다.',
      'Output Format' => '출력 형식',
      'Developer API' => '개발자 API',
      'Stable' => '안정',
      'Unstable' => '불안정',
      'Generate Token' => '토큰 만들기',
      'Terminate Token' => '토큰 끝내기',
    );
  }

}
