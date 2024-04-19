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
      'Priority of the task.' => '태스크의 우선 순위.',
      'Assignee' => '할당됨',
      '%s closed this task as a duplicate of %s.' => '%s님이 이 작업을 %s의 중복으로 닫았습니다.',
      'Recently Closed' => '최근에 닫힘',
      '[Maniphest]' => '[매니페스트]',
      'Edit Related Tasks...' => '관련 작업 편집하기...',
      'No tasks found.' => '작업을 찾을 수 없습니다.',
      'Finished' => '완료',
      'All Time' => '항상',
      'Assign task to me' => '내게 작업 할당하기',
      'Owner PHID' => '소유자 PHID',
      'Closed, Duplicate' => '닫힘, 중복',
      '%s created this task.' => '%s님이 이 작업을 만들었습니다.',
      'Parent IDs' => '부모 ID',
      'Select All' => '모두 선택',
      'User who is responsible for the task.' => '작업에 책임을 지는 사용자입니다.',
      '(No Project)' => '(프로젝트 없음)',
      'Feature Request' => '기능 요청',
      'Priority Name' => '우선순위 이름',
      'File PHID ("%s") is invalid, or you do not have permission to view it.' => '파일 PHID("%s")가 유효하지 않거나 볼 권한이 없습니다.',
      'Search for tasks owned by a user from a list.' => '목록에서 사용자가 소유한 작업을 검색합니다.',
      'Validation of "%s"' => '"%s" 확인',
      'Oldest (All)' => '가장 오래됨 (모두)',
      'High' => '높음',
      '%s renamed this task from %s to %s.' => '%s님이 이 작업의 이름을 %s에서 %s(으)로 바꾸었습니다.',
      '%s removed %s revision(s): %s.' => '%s님이 판 %s개를 제거했씁니다: %s.',
      '● %s' => '● %s',
      'Opened' => '열림',
      '%s closed %s as a duplicate.' => '%s님이 %s을(를) 중복으로 닫았습니다.',
      'You can not interact with this task because it is locked.' => '이 작업이 잠겨있기 때문에 상호작용할 수 없습니다.',
      '%s closed this task as a duplicate.' => '%s님이 이 작업을 중복으로 닫았습니다.',
      '%s merged %s task(s): %s.' => '%s님이 작업 %s개를 병합했습니다: %s.',
      'By Project' => '프로젝트별',
      'Subscribed' => '구독됨',
      'Unknown Status' => '알 수 없는 상태',
      'Assigned' => '할당됨',
      'Read information about tasks.' => '작업에 관한 정보를 읽습니다.',
      'Unknown status query \'%s\'!' => '알 수 없는 상태 쿼리 \'%s\'!',
      'Page Size' => '페이지 크기',
      'Lock Error' => '잠금 오류',
      'Clear Selection' => '선택 항목 지우기',
      'Changed task status to "%s".' => '작업 상태를 "%s"(으)로 바꾸었습니다.',
    );
  }

}
