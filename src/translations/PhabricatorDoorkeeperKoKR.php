<?php

final class PhabricatorDoorkeeperKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
      'JIRA %s %s' => 'JIRA %s %s',
      'Workspace ID' => '워크스페이스 ID',
      'No JIRA provider configured.' => 'JIRA 제공자가 구성되어 있지 않습니다.',
      '%s could not be loaded.' => '%s을(를) 불러오지 못했습니다.',
      'External Object' => '외부 객체',
      'JIRA %s' => 'JIRA %s',
      'GitHub Issue %s' => '깃허브 이슈 %s',
      'GitHub User %s' => '깃허브 사용자 %s',
      'Workspace Name' => '워크스페이스 이름',
    );
  }

}
