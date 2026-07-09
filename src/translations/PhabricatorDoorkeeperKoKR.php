<?php

final class PhabricatorDoorkeeperKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
  'Available publishers class names are:' => '사용 가능한 게시자 클래스 이름은 다음과 같습니다:',
  'To enable synchronization into Asana, enter an Asana Workspace ID here.

NOTE: This feature is new and experimental.' => 'Asana와의 동기화를 활성화하려면 여기에 Asana 워크스페이스 ID를 입력하세요.

참고: 이 기능은 새로 추가된 실험적인 기능입니다.',
  'JIRA %s %s' => 'JIRA %s %s',
  'Workspace ID' => '워크스페이스 ID',
  'DoorkeeperURIRef display mode "%s" is unknown.' => 'DoorkeeperURIRef 표시 모드 "%s"을(를) 알 수 없습니다.',
  '%s has no visible object on the other side; this likely indicates the Asana task has been deleted.' => '%s 반대편에는 보이는 객체가 없습니다. 이는 Asana 태스크가 삭제되었음을 나타낼 가능성이 높습니다.',
  'Using publisher \'%s\'.' => '게시자 \'%s\'을(를) 사용합니다.',
  'Connect to Other Software' => '다른 소프트웨어에 연결',
  'When %s creates tasks in Asana, it can add the tasks to Asana projects based on which application the corresponding object in %s comes from. For example, you can add code reviews in Asana to a "Differential" project.

NOTE: This feature is new and experimental.' => '%s이(가) Asana에서 태스크를 생성할 때, %s에 있는 해당 객체가 속한 애플리케이션에 따라 Asana 프로젝트에 태스크를 추가할 수 있습니다. 예를 들어, Asana의 코드 검토를 "차이 분석" 프로젝트에 추가할 수 있습니다.

참고: 이 기능은 새롭고 실험적인 기능입니다.',
  'Failed to update object %s using user %s.' => '사용자 %2$s을(를) 사용하여 객체 %s을(를) 업데이트하는 데 실패했습니다.',
  'You can find an Asana project ID by clicking the project in Asana and then examining the URL:

  lang=txt
  https://app.asana.com/0/12345678901234567890/111111111111111111
                          ^^^^^^^^^^^^^^^^^^^^
                        This is the ID to use.
' => 'Asana에서 프로젝트를 클릭한 다음 URL을 확인하면 Asana 프로젝트 ID를 찾을 수 있습니다. URL은 다음과 같습니다:

  lang=txt
  https://app.asana.com/0/12345678901234567890/111111111111111111
                          ^^^^^^^^^^^^^^^^^^^^
                        이 ID를 사용하세요.',
  'No Asana provider configured.' => 'Asana 제공자가 구성되어 있지 않습니다.',
  'Asana integration options.' => 'Asana 통합 옵션입니다.',
  '⚠ DO NOT EDIT THIS TASK ⚠
☠ Your changes will not be reflected in %s.
☠ Your changes will be destroyed the next time state is synchronized.' => '⚠ 이 태스크를 편집하지 마세요 ⚠
☠ 변경 사항은 %s에 반영되지 않습니다.
☠ 상태가 동기화될 때 변경 사항이 삭제됩니다.',
  'JIRA integration is configured not to post anything.' => 'JIRA 통합은 아무것도 게시하지 않도록 설정되어 있습니다.',
  'Skipping main task update, object is no longer visible.' => '메인 태스크 업데이트를 건너뛰므로 객체가 더 이상 표시되지 않습니다.',
  'Doorkeeper' => 'Doorkeeper',
  'Imported From' => '다음으로부터 가져옴:',
  'No related users have linked Asana accounts.' => 'Asana 계정을 연결한 관련 사용자가 없습니다.',
  'Story is about an unsupported object type.' => '스토리가 지원되지 않는 객체 유형에 관한 것입니다.',
  'No JIRA provider configured.' => 'JIRA 제공자가 구성되어 있지 않습니다.',
  '%s could not be loaded.' => '%s을(를) 불러오지 못했습니다.',
  'Expected "getDoorkeeperURIRef()" to return "null" or an object of type "DoorkeeperURIRef", but got %s from provider "%s".' => '"getDoorkeeperURIRef()"는 "null" 또는 "DoorkeeperURIRef" 형식의 객체를 반환해야 하지만 제공자 "%2$s"에서 %s을(를) 받았습니다.',
  'External Object' => '외부 객체',
  'JIRA %s' => 'JIRA %s',
  'Asana Task %s' => 'Asana 태스크 %s',
  'GitHub Issue %s' => '깃허브 문제 %s',
  'Asana Workspace ID to publish into.' => '게시할 Asana 워크스페이스 ID입니다.',
  'Removing subtask edge to %s, foreign object is not visible.' => '%s(으)로의 하위 작업 엣지를 제거합니다, 외부 객체는 표시되지 않습니다.',
  'Integration with Asana' => 'Asana와 통합',
  'Doorkeeper worker \'%s\' is not enabled.' => 'Doorkeeper 워커 \'%s\'이(가) 활성화되어 있지 않습니다.',
  'Object has no followers or active/passive users.' => '객체에 팔로워 또는 활성/비활성 사용자가 없습니다.',
  'Skipping main task update, cursor is ahead of the story.' => '주 태스크 업데이트를 건너뜁니다, 커서가 스토리보다 앞서 있습니다.',
  'Asana: %s' => 'Asana: %s',
  'Failed to load external object after collision.' => '충돌 이후 외부 객체를 로드하는 데 실패했습니다.',
  'To specify projects to add tasks to, enter a JSON map with publisher class names as keys and a list of project IDs as values. For example, to put Differential tasks into Asana projects with IDs `123` and `456`, enter:

  lang=txt
  {
    "DifferentialDoorkeeperRevisionFeedStoryPublisher" : [123, 456]
  }
' => '태스크를 추가할 프로젝트를 지정하려면 게시자 클래스 이름을 키로, 프로젝트 ID 목록을 값으로 하는 JSON 맵을 입력합니다. 예를 들어, ID가 `123`과 `456`인 Asana 프로젝트에 Differential 태스크를 추가하려면 다음과 같이 입력합니다. 

  lang=txt
  {
    "DifferentialDoorkeeperRevisionFeedStoryPublisher" : [123, 456]
  }',
  'Synchronization of child task from Asana failed!' => 'Asana에서 하위 태스크와의 동기화 실패!',
  'Expected external Asana account to have exactly one external account identifier, found %s.' => '외부 Asana 계정에는 정확히 하나의 외부 계정 식별자가 있어야 하지만, %s개가 발견되었습니다.',
  'Story is about an object with no linked JIRA issues.' => '스토리가 연결된 JIRA 문제가 없는 객체에 관한 것입니다.',
  'GitHub User %s' => '깃허브 사용자 %s',
  'GitHub Issue ID "%s" is not properly formatted. Expected an ID in the form "owner/repository#123".' => 'GitHub 문제 ID "%s"의 형식이 올바르지 않습니다. "owner/repository#123" 형식의 ID를 예상했습니다.',
  'Workspace Name' => '워크스페이스 이름',
  'This software is running in silent mode.' => '이 소프트웨어는 조용함 모드에서 실행중입니다.',
  'Unable to find any Asana user with valid credentials to pull an OAuth token out of.' => '유효한 자격 증명을 가진 Asana 사용자를 찾을 수 없어 OAuth 토큰을 가져올 수 없습니다.',
  'Synchronization of parent task from Asana failed!' => 'Asana에서 상위 태스크와의 동기화 실패!',
  'Optional Asana projects to use as application tags.' => '어플리케이션 태그로 사용할 수 있는 선택적 Asnaa 프로젝트입니다.',
  'The Asana Workspaces your linked account has access to are:

%s' => '링크된 계정으로 액세스 할 수 있는 Asana 워크스페이스는 다음과 같습니다:

%s',
  'No users to act on linked JIRA objects.' => '연결된 JIRA 객체에 대해 행동하는 사용자가 없습니다.',
  'Updating main task.' => '메인 태스크를 업데이트합니다.',
  'Story object has no corresponding external JIRA objects.' => '스토리 객체가 대응하는 외부 JIRA 객체를 가지고 있지 않습니다.',
);
  }

}
