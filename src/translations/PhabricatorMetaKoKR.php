<?php

final class PhabricatorMetaKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
  'Completely Break Everything' => '모든 것을 완전히 부수기',
  'Information' => '정보',
  'Syntax' => '구문',
  'Show First-Party Applications' => '자사 애플리케이션 표시',
  'Create Application' => '애플리케이션 만들기',
  'Unknown order "%s"!' => '알 수 없는 순서 "%s"!',
  'Prototypes Not Enabled' => '프로토타입이 활성화되지 않았습니다',
  'Policy does not exist.' => '정책이 존재하지 않습니다.',
  'Launcher' => '런처',
  'This application is a prototype. %s' => '이 애플리케이션은 프로토타입입니다. %s',
  'Confirmation' => '확인',
  'Explore More Applications' => '애플리케이션 더 살펴보기',
  'After configuring processing for inbound mail, you can interact with objects (like tasks and revisions) over email. For information on configuring inbound mail, see **[[ %s | Configuring Inbound Email ]]**.

In most cases, you can reply to email you receive from this server to leave comments. You can also use **mail commands** to take a greater range of actions (like claiming a task or requesting changes to a revision) without needing to log in to the web UI.

Mail commands are keywords which start with an exclamation point, like `!claim`. Some commands may take parameters, like `!assign alincoln`.

To use mail commands, write one command per line at the beginning or end of your mail message. For example, you could write this in a reply to task email to claim the task:

```
!claim

I\'ll take care of this.
```


When %s receives your mail, it will process any commands first, then post the remaining message body as a comment. You can execute multiple commands at once:

```
!assign alincoln
!close

I just talked to @alincoln, and he showed me that he fixed this.
```
' => '수신 메일 처리를 구성한 후에는 이메일을 통해 (태스크 및 판 등의) 객체와 상호 작용할 수 있습니다. 수신 메일 구성에 대한 자세한 내용은 **[[ %s | 수신 이메일 구성 ]]**을 참조하세요.

대부분의 경우 이 서버에서 수신한 이메일에 회신하여 의견을 남길 수 있습니다. 또한 **메일 명령**을 사용하여 웹 UI에 로그인하지 않고도 (태스크 확보 또는 판 변경 요청 등의) 더 다양한 작업을 수행할 수 있습니다.

메일 명령은 `!claim`처럼 느낌표로 시작하는 키워드입니다. 일부 명령은 `!assign alincoln`처럼 매개변수를 사용할 수 있습니다.

메일 명령을 사용하려면 메일 메시지의 시작 또는 끝에 한 줄에 하나의 명령을 작성하세요. 예를 들어, 태스크 이메일에 답장으로 다음과 같이 작성하여 태스크를 확보할 수 있습니다:

```
!claim

제가 처리하겠습니다.
```


%s이(가) 메일을 받으면 먼저 명령을 처리한 다음 나머지 메시지 본문을 댓글로 게시합니다. 여러 명령을 한 번에 실행할 수도 있습니다. 

```
!assign alincoln
!close

방금 @alincoln과 이야기했는데, 그가 이 문제를 해결했다고 알려줬습니다.
```',
  'Show Enabled Applications' => '활성화된 애플리케이션 표시',
  'Can\'t set non-public capabilities to public.' => '비공개 기능을 공개로 설정할 수 없습니다.',
  'Launchable' => '실행 가능',
  'You cannot enable an enabled application.' => '이미 활성화된 애플리케이션은 다시 활성화할 수 없습니다.',
  'Save Policies' => '정책 저장하기',
  'Browse Applications' => '애플리케이션 찾아보기',
  'To manage prototypes, enable them by setting %s in your configuration.' => '프로토타입을 관리하려면 구성에서 %s을(를) 설정하여 프로토타입을 활성화하세요.',
  'Prototype' => '프로토타입',
  'Edit Policies: %s' => '정책 편집하기: %s',
  'Really Disable Application?' => '애플리케이션을 정말로 비활성화합니까?',
  'Create New Application' => '새로운 애플리케이션 만들기',
  'Extension' => '확장 기능',
  'Enable %s application?' => '%s 애플리케이션을 활성화합니까?',
  'Validation Failed' => '유효성 검사 실패',
  'Really disable the %s application?' => '%s 애플리케이션을 정말로 비활성화합니까?',
  'Capability "%s" is not editable for this application.' => '이 애플리케이션에서는 기능 "%s"을(를) 편집할 수 없습니다.',
  'Mail Commands Overview' => '메일 명령 개요',
  'Show Launchable Applications' => '실행 가능한 애플리케이션 표시',
  'Show Released Applications' => '공개된 애플리케이션 표시',
  'Show Non-Launchable Applications' => '실행 가능하지 않은 애플리케이션 표시',
  'This is very unusual and will leave you without any content on the home page. You should only do this if you are certain you know what you are doing.' => '이는 매우 드문 경우이며, 이렇게 하면 홈페이지에 콘텐츠가 전혀 표시되지 않습니다. 자신이 무엇을 하고 있는지 확실히 알고 있는 경우에만 이 작업을 수행해야 합니다.',
  'Show Disabled Applications' => '비활성화된 애플리케이션 표시',
  'Configure Application Forms' => '애플리케이션 양식 구성',
  'Show Applications w/ App Email Support' => '앱 이메일 지원이 있는 애플리케이션을 표시',
  'Can\'t set the policy to a policy you can\'t view!' => '볼 수 없는 정책에 대해서는 정책을 설정할 수 없습니다!',
  'Type an application name...' => '애플리케이션 이름을 입력하세요...',
  'Quick Reference' => '빠른 참조',
  'Show Applications w/o App Email Support' => '앱 이메일 지원이 없는 애플리케이션을 표시',
  'This application is required and cannot be disabled.' => '이 애플리케이션은 필수이며 비활성화할 수 없습니다.',
  '%s changed the %s policy for application %s from %s to %s.' => '%s님이 애플리케이션 %3$s의 %s 정책을 %4$s에서 %5$s(으)로 변경했습니다.',
  'Configure creation and editing forms in Applications.' => '애플리케이션에서의 생성 및 편집 양식을 구성합니다.',
  'Show Prototype Applications' => '프로토타입 애플리케이션 표시',
  'This server is not currently configured to accept inbound mail. You won\'t be able to interact with objects over email until inbound mail is set up.' => '이 서버는 현재 수신 메일을 처리하도록 설정되어 있지 않습니다. 수신 메일 설정이 완료될 때까지는 이메일을 통해 객체와 상호 작용할 수 없습니다.',
  '%s changed the %s policy from %s to %s.' => '%s님이 %s 정책을 %s에서 %s(으)로 변경했습니다.',
  'Edit Application: %s' => '애플리케이션 편집하기: %s',
  'Show Third-Party Applications' => '서드파티 애플리케이션 표시',
  'Are you absolutely certain you want to disable the Home application?' => '홈 애플리케이션을 정말로 비활성화합니까?',
  'This table summarizes the available mail commands. For details on a specific command, see the command section below.' => '이 표는 사용 가능한 메일 명령을 요약한 것입니다. 특정 명령에 대한 자세한 정보는 아래 명령어 문단을 참조하세요.',
  'Show All Applications' => '모든 애플리케이션 표시',
);
  }

}
