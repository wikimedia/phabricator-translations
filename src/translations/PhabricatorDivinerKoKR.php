<?php

final class PhabricatorDivinerKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
  'Article has no %s!' => '문서에 %s이(가) 없습니다!',
  'This trait is not documented.' => '이 Trait는 문서화되어 있지 않습니다.',
  'Writing graph cache.' => '그래프 캐시를 작성합니다.',
  'Edit Basics' => '기본 편집하기',
  'This interface is not documented.' => '이 인터페이스는 문서화되어 있지 않습니다.',
  'Type a book name...' => '책 이름을 입력하세요...',
  'Documentation uses `%s`, but should use `%s`.' => '설명문서에서는 `%s`을(를) 사용했지만, `%s`을(를) 사용해야 합니다.',
  'Atom "%s" is preceded by a comment containing `%s`, but the comment is not a documentation comment. Documentation comments must begin with `%s`, followed by a newline. Did you mean to use a documentation comment? (As the comment is not a documentation comment, it will be ignored.)' => '아톰 "%s" 앞에 `%s`이(가) 포함된 주석이 있지만, 이 주석은 설명문서 주석이 아닙니다. 설명문서 주석은 `%s`(으)로 시작하고 줄 바꿈이 와야 합니다. 설명문서 주석을 사용하려고 하셨습니까? (이 주석은 설명문서 주석이 아니므로 무시됩니다.)',
  'No such atom \'%s\'!' => '그런 아톰 \'%s\'은(는) 없습니다!',
  'Diviner Atom' => 'Diviner 아톰',
  'This enum is not documented.' => '이 Enum은 문서화되어 있지 않습니다.',
  'Found %s book(s).' => '책 %s개를 찾았습니다.',
  'Propagating changes through the graph.' => '그래프 전체에 변경 사항을 전파합니다.',
  'Atoms inherit the policies of the books they are part of.' => '아톰음 자신이 속한 책의 정책을 상속받습니다.',
  'Symbol \'%s\' is not a method!' => '심볼 \'%s\'은(는) 메서드가 아닙니다!',
  'Search Results for %s' => '%s에 대한 검색 결과',
  'Deleting %s document(s).' => '문서 %s개를 삭제합니다.',
  'Enum' => 'Enum',
  'Rule \'%s\' is not a valid regular expression.' => '규칙 \'%s\'은(는) 유효한 정규 표현식이 아닙니다.',
  '(NOTE) **Looking for documentation?** If you\'re looking for help and information about %s, you can [[https://we.phorge.it/diviner/ | browse the public %s documentation]] on the live site.

Diviner is the documentation generator used to build this documentation.

You haven\'t generated any Diviner documentation books yet, so there\'s nothing to show here. If you\'d like to generate your own local copy of the documentation and have it appear here, run this command:

  %s

' => '(참고) **설명문서를 찾고 계신가요?** %s에 대한 도움말 및 정보를 찾고 있다면 라이브 사이트에서 [[https://we.phorge.it/diviner/ | 공개 %s개 설명문서 보기]]를 통해 확인할 수 있습니다.

Diviner는 이 설명문서를 생성하는 데 사용된 문서 생성기입니다.

아직 Diviner 설명문서 책을 생성하지 않았으므로 여기에 표시할 내용이 없습니다. 설명문서의 로컬 사본을 생성하여 여기에 표시하려면 다음 명령을 실행하세요.

  %s',
  'Return' => '반환',
  'Found %s file(s) in project.' => '프로젝트에서 파일 %s개를 찾았습니다.',
  'Diviner Search' => 'Diviner 검색',
  'PUBLISHING DOCUMENTATION' => '설명문서 게시 중',
  'All Atoms' => '모든 아톰',
  'Book configuration \'%s\' has name \'%s\', but book names must include only lowercase letters and hyphens.' => '책 구성 \'%s\'의 이름은 \'%s\'이지만, 책 이름에는 소문자와 하이픈만 포함되어야 합니다.',
  'Read More Documentation' => '추가 설명문서 보기',
  'Specify a Diviner book configuration file with %s.' => '%s을 사용해 Diviner 책 구성 파일을 지정하세요.',
  'Creating %s document(s).' => '문서 %s개를 만듭니다.',
  'Diviner' => 'Diviner',
  'Specify a subclass of %s.' => '%s의 하위 클래스를 지정하세요.',
  'Atom names must not be in the form \'%s\'. This pattern is reserved for disambiguating atoms with similar names.' => '아톰 이름은 \'%s\' 형태가 되어서는 안 됩니다. 이 형식은 이름이 비슷한 아톰를 구분하기 위해 사용됩니다.',
  'Article' => '문서',
  'Skipping %s...' => '%s 건너뛰는 중...',
  'This article is not documented.' => '이 문서는 문서화되어 있지 않습니다.',
  'Books' => '책',
  'This atom no longer exists.' => '이 아톰은 더 이상 존재하지 않습니다.',
  'No books found.' => '책이 없습니다.',
  'This call takes %s parameter(s), but only %s are documented.' => '이 함수 호출은 %s개 매개변수를 받지만, %s개만 문서화되어 있습니다.',
  'Writing atom cache.' => '아톰 캐시를 작성합니다.',
  'Inherited' => '상속받음',
  'Documentation Warnings' => '설명문서 경고',
  'Diviner Books' => 'Diviner 책',
  'Generating book "%s"...' => '북 "%s" 생성중...',
  'No methods for this task.' => '이 태스크를 위한 메서드가 없습니다.',
  'Repository that the documentation belongs to.' => '설명문서가 속한 저장소입니다.',
  'Atom already has a parent!' => '아톰은 이미 상위가 있습니다!',
  'Produce ugly (but faster) output.' => '보기 흉한 (하지만 더 빠른) 출력을 생성합니다.',
  'This file is not documented.' => '이 파일은 문서화되어 있지 않습니다.',
  'Found %s affected atoms.' => '영향받은 아톰 %s개를 찾았습니다.',
  'Unexpected property "%s" in Javelin class definition!' => 'Javelin 클래스 정의에 예상치 못한 속성 "%s"!',
  'Diviner Book' => 'Diviner 책',
  'Found %s new atom(s) in graph.' => '그래프에서 새로운 아톰 %s개를 찾았습니다.',
  'There are no Diviner \'%s\' files anywhere beneath the current directory. Use \'%s\' to specify a documentation book to generate.' => '현재 디렉터리 아래에는 Diviner \'%s\' 파일이 없습니다. 생성할 설명문서 책을 지정하려면 \'%s\'을(를) 사용하세요.',
  'Edit Book' => '책 편집하기',
  'Child hashes have already been computed!' => '하위 해시값이 이미 계산되었습니다!',
  'Defined' => '정의됨',
  'Clear the caches before generating documentation.' => '설명문서를 생성하기 전에 캐시를 지웁니다.',
  'Implements' => '구현',
  'Parent hash has already been computed!' => '상위 해시값이 이미 계산되었습니다!',
  'Free Radicals' => '자유 라디칼',
  'Generate documentation.' => '설명문서를 생성합니다.',
  'Expected exactly one atom from file atomizer.' => '파일 아토마이저에서 정확히 하나의 아톰을 예상했습니다.',
  'Untitled Article "%s"' => '제목 없는 문서 "%s"',
  'Publisher class \'%s\' must be a concrete subclass of %s.' => '게시자 클래스 \'%s\'은(는) %s의 구상 하위 클래스여야 합니다.',
  'Need translation for \'%s\'.' => '\'%s\'에 대한 번역이 필요합니다.',
  'Documentation Not Found' => '설명문서가 없습니다',
  'Path to a Diviner book configuration.' => 'Diviner 책 구성의 경로입니다.',
  'This class is not documented.' => '이 클래스는 문서화되어 있지 않습니다.',
  'This method is not documented.' => '이 메서드는 문서화되어 있지 않습니다.',
  'Documentation Atoms' => '설명문서 아톰',
  'Parameter "%s" is named "%s" in the documentation. The documentation may be out of date.' => '매개변수 "%s"은(는) 설명문서에서 "%s"(으)로 명명되어 있습니다. 설명문서가 최신 버전이 아닐 수 있습니다.',
  'Atomizer class \'%s\' must be a concrete subclass of %s.' => '아토마이저 클래스 \'%s\'은(는) %s의 구상 하위 클래스여야 합니다.',
  'BUILDING ATOM CACHE' => '아톰 캐시 빌드 중',
  'Specify an atomizer class with %s.' => '%s를 사용해 아토마이저 클래스를 지정하세요.',
  'BUILDING GRAPH CACHE' => '그래프 캐시 빌드 중',
  'Trait' => 'Trait',
  'Unable to find the specified documentation. You may have followed a bad or outdated link.' => '지정된 설명문서를 찾을 수 없습니다. 잘못되었거나 오래된 링크를 클릭했을 수 있습니다.',
  'Extends' => '확장',
  'Expected "%s" node but found "%s" (on line %d:%d).' => '"%s" 노드가 예상되었지만 "%s" 노드를 찾았습니다(%d:%d 줄에서).',
  'Found %s obsolete atom(s) in graph.' => '그래프에서 오래된 아톰 %s개를 찾았습니다.',
  'No such atom with node hash \'%s\'!' => '그런 노드 해시값 \'%s\'을(를) 가진 아톰은 없습니다!',
  'Atomization complete.' => '원자화 완료.',
  'Documentation specifies `%s` multiple times.' => '설명문서가 `%s`을(를) 여러 번 지정합니다.',
  'CLEARING CACHES' => '캐시 지우는 중',
  'Diviner User Guide' => 'Diviner 사용자 가이드',
  'Edit Book: %s' => '책 편집하기: %s',
  'Found %s file(s) to atomize.' => '원자화할 파일 %s개를 찾았습니다.',
  'Found %s unatomized, uncached file(s).' => '원자화되지 않았고 캐시되지 않은 파일 %s개를 찾았습니다.',
  'Method `%s` has explicitly documented `%s`. The `%s` method always returns `%s`. Diviner documents this implicitly.' => '메서드 `%s`은(는) `%s`을(를) 명시적으로 문서화했습니다. `%s` 메서드는 항상 `%s`을(를) 반환합니다. Diviner는 이를 암묵적으로 문서화합니다.',
  'Build atoms from source.' => '소스에서 아톰을 빌드합니다.',
  'This function is not documented.' => '이 함수는 문서화되어 있지 않습니다.',
  'Find' => '찾기',
  'Other Methods' => '그 외 메서드',
  'Expected to find atom while disambiguating!' => '동음이의를 처리하는 중 아톰을 찾을 것을 예상했습니다!',
  'This %s is not documented.' => '이 %s은(는) 문서화되어 있지 않습니다.',
  'Documentation Books' => '설명문서 책',
  'Atom cache is up to date, no files to atomize.' => '아톰 캐시가 최신 상태이므로, 원자화할 파일이 없습니다.',
  'Repository "%s" does not exist.' => '저장소 "%s"이(가) 존재하지 않습니다.',
  'Book' => '책',
  'Specify one or more files to atomize.' => '아톰화 할 하나 이상의 파일을 지정하세요.',
  'Atomizing %s...' => '%s 원자화 중...',
  'Completed generation of "%s".' => '"%s" 생성이 완료되었습니다.',
  'Atomizing %s file(s).' => '파일 %s개를 원자화합니다.',
  'Atom has no symbol map entry!' => '아톰에 심볼 맵 항목이 없습니다!',
  'Browse Books' => '책 찾아보기',
  'FINDING DOCUMENTATION BOOKS' => '설명문서 책 찾는 중',
);
  }

}
