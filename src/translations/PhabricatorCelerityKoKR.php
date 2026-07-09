<?php

final class PhabricatorCelerityKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
  'Use Standard Colors' => '표준색 사용',
  'No resource source exists with name "%s"!' => '"%s"이라는 이름의 리소스 소스가 존재하지 않습니다!',
  'Unable to render resource "%s", which has unknown type "%s".' => '알 수 없는 유형 "%2$s"을(를) 가진 리소스 "%s"을(를) 렌더링할 수 없습니다.',
  'Writing map "%s".' => '맵 "%s"을(를) 작성합니다.',
  'Done generating sprites - updating map...' => '스프라이트 생성 완료 - 맵 업데이트 중...',
  'Use High Contrast Colors' => '고대비색 사용',
  'Use Larger Font Size' => '더 큰 글꼴 크기 사용',
  'Do not invoke `%s` after updating sprites' => '스프라이트를 업데이트한 후에 `%s`을 호출하지 않습니다',
  'Found %d binary resources.' => '바이너리 리소스 %d개를 찾았습니다.',
  'No resource with symbol "%s" exists in source "%s"!' => '소스 "%s"에 심볼 "%s"을(를) 가진 리소스가 없습니다!',
  'Celerity' => 'Celerity',
  'Package specification for "%s" includes "%s", but that symbol is not %s by any resource.' => '"%s"에 대한 패키지 명세에는 "%s"이(가) 포함되어 있지만, 해당 심볼은 어떤 리소스에서도 %s(으)로 인식되지 않습니다.',
  'Attempting to resolve unknown resource, "%s".' => '알 수 없는 리소스 "%s"을(를) 해결하려고 시도했습니다.',
  'Rebuilding %s resource source(s).' => '리소스 소스 %s개를 재빌딩합니다.',
  'Rebuilt "%s" syntax CSS.' => '"%s" 구문 CSS를 재빌드했습니다.',
  '`%s` not found in PATH.' => '`%s`을(를) PATH에서 찾을 수 없습니다.',
  'CSS file \'%s\' has unknown variable \'%s\'.' => '\'%s\' CSS 파일에 알 수 없는 \'%s\' 변수가 있습니다.',
  'Literal %s is not allowed inside inline script.' => '인라인 스크립트 내에서는 리터럴 %s이(가) 허용되지 않습니다.',
  'Use Red/Green (Deuteranopia) Colors' => '빨간색/녹색 (녹색맹) 색상 사용하기',
  'Sprites will not be optimized! Install `%s`!' => '스프라이트가 최적화되지 않습니다! \'%s\'을(를) 설치하세요!',
  'Resource "%s" must %s at most one Celerity target.' => '리소스 "%s"은(는) 최대 하나의 Celerity 대상에 대해 %s이어야 합니다.',
  'Rebuild CSS sprite sheets.' => 'CSS 스프라이트 시트를 재빌드합니다.',
  'Cycle detected in resource graph: %s' => '리소스 그래프에서 순환이 감지되었습니다: %s',
  'Rebuild syntax highlighting CSS.' => '문법 강조 CSS를 다시 빌드합니다.',
  'Resource source defines two resources with the same name, "%s". One is defined in the "%s" map; the other in the "%s" map. Each resource must have a unique name.' => '리소스 소스는 "%s"이라는 동일한 이름을 가진 두 개의 리소스를 정의합니다. 하나는 "%s" 맵에 정의되고, 다른 하나는 "%s" 맵에 정의됩니다. 각 리소스는 고유한 이름을 가져야 합니다.',
  'Resource "%s" does not have a header doc comment. Encode dependency data in a header docblock.' => '리소스 "%s"에 헤더 doc 주석이 없습니다. 종속성 데이터를 헤더 docblock에 인코딩하세요.',
  'Package specification for "%s" includes resources of multiple types (%s, %s). Each package may only contain one type of resource.' => '"%s" 패키지 명세에 여러 유형의 리소스(%s, %s)가 포함됩니다. 각 패키지에는 한 유형의 리소스만 포함될 수 있습니다.',
  'Force regeneration even no sources have changed.' => '변경된 소스가 없어도 강제로 재생성합니다.',
  'Optimizing...' => '최적화 중...',
  'Found %d text resources.' => '텍스트 리소스 %d개를 찾았습니다.',
  'Expected file \'%s\' in \'%s\' to be a sprite source ending in \'%s\'.' => '\'%2$s\'에 있는 파일 \'%s\'은(는) \'%3$s\'(으)로 끝나는 스프라이트 소스로 예상되었습니다.',
  'Only static resources may be served.' => '정적 리소스만 서비스됩니다.',
  'Rebuilding resource source "%s" (%s)...' => '%s개 리소스 소스 (%s) 재빌드 중...',
  'Resources name "%s" is not valid; it must contain only lowercase latin letters and digits.' => '리소스 이름 "%s"이(가) 유효하지 않습니다. 리소스 이름에는 소문자 라틴 문자와 숫자만 포함되어야 합니다.',
  'Attempting to add more metadata after metadata has been locked.' => '메타데이터가 잠긴 후 추가 메타데이터를 추가하려고 시도했습니다.',
  'Dark Mode' => '다크 모드',
  'Rebuild static resource maps.' => '정적 리소스 맵을 다시 빌드합니다.',
  'Found %d packages.' => '패키지 %d개를 찾았습니다.',
);
  }

}
