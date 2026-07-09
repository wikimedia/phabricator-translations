<?php

final class PhabricatorNotificationKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
  'Unread' => '읽지 않음',
  'Unable to load server status: this is not an admin server!' => '서버 상태를 불러올 수 없음: 관리자 서버가 아닙니다!',
  'All Notifications' => '모든 알림',
  'Really mark all notifications as read?' => '모든 알림을 읽은 것으로 표시하시겠습니까?',
  'Notification server configuration is invalid: it does not specify any enabled servers with type "admin". Notifications require at least one active "admin" server.' => '알림 서버 구성이 잘못되었습니다. "admin" 유형의 활성화된 서버가 지정되어 있지 않습니다. 알림을 받으려면 최소 하나 이상의 활성 "admin" 서버가 필요합니다.',
  'Setting Up Client' => '클라이언트 설정',
  'Notification server configuration is invalid: it does not specify any enabled servers with type "client". Notifications require at least one active "client" server.' => '알림 서버 구성이 잘못되었습니다. "client" 유형의 활성화된 서버가 지정되어 있지 않습니다. 알림을 받으려면 최소 하나 이상의 활성 "client" 서버가 필요합니다.',
  'All unread notifications will be marked as read. You can not undo this action.' => '읽지 않은 모든 알림은 읽은 것으로 표시됩니다. 이 작업을 취소할 수 없습니다.',
  'Unread Notifications' => '읽지 않은 알림',
  'Unable to post message: this is not an admin server!' => '메시지를 게시할 수 없음: 이 서버는 관리자 서버가 아닙니다!',
  'Disconnected' => '연결이 끊어짐',
  '%s notification(s) about objects which no longer exist or which you can no longer see were discarded.' => array(
    '더 이상 존재하지 않거나 더 이상 볼 수 없는 객체에 대한 알림 1건이 버려졌습니다.',
    '더 이상 존재하지 않거나 더 이상 볼 수 없는 객체에 대한 알림 %s건이 버려졌습니다.',
  ),
  'Notification server configuration describes an invalid host ("%s", at index "%s") with an unrecognized type ("%s"). Valid types are "%s" or "%s".' => '알림 서버 구성에서 유효하지 않은 호스트("%s", 인덱스 "%s")와 인식할 수 없는 유형("%s")이 설명되어 있습니다. 유효한 유형은 "%s" 또는 "%s"입니다.',
  'Notification server configuration describes an invalid host ("%s", at index "%s") with an invalid protocol ("%s"). Valid protocols are "%s" or "%s".' => '알림 서버 구성에서 유효하지 않은 호스트("%s", 인덱스 "%s")와 인식할 수 없는 프로토콜("%s")이 설명되어 있습니다. 유효한 프로토콜은 "%s" 또는 "%s"입니다.',
  'No notifications to mark as read.' => '읽음으로 표시할 알림이 없습니다.',
  'Notification Server Down' => '알림 서버 다운됨',
  'This server is configured to use a notification server, but is unable to connect to it. You should resolve this issue or disable the notification server. It may be helpful to double check your configuration or restart the server using the command below.

%s' => '이 서버는 알림 서버를 사용하도록 구성되어 있지만, 해당 서버에 연결할 수 없습니다. 이 문제를 해결하거나 알림 서버를 비활성화해야 합니다. 구성을 다시 확인하거나 아래의 명령을 사용하여 서버를 재시작하면 도움이 될 수 있습니다.

%s',
  'Unable to test client on an admin server!' => '관리자 서버에서 클라이언트를 테스트할 수 없습니다!',
  'Notification server configuration describes an invalid host ("%s", at index "%s"). This is an "admin" service but it has a "path" property. This property is only valid for "client" services.' => '알림 서버 구성에서 유효하지 않은 호스트("%s", 인덱스 "%s")가 설명되어 있습니다. 이것은 "관리자" 서비스이지만 "경로" 속성을 가지고 있습니다. 이 속성은 "클라이언트" 서비스에만 유효합니다.',
  'Real-Time Updates and Alerts' => '실시간 업데이트 및 알림',
  'You can\'t ignore your problems forever, you know.' => '문제를 영원히 무시할 수 없습니다.',
  'Unable to Connect to Notification Server' => '알림 서버에 연결할 수 없습니다',
  'Notification server not enabled' => '알림 서버가 활성화되지 않았습니다',
  'This is a test notification, sent at %s.' => '이것은 %s에 발송되는 테스트 알림입니다.',
  '(To start the server, run this command.)
%s' => '(서버를 시작하려면 이 명령을 실행하세요.)
%s',
  'You have no unread notifications.' => '읽지 않은 알림이 없습니다.',
  'Connecting...' => '연결 중...',
  'Got HTTP 200, but expected HTTP 501 (WebSocket Upgrade)!' => 'HTTP 200 응답을 받았지만, HTTP 501(WebSocket 업그레이드) 응답을 기대했습니다!',
  'Notification server configuration is invalid: it describes the same host and port ("%s") multiple times. Each host and port combination should appear only once in the list.' => '알림 서버 구성이 잘못되었습니다. 동일한 호스트와 포트("%s")가 여러 번 나열되어 있습니다. 각 호스트와 포트 조합은 목록에 한 번만 나타나야 합니다.',
  'Mark All Read' => '모두 읽은 것으로 표시',
  'Show only unread notifications.' => '읽지 않은 알림만 표시합니다.',
  'This server is configured to use a notification server, but is not able to connect to it.' => '이 서버는 알림 서버를 사용하도록 구성되어 있지만, 해당 서버에 연결할 수 없습니다.',
  'Notification server configuration is not valid: each entry in the list must be a dictionary describing a service, but the value with index "%s" is not a dictionary.' => '알림 서버 구성이 유효하지 않습니다. 목록의 각 항목은 서비스를 설명하는 딕셔너리여야 하지만, 인덱스 "%s"에 있는 값은 딕셔너리가 아닙니다.',
  'Notification server configuration has an invalid service specification (at index "%s"): %s.' => '알림 서버 구성에 잘못된 서비스 명세가 있습니다(인덱스 "%s"): %s.',
  'You have no notifications.' => '알림이 없습니다.',
);
  }

}
