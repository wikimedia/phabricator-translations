<?php

final class PhabricatorSettingsKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
  '12 Hour, 2:34 PM' => '12시간, 오후 2:34',
  'Default (%s)' => '기본값 (%s)',
  'You haven\'t added any contact numbers to your account.' => '계정에 연락처 번호를 추가하지 않았습니다.',
  'Conpherence Column Visible' => '콘퍼런스 열 표시',
  'External Editor' => '외부 편집기',
  'This web browser does not support desktop notifications. Only application notifications will be sent for this browser regardless of this preference.' => '이 웹 브라우저는 데스크톱 알림을 지원하지 않습니다. 이 브라우저의 경우 선호에 관계 없이 애플리케이션 알림만이 전송됩니다.',
  'Choose Factor Type' => '단계 유형 선택',
  'Page Titles' => '페이지 제목',
  'Personal Account Settings' => '개인 계정 설정',
  'Global Default Settings' => '전역 기본 설정',
  'Self Actions' => '자신의 작업',
  'Unlink' => '링크 해제',
  'If you have difficulty reading the UI, this setting may help.' => '이 설정은 UI를 읽는 데 어려움을 겪는 경우 도움이 될 수 있습니다.',
  'Email Notifications' => '이메일 알림',
  'Show Unified Diffs' => '통합 차이 표시',
  'Diff Preferences' => '차이 환경 설정',
  'Saturday' => '토요일',
  'Change Primary Address' => '기본 주소 변경',
  'Send Stamps' => '스탬프 보내기',
  'Disable Developer Tools' => '개발자 도구 비활성화',
  'Show Older Inlines' => '더 오래된 인라인 표시',
  'Select the format you prefer for editing dates.' => '날짜를 편집할때 선호하는 형식을 선택하세요.',
  'On Small Screens' => '작은 화면에서',
  'A verification email has been sent. Click the link in the email to verify your address.' => '확인 이메일이 발송되었습니다. 이메일의 링크를 클릭하여 주소를 인증하세요.',
  'Enable Email Notifications' => '이메일 알림 활성화',
  'Diffs are normally shown in a side-by-side layout on large screens and automatically switched to a unified view on small screens (like mobile phones). If you prefer unified diffs even on large screens, you can select them for use on all displays.' => '일반적으로 차이 비교는 큰 화면에서는 나란히 배치되고 작은 화면(예: 휴대폰)에서는 자동으로 통합 보기로 전환됩니다. 큰 화면에서도 통합 보기를 선호하는 경우 모든 디스플레이에서 통합 보기를 사용하도록 선택할 수 있습니다.',
  'Generic Editor' => '일반 편집기',
  'Edit global default settings for all users.' => '모든 사용자의 기본 전역 설정을 편집합니다.',
  'The **Add "Re:" Prefix** setting adds "Re:" in front of all messages, even if they are not replies. If you use **Mail.app** on Mac OS X, this may improve mail threading.

| Setting                | Example Mail Subject
|------------------------|----------------
| Enable "Re:" Prefix  | `Re: [Differential] [Accepted] D123: Example Revision`
| Disable "Re:" Prefix | `[Differential] [Accepted] D123: Example Revision`' => '**"Re:" 접두어 추가** 설정은 답장이 아니더라도 모든 메시지 앞에 "Re:"를 추가합니다. Mac OS X에서 **Mail.app**을 사용하는 경우 메일 스레드 기능이 향상될 수 있습니다.

| 설정                   | 메일 제목 예시
|------------------------|----------------
|"Re:" 접두어 활성화   | `Re: [Differential] [Accepted] D123: 예시 판`
|"Re:" 접두어 비활성화 | `[Differential] [Accepted] D123: 예시 판`',
  'No settings panels are available.' => '사용 가능한 설정 패널이 없습니다.',
  'Empty string is not a valid setting for "%s".' => '빈 문자는 "%s"의 유효한 설정이 아닙니다.',
  'Adjust Timezone' => '시간대 조정',
  'If you disable **Email Notifications**, this server will never send email to notify you about events. This preference overrides all your other settings.

//You will still receive some administrative email, like password reset email.//' => '**이메일 알림**을 비활성화하면 이 서버는 이벤트 발생 시 이메일로 알림을 보내지 않습니다. 이 설정은 다른 모든 설정을 무시합니다.

//단, 비밀번호 재설정 이메일과 같은 관리 이메일은 계속 수신하게 됩니다.//',
  '%s updated her profile' => '%s님이 자신의 프로파일을 업데이트했습니다',
  'Add Contact Number' => '연락처 번호 추가',
  'With **Vary Subjects** enabled, most mail subject lines will include a brief description of their content, like `[Closed]` for a notification about someone closing a task.

| Setting              | Example Mail Subject
|----------------------|----------------
| Vary Subjects        | `[Maniphest] [Closed] T123: Example Task`
| Do Not Vary Subjects | `[Maniphest] T123: Example Task`

This can make mail more useful, but some clients have difficulty threading these messages. Disabling this option may improve threading at the cost of making subject lines less useful.' => '**제목 다양화** 기능을 활성화하면 대부분의 메일 제목에 내용에 대한 간략한 설명이 포함됩니다. 예를 들어, 누군가가 작업을 완료했다는 알림에는 `[Closed]`와 같이 표시됩니다.

| 설정                 | 예시 메일 제목
|----------------------|----------------
| 제목 다양화          | `[Maniphest] [Closed] T123: Example Task`
| 제목 다양화          | `[Maniphest] T123: Example Task`

이렇게 하면 메일이 더 유용해질 수 있지만, 일부 클라이언트에서는 이러한 메시지를 스레드로 처리하는 데 문제가 발생할 수 있습니다. 이 옵션을 비활성화하면 제목의 유용성이 떨어지는 대신 스레드 처리 기능이 향상될 수 있습니다.',
  'Value "%s" is not valid for setting "%s": valid values are %s.' => '"%2$s" 설정의 값 "%s"이 유효하지 않습니다: 유효한 값은 %3$s입니다.',
  'Extra Settings' => '추가 설정',
  'Are you sure you want to delete this address? You will no longer be able to use it to login.' => '정말로 이 주소를 삭제하시겠습니까? 더 이상 이 주소로 로그인 할 수 없을 것 입니다.',
  'If you change your primary address, %s will send all email to %s.' => '만약 당신이 당신의 기본 주소를 변경한다면, %s은(는) 모든 이메일을 %s(으)로 보낼 것입니다.',
  'You can customize the font used when showing monospaced text, including source code. You should enter a valid CSS font declaration like: `13px Consolas`' => '소스 코드를 포함하여 고정폭 텍스트를 표시할 때 사용되는 글꼴을 사용자 지정할 수 있습니다. `13px Consolas`와 같은 유효한 CSS 글꼴 선언을 입력해야 합니다.',
  'Enable Self Action Mail' => '자체 수행 메일 사용',
  'You haven\'t added any SSH Public Keys.' => 'SSH 공개 키를 추가하지 않았습니다.',
  'All Messages' => '모든 메시지',
  'UTC%+d:%02d' => 'UTC%+d:%02d',
  'DarkConsole is a debugging console for developing and troubleshooting applications. After enabling DarkConsole, press the {nav `} key on your keyboard to toggle it on or off.' => 'DarkConsole은 애플리케이션 개발 및 문제 해결을 위한 디버깅 콘솔입니다. DarkConsole을 활성화한 후 키보드의 {nav `} 키를 눌러 켜거나 끌 수 있습니다.',
  'Save Preference' => '환경 설정 저장하기',
  'Email Format' => '이메일 형식',
  'Your browser timezone and profile timezone are now in agreement (%s).' => '브라우저 표준 시간대와 프로필 표준 시간대가 이제 일치합니다 (%s).',
  'Edit Authentication Factor' => '인증 단계 편집',
  'Changing your password will terminate any other outstanding login sessions.' => '비밀번호를 변경하면 현재의 모든 다른 미처리된 로그인 세션이 종료됩니다.',
  'You have no linked accounts.' => '연결된 계정이 없습니다.',
  'Active Login Sessions' => '활성 로그인 세션',
  'Edit Global Settings' => '전역 설정 편집',
  'Ignore Conflict' => '충돌 무시',
  'Vary Subjects' => '제목 다양화',
  'Delete Authentication Factor' => '인증 단계 삭제',
  '%s updated their profile' => '%s님이 자신의 프로파일을 업데이트했습니다',
  'Current Setting' => '현재 설정',
  'Visual Studio Code' => '비주얼 스튜디오 코드',
  'Provider: %s' => '제공자: %s',
  'Use Variable-Width Font' => '가변 길이 글꼴 사용',
  'Use Plain Text: [Differential]' => '평문 사용: [Differential]',
  '⚪ Ignore' => '⚪ 무시',
  'Date Format' => '날짜 형식',
  'This install does not have any active MFA providers configured. At least one provider must be configured and active before you can add new MFA factors.' => '이 설치에는 활성화된 MFA 제공자가 구성되어 있지 않습니다. 새 MFA 요소를 추가하려면 최소 하나 이상의 제공자가 구성되어 활성화되어 있어야 합니다.',
  'Select the format you prefer for editing and displaying time.' => '시간의 편집 및 표시에 선호되는 형식을 선택하세요.',
  'The conflict between your browser and profile timezone settings will be ignored.' => '브라우저와 프로파일 시간대 간의 충돌은 무시됩니다.',
  'Terminate All Sessions' => '모든 세션 끝내기',
  'Your account is linked with all available providers.' => '당신의 계정은 이용 가능한 모든 공급자와 연결되어 있습니다.',
  'Timezone Ignored Offset' => '시간대 무시 오프셋',
  'External Accounts' => '외부 계정',
  'Verification Email Sent' => '확인 이메일 전송됨',
  'Add External Account' => '외부 계정 추가',
  'Mail Headers and Body' => '메일 헤더 및 본문',
  'You haven\'t added any authentication factors to your account yet.' => '아직 계정에 인증 요소를 추가하지 않았습니다.',
  'To set a new password, request a password reset link from the login screen and then follow the instructions.' => '새 암호를 설정하려면 로그인 화면에서 암호 재설정 링크를 요청한 다음 지침을 따르세요.',
  'Multi-Factor Auth' => '다단계 인증',
  'Refresh' => '새로 고침',
  'No allowed editor protocols are configured.' => '허용된 편집기 프로토콜이 구성되어 있지 않습니다.',
  'You can choose to use either a monospaced or variable-width font in textareas in the UI. Textareas are used for editing descriptions and writing comments, among other things.' => '사용자 인터페이스의 텍스트 영역에서는 고정폭 글꼴 또는 가변폭 글꼴을 선택하여 사용할 수 있습니다. 텍스트 영역은 설명 편집 및 댓글 작성 등에 사용됩니다.',
  'Disable Self Action Mail' => '자체 수행 메일 사용안함',
  'Filetree Visible' => '파일 트리 표시',
  'Edit Settings Configurations' => '설정 구성 편집',
  'Monospaced Textareas' => '고정폭 텍스트 영역',
  'Really remove the authentication factor %s from your account?' => '정말로 인증 단계 %s을(를) 계정에서 제거하시겠습니까?',
  'Zed' => 'Zed',
  'Mail Headers' => '메일 헤더',
  'Old Password' => '이전 비밀번호',
  'Conpherence Column Minimize' => 'Conpherence 열 최소화',
  'Display Preferences' => '표시 환경 설정',
  'Add Auth Factor' => '인증 단계 추가',
  'You don\'t have any active sessions.' => '활성화된 세션이 없습니다.',
  'Changes saved.' => '변경사항을 저장했습니다.',
  'Authentication factors must have a name to identify them.' => '인증 요인은 이를 식별하기 위해 이름이 있어야 합니다.',
  'Choose the default behavior of the global search in the main menu.' => '메인 메뉴에서 전역 검색의 기본 동작을 선택하세요.',
  'Hypertext Transfer Protocol' => '하이퍼텍스트 전송 프로토콜',
  'Diffusion Blame' => 'Diffusion 블레임',
  'Choose which language you would like the UI to use.' => 'UI에서 사용할 언어를 선택하세요.',
  'Outgoing mail is stamped with labels like `actor(alice)` which can be used to
write client mail rules to organize mail. By default, these stamps are sent
in an `X-Phabricator-Stamps` header.

If you use a client which can not use headers to route mail (like Gmail),
you can also include the stamps in the message body so mail rules based on
body content can route messages.' => '발신 메일에는 `actor(alice)`와 같은 레이블이 표시되며, 이 레이블을 사용하여 클라이언트 메일 규칙을 작성하고 메일을 정리할 수 있습니다. 기본적으로 이러한 레이블은 `X-Phabricator-Stamps` 헤더에 포함되어 전송됩니다.

Gmail처럼 헤더를 사용하여 메일을 라우팅할 수 없는 클라이언트를 사용하는 경우, 메시지 본문에 레이블을 포함하여 본문 내용을 기반으로 하는 메일 규칙을 통해 메시지를 라우팅할 수도 있습니다.',
  'Your browser timezone (%s) differs from your profile timezone (%s). You can adjust your profile setting to match your browser, or ignore this conflict to keep your current profile setting.' => '브라우저 표준 시간대(%s)가 프로필 표준 시간대(%s)와 다릅니다. 브라우저와 일치하도록 프로필 설정을 조정하거나, 이 충돌을 무시해서 현재 프로필 설정을 유지할 수 있습니다.',
  'The dialog asking for permission to send desktop notifications was closed without granting permission. Only application notifications will be sent.' => '데스크톱 알림 전송 권한을 요청하는 대화 상자가 허가 없이 닫혔습니다. 응용 프로그램 알림만 전송됩니다.',
  'Really delete address \'%s\'?' => '\'%s\' 주소를 정말 삭제하시겠습니까?',
  'Another user already has this email.' => '다른 사용자가 이미 해당 이메일을 보유하고 있습니다.',
  'Change primary email address?' => '기본 이메일 주소를 변경하시겠습니까?',
  'Monospaced Font' => '고정폭 글꼴',
  'HTML Email' => 'HTML 이메일',
  'Global Defaults' => '전역 기본값',
  'Conpherence Sound' => 'Conpherence 소리',
  'Enable "Re:" Prefix' => '"Re:" 접두어 활성화',
  'DarkConsole Visible' => 'DarkConsole 표시',
  'Supported Protocol' => '지원 프로토콜',
  'Ignore new setting and keep %s' => '새 설정을 무시하고 %s을(를) 유지',
  'If you disable **Self Actions**, this server will not notify you about actions you take.' => '**자체 작업**을 비활성화할 경우, 이 서버는 사용자의 작업에 대한 알림을 보내지 않습니다.',
  'You are adding too many email addresses to your account too quickly.' => '너무 많은 이메일 주소를 계정에 너무 빨리 추가하고 있습니다.',
  'Your browser has not yet granted this server permission to send desktop notifications.' => '당신의 브라우저는 아직 데스크톱 알림을 보낼 이 서버의 권한을 부여받지 않았습니다.',
  'You can adjust **Application Settings** here to customize when you are emailed and notified.

| Setting | Effect
| ------- | -------
| Email | You will receive an email and a notification, but the notification will be marked "read".
| Notify | You will receive an unread notification only.
| Ignore | You will receive nothing.


If an update makes several changes (like adding CCs to a task, closing it, and adding a comment) you will receive the strongest notification any of the changes is configured to deliver.

These preferences **only** apply to objects you are connected to (for example, Revisions where you are a reviewer or tasks you are CC\'d on). To receive email alerts when other objects are created, configure [[ /herald/ | Herald Rules ]].' => '여기에서 **애플리케이션 설정**을 조정하여 이메일 및 알림 수신 시점을 사용자 지정할 수 있습니다.

| 설정    | 효과
| ------- | -------
| 이메일  | 이메일과 알림을 모두 수신하지만, 알림은 "읽음"으로 표시됩니다.
| 알림    | 읽지 않은 알림만 수신합니다.
| 무시    | 아무것도 수신하지 않습니다.

업데이트로 인해 여러 변경 사항(예: 작업에 태스크 추가, 태스크 닫기, 댓글 추가)이 발생하는 경우, 변경 사항 중 설정된 가장 강력한 알림을 받게 됩니다.

이러한 기본 설정은 사용자가 연결된 객체(예: 검토자인 수정본 또는 참조로 추가된 작업)**에만** 적용됩니다. 다른 객체가 생성될 때 이메일 알림을 받으려면 [[ /herald/ | Herald 규칙 ]]을 구성하세요.',
  'You must enter your current password.' => '현재 비밀번호를 입력해야 합니다.',
  'Europe: 28-02-2000' => '유럽: 28-02-2000',
  'The old password you entered is incorrect.' => '입력한 과거 비밀번호가 잘못되었습니다.',
  '◐ Notify' => '◐ 알림',
  '%s updated his profile' => '%s님이 자신의 프로파일을 업데이트했습니다',
  'You can change your date and time preferences in Settings.' => '설정에서 날짜 및 시간 기본 설정을 변경할 수 있습니다.',
  'Developer Tools show more tools that are mostly useful for %s developers and advanced administrators.' => '개발자 도구는 주로 %s의 개발자와 고급 관리자에게 유용한 도구를 더 많이 보여줍니다.',
  'You can opt to receive plain text email instead of HTML email. Plain text email works better with some clients.' => 'HTML 이메일 대신 일반 텍스트로 이메일을 받는 것을 선택할 수 있습니다.',
  'Timezone Calibrated' => '시간대 보정됨',
  'Limited Translations' => '제한된 번역',
  'Email Delivery' => '이메일 전송',
  'Send Test Notification' => '테스트 알림 보내기',
  'Monospaced font value "%s" is unsafe. You may only enter letters, numbers, spaces, commas, periods, hyphens, forward slashes, and double quotes' => '고정폭 글꼴 값 "%s"은(는) 안전하지 않습니다. 문자, 숫자, 공백, 쉼표, 마침표, 하이픈, 슬래시 및 큰따옴표만 입력할 수 있습니다.',
  'Edit settings for your personal account.' => '개인 계정을 위한 설정을 편집하세요.',
  'Create Settings' => '설정 만들기',
  'Use Unicode Glyphs: ⚙' => '유니코드 상형 문자 사용: ⚙',
  'Editor Link' => '편집자 링크',
  'Silly Translations' => '부자연스러운 번역',
  'Send Plain Text Email' => '일반 텍스트 이메일 보내기',
  'DarkConsole' => 'DarkConsole',
  'Filetree Width' => 'Filetree 너비',
  'Hypertext Transfer Protocol over SSL' => 'SSL을 경유한 하이퍼 전송 프로토콜',
  'Search Scope' => '검색 범위',
  'Email Preferences' => '이메일 환경 설정',
  'You don\'t have any active tokens.' => '활성화된 토큰이 없습니다.',
  'Send another copy of the verification email to %s?' => '확인 이메일의 사본을 %s님에게 보내시겠습니까?',
  '24 Hour, 14:34' => '24시간, 14:34',
  'UTC%+d' => 'UTC%+d',
  'Disable "Re:" Prefix' => '"Re:" 접두어 비활성화',
  'Sublime Text' => 'Sublime Text',
  'Conpherence Widget Pane Visible' => 'Conpherence 위젯 패널 표시',
  'Disable Email Notifications' => '이메일 알림 비활성화',
  'Expired' => '만료됨',
  'No Notifications' => '알림이 없습니다',
  'Password Algorithms' => '비밀번호 알고리즘',
  'Your password is currently hashed using an algorithm which is no longer available on this install.' => '현재 사용 중인 비밀번호는 이 설치 환경에서 더 이상 사용할 수 없는 알고리즘을 사용하여 해시 처리되었습니다.',
  'Replaced With' => '다음으로 바꾸기',
  'Send HTML Email' => 'HTML 이메일 보내기',
  'Translation' => '번역',
  'Settings %d' => '설정 %d',
  'Time Format' => '시간 형식',
  'Permission for desktop notifications was denied. Only application notifications will be sent.' => '데스크톱 알림의 허가가 거부되었습니다. 애플리케이션 알림만 전송됩니다.',
  'Send Notifications' => '알림 보내기',
  'Number' => '번호',
  'Permanently Linked' => '영구적으로 연결됨',
  'Account Setup Issues' => '계정 설정 문제',
  'Authentication Factors' => '인증 요소',
  'Web and Desktop' => '웹과 데스크톱',
  'Sunday' => '일요일',
  'US: 2/28/2000' => '미국: 2/28/2000',
  'External Editor URI Variables' => '외부 편집기 URI 변수',
  'User Guide: Configuring an External Editor' => '사용자 가이드: 외부 편집기 구성하기',
  'You have no account setup issues.' => '계정 설정 문제가 없습니다.',
  'Might not exist' => '존재하지 않을 수도 있음',
  'NOTE: You already have an Auth Factor configured. Adding another factor will require you to always provide all Auth Factors instead of selecting one of your Auth Factors.' => '참고: 이미 인증 단계가 하나 설정되어 있습니다. 다른 인증 단계를 추가하려면 기존 인증 단계 중 하나를 선택하는 대신 모든 인증 단계를 항상 제공해야 합니다.',
  'Personal Settings' => '개인 설정',
  'Some applications use unicode glyphs in page titles to provide a compact representation of the current application. You can substitute plain text instead if these glyphs do not display on your system.' => '일부 애플리케이션은 페이지 제목에 유니코드 문자를 사용하여 현재 애플리케이션을 간결하게 표현합니다. 시스템에서 이러한 문자가 표시되지 않으면 일반 텍스트로 대체할 수 있습니다.',
  'Web Only' => '웹 전용',
  'Disable Vary Subjects' => '제목 다양화 비활성화',
  'Enable Developer Tools' => '개발자 도구 활성화',
  'Developer/Test Translations' => '개발자/테스트 번역',
  'User Preferences' => '사용자 환경 설정',
  'No Sounds' => '소리 없음',
  'Create Global Defaults' => '전역 기본값 만들기',
  'Enable Vary Subjects' => '제목 다양화 활성화',
  'TextMate' => '텍스트메이트',
  'No MFA Providers' => 'MFA 제공자 없음',
  'There is no known application setting with key "%s".' => '"%s" 키로 알려진 애플리케이션 설정이 없습니다.',
  'Choose the default sound behavior for new Conpherence rooms.' => 'Conpherence 방에 대한 기본 사운드 동작을 선택하세요.',
  'Policy Favorites' => '정책 즐겨찾기',
  'Conpherence Notifications' => 'Conpherence 알림',
  'Friday' => '금요일',
  'Timezone "%s" is not a valid timezone identifier.' => '표준 시간대 "%s"은 유효한 표준 시간대 식별자가 아닙니다.',
  'Select your local timezone.' => '로컬 표준 시간대를 선택하세요.',
  'Note: Removing an email address from your account will invalidate any outstanding password reset links.' => '참고: 계정에서 이메일 주소를 삭제하면 모든 미처리된 비밀번호 재설정 링크가 무효화됩니다.',
  'Click "Save Preference" to persist these changes.' => '이 변경사항을 지속하려면 "환경 설정 저장하기"를 클릭하세요.',
  'Your browser has granted this server permission to send desktop notifications.' => '당신의 브라우저는 데스크톱 알림을 보낼 이 서버의 권한을 부여받았습니다.',
  'This browser has denied permission to send desktop notifications to this server. Consult your browser settings / documentation to figure out how to clear this setting, do so, and then re-visit this page to grant permission.' => '이 브라우저는 이 서버로 데스크톱 알림을 보내는 것을 허용하지 않았습니다. 브라우저 설정/설명문서를 참조하여 이 설정을 해제한 후, 다시 이 페이지를 방문하여 권한을 부여하세요.',
  'Week Starts On' => '주 시작 날짜',
  'When a revision is updated, this software attempts to bring inline comments on the older version forward to the new changes. You can disable this behavior if you prefer comments stay anchored in one place.' => '버전이 업데이트될 때, 이 소프트웨어는 이전 버전의 인라인 댓글을 새 버전으로 가져오려고 시도합니다. 댓글이 한 곳에 고정된 상태를 유지하려면 이 동작을 비활성화할 수 있습니다.',
  'Remove Factor' => '요소 제거',
  'Your account does not currently have a password set. You can choose a password by performing a password reset.' => '계정에 비밀번호가 아직 설정되어 있지 않습니다. 비밀번호 재설정을 수행함으로써 비밀번호를 지정할 수 있습니다.',
  'Disabled (an administrator has disabled login for this account provider).' => '비활성화됨 (관리자가 이 계정 제공자에 대한 로그인을 비활성화함).',
  'Send Another Verification Email?' => '확인 이메일을 다시 보내시겠습니까?',
  'Because the algorithm implementation is missing, your password can not be used or updated.' => '알고리즘 구현이 누락되었기 때문에 암호를 사용하거나 업데이트할 수 없습니다.',
  'Verify' => '인증',
  'Edit Settings: %s' => '설정 편집: %s',
  'Add "Re:" Prefix' => '"Re:" 접두어 추가',
  'Desktop Only' => '데스크톱 전용',
  'Account Settings' => '계정 설정',
  'View Configuration' => '구성 보기',
  'Supported Editor Protocols' => '지원 편집기 프로토콜',
  'Add Authentication Factor' => '인증 단계 추가',
  'Choose which day a calendar week should begin on.' => '달력에서 주를 시작할 요일을 선택하세요.',
  'Account Activity Logs' => '계정 활동 로그',
  'Date and Time' => '날짜 및 시간',
  'Use Monospaced Font' => '고정폭 글꼴 사용',
  'The strength of your stored password hash can be upgraded. To upgrade, either: log out and log in using your password; or change your password.' => '저장된 비밀번호 해시의 강도를 높일 수 있습니다. 강도를 높이려면 로그아웃 후 비밀번호를 사용하여 로그인하거나 비밀번호를 변경하세요.',
  'Save Preferences' => '환경 설정 저장하기',
  'Many text editors can be configured as URI handlers for special protocols like `editor://`. If you have installed and configured such an editor, some applications can generate links that you can click to open files locally.

Provide a URI pattern for building external editor URIs in your environment. For example, if you use TextMate on macOS, the pattern for your machine may look something like this:

```name="Example: TextMate on macOS"
%s
```


For complete instructions on editor configuration, see **[[ %s | %s ]]**.

See the tables below for a list of supported variables and protocols.' => '많은 텍스트 편집기는 `editor://`와 같은 특수 프로토콜에 대한 URI 핸들러로 구성될 수 있습니다. 이러한 편집기를 설치하고 구성한 경우 일부 응용 프로그램은 파일을 로컬에서 열 수 있는 링크를 생성할 수 있습니다.

사용 환경에 맞는 외부 편집기 URI를 구성하기 위한 URI 패턴을 제공하세요. 예를 들어 macOS에서 TextMate를 사용하는 경우 해당 시스템의 패턴은 다음과 같을 수 있습니다.:

```name="Example: TextMate on macOS"
%s
```


편집기 구성에 대한 자세한 내용은 **[[ %s | %s ]]**을(를) 참조하세요.

지원되는 변수 및 프로토콜 목록은 아래 표를 참조하세요.',
  '⚫ Email' => '⚫ 이메일',
  'New Setting' => '새로운 설정',
  'Pronoun' => '대명사',
  'Choose the default notification behavior for Conpherence rooms.' => 'Conpherence 방에 대한 기본 알림 동작을 선택하세요.',
  'DarkConsole Tab' => 'DarkConsole 탭',
  'Note: Changing your primary email address will invalidate any outstanding password reset links.' => '참고: 기본 이메일 주소를 변경하면 미처리된 비밀번호 재설정 링크가 모두 무효화됩니다.',
  'Sessions and Logs' => '세션 및 로그',
  'Your primary email address is unverified. You will not be able to receive email until you verify it.' => '기본 이메일 주소가 인증되지 않았습니다. 기본 이메일 주소를 인증할 때까지 이메일을 받을 수 없습니다.',
  'Pinned Applications' => '고정된 애플리케이션',
  'This server can send real-time notifications to your web browser or to your desktop. Select where you want to receive these real-time updates.' => '이 서버는 당신의 웹 브라우저나 데스크탑에 실시간 통지를 보낼 수 있습니다. 이러한 실시간 업데이트를 받을 위치를 선택하세요.',
  'Revoke All' => '모두 폐기',
  'No settings panel group with key "%s" exists!' => '"%s" 키를 가진 설정 패널 그룹이 존재하지 않습니다!',
  'Linked Accounts and Authentication' => '연결된 계정 및 인증',
  'Choose the pronoun you prefer.' => '원하는 대명사를 선택하세요.',
  'Conflict Ignored' => '충돌 무시됨',
  'This engine is used to edit settings.' => '이 엔진은 설정 편집을 위해 사용됩니다.',
  'Default (Unknown, "%s")' => '기본값 (알 수 없음, "%s")',
  'Primary Email Unverified' => '기본 이메일 인증되지 않음',
  'HiSec' => '고보안',
);
  }

}
