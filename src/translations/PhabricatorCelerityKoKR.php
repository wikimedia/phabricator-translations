<?php

final class PhabricatorCelerityKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
      'Use Standard Colors' => '표준색 사용',
      'Use High Contrast Colors' => '고대비색 사용',
      'Dark Mode (Experimental)' => '다크 모드 (실험 기능)',
      'Use Larger Font Size' => '더 큰 글꼴 크기 사용',
      'Found %d binary resources.' => '바이너리 리소스 %s개를 찾았습니다.',
      'CSS file \'%s\' has unknown variable \'%s\'.' => '\'%s\' CSS 파일에 알 수 없는 \'%s\' 변수가 있습니다.',
      'Binary' => '바이너리',
      'Rebuild syntax highlighting CSS.' => '문법 강조 CSS를 다시 빌드합니다.',
      'Found %d text resources.' => '텍스트 리소스 %s개를 찾았습니다.',
      'Only static resources may be served.' => '정적 리소스만 서비스됩니다.',
      'Rebuild static resource maps.' => '정적 리소스 맵을 다시 빌드합니다.',
      'Found %d packages.' => '패키지 %s개를 찾았습니다.',
    );
  }

}
