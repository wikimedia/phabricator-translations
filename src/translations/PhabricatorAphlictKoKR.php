<?php

final class PhabricatorAphlictKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
      'Send a notification to a user.' => '사용자에게 알림을 보냅니다.',
      'Failed to %s!' => '%s 실패!',
      'You must %s first!' => '먼저 %s해야 합니다!',
      'Server exited!' => '서버를 종료했습니다!',
      'Message to send.' => '보낼 메시지입니다.',
      'Specify a message to send with "--message".' => '"--message"를 사용하여 보낼 메시지를 지정합니다.',
      'Sent notification.' => '알림을 보냈습니다.',
    );
  }

}
