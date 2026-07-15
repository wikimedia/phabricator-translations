<?php

final class PhabricatorConfigKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
  'When a user takes an action which generates an email notification (like
commenting on a Differential revision), the "From" address can either be set
to the user\'s email address (like "alincoln@example.com") or the
"metamta.default-address" address.

The user experience is generally better if the user\'s real address is used as
the "From" header value, since the messages are easier to organize when they
appear in mail clients, but this will only work if the server is authorized to
send email on behalf of the "From" domain. Practically, this means:

  - If you are doing an install for Example Corp and all the users will have
    corporate @corp.example.com addresses and any hosts this software is running
    on are authorized to send email from corp.example.com, you can enable this
    to make the user experience a little better.
  - If you are doing an install for an open source project and your users will
    be registering via third-party services and/or using personal email
    addresses, you probably should not enable this or all of your outgoing
    email might vanish into SFP blackholes.
  - If your install is anything else, you\'re safer leaving this off, at least
    initially, since the risk in turning it on is that your outgoing mail will
    never arrive.' => '사용자가 이메일 알림을 생성하는 동작을 수행할 때(예: Differential 판에 댓글 작성), "발신인" 주소는 사용자의 이메일 주소(예: "alincoln@example.com") 또는 "metamta.default-address" 주소로 설정될 수 있습니다.

사용자의 실제 주소를 "발신인" 헤더 값으로 사용하면 메일 클라이언트에서 메시지를 정리하기 쉬워져 일반적으로 사용자 경험이 더 좋습니다. 하지만 이는 서버가 해당 "발신인" 도메인을 대신해 이메일을 보낼 권한이 있는 경우에만 동작합니다. 실제로는 다음을 의미합니다:

  - Example Corp 설치를 진행 중이고 모든 사용자가 corporate @corp.example.com 주소를 가지며 이 소프트웨어가 실행되는 모든 호스트가 corp.example.com에서 이메일을 보낼 권한이 있다면, 사용자 경험을 조금 더 좋게 하기 위해 이 옵션을 활성화할 수 있습니다.
  - 오픈 소스 프로젝트 설치를 진행 중이고 사용자가 서드파티 서비스로 등록하거나 개인 이메일 주소를 사용할 예정이라면, 이 옵션을 활성화하지 않는 것이 좋습니다. 그렇지 않으면 발신 이메일이 모두 SFP 블랙홀로 사라질 수 있습니다.
  - 그 밖의 설치라면 적어도 처음에는 이 옵션을 꺼 두는 것이 더 안전합니다. 이 옵션을 켰을 때의 위험은 발신 메일이 전혀 도착하지 않을 수 있다는 점입니다.',
  'When users write comments which have URIs, they will be automatically turned into clickable links if the URI protocol appears in this set.

This set of allowed protocols is primarily intended to prevent security issues with "javascript:" and other potentially dangerous URI handlers.

This set is also used to enforce valid redirect URIs. This service will refuse to issue a HTTP "Location" redirect to a URI with a protocol not on this set.

Usually, "http" and "https" should be present in this set. If you remove one or both protocols, some features which rely on links or redirects may not work.' => '사용자가 URI가 포함된 댓글을 작성할 때, 해당 URI 프로토콜이 이 목록에 포함되어 있으면 자동으로 클릭 가능한 링크로 변환됩니다.

이 허용 프로토콜 목록은 주로 "javascript:" 및 기타 잠재적으로 위험한 URI 핸들러로 인한 보안 문제를 방지하기 위한 것입니다.

또한 이 목록은 유효한 넘겨주기 URI를 적용하는 데 사용됩니다. 이 서비스는 이 목록에 없는 프로토콜을 사용하는 URI로의 HTTP "위치" 넘겨주기를 거부합니다.

일반적으로 "http"와 "https"는 이 목록에 포함되어야 합니다. 하나 또는 두 프로토콜을 모두 제거하면 링크 또는 넘겨주기에 의존하는 일부 기능이 작동하지 않을 수 있습니다.',
  'The configuration value "%s" is locked (so it can not be edited from the web UI), but has a database value. Usually, this means that it was previously not locked, you set it using the web UI, and it later became locked.

You should copy this configuration value to a local configuration source (usually by using %s) and then remove it from the database with the command below.

For more information on locked and hidden configuration, including details about this setup issue, see %s.

This database value is currently respected, but a future version of the software will stop respecting database values for locked configuration options.' => '구성 값 "%s"이(가) 잠겨 있습니다(웹 UI에서 편집할 수 없음). 하지만 데이터베이스에는 값이 저장되어 있습니다. 일반적으로 이는 이전에는 잠겨 있지 않았지만 웹 UI를 사용하여 설정한 후 잠기게 되었음을 의미합니다.

이 구성 값을 로컬 구성 소스(일반적으로 %s 사용)에 복사한 다음 아래 명령을 사용하여 데이터베이스에서 제거해야 합니다.

잠긴 구성 및 숨겨진 구성에 대한 자세한 내용(이 설정 문제에 대한 세부 정보 포함)은 %s을(를) 참조하세요.

현재는 이 데이터베이스 값이 적용되지만, 향후 소프트웨어 버전에서는 잠긴 구성 옵션에 대한 데이터베이스 값이 더 이상 적용되지 않습니다.',
  'Review and modify configuration settings.' => '구성 설정을 검토하고 수정합니다.',
  'Improve security by configuring an alternate file domain.' => '대체 파일 도메인을 구성하여 보안을 강화하세요.',
  'Client Server' => '클라이언트 서버',
  'Or:' => '또는:',
  'Listeners receive callbacks when interesting things occur.' => '리스너는 흥미로운 일이 발생할 때 콜백을 수신합니다.',
  'Update configuration in the database instead of in local configuration.' => '로컬에 있는 구성 대신 데이터베이스에 있는 구성을 업데이트합니다.',
  'Column/Key' => '열/키',
  'Customize the logo and wordmark text in the header.' => '헤더에 로고와 워드마크 텍스트를 맞춤 설정합니다.',
  'Configuring File Storage' => '파일 스토리지 구성',
  '%s / %s' => '%s / %s',
  'Address ranges of cluster hosts.' => '클러스터 호스트의 주소 범위입니다.',
  'This request did not include a "Host" header. This may mean that your webserver (like nginx or apache) is misconfigured so the "Host" header is not making it to this software, or that you are making a raw request without a "Host" header using a tool or library.

If you are using a web browser, check your webserver configuration. If you are using a tool or library, check how the request is being constructed.

It is also possible (but very unlikely) that some other network device (like a load balancer) is stripping the header.

Requests must include a valid "Host" header.' => '이 요청에는 "Host" 헤더가 포함되어 있지 않습니다. 이는 웹 서버(예: Nginx 또는 Apache) 구성이 잘못되어 "Host" 헤더가 이 소프트웨어에 전달되지 않거나, 도구 또는 라이브러리를 사용하여 "Host" 헤더 없이 원시 요청을 보내고 있음을 의미할 수 있습니다.

웹 브라우저를 사용하는 경우 웹 서버 구성을 확인하세요. 도구 또는 라이브러리를 사용하는 경우 요청 구성 방식을 확인하세요.

또한 다른 네트워크 장치(예: 로드 밸런서)에서 헤더를 제거하는 경우도 있을 수 있지만 가능성은 매우 낮습니다.

요청에는 유효한 "Host" 헤더가 포함되어야 합니다.',
  'Memory Usage' => '메모리 사용량',
  'The request body that was sent began:' => '전송된 요청 본문은 다음과 같이 시작됩니다:',
  'Impersonating users over the API is no longer supported.' => 'API를 통해 다른 사용자를 사칭하는 행위는 더 이상 지원되지 않습니다.',
  'Table' => '테이블',
  'The best available MYSQL implementation is now selected automatically.' => '이제 사용 가능한 최적의 MySQL 구현이 자동으로 선택됩니다.',
  'Ignore Setup Issue' => '설정 문제 무시',
  'This option allows you to enable DarkConsole on every page, even for logged-out users. This is only really useful if you need to debug something on a logged-out page. You should not enable this option in production.

You must enable DarkConsole by setting \'%s\' before this option will have any effect.' => '이 옵션을 사용하면 로그아웃한 사용자를 포함하여 모든 페이지에서 DarkConsole을 활성화할 수 있습니다. 이 기능은 로그아웃한 페이지에서 디버깅이 필요한 경우에만 유용합니다. 프로덕션 환경에서는 이 옵션을 활성화하지 마세요!

이 옵션을 사용하려면 먼저 \'%s\' 값을 설정하여 DarkConsole을 활성화해야 합니다.',
  'Alternative URIs that can access this service.' => '이 서비스에 접근할 수 있는 대체 URI입니다.',
  'Repository %s has unreplicated changes (for %s).' => '저장소 %s에 레플리카 되지 않은 (%s에 대한) 변경 사항이 있습니다.',
  'The controller or workflow which handled the request.' => '요청을 처리한 컨트롤러 또는 워크플로입니다.',
  'Option "%s" is of type "%s", but the value at index "%s" of the list is not "true".' => '옵션 "%s"은(는) 유형 "%s"이지만, 목록의 인덱스 "%s"의 값이 "true"가 아닙니다.',
  'Applications application' => 'Applications 애플리케이션',
  'This server is not configured in cluster mode.' => '이 서버는 클러스터 모드로 구성되어 있지 않습니다.',
  '%s created this configuration entry.' => '%s님이 이 구성 항목을 만들었습니다.',
  'You have enabled pygments and the %s script is available, but does not seem to work.' => 'PyGments가 활성화되어 있고 %s 스크립트를 사용할 수 있지만 작동하지 않는 것 같습니다.',
  'This column is missing a type specification.' => '이 열에는 유형 명세가 누락되었습니다.',
  'The current configuration has these %d value(s):' => array(
    '현재 구성은 이 값을 가지고 있습니다:',
    '현재 구성은 이 값들을 가지고 있습니다:',
  ),
  'Column Has No Specification' => '열에 명세가 없음',
  'On database host "%s", the global "sql_mode" setting does not include the "STRICT_ALL_TABLES" mode. Enabling this mode is recommended to generally improve how MySQL handles certain errors.

Without this mode enabled, MySQL will silently ignore some error conditions, including inserts which attempt to store more data in a column than actually fits. This behavior is usually undesirable and can lead to data corruption (by truncating multibyte characters in the middle), data loss (by discarding the data which does not fit into the column), or security concerns (for example, by truncating keys or credentials).

This software is developed and tested in "STRICT_ALL_TABLES" mode so you should normally never encounter these situations, but may run into them if you interact with the database directly, run third-party code, develop extensions, or just encounter a bug in the software.

Enabling "STRICT_ALL_TABLES" makes MySQL raise an explicit error if one of these unusual situations does occur. This is a safer behavior and prevents these situations from causing secret, subtle, and potentially serious issues later on.

You can find more information about this mode (and how to configure it) in the MySQL manual. Usually, it is sufficient to add this to your "my.cnf" file (in the "[mysqld]" section) and then restart "mysqld":

%s
Note that if you run other applications against the same database, they may not work in strict mode.

If you can not or do not want to enable "STRICT_ALL_TABLES", you can safely ignore this warning. This software will work correctly with this mode enabled or disabled.' => '데이터베이스 호스트 "%s"에서 전역 "sql_mode" 설정에 "STRICT_ALL_TABLES" 모드가 포함되어 있지 않습니다. MySQL이 특정 오류를 처리하는 방식을 전반적으로 개선하려면 이 모드를 활성화하는 것이 좋습니다.

이 모드가 활성화되지 않으면 MySQL은 실제 수용 가능한 용량보다 더 많은 데이터를 열에 저장하려는 삽입 시도와 같은 일부 오류 조건을 무시합니다. 이러한 동작은 일반적으로 바람직하지 않으며 데이터 손상(멀티바이트 문자가 중간에 잘리는 경우), 데이터 손실(열에 맞지 않는 데이터가 버려지는 경우) 또는 보안 문제(예: 키 또는 자격 증명이 잘리는 경우)로 이어질 수 있습니다.

이 소프트웨어는 "STRICT_ALL_TABLES" 모드에서 개발 및 테스트되었으므로 일반적으로 이러한 상황은 발생하지 않지만, 데이터베이스와 직접 상호 작용하거나, 타사 코드를 실행하거나, 확장 기능을 개발하거나, 소프트웨어의 버그를 발견하는 경우 발생할 수 있습니다.

"STRICT_ALL_TABLES"를 활성화하면 이러한 비정상적인 상황이 발생할 경우 MySQL에서 명시적인 오류를 발생시킵니다. 이는 더 안전한 동작이며, 이러한 상황이 나중에 은밀하고 미묘하며 잠재적으로 심각한 문제를 야기하는 것을 방지합니다.

이 모드(및 구성 방법)에 대한 자세한 내용은 MySQL 설명서를 참조하세요. 일반적으로 "my.cnf" 파일의 "[mysqld]" 섹션에 다음 내용을 추가한 후에 "mysqld"를 다시 시작하면 충분합니다:

%s
다른 애플리케이션을 동일한 데이터베이스에서 실행하는 경우 엄격 모드에서 제대로 작동하지 않을 수 있습니다.

"STRICT_ALL_TABLES"를 활성화할 수 없거나 활성화하고 싶지 않은 경우 이 경고를 무시해도 됩니다. 이 소프트웨어는 이 모드가 활성화되거나 비활성화된 상태에서도 올바르게 작동합니다.',
  'Delete configuration in the database instead of in local configuration.' => '로컬 구성 대신 데이터베이스에서 구성을 삭제합니다.',
  'No Email Preferences Link' => '이메일 환경 설정 링크 없음',
  'Marked activity "%s" as completed.' => '활동 "%s"을(를) 완료됨으로 표시했습니다.',
  'The way VCS activity is attributed %s user accounts has changed.' => 'VCS 활동이 %s 사용자 계정에 귀속되는 방식이 변경되었습니다.',
  'Mail.app on OS X Lion won\'t respect threading headers unless the subject is
prefixed with "Re:". If you enable this option, this software will add "Re:" to
the subject line of all mail which is expected to thread. If you\'ve set
\'metamta.one-mail-per-recipient\', users can override this setting in their
preferences.' => 'OS X Lion의 Mail.app은 제목 앞에 "Re:"가 붙어 있지 않으면 스레딩 헤더를 인식하지 않습니다. 이 옵션을 활성화하면 이 소프트웨어는 스레딩될 것으로 예상되는 모든 메일의 제목 줄에 "Re:"를 추가합니다. \'meta.one-mail-per-recipient\'를 설정한 경우 사용자는 환경 설정에서 이 설정을 재정의할 수 있습니다.',
  'Repository %s has unreplicated changes.' => '저장소 %s에 레플리카 되지 않은 변경 사항이 있습니다.',
  'You have \'%s\' enabled in your PHP configuration.

This option is not compatible with this software. Remove \'%s\' from your configuration to continue.' => 'PHP 구정에서 \'%s\'이(가) 활성화되어 있습니다.

이 옵션은 이 소프트웨어와 호환되지 않습니다. 계속하려면 구성에서 \'%s\'을(를) 제거하세요.',
  'The \'%s\' binary on this system has unexpected behavior: it was expected to exit without an error code when passed identical files, but exited with code %d.' => '이 시스템의 \'%s\' 바이너리는 예상치 못한 동작을 보입니다. 동일한 파일을 전달했을 때 오류 코드 없이 종료될 것으로 예상되었지만, 코드 %d(으)로 종료되었습니다.',
  'No active repositories have outstanding errors.' => '현재 활성 저장소 중 미처리된 오류가 있는 저장소는 없습니다.',
  'Array containing list of disabled applications.' => '비활성화된 애플리케이션의 목록을 포함한 배열입니다.',
  'Usage' => '사용 현황',
  'Rebuild Repository Identities' => '저장소 식별 정보 재빌드',
  'Move port information from `%s` to `%s` in your config.' => '구성에서 포트 정보를 `%s` 에서 `%s`(으)로 이동하세요.',
  'This option can not be edited from the web UI. Use %s to adjust garbage collector policies.' => '이 옵션은 웹 UI에서 편집할 수 없습니다. %s을(를) 사용하여 가비지 콜렉터 정책을 조정하세요.',
  'Better Table Engine Available' => '더 나은 테이블 엔진 사용 가능',
  'Set a local configuration value.' => '로컬 구성 값을 설정합니다.',
  'Large file storage has not been configured, which will limit the maximum size of file uploads. See %s for instructions on configuring uploads and storage.' => '대용량 파일 스토리지가 구성되지 않아 파일 업로드 최대 크기가 제한됩니다. 업로드 및 스토리지 구성 방법에 대한 자세한 내용은 %s을(를) 참조하세요.',
  'This option controls whether users can edit account email addresses and profile real names.

If you set things up to automatically synchronize account information from some other authoritative system, you can prevent users from making these edits to ensure information remains consistent across both systems.' => '이 옵션은 사용자가 계정 이메일 주소와 프로필 실명을 수정할 수 있는지 여부를 제어합니다.

다른 공신력 있는 시스템에서 계정 정보를 자동으로 동기화하도록 설정한 경우, 사용자가 이러한 수정을 하지 못하도록 막아 두 시스템 간의 정보 일관성을 유지할 수 있습니다.',
  '%s deleted %s (again?).' => '%s님이 %s을(를) 삭제했습니다 (또?).',
  'Access log format.' => '접근 로그 형식입니다.',
  'Use Pygments to highlight code?' => '코드 강조를 위해서 Pygments를 사용합니까?',
  'Access log location.' => '접근 로그의 위치입니다.',
  'Your webserver is not handling GET parameters properly.' => '웹 서버가 GET 매개변수를 제대로 처리하지 못합니다.',
  'Repository Errors' => '저장소 오류',
  'Option "%s" is of type "%s", but the configured value is not the name of a known class. Valid selections are: %s.' => '옵션 "%s"은(는) 유형 "%s"이지만, 구성된 값은 알려진 클래스의 이름이 아닙니다. 유효한 선택: %s.',
  'The keyring stores master encryption keys. For help with configuring a keyring
and encryption, see **[[ %s | Configuring Encryption ]]**.' => '키링에는 마스터 암호화 키가 저장됩니다. 키링 및 암호화 구성에 대한 도움말은 **[[ %s | 암호화 구성 ]]**을 참조하세요.',
  'Short' => '단축',
  'Large File Storage Not Configured' => '큰 파일 스토리지 구성되지 않음',
  'When email is sent, what format should the software use for users\' email
addresses? Valid values are:

 - `short`: \'gwashington <gwashington@example.com>\'
 - `real`:  \'George Washington <gwashington@example.com>\'
 - `full`: \'gwashington (George Washington) <gwashington@example.com>\'

The default is `full`.' => '이메일을 보낼 때 소프트웨어는 사용자 이메일 주소에 어떤 형식을 사용해야 할 지입니다. 유효한 값은 다음과 같습니다:

 - `short`: \'gwashington <gwashington@example.com>\'
 - `real`:  \'George Washington <gwashington@example.com>\'
 - `full`: \'gwashington (George Washington) 

기본값은 `full`입니다.',
  'The minimum supported version of Mercurial is 2.4, which was released in 2012.' => 'Mercurial의 최소 지원 버전은 2012년에 출시된 2.4입니다.',
  'Use "bin/phd debug ..." to get a detailed daemon execution log.' => '자세한 데몬 실행 로그를 가져오려면 "bin/phd debug ..."를 사용하세요.',
  'Migrating file-based config to more modern config...' => '파일 기반 구성을 더 현대적인 구성으로 이관 중...',
  'Full' => '전체',
  'Run the storage upgrade script to setup databases (host "%s" has not been initialized).' => '데이터베이스를 설정하려면 스토리지 업그레이드 스크립트를 실행하세요 (호스트 "%s"이(가) 초기화되지 않았습니다).',
  'You haven\'t configured mailers yet, so this server won\'t be able to send outbound mail or receive inbound mail. See the configuration setting "cluster.mailers" for details.' => '메일 발송 기능을 아직 구성하지 않았으므로 이 서버는 발신 메일을 보내거나 수신 메일을 받을 수 없습니다. 자세한 내용은 "cluster.mailers" 구성 설정을 참조하세요.',
  'Unrecognized verb: %s' => '인식할 수 없는 동사: %s',
  'WARNING: This is a prototype option and the description below is currently pure
fantasy.

This option allows you to make this service aware of database read replicas so
it can monitor database health, spread load, and degrade gracefully to
read-only mode in the event of a failure on the primary host. For help with
configuring cluster databases, see **[[ %s | %s ]]** in the documentation.' => '경고: 이 옵션은 프로토타입이며 아래 설명은 현재 순전히 상상에 불과합니다.

이 옵션을 사용하면 서비스가 데이터베이스 읽기 복제본을 인식하여 데이터베이스 상태를 모니터링하고, 부하를 분산하고, 기본 호스트에 장애가 발생할 경우 읽기 전용 모드로 정상적으로 전환할 수 있습니다. 클러스터 데이터베이스 구성에 대한 도움말은 설명문서의 **[[ %s | %s ]]**를 참조하세요.',
  'Schemata Issues' => '스키마타 문제',
  'Expected Collation' => '예상된 콜레이션',
  'Option "%s" is of type "%s", but the value is not a list: it is a map with unnatural or sparse keys.' => '옵션 "%s"은(는) 유형 "%s"이지만, 값이 목록이 아닙니다: unnatural 또는 sparse한 키를 가진 맵입니다.',
  'Use Normal HTTP Redirects' => '일반 HTTP 넘겨주기 사용',
  'Configuration key \'%s\' is not set in %s configuration!' => '구성 키 \'%s\'이(가) %s 구성에 설정되어 있지 않습니다!',
  'Multi-Factor Optional' => '다단계 선택',
  'The \'%s\' extension is not installed. Without \'%s\', this server may not be able to determine the MIME types of uploaded files.' => '\'%s\' 확장 기능이 설치되어 있지 않습니다. \'%s\'(이)가 없으면 이 서버에서 업로드된 파일의 MIME 유형을 결정할 수 없습니다.',
  'The configuration option \'%s\' has been removed. You may delete it at your convenience.

%s' => '구성 옵션 \'%s\'이(가) 제거되었습니다. 자유롭게 삭제해도 됩니다.

%s',
  'Disable Pagespeed' => 'Pagespeed 비활성화',
  'Elasticsearch index exists but needs correction.' => '일래스틱서치 인덱스는 존재하지만 수정이 필요합니다.',
  'Nullable' => 'Nullable',
  'No "Host" Header' => '"호스트" 헤더 없음',
  'Activity "%s" did not need to be marked as complete.' => '활동 "%s"은(는) 완료로 표시할 필요가 없었습니다.',
  'SSH error log location.' => 'SSH 오류 로그의 위치입니다.',
  'The translation implementation has changed and providers are no longer used or supported.' => '번역 구현이 변경되어 더 이상 번역 서비스 제공자를 사용하거나 지원하지 않습니다.',
  'Option "%s" is of type "%s", but the value you provided is not a valid JSON list. When setting a list option from the command line, specify the value in JSON. You may need to quote the value for your shell (for example: \'["a", "b", ...]\').' => '옵션 "%s"은(는) 유형 "%s"이지만, 지정한 값은 유효한 JSON 목록이 아닙니다. 명령줄에서 목록 옵션을 설정할 때, JSON에서 값을 지정하세요. 셸에서 값을 인용해야 할 수도 있습니다 (예: \'["a", "b", ...]\').',
  'Format for the SSH access log. Use %s to set the path. Available variables are:' => 'SSH 접속 로그 형식입니다. %s을(를) 사용해서 경로를 설정하세요. 사용 가능한 변수:',
  'This table can use a better table engine.' => '이 테이블은 더 나은 테이블 엔진을 사용할 수 있습니다.',
  'PHP post_max_size Not Configured' => 'PHP post_max_size 구성되지 않음',
  'Can Not Connect to MySQL' => 'MySQL에 연결할 수 없음',
  'Option "%s" is of type "%s", but the configured value is not a boolean.' => '옵션 "%s"은(는) 유형 "%s"이지만, 구성된 값은 불리언이 아닙니다.',
  'Disable developer mode' => '개발자 모드 비활성화',
  'Identify the component in your webserver configuration which is decompressing or mangling requests and disable it. This software will not work properly until you do.' => '웹 서버 구성에서 요청을 압축 해제하거나 변형하는 구성 요소를 찾아 비활성화하세요. 그렇게 하지 않으면 이 소프트웨어가 제대로 작동하지 않습니다.',
  'Profile 0.1%% of all requests' => '모든 요청의 0.1%%만 분석',
  'This option has been replaced with the more granular option `%s`.' => '이 옵션은 보다 세분화된 옵션인 `%s`(으)로 대체되었습니다.',
  'Require all users to configure multi-factor authentication.' => '모든 사용자에게 다단계 인증을 구성하도록 요구합니다.',
  'Stop this software from sending any email, etc.' => '이 소프트웨어가 이메일 등을 보내는 것을 중지합니다.',
  'The \'%s\' binary could not be found. Symlink it into \'%s\', or set the webserver\'s %s environmental variable to include the directory where it resides, or add that directory to \'%s\' in configuration.' => '\'%s\' 바이너리를 찾을 수 없습니다. \'%s\'로 Symlink하거나, 웹서버의 환경 변수 %s에 해당 바이너리가 있는 디렉터리를 포함시키거나, 구성의 \'%s\'에 해당 디렉터리를 추가하세요.',
  'Configuration Guide: Locked and Hidden Configuration' => '구성 가이드: 잠긴 및 숨겨진 구성',
  'This option enables verbose error reporting (stack traces, error callouts) and forces disk reads of static assets on every reload.' => '이 옵션을 사용하면 자세한 오류 보고(스택 추적, 오류 메시지)가 활성화되고 페이지를 다시 로드할 때마다 정적 리소스에 대한 디스크 읽기가 강제됩니다.',
  'Wrote configuration key "%s" to local storage (in file "%s").' => '로컬 스토리지에 구성 키 "%s"를 (파일 %s에) 작성했습니다.',
  'These alternative URIs will be able to access \'normal\' pages on this install. Other features such as OAuth won\'t work. The major use case for this is moving installs across domains.' => '이러한 대체 URI를 사용하면 해당 설치의 \'일반\' 페이지에 액세스할 수 있습니다. OAuth와 같은 다른 기능은 작동하지 않습니다. 이 기능의 주요 사용 사례는 도메인 간 설치를 이전하는 것입니다.',
  '(%s%s) %s' => '(%s%s) %s',
  'Nonreplicating Replica' => '레플리카 하지 않는 레플리카',
  'Run these %d command(s):' => array(
    '다음 명령을 실행하세요:',
    '다음 명령들을 실행하세요:',
  ),
  'Pattern' => '패턴',
  'Unknown \'%s\' Version' => '알 수 없는 \'%s\' 버전',
  'Require administrators to unlock the authentication provider configuration from the CLI before it can be edited.' => '인증 제공자 구성을 편집하려면 먼저 관리자가 CLI에서 잠금을 해제해야 하도록 요구합니다.',
  'Define one or more mail transmission services. For help with configuring
mailers, see **[[ %s | %s ]]** in the documentation.' => '하나 이상의 메일 전송 서비스를 정의합니다. 메일러 구성에 대한 도움말은 설명문서의 **[[ %s | %s ]]**를 참조하세요.',
  'Feed Hooks Deprecated' => '피드 훅이 구식임',
  'Purge Caches' => '캐시 새로 고침',
  'Configure services to run on a cluster of hosts.' => '호스트 클러스터에서 실행되도록 서비스를 구성합니다.',
  'Adjust %s in your PHP configuration to at least 32MB. When set to smaller value, large file uploads may not work properly.' => 'PHP 구성에서 %s을(를) 최소 32MB로 조정하세요. 이보다 작은 값으로 설정하면 대용량 파일 업로드가 제대로 작동하지 않을 수 있습니다.',
  'Show Recipient Hints' => '수신자 힌트 표시',
  'Recaptcha private key, obtained by signing up for Recaptcha.' => 'Recaptcha 가입 시 발급받는 Recaptcha 개인 키입니다.',
  'MySQL InnoDB Engine Not Available' => 'MySQL InnoDB 엔진을 사용할 수 없음',
  'Database host "%s" does not support the %s option. You will not be able to find search results for common words. You can gain access to this option by upgrading MySQL to a more recent version.

You can ignore this warning if you plan to configure Elasticsearch later, or aren\'t concerned about searching for common words.' => '데이터베이스 호스트 "%s"은(는) %s 옵션을 지원하지 않습니다. 일반적인 단어에 대한 검색 결과를 찾을 수 없습니다. 더 최신 버전의 MySQL로 업그레이드하면 이 옵션을 사용할 수 있습니다.

나중에 일래스틱서치를 구성할 계획이거나 일반적인 단어 검색이 중요하지 않다면 이 경고를 무시할 수 있습니다.',
  'Proto' => '프로토콜',
  'HTTP Strict Transport Security (HSTS) sends a header which instructs browsers that the site should only be accessed over HTTPS, never HTTP. This defuses an attack where an adversary gains access to your network, then proxies requests through an unsecured link.

Do not enable this option if you serve (or plan to ever serve) unsecured content over plain HTTP. It is very difficult to undo this change once users\' browsers have accepted the setting.' => 'HTTP Strict Transport Security(HSTS)는 사이트가 HTTP가 아니라 HTTPS로만 접근되어야 한다고 브라우저에 지시하는 헤더를 보냅니다. 이는 공격자가 사용자의 네트워크에 접근한 뒤 보안되지 않은 링크를 통해 요청을 프록시하는 공격을 완화합니다.

일반 HTTP를 통해 보안되지 않은 콘텐츠를 제공하고 있거나 앞으로 제공할 계획이 있다면 이 옵션을 활성화하지 마세요. 사용자의 브라우저가 이 설정을 받아들인 뒤에는 이 변경을 되돌리기가 매우 어렵습니다.',
  '(No Value Configured)' => '(구성된 값 없음)',
  'Allow editing' => '편집 허용',
  'Configure full-text search services.' => '전문 검색 서비스를 구성합니다.',
  'The HTTP method.' => 'HTTP 메서드입니다.',
  'The webserver\'s host name.' => '웹서버의 호스트 이름입니다.',
  'PHP Timezone Invalid' => 'PHP 시간대가 유효하지 않음',
  'The environmental variable %s is empty. This server needs to execute some system commands, like `%s`, `%s`, `%s`, and `%s`. To execute these commands, the binaries must be available in the webserver\'s %s. You can set additional paths in configuration.' => '환경 변수 %s이(가) 비어 있습니다. 이 서버는 `%s`, `%s`, `%s`, 및 `%s`와(과) 같은 시스템 명령을 실행해야 합니다. 이러한 명령을 실행하려면 해당 바이너리 파일이 웹 서버의 %s에 있어야 합니다. 구성에서 추가 경로를 설정할 수 있습니다.',
  'Branchpoint' => '브랜치포인트',
  'Integration with Recaptcha' => 'Recaptcha와 연동',
  'Global cap for size of generated emails (bytes).' => '생성된 이메일 크기에 대한 전역 제한(바이트)입니다.',
  'Access Logs' => '접근 로그',
  'This server has a known bad version of "%s" installed ("%s"). This version is not supported, or contains important bugs or security vulnerabilities which are fixed in a newer version.' => '이 서버에는 "%s"의 알려진 좋지 않은 버전("%s")이 설치되어 있습니다. 이 버전은 지원되지 않거나, 최신 버전에서 수정된 중요한 버그 또는 보안 취약점을 포함하고 있습니다.',
  'URI where this software is installed.' => '이 소프트웨어가 설치되어 있는 URI입니다.',
  'Character Set' => '문자 집합',
  'Formats' => '포맷',
  'Ambiguous Leader' => '모호한 리더',
  'Config key "%s" is locked and can only be set in local configuration. To learn more, see "%s" in the documentation.' => '구성 키 "%s"은(는) 잠겨 있으며 로컬 설정에서만 설정할 수 있습니다. 자세한 내용은 설명문서의 "%s"를 참조하세요.',
  'This option can help debug pages which are taking a very long time (more than 30 seconds) to render.

If a page is slow to render (but taking less than 30 seconds), the best tools to use to figure out why it is slow are usually the DarkConsole service call profiler and XHProf.

However, if a request takes a very long time to return, some components (like Apache, nginx, or PHP itself) may abort the request before it finishes. This can prevent you from using profiling tools to understand page performance in detail.

In these cases, you can use this option to force the page to abort after a smaller number of seconds (for example, 10), and dump a useful stack trace. This can provide useful information about why a page is hanging.

To use this option, set it to a small number (like 10), and reload a hanging page. The page should exit after 10 seconds and give you a stack trace.

You should turn this option off (set it to 0) when you are done with it. Leaving it on creates a small amount of overhead for all requests, even if they do not hit the time limit.' => '이 옵션은 문서 렌더링 시간이 매우 오래 걸리는(30초 이상) 문서를 디버깅하는 데 도움이 될 수 있습니다.

문서 렌더링 속도가 느린 경우(30초 미만인 경우), 속도 저하 원인을 파악하는 데 가장 적합한 도구는 일반적으로 DarkConsole 서비스 호출 프로파일러와 XHProf 입니다.

하지만 요청 응답 시간이 매우 오래 걸리는 경우, Apache, Nginx 또는 PHP 자체와 같은 일부 구성 요소가 요청 완료 전에 요청을 중단할 수 있습니다. 이로 인해 프로파일링 도구를 사용하여 문서 성능을 자세히 분석할 수 없게 될 수 있습니다.

이러한 경우, 이 옵션을 사용하여 특정 시간(예: 10초) 후에 문서 렌더링을 중단하고 유용한 스택 추적 정보를 출력하도록 설정할 수 있습니다. 이를 통해 문서가 멈추는 이유에 대한 유용한 정보를 얻을 수 있습니다.

이 옵션을 사용하려면 작은 값(예: 10초)으로 설정하고 멈춘 문서를 다시 로드하세요.

문서는 10초 후에 종료되고 스택 트레이스를 표시합니다. 사용이 끝나면 이 옵션을 끄십시오(값을 0으로 설정). 이 옵션을 켜둔 상태로 두면 시간 제한에 도달하지 않는 요청에도 약간의 오버헤드가 발생합니다.',
  'This option has been renamed to `%s` to emphasize the unfinished nature of many prototype applications. Your existing setting has been migrated.' => '이 옵션은 많은 프로토타입 애플리케이션의 미완성된 특성을 강조하기 위해 `%s`(으)로 이름이 변경되었습니다. 기존 설정은 그대로 유지되었습니다.',
  'Clients' => '클라이언트',
  'Expected Columns' => '예상된 열',
  'Taskmasters now use an autoscaling pool. You can configure the pool size with `%s`.' => 'Taskmasters는 이제 자동 확장 풀을 사용합니다. `%s` 명령을 사용하여 풀 크기를 구성할 수 있습니다.',
  'This configuration is locked and can not be edited from the web interface. Use %s in %s to edit it.' => '이 구성은 잠겨 있어 웹 인터페이스에서 편집할 수 없습니다. 편집하려면 %2$s에서 %s을(를) 사용하세요.',
  'Multiple %s subclasses contain an option named \'%s\'!' => '여러 %s개의 하위 클래스에 \'%s\' 이라는 이름의 옵션이 포함되어 있습니다!',
  'Pygments should be installed and enabled to provide advanced syntax highlighting.' => '고급 구문 강조 기능을 사용하려면 Pygments를 설치하고 활성화해야 합니다.',
  'If true, allow MetaMTA to change mail subjects to put text like \'[Accepted]\' and
\'[Commented]\' in them. This makes subjects more useful, but might break
threading on some clients. If you\'ve set \'%s\', users can override this setting
in their preferences.' => '참으로 설정하면 MetaMTA가 메일 제목에 \'[Accepted]\' 및 \'[Commented]\'와 같은 텍스트를 추가하여 제목을 변경할 수 있습니다. 이렇게 하면 제목이 더 유용해지지만 일부 클라이언트에서는 스레딩이 제대로 작동하지 않을 수 있습니다. \'%s\'을(를) 설정한 경우 사용자는 환경 설정에서 이 설정을 덮어쓸 수 있습니다.',
  'Recaptcha public key, obtained by signing up for Recaptcha.' => 'Recaptcha 가입 시 발급받는 Recaptcha 공개 키입니다.',
  'Database Servers' => '데이터베이스 서버',
  'Specify a configuration key to delete.' => '삭제할 구성 키를 지정하세요.',
  'Search Servers' => '검색 서버',
  'This web host ("%s") is set to a very different time than a database host "%s".' => '이 웹 호스트("%s")는 데이터베이스 호스트 "%s"와(과) 매우 다른 시간으로 설정되어 있습니다.',
  'Send Mail To Each Recipient' => '각 수신자에게 메일 보내기',
  'The MySQL "local_infile" option is enabled. This option is unsafe.' => 'MySQL의 "local_infile" 옵션이 활성화되어 있습니다. 이 옵션은 안전하지 않습니다.',
  'Either the schema for Elasticsearch has changed or Elasticsearch created the index automatically. Use the following command to rebuild the index.' => '일래스틱서치의 스키마가 변경되었거나 일래스틱서치가 인덱스를 자동으로 생성했을 수 있습니다. 다음 명령어를 사용하여 인덱스를 다시 생성하세요.',
  'Remove Custom Logo' => '사용자 지정 로고 제거',
  'No notification servers are configured.' => '구성된 알림 서버가 없습니다.',
  '(Not Supported)' => '(미지원)',
  'Nonstandard port' => '비표준 포트',
  'Don\'t embed Commons videos' => '공용 동영상을 삽입하지 않음',
  'This configuration has been removed. You can safely delete it.

%s' => '이 설정은 제거되었습니다. 안심하고 삭제해도 됩니다.

%s',
  'Options relating to translations.' => '번역 관련 옵션입니다.',
  'Configure the UI, including colors.' => '색상을 포함한 UI를 구성합니다.',
  'The \'%s\' extension has support for only some image types. This server will be unable to process images of the missing types until you build \'%s\' with support for them. Supported types: %s. Missing types: %s.' => '\'%s\' 확장 기능은 일부 이미지 유형만 지원합니다. 해당 유형을 지원하도록 \'%s\'을(를) 빌드하기 전까지는 이 서버에서 지원되지 않는 유형의 이미지를 처리할 수 없습니다. 지원되는 유형: \'%s\'. 누락된 유형: \'%s\'.',
  'Use Private Replies (More Secure)' => '비공개 답변을 사용 (높은 보안)',
  'Treat all \'*.x.bak\' file as \'.x\'. NOTE: We map to capturing group 1 by specifying the mapping as \'1\'' => '모든 \'*.x.bak\' 파일을 \'.x\'로 취급합니다. 참고: 매핑을 \'1\'로 지정하여 캡처 그룹 1에 매핑합니다',
  'Other Services' => '기타 서비스',
  'Specify a system user to run the daemons as. Primarily, this user will own the working copies of any repositories that this software imports or manages. This option is new and experimental.' => '데몬을 실행할 시스템 사용자를 지정합니다. 이 사용자는 기본적으로 이 소프트웨어가 가져오거나 관리하는 모든 저장소의 작업 사본에 대한 소유권을 갖게 됩니다. 이 옵션은 새로 추가된 실험적인 기능입니다.',
  'Send as User Taking Action' => '작업을 수행하는 사용자로써 전송',
  'Security options.' => '보안 옵션입니다.',
  'Option "%s" is of type "%s", and should be specified on the command line as a JSON list of values. You may need to quote the value for your shell (for example: \'["a", "b", ...]\').' => '옵션 "%s"은(는) 유형 "%s"이며, 값의 JSON 목록으로써 명령줄에 지정되어야 합니다. 셸에서 값을 인용해야 할 수도 있습니다 (예: \'["a", "b", ...]\').',
  'Expected Unique' => '고유 예상됨',
  'Configuring a Preamble Script' => '프리앰블 스크립트를 구성하기',
  'Default Partition' => '기본 파티션',
  'Domain used for reply email addresses.' => '회신 이메일 주소에 사용되는 도메인입니다.',
  'You can find more information about rebuilding the search index here: %s' => '검색 인덱스 재빌드에 대한 자세한 정보는 여기에서 확인할 수 있습니다: %s',
  'Prevent editing' => '편집 방지',
  'Whitelist 1.2.3.*' => '허용 목록 1.2.3.*',
  'Control how user names are rendered in mail.' => '메일에서 사용자 이름이 렌더링되는 방식을 제어합니다.',
  'This configuration is no longer relevant because daemons restart automatically on configuration changes.' => '구성 변경 시 데몬이 자동으로 재시작되므로 이 구성은 더 이상 관련이 없습니다.',
  'The Differential revision list view age UI elements have been removed to simplify the interface.' => '인터페이스 간소화를 위해 Differential 판 목록 보기의 UI 요소들이 제거되었습니다.',
  'Config option \'%s\' is invalid. The URI must NOT have a path, e.g. \'%s\' is OK, but \'%s\' is not. This software must be installed on an entire domain; it can not be installed on a path.' => '구성 옵션 \'%s\'이(가) 잘못되었습니다. URI에는 경로가 포함되어서는 안 됩니다. 예를 들어 \'%s\'은(는) 괜찮지만 \'%s\'은(는) 안 됩니다. 이 소프트웨어는 전체 도메인에 설치해야 하며 특정 경로에 설치할 수 없습니다.',
  'Separate values with newlines.' => '값들을 줄바꿈으로 구분하세요.',
  'The request body that the server received had already been decompressed. This strongly suggests your webserver is configured to decompress requests inline, before they reach PHP.' => '서버가 수신한 요청 본문은 이미 압축 해제된 상태였습니다. 이는 웹 서버가 PHP에 도달하기 전에 요청을 인라인으로 압축 해제하도록 구성되어 있음을 강력하게 시사합니다.',
  'Define one or more fulltext storage services. Here you can configure which
hosts will handle fulltext search queries and indexing. For help with
configuring fulltext search clusters, see **[[ %s | %s ]]** in the
documentation.' => '하나 이상의 전문 스토리지 서비스를 정의합니다. 여기에서 전문 검색 쿼리 및 인덱싱을 처리할 호스트를 구성할 수 있습니다. 전문 검색 클러스터 구성에 대한 도움말은 설명문서의 **[[ %s | %s ]]**을(를) 참조하세요.',
  'Exception Handlers' => '예외 처리기',
  'This schema has the wrong nullable setting.' => '이 스키마에는 잘못된 Nullable 설정이 있습니다.',
  'Config option \'%s\' is invalid. The URI must start with \'%s\' or \'%s\'.' => '구성 옵션 \'%s\'이(가) 유효하지 않습니다. URI는 \'%s\' 또는 \'%s\'(으)로 시작해야 합니다.',
  'Unsupported/Insecure "%s" Version' => '지원되지 않는/안전하지 않은 "%s" 버전',
  'This option does not have a custom type!' => '이 옵션은 사용자 지정 유형을 가지고 있지 않습니다!',
  'Require administrators to approve new accounts.' => '새 계정 생성에 관리자 승인을 요구합니다.',
  'Authentication Configuration Unlocked' => '인증 구성 잠금 해제됨',
  'Health' => '상태',
  'System user to run daemons as.' => '데몬을 이 시스템 사용자로써 실행합니다.',
  'When set to `true`, the authentication provider configuration for this instance can not be modified without first running `bin/auth unlock` from the command line. This is to reduce the security impact of a compromised administrator account. 

After running `bin/auth unlock` and making your changes to the authentication provider config, you should run `bin/auth lock`.' => '이 옵션을 `true`로 설정하면 명령줄에서 `bin/auth unlock`을 실행하지 않고는 이 인스턴스의 인증 공급자 구성을 수정할 수 없습니다. 이는 관리자 계정이 손상되었을 때 발생할 수 있는 보안 문제를 줄이기 위한 것입니다.

`bin/auth unlock`을 실행하고 인증 공급자 구성을 변경한 후에는 `bin/auth lock`을 실행해야 합니다.',
  'Unknown schema status "%s"!' => '알 수 없는 스키마 상태 "%s"!',
  'MySQL May Run Slowly' => 'MySQL이 느리게 실행될 수 있음',
  'Manage extensions.' => '확장 기능을 관리합니다.',
  'Too many arguments: expected one key.' => '인수가 너무 많습니다: 키 하나만을 예상했습니다.',
  'List of Users Without MFA' => 'MFA가 없는 사용자 목록',
  'IMPORTANT: The upstream does not provide support for prototype applications.

This platform includes prototype applications which are in an **early stage of development**. By default, prototype applications are disabled, because they are often not yet developed enough to be generally usable. You can enable this option to enable them if you\'re developing applications or are interested in previewing upcoming features.

To learn more about prototypes, see [[ %s | %s ]].

After enabling prototypes, you can selectively disable them (like normal applications).' => '중요: 상위 프로젝트에서는 프로토타입 애플리케이션을 지원하지 않습니다.

이 플랫폼에는 **개발 초기 단계**의 프로토타입 애플리케이션이 포함되어 있습니다. 프로토타입 애플리케이션은 일반적으로 사용 가능한 수준으로 개발되지 않은 경우가 많으므로 기본적으로 활성화되지 않습니다. 애플리케이션을 개발 중이거나 향후 기능을 미리 보고 싶은 경우 이 옵션을 활성화하여 프로토타입을 활성화할 수 있습니다.

프로토타입에 대한 자세한 내용은 [[ %s | %s ]]를 참조하세요.

프로토타입을 활성화한 후에는 일반 애플리케이션처럼 선택적으로 비활성화할 수 있습니다.',
  'No "Host" header present in request.' => '요청에 "Host" 헤더가 없습니다.',
  'Value for option "%s" of type "%s" must be either "true" or "false".' => '"%2$s" 유형의 옵션 "%s"에 대한 값은 "true" 또는 "false"여야 합니다.',
  'Storage engines are now discovered automatically at runtime.' => '스토리지 엔진은 이제 런타임에 자동으로 발견됩니다.',
  'This software appears to be installed on a very small EC2 instance (of class "%s") with burstable CPU. This is strongly discouraged. This software regularly needs CPU, and these instances are often choked to death by CPU throttling. Use an instance with a normal CPU instead.' => '이 소프트웨어가 버스터블 CPU를 사용하는 매우 작은 EC2 인스턴스(클래스 "%s")에 설치된 것으로 보입니다. 이는 강력히 권장되지 않습니다. 이 소프트웨어는 정기적으로 CPU가 필요하며, 이러한 인스턴스는 CPU 스로틀링으로 인해 자주 심각하게 제한됩니다. 대신 일반 CPU가 있는 인스턴스를 사용하세요.',
  'Footer configuration is not valid: value must be a list of items.' => '바닥글 구성이 유효하지 않습니다: 값은 항목 목록이어야 합니다.',
  'Edit "%s"' => '"%s" 편집하기',
  'Don\'t embed YouTube videos' => '유튜브 동영상을 삽입하지 않음',
  'Disable PHP %s' => 'PHP %s 비활성화',
  'Configure master encryption keys.' => '마스터 암호화 키를 구성합니다.',
  'Mailers Not Configured' => '메일러가 구성되어 있지 않음',
  'Daemons no longer use PID files.' => '데몬이 더 이상 PID 파일을 사용하지 않습니다.',
  'Database replica "%s" is listed as a replica, but is not currently replicating. You are vulnerable to data loss if the master fails.' => '데이터베이스 레플리카 "%s"이(가) 레플리카로 등록되어 있지만 현재 레플리카 중이 아닙니다. 마스터 데이터베이스가 실패하면 데이터 손실이 발생할 수 있습니다.',
  'Garbage Collectors' => '가비지 콜렉터',
  '%s edited this configuration entry.' => '%s님이 이 구성 항목을 편집했습니다.',
  'The PHP "zip" extension is not installed. This extension is required by certain data export operations, including exporting data to Excel.

To clear this setup issue, install the extension and restart your webserver.

You may safely ignore this issue if you do not plan to export data in Zip archives or Excel spreadsheets, or intend to install the extension later.' => 'PHP "zip" 확장 기능이 설치되어 있지 않습니다. 이 확장 기능은 데이터를 엑셀로 내보내는 것을 포함하여 특정 데이터 내보내기 작업에 필요합니다.

이 설정 문제를 해결하려면 확장 기능을 설치하고 웹서버를 다시 시작하세요.

Zip 압축 파일이나 엑셀 스프레드시트로 데이터를 내보낼 계획이 없으시다면 이 문제를 무시해도 되지만, 그렇지 않다면 나중에 확장 기능을 설치하시는 것이 좋습니다.',
  'To enable the SSH log, specify a path. This log can provide more detailed information about SSH access than a normal SSH log (for instance, it can show logged-in users, commands, and other application data).

If not set, no log will be written.' => 'SSH 로그를 활성화하려면 경로를 지정하세요. 이 로그는 일반 SSH 로그보다 SSH 액세스에 대한 더 자세한 정보를 제공할 수 있습니다(예: 로그인한 사용자, 명령 및 기타 애플리케이션 데이터).

경로를 지정하지 않으면 로그가 기록되지 않습니다.',
  'Send Mail To All Recipients' => '모든 수신자에게 메일 보내기',
  'This software sent itself a test request with an unusual path, to test if your webserver is rewriting paths correctly. The path was not transmitted correctly.

This software sent a request to path "%s", and expected the webserver to decode and rewrite that path so that it received a request for "%s". However, it received a request for "%s" instead.

Verify that your rewrite rules are configured correctly, following the instructions in the documentation. If path encoding is not working properly you will be unable to access files with unusual names in repositories, among other issues.

(This problem can be caused by a missing "B" in your RewriteRule.)' => '이 소프트웨어는 웹 서버가 경로를 올바르게 재작성하는지 테스트하기 위해 특이한 경로를 사용하여 테스트 요청을 보냈습니다. 경로가 올바르게 전송되지 않았습니다.

이 소프트웨어는 경로 "%s"(으)로 요청을 보냈고, 웹 서버가 해당 경로를 디코딩하여 "%s"(으)로 재작성하여 요청을 수신할 것으로 예상했습니다. 그러나 대신 "%s"(으)로 요청을 수신했습니다.

문서의 지침에 따라 재작성 규칙이 올바르게 구성되었는지 확인하세요. 경로 인코딩이 제대로 작동하지 않으면 저장소에서 특이한 이름을 가진 파일에 액세스할 수 없는 등의 문제가 발생할 수 있습니다.

(이 문제는 RewriteRule에 "B"가 누락된 경우 발생할 수 있습니다.)',
  'Recorded items (sample):' => '기록된 항목 (샘플):',
  'Your install has no current setup issues to resolve.' => '현재 설치에 해결해야 할 설정 문제가 없습니다.',
  'Subschemata Have Failures' => '하위 스키마타에 오류가 있음',
  'Save Config Entry' => '구성 항목 저장',
  '%s of %s' => '%2$s 중 %s',
  'Setup MySQL Schema' => 'MySQL 스키마 설정',
  ' (%s)' => ' (%s)',
  'Not Available' => '사용할 수 없음',
  'If those commands don\'t work, try Google. The process of installing PHP extensions is not specific to this software, and any instructions you can find for installing them on your system should work. On Mac OS X, you might want to try Homebrew.' => '만약 위 명령이 작동하지 않으면 구글 검색을 해보세요. PHP 확장 기능 설치 과정은 이 소프트웨어에만 국한된 것이 아니므로, 사용 중인 시스템에 맞는 설치 방법을 찾아보면 대부분 적용될 것입니다. Mac OS X에서는 Homebrew를 사용해 보는 것도 좋은 방법입니다.',
  'You can disable the hints under "REPLY HANDLER ACTIONS" if users prefer
smaller messages. The actions themselves will still work properly.' => '사용자가 더 작은 메시지를 선호하면 "REPLY HANDLER ACTIONS" 아래의 힌트를 비활성화할 수 있습니다. 작업 자체는 계속 정상적으로 작동합니다.',
  'This option has been removed, you can use Dashboards to provide homepage customization. See T11533 for more details.' => '이 옵션은 제거되었습니다. 이제 대시보드를 사용하여 홈페이지를 사용자 지정할 수 있습니다. 자세한 내용은 T11533을 참조하세요.',
  'Data Cache' => '데이터 캐시',
  'Configure the access logs, which log HTTP/SSH requests.' => 'HTTP/SSH 요청을 기록하는 접근 로그를 구성합니다.',
  '%ss Behind' => '%s초 뒤쳐짐',
  'The PID of the server process.' => '서버 프로세스의 PID입니다.',
  'Config option \'%s\' is invalid. The URI must NOT have a path, e.g. \'%s\' is OK, but \'%s\' is not. This software must be \'.
            \'installed on an entire domain; it can not be installed on a path.' => '구성 옵션 \'%s\'이(가) 잘못되었습니다. URI에는 경로가 포함되어서는 안 됩니다. 예를 들어 \'%s\'은(는) 괜찮지만 \'%s\'은(는) 안 됩니다. 이 소프트웨어는 전체 도메인에 설치해야 하며 특정 경로에 설치할 수 없습니다.',
  'Blacklist subnets to prevent user-initiated outbound requests.' => '사용자가 시작하는 외부 요청을 차단하기 위해 서브넷을 차단 목록을 추가합니다.',
  'When a message is sent to multiple recipients (for example, several reviewers on
a code review), it can either be delieverd as one email to everyone (e.g., "To:
alincoln, usgrant, htaft") or separate emails to each user (e.g., "To:
alincoln", "To: usgrant", "To: htaft"). The major advantages and disadvantages
of each approach are:

  - One mail to everyone:
    - This violates policy controls. The body of the mail is generated without
      respect for object policies.
    - Recipients can see To/Cc at a glance.
    - If you use mailing lists, you won\'t get duplicate mail if you\'re
      a normal recipient and also Cc\'d on a mailing list.
    - Getting threading to work properly is harder, and probably requires
      making mail less useful by turning off options.
    - Sometimes people will "Reply All", which can send mail to too many
      recipients. This software will try not to send mail to users who already
      received a similar message, but can not prevent all stray email arising
      from "Reply All".
    - Not supported with a private reply-to address.
    - Mail messages are sent in the server default translation.
    - Mail that must be delivered over secure channels will leak the recipient
      list in the "To" and "Cc" headers.
  - One mail to each user:
    - Policy controls work correctly and are enforced per-user.
    - Recipients need to look in the mail body to see To/Cc.
    - If you use mailing lists, recipients may sometimes get duplicate
      mail.
    - Getting threading to work properly is easier, and threading settings
      can be customized by each user.
    - "Reply All" will never send extra mail to other users involved in the
      thread.
    - Required if private reply-to addresses are configured.
    - Mail messages are sent in the language of user preference.
' => '메시지가 여러 수신자에게 전송될 때(예: 코드 검토의 여러 검토자), 모든 사람에게 하나의 이메일로 전달될 수도 있고(예: "To: alincoln, usgrant, htaft"), 각 사용자에게 별도의 이메일로 전달될 수도 있습니다(예: "To: alincoln", "To: usgrant", "To: htaft"). 각 방식의 주요 장단점은 다음과 같습니다:

  - 모두에게 하나의 메일:
    - 정책 제어를 위반합니다. 메일 본문이 객체 정책을 고려하지 않고 생성됩니다.
    - 수신자는 수신자/참조 목록을 한눈에 볼 수 있습니다.
    - 메일링 리스트를 사용하는 경우, 일반 수신자이면서 메일링 리스트에도 참조로 포함되어 있어도 중복 메일을 받지 않습니다.
    - 스레딩을 제대로 동작하게 하기가 더 어렵고, 아마도 옵션을 꺼서 메일을 덜 유용하게 만들어야 할 수 있습니다.
    - 사용자가 가끔 "모두에게 답변"을 눌러 너무 많은 수신자에게 메일을 보낼 수 있습니다. 이 소프트웨어는 이미 유사한 메시지를 받은 사용자에게는 메일을 보내지 않으려 하지만, "모두에게 답변"으로 인해 발생하는 모든 불필요한 이메일을 막을 수는 없습니다.
    - 비공개 답신 할 주소와 함께 사용할 수 없습니다.
    - 메일 메시지는 서버 기본 번역으로 전송됩니다.
    - 보안 채널을 통해 전달되어야 하는 메일은 "수신자" 및 "참조" 헤더에서 수신자 목록을 노출합니다.
  - 각 사용자에게 하나의 메일:
    - 정책 제어가 사용자별로 올바르게 동작하고 적용됩니다.
    - 수신자는 수신자/참조 목록을 보려면 메일 본문을 확인해야 합니다.
    - 메일링 리스트를 사용하는 경우, 수신자가 가끔 중복 메일을 받을 수 있습니다.
    - 스레딩을 제대로 동작하게 하기가 더 쉽고, 각 사용자가 스레딩 설정을 맞춤 설정할 수 있습니다.
    - "모두에게 답변"은 스레드에 관련된 다른 사용자에게 추가 메일을 보내지 않습니다.
    - 비공개 답신 할 주소가 구성된 경우 필요합니다.
    - 메일 메시지는 사용자가 선호하는 언어로 전송됩니다.',
  'No Outbound Requests' => '외부 요청 허용 안함',
  'Primary install URI, for multi-environment installs.' => '다중 환경 설치를 위한 기본 설치 URI입니다.',
  'Global access controls now exist, see `%s`.' => '이제 전역 접근 제어 기능이 존재합니다, `%s`을(를) 참조하세요.',
  'Your webserver is not handling compressed request bodies properly.' => '웹 서버가 압축된 요청 본문을 적절하게 처리하지 않고 있습니다.',
  'Whitelists editor protocols for "Open in Editor".' => '"편집기에서 열기"를 위한 허용 목록 편집기 프로토콜입니다.',
  'Unable to connect to MySQL!

%s

Make sure databases connection information and MySQL are correctly configured.' => 'MySQL에 연결할 수 없습니다!

%s

데이터베이스 연결 정보와 MySQL이 올바르게 구성되어 있는지 확인하세요.',
  'The "Re: Prefix" and "Vary Subjects" settings are now configured in global settings.' => '"Re: 접두어" 및 "제목 다양화" 설정은 이제 전역 설정에서 구성됩니다.',
  'You have no unresolved setup issues.' => '해결되지 않은 설정 문제가 없습니다.',
  'This configuration is hidden and can not be edited or viewed from the web interface.' => '이 설정은 숨겨져 있으며 웹 인터페이스에서 편집하거나 볼 수 없습니다.',
  'Local Disk Storage Not Readable/Writable' => '로컬 디스크 스토리지 읽기/쓰기 가능하지 않음',
  'Override translations.' => '번역을 덮어씁니다.',
  'Cluster Configuration Out of Sync' => '클러스터 구성이 동기화되지 않음',
  'Cookies set for x.com are also sent for y.x.com. Assuming instances are running on both domains, this will create a collision preventing you from logging in.' => 'x.com에 설정된 쿠키는 y.x.com에도 전송됩니다. 두 도메인 모두에서 인스턴스가 실행 중인 경우, 이로 인해 충돌이 발생하여 로그인할 수 없게 됩니다.',
  'This option has been removed. You may delete it at your convenience.' => '이 옵션은 제거되었습니다. 원하면 언제든지 삭제할 수 있습니다.',
  'You can find more information about this new identity mapping here: %s' => '이 새로운 식별 정보 매핑에 대한 자세한 정보는 여기에서 확인할 수 있습니다: %s',
  'After rebuilding the index, run this command to clear this setup warning:' => '인덱스를 재빌딩한 후 다음 명령을 실행하여 설정 경고를 지우세요:',
  'Footer item with index "%s" is invalid: %s' => '인덱스 "%s"의 바닥글 항목이 유효하지 않습니다: %s',
  'Unknown Configuration Option "%s"' => '알 수 없는 구성 옵션 "%s"',
  'Truncate at 1MB' => '1MB에서 잘림',
  'Access key for Amazon S3.' => 'Amazon S3에 대한 접근 키입니다.',
  'The PATH component \'%s\' (which resolves as the absolute path \'%s\') is not usable because \'%s\' is not readable.' => 'PATH 구성 요소 \'%s\'(절대 경로 \'%s\'로 해석됨)은(는) \'%s\'을(를) 읽을 수 없기 때문에 사용할 수 없습니다.',
  'Maniphest fields are now loaded automatically. You can configure them with `%s`.' => 'Maniphest 필드는 이제 자동으로 로드됩니다. `%s` 을 사용하여 구성할 수 있습니다.',
  'This key is expected to exist, but does not.' => '이 키는 존재할 것으로 예상되었지만, 그렇지 않습니다.',
  'Persistence' => '영속성',
  'This schema is expected to exist, but does not.' => '이 스키마는 존재할 것으로 예상되었지만, 그렇지 않습니다.',
  'You can provide a custom highlighter engine by extending class %s.' => '클래스 %s을(를) 확장하여 사용자 지정 구문 강조 표시 엔진을 제공할 수 있습니다.',
  'Do Not Use Pygments' => 'Pygments를 사용하지 않음',
  'Up to Date' => '최신',
  'Configure core options, including URIs.' => 'URI를 포함한 핵심 옵션을 구성합니다.',
  '(empty)' => '(비었음)',
  'This key has the wrong uniqueness setting.' => '이 키의 고유성 설정이 잘못되었습니다.',
  'When users set or reset a password, it must have at least this many characters.' => '사용자가 비밀번호를 설정하거나 재설정할 때, 비밀번호는 최소한 이 글자 수 이상이어야 합니다.',
  'Additional configuration options to lock.' => '잠그기 위한 추가 구성 옵션입니다.',
  'Override what language files (based on filename) highlight as.' => '(파일 이름을 기반으로) 언어 파일이 강조 표시되는 방식을 덮어씁니다.',
  'Bad "Host" Header' => '잘못된 "호스트" 헤더',
  'Controls whether email for multiple recipients is sent by creating one message with everyone in the "To:" line, or multiple messages that each have a single recipient in the "To:" line.' => '여러 수신인에게 보내는 이메일을 "To:" 줄에 모두 포함한 하나의 메시지로 보낼지, 각 메시지의 "To:" 줄에 수신인이 한 명만 있는 여러 메시지로 보낼지 제어합니다.',
  'Option "%s" is of type "%s", but the item at index "%s" of the list is not a string.' => '옵션 "%s"은(는) 유형 "%s"이지만, 목록의 인덱스 "%s"의 항목이 문자열이 아닙니다.',
  'MySQL port to use when connecting to the database.' => '데이터베이스에 연결할 때 사용할 MySQL 포트입니다.',
  'Trying to add duplicate key "%s"!' => '"%s" 키를 중복해서 추가하려고 합니다!',
  'Option "%s" is of type "%s", but the configured value is not a string.' => '옵션 "%s"은(는) 유형 "%s"이지만, 구성된 값은 문자열이 아닙니다.',
  'User Guide: Amazon RDS' => '사용자 가이드: Amazon RDS',
  'You have \'%s\' enabled in your PHP configuration.

This feature is "highly discouraged" by PHP\'s developers, and has been removed entirely in PHP8.This option is not compatible with this software. Disable \'%s\' in your PHP configuration to continue.' => 'PHP 설정에서 \'%s\'이(가) 활성화되어 있습니다.

이 기능은 PHP 개발자들이 강력히 권장하지 않으며 PHP8에서 완전히 제거되었습니다. 이 옵션은 이 소프트웨어와 호환되지 않습니다. 계속하려면 PHP 설정에서 \'%s\'을(를) 비활성화하세요.',
  'Repository %s has an ambiguous leader.' => '저장소 %s의 리더가 모호합니다.',
  'To enable the SSH error log, specify a path. Errors occurring in contexts where this software is serving SSH requests will be written to this log.

If not set, no log will be written.' => 'SSH 오류 로그를 활성화하려면 경로를 지정하세요. 이 소프트웨어가 SSH 요청을 처리하는 상황에서 발생하는 오류는 이 로그에 기록됩니다.

경로를 지정하지 않으면 로그가 기록되지 않습니다.',
  'The \'%s\' extension is not installed. Without \'%s\' support, this server will not be able to process or resize images (for example, to generate thumbnails). Install or enable \'%s\'.' => '\'%s\' 확장 기능이 설치되어 있지 않습니다. \'%s\' 지원이 없으면 이 서버는 이미지를 처리하거나 크기를 조정할 수 없습니다(예: 섬네일 생성). \'%s\'을 설치하거나 활성화하세요.',
  'Your authentication provider configuration is unlocked. Once you finish setting up or modifying authentication, you should lock the configuration to prevent unauthorized changes.

Leaving your authentication provider configuration unlocked increases the damage that a compromised administrator account can do to your install. For example, an attacker who compromises an administrator account can change authentication providers to point at a server they control and attempt to intercept usernames and passwords.

To prevent this attack, you should configure authentication, and then lock the configuration by running "bin/auth lock" from the command line. This will prevent changing the authentication config without first running "bin/auth unlock".' => '인증 제공자 구성이 잠금 해제되었습니다. 인증 설정을 완료하거나 수정한 후에는 무단 변경을 방지하기 위해 구성을 잠가야 합니다.

인증 제공자 구성을 잠금 해제된 상태로 두면 관리자 계정이 손상된 경우 설치에 더 큰 피해를 줄 수 있습니다. 예를 들어, 관리자 계정을 탈취한 공격자는 인증 제공자를 자신이 제어하는 서버로 변경하고 사용자 이름과 암호를 가로채려고 시도할 수 있습니다.

이러한 공격을 방지하려면 인증을 구성한 다음 명령줄에서 "bin/auth lock"을 실행하여 구성을 잠가야 합니다. 이렇게 하면 "bin/auth unlock"을 먼저 실행하지 않고는 인증 구성을 변경할 수 없습니다.',
  'When you upload a file via drag-and-drop or the API, chunks must be buffered into memory before being written to permanent storage. This server needs memory available to store these chunks while they are uploaded, but PHP is currently configured to severely limit the available memory.

PHP processes currently have very little free memory available (%s). To work well, processes should have at least %s.

(Note that the application itself must also fit in available memory, so not all of the memory under the memory limit is available for running workloads.)

The easiest way to resolve this issue is to set %s to %s in your PHP configuration, to disable the memory limit. There is usually little or no value to using this option to limit process memory.

You can also increase the limit or ignore this issue and accept that you may encounter problems uploading large files and processing large requests.' => '드래그 앤 드롭이나 API를 통해 파일을 업로드할 때, 파일은 영구 스토리지에 기록되기 전에 메모리에 버퍼링되어야 합니다. 서버는 업로드되는 동안 이러한 파일들을 저장할 수 있는 메모리가 필요하지만, 현재 PHP는 사용 가능한 메모리를 심각하게 제한하도록 설정되어 있습니다.

PHP 프로세스는 현재 사용 가능한 메모리가 매우 적습니다(%s). 프로세스가 원활하게 작동하려면 최소 %s(이)가 필요합니다.

(애플리케이션 자체도 사용 가능한 메모리에 맞아야 하므로, 메모리 제한 미만의 메모리 중 일부가 워크로드 실행에 사용 가능한 것은 아닙니다.)

이 문제를 해결하는 가장 쉬운 방법은 PHP 설정에서 %s을(를) %s(으)로 설정하여 메모리 제한을 해제하는 것입니다. 일반적으로 프로세스 메모리를 제한하는 이 옵션은 큰 의미가 없습니다.

메모리 제한을 늘리거나, 이 문제를 무시하고 대용량 파일 업로드 및 대규모 요청 처리 시 문제가 발생할 수 있음을 감수할 수도 있습니다.',
  'Configuration of the notification server has changed substantially. For discussion, see T10794.' => '알림 서버 구성이 크게 변경되었습니다. 이에 대한 토론은 T10794를 참조하세요.',
  'Read option value from stdin.' => 'stdin에서 옵션 값을 읽습니다.',
  'Database source is not configured properly' => '데이터베이스 소스가 제대로 구성되지 않았습니다',
  'Don\'t Require Manual Approval' => '수동 승인을 요구하지 않음',
  'Column Type' => '열 유형',
  'Truncate at 512KB' => '512KB에서 잘림',
  'Cache' => '캐시',
  'Automatically profile some percentage of pages.' => '페이지의 일정 비율을 자동으로 프로파일링합니다.',
  'Explicit S3 endpoint to use. This should be the endpoint which corresponds to the region you have selected in `amazon-s3.region`. This software can not determine the correct endpoint automatically because some endpoint locations are irregular.' => '사용할 S3 종단점을 명시적으로 지정하세요. 이 종단점은 `amazon-s3.region`에서 선택한 리전에 해당하는 종단점이어야 합니다. 일부 종단점 위치는 불규칙적이기 때문에 이 소프트웨어는 올바른 종단점을 자동으로 찾을 수 없습니다.',
  'Admin Server' => '관리자 서버',
  'Wrong Column Type' => '잘못된 열 유형',
  'You are running %s version "%s", which is older than the minimum required version, "%s". Update to at least "%s".' => '현재 버전 "%2$s"의 %s을(를) 실행중이며, 이는 최소 요구 버전인 "%3$s"보다 이전 버전입니다. 최소 "%4$s"(으)로 업데이트하세요.',
  'Embed YouTube videos' => '유튜브 동영상 삽입',
  'Add One Path' => '하나의 경로 추가',
  'Clear Cache' => '캐시 지우기',
  'Write access log here.' => '여기에 접근 로그를 기록하세요.',
  'Unignore this setup issue?' => '이 설정 문제의 무시를 해제합니까?',
  'Configure Mail.' => '메일을 구성합니다.',
  'Default User-Agent for outgoing HTTP requests made by this software.' => '이 소프트웨어에서 외부 HTTP 요청에 사용되는 기본 사용자 에이전트입니다.',
  'What locale to use for command-line scripts that don\'t specify a `%s` argument.' => '`%s` 인수를 지정하지 않은 명령줄 스크립트에 사용할 로케일입니다.',
  'You can update these %d value(s) here:' => array(
    '여기에서 이 값을 업데이트할 수 있습니다:',
    '여기에서 이 값들을 업데이트할 수 있습니다:',
  ),
  'Notification Servers' => '알림 서버',
  'To enable the HTTP access log, specify a path. This log is more detailed than normal HTTP access logs (for instance, it can show logged-in users, controllers, and other application data).

If not set, no log will be written.' => 'HTTP 액세스 로그를 활성화하려면 경로를 지정하세요. 이 로그는 일반 HTTP 액세스 로그보다 더 자세한 정보를 제공합니다(예: 로그인한 사용자, 컨트롤러 및 기타 애플리케이션 데이터 표시).

경로를 지정하지 않으면 로그가 기록되지 않습니다.',
  'extname' => 'extname',
  'Enable captchas with Recaptcha.' => 'Recaptcha로 캡차를 활성화합니다.',
  'This suggests your webserver is configured to decompress or mangle compressed requests.' => '이는 웹 서버가 압축된 요청을 압축 해제하거나 변형하도록 구성되어 있음을 시사합니다.',
  'Add Multiple Paths' => '복수의 경로 추가',
  'Specify an activity to mark as completed.' => '완료됨으로 표시할 활동을 지정하세요.',
  'By default, this software links object names in Remarkup fields to the corresponding object. This regex can be used to modify this behavior; object names that match this regex will not be linked.' => '기본적으로 이 소프트웨어는 리마크업 필드의 객체 이름을 해당 객체에 연결합니다. 다음 정규 표현식을 사용하여 이 동작을 수정할 수 있습니다. 이 정규 표현식과 일치하는 객체 이름은 연결되지 않습니다.',
  'This server has a known bad version of "%s".' => '이 서버에는 "%s"의 알려진 좋지 않은 버전이 설치되어 있습니다.',
  'Require DarkConsole Activation' => 'DarkConsole 활성화 필요',
  'Notifications Status' => '알림 상태',
  'Use the %s to manage enabled applications.' => '%s을(를) 사용해서 활성화된 애플리케이션을 관리하세요.',
  'Current Configuration' => '현재 구성',
  'Replicating Master' => '마스터를 레플리카 중',
  'The version of %s on this system is out of date and contains a major, widely disclosed vulnerability (the "Shellshock" vulnerability).

Upgrade %s to a patched version.

To learn more about how this issue affects this software, see %s.' => '이 시스템에 설치된 %s 버전은 구버전이며, 널리 알려진 심각한 취약점("셸쇼크" 취약점)이 포함되어 있습니다.

패치된 %s 버전으로 업그레이드하세요.

이 문제가 소프트웨어에 미치는 영향에 대한 자세한 내용은 %s을(를) 참조하세요.',
  'Without a configured timezone, PHP will emit warnings when working with dates, and dates and times may not display correctly.' => '시간대가 설정되지 않은 경우 PHP는 날짜 작업 시 경고를 표시하며 날짜와 시간이 올바르게 표시되지 않을 수 있습니다.',
  'Option "%s" is of type "%s" and must be set to a list of valid regular expressions, but "%s" is not a valid regular expression.' => '옵션 "%s"은(는) "%s" 유형이며 유효한 정규 표현식 목록으로 설정되어야 하지만 "%s"은(는) 유효한 정규 표현식이 아닙니다.',
  'This schema can use a better character set.' => '이 스키마는 더 나은 문자 집합을 사용할 수 있습니다.',
  'Configuration value "%s" is locked, but has a value in the database.' => '구성 값 "%s"이(가) 잠겨 있지만 데이터베이스에는 값이 있습니다.',
  'Newly registered accounts can either be placed into a manual approval queue for administrative review, or automatically activated immediately. The approval queue is enabled by default because it gives you greater control over who can register an account and access the server.

If your install is completely public, or on a VPN, or users can only register with a trusted provider like LDAP, or you\'ve otherwise configured the server to prevent unauthorized registration, you can disable the queue to reduce administrative overhead.

NOTE: Before you disable the queue, make sure @{config:auth.email-domains} is configured correctly for your install!' => '새로 등록된 계정은 관리자 검토를 위해 수동 승인 대기열에 추가하거나 즉시 자동으로 활성화할 수 있습니다. 승인 대기열은 계정 등록 및 서버 접근 권한을 보다 효과적으로 관리할 수 있도록 기본적으로 활성화되어 있습니다.

설치 환경이 완전히 공개되어 있거나 VPN을 사용하는 경우, 또는 사용자가 LDAP와 같은 신뢰할 수 있는 공급자를 통해서만 등록할 수 있도록 설정했거나, 또는 무단 등록을 방지하도록 서버를 구성한 경우에는 관리 부담을 줄이기 위해 승인 대기열을 비활성화할 수 있습니다.

참고: 승인 대기열을 비활성화하기 전에 @{config:auth.email-domains} 설정이 설치 환경에 맞게 올바르게 구성되었는지 확인하세요!',
  'Determines whether or not YouTube videos get embedded.' => '유튜브 동영상을 삽입할지 여부를 결정합니다.',
  'Allows you to add a footer with links in it to most pages. You might want to use these links to point at legal information or an about page.

Specify a list of dictionaries. Each dictionary describes a footer item. These keys are supported:

  - `name` The name of the item.
  - `href` Optionally, the link target of the item. You can     omit this if you just want a piece of text, like a copyright     notice.' => '대부분의 페이지에 링크가 포함된 바닥글을 추가할 수 있습니다. 이 링크를 사용하여 법적 정보나 소개 페이지를 가리키게 할 수 있습니다.

딕셔너리 목록을 지정하세요. 각 딕셔너리는 푸터 항목을 설명합니다. 지원되는 키는 다음과 같습니다:

  - `name` 항목의 이름입니다.
  - `href` 선택 사항으로, 항목의 링크 대상입니다. 저작권 고지처럼 단순한 텍스트 조각만 원하는 경우에는 생략할 수 있습니다.',
  'The known issues with this old version are:' => '이 구버전의 알려진 문제점은 다음과 같습니다:',
  'Not Enabled' => '활성화되지 않음',
  'This software sent itself a test request with an "Authorization" HTTP header, and expected those credentials to be transmitted. However, they were absent or incorrect when received. This software sent username "%s" with password "%s"; received username "%s" and password "%s".

Your webserver may not be configured to forward HTTP basic authentication. If you plan to use basic authentication (for example, to access repositories) you should reconfigure it.' => '이 소프트웨어는 "Authorization" HTTP 헤더를 포함한 테스트 요청을 자체적으로 전송하고 해당 자격 증명이 전송될 것으로 예상했습니다. 그러나 수신된 자격 증명은 없거나 올바르지 않았습니다. 이 소프트웨어는 사용자 이름 "%s"와(과) 비밀번호 "%s"을(를) 전송했지만, 사용자 이름 "%s"와(과) 비밀번호 "%s"을(를) 수신했습니다.

웹 서버가 HTTP 기본 인증을 전달하도록 구성되어 있지 않을 수 있습니다. 기본 인증(예: 저장소 액세스)을 사용하려면 서버를 재구성해야 합니다.',
  'If you are using Amazon RDS, some of the instructions above may not apply to you. See %s for discussion of Amazon RDS.' => 'Amazon RDS를 사용 중인 경우 위의 지침 중 일부는 적용되지 않을 수 있습니다. Amazon RDS에 대한 토론은 %s을(를) 참조하세요.',
  'Controls whether email is sent "From" users.' => '이메일이 "From" 사용자로부터 보내지는지 제어합니다.',
  'The notification server no longer requires root permissions. Start the server as the user you want it to run under.' => '알림 서버는 더 이상 루트 권한을 필요로 하지 않습니다. 원하는 사용자 계정으로 서버를 시작하세요.',
  'This issue will no longer be suppressed, and will return to its rightful place as a global setup warning.' => '이 문제는 더 이상 억제되지 않으며, 전역 설정 경고로서 마땅한 위치로 돌아갑니다.',
  'Allows you to remove levity and jokes from the UI.' => 'UI에서 가벼운 농담과 장난을 제거할 수 있게 합니다.',
  'Sites' => '사이트',
  'T6185 "Shellshock" Bash Vulnerability' => 'T6185 "셸쇼크" 배쉬 취약점',
  'Missing \'%s\' Extension' => '\'%s\' 확장 기능 누락됨',
  'Retention policies for garbage collection.' => '가비지 콜렉트에 대한 보관 정책입니다.',
  'MySQL (on host "%s") is configured with a very small innodb_buffer_pool_size, which may impact performance.' => 'MySQL(호스트 "%s")이 매우 작은 innodb_buffer_pool_size로 구성되어 있어 성능에 영향을 미칠 수 있습니다.',
  'You should upgrade this software.' => '이 소프트웨어를 업그레이드해야 합니다.',
  'The following caches will be cleared:' => '다음의 캐시들이 지워집니다:',
  'Detected %s warning(s) with the schemata.' => array(
    '스키마타에서 경고가 감지되었습니다.',
    '스키마타에서 경고 %s개가 감지되었습니다.',
  ),
  'Deprecated mysql.host Format' => '구식 mysql.host 형식',
  'This key is on the wrong columns.' => '이 키는 잘못된 열에 있습니다.',
  'Wrong Nullable Setting' => '잘못된 Nullable 설정',
  'Secret key for Amazon S3.' => 'Amazon S3에 대한 비밀 키입니다.',
  'Trying to add duplicate column "%s"!' => '"%s" 열을 중복해서 추가하려고 합니다!',
  'Minimum password length.' => '최소 비밀번호 길이입니다.',
  'Required PHP extensions are not installed.' => '필요한 PHP 확장 기능이 설치되어 있지 않습니다.',
  'Database' => '데이터베이스',
  'UNHEALTHY: This database has failed recent health checks. Traffic will not be sent to it until it recovers.' => '상태 불량: 이 데이터베이스는 최근 상태 점검에서 불합격 판정을 받았습니다. 복구될 때까지 트래픽이 전송되지 않습니다.',
  'Request input, in bytes.' => '요청 입력(바이트 단위)입니다.',
  'You enabled pygments but the %s script is not actually available, your %s is probably broken.' => 'Pygments를 활성화했지만 %s 스크립트를 실제로 사용할 수 없습니다. %s이(가) 망가진 것 같습니다.',
  'Application Settings' => '애플리케이션 설정',
  'Show email preferences link in email.' => '이메일에 이메일 환경 설정 링크를 표시합니다.',
  'Your webserver may have compression disabled.' => '웹 서버에서 압축 기능이 비활성화되어 있을 수 있습니다.',
  'The configured PATH includes a component which is not usable. This server will be unable to find or execute binaries located here:

%s

The user that the webserver runs as must be able to read all the directories in PATH in order to make use of them.' => '구성된 PATH에 사용할 수 없는 구성 요소가 포함되어 있습니다. 이 서버는 여기에 있는 바이너리를 찾거나 실행할 수 없습니다:

%s

웹 서버가 실행되는 사용자는 PATH에 있는 모든 디렉터리를 읽을 수 있는 권한이 있어야 합니다.',
  'You can set a limit for the maximum byte size of outbound mail. Mail which is larger than this limit will be truncated before being sent. This can be useful if your MTA rejects mail which exceeds some limit (this is reasonably common). Specify a value in bytes.' => '발신 메일의 최대 바이트 크기를 설정할 수 있습니다. 이 제한보다 큰 메일은 전송 전에 잘립니다. 이는 MTA에서 특정 제한을 초과하는 메일을 거부하는 경우(이러한 경우는 꽤 흔합니다) 유용할 수 있습니다. 바이트 단위로 값을 지정하세요.',
  'Multiple %s subclasses have the same key (\'%s\'): %s, %s.' => '여러 %s개의 하위 클래스가 동일한 키(\'%s\')를 가집니다: %s, %s.',
  'Your webserver is rewriting paths improperly.' => '웹 서버가 경로를 잘못 재작성하고 있습니다.',
  'You can rebuild repository identities while the server is running.' => '서버가 실행 중인 동안에도 저장소 식별 정보를 재빌딩할 수 있습니다.',
  'Customize the logo image and text which appears in the main site header:

  - **Logo Image**: Upload a new 80 x 80px image to replace the logo in the site header.

  - **Wordmark**: Choose new text to display next to the logo. By default, the header displays //%s//.

' => '메인 사이트 헤더에 표시되는 로고 이미지와 텍스트를 맞춤 설정합니다:

  - **로고 이미지**: 사이트 헤더의 로고를 교체하려면 새 80 x 80px 이미지를 업로드하세요.

  - **워드마크**: 로고 옆에 표시할 새 텍스트를 선택하세요. 헤더에 표시되는 기본값은 //%s//입니다.',
  'Trying to add duplicate table "%s"!' => '"%s" 테이블을 중복해서 추가하려고 합니다!',
  'No Authentication Providers Configured' => '구성된 인증 제공자가 없음',
  'Run Silently' => '조용히 실행',
  'You can find more information about PHP configuration values in the %s.' => 'PHP 구성값에 대한 자세한 정보는 %s에서 확인할 수 있습니다.',
  'Skipping option "%s"; already in local config.' => '"%s" 옵션을 건너뜁니다, 이미 로컬 구성에 있습니다.',
  'Public email is now accepted if the associated address has a default author, and rejected otherwise.' => '공개 이메일 주소는 이제 연결된 주소에 기본 작성자가 있는 경우 허용되고, 그렇지 않은 경우 거부됩니다.',
  'Setup Issues' => '설정 문제',
  'Require email verification' => '이메일 인증을 요구',
  'Resource minification is now managed automatically.' => '리소스 경량화는 이제 자동으로 관리됩니다.',
  'This software sometimes executes other binaries on the server. An example of this is the `%s` command, used to syntax-highlight code written in languages other than PHP. By default, it is assumed that these binaries are in the %s of the user running this software (normally \'apache\', \'httpd\', or \'nobody\'). Here you can add extra directories to the %s environment variable, for when these binaries are in non-standard locations.

Note that you can also put binaries in `%s` (for example, by symlinking them).

The current value of PATH after configuration is applied is:

  lang=text
  %s' => '이 소프트웨어는 때때로 서버에서 다른 바이너리를 실행합니다. 예를 들어 PHP가 아닌 언어로 작성된 코드를 구문 강조하는 데 사용되는 `%s` 명령이 있습니다. 기본적으로 이러한 바이너리는 이 소프트웨어를 실행하는 사용자(일반적으로 \'apache\', \'httpd\' 또는 \'nobody\')의 %s에 있다고 가정합니다. 이러한 바이너리가 표준 위치가 아닌 곳에 있을 때, 여기에서 %s 환경 변수에 추가 디렉터리를 더할 수 있습니다.

`%s`에 바이너리를 넣을 수도 있습니다(예: 심볼릭 링크를 만들어서).

구성이 적용된 뒤 현재 PATH 값은 다음과 같습니다:

  lang=text
  %s',
  'Whitespace rendering is now handled automatically.' => '공백 렌더링은 이제 자동으로 처리됩니다.',
  '%s Not Working' => '%s가 동작하지 않음',
  'This configuration option is unknown. It may be misspelled, or have existed in a previous version of the software.' => '이 구성 옵션은 알 수 없습니다. 철자가 틀렸거나 이전 버전의 소프트웨어에 존재했던 옵션일 수 있습니다.',
  'You can use \'%s\' if you don\'t want to create a full translation to give users an option for switching to it and you just want to override some strings in the default translation.' => '전체 번역을 생성하여 사용자에게 전환 옵션을 제공하는 대신 기본 번역의 일부 문자열만 재정의하려는 경우 \'%s\'을(를) 사용할 수 있습니다.',
  'Connection' => '연결',
  'Placeholder recipients are now generated automatically.' => '자리 표시자 수신인은 이제 자동으로 생성됩니다.',
  'Elasticsearch is configured (with the %s setting) but an exception was encountered when trying to test the index.

%s' => '일래스틱서치가 (%s 설정으로) 구성되었지만 인덱스를 테스트하는 동안 예외가 발생했습니다.

%s',
  'SSH keys are now actually useful, so they are always enabled.' => 'SSH 키는 이제 실제로 유용하기 때문에 항상 활성화되어 있습니다.',
  'Request output, in bytes.' => '요청 출력(바이트 단위)입니다.',
  'Config option \'%s\' is invalid. The URI must contain a dot (\'.\'), like \'%s\', not just a bare name like \'%s\'. Some web browsers will not set cookies on domains with no TLD.' => '설정 옵션 "%s"이(가) 잘못되었습니다. URI에는 "%s"처럼 마침표(".")가 포함되어야 하며, "%s"처럼 이름만 있으면 안 됩니다. 일부 웹 브라우저는 TLD가 없는 도메인에는 쿠키를 설정하지 않습니다.',
  'The Multimeter application collects performance samples. You can use this data to help you understand what the software is spending time and resources doing, and to identify problematic access patterns.

This option controls how frequently sampling activates. Set it to some positive integer N to sample every 1 / N pages.

For most installs, the default value (1 sample per 1000 pages) should collect enough data to be useful without requiring much storage or meaningfully impacting performance. If you\'re investigating performance issues, you can adjust the rate in order to collect more data.' => 'Multimeter 애플리케이션은 성능 샘플을 수집합니다. 이 데이터를 사용하여 소프트웨어가 시간과 리소스를 어디에 쓰는지 이해하고, 문제가 있는 접근 패턴을 식별할 수 있습니다.

이 옵션은 샘플링이 얼마나 자주 활성화되는지 제어합니다. 양의 정수 N으로 설정하면 1 / N 페이지마다 샘플링합니다.

대부분의 설치 환경에서는 기본값(1000페이지당 1개 샘플)이 많은 스토리지를 요구하거나 성능에 의미 있는 영향을 주지 않으면서 유용할 만큼 충분한 데이터를 수집합니다. 성능 문제를 조사하는 중이라면 더 많은 데이터를 수집하기 위해 비율을 조정할 수 있습니다.',
  'Cache namespace.' => '캐시의 이름공간입니다.',
  '%s = 0' => '%s = 0',
  'Unsafe PHP "Local Infile" Configuration' => '안전하지 않은 PHP "Local Infile" 구성',
  'Custom remarkup rules are now added by subclassing %s or %s.' => '이제 %s 또는 %s을(를) 서브 클래화 하여 사용자 지정 리마크업 규칙을 추가할 수 있습니다.',
  'Issue Resolved' => '문제 해결됨',
  'If you enable this, linked Commons videos will be embedded inline.' => '이 기능을 활성화하면 링크된 공용 동영상이 본문 내에 삽입됩니다.',
  'Garbage collectors are now configured with "%s".' => '가비지 콜렉터가 이제 "%s"(으)로 구성되었습니다.',
  'Unknown configuration option type "%s".' => '알 수 없는 구성 옵션 유형 "%s".',
  'Trying to add duplicate database "%s"!' => '"%s" 데이터베이스를 중복해서 추가하려고 합니다!',
  'This column has the wrong autoincrement setting.' => '이 열의 자동 증가 설정이 잘못되었습니다.',
  'Allows you to add footer links on most pages.' => '대부분의 페이지에 바닥글 링크를 추가할 수 있습니다.',
  'USWest Region' => 'USWest 리전',
  'Maniphest fields are now defined in `%s`. Existing definitions have been migrated.' => 'Maniphest 필드는 이제 `%s` 에 정의되어 있습니다. 기존 정의는 이관되었습니다.',
  'Enable Prototypes' => '프로토타입 활성화',
  'Elasticsearch is now configured with "%s".' => '일래스틱서치가 이제 "%s"(으)로 구성되었습니다.',
  'Configuring Outbound Email' => '발신 이메일 구성',
  'Inbound mail addresses are now configured for each application in the Applications tool.' => '이제 애플리케이션 도구에서 각 애플리케이션에 대한 수신 메일 주소를 구성할 수 있습니다.',
  'Enable recaptcha to require users solve captchas after a few failed login attempts. This hinders brute-force attacks against user passwords. For more information, see https://www.google.com/recaptcha' => '사용자가 몇 번 로그인에 실패한 후 캡차를 풀도록 reCAPTCHA를 활성화합니다. 이렇게 하면 사용자 암호에 대한 무차별 대입 공격을 방지할 수 있습니다. 자세한 내용은 https://www.google.com/reCAPTCHA를 참조하세요.',
  'Partial \'%s\' Support' => '\'%s\' 부분적 지원',
  'Subschemata have setup warnings.' => '하위 스키마타에 설정 경고가 있습니다.',
  'Uptime' => '가동 시간',
  'MySQL (on host "%s") is using a default stopword file, which will prevent searching for many common words.' => 'MySQL(호스트 "%s")이 기본 불용어 파일을 사용하고 있어 많은 일반 단어를 검색하지 못하게 됩니다.',
  'Two setup checks raised an issue with key \'%s\'!' => '두 번의 설정 검사에서 키 \'%s\'에 문제가 발생했습니다!',
  'Mark activities complete even if there is no outstanding need to complete them.' => '완료해야 할 미처리가 없어도 활동을 완료로 표시합니다.',
  'You likely enabled cluster.search without creating the index. Use the following command to create a new index.' => '인덱스를 생성하지 않고 cluster.search를 활성화했을 가능성이 높습니다. 다음 명령을 사용하여 새 인덱스를 생성하세요.',
  'Skipping option "%s"; already in database config.' => '"%s" 옵션을 건너뜁니다, 이미 데이터베이스 구성에 있습니다.',
  'The "InnoDB" engine is not available in MySQL (on host "%s"). Enable InnoDB in your MySQL configuration.

(If you already created tables, MySQL incorrectly used some other engine to create them. You need to convert them or drop and reinitialize them.)' => '"InnoDB" 엔진은 MySQL(호스트 "%s")에서 사용할 수 없습니다. MySQL 구성에서 InnoDB를 활성화하세요.

(이미 테이블을 생성한 경우 MySQL이 다른 엔진을 사용하여 테이블을 생성한 것입니다. 테이블을 변환하거나 삭제 후 다시 초기화해야 합니다.)',
  'This software is currently configured to serve user uploads directly from the same domain as other content. This is a security risk.

Configure a CDN (or alternate file domain) to eliminate this risk. Using a CDN will also improve performance. See the guide below for instructions.' => '이 소프트웨어는 현재 사용자 업로드 파일을 다른 콘텐츠와 동일한 도메인에서 직접 제공하도록 구성되어 있습니다. 이는 보안 위험입니다.

CDN(또는 대체 파일 도메인)을 구성하여 이 위험을 제거하세요. CDN을 사용하면 성능도 향상됩니다. 자세한 내용은 아래 가이드를 참조하세요.',
  '%s Stats' => '%s 통계',
  'The minimum supported version of Subversion is 1.5, which was released in 2008.' => 'Subversion의 최소 지원 버전은 2008년에 출시된 1.5입니다.',
  'Your PHP memory limit is configured in a way that may prevent you from uploading large files or handling large requests.' => 'PHP 메모리 제한 설정으로 인해 대용량 파일 업로드 또는 대규모 요청 처리가 어려울 수 있습니다.',
  'The system user.' => '시스템 사용자입니다.',
  'Reload Page' => '문서 다시 불러오기',
  'Force users to connect via HTTPS instead of HTTP.' => '사용자가 HTTP 대신 HTTPS를 통해 연결하도록 강제합니다.',
  'Large Files' => '큰 파일',
  'Compressed Requests Not Received Properly' => '압축된 요청이 적절히 수신되지 않았음',
  'The namespace that databases should use.' => '데이터베이스가 사용해야 하는 이름공간입니다.',
  'Mark a manual upgrade activity as complete.' => '수동 업그레이드 활동을 완료로 표시합니다.',
  '%s Not Set' => '%s 설정되지 않음',
  'This configuration option has been replaced with a modular handler. See T9346.' => '이 구성 옵션은 모듈러 핸들러로 대체되었습니다. T9346을 참조하세요.',
  'Value for option "%s" (of type "%s") must be specified in JSON, but input could not be decoded. (Did you forget to quote a string?)' => '옵션 "%s"(유형 "%s")의 값은 JSON 형식으로 지정해야 하지만, 입력값을 디코딩할 수 없습니다. (문자열을 따옴표로 묶는 것을 잊으셨습니까?)',
  'Configuration option \'%s\' has invalid value and was restored to the default: %s' => '구성 옵션 \'%s\'의 값이 잘못되어 기본값으로 복구되었습니다: %s',
  'To update these %d value(s), edit your PHP configuration file, located here:' => array(
    '이 값을 업데이트하려면 다음 위치에 있는 PHP 구성 파일을 수정하세요:',
    '이 값들을 업데이트하려면 다음 위치에 있는 PHP 구성 파일을 수정하세요:',
  ),
  'Collation' => '콜레이션',
  'Replication' => '레플리카',
  'The HTTP response code or process exit code.' => 'HTTP 응답 코드 또는 프로세스 종료 코드입니다.',
  'Obsolete; use standard rendering events instead.' => '사용되지 않습니다, 대신 표준 렌더링 이벤트를 사용하세요.',
  'Local Disk Storage' => '로컬 디스크 스토리지',
  'Constant' => '상수',
  'Issue' => '문제',
  'Determines which URI protocols are valid for links and redirects.' => '링크 및 넘겨주기에 유효한 URI 프로토콜을 결정합니다.',
  'Configuration Guide: Configuring a File Domain' => '구성 가이드: 파일 도메인 구성',
  'Activate DarkConsole on every page.' => '모든 페이지에서 DarkConsole을 활성화합니다.',
  'Enable verbose error reporting and disk reads.' => '자세한 오류 보고 및 디스크 읽기를 활성화합니다.',
  'This software sent itself a test request that was compressed with "Content-Encoding: gzip", but received different bytes than it sent.' => '이 소프트웨어는 "Content-Encoding: gzip"으로 압축된 테스트 요청을 자체적으로 전송했지만, 전송한 바이트와 다른 바이트를 수신했습니다.',
  'Mail object address hash keys are now generated automatically.' => '이제 메일 객체 주소 해시값 키가 자동으로 생성됩니다.',
  'Too many arguments: expected one key and one value.' => '인수가 너무 많습니다: 키 하나와 값 하나를 예상했습니다.',
  'Settings History' => '설정 역사',
  'Opcode' => 'Opcode',
  'To update these %d value(s), edit your PHP configuration file.' => '이 값 %d개를 업데이트하려면 PHP 구성 파일을 수정하세요.',
  'Auth provider config must be unlocked before editing' => '편집하기 전에 Auth 제공자 구성의 잠금을 해제해야 함',
  'Enable Recaptcha' => 'Recaptcha 활성화',
  'Prefix cookie with "%s"' => '"%s"(으)로 쿠키 접두어 지정',
  'The configuration option "%s" is not recognized. It may be misspelled, or it might have existed in an older version of the software. It has no effect, and should be corrected or deleted.' => '구성 옵션 "%s"을(를) 인식할 수 없습니다. 철자가 틀렸거나 이전 버전의 소프트웨어에 존재했던 옵션일 수 있습니다. 이 옵션은 아무런 효과가 없으므로 수정하거나 삭제해야 합니다.',
  'You can rebuild the search index while the server is running.' => '서버가 실행 중인 동안에도 검색 인덱스를 재빌드할 수 있습니다.',
  'Migrated option "%s" from file to database config.' => '옵션 "%s"을(를) 파일에서 데이터베이스 설정으로 이관했습니다.',
  'PHP Documentation' => 'PHP 설명서',
  'Your webserver produced an unexpected response.' => '웹 서버에서 예기치 않은 응답이 발생했습니다.',
  'Unable to determine the version number of "%s".' => '"%s"의 버전 번호를 결정할 수 없습니다.',
  'If true, email addresses must be verified (by clicking a link in an email) before a user can login. By default, verification is optional unless @{config:auth.email-domains} is nonempty.' => '이 값이 참이면 사용자는 로그인하기 전에 이메일 주소를 인증해야 합니다(이메일의 링크를 클릭). 기본적으로 @{config:auth.email-domains}가 비어 있지 않은 경우를 제외하고는 인증이 선택 사항입니다.',
  'PHP OPcache Documentation' => 'PHP OPcache 설명문서',
  'Daemons Are Not Running' => '데몬이 실행 중이 아님',
  'Cluster: Databases' => '클러스터: 데이터베이스',
  'No Messages' => '메시지 없음',
  'Footer item with index "%s" is invalid: each item must be a dictionary describing a footer item.' => '인덱스가 "%s"인 바닥글 항목이 유효하지 않습니다: 각 항목은 바닥글 항목을 설명하는 딕셔너리여야 합니다.',
  'None of the caches on this page can be cleared.' => '이 페이지의 캐시는 모두 지울 수 없습니다.',
  'Require email verification before a user can log in.' => '사용자가 로그인할 때 이메일 인증을 요구합니다.',
  'Master' => '마스터',
  'A Troublesome Encounter!' => '골치 아픈 오류가 발생했습니다!',
  'The indexing algorithm for the fulltext search index has been updated and the index needs to be rebuilt. Until you rebuild the index, global search (and other fulltext search) will not function correctly.' => '전문 검색 인덱스의 인덱싱 알고리즘이 업데이트되어 인덱스를 재빌드해야 합니다. 인덱스를 재빌드하기 전까지는 전역 검색(및 기타 전문 검색)이 제대로 작동하지 않습니다.',
  'Maximum taskmaster daemon pool size.' => 'Taskmaster 데몬 풀의 최대 크기입니다.',
  'Replica' => '레플리카',
  'Use Public Replies (Less Secure)' => '공개 답변을 사용 (낮은 보안)',
  'MySQL password to use when connecting to the database.' => '데이터베이스에 연결할 때 사용할 MySQL 비밀번호입니다.',
  'If a variable isn\'t available (for example, %%m appears in the file format but the request is not a Conduit request), it will be rendered as \'-\'' => '변수를 사용할 수 없는 경우(예: 파일 형식에 %%m이 나타나지만 요청이 Conduit 요청이 아닌 경우) 해당 변수는 \'-\'로 렌더링됩니다.',
  'CSRF HMAC keys are now managed automatically.' => 'CSRF HMAC 키는 이제 자동으로 관리됩니다.',
  'Database Status' => '데이터베이스 상태',
  'The request body that was received began:' => '수신된 요청 본문은 다음과 같이 시작됩니다:',
  'Value for option "%s" (of type "%s") must be specified in JSON, but input could not be decoded: %s' => '옵션 "%s"(유형 "%s")의 값은 JSON으로 지정해야 하지만 입력을 디코딩할 수 없습니다: %s',
  'Database host "%s" has a configured cluster state which disagrees with the state on this host ("%s"). Run `bin/storage partition` to commit local state to the cluster. This host may have started with an out-of-date configuration.' => '데이터베이스 호스트 "%s"의 구성된 클러스터 상태가 이 호스트의 상태("%s")와 일치하지 않습니다. 로컬 상태를 클러스터에 커밋하려면 `bin/storage partition`을 실행하세요. 이 호스트가 오래된 구성으로 시작되었을 수 있습니다.',
  'Normally, this software issues HTTP redirects after a successful POST. This can make it difficult to debug things which happen while processing the POST, because service and profiling information are lost. By setting this configuration option, an interstitial page will be shown instead of automatically redirecting, allowing you to examine service and profiling information. It also makes the UX awful, so you should only enable it when debugging.' => '일반적으로 이 소프트웨어는 POST가 성공한 뒤 HTTP 넘겨주기를 수행합니다. 이 경우 POST를 처리하는 동안 발생하는 일을 디버깅하기 어려울 수 있습니다. 서비스 및 프로파일링 정보가 손실되기 때문입니다. 이 구성 옵션을 설정하면 자동으로 넘겨주는 대신 중간 페이지가 표시되어 서비스 및 프로파일링 정보를 검토할 수 있습니다. 또한 UX가 엉망이 되므로 디버깅할 때만 활성화해야 합니다.',
  'Largest' => '최대',
  'Maximum number of taskmaster daemons to run at once. Raising this can increase the maximum throughput of the task queue. The pool will automatically scale down when unutilized.

If you are running a cluster, this limit applies separately to each instance of `phd`. For example, if this limit is set to `4` and you have three hosts running daemons, the effective global limit will be 12.

After changing this value, you must restart the daemons. Most configuration changes are picked up by the daemons automatically, but pool sizes can not be changed without a restart.' => '한 번에 실행할 Taskmaster 데몬의 최대 수입니다. 이 값을 높이면 태스크 대기열의 최대 처리량을 늘릴 수 있습니다. 풀은 사용되지 않을 때 자동으로 축소됩니다.

클러스터를 실행 중인 경우, 이 제한은 각 `phd` 인스턴스에 별도로 적용됩니다. 예를 들어 이 제한이 `4`로 설정되어 있고 데몬을 실행하는 호스트가 세 개라면, 유효한 전역 제한은 12입니다.

이 값을 변경한 뒤에는 데몬을 다시 시작해야 합니다. 대부분의 구성 변경은 데몬이 자동으로 반영하지만, 풀 크기는 재시작 없이 변경할 수 없습니다.',
  'Your version of MySQL (on database host "%s") does not support configuration of a stopword file. You will not be able to find search results for common words.' => 'MySQL 버전(데이터베이스 호스트 "%s")이 불용어 파일 구성을 지원하지 않습니다. 일반적인 단어에 대한 검색 결과를 찾을 수 없습니다.',
  'Your PHP configuration selects an invalid timezone. Select a valid timezone.' => 'PHP 구정에서 유효하지 않은 시간대를 선택했습니다. 유효한 시간대를 선택하세요.',
  '%s deleted this configuration entry (again?).' => '%s님이 이 구성 항목을 삭제했습니다 (또?).',
  'There is some deprecated code found in the code-base.' => '코드베이스에 구식인 코드가 일부 있습니다.',
  'Unresolved Setup Issues' => '해결되지 않은 설정 문제',
  'Server Timezone Not Configured' => '서버 시간대가 구성되지 않음',
  'The following regex is malformed and cannot be used: %s' => '다음의 정규 표현식의 형식이 잘못되었으며 사용될 수 없습니다: %s',
  'Individual application reply handler domains have been removed. Configure a reply domain with "%s".' => '개별 애플리케이션 답변 핸들러 도메인이 제거되었습니다. "%s"(으)로 답변 도메인을 구성하세요.',
  'Preflight' => '사전 검사',
  'Install these %d PHP extension(s):' => '다음 PHP 확장 기능을 설치합니다:',
  'Missing \'%s\' Binary' => '\'%s\' 바이너리 누락됨',
  'Charset' => '문자 집합',
  '\'%s\' or \'%s\' binary not found or Imagemagick is not installed.' => '\'%s\' 또는 \'%s\' 바이너리를 찾을 수 없거나 Imagemagick이 설치되어 있지 않습니다.',
  'By default, this software generates unique reply-to addresses and sends a
separate email to each recipient when you enable reply handling. This is more
secure than using "From" to establish user identity, but can mean users may
receive multiple emails when they are on mailing lists. Instead, you can use a
single, non-unique reply to address and authenticate users based on the "From"
address by setting this to \'true\'. This trades away a little bit of security
for convenience, but it\'s reasonable in many installs. Object interactions are
still protected using hashes in the single public email address, so objects
can not be replied to blindly.' => '기본적으로 이 소프트웨어는 고유한 답장 주소를 생성하고 회신 처리를 활성화하면 각 수신인에게 별도의 이메일을 보냅니다. 이는 "발신인" 주소를 사용하여 사용자 신원을 확인하는 것보다 더 안전하지만, 메일링 리스트에 등록된 사용자는 여러 개의 이메일을 받을 수 있습니다. 대신, 이 설정을 \'true\'로 지정하면 단일의 공통 회신 주소를 사용하고 "발신인" 주소를 기반으로 사용자를 인증할 수 있습니다. 이는 편의성을 위해 보안을 약간 희생하는 것이지만, 대부분의 설치 환경에서는 적절합니다. 객체와의 상호 작용은 단일 공용 이메일 주소의 해시값을 사용하여 계속 보호되므로 객체에 대한 무분별한 회신은 불가능합니다.',
  'The framable public feed is no longer supported.' => '프레임 가능한 공개 피드는 더이상 지원되지 않습니다.',
  'A random, unique string which identifies the request.' => '요청을 식별하는 임의하고 고유한 문자열입니다.',
  'Auth provider config can be edited without unlocking' => '잠금 해제 없이 Auth 제공자 구성 편집 가능',
  'Disable unsafe option "%s" in PHP configuration.' => 'PHP 구성에서 안전하지 않은 옵션 "%s"을 비활성화하세요.',
  '%s Day(s)' => '%s일',
  'PHP version: %s' => 'PHP 버전: %s',
  'No search servers are configured.' => '검색 서버가 구성되어 있지 않습니다.',
  'DarkConsole is a development and profiling tool built into the web interface. You should leave it disabled unless you are developing or debugging %s.

Once you activate DarkConsole for the install, **you need to enable it for your account before it will actually appear on pages.** You can do this in Settings > Developer Settings.

DarkConsole exposes potentially sensitive data (like queries, stack traces, and configuration) so you generally should not turn it on in production.' => 'DarkConsole은 웹 인터페이스에 내장된 개발 및 프로파일링 도구입니다. %s을(를) 개발하거나 디버깅하는 경우가 아니라면 비활성화된 상태로 두어야 합니다.

설치 환경에서 DarkConsole을 활성화한 뒤에는 **실제로 페이지에 표시되도록 하려면 계정에서도 활성화해야 합니다.** 설정 > 개발자 설정 에서 가능합니다.

DarkConsole은 쿼리, 스택 추적, 구성 같은 잠재적으로 민감한 데이터를 노출하므로 일반적으로 프로덕션에서는 켜지 않는 것이 좋습니다.',
  'This key is too long for utf8mb4.' => 'utf8mb4에 대해 이 키가 너무 깁니다.',
  'Expected Character Set' => '예상된 문자 집합',
  'Repository Servers' => '저장소 서버',
  'Format for the HTTP access log. Use `%s` to set the path. Available variables are:' => 'HTTP 접속 로그 형식입니다. %s을(를) 사용해서 경로를 설정하세요. 사용 가능한 변수:',
  'Skipping obsolete option: %s' => '더 이상 사용되지 않는 옵션 건너뜀: %s',
  'This schema can use a better collation.' => '이 스키마는 더 나은 콜레이션을 사용할 수 있습니다.',
  'Install Pygments to Improve Syntax Highlighting' => '구문 강조 기능을 향상시키기 위해 Pygments를 설치',
  'Sessions now expire and are garbage collected rather than having an arbitrary concurrency limit.' => '이제 세션은 임의의 동시 접속 제한이 있는 대신 만료되어 가비지 콜렉트됩니다.',
  'Logo Image' => '로고 이미지',
  'Really Clear Cache' => '정말로 캐시를 삭제',
  'Unexpected \'%s\' Behavior' => '예상치 못한 \'%s\' 동작',
  'Mail thread IDs are now generated automatically.' => '이제 메일 스레드 ID가 자동으로 생성됩니다.',
  'Your configuration fails to specify a server timezone. You can either set the PHP configuration value \'%s\' or the %s configuration value \'%s\' to specify one.' => '구성이 서버 시간대를 지정하는데 실패했습니다. PHP 구성 값 \'%s\' 또는 %s 구성 값 \'%s\'을(를) 설정해서 시간대를 지정할 수 있습니다.',
  'Enable HTTP Strict Transport Security (HSTS).' => 'HTTP Strict Transport Security(HSTS)를 활성화합니다.',
  'OVERRIDDEN' => '덮어쓰기됨',
  'This server has %s available in %s, but the binary exited with an error code when run as %s. Check that it is installed correctly.' => '이 서버에는 %2$s에서 %s을(를) 사용 가능하지만, %3$s(으)로 실행했을 때 바이너리가 오류 코드와 함께 종료되었습니다. 올바르게 설치되었는지 확인하세요.',
  'Users can configure a URI pattern to open files in a text editor. The URI must use a protocol on this whitelist.' => '사용자는 텍스트 편집기에서 파일을 열기 위한 URI 패턴을 구성할 수 있습니다. 해당 URI는 이 허용 목록에 있는 프로토콜을 사용해야 합니다.',
  'Config' => '구성',
  'Transaction mail is now always sent with "Precedence: bulk" to improve deliverability.' => '전달성을 높이기 위해 트랜잭션 메일은 이제 항상 "Precedence: bulk"로 전송됩니다.',
  'Retention Policy' => '보관 정책',
  'Without \'%s\', this software can not test for the availability of other binaries.' => '\'%s\'이(가) 없으면 이 소프트웨어는 다른 바이너리의 가용성을 테스트할 수 없습니다.',
  'HTTP Basic Auth Not Configured' => 'HTTP Basic Auth 구성되지 않음',
  'Whitelist 1.2.*.*' => '허용 목록 1.2.*.*',
  'Highlight httpd.conf as "apacheconf".' => 'httpd.conf를 "apacheconf"로 강조 표시',
  'Database Value' => '데이터베이스 값',
  'US Mountain (MDT)' => '미국 산악 (MDT)',
  'This option has been replaced with `ui.logo`, which provides more flexible configuration options.' => '이 옵션은 보다 유연한 구성 옵션을 제공하는 `ui.logo`로 대체되었습니다.',
  'Database host "%s" is using the builtin stopword file for building search indexes. This can make the search feature less useful.

Stopwords are common words which are not indexed and thus can not be searched for. The default stopword file has about 500 words, including various words which you are likely to wish to search for, such as \'various\', \'likely\', \'wish\', and \'zero\'.

To make search more useful, you can use an alternate stopword file with fewer words. Alternatively, if you aren\'t concerned about searching for common words, you can ignore this warning. If you later plan to configure Elasticsearch, you can also ignore this warning: this stopword file only affects MySQL fulltext indexes.

To choose a different stopword file, add this to your %s file (in the %s section) and then restart %s:

%s
(You can also use a different file if you prefer. The file suggested above has about 50 of the most common English words.)' => '데이터베이스 호스트 "%s"이(가) 검색 인덱스를 구축하는 데 기본 제공 불용어 파일을 사용하고 있습니다. 이로 인해 검색 기능의 유용성이 떨어질 수 있습니다.

불용어는 인덱싱되지 않아 검색할 수 없는 흔한 단어입니다. 기본 불용어 파일에는 약 500개의 단어가 있으며, \'various\', \'likely\', \'wish\', \'zero\'처럼 사용자가 검색하고 싶어 할 가능성이 높은 여러 단어도 포함되어 있습니다.

검색을 더 유용하게 만들려면 단어 수가 더 적은 다른 불용어 파일을 사용할 수 있습니다. 또는 흔한 단어 검색이 중요하지 않다면 이 경고를 무시해도 됩니다. 나중에 일래스틱서치를 구성할 계획이라면 이 경고도 무시할 수 있습니다. 이 불용어 파일은 MySQL 전체 텍스트 인덱스에만 영향을 줍니다.

다른 불용어 파일을 선택하려면 %s 파일(%s 섹션)에 다음을 추가한 뒤 %s을(를) 다시 시작하세요:

%s
(원한다면 다른 파일을 사용할 수도 있습니다. 위에서 제안한 파일에는 가장 흔한 영어 단어 약 50개가 들어 있습니다.)',
  'Rebuild Search Index' => '검색 인덱스 재빌드',
  'This User-Agent will be used for most outgoing HTTP requests. When unset, the base URI will be used, with a " %s/1.0" suffix.' => '이 사용자 에이전트는 대부분의 외부 HTTP 요청에 사용됩니다. 설정되지 않은 경우 기본 URI에 "%s/1.0" 접미어가 추가됩니다.',
  'Do not install this software on an instance class with burstable CPU.' => '버스터블 CPU가 있는 인스턴스 클래스에는 이 소프트웨어를 설치하지 마세요.',
  'Real' => '실명',
  'Partition: %s' => '파티션: %s',
  'This is an override list of regular expressions which allows you to choose what language files are highlighted as. If your projects have certain rules about filenames or use unusual or ambiguous language extensions, you can create a mapping here. This is an ordered dictionary of regular expressions which will be tested against the filename. They should map to either an explicit language as a string value, or a numeric index into the captured groups as an integer.' => '이것은 정규 표현식 재정의 목록이며, 어떤 언어로 된 파일을 강조 표시할지 선택할 수 있습니다. 프로젝트에서 파일 이름에 대한 특정 규칙이 있거나 특이하거나 모호한 언어 확장자를 사용하는 경우, 여기에 매핑을 생성할 수 있습니다. 이 목록은 파일 이름과 비교하여 테스트될 정규 표현식의 순서가 지정된 딕셔너리입니다. 각 표현식은 문자열 값으로는 명시적인 언어에, 정수 값으로는 캡처된 그룹의 숫자 인덱스에 매핑되어야 합니다.',
  'You can restrict allowed email addresses to certain domains (like `yourcompany.com`) by setting a list of allowed domains here.

Users will only be allowed to register using email addresses at one of the domains, and will only be able to add new email addresses for these domains. If you configure this, it implies @{config:auth.require-email-verification}.

You should omit the `@` from domains. Note that the domain must match exactly. If you allow `yourcompany.com`, that permits `joe@yourcompany.com` but rejects `joe@mail.yourcompany.com`.' => '여기에서 허용된 도메인 목록을 설정하여 허용되는 이메일 주소를 특정 도메인(예: `yourcompany.com`)으로 제한할 수 있습니다.

사용자는 해당 도메인 중 하나의 이메일 주소로만 등록할 수 있으며, 새 이메일 주소도 해당 도메인에 대해서만 추가할 수 있습니다. 이를 구성하면 @{config:auth.require-email-verification}이 암시됩니다.

도메인에서 `@`는 생략해야 합니다. 도메인은 정확히 일치해야 합니다. `yourcompany.com`을 허용하면 `joe@yourcompany.com`은 허용되지만 `joe@mail.yourcompany.com`은 거부됩니다.',
  'Show unresolved issues with setup and configuration.' => '설정 및 구성에서 해결되지 않은 문제를 표시합니다.',
  'Unable to determine the version number of "%s". Usually, this means the program changed its version format string recently and this software does not know how to parse the new one yet, but might indicate that you have a very old (or broken) binary.

Because we can not determine the version number, checks against minimum and known-bad versions will be skipped, so we might fail to detect an incompatible binary.

You may be able to resolve this issue by updating this server, since a newer version of the software is likely to be able to parse the newer version string.

If updating the software does not fix this, you can report the issue to the upstream so we can adjust the parser.

If you are confident you have a recent version of "%s" installed and working correctly, it is usually safe to ignore this warning.' => '"%s"의 버전 번호를 결정할 수 없습니다. 일반적으로 이는 프로그램이 최근 버전 형식 문자열을 변경했고 이 소프트웨어가 아직 새 형식을 구문 분석하는 방법을 알지 못한다는 뜻이지만, 매우 오래되었거나 손상된 바이너리를 사용 중임을 나타낼 수도 있습니다.

버전 번호를 결정할 수 없으므로 최소 버전 및 알려진 문제 버전에 대한 검사가 건너뛰어집니다. 따라서 호환되지 않는 바이너리를 감지하지 못할 수 있습니다.

이 서버를 업데이트하면 이 문제를 해결할 수 있을 수 있습니다. 더 최신 버전의 소프트웨어는 새 버전 문자열을 구문 분석할 가능성이 높습니다.

소프트웨어를 업데이트해도 문제가 해결되지 않으면, 파서를 조정할 수 있도록 upstream에 문제를 보고할 수 있습니다.

"%s"의 최신 버전이 설치되어 있고 정상적으로 동작한다고 확신한다면, 보통 이 경고는 무시해도 안전합니다.',
  'For conduit, the Conduit method which was invoked.' => 'Conduit의 경우, 호출된 Conduit 메서드입니다.',
  'The configuration option \'%s\' is not set.' => '\'%s\' 구성 옵션이 설정되어 있지 않습니다.',
  'Locale code of command-line locale.' => '명령줄 로케일의 로케일 코드입니다.',
  'Stop Before HTTP Redirect' => 'HTTP 넘겨주기 전에 중지',
  'Developer / Debugging' => '개발자 / 디버깅',
  'You have enabled Imagemagick in your config, but the \'%s\' or \'%s\' binary is not in the webserver\'s %s. Disable imagemagick or make it available to the webserver.' => '구성에서 ImageMagick을 활성화했지만 웹 서버의 %3$s에 \'%s\' 또는 \'%s\' 바이너리가 없습니다. ImageMagick을 비활성화하거나 웹 서버에서 사용할 수 있도록 만드세요.',
  'Remove PHP %s' => 'PHP %s 제거',
  'Missing' => '없음',
  'Classes must match to compare schemata!' => '스키마타를 비교하려면 클래스가 일치해야 합니다!',
  'Set the URI where this software is installed. Setting this improves security by preventing cookies from being set on other domains, and allows daemons to send emails with links that have the correct domain.' => '이 소프트웨어가 설치된 URI를 설정하세요. 이 설정을 통해 다른 도메인에 쿠키가 설정되는 것을 방지하여 보안을 강화하고, 데몬이 올바른 도메인이 포함된 링크를 이메일로 보낼 수 있도록 합니다.',
  'Elasticsearch Index Not Found' => '일래스틱서치 인덱스가 없음',
  'Unit test value.' => '단위 테스트 값입니다.',
  'A daemon is running as user %s, but daemons should be running as %s.

Either adjust the configuration setting %s or restart the daemons. Daemons should attempt to run as the proper user when restarted.' => '데몬이 사용자 %s(으)로 실행 중이지만, 데몬은 %s(으)로 실행되어야 합니다.

구성 설정 %s을(를) 조정하거나 데몬을 다시 시작하세요. 데몬은 다시 시작될 때 올바른 사용자로 실행되도록 시도해야 합니다.',
  'Missing Key' => '키가 없음',
  'Database host "%s" is configured with a very small %s (%s). This may cause poor database performance and lock exhaustion.

There are no hard-and-fast rules to setting an appropriate value, but a reasonable starting point for a standard install is something like 40%% of the total memory on the machine. For example, if you have 4GB of RAM on the machine you have installed this software on, you might set this value to %s.

You can read more about this option in the MySQL documentation to help you make a decision about how to configure it for your use case. There are no concerns specific to this software which make it different from normal workloads with respect to this setting.

To adjust the setting, add something like this to your %s file (in the %s section), replacing %s with an appropriate value for your host and use case. Then restart %s:

%s
If you\'re satisfied with the current setting, you can safely ignore this setup warning.' => '데이터베이스 호스트 "%s"이(가) 매우 작은 %s (%s) 값으로 구성되어 있습니다. 이로 인해 데이터베이스 성능 저하 및 잠금 고갈이 발생할 수 있습니다.

적절한 값을 설정하는 데 정해진 규칙은 없지만, 표준 설치의 경우 시스템 전체 메모리의 약 40%% 정도가 합리적인 시작점입니다. 예를 들어, 이 소프트웨어를 설치한 시스템에 4GB의 RAM이 있는 경우 이 값을 %s(으)로 설정할 수 있습니다.

MySQL 설명서를 참조하여 사용 사례에 맞게 구성하는 방법을 결정하는 데 도움을 받을 수 있습니다. 이 설정과 관련하여 이 소프트웨어에 특정한 문제가 있는 것은 아니며 일반적인 워크로드와 다른 점도 없습니다.

설정을 조정하려면 파일 %s(섹션 %s)에 다음과 같은 내용을 추가하고 호스트 %s 및 사용 사례에 맞는 적절한 값으로 변경하세요. 그런 다음 %s을(를) 다시 시작하세요:

%s
현재 설정에 만족하는 경우 이 설정 경고를 무시해도 됩니다.',
  'Expected Nullable' => '예상되는 Nullable',
  'Syntax highlighting is supported for a few languages by default, but you can install Pygments (a third-party syntax highlighting tool) to provide support for many more languages.

To install Pygments, visit [[ https://pygments.org/ | pygments.org ]] and follow the download and install instructions.

Once Pygments is installed, enable this option (`pygments.enabled`) to make use of Pygments when highlighting source code.

After you install and enable Pygments, newly created source code (like diffs and pastes) should highlight correctly. You may need to clear caches to get previously existing source code to highlight. For instructions on managing caches, see [[ %s | Managing Caches ]].' => '구문 강조 표시는 기본적으로 몇 가지 언어에 대해 지원되지만, Pygments(타사 구문 강조 표시 도구)를 설치하면 더 많은 언어를 지원할 수 있습니다.

Pygments를 설치하려면 [[ https://pygments.org/ | pygments.org ]]를 방문하여 다운로드 및 설치 지침을 따르세요.

Pygments가 설치되면 소스 코드 강조 표시 시 Pygments를 사용하려면 이 옵션(`pygments.enabled`)을 활성화하세요.

Pygments를 설치하고 활성화하면 새로 생성된 소스 코드(예: 차이 및 붙여넣기)가 올바르게 강조 표시됩니다. 기존 소스 코드가 강조 표시되도록 하려면 캐시를 지워야 할 수 있습니다. 캐시 관리 방법에 대한 지침은 [[ %s | 캐시 관리 ]]를 참조하세요.',
  'Disable SSH log.' => 'SSH 로그를 비활성화합니다.',
  'Set a string this software should use to prefix cookie names.' => '이 소프트웨어가 쿠키 이름에 접두어로 사용할 문자열을 설정합니다.',
  'No databases have any issues.' => '문제를 가진 데이터베이스가 없습니다.',
  'If the web server responds to both HTTP and HTTPS requests but you want users to connect with only HTTPS, you can set this to `true` to make this service redirect HTTP requests to HTTPS.

Normally, you should just configure your server not to accept HTTP traffic, but this setting may be useful if you originally used HTTP and have now switched to HTTPS but don\'t want to break old links, or if your webserver sits behind a load balancer which terminates HTTPS connections and you can not reasonably configure more granular behavior there.

IMPORTANT: A request is identified as HTTP or HTTPS by examining the PHP `%s` variable. If you run Apache/mod_php this will probably be set correctly for you automatically, but if you run as CGI/FCGI (e.g., through nginx or lighttpd), you need to configure your web server so that it passes the value correctly based on the connection type.

If you configure clustering, note that this setting is ignored by intracluster requests.' => '웹 서버가 HTTP 및 HTTPS 요청 모두에 응답하지만 사용자가 HTTPS로만 연결하도록 하려면 이 설정을 `true`로 지정하여 서비스가 HTTP 요청을 HTTPS로 넘겨주도록 할 수 있습니다.

일반적으로 서버에서 HTTP 트래픽을 허용하지 않도록 구성하는 것이 좋지만, 원래 HTTP를 사용하다가 HTTPS로 전환했지만 기존 링크를 끊고 싶지 않거나 웹 서버가 로드 밸런서 뒤에 있어 HTTPS 연결을 종료하고 더 세부적인 동작을 구성할 수 없는 경우 이 설정이 유용할 수 있습니다.

중요: 요청이 HTTP인지 HTTPS인지는 PHP의 `%s` 변수를 통해 식별됩니다. Apache/mod_php를 실행하는 경우 이 값은 자동으로 올바르게 설정되지만, CGI/FCGI(예: nginx 또는 lighttpd)로 실행하는 경우 연결 유형에 따라 값이 올바르게 전달되도록 웹 서버를 구성해야 합니다.

클러스터링을 구성하는 경우 이 설정은 클러스터 내 요청에는 적용되지 않습니다.',
  'Option "%s" is of type "%s", but the configured value is not an integer.' => '옵션 "%s"은(는) 유형 "%s"이지만, 구성된 값은 정수가 아닙니다.',
  'Notifications no longer have a dedicated debugging mode.' => '알림 기능에 더 이상 전용 디버깅 모드가 없습니다.',
  'Daemon Running as Wrong User' => '데몬이 잘못된 사용자로써 실행 중',
  'This software sent itself a test request with an HTTP GET parameter, but the parameter was not transmitted. Sent "%s" with value "%s", got "%s" with value "%s".

Your webserver is configured incorrectly and large parts of this software will not work until this issue is corrected.

(This problem can be caused by a missing "QSA" in your RewriteRule.)' => '이 소프트웨어는 HTTP GET 매개변수를 사용하여 자체 테스트 요청을 보냈지만 매개변수가 전송되지 않았습니다. "%s" 매개변수에 "%s" 값을 전송했지만 "%s" 매개변수에 "%s" 값을 받았습니다.

웹 서버 구성이 잘못되어 이 문제가 해결될 때까지 소프트웨어의 많은 부분이 작동하지 않습니다.

(이 문제는 RewriteRule에 "QSA"가 누락된 경우 발생할 수 있습니다.)',
  'MySQL is not in strict mode (on host "%s"), but using strict mode is recommended.' => 'MySQL이 (호스트 "%s"에서) 스트릭트 모드가 아니지만 스트릭트 모드 사용이 권장됩니다.',
  'This ancient extension point has been replaced with other mechanisms, including "AphrontSite".' => '이 고대의 확장 기능 지점은 "AphrontSite"를 포함한 다른 메커니즘으로 대체되었습니다.',
  'You enabled Elasticsearch but the index does not exist.' => '일래스틱서치를 활성화했으나, 인덱스가 존재하지 않습니다.',
  '%s Not Found' => '%s을(를) 찾을 수 없음',
  'Write SSH error log here.' => '여기에 SSH 오류 로그를 작성합니다.',
  'Your `%s` configuration contains a port number, but this usage is deprecated. Instead, put the port number in `%s`.' => '`%s` 구성에 포트 번호가 포함되어 있지만, 이 사용법은 구식입니다. 대신 포트 번호를 `%s`에 입력하세요.',
  'Elasticsearch Index Schema Mismatch' => '일래스틱서치 인덱스 스키마 불일치',
  'Column has Wrong Autoincrement' => '열의 자동 증가가 잘못됨',
  'Enable the debugging console.' => '디버깅 콘솔을 활성화합니다.',
  'Specify the configuration key you want to set.' => '설정하려는 구성 키를 지정하세요.',
  'Memory Limit Restricts File Uploads' => '메모리 제한이 파일 업로드를 제한함',
  'Cache Entries' => '캐시 항목',
  'Unknown column type "%s"!' => '알 수 없는 열 유형 "%s"!',
  'The minimum supported version of Git on the server is %s, which was released in %s. In older versions, the Git server may not be able to escape arguments with the "--" operator. Note: your users do not require a particular version of Git.' => '서버에서 지원되는 최소 Git 버전은 %s이며, 이는 %s에 출시되었습니다. 이전 버전에서는 Git 서버가 "--" 연산자를 사용한 인수를 이스케이프 처리하지 못할 수 있습니다. 참고: 사용자는 특정 Git 버전을 필요로 하지 않습니다.',
  'Configured location for storing uploaded files on disk ("%s") does not exist, or is not readable or writable. Verify the directory exists and is readable and writable by the webserver.' => '업로드된 파일을 디스크에 저장하도록 구성된 위치("%s")가 존재하지 않거나 읽기/쓰기 권한이 없습니다. 해당 디렉터리가 존재하고 웹 서버에서 읽기/쓰기 권한이 있는지 확인하세요.',
  'Notifications User Guide: Setup and Configuration' => '알림 사용자 가이드: 설정 및 구성',
  'This software sent itself a test request with the "X-Setup-SelfCheck" header and expected to get a valid JSON response back. Instead, the response begins:

%s

Something is misconfigured or otherwise mangling responses.' => '이 소프트웨어는 "X-Setup-SelfCheck" 헤더를 포함하여 자체 테스트 요청을 보냈고 유효한 JSON 응답을 받을 것으로 예상했습니다. 그러나 응답은 다음과 같이 시작됩니다. 

%s 

구성 오류가 있거나 응답이 잘못 처리되고 있습니다.',
  'Key is Too Long' => '키가 너무 깁니다',
  '\'%s\' Missing' => '\'%s\' 누락됨',
  'Configure database read replicas.' => '데이터베이스 읽기 복제본을 구성합니다.',
  'Elasticsearch Misconfigured' => '일래스틱서치 구성 오류',
  'Amazon S3 is Only Partially Configured' => 'Amazon S3가 부분적으로만 구성됨',
  '<none>' => '<none>',
  'Customize favicons.' => '파비콘을 맞춤 설정합니다.',
  'The PATH component \'%s\' (which resolves as the absolute path \'%s\') is not usable because it is not traversable (its \'%s\' permission bit is not set).' => 'PATH 구성 요소 \'%s\'(절대 경로 \'%s\'로 해석됨)은(는) 탐색할 수 없으므로 사용할 수 없습니다(해당 \'%s\' 권한 비트가 설정되지 않음).',
  'No Repositories' => '저장소 없음',
  'The configuration key "%s" is already defined in the database. The value from the database will override the value in local storage.' => '구성 키 "%s"은(는) 이미 데이터베이스에 정의되어 있습니다. 데이터베이스의 값이 로컬 스토리지의 값을 덮어씁니다.',
  '%s deleted this configuration entry.' => '%s님이 이 구성 항목을 삭제했습니다.',
  'After rebuilding repository identities, run this command to clear this setup warning:' => '저장소 식별 정보를 재빌딩한 후 다음 명령을 실행하여 설정 경고를 지우세요:',
  'The timezone this software should use by default.' => '이 소프트웨어가 기본적으로 사용할 시간대입니다.',
  'Mail is now always delivered by the daemons.' => '이제 메일은 항상 데몬을 통해 전달됩니다.',
  'Request has bad "Host" header.' => '요청의 "호스트" 헤더가 잘못되었습니다.',
  'This version of Subversion has a bug where `%s` does not work for files added in rN (Subversion issue #2873), fixed in 1.7.2.' => '이 버전의 Subversion에는 rN에 추가된 파일에 대해 `%s`이(가) 작동하지 않는 버그가 있습니다(Subversion 문제 #2873). 이 문제는 1.7.2 버전에서 수정되었습니다.',
  'Elasticsearch is not reachable as configured.' => '일래스틱서치에 구성된 대로 도달할 수 없습니다.',
  'Key has Wrong Uniqueness' => '키의 고유성이 잘못됨',
  'Determines whether or not basic account information is editable.' => '기본 계정 정보의 편집 가능 여부를 결정합니다.',
  'Get a local configuration value.' => '로컬 구성 값을 가져옵니다.',
  'By default, this software allows users to add multi-factor authentication to
their accounts, but does not require it. By enabling this option, you can
force all users to add at least one authentication factor before they can use
their accounts.

Administrators can query a list of users who do not have MFA configured in
{nav People}:

  - **[[ %s | %s ]]**' => '기본적으로 이 소프트웨어는 사용자가 계정에 다단계 인증(MFA)을 추가할 수 있도록 허용하지만, 필수 사항은 아닙니다. 이 옵션을 활성화하면 모든 사용자가 계정을 사용하기 전에 최소 하나 이상의 인증 요소를 추가하도록 강제할 수 있습니다.

관리자는 MFA가 구성되지 않은 사용자 목록을 {nav People}에서 조회할 수 있습니다:

  - **[[ %s | %s ]]**',
  'The base URI for this install is not configured. Many major features will not work properly until you configure it.' => '이 설치의 기본 URI가 구성되지 않았습니다. 기본 URI를 구성하기 전까지는 많은 주요 기능이 제대로 작동하지 않습니다.',
  'Unexpected \'diff\' Behavior' => '예상치 못한 \'차이\' 동작',
  'The \'%s\' binary on this system has unexpected behavior: it was expected to exit with a nonzero error code when passed differing files, but did not.' => '이 시스템의 \'%s\' 바이너리는 예상치 못한 동작을 보입니다. 서로 다른 파일을 전달했을 때 0이 아닌 오류 코드로 종료될 것으로 예상되었지만, 그렇지 않았습니다.',
  'You can ignore an issue if you don\'t want to fix it, or plan to fix it later. Ignored issues won\'t appear on every page but will still be shown in the list of open issues.' => '문제를 해결하고 싶지 않거나 나중에 해결할 계획이라면 해당 문제를 무시할 수 있습니다. 무시된 문제는 모든 문서에 표시되지는 않지만, 해결되지 않은 문제 목록에는 계속 표시됩니다.',
  'Enter value in JSON.' => '값을 JSON으로 입력하세요.',
  'Migrated option "%s" from file to local config.' => '옵션 "%s"을(를) 파일에서 로컬 설정으로 이관했습니다.',
  'Shenanigans' => '장난',
  'The path for local repositories does not exist, or is not readable by the webserver.' => '로컬 저장소의 경로가 존재하지 않거나 웹 서버에서 읽을 수 없습니다.',
  'Option "%s" only supports numbers, letters, underscores and (for some reason) the dollar sign. This is necessary to avoid potential MySQL/MariaDB escape issues. Remove the invalid characters.' => '옵션 "%s"은(는) 숫자, 문자, 밑줄 및 (어떤 이유에서) 달러 기호만 지원합니다. 이는 MySQL/MariaDB 이스케이프 처리 관련 문제를 방지하기 위한 것입니다. 유효하지 않은 문자를 제거하세요.',
  'Inbound and outbound mail is now configured with "cluster.mailers".' => '수신 및 발신 메일은 이제 "cluster.mailers"를 사용하여 구성됩니다.',
  'Config \'%s\' Invalid' => '구성 \'%s\'이(가) 유효하지 않음',
  'A database host ("%s") and this web host ("%s") disagree on the current time by more than 60 seconds (absolute skew is %s seconds). Check that the current time is set correctly everywhere.' => '데이터베이스 호스트("%s")와 웹 호스트("%s")의 현재 시간이 60초 이상 차이가 납니다(절대 편차는 %s초). 모든 곳에서 현재 시간이 올바르게 설정되어 있는지 확인하세요.',
  'No Recipient Hints' => '수신자 힌트 없음',
  'Sample 0.1%% of requests.' => '요청의 0.1%%를 샘플링합니다.',
  'No Issues' => '문제 없음',
  'No Caches to Reset' => '초기화할 캐시 없음',
  'No Base URI' => '기본 URI 없음',
  'Really Clear Cache?' => '정말로 캐시를 삭제합니까?',
  'Allow Any Host (Insecure!)' => '모든 호스트 허용 (안전하지 않습니다!)',
  'Collectors with custom policies are highlighted. Use %s to change retention policies.' => '사용자 지정 정책이 있는 콜렉터는 강조 표시됩니다. 보관 정책을 변경하려면 %s을(를) 사용하세요.',
  'Multi-Factor Required' => '다단계 필요',
  'Host: %s' => '호스트: %s',
  'Update %s' => '%s을 업데이트하세요',
  'Reply hints are no longer shown in mail.' => '메일에 답변 힌트가 더 이상 표시되지 않습니다.',
  'Profile every request (slow)' => '모든 요청을 분석 (느림)',
  'Resolved Issue' => '해결된 문제',
  'Local path "%s" is not writable. This file must be writable so that "bin/config" can store configuration.' => '로컬 경로 "%s"은(는) 쓰기가 불가능합니다. "bin/config"가 구성을 저장할 수 있으려면 이 파일의 쓰기가 가능해야 합니다.',
  'This option generally did not prove useful. Resource hash keys are now managed automatically.' => '이 옵션은 일반적으로 유용하지 않은 것으로 나타났습니다. 리소스 해시값 키는 이제 자동으로 관리됩니다.',
  'Schema Status' => '스키마 상태',
  'To update these %d value(s), run these command(s) from the command line:' => array(
    '이 값을 업데이트하려면 명령줄에서 다음 명령을 실행하세요:',
    '이 값들을 업데이트하려면 명령줄에서 다음 명령을 실행하세요:',
  ),
  'If you want to use a single mailbox for reply mail, you can use this
and set a common prefix for generated reply addresses. It will
make use of the fact that a mail-address such as
`devtools+D123+1hjk213h@example.com` will be delivered to the `devtools`
user\'s mailbox. Set this to the left part of the email address and it will be
prepended to all generated reply addresses.

For example, if you want to use `devtools@example.com`, this should be set
to `devtools`.' => '답변 메일에 대해 메일함을 하나만 사용하려면, 이 설정을 사용하여 생성되는 회신 주소에 공통 접두어를 설정할 수 있습니다. 이는 `devtools+D123+1hjk213h@example.com` 같은 메일 주소가 `devtools` 사용자의 메일함으로 전달된다는 점을 활용합니다. 이 값을 이메일 주소의 왼쪽 부분으로 설정하면 생성되는 모든 답장 주소 앞에 추가됩니다.

예를 들어 `devtools@example.com`을 사용하려는 경우, 이 값은 `devtools`로 설정해야 합니다.',
  'Cache Storage' => '캐시 스토리지',
  'At least one daemon is currently running as the wrong user.' => '현재 하나 이상의 데몬이 잘못된 사용자 계정으로써 실행 중입니다.',
  'Data Type' => '자료형',
  'Better Character Set Available' => '더 나은 문자 집합 사용 가능',
  'Small MySQL "%s"' => '작은 MySQL "%s"',
  'Value for option "%s" must be an integer.' => '옵션 "%s"의 값은 정수이어야 합니다.',
  'The request path, or request target.' => '요청 경로 또는 요청 대상입니다.',
  '%s Active / %s Total' => '활성됨 %s개 / 전체 %s개',
  'Automatic' => '자동',
  'Connection Error' => '연결 오류',
  'Options relating to authentication.' => '인증 관련 옵션입니다.',
  'Migrating file source...' => '파일 소스 이관 중...',
  'Autoincrement' => '자동 증가',
  'Dark' => '다크',
  'GZip Compression May Not Be Enabled' => 'GZip 압축이 활성화되지 않았을 수 있음',
  'Typeahead strategies are now managed automatically.' => 'Typeahead 전략은 이제 자동으로 관리됩니다.',
  'Return to Open Issue List' => '열린 문제 목록으로 돌아가기',
  'Activate read-only mode for maintenance or disaster recovery.' => '유지보수 또는 재해 복구를 위해 읽기 전용 모드를 활성화합니다.',
  'PHP also loaded these %s configuration file(s):' => array(
    'PHP는 또한 이 구성 파일을 로드했습니다:',
    'PHP는 또한 이 구성 파일들을 로드했습니다:',
  ),
  'Reading value from stdin...' => 'stdin에서 값을 읽는 중...',
  'Option "%s" is of type "%s", but the value you provided is not a valid JSON list: when providing a set from the command line, specify it as a list of values in JSON. You may need to quote the value for your shell (for example: \'["a", "b", ...]\').' => '옵션 "%s"은(는) 유형 "%s"이지만, 제공한 값은 유효한 JSON 목록이 아닙니다: 명령줄에서 값을 지정할 때는 JSON 형식의 값 목록으로 지정하세요. 사용하는 셸에 따라 값을 따옴표로 묶어야 할 수도 있습니다(예: \'["a", "b", ...]\').',
  'To rebuild the index, run this command:' => '인덱스를 다시 빌드하려면 다음 명령을 실행하세요:',
  'This software can highlight a few languages by default, but installing and enabling Pygments (a third-party highlighting tool) will add syntax highlighting for many more languages. 

For instructions on installing and enabling Pygments, see the %s configuration option.

If you do not want to install Pygments, you can ignore this issue.' => '이 소프트웨어는 기본적으로 몇 가지 언어에 대해서만 구문 강조 기능을 제공하지만, Pygments(타사 구문 강조 도구)를 설치하고 활성화하면 더 많은 언어에 대한 구문 강조 기능을 사용할 수 있습니다.

Pygments 설치 및 활성화 방법에 대한 자세한 내용은 %s 구성 옵션을 참조하세요.

Pygments를 설치하지 않으려면 이 항목을 무시해도 됩니다.',
  'Disable Recaptcha' => 'Recaptcha 비활성화',
  'Sample every request (slow).' => '모든 요청을 샘플링합니다 (느림).',
  'The daemons are not running, background processing (including sending email, rebuilding search indexes, importing commits, cleaning up old data, and running builds) can not be performed.

Use %s to start daemons. See %s for more information.' => '데몬이 실행 중이 아니므로 백그라운드 처리(이메일 전송, 검색 인덱스 재구축, 커밋 가져오기, 오래된 데이터 정리 및 빌드 실행 포함)를 수행할 수 없습니다.

데몬을 시작하려면 %s을(를) 사용하세요. 자세한 내용은 %s을(를) 참조하세요.',
  'Unsafe MySQL "local_infile" Setting Enabled' => '안전하지 않은 MySQL "local_infile" 설정 활성화됨',
  'The "feed.http-hooks" option is deprecated in favor of Webhooks. This option will be removed in a future version of the software.

You can configure Webhooks in Herald.

To resolve this issue, remove all URIs from "feed.http-hooks".' => '"feed.http-hooks" 옵션은 구식이며, Webhooks로 대체되었습니다. 이 옵션은 향후 버전에서 제거됩니다.

Webhooks는 Herald에서 구성할 수 있습니다.

이 문제를 해결하려면 "feed.http-hooks"에서 모든 URI를 제거하세요.',
  'The PATH component \'%s\' (which resolves as the absolute path \'%s\') is not usable because \'%s\' does not exist.' => 'PATH 구성 요소 \'%s\'(절대 경로 \'%s\'로 해석됨)은(는) \'%s\'이(가) 존재하지 않기 때문에 사용할 수 없습니다.',
  'The search index algorithm has been updated and the index needs be rebuilt.' => '검색 인덱스 알고리즘이 업데이트되어 인덱스를 재빌드해야 합니다.',
  'The current PHP configuration has these %d value(s):' => array(
    '현재 PHP 구성은 이 값을 가지고 있습니다:',
    '현재 PHP 구성은 이 값들을 가지고 있습니다:',
  ),
  'Database host "%s" is configured as a master, but is replicating another host. This is dangerous and can mangle or destroy data. Only replicas should be replicating. Stop replication on the host or adjust configuration.' => '데이터베이스 호스트 "%s"은(는) 마스터로 구성되어 있지만, 다른 호스트를 레플리카하고 있습니다. 이는 위험하며 데이터 손상이나 파괴를 초래할 수 있습니다. 레플리카만 레플리카 되어야 합니다. 해당 호스트에서 레플리카 하는 것을 중지하거나 구성을 조정하세요.',
  'This issue is currently ignored, and does not show a global warning.' => '이 문제는 현재 무시되었으며, 전역 경고를 표시하지 않습니다.',
  'Cache Status' => '캐시 상태',
  'You have at least one repository configured which uses this version control system. It will not work without the VCS binary.' => '이 버전 관리 시스템을 사용하는 저장소가 하나 이상 구성되어 있습니다. VCS 바이너리가 없으면 작동하지 않습니다.',
  'Done. Migrated %d keys.' => '완료되었습니다. 키 %d개를 이관했습니다.',
  'The remote IP.' => '원격 IP입니다.',
  'Disable Prototypes' => '프로토타입 비활성화',
  'US West (PDT)' => '미국 서부 (PDT)',
  'Deleted \'%s\' from %s configuration.' => '%2$s 구성에서 \'%s\'을(를) 삭제했습니다.',
  'Run Normally' => '평범하게 실행',
  'Default key for HMAC digests where the key is not important (i.e., the hash itself is secret). You can change this if you want (to any other string), but doing so will break existing sessions and CSRF tokens. This option is deprecated. Newer code automatically manages HMAC keys.' => '해시값 자체가 비밀인 경우(즉, 키가 중요하지 않은 경우)에 HMAC 다이제스트에 사용할 기본 키입니다. 원하는 경우 이 값을 다른 문자열로 변경할 수 있지만, 변경하면 기존 세션과 CSRF 토큰이 손상됩니다. 이 옵션은 구식입니다. 최신 코드에서는 HMAC 키를 자동으로 관리합니다.',
  'Highlight %s as PHP.' => '%s을(를) PHP로 강조 표시합니다.',
  'MySQL is Using Default Stopword File' => 'MySQL이 기본 불용어 파일을 사용 중임',
  'Pagespeed is enabled, but should be disabled.' => 'Pagespeed가 활성되어 있지만, 비활성화 되어야 합니다.',
  'Paths to additional phutil libraries to load.' => '추가적으로 로드할 phutil 라이브러리 경로입니다.',
  'User Guide: Prototype Applications' => '사용자 가이드: 프로토타입 애플리케이션',
  'If you enable this, linked YouTube videos will be embedded inline. This has mild security implications (you\'ll leak referrers to YouTube) and is pretty silly (but sort of awesome).' => '이 기능을 활성화하면 링크된 YouTube 동영상이 본문 안에 삽입됩니다. 이는 약간의 보안 문제를 야기할 수 있고 (YouTube로 연결되는 리퍼러가 노출될 수 있음), 다소 우스꽝스럽습니다 (약간 멋지기도 합니다).',
  'Library' => '라이브러리',
  'The \'%s\' binary could not be located or executed.' => '\'%s\' 바이너리를 찾거나 실행할 수 없습니다.',
  'Show Email Preferences Link' => '이메일 환경 설정 링크 표시',
  'Confirm before redirecting so DarkConsole can be examined.' => 'DarkConsole을 확인할 수 있도록 넘겨주기 전에 확인하세요.',
  'If you enable `%s`, this software uses "From" to authenticate users. You can
additionally enable this setting to try to authenticate with \'Reply-To\'. Note
that this is completely spoofable and insecure (any user can set any \'Reply-To\'
address) but depending on the nature of your install or other deliverability
conditions this might be okay. Generally, you can\'t do much more by spoofing
Reply-To than be annoying (you can write but not read content). But this is
still **COMPLETELY INSECURE**.' => '`%s` 옵션을 활성화하면 이 소프트웨어는 "발송인" 주소를 사용하여 사용자를 인증합니다. 추가로 이 설정을 활성화하여 \'회신 주소\'를 사용하여 인증을 시도할 수도 있습니다. 하지만 이 방법은 완전히 위조 가능하고 안전하지 않습니다(어떤 사용자든 \'회신 주소\'를 임의로 설정할 수 있습니다). 설치 환경이나 기타 전달 조건에 따라 문제가 없을 수도 있습니다. 일반적으로 \'회신 주소\'를 위조하는 것은 단순히 불편을 초래하는 정도(콘텐츠를 작성할 수는 있지만 읽을 수는 없음)에 그칩니다. 하지만 이는 여전히 **완전히 안전하지 않습니다**.',
  'Define a cluster by providing a whitelist of host addresses that are part of the cluster.

Hosts on this whitelist have special powers. These hosts are permitted to bend security rules, and misconfiguring this list can make your install less secure. For more information, see **[[ %s | %s ]]**.

Define a list of CIDR blocks which whitelist all hosts in the cluster and no additional hosts. See the examples below for details.

When cluster addresses are defined, hosts will also reject requests to interfaces which are not whitelisted.' => '클러스터에 포함될 호스트 주소의 허용 목록을 제공하여 클러스터를 정의하세요.

이 허용 목록에 있는 호스트는 특별한 권한을 갖습니다. 이러한 호스트는 보안 규칙을 우회할 수 있으며, 이 목록을 잘못 구성하면 설치 보안이 취약해질 수 있습니다. 자세한 내용은 **[[ %s | %s ]]**를 참조하세요.

클러스터의 모든 호스트를 허용 목록에 포함하고 추가 호스트는 포함하지 않는 CIDR 블록 목록을 정의하세요.

자세한 정보는 아래 예제를 참조하세요. 클러스터 주소가 정의되면 호스트는 허용 목록에 없는 인터페이스에 대한 요청도 거부합니다.',
  'On host "%s", MySQL is configured with a small "%s" (%d), which may cause some large writes to fail. The recommended minimum value for this setting is "%d".' => '호스트 "%s"에서 MySQL은 작은 "%s"(%d) 값으로 구성되어 있어 일부 대용량 쓰기 작업이 실패할 수 있습니다. 이 설정에 권장되는 최소값은 "%d"입니다.',
  'Config option "%s" is invalid. The timezone identifier must be a valid timezone identifier recognized by PHP, like "%s".' => '설정 옵션 "%s"이(가) 유효하지 않습니다. 시간대 식별자는 PHP에서 인식하는 유효한 시간대 식별자여야 합니다(예: "%s").',
  'The PATH component \'%s\' (which resolves as the absolute path \'%s\') is not usable because \'%s\' is not a directory.' => 'PATH 구성 요소 \'%s\'(절대 경로 \'%s\'로 해석됨)은(는) \'%s\'이(가) 디렉터리가 아니므로 사용할 수 없습니다.',
  'Configure %s' => '%s 구성하기',
  'Normally, pages are profiled only when explicitly requested via DarkConsole. However, it may be useful to profile some pages automatically.

Set this option to a positive integer N to profile 1 / N pages automatically. For example, setting it to 1 will profile every page, while setting it to 1000 will profile 1 page per 1000 requests (i.e., 0.1%% of requests).

Since profiling is slow and generates a lot of data, you should set this to 0 in production (to disable it) or to a large number (to collect a few samples, if you\'re interested in having some data to look at eventually). In development, it may be useful to set it to 1 in order to debug performance problems.

NOTE: You must install XHProf for profiling to work.' => '일반적으로 문서 프로파일링은 DarkConsole을 통해 명시적으로 요청할 때만 수행됩니다. 하지만 일부 문서를 자동으로 프로파일링하는 것이 유용할 수 있습니다.

이 옵션을 양의 정수 N으로 설정하면 1/N개의 문서가 자동으로 프로파일링됩니다. 예를 들어, 1로 설정하면 모든 문서가 프로파일링되고, 1000으로 설정하면 1000번의 요청당 1개 문서(즉, 요청의 0.1%%)가 프로파일링됩니다.

프로파일링은 속도가 느리고 많은 양의 데이터를 생성하므로, 프로덕션 환경에서는 이 옵션을 0으로 설정하여 프로파일링을 비활성화하거나, 나중에 분석할 데이터를 수집하려는 경우 큰 값으로 설정하는 것이 좋습니다. 개발 환경에서는 성능 문제를 디버깅하기 위해 이 옵션을 1로 설정하는 것이 유용할 수 있습니다.

참고: 프로파일링 기능을 사용하려면 XHProf를 설치해야 합니다.',
  'Missing "zip" Extension' => '"zip" 확장 기능 누락됨',
  'Set the language list which appears in dropdowns.' => '드롭다운 메뉴에 표시될 언어 목록을 설정합니다.',
  'Inverse' => '역방향',
  'Deprecated Config Source' => '구식 구성 소스',
  'Indefinite' => '무기한',
  'Edge Types' => '엣지 유형',
  'Disable access log.' => '접근 로그를 비활성화합니다.',
  'Logo configuration is not valid: value must be a dictionary.' => '로고 구성이 유효하지 않습니다: 값은 딕셔너리이어야 합니다.',
  'Really ignore this setup issue?' => '정말로 이 설정 문제를 무시합니까?',
  'Config option "%s" is invalid. The URI must start with "%s" or "%s".' => '구성 옵션 \'%s\'이(가) 유효하지 않습니다. URI는 "%s" 또는 "%s"(으)로 시작해야 합니다.',
  'Set default user-agent to "%s"' => '기본 사용자 에이전트를 "%s"(으)로 설정합니다.',
  'Options relating to syntax highlighting source code.' => '소스 코드 구문 강조 관련 옵션입니다.',
  'Allow HTTP' => 'HTTP 허용',
  'Simple Example' => '단순한 예시',
  'Auth Config Unlocked' => 'Auth 구성 잠금 해제됨',
  'Synchronized' => '동기화됨',
  'No REMOTE_ADDR is available, so this server cannot determine the origin address for requests. This will prevent the software from performing important security checks. This most often means you have a mistake in your preamble script. Consult the documentation (%s) and double-check that the script is written correctly.' => 'REMOTE_ADDR을 사용할 수 없으므로 이 서버는 요청의 발신 주소를 확인할 수 없습니다. 이로 인해 소프트웨어가 중요한 보안 검사를 수행할 수 없게 됩니다. 이는 대부분 프리앰블 스크립트에 오류가 있음을 의미합니다. 설명문서(%s)를 참조하여 스크립트가 올바르게 작성되었는지 다시 확인하세요.',
  'Access key for Amazon EC2.' => 'Amazon EC2에 대한 접근 키입니다.',
  '%s Component Unusable' => '%s 구성 요소 사용할 수 없음',
  'Unsynchronized' => '동기화되지 않음',
  'Available search engines are now automatically discovered at runtime.' => '사용 가능한 검색 엔진은 이제 런타임에 자동으로 발견됩니다.',
  'Key for HMAC digests.' => 'HMAC 다이제스트 키입니다.',
  'Enable applications which are still under development.' => '아직 개발 중인 애플리케이션을 활성화합니다.',
  'The request duration, in microseconds.' => '요청 소요 시간(마이크로초)입니다.',
  'Amazon S3 region where your S3 bucket is located. When you specify a region, you should also specify a corresponding endpoint with `amazon-s3.endpoint`. You can find a list of available regions and endpoints in the AWS documentation.' => 'Amazon S3 버킷이 위치한 리전입니다. 리전을 지정할 때는 `amazon-s3.endpoint`를 사용하여 해당 종단점도 지정해야 합니다. 사용 가능한 리전 및 종단점 목록은 AWS 설명문서에서 확인할 수 있습니다.',
  'Disabled Application' => '비활성화된 애플리케이션',
  'MySQL %s Not Supported' => 'MySQL %s 미지원',
  'Option "%s" is of type "%s", but the current value ("%s") is not among the set of valid values: %s.' => '옵션 "%s"은(는) 유형 "%s"이지만, 현재 값("%s")이 유효한 값 중 하나가 아닙니다: %s.',
  'Auth Application' => 'Auth 애플리케이션',
  'The environmental variable %s is empty. This server will not be able to execute some commands.' => '환경 변수 %s이(가) 비어 있습니다. 이 서버는 일부 명령을 실행할 수 없습니다.',
  '%s.%s (%s)' => '%s.%s (%s)',
  'There is a new indirection layer between the strings that appear as VCS authors and committers (such as "John Developer <johnd@bigcorp.com>") and the user account that gets associated with VCS commits.' => 'VCS 작성자와 커미터로 표시되는 문자열(예: "John Developer <johnd@bigcorp.com>")과 VCS 커밋에 연결되는 사용자 계정 사이에 새로운 간접 계층이 생겼습니다.',
  'All Differential fields are now managed through the configuration option "%s". Use that option to configure which fields are shown.' => '이제 모든 Differential 필드는 구성 옵션 "%s"을(를) 통해 관리됩니다. 해당 옵션을 사용하여 표시할 필드를 구성하세요.',
  'Use HSTS' => 'HSTS 사용',
  'The current MySQL configuration has these %d value(s):' => array(
    '현재 MySQL 구성은 이 값을 가지고 있습니다:',
    '현재 MySQL 구성은 이 값들을 가지고 있습니다:',
  ),
  'Show "To:" and "Cc:" footer hints in email.' => '이메일에 "To:"와 "CC:" 바닥글 힌트를 표시합니다.',
  'Write SSH log here.' => '여기에 SSH 로그를 작성합니다.',
  'Migrate From "feed.http-hooks" to Webhooks' => '"feed.http-hooks"에서 웹훅으로 이관',
  'Partitioning and replication are now managed in primary configuration.' => '파티션 및 레플리카 작업은 이제 기본 구성에서 관리됩니다.',
  'You can find more information about configuring OPcache in the %s.' => 'OPcache 구성에 대한 자세한 정보는 %s에서 확인할 수 있습니다.',
  'PHP Timezone' => 'PHP 시간대',
  'This option is not recognized. It may be misspelled.' => '이 옵션을 인식할 수 없습니다. 철자가 틀렸을 수 있습니다.',
  'Internal.' => '내부 매개변수입니다.',
  'Advanced Settings' => '고급 설정',
  'SSH log format.' => 'SSH 로그 형식입니다.',
  'After installing new PHP extensions, <strong>restart everything for the changes to take effect</strong>. For help with restarting everything, see %s in the documentation.' => '새로운 PHP 확장 프로그램을 설치한 후에는 <strong>변경 사항을 적용하기 위해 모든 것을 다시 시작해야 합니다</strong>. 모든 것을 다시 시작하는 방법에 대한 도움말은 설명문서의 %s을(를) 참조하세요.',
  'Default address used when generating mail.' => '메일을 생성할 때 사용되는 기본 주소입니다.',
  'By default, this software serves files from the same domain the application is served from. This is convenient, but presents a security risk.

You should configure a CDN or alternate file domain to mitigate this risk. Configuring a CDN will also improve performance. See [[ %s | %s ]] for instructions.' => '기본적으로 이 소프트웨어는 애플리케이션이 실행되는 도메인과 동일한 도메인에서 파일을 제공합니다. 이는 편리하지만 보안 위험을 초래할 수 있습니다. 이러한 위험을 완화하려면 CDN 또는 대체 파일 도메인을 구성해야 합니다. CDN을 구성하면 성능도 향상됩니다. 자세한 내용은 [[ %s | %s ]]를 참조하세요.',
  'Learn more about locked and hidden options.' => '잠긴 및 숨겨진 옵션에 대해 자세히 알아보세요.',
  'Default address used as a "From" or "To" email address when an address is
required but no meaningful address is available.

If you configure inbound mail, you generally do not need to set this:
the software will automatically generate and use a suitable mailbox on the
inbound mail domain.

Otherwise, this option should be configured to point at a valid mailbox which
discards all mail sent to it. If you point it at an invalid mailbox, mail sent
by the software and some mail sent by users will bounce. If you point it at a
real user mailbox, that user will get a lot of mail they don\'t want.

For further guidance, see **[[ %s | %s ]]** in the documentation.' => '의미 있는 주소를 사용할 수 없지만 주소가 필요한 경우 "발송인" 또는 "수신인" 이메일 주소로 사용되는 기본 주소입니다.

수신 메일을 구성하는 경우 일반적으로 이 값을 설정할 필요가 없습니다. 소프트웨어가 수신 메일 도메인에서 적절한 메일함을 자동으로 생성하고 사용합니다.

그렇지 않다면 이 옵션은 수신된 모든 메일을 폐기하는 유효한 메일함을 가리키도록 구성해야 합니다. 유효하지 않은 메일함을 가리키면 소프트웨어가 보낸 메일과 사용자가 보낸 일부 메일이 반송됩니다. 실제 사용자 메일함을 가리키면 해당 사용자는 원하지 않는 많은 메일을 받게 됩니다.

자세한 지침은 설명문서의 **[[ %s | %s ]]**을(를) 참고하세요.',
  'You must start the daemons to send email, rebuild search indexes, and do other background processing.' => '메일을 보내고, 검색 인덱스를 재빌드하고, 기타 백그라운드 처리를 하려면 데몬을 시작해야 합니다.',
  'After editing the PHP configuration, <strong>restart everything for the changes to take effect</strong>. For help with restarting everything, see %s in the documentation.' => '새로운 PHP 확장 프로그램을 편집한 후에는 <strong>변경 사항을 적용하기 위해 모든 것을 다시 시작해야 합니다</strong>. 모든 것을 다시 시작하는 방법에 대한 도움말은 설명문서의 %s을(를) 참조하세요.',
  'Repository Status' => '저장소 상태',
  'Do Not Use HSTS' => 'HSTS를 사용하지 않음',
  'List all configuration keys.' => '모든 구성 키를 나열합니다.',
  'Per-application mail subject prefix customization is no longer directly supported. Prefixes and other strings may be customized with "translation.override".' => '애플리케이션별 메일 제목 접두어 사용자 지정은 더 이상 직접 지원되지 않습니다. 접두어 및 기타 문자열은 "translation.override"로 사용자 지정할 수 있습니다.',
  'Configuration key "%s" is of type "%s". Specify it in JSON.' => '구성 키 "%s"의 유형은 "%s"입니다. JSON으로 지정하세요.',
  'This will only affect the current web frontend. Daemons and any other web frontends may continue to use older, cached code from their opcache.' => '이 변경 사항은 현재 웹 프런트엔드에만 영향을 미칩니다. 데몬 및 기타 웹 프런트엔드는 opcache에 저장된, 이전에 캐시된 코드를 계속 사용할 수 있습니다.',
  'Configure real-time notifications.' => '실시간 알림을 구성합니다.',
  'Surplus Key' => '여분의 키',
  'Cluster Setup' => '클러스터 설정',
  'Obsolete Configuration Option "%s"' => '사용되지 않는 구성 옵션 "%s"',
  'The \'%s\' binary could not be found. Set the webserver\'s %s environmental variable to include the directory where it resides, or add that directory to \'%s\' in configuration.' => '\'%s\' 바이너리를 찾을 수 없습니다. 웹 서버의 환경 변수 %s에 해당 바이너리가 있는 디렉터리를 포함시키거나, 구성의 \'%s\'에 해당 디렉터리를 추가하세요.',
  'You can disable the email preference link in emails if users prefer smaller
emails.' => '사용자가 더 작은 이메일을 선호하는 경우 이메일에서 이메일 환경 설정 링크를 비활성화할 수 있습니다.',
  'Expected Autoincrement' => '예상된 자동 증가',
  'MySQL is configured (on host "%s") to only index words with at least %d characters.' => 'MySQL은 (호스트 "%s"에서) 최소 %d개의 문자로 구성된 단어만 인덱싱하도록 구성되어 있습니다.',
  'Too many arguments: expected only a configuration key when using "--stdin".' => '인수가 너무 많습니다: "--stdin"을 사용할 때는 구성 키만 예상했습니다.',
  'Global customization of monospaced fonts is no longer supported.' => '고정폭 글꼴에 대한 전역 사용자 지정은 더 이상 지원되지 않습니다.',
  'Major Web/Database Clock Skew' => '중대한 웹/데이터베이스 시계 편차',
  'No repository cluster services are configured.' => '구성된 저장소 클러스터 서비스가 없습니다.',
  'Syntax Highlighting' => '문법 강조',
  'This schema is not expected to exist.' => '이 스키마는 존재하는 것으로 예측되지 않습니다.',
  'View status information for databases, caches, repositories, and other services.' => '데이터베이스, 캐시, 저장소, 및 기타 서비스에 대한 상태 정보를 봅니다.',
  'This configuration value is defined in these %d configuration source(s): %s.' => array(
    '이 구성 값은 다음 구성 소스에 정의되어 있습니다: %2$s.',
    '이 구성 값은 다음 구성 소스 %d개에 정의되어 있습니다: %s.',
  ),
  'Specify a configuration key to get.' => '가져올 구성 키를 지정하세요.',
  'Can not compare two missing schemata!' => '두 개의 누락된 스키마타를 비교할 수 없습니다!',
  'Key on Wrong Columns' => '잘못된 열의 키',
  'S3 Partially Configured' => 'S3 부분적 구성됨',
  'Migrate file-based configuration to more modern storage.' => '파일 기반 구성을 더 현대적인 스토리지로 이관합니다.',
  'Skipping config of source type %s...' => '소스 유형 %s의 구성 건너뛰는 중...',
  'Reply addresses can either be private (more secure) or public (which works better with mailing lists).' => '회신 주소는 비공개(더 안전) 또는 공개(메일링 리스트에 더 적합)일 수 있습니다.',
  'This server received an "X-Mod-Pagespeed" or "X-Page-Speed" HTTP header on this request, which indicates that you have enabled "mod_pagespeed" on this server. This module is not compatible with this software. You should disable the module.' => '이 서버는 요청에서 "X-Mod-Pagespeed" 또는 "X-Page-Speed" HTTP 헤더를 수신했습니다. 이는 서버에서 "mod_pagespeed" 모듈이 활성화되어 있음을 나타냅니다. 이 모듈은 본 소프트웨어와 호환되지 않으므로 비활성화해야 합니다.',
  'No profiling' => '프로파일링 없음',
  'PHID Types' => 'PHID 유형',
  'Wrote configuration key "%s" to database storage.' => '데이터베이스 스토리지에 "%s" 구성 키를 작성했습니다.',
  'The environmental variable %s does not contain %s. You have enabled pygments, which requires %s to be available in your %s variable.' => '환경 변수 %s에는 %s이(가) 포함되어 있지 않습니다. pygments를 활성화했는데, 이를 위해서는 %4$s 변수에 %s이(가) 이용 가능해야 합니다.',
  'Use Pygments' => 'Pygments 사용',
  'Amazon Web Services' => 'Amazon 웹 서비스',
  'Customized settings for applications.' => '애플리케이션에 대한 사용자 지정 설정입니다.',
  'US Central (CDT)' => '미국 중부 (CDT)',
  'Config option "%s" is invalid. The URI must contain a dot ("%s"), like "%s", not just a bare name like "%s". Some web browsers will not set cookies on domains with no TLD.' => '설정 옵션 "%s"이(가) 잘못되었습니다. URI에는 "%3$s"처럼 마침표("%s")가 포함되어야 하며, "%4$s"처럼 이름만 있으면 안 됩니다. 일부 웹 브라우저는 TLD가 없는 도메인에는 쿠키를 설정하지 않습니다.',
  '%s Active' => '%s 활성됨',
  'Subschemata Have Warnings' => '하위 스키마타에 경고가 있음',
  'Require Administrators to Approve Accounts' => '계정 승인 관리자 승인을 요구',
  'Set %s in your PHP configuration to at least 32MB to support large file uploads.' => '대용량 파일 업로드를 지원하려면 PHP 설정에서 %s을(를) 최소 32MB로 설정하세요.',
  'Configure integration with AWS (EC2, SES, S3, etc.).' => 'AWS(EC2, SES, S3 등)와의 통합을 구성합니다.',
  'The system sudo user.' => '시스템 sudo 사용자입니다.',
  'You can disable the "To:" and "Cc:" footers in mail if users prefer smaller
messages.' => '사용자가 더 짧은 메시지를 선호하는 경우 메일 하단의 "To:" 및 "CC:" 항목을 비활성화할 수 있습니다.',
  'MySQL %s Mode Not Set' => 'MySQL %s 모드가 설정되지 않음',
  'If you are using Apache, your server may be configured with "SetInputFilter DEFLATE". This directive destructively mangles requests and emits them with "Content-Length" and "Content-Encoding" headers that no longer match the data in the request body.' => 'Apache 서버를 사용 중인 경우, 서버에 "SetInputFilter DEFLATE"가 구정되어 있을 수 있습니다. 이 지시문은 요청을 파괴적으로 변형시켜 요청 본문의 데이터와 일치하지 않는 "Content-Length" 및 "Content-Encoding" 헤더를 포함하여 전송합니다.',
  'Options for platform developers, including debugging.' => '디버깅을 포함한 플랫폼 개발자를 위한 옵션입니다.',
  'A component of the configured PATH can not be used by the webserver: %s' => '구성된 PATH의 구성 요소 중 하나를 웹 서버에서 사용할 수 없습니다: %s',
  'Allow a single mailbox to be used for all replies.' => '모든 답장에 대해 하나의 사서함을 사용할 수 있도록 허용합니다.',
  'Use specific endpoint' => '특정 종단점 사용',
  'Configure Recaptcha captchas.' => 'Recaptcha 캡차를 구성합니다.',
  'Report this Issue to the Upstream' => '이 문제를 업스트림에 보고',
  'Disable SSH error log.' => 'SSH 오류 로그를 비활성화합니다.',
  'Options relating to PHD (daemons).' => 'PHD (데몬) 관련 옵션입니다.',
  'Repos' => '저장소',
  'Database configuration.' => '데이터베이스 구성입니다.',
  'Option "%s" is of type "%s", but the current value ("%s") is not a known, concrete subclass of base class "%s". Valid selections are: %s.' => '옵션 "%s"은(는) 유형 "%s"이지만, 현재 값("%s")은 기본 클래스 "%s"의 알려진 구상 하위 클래스가 아닙니다. 유효한 선택: %s.',
  'Databases' => '데이터베이스',
  'Basic Example' => '기본 예제',
  '%s In / %s Out' => '%s개 수신 / %s개 발신',
  'Adapter class to use to transmit mail to the MTA. The default uses
PHPMailer, which will invoke "mail". This is appropriate if mail actually
works on your host, but if you haven\'t configured mail it may not be so great.
A number of other mailers are available (e.g., SES, SendGrid, SMTP, Sendmail,
custom mailers). This option is deprecated in favor of \'cluster.mailers\'.' => 'MTA로 메일을 전송하는 데 사용할 어댑터 클래스입니다. 기본값은 PHPMailer이며, 이는 "mail"을 호출합니다. 메일이 호스트에서 실제로 작동하는 경우 적합하지만, 메일 설정을 구성하지 않은 경우에는 제대로 작동하지 않을 수 있습니다. SES, SendGrid, SMTP, Sendmail, 사용자 지정 메일러 등 다른 메일러도 사용할 수 있습니다. 이 옵션은 \'cluster.mailers\'로 대체되어 더 이상 사용되지 않습니다.',
  'This option allows you to stop this service from sending data to most external
services: it will disable email, SMS, repository mirroring, remote builds,
Doorkeeper writes, and webhooks.

This option is intended to allow an instance to be exported, copied, imported,
and run in a test environment without impacting users. For example, if you are
migrating to new hardware, you could perform a test migration first with this
flag set, make sure things work, and then do a production cutover later with
higher confidence and less disruption.

Without making use of this flag to silence the temporary test environment,
users would receive duplicate email during the time the test instance and old
production instance were both in operation.' => '이 옵션을 사용하면 이 서비스가 대부분의 외부 서비스로 데이터를 전송하는 것을 중지할 수 있습니다. 이메일, SMS, 저장소 미러링, 원격 빌드, Doorkeeper 쓰기 및 웹훅이 비활성화됩니다.

이 옵션은 인스턴스를 내보내고, 복사하고, 가져와서 사용자에게 영향을 주지 않고 테스트 환경에서 실행할 수 있도록 하기 위한 것입니다. 예를 들어 새 하드웨어로 마이그레이션하는 경우 이 플래그를 설정하여 먼저 테스트 마이그레이션을 수행하고 모든 것이 제대로 작동하는지 확인한 다음 나중에 더 높은 신뢰도와 적은 중단으로 프로덕션 환경으로 전환할 수 있습니다.

이 플래그를 사용하지 않고 임시 테스트 환경을 비활성화하면 테스트 인스턴스와 기존 프로덕션 인스턴스가 모두 작동하는 동안 사용자가 중복 이메일을 수신하게 됩니다.',
  'Whitelist Specific Addresses' => '특정 주소를 허용 목록에 추가',
  'Other Version Information' => '기타 버전 정보',
  'The mapping from VCS users to %s users has changed and must be rebuilt.' => 'VCS 사용자에서 %s 사용자로의 매핑이 변경되었으므로 재빌드해야 합니다.',
  'Authentication configuration is currently unlocked. Once you finish configuring authentication, you should lock it.' => '현재 인증 설정이 잠금 해제된 상태입니다. 인증 설정을 완료한 후에는 잠금 기능을 활성화해야 합니다.',
  'Use `%s` instead of this option.' => '이 옵션 대신 `%s`을(를) 사용하세요.',
  'You have not configured any authentication providers yet. You should add a provider (like username/password, LDAP, or GitHub OAuth) so users can register and log in. You can add and configure providers using the Auth Application.' => '아직 인증 제공자를 구성하지 않았습니다. 사용자가 등록하고 로그인할 수 있도록 제공자(예: 사용자 이름/비밀번호, LDAP 또는 GitHub OAuth)를 추가해야 합니다. 인증 애플리케이션을 사용하여 제공자를 추가하고 구성할 수 있습니다.',
  'Run the storage upgrade script to upgrade databases (host "%s" is out of date). Missing patches: %s.' => '데이터베이스를 업그레이드하려면 스토리지 업그레이드 스크립트를 실행하세요(호스트 "%s"이(가) 최신 버전이 아닙니다). 누락된 패치: %s.',
  'Resource deflation is now managed automatically.' => '리소스 디플레이션은 이제 자동으로 관리됩니다.',
  'MySQL' => 'MySQL',
  'Databases are created in a namespace, which defaults to \'phabricator\' -- for instance, the Differential database is named \'phabricator_differential\' by default. You can change this namespace if you want. Normally, you should not do this unless you are developing extensions and using namespaces to separate multiple sandbox datasets.' => '데이터베이스는 \'phabricator\'라는 기본 이름공간에 생성됩니다. 예를 들어, Differential 데이터베이스 이름공간은 기본적으로 \'phabricator_differential\'로 명명됩니다. 원한다면 이 이름공간을 변경할 수 있습니다. 하지만 일반적으로 확장 기능을 개발하거나 여러 샌드박스 데이터셋을 구분하기 위해 이름공간을 사용하는 경우가 아니라면 변경하지 않는 것이 좋습니다.',
  'Serious business' => '진지 모드',
  'External loaders have been replaced. Extend `%s` to implement new PHID and handle types.' => '외부 로더가 교체되었습니다. `%s`을(를) 확장하여 새로운 PHID를 구현하고 유형을 처리하세요.',
  'Authenticating users based on "Reply-To" is no longer supported.' => '"회신 주소"를 기반으로 한 사용자 인증은 더 이상 지원되지 않습니다.',
  'Option "%s" is of type "%s", but the configured value is not a list.' => '옵션 "%s"은(는) 유형 "%s"이지만, 구성된 값은 목록이 아닙니다.',
  'Cluster instance name, if configured.' => '구성한 경우 쓰이는 클러스터 인스턴스 이름입니다.',
  'You likely need to fix your preamble script so REMOTE_ADDR is no longer empty.' => 'REMOTE_ADDR 필드가 비어 있지 않도록 프리앰블 스크립트를 수정해야 할 가능성이 높습니다.',
  'Unknown Config' => '알 수 없는 구성',
  'Detected %s serious issue(s) with the schemata.' => array(
    '스키마타에서 심각한 문제가 감지되었습니다.',
    '스키마타에서 심각한 문제 %s개가 감지되었습니다.',
  ),
  'Daemons Not Running' => '데몬이 실행 중이 아님',
  'MySQL username to use when connecting to the database.' => '데이터베이스에 연결할 때 사용할 MySQL 사용자 이름입니다.',
  'Secret key for Amazon EC2.' => 'Amazon EC2에 대한 비밀 키입니다.',
  'These %d configuration value(s) are related:' => array(
    '이 구성 값이 관련되어 있습니다:',
    '이러한 구성 값이 관련되어 있습니다:',
  ),
  'This software sent itself a request with "Accept-Encoding: gzip", but received an uncompressed response.

This may indicate that your webserver is not configured to compress responses. If so, you should enable compression. Compression can dramatically improve performance, especially for clients with less bandwidth.' => '이 소프트웨어는 "Accept-Encoding: gzip"을 사용하여 자체적으로 요청을 보냈지만 압축되지 않은 응답을 받았습니다.

이는 웹 서버가 응답을 압축하도록 구성되어 있지 않음을 나타낼 수 있습니다. 그 경우에는 압축을 활성화해야 합니다. 압축은 특히 대역폭이 적은 클라이언트의 성능을 크게 향상시킬 수 있습니다.',
  'If you have multiple %s environments (like a development/staging environment and a production environment), set the production environment URI here so that emails and other durable URIs will always generate with links pointing at the production environment. If unset, defaults to `%s`. Most installs do not need to set this option.' => '여러 개의 %s 환경(예: 개발/스테이징 환경과 프로덕션 환경)이 있는 경우, 이메일 및 기타 영구 URI에 프로덕션 환경을 가리키는 링크가 항상 포함되도록 프로덕션 환경 URI를 여기에 설정하세요. 설정하지 않으면 기본값은 `%s` 입니다. 대부분의 설치 환경에서는 이 옵션을 설정할 필요가 없습니다.',
  'Names must match to compare schemata!' => '스키마타를 비교하려면 이름이 일치해야 합니다!',
  'Users can make requests to other services from service hosts in some circumstances (for example, by creating a repository with a remote URL).

This may represent a security vulnerability if services on the same subnet will accept commands or reveal private information over unauthenticated HTTP GET, based on the source IP address. In particular, all hosts in EC2 have access to such a service.

This option defines a list of netblocks which requests will never be issued to. Generally, you should list all private IP space here.' => '사용자는 특정 상황(예: 원격 URL을 사용하여 저장소를 생성하는 경우)에서 서비스 호스트에서 다른 서비스에 요청을 보낼 수 있습니다.

하지만 동일 서브넷에 있는 서비스가 소스 IP 주소를 기반으로 인증되지 않은 HTTP GET 요청을 통해 명령을 수락하거나 개인 정보를 노출하는 경우 보안 취약점이 발생할 수 있습니다. 특히 EC2의 모든 호스트는 이러한 서비스에 접근할 수 있습니다.

이 옵션은 요청이 절대 전송되지 않을 네트워크 블록 목록을 정의합니다. 일반적으로 모든 개인 IP 공간 목록을 여기에 나열해야 합니다.',
  'Core Settings' => '핵심 설정',
  'Your MySQL server is configured with the "local_infile" option enabled. This option allows an attacker who finds an SQL injection hole to escalate their attack by copying files from the webserver into the database with "LOAD DATA LOCAL INFILE" queries, then reading the file content with "SELECT" queries.

You should disable this option in your %s file, in the %s section:

%s' => 'MySQL 서버가 "local_infile" 옵션이 활성화된 상태로 구성되어 있습니다. 이 옵션을 사용하면 SQL 인젝션 취약점을 발견한 공격자가 "LOAD DATA LOCAL INFILE" 쿼리를 사용하여 웹 서버에서 데이터베이스로 파일을 복사한 다음 "SELECT" 쿼리로 파일 내용을 읽어 공격을 확대할 수 있습니다.

이 옵션은 %s 파일의 %s 섹션에서 비활성화해야 합니다:

%s',
  'Setup Checks' => '설정 확인',
  'This system has an unpatched version of Bash with a severe, widely disclosed vulnerability.' => '이 시스템에는 심각하고 널리 알려진 취약점이 있는 패치가 적용되지 않은 Bash 버전이 설치되어 있습니다.',
  'Keys' => '키',
  'No Auth Providers' => '인증 제공자 없음',
  'Missing Required Extensions' => '필요한 확장 기능 없음',
  'This option has been migrated to the "Auth" application. Your old configuration is still in effect, but now stored in "Auth" instead of configuration. Going forward, you can manage authentication from the web UI.' => '이 옵션은 "Auth" 애플리케이션으로 이전되었습니다. 기존 설정은 그대로 유지되지만, 이제 설정 대신 "Auth" 애플리케이션에 저장됩니다. 앞으로는 웹 UI에서 인증을 관리할 수 있습니다.',
  'Provide a list of notification servers to enable real-time notifications.

For help setting up notification servers, see **[[ %s | %s ]]** in the
documentation.' => '실시간 알림을 활성화하려면 알림 서버 목록을 지정하세요.

알림 서버 설정에 대한 도움말은 설명문서의 **[[ %s | %s ]]**를 참조하세요.',
  'PHP is currently configured to honor requests from any MySQL server it connects to for the content of any local file.

This capability supports MySQL "LOAD DATA LOCAL INFILE" queries, but allows a malicious MySQL server read access to the local disk: the server can ask the client to send the content of any local file, and the client will comply.

Although it is normally difficult for an attacker to convince this software to connect to a malicious MySQL server, you should disable this option: this capability is unnecessary and inherently dangerous.

To disable this option, set: %s' => 'PHP는 현재 연결된 모든 MySQL 서버에서 로컬 파일의 내용을 요청하는 경우 이를 수락하도록 구성되어 있습니다.

이 기능은 MySQL의 "LOAD DATA LOCAL INFILE" 쿼리를 지원하지만, 악의적인 MySQL 서버가 로컬 디스크에 대한 읽기 권한을 갖도록 허용합니다. 서버는 클라이언트에게 로컬 파일의 내용을 전송하도록 요청할 수 있으며, 클라이언트는 이에 응하게 됩니다.

일반적으로 공격자가 이 소프트웨어를 악의적인 MySQL 서버에 연결하도록 유도하는 것은 어렵지만, 이 기능은 불필요하고 본질적으로 위험하므로 비활성화해야 합니다.

이 옵션을 비활성화하려면 다음을 설정하세요: %s.',
  'Activity "%s" is not currently marked as required, so there is no need to complete it.' => '활동 "%s"은(는) 현재 필수 활동으로 표시되어 있지 않으므로 완료할 필요가 없습니다.',
  'To continue, resolve this problem and reload the page.' => '계속하려면 이 문제를 해결하고 페이지를 새로 고침하세요.',
  'Wordmark' => '워드마크',
  'WARNING: This is a prototype option and the description below is currently pure fantasy.

Switch the service to read-only mode. In this mode, users will be unable to write new data. Normally, the cluster degrades into this mode automatically when it detects that the database master is unreachable, but you can activate it manually in order to perform maintenance or test configuration.' => '경고: 이 옵션은 프로토타입이며 아래 설명은 현재로서는 상상에 불과합니다!

서비스를 읽기 전용 모드로 전환합니다. 이 모드에서는 사용자가 새 데이터를 쓸 수 없습니다. 일반적으로 클러스터는 데이터베이스 마스터에 연결할 수 없음을 감지하면 자동으로 이 모드로 전환되지만, 유지보수 또는 구성 테스트를 수행하기 위해 수동으로 활성화할 수 있습니다.',
  'Severe Security Vulnerability: Unpatched Bash' => '심각한 보안 취약점: 패치되지 않은 배시',
  'Force HTTPS' => 'HTTPS 강제',
  'This key is not expected to exist.' => '이 키는 존재하는 것으로 예측되지 않습니다.',
  '%s.%s' => '%s.%s',
  '%s.%s.%s' => '%s.%s.%s',
  '%d related link(s):' => '관련된 링크:',
  'To rebuild identities, run this command:' => '식별 정보를 다시 빌드하려면 다음 명령을 실행하세요:',
  'Missing Repository Local Path' => '누락된 저장소 로컬 경로',
  'An alternate resource map is no longer supported. Instead, use multiple maps. See T4222.' => '대체 리소스 맵은 더 이상 지원되지 않습니다. 대신 여러개의 맵을 사용하세요. T4222를 참조하세요.',
  'Repository Services' => '저장소 서비스',
  'Inline comments are now always rendered with a limited amount of context.' => '이제 인라인 댓글은 항상 제한된 양의 컨텍스트와 함께 렌더링됩니다.',
  'Locked Configuration Option "%s" Has Database Value' => '잠긴 구성 옵션 "%s"에 데이터베이스 값이 있음',
  'Separate values with newlines or commas.' => '값들을 줄바꿈이나 쉼표로 구분하세요.',
  'Don\'t require email verification' => '이메일 인증을 요구하지 않음',
  'Configuration key "%s" is unknown. Use "bin/config list" to list all known keys.' => '구성 키 "%s"을(를) 알 수 없습니다. 알려진 모든 키를 나열하려면 "bin/config list"를 사용하세요.',
  'Alternate File Domain Not Configured' => '대체 파일 도메인 구성되지 않음',
  'Unknown schema issue "%s"!' => '알 수 없는 스키마 문제 "%s"!',
  'Embed Commons videos' => '공용 동영상 삽입',
  'Your server is configured with \'%s\', which prevents this software from opening files it requires access to.

Disable this setting to continue.' => '서버가 \'%s\'(으)로 구성되어 있기에, 이 소프트웨어가 접근 권한이 필요한 파일을 열 수 없습니다.

계속하려면 이 설정을 비활성화하세요.',
  'Limit page execution time to debug hangs.' => '멈춤 현상을 디버깅하기 위한 페이지 실행 시간 제한입니다.',
  'Base URI Not Configured' => '기본 URI 구성되지 않음',
  'Cannot identify the version of the %s repository because the webserver does not trust it (more info on Task %s).
Try this system resolution:
sudo git config --system --add safe.directory %s' => '웹 서버가 %s 저장소를 신뢰하지 않기 때문에 해당 저장소의 버전을 확인할 수 없습니다(태스크 %s에서 자세한 정보 확인). 다음 시스템 해결 방법을 시도해 보세요:
sudo git config --system --add safe.directory %s',
  'Always Activate DarkConsole' => 'DarkConsole을 항상 활성화',
  'This request included an invalid "Host" header, with value "%s". Host headers must contain a dot ("."), like "example.com". This is required for some browsers to be able to set cookies.

This may mean the base URI is configured incorrectly. You must serve this software from a base URI with a dot (like "https://devtools.example.com"), not a bare domain (like "https://devtools/"). If you are trying to use a bare domain, change your configuration to use a full domain with a dot in it instead.

This might also mean that your webserver (or some other network device, like a load balancer) is mangling the "Host" header, or you are using a tool or library to issue a request manually and setting the wrong "Host" header.

Requests must include a valid "Host" header.' => '이 요청에는 값이 "%s"인 유효하지 않은 "Host" 헤더가 포함되어 있습니다. 일부 브라우저가 쿠키를 설정할 수 있으려면 호스트 헤더에 "example.com"처럼 점(".")이 포함되어야 합니다.

이는 기본 URI가 잘못 구성되었음을 의미할 수 있습니다. 이 소프트웨어는 "https://devtools/" 같은 베어 도메인이 아니라 "https://devtools.example.com" 같은 점이 포함된 기본 URI에서 제공되어야 합니다. 베어 도메인을 사용하려는 경우, 대신 점이 포함된 전체 도메인을 사용하도록 구성을 변경하세요.

또한 웹서버(또는 로드 밸런서 같은 다른 네트워크 장치)가 "Host" 헤더를 변조하고 있거나, 도구 또는 라이브러리를 사용해 수동으로 요청을 보내면서 잘못된 "호스트" 헤더를 설정하고 있음을 의미할 수도 있습니다.

요청에는 유효한 "Host" 헤더가 포함되어야 합니다.',
  'User Interface' => '사용자 인터페이스',
  'No Schema Issues' => '스키마 문제 없음',
  'MySQL database hostname.' => 'MySQL 데이터베이스 호스트 이름입니다.',
  'Obsolete Config' => '사용되지 않는 구성',
  'Sets the default color scheme.' => '색상 스킴을 설정합니다.',
  'Clustering Introduction' => '클러스터링 소개',
  'By default, this software includes some flavor text in the UI, like a prompt to "Weigh In" rather than "Add Comment" in Maniphest. If you\'d prefer more traditional UI strings like "Add Comment", you can set this flag to disable most of the extra flavor.' => '기본적으로 이 소프트웨어는 Maniphest에서 "댓글 추가" 대신 "끼어들기"과 같은 일부 추가 텍스트를 UI에 포함합니다. "댓글 추가하기"와 같은 보다 전통적인 UI 문구를 선호하는 경우 이 플래그를 설정하여 대부분의 추가 텍스트를 비활성화할 수 있습니다.',
  'This software sent itself a test request and expected to get a bare JSON response back. It received a JSON response, but the response had extra whitespace at the beginning or end.

This usually means you have edited a file and left whitespace characters before the opening %s tag, or after a closing %s tag. Remove any leading whitespace, and prefer to omit closing tags.' => '이 소프트웨어는 자체적으로 테스트 요청을 보내고 순수한 JSON 응답을 받을 것으로 예상했습니다. 하지만 받은 JSON 응답의 시작이나 끝에 불필요한 공백이 있었습니다.

이는 일반적으로 파일을 편집할 때 시작 태그 %s 앞에 공백이 있거나 종료 태그 %s 뒤에 공백이 남아 있는 것을 의미합니다. 앞쪽의 공백은 제거하고, 종료 태그는 생략하는 것이 좋습니다.',
  'MySQL on this machine' => '이 머신의 MySQL',
  'No such configuration key \'%s\'! Use `%s` to list all keys.' => '그런 구성 키 \'%s\'은(는) 없습니다! `%s`을(를) 사용해서 모든 키를 나열하세요.',
  'You can respond to various application events by installing listeners, which will receive callbacks when interesting things occur. Specify a list of classes which extend PhabricatorEventListener here.' => '애플리케이션의 다양한 이벤트에 응답하려면 리스너를 설치하세요. 리스너는 중요한 이벤트가 발생했을 때 콜백을 수신합니다. 여기에 PhabricatorEventListener를 확장하는 클래스 목록을 지정하세요.',
  'This install has a fatal setup error, access the web interface to view details and resolve it.' => '이 설치에는 치명적인 설정 오류가 있습니다, 웹 인터페이스에 접근해서 세부 정보를 보고 해결하세요.',
  'Alternate domain to serve files from.' => '파일을 제공할 대체 도메인입니다.',
  'Your webserver is not forwarding credentials.' => '웹 서버가 자격 증명을 전달하지 않고 있습니다.',
  'Default non-pygments syntax highlighter engine.' => 'Pygments가 아닌 기본 구문 강조 표시 엔진입니다.',
  'HTTP Parameter Types' => 'HTTP 매개변수 유형',
  'Mangled Webserver Response' => '손상된 웹 서버 응답',
  'Setup issues to ignore.' => '무시할 설정 문제입니다.',
  'Directory that the daemons should use to store log files.' => '데몬이 로그 파일을 저장하는 데 사용할 디렉터리입니다.',
  'Only allow registration from particular domains.' => '특정 도메인에서만 등록을 허용합니다.',
  'Subschemata have setup failures.' => '하위 스키마타에 설정 실패가 있습니다.',
  'No performance sampling.' => '성능 샘플링이 없습니다.',
  'Database host "%s" is configured to use the default minimum word length when building search indexes, which is 4. This means words which are only 3 characters long will not be indexed and can not be searched for.

For example, you will not be able to find search results for words like \'SMS\', \'web\', or \'DOS\'.

You can change this setting to 3 to allow these words to be indexed. Alternatively, you can ignore this warning if you are not concerned about searching for 3-letter words. If you later plan to configure Elasticsearch, you can also ignore this warning: only MySQL fulltext search is affected.

To reduce the minimum word length to 3, add this to your %s file (in the %s section) and then restart %s:

%s
' => '데이터베이스 호스트 "%s"은 검색 인덱스를 구축할 때 기본 최소 단어 길이인 4를 사용하도록 구성되어 있습니다. 즉, 길이가 3자인 단어는 인덱싱되지 않아 검색할 수 없습니다.

예를 들어 \'SMS\', \'web\', \'DOS\'와 같은 단어에 대한 검색 결과를 찾을 수 없습니다.

이러한 단어가 인덱싱되도록 하려면 이 설정을 3으로 변경할 수 있습니다. 또는 3글자 단어 검색에 신경 쓰지 않는다면 이 경고를 무시해도 됩니다. 나중에 Elasticsearch를 구성할 계획이라면 이 경고를 무시해도 됩니다: MySQL 전문 검색에만 영향을 미칩니다.

최소 단어 길이를 3으로 줄이려면 %s 파일(%s 섹션)에 다음 내용을 추가한 다음 %s을(를) 다시 시작하세요:

%s',
  '%s\'s home page' => '%s의 홈페이지',
  'Show installed extensions and modules.' => '설치된 확장 기능과 모듈을 표시합니다.',
  'Opcode Cache' => 'Opcode 캐시',
  'Specify a value to set the configuration key "%s" to, or use "--stdin" to read a value from stdin.' => '구성 키 "%s"에 설정할 값을 지정하거나, "--stdin"을 사용하여 stdin에서 값을 읽습니다.',
  'ID of the SSH key used to authenticate the request.' => '요청 인증에 사용된 SSH 키의 ID입니다.',
  'You can usually install a PHP extension using %s, %s, or %s. A common package name is %s. Try commands like these:' => '일반적으로 %s, %s 또는 %s 명령을 사용해서 PHP 확장 기능을 설치할 수 있습니다. 흔히 사용되는 패키지 이름은 %s입니다. 다음과 같은 명령을 시도해 보세요:',
  'US East (EDT)' => '미국 동부 (EDT)',
  'The HTTP referrer.' => 'HTTP 리퍼러입니다.',
  'HTTP Parameters Not Transmitting' => 'HTTP 매개변수가 전송되지 않음',
  'Determines whether Wikimedia Commons videos get embedded.' => '위키미디어 공용 동영상을 삽입할지 여부를 결정합니다.',
  'Better Collation Available' => '더 나은 콜레이션 사용 가능',
  'View "%s"' => '"%s" 보기',
  'This setup issue has been resolved. ' => '이 설정 문제는 해결되었습니다.',
  'Additional configuration options to hide.' => '숨기기 위한 추가 구성 옵션입니다.',
  'The logged-in username, if one is logged in.' => '로그인한 사용자의 사용자 이름입니다 (로그인한 경우).',
  'Deprecated Code' => '구식 코드',
  'PHP date functions will emit a warning if they are called when no default
server timezone is configured.

Usually, you configure a default timezone in `php.ini` by setting the
configuration value `date.timezone`.

If you prefer, you can configure a default timezone here instead. To configure
a default timezone, select a timezone from the
[[ %s | PHP List of Supported Timezones ]].' => 'PHP 날짜 함수는 기본 서버 시간대가 구성되지 않은 상태에서 호출될 경우 경고를 출력합니다.

일반적으로 `php.ini` 파일에서 `date.timezone` 설정값을 지정하여 기본 시간대를 구성합니다.

하지만 여기에서 기본 시간대를 구성할 수도 있습니다. 기본 시간대를 구성하려면 [[ %s | PHP 지원 시간대 목록 ]]에서 시간대를 선택하세요.',
  'No REMOTE_ADDR available' => '이용 가능한 REMOTE_ADDR 없음',
  'File storage in Amazon S3 has been partially configured, but you are missing some required settings. S3 will not be available to store files until you complete the configuration. Either configure S3 fully or remove the partial configuration.' => 'Amazon S3 파일 스토리지 구성이 부분적으로 완료되었지만, 필수 설정이 누락되었습니다. 구성을 완료하기 전까지는 S3에 파일을 저장할 수 없습니다. S3 구성을 완료하거나 부분 구성을 제거하세요.',
  'The logged-in user PHID, if one is logged in.' => '로그인한 사용자의 PHID입니다 (로그인한 경우).',
  'WARNING: This is a very advanced option, and only useful for hosting providers running multi-tenant clusters.

If you provide an instance identifier here (normally by injecting it with a `%s`), the server will pass it to subprocesses and commit hooks in the `%s` environmental variable.' => '경고: 이 옵션은 매우 고급 옵션이며, 멀티 테넌트 클러스터를 운영하는 호스팅 제공업체에만 유용합니다.

인스턴스 식별자를 여기에 제공하면(일반적으로 `%s`을(를) 통해 주입), 서버는 해당 식별자를 `%s` 환경 변수에 저장하여 하위 프로세스와 커밋 훅에 전달합니다.',
  'Version Information' => '버전 정보',
  'The base URI for this install is not configured, and major features will not work properly until you configure it.

You should set the base URI to the URI you will use to access this server, like "https://devtools.example.com/".

Include the protocol (http or https), domain name, and port number if you are using a port other than 80 (http) or 443 (https).

Based on this request, it appears that the correct setting is:

%s

To configure the base URI, run the command shown below.' => '이 설치의 기본 URI가 구성되지 않았습니다. 기본 URI를 구성하기 전까지는 주요 기능이 제대로 작동하지 않습니다.

서버에 액세스하는 데 사용할 URI(예: "https://devtools.example.com/")로 기본 URI를 설정해야 합니다.

80(http) 또는 443(https) 이외의 포트를 사용하는 경우 프로토콜(http 또는 https), 도메인 이름 및 포트 번호를 포함해야 합니다.

이 요청을 기반으로 올바른 설정은 다음과 같습니다:

%s

기본 URI를 구성하려면 아래 명령을 실행하세요.',
  'HTTP Path Rewriting Incorrect' => 'HTTP 경로 재작성이 잘못됨',
  'Surplus' => '여분',
  'Instance identifier for multi-tenant clusters.' => '멀티테넌트 클러스터의 인스턴스 식별자입니다.',
  'Upgrade MySQL Schema' => 'MySQL 스키마 업그레이드',
  'Unignore Setup Issue' => '설정 문제 무시 해제',
  'Automatically sample some fraction of requests.' => '요청의 일부를 자동으로 샘플링합니다.',
  'SSH log location.' => 'SSH 로그 위치입니다.',
  'Arbitrarily large files are now supported. Consult the documentation for configuration details.' => '이제 임의로 큰 파일도 지원됩니다. 자세한 설정 방법은 설명문서를 참조하세요.',
  'Delete a local configuration value.' => '로컬 구성 값을 삭제합니다.',
  'These paths get appended to your %s environment variable.' => '이 경로들이 당신의 %s 환경 변수에 추가됩니다.',
  'Epoch timestamp.' => '에포크 타임스탬프입니다.',
  'Option "%s" is dangerously long for a database prefix in MySQL/MariaDB. The current value is %d characters long. It should be less than %d to be safe for future changes.' => '옵션 "%s"은(는) MySQL/MariaDB에서 데이터베이스 접두어로 사용하기에는 위험할 정도로 깁니다. 현재 값은 %d자입니다. 향후 변경 사항을 고려하여 안전을 위해 %d보다 짧아야 합니다.',
  'Blindigo' => '블린디고',
  'Expected Column Type' => '예상된 열 유형',
  'Enable developer mode' => '개발자 모드 활성화',
  '%s, occurrences: %s' => '%s, 발생 횟수: %s',
  'Woe! This request had its journey cut short by unexpected circumstances (%s).' => '아이고! 예상치 못한 상황(%s) 때문에 이 요청의 여정이 중간에 끊겼습니다.',
  'Customizes retention policies for garbage collectors.' => '가비지 콜렉트에 대한 보관 정책을 맞춤 설정합니다.',
  'This schema can use a better column type.' => '이 스키마는 더 나은 열 유형을 사용할 수 있습니다.',
  'Without \'%s\', this software will not be able to generate or render diffs in multiple applications.' => '\'%s\'이(가) 없으면 이 소프트웨어는 여러 애플리케이션에서 차이를 생성하거나 렌더링할 수 없습니다.',
  'The request date.' => '요청일입니다.',
  'Reply handlers can no longer be overridden with configuration.' => '답변 핸들러는 더 이상 구성으로 덮어쓸 수 없습니다.',
  'There is some deprecated code found in the %s code-base.

This isn\'t a problem yet, but it means that %s might stop working if you upgrade PHP version.

This page records a sample of the cases since last server restart. 

To solve this issue, either:

- Visit %s, file bug report with the information below, or
- Ignore this issue using the `Ignore` button below.

' => '%s 코드베이스에서 구식 코드가 발견되었습니다.

이는 현재로서는 문제가 되지 않지만, PHP 버전을 업그레이드하면 %s이(가) 작동을 멈출 수 있음을 의미합니다.

이 문서는 마지막 서버 재시작 이후 발생한 사례들을 기록합니다.

이 문제를 해결하려면 다음 중 하나를 수행하세요:

- %s을(를) 방문하여 아래 정보를 포함하여 버그 보고서를 제출하거나,
- 아래의 `무시` 버튼을 사용하여 이 문제를 무시하세요.',
  'Note that the default format is subject to change in the future, so if you rely on the log\'s format, specify it explicitly.' => '기본 로그 형식은 향후 변경될 수 있으므로, 로그 형식을 사용하는 경우 명시적으로 지정해야 합니다.',
  'Send as %s' => '%s로 보내기',
  'Setup Error' => '설정 오류',
  'Installed on Burstable CPU Instance' => '버스터블 CPU 인스턴스에 설치됨',
  'MySQL is Using Default Minimum Word Length' => 'MySQL이 기본 최소 단어 길이를 사용함',
  'Extensions/Modules' => '확장 기능/모듈',
  'The directory for local repositories (%s) does not exist, or is not readable by the webserver. This software uses this directory to store information about repositories. If this directory does not exist, create it:

%s
If this directory exists, make it readable to the webserver. You can also edit the configuration below to use some other directory.' => '로컬 저장소 디렉터리(%s)가 존재하지 않거나 웹 서버에서 읽을 수 없습니다. 이 소프트웨어는 저장소에 대한 정보를 저장하기 위해 이 디렉터리를 사용합니다. 이 디렉터리가 없으면 만드세요:

%s 
이 디렉터리가 있는 경우 웹 서버에서 읽을 수 있도록 설정하세요. 아래 구성을 편집하여 다른 디렉터리를 사용할 수도 있습니다.',
  'In places that we display a dropdown to syntax-highlight code, this is where that list is defined.' => '코드 구문 강조 표시를 위한 드롭다운 메뉴가 표시되는 곳에서 해당 목록은 바로 여기에 정의됩니다.',
  'This change supports situations where users are incorrectly associated with commits because the software makes a bad guess about how the VCS string maps to a user account. This also helps with situations where existing repositories are imported without having created accounts for all the committers to that repository. Until you rebuild these repository identities, you are likely to encounter problems with features which rely on the existence of these identities.' => '이번 변경 사항은 소프트웨어가 VCS 문자열이 사용자 계정에 어떻게 매핑되는지 잘못 추측하여 사용자가 커밋과 잘못 연결되는 상황을 해결하는 데 도움이 됩니다. 또한 기존 저장소를 가져올 때 해당 저장소의 모든 커미터에 대한 계정을 생성하지 않은 경우에도 도움이 됩니다. 이러한 저장소 ID를 다시 구축하기 전까지는 해당 ID에 의존하는 기능에서 문제가 발생할 수 있습니다.',
  'Unignore' => '무시 해제',
  'Text values that match this regex and are also object names will not be linked.' => '이 정규 표현식과 일치하는 텍스트 값 중 객체 이름인 값은 링크되지 않습니다.',
  '%s Held / %sms' => '%s개 보유 중 / %sms',
);
  }

}
