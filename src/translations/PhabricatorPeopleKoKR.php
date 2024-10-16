<?php

final class PhabricatorPeopleKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
      'You are creating a new **standard** user account.' => '새로운 **표준** 사용자 계정을 만들고 있습니다.',
      'Users can not be permanently destroyed from the web interface. See %s in the documentation for more information.' => '사용자는 웹 인터페이스에서 영구적으로 제거될 수 없습니다. 더 자세한 정보는 문서의 %s 항목을 참고하십시오.',
      'You can not change usernames because you are not an administrator. Only administrators can change usernames.' => '관리자가 아니기 때문에 사용자 이름을 변경할 수 없습니다. 오직 관리자만 사용자 이름을 변경할 수 있습니다.',
      'Event Date' => '이벤트 날짜',
      'Stores the real name of the user, like "Abraham Lincoln".' => '"에이브러햄 링컨"처럼 사용자의 실명을 저장합니다.',
      'You must be an administrator to create administrators.' => '관리자를 만들려면 관리자여야 합니다.',
      'Approves a user.' => '사용자를 승인합니다.',
      'Send Invitations' => '초대 보내기',
      '[%s] Account Login Link' => '[파브리케이터] 계정 로그인 링크',
      'User has not been created yet!' => '사용자가 아직 생성되지 않았습니다!',
      'Musician' => '음악가',
      '[%s] Account Password Link' => '[파브리케이터] 계정 비밀번호 링크',
      'Already Approved' => '이미 승인됨',
      'Relationships' => '관계',
      'User has already been created!' => '사용자가 이미 생성되어 있습니다!',
      'Only administrators can disapprove users.' => '관리자만이 사용자를 미승인할 수 있습니다.',
      'Not an Administrator' => '관리자가 아닙니다',
      'Show Only Bots' => '봇만 보기',
      '[%s] Username Changed' => '[파브리케이터] 사용자 이름이 변경됨',
      'The user\'s real name.' => '사용자의 실명입니다.',
      'User does not belong to any projects.' => '사용자는 어떠한 프로젝트에도 속해있지 않습니다.',
      'Turn a user account into an administrator account.' => '사용자 계정을 관리자 계정으로 전환합니다.',
      'Bot' => '봇',
      'Create New Bot' => '새로운 봇 만들기',
      'New username is required.' => '새로운 사용자 이름은 필수입니다.',
      'Account Menu' => '계정 메뉴',
      'Approved' => '승인됨',
      '[%s] Welcome to %s' => '[파브리케이터] 파브리케이터에 오신 것을 환영합니다',
      'You do not have permission to browse the user directory.' => '사용자 디렉터리를 둘러볼 권한이 없습니다.',
      'Roles' => '역할',
      'Enabled user account "%s".' => '"%s" 사용자 계정을 활성화했습니다.',
      'Usernames' => '사용자 이름',
      'Create New User' => '새로운 사용자 만들기',
      'Bots' => '봇',
      'You do not have permission to create users.' => '사용자를 만들 권한이 없습니다.',
      'User Profiles' => '사용자 프로파일',
      'Mailing Lists' => '메일링 리스트',
      'Configure User Forms' => '사용자 폼 구성',
      '  %s' => '  %s',
      'Rename User' => '사용자 이름 바꾸기',
      'You are creating a new **bot** user account.' => '새로운 **봇** 사용자 계정을 만들고 있습니다.',
      'Hide Bots' => '봇을 숨기기',
      '%s approved this user.' => '%s님이 이 사용자를 승인했습니다.',
      'users' => '사용자',
      'Approve User' => '사용자 승인',
      '%s disabled this user.' => '%s님이 이 사용자를 비활성화했습니다.',
      'emails' => '이메일',
      'Login: Failure' => '로그인: 실패',
      'administrators' => '관리자',
      'You can not send an email login link to this email address because the associated user account is disabled.' => '관련 사용자 계정이 비활성화되어 있기 때문에 이 이메일 주소로 이메일 로그인 링크를 보낼 수 없습니다.',
      'Affected User' => '영향을 받는 사용자',
      'message' => '메시지',
      'Animal' => '동물',
      'Email address must be @%s' => '이메일 주소는 @%s여야 합니다',
      'Approve' => '승인',
      'User account "%s" is not disabled. You can only enable accounts that are disabled.' => '"%s" 사용자 계정이 비활성화되어 있지 않습니다. 비활성화된 계정만 활성화할 수 있습니다.',
      '%s renamed this user from %s to %s.' => '%s님이 이 사용자의 이름을 %s에서 %s(으)로 변경했습니다.',
      'Another user already has the username "%s".' => '다른 사용자가 이미 "%s" 계정명을 보유하고 있습니다.',
      '[%s] Email Verification' => '[파브리케이터] 이메일 확인',
      'Projects (%s)' => '프로젝트 (%s)',
      'Save Profile' => '프로파일 저장',
      'You do not have permission to disable or enable users.' => '사용자를 비활성화하거나 활성화할 권한이 없습니다.',
      'Can\'t remove primary email!' => '1차 이메일을 제거할 수 없습니다!',
      'User Accounts' => '사용자 계정',
      'You can use this link to reset your password:
      %s
    ' => '이 링크를 사용하여 파브리케이터 비밀번호를 재설정할 수 있습니다:
      %s',
      'Anyone' => '누구나',
      'Your %s account (%s) has been approved by %s. You can login here:' => '파브리케이터 계정(%s)은 %s님이 승인하였습니다. 여기에서 로그인할 수 있습니다:',
      'You are creating a new **mailing list** user account.' => '새로운 **메일링 리스트** 사용자 계정을 만들고 있습니다.',
      'Activity Log %d' => '활동 기록 %s',
      'Type a username...' => '사용자 이름을 입력하십시오...',
      'Old Username: %s' => '과거 사용자 이름: %s',
      'Create Standard User' => '표준 사용자 만들기',
      'User Email' => '사용자 이메일',
      'User does not own email!' => '사용자가 이메일을 보유하고 있지 않습니다!',
      'Verified' => '확인됨',
      'Browse Log Types' => '브라우저 로그 유형',
      'Create User' => '사용자 만들기',
      'Approve or reject the user.' => '사용자를 승인하거나 거부합니다.',
      'Email: Verify Address' => '이메일: 주소 확인',
      'Activity Log ID: #%d' => '활동 로그 ID: #%s',
      'Can Disable Users' => '사용자를 비활성화할 수 있음',
      'Research' => '연구',
      'You must be an administrator to approve users.' => '사용자를 승인하려면 관리자여야 합니다.',
      'External Account Identifier' => '외부 계정 식별자',
      'Mailing List' => '메일링 리스트',
      'Only you can edit your information.' => '당신만이 당신의 정보를 편집할 수 있습니다.',
      'Show Only Mailing Lists' => '메일링 리스트만 표시',
      'Verified email addresses can not be reassigned.' => '확인된 이메일 주소를 다시 할당할 수 없습니다.',
      'Enable a disabled user account.' => '비활성화된 사용자 계정을 활성화합니다.',
      'Hi %s' => '안녕하세요 %s님',
      '    Username: %s' => '    사용자 이름: %s',
      'Email Invitations' => '이메일 초대',
      'You can not enable or disable your own account.' => '자신의 계정을 활성화하거나 비활성화할 수 없습니다.',
      'Logout' => '로그아웃',
      'Enable User?' => '사용자를 활성화할까요?',
      'IP' => 'IP',
      'Unapproved' => '미승인',
      'New Username' => '새 사용자 이름',
      'User PHID' => '사용자 PHID',
      'Create Bot User' => '봇 사용자 만들기',
      'Email: Recovery Link' => '이메일: 복구 링크',
      'Account Type' => '계정 유형',
    );
  }

}
