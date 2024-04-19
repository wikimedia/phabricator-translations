<?php

final class PhabricatorNuanceKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
      'Branch %s' => '브랜치 %s',
      'GitHub Event' => 'GitHub 이벤트',
      'Unknown Event Type ("%s")' => '알 수 없는 이벤트 유형 ("%s")',
      'All Items' => '모든 항목',
      'Got a complaint? Complain here! We love complaints.' => '불만이 있으십니까? 여기에서 불평해 주세요. 저희는 불평을 사랑합니다.',
      'No items found.' => '항목을 찾을 수 없습니다.',
      'Web Form' => '파브리케이터 양식',
      'User %s' => '사용자 %s',
      'Unknown Object' => '알 수 없는 오브젝트',
      'No item exists with ID "%s".' => '"%s" ID의 항목이 존재하지 않습니다.',
      'Unable to sync: no external object PHID.' => '동기화할 수 없습니다: 외부 오브젝트 PHID가 없습니다.',
      'GitHub Event ID' => 'GitHub 이벤트 ID',
      'GitHub Event URI' => 'GitHub 이벤트 URI',
      'Owners of an item can always view it.' => '항목의 소유자만 볼 수 있습니다.',
      '%s changed the status of this item from %s to %s.' => '%s님이 이 항목의 상태를 %s에서 %s(으)로 변경했습니다.',
      'This item does not support the specified command ("%s").' => '이 항목은 지정된 명령("%s")을 지원하지 않습니다.',
      'Command Not Supported' => '명령이 지원되지 않음',
      'Issue #%d' => '이슈 #%s',
      'GitHub %s %s (%s)' => 'GitHub %s %s (%s)',
      'GitHub Repository' => 'GitHub 저장소',
      'Renamed' => '이름이 변경됨',
      'Reload from GitHub' => 'GitHub에서 다시 불러오기',
    );
  }

}
