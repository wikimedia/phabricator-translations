<?php

final class PhabricatorMetamtaKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
      'File PHID: %s' => '파일 PHID: %s',
      'ID: %d' => 'ID: %s',
      'Message PHID' => '메시지 PHID',
      'The address %s is configured to be used by an application.' => '%s 주소는 애플리케이션이 사용하도록 구성되었습니다.',
      'This email address is already in use by a user. Choose a different address.' => '이 이메일 주소는 이미 사용자에 의해 사용 중입니다. 다른 주소를 선택하십시오.',
      'Cc' => '참조',
      'Mail (Received)' => '메일 (받음)',
      'SMTP (AWS)' => 'SMTP (AWS)',
      'Related PHID' => '관련 PHID',
      'No such user \'%s\' exists.' => '\'%s\' 사용자가 존재하지 않습니다.',
      'Deliver as email' => '이메일로 전달',
      '(This email was truncated at %d bytes.)' => '(이 이메일은 %s바이트로 길이를 줄였습니다.)',
      'Bad Address' => '잘못된 주소',
      'Emails' => '이메일',
      'Amazon SES' => '아마존 SES',
      'This user is a bot; bot accounts do not receive mail.' => '이 사용자는 봇입니다. 봇 계정은 메일을 받지 않습니다.',
      'PARAMETERS' => '변수',
      'No mailers are configured.' => '메일러가 구성되지 않았습니다.',
      'SMTP (Local)' => 'SMTP (로컬)',
      'Status: %s' => '상태: %s',
      'Address: %s' => '주소: %s',
      'Unable to send message with unknown message type "%s".' => '알 수 없는 "%s" 메시지 유형으로 메시지를 보낼 수 없습니다.',
      'Message: %s' => '메시지: %s',
      'Mail Properties' => '메일 속성',
      'User Mismatch' => '사용자 불일치',
      'No Address' => '주소 없음',
      'Sent by %s' => '파브리케이터가 보냄',
      'Email address is not formatted properly.' => '이메일 주소 형식이 올바르지 않습니다.',
      'ATTACHMENTS' => '첨부',
      'Mail signature is not valid. Check your Mailgun API key.' => '메일 서명이 유효하지 않습니다. Mailgun API 키를 확인하십시오.',
      'Unknown Reason ("%s")' => '알 수 없는 이유 ("%s")',
      'Unknown mailer ("%s")!' => '메일러("%s")를 알 수 없습니다!',
      'MESSAGE' => '메시지',
      '#' => '#',
      '(This message has no text body.)' => '(이 메시지에 텍스트 본문이 없습니다.)',
      'Mail From Self' => '파브리케이터 메일',
      '(This message has no HTML body.)' => '(이 메시지에 HTML 본문이 없습니다.)',
      'Address "%s" is unknown.' => '"%s" 주소를 알 수 없습니다.',
      'Policy Error' => '정책 오류',
      'Address Not Verified' => '주소가 확인되지 않음',
      'Send and Receive Mail' => '메일 주고받기',
      'Must Encrypt' => '암호화 필요',
      'Message-ID: %s' => '메시지-ID: %s',
      'Got it! Thanks, Mailgun!
    ' => '알겠습니다! 감사합니다, Mailgun!',
    );
  }

}
