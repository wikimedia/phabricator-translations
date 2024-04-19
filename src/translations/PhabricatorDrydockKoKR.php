<?php

final class PhabricatorDrydockKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
      'Show Details' => '자세한 내용 보기',
      'Stdout' => 'Stdout',
      'Via:' => '경유:',
      'Host (%s)' => '호스트 (%s)',
      'No Repository' => '저장소 없음',
      'Stderr' => 'Stderr',
      'Allocation Failed' => '할당 실패',
      'Activated' => '활성화됨',
      'Information about resource status.' => '리소스 상태에 관한 정보입니다.',
    );
  }

}
