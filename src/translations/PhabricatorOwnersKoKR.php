<?php

final class PhabricatorOwnersKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
  '"" (empty string)' => '"" (빈 문자열)',
  'Configure Owners Package Forms' => 'Owners 패키지 양식 구성',
  'Package name is required.' => '패키지 이름은 필수입니다.',
  'Create New Package' => '새로운 패키지 만들기',
  'Tales of adventure for this package.' => '이 패키지의 모험 이야기입니다.',
  'Search for active or archived packages.' => '활성 또는 보존된 패키지를 검색합니다.',
  'Change package authority rules.' => '패키지 권한 규칙을 변경합니다.',
  'Automatically trigger audits for commits affecting files in this package.' => '이 패키지의 파일에 영향을 미치는 커밋에 대해 자동으로 감사를 실행합니다.',
  'Include' => '포함',
  'Path Exists in Repository' => '저장소에 경로 존재함',
  'Included Paths' => '포함된 경로',
  'Audit Unreviewed Commits and Commits With No Owner Involvement' => '검토되지 않은 커밋 및 소유자 참여 없는 커밋을 감사',
  'No exclusion value for path "%s"!' => '경로 "%s"에 대한 제외 값이 없습니다!',
  'Search for packages by name substrings.' => '이름 부분 문자열로 패키지를 검색합니다.',
  'Authority setting information.' => '권한 설정 정보입니다.',
  'Changeset attribute "%s" is not valid. Valid changeset attributes are: %s.' => '변경집합 특성 "%s"은(는) 유효하지 않습니다. 유효한 변경집합 특성: %s.',
  'Owners Packages' => 'Owners 패키지',
  'Select and reorder package fields.' => '패키지 필드를 선택하고 재정렬합니다.',
  'Path specification must be a list of paths.' => '경로 명세는 경로의 목록이어야 합니다.',
  'Validating...' => '확인 중...',
  '%s changed %s package owner(s), added %s: %s; removed %s: %s.' => '%s님이 패키지 소유자를 변경했습니다, 추가됨: %4$s, 제거됨: %6$s.',
  '%s updated paths for this package.' => '%s님이 이 패키지에 대한 경로를 업데이트했습니다.',
  'Auto Review' => '자동 검토',
  '%s adjusted package authority rules from %s to %s.' => '%s님이 패키지 권한 규칙을 %s에서 %s(으)로 조정했습니다.',
  'Packages: Invalid Owner' => 'Packages: 유효하지 않은 소유자',
  'Auto review information.' => '자동 검토 정보입니다.',
  'Group sections of a codebase into packages for re-use in other applications, like Herald rules.' => 'Herald 규칙처럼 코드베이스의 특정 부분을 패키지로 묶어 다른 애플리케이션에서 재사용할 수 있도록 합니다.',
  'Path Not Found On Default Branch' => '기본 브랜치에서 경로를 발견하지 못함',
  'Affected By Herald Rules' => 'Herald 규칙에 영향 받음',
  'Users and projects which own the package.' => '패키지를 소유하는 사용자와 프로젝트입니다.',
  'Failed to load a random repository. You may need to generate more test repositories first.' => '무작위 저장소를 로드하는 데 실패했습니다. 먼저 더 많은 테스트 저장소를 생성해야 할 수도 있습니다.',
  'Subscribe to Changes With Non-Owner Author' => '소유자가 아닌 작성자의 변경 사항 구독',
  'Specify the files and directories which comprise this package.' => '이 패키지를 구성하는 파일 및 디렉터리를 지정하세요.',
  'Packages: %s' => '패키지: %s',
  'owner' => '소유자',
  'The package description.' => '패키지 설명입니다.',
  'Strong (Package Owns Paths)' => '강함 (패키지가 경로를 소유)',
  'Review Changes With Non-Owner Author' => '소유자가 아닌 작성자의 변경 사항 검토',
  '%s renamed this package from %s to %s.' => '%s님이 이 패키지의 이름을 %s에서 %s(으)로 변경했습니다.',
  'Audit Unreviewed Commits' => '검토하지 않은 커밋을 감사',
  'Type a package name or function...' => '패키지 이름 또는 함수를 입력하세요...',
  'Save Paths' => '경로 저장하기',
  'List of dictionaries, each describing a path.' => '경로를 설명하는, 딕셔너리의 목록입니다.',
  'Edit Paths' => '경로 편집하기',
  '%s changed %s ignored attribute(s), added %s: %s.' => '%s님이 무시된 특성을 변경했습니다, 추가됨: %4$s.',
  'Owners User Guide' => 'Owners 사용자 가이드',
  'Path specification list references repository PHID "%s", but that is not a valid, visible repository.' => '경로 명세 목록에서 저장소 PHID "%s"을(를) 참조하고 있지만, 이는 유효하고 표시 가능한 저장소가 아닙니다.',
  'Package auditing value "%s" is not supported. Supported options are: %s. Deprecated options are: %s.' => '패키지 감사 값 "%s"은(는) 지원되지 않습니다. 지원되는 옵션: %s. 구식인 옵션: %s.',
  'Type packages(<user>) or packages(<project>)...' => 'packages(<user>) 또는 packages(<project>)를 입력하세요...',
  'Dominion' => '도미니언',
  'Read information about Owners packages.' => 'Owners 패키지에 대한 정보를 읽습니다.',
  'Dominion setting "%s" is not valid. Valid settings are: %s.' => '도미니온 설정 "%s"이(가) 유효하지 않습니다. 유효한 설정: %s.',
  'Configure Owners.' => 'Owners를 구성합니다.',
  'Ignored attribute information.' => '무시된 특성 정보입니다.',
  'Weak' => '약함',
  'Strong (Control All Paths)' => '강함 (모든 경로를 제어)',
  'Custom Owners fields.' => '사용자 지정 Owners 필드입니다.',
  'Own Source Code' => '자신의 소스 코드',
  'Search for packages with specific owners.' => '특정한 소유자의 패키지를 검색합니다.',
  'Authority' => '인가',
  'Package names may not contain commas (",") or exclamation marks ("!"). These characters are ambiguous when package names are parsed from the command line.' => '패키지 이름에는 쉼표(",")나 느낌표("!")를 사용할 수 없습니다. 이러한 문자는 명령줄에서 패키지 이름을 구문 분석할 때 모호함을 유발합니다.',
  '%s changed %s ignored attribute(s), added %s: %s; removed %s: %s.' => '%s님이 무시된 특성을 변경했습니다, 추가됨: %4$s, 제거됨: %6$s.',
  'Ignore generated files (review only).' => '생성된 파일을 무시합니다 (검토 전용).',
  'Automatically trigger reviews for commits affecting files in this package.' => '이 패키지의 파일에 영향을 미치는 커밋에 대해 자동으로 검토를 실행합니다.',
  'Dominion setting information.' => '도미니언 설정 정보입니다.',
  'Owners of a package may always view it.' => '패키지 소유자는 언제든지 볼 수 있습니다',
  'Weak (Package Watches Paths)' => '강함 (패키지가 경로를 주시)',
  'No commits in this package.' => '이 패키지에는 커밋이 없습니다.',
  'Review All Changes' => '모든 변경사항 검토',
  'Archive or enable the package.' => '패키지를 보관 또는 활성화',
  'Package Lore' => '패키지 이야기',
  'Review All Changes (Blocking)' => '모든 변경 사항 검토 (차단)',
  'No active Herald rules add this package as an auditor, reviewer, or subscriber.' => '이 패키지를 감사자, 검토자 또는 구독자로써 추가하는 활성 Herald 규칙이 없습니다.',
  'Owners Package' => 'Owners 패키지',
  'Browse Packages by Owner' => '패키지를 소유자로 찾아보기',
  'Change package dominion rules.' => '패키지 도미니언 규칙을 변경합니다.',
  'No Autoreview' => '자동 검토 안 함',
  'Create a Package' => '패키지 만들기',
  '[Package]' => '[패키지]',
  'Search for packages by included repositories.' => '포함된 저장소로 패키지를 검색합니다.',
  'Audit All Commits' => '모든 커밋을 감사',
  'Audit Commits With No Owner Involvement' => '소유자 참여 없는 커밋을 감사',
  '%s adjusted autoreview from %s to %s.' => '%s님이 자동 검토를 %s에서 %s(로) 조정했습니다.',
  'Owned' => '소유됨',
  'No repository PHID for path "%s"!' => '경로 "%s"에 대한 저장소 PHID가 없습니다!',
  '%s archived this package.' => '%s님이 이 패키지를 보관했습니다.',
  'Ignored Attributes' => '무시된 특성',
  'Path specification list contains invalid value in key "%s": %s.' => '경로 명세 목록의 키 "%s"에 유효하지 않은 값이 포함되어 있습니다: %s.',
  'Review Changes With Non-Owner Author (Blocking)' => '소유자가 아닌 작성자의 변경 사항 검토 (차단)',
  '%s added %s owner(s): %s.' => '%s님이 소유자를 추가했습니다: %3$s.',
  '%s changed %s ignored attribute(s), removed %s: %s.' => '%s님이 무시된 특성을 변경했습니다, 제거됨: %4$s.',
  'Find results in any of an owner\'s packages.' => '소유자의 패키지들 내에서 결과를 찾습니다.',
  'Get the paths for each package.' => '각 패키지의 경로를 가져옵니다.',
  'Search for packages affecting specific paths.' => '특정한 경로에 영향을 주는 패키지를 검색합니다.',
  'Subscribe to All Changes' => '모든 변경 사항을 구독',
  'Human-readable description of the package.' => '패키지에 대한 사람이 읽을 수 있는 설명입니다.',
  'Auditing' => '감사',
  'This package does not contain any paths yet. Use "Edit Paths" to add some.' => '이 패키지에는 아직 아무 경로도 포함되어 있지 않습니다. 경로를 추가하려면 "경로 편집하기"를 사용하세요.',
  'Overwrite existing package paths with new paths.' => '기존 패키지 경로를 새 경로로 덮어씁니다.',
  'Strong' => '강함',
  'No Auditing' => '감사하지 않음',
  'Map of custom fields for Owners packages. For details on adding custom fields to Owners, see "Configuring Custom Fields" in the documentation.' => 'Owners 패키지에 대한 사용자 지정 필드 맵입니다. 소유자에 사용자 정의 필드를 추가하는 방법에 대한 자세한 내용은 설명문서의 "사용자 지정 필드 구성"을 참조하세요.',
  'Packages: ...' => '패키지: ...',
  'Authority setting "%s" is not valid. Valid settings are: %s.' => '권한 설정 "%s"이(가) 유효하지 않습니다. 유효한 설정: %s.',
  'Activate Package' => '패키지 활성화',
  'This package will become active again.' => '이 패키지는 다시 활성화됩니다.',
  '%s updated the description for this package.' => '%s님이 이 패키지에 대한 설명을 업데이트했습니다.',
  'Adopt today!' => '오늘 양도받으세요!',
  'Ignore paths with any of these attributes.' => '다음 특성 중 하나라도 포함된 경로는 무시합니다.',
  'This function allows you to find results associated with any of the packages a specified user or project is an owner of. For example, this will find results associated with all of the projects `%s` owns:

%s

' => '이 함수를 사용하면 지정된 사용자 또는 프로젝트가 소유한 모든 패키지와 연관된 결과를 찾을 수 있습니다. 예를 들어, 다음은 `%s`이(가) 소유한 모든 프로젝트와 연관된 결과를 찾습니다:

%s',
  '%s activated this package.' => '%s님이 이 패키지를 활성화 시켰습니다.',
  'List of package owners.' => '패키지 소유자의 목록입니다.',
  'Active or archived status of the package.' => '패키지의 활성 또는 보관 상태입니다.',
  'Apply transactions to create a new Owners package or edit an existing one.' => '새 Owners 패키지를 만들거나 기존 Owners 패키지를 편집하기 위해 트랜잭션을 적용하세요.',
  'This package has no open problem commits.' => '이 패키지에는 열린 문제 커밋이 없습니다.',
  'PACKAGE DETAIL' => '패키지 세부 정보',
  'Configure forms for creating and editing packages in Owners.' => 'Owners 패키지를 생성하고 편집하기 위한 양식을 구성합니다.',
  '%s removed %s owner(s): %s.' => '%s님이 소유자를 제거했습니다: %3$s.',
  '%s adjusted package dominion rules from %s to %s.' => '%s님이 패키지 도미니언 규칙을 %s에서 %s(으)로 조정했습니다.',
  'CHANGES TO PACKAGE DESCRIPTION' => '패키지 설명의 변경사항',
  'Autoreview setting "%s" is not valid. Valid settings are: %s.' => '자동 검토 설정 "%s"이(가) 유효하지 않습니다. 유효한 설정: %s.',
  'Edit Paths: %s' => '경로 편집하기: %s',
  'Package %d' => '패키지 %d',
  'Add New Path' => '새로운 경로 추가',
  'When updating the paths for a package, pass a list of dictionaries like
this as the `value` for the transaction:

```lang=json, name="Example Paths Value"
[
  {
    "repositoryPHID": "PHID-REPO-1234",
    "path": "/path/to/directory/",
    "excluded": false
  },
  {
    "repositoryPHID": "PHID-REPO-1234",
    "path": "/another/example/path/",
    "excluded": false
  }
]
```

This transaction will set the paths to the list you provide, overwriting any
previous paths.

Generally, you will call `owners.search` first to get a list of current paths
(which are provided in the same format), make changes, then update them by
applying a transaction of this type.' => '패키지 경로를 업데이트할 때 트랜잭션의 `value`로 다음과 같은 딕셔너리 목록을 전달하세요:

```lang=json, name="Example Paths Value"
[
  {
    "repositoryPHID": "PHID-REPO-1234",
    "path": "/path/to/directory/",
    "excluded": false
  },
  {
    "repositoryPHID": "PHID-REPO-1234",
    "path": "/another/example/path/",
    "excluded": false
  }
]
```

이 트랜잭션은 사용자가 제공하는 목록으로 경로를 설정하여 이전 경로를 덮어씁니다.

일반적으로 먼저 `owners.search`를 호출하여 (동일한 형식으로 제공되는)현재 경로 목록을 가져온 다음, 변경 사항을 적용하고 이 유형의 트랜잭션을 적용하여 업데이트합니다.',
  '%s changed the audit rule for this package from %s to %s.' => '%s님이 이 패키지의 감사 규칙을 %s에서 %s(으)로 변경했습니다.',
  'Active Packages' => '활성 패키지',
  'Exclude' => '제외',
  'Archive Package' => '패키지 보존하기',
  'Weak (Control Unowned Paths)' => '약함 (소유되지 않은 경로를 제어)',
  'Auto audit information.' => '자동 감사 정보입니다.',
  'This package will be marked as archived.' => '이 패키지는 보존됨으로 표시됩니다.',
);
  }

}
