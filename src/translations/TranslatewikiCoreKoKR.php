<?php

final class TranslatewikiCoreKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
      'NONE' => '없음',
      'Provide a locale code with "--locale".' => '"--locale"에 로케일 코드를 지정하십시오.',
      'GENDER' => '성별',
      'Class name to generate.' => '생성할 클래스 이름입니다.',
      'Generate a Phabricator translation classfile.' => '파브리케이터 번역 클래스파일을 생성합니다.',
      'Writing data (%s, %s) to "%s"...' => '데이터(%s, %s)를 "%s"(으)로 쓰는 중...',
      'English strings' => '영어 문자열',
      'Provide an output file with "--out".' => '"--out"으로 출력 파일을 제공합니다.',
      'Done.' => '완료.',
      'Location to write the generated translation file.' => '생성된 번역 파일을 저장할 경로.',
      'PLURAL' => '복수형',
    );
  }

}
