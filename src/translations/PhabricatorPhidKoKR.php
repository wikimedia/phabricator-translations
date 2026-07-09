<?php

final class PhabricatorPhidKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
  'Retrieve information about an arbitrary PHID.' => '임의의 PHID에 대한 정보를 가져옵니다.',
  'Requested handle "%s" was not loaded.' => '요청된 핸들 "%s"이(가) 로드되지 않았습니다.',
  'Restricted %s' => '제한된 %s',
  'Trying to mutate a %s, but this is not permitted; handle lists are immutable.' => '%s을 변경하려고 시도했지만 허용되지 않습니다. 핸들 목록은 변경할 수 없습니다.',
  'Attempting to test capability "%s" for handle of type "%s", but this capability has not been attached.' => '"%2$s" 유형의 핸들에 대해 "%s" 기능을 테스트하려고 시도했지만, 이 기능이 부착되지 않았습니다.',
  'Object (of class "%s") has no PHID, so handles can not interact with capabilities for it.' => '(클래스 "%s"의) 객체에는 PHID가 없으므로 핸들이 해당 객체의 기능과 상호 작용할 수 없습니다.',
  '%s class "%s" has an invalid %s property. PHID constants must be a four character uppercase string.' => '%s 클래스 "%s"이(가) 유효하지 않은 %s 속성을 가지고 있습니다. PHID 상수는 네 자리 대문자 문자열이어야 합니다.',
  'Attempting to load PHID "%s", but it was not requested by any handle list.' => 'PHID "%s"을 로드하려고 시도했지만 어떤 핸들 목록에서도 요청되지 않았습니다.',
  'The objects you have listed include objects of the wrong type (%s).' => '나열한 객체에는 잘못된 유형의 객체(%s)가 포함되어 있습니다.',
  'Application Email' => '애플리케이션 이메일',
  'Must pass PHIDs.' => 'PHID를 전달해야 합니다.',
  'Look up objects by name.' => '객체를 이름으로 찾습니다.',
  'Trying to render a handle which does not exist!' => '존재하지 않는 핸들을 렌더링하려고 시도했습니다!',
  'Retrieve information about arbitrary PHIDs.' => '임의의 PHID에 대한 정보를 가져옵니다.',
  'Unknown Object (%s)' => '알 수 없는 객체 (%s)',
  'The objects you have listed include objects which do not exist (%s).' => '나열한 객체에는 존재하지 않는 객체(%s)가 포함되어 있습니다.',
  'Trying to create a new sublist of an existing handle list, but PHID "%s" does not appear in the parent list.' => '기존 핸들 목록의 하위 목록을 새로 만들려고 하는데, 상위 목록에 PHID "%s"이(가) 나타나지 않습니다.',
  'Must pass names.' => '이름을 전달해야 합니다.',
  'Attempting to attach capability ("%s") for object ("%s") to handle, but this handle (of type "%s") can not have capabilities.' => '객체("%2$s")에 핸들을 연결하기 위해 기능("%s")을 부착하려고 시도했지만, 이 ("%3$s" 유형의) 핸들은 기능을 가질 수 없습니다.',
  'The objects you have listed include objects of the wrong type (%s) and objects which do not exist (%s).' => '나열한 객체에는 유효하지 않은 유형의 객체(%s)와 존재하지 않는 객체(%s)가 포함되어 있습니다.',
  'No such object exists.' => '해당 객체가 존재하지 않습니다.',
  'Can not generate PHID with no type.' => '유형이 없는 PHID를 생성할 수 없습니다.',
);
  }

}
