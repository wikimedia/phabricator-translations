<?php

final class PhabricatorSearchKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
  'No results.' => '결과가 없습니다.',
  'This menu item is very important, and can not be disabled.' => '이 메뉴 항목은 매우 중요하므로 비활성화할 수 없습니다.',
  'Enable Query?' => '쿼리를 활성화할까요?',
  'Global Search' => '전역 검색',
  'Personal Menu Items' => '개인 메뉴 항목',
  'Parameter "%s" must be a map of constraints.' => '매개변수 "%s"은(는) 제약 조건의 맵이어야 합니다.',
  'The queries you have saved are private. Only you can view or edit them.' => '저장한 쿼리는 비공개입니다. 본인만 보거나 편집할 수 있습니다.',
  'cat -A can find mice hiding in files.' => 'cat -A는 파일들 속에 숨어있는 쥐를 찾아낼 수 있습니다.',
  'Export Format Not Available' => '내보내기 형식을 사용할 수 없습니다',
  'Readable' => '읽기 가능',
  'Search Engines' => '검색 엔진',
  'Form "%s" is not a valid form which you have permission to see.' => '"%s" 양식은 볼 권한이 있는 유효한 양식이 아닙니다.',
  'Reset all common ngram records.' => '모든 일반적인 Ngram 기록을 초기화합니다.',
  'Type "%s" matches multiple indexable objects. Use a more specific string. Matching objects are: %s.' => '"%s" 유형이 여러개의 인덱싱 가능한 객체와 일치합니다. 더 세부적인 문자열을 사용하세요. 일치하는 객체: %s.',
  'N/A' => 'N/A',
  'URI "%s" is not a valid link URI. It should be a full, valid URI beginning with a protocol like "%s".' => 'URI "%s"은(는) 유효한 링크 URI이 아닙니다. URI는 "%s"와 같은 프로토콜로 시작하는 완전하고 유효한 URI이어야 합니다.',
  'Builtin \'%s\' is not supported!' => '내장 \'%s\'은(는) 지원되지 않습니다!',
  'You must choose a room.' => '방을 선택해야 합니다.',
  'Elasticsearch server returned invalid JSON!' => '일래스틱서치 서버가 유효하지 않은 JSON을 반환했습니다!',
  'Select an item type...' => '항목 유형을 선택하세요...',
  'The popular trivia game "World of Warcraft" features a race of cat people called the Khajiit.' => '인기 퀴즈 게임 "월드 오브 워크래프트"에는 카짓이라는 고양이 인간 종족이 등장합니다.',
  'Disable Menu Item' => '메뉴 항목 비활성화',
  'Add to Dashboard' => '대시보드에 추가',
  'Failed to load custom PHID "%s"!' => '사용자 지정 "%s" PHID를 로드하는 데 실패했습니다!',
  'Cats use their keen sense of smell to avoid feeling empathy.' => '고양이는 예리한 후각을 이용하여 공감 능력을 회피합니다.',
  'INDEXING' => '인덱싱 중',
  'Find stuff in big piles.' => '큰 더미 속에서 무언가를 찾습니다.',
  'Unsupported operator prefix "%s".' => '지원되지 않는 연산자 접두어 "%s".',
  'You must choose a dashboard.' => '대시보드를 선택해야 합니다.',
  'SearchEngines must render a "%s" object, but this engine (of class "%s") rendered something else ("%s").' => 'SearchEngines는 "%s" 객체를 렌더링해야 하지만, 이 엔진(클래스 "%s")은 다른 것("%s")을 렌더링했습니다.',
  'There is no active query yet.' => '아직 활성된 쿼리가 없습니다.',
  'Maximum page size for Conduit API method calls is 100, but this call specified %s.' => 'Conduit API 메소드 호출의 최대 페이지 크기는 100이지만 이 호출은 %s을(를) 지정했습니다.',
  '%s Search' => '%s 검색',
  'Service index is out of date, repairing...' => '서비스 인덱스가 날짜 범위를 초과하여 고치는 중입니다...',
  'Query: %s' => '쿼리: %s',
  'Query is too long (%s bytes, maximum is %s bytes). Please use more specific search criteria.' => '쿼리 길이가 너무 깁니다(%s바이트, 최대 %s바이트). 보다 구체적인 검색 조건을 사용하세요.',
  'Run a search query. Intended for debugging and development.' => '검색 쿼리를 수행합니다. 디버깅과 개발을 위해 고안되었습니다.',
  'Two fields in this SearchEngine use the same key ("%s"), but each field must use a unique key.' => '이 SearchEngine의 두 필드가 동일한 키("%s")를 사용하지만, 각 필드는 고유한 키를 사용해야 합니다.',
  'Parameter "%s" is invalid.' => '매개변수 "%s"은(는) 유효하지 않습니다.',
  'Ferret function "%s" is specified with a denormalized name. Instead, specify the function using the normalized function name ("%s").' => 'Ferret 함수 "%s"이(가) 비정규화된 이름으로 지정되었습니다. 대신 정규화된 함수 이름("%s")을 사용하여 함수를 지정하세요.',
  'Unable to instantiate query class "%s": %s' => '쿼리 클래스 "%s"을(를) 인스턴스화할 수 없습니다: %s',
  '—' => '—',
  'Cats have five pointy ends.' => '고양이에게는 뾰족한 끝이 다섯 개 있습니다.',
  'Personal Saved Queries' => '개인적으로 저장된 쿼리',
  'SearchFields "%s" (of class "%s") and "%s" (of class "%s") both define the same Conduit key ("%s"). Keys must be unique.' => '검색 필드 "%s"(클래스 "%s")와(과) "%s"(클래스 "%s")은(는) 모두 동일한 Conduit 키("%s")를 정의합니다. 키는 고유해야 합니다.',
  'You must choose a link name.' => '링크 이름을 선택해야 합니다.',
  'Recompute common ngrams. This is an advanced workflow that can harm search quality if used improperly.' => '일반적인 Ngram을 재계산합니다. 잘못 사용하면 검색 품질이 떨어질 수 있는 고급 워크플로입니다.',
  'Engine: Fulltext' => '엔진: 전문',
  'Invalid query for parameter "%s".' => '매개변수 "%s"에 대한 쿼리가 유효하지 않습니다.',
  'Open Items' => '열린 항목',
  'Global Menu Items' => '전역 메뉴 항목',
  'No visible menu items can render content.' => '표시되는 메뉴 항목이 없어 콘텐츠를 표시할 수 없습니다.',
  'This query specifies an invalid parameter. Review the query parameters and correct errors.' => '이 쿼리는 유효하지 않은 매개변수를 지정합니다. 쿼리 매개변수를 검토하고 오류를 수정하세요.',
  'You must choose a label name.' => '레이블 이름을 선택해야 합니다.',
  'Edit the menu for your personal account.' => '개인 계정을 위한 메뉴를 편집하세요.',
  'Application "%s" is not a valid application which you have permission to see.' => '애플리케이션 "%s"은(는) 당신이 볼 수 있는 권한이 있는 유효한 애플리케이션이 아닙니다.',
  'Specify either --reset or --threshold.' => '--reset 또는 --threshold를 지정하세요.',
  'Queries' => '쿼리',
  'Already Default' => '이미 기본값임',
  'No services need initialization.' => '초기화가 필요한 서비스가 없습니다.',
  'The Spanish word for cat is "cato". The biggest cat is called "el cato".' => '고양이를 뜻하는 스페인어 단어는 "cato"입니다. 가장 큰 고양이는 "el cato"라고 합니다.',
  'Add New Menu Item...' => '새 메뉴 항목 추가...',
  'Untitled "%s" Item' => '제목 없는 "%s" 항목',
  'The first cats evolved on the savannah about 8,000 years ago.' => '최초의 고양이는 약 8,000년 전 사바나에서 진화했습니다.',
  'You must name the query.' => '쿼리의 이름을 지정해야 합니다.',
  'Choose Item Icon' => '항목 아이콘 선택',
  'Cats will often bring you their prey because they feel sorry for your inability to hunt.' => '고양이들은 당신이 사냥을 못하는 것을 안쓰럽게 여겨 종종 사냥감을 가져다줍니다.',
  'You can apply custom constraints by passing a dictionary in `constraints`.
This will let you search for specific sets of results (for example, you may
want show only results with a certain state, status, or owner).


If you specify both a `queryKey` and `constraints`, the builtin or saved query
will be applied first as a starting point, then any additional values in
`constraints` will be applied, overwriting the defaults from the original query.

Different endpoints support different constraints. The constraints this method
supports are detailed below. As an example, you might specify constraints like
this:

```lang=json, name="Example Custom Constraints"
{
  ...
  "constraints": {
    "authorPHIDs": ["PHID-USER-1111", "PHID-USER-2222"],
    "flavors": ["cherry", "orange"],
    ...
  },
  ...
}
```

This API endpoint supports these constraints:' => '`constraints`에 딕셔너리를 전달하여 사용자 지정 제약 조건을 적용할 수 있습니다.
이렇게 하면 특정 결과 집합을 검색할 수 있습니다(예: 특정 상태, 상태 또는 소유자를 가진 결과만 표시하려는 경우).

`queryKey`와 `constraints`를 모두 지정하면 내장 쿼리 또는 저장된 쿼리가 먼저 적용되어 시작점으로 사용되고, 그 다음 `constraints`에 있는 추가 값이 적용되어 원래 쿼리의 기본값을 덮어씁니다.

종단점마다 지원하는 제약 조건이 다릅니다. 이 메서드가 지원하는 제약 조건은 아래에 자세히 설명되어 있습니다. 예를 들어 다음과 같이 제약 조건을 지정할 수 있습니다.

```lang=json, name="예시 사용자 지정 제약 조건"
{
  ...
  "constraints": {
    "authorPHIDs": ["PHID-USER-1111", "PHID-USER-2222"],
    "flavors": ["cherry", "orange"],
    ...
  },
  ...
}
```

이 API 종단점은 다음 제약 조건을 지원합니다:',
  'Substring Search' => '부분 문자열 검색',
  'Handle: %s' => '핸들: %s',
  'This call does not support any attachments.' => '이 호출은 어떠한 첨부도 지원하지 않습니다.',
  'Really delete the query "%s"? You can not undo this. Remember all the great times you had filtering results together?' => '쿼리 "%s"을(를) 정말 삭제합니까? 이 작업은 되돌릴 수 없습니다. 함께 결과를 필터링했던 즐거운 시간들을 기억하세요?',
  'Edit Menu Item: %s' => '메뉴 항목 편집하기: %s',
  'Not all cats can retract their claws, but most of them can.' => '모든 고양이가 발톱을 집어넣을 수 있는 것은 아니지만, 대부분의 고양이는 할 수 있습니다.',
  'Restricted Dashboard' => '제한된 대시보드',
  'Invalid Dashboard' => '잘못된 대시보드',
  'Run this workflow with "--background" to queue tasks for the daemon workers.' => '데몬 워커를 위해 태스크를 대기열에 추가하려면 이 워크플로를 "--background"로 실행하세요.',
  'This is a visual divider which you can use to separate sections in the menu. It does not have any configurable options.' => '메뉴의 섹션을 구분하는 데 사용할 수 있는 시각적 구분선입니다. 구성 가능한 옵션은 없습니다.',
  'Room "%s" is not a valid room which you have permission to see.' => '방 "%s"은(는) 당신이 볼 수 있는 권한이 있는 유효한 방이 아닙니다.',
  'Use the application-specific Advanced Search for better results and additional search criteria: %s, %s. (%s)' => '더 나은 결과와 추가 검색 조건을 얻으려면 애플리케이션별 고급 검색을 사용하세요: %s, %s. (%s)',
  'Taco cat spelled backwards is taco cat.' => 'Taco cat을 거꾸로 쓰면 taco cat입니다.',
  'Find objects matching a fulltext search query. See "Search User Guide" in the documentation for details.' => '전문 검색 쿼리와 일치하는 객체를 찾습니다. 자세한 내용은 설명서의 "검색 사용자 가이드"를 참조하세요.',
  'Search Ngram' => 'Ngram 검색',
  'Objects matching your query are returned as a list of dictionaries in the
`data` property of the results. Each dictionary has some metadata and a
`fields` key, which contains the information about the object that most callers
will be interested in.

For example, the results may look something like this:

```lang=json, name="Example Results"
{
  ...
  "data": [
    {
      "id": 123,
      "phid": "PHID-WXYZ-1111",
      "fields": {
        "name": "First Example Object",
        "authorPHID": "PHID-USER-2222"
      }
    },
    {
      "id": 124,
      "phid": "PHID-WXYZ-3333",
      "fields": {
        "name": "Second Example Object",
        "authorPHID": "PHID-USER-4444"
      }
    },
    ...
  ]
  ...
}
```

This result structure is standardized across all search methods, but the
available fields differ from application to application.

These are the fields available on this object type:' => '쿼리와 일치하는 객체는 결과의 `data` 속성에 딕셔너리 목록으로 반환됩니다. 각 사전에는 일부 메타데이터와 대부분의 호출자가 관심을 가질 객체에 대한 정보를 담고 있는 `fields` 키가 있습니다.

예를 들어 결과는 다음과 같을 수 있습니다:

```lang=json, name="예시 결과"
{
  ...
  "data": [
    {
      "id": 123,
      "phid": "PHID-WXYZ-1111",
      "fields": {
        "name": "첫 번째 예시 객체",
        "authorPHID": "PHID-USER-2222"
      }
    },
    {
      "id": 124,
      "phid": "PHID-WXYZ-3333",
      "fields": {
        "name": "두 번째 예시 객체",
        "authorPHID": "PHID-USER-4444"
      }
    },
    ...
  ]
  ...
}
```

이 결과 구조는 모든 경우에 표준화되어 있습니다. 검색 방법은 다양하지만, 사용 가능한 필드는 애플리케이션마다 다릅니다.

이 객체 유형에서 사용할 수 있는 필드는 다음과 같습니다:',
  'Enable Menu Item' => '메뉴 항목 활성화',
  'Engine: Hovercards' => '엔진: 호버카드',
  'Search for objects with specific IDs.' => '특정 ID의 객체를 찾습니다.',
  'Profile menu items can not be generated without an object context.' => '객체 컨텍스트 없이는 프로필 메뉴 항목을 생성할 수 없습니다.',
  'Too many relationships (%s, of type "%s"). Must be less than %s.' => '관계가 너무 많습니다 ("%2$s" 유형의 %s). %3$s보다 적어야 합니다.',
  'Profile Menu' => '프로필 메뉴',
  'Service initialization complete.' => '서비스 초기화가 완료되었습니다.',
  'Configure Menu' => '양식 구성',
  'Cats have a tail, two feet, between one and three ears, and two other feet.' => '고양이는 꼬리 하나, 발 두 개, 귀는 한 개에서 세 개 사이, 그리고 나머지 발 두 개를 가지고 있습니다.',
  'Bucket' => '버킷',
  'Query Errors' => '쿼리 오류',
  'Unsupported item action "%s".' => '지원되지 않는 항목 작업 "%s".',
  'Not supported.' => '지원하지 않습니다.',
  'Query contains a token ("%s") with no search term. Query tokens specify text to search for.' => '쿼리에 검색어가 없는 토큰("%s")이 포함되어 있습니다. 쿼리 토큰은 검색할 텍스트를 지정합니다.',
  'Unable to load object "%s" to rebuild indexes.' => '인덱스를 재빌드하기 위한 객체 "%s"을(를) 로드할 수 없습니다.',
  'You must choose a form.' => '양식을 선택해야 합니다.',
  'You can not create that relationship because it would create a circular dependency:' => '순환 의존을 만들기 때문에 해당 관계를 만들 수 없습니다:',
  'Reindex objects previously indexed on or before a given date.' => '지정된 날짜 또는 그 이전에 인덱싱된 객체를 다시 인덱싱합니다.',
  'Engine class is null.' => '엔진 클래스가 null입니다.',
  'Mandatory Item' => '필수 항목',
  'Provide a list of objects to index (like "D123"), or a set of query constraint flags (like "--type"), or "--all" to index all objects.' => '인덱싱할 객체 목록("D123" 등), 쿼리 제약 플래그 집합("--type" 등), 또는 모든 객체를 인덱싱하는 "--all"을 제공하세요.',
  'Home Menu' => '홈 메뉴',
  'Raw query to execute.' => '실행할 원본 쿼리입니다.',
  'Two field specifications share the same key ("%s"). Each specification must have a unique key.' => '두 개의 필드 명세가 동일한 키("%s")를 공유합니다. 각 명세는 고유한 키를 가져야 합니다.',
  'Profile Menu Items' => '프로필 메뉴 항목',
  'You must choose a URI to link to.' => '링크할 URI를 선택해야 합니다.',
  'Field Present: %s' => '필드 있음: %s',
  'Expected "newMenuItemViewList()" to return a list (in class "%s"), but it returned something else ("%s").' => '"newMenuItemViewList()"가 ("%s" 클래스의) 목록을 반환할 것으로 예상했지만 다른 것("%s")을 받았습니다.',
  'Initialize or repair a search service.' => '검색 서비스를 초기화하거나 복구합니다.',
  'Current Default' => '현재 기본값',
  'Outside of the CAT scan, cats have made almost no contributions to modern medicine.' => '고양이는 CAT 스캔을 제외하면 현대 의학에 거의 기여한 바가 없습니다.',
  'Query Name' => '쿼리 이름',
  'No search engines available.' => '사용 가능한 검색 엔진이 없습니다.',
  'A cat\'s visual, olfactory, and auditory senses, Contribute to their hunting skills and natural defenses.' => '고양이의 시각, 후각, 청각은 사냥 능력과 자연적인 방어 능력에 기여합니다.',
  'Object Fields' => '객체 필드',
  'Engine: Index' => '엔진: 인덱스',
  'Constraints' => '제약 조건',
  'Result Ordering' => '결과 정렬',
  'Edit Saved Query' => '저장된 쿼리 편집',
  'You can not use query constraint flags (like "--version", "--type", or a list of specific objects) with "--all".' => '쿼리 제약 조건 플래그("--version", "--type" 또는 특정 객체 목록 등)를 "--all"과 함께 사용할 수 없습니다.',
  'You cannot add more than %d objects to the relationship.' => '관계에 객체를 %d개보다 많이 추가할 수 없습니다.',
  'Motivator' => '동기부여자',
  'Menu Items' => '메뉴 항목',
  'NO OBJECTS' => '객체 없음',
  'Object types to reindex, like "task", "commit" or "revision".' => '"task", "commit" 또는 "revision"과 같은, 다시 인덱싱 할 객체 유형입니다.',
  'Reindex all documents.' => '모든 문서를 재인덱싱합니다.',
  'Hide Query' => '쿼리 숨기기',
  'Set Default Query' => '기본 쿼리를 설정',
  '(Restricted/Invalid Project)' => '(제한된/유효하지 않은 프로젝트)',
  'Constants supported by the `%s` constraint:' => '`%s` 제약 조건에서 지원하는 상수:',
  'Use "--force" to force the index to update these documents.' => '이 문서들의 인덱스를 강제로 업데이트하려면 "--force"를 사용하세요.',
  'Disable this menu item? It will no longer appear in the menu, but you can re-enable it later.' => '이 메뉴 항목을 비활성화합니까? 비활성화하면 메뉴에 더 이상 표시되지 않지만 나중에 다시 활성화할 수 있습니다.',
  '(See table below.)' => '(아래의 표를 참고하세요.)',
  'Build or rebuild search indexes.' => '검색 인덱스를 빌드 또는 재빌드합니다.',
  'Cats must eat a diet rich in fish to replace the tiny bones in their tails.' => '고양이는 꼬리에 있는 작은 뼈들을 대체하기 위해 생선이 풍부한 식단을 섭취해야 합니다.',
  '%s Queries' => '%s 쿼리',
  'Set this item as the default for this menu? Users arriving on this page will be shown the content of this item by default.' => '이 항목을 이 메뉴의 기본값으로 설정합니까? 이 페이지에 접속하는 사용자에게 기본적으로 이 항목의 내용이 표시됩니다.',
  'Fulltext Engine' => '전문 엔진',
  'Two search engine attachments (of classes "%s" and "%s") specify the same attachment key ("%s"); keys must be unique.' => '두 개의 검색 엔진 첨부 파일(클래스 "%s" 및 "%s")이 동일한 첨부 파일 키("%s")를 지정합니다. 키는 고유해야 합니다.',
  'In ancient Egypt, the cat-god Horus watched over all cats.' => '고대 이집트에서 고양이 신 호루스는 모든 고양이를 보살폈습니다.',
  'Ngrams Engine' => 'Ngram 엔진',
  'Delete Query' => '쿼리 삭제',
  'Selecting objects to index...' => '인덱스 할 객체 선택 중...',
  '"%s" date can not be parsed.' => '"%s" 날짜의 구문을 분석할 수 없습니다.',
  'Current Menu Items' => '현재 메뉴 항목',
  'Failed to update search index for document "%s": %s' => '문서 "%s"에 대한 검색 인덱스를 업데이트하는 데 실패했습니다: %s',
  'Search for objects with specific PHIDs.' => '특정 PHID의 객체를 찾습니다.',
  'Full Name' => '전체 이름',
  'Type "%s" matches no indexable objects. Supported types are: %s.' => '"%s" 유형이 인덱싱 가능한 객체와 일치하지 않습니다. 지원되는 유형: %s.',
  'Menu Item' => '메뉴 항목',
  'This is a standard **ApplicationSearch** method which will let you list, query, or search for objects. For documentation on these endpoints, see **[[ %s | Conduit API: Using Search Endpoints ]]**.' => '객체를 나열, 쿼리 또는 검색할 수 있는 표준 **ApplicationSearch** 메서드입니다. 이러한 종단점에 대한 문서는 **[[ %s | Conduit API: 검색 종단점 사용 ]]**을 참조하세요.',
  'Many cats appear black in low light, suffering a -2 modifier to luck rolls.' => '많은 고양이는 어두운 곳에서 검게 보이며, 이로 인해 행운 판정에 -2의 페널티를 받습니다.',
  'Attachments' => '첨부',
  'The Japanese word for cat is "kome", which is also the word for rice. Japanese cats love to eat rice, so the two are synonymous.' => '일본어로 고양이는 "코메"인데, 이는 쌀을 뜻하는 단어와도 같습니다. 일본 고양이는 쌀을 매우 좋아하기 때문에 고양이와 쌀은 동의어처럼 사용됩니다.',
  'In the wild, cats and raccoons sometimes hunt together in packs.' => '야생에서 고양이와 너구리는 때때로 무리를 지어 함께 사냥합니다.',
  'Query (with ID "%s") has already been saved. Queries are immutable once saved.' => '쿼리(ID "%s")는 이미 저장되어 있습니다. 검색은 한번 저장되면 변경될 수 없습니다.',
  'No Content' => '내용 없음',
  'Prebuilt Queries' => '미리 빌드된 쿼리',
  'Fulltext Search Results' => '전문 검색 결과',
  'Query has an invalid sequence of operators ("%s").' => '쿼리에 유효하지 않은 연산자 순서("%s")가 있습니다.',
  'Engine: Search' => '엔진: 검색',
  'Profile Menu Item' => '프로필 메뉴 항목',
  '"2022-12-25" or "7 days ago"...' => '"2022-12-25" 또는 "7 days ago"...',
  'Paging and Limits' => '페이징 및 제한',
  'No objects selected to index.' => '인덱싱을 위해 선택된 객체가 없습니다.',
  'A cat can run seven times faster than a human, but only for a short distance.' => '고양이는 사람보다 7배나 빠르게 달릴 수 있지만, 짧은 거리에서만 그렇습니다.',
  'This engine is used to modify menu items on profiles.' => '이 엔진은 프로파일의 메뉴 항목 수정에 사용됩니다.',
  'You can choose a builtin or saved query as a starting point for filtering
results by selecting it with `queryKey`. If you don\'t specify a `queryKey`,
the query will start with no constraints.

For example, many applications have builtin queries like `"active"` or
`"open"` to find only active or enabled results. To use a `queryKey`, specify
it like this:

```lang=json, name="Selecting a Builtin Query"
{
  ...
  "queryKey": "active",
  ...
}
```

The table below shows the keys to use to select builtin queries and your
saved queries, but you can also use **any** query you run via the web UI as a
starting point. You can find the key for a query by examining the URI after
running a normal search.

You can use these keys to select builtin queries and your configured saved
queries:' => '`queryKey`를 사용하여 내장 쿼리 또는 저장된 쿼리를 필터링의 시작점으로 선택할 수 있습니다. `queryKey`를 지정하지 않으면 쿼리는 제약 조건 없이 시작됩니다.

예를 들어, 많은 애플리케이션에는 활성 또는 사용 가능한 결과만 찾는 `active` 또는 `open`과 같은 내장 쿼리가 있습니다. `queryKey`를 사용하려면 다음과 같이 지정합니다:

```lang=json, name="내장 쿼리 선택하기"
{
  ...
  "queryKey": "active",
  ...
}
```

아래 표는 내장 쿼리와 저장된 쿼리를 선택하는 데 사용할 키를 보여줍니다. 하지만 웹 UI를 통해 실행하는 **모든** 쿼리를 시작점으로 사용할 수도 있습니다. 일반 검색을 실행한 후 URI를 검사하여 쿼리의 키를 찾을 수 있습니다.

다음 키를 사용하여 내장 쿼리와 구성된 저장된 쿼리를 선택할 수 있습니다:',
  'No object relationship of type "%s" exists.' => '"%s" 유형의 객체 관계가 존재하지 않습니다.',
  'Delete Menu Item' => '메뉴 항목 삭제',
  'Ferret search engine field key ("%s") is invalid. Field keys must be exactly four characters long and contain only lowercase latin letters.' => 'Ferret 검색 엔진 필드 키("%s")가 유효하지 않습니다. 필드 키는 정확히 네 글자여야 하며 소문자 라틴 문자만 포함해야 합니다.',
  'Service index is already up to date.' => '서비스 인덱스가 이미 최신입니다.',
  'Cats spend most of their time plotting to kill their owner.' => '고양이는 대부분의 시간을 주인을 죽일 계획을 세우는 데 보냅니다.',
  'Storage Used' => '스토리지 사용',
  'Project Menu' => '프로젝트 메뉴',
  'Reindex objects previously indexed on or after a given date.' => '지정된 날짜 또는 그 이후에 인덱싱된 객체를 다시 인덱싱합니다.',
  'Customize Query: %s' => '쿼리 사용자 지정: %s',
  'Edit Related Objects...' => '관련된 객체 편집하기...',
  'Create Menu Item' => '메뉴 항목 만들기',
  'No saved queries.' => '저장된 쿼리가 없습니다.',
  'Supports ID/PHID Queries' => 'ID/PHID 쿼리를 지원합니다',
  'By default, only basic information about objects is returned. If you want
more extensive information, you can use available `attachments` to get more
information in the results (like subscribers and projects).

Generally, requesting more information means the query executes more slowly
and returns more data (in some cases, much more data). You should normally
request only the data you need.

To request extra data, specify which attachments you want in the `attachments`
parameter:

```lang=json, name="Example Attachments Request"
{
  ...
  "attachments": {
    "subscribers": true
  },
  ...
}
```

This example specifies that results should include information about
subscribers. In the return value, each object will now have this information
filled out in the corresponding `attachments` value:

```lang=json, name="Example Attachments Result"
{
  ...
  "data": [
    {
      ...
      "attachments": {
        "subscribers": {
          "subscriberPHIDs": [
            "PHID-WXYZ-2222",
          ],
          "subscriberCount": 1,
          "viewerIsSubscribed": false
        }
      },
      ...
    },
    ...
  ],
  ...
}
```

These attachments are available:' => '기본적으로 객체에 대한 기본 정보만 반환됩니다. 더 자세한 정보를 원하는 경우에는 `attachments`를 사용하여 결과에 더 많은 정보(예: 구독자 및 프로젝트)를 포함할 수 있습니다.

일반적으로 더 많은 정보를 요청하면 쿼리 실행 속도가 느려지고 더 많은 데이터(경우에 따라 훨씬 더 많은 데이터)가 반환됩니다. 일반적으로 필요한 데이터만 요청해야 합니다.

추가 데이터를 요청하려면 `attachments` 매개변수에 원하는 첨부 파일을 지정합니다:

```lang=json, name="예시 첨부 요청"
{
  ...
  "attachments": {
    "subscribers": true
  },
  ...
}
```

이 예제는 결과에 구독자에 대한 정보가 포함되도록 지정합니다. 반환 값에서 각 객체는 이제 해당 `attachments` 값에 다음 정보가 채워집니다.

```lang=json, name="예시 첨부 결과"
{
  ...
  "data": [
    {
      ...
      "attachments": {
        "subscribers": {
          "subscriberPHIDs": [
            "PHID-WXYZ-2222",
          ],
          "subscriberCount": 1,
          "viewerIsSubscribed": false
        }
      },
      ...
    },
    ...
  ],
  ...
}
```

다음과 같은 첨부를 사용할 수 있습니다:',
  'Excluding Search' => '제외 검색',
  'The word "catastrophe" has no etymological relationship to the word "cat".' => '"catastrophe"(재앙)이라는 단어는 "cat"(고양이)라는 단어와 어원적으로 아무런 관련이 없습니다.',
  'Skipped %s document(s) which have not updated since they were last indexed.' => '마지막 인덱스 생성 이후 업데이트되지 않은 %s개 문서를 건너뛰었습니다.',
  'Edit Builtin Item' => '내장 항목 편집',
  'Text value for "%s" can not be parsed.' => '"%s"에 대한 텍스트 값은 구문 분석될 수 없습니다.',
  'Two different fulltext engine extensions ("%s" and "%s") both define a search function with the same name ("%s"). Each function must have a unique name.' => '두 개의 서로 다른 전문 검색 엔진 확장 기능("%s" 및 "%s")은 모두 동일한 이름("%s")의 검색 함수를 정의합니다. 각 함수는 고유한 이름을 가져야 합니다.',
  '\'%s\' is not the name of a known object.' => '\'%s\'은(는) 알려진 프로젝트의 이름이 아닙니다.',
  'You must delegate to this controller, not invoke it directly.' => '이 컨트롤러를 직접 호출하지 말고 위임해야 합니다.',
  'Cat tails are flexible because they contain thousands of tiny bones.' => '고양이 꼬리는 수천 개의 작은 뼈로 이루어져 있어 유연합니다.',
  'Cat Facts' => '고양이에 대한 사실들',
  'Ferret Engine Ngrams' => 'Ferret 엔진 Ngram',
  'Forced search index updates for %s document(s).' => '문서 %s에 대한 검색 인덱스가 강제로 업데이트되었습니다.',
  'Updated search indexes for %s document(s).' => '문서 %s에 대한 검색 인덱스가 업데이트되었습니다.',
  'Field Absent: %s' => '필드 없음: %s',
  'Cats are stealthy predators and nearly invisible to radar.' => '고양이는 은밀한 포식자이며 레이더에 거의 포착되지 않습니다.',
  'Search Index Versions' => '검색 인덱스 버전',
  'You can not create a relationship (of type "%s") to object "%s" because it is not the right type of object for this relationship.' => '객체 "%2$s"에 ("%s" 유형의) 관계를 만들 수 없습니다. 이 관계에 맞는 객체 유형이 아니기 때문입니다.',
  'Object produced two items with the same builtin key ("%s"). Each item must have a unique builtin key.' => '객체가 동일한 내장 키("%s")를 가진 항목을 두 개 생성했습니다. 각 항목은 고유한 내장 키를 가져야 합니다.',
  '\'%s\' is not a builtin!' => '\'%s\'은(는) 내장이 아닙니다!',
  'All Open Objects' => '모든 열린 객체',
  'Buckets Overflowing' => '버킷 오버플로우',
  'Disable Query' => '쿼리 비활성화',
  'Divider' => '구분선',
  'Archived Dashboard' => '보관된 대시보드',
  'Manage Menu' => '메뉴 관리하기',
  'Minimum page size for Conduit API method calls is 1, but this call specified %s.' => 'Conduit API 메소드 호출의 최소 페이지 크기는 1이지만 이 호출은 %s을(를) 지정했습니다.',
  'This query took too long, so only some results are shown. %s' => '이 검색에 시간이 너무 오래 걸려서 일부 결과만 표시됩니다. %s',
  'The largest recorded cat was nearly 11 inches long from nose to tail.' => '기록상 가장 큰 고양이는 코끝에서 꼬리까지 길이가 거의 11인치에 달했습니다.',
  'PHID Type' => 'PHID 유형',
  'Invalid Relationship' => '유효하지 않은 관계',
  'There is nothing here.' => '여기에 아무 것도 없습니다.',
  'Two different fulltext engine extensions ("%s" and "%s") both define a search function with the same key ("%s"). Each function must have a unique key.' => '두 개의 서로 다른 전문 검색 엔진 확장 기능("%s" 및 "%s")은 모두 동일한 키("%s")의 검색 함수를 정의합니다. 각 함수는 고유한 키를 가져야 합니다.',
  'Search engine ("%s") defines an export field with a key ("%s") that collides with another field. Each field must have a unique key.' => '검색 엔진("%s")은 다른 필드와 충돌하는 키("%s")를 가진 내보내기 필드를 정의합니다. 각 필드는 고유한 키를 가져야 합니다.',
  'IDs' => 'ID',
  'This query will become your default query in the current application.' => '이 쿼리는 현재 애플리케이션의 기본 쿼리가 됩니다.',
  'PHIDs' => 'PHID',
  'Save Query' => '쿼리 저장',
  'Full-Text Search' => '전문 검색',
  'Too few documents of type "%s" for any ngrams to be common.' => '어떤 Ngram도 일반적인 것이 되기에는 "%s" 유형의 문서가 너무 적습니다.',
  'Deprecated alias for "%s".' => '"%s"의 구식 별칭입니다.',
  'Query has too many search tokens (%s tokens, maximum is %s tokens). Please use more specific search criteria.' => '쿼리에 검색 토큰이 너무 많습니다 (%s개 토큰, 최대 %s개 토큰). 보다 구체적인 검색 조건을 사용하세요.',
  'Edit Menu Item' => '메뉴 항목 편집하기',
  'Initializing search service "%s".' => '"%s" 검색 서비스를 초기화합니다.',
  'SELECT' => '선택',
  'Skipping service "%s" because it is not writable.' => '쓰기 가능하지 않은 서비스 "%s"을(를) 건너뜁니다.',
  'Date value for "%s" can not be parsed.' => '"%s"의 날짜값의 구문을 분석할 수 없습니다.',
  'Browse Item Types' => '항목 유형 찾아보기',
  'NOTE' => '참고',
  'Parameter "%s" includes an invalid key.' => '매개변수 "%s"에 유효하지 않은 키가 포함되어 있습니다.',
  '"%s" must be a date before "%s".' => '"%s"은(는) 날짜가 "%s" 보다 앞서야 합니다.',
  'Fulltext Search' => '전문 검색',
  'Parameter "%s" must be a map of attachments.' => '매개변수 "%s"은(는) 첨부물의 맵이어야 합니다.',
  'Drag items in this list to reorder them.' => '이 목록의 항목을 드래그하여 순서를 변경하세요.',
  'Prune ngrams present in more than this fraction of documents. Provide a value between 0.0 and 1.0.' => '이 문서 비율보다 많이 나타나는 ngram을 가지치기합니다. 0.0과 1.0 사이의 값을 제공하세요.',
  'Use `order` to choose an ordering for the results.

Either specify a single key from the builtin orders (these are a set of
meaningful, high-level, human-readable orders) or specify a custom list of
low-level columns.

To use a high-level order, choose a builtin order from the table below
and specify it like this:

```lang=json, name="Choosing a Result Order"
{
  ...
  "order": "newest",
  ...
}
```

These builtin orders are available:' => '`order`를 사용하여 결과 정렬 순서를 선택합니다.

내장된 정렬 순서(의미 있고, 상위 수준의, 사람이 읽기 쉬운 정렬 순서 모음)에서 단일 키를 지정하거나 하위 수준 열 목록을 사용자 지정할 수 있습니다.

상위 수준 정렬을 사용하려면 아래 표에서 내장 정렬 순서를 선택하고 다음과 같이 지정하세요:

```lang=json, name="결과 정렬 순서 선택"
{
  ...
  "order": "newest",
  ...
}
```

다음은 사용 가능한 내장 정렬 순서입니다:',
  'Profile picture' => '프로필 사진',
  'This query took too long. %s' => '이 쿼리는 너무 오랜 시간이 소요되었습니다. %s',
  'The first cats evolved in swamps about 65 years ago.' => '최초의 고양이는 약 65년 전 늪지대에서 진화했습니다.',
  'You can tell how warm a cat is by examining the coloration: cooler areas are darker.' => '고양이의 체온은 털 색깔을 보면 알 수 있습니다: 체온이 낮은 부위는 더 어둡습니다.',
  'Specify a query with --query.' => '--query로 쿼리를 지정하세요.',
  'You must choose an application.' => '애플리케이션을 선택해야 합니다.',
  'This menu currently has no items.' => '이 메뉴는 현재 항목이 없습니다.',
  'Setting "%s" is misconfigured: %s' => '"%s" 설정이 잘못 구성되었습니다: %s',
  'This item is already set as the default item for this menu.' => '이 항목은 이미 해당 메뉴의 기본 항목으로 설정되어 있습니다.',
  'Edit the global default menu for all users.' => '모든 사용자의 기본 전역 설정을 편집합니다.',
  'Profile Menu User Guide' => '프로필 메뉴 사용자 가이드',
  'You can not create a relationship to object "%s" because objects can not be related to themselves.' => '객체는 자기 자신과 관계를 맺을 수 없으므로 객체 "%s"와(과)의 관계를 만들 수 없습니다.',
  'Expected fulltext engine extension ("%s") to return a list of "FerretSearchFunction" objects from "newFerretSearchFunctions()", but found something else ("%s") at index "%s".' => '전체 텍스트 검색 엔진 확장("%s")이 "newFerretSearchFunctions()"에서 "FerretSearchFunction" 객체 목록을 반환할 것으로 예상했지만 인덱스 "%3$s"에서 다른 것("%s")을 찾았습니다.',
  'Type specification "%s" duplicates type specification "%s". Specify each type only once.' => '타입 명세 "%s"은(는) 타입 명세 "%s"와(과) 중복됩니다. 각 타입은 한 번만 지정해야 합니다.',
  'Item Status' => '항목 상태',
  'Project "%s" is not a valid project which you have permission to see.' => '프로젝트 "%s"은(는) 당신이 볼 수 있는 권한이 있는 유효한 프로젝트가 아닙니다.',
  'Provided view is not one of the views in the list: you can only select a view which appears in the list.' => '제공된 보기가 목록의 보기 중 하나가 아닙니다: 목록에 표시되는 보기만 선택할 수 있습니다.',
  'No views match identifier "%s"!' => '식별자 "%s"와(과) 일치하는 열람이 없습니다!',
  'Choose a valid export format.' => '유효한 내보내기 포맷을 선택하세요.',
  'Tooltip' => '말풍선',
  'Search engine ("%s") exported the wrong number of objects, expected %s but got %s.' => '검색 엔진("%s")이 잘못된 개수의 객체를 내보냈습니다. %s개를 예상했지만 %s개를 받았습니다.',
  'This built-in query can not be deleted, but you can disable it so it does not appear in your query menu. You can enable it again later. Disable built-in query "%s"?' => '이 내장 쿼리는 삭제할 수 없지만, 쿼리 메뉴에 표시되지 않도록 비활성화할 수 있습니다. 나중에 다시 활성화할 수도 있습니다. 내장 쿼리 "%s"을(를) 비활성화합니까?',
  'Motivate your team with inspirational quotes from great minds. This menu item shows a new quote every day.' => '위대한 사상가들의 영감을 주는 명언으로 팀에 동기를 부여하세요. 이 메뉴 항목에는 매일 새로운 명언이 표시됩니다.',
  'Saved Queries' => '저장된 쿼리',
  'Unknown search function "%s". Supported functions are: %s. (To search for a term containing a colon, surround the term in double quotes.)' => '알 수 없는 검색 함수 "%s"입니다. 지원되는 함수: %s. (콜론을 포함하는 검색어를 검색하려면, 검색어를 쌍따옴표로 감싸세요.)',
  '(Restricted/Invalid Form)' => '(제한된/유효하지 않은 양식)',
  'Edit Profile Menu Item Configurations' => '프로필 메뉴 항목 구성 편집',
  'Delete this menu item?' => '이 메뉴 항목을 삭제합니까?',
  'Cats prefer vanilla ice cream.' => '고양이는 바닐라 아이스크림을 더 좋아합니다.',
  'Resetting common ngrams for "%s".' => '"%s"에 대한 일반적인 Ngram을 초기화 합니다.',
  'Export Results' => '내보내기 결과',
  'To configure the search engines, edit [[ %s | %s ]] configuration. See **[[ %s | %s ]]** for documentation.' => '검색 엔진을 구성하려면 [[ %s | %s ]] 구성을 편집하세요. 자세한 내용은 **[[ %s | %s ]]**를 참조하세요.',
  'All Fulltext Search hosts failed:' => '모든 전문 검색 호스트 실패함:',
  'All Objects' => '모든 객체',
  'Dashboard "%s" is not a valid dashboard which you have permission to see.' => '"%s" 대시보드는 볼 권한이 있는 유효한 대시보드가 아닙니다.',
  'Failed to rebuild search index for any documents.' => '문서에 대한 검색 인덱스를 재빌드하는 데 실패했습니다.',
  'Updated common ngrams for "%s".' => '"%s"에 대한 일반적인 Ngram이 업데이트 되었습니다.',
  'The query matched more than one page of results. Results are paginated before bucketing, so later pages may contain additional results in any bucket.' => '해당 쿼리가 여러 페이지의 결과와 일치합니다. 결과는 버킷으로 분류되기 전에 페이지별로 정렬되므로, 나중 페이지에는 각 버킷에 추가 결과가 포함될 수 있습니다.',
  'Ferret Fulltext Engine' => 'Ferret 전문 엔진',
  'Export engine extension ("%s") exported the wrong number of objects, expected %s but got %s.' => '내보내기 엔진 확장 기능("%s")이 잘못된 개수의 객체를 내보냈습니다. %s개를 예상했지만 %s개를 받았습니다.',
  'Global Queries' => '전역 쿼리',
  'Link' => '링크',
  'Query contains unmatched double quotes.' => '쿼리에 짝이 맞지 않는 쌍따옴표가 포함되어 있습니다.',
  'Enable Query' => '쿼리 활성화',
  'This item can not be set as the default item. This is usually because the item has no page of its own, or links to an external page.' => '이 항목은 기본 항목으로 설정할 수 없습니다. 일반적으로 이 항목에 자체 페이지가 없거나 외부 페이지로 연결되기 때문입니다.',
  'Browse Results' => '결과 찾아보기',
  'Exact Search' => '정확한 일치 검색',
  'Enable this menu item? It will appear in the menu again.' => '이 메뉴 항목을 활성화할까요? 메뉴에 다시 나타납니다.',
  'Created By Me' => '내가 만듦',
  'Specify either --reset or --threshold, not both.' => '--reset 또는 --threshold를 지정하되, 둘을 동시에 지정하지는 마세요.',
  'Object produced a builtin item with no builtin item key! Builtin items must have a unique key.' => '객체가 내장 항목 키를 지정하지 않은 내장 항목을 생성했습니다! 내장 항목에는 고유한 키가 있어야 합니다.',
  'Ferret search engine function name ("%s") is invalid. Function names must be nonempty and may only contain latin letters and hyphens.' => 'Ferret 검색 엔진 함수 이름("%s")이 유효하지 않습니다. 함수 이름은 비어있지 않아야 하며 라틴 문자와 하이픈만 포함할 수 있습니다.',
  'Disable Query?' => '쿼리를 비활성화할까요?',
  'No Bucketing' => '버킷팅 하지 않음',
  'Use Results' => '결과 사용',
  'Expected fulltext engine extension ("%s") to return a list of functions from "newFerretSearchFunctions()", got "%s".' => '전문 검색 엔진 확장 기능("%s")이 "newFerretSearchFunctions()"에서 함수 목록을 반환할 것으로 예상했지만 "%s"(을)를 받았습니다.',
  'Order By' => '정렬 기준:',
  'No new common ngrams exist for "%s".' => '"%s"에 대한 새로운 일반적인 Ngram이 존재하지 않습니다.',
  'Cats purr when they are happy, upset, or asleep.' => '고양이는 행복할 때, 속상할 때, 또는 잠을 잘 때 가르랑거립니다.',
  'Save this query as a global query, making it visible to all users.' => '이 쿼리를 전역 쿼리로 저장하여 모든 사용자가 볼 수 있도록 합니다.',
  'Item Types' => '항목 유형',
  'You can not create a relationship to object "%s" because the object does not exist or could not be loaded.' => '객체가 존재하지 않거나 불러올 수 없기 때문에 "%s" 객체의 관계를 만들 수 없습니다.',
  'Edit Query' => '대기열 편집하기',
  'No results found for this query.' => '이 쿼리에 대한 결과가 없습니다.',
  'Searched For:' => '검색 대상:',
  'Force a complete rebuild of the entire index instead of an incremental update.' => '점진적인 업데이트 대신 전체 인덱스를 완전히 재빌드하도록 강제합니다.',
  'Cats with high self-esteem seek out high perches to launch their attacks. Watch out!' => '자존감이 높은 고양이는 공격하기 위해 높은 기둥을 찾습니다. 조심하세요!',
  'Motivator: %s' => '동기부여자: %s',
  '%s (Not Available)' => '%s (사용할 수 없음)',
  'Indexing %s object(s).' => '객체 %s개를 인덱싱합니다.',
  'This dashboard has been archived.' => '이 대시보드는 보관되었습니다.',
  'Specify a numeric threshold between 0 and 1.' => '0과 1 사이의 숫자 임계값을 지정하세요.',
  '(Restricted/Invalid Application)' => '(제한된/유효하지 않은 애플리케이션)',
  'DEV: Overheated State' => 'DEV: 과열 상태',
  'Query field must be absent ("%s") and present ("%s"). This is impossible, so the query is not valid.' => '쿼리 필드는 없어야 하는("%s") 동시에 있어야 합니다("%s"). 이는 불가능하므로 쿼리가 유효하지 않습니다.',
  'Reindex objects previously indexed with a particular version of the indexer.' => '재인덱스 객체가 이전에 특별한 버전의 인덱서로 인덱싱 되었습니다.',
  'Portal Menu' => '포털 메뉴',
  'Not Defaultable' => '기본 항목으로 만들 수 없음',
  'Really Delete Query?' => '정말로 쿼리를 삭제합니까?',
  'Query offset is too large. offset+limit=%s (max=%s)' => '쿼리 오프셋이 너무 큽니다. 오프셋+제한=%s (최대=%s)',
  'Instead of indexing in this process, queue tasks for the daemons. This can improve performance, but makes it more difficult to debug search indexing.' => '이 과정에서 인덱싱하는 대신 태스크를 데몬을 위해 대기열에 추가합니다. 이렇게 하면 성능이 향상될 수 있지만 검색 인덱싱 디버깅이 더 어려워집니다.',
  'Edit Queries...' => '대기열 편집하기...',
  'You can choose a low-level column order instead. To do this, provide a list
of columns instead of a single key. This is an advanced feature.

In a custom column order:

  - each column may only be specified once;
  - each column may be prefixed with `-` to invert the order;
  - the last column must be a unique column, usually `id`; and
  - no column other than the last may be unique.

To use a low-level order, choose a sequence of columns and specify them like
this:

```lang=json, name="Using a Custom Order"
{
  ...
  "order": ["color", "-name", "id"],
  ...
}
```

These low-level columns are available:' => '대신 하위 수준 열 순서를 선택할 수 있습니다. 이렇게 하려면 단일 키 대신 열 목록을 제공하세요. 이 기능은 고급 기능입니다.

사용자 지정 열 순서 지정 시 다음 사항을 준수해야 합니다.

  - 각 열은 한 번만 지정할 수 있습니다;
  - 각 열 앞에 `-`를 붙여 순서를 반전시킬 수 있습니다.
  - 마지막 열은 고유한 열이어야 하며, 일반적으로 `id`입니다.
  - 마지막 열을 제외한 다른 열은 고유할 수 없습니다.

하위 수준 순서를 사용하려면 다음과 같이 열 순서를 지정하세요:

```lang=json, name="사용자 지정 순서 사용하기"
{
  ...
  "order": ["color", "-name", "id"],
  ...
}
```

사용 가능한 하위 수준 열은 다음과 같습니다:',
  'Builtin item ("%s") specifies a bad item key ("%s"); there is no corresponding item implementation available.' => '내장 항목("%s")이 잘못된 항목 키("%s")를 지정합니다, 이에 해당하는 사용 가능한 항목 구현이 없습니다.',
  'DEV: New User State' => 'DEV: 새로운 사용자 상태',
  'Export engine extension ("%s") defines an export field with a key ("%s") that collides with another field. Each field must have a unique key.' => '내보내기 엔진 확장 기능("%s")은 다른 필드와 충돌하는 키("%s")를 가진 내보내기 필드를 정의합니다. 각 필드는 고유한 키를 가져야 합니다.',
  'A cattail is a wetland plant with an appearance that resembles the tail of a cat.' => '부들(cattail)은 고양이 꼬리와 비슷한 모양을 가진 습지 식물입니다.',
  'Service index does not exist, creating...' => '서비스 인덱스가 존재하지 않습니다. 만드는 중...',
  'Export Data' => '데이터 내보내기',
  'Circular Dependency' => '순환 의존',
  'Cats use a special type of magnetism to help them land on their feet.' => '고양이는 착지할 때 발로 딛는 데 도움이 되는 특별한 종류의 자성을 이용합니다.',
  'Lisk Builtin Properties' => 'Lisk 내장 속성',
  'More information' => '자세한 정보',
  'Application "%s" is not enabled!' => '애플리케이션 "%s"아(가) 활성화되지 않았습니다!',
  'Unable to Render Dashboard' => '대시보드를 렌더링할 수 없습니다',
  'Queued %s document(s) for background indexing.' => '백그라운드 인덱싱을 위해 문서 %s개를 대기열에 추가했습니다.',
  '(Restricted/Invalid Conpherence)' => '(제한된/유효하지 않은 Conpherence)',
  'System Saved Queries' => '시스템에서 저장된 쿼리',
  'Threshold must be greater than 0.0 and less than 1.0.' => '임계값은 0.0보다 크고 1.0보다 작아야 합니다.',
  'This dashboard is invalid and could not be loaded.' => '이 대시보드는 유효하지 않으며 로드할 수 없습니다.',
  'Enable the built-in query "%s"? It will appear in your menu again.' => '내장 쿼리 "%s"을(를) 활성화합니까? 메뉴에 다시 나타나게 됩니다.',
  'Queries are limited to returning 100 results at a time. If you want fewer
results than this, you can use `limit` to specify a smaller limit.

If you want more results, you\'ll need to make additional queries to retrieve
more pages of results.

The result structure contains a `cursor` key with information you\'ll need in
order to fetch the next page of results. After an initial query, it will
usually look something like this:

```lang=json, name="Example Cursor Result"
{
  ...
  "cursor": {
    "limit": 100,
    "after": "1234",
    "before": null,
    "order": null
  }
  ...
}
```

The `limit` and `order` fields are describing the effective limit and order the
query was executed with, and are usually not of much interest. The `after` and
`before` fields give you cursors which you can pass when making another API
call in order to get the next (or previous) page of results.

To get the next page of results, repeat your API call with all the same
parameters as the original call, but pass the `after` cursor you received from
the first call in the `after` parameter when making the second call.

If you do things correctly, you should get the second page of results, and
a cursor structure like this:

```lang=json, name="Second Result Page"
{
  ...
  "cursor": {
    "limit": 5,
    "after": "4567",
    "before": "7890",
    "order": null
  }
  ...
}
```

You can now continue to the third page of results by passing the new `after`
cursor to the `after` parameter in your third call, or return to the previous
page of results by passing the `before` cursor to the `before` parameter. This
might be useful if you are rendering a web UI for a user and want to provide
"Next Page" and "Previous Page" links.

If `after` is `null`, there is no next page of results available. Likewise,
if `before` is `null`, there are no previous results available.' => '쿼리는 한 번에 최대 100개의 결과만 반환합니다. 100개보다 적은 결과를 원하시면 `limit`을 사용하여 더 작은 제한을 지정할 수 있습니다.

더 많은 결과를 원하시면 추가 쿼리를 실행하여 더 많은 페이지의 결과를 가져와야 합니다.

결과 구조에는 다음 페이지의 결과를 가져오는 데 필요한 정보가 포함된 `cursor` 키가 있습니다. 첫 번째 쿼리 후에는 일반적으로 다음과 같은 형식이 됩니다:

```lang=json, name="예시 커서 결과"
{
  ...
  "cursor": {
    "limit": 100,
    "after": "1234",
    "before": null,
    "order": null
  }
  ...
}
```

`limit` 및 `order` 필드는 쿼리가 실행된 실제 제한 및 순서를 설명하며, 일반적으로 크게 중요하지 않습니다. `after` 및 `before` 필드는 커서를 제공하며, 이 커서를 사용하여 다음(또는 이전) 페이지의 결과를 가져올 수 있습니다.

다음 페이지의 결과를 가져오려면, 첫 번째 API 호출과 동일한 매개변수를 사용하여 API 호출을 다시 수행하되, 두 번째 호출 시 `after` 매개변수에 첫 번째 호출에서 받은 `after` 커서를 전달하세요.

두 번째 호출에서는 첫 번째 호출에서 받은 `after` 커서를 전달해야 합니다. 제대로 실행했다면 두 번째 페이지 결과가 표시되고, 다음과 같은 커서 구조가 나타납니다:

```lang=json, name="두 번째 결과 페이지"
{
  ...
  "cursor": {
    "limit": 5,
    "after": "4567",
    "before": "7890",
    "order": null
  }
  ...
}
```

이제 세 번째 호출에서 `after` 매개변수에 새 `after` 커서를 전달하여 세 번째 페이지 결과로 이동하거나, `before` 매개변수에 `before` 커서를 전달하여 이전 페이지로 돌아갈 수 있습니다.
이 기능은 웹 UI를 사용자에게 제공하고 "다음 페이지" 및 "이전 페이지" 링크를 표시하려는 경우 유용할 수 있습니다.

`after`가 `null`이면 다음 페이지 결과가 없습니다. 마찬가지로, `before`가 `null`이면 이전 결과가 없습니다.',
  'Engine Name' => '엔진 이름',
);
  }

}
