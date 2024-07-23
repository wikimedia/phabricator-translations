<?php

final class PhabricatorRepositoryKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
      'Unknown repository type \'%s\'!' => '알 수 없는 저장소 유형 \'%s\'!',
      'Push Event' => '푸시 이벤트',
      'Unknown VCS \'%s\'!' => '알 수 없는 VCS \'%s\'!',
      '%s set the copy time limit for this repository to %s seconds.' => '%s님이 이 저장소의 복사 시간 제한을 %s초로 설정했습니다.',
      'Specify either --promote or --demote, but not both.' => '--promote 또는 --demote를 지정하되, 둘 다 지정하지 마십시오.',
      '%s set the encoding for this repository to %s.' => '%s님이 이 저장소의 인코딩을 %s(으)로 설정했습니다.',
      'Unable to identify parent "%s"!' => '"%s" 부모를 식별할 수 없습니다!',
      'Repository "%s" does not exist!' => '"%s" 저장소가 존재하지 않습니다!',
      'bookmark:' => '책갈피:',
      'REBUILD' => '다시 빌드',
      'Unexpected end of file.' => '파일의 끝을 예측할 수 없습니다.',
      'Result Details' => '상세 결과',
      'Repository ("%s") does not exist, or you do not have permission to see it.' => '저장소("%s")가 존재하지 않거나 저장소를 볼 권한이 없습니다.',
      'Specify --service or --remove-service.' => '--service 또는 --remove-service를 지정하십시오.',
      '%s set the touch limit for this repository to %s paths.' => '%s님이 이 저장소의 터치 제한을 %s개의 패스로 설정했습니다.',
      '%s changed the copy time limit for this repository from %s seconds to %s seconds.' => '%s님이 이 저장소의 복사 시간 제한을 %s초에서 %s초로 변경했습니다.',
      'Configure repositories.' => '저장소를 구성합니다.',
      'Cluster repository ("%s") is out of sync on this node ("%s").' => '클러스터 저장소("%s")는 이 노드("%s")와 동기화되지 않습니다.',
      'Result Name' => '결과 이름',
      'Reparse all steps which have not yet completed.' => '아직 끝나지 않은 모든 단계를 다시 구문 분석합니다.',
      '%s removed %s as the default branch.' => '%s님이 기본 브랜치로서 %s을(를) 제거했습니다.',
      'Create a new Mercurial repository.' => '새로운 Mercurial 저장소를 만듭니다.',
      'Expression "%s" is not a valid regular expression. Note that you must include delimiters.' => '"%s" 식은 유효한 정규 표현식이 아닙니다. 구분 문자를 포함해야 합니다.',
      'Starting update for repository "%s".' => '"%s" 저장소의 업데이트를 시작합니다.',
      '%s set the repository "Import Only" path to %s.' => '%s님이 "가져오기 전용" 패스를 %s(으)로 설정했습니다.',
      'Failed to read stdin.' => 'stdin 읽기를 실패했습니다.',
      '%s ♻ %s' => '%s ♻ %s',
      'Unexpected infinite loop in %s!' => '%s에서 예측하지 못한 무한 루프가 있습니다!',
      'Specify one or more repositories to mark imported.' => '가져온 것으로 표시할 하나 이상의 저장소를 지정하십시오.',
      'Short Names' => '짧은 이름',
      '%s removed the touch limit (%s paths) for this repository.' => '%s님이 이 저장소의 터치 제한(%s개의 패스)을 제거했습니다.',
      'Unable to generate patch: %s' => '패치를 생성할 수 없습니다: %s',
      'Moved repository "%s" to cluster service "%s".' => '"%s" 저장소를 "%s" 클러스터 서비스로 이동했습니다.',
      'Repository "%s" is already imported.' => '"%s" 저장소는 이미 가져왔습니다.',
      '(This is a write request.)' => '(이것은 쓰기 요청입니다.)',
      'Error while updating the "%s" repository.' => '"%s" 저장소를 업데이트하는 도중 오류가 발생했습니다.',
      '%s enabled this URI.' => '%s님이 이 URI를 활성화했습니다.',
      'Show a list of repositories.' => '저장소 목록을 표시합니다.',
      'Repository "%s" is currently updating.' => '"%s" 저장소는 현재 업데이트 중입니다.',
      '%s changed the "Import Only" path from %s to %s.' => '%s님이 "가져오기 전용" 패스를 %s에서 %s(으)로 변경했습니다.',
      'CHANGES TO REPOSITORY DESCRIPTION' => '저장소 설명의 변경사항',
      'Show changes, but do not make any changes.' => '변경사항을 표시하지만 변경을 하지는 않습니다.',
      '(%s) %s' => '(%s) %s',
      '<%s: %s>' => '<%s: %s>',
      'Apply changes without prompting.' => '물어보지 않고 변경사항을 적용합니다.',
      'Got an update message for repository "%s"!' => '"%s" 저장소의 업데이트 메시지를 받았습니다!',
      'Write Wait (us)' => '쓰기 대기 (us)',
      'EMAIL' => '이메일',
      'Repositories must have a name.' => '저장소에 이름은 필수입니다.',
      'No I/O' => 'I/O 없음',
      'No repositories found for this query.' => '이 쿼리에 대한 저장소를 찾을 수 없습니다.',
      'Unknown VCS "%s"!' => '알 수 없는 VCS "%s"!',
      'tag' => '태그',
      'The remote URI has leading or trailing whitespace.' => '원격 URI의 뒤에 공백이 있습니다.',
      'Flags "--all-identities" and "--raw" are not compatible.' => '플래그 "--all-identities"와 "--raw"는 호환되지 않습니다.',
      'Show simpler output.' => '더 단순한 출력을 표시합니다.',
      '%s changed the touch limit for this repository from %s paths to %s paths.' => '%s님이 이 저장소의 터치 제한을 %s개의 패스에서 %s개의 패스로 변경했습니다.',
      'Append' => '뒤에 추가',
      '%s disabled publishing for this repository.' => '%s님이 이 저장소의 게시를 비활성화했습니다.',
      'DATA AT RISK' => '위험에 처한 데이터',
      'USER' => '사용자',
      'A repository\'s push events are visible to users who can see the repository.' => '저장소의 푸시 이벤트는 저장소를 볼 수 있는 사용자들에게 공개됩니다.',
      'New Repository' => '새로운 저장소',
      'Pushing "%s" to mirrors...' => '"%s"을(를) 미러로 푸시하는 중...',
      '%s enabled publishing for this repository.' => '%s님이 이 저장소의 게시를 활성화했습니다.',
      '%s set the callsign for this repository to %s.' => '%s님이 이 저장소의 콜사인을 %s(으)로 설정했습니다.',
      'Repository "%s" is not a cluster repository: it is not bound to an Almanac service.' => '"%s" 저장소는 클러스터 저장소가 아닙니다: Almanac 서비스에 연동되지 않습니다.',
      'Mirror' => '미러',
      'Move' => '이동',
      'Blocked By' => '차단 수행자',
      'Information about the commit author.' => '커밋을 만든 사람에 관한 정보입니다.',
      '%s set the default branch to %s.' => '%s님이 기본 브랜치를 %s(으)로 설정했습니다.',
      'This repository does not support Git LFS, so Git LFS URIs can not be generated for it.' => '이 저장소가 Git LFS를 지원하지 않으므로 이를 위한 Git LFS URI를 생성할 수 없습니다.',
      'Parsing "%s"...' => '"%s"의 구문을 분석하는 중...',
      'The commit message.' => '커밋 메시지입니다.',
      '%s changed the default branch from %s to %s.' => '%s님이 기본 브랜치를 %s에서 %s(으)로 변경했습니다.',
      'Error while pushing "%s" repository to mirrors.' => '"%s" 저장소를 미러에 푸시하는 동안 오류가 발생했습니다.',
      'SSH' => 'SSH',
      'Service "%s" is actively bound to more than one device (%s).' => '"%s" 서비스는 한 대를 초과하는 장치(%s)에 연동되어 있습니다.',
      'No device or service named "%s" exists.' => '"%s" 이름의 장치나 서비스가 존재하지 않습니다.',
      '%s moved storage for this repository from %s to %s.' => '%s님이 이 저장소의 스토리지를 %s에서 %s(으)로 이동했습니다.',
      'Not a subversion repository!' => '서브버전 저장소가 아닙니다!',
      'Unknown SVN file kind \'%s\'.' => '알 수 없는 SVN 파일 종류 \'%s\'.',
      'This repository is still importing.' => '이 저장소는 현재 가져오는 중입니다.',
      'Show additional debugging information.' => '추가 디버깅 정보를 표시합니다.',
      'All publishing is disabled for this repository.' => '이 저장소의 모든 게시는 비활성화되어 있습니다.',
      'All Repositories' => '모든 저장소',
      'Specify --service or --remove-service, but not both.' => '--service 또는 --remove-service를 지정하되, 둘 다 지정하지 마십시오.',
      '%s set the short name of this repository to %s.' => '%s님이 이 저장소의 짧은 이름을 %s(으)로 설정했습니다.',
      'Repository "%s" is already importing.' => '"%s" 저장소는 이미 가져오고 있습니다.',
      'DETAILS' => '세부 사항',
      'No such %s \'%s\' in repository!' => '저장소에 해당 %s \'%s\'이(가) 없습니다!',
      'Unsupported VCS "%s"!' => '지원하지 않는 VCS "%s"!',
      'No changes to identity.' => '식별할 변경사항이 없습니다.',
      'Create Git Repository' => 'Git 저장소 만들기',
      '%s changed the push policy of this repository from %s to %s.' => '%s님이 이 저장소의 푸시 정책을 %s에서 %s(으)로 변경했습니다.',
      'No repository service "%s" exists.' => '"%s" 저장소 서비스가 존재하지 않습니다.',
      'Found no identities for email address "%s".' => '이메일 주소 "%s"의 아이덴티티를 발견하지 못했습니다.',
      '%s changed this URI from "%s" to "%s".' => '%s님이 이 URI를 "%s"에서 "%s"(으)로 변경했습니다.',
      'Shows repository in email.' => '이메일에 저장소를 표시합니다.',
      'Unknown repository "%s"!' => '알 수 없는 저장소 "%s"!',
      'Sync Event %d' => '동기화 이벤트 %s',
      'Expected \'%s\', got %s.' => '\'%s\'을(를) 예측했으나 %s을(를) 가져왔습니다.',
      'URI %d %s' => 'URI %s %s',
      'Service "%s" is not bound to any devices.' => '"%s" 서비스는 어떠한 장치에도 바인드되지 않았습니다.',
      'Do not perform any writes.' => '어떠한 쓰기도 수행하지 않습니다.',
      'There are no repositories on the selected device or service.' => '선택된 장치나 서비스에 저장소가 없습니다.',
      'Repository status "%s" is not valid. Valid statuses are: %s.' => '"%s" 저장소 상태는 유효하지 않습니다. 유효한 상태는 다음과 같습니다: %s.',
      '(This is a read request.)' => '(이것은 읽기 요청입니다.)',
      'You must use "--all" if you specify "--min-date".' => '"--min-date"를 지정하는 경우 "--all"을 사용해야 합니다.',
      'Information about the current audit status.' => '현재 감사 상태에 관한 정보입니다.',
      'Sync Event' => '동기화 이벤트',
      'All Push Logs' => '모든 푸시 기록',
      'Failed to parse line \'%s\'.' => '\'%s\' 줄의 구문 분석을 실패했습니다.',
      'tag:' => '태그:',
      'Unable to parse filesize limit: %s' => '파일 크기 제한의 구문을 분석할 수 없습니다: %s',
      'The repository this commit belongs to.' => '이 커밋이 속한 저장소입니다.',
      'You can not attach audit authority for a user with no PHID.' => 'PHID 없이 사용자의 감사 기관을 첨부할 수 없습니다.',
      '%s removed the %s encoding configured for this repository.' => '%s님이 이 저장소에 구성된 %s 인코딩을 제거했습니다.',
      '%s changed the short name of this repository from %s to %s.' => '%s님이 이 저장소의 짧은 이름을 %s에서 %s(으)로 변경했습니다.',
      'Changes to this URI will be observed and pulled.' => '파브리케이터는 이 URI의 변경사항을 관찰하고 복사할 것입니다.',
      '%s disabled this URI.' => '%s님이 이 URI를 비활성화했습니다.',
      'Marking repository "%s" as imported.' => '"%s" 저장소를 가져온 것으로 표시합니다.',
      'Error While Initializing Repository' => '저장소를 초기화하는 동안 오류가 발생했습니다',
      '%s moved storage for this repository from %s to local.' => '%s님이 이 저장소의 스토리지를 %s에서 로컬로 이동했습니다.',
      'Apply these changes?' => '이 변경사항을 적용하시겠습니까?',
      'Path "%s" is not unknown.' => '"%s" 경로는 파브리케이터가 알지 못합니다.',
      '[Push]' => '[푸시]',
      'BRANCHES' => '브랜치',
      'Expected %s or %s, got %s.' => '%s 또는 %s을(를) 예측하였으나 %s을(를) 가져왔습니다.',
      'Hook Wait (us)' => '훅 대기 (us)',
      '%s updated the description for this repository.' => '%s님이 이 저장소를 위한 설명을 업데이트했습니다.',
      'Path was last changed at %s.' => '경로가 %s에 마지막으로 바뀌었습니다.',
      'NULL' => 'NULL',
      'Do not prompt for confirmation.' => '확인을 묻지 않습니다.',
      'A repository\'s push logs are visible to users who can see the repository.' => '저장소의 푸시 기록은 저장소를 볼 수 있는 사용자들에게 공개됩니다.',
      'HTTP' => 'HTTP',
      '%s (remote: "%s", local: "%s")' => '%s (원격: "%s", 로컬: "%s")',
      'HTTPS' => 'HTTPS',
      'Information about the committer.' => '커밋 수행자에 관한 정보입니다.',
      'Remote Repositories' => '원격 저장소',
      'The URI protocol is unrecognized. It should begin with "%s", "%s", "%s", "%s", "%s", "%s", or be in the form "%s".' => 'URI 프로토콜을 인식할 수 없습니다. "%s", "%s", "%s", "%s", "%s", "%s"으로 시작하거나 "%s" 양식 안에 있어야 합니다.',
      'Rejected: Oversized File' => '거부됨: 너무 큰 파일',
      'This URI will be hidden from users.' => '이 URI는 사용자로부터 숨겨집니다.',
      'Read Wait (us)' => '읽기 대기 (us)',
      'Unable to parse copy time limit, specify a positive number of seconds.' => '복사 시간 제한의 구문을 분석할 수 없습니다. 양수로 초를 지정하십시오.',
    );
  }

}
