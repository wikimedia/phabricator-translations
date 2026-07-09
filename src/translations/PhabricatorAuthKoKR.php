<?php

final class PhabricatorAuthKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
  '%s renamed this provider from %s to %s.' => '%s님이 이 제공자의 이름을 %s에서 %s(으)로 변경했습니다.',
  '%s enabled login.' => '%s님이 로그인을 활성화했습니다.',
  'Disable Contact Number' => '연락처 비활성화',
  'This key has been revoked. Choose or generate a new, unique key.' => '이 키는 폐기되었습니다. 새롭고 고유한 키를 선택하거나 생성하새요.',
  'SSH Key Actions' => 'SSH 키 동작',
  'Adding a PKCS8 keyfile to the cache can be very dangerous. If the PKCS8 file really encodes a different public key than the one specified, an attacker could use it to gain unauthorized access.

Generally, you should use this option only in a development environment where ssh-keygen is broken and it is inconvenient to fix it, and only if you are certain you understand the risks. You should never cache a PKCS8 file you did not generate yourself.' => 'PKCS8 키 파일을 캐시에 추가하는 것은 매우 위험할 수 있습니다. PKCS8 파일이 지정된 공개 키와 다른 공개 키를 인코딩하는 경우, 공격자가 이를 이용하여 무단으로 접근 권한을 획득할 수 있습니다.

일반적으로 이 옵션은 ssh-keygen이 제대로 작동하지 않아 수정하기 어려운 개발 환경에서만 사용해야 하며, 위험성을 충분히 이해하고 있는 경우에만 사용해야 합니다. 직접 생성하지 않은 PKCS8 파일은 절대 캐시에 저장해서는 안 됩니다.',
  'This provider ("%s") already exists, and you can not add more than one instance of it. You can edit the existing provider, or you can choose a different provider.' => '이 제공자("%s")는 이미 존재하며, 동일한 제공자를 두 개 이상 추가할 수 없습니다. 기존 제공자를 편집하거나 다른 제공자를 선택할 수 있습니다.',
  'To add a Duo factor, first download and install the Duo application on your phone. Once you have launched the application and are ready to perform setup, click continue.' => 'Duo 단계를 추가하려면 먼저 휴대폰에 Duo 애플리케이션을 다운로드하여 설치하세요. 애플리케이션을 실행하고 설정을 진행할 준비가 되면 \'계속\'을 클릭하세요.',
  'The verification code you provided is incorrect, or the email address has been removed, or the email address is owned by another user. Make sure you followed the link in the email correctly and are logged in with the user account associated with the email address.' => '입력한 인증 코드가 잘못되었거나, 이메일 주소가 제거되었거나, 해당 이메일 주소를 다른 사용자가 소유하고 있습니다. 이메일에 포함된 링크를 올바르게 클릭했는지, 그리고 해당 이메일 주소와 연결된 사용자 계정으로 로그인했는지 확인하세요.',
  'Edit Contact Number' => '연락처 편집하기',
  'Passwords' => '비밀번호',
  'Algorithm' => '알고리즘',
  'You must specify the username of the account to recover.' => '복구하려면 계정의 사용자 이름을 지정해야 합니다.',
  'Authentication provider configuration is locked, and can not be changed without being unlocked. See the configuration setting %s for details.' => '인증 제공자 구성이 잠겨 있으며, 잠금 해제 없이는 변경할 수 없습니다. 자세한 내용은 구성 설정 %s을(를) 참조하세요.',
  'Server name must contain only lowercase letters, digits, and periods.' => '인스턴스 이름은 소문자, 숫자, 마침표만 포함해야 합니다.',
  'Revoke Tokens' => '토큰 폐기',
  'Reached TOTP challenge validation with an unexpected number of unexpired challenges (%s), expected exactly one.' => 'TOTP 챌린지 검증 중 만료되지 않은 챌린지 수(%s)가 예상과 달랐습니다, 정확히 하나를 예상했습니다.',
  'There are too many configured default registration providers.' => '구성된 기본 등록 제공자의 수가 너무 많습니다.',
  'Unlink "%s" Account?' => '"%s" 계정의 연결을 해제하시겠습니까?',
  'Strip factors from specified users.' => '지정한 사용자의 단계를 제거합니다.',
  'You must confirm the selected password.' => '선택된 비밀번호를 확인해야 합니다.',
  'Authentication provider (of class "%s") is attempting to load or create an external account, but provided no account identifiers.' => '인증 제공자(클래스 "%s")가 외부 계정을 로드하거나 생성하려고 시도했지만 계정 식별자를 제공하지 않았습니다.',
  'Edit Auth Messages' => 'Auth 메시지 편집하기',
  'Complete enrolling your phone with Duo:' => 'Duo로 휴대폰 등록을 완료하세요:',
  'Unknown session type "%s".' => '알 수 없는 세션 유형 "%s".',
  'Setup Admin Account' => '관리자 계정 설정',
  'Enable Contact Number' => '연락처 활성화',
  'Create New Duo Account' => '새로운 Duo 계정 만들기',
  'To configure Bitbucket OAuth, log in to Bitbucket and go to **Manage Account** > **Access Management** > **OAuth**.

Click **Add Consumer** and create a new application.

After completing configuration, copy the **Key** and **Secret** to the fields above.' => 'Bitbucket OAuth를 구성하려면 Bitbucket에 로그인한 다음 **계정 관리하기** > **액세스 관리** > **OAuth**로 이동하세요.

**컨슈머 추가하기**를 클릭하고 새 애플리케이션을 생성하세요.

구성이 완료되면 **키**와 **비밀번호**를 위의 필드에 복사하여 붙여넣으세요.',
  'The account you are attempting to register or link is already linked to another user.' => '등록 또는 연결하려는 계정은 이미 다른 사용자에게 연결되어 있습니다.',
  'Base URI should include protocol (like "%s").' => '기본 URI는 프로토콜을 포함해야 합니다 (예: "%s").',
  'Verify an unverified email address which is already attached to an account. This will also re-execute event hooks for addresses which are already verified.' => '이미 계정에 연결된 인증되지 않은 이메일 주소를 인증합니다. 또한 이미 인증된 주소에 대한 이벤트 훅도 다시 실행합니다.',
  'Must Verify Email' => '이메일을 인증해야 함',
  'Expected "newResultForPrompt()" to return an object of class "%s", but it returned something else ("%s"; in "%s").' => '"newResultForPrompt()"가 "%s" 클래스의 객체를 반환할 것으로 예상했지만 다른 것("%3$s"의 "%s")을 반환했습니다.',
  'MFA Providers' => 'MFA 제공자',
  'Strip factors for a specific provider. Use `bin/auth list-mfa-providers` for a list of providers.' => '특정 제공자에 대한 인증 요소를 제거합니다. 제공자 목록을 보려면 `bin/auth list-mfa-providers`를 사용하세요.',
  'Edit MFA Provider' => 'MFA 제공자 편집',
  '%s enabled auto login.' => '%s님이 자동 로그인을 활성화했습니다.',
  'The account you are attempting to register with has an invalid email address (%s). This server only allows registration with specific email addresses:' => '등록하려는 계정의 이메일 주소(%s)가 유효하지 않습니다. 이 서버는 특정 이메일 주소로만 등록을 허용합니다.',
  'Invalid OAuth Access Token' => '유효하지 않은 OAuth 접근 토큰',
  'Create Auth Message' => 'Auth 메시지 만들기',
  'Attach a mobile authenticator application (like 2FAS, Aegis, FreeOTP, Bitwarden Authenticator, Google Authenticator, or Authy) to your account. When you need to authenticate, you will enter a code shown on your phone.' => '2FAS, Aegis, FreeOTP, Bitwarden Authenticator, Google Authenticator 또는 Authy와 같은 모바일 인증 앱을 계정에 연결하세요. 인증이 필요할 때 휴대폰에 표시되는 코드를 입력하면 됩니다.',
  'Verify Email' => '이메일 인증',
  'Revoke credentials for the specified object. To revoke credentials for a user, use "@username".' => '지정된 객체의 자격 증명을 폐기합니다. 사용자의 자격 증명을 폐기하려면, "@username"을 사용하세요.',
  'Use "--user <username>" to specify which user to strip factors from, or "--all-users" to strip factors from all users.' => '특정 사용자의 단계를 제거하려면 "--user <username>"를 사용하세요. 또는, "--all-users"를 사용하면 모든 사용자의 단계를 제거할 수 있습니다.',
  'This factor recently issued a challenge which has expired. A new challenge can not be issued yet. Wait %s second(s) for the code to cycle, then try again.' => '이 단계는 최근에 만료된 챌린지를 발행했습니다. 아직 새로운 챌린지를 발행할 수 없습니다. 코드가 갱신될 때까지 %s초 정도 기다린 후 다시 시도하세요.',
  'This is a terse test text message (from "%s").' => '이것은 "%s"에서 보낸 간단한 테스트 문자 메시지입니다.',
  'Path to public keyfile.' => '공개 키파일의 경로입니다.',
  'Strip all factors, regardless of type.' => '유형에 관계없이 모든 단계를 제거합니다.',
  'Enable the contact number %s?' => '%s 연락처를 활성화하시겠습니까?',
  'Account is already registered or linked.' => '계정이 이미 등록 또는 연결되어 있습니다.',
  'Sign this transaction group with MFA.' => '이 트랜잭션 그룹을 MFA로 서명합니다.',
  '(Some types of token can not be revoked, and you can not revoke tokens which have already expired.)' => '(일부 토큰 유형은 폐기할 수 없으며, 이미 만료된 토큰은 폐기할 수 없습니다.)',
  'You have not configured any multi-factor providers yet.' => '다단계 제공자를 아직 구성하지 않았습니다.',
  'Unable to Log In' => '로그인할 수 없습니다',
  'The external service ("%s") you just used to log in is already associated with another %s user account. Log in to the other %s account and unlink the external account before linking it to a new %s account.' => '방금 로그인에 사용한 외부 서비스("%s")는 이미 다른 %s 사용자 계정과 연결되어 있습니다. 다른 %s 계정으로 로그인하여 외부 계정 연결을 해제한 후 새 %s 계정에 연결하세요.',
  'To configure Twitch.tv OAuth, create a new application here:

https://www.twitch.tv/settings/applications

When creating your application, use these settings:

  - **Redirect URI:** Set this to: `%s`

After completing configuration, copy the **Client ID** and **Client Secret** to the fields above. (You may need to generate the client secret by clicking \'New Secret\' first.)' => 'Twitch.tv OAuth를 설정하려면 다음 링크에서 새 애플리케이션을 생성하세요:

https://www.twitch.tv/settings/applications

애플리케이션을 생성할 때 다음 설정을 사용하세요:

  - **넘겨주기 URI:** 다음으로 설정: `%s`

설정을 완료한 후 **클라이언트 ID**와 **클라이언트 비밀 키**을 위의 필드에 복사하여 붙여넣으세요. (\'새로운 비밀 키\'를 클릭하여 클라이언트 비밀 키를 생성해야 할 수도 있습니다.)',
  'Session has already signed required legalpad documents!' => '세션은 이미 필수 legalpad 문서에 서명했습니다!',
  'On the plus side, that purple notification bubble will disappear.' => '그래도 좋은 점을 보자면, 저 보라색 알림 말풍선이 사라진다는 점입니다.',
  'This account ("%s") can not establish web sessions, so it is not possible to generate a functional recovery link. Special accounts like daemons and mailing lists can not log in via the web UI.' => '이 계정("%s")은 웹 세션을 설정할 수 없으므로 작동하는 복구 링크를 생성할 수 없습니다. 데몬 및 메일링 리스트와 같은 특수 계정은 웹 UI를 통해 로그인할 수 없습니다.',
  'Revoke credentials of the given type.' => '주어진 유형의 자격 증명을 폐기합니다.',
  'This private key is not formatted correctly. Check that you have provided the complete text of a valid private key.' => '이 개인 키는 형식이 올바르지 않습니다. 유효한 개인 키의 전체 텍스트를 제공했는지 확인하세요.',
  'Expected valid JSON response from Disqus account data request.' => 'Disqus 계정 데이터 요청으로부터 유효한 JSON 응답을 예상했습니다.',
  'LDAP Port' => 'LDAP 포트',
  'Really trust this PKCS8 keyfile?' => '정말로 이 PKCS8 키파일을 신뢰합니까?',
  '%s updated the OAuth consumer key for this provider from "%s" to "%s".' => '%s님이 이 제공자에 대한 OAuth 컨슈머 키를 "%s"에서 "%s"(으)로 업데이트했습니다.',
  'Contact number is already in use.' => '연락처가 이미 사용 중입니다.',
  'No such user "%s" to recover.' => '복구할 "%s" 사용자가 없습니다.',
  'Expected \'%s\' to be \'%s\'!' => '\'%s\'이(가) \'%s\'일 것을 예상했습니다!',
  'No public key was provided.' => '공개 키가 지정되지 않았습니다.',
  'Log In with LDAP' => 'LDAP으로 로그인',
  'Expected verifier to finish OAuth handshake!' => 'OAuth 핸드쉐이크를 끝내기 위한 검증자가 예상되었습니다!',
  'Specify the credential type to revoke with "--type" or specify "--everything". Use "--list" to list available credential types.' => '"--type"을 지정해서 폐기할 자격 증명 유형을 지정하거나, "--everything"을 지정하세요. 사용 가능한 자격 증명 유형 목록을 보려면 "--list"를 사용하세요.',
  'Start TLS after binding to the LDAP server.' => 'LDAP 서버에 바인딩한 후 TLS를 시작합니다.',
  'Duo providers must have an API hostname.' => 'Duo API 제공자에는 API 호스트 이름이 있어야 합니다.',
  'TOTP Code' => 'TOTP 코드',
  'Invalid response token for this challenge: token digest does not match stored digest.' => '이 챌린지에 대한 응답 토큰이 유효하지 않습니다: 토큰 다이제스트가 저장된 다이제스트와 일치하지 않습니다.',
  'OAuth Consumer Key' => 'OAuth 컨슈머 키',
  'Another user already has that username.' => '다른 사용자가 이미 해당 계정명을 보유하고 있습니다.',
  'Account Not Refreshable' => '계정을 갱신할 수 없음',
  'You can only recover the username for one account.' => '한 계정의 사용자 이름만 복구할 수 있습니다.',
  'There are no matching tokens to revoke.' => '폐기할 일치하는 토큰이 없습니다.',
  '%s disabled email trust.' => '%s님이 이메일 신뢰를 비활성화했습니다.',
  'Too Short' => '너무 짧음',
  'You denied this request. Wait %s second(s) to try again.' => '이 요청을 거부했습니다. 다시 시도하려면 %s초 기다리세요.',
  'Guidance included in the mail message body when users request an email link to access their account.

For installs with password authentication enabled, users access this workflow by using the "Forgot your password?" link on the login screen.

For installs without password authentication enabled, users access this workflow by using the "Send a login link to your email address." link on the login screen. This workflow allows users to recover access to their account if there is an issue with an external login service.' => '사용자가 계정 접속을 위한 이메일 링크를 요청할 때 메일 본문에 포함되는 안내 사항입니다.

비밀번호 인증이 활성화된 설치 환경에서는 로그인 화면의 "비밀번호를 잊으셨나요?" 링크를 사용하여 이 워크플로에 접근할 수 있습니다.

비밀번호 인증이 비활성화된 설치 환경에서는 로그인 화면의 "이메일 주소로 로그인 링크 보내기" 링크를 사용하여 이 워크플로에 접근할 수 있습니다. 이 워크플로는 외부 로그인 서비스에 문제가 발생했을 때 사용자가 계정 접근 권한을 복구할 수 있도록 합니다.',
  'The selected password is very weak: it is one of the most common passwords in use. Choose a stronger password.' => '선택한 비밀번호는 가장 흔하게 사용되는 비밀번호 중 하나로, 매우 취약합니다. 더 강력한 비밀번호를 선택하세요.',
  'LDAP Username: ' => 'LDAP 사용자 이름:',
  'That email address is not verified, but the account it is connected to has at least one other verified address. When an account has at least one verified address, you can only send password reset links to one of the verified addresses. Try a verified address instead.' => '해당 이메일 주소는 인증되지 않았지만, 연결된 계정에는 인증된 이메일 주소가 하나 이상 있습니다. 계정에 인증된 이메일 주소가 두 개 이상 있는 경우, 비밀번호 재설정 링크는 인증된 주소 중 하나로만 보낼 수 있습니다. 인증된 이메일 주소로 보내보세요.',
  'Not Distinct' => '구별되지 않음',
  'Allow users to log in using this provider. If you disable login, users can still use account integrations for this provider.' => '사용자가 이 제공자를 사용하여 로그인할 수 있도록 허용합니다. 로그인을 비활성화하더라도 사용자는 이 제공자의 계정 연동 기능을 계속 사용할 수 있습니다.',
  'Allow Login:' => '로그인 허용:',
  'Terminate Session?' => '세션을 종료하기',
  '%s (%s) MFA Code: %s' => '%s (%s) MFA 코드: %s',
  'Wrong Account' => '잘못된 계정',
  'Refresh tokens for a given user.' => '지정된 사용자의 토큰을 갱신합니다.',
  'Status ("%s") is not a valid contact number status. Valid status constants are: %s.' => '상태("%s")는 유효한 연락처 상태가 아닙니다. 유효한 상태 상수: %s.',
  'Already Registered' => '이미 등록됨',
  'SECURITY WARNING' => '보안 경고',
  'This public key is already associated with another user or device. Each key must unambiguously identify a single unique owner.' => '이 공개 키는 이미 다른 사용자 또는 장치와 연결되어 있습니다. 각 키는 명확하게 단일 소유자를 식별해야 합니다.',
  'Allow users to unlink account credentials for this provider from existing accounts. If you disable this, accounts will be permanently bound to provider accounts.' => '사용자가 기존 계정에서 이 제급자에 대한 계정 자격 증명 연결을 해제할 수 있도록 허용합니다. 이 기능을 비활성화하면 계정이 제공자 계정에 영구적으로 연결됩니다.',
  'When you need to authenticate, a request will be pushed to the Duo application on your phone.' => '인증이 필요할 때, 휴대폰의 Duo 애플리케이션으로 인증 요청이 전송됩니다.',
  'SMS is weak, and relatively easy for attackers to compromise. Strongly consider using a different MFA provider.' => 'SMS는 보안이 취약하고 공격자가 쉽게 해킹할 수 있습니다. 다른 다단계 인증(MFA) 제공자를 사용하는 것을 강력히 고려하세요.',
  'Revoke credentials without prompting.' => '확인 요청 없이 자격 증명을 폐기합니다.',
  '%s set the OAuth consumer secret for this provider.' => '%s님이 이 제공자에 대한 OAuth 컨슈머 비밀 키를 설정했습니다.',
  'You are logged in as %s, but the email address (%s) you just clicked a link from is already associated with another account (%s). You can log out to switch accounts, or verify the address and attach it to your current account. Attach email address %s to user account %s?' => '현재 %s 계정으로 로그인되어 있지만, 방금 링크를 클릭한 이메일 주소(%s)는 이미 다른 계정(%s)에 연결되어 있습니다. 계정을 전환하려면 로그아웃하거나, 이메일 주소를 인증하여 현재 계정에 연결할 수 있습니다. 이메일 주소 %s을(를) 사용자 계정 %s에 연결합니까?',
  'Analyzing or decrypting SSH keys requires the "ssh-keygen" binary, but it is not available in "$PATH". Make it available to work with SSH private keys.' => 'SSH 키를 분석하거나 복호화하려면 "ssh-keygen" 바이너리가 필요하지만, 이 바이너리는 "$PATH"에 포함되어 있지 않습니다. SSH 개인 키를 사용하려면 "ssh-keygen" 바이너리를 경로에 추가하세요.',
  'NOTE: Any user who can browse to this install\'s login page will be able to register an account. To restrict who can register an account, configure [[ %s | %s ]].' => '참고: 이 설치의 로그인 페이지에 접속할 수 있는 사용자는 누구나 계정을 등록할 수 있습니다. 계정 등록 권한을 제한하려면 [[ %s | %s ]]를 구성하세요.',
  'Auth Provider %d' => 'Auth 제공자 %d',
  'Set Test Message' => '문자 메시지 설정',
  'Contact number is invalid: %s' => '연락처가 유효하지 않습니다: %s',
  'To configure WordPress.com OAuth, create a new WordPress.com Application here:

https://developer.wordpress.com/apps/new/.

You should use these settings in your application:

  - **URL:** Set this to your full domain with protocol. For this     server, the correct value is: `%s`
  - **Redirect URL**: Set this to: `%s`


Once you\'ve created an application, copy the **Client ID** and **Client Secret** into the fields above.' => 'WordPress.com OAuth를 구성하려면 다음 링크에서 새 WordPress.com 애플리케이션을 생성하세요:

https://developer.wordpress.com/apps/new/.

애플리케이션에서 다음 설정을 사용하세요:

  - **URL:**: 전체 도메인과 프로토콜을 입력하세요. 이 서버의 경우의 올바른 값: `%s`
  - **넘겨주기 URL**: 다음으로 설정: `%s`


애플리케이션을 생성한 후 **클라이언트 ID**와 **클라이언트 비밀 키**를 위의 필드에 복사하여 붙여넣으세요.',
  'Username Attribute' => '사용자 이름 속성',
  'To configure Disqus OAuth, create a new application here:

https://disqus.com/api/applications/

Create an application, then adjust these settings:

  - **Callback URL:** Set this to `%s`

After creating an application, copy the **Public Key** and **Secret Key** to the fields above (the **Public Key** goes in **OAuth App ID**).' => 'Disqus OAuth를 구성하려면 다음 링크에서 새 애플리케이션을 생성하세요:

https://disqus.com/api/applications/

애플리케이션을 생성한 후 다음 설정을 조정하세요:

  - **콜백 URL:** 다음으로 설정: `%s`

애플리케이션을 생성한 후 **공개 키**와 **비밀 키**를 위의 필드에 복사하여 붙여넣으세요(**공개 키**는 **OAuth 앱 ID**에 입력합니다).',
  'Unlink Your Only Login Account?' => '유일한 로그인 계정의 연결을 끊으시겠습니까?',
  'Specify an OAuth client id with "--id".' => '"--id"를 사용하여 OAuth 클라이언트 id를 지정하세요.',
  'Your account has no primary contact number.' => '계정에 기본 연락처가 없습니다.',
  'JIRA base URI is required.' => 'JIRA 베이스 URI는 필수입니다.',
  'Config Locked' => '구성 잠김',
  'Attempted to set \'%s\' cookie to \'%s\', but your browser sent back a cookie with the value \'%s\'. Clear your browser\'s cookies and try again.' => '\'%s\' 쿠키를 \'%s\'(으)로 설정하려고 시도했지만, 브라우저에서 \'%s\' 값이 담긴 쿠키를 반환했습니다. 브라우저의 쿠키를 삭제하고 다시 시도하세요.',
  'Recover directly into a full session without requiring MFA or other login checks.' => 'MFA 또는 다른 로그인 검사를 요구하지 않고 바로 전체 세션으로 복구합니다.',
  'Always bind and search, even without a username and password.' => '사용자 이름과 암호가 없어도 항상 바인딩하고 검색합니다.',
  'Skipping, provider is not enabled or does not exist.' => '건너뜁니다, 제공자가 활성화되어 있지 않거나 존재하지 않습니다.',
  'Does Not Allow Registration' => '등록을 허용하지 않음',
  '%s

To configure Amazon OAuth, create a new \'API Project\' here:

https://developer.amazon.com/apps-and-games/login-with-amazon

Use these settings:

  - **Allowed Return URLs:** Add this: `%s`

After completing configuration, copy the **Client ID** and **Client Secret** to the fields above.' => '%s

Amazon OAuth를 구성하려면 다음 링크에서 새로운 \'API 프로젝트\'를 생성하세요:

https://developer.amazon.com/apps-and-games/login-with-amazon

다음 설정을 사용하세요:

  - **허용된 반환 URLs:** 다음을 추가하세요: `%s`

완료되면 **클라이언트 ID**와 **클라이언트 비밀 키**를 위의 필드에 복사하세요.',
  '/settings/panel/contact/' => '/settings/panel/contact/',
  'Path to corresponding PKCS8 key.' => '대응하는 PKCS8 키의 경로입니다.',
  'Strength' => '강도',
  'Enter LDAP Credentials' => 'LDAP 자격 증명을 입력',
  'LDAP record query returned more than one result. The query must uniquely identify a record.' => 'LDAP 레코드 쿼리에서 두 개 이상의 결과가 반환되었습니다. 쿼리는 레코드를 고유하게 식별해야 합니다.',
  'Email record ("%s") has bad associated user PHID ("%s").' => '이메일 기록("%s")에 잘못된 사용자 PHID("%s")가 연결되어 있습니다.',
  'This email address has already been verified.' => '이 이메일 주소는 이미 인증되었습니다.',
  'The password you entered is the same as another password associated with your account. Each password must be unique.' => '입력한 비밀번호는 계정에 연결된 다른 비밀번호와 동일합니다. 모든 비밀번호는 고유해야 합니다.',
  'The email address you just clicked a link from is already the primary email address for a registered account (%s). Log in to continue.' => '방금 링크를 클릭한 이메일 주소는 이미 등록된 계정(%s)의 기본 이메일 주소입니다. 로그인하여 계속 진행하세요.',
  'Guidance shown on the main login screen before users log in or register.' => '사용자가 로그인하거나 등록하기 전에 메인 로그인 화면에 표시되는 안내 메시지입니다.',
  'Cache the PKCS8 format of a public key. When developing on OSX, this can be used to work around issues with ssh-keygen. Use `%s` to generate a PKCS8 key to feed to this command.' => '공개 키의 PKCS8 형식을 캐시합니다. OSX에서 개발할 때 ssh-keygen 문제를 우회하는 데 사용할 수 있습니다. 이 명령에 전달할 PKCS8 키를 생성하려면 `%s`을(를) 사용하세요.',
  'Revoke from all credential owners.' => '모든 자격 증명 소유자로부터 폐기합니다.',
  'Invite has invalid author PHID ("%s").' => '초대의 작성자 PHID ("%s")가 유효하지 않습니다.',
  'Unable to Make Primary' => '기본으로 설정할 수 없습니다',
  'Use lowercase letters, digits, and periods. For example: %s' => '소문자, 숫자, 마침표를 사용하세요. 예: %s',
  'The response token for this challenge is invalid: response tokens may not include spaces.' => '이 챌린지에 대한 응답 토큰이 유효하지 않습니다. 응답 토큰에는 공백이 포함될 수 없습니다.',
  'Anonymous Password' => '익명 비밀번호',
  'Use the button below to log in as: %s' => '다음으로 로그인 하려면 아래의 버튼을 사용하세요: %s',
  'Active OAuth Token' => '활성 OAuth 토큰',
  'An authorization request will be pushed to the Duo application on your phone.' => '휴대폰의 Duo 애플리케이션으로 인증 요청이 전송됩니다.',
  'Administrative approvals are disabled, so users who register will be able to use their accounts immediately. To enable approvals, configure %s.' => '관리 승인이 비활성화되어 있으므로 등록한 사용자는 즉시 계정을 사용할 수 있습니다. 승인을 활성화하려면 %s을(를) 구성하세요.',
  'Google' => '구글',
  'You currently have multi-factor authentication ("%s") which depends on your primary contact number. You must remove this authentication factor before you can designate a new primary contact number.' => '현재 기본 연락처를 사용하는 다단계 인증("%s")이 설정되어 있습니다. 새 기본 연락처를 지정하려면 먼저 이 인증 단계를 제거해야 합니다.',
  'Failed to decode OAuth access token response: %s' => 'OAuth 접근 토큰 응답을 디코딩하는데 실패했습니다: %s',
  'Optionally, specify one or more comma-separated attributes to use to prefill the "Real Name" field when registering a new account. This is purely cosmetic and does not affect the login process, but can make registration a little easier.' => '선택적으로, 새 계정 등록 시 "실명" 필드를 미리 채우는 데 사용할 하나 이상의 속성을 쉼표로 구분하여 지정할 수 있습니다. 이는 순전히 표시상의 목적이며 로그인 과정에는 영향을 미치지 않지만, 등록 절차를 조금 더 간편하게 만들 수 있습니다.',
  'Allow users to attach a mobile authenticator application (like 2FAS, Aegis, FreeOTP, or Bitwarden Authenticator) to their account.' => '사용자가 모바일 인증 앱(예: 2FAS, Aegis, FreeOTP, Bitwarden Authenticator)을 계정에 연결할 수 있게 합니다.',
  'You must enter an LDAP password.' => 'LDAP 비밀번호를 입력해야 합니다.',
  'Generate New Keypair' => '새로운 키 쌍 생성',
  'MFA Provider' => 'MFA 제공자',
  'The private key will not be retained.' => '비밀 키는 유지되지 않습니다.',
  'MFA Provider %d' => 'MFA 제공자 %d',
  'This challenge already has a response token; you can not set a new response token.' => '이 챌린지에는 이미 응답 토큰이 있습니다. 새 응답 토큰을 설정할 수 없습니다.',
  'Invite action is not a send action!' => '초대 작업이 전송 작업이 아닙니다!',
  'This key is trusted. Trusted keys can not be edited. Use %s to revoke trust before editing the key.' => '이 키는 신뢰할 수 있습니다. 신뢰하는 키는 편집할 수 없습니다. 신뢰를 폐기하려면 이 키를 편집하기 전에 %s을(를) 사용하세요.',
  'Edit Message' => '메시지 편집',
  'Expected valid JSON response from Facebook account data request.' => 'Facebook 계정 데이터 요청으로부터 유효한 JSON 응답을 예상했습니다.',
  'Add Multi-Factor Auth' => '다단계 인증 추가',
  'The contact number.' => '연락처입니다.',
  'You must enter an LDAP username.' => 'LDAP 사용자 이름을 입력해야 합니다.',
  'Refresh LDAP Account' => 'LDAP 계정 갱신',
  'The password and confirmation do not match.' => '비밀번호와 확인 비밀번호가 일치하지 않습니다.',
  'Reset action counters so a user can continue taking rate-limited actions.' => '사용자가 속도 제한이 있는 작업을 계속 수행할 수 있도록 작업 카운터를 재설정합니다.',
  '%s disabled this contact number.' => '%s님이 연락처를 비활성화했습니다.',
  'To configure GitHub OAuth, create a new GitHub Application here:

https://github.com/settings/applications/new

You should use these settings in your application:

  - **URL:** Set this to your full domain with protocol. For this     server, the correct value is: `%s`
  - **Callback URL**: Set this to: `%s`


Once you\'ve created an application, copy the **Client ID** and **Client Secret** into the fields above.' => 'GitHub OAuth를 구성하려면 다음 링크에서 새 GitHub 애플리케이션을 생성하세요:

https://github.com/settings/applications/new

애플리케이션에서 다음 설정을 사용하세요:

  - **URL:**: 전체 도메인과 프로토콜을 입력하세요. 이 서버의 경우의 올바른 값: `%s`
  - **콜백 URL**: 다음으로 설정: `%s`


애플리케이션을 생성한 후 **클라이언트 ID**와 **클라이언트 비밀 키**를 위의 필드에 복사하여 붙여넣으세요.',
  'No Providers Configured:' => '구성된 제공자 없음:',
  'If you continue, you will create a new account. You will not be able to link this external account to an existing account.' => '계속 진행하면 새 계정이 생성됩니다. 이 외부 계정은 기존 계정에 연결할 수 없습니다.',
  'A text message with an authorization code will be sent to your primary contact number.' => '인증 코드가 포함된 문자 메시지가 기본 연락처로 발송됩니다.',
  'Revokes all stored passwords.

Account passwords and VCS passwords (used to access repositories over HTTP) will both be revoked. Passwords for any third party applications which use shared password infrastructure will also be revoked.

Users will need to reset account passwords, possibly by using the "Forgot Password?" link on the login page. They will also need to reset VCS passwords.

Passwords are revoked, not just removed. Users will be unable to select the passwords they used previously and must choose new, unique passwords.

Revoking passwords will not terminate outstanding login sessions. Use the "session" revoker in conjunction with this revoker to force users to login again.' => '저장된 모든 비밀번호를 폐기합니다.

계정 비밀번호와 VCS 비밀번호(HTTP를 통해 저장소에 접근하는 데 사용)가 모두 폐기됩니다. 공유 비밀번호 인프라를 사용하는 서드파티 애플리케이션의 비밀번호도 폐기됩니다.

사용자는 로그인 페이지의 "비밀번호를 잊으셨나요?" 링크를 사용하는 등의 방법으로 계정 비밀번호를 재설정해야 합니다. 또한 VCS 비밀번호도 재설정해야 합니다.

비밀번호는 단순히 제거되는 것이 아니라 폐기됩니다. 사용자는 이전에 사용한 비밀번호를 선택할 수 없으며 새롭고 고유한 비밀번호를 선택해야 합니다.

비밀번호를 폐기해도 미처리된 로그인 세션은 종료되지 않습니다. 사용자가 다시 로그인하도록 강제하려면 이 revoker와 함께 "session" revoker를 사용하세요.',
  '%s set the OAuth consumer key for this provider to "%s".' => '%s님이 이 제공자에 대한 OAuth 컨슈머 비밀 키를 "%s"(으)로 설정했습니다.',
  'Guidance in the message body when users set a password on an account which did not previously have a password.' => '사용자가 이전에 비밀번호가 없었던 계정에 비밀번호를 설정할 때 메시지 본문에 표시되는 안내 메시지입니다.',
  'Disable Provider?' => '제공자를 비활성화합니까?',
  'Connecting to LDAP...' => 'LDAP에 연결 중...',
  'Wait' => '대기',
  'No matching SSH keys.' => '일치하는 SSH 키가 없습니다.',
  'Use %s Username' => '%s(이)라는 사용자 이름 사용',
  'Authentication Error' => '인증 오류',
  'A keypair has been generated, and the public key has been added as a recognized key.' => '키 쌍이 생성되었으며 공개 키가 인식된 키로 추가되었습니다.',
  '%s named this provider %s.' => '%s님이 이 제공자의 이름을 %s(으)로 지정했습니다.',
  'You may optionally customize the enrollment message users are presented with by providing a replacement message below:' => '아래에 대체 메시지를 입력하여 사용자에게 표시되는 등록 메시지를 선택적으로 사용자 지정할 수 있습니다:',
  'Mail Body: Email Login' => '메일 본문: 이메일 로그인',
  'Send a test message to %s?' => '%s님에게 테스트 메시지를 보내시겠습니까?',
  'Edit Provider' => '제공자 편집',
  'Auth' => 'Auth',
  'Confirm the link with this %s account. This account will be able to log in to your %s account.' => '이 %s 계정으로 연결을 확인하세요. 이 계정으로 %s 계정에 로그인할 수 있습니다.',
  '**JIRA Instance Name**

Choose a permanent name for this instance of JIRA. This name is used internally to keep track of this particular instance of JIRA, in case the URL changes later.

Use lowercase letters, digits, and period. For example, `jira`, `jira.mycompany` or `jira.engineering` are reasonable names.' => '**JIRA 인스턴스 이름**

이 JIRA 인스턴스에 사용할 영구적인 이름을 선택하세요. 파브리케이터는 나중에 URL이 변경될 경우를 대비하여 이 이름을 내부적으로 사용하여 이 JIRA 인스턴스를 추적합니다.

소문자, 숫자 및 마침표를 사용하세요. 예를 들어:

`jira`, `jira.mycompany` 또는 `jira.engineering`은 적절한 이름입니다.',
  'Text Message (SMS)' => '문자 메시지 (SMS)',
  '%s removed the name (%s) of this provider.' => '%s님이 이 제공자의 이름(%s)을 제거했습니다.',
  'The PHP \'openssl\' extension is not installed. You must install this extension in order to add a JIRA authentication provider, because JIRA OAuth requests use the RSA-SHA1 signing algorithm. Install the \'openssl\' extension, restart everything, and try again.' => 'PHP \'openssl\' 확장기능이 설치되어 있지 않습니다. JIRA 인증 제공자를 추가하려면 이 확장 기능을 설치해야 합니다. JIRA OAuth 요청은 RSA-SHA1 서명 알고리즘을 사용하기 때문입니다. \'openssl\' 확장 기능을 설치하고 모든 것을 재시작한 후 다시 시도하세요.',
  'Provided public key is not properly formatted.' => '지정된 공개 키는 적절한 포맷을 갖추지 못했습니다.',
  'Multi-Factor Authentication is Misconfigured' => '다단계 인증이 잘못 구성되어 있습니다',
  '(You can not terminate your current login session. To terminate it, log out.)' => '(현재의 로그인 세션을 종료할 수 없습니다. 종료하려면 로그아웃하세요.)',
  'Your account has been created, but needs to be approved by an administrator. You\'ll receive an email once your account is approved.' => '계정을 만들었으나 관리자의 승인이 필요합니다. 계정이 승인되면 이메일을 받게 됩니다.',
  'Newly issued MFA challenges must have a future TTL. This factor issued a bad TTL ("%s"). (Did you use a relative time instead of an epoch?)' => '새로 발급된 MFA 챌린지는 미래 시점의 TTL을 가져야 합니다. 이 단계가 잘못된 TTL("%s")을 발급했습니다. (에포크 대신 상대 시간을 사용했습니까?)',
  'Yes (Optional)' => '예 (선택 사항)',
  'Access token error: %s' => '접근 토큰 오류: %s',
  'The URI where the OAuth server is installed. For example: %s' => 'OAuth 서버가 설치되어 있는 URI입니다. 예: %s',
  'Cached PKCS8 key for public key.' => '공개 키에 대해 캐시된 PKCS8 키입니다.',
  'Username Change Instructions' => '사용자 이름 변경 지침',
  'Custom Enroll Message' => '사용자 지정 등록 메시지',
  'You must verify your email address to log in. You should have a new email message with verification instructions in your inbox (%s).' => '로그인하려면 이메일 주소를 인증해야 합니다. 받은 편지함에 인증 지침이 포함된 새 이메일이 도착했을 것입니다(%s).',
  'Refreshing token, current token expires in %s seconds.' => '토큰을 갱신합니다. 현재 토큰은 %s초 후에 만료됩니다.',
  'Allows Registration' => '등록 허용',
  'Duo' => 'Duo',
  'Application ID is required.' => '애플리케이션 ID는 필수입니다.',
  'You do not have a linked account on this provider, and thus can not refresh it.' => '해당 제공자에 연결된 계정이 없으므로 계정을 새로 고침할 수 없습니다.',
  'Use the **OAuth App Notes** field to record details about which account the external application is registered under.' => '**OAuth 앱 메모** 필드를 사용하여 외부 애플리케이션이 등록된 계정에 대한 세부 정보를 기록하세요.',
  'firstname, lastname' => '이름, 성',
  'Minimum length of %d characters.' => '최소 길이는 %d자입니다.',
  'This provider does not allow refreshing.' => '이 제공자는 갱신을 허용하지 않습니다.',
  'One-Time Login Token' => '일회용 로그인 토큰',
  '%s revoked this password.' => '%s님이 이 비밀번호를 폐기했습니다.',
  'The id of the OAuth client.' => 'OAuth 클라이언트의 id입니다.',
  'Newly issued MFA challenges must have a valid TTL!' => '새로 발급된 MFA 인증 챌린지는 유효한 TTL을 가져야 합니다!',
  'Target "%s" is not a valid target to revoke credentials from. Usually, revoke from "@username".' => '대상 "%s"은(는) 자격 증명을 폐기할 수 있는 유효한 대상이 아닙니다. 일반적으로는 "@username"으로부터 폐기합니다.',
  '%d-Bit Secret' => '%d비트 비밀 키',
  'Duo is not requiring a challenge, which defeats the purpose of MFA. Duo must be configured to challenge you.' => 'Duo가 챌린지를 요구하지 않으므로 MFA의 목적에 부합하지 않습니다. Duo는 챌린지를 요구하도록 설정되어 있어야 합니다.',
  'Remove trust from an OAuth client. Users must manually confirm reauthorization of untrusted OAuth clients.' => 'OAuth 클라이언트의 신뢰를 제거합니다. 사용자는 신뢰되지 않은 OAuth 클라이언트를 다시 승인할 때 수동으로 확인해야 합니다.',
  'The email address you just clicked a link from is already associated with a registered account (%s), but is not verified. Log in to that account to continue. If you can not log in, you can register a new account.' => '방금 링크를 클릭한 이메일 주소는 이미 등록된 계정(%s)과 연결되어 있지만 인증되지 않았습니다. 계속하려면 해당 계정으로 로그인하세요. 로그인할 수 없는 경우 새 계정을 등록할 수 있습니다.',
  'You are destroying an entire class of credentials. This may be very disruptive to users. You should normally do this only if you suspect there has been a widespread compromise which may have impacted everyone.' => '이렇게 하면 전체 자격 증명 클래스가 삭제됩니다. 이는 사용자에게 심각한 혼란을 초래할 수 있습니다. 일반적으로 이러한 작업은 모든 사용자에게 영향을 미칠 수 있는 광범위한 침해 사고가 발생했다고 의심되는 경우에만 수행해야 합니다.',
  'If you want to link an existing %s account to this external account, do not continue. Instead: log in to your existing account, then go to "Settings" and link the account in the "External Accounts" panel.' => '기존 %s 계정을 이 외부 계정에 연결하려면 이 단계를 진행하지 마세요. 대신: 기존 계정에 로그인한 다음 "설정"으로 이동하여 "외부 계정" 패널에서 계정을 연결하세요.',
  'You responded to this challenge correctly.' => '이 챌린지에 올바르게 응답했습니다.',
  'Specify either specific factors with "--provider", or all factors with "--all-types", but not both.' => '특정 요소와 "--provider" 또는 모든 팩터와 "--all-types"를 지정하되, 둘을 동시에 지정하지는 마세요.',
  'To add a TOTP factor to your account, you will first need to install a mobile authenticator application on your phone. Some applications which work well are **Aegis**, **2FAS**, **FreeOTP**, **Bitwarden Authenticator**, **Google Authenticator**, and **Authy**, but any other TOTP application should work.

If you haven\'t already, download and install a TOTP application on your phone now. Once you\'ve launched the application and are ready to add a new TOTP code, continue to the next step.' => '계정에 TOTP 요소를 추가하려면 먼저 휴대전화에 모바일 인증 애플리케이션을 설치해야 합니다. 잘 작동하는 애플리케이션으로는 **Aegis**, **2FAS**, **FreeOTP**, **Bitwarden Authenticator**, **Google Authenticator**, **Authy** 등이 있지만, 다른 TOTP 애플리케이션도 작동할 것입니다.

아직 설치하지 않았다면 지금 휴대전화에 TOTP 애플리케이션을 다운로드하고 설치하세요. 애플리케이션을 실행했고 새 TOTP 코드를 추가할 준비가 되었으면 다음 단계로 계속 진행하세요.',
  'Special users like daemons and mailing lists are not permitted to log in via the web. Log in as a normal user instead.' => '데몬이나 메일링 리스트와 같은 특수 사용자는 웹을 통해 로그인할 수 없습니다. 일반 사용자 계정으로 로그인하세요.',
  'Login Screen Instructions' => '로그인 화면 지침',
  'Mail Body: Welcome' => '메일 본문: 환영',
  'Revoke Token?' => '토큰을 폐기합니까?',
  'Asana' => 'Asana',
  'MFA' => 'MFA',
  'Terminate all login sessions.' => '모든 로그인 세션을 끝냅니다.',
  'Send Another Email' => '다른 이메일 보내기',
  'You and other users on this install are collectively sending too many test text messages too quickly. Wait a few minutes to continue texting tests.' => '당신과 이 설치 환경의 다른 사용자들이 테스트 문자 메시지를 너무 많이, 너무 빠르게 보내고 있습니다. 테스트 문자 메시지를 계속해서 보내려면 잠시 기다려 주세요.',
  'Failed to find an OAuth client with ID %s.' => 'ID가 %s인 OAuth 클라이언트를 찾지 못했습니다.',
  'Allow Account Linking' => '계정 연결 허용',
  'Provider names can not be longer than %s characters.' => '제공자 이름은 %s자를 초과할 수 없습니다.',
  'No Account Linked' => '연결된 계정이 없습니다',
  'Allow users to link account credentials for this provider to existing accounts. There is normally no reason to disable this unless you are trying to move away from a provider and want to stop users from creating new account links.' => '사용자가 이 제공자의 계정 자격 증명을 기존 계정에 연결할 수 있도록 허용합니다. 일반적으로 제공자를 변경하려는 경우나 사용자가 새 계정 연결을 생성하는 것을 막으려는 경우가 아니라면 이 기능을 비활성화할 이유는 없습니다.',
  'Slack' => '슬랙',
  'This request improperly specifies an MFA challenge token ("%s") multiple times and can not be processed.' => '이 요청은 MFA 챌린지 토큰("%s")을 부적절하게 여러 번 지정했으므로 처리할 수 없습니다.',
  'You recently provided a response to this factor. Responses may not be reused. Wait %s second(s) for the code to cycle, then try again.' => '최근에 이 요소에 대한 응답을 제공했습니다. 응답은 재사용할 수 없습니다. 코드가 순환될 때까지 %s초 기다린 후 다시 시도하세요.',
  'Refresh OAuth access tokens. This is primarily useful for development and debugging.' => 'OAuth 접근 토큰을 갱신합니다. 이는 주로 개발과 디버깅에 유용합니다.',
  'The OAuth provider returned an error: %s' => 'OAuth 제공자가 오류를 반환했습니다: %s',
  'Registration Failed' => '등록 실패',
  'Unable to Verify Email' => '이메일을 인증할 수 없음',
  'Public SSH Key' => '공개 SSH 키',
  'Disqus' => 'Disqus',
  'Add MFA Provider' => 'MFA 제공자 추가',
  'Expected \'%s\' in request!' => '요청에 \'%s\'이(가) 예상되었습니다!',
  '%s updated the OAuth application notes for this provider.' => '%s님이 이 제공자에 대한 OAuth 애플리케이션 메모를 업데이트했습니다.',
  '%s updated the "%s" value.' => '%s님이 "%s" 값을 업데이트했습니다.',
  'Installation is complete. Register your administrator account below to log in. You will be able to configure options and add authentication mechanisms later on.' => '설치가 완료되었습니다. 아래에 관리자 계정을 등록하여 로그인하세요. 나중에 옵션을 구성하고 인증 방식을 추가할 수 있습니다.',
  'This request has timed out because you took too long to respond.' => '이 요청은 응답하는 데 시간이 너무 오래 걸려 시간 초과되었습니다.',
  'All Keys' => '모든 키',
  'The external account you are registering with has an email address that is already in use ("%s") by an existing %s account. Choose a new, valid email address to register a new account.' => '등록하려는 외부 계정의 이메일 주소는 이미 기존 %2$s 계정에서 사용 중입니다 ("%s"). 새 계정을 등록하려면 새롭고 유효한 이메일 주소를 선택하세요.',
  'Terminate Sessions' => '세션 종료하기',
  'Upload Public Key' => '공개 키 업로드',
  'OAuth App Notes' => 'OAuth 앱 메모',
  'You have failed too many attempts to synchronize new multi-factor authentication methods in a short period of time.' => '짧은 시간 내에 새로운 다단계 인증 메서드를 동기화하려는 시도가 너무 많이 실패했습니다.',
  'Expected token to finish OAuth handshake!' => 'OAuth 핸드쉐이크를 끝내기 위한 토큰이 예상되었습니다!',
  'Unable to start TLS connection when connecting to LDAP.' => 'LDAP에 연결할 때 TLS 연결을 시작할 수 없습니다.',
  'Authentication provider configuration is locked, and can not be changed without being unlocked.' => '인증 제공자 구성이 잠겨 있으므로, 잠금을 해제하지 않으면 변경할 수 없습니다.',
  'Factor type "%s" is unknown. Use `bin/auth list-factors` to get a list of known factor types.' => '"%s" 유형의 단계를 알 수 없습니다. 알려진 단계 유형 목록을 보려면 `bin/auth list-factors`를 사용하세요.',
  'Log In (%s)' => '로그인 (%s)',
  'Skip This Step' => '이 단계 건너뛰기',
  'Do you want to disable this provider? Users will not be able to register or log in using linked accounts. If there are any users without other linked authentication mechanisms, they will no longer be able to log in. If you disable all providers, no one will be able to log in.' => '이 제공자를 비활성화합니까? 사용자는 연결된 계정을 사용하여 등록하거나 로그인할 수 없습니다. 다른 인증 수단이 연결되어 있지 않은 사용자는 더 이상 로그인할 수 없습니다. 모든 제공자를 비활성화하면 아무도 로그인할 수 없게 됩니다.',
  'Status of the MFA provider.' => 'MFA 제공자의 상태입니다.',
  'Duo API Hostname' => 'Duo API 호스트 이름',
  'Login Failure' => '로그인 실패',
  'Custom instructions included in "Welcome" mail when an administrator creates a user account.' => '관리자가 사용자 계정을 생성할 때 "환영" 메일에 포함되는 사용자 지정 지침입니다.',
  'NOTE: Revoking passwords does not terminate existing sessions which were established using the old passwords. To terminate existing sessions, run the "session" revoker now.' => '참고: 암호를 폐기해도 이전 암호를 사용하여 설정된 기존 세션은 종료되지 않습니다. 기존 세션을 종료하려면 지금 "session" 폐기 도구를 실행하세요.',
  '%s enabled account linking.' => '%s님이 계정 연결을 활성화했습니다.',
  'Scan this QR code with the Duo application on your mobile phone:' => '휴대폰의 Duo 앱으로 이 QR 코드를 스캔하세요:',
  'Contact Number %d' => '연락처 %d',
  'Account Already Linked' => '계정이 이미 연결되었습니다',
  'Another user already has that email.' => '다른 사용자가 이미 해당 이메일을 보유하고 있습니다.',
  'You already have a provider of this type.' => '이 유형의 제공자가 이미 있습니다.',
  '%s You have not added authentication providers yet. Use "%s" to add a provider, which will let users register new accounts and log in.' => '%s 아직 인증 제공자를 추가하지 않았습니다. "%s"를 사용해서 제공자를 추가하면 사용자가 새 계정을 등록하고 로그인할 수 있습니다.',
  'Type of the MFA provider.' => 'MFA 제공자의 유형입니다.',
  'Your account has been disabled.' => '계정이 비활성화되었습니다.',
  'JIRA base URI should include protocol (like "https://").' => 'JIRA 기본 URI는 프로토콜을 포함해야 합니다 (예: "https://").',
  'Authentication provider ("%s") encountered an error while attempting to log in. %s' => '인증 제공자("%s")가 로그인 시도 중 오류가 발생했습니다. %s',
  'There are no matching factors to strip.' => '제거할 일치하는 단계가 없습니다.',
  'The invite code in the link you clicked is invalid. Check that you followed the link correctly.' => '클릭한 링크의 초대 코드가 유효하지 않습니다. 올바른 링크를 따라갔는지 확인하세요.',
  'Mark an OAuth client as trusted. Trusted OAuth clients may be reauthorized without requiring users to manually confirm the action.' => 'OAuth 클라이언트를 신뢰할 수 있는 클라이언트로 표시합니다. 신뢰할 수 있는 OAuth 클라이언트는 사용자가 작업을 수동으로 확인하지 않고도 재인증할 수 있습니다.',
  'Twitter' => '트위터',
  'Unable to Generate Keys' => '키를 생성할 수 없습니다',
  'Specify the target to revoke credentials from with "--from" or specify "--everywhere".' => '자격 증명을 폐기할 대상을 "--from"으로 지정하거나 "--everywhere"을 지정하세요.',
  'Unlocked the authentication provider configuration.' => '인증 제공자 구성의 잠금을 해제했습니다.',
  'You can link your %s account to an external account to allow you to log in more easily in the future. To continue, choose an account to link below. If you prefer not to link your account, you can skip this step.' => '%s 계정을 외부 계정에 연결하면 향후 더 쉽게 로그인할 수 있습니다. 계속하려면 아래에서 연결할 계정을 선택하세요. 계정을 연결하지 않으려면 이 단계를 건너뛸 수 있습니다.',
  'Log In or Register with LDAP' => 'LDAP으로 로그인 또는 등록',
  'Expected JSON response from Duo.' => 'Duo에서 JSON 응답을 예상했습니다.',
  'Display name for the MFA provider.' => 'MFA 제공자가 표시되는 이름입니다.',
  'Revoke Public Key' => '공개 키 폐기',
  'You (or someone pretending to be you) recently requested an account recovery link be sent to this email address. If you did not make this request, you can ignore this message.' => '당신(또는 당신을 사칭하는 누군가)이 최근 이 이메일 주소로 계정 복구 링크를 보내달라고 요청했습니다. 만약 이러한 요청을 한 적이 없다면, 이 메시지를 무시해도 됩니다.',
  'Use Primary Email Address' => '기본 이메일 주소 사용',
  'Server Name' => '서버 이름',
  'If you lose access to your account, you can recover access by sending yourself an email login link from the login screen.' => '계정 접근 권한을 잃어버린 경우, 로그인 화면에서 자신에게 이메일 로그인 링크를 보내면 접근 권한을 복구할 수 있습니다.',
  'Login validation is missing expected parameter ("%s").' => '로그인 유효성 검사에 필수 매개변수("%s")가 누락되었습니다.',
  'Customize Messages' => '메시지 사용자 지정',
  'Next Step' => '다음 단계',
  'You can not unlink this account because the administrator has configured this server to make links to "%s" accounts permanent.' => '관리자가 "%s" 계정에 대한 연결을 영구적으로 유지하도록 서버를 구성했기 때문에 이 계정의 연결을 해제할 수 없습니다.',
  'Designate %s as your primary contact number?' => '%s을(를) 기본 연락처로 지정합니까?',
  'Message Preview' => '메시지 미리 보기',
  'This engine is used to edit MFA providers.' => '이 엔진은 MFA 제공자를 편집하는 데 사용됩니다.',
  '%s enabled account unlinking.' => '%s님이 계정 연결 해제를 활성화했습니다.',
  'The email address %s is now verified.' => '%s 이메일 주소가 지금 인증되었습니다.',
  'This factor recently issued a challenge for a different workflow. Wait %s second(s) for the code to cycle, then try again.' => '이 단계는 최근에 다른 워크플로에 챌린지를 발행했습니다. 코드가 갱신될 때까지 %s초 정도 기다린 후 다시 시도하세요.',
  'Send SMS' => 'SMS 보내기',
  '%s disabled this provider.' => '%s님이 이 제공자를 비활성화했습니다.',
  'Not Installed' => '설치되지 않음',
  'Your browser did not submit a "%s" cookie with client state information in the request. Check that cookies are enabled. If this problem persists, you may need to clear your cookies.' => '브라우저에서 요청에 클라이언트 상태 정보가 포함된 "%s" 쿠키를 전송하지 않았습니다. 쿠키가 활성화되어 있는지 확인하세요. 문제가 지속되면 쿠키를 삭제해야 할 수 있습니다.',
  'Found %s account(s) to refresh.' => '새로 고침 할 계정 %s개를 찾았습니다.',
  'You have not activated this enrollment in the Duo application on your phone yet. Complete activation, then click continue.' => '아직 휴대폰의 Duo 애플리케이션에서 이 등록을 활성화하지 않았습니다. 활성화를 완료한 후 계속을 클릭하세요.',
  'This factor recently issued a challenge to a different login session. Wait %s second(s) for the code to cycle, then try again.' => '이 단계는 최근에 다른 세션에 챌린지를 발행했습니다. 코드가 갱신될 때까지 %s초 정도 기다린 후 다시 시도하세요.',
  'ERROR: You are making a Conduit API request to "%s", but the correct HTTP request path to use in order to access a Conduit method is "%s" (for example, "%s"). Check your configuration.' => '오류: "%s"(으)로 Conduit API 요청을 보내고 있지만, Conduit 메서드에 접근하기 위한 올바른 HTTP 요청 경로는 "%s"(예: "%s")입니다. 구성을 확인하세요.',
  '%s updated the enroll message.' => '%s님이 등록 메시지를 업데이트했습니다.',
  'You currently have multi-factor authentication ("%s") which depends on your primary contact number. You must remove this authentication factor before you can modify or disable your primary contact number.' => '현재 기본 연락처를 사용하는 다단계 인증("%s")이 설정되어 있습니다. 기본 연락처를 수정하거나 비활성화하려면 먼저 이 인증 단계를 제거해야 합니다.',
  'Duo API hostname ("%s") is invalid, hostname must be "*.duosecurity.com".' => 'Duo API 호스트 이름("%s")이 유효하지 않습니다, 호스트 이름은 "*.duosecurity.com" 이어야 합니다.',
  'Send a login link to your email address.' => '내 이메일 주소로 로그인 링크를 보냅니다.',
  'Leave high security and return your session to normal security levels?' => '높은 보안 모드를 종료하고 세션을 일반 보안 모드로 되돌립니까?',
  'OAuth App Secret' => 'OAuth 앱 비밀 키',
  'Skipping, provider has no stored refresh token.' => '건너뜁니다, 제공자에 저장된 새로 고침 토큰이 없습니다.',
  'Really terminate session %s?' => '정말로 %s 세션을 종료합니까?',
  'Revokes all SSH public keys.

SSH public keys are revoked, not just removed. Users will need to generate and upload new, unique keys before they can access repositories or other services over SSH.' => '모든 SSH 공개 키를 폐기합니다.

SSH 공개 키는 제거되는 것이 아니라 폐기됩니다. 사용자는 SSH를 통해 저장소 또는 기타 서비스에 접근하기 전에 새롭고 고유한 키를 생성하여 업로드해야 합니다.',
  'Terminate Sessions?' => '세션을 종료합니까?',
  '%s enabled email trust.' => '%s님이 이메일 신뢰를 활성화했습니다.',
  'End of dry run.' => '드라이 런의 끝.',
  'Choose Provider Type' => '제공자 유형을 선택하세요',
  'Revoke credentials which may have been leaked or disclosed.' => '유출되었거나 공개되었을 수 있는 자격 증명을 폐기합니다.',
  'Destroyed %s credential(s) of type "%s".' => '"%2$s" 유형의 자격 증명 %s개가 파기되었습니다.',
  'Server name is required.' => '서버 이름은 필수입니다.',
  'List information about available credential revokers.' => '사용 가능한 자격 증명 폐기 도구에 대한 정보를 나열합니다.',
  'No message type exists with key "%s".' => '키 "%s"을(를) 가진 메시지 유형이 존재하지 않습니다.',
  'You will be prompted to provide MFA when you submit.' => '제출할 때 MFA를 제시하도록 요청받게 됩니다.',
  '%s set the OAuth application ID for this provider to "%s".' => '%s님이 이 제공자에 대한 OAuth 애플리케이션 비밀 키를 "%s"(으)로 설정했습니다.',
  'To configure Google OAuth, create a new \'API Project\' here:

https://console.developers.google.com/

Adjust these configuration settings for your project:

  - Under **APIs & auth > APIs**, scroll down the list and enable     the **Google+ API**.
     - You will need to consent to the **Google+ API** terms if you  have not before.
  - Under **APIs & auth > Credentials**, click **Create New Client    ID** in the **OAuth** section. Then use these settings:
     - **Application Type**: Web Application
     - **Authorized Javascript origins**: Leave this empty.
     - **Authorized redirect URI**: Set this to `%s`.


After completing configuration, copy the **Client ID** and **Client Secret** from the Google console to the fields above.' => 'Google OAuth를 구성하려면 다음 링크에서 새 \'API 프로젝트\'를 생성하세요:

https://console.developers.google.com/

프로젝트에 맞게 다음 구성 설정을 조정하세요:

  - **APIs & auth > APIs**에서, 목록을 아래로 스크롤하여 **Google+ API**를 활성화 하세요.
     - 이전에 동의하지 않았다면 **Google+ API** 약관에 동의해야 합니다.
  - **APIs & auth > Credentials**에서, **OAuth** 섹션의 **새 클라이언트 ID 만들기**를 클릭합니다. 그 후 다음 설정을 사용하세요:
     - **애플리케이션 유형**: 웹 애플리케이션 
     - **승인된 자바스크립트 출처**: 비워 두세요.
     - **승인된 넘겨주기 URI**: 다음으로 설정: `%s`.


구성이 완료되면 Google 콘솔에서 \'클라이언트 ID\'와 \'클라이언트 비밀 키\'를 복사하여 위의 필드에 붙여넣으세요.',
  'Skipping, provider does not support token refresh.' => '건너뜁니다, 제공자가 토큰 새로 고침을 지원하지 않습니다.',
  'This factor has been removed from your device, so this server can not send you a challenge. To continue, an administrator must strip this factor from your account.' => '해당 단계가 장치에서 제거되었으므로 이 서버에서 인증을 요청할 수 없습니다. 계속 진행하려면 관리자가 계정에서 해당 단계를 제거해야 합니다.',
  'You need to add multi-factor authentication to your Phabricator account as you have permissions to access some non-public content.' => '당신의 Phabricator 계정에는 비공개 콘텐츠에 접근할 수 있는 권한이 있으므로 다단계 인증을 추가해야 합니다.',
  'Attempting to upgrade password hasher, but the password for the upgrade is not the stored credential!' => '암호 해셔를 업그레이드하려고 시도했지만, 업그레이드에 사용할 암호가 저장된 자격 증명이 아닙니다!',
  'Your Duo account ("%s") requires enrollment. Contact your Duo administrator for help. Duo status message: %s' => '당신의 Duo 계정("%s")은 등록이 필요합니다. 도움을 받으려면 Duo 관리자에게 문의하세요. Duo 상태 메시지: %s',
  'The OAuth provider failed to retrieve an account ID.' => 'OAuth 제공자가 계정 ID를 가져오는데 실패했습니다.',
  'Reset action counters for this user.' => '이 사용자에 대한 작업 카운터를 초기화합니다.',
  'Edit SSH Key' => 'SSH 키 편집',
  'Attempting to set an empty password!' => '빈 비밀번호를 설정하려고 했습니다!',
  '%s changed this contact number from %s to %s.' => '%s님이 이 연락처를 %s에서 %s(으)로 변경했습니다.',
  'Welcome, %s. To complete the process of logging in, provide your multi-factor credentials.' => '%s님, 환영합니다. 로그인 절차를 완료하려면 다단계 자격 증명을 제시하세요.',
  'Already Accepted Invite' => '이미 초대를 수락함',
  'No user exists with username "%s".' => '"%s" 사용자 이름의 사용자가 존재하지 않습니다.',
  'Unlock the authentication provider config, to make it possible to edit the config using the web UI. Make sure to do **bin/auth lock** when done editing the configuration.' => '웹 UI를 사용하여 인증 제공자가 구성을 편집할 수 있도록 잠금을 해제합니다. 구성 편집이 완료되면 반드시 **bin/auth lock**을 하세요.',
  'Account does not match provider!' => '계정이 제공자와 일치하지 않습니다!',
  'Too many account recovery email links have been sent to this account in a short period of time.' => '이 계정으로 단기간에 너무 많은 계정 복구 이메일 링크가 전송되었습니다.',
  'Account Not Linkable' => '계정 연결 불가',
  'ou=People, dc=example, dc=com' => 'ou=People, dc=example, dc=com',
  'Enable Provider?' => '제공자를 활성화할까요?',
  'Strip a specific factor type. Use `bin/auth list-factors` for a list of factor types.' => '특정 인증 단계 유형을 제거합니다. 인증 단계 유형 목록을 보려면 `bin/auth list-factors`를 사용하세요.',
  'Provide Multi-Factor Credentials' => '다단계 자격 증명을 제공하세요',
  'Edit Contact Numbers' => '연락처 편집하기',
  'Skip email verification for accounts registered through this provider.' => '이 제공자르 통해 등록된 계정의 경우 이메일 인증을 건너뜁니다.',
  '[%s] New User "%s" Awaiting Approval' => '[%s] 새 사용자 "%s" 가 승인을 기다립니다',
  'You have failed to enter the correct account password too often in a short period of time.' => '단기간에 내에 계정 비밀번호를 너무 자주 잘못 입력했습니다.',
  'Add Multi-Factor Authentication' => '다단계 인증 추가',
  'JIRA instance name must contain only lowercase letters, digits, and period.' => 'JIRA 인스턴스 이름은 소문자, 숫자, 마침표만 포함해야 합니다.',
  'The external service ("%s") you just authenticated with is not configured to allow account linking on this server. An administrator may have recently disabled it.' => '방금 인증에 사용한 외부 서비스("%s")는 이 서버에서 계정 연결을 허용하도록 구성되어 있지 않습니다. 관리자가 최근에 해당 기능을 비활성화했을 수 있습니다.',
  'Terminate Session' => '세션 끝내기',
  'You must choose a password.' => '비밀번호를 선택해야 합니다.',
  'Failed to find an OAuth client with id %s.' => 'id가 %s인 OAuth 클라이언트를 찾지 못했습니다.',
  'This engine is used to edit contact numbers.' => '이 엔진은 연락처를 편집하는 데 사용됩니다.',
  'You can not set the response digest for a challenge directly. Instead, set a response token. A response digest will be computed automatically.' => '챌린지에 대한 응답 다이제스트를 직접 설정할 수 없습니다. 대신 응답 토큰을 설정하세요. 응답 다이제스트는 자동으로 계산됩니다.',
  '%s created this contact number.' => '%s님이 이 연락처를 만들었습니다.',
  'Duo providers must have an API credential.' => 'Duo API 제공자에는 API 자격 증명이 있어야 합니다.',
  'You can only verify one address at a time.' => '주소는 한 번에 하나만 인증할 수 있습니다.',
  'SSH Key %d' => 'SSH 키 %d',
  'Public key type should be one of: %s' => '공개 키 유형은 다음 중 하나여야 합니다: %s',
  'CHANGES TO MESSAGE' => '메시지의 변경사항',
  'App Code' => '앱 코드',
  'Duo API Credential' => 'Duo API 자격 증명',
  '%s edited a property of this provider.' => '%s님이 이 제공자의 속성을 편집했습니다.',
  'Auth Email Invites' => 'Auth 이메일 초대',
  'Address Verified' => '주소 인증됨',
  'To verify your phone as an authentication factor, a text message with a secret code will be sent to the phone number you have listed as your primary contact number.' => '휴대전화를 인증 수단으로 확인하기 위해, 기본 연락처로 등록된 전화번호로 비밀 코드가 포함된 문자 메시지가 전송됩니다.',
  'DISABLE APPROVAL QUEUE' => '승인 대기열 비활성화',
  'Specify either specific factors with "--type", or all factors with "--all-types", but not both.' => '특정 요소와 "--type" 또는 모든 팩터와 "--all-types"를 지정하되, 둘을 동시에 지정하지는 마세요.',
  'No OAuth Access Token' => 'OAuth 접근 토큰 없음',
  'Your account is already linked to an external account for this provider.' => '계정이 이미 해당 제공자의 외부 계정에 연결되어 있습니다.',
  'You are already logged in.' => '이미 로그인했습니다.',
  'Wait For Approval Instructions' => '승인 대기 안내',
  'Link LDAP Account' => 'LDAP 계정 연결',
  'Invalid JSON response from "user.whoami" request: %s' => '"user.whoami" 요청으로부터 유효한 JSON 응답을 예상했습니다: %s',
  'ldap.example.com' => 'ldap.example.com',
  'This password is associated with an object PHID ("%s") for a different object than the provided one ("%s").' => '이 암호는 제공된 객체("%2$s")와 다른 객체의 객체 PHID("%s")에 연결되어 있습니다.',
  'Disable Number' => '번호 비활성화',
  'Username or Email' => '사용자 이름 또는 이메일',
  'Your %s account is already connected to an external account on this service ("%s"), but you are currently logged in to the service with a different account. Log out of the external service, then log back in with the correct account before refreshing the account link.' => '%s 계정은 이미 이 서비스의 외부 계정("%s")에 연결되어 있지만, 현재 다른 계정으로 로그인되어 있습니다. 외부 서비스에서 로그아웃한 다음, 올바른 계정으로 다시 로그인하여 계정 연결을 새로 고침 하세요.',
  'Verify this email address (%s) and attach it to your account (%s)?' => '이 이메일 주소(%s)를 인증하고 계정(%s)에 연결합니까?',
  'Revoke SSH Public Key' => 'SSH 공개 키 폐기',
  'Edit MFA Providers' => 'MFA 제공자 편집',
  'Before you can set up or use LDAP, you need to install the PHP LDAP extension. It is not currently installed, so PHP can not talk to LDAP. Usually you can install it with `%s`, `%s`, or a similar package manager command.' => 'LDAP을 설정하거나 사용하기 전에 PHP LDAP 확장 기능을 설치해야 합니다. 현재 설치되어 있지 않으므로 PHP는 LDAP과 통신할 수 없습니다. 일반적으로 `%s`, `%s` 또는 이와 유사한 패키지 관리자 명령을 사용하여 설치할 수 있습니다.',
  '%s failed!' => '%s 실패!',
  'This server is configured with an email domain whitelist (in %s), so only users with a verified email address at one of these %s allowed domain(s) will be able to register an account: %s' => array(
    
    array(
      '이 서버는 이메일 도메인 허용 목록으로(%s에서) 구성되어 있으므로, %3$s에서 인증된 이메일 주소를 가진 사용자만 계정을 등록할 수 있습니다.',
      '이 서버는 이메일 도메인 허용 목록으로(%s에서) 구성되어 있으므로, 다음의 허용된 도메인 중 하나에서 인증된 이메일 주소를 가진 사용자만 계정을 등록할 수 있습니다: %3$s',
    ),
  ),
  'To configure Slack OAuth, create a new application here:

https://api.slack.com/docs/sign-in-with-slack#create_slack_app

When creating your application, use these settings:

  - **Redirect URI:** Set this to: `%s`

After completing configuration, copy the **Client ID** and **Client Secret** to the fields above. (You may need to generate the client secret by clicking \'New Secret\' first.)' => 'Slack OAuth를 설정하려면 다음 링크에서 새 애플리케이션을 생성하세요:

https://api.slack.com/docs/sign-in-with-slack#create_slack_app

애플리케이션을 생성할 때 다음 설정을 사용하세요:

  - **넘겨주기 URI:** 다음으로 설정: `%s`

설정을 완료한 후 **클라이언트 ID**와 **클라이언트 비밀 키**을 위의 필드에 복사하여 붙여넣으세요. (\'새로운 비밀 키\'를 클릭하여 클라이언트 비밀 키를 생성해야 할 수도 있습니다.)',
  'A challenge has been sent to your phone. Open the Duo application and confirm the challenge, then continue.' => '휴대폰으로 챌린지가 전송되었습니다. Duo 앱을 열고 챌린지를 확인한 후 계속 진행하세요.',
  'Amazon' => 'Amazon',
  'MFA Sync Token' => 'MFA 동기화 토큰',
  'OAuth client "%s" is now trusted.' => '"%s" OAuth 클라이언트는 이제 신뢰됩니다.',
  'Your browser did not submit a registration key with the request. You must use the same browser to begin and complete registration. Check that cookies are enabled and try again.' => '브라우저에서 등록 키를 요청과 함께 전송하지 않았습니다. 등록을 시작하고 완료하려면 동일한 브라우저를 사용해야 합니다. 쿠키가 활성화되어 있는지 확인하고 다시 시도하세요.',
  'Not Complete' => '완료되지 않음',
  '**Step 1 of 2 - Name Remote Server**

Choose a permanent name for the remote server you want to connect to. This name is used internally to keep track of the remote server, in case the URL changes later.' => '**2단계 중 1단계 - 원격 서버 이름 지정**

연결하려는 원격 서버의 영구 이름을 선택하세요. 이 이름은 나중에 URL이 변경될 경우에도 원격 서버를 추적하기 위해 내부적으로 사용됩니다.',
  'Unlink Account' => '계정 연결 해제',
  'You must specify the path to a public keyfile with %s.' => '%s(으)로 공개 키파일의 경로를 지정해야 합니다.',
  'Remove multi-factor authentication from an account.' => '계정에서 다단계 인증을 제거합니다.',
  'Edit Existing Provider' => '기존 제공자 편집',
  '%s changed the credential for this provider from %s to %s.' => '%s님이 이 제공자의 자격 증명을 %s에서 %s(으)로 변경했습니다.',
  'You are creating a new account linked to an existing external account.' => '기존 외부 계정에 연결된 새 계정을 만들고 있습니다.',
  'Signing session legalpad documents of user with no session!' => '세션이 없는 사용자의 legalPad 문서에 서명 세션을 진행했습니다!',
  'This is the only external login account linked to your account. If you remove it, you may no longer be able to log in.' => '이 계정은 당신의 계정에 연결된 유일한 외부 로그인 계정입니다. 이 계정을 제거하면 더 이상 로그인할 수 없게 될 수 있습니다.',
  '%s updated the message text.' => '%s님이 메시지 문구를 업데이트했습니다.',
  'NOTE: Amazon **requires** HTTPS, but this service does not use HTTPS. **You will not be able to add Amazon as an authentication provider until you configure HTTPS on this install**.' => '참고: Amazon은 HTTPS를 **필요로 하지만**, 이 서비스는 HTTPS를 사용하지 않습니다. **이 설치에서 HTTPS를 구성하기 전까지는 Amazon을 인증 제공자로 추가할 수 없습니다**.',
  'Verify this email address (%s) and attach it to your account?' => '이 이메일 주소(%s)를 인증하고 계정에 연결합니까?',
  'No Linkable External Providers' => '연결 가능한 외부 제공자 없음',
  'This account is not linkable.' => '이 계정은 연결할 수 없습니다.',
  'Allow Unlinking Accounts' => '계정 연결 해제 허용',
  'This request included an improperly formatted MFA challenge token and can not be processed.' => '이 요청에는 형식이 올바르지 않은 MFA 인증 토큰이 포함되어 있어 처리할 수 없습니다.',
  'Contact numbers can not be longer than %s characters.' => '연락처는 %s자를 초과할 수 없습니다.',
  'OAuth1 Account' => 'OAuth1 계정',
  'Customized' => '사용자 지정됨',
  'When you need to authenticate, a text message with a code will be sent to your phone.' => '인증이 필요할 때, 인증 코드가 포함된 문자 메시지가 휴대전화로 전송됩니다.',
  '"%s" Account' => '"%s" 계정',
  'Password Reset' => '비밀번호 재설정',
  'Expected valid JSON response from Amazon account data request.' => 'Amazon 계정 데이터 요청으로부터 유효한 JSON 응답을 예상했습니다.',
  'Revoked SSH keys can not be edited or reinstated.' => '폐기된 SSH 키는 편집하거나 복구할 수 없습니다.',
  'Follow referrals. Disable this for Windows AD 2003.' => '리퍼럴을 따릅니다. Windows AD 2003에서는 이것을 비활성화하세요.',
  'WARNING: You have not configured any authentication providers yet, so your account has no login credentials. If you log out now, you will not be able to log back in normally.' => '경고: 아직 인증 제공자를 구성하지 않았으므로 계정에 로그인 자격 증명이 없습니다. 지금 로그아웃하면 정상적으로 다시 로그인할 수 없습니다.',
  'If you do not recognize this change, it may indicate your account has been compromised.' => '이러한 변경 사항을 인지하지 못하는 경우 계정이 해킹당했을 가능성이 있습니다.',
  'Link Accounts' => '계정 연결',
  'Create Admin Account' => '관리자 계정 만들기',
  'Create MFA Provider' => 'MFA 제공자 만들기',
  'Log Out?' => '로그아웃하시겠습니까?',
  'Installed' => '설치됨',
  'You have not configured a primary contact number. Configure a contact number before adding SMS as an authentication factor.' => '기본 연락처를 설정하지 않았습니다. SMS를 인증 수단으로 추가하기 전에 연락처를 설정하세요.',
  'Unlink External Account' => '외부 계정 연결 해제',
  '%s made this the primary contact number.' => '%s님이 이것을 기본 연락처로 만들었습니다.',
  'Automatically log in with this provider if it is the only available provider.' => '사용 가능한 제공자가 이것 하나뿐인 경우, 해당 제공자로 자동 로그인합니다.',
  '%s changed the enrollment policy for this provider from %s to %s.' => '%s님이 이 제공자의 등록 정책을 %s에서 %s(으)로 변경했습니다.',
  'Currently, there are no configured external auth providers which you can link your account to.' => '현재 계정을 연결할 수 있는 외부 인증 제공자가 구성되어 있지 않습니다.',
  '%s disabled account linking.' => '%s님이 계정 연결을 비활성화했습니다.',
  'Number Already Primary' => '번호가 이미 기본임',
  'Strip these authentication factors?' => '이 인증 단계들을 제거합니까?',
  'The OAuth provider did not return a "code" parameter in its response.' => 'OAuth 제공자가 응답 시 "code" 매개변수를 반환하지 않았습니다.',
  'Your Duo account ("%s") has not completed Duo enrollment. Check your email and complete enrollment to continue.' => '당신의 Duo 계정("%s")은 등록이 완료되지 않았습니다. 계속하려면 이메일을 확인하고 등록을 완료하세요.',
  'Locked the authentication provider configuration.' => '인증 제공자 구성을 잠갔습니다.',
  'Specify the target to revoke credentials from with "--from" or specify "--everywhere", but not both.' => '자격 증명을 폐기할 대상을 "--from"으로 지정하거나 "--everywhere"을 지정하세요. 둘을 동시에 지정하지는 마세요.',
  'Your browser submitted a different registration key than the one associated with this account. You may need to clear your cookies.' => '브라우저에서 이 계정과 연결된 등록 키와 다른 키를 제출했습니다. 쿠키를 삭제해야 할 수도 있습니다.',
  'Enable Provider' => '제공자 활성화',
  'Log in to %s' => '%s에서 로그인',
  'The password you entered has been revoked. You can not reuse a password which has been revoked. Choose a new password.' => '입력하신 비밀번호는 폐기되었습니다. 폐기된 비밀번호는 다시 사용할 수 없습니다. 새 비밀번호를 설정하세요.',
  'Make Primary Number' => '기본 번호로 설정',
  'Strip factors from all users.' => '모든 사용자의 단계를 제거합니다.',
  'Duo username pairing mode ("%s") is not supported.' => 'Duo 사용자 이름 페어링 모드("%s")는 지원되지 않습니다.',
  '**Step 2 of 2 - Configure OAuth Server**

To configure OAuth, create a new application here:

%s

When creating your application, use these settings:

  - **Redirect URI:** Set this to: `%s`

After completing configuration, copy the **Client ID** and **Client Secret** to the fields above. (You may need to generate the client secret by clicking \'New Secret\' first.)' => '**2단계 중 2단계 - OAuth 서버 구성**

OAuth를 설정하려면 다음 링크에서 새 애플리케이션을 생성하세요:

%s

애플리케이션을 생성할 때 다음 설정을 사용하세요:

  - **넘겨주기 URI:** 다음으로 설정: `%s`

설정을 완료한 후 **클라이언트 ID**와 **클라이언트 비밀 키**을 위의 필드에 복사하여 붙여넣으세요. (\'새로운 비밀 키\'를 클릭하여 클라이언트 비밀 키를 생성해야 할 수도 있습니다.)',
  'Facebook' => '페이스북',
  'Really revoke all tokens? Among other temporary authorizations, this will disable any outstanding password reset or account recovery links.' => '정말로 모든 토큰을 폐기합니까? 이렇게 하면 다른 임시 권한과 함께 모든 미처리된 비밀번호 재설정 또는 계정 복구 링크가 비활성화됩니다.',
  'LDAP Version' => 'LDAP 버전',
  'APPROVAL QUEUE' => '승인 대기',
  '%s removed this password from the revocation list.' => '%s님이 이 비밀번호를 폐기 목록에서 제거했습니다.',
  'Lock authentication provider config, to prevent changes to the config without doing **bin/auth unlock**.' => '인증 제공자 구성을 잠가서 **bin/auth unlock** 하지 않고는 구성을 변경할 수 없도록 합니다.',
  'To configure Asana OAuth, create a new application here:

https://app.asana.com/-/account_api

When creating your application, use these settings:

  - **App URL:** Set this to: `%s`
  - **Redirect URL:** Set this to: `%s`

After completing configuration, copy the **Client ID** and **Client Secret** to the fields above.' => 'Asana OAuth를 설정하려면 다음 링크에서 새 애플리케이션을 생성하세요:

https://app.asana.com/-/account_api

애플리케이션을 생성할 때 다음 설정을 사용하세요:

  - **앱 URL:** 다음으로 설정: `%s`
  - **넘겨주기 URL:** 다음으로 설정: `%s`

설정을 완료한 후 **클라이언트 ID**와 **클라이언트 비밀 키**을 위의 필드에 복사하여 붙여넣으세요.',
  'After you download the private key, it will be destroyed. You will not be able to retrieve it if you lose your copy.' => '개인 키는 다운로드 후 즉시 파기됩니다. 사본을 분실하면 복구할 수 없습니다.',
  'After logging in you should set a password for your account, or link your account to an external account that you can use to authenticate in the future.' => '로그인 후에는 계정 비밀번호를 설정하거나, 향후 인증에 사용할 외부 계정에 계정을 연결해야 합니다.',
  'Analyze and diagnose issues with LDAP configuration.' => 'LDAP 구성 관련 문제를 분석하고 진단합니다.',
  'Your session is no longer in high security.' => '세션의 보안이 더 이상 높지 않습니다.',
  'Revoked' => '폐기됨',
  'Disable the contact number %s?' => '%s 연락처를 비활성화하시겠습니까?',
  'Factor Name: %s' => '단계 이름: %s',
  'Providers' => '제공자',
  'Address Duplicated in Input' => '주소 입력 중복',
  'Scan the QR code or manually enter the key shown below into the application.' => 'QR 코드를 스캔하거나 아래에 표시된 키를 애플리케이션에 직접 입력하세요.',
  'The account you are attempting to register with uses a disabled authentication provider ("%s"). An administrator may have recently disabled this provider.' => '등록하려는 계정은 비활성화된 인증 제공자("%s")를 사용하고 있습니다. 관리자가 최근에 이 제공자를 비활성화했을 수 있습니다.',
  'Register an Account' => '계정 등록',
  'Can Not Edit Trusted Key' => '신뢰하는 키를 편집할 수 없습니다',
  'OAuth App ID' => 'OAuth 앱 ID',
  'Invites are visible to administrators, the inviting user, users with an invite code, and the user who accepts the invite.' => '초대는 관리자, 초대한 사용자, 초대 코드를 가진 사용자, 초대를 수락한 사용자에게 보입니다.',
  'Specified public keyfile "%s" does not exist!' => '지정된 "%s" 공개 키파일이 존재하지 않습니다!',
  'You must specify the email to verify.' => '확인할 이메일을 지정해야 합니다.',
  'The key "%s" will be permanently revoked, and you will no longer be able to use the corresponding private key to authenticate.' => '키 "%s"은(는) 영구히 폐기되며, 더이상 대응되는 개인 키를 사용해 인증할 수 없게 됩니다.',
  'TOTP' => 'TOTP',
  'Configure %s OAuth.' => '%s OAuth를 구성합니다.',
  'Refreshing account #%d.' => '#%d 계정을 새로 고칩니다.',
  'You can not make a disabled number your primary contact number.' => '비활성화된 번호를 기본 연락처로 설정할 수 없습니다.',
  'Failed to bind to LDAP server (as user "%s").' => 'LDAP 서버 바인딩을 ("%s" 사용자 권한으로) 실패했습니다.',
  'Configure a connection to an LDAP server so that users can use their LDAP credentials to log in.' => '사용자가 LDAP 자격 증명을 사용하여 로그인할 수 있도록 LDAP 서버에 대한 연결을 구성합니다.',
  'No email exists with address "%s"!' => '"%s" 주소의 이메일이 존재하지 않습니다!',
  'Revoke SSH Key' => 'SSH 키 폐기',
  'The email address associated with this external account ("%s") is not a valid email address and can not be used to register an account. Choose a different, valid address.' => '외부 계정("%s")과 연결된 이메일 주소는 유효한 이메일 주소가 아니므로 계정 등록에 사용할 수 없습니다. 다른 유효한 이메일 주소를 선택하세요.',
  'OAuth client "%s" is already untrusted.' => '"%s" OAuth 클라이언트는 이미 신뢰되지 않습니다.',
  'Onboarding' => '온보딩',
  'Request did not include account key.' => '요청에 계정 키가 포함되지 않았습니다.',
  'Account Disabled' => '계정 비활성화됨',
  'JIRA instance name is required.' => 'JIRA 인스턴스 이름은 필수입니다.',
  'Mail Body: Set Password' => '메일 본문: 비밀번호 설정',
  'LDAP Password' => 'LDAP 비밀번호',
  'Edit SSH Public Key' => 'SSH 공개 키 편집',
  'Generated' => '생성됨',
  '%s updated the OAuth application secret for this provider.' => '%s님이 이 제공자에 대한 OAuth 애플리케이션 비밀 키를 업데이트했습니다.',
  'Base URI' => '기본 URI',
  'Leaving High Security' => '높은 보안 모드 종료 중',
  'Consumer key is required.' => '컨슈머 키는 필수입니다.',
  'Username or password are incorrect.' => '사용자 이름 또는 비밀번호가 잘못되었습니다.',
  'Attempted to set \'%s\' cookie to \'%s\', but your browser did not accept the cookie. Check that cookies are enabled, clear them, and try again.' => '\'%s\' 쿠키를 \'%s\'(으)로 설정하려고 시도했지만 브라우저에서 쿠키를 허용하지 않았습니다. 쿠키가 활성화되어 있는지 확인하고, 쿠키를 삭제한 후 다시 시도하세요.',
  'Unable to load Duo API credential ("%s").' => 'Duo API 자격 증명("%s")을 로드할 수 없습니다.',
  'The authentication provider did not return a client state parameter in its response, but one was expected. If this problem persists, you may need to clear your cookies.' => '인증 제공자가 응답에 클라이언트 상태 매개변수를 반환하지 않았지만, 해당 매개변수가 예상되었습니다. 이 문제가 계속되면 쿠키를 삭제해야 할 수 있습니다.',
  'One-Time Login' => '일회용 로그인',
  'NOTE: This provider **only supports JIRA 6**. It will not work with JIRA 5 or earlier.' => '참고: 이 제공자는 **JIRA 6만 지원합니다**. JIRA 5 또는 이전 버전에서는 작동하지 않습니다.',
  'SSH key name is required.' => 'SSH 키 이름은 필수입니다.',
  'Revokes all active login sessions.

Affected users will be logged out and need to log in again.' => '모든 활성화된 로그인 세션을 폐기합니다.

영향을 받는 사용자는 로그아웃되며 다시 로그인해야 합니다.',
  'Consumer secret is required.' => '컨슈머 비밀 키는 필수입니다.',
  'Address Error' => '주소 오류',
  'Password authentication is not enabled and you are already logged in. There is nothing for you here.' => '비밀번호 인증이 활성화되어 있지 않으며 이미 로그인되어 있습니다. 여기에는 당신을 위한 것이 없습니다.',
  'Strip factors without prompting.' => '확인 요청 없이 단계를 제거합니다.',
  'Auth Message' => 'Auth 메시지',
  'Auth Challenge' => 'Auth 챌린지',
  'No Matching Sessions' => '일치하는 세션 없음',
  'Expected "newResultFromIssuedChallenges()" to return null or an object of class "%s"; got something else (in "%s").' => '"newResultFromIssuedChallenges()"가 null 또는 "%s" 클래스의 객체를 반환할 것으로 예상했지만 ("%s"의) 다른 것을 받았습니다.',
  'Auth provider failed to load an account from %s!' => 'Auth 제공자가 %s(으)로부터의 계정을 로드하는 데 실패했습니다!',
  'Provider Enabled' => '제공자 활성화됨',
  'Newly registered user "%s" is awaiting account approval by an administrator.' => '신규 등록 사용자 "%s"님이 관리자의 계정 승인을 기다리고 있습니다.',
  'Unable to connect to LDAP server (%s:%d).' => 'LDAP 서버(%s:%d)에 연결할 수 없습니다.',
  'There are no matching sessions to terminate.' => '종료할 일치하는 세션이 없습니다.',
  'No accounts match the arguments!' => '인수와 일치하는 계정이 없습니다!',
  'Register New Account' => '새 계정 등록',
  'SSH KEY DETAIL' => 'SSH 키 세부 정보',
  'Recover access to an account if you have locked yourself out.' => '만약 자기 자신을 잠구어버린 경우 계정 접근 권한을 복구하세요.',
  'Failed to convert public key into PKCS8 format. If you are developing on OSX, you may be able to use `%s` to work around this issue. %s' => '공개 키를 PKCS8 형식으로 변환하는 데 실패했습니다. OSX에서 개발 중인 경우 `%s`을(를) 사용하여 이 문제를 해결할 수 있습니다. %s',
  'Send Test Message' => '텍스트 메시지 보내기',
  'An email has been sent containing a link you can use to set a password for your account.' => '계정 비밀번호를 설정할 수 있는 링크가 포함된 이메일이 발송되었습니다.',
  'Are you sure you want to log out?' => '로그아웃하시겠습니까?',
  '(WARNING) Examine the table below for information on how password hashes will be stored in the database.

(NOTE) You can select a minimum password length by setting `%s` in configuration.' => '(경고) 암호 해시값이 데이터베이스에 저장되는 방식은 아래 표를 확인하세요.

(참고) 구성에서 `%s`을(를) 설정하여 최소 암호 길이를 선택할 수 있습니다.',
  'Link Account' => '계정 연결',
  'Login/Registration' => '로그인/등록',
  'List available multi-factor authentication providers.' => '사용 가능한 다단계 인증 제공자를 나열합니다.',
  'List available multi-factor authentication factors.' => '사용 가능한 다단계 인증 단계를 나열합니다.',
  'Account Recovery' => '계정 복구',
  'Multi-Factor Authentication Setup Complete' => '다단계 인증 설정 완료',
  'You changed the email address to a @wikimedia.org address but your External Account is not a WMF SUL account. Please log into mediawiki.org with your WMF SUL account (ending in "(WMF)" or "-WMF") provided to you by WMF ITS. Then register again in Phabricator. See also https://office.wikimedia.org/wiki/User_account_policy' => '이메일 주소를 @wikimedia.org 주소로 변경했지만, 외부 계정이 WMF SUL 계정이 아닙니다. WMF ITS에서 제공한 WMF SUL 계정(끝에 "(WMF)" 또는 "-WMF"가 붙는 계정)으로 mediawiki.org에 로그인하세요. 그런 다음 Phabricator에 다시 등록하세요. 자세한 내용은 https://office.wikimedia.org/wiki/User_account_policy를 참조하세요.',
  'Trusted' => '신뢰할 수 있음',
  'Expected "newResultFromChallengeResponse()" to return an object of class "%s"; got something else (in "%s").' => '"newResultFromChallengeResponse()"가 "%s" 클래스의 객체를 반환할 것으로 예상했지만 ("%s"의) 다른 것을 받았습니다.',
  'Allow Logins' => '로그인 허용',
  'Domain' => '도메인',
  'You must specify the path to a pkcs8 keyfile with %s.' => '%s(으)로 pkcs8 키파일의 경로를 지정해야 합니다.',
  'Email Sent' => '이메일 보냄',
  'Twitch.tv' => 'Twitch.tv',
  'This engine is used to edit authentication messages.' => '이 엔진은 인증 메시지를 편집하는 데 사용됩니다.',
  'Show factors, but do not strip them.' => '단계를 표시하되, 제거하지는 않습니다.',
  'Pattern "%s" is not valid.' => '"%s" 패턴은 유효하지 않습니다.',
  'Add Multi-Factor Authentication To Your Account' => '계정에 다단계 인증 추가',
  'Auth Providers' => 'Auth 제공자',
  'View Active Keys' => '활성 키 보기',
  'Auth Messages' => 'Auth 메시지',
  'Auth Password' => 'Auth 비밀번호',
  'SSH Key %d: %s' => 'SSH 키 %d: %s',
  'The external account you just logged in with is not associated with a valid %s user account.' => '방금 로그인한 외부 계정은 유효한 %s 사용자 계정과 연결되어 있지 않습니다.',
  'Refreshed token, new token expires in %s seconds.' => '토큰이 갱신되었습니다. 새 토큰은 %s초 후에 만료됩니다.',
  'SMS' => 'SMS',
  '%s set the OAuth application secret for this provider.' => '%s님이 이 제공자에 대한 OAuth 컨슈머 비밀 키를 설정했습니다.',
  'Reset %s action(s).' => '작업 %s개를 초기화합니다.',
  'Address Already Verified' => '주소 이미 인증됨',
  'OAuth client "%s" is already trusted.' => '"%s" OAuth 클라이언트는 이미 신뢰되었습니다.',
  'When users click the "Change Username" action on their profile pages but do not have the required permissions, they will be presented with a message explaining that they are not authorized to make the edit.

You can optionally provide additional instructions here to help users request a username change, if there is someone specific they should contact or a particular workflow they should use.' => '사용자가 프로필 페이지에서 "사용자 이름 변경하기"를 클릭했지만 필요한 권한이 없는 경우, 편집 권한이 없다는 설명 메시지가 표시됩니다.

선택적으로 사용자가 사용자 이름 변경을 요청하는 데 도움이 되는 추가 지침(연락해야 할 특정 담당자 또는 사용해야 할 특정 워크플로 등)을 여기에 제공할 수 있습니다.',
  'You are trying to gain access to an account ("%s") that can not establish a web session.' => '웹 세션을 설정할 수 없는 계정("%s")에 접근하려고 시도하고 있습니다.',
  'Sent By' => '보낸이',
  'You must approve the challenge which was sent to your phone. Open the Duo application and confirm the challenge, then continue.' => '휴대폰으로 전송된 챌린지를 승인해야 합니다. Duo 앱을 열고 챌린지를 확인한 후 계속 진행하세요.',
  'Download Private Key (%s)' => '개인 키 (%s) 다운로드',
  'Make sure you are copy-and-pasting the entire link into your browser. Login links are only valid for 24 hours, and can only be used once.' => '링크 전체를 복사하여 브라우저에 붙여넣으세요. 로그인 링크는 24시간 동안만 유효하며, 한 번만 사용할 수 있습니다.',
  '%s disabled login.' => '%s님이 로그인을 비활성화했습니다.',
  'Primary Number' => '기본 번호',
  'Unverified User Email' => '인증 해제된 사용자 이메일',
  'Really revoke this token? Any temporary authorization it enables will be disabled.' => '정말로 이 토큰을 폐기합니까? 이 토큰으로 활성화된 모든 임시 권한이 비활성화됩니다.',
  'The URI where JIRA is installed. For example: %s' => 'JIRA가 설치되어 있는 URI입니다. 예: %s',
  'Set Account Password' => '계정 비밀번호 설정',
  'Forgot your password?' => '비밀번호를 잊으셨나요?',
  'Raw Address' => '원본 주소',
  'Reset all counters.' => '모든 카운터를 초기화합니다.',
  'To access your account, provide your email address. An email with a login link will be sent to you.' => '계정에 접근하려면 이메일 주소를 지정하세요. 로그인 링크가 포함된 이메일이 전송될 것입니다.',
  'Install Instructions' => '설치 안내',
  'You have made too many account recovery requests in a short period of time.' => '단기간에 계정 복구 요청을 너무 많이 했습니다.',
  'Download Private Key' => '개인 키 다운로드',
  'Query public keys.' => '공개 키를 검색합니다.',
  'After logging in, you can use the "Auth" application to add or restore authentication providers and allow normal logins to succeed.' => '로그인 후 "Auth" 애플리케이션을 사용해서 인증 제공자를 추가하거나 복구해서 정상적인 로그인이 성공하도록 할 수 있습니다.',
  'Authentication Canceled' => '인증이 취소됨',
  'Will Ignore Address' => '주소 무시 예정',
  'Custom text for the message.' => '메시지의 사용자 지정 문구입니다.',
  'Number Disabled' => '숫자 비활성화됨',
  '**Step 1 of 2**: Provide the name and URI for your JIRA install.

In the next step, you will configure JIRA.' => '**2단계 중 1단계**: JIRA 설치를 위한 이름과 URI를 입력하세요.

다음 단계에서는 JIRA를 구성합니다.',
  'You already have Duo authentication attached to your account for this provider.' => '이미 해당 제공자에 대한 Duo 인증이 계정에 연결되어 있습니다.',
  'This Duo enrollment attempt is invalid or has expired ("%s"). Cancel the workflow and try again.' => '이번 Duo 등록 시도는 유효하지 않거나 만료되었습니다("%s"). 워크플로를 취소하고 다시 시도하세요.',
  'Login Required' => '로그인 필요',
  'Sign With MFA' => 'MFA로 서명',
  'To choose a different primary contact number, make that number primary (instead of trying to demote this one).' => '다른 기본 연락처를 선택하려면 현재 연락처를 기본 연락처로 변경하는 대신 해당 연락처를 기본 연락처로 설정하세요.',
  '**Post a comment** in the JIRA task.' => 'JIRA 태스크에 **댓글을 남깁니다**.',
  'Verified User Email' => '인증된 사용자 이메일',
  'Email Login' => '이메일 로그인',
  'Trust Email Addresses' => '이메일 주소 신뢰',
  'Bitbucket' => 'Bitbucket',
  'Unable to find LDAP account!' => 'LDAP 계정을 찾을 수 없습니다!',
  'This workflow will generate a new SSH keypair, add the public key, and let you download the private key.' => '이 워크플로는 새 SSH 키 쌍을 생성하고 공개 키를 추가한 다음 개인 키를 다운로드할 수 있도록 합니다.',
  'To configure Facebook OAuth, create a new Facebook Application here:

https://developers.facebook.com/apps

You should use these settings in your application:

%s


After creating your new application, copy the **App ID** and **App Secret** to the fields above.' => '페이스북 OAuth를 설정하려면, 여기에서 새 페이스북 애플리케이션을 만드세요:

https://developers.facebook.com/apps

애플리케이션에서 다음과 같이 설정하세요:

%s


설정을 완료한 후 **앱 ID**와 **앱 비밀 키**을 위의 필드에 복사하여 붙여넣으세요.',
  'Too many login failures recently. You must submit a CAPTCHA with your login request.' => '최근에 로그인 실패가 너무 많았습니다. 로그인 요청 시 CAPTCHA를 제출해야 합니다.',
  'Specified pkcs8 keyfile "%s" does not exist!' => '지정된 "%s" pkcs8 키파일이 존재하지 않습니다!',
  'An email has been sent containing a link you can use to log in to your account.' => '계정에 로그인할 수 있는 링크가 포함된 이메일이 발송되었습니다.',
  'You have already accepted this invitation.' => '이미 이 초대를 수락했습니다.',
  'You must choose a password or skip this step.' => '비밀번호를 선택하거나 이 단계를 스킵해야 합니다.',
  'This private key requires a passphrase, but the wrong passphrase was provided. Check that you supplied the correct key and passphrase.' => '이 개인 키는 passphrase를 요구하지만 하지만 잘못된 passphrase가 지정되었습니다. 올바른 키와 passphrase를 입력했는지 확인하세요.',
  'When users add a factor for this provider, they are given this enrollment guidance by default:' => '사용자가 이 제공자에 대한 단계를 추가할 때 다음과 같은 등록 안내가 기본으로 표시됩니다:',
  'CAPTCHA was not entered correctly.' => 'CAPTCHA가 올바르게 입력되지 않았습니다.',
  'Configure JIRA OAuth. NOTE: Only supports JIRA 6.' => 'JIRA OAuth를 구성합니다. 참고: JIRA 6만 지원합니다.',
  'If you did not receive an email, you can click the button below to try sending another one.' => '이메일을 받지 못한 경우, 아래 버튼을 클릭하여 다시 보낼 수 있습니다.',
  'Invite template does not include invite URI!' => '초대 틀에 초대 URI이 포함되어 있지 않습니다!',
  'Password providers can\'t be linked.' => '비밀번호 제공자를 연결할 수 없습니다.',
  'Found LDAP Account: %s' => 'LDAP 계정을 찾았습니다: %s',
  '%s reinstated this key.' => '%s님이 이 키를 복구했습니다.',
  '**Step 2 of 2**: In this step, you will configure JIRA.

**Create a JIRA Application**: Log into JIRA and go to **Administration**, then **Add-ons**, then **Application Links**. Click the button labeled **Add Application Link**, and use these settings to create an application:

  - **Server URL**: `%s`
  - Then, click **Next**. On the second page:
  - **Application Name**: `%s`
  - **Application Type**: `Generic Application`
  - Then, click **Create**.

**Configure Your Application**: Find the application you just created in the table, and click the **Configure** link under **Actions**. Select **Incoming Authentication** and click the **OAuth** tab (it may be selected by default). Then, use these settings:

  - **Consumer Key**: Set this to the "Consumer Key" value in the form above.
  - **Consumer Name**: `%s`
  - **Public Key**: Set this to the "Public Key" value in the form above.
  - **Consumer Callback URL**: `%s`
Click **Save** in JIRA. Authentication should now be configured, and this provider should work correctly.' => '**2단계 중 2단계**: 이 단계에서는 JIRA를 구성합니다.

**JIRA 애플리케이션 만들기**: JIRA에 로그인한 뒤 **관리**, **애드온**, **애플리케이션 링크**로 이동합니다. **애플리케이션 링크 추가** 버튼을 클릭하고 다음 설정을 사용하여 애플리케이션을 만듭니다:

  - **서버 URL**: `%s`
  - 그런 다음 **다음**를 클릭합니다. 두 번째 페이지에서:
  - **애플리케이션 이름**: `%s`
  - **애플리케이션 유형**: `일반 애플리케이션`
  - 그런 다음 **생성하기**를 클릭합니다.

**애플리케이션 구성**: 방금 만든 애플리케이션을 표에서 찾고 **작업** 아래의 **설정** 링크를 클릭합니다. **들어오는 인증**을 선택하고 **OAuth** 탭을 클릭합니다(기본으로 선택되어 있을 수 있음). 그런 다음 다음 설정을 사용합니다.

  - **컨슈머 키**: 위 양식의 "컨슈머 키" 값으로 설정합니다.
  - **컨슈머 이름**: `%s`
  - **공개 키**: 위 양식의 "공개 키" 값으로 설정합니다.
  - **컨슈머 콜백 URL**: `%s`
JIRA에서 **저장**을 클릭합니다. 이제 인증이 구성되었으며 이 제공자는 정상적으로 작동해야 합니다.',
  'Confirm Account Link' => '계정 연결 확인',
  'Verify Email Address' => '이메일 주소 인증',
  'Duo account ("%s") is fully enrolled.' => 'Duo 계정("%s")이 완전히 등록되었습니다.',
  'You must log in to take this action.' => '이 작업을 수행하려면 로그인해야 합니다.',
  '%s created this password.' => '%s님이 이 비밀번호를 만들었습니다.',
  'Stay' => '머물기',
  'The account you are attempting to log in with uses a nonexistent or disabled authentication provider (with key "%s"). An administrator may have recently disabled this provider.' => '로그인하려는 계정은 존재하지 않거나 비활성화된 인증 제공자(키 "%s")를 사용하고 있습니다. 관리자가 최근에 이 제공자를 비활성화했을 수 있습니다.',
  'Two authentication providers use the same provider key (\'%s\'). Each provider must be identified by a unique key.' => '두 개의 인증 제공자가 같은 제공자 키(\'%s\')를 사용합니다. 각 제공자는 고유한 키로 식별되어야 합니다.',
  'Duo (%s)' => 'Duo (%s)',
  'Create a New Account' => '새 계정 만들기',
  'Example: %s%sFor LDAPS, use: %s' => '예시: %s%sLDAPS의 경우, 다음을 사용하세요: %s',
  'A completed challenge was provided as an answered challenge. The underlying factor is implemented improperly, challenges may not be reused.' => '완료된 챌린지가 답변된 챌린지로써 제공되었습니다. 기본 요소가 제대로 구현되지 않아 챌린지를 재사용할 수 없습니다.',
  'There is no account associated with that email address.' => '해당 이메일 주소와 연결된 계정이 없습니다.',
  'Revoke Token' => '토큰 폐기',
  'Refresh Account Link' => '계정 연결 갱신',
  'Enable Referrals' => '리퍼럴 활성화',
  'The LDAP extension is not enabled.' => 'LDAP 확장 기능이 활성하되어 있지 않습니다.',
  'Will Send Invite' => '초대 전송 예정',
  'Can Manage Auth Providers' => 'Auth 제공자를 관리할 수 있음',
  'There are no registered session engine extensions.' => '등록된 세션 엔진 확장 기능이 없습니다.',
  'The password you entered is very similar to a nonsecret account identifier (like a username or email address). Choose a more distinct password.' => '입력한 비밀번호는 계정 식별자(사용자 이름 또는 이메일 주소 등)와 매우 유사합니다. 좀 더 다른 비밀번호를 설정하세요.',
  'Revokes all Conduit API tokens used to access the API.

Users will need to use `arc install-certificate` to install new API tokens before `arc` commands will work. Bots and scripts which access the API will need to have new tokens generated and installed.' => 'Conduit API에 접근하는 데 사용된 모든 API 토큰을 폐기합니다.

사용자는 `arc install-certificate` 명령을 사용하여 새 API 토큰을 설치해야 `arc` 명령어가 작동합니다. API에 접근하는 봇과 스크립트도 새 토큰을 생성하고 설치해야 합니다.',
  'JIRA' => 'JIRA',
  'Permanent Account Link' => '영구 계정 연결',
  '%s updated the OAuth consumer secret for this provider.' => '%s님이 이 제공자에 대한 OAuth 컨슈머 비밀 키를 업데이트했습니다.',
  'ActiveDirectory Domain' => '액티브디렉터리 도메인',
  'Very Weak' => '매우 취약',
  'Wait For Approval' => '승인 대기 중',
  'If you want to register a new account, continue with this registration workflow and choose a new, unique email address for the new account.' => '새 계정을 등록하려면 이 등록 절차를 계속 진행하고 새 계정에 사용할 고유한 이메일 주소를 선택하세요.',
  'If you log out now, you can still regain access to your account later by using the account recovery workflow. The login screen will prompt you with recovery instructions.' => '지금 로그아웃하더라도 계정 복구 절차를 통해 나중에 계정에 다시 접근할 수 있습니다. 로그인 화면에 복구 지침 메시지가 표시됩니다.',
  'Your Duo account ("%s") is not permitted to access this system. Contact your Duo administrator for help. The Duo preauth API responded with status message ("%s"): %s' => '당신의 Duo 계정("%s")은 이 시스템에 접근할 권한이 없습니다. 도움을 받으려면 Duo 관리자에게 문의하세요. Duo 사전 인증 API가 상태 메시지("%s")와 함께 응답했습니다: %s',
  'Customize Enroll Message' => '등록 메시지 맞춤 설정',
  'Unable to Establish Web Session' => '웹 세션을 설정할 수 없음',
  'Mobile Phone App (TOTP)' => '휴대전화 앱 (TOTP)',
  'Support for Duo push authentication.' => 'Duo 푸시 인증을 지원합니다.',
  'Normal Security Restored' => '일반 보안 모드 복구됨',
  'Allow users to register new accounts using this provider. If you disable registration, users can still use this provider to log in to existing accounts, but will not be able to create new accounts.' => '이 제공자를 사용하여 사용자가 새 계정을 등록할 수 있도록 허용합니다. 등록을 비활성화하더라도 사용자는 이 제공자를 사용하여 기존 계정에 로그인할 수는 있지만 새 계정을 만들 수는 없습니다.',
  'Verify %s' => '%s 인증',
  'No Password Auth' => '비밀번호 Auth 없음',
  'Create **Issue Link** to the Revision, as an "implemented in" relationship.' => '판에 대한 **Issue Link**를 "implemented in" 관계로 생성합니다.',
  'Authentication Challenges' => '인증 챌린지',
  'Do you want to enable this provider? Users will be able to use their existing external accounts to register new accounts and log in using linked accounts.' => '이 제공자를 활성화합니까? 사용자가 기존 외부 계정을 사용하여 새 계정을 등록하고 연결된 계정으로 로그인할 수 있게 됩니다.',
  'Password Reset Token' => '비밀번호 재설정 토큰',
  'Allow Account Unlinking' => '계정 연결 해제 허용',
  'The selected password is too short. Passwords must be a minimum of %s characters long.' => '선택된 비밀번호가 너무 짧습니다. 비밀번호는 최소 %s자여야 합니다.',
  'Base Distinguished Name' => '기본 구별된 이름',
  'You do not have permission to manage authentication providers.' => '인증 제공자를 관리할 권한이 없습니다.',
  'Allow Registration:' => '등록 허용:',
  'Really terminate all sessions? (Your current login session will not be terminated.)' => '정말로 모든 세션을 종료합니까? (현재의 로그인 세션은 종료되지 않습니다.)',
  'Provide a public key, not a private key!' => '개인 키가 아닌 공개 키를 지정하세요!',
  'Use "--type <type>" or "--provider <phid>" to specify which factors to strip, or "--all-types" to strip all factors. Use `bin/auth list-factors` to show the available factor types or `bin/auth list-mfa-providers` to show available providers.' => '"--type <type>" 또는 "--provider <phid>"를 사용하여 제거할 인증 단계를 지정하거나, "--all-types"를 사용하여 모든 인증 단계를 제거할 수 있습니다. 사용 가능한 인증 단계 유형을 확인하려면 `bin/auth list-factors`를, 사용 가능한 제공자를 확인하려면 `bin/auth list-mfa-providers`를 사용하세요.',
  'Session is not partial!' => '세션이 부분적이 아닙니다!',
  'Create Contact Number' => '연락처 만들기',
  'Users will only be able to register with a verified email address at one of the configured [[ %s | %s ]] domains: **%s**' => '사용자는 구성된 [[ %s | %s ]] 도메인 중 하나에서 인증된 이메일 주소로만 등록할 수 있습니다: **%s**',
  'You are logged in as %s, but the email address you just clicked a link from is already the primary email address for another account (%s). Switch accounts, then try again.' => '현재 %s 계정으로 로그인되어 있지만, 방금 링크를 클릭한 이메일 주소는 이미 다른 계정(%s)의 기본 이메일 주소입니다. 계정을 전환한 후 다시 시도해 주세요.',
  '%s set the "%s" value to "%s".' => '%s님이 "%s" 값을 "%s"(으)로 설정했습니다.',
  'Confirm External Account Link' => '외부 계정 연결 확인',
  'Terminate all web login sessions. If called via OAuth, also terminate the current OAuth token.

WARNING: This method does what it claims on the label. If you call this method via the test console in the web UI, it will log you out!' => '모든 웹 로그인 세션을 종료합니다. OAuth를 통해 호출된 경우 현재 OAuth 토큰도 종료합니다.

경고: 이 메서드는 이름 그대로 작동합니다. 웹 UI의 테스트 콘솔에서 이 메서드를 호출하면 로그아웃됩니다!',
  'This contact number is already your primary contact number.' => '이 연락처는 이미 기본 연락처입니다.',
  'Authentication Tokens' => '인증 토큰',
  '%s upgraded the hash algorithm for this password from "%s" to "%s".' => '%s님이 이 비밀번호의 해시값 알고리즘을 "%s"에서 "%s"(으)로 업그레이드했습니다.',
  'Multi-Factor Login' => '다단계 로그인',
  '%s disabled registration.' => '%s님이 등록을 비활성화했습니다.',
  'Edit Auth Provider' => 'Auth 제공자 편집',
  'Verification code can not be regenerated after an invite is created.' => '인증 코드는 초대가 만들어진 이후에는 재생성 될 수 없습니다.',
  'Create Accounts' => '계정 만들기',
  '[SSH Key]' => '[SSH 키]',
  'Stripping authentication factors...' => '인증 단계를 제거하는 중...',
  'To configure Twitter OAuth, create a new application here:

https://dev.twitter.com/apps

When creating your application, use these settings:

  - **Callback URL:** Set this to: `%s`

After completing configuration, copy the **Consumer Key** and **Consumer Secret** to the fields above.' => '트위터 OAuth를 설정하려면, 여기에서 새 애플리케이션을 만드세요:

https://dev.twitter.com/apps

애플리케이션을 생성할 때 다음 설정을 사용하세요:

  - **콜백 URL:** 다음으로 설정: `%s`

설정을 완료한 후 **컨슈머 ID**와 **컨슈머 비밀 키**을 위의 필드에 복사하여 붙여넣으세요.',
  '%s updated the public key material for this SSH key.' => '%s님이 이 SSH 키에 대한 공개 키 자료를 업데이트했습니다.',
  'Unlinked Account Instructions' => '연결되지 않은 계정 지침',
  '%s created this key.' => '%s님이 이 키를 만들었습니다.',
  'This private key could not be opened. This might mean that the key requires a passphrase, or might mean that the key is not formatted correctly. Check that you have supplied the complete text of a valid private key and the correct passphrase.' => '이 개인 키를 열 수 없습니다. 키에 passphrase가 필요하거나 키 형식이 올바르지 않을 수 있습니다. 유효한 개인 키의 전체 텍스트와 올바른 passphrase를 입력했는지 확인하세요.',
  'Another verification email was sent to %s.' => '확인 이메일이 %s(으)로 다시 보내졌습니다.',
  'Edit Auth Message' => 'Auth 메시지 편집하기',
  'When a user provides their LDAP username and password, this software can either bind to LDAP with those credentials directly (which is simpler, but not as powerful) or bind to LDAP with anonymous credentials, then search for record matching the supplied credentials (which is more complicated, but more powerful).

For many installs, direct binding is sufficient. However, you may want to search first if:

  - You want users to be able to log in with either their username     or their email address.
  - The login/username is not part of the distinguished name in     your LDAP records.
  - You want to restrict logins to a subset of users (like only     those in certain departments).
  - Your LDAP server is configured in some other way that prevents     direct binding from working correctly.

**To bind directly**, enter the LDAP attribute corresponding to the login name into the **Search Attributes** box below. Often, this is something like `sn` or `uid`. This is the simplest configuration, but will only work if the username is part of the distinguished name, and won\'t let you apply complex restrictions to logins.

  lang=text,name=Simple Direct Binding
  sn

**To search first**, provide an anonymous username and password below (or check the **Always Search** checkbox), then enter one or more search queries into this field, one per line. After binding, these queries will be used to identify the record associated with the login name the user typed.

Searches will be tried in order until a matching record is found. Each query can be a simple attribute name (like `sn` or `mail`), which will search for a matching record, or it can be a complex query that uses the string `${login}` to represent the login name.

A common simple configuration is just an attribute name, like `sn`, which will work the same way direct binding works:

  lang=text,name=Simple Example
  sn

A slightly more complex configuration might let the user log in with either their login name or email address:

  lang=text,name=Match Several Attributes
  mail
  sn

If your LDAP directory is more complex, or you want to perform sophisticated filtering, you can use more complex queries. Depending on your directory structure, this example might allow users to log in with either their email address or username, but only if they\'re in specific departments:

  lang=text,name=Complex Example
  (&(mail=${login})(|(departmentNumber=1)(departmentNumber=2)))
  (&(sn=${login})(|(departmentNumber=1)(departmentNumber=2)))

All of the attribute names used here are just examples: your LDAP server may use different attribute names.' => '사용자가 LDAP 사용자 이름과 비밀번호를 제공하면, 이 소프트웨어는 해당 자격 증명으로 LDAP에 직접 바인딩할 수도 있고(더 간단하지만 덜 강력함), 익명 자격 증명으로 LDAP에 바인딩한 뒤 제공된 자격 증명과 일치하는 레코드를 검색할 수도 있습니다(더 복잡하지만 더 강력함).

많은 설치 환경에서는 직접 바인딩으로 충분합니다. 그러나 다음과 같은 경우에는 먼저 검색하고 싶을 수 있습니다:

  - 사용자가 사용자 이름 또는 이메일 주소 중 하나로 로그인할 수 있게 하려는 경우.
  - 로그인/사용자 이름이 LDAP 레코드의 고유 이름에 포함되어 있지 않은 경우.
  - 로그인을 일부 사용자로 제한하려는 경우(예: 특정 부서의 사용자만 허용).
  - LDAP 서버가 직접 바인딩이 올바르게 작동하지 못하게 하는 다른 방식으로 구성된 경우.

**직접 바인딩하려면**, 로그인 이름에 해당하는 LDAP 특성을 아래 **검색할 특성** 상자에 입력하세요. 대개 `sn` 또는 `uid` 같은 값입니다. 이것이 가장 간단한 구성이지만, 사용자 이름이 고유 이름의 일부인 경우에만 작동하며 로그인에 복잡한 제한을 적용할 수 없습니다.

  lang=텍스트,name=간단한 직접 바인딩
  sn

**먼저 검색하려면**, 아래에 익명 사용자 이름과 비밀번호를 제공하거나 **항상 검색** 확인란을 선택한 뒤, 이 필드에 검색 쿼리를 한 줄에 하나씩 입력하세요. 바인딩 후에는 이 쿼리들을 사용하여 사용자가 입력한 로그인 이름과 연결된 레코드를 식별합니다.

일치하는 레코드를 찾을 때까지 검색은 순서대로 시도됩니다. 각 쿼리는 `sn` 또는 `mail` 같은 단순 특성 이름일 수 있으며, 이 경우 일치하는 레코드를 검색합니다. 또는 `${login}` 문자열을 사용하여 로그인 이름을 나타내는 복잡한 쿼리일 수도 있습니다.

흔한 단순 구성은 `sn` 같은 특성 이름 하나만 사용하는 것이며, 직접 바인딩과 같은 방식으로 작동합니다:

  lang=텍스트,name=간단한 예시
  sn

조금 더 복잡한 구성에서는 사용자가 로그인 이름 또는 이메일 주소 중 하나로 로그인할 수 있게 할 수 있습니다:

  lang=텍스트,name=복수의 특성과 일치
  mail
  sn

LDAP 디렉터리가 더 복잡하거나 정교한 필터링을 수행하려는 경우 더 복잡한 쿼리를 사용할 수 있습니다. 디렉터리 구조에 따라, 이 예시는 사용자가 이메일 주소 또는 사용자 이름으로 로그인할 수 있게 하되 특정 부서에 속한 경우에만 허용할 수 있습니다:

  lang=텍스트,name=복잡한 예시
  (&(mail=${login})(|(departmentNumber=1)(departmentNumber=2)))
  (&(sn=${login})(|(departmentNumber=1)(departmentNumber=2)))

여기에 사용된 모든 특성 이름은 예시일 뿐입니다. LDAP 서버에서는 다른 특성 이름을 사용할 수 있습니다.',
  'Mobile App (TOTP)' => '모바일 앱 (TOTP)',
  'Expected valid JSON response from Google account data request.' => 'Google 계정 데이터 요청으로부터 유효한 JSON 응답을 예상했습니다.',
  'The invite code in the link you clicked has already been accepted.' => '클릭한 링크의 초대 코드는 이미 승인되었습니다.',
  'No outbound mailer which can deliver SMS messages is configured.' => 'SMS 메시지를 전송할 수 있는 발신 메일러가 설정되어 있지 않습니다.',
  'True to sign this transaction group with MFA.' => '이 트랜잭션 그룹을 MFA로 서명하려면 참으로 설정합니다.',
  'If you leave high security, you will need to authenticate again the next time you try to take a high security action.' => '높은 보안 모드을 종료하면 다음에 높은 보안 모드의 작업을 시도할 때 다시 인증해야 합니다.',
  'Link %s Account' => '%s 계정 연결',
  'The LDAP authentication provider is not enabled.' => 'LDAP 인증 제공자가 활성화되어 있지 않습니다.',
  'Active Phone Number' => '활성 전화번호',
  'Enroll in MFA' => 'MFA에 등록',
  'Really destroy credentials everywhere?' => '정말로 모든 곳에서 자격 증명을 파기합니까?',
  'Contact Number' => '연락처',
  'Refresh Account' => '계정 갱신',
  'Failed to digest password: object ("%s") did not return an opaque envelope with a password digest.' => '암호 다이제스트 실패: 객체("%s")가 암호 다이제스트가 들어 있는 opaque envelope를 반환하지 않았습니다.',
  '%s changed the username policy for this provider from %s to %s.' => '%s님이 이 제공자의 사용자 이름 정책을 %s에서 %s(으)로 변경했습니다.',
  'Optionally, specify a username attribute to use to prefill usernames when registering a new account. This is purely cosmetic and does not affect the login process, but you can configure it to make sure users get the same default username as their LDAP username, so usernames remain consistent across systems.' => '선택적으로, 새 계정 등록 시 사용자 이름을 미리 채우는 데 사용할 사용자 이름 특성을 지정할 수 있습니다. 이는 순전히 표시상의 목적이며 로그인 과정에는 영향을 미치지 않지만, 사용자가 LDAP 사용자 이름과 동일한 기본 사용자 이름을 사용하도록 구성하여 시스템 간 사용자 이름의 일관성을 유지할 수 있습니다.',
  'SMS Code' => 'SMS 코드',
  'ldaps://ldaps.example.com/' => 'ldaps://ldaps.example.com/',
  'sn' => 'sn',
  'A passphrase was provided for this private key, but it does not require a passphrase. Check that you supplied the correct key, or omit the passphrase.' => '이 개인 키에 대한 passphrase가 제공되었지만, passphrase를 요구하지 않습니다. 올바른 키를 입력했는지 확인하거나 passphrase를 생략하세요.',
  'This provider is not configured to allow linking.' => '이 제공자는 연결을 허용하도록 구성되어 있지 않습니다.',
  '%s created this provider.' => '%s님이 이 제공자를 만들었습니다.',
  'Multi-Factor' => '다단계',
  'This contact number is already in use.' => '이 연락처는 이미 사용 중입니다.',
  'Revokes temporary authentication tokens.

Temporary tokens are used in password reset mail, welcome mail, and by some other systems like Git LFS. Revoking temporary tokens will invalidate existing links in password reset and invite mail that was sent before the revocation occurred.' => '임시 인증 토큰을 폐기합니다.

임시 토큰은 비밀번호 재설정 메일, 환영 메일 및 Git LFS와 같은 일부 시스템에서 사용됩니다. 임시 토큰을 폐기하면 폐기 전에 전송된 비밀번호 재설정 메일 및 초대 메일의 기존 링크가 무효화됩니다.',
  'The account you are attempting to link is already linked to your account.' => '연결하려는 계정이 이미 계정에 연결되어 있습니다.',
  'Enter the code from the text message which was sent to your primary contact number.' => '기본 연락처로 전송된 문자 메시지에 있는 코드를 입력하세요.',
  'Do you want to enable this provider? Users will be able to log in using linked accounts.' => '이 제공자를 사용하시겠습니까? 사용자는 연결된 계정을 사용하여 로그인할 수 있게 됩니다.',
  'JIRA Instance Name' => 'JIRA 인스턴스 이름',
  '%s updated the OAuth application ID for this provider from "%s" to "%s".' => '%s님이 이 제공자에 대한 OAuth 애플리케이션 ID를 "%s"에서 "%s"(으)로 업데이트했습니다.',
  '%s enabled registration.' => '%s님이 등록을 활성화했습니다.',
  'Auth Message %d' => 'Auth 메시지 %d',
  'Unable to load your OAuth1 token secret from storage. It may have expired. Try authenticating again.' => '스토리지에서 OAuth1 토큰 비밀 키를 불러올 수 없습니다. 토큰이 만료되었을 수 있습니다. 다시 인증해 보세요.',
  'This private key requires a passphrase, but no passphrase was provided. Check that you supplied the correct key, or provide the passphrase.' => '이 개인 키는 passphrase를 요구하지만, passphrase가 지정되지 않았습니다. 올바른 키를 입력했는지 확인하거나 passphrase를 지정하세요.',
  'Register Account' => '계정 등록',
  'Awesome' => '좋네요',
  '%s set the OAuth application notes for this provider.' => '%s님이 이 제공자에 대한 OAuth 애플리케이션 메모를 설정했습니다.',
  'Credential type "%s" is not valid. Valid credential types are: %s.' => '자격 증명 유형 "%s"이(가) 유효하지 않습니다. 유효한 자격 증명 유형: %s.',
  'Generate Keypair' => '키 쌍 생성',
  'Unable to set LDAP option \'%s\' to value \'%s\'!' => '\'%s\' LDAP 옵션을 \'%s\' 값으로 설정할 수 없습니다!',
  'LDAP: Failed to retrieve record for user "%s" when searching. Credentialed users may not be able to search your LDAP server. Try configuring anonymous credentials or fully anonymous binds.' => 'LDAP: 검색 중 사용자 "%s"에 대한 레코드를 가져오는 데 실패했습니다. 자격 증명을 가진 사용자는 LDAP 서버를 검색할 수 없을 수 있습니다. 익명 자격 증명 또는 완전 익명 바인딩을 구성해 보세요.',
  'Failed to bind to LDAP server (without username).' => '(사용자 이름 없이) LDAP 서버에 바인딩하는 데 실패했습니다.',
  '%s changed the "%s" value from "%s" to "%s".' => '%s님이 "%s" 값을 "%s"에서 "%s"(으)로 변경했습니다.',
  'You canceled authentication.' => '인증을 취소했습니다.',
  'A password reset link will be sent to your primary email address. Follow the link to set an account password.' => '기본 이메일 주소로 비밀번호 재설정 링크가 전송됩니다. 링크를 따라 계정 비밀번호를 설정하세요.',
  'Accepted By' => '승인한 사용자',
  'Expected \'%s\' in response!' => '응답에 \'%s\'이(가) 예상되었습니다!',
  'Anyone who can browse to this server will be able to register an account. To add email domain restrictions, configure %s.' => '이 서버에 접속할 수 있는 사람은 누구나 계정을 등록할 수 있습니다. 이메일 도메인 제한을 추가하려면 %s을(를) 구성하세요.',
  'Requiring a high-security session from a user with no session!' => '세션이 없는 사용자로부터 높은 보안의 세션을 요구합니다!',
  '%s revoked this key.' => '%s님이 이 키를 폐기했습니다.',
  'There are no configured multi-factor providers.' => '구성된 다단계 제공자가 없습니다.',
  'OAuth1 Handshake Token' => 'OAuth1 핸드셰이크 토큰',
  'This server is not configured with any enabled authentication providers which can be used to log in. If you have accidentally locked yourself out by disabling all providers, you can use `%s` to recover access to an account.' => '이 서버는 로그인에 사용할 수 있는 인증 제공자가 활성화되어 있지 않습니다. 모든 제공자를 비활성화하여 실수로 계정에 접근할 수 없게 된 경우, `%s`을(를) 사용하여 계정으로의 접근을 복구할 수 있습니다.',
  'The email address ("%s") associated with the external account is already in use by an existing %s account. Multiple %s accounts may not have the same email address, so you can not use this email address to register a new account.' => '외부 계정과 연결된 이메일 주소("%s")는 이미 기존 %s 계정에서 사용 중입니다. 여러 개의 %s 계정이 동일한 이메일 주소를 사용할 수 없으므로 이 이메일 주소를 사용하여 새 계정을 등록할 수 없습니다.',
  'Failed to get LDAP entries from search result.' => '검색 결과에서 LDAP 엔트리 가져오기를 실패했습니다.',
  'Captcha response is incorrect, try again.' => '캡차 응답이 잘못되었습니다. 다시 시도하세요.',
  'Add Auth Provider' => 'Auth 제공자 추가',
  'Authentication provider (of class "%s") is attempting to load or create an external account, but provided a list of account identifiers which map to more than one account: %s.' => '인증 제공자(클래스 "%s")가 외부 계정을 로드하거나 생성하려고 시도했지만 둘 이상의 계정에 매핑되는 계정 식별자 목록을 제공했습니다: %s',
  'Duo API credential ("%s") has no secret key.' => 'Duo API 자격 증명("%s")에 비밀 키가 없습니다.',
  'Factor Type' => '단계 유형',
  'LDAP: Failed to retrieve record for user "%s" when searching with both user and anonymous credentials.' => 'LDAP: 사용자 자격 증명과 익명 자격 증명을 모두 사용하여 검색했을 때 사용자 "%s"에 대한 레코드를 가져오는 데 실패했습니다.',
  'Authentication Config Locked' => '인증 구성 잠김',
  'Auth Factor' => 'Auth 단계',
  'Confirm Link' => '연결 확인',
  'You can try again, or request a new link via email.' => '다시 시도하거나 이메일을 통해 새 링크를 요청할 수 있습니다.',
  '%s is required!' => '%s은(는) 필수입니다!',
  'Create New Account' => '새 계정 만들기',
  'Your account has too many outstanding, incomplete MFA synchronization attempts. Wait an hour and try again.' => '계정에 미처리, 미완료된 MFA 동기화 시도가 너무 많습니다. 한 시간 뒤에 다시 시도하세요.',
  'Log In' => '로그인',
  'Temporary Token Types' => '임시 토큰 유형',
  'Guidance shown after a user logs in with an email link and is prompted to link an external account.' => '이메일 링크를 통해 로그인한 사용자가 외부 계정을 연결하라는 요청을 받을 때 표시되는 안내 화면입니다.',
  'Register' => '등록',
  'Provider Type' => '제공자 유형',
  'Anonymous Username' => '익명 사용자 이름',
  'Allow users to receive a code via SMS.' => '사용자가 SMS를 통해 인증 코드를 받을 수 있도록 허용합니다.',
  '%s disabled auto login.' => '%s님이 자동 로그인을 비활성화했습니다.',
  'You can not "--list" and revoke credentials (with "--from" or "--everywhere") in the same operation.' => '"--list"를 사용하는 동시에 ("--from" 또는 "--everywhere"을 사용하여) 자격 증명을 폐기할 수 없습니다.',
  'LDAP' => 'LDAP',
  'The account you are attempting to register with uses an authentication provider ("%s") which does not allow registration. An administrator may have recently disabled registration with this provider.' => '등록하려는 계정은 등록을 허용하지 않는 인증 제공자("%s")를 사용합니다. 관리자가 최근에 해당 제공자를 통한 등록을 비활성화했을 수 있습니다.',
  'Already Accepted' => '이미 수락됨',
  'Specify an OAuth client ID with %s.' => '%s(으)로 OAuth 클라이언트 ID를 지정하세요.',
  'LDAP Exception: %s
LDAP Error #%d: %s' => 'LDAP 예외: %s
LDAP 오류 #%d: %s',
  'Log Out Anyway' => '그래도 로그아웃',
  'Set Primary Contact Number' => '기본 연락처 설정하기',
  'You are logged in as %s, but the email address you just clicked a link from is already verified and associated with another account (%s). Switch accounts, then try again.' => '현재 %s 계정으로 로그인되어 있지만, 방금 링크를 클릭한 이메일 주소는 이미 인증되어 다른 계정(%s)에 연결되어 있습니다. 계정을 변경한 후 다시 시도해 주세요.',
  'The external service ("%s") you just authenticated with is not configured to allow logins on this server. An administrator may have recently disabled it.' => '방금 인증에 사용한 외부 서비스("%s")는 이 서버에 대한 로그인을 허용하도록 구성되어 있지 않습니다. 관리자가 최근에 해당 기능을 비활성화했을 수 있습니다.',
  'Stronger algorithms are listed first. The highlighted algorithm will be used when storing new hashes. Older hashes will be upgraded to the best algorithm over time.' => '더 강력한 알고리즘이 먼저 나열됩니다. 강조된 알고리즘은 새 해시값을 저장할 때 사용됩니다. 기존 해시값은 시간이 지남에 따라 가장 좋은 알고리즘으로 업그레이드됩니다.',
  'These auth factors will be stripped:' => '이 인증 단계들이 제거됩니다:',
  'Contact numbers must have a contact number.' => '연락처에는 반드시 연락처가 있어야 합니다.',
  'Engine: Session' => '엔진: 세션',
  'Require Existing Duo Account' => '기존 Duo 계정 필요',
  'Upload SSH Public Key' => 'SSH 공개 키 업로드',
  'No such user "%s"!' => '"%s" 사용자가 없습니다!',
  '%s changed the hostname for this provider from %s to %s.' => '%s님이 이 제공자의 호스트 이름을 %s에서 %s(으)로 변경했습니다.',
  'Wait for Approval' => '승인 대기 중',
  'SSH key material is required.' => 'SSH 키 자료는 필수입니다.',
  'Guidance in the "Change Username" dialog for requesting a username change.' => '"사용자 이름 변경" 대화 상자에서 사용자 이름 변경을 요청하는 방법에 대한 안내입니다.',
  'To reset your password, provide your email address. An email with a login link will be sent to you.' => '비밀번호를 재설정하려면 이메일 주소를 지정하세요. 로그인 링크가 포함된 이메일이 전송될 것입니다.',
  'Once you have completed setup on your phone, click continue.' => '휴대폰에서 설정을 완료했다면 계속을 클릭하세요.',
  'Application secret is required.' => '애플리케이션 비밀 키는 필수입니다.',
  'Authentication Failure' => '인증 실패',
  'Use %s to choose a user to reset actions for.' => '작업을 재설정할 사용자를 선택하기 위해 %s을(를) 사용하세요.',
  'LDAP Username' => 'LDAP 사용자 이름',
  'Parsed Address' => '구문 분석된 주소',
  'Login and Registration Providers' => '로그인 및 등록 제공자',
  'Send SMS: %s' => 'SMS 보내기: %s',
  'Authentication Sessions' => '인증 세션',
  'Duo Security' => 'Duo 보안',
  'Auth Provider: %s' => 'Auth 제공자: %s',
  'Trouble logging in?' => '로그인 하는데 문제가 있나요?',
  'Search Attributes' => '검색할 특성',
  'You already have SMS authentication attached to your account.' => '이미 SMS 인증이 계정에 연결되어 있습니다.',
  'The login link you clicked is invalid, out of date, or has already been used.' => '클릭한 로그인 링크는 유효하지 않거나, 만료되었거나, 이미 사용되었습니다.',
  'Message Text' => '메시지 문구',
  'Revoke all credentials types.' => '모든 자격 증명 유형을 폐기합니다.',
  'LDAP Exception: %s' => 'LDAP 예외: %s',
  'Previously Invited' => '이전에 초대됨',
  'LDAP search failed.' => 'LDAP 검색을 실패했습니다.',
  'This private key could not be opened with the provided passphrase. This might mean that the passphrase is wrong or that the key is not formatted correctly. Check that you have supplied the complete text of a valid private key and the correct passphrase.' => '지정된 passphrase로 이 개인 키를 열 수 없습니다. passphrase가 잘못되었거나 키 형식이 올바르지 않을 수 있습니다. 유효한 개인 키의 전체 텍스트와 올바른 passphrase를 입력했는지 확인하세요.',
  'Allow Auto Login' => '자동 로그인 허용',
  'Note: Unlinking an authentication provider will terminate any other active login sessions.' => '참고: 인증 제공자 연결을 해제하면 다른 모든 활성화된 로그인 세션이 종료됩니다.',
  '%s renamed this key from "%s" to "%s".' => '%s님이 이 키의 이름을 "%s"에서 "%s"(으)로 변경했습니다.',
  'Enable Number' => '번호 활성화',
  'Allow Linking Accounts' => '계정 연결 허용',
  '%s created this MFA provider.' => '%s님이 이 MFA 제공자를 만들었습니다.',
  'To enable the login flow, follow setup guidance and configure at least one authentication provider, then associate credentials with your account. After completing these steps, you will be able to log out and log back in normally.' => '로그인 흐름을 활성화하려면 설정 안내에 따라 인증 제공자를 하나 이상 구성한 뒤, 자격 증명을 계정에 연결하세요. 이 단계를 완료하면 정상적으로 로그아웃하고 다시 로그인할 수 있습니다.',
  'You have not completed Duo enrollment yet. Complete enrollment, then click continue.' => '아직 Duo 등록을 완료하지 않았습니다. 등록을 완료한 후 계속을 클릭하세요.',
  'Always Search' => '항상 검색',
  'Allow Registration' => '등록 허용',
  'Use this link to recover access to the "%s" account from the web interface:' => '웹 인터페이스에서 "%s" 계정에 대한 접근 권한을 복구하려면 이 링크를 사용하세요:',
  'Change Enroll Message' => '등록 메시지 변경하기',
  'You can safely ignore these warnings if the install itself has access controls (for example, it is deployed on a VPN) or if all of the configured providers have access controls (for example, they are all private LDAP or OAuth servers).' => '설치 자체에 접근 제어가 있는 경우(예: VPN에 배포된 경우) 또는 구성된 모든 제공자에 접근 제어가 있는 경우(예: 모두 개인 LDAP 또는 OAuth 서버인 경우) 이러한 경고를 무시해도 됩니다.',
  'The external service ("%s") you just authenticated with is not configured to allow registration on this server. An administrator may have recently disabled it.' => '방금 인증에 사용한 외부 서비스("%s")는 이 서버에 등록을 허용하도록 구성되어 있지 않습니다. 관리자가 최근에 해당 기능을 비활성화했을 수 있습니다.',
  'SSH keys inherit the policies of the user or object they authenticate.' => 'SSH 키는 인증에 사용된 사용자 또는 객체의 정책을 상속받습니다.',
  'Duo Username: %s' => 'Duo 사용자 이름: %s',
  'Check Your Email' => '이메일을 확인하세요',
  'Captcha' => '캡차',
  'Email record has invalid user PHID!' => '이메일 기록에 유효하지 않은 사용자 PHID가 있습니다!',
  'No Matching Tokens' => '일치하는 토큰이 없음',
  'Auth Provider' => 'Auth 제공자',
  'Upgrading partial session of user with no session!' => '세션이 없는 사용자의 부분 세션을 업그레이드합니다!',
  'Add Provider' => '제공자 추가',
  '%s Account' => '%s 계정',
  'NOTE: **To complete setup**, copy and paste these keys into JIRA according to the instructions below.' => '참고: **설정을 완료하려면** 아래 지침에 따라 이러한 키를 JIRA에 복사하여 붙여넣으세요.',
  'JIRA Base URI' => 'JIRA 베이스 URI',
  'A session is visible only to its owner.' => '세션은 세션 소유자에게만 보입니다.',
  '%s created this message.' => '%s님이 이 메시지를 만들었습니다.',
  'OAuth2 Account' => 'OAuth2 계정',
  'LDAP Hostname' => 'LDAP 호스트 이름',
  'The email address you just clicked a link from is already verified and associated with a registered account (%s). Log in to continue.' => '방금 링크를 클릭한 이메일 주소는 이미 인증되었으며 등록된 계정(%s)과 연결되어 있습니다. 로그인하여 계속 진행하세요.',
  '%s enabled this provider.' => '%s님이 이 제공자를 활성화했습니다.',
  'After entering the key, the application should display a numeric code. Enter that code below to confirm that you have configured the authenticator correctly:' => '키를 입력하면 애플리케이션에 숫자 코드가 표시됩니다. 아래에 해당 코드를 입력하여 인증기가 올바르게 설정되었는지 확인하세요.',
  'If you are currently using your phone to view this page, click this button to open the Duo application:' => '현재 휴대폰으로 이 페이지를 보고 있는 경우, 이 버튼을 클릭하여 Duo 애플리케이션을 여세요.',
  'External Account is a WMF SUL account but email address is not a @wikimedia.org email address. Use your @wikimedia.org email address to create your Phabricator account.' => '외부 계정은 WMF SUL 계정이지만 이메일 주소가 @wikimedia.org 이메일 주소가 아닙니다. @wikimedia.org 이메일 주소를 사용하여 Phabricator 계정을 만드세요.',
  'Specify either specific users with %s, or all users with %s, but not both.' => '특정 사용자를 %s(으)로 지정하거나 모든 사용자를 "%s"(으)로 지정하세요. 둘을 동시에 지정하지는 마세요.',
  'Unable to refresh token!' => '토큰을 갱신할 수 없습니다!',
  '%s changed the status of this provider from %s to %s.' => '%s님이 이 제공자의 상태를 %s에서 %s(으)로 변경했습니다.',
  'Consumer Key' => '컨슈머 키',
  'The email address associated with this account ("%s") is already in use by an application and can not be used to register a new account. Choose a different, valid address.' => '이 계정("%s")과 연결된 이메일 주소는 이미 다른 애플리케이션에서 사용 중이므로 새 계정을 등록하는 데 사용할 수 없습니다. 다른 유효한 이메일 주소를 선택하세요.',
  'Disable Provider' => '제공자 비활성화',
  'Logging in will verify %s as an email address you own.' => '로그인하면 당신이 소유한 이메일 주소로 %s를 인증합니다.',
  'Not a Valid Email Address' => '유효한 이메일 주소가 아닙니다',
  'SSH Keys' => 'SSH 키',
  'Active OAuth Token (Expires: %s)' => '활성 OAuth 토큰 (만료: %s)',
  'Specify the credential type to revoke with "--type" or "--everything", but not both.' => '폐기할 자격 증명 유형을 "--type" 또는 "--everything"으로 지정하세요. 둘을 동시에 지정하지는 마세요.',
  '(If given an option, select that this key is "Time Based", not "Counter Based".)' => '(옵션이 제공되는 경우, 이 키를 "카운터 기반"이 아닌 "시간 기반"으로 선택하세요.)',
  'LDAP Password: ' => 'LDAP 비밀번호:',
  'Bad Invite Code' => '잘못된 초대 코드',
  '{icon check, color="green"} **Setup Complete!**

You have successfully configured multi-factor authentication for your account.

You can make adjustments from the [[ /settings/ | Settings ]] panel later.' => '{icon check, color="green"} **설정 완료!**

계정에 다단계 인증이 성공적으로 설정되었습니다.

나중에 [[ /settings/ | 설정 ]] 패널에서 설정을 조정할 수 있습니다.',
  'Allow users to log in or register using a username and password.' => '사용자 이름과 비밀번호를 사용하여 사용자가 로그인하거나 등록할 수 있도록 허용합니다.',
  'Your remote address has made too many login attempts in a short period of time.' => '짧은 시간 동안 원격 주소에 너무 많은 로그인 시도가 있었습니다.',
  '%s enabled this contact number.' => '%s님이 이 연락처를 활성화했습니다.',
  'WordPress.com' => 'WordPress.com',
  'Default Message' => '기본 메시지',
  'Guidance in the message body when users request an email link to access their account.' => '사용자가 계정 접속을 위한 이메일 링크를 요청할 때 메시지 본문에 표시되는 안내 사항입니다.',
  'Refresh %s Account' => '계정 %s 갱신',
  'Login cookie was set correctly, but your login session is not valid. Try clearing cookies and logging in again.' => '로그인 쿠키는 올바르게 설정되었으나 로그인 세션이 유효하지 않습니다. 쿠키를 지운 다음 다시 로그인해 보세요.',
  'MFA Sync' => 'MFA 동기화',
  'Password Hash Algorithms' => '비밀번호 해시 알고리즘',
  'OAuth1 Handshake Secret' => 'OAuth1 핸드셰이크 비밀 키',
  'Login Failed' => '로그인 실패',
  'You have failed to verify multi-factor authentication too often in a short period of time.' => '단시간동안 다단계 인증 확인에 너무 많이 실패했습니다.',
  'You can not make a disabled number a primary contact number.' => '비활성화된 번호를 기본 연락처로 설정할 수 없습니다.',
  'Use TLS' => 'TLS 사용',
  'This install has the configuration option "%s" enabled, but does not have any active multifactor providers configured. This means you are required to add MFA, but are also prevented from doing so. An administrator must disable "%s" or enable an MFA provider to allow you to continue.' => '이 설치에는 구성 옵션 "%s"이(가) 활성화되어 있지만, 활성화된 다단계 인증 제공자가 구성되어 있지 않습니다. 즉, 다단계 인증을 추가해야 하지만 추가할 수 없습니다. 관리자가 "%s"을(를) 비활성화하거나 다단계 인증 제공자를 활성화해야 계속 진행할 수 있습니다.',
  'You will no longer be able to use your %s account to log in.' => '로그인 시 더이상 %s을(를) 사용할 수 없게 됩니다.',
  'Auth Invite' => 'Auth 초대',
  'Instructions on the "Wait For Approval" screen, shown to users who have registered an account that has not yet been approved by an administrator.' => '관리자의 승인을 아직 받지 못한 계정을 등록한 사용자에게 표시되는 "승인 대기 중" 화면의 안내 사항입니다.',
  'Username/Password' => '사용자 이름/비밀번호',
  'No provider with PHID "%s" exists. Use `bin/auth list-mfa-providers` to list providers.' => 'PHID가 "%s"인 제공자가 없습니다. 제공자 목록을 보려면 `bin/auth list-mfa-providers`를 사용하세요.',
  'Customize Message' => '메시지 사용자 지정',
  'CHANGES TO ENROLL MESSAGE' => '등록 메시지의 변경사항',
  'Duo enrollment mode ("%s") is not supported.' => 'Duo 등록 모드("%s")는 지원되지 않습니다.',
  'Duo Username' => 'Duo 사용자 이름',
  'Status "%s" is invalid. Valid statuses are: %s.' => '상태 "%s"이(가) 유효하지 않습니다. 유효한 상태: %s.',
  'Email Address Already in Use' => '이메일 주소가 이미 사용중임',
  'Administrative approvals are enabled (in %s), so all new users must have their accounts approved by an administrator.' => '관리자 승인 기능이 활성화되어 있으므로(%s에서), 모든 신규 사용자는 관리자의 계정 승인을 받아야 합니다.',
  'Already Associated' => '이미 연결됨',
  'Realname Attributes' => '실명 특성',
  'Changing Status Failed' => '상태 변경 실패함',
  'Specify %s to reset all action counters.' => '모든 작업 카운터를 초기화할 %s을(를) 지정하세요.',
  '= Integration Options = 
Configure how to record Revisions on JIRA tasks.

Note you\'ll have to restart the daemons for this to take effect.' => '= 통합 옵션 = 
JIRA 태스크에 대한 판을 기록하는 방법을 구성합니다.

참고: 이 설정을 적용하려면 데몬을 재시작해야 합니다.',
  'Credential ("%s") is not valid.' => '자격 증명("%s")이 유효하지 않습니다.',
  'Base URI is required.' => '베이스 URI는 필수입니다.',
  'No valid linkable account.' => '연결 가능한 유효한 계정이 없습니다.',
  'There are no configured default registration providers.' => '구성된 기본 등록 제공자가 없습니다.',
  'The authentication provider did not return the correct client state parameter in its response. If this problem persists, you may need to clear your cookies.' => '인증 제공자가 응답에 올바르지 않은 클라이언트 상태 매개변수를 반환하지 않습니다. 이 문제가 계속되면 쿠키를 삭제해야 할 수 있습니다.',
  'SSH keys can not be reactivated.' => 'SSH 키는 재활성화될 수 없습니다.',
  'You can not deprecate or disable the last active MFA provider while "%s" is enabled, because new users would be unable to enroll in MFA. Disable the MFA requirement in Config, or create or enable another MFA provider first.' => '"%s"이(가) 활성화된 상태에서는 마지막으로 활성화된 MFA 제공자를 사용 중지하거나 비활성화할 수 없습니다. 그렇게 하면 새 사용자가 MFA에 등록할 수 없게 됩니다. 구성에서 MFA 요구 사항을 비활성화하거나, 먼저 다른 MFA 제공자를 생성 또는 활성화하세요.',
  'Again' => '다시',
  'Expected valid JSON response from GitHub account data request.' => 'GitHub 계정 데이터 요청으로부터 유효한 JSON 응답을 예상했습니다.',
  '%s disabled account unlinking.' => '%s님이 계정 연결 해제를 비활성화했습니다.',
  '[%s] %s has invited you to join %s' => '[%s] %s님이 당신을 %s에 초대했습니다',
  'Revoke Tokens?' => '토큰을 폐기합니까?',
  'Confirm %s Account Link' => '%s 계정 연결 확인',
  'You have not configured an outbound SMS mailer. You must configure one before you can set up SMS. See: %s' => '발신 SMS 메일러를 구성하지 않았습니다. SMS를 설정하려면 먼저 발신 SMS 메일러를 구성해야 합니다. 참조: %s',
  'Provider Already Configured' => '제공자가 이미 구성되었습니다',
  'Missing Client ID Cookie' => '클라이언트 ID 쿠키가 없습니다',
  'To search for an LDAP record before authenticating, either check the **Always Search** checkbox or enter an anonymous username and password to use to perform the search.' => '인증 전에 LDAP 레코드를 검색하려면 **항상 검색** 체크박스를 체크하거나, 검색 수행에 사용할 익명 사용자 이름과 암호를 입력하세요.',
  'Enroll Duo Account: %s' => 'Duo 계정 등록: %s',
  'Skipping, provider is not an OAuth2 provider.' => '건너뜁니다, 제공자가 OAuth2 제공자가 아닙니다.',
  'Your login session is invalid, and clearing the session cookie was unsuccessful. Try clearing your browser cookies.' => '로그인 세션이 유효하지 않으며 세션 쿠키 삭제에 실패했습니다. 브라우저 쿠키를 삭제해 보세요.',
  'OAuth Consumer Secret' => 'OAuth 컨슈머 비밀 키',
);
  }

}
