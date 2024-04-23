<?php

final class PhabricatorSystemKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
      'An Administrator has placed this server into read-only mode.' => '관리자가 파브리케이터를 읽기 전용 모드로 설정했습니다.',
      'This system does not have the "%s" extension installed, so character encodings are not supported. Install "%s" to enable support.' => '이 시스템에 "%s" 확장 기능이 설치되어 있지 않으므로 문자 인코딩은 지원되지 않습니다. 지원을 활성화하려면 "%s" 확장 기능을 설치하십시오.',
      'View Handle' => '핸들 보기',
      'No Encoding Support' => '인코딩을 지원하지 않음',
      'No such object "%s" exists!' => '"%s" 오브젝트가 존재하지 않습니다!',
      'Cluster Database Status' => '클러스터 데이터베이스 상태',
      '%d / hour' => '%s / 시간',
      'IMPORTANT' => '중요',
      'Select Character Encoding' => '문자 인코딩 선택',
      'Advanced/Developer...' => '고급/개발자...',
      'Choose a text encoding to use.' => '사용할 텍스트 인코딩을 선택하십시오.',
      'Select Document Engine' => '도큐먼트 엔진 선택',
      '%d / minute' => '%s / 분',
      '%d / second' => '%s / 초',
      'Choose Engine' => '엔진 선택',
    );
  }

}
