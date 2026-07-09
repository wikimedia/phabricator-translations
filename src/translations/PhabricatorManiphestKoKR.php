<?php

final class PhabricatorManiphestKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
  'Create Task' => '태스크 생성',
  'Triage' => '선별',
  'Define task subtypes.' => '태스크 하위 유형을 정의합니다.',
  '%s removed %s as the assignee of this task.' => '%s님이 이 태스크에 대한 담당자로써 %s님을 제거했습니다.',
  'Priority of the task.' => '태스크의 우선 순위.',
  'Weigh In' => '끼어들기',
  'Task Fields' => '태스크 필드',
  'Assignee' => '할당됨',
  'Open Parents' => '열린 상위',
  'Update an existing Maniphest task.' => '기존의 Maniphest 태스크를 업데이트합니다.',
  'List of columns to move the task to.' => '태스크를 이동할 열의 목록입니다.',
  'A task\'s subscribers change.' => '태스크의 구독자가 변경되었을 때.',
  'Change Points' => '점수 변경하기',
  'Returns information about the possible statuses for Maniphest tasks.' => 'Maniphest 태스크의 가능한 상태에 대한 정보를 반환합니다.',
  '%s closed %s as %s.' => '%s님이 %s을(를) %s(으)로써 닫았습니다.',
  'This task has been locked.' => '이 태스크는 잠겼습니다.',
  '%s added %s commit(s) to %s: %s.' => '%s님이 %3$s에 커밋을 추가했습니다: %4$s.',
  'Edits Locked' => '편집 잠김',
  '%s claimed %s.' => '%s님이 %s을(를) 확보했습니다.',
  'TASK DETAIL' => '태스크 세부 정보',
  '%s closed this task as a duplicate by committing %s.' => '%s님이 이 태스크를 %s을(를) 커밋함으로써 중복으로써 닫았습니다.',
  'Search for tasks closed before a certain date.' => '특정 날짜 이전에 닫힌 태스크를 검색합니다.',
  'Search Subtasks' => '하위 태스크 검색',
  'Merged' => '병합됨',
  'Closed after %s' => '%s 이후에 닫힘',
  'Changed Task Priority' => '태스크 우선순위 변경됨',
  'Retrieve Maniphest task transactions.' => 'Maniphest 태스크 트랜잭션을 가져옵니다.',
  'New task name.' => '새로운 태스크 이름입니다.',
  '%s changed the point value for this task from %s to %s.' => '%s님이 이 태스크의 점수 값을 %s에서 %s(으)로 변경했습니다.',
  'Changed task priority to "%s".' => '태스크 우선순위를 %s(으)로 변경했습니다.',
  'Tasks must have a title.' => '태스크에는 제목이 필수입니다.',
  'Retrieve information about possible Maniphest task status values.' => 'Maniphest 태스크 상태값에 대한 정보를 가져옵니다.',
  'Oldest (Pri)' => '최초 (우선순위)',
  'Unblock' => '차단 해제',
  'Select and reorder task fields.' => '태스크 필드를 선택하고 재정렬합니다.',
  'Description Preview' => '설명 미리 보기',
  '%s changed the subtype of %s from "%s" to "%s".' => '%s님이 %s의 하위 유형을 "%s"에서 "%s"(으)로 변경했습니다.',
  'Configuration defines no task status with special attribute "%s", but you must specify a status which fills this special role.' => '구성에는 특수 속성 "%s"을 가진 태스크 상태가 정의되어 있지 않지만, 이 특수 역할을 수행하는 상태를 지정해야 합니다.',
  'Oldest open task.' => '가장 오래된 열린 태스크입니다.',
  'Duplicates Merged Here' => '중복 여기로 병합됨',
  'Change the parents of this task.' => '이 태스크의 상위 태스크를 변경합니다.',
  'You can only select a parent task when creating a transaction for the first time.' => '트랜잭션을 처음 만들 때만 상위 태스크를 선택할 수 있습니다.',
  'Subtasks' => '하위 태스크',
  'Update has no effect.' => '업데이트는 효과가 없습니다.',
  '○ %s' => '○ %s',
  'Maniphest Reports' => 'Maniphest 보고서',
  'This task is closed as a duplicate. Only comment if you think that this task is not a duplicate.' => '이 태스크는 중복으로 처리되어 닫혔습니다. 이 태스크가 중복이 아니라고 생각하는 경우에만 댓글을 남겨주세요.',
  'Search for tasks which have specific subtasks.' => '특정한 하위 태스크를 가진 태스크를 검색합니다.',
  'Update the task description.' => '태스크 설명을 업데이트합니다.',
  'From Email' => '이메일로부터',
  'List of related commit PHIDs.' => '관련된 커밋 PHID 목록입니다.',
  'Show Only Tasks With Open Parents' => '열린 상위를 가진 태스크만 표시',
  'Needs Triage' => '분류 필요',
  'Minimal Valid Config' => '최소 유효 구성',
  'The source task is associated with the destination commit.' => '소스 태스크는 도착 커밋과 연관됩니다.',
  'Story Points' => '스토리 점수',
  'Closed, Spite' => '닫힘, 스프라이트',
  '%s changed file(s), attached %s: %s; detached %s: %s.' => '%s님이 파일을 변경했습니다, 첨부: %3$s, 분리: %5$s.',
  '%s closed this task as a duplicate of %s.' => '%s님이 이 태스크를 %s의 중복으로 닫았습니다.',
  'Task IDs must be integer numbers.' => '태스크 ID는 정수 숫자여야 합니다.',
  'Set Sail for Adventure' => '모험을 향해 출항',
  'Allows you to edit, add, or remove the task statuses available in Maniphest,
like "Open", "Resolved" and "Invalid". The configuration should contain a map
of status constants to status specifications (see defaults below for examples).

The constant for each status should be 1-12 characters long and  contain only
lowercase letters and digits. Valid examples are "open", "closed", and
"invalid". Users will not normally see these values.

The keys you can provide in a specification are:

  - `name` //Required string.// Name of the status, like "Invalid".
  - `name.full` //Optional string.// Longer name, like "Closed, Invalid". This
    appears on the task detail view in the header.
  - `name.action` //Optional string.// Action name for email subjects, like
    "Marked Invalid".
  - `closed` //Optional bool.// Statuses are either "open" or "closed".
    Specifying `true` here will mark the status as closed (like "Resolved" or
    "Invalid"). By default, statuses are open.
  - `special` //Optional string.// Mark this status as special. The special
    statuses are:
    - `default` This is the default status for newly created tasks. You must
      designate one status as default, and it must be an open status.
    - `closed` This is the default status for closed tasks (for example, tasks
      closed via the "!close" action in email or via the quick close button in
      Maniphest). You must designate one status as the default closed status,
      and it must be a closed status.
    - `duplicate` This is the status used when tasks are merged into one
      another as duplicates. You must designate one status for duplicates,
      and it must be a closed status.
  - `transaction.icon` //Optional string.// Allows you to choose a different
    icon to use for this status when showing status changes in the transaction
    log. Please see UIExamples, Icons and Images for a list.
  - `transaction.color` //Optional string.// Allows you to choose a different
    color to use for this status when showing status changes in the transaction
    log.
  - `silly` //Optional bool.// Marks this status as silly, and thus wholly
    inappropriate for use by serious businesses.
  - `prefixes` //Optional list<string>.// Allows you to specify a list of
    text prefixes which will trigger a task transition into this status
    when mentioned in a commit message. For example, providing "closes" here
    will allow users to move tasks to this status by writing `Closes T123` in
    commit messages.
  - `suffixes` //Optional list<string>.// Allows you to specify a list of
    text suffixes which will trigger a task transition into this status
    when mentioned in a commit message, after a valid prefix. For example,
    providing "as invalid" here will allow users to move tasks
    to this status by writing `Closes T123 as invalid`, even if another status
    is selected by the "Closes" prefix.
  - `keywords` //Optional list<string>.// Allows you to specify a list
    of keywords which can be used with `!status` commands in email to select
    this status.
  - `disabled` //Optional bool.// Marks this status as no longer in use so
    tasks can not be created or edited to have this status. Existing tasks with
    this status will not be affected, but you can batch edit them or let them
    die out on their own.
  - `claim` //Optional bool.// By default, closing an unassigned task claims
    it. You can set this to `false` to disable this behavior for a particular
    status.
  - `locked` //Optional string.// Lock tasks in this status. Specify "comments"
    to lock comments (users who can edit the task may override this lock).
    Specify "edits" to prevent anyone except the task owner from making edits.
  - `mfa` //Optional bool.// Require all edits to this task to be signed with
    multi-factor authentication.

Statuses will appear in the UI in the order specified. Note the status marked
`special` as `duplicate` is not settable directly and will not appear in UI
elements, and that any status marked `silly` does not appear if the software
is configured with `phabricator.serious-business` set to true.

Examining the default configuration and examples below will probably be helpful
in understanding these options.
' => 'Maniphest에서 사용할 수 있는 태스크 상태를 편집, 추가 또는 제거할 수 있습니다. 예를 들어 "Open", "Resolved", "Invalid" 같은 상태입니다. 설정은 상태 상수를 상태 명세로 매핑한 맵을 포함해야 합니다 (예시는 아래의 기본값을 참고하세요).

각 상태의 상수는 1-12자 길이여야 하며, 소문자와 숫자만 포함할 수 있습니다. 유효한 예시는 "open", "closed", "invalid"입니다. 사용자는 일반적으로 이 값을 보지 않습니다.

지정에 제공할 수 있는 키는 다음과 같습니다.

  - `name` //필수 문자열.// 상태의 이름입니다. 예: "Invalid".
  - `name.full` //선택 문자열.// 더 긴 이름입니다. 예: "Closed, Invalid". 이 값은 태스크 상세 보기의 헤더에 표시됩니다.
  - `name.action` //선택 문자열.// 이메일 제목에 사용할 작업 이름입니다. 예: "Marked Invalid".
  - `closed` //선택 부울.// 상태는 "open" 또는 "closed" 중 하나입니다. 여기에 `true`를 지정하면 해당 상태는 "Resolved"나 "Invalid"처럼 닫힌 상태로 표시됩니다. 기본적으로 상태는 열린 상태입니다.
  - `special` //선택 문자열.// 이 상태를 특수 상태로 표시합니다. 특수 상태는 다음과 같습니다:
    - `default` 새로 생성된 태스크의 기본 상태입니다. 반드시 하나의 상태를 기본 상태로 지정해야 하며, 이 상태는 열린 상태여야 합니다.
    - `closed` 닫힌 태스크의 기본 상태입니다. 예를 들어 이메일의 "!close" 작업이나 Maniphest의 빠른 닫기 버튼으로 닫힌 태스크에 사용됩니다. 반드시 하나의 상태를 기본 닫힘 상태로 지정해야 하며, 이 상태는 닫힌 상태여야 합니다.
    - `duplicate` 태스크가 다른 태스크와 중복으로 병합될 때 사용되는 상태입니다. 반드시 하나의 상태를 중복 상태로 지정해야 하며, 이 상태는 닫힌 상태여야 합니다.
  - `transaction.icon` //선택 문자열.// 트랜잭션 로그에서 상태 변경을 표시할 때 사용할 다른 아이콘을 선택할 수 있습니다. 목록은 UI예시, 아이콘과 이미지를 참고하세요.
  - `transaction.color` //선택 문자열.// 트랜잭션 로그에서 상태 변경을 표시할 때 사용할 다른 색상을 선택할 수 있습니다.
  - `silly` //선택 부울.// 이 상태를 silly로 표시합니다. 즉, 진지한 비즈니스 용도로는 전혀 적절하지 않은 상태로 표시합니다.
  - `prefixes` //선택 리스트<문자열>.// 커밋 메시지에 언급되었을 때 태스크를 이 상태로 전환하게 하는 텍스트 접두사 목록을 지정할 수 있습니다. 예를 들어 여기에 "closes"를 제공하면 사용자는 커밋 메시지에 `Closes T123`을 작성하여 태스크를 이 상태로 이동할 수 있습니다.
  - `suffixes` //선택 리스트<문자열>.// 유효한 접두사 뒤에 커밋 메시지에서 언급되었을 때 태스크를 이 상태로 전환하게 하는 텍스트 접미사 목록을 지정할 수 있습니다. 예를 들어 여기에 "as invalid"를 제공하면 "Closes" 접두사가 다른 상태를 선택하더라도 사용자는 `Closes T123 as invalid`를 작성하여 태스크를 이 상태로 이동할 수 있습니다.
  - `keywords` //선택 리스트<문자열>.// 이메일의 `!status` 명령에서 이 상태를 선택하는 데 사용할 수 있는 키워드 목록을 지정할 수 있습니다.
  - `disabled` //선택 부울.// 이 상태를 더 이상 사용하지 않는 상태로 표시합니다. 이 상태로 태스크를 생성하거나 편집할 수 없습니다. 이 상태를 가진 기존 태스크는 영향을 받지 않지만, 일괄 편집하거나 자연스럽게 사라지도록 둘 수 있습니다.
  - `claim` //선택 부울.// 기본적으로 할당되지 않은 태스크를 닫으면 해당 태스크를 닫은 사용자가 태스크를 확보합니다. 특정 상태에서 이 동작을 비활성화하려면 이 값을 `false`로 설정할 수 있습니다.
  - `locked` //선택 문자열.// 이 상태의 태스크를 잠급니다. 댓글을 잠그려면 "comments"를 지정하세요. 태스크를 편집할 수 있는 사용자는 이 잠금을 우회할 수 있습니다. 태스크 소유자를 제외한 모든 사람이 편집하지 못하게 하려면 "edits"를 지정하세요.
  - `mfa` //선택 부울.// 이 태스크에 대한 모든 편집이 다중 인증으로 서명되도록 요구합니다.

상태는 지정된 순서대로 UI에 표시됩니다. `special`이 `duplicate`로 표시된 상태는 직접 설정할 수 없으며 UI 요소에 나타나지 않습니다. 또한 `silly`로 표시된 상태는 소프트웨어가 `phabricator.serious-business`를 참으로 설정한 경우 나타나지 않습니다.

아래의 기본 설정과 예시를 살펴보면 이러한 옵션을 이해하는 데 도움이 될 것입니다.',
  'Recently Closed' => '최근에 닫힘',
  'One of a task\'s subtasks changes status.' => '태스크의 하위 태스크 중 하나의 상태가 변경되었을 때.',
  'Assigned Task' => '할당된 태스크',
  'File ("%s", with MIME type "%s") is not a viewable image file.' => '파일("%s", MIME 유형 "%s")이 볼 수 있는 이미지 파일이 아닙니다.',
  '%s updated the cover image for %s.' => '%s님이 %s에 대한 커버 이미지를 업데이트했습니다.',
  'Transaction specifies both "beforePHID" and "beforePHIDs". Specify only "beforePHIDs".' => '트랜잭션에 "beforePHID"와 "beforePHIDs"가 모두 지정되어 있습니다. "beforePHIDs"만 지정하세요.',
  '%s updated the task description for %s.' => '%s님이 %s에 대한 태스크 설명을 업데이트했습니다.',
  'Activates a points field on tasks. You can use points for estimation or
planning. If configured, points will appear on workboards.

To activate points, set this value to a map with these keys:

  - `enabled` //Optional bool.// Use `true` to enable points, or
    `false` to disable them.
  - `label` //Optional string.// Label for points, like "Story Points" or
    "Estimated Hours". If omitted, points will be called "Points".
  - `action` //Optional string.// Label for the action which changes points
    in Maniphest, like "Change Estimate". If omitted, the action will
    be called "Change Points".

See the example below for a starting point.' => '태스크에 점수 필드를 활성화합니다. 점수는 추정이나 계획에 사용할 수 있습니다. 구성하면 점수가 작업판에 표시됩니다.

점수를 활성화하려면 이 값을 다음 키를 가진 맵으로 설정하세요:

  - `enabled` //선택 부울.// 점수를 활성화하려면 `true`, 비활성화하려면 `false`를 사용합니다.
  - `label` //선택 문자열.// 점수의 레이블입니다. 예: "스토리 점수" 또는 "예상 소요 시간". 생략하면 점수는 "점수"라고 표시됩니다.
  - `action` //선택 문자열.// Maniphest에서 점수를 변경하는 동작의 라벨입니다. 예: "예상 시간 변경하기". 생략하면 동작은 "점수 변경하기"라고 표시됩니다.

시작점으로써 아래 예시를 참고하세요.',
  'Status set to invalid value.' => '상태가 유효하지 않은 값으로 설정되었습니다.',
  'Status "%s" is marked as default, but it is a closed status. The default status should be an open status.' => '상태 "%s"이(가) 기본값으로 표시되어 있지만, 실제로는 닫힌 상태입니다. 기본값은 열린 상태여야 합니다.',
  '[Maniphest]' => '[매니페스트]',
  '%s lowered the priority of %s from %s to %s.' => '%s님이 %s의 우선순위를 %s에서 %s(으)로 낮췄습니다.',
  'Search for tasks with given statuses.' => '주어진 상태를 가진 태스크를 검색합니다.',
  'Task Has Revision' => '태스크에 판이 있음',
  'Unbreak Now!' => '긴급 수리해야 합니다!',
  'Change Story Points' => '스토리 점수 변경하기',
  'Configure point values for tasks.' => '태스크에 대한 점수 값을 구성합니다.',
  'This task is locked. Edit it anyway?' => '이 태스크는 잠겼습니다. 그래도 편집합니까?',
  'Create a task in a workboard column.' => '작업판 열에 태스크를 만듭니다.',
  'Search for tasks with given priorities.' => '주어진 우선순위를 가진 태스크를 검색합니다.',
  'Configure the cutoff for the "Recently Closed" column.' => '"최근 닫힘" 열의 잘림 기준을 구성합니다.',
  'Original task author.' => '원래의 태스크 작성자입니다.',
  'Information about task priority.' => '태스크 우선순위에 대한 정보입니다.',
  '%s detached %s file(s): %s.' => '%s님이 파일을 분리했습니다: %3$s.',
  'Valid setting' => '유효한 설정',
  'Open Subtasks' => '열린 하위 태스크',
  'Close a task. This changes the task status to the default closed status. For a more powerful (but less concise) way to change task statuses, see `%s`.' => '태스크를 닫습니다. 이렇게 하면 태스크 상태가 기본값인 닫힘 상태로 변경됩니다. 태스크 상태를 변경하는 더 강력하지만 간결하지 않은 방법은 `%s`을(를) 참조하세요.',
  '%s removed %s parent task(s): %s.' => '%s님이 상위 태스크를 제거했습니다: %3$s.',
  '%s added %s subtask(s): %s.' => '%s님이 하위 태스크를 추가했습니다: %3$s.',
  'Assign a task to a specific user.' => '태스크를 특정 사용자에게 할당합니다.',
  'Date Closed (Latest First)' => '닫힌 날짜 (최신순)',
  'Merged In' => '병합됨',
  '%s edited %s commit(s), added %s: %s; removed %s: %s.' => '%s님이 커밋을 편집했습니다, 추가됨: %4$s, 제거됨: %6$s.',
  'Date Closed' => '닫힌 날짜',
  'Task title cannot exceed %d characters.' => '태스크 제목은 %d자를 초과할 수 없습니다.',
  'Edit Related Tasks...' => '관련 태스크 편집하기...',
  'This task is connected to more than %s other tasks. Only direct parents and subtasks are shown here. Use %s to show more of the graph.' => '이 태스크는 %s개 이상의 다른 태스크와 연결되어 있습니다. 여기에는 직접적인 상위 태스크와 하위 태스크만 표시됩니다. 그래프를 더 자세히 보려면 %s을(를) 사용하세요.',
  '%s updated the cover image to %s.' => '%s님이 커버 이미지를 %s(으)로 업데이트했습니다.',
  '%s created subtask %s.' => '%s님이 하위 태스크 %s을(를) 만들었습니다.',
  'Bulk Edit Selected »' => '대량 편집 선택됨 »',
  'No tasks found.' => '태스크를 찾을 수 없습니다.',
  'Acting user\'s projects' => '수행 사용자의 프로젝트',
  'Can Bulk Edit Tasks' => '태스크를 대량 편집 할 수 있음',
  'Estimated number of hours this will take.' => '여기에 소요될 것으로 예상되는 시간입니다.',
  '(Up For Grabs)' => '(담당자 모집 중)',
  'Related commits.' => '관련된 커밋입니다.',
  'Assign task to: %s.' => '태스크 할당: %s.',
  'Status "%s" is marked as the default status for closing tasks, but is not a closed status. It should be a closed status.' => '상태 "%s"은(는) 태스크 닫기의 기본 상태로 표시되어 있지만, 실제로는 닫힌 상태가 아닙니다. 닫힌 상태가 되어야 합니다.',
  'Value for key "%s" should be a dictionary.' => '키 "%s"에 대한 값은 딕셔너리여야 합니다.',
  'You can not lock this task and unassign it at the same time because no one will be able to edit it anymore. Lock the task or remove the assignee, but not both.' => '이 태스크를 잠그는 동시에 할당을 해제할 수는 없습니다. 그렇게 하면 아무도 태스크를 수정할 수 없게 되기 때문입니다. 태스크를 잠그거나 할당을 해제하는 방법 중 하나만 사용하세요.',
  'Assigned task to: %s.' => '태스크 할당됨: %s.',
  'Key "%s" is not a valid status constant. Status constants must be 1-64 alphanumeric characters and cannot be exclusively digits. For example, "%s" or "%s" are reasonable choices.' => '키 "%s"은(는) 유효한 상태 상수가 아닙니다. 상태 상수는 1~64자의 영숫자로 구성되어야 하며 숫자만으로 구성될 수 없습니다. 예를 들어 "%s" 또는 " %s"은(는) 적절한 선택입니다.',
  'Empty withOwners() constraint is not valid.' => '빈 withOwners() 제약은 유효하지 않습니다.',
  'List of subtask PHIDs.' => '하위 태스크 PHID 목록입니다.',
  'Default view policy for newly created tasks.' => '새로 생성된 태스크에 대한 기본 보기 정책입니다.',
  'Show Only Tasks Without Open Parents' => '열린 상위를 가지지 않은 태스크만 표시',
  '%s changed the task status from %s to %s by committing %s.' => '%s님이 태스크의 상태를 %4$s을(를) 커밋함으로써 %s에서 %s(으)로 변경했습니다.',
  'New task description.' => '새로운 문서 설명입니다.',
  '%s removed the point value for %s.' => '%s님이 %s의 점수 값을 제거했습니다.',
  'Mocks' => '모의 객체',
  '%s removed the point value for this task.' => '%s님이 이 태스크의 점수 값을 제거했습니다.',
  'Closer' => '닫은 것',
  '%s added %s parent task(s): %s.' => '%s님이 상위 태스크를 추가했습니다: %3$s.',
  'Change the related commits for this task.' => '이 태스크와 관련된 커밋을 변경합니다.',
  'Subtask' => '하위 태스크',
  'Configuration has two statuses both marked with the special attribute "%s" ("%s" and "%s"). There should be only one.' => '구성에는 특수 속성 "%s"(으)로 표시된 상태가 두 개 있습니다("%s" 및 "%s"). 하나만 있어야 합니다.',
  'Set priority to' => '설정할 우선순위:',
  'Configuration is not valid. Maniphest priority configurations must be dictionaries.' => '구성이 유효하지 않습니다. Maniphest 우선순위 구성은 딕셔너리여야 합니다.',
  'Search for tasks which block open parent tasks.' => '열린 상위 태스크를 차단한 태스크를 검색합니다.',
  'The task description.' => '태스크 설명입니다.',
  'Filter By Project' => '프로젝트별 필터링',
  '%s claimed this task.' => '%s님이 이 태스크를 확보했습니다.',
  'Close This Task As a Duplicate Of' => '이 태스크를 다음의 중목으로써 닫기:',
  '%s removed %s subtask(s) for %s: %s.' => '%s님이 %3$s에 대한 하위 태스크를 제거했습니다: %4$s.',
  'Untitled Task' => '제목 없는 태스크',
  '%s edited parent task(s) for %s, added %s: %s; removed %s: %s.' => '%s님이 %s에 대한 상위 태스크를 편집했습니다, 추가됨: %4$s, 제거됨: %6$s.',
  'Read information about task statuses.' => '태스크 상태에 대한 정보를 읽습니다.',
  'Move a task to one or more workboard columns.' => '태스크를 하나 이상의 작업판 열로 이동합니다.',
  '%s added a cover image to %s.' => '%s님이 %s에 커버 이미지를 추가했습니다.',
  'Edit Subtasks' => '하위 태스크 편집하기',
  'Burnup / Burndown' => '번업 / 번다운',
  '%s assigned this task to %s.' => '%s님이 이 태스크를 %s에 할당했습니다.',
  '%s placed %s up for grabs.' => '%s님이 %s을(를) 담당자 모집 상태로 변경했습니다.',
  'Change status to: %s.' => '다음으로 상태 변경: %s.',
  '%s raised the priority of this task from %s to %s.' => '%s님이 이 태스크의 우선순위를 %s에서 %s(으)로 올렸습니다.',
  'Get tasks which depend on a task.' => '태스크에 의존하는 태스크를 가져옵니다.',
  'No Forms' => '양식 없음',
  'Hours Config' => '시간 구성',
  'Type a task subtype name...' => '태스크 하위 유형 이름을 입력하세요...',
  'File ("%s", with MIME type "%s") can not be transformed into a thumbnail. You may be missing support for this file type in the "GD" extension.' => '파일("%s", MIME 유형 "%s")을 섬네일로 변환할 수 없습니다. "GD" 확장 기능에서 이 파일 형식을 지원하지 않는 것일 수 있습니다.',
  'To change the priority of a task, specify the desired priority, like `%s`. This table shows the configured names for priority levels.

%s

If you specify an invalid priority, the command is ignored. This command has no effect if you do not specify a priority.' => '작업의 우선순위를 변경하려면 `%s`처럼 원하는 우선순위를 지정하세요. 아래 표는 구성된 우선순위 레벨 이름을 보여줍니다.

%s

잘못된 우선순위를 지정하면 명령이 무시됩니다. 우선순위를 지정하지 않으면 이 명령은 아무런 효과가 없습니다.',
  '%s edited %s revision(s), added %s: %s; removed %s: %s.' => '%s님이 판을 편집했습니다, 추가됨: %4$s, 제거됨: %6$s.',
  'Search for tasks updated after a certain date.' => '특정 날짜 이후에 업데이트된 태스크를 검색합니다.',
  'Assign task to me' => '내게 태스크 할당하기',
  '%s changed the status of %s, a subtask of %s, from %s to %s.' => '%s님이 %3$s의 하위 태스크인 %s의 상태를 %4$s에서 %5$s(으)로 변경했습니다.',
  'Search for tasks closed after a certain date.' => '특정 날짜 이후에 닫힌 태스크를 검색합니다.',
  'Tasks to Close and Merge' => '닫고 병합할 태스크',
  '%s updated the task description.' => '%s님이 태스크 설명을 업데이트했습니다.',
  'Task to make this a subtask of.' => '이것이 하위 태스크가 될 대상 태스크입니다.',
  'Burnup / Burndown Rate' => '번업 / 번다운 속도',
  '%s added %s revision(s) to %s: %s.' => '%s님이 %3$s에 판을 추가했습니다: %4$s.',
  'You can not lock this task because it does not have an assignee. No one would be able to edit the task. Assign the task to an assignee before locking it.' => '이 태스크에는 담당자가 지정되지 않았으므로 잠글 수 없습니다. 잠그면 아무도 태스크를 편집할 수 없습니다. 태스크를 잠그기 전에 담당자를 지정하세요.',
  'Owner PHID' => '소유자 PHID',
  'Closed, Duplicate' => '닫힘, 중복',
  'Epoch timestamp when the task was closed.' => '태스크가 닫힌 시점의 에포크 타임스탬프입니다.',
  'task author' => '태스크 작성자',
  'This method is frozen and will eventually be deprecated. New code should use "transaction.search" instead.' => '이 메서드는 동결되었으며 향후 구식이 될 예정입니다. 새로운 코드에서는 대신 "transaction.search"를 사용해야 합니다.',
  'Apply transactions to create a new task or edit an existing one.' => '새 태스크를 만들거나 기존 태스크를 편집하기 위해 트랜잭션을 적용하세요.',
  'Browse Assignees' => '담당자 찾아보기',
  '%s attached %d file(s) of %s: %s' => '%s님이 %3$s의 파일을 부착했습니다: %4$s',
  'Tasks with edits locked may only be edited by their assignee.' => '편집이 잠긴 태스크는 담당자만 편집할 수 있습니다.',
  'Status of the task.' => '태스크의 상태입니다.',
  'Open Tasks by User and Priority (%s)' => '사용자 및 우선순위별 열린 태스크 (%s)',
  'Information about task status.' => '태스크 상태에 대한 정보입니다.',
  'List of task monograms, as array.' => '배열로 된 태스크 모노그램 목록입니다.',
  'Set description to' => '설정할 설명',
  'Subtasks.' => '하위 태스크입니다.',
  '%s closed this task as %s.' => '%s님이 이 태스크를 %s(으)로써 닫았습니다.',
  'Merge Into Selected Task' => '선택한 태스크로 병합',
  'PHID of the parent task.' => '상위 태스크의 PHID입니다.',
  'Configure Maniphest.' => 'Maniphest를 구성합니다.',
  '%s edited subtask(s) for %s, added %s: %s; removed %s: %s.' => '%s님이 %s에 대한 하위 태스크를 편집했습니다, 추가됨: %4$s, 제거됨: %6$s.',
  'A task is moved between columns on a workboard.' => '작업판에서 태스크가 열 간에 이동했을 때.',
  'Updated Before' => '다음 이전에 업데이트됨',
  '%s changed the status of %s from %s to %s by committing %s.' => '%s님이 %s의 상태를 %5$s을(를) 커밋함으로써 %s에서 %s(으)로 변경했습니다.',
  'The source task has been closed as a duplicate of the destination task.' => '소스 태스크는 도착 태스크의 중복으로써 닫혔습니다.',
  'Type a task status name or function...' => '태스크 상태 이름 또는 함수를 입력하세요...',
  '%s changed the point value for %s from %s to %s.' => '%s님이 %s의 점수 값을 %s에서 %s(으)로 변경했습니다.',
  '%s removed %s mock(s) for %s: %s.' => '%s님이 %3$s에 대한 모의 객체를 제거했습니다: %4$s.',
  '%s created this task.' => '%s님이 이 태스크를 만들었습니다.',
  'You can use this transaction type to create a task into a particular workboard
column, or move an existing task between columns.

The transaction value can be specified in several forms. Some are simpler but
less powerful, while others are more complex and more powerful.

The simplest valid value is a single column PHID:

```lang=json
"PHID-PCOL-1111"
```

This will move the task into that column, or create the task into that column
if you are creating a new task. If the task is currently on the board, it will
be moved out of any exclusive columns. If the task is not currently on the
board, it will be added to the board.

You can also perform multiple moves at the same time by passing a list of
PHIDs:

```lang=json
["PHID-PCOL-2222", "PHID-PCOL-3333"]
```

This is equivalent to performing each move individually.

The most complex and most powerful form uses a dictionary to provide additional
information about the move, including an optional specific position within the
column.

The target column should be identified as `columnPHID`, and you may select a
position by passing either `beforePHIDs` or `afterPHIDs`, specifying the PHIDs
of tasks currently in the column that you want to move this task before or
after:

```lang=json
[
  {
    "columnPHID": "PHID-PCOL-4444",
    "beforePHIDs": ["PHID-TASK-5555"]
  }
]
```

When you specify multiple PHIDs, the task will be moved adjacent to the first
valid PHID found in either of the lists. This allows positional moves to
generally work as users expect even if the client view of the board has fallen
out of date and some of the nearby tasks have moved elsewhere.' => '이 트랜잭션 유형을 사용하여 특정 작업판 열에 태스크를 생성하거나, 기존 태스크를 열 사이에서 이동할 수 있습니다.

트랜잭션 값은 여러 형태로 지정할 수 있습니다. 어떤 형태는 더 간단하지만 덜 강력하고, 어떤 형태는 더 복잡하지만 더 강력합니다.

가장 간단한 유효 값은 단일 열 PHID입니다:

```lang=json
"PHID-PCOL-1111"
```

이 값은 태스크를 해당 열로 이동하거나, 새 태스크를 만드는 경우 해당 열에 태스크를 생성합니다. 태스크가 현재 작업판에 있으면 모든 제외 열에서 이동됩니다. 태스크가 현재 작업판에 없으면 작업판에 추가됩니다.

PHID 목록을 전달하여 여러 이동을 동시에 수행할 수도 있습니다:

```lang=json
["PHID-PCOL-2222", "PHID-PCOL-3333"]
```

이는 각 이동을 개별적으로 수행하는 것과 같습니다.

가장 복잡하고 강력한 형태는 딕셔너리를 사용하여 이동에 대한 추가 정보를 제공하는 것이며, 여기에는 열 내의 특정 위치를 선택하는 옵션도 포함됩니다.

대상 열은 `columnPHID`로 식별해야 하며, `beforePHIDs` 또는 `afterPHIDs`를 전달하여 위치를 선택할 수 있습니다. 이 값은 이 태스크를 앞이나 뒤로 이동하려는, 현재 열에 있는 태스크의 PHID를 지정합니다:

```lang=json
[
  {
    "columnPHID": "PHID-PCOL-4444",
    "beforePHIDs": ["PHID-TASK-5555"]
  }
]
```

여러 PHID를 지정하면, 태스크는 두 목록 중 먼저 발견된 유효한 PHID 옆으로 이동됩니다. 이렇게 하면 클라이언트가 보는 작업판 상태가 오래되어 주변 태스크 일부가 다른 곳으로 이동했더라도 위치 이동이 일반적으로 사용자가 기대하는 방식으로 동작할 수 있습니다.',
  'The assignee of a task can always view and edit it.' => '작업의 담당자는 언제든지 보고 편집할 수 있습니다.',
  'Search...' => '검색...',
  'Task Graph' => '태스크 그래프',
  'Allows you to edit or override the default priorities available in Maniphest,
like "High", "Normal" and "Low". The configuration should contain a map of
numeric priority values (where larger numbers correspond to higher priorities)
to priority specifications (see defaults below for examples).

The keys you can define for a priority are:

  - `name` //Required string.// Name of the priority.
  - `keywords` //Required list<string>.// List of unique keywords which identify
    this priority, like "high" or "low". Each priority must have at least one
    keyword and two priorities may not share the same keyword.
  - `short` //Optional string.// Alternate shorter name, used in UIs where
    there is less space available.
  - `color` //Optional string.// Color for this priority, like "red" or
    "blue".
  - `disabled` //Optional bool.// Set to true to prevent users from choosing
    this priority when creating or editing tasks. Existing tasks will not be
    affected, and can be batch edited to a different priority or left to
    eventually die out.

You can choose the default priority for newly created tasks with
"maniphest.default-priority".' => 'Maniphest에서 사용할 수 있는 기본 우선순위를 편집하거나 재정의할 수 있습니다. 예를 들어 "높음", "보통", "낮음" 같은 우선순위입니다. 설정은 숫자 우선순위의 값(숫자가 클수록 더 높은 우선순위)을 우선순위 명세로 매핑한 맵을 포함해야 합니다. 예시는 아래의 기본값을 참고하세요.

우선순위에 대해 정의할 수 있는 키는 다음과 같습니다:

  - `name` //필수 문자열.// 우선순위의 이름입니다.
  - `keywords` //필수 리스트<문자열>.// 이 우선순위를 식별하는 고유 키워드 목록입니다. 예: "높음" 또는 "낮음". 각 우선순위에는 하나 이상의 키워드가 있어야 하며, 두 우선순위가 같은 키워드를 공유할 수 없습니다.
  - `short` //선택 문자열.// 공간이 적은 UI에서 사용되는 더 짧은 별칭입니다.
  - `color` //선택 문자열.// 이 우선순위의 색상입니다. 예: "red" 또는 "blue".
  - `disabled` //선택 부울.// 참으로 설정하면 사용자가 태스크를 만들거나 편집할 때 이 우선순위를 선택하지 못하게 합니다. 기존 태스크는 영향을 받지 않으며, 다른 우선순위로 일괄 편집하거나 자연스럽게 사라지도록 둘 수 있습니다.

새로 생성되는 태스크의 기본 우선순위는 "maniphest.default-priority"로 선택할 수 있습니다.',
  'Parent IDs' => '상위 ID',
  'You can not remove the assignee of this task because it is locked and no one would be able to edit the task. Reassign the task or unlock it before removing the assignee.' => '이 태스크는 잠겨 있어서 담당자를 제거할 수 없습니다. 태스크가 잠겨 있으면 아무도 태스크를 편집할 수 없습니다. 담당자를 제거하기 전에 태스크를 다른 사람에게 할당하거나 잠금을 제거하세요.',
  'Wishlist' => '희망사항',
  'When moving objects between columns on a board, columns must be identified by PHIDs. This transaction uses "%s" to identify a column, but that is not a valid column PHID.' => '작업판에서 열 간에 객체를 이동할 때는 열이 PHID로 식별되어야 합니다. 이 트랜잭션에서는 열을 식별하기 위해 "%s"을(를) 사용했는데, 이는 유효한 열 PHID가 아닙니다.',
  'Points value must be numeric or empty.' => '점수 값은 숫자거나 비어있어야 합니다.',
  'Custom Maniphest fields.' => '사용자 지정 Maniphest 필드입니다.',
  'Key "%s" is not a valid priority constant. Priority constants must be nonnegative integers.' => '키 "%s"은(는) 유효한 우선순위 상수가 아닙니다. 우선순위 상수는 음수가 아닌 정수여야 합니다.',
  'Search for tasks created after a certain date.' => '특정 날짜 이후에 만들어진 태스크를 검색합니다.',
  '%s removed %s mock(s): %s.' => '%s님이 모의 객체를 제거했습니다: %3$s.',
  '%s edited mock(s), added %s: %s; removed %s: %s.' => '%s님이 모의 객체를 편집했습니다, 추가됨: %3$s, 제거됨: %5$s.',
  'Default task priority for create flows.' => '플로우를 만들 때의 기본 태스크 우선순위입니다.',
  'Show Only Tasks With Open Subtasks' => '열린 하위 태스크를 가진 태스크만 표시',
  'Merge Duplicates Into This Task' => '중복을 이 태스크로 병합',
  '%s lowered the priority of this task from %s to %s.' => '%s님이 이 태스크의 우선순위를 %s에서 %s(으)로 내렸습니다.',
  '(Not Assigned)' => '(할당되지 않음)',
  '(Ungrouped)' => '(그룹화되지 않음)',
  'Task' => '태스크',
  'Search for tasks created before a certain date.' => '특정 날짜 이전에 만들어진 태스크를 검색합니다.',
  'Test rules which run when a task is created or updated.' => '태스크가 생성되거나 업데이트될 때 실행되는 테스트 규칙입니다.',
  'List of custom fields for Maniphest tasks.

For details on adding custom fields to Maniphest, see [[ %s | %s ]] in the
documentation.' => 'Maniphest 태스크에 대한 사용자 지정 필드 목록입니다.

Maniphest에 사용자 지정 필드를 추가하는 방법에 대한 자세한 내용은 설명문서의 [[ %s | %s ]]을(를) 참조하세요.',
  'React to tasks being created or updated.' => '생성되거나 업데이트되는 태스크에 반응합니다.',
  '%s removed the point value %s for this task.' => '%s님이 이 태스크의 점수 값 %s을(를) 제거했습니다.',
  'Blocker' => '차단자',
  'Type a task priority name...' => '태스크 우선순위 이름을 입력하세요...',
  'Configure Maniphest priority names.' => 'Maniphest 우선순위 이름을 구성합니다.',
  'This method is frozen and will eventually be deprecated. New code should use "maniphest.edit" instead.' => '이 메서드는 동결되었으며 향후 구식이 될 예정입니다. 새로운 코드에서는 대신 "maniphest.edit"을 사용해야 합니다.',
  'Close As Duplicate' => '중복으로 닫음',
  'Reassigned' => '재할당됨',
  'Change the task status.' => '태스크 상태를 변경합니다.',
  'Block' => '차단',
  'Claimed' => '확보됨',
  'New task point value.' => '새로운 태스크 점수 값입니다.',
  'Configuration is not valid. Maniphest points configuration must be a dictionary.' => '구성이 유효하지 않습니다. Maniphest 점수 구성은 딕셔너리여야 합니다.',
  'Returns information about the possible priorities for Maniphest tasks.' => 'Maniphest 태스크의 가능한 우선순위에 대한 정보를 반환합니다.',
  'One or more PHIDs were invalid for %s.' => '하나 이상의 PHID가 %s에 대해 유효하지 않습니다.',
  'Parameter "%s" is no longer supported. Use method "%s" with the "%s" constraint instead.' => '"%s" 매개변수는 더 이상 지원되지 않습니다. 대신 "%3$s" 제약 조건을 사용하여 "%s" 메서드를 사용하세요.',
  'Select All' => '모두 선택',
  'This task has no parent tasks and no subtasks, so there is no graph to draw.' => '이 태스크에는 상위 태스크나 하위 태스크가 없으므로 그릴 그래프가 없습니다.',
  'User who is responsible for the task.' => '태스크를 담당하는 사용자입니다.',
  'Task Author' => '태스크 작성자',
  'Closed Before' => '다음 이전에 닫힘',
  'Subtask IDs' => '하위 태스크 ID',
  'Configure Maniphest Task Forms' => 'Maniphest 태스크 양식 구성',
  '(No Project)' => '(프로젝트 없음)',
  'This task is directly connected to more than %s other tasks, which is too many tasks to display. Use %s to browse parents or subtasks.' => '이 태스크는 %s개 이상의 다른 태스크와 직접 연결되어 있어, 태스크가 너무 많아 모두 표시할 수 없습니다. %s을(를) 사용하여 상위 태스크 또는 하위 태스크를 찾아보세요.',
  'Duplicates' => '중복',
  'Task Locked' => '태스크 잠김',
  'Edit Task: %s' => '태스크 편집: %s',
  '%s merged %s task(s) %s into %s.' => '%s님이 태스크 %3$s을(를) %4$s(으)로 병합했습니다.',
  'No tasks.' => '태스크가 없습니다.',
  'Feature Request' => '기능 요청',
  'Priorities' => '우선순위',
  'Priority Name' => '우선순위 이름',
  'Task description.' => '태스크 설명입니다.',
  'Current Subtasks' => '현재 하위 태스크',
  'Change the subtasks of this task.' => '이 태스크의 하위 태스크를 변경합니다.',
  'Get tasks on which a task depends.' => '태스크가 의존하는 태스크를 가져옵니다.',
  'Task Has Commit' => '태스크에 커밋이 있음',
  'Type a task status name...' => '태스크 상태 이름을 입력하세요...',
  'Save Subtasks' => '하위 태스크 저장',
  'Assign yourself as the owner of a task. To assign another user, see `%s`.' => '태스크의 소유자로 자신을 할당합니다. 다른 사용자를 할당하려면 `%s`을(를) 참조하세요.',
  'Task Priority' => '태스크 우선순위',
  '%s added %s subtask(s) for %s: %s.' => '%s님이 %3$s에 대한 하위 태스크를 추가했습니다: %4$s.',
  'Parent Task' => '상위 태스크',
  'Search for tasks updated before a certain date.' => '특정 날짜 이전에 업데이트된 태스크를 검색합니다.',
  'Parent tasks.' => '상위 태스크입니다.',
  'Change subtype to "%s"' => '하위 유형을 "%s"(으)로 변경',
  'File PHID ("%s") is invalid, or you do not have permission to view it.' => '파일 PHID("%s")가 유효하지 않거나 볼 권한이 없습니다.',
  'Priority set to invalid value.' => '우선순위가 유효하지 않은 값으로 설정되었습니다.',
  'Points value must be nonnegative.' => '점수 값은 음수가 아니어야 합니다.',
  'Type a username or "none"...' => '사용자 이름 또는 "none"을 입력하세요...',
  'Maniphest Project Name Cache' => 'Maniphest 프로젝트 이름 캐시',
  'Comma-separated list of task IDs.' => '쉼표로 분리된 태스크 ID 목록입니다.',
  'To assign a task to another user, provide their username. For example, to assign a task to `%s`, write `%s`.

If you omit the username or the username is not valid, this behaves like `%s` and assigns the task to you instead.' => '다른 사용자에게 작업을 할당하려면 해당 사용자의 사용자 이름을 입력하세요. 예를 들어, `%s`에게 작업을 할당하려면 `%s`을(를) 입력하세요.

사용자 이름을 생략하거나 유효하지 않은 사용자 이름을 입력하면 `%s`처럼 작동하여 작업이 자신에게 할당됩니다.',
  'Edit Parent Tasks' => '상위 태스크 편집하기',
  'Spite' => '스프라이트',
  'Email Commands: Tasks' => '이메일 명령: 태스크',
  'This task is directly connected to more than %s other tasks. Use %s to browse parents or subtasks, or %s to show more of the graph.' => '이 태스크는 다른 태스크 %s개 이상과 직접 연결되어 있습니다. 상위 또는 하위 태스크를 찾아보려면 %s을(를) 사용하고, 그래프를 더 보려면 %s(를) 사용하세요.',
  'Comma-separated list of task monograms.' => '쉼표로 분리된 태스크 모노그램 목록입니다.',
  '%s edited %s commit(s) for %s, added %s: %s; removed %s: %s.' => '%s님이 %3$s에 대한 커밋을 편집했습니다, 추가됨: %5$s, 제거됨: %7$s.',
  'Set title to' => '설정할 제목',
  'Graph' => '그래프',
  'Retrieve information about a Maniphest task, given its ID.' => 'ID로 주어진 Maniphest 태스크에 대한 정보를 가져옵니다.',
  'Search for tasks owned by a user from a list.' => '목록에서 사용자가 소유한 태스크를 검색합니다.',
  '%s assigned %s to %s.' => '%s님이 %s을(를) %s에 할당했습니다.',
  'Current task assignee, if task is assigned.' => '현재 태스크의 담당자입니다 (태스크가 할당된 경우).',
  'Use Maniphest to track bugs, features, todos, or anything else you need to get done. Tasks assigned to you will appear here.' => 'Maniphest를 사용하여 버그, 기능, 할 일 목록 또는 완료해야 할 모든 작업을 추적하세요. 자신에게 할당된 태스크는 여기에 표시됩니다.',
  'Default edit policy for newly created tasks.' => '새로 생성된 태스크에 대한 기본 편집 정책입니다.',
  'Change the priority of a task.' => '태스크의 우선순위를 변경합니다.',
  '%s closed %s, a subtask of %s, as %s.' => '%s님이 %3$s의 하위 태스크인 %s을(를) %4$s(으)로써 닫았습니다.',
  'The source task has had the destination task closed as a duplicate and merged into it.' => '소스 태스크는 도착 태스크가 중복으로써 닫혔기에 병합되었습니다.',
  'Mixture of PHIDs, IDs and monograms.' => 'PHID, ID 및 모노그램의 혼합입니다.',
  'Send email to these addresses to create tasks. %s' => '태스크를 작성하려면 다음 이메일 주소로 이메일을 보내주세요. %s',
  'Low' => '낮음',
  'Search for tasks in specific workboard columns.' => '특정 작업판 열에 있는 태스크를 검색합니다.',
  'The author of this task can take this action.' => '이 태스크의 작성자는 이 작업을 할 수 있습니다.',
  'Configure Maniphest task statuses.' => 'Maniphest 태스크 상태를 구성합니다.',
  'Save Parent Tasks' => '상위 태스크 저장',
  'WORKBOARD' => '작업판',
  'Set status to' => '설정할 상태',
  'Group results by a certain parameter.' => '특정 매개변수를 기준으로 결과를 그룹화합니다.',
  'Current Mocks' => '현재 모의 객체',
  '%s added %s mock(s) for %s: %s.' => '%s님이 %3$s에 대한 모의 객체를 추가했습니다: %4$s.',
  'Other task activity not listed above occurs.' => '위에 나열되지 않은 기타 태스크 활동이 발생했을 때.',
  'Override Task Lock' => '태스크 잠금 덮어쓰기',
  'Points Config' => '점수 구성',
  'Current Parent Tasks' => '현재 상위 태스크',
  'Recently Means' => '최근의 의미',
  'User who closed the task, if the task is closed.' => '태스크를 닫은 사용자입니다 (태스크가 닫힌 경우).',
  '%s added %s mock(s): %s.' => '%s님이 모의 객체를 추가했습니다: %3$s.',
  '%s reassigned %s from %s to %s.' => '%s님이 %s을(를) %s에서 %s(으)로 다시 할당했습니다.',
  'Related Objects' => '관련된 객체',
  'A task\'s priority changes.' => '태스크의 우선순위가 변경되었을 때.',
  'Merge Duplicates In' => '중복 병합됨',
  'Raised Priority' => '우선순위 높아짐',
  'Oldest (All)' => '최초 (모두)',
  'No such Maniphest task exists.' => '그런 Maniphest 태스크는 존재하지 않습니다.',
  '%s raised the priority of %s from %s to %s.' => '%s님이 %s의 우선순위를 %s에서 %s(으)로 올렸습니다.',
  'Edit Mocks' => '모의 객체 편집하기',
  'High' => '높음',
  'Move on Workboard' => '작업판으로 이동',
  'Search for tasks with given subtypes.' => '주어진 하위 유형을 가진 태스크를 검색합니다.',
  'Closer PHID' => '닫은 것의 PHID',
  'The title of the task.' => '태스크의 제목입니다.',
  'Oldest open task, excluding those with priority %s' => '우선순위 %s을(를) 제외한 가장 오래된 열린 태스크',
  'Changed Status' => '변경된 상태',
  'Comma-separated list of task PHIDs.' => '쉼표로 분리된 태스크 PHID 목록입니다.',
  'Column move transaction specifies column PHID "%s", but there is no corresponding column with this PHID.' => '열 이동 트랜잭션에서 열 PHID가 "%s"(으)로 지정되었지만, 해당 PHID를 가진 열이 없습니다.',
  'Save Related Mocks' => '관련 모의 객체 저장',
  'Wontfix' => '고칠 예정 없음',
  'List of task PHIDs, as array.' => '배열로 된 태스크 PHID 목록입니다.',
  '%s renamed this task from %s to %s.' => '%s님이 이 태스크의 이름을 %s에서 %s(으)로 바꾸었습니다.',
  'Updated After' => '다음 이후에 업데이트됨',
  'To change the status of a task, specify the desired status, like `%s`. This table shows the configured names for statuses.

%s

If you specify an invalid status, the command is ignored. This command has no effect if you do not specify a status.

To quickly close a task, see `%s`.' => '태스크 상태를 변경하려면 `%s`처럼 원하는 상태를 지정하세요. 이 표는 구성된 상태 이름을 보여줍니다.

%s

잘못된 상태를 지정하면 명령은 무시됩니다. 상태를 지정하지 않으면 이 명령은 아무 효과가 없습니다.

태스크를 빠르게 닫으려면 `%s`을(를) 참조하세요.',
  'There was an unexpected error displaying the task graph. Use %s to browse parents or subtasks, or %s to show the graph.' => '태스크를 그래프를 표시하는 동안 예기치 않은 오류가 발생했습니다. 상위 태스크나 하위 태스크를 탐색하려면 %s을(를) 사용하고, 그래프를 표시하려면 %s을(를) 사용하세요.',
  'TASK DESCRIPTION' => '태스크 설명',
  '%s closed %s as %s by committing %s.' => '%s님이 %s을(를) %4$s을(를) 커밋함으로써 %s(으)로써 닫았습니다.',
  'Read information about task priorities.' => '태스크 우선순위에 대한 정보를 읽습니다.',
  'Change the task point value.' => '태스크의 점수 값을 변경합니다.',
  'Create as a subtask of another task.' => '다른 태스크의 하위 태스크로써 만듭니다.',
  '● %s' => '● %s',
  'Show Only Tasks Without Open Subtasks' => '열린 하위 태스크를 가지지 않은 태스크만 표시',
  'Task priority "%s" is not a valid task priority. Use a priority keyword to choose a task priority: %s.' => '태스크 우선순위 "%s"은(는) 유효한 태스크 우선순위가 아닙니다. 우선순위 키워드를 사용하여 태스크 우선순위를 선택하세요: %s.',
  '%s closed %s as a duplicate by committing %s.' => '%s님이 %s을(를) %s을(를) 커밋함으로써 중복으로써 닫았습니다.',
  'Transaction specifies both "afterPHID" and "afterPHIDs". Specify only "afterPHIDs".' => '트랜잭션에 "afterPHID"와 "afterPHIDs"가 모두 지정되어 있습니다. "afterPHIDs"만 지정하세요.',
  'Must pass an array of integer task IDs for parameter "%s".' => '매개변수 "%s"에 정수 태스크 ID 배열을 전달해야 합니다.',
  'Task Unassigned' => '태스크 할당 해제됨',
  'Reassign the task.' => '태스크를 재할당합니다.',
  '%s changed file(s) for %s, attached %d: %s; detached %d: %s' => '%s님이 %s의 파일을 변경했습니다, 첨부: %4$s, 분리: %6$s.',
  '%s closed subtask %s as %s.' => '%s님이 하위 태스크 %s을(를) %s(으)로써 닫았습니다.',
  'Open Tasks by Project and Priority (%s)' => '프로젝트 및 우선순위별 열린 태스크 (%s)',
  'You do not have access to any forms which can be used to create a subtask.' => '하위 태스크를 생성하는 데 사용할 수 있는 양식에 대한 접근 권한이 없습니다.',
  'Configure how users create and edit tasks.' => '사용자가 태스크를 생성하고 편집하는 방식을 구성합니다.',
  'Assign task to rule author.' => '규칙 작성자에게 태스크를 할당합니다.',
  '%s detached %d file(s) of %s: %s' => '%s님이 %3$s의 파일을 분리했습니다: %4$s',
  'Change subtype to "%s."' => '하위 유형을 "%s"(으)로 변경합니다.',
  '%s closed %s as a duplicate.' => '%s님이 %s을(를) 중복으로 닫았습니다.',
  '%s removed %s parent task(s) for %s: %s.' => '%s님이 %3$s에 대한 상위 태스크를 제거했습니다: %4$s.',
  'Edit Related Mocks' => '관련 모의 객체 편집하기',
  'The source object has the destination object as a parent.' => '소스 객체는 도착 객체를 상위로써 가집니다.',
  'Maniphest Task' => 'Maniphest 태스크',
  '%s set the cover image to %s.' => '%s님이 커버 이미지를 %s(으)로 설정했습니다.',
  'By User' => '사용자별',
  'The task already has the selected assignee.' => '태스크는 이미 선택된 담당자를 가지고 있습니다.',
  'Two different task priorities ("%s" and "%s") have the same keyword ("%s"). Keywords must uniquely identify priorities.' => '서로 다른 두 태스크 우선순위("%s" 및 "%s")가 동일한 키워드("%s")를 가지고 있습니다. 키워드는 우선순위를 고유하게 식별해야 합니다.',
  'List of parent task PHIDs.' => '상위 태스크 PHID 목록입니다.',
  'Change the status of a task.' => '태스크의 상태를 변경합니다.',
  'CHANGES TO TASK DESCRIPTION' => '태스크 설명의 변경사항',
  'Close and Merge Selected Tasks' => '선택한 태스크를 닫고 병합',
  'Key "%s" is not a valid priority keyword. Priority keywords must be 1-64 alphanumeric characters and cannot be exclusively digits. For example, "%s" or "%s" are reasonable choices.' => '키 "%s"은(는) 유효한 우선순위 키워드가 아닙니다. 우선순위 키워드는 1~64자의 영숫자로 구성되어야 하며 숫자만으로 구성될 수 없습니다. 예를 들어 "%s" 또는 " %s"은(는) 적절한 선택입니다.',
  'Browse Priorities' => '우선순위 찾아보기',
  'Unbreak!' => '긴급 수리!',
  'The task already has the selected priority.' => '태스크는 이미 선택된 우선순위를 가지고 있습니다.',
  'Assign to' => '할당 대상',
  '%s edited %s revision(s) for %s, added %s: %s; removed %s: %s.' => '%s님이 %3$s에 대한 판을 편집했습니다, 추가됨: %5$s, 제거됨: %7$s.',
  'A task\'s status changes.' => '태스크의 상태가 변경되었을 때.',
  'Rename the task.' => '태스크의 이름을 변경합니다.',
  'You can not interact with this task because it is locked.' => '이 태스크가 잠겨있기 때문에 상호작용할 수 없습니다.',
  'Someone comments on a task.' => '누군가 태스크에 댓글을 남겼을 때.',
  'New task status constant.' => '새로운 태스크 상태 상수입니다.',
  '%s added %s parent task(s) for %s: %s.' => '%s님이 %3$s에 대한 상위 태스크를 추가했습니다: %4$s.',
  'Closed After' => '다음 이후에 닫힘',
  '%s closed this task as a duplicate.' => '%s님이 이 태스크를 중복으로 닫았습니다.',
  'Status "%s" is marked as the status for closing tasks as duplicates, but it is not a closed status. It should be a closed status.' => '상태 "%s"은(는) 중복으로 닫는 태스크의 상태로 표시되어 있지만, 실제로는 닫힌 상태가 아닙니다. 닫힌 상태가 되어야 합니다.',
  'New task assignee, or `null` to unassign.' => '새로운 태스크 담당자입니다, 또는 `null`로 할당하지 않습니다.',
  'Wish' => '희망',
  '%s set the point value for %s to %s.' => '%s님이 %s의 점수 값을 %s(으)로 설정했습니다.',
  'This task is connected to more than %s other tasks. Only direct parents and subtasks are shown here.' => '이 태스크는 %s개 이상의 다른 태스크와 연결되어 있습니다. 여기에는 직접적인 상위 태스크와 하위 태스크만 표시됩니다.',
  'Search for tasks closed by certain users.' => '특정 사용자에 의해 닫힌 태스크를 검색합니다.',
  'Changed Subtype' => '변경된 하위 유형',
  '%s edited parent task(s), added %s: %s; removed %s: %s.' => '%s님이 상위 태스크를 편집했습니다, 추가됨: %3$s, 제거됨: %5$s.',
  '%s removed %s revision(s) from %s: %s.' => '%s님이 %3$s에서 판을 제거했습니다: %4$s.',
  '%s merged %s task(s): %s.' => '%s님이 태스크을 병합했습니다: %3$s.',
  '%s edited mock(s) for %s, added %s: %s; removed %s: %s.' => '%s님이 %s에 대한 모의 객체를 편집했습니다, 추가됨: %4$s, 제거됨: %6$s.',
  '%s reassigned this task from %s to %s.' => '%s님이 이 태스크를 %s에서 %s(으)로 다시 할당했습니다.',
  'Triaged' => '분류됨',
  'The source object has the destination object as a subtask.' => '소스 객체는 도착 객체를 하위 태스크로써 가집니다.',
  '%s removed %s commit(s) from %s: %s.' => '%s님이 %3$s에서 커밋을 제거했습니다: %4$s.',
  'Task Owner' => '태스크 소유자',
  'By Project' => '프로젝트별',
  '%s triaged %s as %s priority.' => '%s님이 %s을(를) %s 우선순위로 분류했습니다.',
  'Change priority to: %s.' => '다음으로 우선순위 변경: %s.',
  'Batch Task Editor' => '배치 태스크 편집기',
  'Search Parent Tasks' => '상위 태스크 검색',
  'Subscribed' => '구독됨',
  'Unknown Status' => '알 수 없는 상태',
  'A task\'s associated projects change.' => '태스크에 연관된 프로젝트가 변경되었을 때.',
  'Interacting with Maniphest Tasks' => 'Maniphest 태스크와 상호작용하기',
  '%s changed the task status from %s to %s.' => '%s님이 태스크 상태를 %s에서 %s(으)로 변경했습니다.',
  'List of task IDs, as array.' => '배열로 된 태스크 ID 목록입니다.',
  'Specify exactly one of \'%s\' and \'%s\'.' => '\'%s\' 및 \'%s\' 중 정확히 하나만 지정하세요.',
  'Edit Locked Task' => '잠긴 태스크 편집하기',
  'Assigned' => '할당됨',
  'Search for tasks which have specific parent tasks.' => '특정 상위 태스크를 가진 태스크를 검색합니다.',
  '%s reopened %s as %s by committing %s.' => '%s님이 %s을(를) %4$s을(를) 커밋함으로써 %s(으)로써 다시 열었습니다.',
  'Change Estimate' => '예상 시간 변경하기',
  'Closed as Duplicate' => '중복으로 처리되어 닫힘',
  '%s merged task %s into %s.' => '%s님이 태스크 %s을(를) %s(으)로 병합했습니다.',
  'Estimated Hours' => '예상 소요 시간',
  '%s changed the status of subtask %s from %s to %s.' => '%s님이 하위 태스크 %s의 상태를 %s에서 %s(으)로 변경했습니다.',
  'Lowered Priority' => '우선순위 낮아짐',
  'Execute complex searches for Maniphest tasks.' => 'Maniphest 태스크에 대한 복잡한 검색을 실행합니다.',
  'Closed By' => '닫은 사용자',
  'This page documents the commands you can use to interact with tasks in Maniphest. These commands work when creating new tasks via email and when replying to existing tasks.' => '이 페이지에서는 Maniphest의 태스크와 상호 작용하는 데 사용할 수 있는 명령어를 설명합니다. 이러한 명령어는 이메일을 통해 새 태스크를 생성하거나 기존 태스크에 답장할 때 사용할 수 있습니다.',
  '%s closed this task as %s by committing %s.' => '%s님이 이 태스크를 %3$s을(를) 커밋함으로써 %s(으)로써 닫았습니다.',
  'Allows you to define task subtypes. Subtypes let you hide fields you don\'t
need to simplify the workflows for editing tasks.

To define subtypes, provide a list of subtypes. Each subtype should be a
dictionary with these keys:

  - `key` //Required string.// Internal identifier for the subtype, like
    "task", "feature", or "bug".
  - `name` //Required string.// Human-readable name for this subtype, like
    "Task", "Feature Request" or "Bug Report".
  - `tag` //Optional string.// Tag text for this subtype.
  - `color` //Optional string.// Display color for this subtype.
  - `icon` //Optional string.// Icon for the subtype.
  - `children` //Optional map.// Configure options shown to the user when
     they "Create Subtask". See below.
  - `fields` //Optional map.// Configure field behaviors. See below.
  - `mutations` //Optional list.// Configure which subtypes this subtype
    can easily be converted to by using the "Change Subtype" action. See below.

Each subtype must have a unique key, and you must define a subtype with
the key "%s", which is used as a default subtype.

The tag text (`tag`) is used to set the text shown in the subtype tag on list
views and workboards. If you do not configure it, the default subtype will have
no subtype tag and other subtypes will use their name as tag text.

The `children` key allows you to configure which options are presented to the
user when they "Create Subtask" from a task of this subtype. You can specify
these keys:

  - `subtypes`: //Optional list<string>.// Show users creation forms for these
    task subtypes.
  - `forms`: //Optional list<string|int>.// Show users these specific forms,
    in order.

If you don\'t specify either constraint, users will be shown creation forms
for the same subtype.

For example, if you have a "quest" subtype and do not configure `children`,
users who click "Create Subtask" will be presented with all create forms for
"quest" tasks.

If you want to present them with forms for a different task subtype or set of
subtypes instead, use `subtypes`:

```
  {
    ...
    "children": {
      "subtypes": ["objective", "boss", "reward"]
    }
    ...
  }
```

If you want to present them with specific forms, use `forms` and specify form
IDs:

```
  {
    ...
    "children": {
      "forms": [12, 16]
    }
    ...
  }
```

When specifying forms by ID explicitly, the order you specify the forms in will
be used when presenting options to the user.

If only one option would be presented, the user will be taken directly to the
appropriate form instead of being prompted to choose a form.

The `fields` key can configure the behavior of custom fields on specific
task subtypes. For example:

```
  {
    ...
    "fields": {
      "custom.some-field": {
        "disabled": true
      }
    }
    ...
  }
```

Each field supports these options:

  - `disabled` //Optional bool.// Allows you to disable fields on certain
    subtypes.
  - `name` //Optional string.// Custom name of this field for the subtype.


The `mutations` key allows you to control the behavior of the "Change Subtype"
action above the comment area. By default, this action allows users to change
the task subtype into any other subtype.

If you\'d prefer to make it more difficult to change subtypes or offer only a
subset of subtypes, you can specify the list of subtypes that "Change Subtypes"
offers. For example, if you have several similar subtypes and want to allow
tasks to be converted between them but not easily converted to other types,
you can make the "Change Subtypes" control show only these options like this:

```
  {
    ...
    "mutations": ["bug", "issue", "defect"]
    ...
  }
```

If you specify an empty list, the "Change Subtypes" action will be completely
hidden.

This mutation list is advisory and only configures the UI. Tasks may still be
converted across subtypes freely by using the Bulk Editor or API.
' => '태스크 하위 유형을 정의할 수 있습니다. 하위 유형을 사용하면 필요하지 않은 필드를 숨겨 태스크 편집 워크플로를 단순화할 수 있습니다.

하위 유형을 정의하려면 하위 유형 목록을 제공하세요. 각 하위 유형은 다음 키를 가진 딕셔너리여야 합니다.

  - `key` //필수 문자열.// 하위 유형의 내부 식별자입니다. 예: "task", "feature", "bug".
  - `name` //필수 문자열.// 이 하위 유형의 사람이 읽을 수 있는 이름입니다. 예: "Task", "Feature Request", "Bug Report".
  - `tag` //선택 문자열.// 이 하위 유형의 태그 텍스트입니다.
  - `color` //선택 문자열.// 이 하위 유형의 표시 색상입니다.
  - `icon` //선택 문자열.// 이 하위 유형의 아이콘입니다.
  - `children` //선택 맵.// 사용자가 "하위 태스크 변경하기"를 선택했을 때 표시되는 옵션을 설정합니다. 아래를 참조하세요.
  - `fields` //선택 맵.// 필드 동작을 설정합니다. 아래를 참조하세요.
  - `mutations` //선택 목록.// "하위 유형 변경하기" 작업을 사용하여 이 하위 유형을 쉽게 변환할 수 있는 대상 하위 유형을 설정합니다. 아래를 참조하세요.

각 하위 유형은 고유한 키를 가져야 하며, 기본 하위 유형으로 사용되는 "%s" 키를 가진 하위 유형을 반드시 정의해야 합니다.

태그 텍스트(`tag`)는 목록 보기 및 워크보드에서 하위 유형 태그에 표시되는 텍스트를 설정하는 데 사용됩니다. 설정하지 않으면 기본 하위 유형에는 하위 유형 태그가 표시되지 않으며, 다른 하위 유형은 이름을 태그 텍스트로 사용합니다.

`children` 키를 사용하면 이 하위 유형의 태스크에서 사용자가 "하위 태스크 변경하기"를 선택했을 때 어떤 옵션을 표시할지 설정할 수 있습니다. 다음 키를 지정할 수 있습니다.

  - `subtypes`: //선택 리스트<문자열>.// 사용자에게 이 태스크 하위 유형들에 대한 생성 양식을 표시합니다.
  - `forms`: //선택 리스트<문자열|정수>.// 사용자에게 지정한 특정 양식들을 순서대로 표시합니다.

두 제약 조건을 모두 지정하지 않으면 사용자에게 동일한 하위 유형에 대한 생성 양식이 표시됩니다.

예를 들어 "quest" 하위 유형이 있고 `children`을 설정하지 않은 경우, 사용자가 "하위 태스크 변경하기"를 클릭하면 "quest" 태스크에 대한 모든 생성 양식이 표시됩니다.

대신 다른 태스크 하위 유형 또는 하위 유형 집합에 대한 양식을 표시하려면 `subtypes`를 사용하세요.

```
  {
    ...
    "children": {
      "subtypes": ["objective", "boss", "reward"]
    }
    ...
  }
```

특정 양식을 표시하려면 `forms`를 사용하고 양식 ID를 지정하세요.

```
  {
    ...
    "children": {
      "forms": [12, 16]
    }
    ...
  }
```

ID로 양식을 명시적으로 지정하는 경우, 옵션을 사용자에게 표시할 때 지정한 순서가 사용됩니다.

표시될 옵션이 하나뿐인 경우, 사용자에게 양식을 선택하라는 메시지를 표시하지 않고 적절한 양식으로 바로 이동합니다.

`fields` 키는 특정 태스크 하위 유형에서 사용자 정의 필드의 동작을 설정할 수 있습니다. 예:

```
  {
    ...
    "fields": {
      "custom.some-field": {
        "disabled": true
      }
    }
    ...
  }
```

각 필드는 다음 옵션을 지원합니다.

  - `disabled` //선택 부울.// 특정 하위 유형에서 필드를 비활성화할 수 있습니다.
  - `name` //선택 문자열.// 이 하위 유형에서 사용할 이 필드의 사용자 정의 이름입니다.

`mutations` 키를 사용하면 댓글 영역 위의 "하위 유형 변경하기" 작업 동작을 제어할 수 있습니다. 기본적으로 이 작업은 사용자가 태스크 하위 유형을 다른 모든 하위 유형으로 변경할 수 있게 합니다.

하위 유형 변경을 더 어렵게 만들거나 일부 하위 유형만 제공하고 싶다면, "하위 유형 변경하기"에서 제공할 하위 유형 목록을 지정할 수 있습니다. 예를 들어 유사한 하위 유형이 여러 개 있고 태스크를 이들 사이에서는 변환할 수 있게 하되 다른 유형으로 쉽게 변환하지 못하게 하고 싶다면, 다음과 같이 "하위 유형 변경하기" 컨트롤에 해당 옵션들만 표시할 수 있습니다.

```
  {
    ...
    "mutations": ["bug", "issue", "defect"]
    ...
  }
```

빈 목록을 지정하면 "하위 유형 변경하기" 작업이 완전히 숨겨집니다.

이 mutation 목록은 권고적이며 UI만 설정합니다. 태스크는 대량 편집기 또는 API를 사용하면 여전히 하위 유형 간에 자유롭게 변환할 수 있습니다.',
  '%s changed the subtype of this task from "%s" to "%s".' => '%s님이 이 태스크의 하위 유형을 "%s"에서 "%s"(으)로 변경했습니다.',
  'Create a new Maniphest task.' => '새로운 Maniphest 태스크를 만듭니다.',
  'Create New Task' => '새로운 태스크 만들기',
  'Read information about tasks.' => '태스크에 관한 정보를 읽습니다.',
  'New task priority constant.' => '새로운 태스크 우선순위 상수입니다.',
  '%s reopened this task as %s by committing %s.' => '%s님이 이 태스크를 %3$s을(를) 커밋함으로써 %s(으)로써 다시 열었습니다.',
  'Choose a default priority for newly created tasks. You can review and adjust available priorities by using the %s configuration option. The default value (`90`) corresponds to the default "Needs Triage" priority.' => '새로 생성되는 태스크의 기본 우선순위를 선택하세요. 사용 가능한 우선순위는 %s 구성 옵션을 사용하여 검토하고 조정할 수 있습니다. 기본값(`90`)은 기본 "분류 필요" 우선순위에 해당합니다.',
  'The source task is associated with the destination revision.' => '소스 태스크는 도착 판과 연관됩니다.',
  'Changed Task Status' => '변경된 태스크 상태',
  'Search for tasks blocked by open subtasks.' => '열린 하위 태스크에 의해 차단된 태스크를 검색합니다.',
  'Changed Project Column' => '변경된 프로젝트 열',
  'Subtype of the task.' => '태스크의 하위 유형입니다.',
  'Unassigned task.' => '할당되지 않은 태스크입니다.',
  '%s edited subtask(s), added %s: %s; removed %s: %s.' => '%s님이 하위 태스크를 편집했습니다, 추가됨: %3$s, 제거됨: %5$s.',
  'Task status ("%s") has unrecognized value for "locked" configuration ("%s"). Supported values are: "%s", "%s".' => '태스크 상태("%s")에 "잠김" 구성("%s")에 대해 인식할 수 없는 값이 있습니다. 지원되는 값: "%s", "%s".',
  '%s removed %s subtask(s): %s.' => '%s님이 하위 태스크를 제거했습니다: %3$s.',
  'Closed, Wontfix' => '닫힘, 고칠 예정 없음',
  'Parent tasks' => '상위 태스크',
  'Unknown status query \'%s\'!' => '알 수 없는 상태 쿼리 \'%s\'!',
  'Group PHID ("%s") component of cursor ("%s") is not valid.' => '커서("%2$s")의 그룹 PHID("%s") 구성 요소가 유효하지 않습니다.',
  '%s set the point value for this task to %s.' => '%s님이 이 태스크의 점수 값을 %s(으)로 설정했습니다.',
  'Change the priority of the task.' => '태스크의 우선순위를 변경합니다.',
  'Page Size' => '페이지 크기',
  '%s reopened this task as %s.' => '%s님이 이 태스크를 %s(으)로써 다시 열었습니다.',
  '%s reopened %s, a subtask of %s, as %s.' => '%s님이 %3$s의 하위 태스크인 %s을(를) %4$s(으)로써 다시 열었습니다.',
  'Name of the task.' => '태스크의 이름입니다.',
  'Spited' => '스프라이트됨',
  'Lock Error' => '잠금 오류',
  'Tasks and Bugs' => '태스크와 버그',
  'A task\'s assignee changes.' => '태스크의 담당자가 변경되었을 때.',
  'Revisions and Commits' => '판과 커밋',
  'Parent task identifier "%s" does not identify a visible task.' => '상위 태스크 식별자 "%s"은(는) 표시되는 태스크를 식별하지 않습니다.',
  'Assign / Claim' => '할당 / 확보',
  '%s reopened subtask %s as %s.' => '%s님이 하위 태스크 %s을(를) %s(으)로써 다시 열었습니다.',
  'Point value of the task.' => '태스크의 점수 값입니다.',
  'Search for tasks with given authors.' => '주어진 작성자의 태스크를 검색합니다.',
  'The task already has the selected status.' => '태스크는 이미 선택된 상태를 가지고 있습니다.',
  'Clear Selection' => '선택 항목 지우기',
  '%s reopened %s as "%s".' => '%s님이 %s을(를) "%s"(으)로써 다시 열었습니다.',
  '%s triaged this task as %s priority.' => '%s님이 이 태스크를 %s 우선순위로 분류했습니다.',
  'This task has no related commits or revisions.' => '이 태스크에는 관련 커밋이나 수정 사항이 없습니다.',
  'Changed task status to "%s".' => '태스크 상태를 "%s"(으)로 바꾸었습니다.',
  'View Standalone Graph' => '독립형 그래프 보기',
  'Choose Subtype' => '하위 유형 선택',
);
  }

}
