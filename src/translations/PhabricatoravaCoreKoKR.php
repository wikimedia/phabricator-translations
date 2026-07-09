<?php

final class PhabricatoravaCoreKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
  'Anti-Vandalism' => '문서 훼손 방지',
  'compute score for given transactions.' => '주어진 트랜잭션에 대한 점수를 계산합니다.',
  'Vandalism detected' => '문서 훼손 감지됨',
  'Larger values inflate the overall score. This should be a value between 2 and 10.' => '값이 클수록 전체 점수가 높아집니다. 이 값은 2에서 10 사이여야 합니다.',
  'Sessions Deleted' => '세션 삭제됨',
  'Larger values result in a faster decay which means that older edits score lower.  Each edit is scored, then the score is multiplied by the age multiplier. The multiplier is calculated as follows: age_factor = multiplier * (age / age^decay). Age is how long ago the edit occurred, in seconds.' => '값이 클수록 감소 속도가 빨라지므로 오래된 편집일수록 점수가 낮아집니다. 각 편집에 점수가 매겨진 후, 해당 점수에 경과 시간 배율이 곱해집니다. 배율은 다음과 같이 계산됩니다: age_factor = multiplier * (age / age^decay). 여기서 age는 편집이 발생한 시점으로부터 경과된 시간(초)입니다.',
  'The username for whom transactions will be rolled back.' => '트랜잭션이 롤백될 사용자 이름입니다.',
  'No vandalism detected.' => '감지된 문서 훼손이 없습니다.',
  'The time period examined when scoring edits made by a user, in hours. Note that an extremely high value (several weeks) in a busy Phabricator instance may not produce complete results due to the $id_limit SQL query performance parameter in the source code.' => '사용자가 수행한 편집 내용을 평가할 때 검토하는 기간(시간 단위)입니다. 사용량이 많은 파브리케이터 인스턴스에서 매우 긴 값(수 주)을 설정하면 소스 코드의 $id_limit SQL 쿼리 성능 매개변수로 인해 완전한 결과가 나오지 않을 수 있습니다.',
  'The time period examined when scoring edits made by a user.' => '사용자가 수행한 편집 내용을 평가할 때 검토한 기간입니다.',
  'For each action taken by a user, phabricator records one or more transactions. The type of transaction reflects what action was taken. When Antivandalism is responding to user activity, each transaction is assigned a base score and the scores are then added together and multiplied by a factor based on the frequency of activity the user has generated. Faster editing produces a larger multiplier. The final score is compared to the value in **antivandalism.max-score**.  If the score is too high, then the account is either logged out of all sessions or disabled. To customize scores, provide a json-formatted map of transaction type keys with floating-point values. For most purposes, values should be between 0.0 and 1.0 for all transaction types.' => '파브리케이터는 사용자가 수행하는 각 작업에 대해 하나 이상의 트랜잭션을 기록합니다. 트랜잭션 유형은 수행된 작업을 반영합니다. Antivandalism이 사용자 활동에 대응할 때, 각 트랜잭션에는 기본 점수가 할당되고, 이 점수들은 합산된 후 사용자의 활동 빈도에 따른 계수로 곱해집니다. 편집 속도가 빠를수록 계수가 커집니다. 최종 점수는 **antivandalism.max-score**에 저장된 값과 비교됩니다. 점수가 너무 높으면 해당 계정은 모든 세션에서 로그아웃되거나 비활성화됩니다. 점수를 사용자 지정하려면 트랜잭션 유형 키와 부동 소수점 값을 JSON 형식으로 매핑한 맵을 제공하세요. 대부분의 경우 모든 트랜잭션 유형에 대해 값은 0.0에서 1.0 사이여야 합니다.',
  'Adjust the base scores for each transaction type' => '각 트랙잭션 유형별 기본 점수를 조정',
  'Whether to disable a user account when they have reached the antivandalism.max-score multiplied by a threshold in the codebase.' => '사용자 계정이 코드베이스의 임계값에 antivandalism.max-score를 곱한 값에 도달했을 때 계정을 비활성화할지 여부입니다.',
  'Quarantine the vandal account.' => '문서 훼손 계정을 격리합니다.',
  'The rate of decay applied to the age component of the score.' => '점수의 나이 구성 요소에 적용되는 감소율입니다.',
  'The multiplier applied to the age component of the score.' => '점수의 나이 요소에 적용되는 승수입니다.',
  'You must provide either --user or --user-phid' => '--user 또는 --user-phid를 지정해야 합니다',
  'Options for tuning the antivandalism filter.' => '문서 훼손 방지 필터를 조정하기 위한 옵션입니다.',
  'Account Disabled' => '계정 비활성화됨',
  'Default scores applied to edits that change a text field.' => '텍스트 필드를 변경하는 편집에 적용되는 기본 점수입니다.',
  'The specified username / userPHID was not found' => '지정된 사용자 이름 / userPHID가 없습니다',
  'Disable vandal accounts.' => '문서 훼손 계정을 비활성화합니다.',
  'The username for whom transactions will be scored.' => '트랜잭션이 기록될 사용자 이름입니다.',
  '%s triggered vandalism countermeasures (%s) by editing %s.' => '%s님이 %3$s을(를) 편집함으로써 문서 훼손 방지 조치(%s)를 트리거 시켰습니다.',
  'Minimum length below which a penalty is applied. See also: antivandalism.short-text-penalty' => '페널티가 적용되는 최소 기간입니다. 참조: antivandalism.short-text-penalty',
  'Maximum score which a user is allowed to reach before they get logged out.' => '사용자가 로그아웃되기 전에 도달할 수 있는 최대 점수입니다.',
  'No action' => '조치 없음',
  'This constant is added to the score when an edit results in very short title or description.' => '이 상수는 편집 결과로 제목이나 설명이 매우 짧아질 경우 점수에 추가됩니다.',
  'Scan for vandalism' => '문서 훼손을 스캔',
  'These are the default scores applied to edits on text fields suchas task title or description. The base score is multiplied by a factor which is determined by how much the text was changed. What this means is that edits which only add text are scored lower than edits which remove or alter existing text. The base score for each field should represent its relative importance.' => '이 점수들은 태스크 제목이나 설명과 같은 텍스트 필드 편집에 적용되는 기본 점수입니다. 기본 점수는 텍스트 변경 정도에 따라 결정되는 계수를 곱하여 계산됩니다. 즉, 텍스트를 추가하는 편집은 기존 텍스트를 제거하거나 변경하는 수정보다 점수가 낮게 책정됩니다. 각 필드의 기본 점수는 해당 필드의 상대적 중요도를 반영해야 합니다.',
);
  }

}
