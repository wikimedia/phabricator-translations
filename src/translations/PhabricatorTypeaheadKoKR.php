<?php

final class PhabricatorTypeaheadKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
  'Typeahead Results' => 'Typeahead 결과',
  'Typeahead' => 'Typeahead',
  'This datasource ("%s") can not evaluate the function "%s(...)".' => '이 데이터 소스("%s")는 "%s(...)" 함수를 평가할 수 없습니다.',
  'Function Help' => '함수 도움말',
  'This control does not support typeahead functions.' => '이 제어는 Typeahead 함수를 지원하지 않습니다.',
  'In addition to typing user and project names to build queries, you can also type the names of special functions which give you more options and the ability to express more complex queries.

Functions have an internal name (like `%s`) and a human-readable name, like `Current Viewer`. In general, you can type either one to select the function. You can also click the {nav icon=search} button on any typeahead control to browse available functions and find this documentation.

This documentation uses the internal names to make it clear where tokens begin and end. Specifically, you will find queries written out like this in the documentation:

%s

When this query is actually shown in the control, it will look more like this:

%s' => '사용자 이름과 프로젝트 이름을 입력하여 쿼리를 작성하는 것 외에도, 더 많은 옵션과 복잡한 쿼리를 표현할 수 있는 특수 함수의 이름을 입력할 수도 있습니다.

함수에는 내부 이름(예: `%s`)과 사람이 읽을 수 있는 이름(예: `Current Viewer`)이 있습니다. 일반적으로 둘 중 하나를 입력하여 함수를 선택할 수 있습니다. 또한 자동 완성 컨트롤에서 {nav icon=search} 버튼을 클릭하여 사용 가능한 함수를 찾아보고 이 설명문서를 찾을 수도 있습니다.

이 설명문서에서는 토큰의 시작과 끝을 명확히 하기 위해 내부 이름을 사용합니다. 특히 설명문서에서는 다음과 같이 작성된 쿼리를 찾을 수 있습니다.

%s

이 쿼리가 실제로 컨트롤에 표시될 때는 다음과 같이 나타납니다:

%s',
  'Invalid Parameters' => '유효하지 않은 매개변수',
  'Source Class' => '소스 클래스',
  'Raw Query' => '원본 쿼리',
  'Token Results (%s)' => '토큰 결과 (%s)',
  'Configured datasource class "%s" must be a valid subclass of "%s".' => '구성된 데이터 소스 클래스 "%s"은(는) "%s"의 유효한 하위 클래스여야 합니다.',
  'Parameters (JSON)' => '매개변수 (JSON)',
  'Reference: Advanced Functions' => '참고: 고급 함수',
  'Image URI' => '그림 URI',
  'Select' => '선택',
  'Typeahead functions are an advanced feature which allow you to build more powerful queries. This document explains functions available for the selected control.

For general help with search, see the [[ %s | Search User Guide ]] in the documentation.

Note that different controls support //different// functions (depending on what the control is doing), so these specific functions may not work everywhere. You can always check the help for a control to review which functions are available for that control.' => '자동 완성 함수는 더욱 강력한 쿼리를 구축할 수 있도록 해주는 고급 기능입니다. 이 설명문서에서는 선택한 컨트롤에서 사용할 수 있는 함수에 대해 설명합니다.

검색에 대한 일반적인 도움말은 설명문서의 [[ %s | 검색 사용자 가이드]]를 참조하세요.

(컨트롤이 무엇을 하는지에 따라) 컨트롤이 지원하는 함수가 //다를 수// 있으므로 특정 함수가 모든 곳에서 작동하지 않을 수 있습니다. 컨트롤의 도움말을 확인하여 해당 컨트롤에서 사용할 수 있는 함수를 검토할 수 있습니다.',
  'Display Name' => '표시 이름',
  'This table briefly describes available functions for this control. For details on a particular function, see the corresponding section below.' => '이 표는 해당 컨트롤에서 사용할 수 있는 함수를 간략하게 설명합니다. 특정 함수에 대한 자세한 내용은 아래 해당 문단을 참조하세요.',
  'This source is not usable directly.' => '이 소스를 직접 사용할 수 없습니다.',
  'Unable to parse function and arguments for token "%s".' => '토큰 "%s"에 대한 함수 및 인수를 구문 분석할 수 없습니다.',
  'Token Query' => '토큰 쿼리',
  'Invalid Function: %s' => '유효하지 않은 함수: %s',
  'More Results' => '더 많은 결과',
  'Browse Objects' => '객체 탐색',
  'Typeahead Function Help' => 'Typeahead 함수 도움말',
  'Sprite' => '스프라이트',
  'The HTTP parameter named "parameters" for this request is not a valid JSON parameter. JSON is required. Exception: %s' => '이 요청에 사용된 "parameters"라는 HTTP 매개변수는 유효한 JSON 매개변수가 아닙니다. JSON 형식이 필수입니다. 예외: %s',
  'Function Quick Reference' => '함수 빠른 참조',
  'Auto' => '자동',
  'You reach the edge of the abyss.' => '당신은 심연의 끝에 다다랐습니다.',
  'This datasource ("%s") requires to be logged-in to use the function "%s(...)".' => '이 데이터 소스("%s")를 사용하려면 "%s(...)" 함수에 로그인되어 있어야 합니다.',
  'Priority Type' => '우선순위 유형',
  'Using Typeahead Functions' => 'Typeahead 함수 사용',
);
  }

}
