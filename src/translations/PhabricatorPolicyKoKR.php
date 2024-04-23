<?php

final class PhabricatorPolicyKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
      'Object URI' => '오브젝트 URI',
      'Specify the name of an object to unlock.' => '잠금을 해제할 오브젝트의 이름을 지정하십시오.',
      'Modified object policies.' => '오브젝트 정책을 수정했습니다.',
      'You do not have permission to edit this object.' => '이 프로젝트를 편집할 권한이 없습니다.',
      'Can View' => '볼 수 있음',
      'Only User: %s' => '사용자 전용: %s',
      'Admin Policy' => '관리자 정책',
      'Members of Project...' => '프로젝트의 회원...',
      'Advanced' => '고급',
      'Other Policies' => '다른 정책',
      'Object Policy' => '오브젝트 정책',
      'Can Interact' => '상호작용할 수 있음',
      'UNLOCKING' => '잠금 해제',
      'Support for Policies' => '정책 지원',
      'Members Of' => '소속:',
      'OBJECT' => '오브젝트',
      'Note:' => '참고:',
      'You do not have permission to view policy details.' => '정책의 세부 정보를 볼 권한이 없습니다.',
      'Can Edit' => '편집할 수 있음',
      'Invisible objects are ignored.' => '보이지 않는 오브젝트는 무시됩니다.',
      '[%s] (%s) %s // %s' => '[%s] (%s) %s // %s',
      'Invalid Policy' => '유효하지 않은 정책',
      'Members of Project: %s' => '프로젝트의 회원: %s',
      'Custom "%s" Policy' => '사용자 지정 "%s" 정책',
      'Custom Policy' => '사용자 지정 정책',
      'Basic Policies' => '기본 정책',
      'All Users' => '모든 사용자',
      'You do not have permission to view this object.' => '이 오브젝트를 볼 권한이 없습니다.',
      'Policy Details: %s' => '정책 세부사항: %s',
      'Unknown Policy' => '알 수 없는 정책',
      'Policy \'%s\' is not a global policy!' => '\'%s\' 정책은 전역 정책이 아닙니다!',
      'This object has an unknown or invalid policy setting ("%s").' => '이 오브젝트는 알 수 없거나 유효하지 않은 정책 설정("%s")을 가지고 있습니다.',
      'Can Join' => '가입할 수 있음',
      'You do not have permission to interact with this object.' => '이 오브젝트와 상호작용할 권한이 없습니다.',
      'User Policy' => '사용자 정책',
    );
  }

}
