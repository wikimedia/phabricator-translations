<?php

final class PhabricatorAphlictKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
  'Send a notification to a user.' => '사용자에게 알림을 보냅니다.',
  'The notification server should not be run as root.' => '알림 서버는 루트 권한으로 실행해서는 안 됩니다.',
  'Two servers (at indexes "%s" and "%s") both bind to the same port ("%s"). Each server must bind to a unique port.' => '두 서버(인덱스 "%s" 및 "%s")가 모두 동일한 포트("%s")에 바인딩됩니다. 각 서버는 고유한 포트에 바인딩되어야 합니다.',
  'Failed to %s!' => '%s 실패!',
  'ERROR: The PHP function %s is disabled. You must enable it to run Aphlict on this machine.' => '오류: PHP 함수 %s이 비활성화되어 있습니다. 이 기기에서 Aphlict를 실행하려면 해당 함수를 활성화해야 합니다.',
  'Stop the notification server.' => '알림 서버를 중지합니다.',
  'Configuration file is not properly formatted JSON. %s' => '구성 파일의 JSON 형식이 올바르지 않습니다. %s',
  'No `%s` or `%s` binary was found in %s. You must install Node.js to start the Aphlict server.' => '%3$s 에서 `%s` 또는 `%s` 바이너리를 찾을 수 없습니다. Aphlict 서버를 시작하려면 Node.js를 설치해야 합니다.',
  'ERROR: The PHP extension \'%s\' is not installed. You must install it to run Aphlict on this machine.' => '오류: PHP 확장 기능 \'%s\'이(가) 설치되어 있지 않습니다. 이 컴퓨터에서 Aphlict을 실행하려면 해당 확장 기능을 설치해야 합니다.',
  'Failed to create directory "%s" for specified log file (with index "%s"). You should manually create this directory or choose a different logfile location. %s' => '지정된 로그 파일(인덱스 "%2$s")에 대한 디렉터리 "%s"을(를) 생성하는 데 실패했습니다. 이 디렉터리를 수동으로 생성하거나 다른 로그 파일 위치를 선택해야 합니다. %3$s',
  'Configuration file has improper configuration keys at top level. %s' => '설정 파일의 최상위 레벨에 잘못된 설정 키가 있습니다. %s',
  'Aphlict is not running.' => 'Aphlict가 실행 중이 아닙니다.',
  'You must %s first!' => '먼저 %s해야 합니다!',
  'A specified server (at index "%s", on port "%s") specifies a value for "%s", but no value for "%s" or "%s". Servers should only provide an SSL chain if they also provide an SSL key and SSL certificate.' => '지정된 서버(인덱스 "%s", 포트 "%s")는 "%s"에 값을 지정했지만 "%s" 또는 "%s"에는 값을 지정하지 않았습니다. 서버는 SSL 키와 SSL 인증서를 함께 제공하는 경우에만 SSL 체인을 제공해야 합니다.',
  'Sending %s a SIGKILL.' => '%s에 SIGKILL을 보냅니다.',
  'Launching server:' => '서버 시작:',
  'Starting Aphlict server in foreground...' => 'Aphlict 서버를 포그라운드에서 시작하는 중...',
  'Server exited!' => '서버를 종료했습니다!',
  'Start the notifications server in the foreground and print large volumes of diagnostic information to the console.' => '알림 서버를 포그라운드에서 시작하고 콘솔에 대량의 진단 정보를 출력합니다.',
  'A specified server (at index "%s", on port "%s") has an invalid type ("%s"). Valid types are: admin, client.' => '지정된 서버(인덱스 "%s", 포트 "%s")의 유형이 잘못되었습니다("%s"). 유효한 유형은 admin, client입니다.',
  'Configuration file specifies cluster peer "%s" more than once (at indexes "%s" and "%s"). Each peer must have a unique host and port combination.' => '구성 파일에서 클러스터 피어 "%s"이(가) 두 번 이상 지정됩니다(인덱스 "%s" 및 "%s"). 각 피어는 고유한 호스트 및 포트 조합을 가져야 합니다.',
  'Show the status of the notification server.' => '알림 서버의 상태를 표시합니다.',
  'Configuration file does not specify any servers. This service will not be able to interact with the outside world if it does not listen on any ports. You must specify at least one "%s" server and at least one "%s" server.' => '설정 파일에 서버가 지정되어 있지 않습니다. 이 서비스는 포트를 수신하지 않으면 외부와 통신할 수 없습니다. 최소한 하나의 "%s" 서버와 하나의 "%s" 서버를 지정해야 합니다.',
  'Start the notifications server.' => '알림 서버를 시작합니다.',
  'Aphlict (%s) is running.' => 'Aphlict(%s)가 실행 중입니다.',
  'User to notify.' => '알릴 사용자입니다.',
  'Stop, then start the notification server.' => '알림 서버를 중지한 다음 다시 시작합니다.',
  'Failed to read configuration file. %s' => '구성 파일을 읽는 데 실패했습니다. %s',
  'Writing logs to: %s' => '로그 기록 대상: %s',
  'Specify a user to notify with "--user".' => '"--user"를 사용하여 알릴 사용자를 지정하세요.',
  'A specified server (at index "%s", on port "%s") specifies only one of "%s" and "%s". Each server must specify neither (to disable SSL) or specify both (to enable it).' => '지정된 서버(인덱스 "%s", 포트 "%s")는 "%s" 또는 "%s" 중 하나만 지정합니다. 각 서버는 SSL을 비활성화하려면 둘 다 지정하지 않아야 하고, SSL을 활성화하려면 둘 다 지정해야 합니다.',
  'Configuration file does not specify any client servers. This service will be unable to transmit any notifications without a client server. You must specify at least one server with type "%s".' => '설정 파일에 클라이언트 서버가 지정되어 있지 않습니다. 클라이언트 서버가 없으면 이 서비스는 알림을 전송할 수 없습니다. "%s" 유형의 서버를 하나 이상 지정해야 합니다.',
  'Message to send.' => '보낼 메시지입니다.',
  'Configuration file does not specify any administrative servers. This service will be unable to receive messages. You must specify at least one server with type "%s".' => '설정 파일에 관리 서버가 지정되어 있지 않습니다. 이 서비스는 메시지를 수신할 수 없습니다. "%s" 유형의 서버를 하나 이상 지정해야 합니다.',
  'Aphlict Server (%s) exited normally.' => 'Aphlict 서버(%s)가 정상적으로 종료되었습니다.',
  'Reading configuration from: %s' => '다음으로 부터 구성 읽는 중: %s',
  'Unable to start notifications server because it is already running. Use `%s` to restart it.' => '알림 서버가 이미 실행 중이므로 시작할 수 없습니다. `%s`을(를) 사용하여 다시 시작하세요.',
  'Specify a message to send with "--message".' => '"--message"를 사용하여 보낼 메시지를 지정합니다.',
  'Sent notification.' => '알림을 보냈습니다.',
  'Use a specific configuration file instead of the default configuration.' => '기본 설정 대신 특정 설정 파일을 사용하세요.',
  'Configuration file specifies cluster peer ("%s", at index "%s") with an invalid protocol, "%s". Valid protocols are "%s" or "%s".' => '구성 파일에서 유효하지 않은 프로토콜 "%3$s"을(를) 사용하는 클러스터 피어("%s", 인덱스 "%s")를 지정했습니다. 유효한 프로토콜은 "%4$s" 또는 "%5$s"입니다.',
  'Aphlict Server started.' => 'Aphlict 서버가 시작되었습니다.',
  'Stopping Aphlict Server (%s)...' => 'Aphlict 서버 (%s) 중지 중...',
  'Failed to create directory "%s" for specified PID file. You should manually create this directory or choose a different PID file location. %s' => '지정된 PID 파일에 대한 디렉터리 "%s"을(를) 생성하는 데 실패했습니다. 이 디렉터리를 수동으로 생성하거나 다른 PID 위치를 선택해야 합니다. %s',
);
  }

}
