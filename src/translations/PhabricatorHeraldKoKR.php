<?php

final class PhabricatorHeraldKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
      'Webhook ID to call' => '호출할 웹훅 ID',
      'Disable the rule.' => '규칙을 비활성화합니다.',
      'Create Webhook' => '웹훅 만들기',
      'Unknown reason ("%s").' => '알 수 없는 이유("%s")입니다.',
      'Unknown Field ("%s")' => '알 수 없는 필드("%s")',
      'Specify a webhook to call with "--id".' => '"--id"로 호출하려면 웹훅을 지정하십시오.',
      'HMAC Key' => 'HMAC 키',
      'This engine is used to edit webhooks.' => '이 엔진은 웹훅 편집을 위해 사용됩니다.',
      'Type an adapter name...' => '어댑터 이름을 입력하십시오...',
      'Webhook' => '웹훅',
      'Regenerate HMAC Key' => 'HMAC 키 재생성',
      'URI for the webhook.' => '웹훅의 URI입니다.',
      'Webhook HMAC Key' => '웹훅 HMAC 키',
      'Invalid URI' => '유효하지 않은 URI',
      'Webhooks must have a name.' => '웹훅에 이름이 있어야 합니다.',
      'Webhook Request %d' => '웹훅 요청 %s',
      'New Test Request' => '새 테스트 요청',
      'View HMAC Key' => 'HMAC 키 보기',
      'Apply changes to this rule.' => '변경사항을 이 규칙에 적용합니다.',
      'Enable the rule.' => '규칙을 활성화합니다.',
      'Rules must have a name.' => '규첵이 이름은 필수입니다.',
      '%s (Disabled)' => '%s (비활성화됨)',
      'Browse Webhooks' => '웹훅 찾아보기',
      'RULE DETAIL' => '상세 규칙',
      'Really enable this rule?' => '이 규칙을 활성화하시겠습니까?',
      'Specified "--count" must be larger than 0.' => '지정된 "--count"는 0보다 커야 합니다.',
      'Applying changes to %s: %s...' => '%s에 변경사항 적용 중: %s...',
      'H%d' => 'H%s',
      'Type a webhook name...' => '웹훅 이름을 입력하십시오...',
      'Recent Requests' => '최근 요청',
      'Calling webhook...' => '웹훅 호출 중...',
      '%s %s %s' => '%s %s %s',
      'Request Timeout' => '요청 시간 초과',
      'Really disable this rule?' => '이 규칙을 비활성화하시겟습니까?',
      'Success, got HTTP %s from webhook.' => '성공, 웹훅으로부터 HTTP %s를 받았습니다.',
      'HTTP Status Code' => 'HTTP 상태 코드',
      'No webhooks found.' => '웹훅이 없습니다.',
      'You do not have permission to create webhooks.' => '웹훅을 만들 권한이 없습니다.',
      'Regnerate Key' => '키 재생성',
      'Webhooks' => '웹훅',
    );
  }

}
