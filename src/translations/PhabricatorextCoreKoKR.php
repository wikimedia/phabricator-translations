<?php

final class PhabricatorextCoreKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
  'Escalate' => '승격시키기',
  'Next: %s' => '다음: %s',
  'Auto-generated release schedule details.' => '자동 생성 릴리스 일정 세부 정보',
  'Consumer Token' => '컨슈머 토큰',
  'Merged' => '합치기',
  'Unresolved code review comments: %d' => '해결되지 않은 코드 검토 댓글: %d',
  'Customize query in gerrit' => '게릿 내 쿼리 사용자 지정',
  'Cannot Lock Task' => '태스크를 잠글 수 없음',
  'Deploy `%s` to %s Wikis.' => '`%s`을(를) %s개 위키에 배포합니다.',
  'Supported values for `objectType` (some object types might not be supported
if the corresponding application is not available to the user):

%s

Supported values for `default`: `%s`, `%s`.

Values for `policy` must be arrays which include an `action` (either `%s` or
`%s`), a `rule` (PolicyRule class), and a `value` array (e.g. PHIDs).
' => '`objectType`에 지원되는 값(일부 객체 유형은 해당 애플리케이션을 사용자가 사용할 수 없는 경우 지원되지 않을 수 있습니다):

%s

`default`에 지원되는 값: `%s`, `%s`.

`policy`에 대한 값은 `action`(`%s` 또는 `%s`), `rule`(PolicyRule 클래스), 그리고 `value` 배열을 포함하는 배열이어야 합니다.',
  'Unknown objectType \'%s\'' => '알 수 없는 objectType \'%s\'',
  'You do not have permission to escalate tasks as security issues. This action can only be taken by authorized users.' => '보안 문제로 태스크를 승격시킬 권한이 없습니다. 이 태스크는 승인된 사용자만 수행할 수 있습니다.',
  'Show related patches' => '관련 패치 표시',
  'Related Links' => '관련 링크',
  'No deployments on fridays' => '금요일에는 배포가 없습니다',
  'You must provide either a username or userPHID' => '사용자 이름 또는 userPHID를 지정해야 합니다',
  'MediaWiki base URI is required.' => '미디어위키 기본 URI는 필수입니다.',
  'Unknown policies: %s' => '알 수 없는 정책: %s',
  'OAuth JWT nonce didn\'t match what we sent.' => 'OAuth JWT nonce 값이 우리가 보낸 값과 일치하지 않습니다.',
  'Protect as security issue' => '보안 문제로 보호',
  'Policy array data must provide values for \'action\', \'rule\', and \'value\'.' => '정책 배열 데이터는 \'action\', \'rule\' 및 \'value\'에 대한 값을 제공해야 합니다.',
  'OAuth JWT iss didn\'t match expected server name' => 'OAuth JWT iss가 예상 서버 이름과 일치하지 않습니다',
  'Show verbose output.' => '자세한 출력 내용을 표시합니다.',
  'Invalid JWT signature from Special:OAuth/identify.' => 'Special:OAuth/identify에서 전송된 JWT 서명이 유효하지 않습니다.',
  'OAuth JWT wasn\'t valid at this time' => 'OAuth JWT가 지금 유효하지 않습니다',
  'Any serious bugs affecting `%s` should be added as subtasks beneath this one.' => '`%s`에 영향을 미치는 심각한 버그는 이 작업의 하위 작업으로 추가해야 합니다.',
  'If something is serious enough to warrant a rollback then you should bring it to the attention of deployers on the [[ https://www.mediawiki.org/wiki/Special:MyLanguage/MediaWiki_on_IRC | #wikimedia-operations IRC channel ]].' => '롤백이 필요할 정도로 심각한 문제가 발생하면 [[ https://www.mediawiki.org/wiki/Special:MyLanguage/MediaWiki_on_IRC | #wikimedia-operations IRC 채널 ]]에서 배포 담당자에게 알려야 합니다.',
  'The username for whom transactions will be rolled back.' => '트랜잭션이 롤백될 사용자 이름입니다.',
  'No "security" task subtype is defined in "maniphest.subtypes" in this installation. Please file a bug report.' => '이 설치 환경의 "maniphest.subtypes"에는 "security" 태스크 하위 유형이 정의되어 있지 않습니다. 버그 보고서를 제출해 주세요.',
  'ChangeId' => 'ChangeID',
  'Only admins can call this API' => '관리자만이 이 API를 호출할 수 있습니다',
  'OAuth provider returned an error response.' => 'OAuth 제공자가 오류 응답을 반환했습니다.',
  'Ensure Security Task Policies are Enforced' => '보안 태스크 정책이 시행되도록 보장',
  'Release Details' => '릴리스 세부 정보',
  'This MediaWiki Train Deployment is scheduled for the week of' => '이번 미디어위키 Train 배포는 다음의 주에 예정되어 있습니다:',
  'WIP - Work in Progress' => 'WIP - 작업 진행 중',
  'Query users by ldap username.' => 'LDAP 사용자 이름으로 사용자를 조회합니다.',
  'LDAP User' => 'LDAP 사용자',
  'Related Changes in GitLab:' => 'GitLab의 관련 변경사항:',
  'Invalid action \'%s\'!' => '유효하지 않은 동작 \'%s\' 입니다!',
  'Shows the gerrit Change ID for a commit.' => '커밋에 대한 Gerrit 변경 ID를 표시합니다.',
  'Policy data must be a non-empty array.' => '정책 데이터는 비어 있지 않은 배열이어야 합니다.',
  'MediaWiki' => '미디어위키',
  'Default action must be \'%s\' or \'%s\'.' => '기본 작업은 \'%s\' 또는 \'%s\'여야 합니다.',
  'MediaWiki Base URI' => '미디어위키 베이스 URI',
  'unknown' => '알 수 없음',
  'Execute searches for Policies.' => '정책 검색을 실행합니다.',
  'Find public transactions by a particular user.' => '특정 사용자의 공개 트랜잭션 내역을 찾습니다.',
  'Skip OFFSET rows before processing the remaining transactions.' => '나머지 트랜잭션을 처리하기 전에 OFFSET 행을 건너뜁니다.',
  'Execute a rollback.' => '롤백을 실행합니다.',
  '**Step 2 of 2**: Create a MediaWiki OAuth consumer for this Phabricator instance.

NOTE: Propose an OAuth 1.0a consumer with the form at this URL: %s

Provide the following settings on the consumer registration:

  - **OAuth "callback" URL:** Set this to: `%s`
  - **Allow consumer to specify a callback in requests and use "callback" URL above as a required prefix:** Enable this setting.
  - **Applicable grants:** `Basic Rights` is all that is needed for authentication.


After you register the consumer, a **Consumer Token** and consumer **Secret Token** will be provided to you by MediaWiki. To complete configuration of Phabricator, copy the provided keys into the corresponding fields above.

NOTE: Before Phabricator can successfully authenticate to your MediaWiki, a wiki admin must approve the OAuth consumer registration using the form which can be found at the following url: %s' => '**2단계 중 2단계**: 이 파브리케이터 인스턴스에 대한 미디어위키 OAuth 컨슈머를 생성합니다.

참고: 다음 URL의 양식을 사용하여 OAuth 1.0a 컨슈머를 제안하세요: %s 

컨슈머 등록 시 다음 설정을 제공하세요:

 - **OAuth "콜백" URL:** 이 값을 `%s`로 설정하세요.
 - **컨슈머가 요청에서 콜백을 지정하고 위의 "콜백" URL을 필수 접두어로 사용하도록 허용:** 이 설정을 활성화하세요.
 - **적용 가능한 권한:** 인증에는 `기본 권한`만 필요합니다.


컨슈머를 등록하면 미디어위키에서 **컨슈머 토큰**과 **컨슈머 비밀 토큰**을 제공합니다. 파브리케이터 설정을 완료하려면 제공된 키를 위의 해당 필드에 복사하세요.

참고: 파브리케이터가 미디어위키에 성공적으로 인증하려면 위키 관리자가 다음 URL에서 찾을 수 있는 양식을 사용하여 OAuth 컨슈머 등록을 승인해야 합니다:
%s',
  'Invalid' => '유효하지 않음',
  'Blocked on Code Review - Needs Changes' => '코드 검토에서 막혔습니다 - 변경이 필요합니다',
  'View Change in Gerrit' => '게릿에서 변경사항 보기',
  'You must disable the user before rolling back their activity' => '사용자의 활동을 되돌리기 전에 먼저 해당 사용자를 비활성화해야 합니다',
  'Link to Open Tasks' => '열린 태스크 링크',
  'Method Details' => '메서드 세부 정보',
  'open' => '열림',
  'MediaWiki Instance Name' => '미디어위키 인스턴스 이름',
  'Must pass valid Policy PHIDs as an array.' => '유효한 정책 PHID를 배열 형태로 전달해야 합니다.',
  'Secret Token' => '비밀 토큰',
  'Secret Token is required' => '비밀 토큰은 필수입니다',
  'Limit the number of transaction rows to process. Default: 10000' => '처리할 트랜잭션 행 수를 제한합니다. 기본값: 10000',
  'objectType is required.' => 'objectType은 필수입니다.',
  'Unknown or missing ldap names: %s' => '알 수 없거나 존재하지 않는 ldap 이름: %s',
  'NOTE: Copy the keys generated by the MediaWiki OAuth consumer registration and paste them here.' => '참고: 미디어위키 OAuth 컨슈머 등록 시 생성된 키를 복사하여 여기에 붙여넣으세요.',
  'Invalid rule class \'%s\'!' => '유효하지 않은 규칙 클래스 \'%s\' 입니다!',
  'Phabricator transaction rollback tool.' => '파브리케이터 트랜잭션 롤백 도구입니다.',
  'This task has no related gerrit patches.' => '이 태스크에는 관련된 Gerrit 패치가 없습니다.',
  'Name' => '이름',
  'Gerrit Patches' => '게릿 패치',
  'This task has no related GitLab merge requests.' => '이 태스크에는 관련된 GitLab 병합 요청이 없습니다.',
  'Customize query in GitLab' => 'GitLab 내 쿼리 사용자 지정',
  'You must provide either --user or --user-phid' => '--user 또는 --user-phid를 지정해야 합니다',
  'For more info about deployment blockers, see [[ https://wikitech.wikimedia.org/wiki/Deployments/Holding_the_train | Holding the train ]].' => '배포 차단에 대한 자세한 내용은 [[ https://wikitech.wikimedia.org/wiki/Deployments/Holding_the_train | 열차 정지 ]]를 참조하세요.',
  'Sort by Last Update' => '마지막 갱신순으로 정렬',
  'Consumer Token is required' => '컨슈머 토큰은 필수입니다',
  '%s Line(s) removed' => '%s개 줄 제거됨',
  'Escalate security issue' => '보안 문제 확대',
  'OAuth JWT aud didn\'t match expected consumer key' => 'OAuth JWT aud가 예상 컨슈머 키와 일치하지 않습니다.',
  'Related Changes in Gerrit:' => '게릿의 관련 변경사항:',
  'Code Review Started' => '코드 검토 시작됨',
  'Invalid JWT format from Special:OAuth/identify.' => 'Special:OAuth/identify에서 유효하지 않은 JWT 형식이 전송되었습니다.',
  'OAuth error: Login failed because your MediaWiki account "%s" is blocked' => 'OAuth 오류: 미디어위키 계정 "%s"이(가) 차단되어 로그인에 실패했습니다',
  'Enforce Task Security Policy' => '태스크 보안 정책 시행',
  'Hide Instructions' => '지침 숨기기',
  'Rules do not have any effect.' => '규칙은 어떠한 영향도 미치지 않습니다.',
  '**Step 1 of 2**: Provide the name and URI for your MediaWiki install.

In the next step, you will create an OAuth consumer in MediaWiki to be used by Phabricator OAuth.' => '**2단계 중 1단계**: 미디어위키 설치에 대한 이름과 URI를 지정하세요.

다음 단계에서는파브리케이터 OAuth에서 사용할 미디어위키 OAuth 컨슈머를 생성합니다.',
  'users subscribed to' => '사용자가 다음을 구독함:',
  'Execute a dry run, changes will not be writen back to the database.' => '드라이 런입니다. 변경 사항은 데이터베이스에 기록되지 않습니다.',
  'Cannot Protect as Security Issue' => '보안 문제로 인해 보호할 수 없음',
  'Branch `%s` and deploy to %s Wikis.' => '`%s` 브랜치를 생성하고 %s개 위키에 배포합니다.',
  'No project tags "Security" and "Security-Team" exist in this installation. Please file a bug report.' => '이 설치 환경에는 "Security" 및 "Security-Team" 프로젝트 태그가 없습니다. 버그 보고서를 제출해 주세요.',
  'No project tag "acl*security" exists in this installation. Please file a bug report.' => '이 설치 환경에는 "acl*security" 프로젝트 태그가 없습니다. 버그 보고서를 제출해 주세요.',
  'locked' => '잠김',
  'The specified username / userPHID was not found' => '지정된 사용자 이름 / userPHID가 없습니다',
  'See https://wikitech.wikimedia.org/wiki/Deployments for full schedule.' => '전체 일정은 https://wikitech.wikimedia.org/wiki/Deployments 를 참조하세요.',
  'You cannot lock this task because it is already protected by a custom security policy.' => '이 태스크는 이미 사용자 지정 보안 정책으로 보호되고 있으므로 잠글 수 없습니다.',
  'Wikimedia Customizations' => '위키미디어 사용자 지정',
  'Missing or malformed parameter.' => '누락되거나 형식이 잘못된 매개변수입니다.',
  'MediaWiki base URI should include protocol (like "https://").' => '미디어위키 베이스 URI는 프로토콜을 포함해야 합니다. (예: "https://")',
  'Create a nameless custom access control policy object. (For custom policies which can be shared between multiple objects and can be selected in dropdowns, create **[[ %s | Named Policies ]]** instead.)' => '이름이 없는 사용자 지정 접근 제어 정책 개체를 생성합니다. (여러 개체에서 공유하고 드롭다운 메뉴에서 선택할 수 있는 사용자 지정 정책의 경우, **[[ %s | 명명된 정책 ]]**을 대신 생성하세요.)',
  'How this works' => '동작 방식',
  'Use [[%s|this form]] to create one.' => '[[%s|이 양식]]을 사용하여 만드세요.',
  'MediaWiki User' => '미디어위키 사용자',
  'Reset security settings' => '보안 설정 초기화',
  'Open Tasks' => '열린 태스크',
  'Unknown' => '알 수 없음',
  '**MediaWiki Instance Name**

Choose a permanent name for this instance of MediaWiki. Phabricator uses this name internally to keep track of this instance of MediaWiki, in case the URL changes later.

Use lowercase letters, digits, and period. For example: 

`mediawiki`, `mediawiki.mycompany` or `mediawiki.engineering` are reasonable names.' => '**미디어위키 인스턴스 이름**

이 미디어위키 인스턴스에 사용할 영구적인 이름을 선택하세요. 파브리케이터는 나중에 URL이 변경될 경우를 대비하여 이 이름을 내부적으로 사용하여 이 미디어위키 인스턴스를 추적합니다.

소문자, 숫자 및 마침표를 사용하세요. 예를 들어:

`mediawiki`, `mediawiki.mycompany` 또는 `mediawiki.engineering`은 적절한 이름입니다.',
  'GitLab Patches' => 'GitLab 패치',
  'Global Accounts' => '통합 계정',
  'Milestone Navigation Links' => '마일스톤 탐색 링크',
  'Object Type' => '객체 유형',
  'Previous: %s' => '이전: %s',
  'Query users by MediaWiki username.' => '미디어위키 사용자 이름으로 사용자를 검색합니다.',
  'Expand Instructions' => '지침 펼치기',
  'You cannot roll back the activity of a privileged user.' => '권한이 있는 사용자의 활동은 되돌릴 수 없습니다.',
  'Any open subtask(s) block the train from moving forward. This means no further deployments until the blockers are resolved.' => '미해결된 하위 태스크가 있으면 전체 진행이 중단됩니다. 즉, 차단 요소가 해결될 때까지 추가 배포가 불가능합니다.',
  'This adds a link to search Maniphest for open tasks which are tagged with this project. NOTE: This feature is provided by a Wikimedia-maintained extension in ProjectOpenTasksProfileMenuItem.php. See https://gitlab.wikimedia.org/repos/phabricator/extensions for the source.' => '이 기능을 추가하면 Maniphest에서 이 프로젝트로 태그된 열린 태스크를 검색할 수 있는 링크가 추가됩니다. 참고: 이 기능은 위키미디어에서 유지 관리하는 ProjectOpenTasksProfileMenuItem.php 확장 기능을 통해 제공됩니다. 소스 코드는 https://gitlab.wikimedia.org/repos/phabricator/extensions 에서 확인할 수 있습니다.',
  'The full URL to your MediaWiki install, up to but not including "index.php"' => '"index.php"를 제외한 미디어위키 설치의 전체 URL입니다.',
  'This panel shows navigation links to other milestones in the same series.' => '이 패널에는 동일한 시리즈의 다른 마일스톤으로 연결되는 탐색 링크가 표시됩니다.',
  'Unknown or missing mediawiki names: %s' => '알 수 없거나 존재하지 않는 미디어위키 이름: %s',
  'After reverting transactions, delete the reverted transaction records.' => '트랜잭션을 취소한 후에는 취소된 트랜잭션 기록을 삭제하세요.',
  'No Permission' => '권한 없음',
  'merged' => '병합됨',
  'closed' => '닫힘',
  'Series Navigation' => '시리즈 탐색',
  'Required' => '필수',
  'Create an unnamed custom access control policy object.' => '이름 없는 사용자 지정 접근 제어 정책 객체를 생성합니다.',
  'Abandoned' => '포기됨',
  '%s Line(s) added' => '%s개 줄 추가됨',
  'If you have a risky change in this week\'s train add a comment to this task using the {icon train spin}{icon fire color=red} [[ https://wikitech.wikimedia.org/wiki/Deployments/Risky_change_template | Risky patch template ]]' => '이번 주 배포에 위험한 변경 사항이 있는 경우 {icon train spin}{icon fire color=red} [[ https://wikitech.wikimedia.org/wiki/Deployments/Risky_change_template | 위험한 패치 틀 ]]을 사용하여 이 태스크에 댓글을 추가하세요',
  'Comments' => '의견',
);
  }

}
