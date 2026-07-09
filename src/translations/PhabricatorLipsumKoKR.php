<?php

final class PhabricatorLipsumKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
  'Argument "%s" does not match the name of any generators.' => '인수 "%s"은(는) 어떤 생성기의 이름과도 일치하지 않습니다.',
  'A lipsum generator is registered with key "%s". This key is reserved.' => 'lipsum 생성기가 "%s" 키로 등록되었습니다. 이 키는 예약되어 있습니다.',
  'Failed to load a random user. You may need to generate more test users first.' => '무작위 사용자를 로드하는 데 실패했습니다. 먼저 더 많은 테스트 사용자를 생성해야 할 수도 있습니다.',
  'Generate objects without prompting for confirmation.' => '확인 요청 없이 객체를 생성합니다.',
  'LIPSUM' => 'LIPSUM',
  'Unable to load symbol %s: this class does not exist.' => '%s 심볼을 불러올 수 없습니다: 이 클래스는 존재하지 않습니다.',
  'Generator ("%s") was unable to generate an object.' => '생성기("%s")가 객체를 생성할 수 없었습니다.',
  'OOPS' => '이런',
  'This command generates synthetic test data, including user accounts. It is intended for use in development environments so you can test features more easily. There is no easy way to delete this data or undo the effects of this command. If you run it in a production environment, it will pollute your data with large amounts of meaningless garbage that you can not get rid of.' => '이 명령어는 사용자 계정을 포함한 합성 테스트 데이터를 생성합니다. 개발 환경에서 기능을 더 쉽게 테스트할 수 있도록 고안되었습니다. 이 데이터를 삭제하거나 이 명령어의 효과를 되돌리는 쉬운 방법은 없습니다. 프로덕션 환경에서 실행할 경우, 제거할 수 없는 무의미한 데이터로 데이터가 오염될 수 있습니다.',
  'Generate synthetic test objects.' => '합성 테스트 객체를 생성합니다.',
  'class' => '클래스',
  'Generating synthetic test objects forever. Use ^C to stop when satisfied.' => '합성 테스트 객체를 무한히 생성합니다. 만족하면 ^C를 눌러 중지하세요.',
  'Generated "%s": %s' => '생성된 "%s": %s',
  'Choose which type or types of test data you want to generate, or select "%s".' => '생성할 테스트 데이터 유형을 선택하거나 "%s"을(를) 선택하세요.',
  'Generate objects as quickly as possible.' => '객체를 가능한 빠르게 생성합니다.',
  'Argument "%s" is ambiguous, and matches multiple generators: %s.' => '인수 "%s"은(는) 모호하며 여러 생성기와 일치합니다:%s.',
  'lipsum is a development and testing tool and may only be run on installs in developer mode. Enable "%s" in your configuration to enable lipsum.' => 'lipsum은 개발 및 테스트 도구이며 개발자 모드로 설치된 시스템에서만 실행할 수 있습니다. lipsum을 활성화하려면 구성에서 "%s"을 설정하세요.',
  'Selected generators: %s.' => '선택된 생성기: %s.',
  'GENERATORS' => '생성기',
  'Are you sure you want to generate piles of garbage?' => '정말 쓰레기 더미를 생성하겠습니까?',
);
  }

}
