<?php

final class PhabricatorHarbormasterKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
  'Build Artifact' => '아티팩트 빌드하기',
  'Plan %d %s' => '계획 %d %s',
  'Waiting for Message' => '메시지 대기 중',
  'Harbormaster Artifacts' => 'Harbormaster 아티팩트',
  'Updating build %d of buildable %s...' => '빌드가능 %2$s의 빌드 %d 업데이트 중...',
  'TEST RESULT' => '테스트 결과',
  'Browse Dependencies' => '의존성 찾아보기',
  'Unable to Pause Build' => '빌드를 일시 정지할 수 없음',
  'Search for builds by containing revision or repository.' => '특정한 판이나 저장소를 포함하는 빌드를 검색합니다.',
  'Started at %s' => '%s에 시작됨',
  'Valid Output' => '유효한 출력',
  'Failed to gzdeflate() log data!' => '로그 데이터를 gzdeflate() 하는데 실패했습니다!',
  'Deadlocked' => '교착 상태',
  'Buildkite did not return a "%s"!' => 'Buildkite에서 "%s"을(를) 반환하지 않았습니다!',
  'For example:' => '예:',
  'OK: Ignored event.' => 'OK: 무시된 이벤트입니다.',
  'Behavior: %s' => '동작: %s',
  'Build Passed' => '빌드 통과',
  'You can only restart some builds.' => '일부 빌드만 다시 시작할 수 있습니다.',
  'Resume Build' => '빌드 재개',
  'Retrieve information about Harbormaster build targets.' => 'Harbormaster 대상에 대한 정보를 가져옵니다.',
  'Unable to identify the protocol for URI "%s". URIs must be fully qualified and have an identifiable protocol.' => 'URI "%s"에 대한 프로토콜을 식별할 수 없습니다. URI는 완전한 형식이어야 하며 식별 가능한 프로토콜을 가져야 합니다.',
  'Log Not Finalized' => '로그 확정되지 않음',
  'PHID of the object this build is building.' => '이 빌드를 빌드중인 객체의 PHID입니다.',
  'No build plans found.' => '빌드 계획이 없습니다.',
  'This plan can not be run manually.' => '이 계획은 수동으로 실행할 수 없습니다.',
  'Artifact "%s" not found!' => '아티팩트 "%s"이(가) 없습니다!',
  'Run a command on Drydock resource.' => 'Drydock 리소스에서 명령을 실행합니다.',
  '%s Skipped Test(s)' => '건너뜀 %s개',
  'Severity of the message.' => '메시지의 심각도입니다.',
  'The build plan for this build is configured to prevent users who can not edit it from issuing commands to the build, and you do not have permission to edit the build plan.' => '이 빌드의 빌드 계획은 편집 권한이 없는 사용자가 빌드에 명령을 내릴 수 없도록 구성되어 있습니다. 빌드 계획을 편집할 권한이 없습니다.',
  'You can not pause a build that uses an autoplan.' => '자동 계획을 사용하는 빌드는 일시 정지할 수 없습니다.',
  'Search for targets with given statuses.' => '주어진 상태를 가진 대상을 검색합니다.',
  'Unsound' => '신뢰할 수 없음',
  'Run a build in CircleCI.' => 'CircleCI에서 빌드를 실행합니다.',
  'View External Build Results' => '외부 빌드 결과 보기',
  'Build with Buildkite' => 'Buildkite로 빌드하기',
  'Attempt to load log bytes (%d - %d) failed: failed to load a single contiguous range. Actual ranges: %s.' => '로그 바이트 (%d - %d) 로드 시도 실패: 단일 연속 범위를 로드하는 데 실패했습니다. 실제 범위: %s.',
  'Not A Haiku' => '하이쿠가 아님',
  '%s Broken Test(s)' => '망가짐 %s개',
  'Resuming' => '재개 중',
  'Insufficient Build Plan Permission' => '충분하지 않은 빌드 계획 권한',
  'Publishing "%s"...' => '"%s" 게시 중...',
  'The name of the build target.' => '빌드 대상의 이름입니다.',
  'Edit Plan' => '계획 편집하기',
  'This test has too much data to display inline.' => '이 테스트는 인라인으로 표시하기에 데이터가 너무 많습니다.',
  'Run %d' => '%d 실행',
  'Organization Name' => '조직 이름',
  'True if this artifact has been released.' => '이 아티팩트가 릴리스된 경우 참입니다.',
  'Browse Builds' => '빌드 찾아보기',
  'Expected "%s" property to contain a dictionary.' => '"%s" 속성에는 딕셔너리가 포함되어 있는 것을 예상했습니다.',
  'You must have edit permission on this build plan to pause, abort, resume, or restart it.' => '빌드를 일시 정지, 중단, 재개, 다시 시작하려면 이 빌드 계획의 편집 권한이 필요합니다.',
  'Really Delete Step?' => '정말로 단계를 삭제합니까?',
  'or' => '또는',
  'Completed' => '완료됨',
  'Revisions are not sent for review until the build completes, but they will be sent for review even if it fails.' => '판은 빌드가 완료될 때까지는 검토를 위해 전송되지 않습니다. 그러나 빌드가 실패하더라도 검토를 위해 전송됩니다.',
  'You can not resume this build because it is already restarting.' => '이 빌드는 이미 재시작 중이므로 재개할 수 없습니다.',
  'Output Artifacts' => '출력 아티팩트',
  'Manage Build Plans' => '빌드 계획 관리하기',
  'Default Build Plan View Policy' => '기본 빌드 계획 보기 정책',
  'Choose a build target to attach the log to with "--target".' => '"--target"으로 로그를 부착할 빌드 대상을 선택하세요.',
  'Build Preparing' => '빌드 준비 중',
  'This test result has %s bytes of Remarkup test details. Remarkup blocks longer than %s bytes are not rendered inline when showing test summaries.' => '이 테스트 결과에는 %s바이트의 리마크업 테스트 세부 정보가 포함되어 있습니다. %s바이트보다 긴 리마크업 블록은 테스트 요약을 표시할 때 인라인으로 렌더링되지 않습니다.',
  'Edit Buildable' => '빌드가능 편집하기',
  'Call includes "lint" parameter. This parameter must be omitted when the receiver is not a Build Target.' => '호출에 "lint" 매개변수가 포함됩니다. 수신자가 빌드 대상이 아닌 경우 이 매개변수는 생략해야 합니다.',
  'This build can not be restarted because it is an automatic build.' => '이 빌드는 자동 빌드이므로 이 빌드를 재시작할 수 없습니다.',
  'Started After' => '다음 이후에 시작됨',
  'Specify exactly one buildable, by object name.' => '빌드가능을 객체 이름으로 정확히 하나만 지정하세요.',
  'You can use this method to send control commands to Buildables and Builds.

This table summarizes which object types may receive control commands:

<table>
  <tr>
    <th>Object Type</th>
    <th>PHID Example</th>
    <th />
    <th>Description</th>
  </tr>
  <tr>
    <td>Harbormaster Buildable</td>
    <td>`PHID-HMBB-...`</td>
    <td>{icon check color=green}</td>
    <td>Buildables may receive control commands.</td>
  </tr>
  <tr>
    <td>Harbormaster Build</td>
    <td>`PHID-HMBD-...`</td>
    <td>{icon check color=green}</td>
    <td>Builds may receive control commands.</td>
  </tr>
  <tr>
    <td>Harbormaster Build Target</td>
    <td>`PHID-HMBT-...`</td>
    <td>{icon times color=red}</td>
    <td>You may **NOT** send control commands to build targets.</td>
  </tr>
</table>

You can send these commands:

%s

To send a command message, specify the PHID of the object you would like to
receive the message using the `receiver` parameter, and specify the message
type using the `type` parameter.
' => '이 메서드를 사용하여 빌드가능과 빌드에 제어 명령을 보낼 수 있습니다.

다음 표는 제어 명령을 받을 수 있는 객체 유형을 요약합니다:

<table>
  <tr>
    <th>객체 유형</th>
    <th>PHID 예시</th>
    <th />
    <th>설명</th>
  </tr>
  <tr>
    <td>Harbormaster 빌드가능</td>
    <td>`PHID-HMBB-...`</td>
    <td>{icon check color=green}</td>
    <td>빌드가능은 제어 명령을 받을 수 있습니다.</td>
  </tr>
  <tr>
    <td>Harbormaster 빌드</td>
    <td>`PHID-HMBD-...`</td>
    <td>{icon check color=green}</td>
    <td>빌드는 제어 명령을 받을 수 있습니다.</td>
  </tr>
  <tr>
    <td>Harbormaster 빌드 대상</td>
    <td>`PHID-HMBT-...`</td>
    <td>{icon times color=red}</td>
    <td>빌드 대상에는 제어 명령을 보낼 수 **없습니다**.</td>
  </tr>
</table>

다음 명령을 보낼 수 있습니다:

%s

명령 메시지를 보내려면 `receiver` 매개변수로 메시지를 받을 객체의 PHID를 지정하고, `type` 매개변수로 메시지 유형을 지정하세요.',
  'Enable Plan' => '계획 활성화',
  'Unable to Abort Build' => '빌드를 중단할 수 없음',
  'Unable to Load File' => '파일을 로드할 수 없음',
  'Edit Build: %s' => '빌드 편집하기: %s',
  'The object PHID of the object (usually a diff or commit) being built.' => '빌드 중인 객체(일반적으로 차이 또는 커밋)의 PHID입니다.',
  'Build Target' => '빌드 대상',
  'Unable to determine how to fetch changes: this buildable does not identify a commit or a staging ref. You may need to configure a repository staging area.' => '변경 사항을 가져올 방법을 결정할 수 없습니다: 이 빌드가능은 커밋 또는 스테이징 ref를 식별하지 못합니다. 저장소 스테이징 영역을 구성해야 할 수 있습니다.',
  'Failed to load build plan ("%s").' => '빌드 계획("%s")을 로드하는 데 실패했습니다.',
  'Run plan __id__ on __buildable__.' => '계획 __id__를 __빌드가능__에서 실행합니다.',
  'Step %d' => '단계 %d',
  'Build Started' => '빌드 시작됨',
  'Done. Total byte size of affected logs: %s -> %s.' => '완료되었습니다. 영향을 받은 로그의 전체 바이트 크기: %s -> %s.',
  'Build %d: %s' => '%d 빌드: %s',
  '%s aborted this build.' => '%s님이 이 빌드를 중단했습니다.',
  'Disable Build Plan' => '빌드 계획 비활성화',
  'Search for targets of a given build.' => '주어진 빌드의 대상을 검색합니다.',
  'Enable Build Plan' => '빌드 계획 활성화',
  'Webhook Token' => '웹훅 토큰',
  'When creating an artifact, you will choose an `artifactType` from this table. These types of artifacts are supported:' => '아티팩트를 생성할 때 이 표에서 `artifactType`을 선택해야 합니다. 지원되는 아티팩트 유형은 다음과 같습니다:',
  'Aborting' => '중지 중',
  '%s Other Test(s)' => '기타 %s개',
  'A buildable inherits policies from the underlying object.' => '빌드가능은 그 객체로부터 정책을 상속받습니다.',
  'Build Steps' => '빌드 단계',
  'Harbormaster Builds' => 'Harbormaster 빌드',
  '%s paused this build.' => '%s님이 이 빌드를 일시 정지했습니다.',
  'Sleep for %s seconds.' => '%s초 동안 슬립합니다.',
  '%s created this build step.' => '%s님이 이 빌드 단계를 만들었습니다.',
  'Buildable Name' => '빌드가능 이름',
  'If Complete' => '완료한 경우',
  'This object does not support builds with Buildkite.' => '이 객체는 Buildkite로 빌드하는 것을 지원하지 않습니다.',
  'Search for targets completed on or before a particular date.' => '특정 날짜에 혹은 그 이전에 완료된 대상을 검색합니다.',
  'Compress, decompress, store or destroy build logs.' => '빌드 로그를 압축, 압축 해제, 저장 또는 파기합니다.',
  'Target %d' => '대상 %d',
  'The build the target is associated with.' => '다생이 연관되어 있는 빌드입니다.',
  'Received' => '수신됨',
  'Use "plain" to remove encoding, or "compress" to compress logs.' => '"plain"을 사용해서 인코딩을 제거하거나, "compress"를 사용해서 로그를 압축하세요.',
  'Default Build Plan Edit Policy' => '기본 빌드 계획 편집 정책',
  'Unused Output' => '사용되지 않은 출력',
  'Abort Older Builds' => '이전 빌드를 중지',
  'Pause Build' => '빌드 일시 정지',
  'Interacting with External Build Systems' => '외부 빌드 시스템과 상호작용하기',
  'Progress on this build will be discarded. Really abort build?' => '이 빌드의 진행 상황이 버려집니다. 정말로 빌드를 중단합니까?',
  'Artifact %d' => '아티팩트 %d',
  'Path to the file containing the lint message, from the project root.' => '프로젝트 루트 디렉토리에서 린트 오류 메시지가 포함된 파일의 경로입니다.',
  'No artifacts found.' => '아티팩트가 없습니다.',
  'A build step has the same policies as its build plan.' => '빌드 단계는 빌드 계획과 동일한 정책을 따릅니다.',
  'Rebuilding log "%s"...' => '로그 "%s" 재빌드 중...',
  '%s Failed Test(s)' => '실패함 %s개',
  'Unknown mode "%s". Valid modes are: %s.' => '알 수 없는 모드 "%s"입니다. 유효한 모드: %s.',
  'Wait for previous commits to finish building the current plan before continuing.' => '계속하기 전에 이전 커밋이 현재 계획 구축을 완료할 때까지 기다립니다.',
  'No handler found for %s' => '%s에 대한 핸들러가 없음',
  'Follow Log' => '로그 따라가기',
  'You can not resume a build that uses an autoplan.' => '자동 빌드 계획을 사용하는 빌드는 재개할 수 없습니다.',
  'Explicitly update the builds for __buildable__.' => '__빌드가능__에 대한 빌드를 명시적으로 업데이트합니다.',
  'Path to the file where the test is declared, relative to the project root.' => '테스트가 선언된 파일의 경로(프로젝트 루트를 기준으로 함)입니다.',
  'Apply transactions to create a new build step or edit an existing one.' => '새 빌드 단계를 만들거나 기존 빌드 단계를 편집하기 위해 트랜잭션을 적용하세요.',
  'Show more details about operations as they are performed. Slow! But also very reassuring!' => '작업이 진행되는 동안 더 자세한 정보를 보여줍니다. 느리긴 하지만, 그만큼 안심이 됩니다!',
  'Lint message code identifying the type of message, like "ERR123".' => '"ERR123"과 같은 메시지 유형을 식별하는 린트 메시지 코드입니다.',
  'Build will pause.' => '빌드가 일시 정지됩니다.',
  'This is an autoplan (a builtin plan provided by an application) so it can not be edited.' => '이것은 자동 계획(애플리케이션에서 제공하는 내장 계획)이므로 편집할 수 없습니다.',
  'Make an authenticated HTTP %s request to %s.' => '인증된 HTTP %s 요청을 %s(으)로 보냅니다.',
  'The build target this artifact is attached to.' => '이 아티팩트가 부착된 빌드 대상입니다.',
  'Sent a restart message to build.' => '빌드에 재시작 메시지를 보냈습니다.',
  'Line number in the file where the text which triggered the message first appears. The first line of the file is line 1, not line 0.' => '해당 메시지를 발생시킨 텍스트가 파일에서 처음 나타나는 줄 번호입니다. 파일의 첫 번째 줄은 0번째 줄이 아니라 1번째 줄입니다.',
  'Buildables' => '빌드가능',
  'The artifact key.' => '아티팩트 키입니다.',
  'Build step "%s" has step group key "%s", but no step group with that key exists.' => '빌드 단계 "%s"에는 단계 그룹 키 "%s"(이)가 있지만 해당 키를 가진 단계 그룹이 존재하지 않습니다.',
  'When Complete' => '완료될 때',
  'Show all logs.' => '모든 로그를 표시합니다.',
  'Invalid buildable PHID "%s".' => '유효하지 않은 빌드가능 PHID "%s".',
  'Find out information about buildables.' => '빌드가능에 대한 정보를 찾습니다.',
  'ID of build plan to run.' => '실행할 빌드 계획의 ID입니다.',
  'Run Build Plan Manually' => '빌드 계획을 수동으로 실행',
  'Limit the rate at which the log is written, to test live log streaming.' => '실시간 로그 스트리밍을 테스트하려면 로그 기록 속도를 제한하세요.',
  'Running for %s' => '%s 동안 실행 중',
  'Show More Above' => '위로 더 보기',
  '**rebuild-log** --id __id__ [__options__]
**rebuild-log** --all' => '**rebuild-log** --id __id__ [__옵션__]
**rebuild-log** --all',
  '%s created this build plan.' => '%s님이 이 빌드 계획을 만들었습니다.',
  'Search for builds running a given build plan.' => '주어진 빌드 계획을 실행하는 빌드를 검색합니다.',
  'You do not have permission to create Harbormaster build plans.' => 'Harbormaster 빌드 계획을 만들 권한이 없습니다.',
  'Epoch timestamp for target completion, if the target has completed.' => '(대상이 완료된 경우) 대상이 완료된 시점의 에포크 타임스탬프입니다.',
  'Build plan "%s" does not exist.' => '빌드 계획 "%s"이(가) 존재하지 않습니다.',
  'You can not pause this build because it is already aborting.' => '이 빌드는 이미 중단 중이므로 일시 정지할 수 없습니다.',
  'Pause the build.' => '빌드를 일시 정지합니다.',
  'Really resume %s build(s)?' => array(
    '정말로 빌드를 재개합니까?',
    '정말로 빌드 %s개를 재개합니까?',
  ),
  'Uploaded File' => '업로드된 파일',
  'Force the buildable to update even if no build status changes occur during normal update.' => '정상 업데이트 중에 빌드 상태 변경이 없더라도 빌드가능이 강제로 업데이트되도록 합니다.',
  'INVALID' => '유효하지 않음',
  'Unable to load object "%s" to receive message.' => '메시지를 수신할 객체 "%s"을(를) 로드할 수 없습니다.',
  'No such variable \'%s\'!' => '그런 변수 \'%s\'은(는) 없습니다!',
  'Request OK
' => '요청 OK',
  'The object PHID of the Harbormaster Build being built.' => '빌드중인 Harbormaster 빌드의 객체 PHID입니다.',
  'Logs must be fully written and processed before they can be downloaded. This log is still being written or processed.' => '로그는 다운로드되기 전에 완전히 기록되고 처리되어야 합니다. 이 로그는 아직 기록 또는 처리 중입니다.',
  '%s restarted this build.' => '%s님이 이 빌드를 재시작했습니다.',
  'Harbormaster Buildables' => 'Harbormaster 빌드가능',
  'Sleep' => '슬립',
  'Writing log, slowly...' => '로그를 쓰는 중 (천천히)...',
  'Unknown CircleCI build type "%s". Expected "%s" or "%s".' => '알 수 없는 CircleCI 빌드 유형 "%s"입니다. "%s" 또는 "%s"을(를) 예상했습니다.',
  'You must openBuildLog() before you can append() content to the log.' => '로그에 콘텐츠를 append() 하기 전에 openBuildLog()를 먼저 실행해야 합니다.',
  'Plan %d' => '계획 %d',
  'Drydock: Run Command' => 'Drydock: 명령 실행',
  'Abort the build, discarding progress.' => '빌드를 중단하고 진행 상황을 버립니다.',
  'Buildables may receive control commands like "abort" and "restart". Sending a control command to a Buildable is the same as sending it to each Build for the Buildable.' => '빌드가능은 "중단" 및 "재시작"과 같은 제어 명령을 받을 수 있습니다. 빌드가능에 제어 명령을 보내는 것은 빌드가능의 각 빌드에 제어 명령을 보내는 것과 동일합니다.',
  'Coverage information for this test.' => '이 테스트에 대한 검사 정보입니다.',
  'This attachment exists solely to provide compatibility with the message format returned by an outdated API method. It will be taken away at some point and you should not rely on these fields being available.' => '이 첨부 파일은 구형 API 메서드에서 반환되는 메시지 형식과의 호환성을 제공하기 위한 목적으로만 존재합니다. 추후 제거될 예정이므로 이러한 필드를 사용할 수 있다고 가정해서는 안 됩니다.',
  'The build plan name.' => '빌드 계획의 이름입니다.',
  'View Current Build' => '현재 빌드 보기',
  'Next Steps' => '다음 단계',
  'Fragment' => '프래그먼트',
  'Build target this log is attached to.' => '이 로그가 부착된 빌드 대상입니다.',
  'Work will continue on all builds. Really resume?' => '일은 모든 빌드에서 계속됩니다. 정말로 재개할까요?',
  'Already Restarting' => '이미 재시작 중',
  'Stores a URI.' => 'URI를 저장합니다.',
  'Edit Build Step: %s' => '빌드 단계 편집하기: %s',
  'rXYZ, R123, D456, ...' => 'rXYZ, R123, D456, ...',
  'Rebuild all logs.' => '모든 로그를 재빌드합니다.',
  'Attempting to access unknown build status property ("%s").' => '알 수 없는 빌드 상태 속성("%s")에 접근하려고 시도했습니다.',
  'Rebuild the file and summary for a log. This is primarily intended to make it easier to develop new log summarizers.' => '로그에 대한 파일 및 요약 정보를 재빌드합니다. 이는 주로 새로운 로그 요약 도구를 더 쉽게 개발할 수 있도록 하기 위한 것입니다.',
  'Standalone Log Fragment' => '독립형 로그 프래그먼트',
  'Harbormaster Build Steps' => 'Harbormaster 빌드 단계',
  'You can report test results when updating the state of a build target. The
simplest way to do this is to report all the results alongside a `pass` or
`fail` message, but you can also send a `work` message to report intermediate
results.


To provide unit test results, pass a list of results in the `unit`
parameter. Each result should be a dictionary with these keys:

%s

The `result` parameter recognizes these test results:

%s

This is a simple, valid value for the `unit` parameter. It reports one passing
test and one failing test:

```lang=json
%s
```' => '빌드 대상의 상태를 업데이트할 때 테스트 결과를 보고할 수 있습니다. 가장 간단한 방법은 모든 결과를 `pass` 또는 `fail` 메시지와 함께 보고하는 것이지만, `work` 메시지를 보내 중간 결과를 보고할 수도 있습니다.


단위 테스트 결과를 제공하려면 `unit` 매개변수에 결과 목록을 전달하세요. 각 결과는 다음 키를 가진 딕셔너리여야 합니다.

%s

`result` 매개변수는 다음 테스트 결과를 인식합니다.

%s

다음은 `unit` 매개변수의 간단하고 유효한 값입니다. 하나의 통과 테스트와 하나의 실패 테스트를 보고합니다.

```lang=json
%s
```',
  'Origin' => '출처',
  'Build Status' => '빌드 상태',
  'Run At' => '실행된 시간',
  'No build plan behavior with key "%s" exists.' => '키 "%s"을(를) 가지는 빌드 계획 동작이 존재하지 않습니다.',
  'The build may not be restarted.' => '빌드의 재시작을 허용하지 않습니다.',
  'Initiators' => '이니시에이터',
  'Runtime duration of the test, in seconds.' => '테스트 실행 시간(초)입니다.',
  'Lint Messages' => '린트 메시지',
  'Missing Dependency' => '누락된 종속성',
  'Search for targets started on or after a particular date.' => '특정 날짜에 혹은 그 이후에 시작된 대상을 검색합니다.',
  'This target has no associated artifacts.' => '이 대상은 연관된 아티팩트가 없습니다.',
  'Choose Build Statuses' => '빌드 상태를 선택',
  'Search for targets started on or before a particular date.' => '특정 날짜에 혹은 그 이전에 시작된 대상을 검색합니다.',
  'The build step the target runs.' => '대상이 실행되는 빌드 단계입니다.',
  'New Step: %s' => '새로운 단계: %s',
  'This build plan will deadlock when executed, due to circular dependencies present in the build plan. Examine the step list and resolve the deadlock.' => '빌드 계획에 순환 종속성이 존재하여 실행 시 교착 상태가 발생합니다. 단계 목록을 검토하고 교착 상태를 해결하세요.',
  'This older log is missing required rendering data. To rebuild rendering data, run: %s' => '이전 로그에 필수 렌더링 데이터가 누락되어 있습니다. 렌더링 데이터를 다시 생성하려면 다음 명령을 실행하세요: %s',
  '%s changed the %s behavior for this plan from %s to %s.' => '%s님이 이 계획의 %s의 행동을 %s에서 %s(으)로 변경했습니다.',
  'No such buildable "%s"!' => '그런 빌드가능 "%s"은(는) 없습니다!',
  'Receiver object (of class "%s") is not a valid receiver.' => '수신자 객체(클래스 "%s")는 유효한 수신자가 아닙니다.',
  'PHID of the object that is built.' => '빌드된 객체의 PHID입니다.',
  'Harbormaster Build Logs' => 'Harbormaster 빌드 로그',
  'QUEUED' => '대기열에 추가됨',
  'You can not abort this build because it is already complete.' => '이 빌드는 이미 완료되었으므로 중단할 수 없습니다.',
  'Retrieve information about Harbormaster build steps.' => 'Harbormaster 빌드 단계에 대한 정보를 가져옵니다.',
  'Edit Harbormaster Build Configurations' => 'Harbormaster 빌드 구성 편집',
  'WARNING: This build step is new and experimental!

To build **revisions** with CircleCI, they must:

  - belong to a tracked repository;
  - the repository must have a Staging Area configured;
  - the Staging Area must be hosted on GitHub; and
  - you must configure the webhook described below.

To build **commits** with CircleCI, they must:

  - belong to a repository that is being imported from GitHub; and
  - you must configure the webhook described below.

Webhook Configuration
=====================

Add this webhook to your `circle.yml` file to make CircleCI report results
to Harbormaster. Until you install this hook, builds will hang waiting for
a response from CircleCI.

```lang=yml
notify:
  webhooks:
    - url: %s
```

Environment
===========

These variables will be available in the build environment:

| Variable | Description |
|----------|-------------|
| `HARBORMASTER_BUILD_TARGET_PHID` | PHID of the Build Target.
' => '경고: 이 빌드 단계는 새롭고 실험적입니다!

CircleCI로 **판**을 빌드하려면 다음 조건을 만족해야 합니다:

  - 추적 중인 저장소에 속해야 합니다.
  - 저장소에 스테이징 영역이 구성되어 있어야 합니다.
  - 스테이징 영역이 GitHub에서 호스팅되어야 합니다.
  - 아래에 설명된 웹훅을 구성해야 합니다.

CircleCI로 **커밋**을 빌드하려면 다음 조건을 만족해야 합니다:

  - GitHub에서 가져오고 있는 저장소에 속해야 합니다.
  - 아래에 설명된 웹훅을 구성해야 합니다.

웹훅 구성
=====================

CircleCI가 Harbormaster에 결과를 보고하도록 하려면 이 웹훅을 `circle.yml` 파일에 추가하세요. 이 훅을 설치할 때까지 빌드는 CircleCI의 응답을 기다리며 멈춥니다.

```lang=yml
notify:
  webhooks:
    - url: %s
```

환경
===========

빌드 환경에서 다음 변수를 사용할 수 있습니다.

|   변수   |     설명    |
|----------|-------------|
| `HARBORMASTER_BUILD_TARGET_PHID` | 빌드 대상의 PHID입니다.',
  'Search for builds started by someone or something in particular.' => '특정한 사람 혹은 것에 의해 실행된 빌드를 검색합니다.',
  'Any user who can view the plan can run it manually.' => '계획을 볼 수 있는 사용자는 누구나 수동으로 실행할 수 있습니다.',
  'When a build is restarted, side effects associated with the build may occur again.' => '빌드가 재시작되면 빌드와 연관된 부작용이 다시 발생할 수 있습니다.',
  'The build may be restarted.' => '빌드의 재시작을 허용합니다.',
  'Resume work on a previously paused build.' => '이전에 일시 정지했던 빌드를 재개합니다.',
  'Automatic `arc unit` step.' => '자동 `arc unit` 단계입니다.',
  'Build Plan' => '빌드 계획',
  'Drydock lease PHID "%s" does not correspond to a valid lease.' => 'Drydock 임대 PHID "%s"은(는) 유효한 임대에 해당하지 않습니다.',
  'The name of this build.' => '이 빌드의 이름입니다.',
  'File PHID "%s" does not correspond to a valid file.' => '파일 PHID "%s"은(는) 유효한 파일에 해당하지 않습니다.',
  'Name one or more buildables to publish, like "B123".' => '게시할 빌드가능의 이름을 하나 이상 지정하세요(예: "B123").',
  'Pausing' => '일시 정지 중',
  'Manual' => '수동',
  'Harbormaster build objects work somewhat differently from objects in many other
applications. Most application objects can be edited directly using synchronous
APIs (like `maniphest.edit`, `differential.revision.edit`, and so on).

However, builds require long-running background processing and Habormaster
objects have a more complex lifecycle than most other application objects and
may spend significant periods of time locked by daemon processes during build
execution. A synchronous edit might need to wait an arbitrarily long amount of
time for this lock to become available so the edit could be applied.

Additionally, some edits may also require an arbitrarily long amount of time to
//complete//. For example, aborting a build may execute cleanup steps which
take minutes (or even hours) to complete.

Since a synchronous API could not guarantee it could return results to the
caller in a reasonable amount of time, the edit API for Harbormaster build
objects is asynchronous: to update a Harbormaster build or build target, use
this API (`harbormaster.sendmessage`) to send it a message describing an edit
you would like to effect or additional information you want to provide.
The message will be processed by the daemons once the build or target reaches
a suitable state to receive messages.

Select an object to send a message to using the `receiver` parameter. This
API method can send messages to multiple types of objects:

<table>
  <tr>
    <th>Object Type</th>
    <th>PHID Example</th>
    <th>Description</th>
  </tr>
  <tr>
    <td>Harbormaster Buildable</td>
    <td>`PHID-HMBB-...`</td>
    <td>%s</td>
  </tr>
  <tr>
    <td>Harbormaster Build</td>
    <td>`PHID-HMBD-...`</td>
    <td>%s</td>
  </tr>
  <tr>
    <td>Harbormaster Build Target</td>
    <td>`PHID-HMBT-...`</td>
    <td>%s</td>
  </tr>
</table>

See below for specifics on sending messages to different object types.' => 'Harbormaster 빌드 객체는 다른 많은 애플리케이션의 객체와 다소 다르게 동작합니다. 대부분의 애플리케이션 객체는 `maniphest.edit`, `differential.revision.edit` 등과 같은 동기 API를 사용하여 직접 편집할 수 있습니다.

하지만 빌드는 장시간 실행되는 백그라운드 처리가 필요하며, Harbormaster 객체는 대부분의 다른 애플리케이션 객체보다 더 복잡한 수명 주기를 갖고 빌드 실행 중 데몬 프로세스에 의해 상당 시간 잠긴 상태일 수 있습니다. 동기 편집은 편집을 적용할 수 있도록 이 잠금이 해제될 때까지 임의로 긴 시간을 기다려야 할 수 있습니다.

또한 일부 편집은 //완료//하는 데도 임의로 긴 시간이 필요할 수 있습니다. 예를 들어 빌드를 중단하면 완료까지 몇 분(또는 몇 시간)이 걸리는 정리 단계를 실행할 수 있습니다.

동기 API는 합리적인 시간 안에 호출자에게 결과를 반환한다고 보장할 수 없으므로, Harbormaster 빌드 객체의 편집 API는 비동기식입니다. Harbormaster 빌드 또는 빌드 대상을 업데이트하려면 이 API(`harbormaster.sendmessage`)를 사용하여 적용하려는 편집이나 제공하려는 추가 정보를 설명하는 메시지를 보내세요. 빌드 또는 대상이 메시지를 받을 수 있는 적절한 상태에 도달하면 데몬이 메시지를 처리합니다.

`receiver` 매개변수를 사용하여 메시지를 보낼 객체를 선택합니다. 이 API 메서드는 여러 유형의 객체에 메시지를 보낼 수 있습니다:

<table>
  <tr>
    <th>객체 유형</th>
    <th>PHID 예시</th>
    <th>설명</th>
  </tr>
  <tr>
    <td>Harbormaster 빌드가능</td>
    <td>`PHID-HMBB-...`</td>
    <td>%s</td>
  </tr>
  <tr>
    <td>Harbormaster 빌드</td>
    <td>`PHID-HMBD-...`</td>
    <td>%s</td>
  </tr>
  <tr>
    <td>Harbormaster 빌드 대상</td>
    <td>`PHID-HMBT-...`</td>
    <td>%s</td>
  </tr>
</table>

각 객체 유형으로 메시지를 보내는 자세한 내용은 아래를 참고하세요.',
  'The name of the build step.' => '빌드 단계의 이름입니다.',
  'All Builds' => '모든 빌드',
  'No such object "%s" exists.' => '그런 객체 \'%s\'은(는) 존재하지 않습니다.',
  'Object ("%s") claims "%s" is a GitHub repository URI, but the path ("%s") does not have enough components (expected at least two).' => '객체("%s")는 "%s"이(가) GitHub 저장소 URI라고 주장하지만 경로("%s")에 구성 요소가 충분하지 않습니다(최소 두 개를 예상함).',
  'Create Buildable' => '빌드가능 만들기',
  'To run a build manually, you normally must have permission to edit the related build plan. If you would prefer that anyone who can see the build plan be able to run and restart the build, you can change the behavior here.

Note that this controls access to all build management actions: "Run Plan Manually", "Restart", "Abort", "Pause", and "Resume".

WARNING: This may be unsafe, particularly if the build has side effects like deployment.

If you weaken this policy, an attacker with control of an account that has "Can View" permission but not "Can Edit" permission can manually run this build against any old version of the code, including versions with known security issues.

If running the build has a side effect like deploying code, they can force deployment of a vulnerable version and then escalate into an attack against the deployed service.' => '빌드를 수동으로 실행하려면 일반적으로 관련 빌드 계획을 편집할 권한이 있어야 합니다. 빌드 계획을 볼 수 있는 누구나 빌드를 실행하고 다시 시작할 수 있게 하려면 여기에서 동작을 변경할 수 있습니다.

이는 "계획을 수동으로 실행", "재시작", "중지", "일시 정지", "재개" 등 모든 빌드 관리 동작에 대한 접근을 제어합니다.

경고: 특히 배포처럼 빌드에 부작용이 있는 경우 안전하지 않을 수 있습니다.

이 정책을 약화하면 "편집할 수 있음" 권한은 없지만 "볼 수 있음" 권한이 있는 계정을 제어하는 공격자가 알려진 보안 문제가 있는 버전을 포함하여 코드의 오래된 버전에 대해 이 빌드를 수동으로 실행할 수 있습니다.

빌드 실행에 코드 배포 같은 부작용이 있다면, 공격자는 취약한 버전의 배포를 강제한 뒤 배포된 서비스를 대상으로 공격을 확대할 수 있습니다.',
  'Build Log %d (%s - %s)' => '빌드 로그 %d (%s - %s)',
  'Lease Working Copy' => '작업 사본 임대',
  'No Build Plan Permission' => '빌드 계획 권한 없음',
  'No behavior with key "%s" exists. Valid keys are: %s.' => '키 "%s"에 대한 동작이 존재하지 않습니다. 유효한 키: %s.',
  'Nameless Test (%d)' => '이름 없는 테스트 (%d)',
  'Really restart build?' => '정말로 빌드를 재시작합니까?',
  '%s renamed this build plan from "%s" to "%s".' => '%s님이 이 빌드 계획의 이름을 "%s"에서 "%s"(으)로 변경했습니다.',
  'Completed After' => '다음 이후에 완료됨',
  '%s resumed this buildable.' => '%s님이 이 빌드가능을 재개했습니다.',
  'Force logs to rebuild even if they appear to be in good shape already.' => '로그 파일이 이미 양호한 상태인 것처럼 보이더라도 강제로 재빌드합니다.',
  'You can not process build log chunks unless the log lock is held.' => '로그 잠금을 보유하고 있지 않으면 빌드 로그 청크를 처리할 수 없습니다.',
  'Unit Tests' => '단위 테스트',
  'No buildables found.' => '빌드가능이 없습니다.',
  'Invalid build log PHID "%s".' => '유효하지 않은 빌드 로그 PHID "%s".',
  'References a host lease from Drydock.' => 'Drydock의 호스트 임대를 참조합니다.',
  'Type a build status name...' => '빌드 상태 이름을 입력하세요...',
  'Short message name, like "Syntax Error".' => '"구문 오류"같은 짧은 메시지 이름입니다.',
  'Stores a reference to file data.' => '파일 데이터에 대한 참조를 저장합니다.',
  'Edit Step: %s' => '단계 편집하기: %s',
  'Optional namespace for this test. This is organizational and is often a class or module name, like "ExampleTestCase".' => '이 테스트에 사용할 선택적 이름공간입니다. 이는 구성상의 용도로, "ExampleTestCase"와 같이 클래스 또는 모듈 이름을 사용하는 경우가 많습니다.',
  'Buildkite' => 'Buildkite',
  'Built for %s' => '%s 동안 빌드됨',
  'Create a build artifact.' => '빌드 아티팩트를 만듭니다.',
  'Pause, abort, restart, and report results for builds.' => '빌드를 일시 정지, 중단, 재개하고 결과를 보고합니다.',
  'Step Type' => '단계 유형',
  'You must openBuildLog() before you can closeBuildLog().' => 'closeBuildLog()를 사용하기 전에 openBuildLog()를 먼저 실행해야 합니다.',
  'Unknown Input' => '알 수 없는 입력',
  'HTTP Request' => 'HTTP 요청',
  'Skipped' => '건너뜀',
  'Optional label for this URI.' => '이 URI에 대한 선택적 레이블입니다.',
  'Harbormaster' => 'Harbormaster',
  'Build Log' => '빌드 로그',
  'Control Commands' => '제어 명령',
  'If Viewable' => '보기가 가능한 경우',
  'Users must be able to see a build target to view its build log.' => '사용자는 빌드 대상의 빌드 로그를 보려면 그 빌드 대상을 볼 수 있어야 합니다.',
  'Waiting for %s' => '%s 동안 대기 중',
  'Query Harbormaster buildables.' => 'Harbormaster 빌드가능을 검색합니다.',
  'Create Build Plan' => '빌드 계획 만들기',
  'Call omits required "type" parameter. Specify the type of message you want to send.' => '요청에 필수 매개변수 "type"이 생략되었습니다. 전송할 메시지 유형을 지정하세요.',
  '%s disabled this build plan.' => '%s님이 이 빌드 계획을 비활성화했습니다.',
  'Create Build' => '빌드 만들기',
  'Reading log content from stdin...' => 'stdin에서 로그 내용을 읽는 중...',
  'No messages for this build target.' => '이 빌드 대상에 대한 메시지가 없습니다.',
  'View in CircleCI' => 'CircleCI에서 보기',
  '%s aborted this buildable.' => '%s님이 이 빌드가능을 중단했습니다.',
  'Hold Drafts' => '초안 보류',
  'All Plans' => '모든 계획',
  'You can not resume this build because it is already aborting.' => '이 빌드는 이미 중단 중이므로 재개할 수 없습니다.',
  'Unable to Resume Build' => '빌드를 재개할 수 없음',
  'WARNING: This build step is new and experimental!

To build **revisions** with Buildkite, they must:

  - belong to a tracked repository;
  - the repository must have a Staging Area configured;
  - you must configure a Buildkite pipeline for that Staging Area; and
  - you must configure the webhook described below.

To build **commits** with Buildkite, they must:

  - belong to a tracked repository;
  - you must configure a Buildkite pipeline for that repository; and
  - you must configure the webhook described below.

Webhook Configuration
=====================

In {nav Settings} for your Organization in Buildkite, under
{nav Notification Services}, add a new **Webhook Notification**.

Use these settings:

  - **Webhook URL**: %s
  - **Token**: The "Webhook Token" field below and the "Token" field in
    Buildkite should both be set to the same nonempty value (any random
    secret). You can use copy/paste the value Buildkite generates into
    this form.
  - **Events**: Only **build.finish** needs to be active.

Environment
===========

These variables will be available in the build environment:

| Variable | Description |
|----------|-------------|
| `HARBORMASTER_BUILD_TARGET_PHID` | PHID of the Build Target. |' => '경고: 이 빌드 단계는 새롭고 실험적입니다!

Buildkite로 **판**을 빌드하려면 다음 조건을 만족해야 합니다:

  - 추적 중인 저장소에 속해야 합니다.
  - 저장소에 스테이징 영역이 구성되어 있어야 합니다.
  - 해당 스테이징 영역에 대한 Buildkite 파이프라인을 구성해야 합니다.
  - 아래에 설명된 웹훅을 구성해야 합니다.

Buildkite로 **커밋**을 빌드하려면 다음 조건을 만족해야 합니다:

  - 추적 중인 저장소에 속해야 합니다.
  - 해당 저장소에 대한 Buildkite 파이프라인을 구성해야 합니다.
  - 아래에 설명된 웹훅을 구성해야 합니다.

웹훅 구성
=====================

Buildkite의 조직 {nav Settings}에서 {nav Notification Services} 아래에 새 **웹훅 알림**을 추가합니다.

다음 설정을 사용하세요.

  - **웹훅 URL**: %s
  - **토큰**: 아래의 "웹훅 토큰" 필드와 Buildkite의 "토큰" 필드는 모두 동일한 비어 있지 않은 값(임의의 랜덤 비밀값)으로 설정해야 합니다. Buildkite가 생성한 값을 이 양식에 복사/붙여넣기할 수 있습니다.
  - **이벤트**: **build.finish**만 활성화하면 됩니다.

환경
===========

빌드 환경에서 다음 변수를 사용할 수 있습니다.

| 변수 | 설명 |
|----------|-------------|
| `HARBORMASTER_BUILD_TARGET_PHID` | 빌드 대상의 PHID입니다. |',
  'Runnable' => '실행 가능',
  'No active Herald rules trigger this build.' => '이 빌드를 트리거하는 활성 Herald 규칙이 없습니다.',
  'You can not specify both "--id" and "--all". Choose one or the other.' => '"--id"와 "--all"을 동시에 지정할 수 없습니다. 둘 중 하나를 선택하세요.',
  'Revisions are not sent for review until the build completes, and are returned to the author for updates if the build fails.' => '판은 빌드가 완료될 때까지는 검토를 위해 전송되지 않습니다. 또한 빌드가 실패하는 경우에는 업데이트를 위해 작성자에게 반환됩니다.',
  'Invalid build ID "%s".' => '유효하지 않은 빌드 ID "%s".',
  'This engine is used to edit Harbormaster builds.' => '이 엔진은 Harbormaster 엔진을 편집하는 데 사용됩니다.',
  'Started Before' => '다음 이전에 시작됨',
  'The URI to store.' => '저장할 URI입니다.',
  'Type a build plan name...' => '빌드 계획 이름을 입력하세요...',
  'Test' => '테스트',
  'Harbormaster Build %s ("%s") for %s' => '%3$s에 대한 Harbormaster 빌드 %s ("%s")',
  'Updating Build Targets' => '빌드 대상 업데이트 중',
  'Delete Build Step' => '빌드 단계 삭제',
  'Step %d.%d' => '단계 %d.%d',
  'Log "%s" is still live. Logs can not be finalized until they have closed.' => '로그 "%s"은(는) 아직 진행 중입니다. 로그는 닫힐 때까지 확정될 수 없습니다.',
  'Use this method to attach artifacts to build targets while running builds. Artifacts can be used to carry data through a complex build workflow, provide extra information to users, or store build results.' => '이 메서드를 사용해서 빌드를 실행하는 동안 빌드 대상에 아티팩트를 첨부하세요. 아티팩트는 복잡한 빌드 워크플로를 통해 데이터를 전달하거나, 사용자에게 추가 정보를 제공하거나, 빌드 결과를 저장하는 데 사용할 수 있습니다.',
  'This engine is used to edit Harbormaster build steps.' => '이 엔진은 Harbormaster 빌드 단계를 편집하는 데 사용됩니다.',
  'Modify running builds, and report build results.' => '실행 중인 빌드를 수정하고 빌드 결과를 보고합니다.',
  'OK: No Harbormaster target PHID.' => 'OK: Harbormaster 대상 PHID가 없습니다.',
  'Each artifact also needs an `artifactKey`, which names the artifact. Finally, you will provide some `artifactData` to fill in the content of the artifact. The data you provide depends on what type of artifact you are creating.' => '각 아티팩트에는 아티팩트의 이름을 지정하는 `artifactKey`가 필요합니다. 마지막으로 아티팩트의 내용을 채울 `artifactData`를 제공해야 합니다. 제공하는 데이터는 생성하려는 아티팩트의 유형에 따라 다릅니다.',
  'Local Name' => '로컬 이름',
  'Long explanation of the lint message.' => '린트 오류 메시지에 대한 긴 설명입니다.',
  'This step has an invalid implementation (%s).' => '이 단계의 구현이 유효하지 않습니다 (%s).',
  'Build Target PHID' => '빌드 대상 PHID',
  'Build/CI' => '빌드/CI',
  'rXabcdef, PHID-DIFF-1234, ...' => 'rXabcdef, PHID-DIFF-1234, ...',
  'Applying plan %s to new buildable %s...' => '새 빌드가능 %2$s에 계획 %s 적용 중...',
  'Bad Input Type' => '잘못된 입력 유형',
  'True if this is a manual buildable.' => '이것이 수동 빌드가능인 경우 참입니다.',
  'Upload %s from %s.' => '%2$s에서 %s을(를) 업로드합니다.',
  'Search for targets completed on or after a particular date.' => '특정 날짜에 혹은 그 이후에 완료된 대상을 검색합니다.',
  'Publish a buildable. This is primarily useful for developing and debugging applications which have buildable objects.' => '빌드가능을 게시합니다. 이는 주로 빌드가능한 객체를 가지는 애플리케이션을 개발하고 디버깅하는 데 유용합니다.',
  'Search for builds running against particular buildables.' => '특정 빌드가능을 대상으로 실행 중인 빌드를 검색합니다.',
  'Specify exactly one buildable object, by object name.' => '빌드가능한 객체를 객체 이름으로 정확히 하나만 지정하세요.',
  'Can Create Build Plans' => '빌드 계획을 만들 수 있음',
  'You can not abort a build that uses an autoplan.' => '자동 빌드 계획을 사용하는 빌드는 중단할 수 없습니다.',
  'You can not pause this build because it is already pausing.' => '이 빌드는 이미 일시 정지 중이므로 일시 정지할 수 없습니다.',
  'Add Build Step' => '빌드 단계 추가',
  'No such build target "%s"!' => '그런 빌드 대상 \'%s\'은(는) 없습니다!',
  'My Builds' => '내 빌드',
  'Write rate must be more than 0 bytes/sec.' => '쓰기 속도는 0바이트/초보다 커야 합니다.',
  'Required Input' => '요구되는 입력',
  'The current UNIX timestamp.' => '현재 UNIX 타임스탬프입니다.',
  'Object "%s" is not a Harbormaster Buildable!' => '객체 "%s"은(는) Harbormaster 빌드가능이 아닙니다!',
  'Length of the log in bytes.' => '로그의 길이(바이트)입니다.',
  'Report that work on the target is ongoing. This message can be used to report partial results during a build.' => '대상에 대한 일이 진행 중임을 보고합니다. 이 메시지는 빌드 중에 부분적인 결과를 보고하는 데 사용할 수 있습니다.',
  'Really pause %s build(s)?' => array(
    '정말로 빌드를 일시 정지합니까?',
    '정말로 빌드 %s개를 일시 정지합니까?',
  ),
  'This group has no available build steps.' => '이 그룹에는 사용 가능한 빌드 단계가 없습니다.',
  'Stores a URI.

With `ui.external`, you can use this artifact type to add links to build results in an external build system.' => 'URI를 저장합니다.

`ui.external`을 사용하면 이 아티팩트 유형을 사용하여 외부 빌드 시스템의 빌드 결과에 대한 링크를 추가할 수 있습니다.',
  'CircleCI' => 'CircleCI',
  'Trigger a build in Buildkite.' => 'Buildkite에서 빌드를 트리거합니다.',
  'Call omits required "receiver" parameter. Specify the PHID of the object you want to send a message to.' => '필수 매개변수인 "receiver"가 생략되었습니다. 메시지를 보낼 객체의 PHID를 지정하세요.',
  'When' => '언제',
  'Search for only manual or automatic buildables.' => '수동 또는 자동 빌드가능만을 검색합니다.',
  'New plan name.' => '새로운 계획 이름입니다.',
  'You can only abort some builds. Work will halt immediately on builds you can abort. Progress will be discarded, and builds must be completely restarted if you want them to complete.' => '일부 빌드만 중단할 수 있습니다. 중단 가능한 빌드의 경우 작업이 즉시 중단됩니다. 진행 상황은 모두 버려지며, 빌드를 완료하려면 처음부터 다시 시작해야 합니다.',
  'Harbormaster Build Targets' => 'Harbormaster 빌드 대상',
  'Sleep for a specified number of seconds.' => '지정된 초 수 만큼 슬립합니다.',
  'The current status of this build.' => '이 빌드의 현재 상태입니다.',
  'Reporting Lint Results' => '린트 결과의 보고',
  'Make an HTTP %s request to %s.' => 'HTTP %s 요청을 %s(으)로 보냅니다.',
  'Status "%s" is not a valid build plan status. Valid statuses are: %s.' => '"%s" 상태는 유효한 빌드 계획 상태가 아닙니다. 유효한 상태는 다음과 같습니다: %s.',
  'A file containing the log data.' => '로그 데이터가 포함된 파일입니다.',
  '<Invalid URI>' => '<유효하지 않은 URI>',
  'You can not issue this command because you do not have permission to access the build plan for this build.' => '이 빌드에 대한 빌드 계획에 접근할 권한이 없으므로 이 명령을 실행할 수 없습니다.',
  'Artifact Name' => '아티팩트 이름',
  'Build Artifact %d' => '빌드 아티팩트 %d',
  'Object "%s" is not a buildable!' => '객체 "%s"은(는) 빌드가능이 아닙니다!',
  'Use %s to specify a build plan to run.' => '실행할 빌드 계획을 지정하기 위해 %s을(를) 사용하세요.',
  'Input Artifacts' => '입력 아티팩트',
  'Revisions are sent for review regardless of the status of the build.' => '판은 검토를 위해 빌드 상태와 관계없이 전송됩니다.',
  'Unknown chunk encoding "%s"!' => '알 수 없는 청크 인코딩 "%s"!',
  'Object ("%s") claims "%s" is a GitHub repository URI, but the domain does not appear to be GitHub.' => '객체("%s")는 "%s"이(가) GitHub 저장소 URI라고 주장하지만, 해당 도메인은 GitHub가 아닌 것으로 보입니다.',
  'Usually, builds may be restarted by users who have permission to edit the related build plan. (You can change who is allowed to restart a build by adjusting the "Runnable" behavior.)

Restarting a build may be useful if you suspect it has failed for environmental or circumstantial reasons unrelated to the actual code, and want to give it another chance at glory.

If you want to prevent a build from being restarted, you can change when it may be restarted by adjusting this behavior. This may be useful to prevent accidents where a build with a dangerous side effect (like deployment) is restarted improperly.' => '일반적으로 빌드는 관련 빌드 계획을 편집할 권한이 있는 사용자가 다시 시작할 수 있습니다. ("실행 가능" 동작을 조정하여 빌드를 다시 시작할 수 있는 사용자를 변경할 수 있습니다.)

빌드가 실제 코드와는 무관한 환경적 또는 상황적 이유로 실패했다고 의심되어 다시 시도하려는 경우 빌드를 다시 시작하는 것이 유용할 수 있습니다.

빌드가 다시 시작되지 않도록 하려면 이 동작을 조정하여 다시 시작될 수 있는 시점을 변경할 수 있습니다. 이는 (배포와 같은) 위험한 부작용이 있는 빌드가 부적절하게 다시 시작되는 사고를 방지하는 데 유용할 수 있습니다.',
  'The name of this build plan.' => '이 빌드 계획의 이름입니다.',
  'Opened a new build log:' => '새 빌드 로그를 열었음:',
  'Unable to determine how to clone the repository for this buildable: it is not associated with a tracked repository.' => '이 빌드가능 항목에 대한 저장소를 복제하는 방법을 확인할 수 없습니다: 추적되는 저장소와 연결되어 있지 않습니다.',
  '"arc land" never warns that the build is still running or has failed.' => '"arc land"는 빌드가 아직 실행 중인지 또는 실패했는지에 대한 경고를 전혀 표시하지 않습니다.',
  'This build can not be restarted because the build plan is configured to prevent the build from restarting unless it has failed, and it has not failed.' => '빌드 계획이 빌드가 실패하지 않은 경우 재시작되지 않도록 구성되어 있으므로 이 빌드를 재시작할 수 없습니다. 현재 빌드는 실패하지 않았습니다.',
  '"arc land" warns if the build has failed, but ignores the build if it is still running.' => '"arc land"는 빌드가 실패했을 경우 경고를 표시하지만, 빌드가 아직 실행 중인 경우에는 이를 무시합니다.',
  'View URI for the buildable.' => '빌드가능의 URI를 봅니다.',
  'This build can not be restarted because the build plan is configured to prevent the build from restarting.' => '빌드 계획이 빌드 재시작을 하지 않도록 구성되어 있기 때문에 이 빌드를 재시작할 수 없습니다.',
  'You can use this method (`harbormaster.sendmessage`) to send control commands
to Buildables and Builds.

Specify the Build or Buildable to receive the control command by providing its
PHID in the `receiver` parameter.

Sending a control command to a Buildable has the same effect as sending it to
each Build for the Buildable. For example, sending a "Pause" message to a
Buildable will pause all builds for the Buildable (or at least attempt to).

When sending control commands, the `unit` and `lint` parameters of this API
method must be omitted. You can not report lint or unit results directly to
a Build or Buildable, and can not report them alongside a control command.

More broadly, you can not report build results directly to a Build or
Buildable. Instead, report results to a Build Target.

See below for a list of control commands.
' => '이 메서드(`harbormaster.sendmessage`)를 사용하여 빌드가능 및 빌드에 제어 명령을 보낼 수 있습니다.

`receiver` 매개변수에 PHID를 제공하여 제어 명령을 받을 빌드 또는 빌드가능을 지정하세요.

빌드가능에 제어 명령을 보내는 것은 해당 빌드가능의 각 빌드에 명령을 보내는 것과 같은 효과를 냅니다. 예를 들어 빌드가능에 "일시 정지" 메시지를 보내면 해당 빌드가능의 모든 빌드가 일시 정지됩니다(또는 적어도 일시 정지가 시도됩니다).

제어 명령을 보낼 때는 이 API 메서드의 `unit` 및 `lint` 매개변수를 생략해야 합니다. 린트 또는 단위 결과를 빌드나 빌드가능에 직접 보고할 수 없으며, 제어 명령과 함께 보고할 수도 없습니다.

더 넓게 보면, 빌드 결과를 빌드 또는 빌드가능에 직접 보고할 수 없습니다. 대신 결과를 빌드 대상에 보고하세요.

제어 명령 목록은 아래를 참조하세요.',
  'You must choose a name for your build plan.' => '빌드 계획의 이름을 선택해야 합니다.',
  'Build Targets may receive build status and result messages, like "pass" or "fail".' => '빌드 대상은 "통과" 또는 "실패"와 같은 빌드 상태 및 결과 메시지를 수신할 수 있습니다.',
  'If you abort all builds, work will halt immediately. Work will be discarded, and builds must be completely restarted.' => '모든 빌드를 취소하면 작업이 즉시 중단됩니다. 작업 결과는 버려지며, 빌드를 처음부터 다시 시작해야 합니다.',
  'Reporting Unit Results' => '단위 결과의 보고',
  'Argument "%s" does not name a buildable. Provide one or more valid buildable monograms or PHIDs.' => '인수 "%s"은(는) 빌드가능을 지정하지 않습니다. 하나 이상의 유효한 빌드 가능한 모노그램 또는 PHID를 제공하세요.',
  'Edit Step' => '단계 편집하기',
  'The ID of the current build.' => '현재 빌드의 ID입니다.',
  'Progress on running builds will be discarded.' => '실행 중인 빌드의 진행 상황은 버려집니다.',
  'Submit builds into the build queue normally instead of running them in the foreground.' => '빌드를 포그라운드에서 실행하는 대신 평범하게 빌드 대기열에 제출합니다.',
  '%s resumed this build.' => '%s님이 이 빌드를 재개했습니다.',
  'This input is required, but not configured.' => '이 입력은 필요하지만, 구성되지 않았습니다.',
  'Bad build target ID "%d".' => '잘못된 빌드 대상 ID "%d".',
  'Edit Build' => '빌드 편집하기',
  'Restart %s build(s)?' => '빌드 %s개를 재시작합니까?',
  'This build log is already open!' => '이 빌드 로그는 이미 열려있습니다!',
  'Show Only Automated Builds' => '자동화된 빌드만 표시',
  'Format for the text provided in "details". Valid values are "text" (default) or "remarkup". This controls how test details are rendered when shown to users.' => '"세부 정보"에 제공되는 텍스트의 형식입니다. 유효한 값은 "text"(기본값) 또는 "remarkup"입니다. 이 설정은 사용자에게 표시되는 테스트 세부 정보의 렌더링 방식을 제어합니다.',
  'Build Target ID' => '빌드 대상 ID',
  'Build will restart.' => '빌드가 재시작됩니다.',
  'Unable to load the file for this log. The file may have been destroyed.' => '이 로그 파일을 불러올 수 없습니다. 파일이 파기되었을 수 있습니다.',
  'Short test name, like "ExampleTest".' => '"ExampleTest"같은 짧은 테스트 이름입니다.',
  'Active Plans' => '활성 계획',
  'Restartable' => '재시작 가능',
  'Unit %d' => '단위 %d',
  'Harbormaster build target "%s" is not a Buildkite build step. Only Buildkite steps may be updated via the Buildkite hook.' => 'Harbormaster 빌드 대상 "%s"은(는) Buildkite 빌드 단계가 아닙니다. Buildkite 후크를 통해 업데이트할 수 있는 것은 Buildkite 단계뿐입니다.',
  'Choose a build plan behavior for "%s".' => '"%s"에 대한 빌드 계획 동작을 선택하세요.',
  'New View (Prototype)' => '새로운 보기 (프로토타입)',
  'After completing this build step Harbormaster can continue the build normally, or it can pause the build and wait for a message. If you are using this build step to trigger some work in an external system, you may want wait for that system to perform the work and report results back.

If you select **Continue Build Normally**, the build plan will proceed once this step finishes.

If you select **Wait For Message**, the build plan will pause indefinitely once this step finishes. To resume the build, an external system must call `harbormaster.sendmessage` with the build target PHID, and either `"pass"` or `"fail"` to indicate the result for this step. After the result is recorded, the build plan will resume.' => '이 빌드 단계를 완료한 뒤 Harbormaster는 빌드를 정상적으로 계속 진행할 수도 있고, 빌드를 일시 중지하고 메시지를 기다릴 수도 있습니다. 이 빌드 단계를 사용하여 외부 시스템에서 어떤 작업을 트리거하는 경우, 해당 시스템이 작업을 수행하고 결과를 다시 보고할 때까지 기다리고 싶을 수 있습니다.

**빌드를 정상적으로 계속하기**를 선택하면 이 단계가 끝나는 즉시 빌드 계획이 진행됩니다.

**메시지를 대기**를 선택하면 이 단계가 끝난 뒤 빌드 계획이 무기한 일시 정지됩니다. 빌드를 재개하려면 외부 시스템이 빌드 대상 PHID와 함께 `harbormaster.sendmessage`를 호출하고, 이 단계의 결과를 나타내기 위해 `"통과"` 또는 `"실패"` 중 하나를 전달해야 합니다. 결과가 기록되면 빌드 계획이 재개됩니다.',
  'Disable this build plan? It will no longer be executed automatically.' => '이 빌드 계획을 비활성화합니까? 더 이상 자동으로 실행되지 않습니다.',
  'Ship Some Freight' => '화물 운송하기',
  '"arc land" warns if the build is still running or has failed.' => '"arc land"는 빌드가 여전히 실행중이거나 실패한 경우 경고합니다.',
  'View Details' => '세부 정보 보기',
  'Buildable' => '빌드가능',
  'Only users who can edit the plan can run it manually.' => '계획을 편집할 수 있는 사용자만 수동으로 실행할 수 있습니다.',
  'Unable to find fetch!' => '가져오기를 찾을 수 없습니다!',
  'arc lint + arc unit' => 'arc lint + arc unit',
  '%s restarted this buildable.' => '%s님이 이 빌드가능을 재시작했습니다.',
  'Really abort build?' => '정말로 빌드를 중단합니까?',
  'The build step description.' => '빌드 단계의 설명입니다.',
  'Browse Build Plans' => '빌드 계획 찾아보기',
  'The PHID of the user or Object that initiated the build, if applicable.' => '빌드를 시작한 사용자 또는 객체의 PHID입니다 (해당하는 경우).',
  'All Buildables' => '모든 빌드가능',
  'Also Clone' => '함께 복제',
  'Query information about build artifacts.' => '빌드 아티팩트에 대한 정보를 검색합니다.',
  'Unable to Send Command' => '명령을 보낼 수 없습니다',
  'No behavior option is marked as the default option (for behavior "%s"). Exactly one option must be marked as the default option.' => '동작 옵션 중 어느 것도 (동작 "%s"에 대한) 기본 옵션으로 표시되지 않았습니다. 정확히 하나의 옵션이 기본 옵션으로 표시되어야 합니다.',
  'Select all active builds.' => '활성 빌드를 모두 선택합니다.',
  'Preparing' => '준비 중',
  'Build Plans' => '빌드 계획',
  'Edit Buildable: %s' => '빌드가능 편집: %s',
  'Unable to load build target "%s".' => '빌드 대상 "%s"을(를) 로드할 수 없습니다.',
  'Retrieve information about Harbormaster build plans.' => 'Harbormaster 빌드 계획에 대한 정보를 가져옵니다.',
  'File to create an artifact from.' => '아티팩트를 만들기 위한 파일입니다.',
  'You can only resume some builds. Work will continue on builds you have permission to resume.' => '일부 빌드만 재개할 수 있습니다. 재개 권한이 있는 빌드에서는 일이 계속 진행됩니다.',
  'All Artifacts' => '모든 아티팩트',
  'Attempt to load log bytes (%d - %d) failed: the loaded range (%d - %d) does not span the requested range.' => '로그 바이트 (%d - %d) 로드 시도 실패: 로드된 범위(%d - %d)가 요청된 범위를 포함하지 않습니다.',
  'The current status of this buildable.' => '이 빌드가능의 현재 상태입니다.',
  'Standalone Fragment' => '독립형 프래그먼트',
  'Wait For Message' => '메시지를 대기',
  'Builds may receive control commands like "pause", "resume", "abort", and "restart".' => '빌드는 "pause", "resume", "abort", "restart" 등의 제어 명령을 수신할 수 있습니다.',
  'Edit Build Plan' => '빌드 계획 편집하기',
  'Select one or more builds by ID.' => '하나 이상의 빌드를 ID로 선택합니다.',
  'Unable to find lines.' => '줄을 찾을 수 없습니다.',
  '%s empty logs are hidden.' => '빈 로그 %s개가 숨겨졌습니다.',
  'Delete Step' => '단계 삭제',
  'No builds found.' => '빌드가 없습니다.',
  'OK: Processed event.' => 'OK: 처리된 이벤트입니다.',
  'Building' => '빌드 중',
  'Status for the build target.' => '빌드 대상의 상태입니다.',
  'CircleCI did not return a "%s"!' => 'CircleCI에서 "%s"을(를) 반환하지 않았습니다!',
  'Message Type' => '메시지 유형',
  'Artifact Type' => '아티팩트 유형',
  'Object "%s" is not a HarbormasterBuildable (it is a "%s"). Name one or more buildables to publish, like "B123".' => '객체 "%s"은(는) HarbormasterBuildable이 아닙니다("%s"입니다). "B123"과 같이 게시할 빌드가능을 하나 이상 지정하세요.',
  'Load or create build autotargets.' => '빌드 자동 대상을 로드하거나 생성합니다.',
  'Apply transactions to create a new build plan or edit an existing one.' => '새 빌드 계획을 만들거나 기존 빌드 계획을 편집하기 위해 트랜잭션을 적용하세요.',
  'Apply transactions to create a new build or edit an existing one.' => '새 빌드를 만들거나 기존 빌드를 편집하기 위해 트랜잭션을 적용하세요.',
  'Warn When Landing' => '최종 반영 시 경고',
  'Attempting to access unknown buildable status property ("%s").' => '알 수 없는 빌드가능 상태 속성("%s")에 접근하려고 시도했습니다.',
  'The current status of this build plan.' => '이 빌드 계획의 현재 상태입니다.',
  'Unknown Status ("%s")' => '알 수 없는 상태 ("%s")',
  'You can not restart this build because you do not have permission to access the build plan.' => '빌드 계획에 접근할 권한이 없기 때문에 이 빌드를 다시 시작할 수 없습니다.',
  'Edit Build Plan: %s' => '빌드 계획 편집하기: %s',
  'View in Buildkite' => 'Buildkite에서 보기',
  'Multiple behavior options (for behavior "%s") have the same key ("%s"). Each option must have a unique key.' => '여러 동작 옵션이 (동작 "%s"에 대한) 동일한 키("%s")를 가집니다. 각 옵션은 고유한 키를 가져야 합니다.',
  'No implementation is specified!' => '지정된 구현이 없습니다!',
  '(This is an explicit exception.)' => '(이는 명시적인 예외입니다.)',
  'Abort Build' => '빌드 중지',
  'Artifacts' => '아티팩트',
  'Invalid Implementation ("%s")!' => '유효하지 않은 구현 ("%s")!',
  'Apply transactions to create a new buildable or edit an existing one.' => '새 빌드가능을 만들거나 기존 빌드 계획을 편집하기 위해 트랜잭션을 적용하세요.',
  'View Full Test Results (%s)' => '전체 테스트 결과 보기 (%s)',
  '<Unknown Artifact Type>' => '<알 수 없는 아티팩트 유형>',
  'Multiple behavior options (for behavior "%s") are marked as default options ("%s" and "%s"). Exactly one option must be marked as the default option.' => '여러 동작 옵션이 (동작 "%s"에 대한) 기본 옵션("%s" 및 "%s")으로 표시됩니다. 기본 옵션으로는 정확히 하나만 표시되어야 합니다.',
  'Behavior configuration for the build plan.' => '빌드 계획에 대한 동작 구성입니다.',
  'You can not pause this build because it is already paused.' => '이 빌드는 이미 일시 정지 되었으므로 일시 정지할 수 없습니다.',
  'Byte position on the line where the text which triggered the message starts. The first byte on the line is byte 1, not byte 0. This position is byte-based (not character-based) because not all lintable files have a valid character encoding.' => '메시지를 발생시킨 텍스트가 시작되는 줄의 바이트 위치입니다. 줄의 첫 번째 바이트는 0이 아니라 1번째 바이트입니다. 모든 린트 대상 파일이 유효한 문자 인코딩을 사용하는 것은 아니기 때문에 이 위치는 문자 기반이 아닌 바이트 기반입니다.',
  'Unable to inflate log chunk!' => '로그 청크를 inflate 할 수 없습니다!',
  'Search for artifacts attached to particular build targets.' => '특정한 빌드 대상에 부착된 아티팩트를 검색합니다.',
  'Testing Utilities' => '유틸리티 테스트',
  'Search for builds with given statuses.' => '주어진 상태를 가진 빌드를 검색합니다.',
  'Restart Harbormaster builds.' => 'Harbormaster 빌드를 재시작합니다.',
  'Value "%s" is not a valid option for behavior "%s". Valid options are: %s.' => '값 "%s"은(는) 동작 "%s"에 대한 유효한 옵션이 아닙니다. 유효한 옵션: %s.',
  'Automatic `arc lint` step.' => '자동 `arc lint` 단계입니다.',
  'PHID of the object containing this buildable.' => '이 빌드가능을 포함한 객체의 PHID입니다.',
  'Call includes "unit" parameter. This parameter must be omitted when the receiver is not a Build Target.' => '호출에 "unit" 매개변수가 포함됩니다. 수신자가 빌드 대상이 아닌 경우 이 매개변수는 생략해야 합니다.',
  'Variables' => '변수',
  'The buildable does not wait for the build.' => '빌드가능이 빌드를 기다리지 않습니다.',
  'Unknown Unit Message ("%s")' => '알 수 없는 단위 메시지 ("%s")',
  '%s: %s -> %s' => '%s: %s -> %s',
  'Search for builds of particular objects.' => '특정한 객체의 빌드를 검색합니다.',
  'Show More Below' => '아래로 더 보기',
  'Search for targets created on or after a particular date.' => '특정 날짜에 혹은 그 이후에 만들어진 대상을 검색합니다.',
  'Build Target ID to attach the log to.' => '로그를 부착할 빌드 대상 ID입니다.',
  'Restart Builds' => '빌드 재시작',
  'Additional human-readable information about the failure.' => '오류에 대한 추가적인 사람이 읽을 수 있는 정보입니다.',
  'Trigger a build in CircleCI.' => 'CircleCI에서 빌드를 트리거합니다.',
  'Aborted' => '중단됨',
  'Create Build Step' => '빌드 단계 만들기',
  'Plan Behaviors' => '계획 동작',
  'If true, display this URI in the UI as an link to additional build details in an external build system.' => '참인 경우, 이 URI를 외부 빌드 시스템의 추가 빌드 세부 정보에 대한 링크로써 UI에 표시합니다.',
  'Write a new Harbormaster build log. This is primarily intended to make development and testing easier.' => '새로운 Harbormaster 빌드 로그를 작성합니다. 이는 주로 개발 및 테스트를 더 쉽게 하기 위한 것입니다.',
  'Update only this build.' => '이 빌드만 업데이트합니다.',
  'Pause Builds' => '빌드 일시 정지',
  'Search for targets created on or before a particular date.' => '특정 날짜에 혹은 그 이전에 만들어진 대상을 검색합니다.',
  'Run build plans' => '빌드 계획 실행',
  'Use one of "--id" or "--active" to select builds, but not both.' => '"--id" 또는 "--active"를 사용해서 빌드를 선택하세요. 둘을 동시에 사용하지는 마세요.',
  'Resume Builds' => '빌드 재시작',
  'RESTARTING' => '재시작 중',
  'This build step has since been deleted on the build plan.  Some information may be omitted.' => '해당 빌드 단계는 빌드 계획에서 삭제되었습니다. 일부 정보가 생략될 수 있습니다.',
  'There is no implementation available for artifacts of type "%s".' => '아티팩트 유형 "%s"에 대해 사용 가능한 구현이 없습니다.',
  'Build Step' => '빌드 단계',
  '**publish** __buildable__ ...' => '**publish** __빌드가능__ ...',
  'Syntax Error' => '구문 오류',
  'This dependency specifies a build step which doesn\'t exist.' => '이 종속성은 존재하지 않는 빌드 단계를 지정합니다.',
  'All builds will restart.' => '모든 빌드가 재시작됩니다.',
  'Valid Input' => '유효한 입력',
  'This input is bound to an artifact ("%s") which does not exist at this stage in the build process.' => '이 입력은 빌드 프로세스의 이 단계에서는 존재하지 않는 아티팩트("%s")에 바인딩됩니다.',
  'Unknown log chunk encoding ("%s")!' => '알 수 없는 로그 청크 인코딩 ("%s")!',
  'No builds to restart.' => '재시작할 빌드가 없습니다.',
  'Build target ("%s") has the wrong type of build step. Only CircleCI build steps may be updated via the CircleCI webhook.' => '빌드 대상("%s")의 빌드 단계 유형이 잘못되었습니다. CircleCI 웹훅을 통해서는 CircleCI 빌드 단계만 업데이트할 수 있습니다.',
  'Completed at %s' => '%s에 완료됨',
  'Build' => '빌드',
  'Make HTTP Request' => 'HTTP 요청을 만들기',
  'Really pause build?' => '정말로 빌드를 일시 정지합니까?',
  'If updating generates tasks, queue them for the daemons instead of executing them in this process.' => '업데이트로 인해 태스크가 생성되는 경우, 이 프로세스에서 실행하는 대신 데몬이 실행할 수 있도록 대기열에 추가합니다.',
  'This build plan does not have any build steps yet, so it will not do anything when run.' => '이 빌드 계획에는 아직 빌드 단계가 없으므로 실행해도 아무 작업도 수행하지 않습니다.',
  'Type another build step name...' => '다른 빌드 단계의 이름을 입력하세요...',
  'Buildable %d' => '빌드가능 %d',
  'Really restart %s build(s)?' => array(
    '정말로 빌드를 재시작합니까?',
    '정말로 빌드 %s개를 재시작합니까?',
  ),
  '"arc land" warns if the build is still running, but ignores the build if it has failed.' => '"arc land"는 빌드가 여전히 실행중인 경우 경고하지만, 실패한 경우에는 무시합니다.',
  'Recent Builds' => '최근 빌드',
  'Rename the plan.' => '계획의 이름을 변경합니다.',
  'Edit Harbormaster Build Step Configurations' => 'Harbormaster 빌드 단계 구성 편집',
  'Users must be able to see a build target to see its artifacts.' => '사용자는 빌드 대상의 아티팩트를 보려면 그 빌드 대상을 볼 수 있어야 합니다.',
  'Build Failed' => '빌드 실패',
  'The buildable waits for the build, and fails if the build fails.' => '빌드가능이 빌드를 기다리며, 빌드가 실패할 경우 실패합니다.',
  'References a working copy lease from Drydock.' => 'Drydock의 작업 사본 임대를 참조합니다.',
  'PHID of the build plan being run.' => '실행중인 빌드 계획의 PHID입니다.',
  'Build Log %d' => '빌드 로그 %d',
  'Queued at %s' => '%s에 대기열에 추가됨',
  'Pipeline Name' => '파이프라인 이름',
  'You must have edit permission on this build plan to run it manually.' => '수동으로 실행하려면 이 빌드 계획에 대한 편집 권한이 있어야 합니다.',
  'Data Hash' => '데이터 해시값',
  'Automatic Buildable' => '자동 빌드가능',
  'Lines' => '줄',
  'Updating Builds' => '빌드 업데이트 중',
  'The specified buildable does not have a build with ID "%s".' => '지정된 빌드가능이 ID "%s"의 빌드를 가지고 있지 않습니다.',
  'If Building' => '빌드 중인 경우',
  'Find out information about builds.' => '빌드에 대한 정보를 찾습니다.',
  'Edit Build Step' => '빌드 단계 편집하기',
  'Edit Harbormaster Build Plan Configurations' => 'Harbormaster 빌드 계획 구성 편집',
  'Buildkite request to target "%s" had the wrong authentication token. The Buildkite pipeline and Harbormaster build step must be configured with the same token.' => 'Buildkite에서 "%s"을(를) 대상으로 요청한 인증 토큰이 잘못되었습니다. Buildkite 파이프라인과 Harbormaster 빌드 단계는 동일한 토큰으로 구성되어야 합니다.',
  'Throw Exception' => '예외 발생시키기',
  'Harbormaster Query Builds' => 'Harbormaster 쿼리 빌드',
  'If you run external builds, you can use this method to publish build results
back into Harbormaster after the external system finishes work (or as it makes
progress).

To report build status or results, you must send a message to the appropriate
Build Target. This table summarizes which object types may receive build status
and result messages:

<table>
  <tr>
    <th>Object Type</th>
    <th>PHID Example</th>
    <th />
    <th>Description</th>
  </tr>
  <tr>
    <td>Harbormaster Buildable</td>
    <td>`PHID-HMBB-...`</td>
    <td>{icon times color=red}</td>
    <td>Buildables may **NOT** receive status or result messages.</td>
  </tr>
  <tr>
    <td>Harbormaster Build</td>
    <td>`PHID-HMBD-...`</td>
    <td>{icon times color=red}</td>
    <td>Builds may **NOT** receive status or result messages.</td>
  </tr>
  <tr>
    <td>Harbormaster Build Target</td>
    <td>`PHID-HMBT-...`</td>
    <td>{icon check color=green}</td>
    <td>Report build status and results to Build Targets.</td>
  </tr>
</table>

The simplest way to use this method to report build results is to call it once
after the build finishes with a `pass` or `fail` message. This will record the
build result, and continue the next step in the build if the build was waiting
for a result.

When you send a status message about a build target, you can optionally include
detailed `lint` or `unit` results alongside the message. See below for details.

If you want to report intermediate results but a build hasn\'t completed yet,
you can use the `work` message. This message doesn\'t have any direct effects,
but allows you to send additional data to update the progress of the build
target. The target will continue waiting for a completion message, but the UI
will update to show the progress which has been made.

When sending a message to a build target to report the status or results of
a build, your message must include a `type` which describes the overall state
of the build. For example, use `pass` to tell Harbormaster that a build target
completed successfully.

Supported message types are:

%s
' => '외부 빌드를 실행하는 경우, 외부 시스템이 작업을 완료한 뒤(또는 진행 중에) 이 메서드를 사용하여 빌드 결과를 Harbormaster에 다시 게시할 수 있습니다.

빌드 상태나 결과를 보고하려면 적절한 빌드 대상에 메시지를 보내야 합니다. 다음 표는 빌드 상태 및 결과 메시지를 받을 수 있는 객체 유형을 요약합니다:

<table>
  <tr>
    <th>객체 유형</th>
    <th>PHID 예시</th>
    <th />
    <th>설명</th>
  </tr>
  <tr>
    <td>Harbormaster 빌드가능</td>
    <td>`PHID-HMBB-...`</td>
    <td>{icon times color=red}</td>
    <td>빌드가능은 상태나 결과 메시지를 받을 수 **없습니다**.</td>
  </tr>
  <tr>
    <td>Harbormaster 빌드</td>
    <td>`PHID-HMBD-...`</td>
    <td>{icon times color=red}</td>
    <td>빌드는 상태나 결과 메시지를 받을 수 **없습니다**.</td>
  </tr>
  <tr>
    <td>Harbormaster 빌드 대상</td>
    <td>`PHID-HMBT-...`</td>
    <td>{icon check color=green}</td>
    <td>빌드 상태와 결과는 빌드 대상에 보고합니다.</td>
  </tr>
</table>

이 메서드로 빌드 결과를 보고하는 가장 간단한 방법은 빌드가 완료된 뒤 `pass` 또는 `fail` 메시지와 함께 한 번 호출하는 것입니다. 그러면 빌드 결과가 기록되고, 빌드가 결과를 기다리고 있었다면 빌드의 다음 단계가 계속됩니다.

빌드 대상에 상태 메시지를 보낼 때 메시지와 함께 자세한 `lint` 또는 `unit` 결과를 선택적으로 포함할 수 있습니다. 자세한 내용은 아래를 참고하세요.

빌드가 아직 완료되지 않았지만 중간 결과를 보고하려면 `work` 메시지를 사용할 수 있습니다. 이 메시지는 직접적인 효과는 없지만, 빌드 대상의 진행 상황을 업데이트하기 위한 추가 데이터를 보낼 수 있게 해 줍니다. 대상은 완료 메시지를 계속 기다리지만, UI는 진행된 내용을 보여 주도록 업데이트됩니다.

빌드의 상태나 결과를 보고하기 위해 빌드 대상에 메시지를 보낼 때는 빌드의 전체 상태를 설명하는 `type`을 메시지에 포함해야 합니다. 예를 들어 Harbormaster에 빌드 대상이 성공적으로 완료되었음을 알리려면 `pass`를 사용합니다.

지원되는 메시지 유형은 다음과 같습니다:

%s',
  'Can Not Restart Autobuild' => '자동 빌드를 시작할 수 없음',
  'The object PHID of the Harbormaster Buildable being built.' => '빌드중인 Harbormaster 객체(보통 차이 또는 커밋)의 객체 PHID입니다.',
  'HTTP Method' => 'HTTP 메서드',
  'Restart the build, discarding all progress.' => '모든 진행 상황을 버리고 빌드를 재시작합니다.',
  'Epoch timestamp for target start, if the target has started.' => '(대상이 시작된 경우) 대상이 시작된 시점의 에포크 타임스탬프입니다.',
  'Affects Buildable' => '빌드가능에 영향',
  'Build a working copy in Drydock.' => 'Drydock에서 작업 사본을 빌드합니다.',
  'Harbormaster Build Plans' => 'Harbormaster 빌드 계획',
  'If you pause this build, work will halt once the current steps complete. You can resume the build later.' => '이 빌드를 일시 정지하면 현재 단계가 완료되는 즉시 작업이 정지됩니다. 나중에 빌드를 재개할 수 있습니다.',
  'Harbormaster User Guide' => 'Harbormaster 사용자 가이드',
  'Object ("%s") does not implement interface "%s". Only objects which implement this interface can be built with CircleCI.' => '객체("%s")는 인터페이스 "%s"을(를) 구현하지 않습니다. 이 인터페이스를 구현하는 객체만 CircleCI로 빌드될 수 있습니다.',
  'If Editable' => '편집이 가능한 경우',
  'Build Target %d' => '빌드 대상 %d',
  'Completed Before' => '다음 이전에 완료됨',
  'Download Log' => '로그 다운로드',
  'Make an HTTP request.' => 'HTTP 요청을 만듭니다.',
  'Drydock Host' => 'Drydock 호스트',
  'Consumed' => '소비됨',
  'When users create revisions in Differential, the default behavior is to hold them in the "Draft" state until all builds pass. Once builds pass, the revisions promote and are sent for review, which notifies reviewers.

The general intent of this workflow is to make sure reviewers are only spending time on review once changes survive automated tests. If a change does not pass tests, it usually is not really ready for review.

If you want to promote revisions out of "Draft" before builds pass, or promote revisions even when builds fail, you can change the promotion behavior. This may be useful if you have very long-running builds, or some builds which are not very important.

Users may always use "Request Review" to promote a "Draft" revision, even if builds have failed or are still in progress.' => '사용자가 Differential에서 판을 만들었을 때의 기본 동작은, 모든 빌드가 통과할 때까지 판을 "초안" 상태로 유지하는 것입니다. 빌드가 통과하면 판이 승격되어 검토로 전송되고, 검토자에게 알림이 전달됩니다.

이 워크플로의 일반적인 의도는 검토자가 자동화된 테스트를 한 번 통과한 변경 사항에만 검토에 시간을 쓸 수 있도록 하는 것입니다. 변경 사항이 테스트를 통과하지 못했다면 보통은 아직 검토할 준비가 된 것이 아니라는 것입니다.

빌드가 통과하기 전에 판을 "초안"에서 승격하거나, 빌드가 실패해도 판을 승격하려면 승격 동작을 변경할 수 있습니다. 빌드 시간이 매우 길거나 일부 빌드가 그다지 중요하지 않은 경우 유용할 수 있습니다.

빌드가 실패했거나 아직 진행 중이더라도, 사용자는 언제든지 "검토 요청"을 사용하여 "초안" 판을 승격할 수 있습니다.',
  'Browse Build Initiators' => '빌드 이니시에이터 찾아보기',
  'Run Plan Manually' => '계획을 수동으로 실행',
  'The PHID of the build plan this build step belongs to.' => '이 빌드 단계가 속한 빌드 계획의 PHID입니다.',
  'Unexpected Error' => '예상치 못한 오류',
  'Add Step' => '단계 추가',
  'When run against a revision, this build step will abort any older copies of
the same build plan which are currently running against older diffs.

There are some nuances to the behavior:

  - if this build step is triggered manually, it won\'t abort anything;
  - this build step won\'t abort manual builds;
  - this build step won\'t abort anything if the diff it is building isn\'t
    the active diff when it runs.

Build results on outdated diffs often aren\'t very important, so this may
reduce build queue load without any substantial cost.' => '판에 대해 실행될 때, 이 빌드 단계는 현재 이전 차이에 대해 실행 중인 동일한 빌드 계획의 오래된 복사본을 중단합니다.

동작에는 몇 가지 세부 사항이 있습니다:

  - 이 빌드 단계가 수동으로 트리거되면 아무것도 중단하지 않습니다.
  - 이 빌드 단계는 수동 빌드를 중단하지 않습니다.
  - 이 빌드 단계는 빌드 중인 차이가 실행 시점에 활성 차이가 아니면 아무것도 중단하지 않습니다.

오래된 차이의 빌드 결과는 대개 그다지 중요하지 않으므로, 이 기능은 큰 비용 없이 빌드 대기열 부하를 줄일 수 있습니다.',
  'The object PHID of the container (usually a revision or repository) for the object being built.' => '객체가 빌드되는 컨테이너(일반적으로 판 또는 저장소)의 객체 PHID입니다.',
  'Only Restartable if Failed' => '실패 시에만 재시작 가능',
  'Processing Harbormaster build log #%d...' => 'Harbormaster 빌드 로그 #%d 처리 중...',
  'Targets' => '대상',
  'No such implementation "%s" exists!' => '그런 구현 \'%s\'은(는) 존재하지 않습니다!',
  'You can not send this command to any of the current builds for this buildable.' => '이 빌드가능의 현재 빌드 어느 것에도 이 명령을 보낼 수 없습니다.',
  'Build Step %d: %s' => '빌드 단계 %d: %s',
  'Started %s build(s): %s.' => '빌드가 시작되었습니다: %2$s.',
  'Message type "%s" is not supported.' => '메시지 유형 "%s"은(는) 지원되지 않습니다.',
  '%s paused this buildable.' => '%s님이 이 빌드가능을 일시 정지했습니다.',
  'Create an artifact of this type by passing `%s` as the `artifactType`. When creating an artifact of this type, provide these parameters as a dictionary to `artifactData`:' => '이 유형의 아티팩트를 생성하려면 `%s`을(를) `artifactType`으로 전달하세요. 이 유형의 아티팩트를 생성할 때는 다음 매개변수를 딕셔너리로 `artifactData`에 제공하세요:',
  'Choose an archival mode with --mode.' => '--mode로 보존 모드를 선택하세요.',
  'Enter the name of a commit or revision to run this plan on (for example, `rX123456` or `D123`).

For more detailed output, you can also run manual builds from the command line:

  $ ./bin/harbormaster build <object> --plan %s' => '이 계획을 실행할 커밋 또는 판의 이름을 입력하세요(예: `rX123456` 또는 `D123`).

더 자세한 출력을 보려면 명령줄에서 수동 빌드를 실행할 수도 있습니다:

  $ ./bin/harbormaster build <객체> --plan %s',
  'Build with CircleCI' => 'CircleCI로 빌드하기',
  'You can only pause some builds. Once the current steps complete, work will halt on builds you can pause. You can resume the builds later.' => '일부 빌드만 일시 정지할 수 있습니다. 현재 단계가 완료되면 일시 정지 가능한 빌드 작업이 중단됩니다. 나중에 빌드를 다시 시작할 수 있습니다.',
  'Can Not Run Plan' => '계획을 실행할 수 없음',
  'Users must be able to see a build to view its build targets.' => '사용자는 빌드의 빌드 대상을 보려면 그 빌드를 볼 수 있어야 합니다.',
  'Build Variables' => '빌드 변수',
  'The PHID of the current build target.' => '현재 빌드 대상의 PHID입니다.',
  'Write completed. Closing log...' => '쓰기가 완료되었습니다. 로그 닫는 중...',
  'No recent builds.' => '최근 빌드가 없습니다.',
  'This engine is used to edit Harbormaster buildables.' => '이 엔진은 Harbormaster 빌드가능을 편집하는 데 사용됩니다.',
  'You are viewing an older run of this build. %s' => '이 빌드의 이전 실행을 보는 중입니다. %s',
  'You must choose a revision or commit to build.' => '빌드할 판이나 커밋을 선택해야 합니다.',
  'No build step provides autotarget "%s"!' => '어느 빌드 단계도 자동 타겟 "%s"을(를) 제공하지 않습니다!',
  'Stored Chunks' => '저장된 청크',
  'Restart Build' => '빌드 재시작',
  'No details provided.' => '제공된 세부 정보가 없습니다.',
  'Other Build Steps' => '기타 빌드 단계',
  '%s Unsound Test(s)' => '신뢰할 수 없음 %s개',
  'You can not resume this build because it is not paused. You can only resume a paused build.' => '이 빌드는 일시 정지되지 않았으므로 재개할 수 없습니다. 일시 정지된 빌드만 재개할 수 있습니다.',
  'Log data hashes differ! Something is tragically wrong!' => '로그 데이터 해시값이 다릅니다! 무언가가 심각하게 잘못되었습니다!',
  'Build will abort.' => '빌드가 중단됩니다.',
  'Like unit test results, you can report lint results when updating the state
of a build target. The `lint` parameter should contain results as a list of
dictionaries with these keys:

%s

The `severity` parameter recognizes these severity levels:

%s

This is a simple, valid value for the `lint` parameter. It reports one error
and one warning:

```lang=json
%s
```
' => '단위 테스트 결과와 마찬가지로, 빌드 대상의 상태를 업데이트할 때 린트 결과를 보고할 수 있습니다. `lint` 매개변수에는 다음 키를 가진 딕셔너리 목록 형태로 결과를 포함해야 합니다:

%s

`severity` 매개변수는 다음 심각도 수준을 인식합니다:

%s

다음은 `lint` 매개변수의 단순하고 유효한 값입니다. 이 값은 오류 하나와 경고 하나를 보고합니다:

```lang=json
%s
```',
  'Step' => '단계',
  'All Steps' => '모든 단계',
  'Run command %s on %s.' => '%2$s에서 명령 %s을(를) 실행합니다.',
  'Show Only Manual Builds' => '수동 빌드만 표시',
  'No line map.' => '라인 맵이 없습니다.',
  'Report that the target is complete, and the target has failed.' => '대상이 완료되었고, 실패했음을 보고합니다.',
  'When building a revision, abort copies of this build plan which are currently running against older diffs.' => '판을 빌드할 때, 이전 버전에 대해 현재 실행 중인 이 빌드 계획의 복사본을 중단합니다.',
  'Are you sure you want to delete this step? This can\'t be undone!' => '정말로 이 단계를 삭제하겠습니까? 이는 되돌릴 수 없습니다!',
  'Build messages have the same policies as their receivers.' => '빌드 메시지는 수신인와 동일한 정책을 따릅니다.',
  'This build plan can not be run manually.' => '이 빌드 계획은 수동으로 실행할 수 없습니다.',
  'Report that the target is complete, and the target has passed.' => '대상이 완료되었고, 통과했음을 보고합니다.',
  'This build plan has conflicts in one or more build steps. Examine the step list and resolve the listed errors.' => '이 빌드 계획은 하나 이상의 빌드 단계에서 충돌이 발생했습니다. 단계 목록을 검토하고 나열된 오류를 해결하세요.',
  'Containers' => '컨테이너',
  'The number of seconds to sleep for.' => '슬립 할 초 수입니다.',
  'This input is bound to the wrong artifact type. It is bound to a "%s" artifact, but should be bound to a "%s" artifact.' => '이 입력은 잘못된 아티팩트 유형에 바인딩되어 있습니다. "%s" 아티팩트에 바인딩되어 있지만 "%s" 아티팩트에 바인딩되어야 합니다.',
  'Stop Following Log' => '로그 따라가기 중지',
  'Flow Control' => '흐름 제어',
  'Manual Buildable' => '수동 빌드가능',
  'Run a build in Buildkite.' => 'Buildkite에서 빌드를 실행합니다.',
  'Built instantly' => '즉시 빌드',
  'Save Build Step' => '빌드 단계 저장',
  'Enter the name of a revision or commit.' => '판이나 커밋의 이름을 입력하세요.',
  'Option' => '옵션',
  'Arcanist Lint Results' => 'Arcanist 린트 결과',
  'Edit Harbormaster Buildable Configurations' => 'Harbormaster 빌드가능 구성 편집',
  'You can not pause this build because it is already restarting.' => '이 빌드는 이미 재시작 중이므로 일시 정지할 수 없습니다.',
  'Continue Build Normally' => '빌드를 정상적으로 계속하기',
  'Drydock working copy lease to create an artifact from.' => '아티팩트를 생성하는 데 사용할 Drydock 작업 사본 임대입니다.',
  'Autoplan' => '자동 계획',
  'Unable to load repository with PHID "%s".' => 'PHID "%s"을 가진 저장소를 로드할 수 없습니다.',
  'Test engine running the test, like "JavascriptTestEngine". This primarily prevents collisions between tests with the same name in different test suites (for example, a Javascript test and a Python test).' => '테스트를 실행하는 엔진입니다 ("JavascriptTestEngine" 등). 이는 주로 서로 다른 테스트 스위트에서 이름이 같은 테스트 간의 충돌을 방지합니다(예: JavaScript 테스트와 Python 테스트).',
  'Container' => '컨테이너',
  'Choose a build log to rebuild with "--id", or rebuild all logs with "--all".' => '"--id"를 사용하여 재빌드할 빌드 로그를 선택하거나, "--all"을 사용해서 모든 로그를 재빌드하세요.',
  'Depends On' => '의존 대상',
  'Build will resume.' => '빌드가 재개됩니다.',
  'Run build plans: %s.' => '빌드 계획 실행: %s',
  'Declining to make service call because `phabricator.silent` is enabled in configuration.' => '구성에 `phabricator.silent`가 활성화되어 있으므로 서비스 호출을 거부합니다.',
  'Build Logs' => '빌드 로그',
  'The buildable waits for the build, but does not fail if the build fails.' => '빌드가능이 빌드를 기다리지만, 빌드가 실패해도 실패하지 않습니다.',
  'The person (or thing) that started this build.' => '이 빌드를 시작한 사람(또는 사물)입니다.',
  'View Build' => '빌드 보기',
  'Really abort %s build(s)?' => array(
    '정말로 빌드를 중단합니까?',
    '정말로 빌드 %s개를 중단합니까?',
  ),
  '(%d - %d)' => '(%d - %d)',
  'Object "%s" does not implement interface "%s". Autotargets may only be queried for buildable objects.' => '객체 "%s"은(는) 인터페이스 "%s"을(를) 구현하지 않습니다. 자동 대상은 빌드가능 객체에 대해서만 검색할 수 있습니다.',
  '%s enabled this build plan.' => '%s님이 이 빌드 계획을 활성화했습니다.',
  'Stored Bytes' => '저장된 바이트',
  'Work will continue on the build. Really resume?' => '일은 빌드에서 계속됩니다. 정말로 재개할까요?',
  'Log to rebuild.' => '다시 빌드할 로그입니다.',
  'Run By Herald Rules' => 'Herald 규칙에 의해 실행',
  'When a user attempts to `arc land` a revision and that revision has ongoing or failed builds, the default behavior of `arc` is to warn them about those builds and give them a chance to reconsider: they may want to wait for ongoing builds to complete, or fix failed builds before landing the change.

If you do not want to warn users about this build, you can change the warning behavior. This may be useful if the build takes a long time to run (so you do not expect users to wait for it) or the outcome is not important.

This warning is only advisory. Users may always elect to ignore this warning and continue, even if builds have failed.

This setting also affects the warning that is published to revisions when commits land with ongoing or failed builds.' => '사용자가 판에 대해 `arc land`를 시도하고 해당 판에 진행 중이거나 실패한 빌드가 있을 때, `arc`의 기본 동작은 사용자에게 해당 빌드에 대해 경고하고 다시 생각할 기회를 주는 것입니다. 사용자는 진행 중인 빌드가 완료될 때까지 기다리거나 변경 사항을 최종 반영하기 전에 실패한 빌드를 수정하고 싶을 수 있습니다.

이 빌드에 대해 사용자에게 경고하지 않으려면 경고 동작을 변경할 수 있습니다. 빌드 실행 시간이 오래 걸리거나(사용자가 기다릴 것으로 기대하지 않는 경우) 결과가 중요하지 않은 경우 유용할 수 있습니다.

이 경고는 권고 사항일 뿐입니다. 빌드가 실패했더라도 사용자는 언제든지 이 경고를 무시하고 계속 진행하도록 선택할 수 있습니다.

이 설정은 진행 중이거나 실패한 빌드가 있는 상태에서 커밋이 최종 반영될 때 판에 게시되는 경고에도 영향을 줍니다.',
  'Edit Behavior: %s' => '동작 편집: %s',
  'Result of the test.' => '테스트의 결과입니다.',
  'Use "--id" or "--active" to select builds.' => '"--id" 또는 "--active"를 사용해서 빌드를 선택하세요.',
  'Unable to load build log "%s".' => '빌드 로그 "%s"을(를) 로드할 수 없습니다.',
  'Upload a file.' => '파일을 업로드합니다.',
  'Build Plan Prevents Restart' => '빌드 계획이 재시작을 방지',
  'Unable to load API token ("%s")!' => 'API 토큰("%s")을 로드할 수 없습니다',
  'Find out information about build logs.' => '빌드 로그에 대한 정보를 찾습니다.',
  '%s Passed Test(s)' => '통과함 %s개',
  'Sending Messages' => '메시지 보내기',
  'ERROR:' => '오류:',
  'Builtins' => '내장',
  'Build %d' => '빌드 %d',
  'Harbormaster build target "%s" does not exist.' => 'Harbormaster 빌드 대상 "%s"이(가) 존재하지 않습니다.',
  'If you pause all builds, work will halt once the current steps complete. You can resume the builds later.' => '모든 빌드를 일시 정지하면 현재 단계가 완료되는 즉시 작업이 정지됩니다. 나중에 빌드를 재개할 수 있습니다.',
  'Call specifies both "receiver" and "buildTargetPHID". When using the modern "receiver" parameter, omit the deprecated "buildTargetPHID" parameter.' => '호출 시 "receiver"와 "buildTargetPHID" 매개변수를 모두 지정합니다. 최신 "receiver" 매개변수를 사용할 때는 구식민 "buildTargetPHID" 매개변수를 생략하세요.',
  'Host Artifact' => '호스트 아티팩트',
  'No Unit Tests' => '단위 테스트 없음',
  'All Targets' => '모든 대상',
  'Throw an exception.' => '예외를 발생시킵니다.',
  'Query Harbormaster builds.' => 'Harbormaster 빌드를 검색합니다.',
  'View All Builds' => '모든 빌드 보기',
  'If Failed' => '실패한 경우',
  'Builds for this buildable:' => '이 빌드가능에 대한 빌드:',
  'The artifact type.' => '아티팩트 유형입니다.',
  'Search for logs that belong to a particular build target.' => '특정 빌드 대상에 속하는 로그를 검색합니다.',
  'Type the name of a user, application or Herald rule...' => '사용자 이름, 애플리케이션 또는 Herald 규칙을 입력하세요...',
  'This build plan does not have any build steps yet.' => '이 빌드 계획에는 아직 빌드 단계가 없습니다.',
  'Build Targets' => '빌드 대상',
  'Really resume build?' => '정말로 빌드를 재개합니까?',
  'Build generation this target belongs to. When builds restart, a new generation with new targets is created.' => '이 대상이 속한 빌드 세대입니다. 빌드가 재시작되면 새로운 대상이 포함된 새로운 세대가 생성됩니다.',
  'External Link' => '외부 링크',
  'You can not pause this build because it has already completed.' => '이 빌드는 이미 완료되었으므로 일시 정지할 수 없습니다.',
  'Unknown build step field "%s"!' => '알 수 없는 필드 단계 필드 "%s"!',
  'URI "%s" does not have an allowable protocol. Configure protocols in `%s`. Allowed protocols are: %s.' => 'URI "%s"에 허용되는 프로토콜이 없습니다. `%s`에서 프로토콜을 구성하세요. 허용되는 프로토콜은 다음과 같습니다: %s.',
  'Wait for Previous Commits to Build' => '이전 커밋이 빌드될 때까지 기다림',
  'Disable Plan' => '계획 비활성화',
  'Enable this build plan?' => '이 빌드 계획을 활성화합니까?',
  'Drydock Working Copy' => 'Drydock 작업 사본',
  'This buildable has no builds, so you can not issue any commands.' => '이 빌드가능에는 빌드가 없으므로 명령을 실행할 수 없습니다.',
  'Show More (%s Bytes)' => '더 보기 (%s바이트)',
  'The overall state of a buildable (like a commit or revision) is normally the aggregation of the individual states of all builds that have run against it.

Buildables are "building" until all builds pass (which changes them to "pass"), or any build fails (which changes them to "fail").

You can change this behavior if you do not want to wait for this build, or do not care if it fails.' => '빌드가능(커밋 또는 리비전 등)의 전체 상태는 일반적으로 그에 대해 실행된 모든 빌드의 개별 상태를 집계한 것입니다.

빌드가능은 모든 빌드가 통과할 때까지 "빌드 중" 상태이고(그러면 "통과"로 변경됨), 빌드 하나라도 실패하면 "실패"로 변경됩니다.

이 빌드를 기다리고 싶지 않거나, 실패해도 상관없다면 이 동작을 변경할 수 있습니다.',
  'The build may be restarted if it has failed.' => '빌드가 실패한 경우에 재시작을 허용합니다.',
  'A build inherits policies from its buildable.' => '빌드는 빌드가능으로부터 정책을 상속받습니다.',
  'You can not abort this build because it is already aborting.' => '이 빌드는 이미 중단 중이므로 중단할 수 없습니다.',
  'Arcanist Unit Results' => 'Arcanist 단위 결과',
  'This build is already restarting. You can not reissue a restart command to a restarting build.' => '이 빌드는 이미 재시작 중입니다. 재시작 중인 빌드에 대해 재시작 명령을 다시 실행할 수 없습니다.',
  'The following variables can be used in most fields. To reference a variable, use `%s` in a field.' => '다음 변수들은 대부분의 필드에서 사용할 수 있습니다. 변수를 참조하려면 필드에서 `%s`을(를) 사용하세요.',
  'This engine is used to edit Harbormaster build plans.' => '이 엔진은 Harbormaster 빌드 계획을 편집하는 데 사용됩니다.',
  'This function definition is not a haiku.' => '이 함수 정의는 하이쿠가 아닙니다.',
  'You can not resume this build because it is already resuming.' => '이 빌드는 이미 재개 중이므로 재개할 수 없습니다.',
  '(null)' => '(null)',
  'Progress on this build will be discarded and the build will restart. Side effects of the build will occur again. Really restart build?' => '이번 빌드의 진행 상황이 모두 버려지고 빌드가 재시작됩니다. 빌드의 부작용이 다시 발생할 수 있습니다. 정말로 빌드를 재시작합니까?',
  'Search for builds by buildable status.' => '빌드를 빌드가능 상태로 검색합니다.',
  'Abort Builds' => '빌드 중지',
  'Upload From Host' => '호스트에서 업로드',
);
  }

}
