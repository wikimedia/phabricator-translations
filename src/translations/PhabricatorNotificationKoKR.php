<?php

final class PhabricatorNotificationKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
      'Unread' => '읽지 않음',
      'All Notifications' => '모든 알림',
      'Really mark all notifications as read?' => '모든 알림을 읽은 것으로 표시하시겠습니까?',
      'All unread notifications will be marked as read. You can not undo this action.' => '읽지 않은 모든 알림은 읽은 것으로 표시됩니다. 이 작업을 취소할 수 없습니다.',
      'You can\'t ignore your problems forever, you know.' => '문제를 영원히 무시할 수 없습니다.',
      '(To start the server, run this command.)
    %s' => '(서버를 시작하려면 이 명령을 실행하십시오.)
    %s',
      'Connecting...' => '연결 중...',
      'You have no notifications.' => '알림이 없습니다.',
    );
  }

}
