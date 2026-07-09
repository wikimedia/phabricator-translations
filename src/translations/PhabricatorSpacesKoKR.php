<?php

final class PhabricatorSpacesKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
  '%s updated the space description for %s.' => '%s님이 %s에 대한 공간 설명을 업데이트했습니다.',
  '(This error generally indicates that %s is enabled, but there are no spaces with a "%s" view policy. These settings are contradictory and imply a misconfiguration.)' => '(이 오류는 일반적으로 %s이(가) 활성화되어 있지만 "%s" 보기 정책이 적용된 공간이 없음을 나타냅니다. 이러한 설정은 서로 모순되며 구성 오류를 의미합니다.)',
  'Spaces User Guide' => '공간 사용자 가이드',
  'Hide Active Spaces' => '활성 공간 숨기기',
  '%s updated the space description.' => '%s님이 공간 설명을 업데이트했습니다.',
  '%s archived space %s.' => '%s님이 공간 %s을(를) 보관했습니다.',
  'PHID of the policy space this object is part of.' => '이 객체가 속한 정책 공간의 PHID입니다.',
  'Default edit policy for newly created spaces.' => '새로 생성된 공간에 대한 기본 편집 정책입니다.',
  'Only the first space created can be the default space, and it must remain the default space evermore.' => '최초로 생성된 공간만 기본 공간이 될 수 있으며, 이후에도 항상 기본 공간으로 유지되어야 합니다.',
  'Search for objects in certain spaces.' => '특정 공간에서 물체를 검색합니다.',
  'Activate Space: %s' => '공간 활성화: %s',
  'Support for Spaces' => '공간 지원',
  '%s renamed space %s from %s to %s.' => '%s님이 공간 %s의 이름을 %s에서 %s(으)로 변경했습니다.',
  'Create a Space' => '공간 만들기',
  '%s activated this space.' => '%s님이 이 공간을 활성화 시켰습니다.',
  'Archive Space: %s' => '공간 보관하기: %s',
  'Spaces must have a name.' => '공간에 이름은 필수입니다.',
  'Existing objects in this Space will be hidden from query results by default.' => '이 공간에 있는 기존 객체는 기본적으로 쿼리 결과에서 숨겨집니다.',
  '%s made this the default space.' => '%s님이 이 공간을 기본 공간으로 만들었습니다.',
  '%s archived this space.' => '%s님이 이 공간을 보관했습니다.',
  'Type a space name...' => '공간 이름을 입력하세요...',
  'Existing objects will no longer be hidden from query results.' => '기존 객체는 더 이상 쿼리 결과에서 숨겨지지 않습니다.',
  'You do not have permission to create spaces.' => '새 객체를 만들 권한이 없습니다.',
  'Ask someone to give you access to a space so you can view and create objects.' => '누군가에게 당신이 객체를 보고 만들 수 있도록 공간에 접근할 수 있게 해달라고 요청하세요.',
  'Default Space' => '기본 공간',
  'Archive Space' => '공간 보관하기',
  'CHANGES TO SPACE DESCRIPTION' => '공간 설명의 변경사항',
  'Default view policy for newly created spaces.' => '새로 생성된 공간에 대한 기본 보기 정책입니다.',
  'Spaces' => '공간',
  'Drift Aimlessly' => '목적 없이 표류하기',
  'Browse Spaces' => '공간 탐색',
  'Can Create Spaces' => '공간을 만들 수 있음',
  'All Spaces' => '모든 공간',
  'Control access to groups of objects.' => '객체 그룹에 대한 접근 권한을 제어합니다.',
  'If you activate this space, you will be able to create objects inside it again.' => '이 공간을 활성화하면 그 안에 다시 객체를 만들 수 있습니다.',
  'Create Space' => '공간 만들기',
  'Log in, or ask someone to create a public space which logged out users are permitted to access.' => '로그인하거나, 로그아웃한 사용자도 접근할 수 있는 공개 공간을 만들어 달라고 다른 사람에게 요청하세요.',
  'Policy Namespaces' => '정책 이름공간',
  '%s activated space %s.' => '%s님이 공간 %s을(를) 활성화 시켰습니다.',
  '%s created this space.' => '%s님이 이 공간을 만들었습니다.',
  'Space %s: %s' => '공간 %s: %s',
  'No Access to Spaces' => '공간에 접근할 수 없음',
  '%s renamed this space from %s to %s.' => '%s님이 이 공간의 이름을 %s에서 %s(으)로 변경했습니다.',
  'No spaces found.' => '공간을 찾을 수 없습니다.',
  'This install uses spaces to organize objects, but logged out users do not have access to any spaces.' => '이 설치에서는 공간을 사용하여 객체를 구성하지만, 로그아웃한 사용자는 어떤 공간에도 접근할 수 없습니다.',
  'Edit Space' => '공간 편집하기',
  '%s made space %s the default space.' => '%s님이 %s을(를) 기본 공간으로 만들었습니다.',
  'NOTE: You are creating the **default space**. All existing objects will be put into this space. You must create a default space before you can create other spaces.' => '참고: **기본 공간**을 만들고 있습니다. 기존의 모든 객체는 이 공간으로 이동합니다. 다른 공간을 생성하려면 먼저 기본 공간을 만들어야 합니다.',
  'Activate Space' => '공간 활성화',
  'Show Only Active Spaces' => '활성화된 공간만 표시',
  'Policy namespaces to segment object visibility throughout your instance.' => '정책 이름공간을 사용하여 인스턴스 전체에서 객체 공개 여부를 구분할 수 있습니다.',
  'If you archive this Space, you will no longer be able to create new objects inside it.' => '이 공간을 보관 처리하면 더 이상 이 공간 안에 새로운 객체를 만들 수 없습니다.',
  '%s created space %s.' => '%s님이 공간 %s을(를) 만들었습니다.',
  'Active Spaces' => '활성 공간',
  'This install uses spaces to organize objects, but your account does not have access to any spaces.' => '이 설치에서는 공간을 사용하여 객체를 구성하지만, 사용자 계정에는 어떤 공간에도 접근 권한이 없습니다.',
);
  }

}
