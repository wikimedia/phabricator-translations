<?php

final class PhabricatorSystemKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
  'An Administrator has placed this server into read-only mode.' => '관리자가 이 서버를 읽기 전용 모드로 설정했습니다.',
  'This system does not have the "%s" extension installed, so character encodings are not supported. Install "%s" to enable support.' => '이 시스템에 "%s" 확장 기능이 설치되어 있지 않으므로 문자 인코딩은 지원되지 않습니다. 지원을 활성화하려면 "%s" 확장 기능을 설치하세요.',
  'This mode is active because it is enabled in the configuration option "%s".' => '이 모드는 구성 옵션 "%s"에서 활성화되어 있으므로 현재 활성화되어 있습니다.',
  'Panic!' => '패닉!',
  'View Handle' => '핸들 보기',
  'No Writable Database' => '쓰기 가능한 데이터베이스 없음',
  'Destroying %s **%s**...
' => '%s **%s** 파기 중...',
  'This server has consistently been unable to reach the writable ("master") database while processing recent requests.' => '이 서버는 최근 요청을 처리하는 동안 쓰기 가능한 ("master") 데이터베이스에 지속적으로 접근할 수 없었습니다.',
  'Object "%s" can not be destroyed (it does not implement %s).' => '객체 "%s"은(는) 파기될 수 없습니다(%s을(를) 구현하지 않음).',
  'No Encoding Support' => '인코딩을 지원하지 않음',
  'No such object "%s" exists!' => '"%s" 객체가 존재하지 않습니다!',
  'This server was unable to connect to the writable ("master") database while handling this request, and automatically degraded into read-only mode.' => '이 서버는 해당 요청을 처리하는 동안 쓰기 가능한 ("master") 데이터베이스에 연결할 수 없었으므로 자동으로 읽기 전용 모드로 전환되었습니다.',
  'Severed From Master' => 'Master로부터 분리됨',
  'Cluster Database Status' => '클러스터 데이터베이스 상태',
  'Engine: Destruction' => 'Engine: Destruction',
  'Object ("%s") does not implement interface "%s", so this type of object can not be unlocked.' => '객체("%s")는 인터페이스 "%s"을(를) 구현하지 않으므로 이 유형의 객체는 잠금 해제할 수 없습니다.',
  'This request was served from a replica database. Replica databases may lag behind the master, so very recent activity may not be reflected in the UI. This data will be restored if the master database is restored, but may have been lost if the master database has been reduced to a pile of ash.' => '이 요청은 레플리카 데이터베이스에서 처리되었습니다. 레플리카 데이터베이스는 마스터 데이터베이스보다 지연될 수 있으므로 최근 활동이 사용자 인터페이스에 반영되지 않을 수 있습니다. 마스터 데이터베이스가 복원되면 이 데이터도 복원되지만, 마스터 데이터베이스가 완전히 손상된 경우에는 데이터가 손실되었을 수 있습니다.',
  'Permanently destroy objects.' => '객체를 영구적으로 파기합니다.',
  'Choose a syntax highlighting to use.' => '사용할 구문 강조 표시 방식을 선택하세요.',
  '%d / hour' => '%d / 시간',
  'Rate Limiting Actions' => '속도 제한 작업',
  'Highlighting' => '강조 표시',
  'Unable to Reach Master' => '마스터에 도달할 수 없음',
  'View As' => '다음으로 보기',
  'Permanently destroyed %s object(s).' => '객체 %s개를 영구적으로 파기합니다.',
  'Choose Encoding' => '인코딩을 선택',
  'Destroying objects may cause related objects to stop working, and may leave scattered references to objects which no longer exist. In most cases, it is much better to disable or archive objects instead of destroying them. This risk is greatest when deleting complex or highly connected objects like repositories, projects and users.

These tattered edges are an expected consequence of destroying objects, and the upstream will not help you fix them. We strongly recommend disabling or archiving objects instead.' => '객체를 파기하면 관련 객체가 작동을 멈출 수 있으며, 더 이상 존재하지 않는 객체에 대한 참조가 남을 수 있습니다. 대부분의 경우 객체를 파기하는 대신 비활성화하거나 보관하는 것이 훨씬 좋습니다. 이러한 위험은 저장소, 프로젝트, 사용자와 같이 복잡하거나 상호 연결성이 높은 객체를 삭제할 때 가장 큽니다.

이러한 문제는 객체 파기의 예상되는 결과이며, 상위 프로젝트에서는 이를 해결하는 데 도움을 주지 않습니다. 객체를 파기하는 대신 비활성화하거나 보관하는 것을 강력히 권장합니다.',
  'IMPORTANT' => '중요',
  'Quite Unsettling' => '상당히 불안함',
  'Object owner can not be unlocked: the unlocking engine ("%s") for this object does not implement an owner unlocking mechanism.' => '객체 소유자를 잠금 해제할 수 없습니다: 이 객체의 잠금 해제 엔진("%s")은 소유자 잠금 해제 메커니즘을 구현하지 않습니다.',
  'Choose a document engine to use.' => '사용할 문서 엔진을 선택하세요.',
  'Destruction Logs' => '파기 로그',
  'This likely indicates a severe misconfiguration or major service interruption.' => '이는 심각한 설정 오류 또는 주요 서비스 중단을 나타낼 가능성이 높습니다.',
  'This may also indicate that a more serious failure has occurred. If this interruption does not resolve on its own, this server will soon detect the persistent disruption and degrade into read-only mode until the issue is resolved.' => '이는 더 심각한 오류가 발생했음을 나타낼 수도 있습니다. 이 문제가 저절로 해결되지 않으면 서버는 지속적인 장애를 감지하고 문제가 해결될 때까지 읽기 전용 모드로 전환됩니다.',
  'Destroying objects...' => '객체 파기 중...',
  'View Affected Path Index' => '영향 받은 경로 인덱스 보기',
  'This mode is active because no database has a "%s" role in the configuration option "%s".' => '이 모드는 구성 옵션 "%2$s"에 "%s" 역할이 있는 데이터베이스가 없기 때문에 활성화됩니다.',
  'This server will periodically retry the connection and recover once service is restored. Most causes of persistent service interruption will require administrative intervention in order to restore service.' => '이 서버는 주기적으로 연결을 재시도하고 서비스가 복구되면 다시 연결됩니다. 지속적인 서비스 중단의 대부분은 서비스를 복구하기 위해 관리자의 개입이 필요합니다.',
  'Object view policy can not be unlocked because this object does not have a mutable view policy.' => '이 객체에는 변경 가능한 보기 정책이 없으므로 객체 보기 정책을 잠금 해제할 수 없습니다.',
  'Select Character Encoding' => '문자 인코딩 선택',
  'Select Syntax Highlighting' => '구문 강조 표시를 선택',
  'Read-only mode was enabled by the explicit action of a human administrator, so you can get more information about why it has been turned on by rolling your chair away from your desk and yelling "Hey! Why is %s in read-only mode??!" using your very loudest outside voice.' => '읽기 전용 모드는 관리자가 직접 활성화한 것이므로, 의자를 책상에서 멀리 떨어뜨린 후 "이봐요! 왜 %s이(가) 읽기 전용 모드인 거죠?!"라고 가장 큰 소리로 외치면 왜 이 모드가 활성화되었는지에 대한 자세한 정보를 얻을 수 있습니다.',
  'DATA WILL BE PERMANENTLY DESTROYED' => '데이터가 영구적으로 파기됩니다',
  'Choose Highlighting' => '강조 표시를 선택',
  'View full transaction history' => '전체 트랜잭션 역사 보기',
  'Advanced/Developer...' => '고급/개발자...',
  'This may happen if there is a temporary network anomaly on the server side, like cosmic radiation or spooky ghosts. If this failure was caused by a transient service interruption, this server will recover momentarily.' => '이는 우주 방사선이나 유령 출몰과 같은 서버 측의 일시적인 네트워크 이상 현상으로 인해 발생할 수 있습니다. 일시적인 서비스 중단으로 인한 오류인 경우, 서버는 곧 복구될 것입니다.',
  'Objects will be permanently destroyed. There is no way to undo this operation or ever retrieve this data unless you maintain external backups.' => '해당 객체는 영구적으로 파기됩니다. 외부 백업을 유지하지 않는 한 이 작업을 되돌리거나 데이터를 복구할 방법이 없습니다.',
  'Aborted, your objects are safe.' => '중단되었습니다. 객체는 안전합니다.',
  'No Object URI' => '객체 URI 없음',
  'As an Administrator, you can review status information from the %s control panel. This may provide more information about the current state of affairs.' => '관리자로서 %s 제어판에서 상태 정보를 확인할 수 있습니다. 이를 통해 현재 상황에 대한 자세한 정보를 얻을 수 있습니다.',
  'Show a log of permanently destroyed objects.' => '영구적으로 파기된 객체의 목록을 표시합니다.',
  'Cache engine extension "%s" returned object (of class "%s") with no PHID.' => '캐시 엔진 확장 기능 "%s"이(가) PHID가 없는 객체(클래스 "%s")를 반환했습니다.',
  'System' => '시스템',
  'You are performing too many actions too quickly.' => '너무 많은 작업을 너무 빠르게 수행하고 있습니다.',
  'Choose a text encoding to use.' => '사용할 텍스트 인코딩을 선택하세요.',
  'These %s object(s) will be destroyed forever:' => '이 %s개 객체가 영구적으로 파기됩니다:',
  'Select Document Engine' => '도큐먼트 엔진 선택',
  'In read-only mode you can read existing information, but you will not be able to edit objects or create new objects until this mode is disabled.' => '읽기 전용 모드에서는 기존 정보를 읽을 수 있지만, 이 모드를 해제하기 전까지는 객체를 편집하거나 새 객체를 생성할 수 없습니다.',
  'This mode may be used to perform temporary maintenance, test configuration, or archive an installation permanently.' => '이 모드는 임시 유지 관리, 구성 테스트 또는 설치를 영구적으로 보관하는 데 사용할 수 있습니다.',
  'This server is currently configured with no writable ("master") database, so it can not write new information anywhere. This server will run in read-only mode until an administrator reconfigures it with a writable database.' => '이 서버는 현재 쓰기 가능한 ("마스터") 데이터베이스가 구성되어 있지 않으므로 새로운 정보를 어디에도 기록할 수 없습니다. 관리자가 쓰기 가능한 데이터베이스로 재구성할 때까지 이 서버는 읽기 전용 모드로 실행됩니다.',
  'DELETING OBJECTS OFTEN BREAKS THINGS' => '객체를 삭제하면 종종 무언가가 깨짐',
  'View Hovercard' => '호버카드 보기',
  'Cache engine extension "%s" did not return a list of linked objects.' => '캐시 엔진 확장 기능 "%s"이(가) 링크된 객체 목록을 반환하지 않았습니다.',
  'This usually occurs when an administrator is actively working on fixing a temporary configuration or deployment problem.' => '이는 일반적으로 관리자가 임시 구성 또는 배포 문제를 해결하기 위해 적극적으로 작업하는 동안 발생합니다.',
  '%d / minute' => '%d / 분',
  'Destroy objects without prompting.' => '확인 요청 없이 객체를 파기합니다.',
  'The maximum allowed rate for this action is %s. You are taking actions at a rate of %s.' => '이 작업에 허용되는 최대 속도는 %s입니다. 현재 %s의 속도로 작업을 진행 중입니다.',
  'Are you absolutely certain you want to destroy these %s object(s)?' => array(
    '정말로 이 객체를 파기합니꺄?',
    '정말로 이 객체들을 파기합니꺄?',
  ),
  'Administrative Read-Only Mode' => '관리자 읽기 전용 모드',
  'Object edit policy can not be unlocked because this object does not have a mutable edit policy.' => '이 객체에는 변경 가능한 편집 정책이 없으므로 객체 편집 정책을 잠금 해제할 수 없습니다.',
  '%d / second' => '%d / 초',
  'Although this may be the result of a misconfiguration or operational error, this is also the state you reach if a meteor recently obliterated a datacenter.' => '이는 구성 오류나 작업 오류의 결과일 수도 있지만, 운석이 데이터센터를 파괴했을 경우에도 발생하는 상태입니다.',
  'Object "%s" exists, but does not have a URI to redirect to.' => '객체 "%s"은(는) 존재하지만 넘겨줄 URI가 없습니다.',
  'Specify one or more objects to destroy.' => '파기할 하나 이상의 객체를 지정하세요.',
  'Choose Engine' => '엔진 선택',
);
  }

}
