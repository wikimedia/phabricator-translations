<?php

final class PhabricatorFeedKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
  'Call %s before publishing!' => '게시하기 전에 %s을(를) 호출하세요!',
  'IMPORTANT: Feed hooks are deprecated and have been replaced by Webhooks.

You can configure Webhooks in Herald. This configuration option will be removed
in a future version of the software.

(This legacy option may be configured with a list of URIs; feed stories will
send to these URIs.)' => '중요: 피드 훅은 구식이며 웹훅으로 대체되었습니다.

Herald에서 웹훅을 구성할 수 있습니다. 이 구성 옵션은 향후 소프트웨어 버전에서 제거될 예정입니다.

(이 레거시 옵션은 URI 목록으로 구성될 수 있으며, 피드 스토리는 이러한 URI로 전송됩니다.)',
  'Dictionary with various data of the story' => '스토리에 관한 다양한 정보를 담은 딕셔너리',
  'All Stories' => '모든 스토리',
  'Query the feed for stories' => '스토리를 위해 피드를 검색',
  'Story type must be a valid class name and must subclass %s. \'%s\' is not a subclass of %s.' => '스토리 유형은 유효한 클래스 이름이어야 하며 %s을(를) 하위 클래스로 가져야 합니다. \'%s\'은(는) %s의 하위 클래스가 아닙니다.',
  'Full HTML presentation of story' => '스토리의 전체 HTML 표현',
  '(Unable to render story of class %s for Doorkeeper.)' => '(%s 클래스의 스토리를 Doorkeeper용으로 렌더링할 수 없습니다.)',
  'Story has no primary object!' => '스토리에 주 객체가 없습니다!',
  'Republishing story...' => '스토리를 재게시 중...',
  'Story is asking for an object it did not request (\'%s\')!' => '스토리가 요청하지 않은 객체(\'%s\')를 요구하고 있습니다!',
  'Simple one-line plain text representation of story' => '스토리를 한 줄로 간단하게 표현한 텍스트',
  'Comma separated list of PHIDs or object names.' => '쉼표로 구분된 PHID나 객체 이름 목록입니다.',
  'Include Projects' => '프로젝트 포함',
  'Specify a story key to republish.' => '스토리를 다시 게시하려면 스토리 키를 지정하세요.',
  'The specified "Created Before" date is earlier in time than the specified "Created After" date, so this query can never match any results.' => '지정된 "생성 이전" 날짜가 지정된 "생성 이후" 날짜보다 이전이므로 이 쿼리는 어떤 결과도 찾을 수 없습니다.',
  'The specified "Occurs Before" date is earlier in time than the specified "Occurs After" date, so this query can never match any results.' => '지정된 "발생 이전" 날짜가 지정된 "발생 이후" 날짜보다 이전이므로 이 쿼리는 어떤 결과도 찾을 수 없습니다.',
  'Republish a feed event to all consumers.' => '피드 이벤트를 모든 컨슈머에게 재게시합니다.',
  'Include Users' => '사용자 포함',
  'Feed Story Failed to Render (%s)' => '피드 스토리 렌더링 실패 (%s)',
  'Story' => '스토리',
  'Specify exactly one story key to republish.' => '재게시할 스토리 키를 정확히 하나만 지정하세요.',
  'You must call %s if you %s!' => '%2$s 하려면 %s을(를) 호출해야 합니다!',
  'Unloaded Object \'%s\'' => '언로드된 객체 \'%s\'',
  'No story exists with key "%s"!' => '"%s" 키를 가진 스토리는 존재하지 않습니다!',
  'Feed options.' => '피드 옵션입니다.',
  'Deprecated.' => '구식입니다.',
  'No Stories.' => '스토리가 없습니다.',
  'objectPHID inputs didn\'t match any known objects.' => 'objectPHID 입력이 어떤 알려진 객체와도 일치하지 않습니다.',
  'Story contains only the title of the story' => '스토리가 스토리 제목만을 포함합니다',
  'Object PHIDs' => '객체 PHID',
  'Unsupported view type, possibles are: %s' => '지원되지 않는 보기 유형입니다. 가능한 옵션: %s',
  'Object Types' => '객체 유형',
  'Transaction Logs' => '트랜잭션 로그',
  'Trying to retrieve markup field key "%s", but this feed story did not request it be rendered.' => '마크업 필드 키 "%s"을 가져오려고 시도했지만, 이 피드 스토리는 해당 필드의 렌더링을 요청하지 않았습니다.',
  'Feed Stories' => '피드 스토리',
  'Feed query minimum range must be lower than maximum range.' => '피드 쿼리의 최소 범위는 최대 범위보다 작아야 합니다.',
  'Unknown rendering target: %s' => '알 수 없는 렌더링 대상: %s',
  'Include stories about projects I am a member of.' => '내가 구성원인 프로젝트에 대한 스토리도 포함합니다.',
  'All Transactions' => '모든 트랜잭션',
  'Story type must be a valid class name and must subclass %s. \'%s\' is not a loadable class.' => '스토리 유형은 유효한 클래스 이름이어야 하며 %s을(를) 하위 클래스로 가져야 합니다. \'%s\'은(는) 로드 가능한 클래스가 아닙니다.',
  'Feed story (with key "%s") does not exist or could not be loaded.' => '피드 스토리(키 "%s")가 존재하지 않거나 로드할 수 없습니다.',
  'Review Recent Activity' => '최근 활동 검토',
);
  }

}
