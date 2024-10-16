<?php

final class PhabricatorAuthKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
      'Disable Contact Number' => '연락처 번호 비활성화',
      'SSH Key Actions' => 'SSH 키 동작',
      'Passwords' => '비밀번호',
      'Algorithm' => '알고리즘',
      'You must specify the username of the account to recover.' => '복구하려면 계정의 사용자 이름을 지정해야 합니다.',
      'Server name must contain only lowercase letters, digits, and periods.' => '파브리케이터 인스턴스 이름은 소문자, 숫자, 구두점만 포함해야 합니다.',
      'There are too many configured default registration providers.' => '구성된 기본 등록 제공자의 수가 너무 많습니다.',
      'Unlink "%s" Account?' => '"%s" 계정의 연결을 해제하시겠습니까?',
      'Setup Admin Account' => '관리자 계정 설정',
      'Enable Contact Number' => '연락처 번호 활성화',
      'Must Verify Email' => '이메일을 확인해야 합니다',
      'MFA Providers' => 'MFA 제공자',
      'Edit MFA Provider' => 'MFA 제공자 편집',
      '%s enabled auto login.' => '%s님이 자동 로그인을 활성화했습니다.',
      'Invalid OAuth Access Token' => '유효하지 않은 OAuth 접근 토큰',
      'Verify Email' => '이메일 확인',
      'Enable the contact number %s?' => '%s 연락처 번호를 활성화하시겠습니까?',
      'Account is already registered or linked.' => '계정이 이미 등록 또는 연결되어 있습니다.',
      'You have not configured any multi-factor providers yet.' => '다요소 제공자를 아직 구성하지 않았습니다.',
      'Unable to Log In' => '로그인할 수 없습니다',
      'LDAP Port' => 'LDAP 포트',
      'Really trust this PKCS8 keyfile?' => '이 PKCS8 키파일을 정말로 신뢰하십니까?',
      'No public key was provided.' => '공개 키가 지정되지 않았습니다.',
      'Log In with LDAP' => 'LDAP으로 로그인',
      'TOTP Code' => 'TOTP 코드',
      'OAuth Consumer Key' => 'OAuth 컨슈머 키',
      'Another user already has that username.' => '다른 사용자가 이미 해당 계정명을 보유하고 있습니다.',
      'Account Not Refreshable' => '계정을 갱신할 수 없음',
      'Too Short' => '너무 짧습니다',
      'LDAP Username: ' => 'LDAP 사용자 이름:',
      'Allow Login:' => '로그인 허용:',
      'Terminate Session?' => '세션을 끝내시겠습니까?',
      '%s (%s) MFA Code: %s' => '파르비케이터 (%s) MFA 코드: %s',
      'Wrong Account' => '잘못된 계정',
      'Refresh tokens for a given user.' => '지정된 사용자의 토큰을 갱신합니다.',
      'Already Registered' => '이미 등록됨',
      'SECURITY WARNING' => '보안 경고',
      'Set Test Message' => '문자 메시지 설정',
      'Username Attribute' => '사용자 이름 속성',
      'Unlink Your Only Login Account?' => '유일한 로그인 계정의 연결을 끊으시겠습니까?',
      'JIRA base URI is required.' => 'JIRA 베이스 URI는 필수입니다.',
      'Config Locked' => '구성 잠김',
      'Does Not Allow Registration' => '등록을 허용하지 않음',
      '/settings/panel/contact/' => '/settings/panel/contact/',
      'Strength' => '강도',
      'This email address has already been verified.' => '이 이메일 주소는 이미 인증되었습니다.',
      'Unable to Make Primary' => '기본으로 설정할 수 없습니다',
      'Anonymous Password' => '익명 비밀번호',
      'Google' => '구글',
      'You must enter an LDAP password.' => 'LDAP 비밀번호를 입력해야 합니다.',
      'Generate New Keypair' => '새로운 키 쌍 생성',
      'MFA Provider' => 'MFA 제공자',
      'MFA Provider %d' => 'MFA 제공자 %s',
      'This key is trusted. Trusted keys can not be edited. Use %s to revoke trust before editing the key.' => '이 키는 신뢰할 수 있습니다. 신뢰하는 키는 편집할 수 없습니다. 신뢰를 철회하려면 이 키를 편집하기 전에 %s을(를) 사용하십시오.',
      'Edit Message' => '메시지 편집',
      'Add Multi-Factor Auth' => '다요소 인증 추가',
      'The contact number.' => '연락처 번호입니다.',
      'You must enter an LDAP username.' => 'LDAP 사용자 이름을 입력해야 합니다.',
      'Refresh LDAP Account' => 'LDAP 계정 갱신',
      'The password and confirmation do not match.' => '비밀번호와 확인 비밀번호가 일치하지 않습니다.',
      'No Providers Configured:' => '구성된 제공자 없음:',
      'Connecting to LDAP...' => 'LDAP에 연결 중...',
      'Wait' => '대기',
      'No matching SSH keys.' => '일치하는 SSH 키가 없습니다.',
      'Use %s Username' => '파브리케이터 사용자 이름 사용',
      'Authentication Error' => '인증 오류',
      '%s named this provider %s.' => '%s님이 이 제공자의 이름을 %s(으)로 지정했습니다.',
      'Mail Body: Email Login' => '메일 본문: 이메일 로그인',
      'Send a test message to %s?' => '%s님에게 테스트 메시지를 보내시겠습니까?',
      'Auth' => '인증',
      'Text Message (SMS)' => '문자 메시지 (SMS)',
      '%s removed the name (%s) of this provider.' => '%s님이 이 제공자의 이름(%s)을 제거했습니다.',
      'Provided public key is not properly formatted.' => '지정된 공개 키는 적절한 포맷을 갖추지 못했습니다.',
      'Multi-Factor Authentication is Misconfigured' => '다요소 인증이 잘못 구성되어 있습니다',
      '(You can not terminate your current login session. To terminate it, log out.)' => '(현재의 로그인 세션을 끝낼 수 없습니다. 끝내려면 로그인하십시오.)',
      'Your account has been created, but needs to be approved by an administrator. You\'ll receive an email once your account is approved.' => '계정을 만들었으나 관리자의 승인이 필요합니다. 계정이 승인되면 이메일을 받게 됩니다.',
      'Access token error: %s' => '액세스 토근 오류: %s',
      'Username Change Instructions' => '계정 이름 변경 안내',
      'Allows Registration' => '등록 허용',
      'Application ID is required.' => '애플리케이션 ID는 필수입니다.',
      'firstname, lastname' => '이름, 성',
      'This provider does not allow refreshing.' => '이 제공자는 갱신을 허용하지 않습니다.',
      'One-Time Login Token' => '일회용 로그인 토큰',
      'The id of the OAuth client.' => 'OAuth 클라이언트의 id입니다.',
      'Mail Body: Welcome' => '메일 본문: 환영',
      'MFA' => 'MFA',
      'Terminate all login sessions.' => '모든 로그인 세션을 끝냅니다.',
      'Send Another Email' => '다른 이메일 보내기',
      'Allow Account Linking' => '계정 연결 허용',
      'No Account Linked' => '연결된 계정이 없습니다',
      'Slack' => '슬랙',
      'Refresh OAuth access tokens. This is primarily useful for development and debugging.' => 'OAuth 접근 토큰을 갱신합니다. 이는 주로 개발과 디버깅에 유용합니다.',
      'The OAuth provider returned an error: %s' => 'OAuth 제공자가 오류를 반환했습니다: %s',
      'Registration Failed' => '등록 실패',
      'Unable to Verify Email' => '이메일을 확인할 수 없습니다',
      'Public SSH Key' => '공개 SSH 키',
      'Username and password are required!' => '사용자 이름과 비밀번호는 필수입니다!',
      'Add MFA Provider' => 'MFA 제공자 추가',
      '%s updated the "%s" value.' => '%s님이 "%s" 값을 업데이트했습니다.',
      'All Keys' => '모든 키',
      'Terminate Sessions' => '세션 끝내기',
      'Upload Public Key' => '공개 키 업로드',
      'OAuth App Notes' => 'OAuth 앱 참고',
      'Log In (%s)' => '로그인 (%s)',
      'Skip This Step' => '이 단계 건너뛰기',
      'Status of the MFA provider.' => 'MFA 제공자의 상태입니다.',
      'Login Failure' => '로그인 실패',
      'Contact Number %d' => '연락처 번호 %s',
      'Account Already Linked' => '계정이 이미 연결되었습니다',
      'Another user already has that email.' => '다른 사용자가 이미 해당 이메일을 보유하고 있습니다.',
      'You already have a provider of this type.' => '이 유형의 제공자가 이미 있습니다.',
      'Type of the MFA provider.' => 'MFA 제공자의 유형입니다.',
      'Your account has been disabled.' => '계정이 비활성화되었습니다.',
      'JIRA base URI should include protocol (like "https://").' => 'JIRA 베이스 URI는 프로토콜을 포함해야 합니다. (예: "https://")',
      'Twitter' => '트위터',
      'Unable to Generate Keys' => '키를 생성할 수 없습니다',
      'Log In or Register with LDAP' => 'LDAP으로 로그인 또는 등록',
      'Use Primary Email Address' => '기본 이메일 주소 사용',
      'Server Name' => '파브리케이터 인스턴스 이름',
      'Customize Messages' => '메시지 사용자 지정',
      'Next Step' => '다음 단계',
      'Message Preview' => '메시지 미리 보기',
      'The email address %s is now verified.' => '%s 이메일 주소가 지금 인증되었습니다.',
      'Send SMS' => 'SMS 보내기',
      'Not Installed' => '설치되지 않음',
      'Send a login link to your email address.' => '내 이메일 주소로 로그인 링크를 보냅니다.',
      'Really terminate session %s?' => '%s 세션을 정말로 끝내시겠습니까?',
      'Terminate Sessions?' => '세션을 끝내시겠습니까?',
      'Server name is required.' => '파브리케이터 인스턴스 이름은 필수입니다.',
      'Edit SSH Key' => 'SSH 키 편집',
      'Already Accepted Invite' => '초대를 이미 수락함',
      'No user exists with username "%s".' => '"%s" 사용자 이름의 사용자가 존재하지 않습니다.',
      'Account does not match provider!' => '계정이 제공자와 일치하지 않습니다!',
      'Account Not Linkable' => '계정 연결 불가',
      '[%s] New User "%s" Awaiting Approval' => '"%s" 새 사용자가 승인을 기다립니다',
      'Add Multi-Factor Authentication' => '다요소 인증 추가',
      'JIRA instance name must contain only lowercase letters, digits, and period.' => 'JIRA 인스턴스 이름은 소문자, 숫자, 구두점만 포함해야 합니다.',
      'Terminate Session' => '세션 끝내기',
      'You must choose a password.' => '비밀번호를 선택해야 합니다.',
      'Failed to find an OAuth client with id %s.' => '%s id로 OAuth 클라이언트 찾기를 실패했습니다.',
      'You can only verify one address at a time.' => '주소는 한 번에 하나만 인증할 수 있습니다.',
      'SSH Key %d' => 'SSH 키 %s',
      'Public key type should be one of: %s' => '공개 키 유형은 다음 중 하나여야 합니다: %s',
      'App Code' => '앱 코드',
      '%s edited a property of this provider.' => '%s님이 이 제공자의 속성을 편집했습니다.',
      'Address Verified' => '주소 인증됨',
      'No OAuth Access Token' => 'OAuth 접근 토큰 없음',
      'You are already logged in.' => '이미 로그인했습니다.',
      'Wait For Approval Instructions' => '승인 대기 안내',
      'Link LDAP Account' => 'LDAP 계정 연결',
      'ldap.example.com' => 'ldap.example.com',
      'Disable Number' => '번호 비활성화',
      'Username or Email' => '사용자 이름 또는 이메일',
      'Edit MFA Providers' => 'MFA 제공자 편집',
      '%s failed!' => '%s 실패!',
      'Amazon' => '아마존',
      'MFA Sync Token' => 'MFA 동기화 토큰',
      'OAuth client "%s" is now trusted.' => '업데이트되었습니다. 파브리케이터는 %s OAuth 클라이언트를 신뢰합니다.',
      'Unlink Account' => '계정 연결 해제',
      'Edit Existing Provider' => '기존 제공자 편집',
      '%s updated the message text.' => '%s님이 메시지 문구를 업데이트했습니다.',
      'This account is not linkable.' => '이 계정은 연결할 수 없습니다.',
      'Allow Unlinking Accounts' => '계정 연결 해제 허용',
      'OAuth1 Account' => 'OAuth1 계정',
      '"%s" Account' => '"%s" 계정',
      'Password Reset' => '비밀번호 재설정',
      'Link Accounts' => '계정 연결',
      'Create Admin Account' => '관리자 계정 만들기',
      'Create MFA Provider' => 'MFA 제공자 만들기',
      'Log Out?' => '로그아웃하시겠습니까?',
      'Unlink External Account' => '외부 계정 연결 해제',
      'The OAuth provider did not return a "code" parameter in its response.' => 'OAuth 제공자가 응답 시 "code" 변수를 반환하지 않았습니다.',
      'Log in to %s' => '파브리케이터로 로그인',
      'Facebook' => '페이스북',
      'LDAP Version' => 'LDAP 버전',
      'APPROVAL QUEUE' => '승인 대기',
      'Your session is no longer in high security.' => '세션의 보안이 더 이상 높지 않습니다.',
      'Disable the contact number %s?' => '%s 연락처 번호를 비활성화하시겠습니까?',
      'Factor Name: %s' => '요소 이름: %s',
      'Providers' => '제공자',
      'Address Duplicated in Input' => '주소 입력 중복',
      'Register an Account' => '계정 등록',
      'Can Not Edit Trusted Key' => '신뢰하는 키를 편집할 수 없습니다',
      'OAuth App ID' => 'OAuth 앱 ID',
      'Specified public keyfile "%s" does not exist!' => '지정된 "%s" 공개 키파일이 존재하지 않습니다!',
      'You must specify the email to verify.' => '확인할 이메일을 지정해야 합니다.',
      'TOTP' => 'TOTP',
      'Configure %s OAuth.' => '%s OAuth를 구성합니다.',
      'Refreshing account #%d.' => '#%s 계정을 새로 고칩니다.',
      'Failed to bind to LDAP server (as user "%s").' => 'LDAP 서버 바인딩을 ("%s" 사용자 권한으로) 실패했습니다.',
      'No email exists with address "%s"!' => '"%s" 주소의 이메일이 존재하지 않습니다!',
      'Request did not include account key.' => '요청에 계정 키가 포함되지 않았습니다.',
      'Account Disabled' => '계정 비활성화됨',
      'JIRA instance name is required.' => 'JIRA 인스턴스 이름은 필수입니다.',
      'Mail Body: Set Password' => '메일 본문: 비밀번호 설정',
      'LDAP Password' => 'LDAP 비밀번호',
      'Edit SSH Public Key' => 'SSH 공개 키 편집',
      'Generated' => '생성됨',
      'Base URI' => '파브리케이터 베이스 URI',
      'Consumer key is required.' => '컨슈머 키는 필수입니다.',
      'Username or password are incorrect.' => '사용자 이름 또는 비밀번호가 잘못되었습니다.',
      'One-Time Login' => '일회용 로그인',
      'SSH key name is required.' => 'SSH 키 이름은 필수입니다.',
      'Address Error' => '주소 오류',
      'Unable to connect to LDAP server (%s:%d).' => 'LDAP 서버(%s:%s)에 연결할 수 없습니다.',
      'Register New Account' => '새 계정 등록',
      'SSH KEY DETAIL' => 'SSH 키 상세 정보',
      'Send Test Message' => '텍스트 메시지 보내기',
      'Are you sure you want to log out?' => '로그아웃하시겠습니까?',
      'Link Account' => '계정 연결',
      'Login/Registration' => '로그인/등록',
      'List available multi-factor authentication factors.' => '사용 가능한 다요소 인증 요소를 나열합니다.',
      'Account Recovery' => '계정 복구',
      'Multi-Factor Authentication Setup Complete' => '다요소 인증 설정 완료',
      'Trusted' => '신뢰할 수 있음',
      'Allow Logins' => '로그인 허용',
      'Domain' => '도메인',
      'Email Sent' => '이메일 보냄',
      'Twitch.tv' => 'Twitch.tv',
      'Pattern "%s" is not valid.' => '"%s" 패턴은 유효하지 않습니다.',
      'Add Multi-Factor Authentication To Your Account' => '계정에 다요소 인증 추가',
      'Auth Providers' => '인증 제공자',
      'SSH Key %d: %s' => 'SSH 키 %s: %s',
      'The external account you just logged in with is not associated with a valid %s user account.' => '방금 로그인한 외부 계정은 유효한 파브리케이터 사용자과 연결되어 있지 않습니다.',
      'SMS' => 'SMS',
      'Sent By' => '보낸이',
      '%s disabled login.' => '%s님이 로그인을 비활성화했습니다.',
      'The URI where JIRA is installed. For example: %s' => 'JIRA가 설치되어 있는 URI입니다. 예: %s',
      'Forgot your password?' => '비밀번호를 잊으셨나요?',
      'Raw Address' => '순수 주소',
      'Reset all counters.' => '모든 카운터를 재설정합니다.',
      'To access your account, provide your email address. An email with a login link will be sent to you.' => '계정에 접근하려면 이메일 주소를 지정하십시오. 로그인 링크가 포함된 이메일이 전송될 것입니다.',
      'Install Instructions' => '설치 안내',
      'Download Private Key' => '개인 키 다운로드',
      'Authentication Canceled' => '인증이 취소됨',
      'Custom text for the message.' => '메시지의 사용자 지정 문구입니다.',
      'Login Required' => '로그인 필요',
      'Verified User Email' => '사용자 이메일 확인함',
      'Email Login' => '이메일 로그인',
      'Trust Email Addresses' => '이메일 주소 신뢰',
      'Unable to find LDAP account!' => 'LDAP 계정을 찾을 수 없습니다!',
      'Too many login failures recently. You must submit a CAPTCHA with your login request.' => '최근에 로그인 실패가 너무 많았습니다. 로그인 요청 시 CAPTCHA를 제출해야 합니다.',
      'Specified pkcs8 keyfile "%s" does not exist!' => '지정된 "%s" pkcs8 키파일이 존재하지 않습니다!',
      'CAPTCHA was not entered correctly.' => 'CAPTCHA가 올바르게 입력되지 않았습니다.',
      'Configure JIRA OAuth. NOTE: Only supports JIRA 6.' => 'JIRA OAuth를 구성합니다. 참고: JIRA 6만 지원합니다.',
      'Found LDAP Account: %s' => 'LDAP 계정을 찾았습니다: %s',
      'Confirm Account Link' => '계정 연결 확인',
      'Verify Email Address' => '이메일 주소 인증',
      'You must log in to take this action.' => '이 작업을 수행하려면 로그인해야 합니다.',
      'Stay' => '머물기',
      'Create a New Account' => '새 계정 만들기',
      'There is no account associated with that email address.' => '해당 이메일 주소와 연결된 계정이 없습니다.',
      'The LDAP extension is not enabled.' => 'LDAP 확장 기능이 활성하되어 있지 않습니다.',
      'There are no registered session engine extensions.' => '등록된 세션 엔진 확장 기능이 없습니다.',
      'JIRA' => 'JIRA',
      'ActiveDirectory Domain' => '액티브디렉터리 도메인',
      'Very Weak' => '매우 취약',
      'Wait For Approval' => '승인 대기',
      'Mobile Phone App (TOTP)' => '휴대전화 앱 (TOTP)',
      'Verify %s' => '%s 확인',
      'Allow Account Unlinking' => '계정 연결 해제 허용',
      'You do not have permission to manage authentication providers.' => '인증 제공자를 관리할 권한이 없습니다.',
      'Allow Registration:' => '등록 허용:',
      'Provide a public key, not a private key!' => '개인 키가 아닌 공개 키를 지정하십시오!',
      'Create Contact Number' => '연락처 번호 만들기',
      'Authentication Tokens' => '인증 토큰',
      'Multi-Factor Login' => '다요소 로그인',
      'Edit Auth Provider' => '인증 제공자 편집',
      'Create Accounts' => '계정 만들기',
      '[SSH Key]' => '[SSH 키]',
      '%s created this key.' => '%s님이 이 키를 만들었습니다.',
      'Mobile App (TOTP)' => '모바일 앱 (TOTP)',
      'Link %s Account' => '%s 계정 연결',
      'The LDAP authentication provider is not enabled.' => 'LDAP 인증 제공자가 활성화되어 있지 않습니다.',
      'Contact Number' => '연락처 번호',
      'Refresh Account' => '계정 갱신',
      'SMS Code' => 'SMS 코드',
      'ldaps://ldaps.example.com/' => 'ldaps://ldaps.example.com/',
      'sn' => 'sn',
      'This provider is not configured to allow linking.' => '이 제공자는 연결을 허용하도록 구성되어 있지 않습니다.',
      'Multi-Factor' => '다요소',
      'This contact number is already in use.' => '이 연락처 번호는 이미 사용 중입니다.',
      'Do you want to enable this provider? Users will be able to log in using linked accounts.' => '이 제공자를 사용하시겠습니까? 사용자는 연결된 계정을 사용하여 파브리케이터에 로그인할 수 있게 됩니다.',
      'JIRA Instance Name' => 'JIRA 인스턴스 이름',
      'Register Account' => '계정 등록',
      'Generate Keypair' => '키 쌍 생성',
      'Unable to set LDAP option \'%s\' to value \'%s\'!' => '\'%s\' LDAP 옵션을 \'%s\' 값으로 설정할 수 없습니다!',
      'You canceled authentication.' => '인증을 취소했습니다.',
      'Accepted By' => '수락인',
      'There are no configured multi-factor providers.' => '구성된 다요소 제공자가 없습니다.',
      'OAuth1 Handshake Token' => 'OAuth1 핸드셰이크 토큰',
      'Failed to get LDAP entries from search result.' => '검색 결과에서 LDAP 엔트리 가져오기를 실패했습니다.',
      'Captcha response is incorrect, try again.' => '캡차 응답이 잘못되었습니다. 다시 시도하십시오.',
      'Add Auth Provider' => '인증 제공자 추가',
      'Factor Type' => '요소 유형',
      'Authentication Config Locked' => '인증 구성 잠김',
      'Auth Factor' => '인증 요소',
      'Confirm Link' => '연결 확인',
      'You can try again, or request a new link via email.' => '다시 시도하거나 이메일을 통해 새 링크를 요청할 수 있습니다.',
      '%s is required!' => '%s은(는) 필수입니다!',
      'Create New Account' => '새 계정 만들기',
      'Log In' => '로그인',
      'Temporary Token Types' => '임시 토큰 유형',
      'Register' => '등록',
      'Anonymous Username' => '익명 사용자 이름',
      'LDAP' => 'LDAP',
      'Already Accepted' => '이미 수락됨',
      'LDAP Exception: %s
    LDAP Error #%d: %s' => 'LDAP 예외: %s
    LDAP 오류 #%s: %s',
      'Log Out Anyway' => '그래도 로그아웃',
      'Engine: Session' => '엔진: 세션',
      'Upload SSH Public Key' => 'SSH 공개 키 업로드',
      'No such user "%s"!' => '"%s" 사용자가 없습니다!',
      'Wait for Approval' => '승인 대기',
      'To reset your password, provide your email address. An email with a login link will be sent to you.' => '비밀번호를 재설정하려면 이메일 주소를 지정하십시오. 로그인 링크가 포함된 이메일이 전송될 것입니다.',
      'Authentication Failure' => '인증 실패',
      'LDAP Username' => 'LDAP 사용자 이름',
      'Send SMS: %s' => 'SMS 보내기: %s',
      'Authentication Sessions' => '인증 세션',
      'Trouble logging in?' => '로그인에 문제가 있습니까?',
      'Search Attributes' => '검색 속성',
      'Message Text' => '메시지 문구',
      'LDAP Exception: %s' => 'LDAP 예외: %s',
      'Previously Invited' => '이전에 초대됨',
      'LDAP search failed.' => 'LDAP 검색을 실패했습니다.',
      'Allow Auto Login' => '자동 로그인 허용',
      '%s renamed this key from "%s" to "%s".' => '%s님이 이 키의 이름을 "%s"에서 "%s"(으)로 변경했습니다.',
      'Allow Linking Accounts' => '계정 연결 허용',
      '%s created this MFA provider.' => '%s님이 이 MFA 제공자를 만들었습니다.',
      'Always Search' => '무조건 검색',
      'Allow Registration' => '등록 허용',
      'Check Your Email' => '이메일을 확인하세요',
      'Captcha' => '캡차',
      'Email record has invalid user PHID!' => '이메일 기록에 유효하지 않은 사용자 PHID가 있습니다!',
      'No Matching Tokens' => '일치하는 토큰이 없음',
      'Auth Provider' => '인증 제공자',
      '%s Account' => '%s 계정',
      'JIRA Base URI' => 'JIRA 베이스 URI',
      'A session is visible only to its owner.' => '세션은 세션 소유자에게만 보입니다.',
      '%s created this message.' => '%s님이 이 메시지를 만들었습니다.',
      'OAuth2 Account' => 'OAuth2 계정',
      'LDAP Hostname' => 'LDAP 호스트 이름',
      'Unable to refresh token!' => '토큰을 갱신할 수 없습니다!',
      'Consumer Key' => '컨슈머 키',
      'Logging in will verify %s as an email address you own.' => '로그인하면 당신이 소유한 이메일 주소로 %s를 인증합니다.',
      'Not a Valid Email Address' => '유효한 이메일 주소가 아닙니다',
      'SSH Keys' => 'SSH 키',
      'LDAP Password: ' => 'LDAP 비밀번호:',
      'Bad Invite Code' => '잘못된 초대 코드',
      'Your remote address has made too many login attempts in a short period of time.' => '짧은 시간 동안 원격 주소에 너무 많은 로그인 시도가 있었습니다.',
      '%s enabled this contact number.' => '%s님이 이 연락처 번호를 활성화했습니다.',
      'WordPress.com' => 'WordPress.com',
      'Default Message' => '기본 메시지',
      'Refresh %s Account' => '%s 계정 갱신',
      'Login cookie was set correctly, but your login session is not valid. Try clearing cookies and logging in again.' => '로그인 쿠키는 올바르게 설정되었으나 로그인 세션이 유효하지 않습니다. 쿠키를 지운 다음 다시 로그인해 보십시오.',
      'MFA Sync' => 'MFA 동기화',
      'Password Hash Algorithms' => '비밀번호 해시 알고리즘',
      'Login Failed' => '로그인 실패',
      'Use TLS' => 'TLS 사용',
      'Username/Password' => '사용자 이름/비밀번호',
      'Customize Message' => '메시지 사용자 지정',
      'Already Associated' => '이미 연결됨',
      'Realname Attributes' => '실명 속성',
      'Base URI is required.' => '파브리케이터 베이스 URI는 필수입니다.',
      'No valid linkable account.' => '연결 가능한 유효한 계정이 없습니다.',
      'Again' => '다시',
      'Confirm %s Account Link' => '%s 계정 연결 확인',
      'Provider Already Configured' => '제공자가 이미 구성되었습니다',
      'Missing Client ID Cookie' => '클라이언트 ID 쿠키가 없습니다',
    );
  }

}
