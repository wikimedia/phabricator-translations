<?php

final class ArcanistCoreKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
  'Aborted due to file upload failure. You can use %s to skip binary uploads.' => '파일 업로드 실패로 인해 중단되었습니다. %s을(를) 사용해 바이너리 업로드를 건너뛸 수 있습니다.',
  'Ref "%s" does not exist in remote "%s".' => 'Ref "%s"은(는) "%s" 원격 위치에 존재하지 않습니다.',
  'Flexible Heredoc and Nowdoc is not available before PHP 7.3.' => '유연한 Heredoc과 Nowdoc은 PHP 7.3 이전 버전에서는 사용할 수 없습니다.',
  'This process has PID %d. Acquiring lock...' => '이 프로세스의 PID는 %d입니다. 잠금을 획득하는 중...',
  'This working copy is associated with the %s repository.' => '이 작업 사본은 %s 저장소와 연관되어 있습니다.',
  'Lint Disabler' => '린트 비활성화기',
  'Call to "posix_getpgid(...)" failed!' => '"posix_getpgid(...)" 호출을 실패했습니다!',
  'The "squash" strategy collapses multiple local commits into a single commit when publishing. It produces a linear published history (but discards local checkpoint commits). This is the default strategy.' => '"squash" 방식은 게시할 때 여러 로컬 커밋을 단일 커밋으로 병합합니다. 이는 선형 게시 역사를 생성하지만 로컬 체크포인트 커밋은 폐기합니다. 이것이 기본 방식입니다.',
  'Call Conduit API methods.' => 'Conduit API 메서드 호출.',
  'Symbol "%s" does not identify a valid revision.' => '심볼 "%s"은(는) 유효한 판을 식별하지 않습니다.',
  'Do not call %s or %s directly on a %s. Instead, call %s or %s.' => '%3$s에서 %s 또는 %s을(를) 직접 호출하지 마세요. 대신 %4$s 또는 %5$s을(를) 호출하세요.',
  'A linter for Composer related files.' => 'Composer 관련 파일을 위한 린터.',
  '"%s" (%s)' => '"%s" (%s)',
  'Saved "%s" as "%s".' => '"%s"을(를) "%s"로 저장합니다.',
  'Night has fallen. The moon overhead is waxing, and provides just enough light that you can make out your surroundings. It is quite cold.' => '밤이 찾아왔습니다. 오버헤드의 달은 점점 차오르며 주변을 어렴풋이 알아볼 수 있을 만큼의 빛을 비춰줍니다. 날씨는 꽤 춥습니다.',
  '(This message was raised at line %s, but the file only has %s line(s).)' => '(이 메시지는 %s줄에서 발생했지만, 파일에는 %s줄밖에 없습니다.)',
  'Not parsing!' => '분석하지 않음!',
  'Portuguese (Portugal)' => '포르투갈어 (포르투갈)',
  'Create an alias from __command__ to __target__ (optionally, with __options__).

Aliases allow you to create shorthands for commands and sets of flags you
commonly use, like defining "arc draft" as a shorthand for "arc diff --draft".

**Creating Aliases**

You can define "arc draft" as a shorthand for "arc diff --draft" like this:

  $ arc alias draft diff -- --draft

Now, when you run "arc draft", the command will function like
"arc diff --draft".

<bg:yellow> NOTE: </bg> Make sure you use "--" before specifying any flags you
want to pass to the command! Otherwise, the flags will be interpreted as flags
to "arc alias".

**Listing Aliases**

Without any arguments, "arc alias" will list aliases.

**Removing Aliases**

To remove an alias, run:

  $ arc alias <alias-name>

You will be prompted to remove the alias.

**Shell Commands**

If you begin an alias with "!", the remainder of the alias will be invoked as
a shell command. For example, if you want to implement "arc ls", you can do so
like this:

  $ arc alias ls \'!ls\'

When run, "arc ls" will now behave like "ls".

**Multiple Toolsets**

This workflow supports any toolset, even though the examples in this help text
use "arc". If you are working with another toolset, use the binary for that
toolset define aliases for it:

  $ phage alias ...

Aliases are bound to the toolset which was used to define them. If you define
an "arc draft" alias, that does not also define a "phage draft" alias.

**Builtins**

You can not overwrite the behavior of builtin workflows, including "alias"
itself, and if you install a new workflow it will take precedence over any
existing aliases with the same name.' => '__command__에서 __target__으로의 별칭을 생성합니다(선택적으로 __options__를 포함할 수 있음).

별칭을 사용하면 "arc diff --draft"에 대한 단축 이름으로 "arc draft"를 정의하는 것처럼, 자주 사용하는 명령어와 플래그 세트에 대한 단축 이름을 만들 수 있습니다.

**별칭 생성**

다음과 같이 "arc draft"를 "arc diff --draft"의 단축 이름으로 정의할 수 있습니다:

  $ arc alias draft diff -- --draft

이제 "arc draft"를 실행하면, 이 명령은 "arc diff --draft"와 동일하게 작동합니다.

<bg:yellow> 참고: </bg> 명령에 전달하려는 플래그를 지정하기 전에 반드시 "--"를 사용해야 합니다! 그렇지 않으면 해당 플래그가 "arc alias"의 플래그로 해석됩니다.

**별칭 나열**

인수를 지정하지 않고 "arc alias"를 실행하면 등록된 별칭 목록이 표시됩니다.

**별칭 제거**

별칭을 제거하려면 다음을 실행하세요:

  $ arc alias <별칭-이름>

별칭을 제거할지 묻는 메시지가 표시됩니다.

**셸 명령어**

별칭을 "!"로 시작하면, 그 뒤의 부분은 셸 명령어로 호출됩니다. 예를 들어, "arc ls"를 구현하려면 다음과 같이 할 수 있습니다:

  $ arc alias ls \'!ls\'

이제 "arc ls"를 실행하면 "ls"와 동일하게 동작합니다.

**여러 Toolset**

이 도움말의 예제에서는 "arc"를 사용하지만, 이 워크플로는 모든 Toolset을 지원합니다. 다른 Toolset을 사용하는 경우, 해당 Toolset의 바이너리를 사용하여 별칭을 정의하세요:

  $ phage alias ...

별칭은 이를 정의하는 데 사용된 Toolset에 바인딩됩니다. "arc draft" 별칭을 정의한다고 해서 "phage draft" 별칭까지 함께 정의되는 것은 아닙니다.

**내장 기능**

"alias" 자체를 포함하여 내장 워크플로의 동작을 재정의할 수는 없으며, 새로운 워크플로를 설치하면 동일한 이름을 가진 기존 별칭보다 우선 적용됩니다.',
  'Arrays should use the short array syntax.' => '배열은 짧은 배열 문법을 사용해야 합니다.',
  'File Symbol "%s"' => '파일 심볼 "%s"',
  'Try running your arc command again.' => 'arc 명령을 다시 실행해주세요.',
  'Local commit "%s" does not merge cleanly into "%s". Rebase or merge local changes so they can merge cleanly.' => '"%s" 로컬 커밋은 "%s"에 깨끗하게 병합되지 않습니다. 로컬 변경 사항을 리베이스하거나 병합하면 깨끗하게 병합할 수 있습니다.',
  'CC: %s' => '참조: %s',
  'Failed to write file data.' => '파일 데이터 쓰기를 실패했습니다.',
  'Regenerate shell completion rules, without installing any configuration.' => '어떠한 구성도 설치하지 않고 셸 완성 규칙을 다시 생성합니다.',
  'Execute a Phage subprocess.' => 'Phage 하위 프로세스를 실행합니다.',
  'If the file is not a text file, you can mark it \'binary\'. Mark this file as \'binary\' and continue?' => '파일이 텍스트 파일이 아닌 경우 \'바이너리\'로 표시할 수 있습니다. 이 파일을 \'바이너리\'로 표시하고 계속하시겠습니까?',
  'Rule \'%s\' is invalid, it must have a type and name like \'%s\'.' => '규칙 \'%s\'는 유효하지 않으며, \'%s\'와 같은 유형과 이름을 가지고 있어야 합니다.',
  'Task Symbol "%s"' => '태스크 심볼 "%s"',
  'Parameter ("%s") passed to "%s" when constructing a unit test message must be a string with a maximum length of %s bytes, but is %s bytes in length.' => '단위 테스트 메시지를 구성할 때 "%2$s"에 전달된 매개변수("%s")의 길이는 최대 %3$s바이트의 문자열이어야 하지만 길이가 %4$s바이트입니다.',
  'In multi-line parameter declarations, each parameter should be on a separate line.' => '매개변수를 여러 줄로 선언할 경우, 각 매개변수는 별도의 줄에 작성해야 합니다.',
  'There was an error verifying the SSL Certificate Authority while negotiating the SSL connection. This usually indicates you are using a self-signed certificate.

As of OSX Yosemite, certificates must be added to the OSX keychain. You can do this with `security add-trusted-cert` from the command line, or by visiting the site in Safari and choosing to trust the certificate permanently.

For more information, see instructions in "%s".' => 'SSL 연결을 확인하는 동안 SSL 인증 기관을 확인하는 데 오류가 발생했습니다. 이는 일반적으로 자체 서명된 인증서를 사용하고 있음을 나타냅니다.

OSX Yosemite부터는 인증서를 OSX 키체인에 추가해야 합니다. 명령줄에서 `security add-trusted-cert`를 사용하거나 사파리에서 해당 사이트를 방문하여 인증서를 영구적으로 신뢰하도록 선택할 수 있습니다.

자세한 내용은 "%s"의 지침을 참조하세요.',
  'None of the configured interpreters can be located.' => '구성된 인터프리터 중 어느 것도 찾을 수 없습니다.',
  'This workflow (\'%s\') requires a Repository API, override %s to return true.' => '이 워크플로(\'%s\')는 저장소 API를 요구합니다, 참을 반환하려면 %s을(를) 덮어쓰세요.',
  'This patch may have failed because it attempts to change the case of a filename (for instance, from \'%s\' to \'%s\'). Mercurial cannot apply patches like this on case-insensitive filesystems. You must apply this patch manually.' => '이 패치는 파일 이름의 대소문자를 변경하려고 시도하기 때문에 실패했을 수 있습니다(예: \'%s\'을 \'%s\'로). Mercurial은 대소문자를 구분하지 않는 파일 시스템에 이러한 유형의 패치를 적용할 수 없습니다. 이 패치는 수동으로 적용해야 합니다.',
  'Executable files should either be binary or contain a shebang.' => '실행 파일은 바이너리거나 또는 셔뱅을 포함해야 합니다.',
  'Numeric literal separators are not available before PHP 7.4.' => '숫자 리터럴 구분자는 PHP 7.4 이전 버전에서는 사용할 수 없습니다.',
  'Landing onto target "%s", the default target under Git.' => 'Git의 기본 대상인 대상 "%s"에 최종 반영합니다.',
  'Unknown argument \'%s\'. Try \'%s\'.' => '\'%s\' 인수를 알 수 없습니다. \'%s\'을(를) 시도하세요.',
  'Path \'%s\' is not readable.' => '\'%s\' 경로를 읽을 수 없습니다.',
  'No match found. Try `%s %s` to search for a linter.' => '일치하는 항목이 없습니다. 린터 검색을 위해 `%s %s`을(를) 시도해 보세요.',
  'English (Pirate)' => '영어 (해적)',
  'Pick' => '선택',
  'If the file is not a text file, mark it as binary with:

  $ %s
' => '파일이 텍스트 파일이 아닌 경우, 다음과 같이 바이너리 파일로 표시하세요: 

  $ %s',
  'Browse URI "%s"' => 'URI "%s" 탐색',
  'The working copy includes changes to \'%s\' paths. These changes will not be included in the diff because SVN can not commit \'svn:externals\' changes alongside normal changes.' => '작업 사본에는 \'%s\' 경로에 대한 변경 사항이 포함되어 있습니다. SVN은 \'svn:externals\' 변경 사항을 일반 변경 사항과 함께 커밋할 수 없으므로 이러한 변경 사항은 차이에 포함되지 않습니다.',
  'Base commit ruleset to invoke when determining the start of a commit range. See "Arcanist User Guide: Commit Ranges" for details.' => '커밋 범위의 시작을 결정할 때 호출할 기본 커밋 규칙집합입니다. 자세한 내용은 "Arcanist 사용자 가이드: 커밋 범위"를 참조하세요.',
  '**bookmarks**' => '**북마크**',
  'Nowhere to load blob \'%s\' from!' => '\'%s\' 블롭을 불러올 곳이 없습니다!',
  'Runtime Error' => '런타임 오류',
  'Argument "%s" does not take a parameter.' => '"%s" 인수는 매개변수를 취하지 않습니다.',
  'LARGE WORKING SET' => '작업중인 셋이 큼',
  'Output upload information in JSON format.' => 'JSON 포맷으로 업로드 정보를 출력합니다.',
  'LANDING' => '최종 병합 중',
  'Inline HTML' => '인라인 HTML',
  'Remote Repository' => '원격 저장소',
  'Conduit API login required.' => 'Conduit API 로그인은 필수입니다.',
  'Rule \'%s\' matched a zero-length token and causes no state transition.' => '규칙 \'%s\'은(는) 길이가 0인 토큰과 일치하므로 상태 전환을 발생시키지 않습니다.',
  'Empty certificate in credentials.' => '자격 증명에 인증서가 없습니다.',
  'Confirms that revisions you did not author should land.' => '직접 작성하지 않은 판이 최종 반영되어야 함을 확인합니다.',
  'No tests to run.' => '실행할 테스트가 없습니다.',
  'Expected JSON response from Slack.' => 'Slack에서 JSON 응답을 예상했습니다.',
  '%s assertion(s) passed.' => '단언문 %s개가 통과했습니다.',
  'NOTHING TO LAND' => '최종 반영할 것이 없음',
  'Expected to find a byte unit for meminfo key "%s" in meminfo source "%s", found no unit.' => 'meminfo 키 "%s"에 대한 바이트 단위를 meminfo 소스 "%s"에서 찾을 것으로 예상했지만, 단위를 찾지 못했습니다.',
  'Do not copy changes to the staging area.' => '변경 사항을 스테이징 영역으로 복사하지 않습니다.',
  'There was an error verifying the SSL connection. This usually indicates that the remote host has an SSL certificate for a different domain name than you are connecting with. Make sure the certificate you have installed is signed for the correct domain.' => 'SSL 연결을 확인하는 중 오류가 발생했습니다. 이는 일반적으로 원격 호스트에 연결하려는 도메인 이름과 다른 도메인 이름에 대한 SSL 인증서가 있음을 나타냅니다. 설치한 인증서가 올바른 도메인에 대해 서명되었는지 확인하세요.',
  'Expected a list!' => '목록을 기대했습니다!',
  'Empty key is invalid!' => '비어있는 키는 유효하지 않습니다!',
  'Library conflict! The library \'%s\' has already been loaded (from \'%s\') but is now being loaded again from a new location (\'%s\'). You can not load multiple copies of the same library into a program.' => '라이브러리 충돌이 발생했습니다! 라이브러리 \'%s\'이(가) 이미 (\'%s\'에서) 로드되었지만, 이제 새 위치(\'%s\')에서 다시 로드되고 있습니다. 동일한 라이브러리를 프로그램에 두 개 이상 로드할 수 없습니다.',
  'Unknown symbol type "%s".' => '알 수 없는 심볼 유형 "%s".',
  '%s does not currently support custom severity levels, because rules can\'t be identified from messages in output.' => '출력 메시지에서 규칙을 식별할 수 없기 때문에, 현재 %s은(는) 사용자 지정 심각도 수준을 지원하지 않습니다.',
  'Multiple configuration sources define an alias for "%s %s". The last definition in the most specific source ("%s") will be used.' => '여러 구성 소스에서 "%s %s"에 대한 별칭을 정의합니다. 가장 구체적인 소스("%s")의 마지막 정의가 사용됩니다.',
  'Branch "%s" does not rebase cleanly from "%s" onto "%s", skipping.' => '"%s" 브랜치는 "%s"에서 "%s"(으)로 깔끔하게 리베이스되지 않아 건너뛰었습니다.',
  'Unknown Symbol' => '알 수 없는 심볼',
  'Against which commit?' => '어떤 커밋에 대해 작업하겠습니까?',
  'commit-message' => '커밋-메시지',
  'It is morning. The sun is high in the sky to the east and you hear birds all around you. A gentle breeze rustles the leaves overhead.' => '아침입니다. 동쪽 하늘 높이 해가 떠 있고, 사방에서 새소리가 들립니다. 살랑이는 바람이 오버헤드의 나뭇잎들을 스칩니다.',
  'Local branch "%s" tracks an upstream, but following it leads to a local cycle; ignoring branch upstream.' => '로컬 브랜치 "%s"은(는) 업스트림을 추적하지만, 이를 따라가면 로컬 순환으로 이어집니다, 상위 브랜치를 무시합니다.',
  'Project Config File' => '프로젝트 구성 파일',
  'Expected to match pattern "%s" against line "%s" in raw commit blob: %s' => '원본 커밋 블롭의 줄 "%2$s"이(가) 패턴 "%s"와(과) 일치할 것으로 예상되었습니다: %3$s',
  'You stand in the middle of a small clearing.' => '당신은 작은 공터 한가운데에 서 있습니다.',
  'Unable to find a browser command to run. Set "browser" in your configuration to specify a command to use.' => '실행할 브라우저 명령을 찾을 수 없습니다. 사용할 명령을 지정하려면 구성에서 "브라우저"를 설정하세요.',
  'Try/catch block catches "Exception", but does not catch "Throwable". In PHP7 and newer, some runtime exceptions will escape this block.' => 'Try/catch 블록이 "Exception"은 잡지만 "Throwable"은 잡지 않습니다. PHP7 이상에서는 일부 런타임 예외가 이 블록을 빠져나갑니다.',
  'HLint is a linter for Haskell code.' => 'HLint는 하스켈 코드의 린터입니다.',
  'No Parent Scope' => '상위 스코프 없음',
  'Use "*" after a response to save it in user configuration.' => '응답 후 "*"를 사용하여 사용자 구성에 저장하세요.',
  'Multiple repositories (%s) matched the query. You can use the "%s" configuration to select the one you want.' => '여러 저장소(%s)가 쿼리와 일치했습니다. "%s" 구성을 사용해 원하는 저장소를 선택할 수 있습니다.',
  'The author of this revision (%s) is:' => '이 판(%s)의 작성자는:',
  'Update the local working copy before applying the patch.' => '패치를 적용하기 전에 로컬 작업 사본을 업데이트하세요.',
  'Using `%s` as the `%s` value instead of a variable was not introduced until PHP 5.5, but this codebase targets an earlier version of PHP. Move the statement inside the loop.' => '`%s`을(를) 변수 대신 `%s` 값으로 사용하는 기능은 PHP 7.0부터 도입되었지만, 이 코드베이스는 이전 버전의 PHP를 대상으로 합니다. 문을 루프 안으로 옮기세요.',
  'SHELL' => '셸',
  'Unlocking...' => '잠금 해제 중...',
  '`%s` Statement Must Be The First Statement' => '`%s` 문은 첫 번째 문이어야 함',
  'Argument "%s" is unrecognized. Use "%s" to indicate the end of flags.' => '인수 "%s"을(를) 인식할 수 없습니다. 플래그의 끝을 표시하려면 "%s"을(를) 사용하세요.',
  'Assertion failed, expected \'%s\' (at %s:%d): %s' => '단언문이 실패했습니다, \'%s\'이(가) 예상되었습니다 (%s:%d에서): %s',
  'Test case \'%s\' was expected to raise an exception, but it did not throw anything.' => '테스트 케이스 \'%s\'은(는) 예외를 발생시킬 것으로 예상되었지만, 아무런 예외도 발생하지 않았습니다.',
  'Land %s revision(s) in the wrong state?' => '잘못된 상태에 있는 %s개 판을 최종 반영합니까?',
  'it is the first commit reachable from the working copy state which is not outgoing.' => '이는 작업 사본 상태에서 도달 가능한 첫 번째 커밋 중 outgoing이 아닌 커밋입니다.',
  'This `%s` or `%s` has a nonempty block which does not end with `%s`, `%s`, `%s`, `%s` or `%s`. Did you forget to add one of those? If you intend to fall through, add a `%s` comment to silence this warning.' => '이 `%s` 또는 `%s`에는 `%s`, `%s`, `%s`, `%s` 또는 `%s`(으)로 끝나지 않는 비어 있지 않은 블록이 있습니다. 이 중 하나를 추가하는 것을 잊었습니까? Fallthrough를 의도했다면 `%s` 댓글을 추가해 이 경고를 억제하세요.',
  'Provide a map of regular expressions to severity levels. All matching codes have their severity adjusted.' => '심각성 수준에 대한 정규 표현식의 맵을 지정합니다. 모든 일치하는 코드들은 심각도가 조정됩니다.',
  'Specify the state to merge into. By default, this is the same as the "onto" ref.' => '병합할 상태를 지정합니다. 기본적으로 이 상태는 "onto" 참조와 동일합니다.',
  'Rule \'%s\' in state \'%s\' in %s defines an invalid regular expression (\'%s\'): %s' => '%3$s의 상태 \'%2$s\'에 있는 규칙 \'%s\'이(가) 유효하지 않은 정규식(\'%4$s\')을 정의합니다: %5$s',
  'In most cases, arc can be upgraded automatically.' => '대부분의 경우 Arc는 자동으로 업그레이드됩니다.',
  'Row has no cell "%s".\\n' => '행에 "%s" 셀이 없습니다.\\n',
  'Continue without loading library?' => '라이브러리를 불러들이지 않고 계속합니까?',
  'Throwing Exception in `%s` Method' => '`%s` 메서드에서 예외 발생',
  'More than one revision exists in the working copy:

%s
Use \'%s\' to select a revision.' => '작업 사본에 두 개 이상의 판이 있습니다:

%s 
\'%s\'을(를) 사용하여 판을 선택하세요.',
  'Unknown VCS!' => '알 수 없는 VCS!',
  'Request signature verification failed: signature is not correct.' => '요청 서명 확인에 실패했습니다: 서명이 올바르지 않습니다.',
  'You can not change the logfile after a write has occurred!' => '쓰기가 발생한 이후 로그 파일을 변경할 수 없습니다!',
  'English (Canada)' => '영어 (캐나다)',
  '    **extract-symbols-with-php-parser.php** [__options__] __path.php__
        Identify the symbols (classes, interfaces, traits, enums and functions)
        in PHP source files. Symbols are divided into "have" symbols
        (symbols the file declares) and "need" symbols (symbols the file
        depends on). For example, class declarations are "have" symbols,
        while object instantiations with "new X()" are "need" symbols.

        Dependencies on builtins and symbols marked \'@phutil-external-symbol\'
        in docblocks are omitted without __--all__.

        Symbols are reported in JSON on stdout.

        This script is used internally to build maps of library
        symbols.
' => '    **extract-symbols-with-php-parser.php** [__options__] __path.php__
        PHP 소스 파일에서 심볼(클래스, 인터페이스, trait, enum, 함수)을 식별합니다. 심볼은 파일이 선언하는 "have" 심볼과 파일이 의존하는 "need" 심볼로 나뉩니다. 예를 들어 클래스 선언은 "have" 심볼이고, "new X()"로 객체를 생성하는 것은 "need" 심볼입니다.

        내장 심볼과 docblock에서 \'@phutil-external-symbol\'로 표시된 심볼에 대한 종속성은 __--all__ 없이는 생략됩니다.

        심볼은 stdout에 JSON으로 출력됩니다.

        이 스크립트는 라이브러리 심볼 맵을 빌드하기 위해 내부적으로 사용됩니다.',
  'This codebase targets PHP %s on Windows, but `%s()` is not available there.' => '이 코드베이스는 윈도우의 PHP %s을(를) 대상으로 하지만, 그 버전에서는 `%s()`을(를) 사용할 수 없습니다.',
  'Author: %s' => '작성자: %s',
  'Confirms that revisions with open parent revisions should land.' => '열린 상위 판을 가진 판이 최종 반영되어야 함을 확인합니다.',
  'Custom %s file was specified, but it was not found!' => '사용자 지정 %s 파일이 지정되었지만, 발견되지 않았습니다!',
  'ERROR' => '오류',
  'Do not upload binaries (like images).' => '(사진과 같은) 바이너리를 업로드하지 않습니다.',
  'Default value for parameters with `%s` type hint can only be `%s`.' => '`%s` 유형 힌트가 있는 매개변수의 기본값은 `%s`만 가능합니다.',
  'Use of Variable Variable' => 'Variable 변수의 사용',
  'Only one output format allowed' => '하나의 출력 형식만 허용됩니다',
  'Arrange tasks based on priority, created, or modified, default is priority.' => '태스크를 우선순위, 생성일 또는 수정일 기준으로 정렬합니다. 기본값은 우선도입니다.',
  'Failed to create a temporary directory: the disk is full.' => '임시 디렉터리를 생성하는 데 실패했습니다: 디스크 공간이 부족합니다.',
  'Value provided to "replaceQueryParam()" for key "%s" is NULL. Use "removeQueryParam()" to remove a query parameter.' => '"replaceQueryParam()"의 키 "%s"에 대해 제공된 값이 NULL입니다. 쿼리 매개변수를 제거하려면 "removeQueryParam()" 함수를 사용하세요.',
  'Signal handler with key "%s" is already installed.' => '키가 "%s"인 신호 핸들러가 이미 설치되어 있습니다.',
  'Name constructors `%s` explicitly. This method is a constructor because it has the same name as the class it is defined in.' => '생성자 `%s`의 이름을 명시적으로 지정하세요. 이 메서드는 정의된 클래스와 같은 이름을 가지므로 생성자입니다.',
  'Install lessc using `%s`.' => '`%s`을(를) 사용해 lessc을 설치합니다.',
  'Too many distinct parent refs!' => '서로 다른 상위 ref가 너무 많습니다!',
  'Unable to find \'%s\' file to configure test engines. Create an \'%s\' file in the root directory of the working copy.' => '테스트 엔진을 구성하는 데 필요한 \'%s\' 파일을 찾을 수 없습니다. 작업 사본의 루트 디렉터리에 \'%s\' 파일을 만드세요.',
  'Fetch Repository: %s' => '저장소 가져오기: %s',
  'Call to "posix_setsid()" failed!' => '"posix_setsid(...)" 호출을 실패했습니다!',
  'Use the message from a specific revision. If you do not specify a revision, arc will guess which revision is in the working copy.' => '특정 판의 메시지를 사용합니다. 판을 지정하지 않으면 arc가 작업 사본에 있는 판을 추측합니다.',
  'Do you want to create a new commit with these %s change(s)?' => array(
    '이 변경 사항을 포함하는 새 커밋을 생성합니까?',
    '이 변경 사항들을 포함하는 새 커밋을 생성합니까?',
  ),
  'Unexpected "%s" section in property addition.' => '속성 추가에 예상치 못한 섹션 "%s"이(가) 있습니다.',
  'Failed to load library at location "%s". This library is specified by "%s". Check that the setting is correct and the library is located in the right place.' => '"%s" 위치에 있는 라이브러리를 로드하는 데 실패했습니다. 이 라이브러리는 "%s"(으)로 지정되어 있습니다. 설정이 올바른지, 라이브러리가 올바른 위치에 있는지 확인하세요.',
  'Diff Parse Exception: %s' => '차이 구문 분석 예외: %s',
  'Commit this revision anyway?' => '그래도 이 판을 커밋하시겠습니까?',
  'After creating the task, open it in a web browser.' => '태스크를 만든 이후 웹 브라우저에서 엽니다.',
  'Asymetric property visibility is not available before PHP 8.4.' => '비대칭 속성 가시성은 PHP 8.4 이전 버전에서는 사용할 수 없습니다.',
  'Amend working copy using unrelated revision %s?' => '관련 없는 판 %s을(를) 사용하여 작업 사본을 어멘드합니까?',
  'DETACHED HEAD' => '분리된 헤드',
  'Lint does not currently support %s in SVN.' => '린트는 현재 SVN에서 %s을(를) 지원하지 않습니다.',
  'Anonymous classes are not available before PHP 7.0.' => '익명 클래스는 PHP 7.0 이전 버전에서는 사용할 수 없습니다.',
  'Failed to open file \'%s\'.' => '\'%s\' 파일 열기를 실패했습니다.',
  'Load a library.' => '라이브러리를 로드합니다.',
  'There are several revisions which match the working copy:

%s
Use \'%s\' to choose one, or \'%s\' to create a new revision.' => '작업 사본과 일치하는 판이 여러 개 있습니다:

%s 
%s을(를) 사용해서 하나를 선택하거나 \'%s\'을(를) 사용해서 새 판을 만드세요.',
  'Failed to decompose multicopy changeset in order to generate diff.' => '차이를 생성하기 위해 multicopy 변경집합을 분해하지 못했습니다.',
  'Saved uncommitted changes from working copy.' => '작업 사본에서 커밋되지 않은 변경 사항을 저장했습니다.',
  'Unsound' => '신뢰할 수 없음',
  'Patch %s \'%s\' to \'%s\', but source path does not exist in the working copy. Continue anyway?' => '패치가 \'%2$s\'을(를) \'%3$s\'(으)로 %s시키지만, 소스 경로가 작업 사본에 존재하지 않습니다. 그래도 계속합니까?',
  'The URI of a server to connect to by default, if %s is run in a project without a configured URI or run outside of a project.' => '%s이(가) 구성된 URI가 없는 프로젝트에서 실행되거나 프로젝트 밖에서 실행될 때 기본적으로 연결할 서버의 URI입니다.',
  '**lock.php** __file__ [__options__]
    Acquire a lockfile and hold it until told to unlock it.
' => '**lock.php** __파일__ [__옵션__]
    잠금 파일을 획득하고 잠금 해제를 지시받을 때까지 유지합니다.',
  'Loading library from "%s"...' => '"%s"에서 라이브러리 로딩 중...',
  'Remote branch has multiple heads.' => '원격 브랜치에 헤드가 여러 개 있습니다.',
  'Duplicate case in switch statement. PHP will ignore all but the first case.' => 'switch 문에 중복된 case가 있습니다. PHP는 첫 번째 case를 제외한 나머지 case를 무시합니다.',
  'Unable to identify the revision in the working copy. Use \'%s\' to select a revision.' => '작업 사본에서 판을 식별할 수 없습니다. \'%s\'을(를) 사용해서 판을 선택하세요.',
  'IP address "%s" is not properly formatted: an address must contain exactly 8 segments, or omit a subsequence of segments with "::".' => 'IP 주소 "%s"의 형식이 올바르지 않습니다. 주소는 정확히 8개의 세그먼트로 구성되어야 하며, 세그먼트의 일부 또는 전체를 "::"을 사용하여 생략해야 합니다.',
  'Binary integer literals are not available before PHP 5.4.' => '이진 정수 리터럴은 PHP 5.4 이전 버전에서는 사용할 수 없습니다.',
  'Failed to match remote pattern against line "%s".' => '"%s" 줄과 원격 패턴을 일치시키지 못했습니다.',
  '%s is not a valid JSON object.' => '%s은(는) 유효한 JSON 객체가 아닙니다.',
  'Checking out bookmark "%s".' => '"%s" 북마크를 확인 중입니다.',
  'Braces for an empty block statement shouldn\'t contain only whitespace.' => '내용이 없는 블록 서술의 중괄호 안에는 공백만 있어서는 안 됩니다.',
  'Changes Planned' => '계획이 변경됨',
  'Preparing merge into the empty state.' => '빈 상태로 병합을 준비 중입니다.',
  'Landing the active branch, "%s".' => '활성 브랜치인 "%s"을(를) 최종 반영합니다.',
  'Closure Linter' => 'Closure Linter',
  '(... %s more revisions ...)' => '(... %s개의 더 많은 판 ...)',
  'Server URI "%s" must include the "http" or "https" protocol. It should be in the form "%s".' => '서버 URI "%s"에는 "http" 또는 "https" 프로토콜이 포함되어야 합니다. 형식은 "%s"여야 합니다.',
  'Definition of symbol "%s" (of type "%s") in file "%s" in library "%s" duplicates prior definition in file "%s" in library "%s".' => '라이브러리 "%4$s"의 파일 "%3$s"에 있는 심볼 "%s"(유형 "%s")의 정의는 라이브러리 "%5$s"의 파일 "%6$s"에 있는 이전 정의와 중복됩니다.',
  'Invalid Executable' => '유효하지 않은 실행 파일',
  'Set %s to file mode 600.' => '%s을(를) 파일 모드 600으로 설정합니다.',
  'Use "!" after a response to save it in working copy configuration.' => '응답 후 "!"를 사용하여 작업 사본 구성에 저장하세요.',
  'Will merge into remote "%s" by default, because this is the remote the change is landing onto.' => '변경 사항이 적용되는 원격 저장소가 "%s"이므로 기본적으로 해당 원격 저장소에 병합됩니다.',
  'Option \'%s\' requires a parameter.' => '\'%s\' 옵션은 매개변수가 필요합니다.',
  'Two objects (of classes "%s" and "%s", descendants of ancestor class "%s") returned the same key from "%s" ("%s"), but each object in this class map must be identified by a unique key.' => '두 객체(상위 클래스 "%3$s"의 하위 클래스인 "%s" 및 "%s" 클래스)가 "%4$s"("%5$s")에서 동일한 키를 반환했지만 이 클래스 맵의 각 객체는 고유한 키로 식별되어야 합니다.',
  'Asymetric property visibility for static properties is not available before PHP 8.5.' => '정적 속성에 대한 비대칭 속성 가시성은 PHP 8.5 이전 버전에서는 사용할 수 없습니다.',
  'PHP versions older then %s have known security vulnerabilities when considering PHAR files; Refusing to inspect file %s. See %s' => '%s보다 오래된 PHP 버전의 경우에는 PHAR 파일을 처리할 때의 보안 취약점이 알려져 있습니다, 파일 %s 검사를 거부합니다. %s을(를) 참조하세요',
  'Unable to determine the remote URI for this repository.' => '이 저장소를 위한 원격 URI를 결정할 수 없습니다.',
  'Set key "%s" = %s in %s config.' => '%3$s 구성에서 키 "%s" = %s (으)로 설정합니다.',
  'This workflow has not yet been updated to Toolsets and can not retrieve a modern WorkingCopy object. Use "getWorkingCopyIdentity()" to retrieve a previous-generation object.' => '이 워크플로는 아직 Toolset에 맞게 업데이트되지 않았으므로 최신 WorkingCopy 객체를 가져올 수 없습니다. 이전 세대 객체를 가져오려면 "getWorkingCopyIdentity()"를 사용하세요.',
  'This codebase targets PHP %s on Windows, but `%s()` is not available there until PHP %s.' => '이 코드베이스는 윈도우의 PHP %s을(를) 대상으로 하지만, PHP %3$s이(가) 출시될 때까지는 `%s()`을(를) 사용할 수 없습니다.',
  'Deleted key "%s" from %s config (was %s).' => '%2$s 구성에서 삭제된 키 "%s" (%3$s 이었음).',
  'Invalid Modifiers' => '유효하지 않은 변경자',
  'The pipe operator is not available before PHP 8.5.' => '파이프 연산자는 PHP 8.5 이전 버전에서는 사용할 수 없습니다.',
  'List of command aliases.' => '명령 별칭 목록입니다.',
  'Working Copy State' => '작업 사본 상태',
  'Space found before semicolon.' => '세미콜론 앞에 공백이 존재합니다.',
  'Use `%s` for checking if the string contains something.' => '문자열이 무언가를 포함하는지를 확인하기 위해 `%s`을(를) 사용하세요.',
  'Perforce mode does not support the "merge" land strategy. Use the "squash" land strategy when landing to a Perforce remote (you can use "--squash" to select this strategy).' => 'Perforce 모드는 "merge" 최종 반영 방식을 지원하지 않습니다. Perforce 원격 장치에 최종 반영할 때는 "squash" 최종 반영 방식을 사용하세요("--squash" 옵션을 사용하여 이 방식을 선택할 수 있습니다).',
  'Method Spacing' => '메서드 띄어짐',
  'Use "--types" to select between alternatives.' => '"--types"를 사용해서 대안 중에 선택하세요.',
  'Revision "%s" does not exist, or you do not have permission to see it.' => '판 "%s"은(는) 존재하지 않거나, 볼 권한이 없습니다.',
  'Build Symbol "%s"' => '빌드 심볼 "%s"',
  'Landing the active bookmark, "%s".' => '활성 책갈피인 "%s"을(를) 최종 반영합니다.',
  'Release lock?' => '잠금을 해제합니까?',
  'Copied Here' => '여기에 복사됨',
  'Array item with key \'%s\' must be an instance of %s, %s given.' => '\'%s\' 키를 가진 배열 항목은 %s 중 하나의 인스턴스여야 하지만, %s이(가) 주어졌습니다.',
  'Aborted generation of gigantic diff.' => '거대한 차이 생성을 중단했습니다.',
  'This line will be added:' => '이 줄이 추가됩니다:',
  'Multiple "abstract" modifiers are not allowed.' => '"abstract" 수식어는 여러 개 사용할 수 없습니다.',
  'Expected value to be a list, got "%s".' => '값이 목록이기를 예상했지만, "%s"을(를) 받았습니다.',
  'Array style to prefer.' => '선호하는 배열 스타일입니다.',
  'No lexer rule matched input at char %d.' => '문자 %d에서 입력과 일치하는 lexer 규칙이 없습니다.',
  'Unhandled parser rule \'%s\'!' => '처리되지 않은 파서 규칙 \'%s\'!',
  'HTTP Status Code: %d' => 'HTTP 상태 코드: %d',
  'You are amending the working copy using information from a revision you are not the author of.' => '본인이 작성하지 않은 판의 정보를 사용하여 작업 사본을 수정하고 있습니다.',
  'Apply patches suggested by lint to the working copy without prompting.' => '린트가 제안하는 패치를 확인 요청 없이 작업 사본에 적용합니다.',
  'After merging, push changes onto a specified branch.' => '병합 후, 지정한 브랜치로 변경 사항을 푸시합니다.',
  'Commit message for \'%s\' has explicit \'Differential Revision\'.' => '\'%s\'에 대한 커밋 메시지는 명시적으로 \'Differential 판\'을 가지고 있습니다.',
  'The token "%s" is not formatted correctly. API tokens should be 32 characters long. Make sure you visited the correct URI and copy/pasted the token correctly.' => '토큰 "%s"의 형식이 올바르지 않습니다. API 토큰은 32자여야 합니다. 올바른 URI에 접속하여 토큰을 정확하게 복사/붙여넣기했는지 확인하세요.',
  '`%s` methods cannot contain a body. This construct will cause a fatal error.' => '`%s` 메서드는 본문을 포함할 수 없습니다. 이러한 구조는 치명적인 오류를 발생시킵니다.',
  'Install shell completion so you can use the "tab" key to autocomplete
commands and flags in your shell for toolsets and workflows.

The **bash** shell is supported.

**Installing Completion**

To install shell completion, run the command:

  $ arc shell-complete

This will install shell completion into your current shell. After installing,
you may need to start a new shell (or open a new terminal window) to pick up
the updated configuration.

Once installed, completion should work across all toolsets.

**Using Completion**

After completion is installed, use the "tab" key to automatically complete
workflows and flags. For example, if you type:

  $ arc diff --draf<tab>

...your shell should automatically expand the flag to:

  $ arc diff --draft

**Updating Completion**

To update shell completion, run the same command:

  $ arc shell-complete

You can update shell completion without reinstalling it by running:

  $ arc shell-complete --generate

You may need to update shell completion if:

  - you install new toolsets; or
  - you move this software on disk; or
  - you upgrade this software and the new version fixes shell completion bugs.' => '셸에서 도구 세트와 워크플로의 명령 및 플래그를 "tab" 키로 자동 완성할 수 있도록 셸 자동 완성 기능을 설치합니다.

**bash** 셸이 지원됩니다.

**자동 완성 기능 설치**

셸 자동 완성 기능을 설치하려면 다음 명령을 실행하세요:

  $ arc shell-complete

그러면 현재 셸에 셸 자동 완성 기능이 설치됩니다. 설치 후 업데이트된 구성을 적용하려면 새 셸을 시작하거나 새 터미널 창을 열어야 할 수 있습니다.

설치가 완료되면 모든 도구 세트에서 자동 완성 기능이 작동합니다.

**자동 완성 기능 사용**

자동 완성 기능이 설치된 후 "tab" 키를 사용하면 워크플로와 플래그가 자동 완성됩니다. 예를 들어 다음을 입력하면:

  $ arc diff --draf<tab>

셸이 자동으로 플래그를 다음처럼 확장해야 합니다:

  $ arc diff --draft

**자동 완성 기능 업데이트**

셸 자동 완성 기능을 업데이트하려면 같은 명령을 실행하세요:

  $ arc shell-complete

다시 설치하지 않고 셸 자동 완성 기능을 업데이트하려면 다음을 실행하세요:

  $ arc shell-complete --generate

다음과 같은 경우 셸 자동 완성 기능을 업데이트해야 할 수 있습니다:

  - 새 toolset을 설치한 경우, 또는
  - 이 소프트웨어를 디스크에서 이동한 경우, 또는
  - 이 소프트웨어를 업그레이드했고 새 버전이 셸 자동 완성 기능 버그를 수정한 경우.',
  'The version control system ("%s") in the current working copy does not support bookmarks.' => '현재 작업 사본의 버전 관리 시스템("%s")은 책갈피를 지원하지 않습니다.',
  'Aborted workflow to fix UTF-8.' => 'UTF-8 해결을 위해 작업 흐름을 중단했습니다.',
  'Extension ("%s") defines invalid configuration with key "%s". This key is reserved.' => '확장 기능("%s")은 키 "%s"을(를) 사용하여 유효하지 않은 구성을 정의합니다. 이 키는 예약되어 있습니다.',
  'Missing required parameters: %s' => '필수 매개변수 누락: %s',
  'Interrupted by SIGINT (^C).' => 'SIGINT (^C)에 의해 중단되었습니다.',
  'This codebase targets PHP %s, but `%s()` was removed in PHP %s.' => '이 코드베이스는 PHP %s을(를) 대상으로 하지만 `%s()`은(는) PHP %s에서 제거되었습니다.',
  'Command-Line Input' => '명령 줄 입력',
  'NOT REVISION AUTHOR' => '판 작성자가 아님',
  'Normally, you should update these %s revision(s), submit them for review, and wait for reviewers to accept them before you continue. To resubmit a revision for review, either: update the revision with revised changes; or use "Request Review" from the web interface.' => '일반적으로 이 판 %s개를 업데이트하고 검토를 요청한 뒤, 계속하기 전에 검토자가 승인할 때까지 기다려야 합니다. 판을 검토를 위해 다시 제출하려면, 수정된 변경 사항으로 판을 업데이트하거나 웹 인터페이스에서 "검토 요청"을 사용하세요.',
  'Encountered two "%s" lines ("%s", "%s") while parsing raw commit blob, expected at most one: %s' => '원본 커밋 블롭을 구문 분석하는 동안 "%s" 줄이 두 개("%s", "%s") 발견되었습니다. 최대 하나만 예상됩니다: %s',
  'Two subclasses of "%s" ("%s" and "%s") define locales with the same locale code ("%s"). Each locale must have a unique locale code.' => '"%s"의 두 하위 클래스("%s" 및 "%s")는 동일한 로케일 코드("%s")를 사용하여 로케일을 정의합니다. 각 로케일은 고유한 로케일 코드를 가져야 합니다.',
  'Specify only one paste to retrieve.' => '검색할 붙여넣기 항목을 하나만 지정하세요.',
  'Argument "%s" conflicts with itself!' => '"%s"이라는 인수가 자기 자신과 충돌합니다!',
  'Normally, a new branch (git) or bookmark (hg) is created and then the patch is applied and committed in the new branch/bookmark. This flag cherry-picks the resultant commit onto the original branch and deletes the temporary branch.' => '일반적으로 새 브랜치(git) 또는 책갈피(hg)를 생성한 다음 패치를 적용하고 새 브랜치/책갈피에 커밋합니다. 이 플래그는 결과 커밋을 원래 브랜치에 체리픽하고 임시 책갈피를 삭제합니다.',
  'Saving local state (at "%s" on branch "%s").' => '로컬 상태를 저장합니다 (브랜치 "%2$s"의 "%s"에).',
  'Stash these changes and continue?' => '이 변경 사항들을 스태시하고 계속합니까?',
  'Push to a remote other than the default.' => '기본값이 아닌 원격으로 푸시합니다.',
  'Shift/reduce conflict: from state \'%s\', when a \'%s\' is encountered, shifting conflicts with reducing \'%s\'.' => 'Shift/reduce 충돌: 상태 \'%s\'에서, \'%s\'이(가) 발생할 경우, shifting과 reducing \'%s\'이(가) 충돌합니다.',
  'Expected hunk header \'%s\'.' => 'Hunk 헤더 \'%s\'을(를) 예상했습니다.',
  'Unexpected node of type \'%s\'!' => '예상치 못한 유형의 노드 \'%s\'!',
  '    %s %s
' => '    %s %s',
  'Install flake8 using `%s`.' => '`%s`을(를) 사용해 flake8을 설치합니다.',
  '%s: configuration captured a \'%s\' named capturing group, \'%s\'. Script output:
%s' => '%s: 구성이 \'%s\'(이)라는 이름 있는 캡처 그룹 \'%s\'을(를) 캡처했습니다. 스크립트 출력:
%s',
  'Argument short aliases must be exactly one character long. \'%s\' is invalid.' => '인수의 짧은 별칭은 정확히 한 글자여야 합니다. \'%s\'은(는) 유효하지 않습니다.',
  'Block for up to __n__ seconds waiting for the lock.' => '잠금을 기다리며 최대 __n__초 동안 차단합니다.',
  'Updating working copy...' => '작업 사본을 업데이트하는 중...',
  'The "HOME" environment variable is not defined, so this workflow can not identify where to install shell completion.' => '"HOME" 환경 변수가 정의되지 않았기에, 이 워크플로는 셸 자동 완성 기능을 설치할 위치를 식별 할 수 없습니다.',
  'Language constructs do not require parentheses.' => '언어 구조는 괄호를 필요로 하지 않습니다.',
  'Failed to read from %s' => '%s에서 읽기를 실패했습니다',
  'Future already has a key ("%s") assigned.' => '퓨처에는 이미 키("%s")가 할당되어 있습니다.',
  'Failed to set configured locale %s, using en_US locale' => '구성된 로케일 %s을(를) 설정하는 데 실패했습니다, en_US 로케일을 사용합니다',
  'URI \'%s\' must be fully qualified with \'%s\' scheme.' => 'URI \'%s\'은(는) \'%s\' 스킴을 포함한 정규화된 URI여야 합니다.',
  'command' => '명령',
  'Detects common misspellings of English words.' => '영어 단어의 흔한 잘못된 철자를 감지합니다.',
  'Inspect internal object properties.' => '내부 객체 속성을 검사합니다.',
  'Unknown raw diff source.' => '알 수 없는 원본 차이 소스.',
  'No linters to run.' => '실행할 린터가 없습니다.',
  'Modified' => '수정됨',
  'TODO Comment' => '할 일 댓글',
  'Failed to parse %s output!' => '%s 출력의 구문 분석을 실패했습니다!',
  'Some reviewers are currently away:' => '일부 검토자가 현재 부재 중입니다:',
  'Do you want to edit the message?' => '메시지를 편집하시겠습니까?',
  'Use of Product Name Literal' => '제품 이름 리터럴의 사용',
  'Merging with "%s" strategy, the default strategy.' => '기본 방식인 "%s" 방식으로 병합합니다.',
  'Override configured lint engine for this project.' => '이 프로젝트를 위해 구성된 린트 엔진을 덮어씁니다.',
  '%s can not load additional nodes at runtime. Tried to load: %s' => '%s은(는) 런타임에 추가 노드를 로드할 수 없습니다. 로드를 시도한 노드: %s',
  'Updating commit message...' => '커밋 메시지를 업데이트하는 중...',
  'Failed to open filesystem path "%s" for writing.' => '파일 시스템 경로 "%s"을(를) 쓰기를 위해 여는데 실패했습니다.',
  'Config: Reading user configuration file "%s"...' => '구성: "%s" 사용자 구성 파일을 읽는 중...',
  'This client version does not support staging this repository.' => '클라이언트 버전은 이 저장소의 스테이징을 지원하지 않습니다.',
  'Run an external script, then parse its output with a regular expression. This is a generic binding that can be used to run custom lint scripts.' => '외부 스크립트를 실행한 다음 정규 표현식으로 출력의 구문을 분석합니다. 이는 사용자 지정 린트 스크립트를 실행하기 위해 사용할 수 있는 일반 바인딩입니다.',
  'Unable to detect any supported shell, so autocompletion rules can not be installed. Use "--shell" to select a shell.' => '지원되는 셸을 감지할 수 없으므로 자동 완성 규칙을 설치할 수 없습니다. 셸을 선택하려면 "--shell" 옵션을 사용하세요.',
  'You are updating a revision ("%s") with the "--draft" flag, but this revision has already been published for review. You can not turn a revision back into a draft once it has been published.' => '"--draft" 플래그를 사용하여 판("%s")을 업데이트하려고 합니다만, 이 판은 이미 검토를 위해 게시되었습니다. 게시된 판은 다시 초안으로 되돌릴 수 없습니다.',
  'Future graph is stalled: some futures are held, but no futures are waiting or working. The graph can never resolve.' => '퓨처 그래프가 정체되었습니다: 일부 퓨처가 유지되고 있지만 기다리거나 작업 중인 퓨처가 없습니다. 그래프를 해결할 수 없습니다.',
  'Workflow ("%s") generates two prompts with the same key ("%s"). Each prompt a workflow generates must have a unique key.' => '워크플로("%s")가 동일한 키("%s")를 가진 두 개의 프롬프트를 생성합니다. 워크플로가 생성하는 각 프롬프트는 고유한 키를 가져야 합니다.',
  'Constants should be uppercase.' => '상수는 대문자여야 합니다.',
  'Named arguments are not available before PHP 8.0.' => '명명된 인수는 PHP 8.0 이전 버전에서는 사용할 수 없습니다.',
  'Create a draft revision so you can look over your changes before involving anyone else. Other users will not be notified about the revision until you later use "Request Review" to publish it. You can still share the draft by giving someone the link.' => '다른 사람을 참여시키기 전에 변경 사항을 검토할 수 있도록 초안 판을 생성합니다. 나중에 "검토 요청"을 사용해 게시하기 전까지 다른 사용자에게는 판 알림이 전송되지 않습니다. 링크를 제공해 초안을 공유할 수는 있습니다.',
  'Convention: spell keyword `%s` as `%s`.' => '명명 규칙: 키워드 `%s`을(를) `%s`(으)로 쓰세요.',
  '%3dms' => '%3dms',
  'Octal notation prefixes are not available before PHP 8.1.' => '8진수 표기 접두어는 PHP 8.1 이전 버전에서는 사용할 수 없습니다.',
  'Expected JSON response from GitHub.' => 'GitHub에서 JSON 응답을 예상했습니다.',
  'Print symbol map to stdout instead of writing it to the map file.' => '심볼 맵을 맵 파일에 쓰는 대신 stdout으로 출력합니다.',
  'No type ID for node type name \'%s\' in \'%s\' AAST.' => '\'%2$s\' AAST의 노드 유형 이름 \'%s\'에 유형 ID가 없습니다.',
  'Update the revision comments, then save and exit.' => '판 댓글을 업데이트하고, 저장한 후 종료하세요.',
  'Function Call Should Be Type Cast' => '함수 호출은 타입 캐스트여야 함',
  '`%s` Unreliable' => '`%s` 신뢰할 수 없음',
  'Workflow has no name!' => '워크플로에 이름이 없습니다!',
  'The "arc anoid" workflow requires "python3" to be available in your $PATH.' => '"arc anoid" 워크플로를 사용하려면 "python3"이 $PATH에서 사용 가능해야 합니다.',
  'Confused by empty line' => '비어있는 줄로 인해 혼동됨',
  'Follow naming conventions: parameters should be named using `%s`' => '명명 규칙을 따르세요: 매개변수 이름에는 `%s`을(를) 사용해야 합니다',
  'Argument "%s" conflicts with argument "%s"%s' => '인수 "%s"이(가) 인수 "%s"와(과) 충돌합니다 %s',
  'FETCHED' => '가져옴',
  '%s may only write strings!' => '%s은(는) 문자열만 쓸 수 있습니다!',
  'Show the command which would be issued, but do not actually commit anything.' => '실행될 명령을 표시하되, 아무것도 실제로 커밋하지는 않습니다.',
  'Found %d matching paths for linter \'%s\'.' => '린터 \'%2$s\'에 대해 %d개의 일치하는 경로를 찾았습니다.',
  'Could not parse URI \'%s\'.' => 'URI \'%s\'의 구문을 분석할 수 없습니다.',
  'LOAD STATE' => '상태 로드',
  'PHP Source file to analyze.' => '분석할 PHP 소스 파일입니다.',
  '(Run `%s` for more details.)' => '(더 자세한 정보를 보려면 `%s`을(를) 실행하세요.)',
  'Use "arc alias" to configure aliases, not "arc set-config".' => '별칭을 구성하려면 "arc set-config"가 아닌 "arc alias"를 사용하세요.',
  'Desired merge strategy is ambiguous, choose an explicit strategy.' => '원하는 병합 방식이 모호합니다, 명시적인 방식을 선택하세요.',
  'Expected \'%s\' to start git binary patch.' => '\'%s\'이(가) git 바이너리 패치를 시작할 것으로 예상했습니다.',
  'Diff URI:' => '차이 URI:',
  'MERGE' => '병합',
  'Revision %s' => '판 %s',
  'Unknown signature method \'%s\'!' => '알 수 없는 서명 메서드 \'%s\'!',
  'Working Copy: Path "%s" is not in any working copy.' => '작업 사본: 경로 "%s"은(는) 어떤 작업 사본에도 없습니다.',
  'This codebase targets PHP %s, but anonymous functions were not introduced until PHP 5.3.' => '이 코드베이스는 PHP %s을(를) 대상으로 하지만 익명 함수는 PHP 5.3 까지 도입되지 않았습니다.',
  'rebuild the library map file' => '라이브러리 맵 파일 재빌드',
  'Bookmark "%s"' => '북마크 "%s"',
  'Use of Removed Function "each()"' => '제거된 함수 "each()"의 사용',
  'Land %s revision(s) anyway, despite ongoing and failed builds?' => '빌드가 진행 중 및 실패했음에도 불구하고 %s개 판을 최종 반영합니까?',
  'Uploaded binary data for "%s".' => '"%s"에 대한 바이너리 데이터가 업로드 되었습니다.',
  'The symbol map for library \'%s\' (at \'%s\') claims this %s is defined in \'%s\', but loading that source file did not cause the %s to become defined.' => '라이브러리 \'%s\'(\'%s\' 위치)의 심볼 맵은 %s이(가) \'%s\'에 정의되어 있다고 주장하지만, 해당 소스 파일을 로드해도 %s이(가) 정의되지 않았습니다.',
  'Future has already started; futures can not start more than once.' => '퓨처가 이미 시작되었습니다, 퓨처는 두 번 이상 시작될 수 없습니다.',
  'Unable to upload file: the server refused to accept file "%s". This usually means it is too large.' => '파일 업로드 실패: 서버에서 파일 "%s"을(를) 수락하지 않았습니다. 이는 일반적으로 파일 크기가 너무 크다는 것을 의미합니다.',
  '%s requires the %s algorithm but %s disables %s by default. Consider setting %s or export %s.' => '%s은(는) %s 알고리즘을 필요로 하지만 %s은(는) 기본적으로 %s을(를) 비활성화합니다. %s을(를) 설정하거나 %s을(를) 내보내는 것을 고려하세요.',
  'Configuration option "%s" is not valid. Configuration options passed with command line flags must be in the form "name=value".' => '구성 옵션 "%s"이(가) 유효하지 않습니다. 명령 줄 플래그로 전달되는 구성 옵션은 "이름=값" 형식이어야 합니다.',
  'Language for the paste.' => '붙여넣기를 위한 언어입니다.',
  'Profile script execution and write results to a file.' => '스크립트 실행을 분석하고 결과를 파일에 작성합니다.',
  'The name of a default unit test engine to use, if no unit test engine is specified by the current project.' => '현재 프로젝트에서 단위 엔진이 지정되지 않은 경우 사용할 기본 단위 엔진의 이름입니다.',
  'You can not use "--current" when installing support.' => '지원을 설치할 때는 "--current"를 사용할 수 없습니다.',
  'You do not see "%s" anywhere.' => '당신은 어디에서도 "%s"이(가) 보이지 않습니다.',
  'Marker "%s"' => '마커 "%s"',
  'NOTE: commit %s could not be completely parsed:' => '참고: 커밋 %s을(를) 완전히 구문 분석 할 수 없습니다:',
  'Updating library: %s' => '라이브러리 업데이트 중: %s',
  'Importing `%s` with `%s` is unnecessary because the aliased name is identical to the imported symbol name.' => '별칭 이름이 가져온 심볼 이름과 동일하므로 `%2$s`(으)로 `%s`을(를) 가져오는 것은 불필요합니다.',
  'Combining union and intersection types is not supported before PHP 8.2.' => '유니언과 인터섹션 유형을 조합하는 것은 PHP 8.2 이전 버전에서는 지원되지 않습
니다.',
  '%s OPEN PARENT REVISION(S)' => '열린 상위 판 %s개',
  'Since more than one revision in Differential matches this working copy, you will be asked which revision you want to update if you run \'%s\'.' => '이 작업 사본과 일치하는 Differential 판이 둘 이상이므로, \'%s\'을(를) 실행하면 어떤 판을 업데이트할지 묻습니다.',
  'Argument "--force" for "arc browse" is deprecated. Use "--type %s" instead.' => '"arc browse"에 대한 "--force" 인수는 구식입니다. 대신 "--type %s"을(를) 사용하세요.',
  'CHECKOUT' => '체크아웃',
  'There should be no whitespace before the object operator.' => '객체 연산자 앞에는 공백이 존재해서는 안됩니다.',
  'Failed to update library: %s' => '라이브러리를 업데이트하는데 실패했습니다: %s',
  'Land %s revision(s) with changes planned?' => '변경이 계획된 %s개 판을 최종 반영합니까?',
  'When linting git repositories, amend HEAD with autofix patches suggested by lint without prompting.' => 'Git 저장소를 린트 검사할 때, 린트가 제안하는 자동 수정 패치를 확인 요청 없이 HEAD에 어멘드합니다.',
  'Base commit is not in local repository; trying to fetch.' => '기본 커밋이 로컬 저장소에 없습니다, 가져오려고 시도합니다.',
  'File Error' => '파일 오류',
  'Specify a runtime configuration value.' => '런타임 구성값을 지정하세요.',
  'Avoid the use of inner functions.' => '내부 함수의 사용을 피하세요.',
  'None of the configured binaries can be located.' => '구성된 바이너리 중 어느 것도 찾을 수 없습니다.',
  'Generators are not available before PHP 5.5.' => '생성자는 PHP 5.5 이전 버전에서는 사용할 수 없습니다.',
  'Start rule \'%s\' does not appear in the rules for the grammar. Use %s to choose a different start rule, or add a rule named \'%s\'.' => '시작 규칙 \'%s\'이(가) 문법 규칙에 나타나지 않습니다. 다른 시작 규칙을 선택하려면 %s을(를) 사용하거나 \'%s\'이라는 이름의 규칙을 추가하세요.',
  'IP address "%s" is not properly formatted. Expected an IPv4 address like "%s".' => 'IP 주소 "%s"의 형식이 적절하게 구성되지 않았습니다. 예상한 IPv4 주소는 "%s"입니다.',
  'Merge into the empty state instead of an existing state. This mode is primarily useful when creating a new repository, and selected automatically if the "onto" ref does not exist and the "into" state is not specified.' => '기존 상태 대신 빈 상태로 병합합니다. 이 모드는 주로 새 저장소를 생성할 때 유용하며, "병합 대상" 참조가 존재하지 않고 "병합할" 상태가 지정되지 않은 경우 자동으로 선택됩니다.',
  'Install PHPCS with `%s`.' => '`%s`을(를) 사용해 PHPCS를 설치합니다.',
  'Value passed to "phutil_string_cast()" is an array; arrays can not be sensibly cast to strings.' => '"phutil_string_cast()"에 전달된 값이 배열입니다. 배열은 문자열로 올바르게 형변환할 수 없습니다.',
  'Install Golint using `%s`.' => '`%s`을(를) 사용해 Golint를 설치합니다.',
  'Command %s failed: %s' => '%s 명령 실패: %s',
  'Holding changes locally, they have not been submitted.' => '변경 사항을 로컬에 보관했으며, 제출되지 않았습니다.',
  'These %s path(s) will NOT be committed. Commit this revision anyway?' => '이 경로 %s개는 커밋되지 않을 것입니다. 그래도 판을 커밋합니까?',
  'Needs Revision' => '변경 필요',
  '<bytes = %s>' => '<bytes = %s>',
  'Branch "%s"' => '브랜치 "%s"',
  'Alias resolved to "%s", but this is not a valid workflow or alias name. This alias or workflow might have previously existed and been removed.' => '별칭이 "%s"(으)로 해석되었지만, 이는 유효한 워크플로 또는 별칭 이름이 아닙니다. 이 별칭 또는 워크플로가 이전에는 존재했지만 제거되었을 수 있습니다.',
  'Expected exception (in class(es): %s), got exception of class "%s".' => '예상한 예외(클래스: %s) 대신 클래스 "%s"의 예외를 받았습니다.',
  'Argument "%s" requires a parameter.' => '인수 "%s"에는 매개변수가 필요합니다.',
  'Got unrecognized upstream format ("%s") from Git, expected "refs/heads/..." or "refs/remotes/...".' => 'Git에서 인식할 수 없는 업스트림 형식("%s")을 받았습니다. "refs/heads/..." 또는 "refs/remotes/..." 형식이 예상됩니다.',
  'LIBRARY ERROR' => '라이브러리 오류',
  'Enter a brief description of the changes included in this update.' => '이 업데이트에 포함된 변경 사항에 대한 간단한 설명을 입력하세요.',
  'Failed to explode line "%s".' => '"%s" 줄을 분해하지 못했습니다.',
  'Unknown library version \'%s\'!' => '알 수 없는 라이브러리 버전 \'%s\'!',
  'Set a default URI with `arc set-config phabricator.uri <uri>`.' => '`arc set-config phabricator.uri <uri>`로 기본 URI을 설정하세요.',
  'Saving response "%s" to prompt "%s".' => '프롬프트 "%2$s"에 대한 응답으로 "%s"을(를) 저장합니다.',
  'Expected method "%s->%s()" to return a unique key, got "%s" from %s objects at indexes: %s.' => '메서드 "%s->%s()"이(가) 고유 키를 반환할 것으로 예상했지만, 객체 %4$s개에서 "%s"을(를) 받았습니다, 인덱스: %5$s.',
  'Unrecognized property status \'%s\'.' => '\'%s\' 속성 상태를 인식할 수 없습니다.',
  'REPOSITORY' => '저장소',
  'No pushable remote "%s" exists. Use the "--onto-remote" flag to choose a valid, pushable remote to land changes onto.' => '푸시 가능한 원격 "%s"이(가) 존재하지 않습니다. 변경 사항을 최종 반영할 유효한 푸시 가능 원격을 선택하려면 "--onto-remote" 플래그를 사용하세요.',
  'Workflow "%s" is unknown. Supported workflows are: %s.' => '워크플로 "%s"을(를) 알 수 없습니다. 지원되는 워크플로: %s.',
  'Configuration value "%s" is set to "%s".' => '"%s" 구성값은 "%s"(으)로 설정되어 있습니다.',
  'Describe the changes in this new revision.' => '새 판의 변경사항을 설명합니다.',
  'NEW BOOKMARK' => '새 북마크',
  'Commit symbol "%s" contains a newline. This is not a valid character in a Mercurial commit symbol.' => '커밋 심볼 "%s"에 줄 바꿈 문자가 포함되어 있습니다. 이는 Mercurial 커밋 심볼에서 유효한 문자가 아닙니다.',
  'Install JSCS using `%s`.' => '`%s`을(를) 사용해 JSCS를 설치합니다.',
  'Invalid Octal Numeric Scalar' => '유효하지 않은 8진수 숫자 스칼라',
  '%s failed to parse file data %d: %s' => '%s가 파일 데이터 %d을(를) 구문 분석하는데 실패했습니다: %s',
  'LOCK ACQUIRED' => '잠금 획득함',
  'Configuration value "%s" is empty.' => '"%s" 구성값이 비어있습니다.',
  'Invalid command "%s". Did you mean:' => '유효하지 않은 명령 "%s". 혹시:',
  'Deleted key "%s" from %s config.' => '%2$s 구성에서 삭제된 키 "%s".',
  'Unable to verify request signature, signature format is not known.' => '요청 서명을 확인할 수 없습니다. 서명 형식을 알 수 없습니다.',
  'Follow naming conventions: class constants should be named using `%s`' => '명명 규칙을 따르세요: 클래스 상수 이름에는 `%s`을(를) 사용해야 합니다',
  'Emit machine-readable JSON. EXPERIMENTAL! Probably does not work!' => '기계가 읽을 수 있는 JSON를 출력합니다. 실험적인 기능입니다! 아마 작동하지 않을 것입니다!',
  'UNIT OKAY' => '단위 OK',
  'TO INSTALL: %s' => '설치 방법: %s',
  'Reuse of Iterator References' => '반복자 참조의 재사용',
  'Choose a workflow!' => '워크플로를 선택하세요!',
  '`%s` Operator' => '`%s` 연산자',
  '%s %s' => '%s %s',
  'No working copy to write config into!' => '구성을 써 넣을 작업 사본이 없습니다!',
  'Specify available reviewers and retry.' => '가능한 검토자를 지정하고 재시도하세요.',
  'PHP version to target on Windows.' => '윈도우에서의 대상으로 할 PHP 버전입니다.',
  'Working Copy: No candidate locations for %s from this working directory.' => '작업 사본: 이 작업 디렉토리에서 %s에 해당하는 후보 위치가 없습니다.',
  'Option \'%s\' is not supported under %s.' => '\'%s\' 옵션은 %s에서 지원되지 않습니다.',
  'The coding standard(s) to apply.' => '적용한 코딩 표준입니다.',
  'Fail' => '실패',
  'Expected no exception, got exception of class "%s".' => '예외가 없을 것을 기대했지만, "%s" 클래스의 예외를 받았습니다.',
  'Subversion does not use base commits.' => 'Subversion은 기본 커밋을 사용하지 않습니다.',
  'Do not use the PHP closing tag, `%s`.' => 'PHP 종료 태그 `%s`을(를) 사용하지 마세요.',
  'it is the first ancestor of %s that either has a bookmark, or is already in the remote and it matched the rule %s in your %s \'base\' configuration' => '이는 %s의 첫 번째 조상 중 책갈피가 있거나 이미 원격에 있으며, %3$s \'base\' 구성의 규칙 %s와(과) 일치한 조상입니다.',
  'Found unexpected surplus key "%s" where no such key was expected.' => '예상하지 못한 여분의 키 "%s"이(가) 예상치 못하게 발견되었습니다.',
  'You specified %s but %s is not available, so coverage can not be enabled for %s.' => '%s을(를) 지정했지만 %s은(는) 사용할 수 없기에, %s에 대한 검사가 활성화 될 수 없습니다.',
  'Classes which should not be used because they represent the unsafe usage of dynamic strings.' => '동적 문자열의 안전하지 않은 사용법을 나타내므로 사용해서는 안 되는 클래스들입니다.',
  'No viewer!' => '열람자가 없습니다!',
  'Failed to match SimpleCommitGraph directive "%s".' => 'SimpleCommitGraph 지시문 "%s"와(과) 일치시키지 못했습니다.',
  'No lint messages.' => '린트 메시지가 없습니다.',
  'Error in parsing \'%s\' file, for linter \'%s\'.' => '린터 \'%2$s\'에 대해 \'%s\' 파일을 구문 분석하는 도중 오류가 발생했습니다.',
  'ONGOING BUILDS' => '진행 중인 빌드',
  'UNABLE TO ACQUIRE LOCK:' => '잠금을 획득할 수 없음:',
  'REBASE CONFLICT' => '리베이스 충돌',
  'Follow naming conventions: enums should be named using `%s`.' => '명명 규칙을 따르세요: enum 이름에는 `%s`을(를) 사용해야 합니다.',
  'Raw input file was written to: %s' => '원본 입력 파일 생성 경로: %s',
  'Default value for parameters with a false type hint can only be false.' => '거짓 유형 힌트가 있는 매개변수의 기본값은 거짓만 가능합니다.',
  'Configuration option ("%s") defined by extension "%s" has an alias ("%s") which conflicts with the alias of another configuration option ("%s"). The key and aliases of each option must be unique.' => '확장 기능 "%2$s"에 의해 정의된 구성 옵션("%s")의 별칭("%3$s")이 다른 구성 옵션("%4$s")의 별칭과 충돌합니다. 각 옵션의 키와 별칭은 고유해야 합니다.',
  'Enter a commit message.' => '커밋 메시지를 입력하세요.',
  'Cover changes since a specific revision.' => '특정 판 이후의 변경 내용을 cover합니다.',
  'Implicit Constructor' => '암시적 생성자',
  'Read diff from stdin, not from the working copy. This disables many features which depend on having access to the working copy.' => '작업 사본이 아닌 stdin에서 차이를 읽습니다. 이렇게 하면 작업 사본에 접근해야 하는 여러 기능이 비활성화됩니다.',
  'Command to use to invoke a web browser.' => '웹 브라우저를 호출하는 데 사용할 명령입니다.',
  'Value "%s" is not valid, specify a JSON list: %s' => '값 "%s"이(가) 유효하지 않습니다, JSON 목록을 지정하세요: %s',
  'Specify at most one revision name.' => '최대 하나의 판 이름을 지정하세요.',
  'Two argument specifications have the same short alias ("%s").' => '두 개의 인수 명세가 같은 단축 별칭을 가집니다 ("%s").',
  'In multi-line function or method calls, each argument should be on a separate line.' => '여러 줄 함수 또는 메서드 호출에서는 각 인수가 별도의 줄에 있어야 합니다.',
  'Open a file or object (like a task or revision) in a local web browser.

  $ arc browse README   # Open a file in Diffusion.
  $ arc browse T123     # View a task.
  $ arc browse HEAD     # View a symbolic commit.

To choose a browser binary to invoke, use:

  $ arc set-config browser __browser-binary__

If no browser is set, the command will try to guess which browser to use.' => '파일이나 객체(태스크나 판 등)를 로컬 웹 브라우저에서 엽니다.

  $ arc browse README   # Diffusion에서 파일을 엽니다.
  $ arc browse T123     # 태스크를 봅니다.
  $ arc browse HEAD     # 심볼릭 커밋을 봅니다.

호출할 브라우저 바이너리를 선택하려면 다음을 사용하세요:

  $ arc set-config browser __브라우저-바이너리__

브라우저가 설정되어 있지 않으면 명령이 사용할 브라우저를 추측하려고 합니다.',
  'Call to "assertCaught(..., <junk>, ...)" passed bad value for test result. Expected null, Exception, or Throwable; got: %s.' => '"assertCaught(..., <junk>, ...)" 호출이 테스트 결과에 대해 잘못된 값을 전달했습니다. null, Exception 또는 Throwable이 예상되었지만, 다음을 받았습니다: %s',
  'You may land one branches and any number of bookmarks in a single operation.' => '한 번의 작업으로 브랜치 하나와 임의 개수의 책갈피를 최종 반영할 수 있습니다.',
  'Unknown lint severity "%s". Valid severities are: %s.' => '알 수 없는 린트 심각도 "%s"입니다. 유효한 심각도: %s.',
  'You have untracked files in this working copy.' => '이 작업 사본에 추적되지 않은 파일이 있습니다.',
  'JSON Lint' => 'JSON 린트',
  'Expected alias definition (with key "%s") to be a dictionary.' => '별칭 정의는 (키 "%s"을(를) 가진) 딕셔너리를 예상했습니다.',
  'Arguments with default values must be at the end of the argument list.' => '기본값이 있는 인수는 인수 목록의 끝에 있어야 합니다.',
  'Select an output format.' => '출력 형식을 선택하세요.',
  'Unable to close file!' => '파일을 닫을 수 없습니다!',
  'The `%s` and `%s` statements no longer accept variable arguments.' => '`%s` 및 `%s`문은 더이상 변수 인수를 받지 않습니다.',
  'No analyzer is available for binary "%s".' => '바이너리 "%s"에 대해 사용할 수 있는 분석기가 없습니다.',
  'Objects passed to "%s" must return sort vectors (objects of class "%s") from the specified method ("%s"). One object (with key "%s") did not.' => '"%s"에 전달된 객체는 지정한 메서드("%3$s")에서 정렬 벡터(클래스 "%s"의 객체)를 반환해야 합니다. 한 객체(키 "%4$s")가 반환하지 않았습니다.',
  'Alias functions should be avoided.' => '별칭 함수는 피해야 합니다.',
  'Unit test results included failures, but all failing tests are known to be unsound. Ignore unsound test failures?' => '단위 테스트 결과에 실패가 포함되었지만, 실패한 테스트는 모두 신뢰할 수 없는 것으로 알려졌습니다 신뢰할 수 없는 테스트 실패를 무시할까요?',
  'Resolve merge conflicts before proceeding.' => '계속 진행하기 전에 병합 충돌을 해결하세요.',
  'The proxied future has not been provided yet.' => '프록시된 퓨처가 아직 제공되지 않았습니다.',
  'No ref "%s" exists in remote "%s".' => '원격 "%2$s"에 ref "%s"이(가) 존재하지 않습니다.',
  'Expected JSON response from Postmark.' => 'Postmark에서 JSON 응답을 예상했습니다.',
  'Failed to convert a hunk from \'%s\' to UTF-8. Check that the specified encoding is correct.' => 'Hunk를 \'%s\'에서 UTF-8로 변환하지 못했습니다.  지정된 인코딩이 올바른지 확인하세요.',
  'Bad Charset' => '잘못된 문자 집합',
  'Wrote PHP definition.' => 'PHP 정의를 작성했습니다.',
  'Throwing an `%s` from within the `%s` method is not allowed before PHP 7.4.' => '`%2$s` 메서드에서 `%s`을 던지는 것은 PHP 7.4 이전 버전에서는 사용할 수 없습니다.',
  'Version' => '버전',
  'REVISION' => '판',
  'Use `%s` to detect issues with Javascript source files.' => '자바스크립트 소스 파일의 문제를 탐지하기 위해 `%s`을(를) 사용하세요.',
  'COMMITTED' => '커밋됨',
  'Confirms that revisions that are already published should land.' => '이미 게시된 판이 최종 반영되어야 함을 확인합니다.',
  'Executing \'%s\' failed!' => '\'%s\' 실행을 실패했습니다!',
  'Which URI do you want to open?' => '열고자 하는 URI은 무엇입니까?',
  'Cherry Pick Failed!' => '체리 픽이 실패했습니다!',
  'What default do you want to use? [origin/master]' => '어떤 기본값을 사용합니까? [origin/master]',
  'Matching working copy directory path.' => '일치하는 작업 사본 디렉터리 경로입니다.',
  'Restoring local state (to detached commit "%s").' => '로컬 상태를 복구합니다 (분리된 커밋 "%s"(으)로).',
  'Unknown version control system.' => '알 수 없는 버전 관리 시스템.',
  'Mark the file as temporary. Temporary files will be deleted after 24 hours.' => '파일을 임시 파일로 표시합니다. 임시 파일은 24시간 후에 삭제됩니다.',
  'Hardpoint (at index "%s") has the same key ("%s") as an earlier hardpoint. Each hardpoint must have a key that is unique among hardpoints on the object.' => '하드포인트(인덱스 "%s")의 키("%s")가 이전 하드포인트와 같습니다. 각 하드포인트에는 객체의 하드포인트 사이에서 고유한 키가 있어야 합니다.',
  'Accept/shift conflict!' => 'Accept/shift 충돌!',
  'Dynamic `%s`' => '동적 `%s`',
  'Expected %s rules to define rules for state \'%s\'.' => '%s 규칙이 상태 \'%s\'에 대한 규칙을 정의할 것으로 예상했습니다.',
  'These %s symbol(s) do not exist in the remote. They will be created as new branches:' => array(
    '이 심볼은 원격에 존재하지 않습니다. 새 브랜치로 생성됩니다:',
    '이 심볼들은 원격에 존재하지 않습니다. 새 브랜치들로 생성됩니다:',
  ),
  'Incomplete implementation: %s!' => '완료되지 않은 구현: %s!',
  'Argument names may only contain a-z, 0-9 and -, and must be at least one character long. \'%s\' is invalid.' => '인수 이름에는 az, 0-9 및 -만 포함될 수 있으며 최소 한 글자 이상이어야 합니다. \'%s\'은(는) 유효하지 않습니다.',
  'Array Separator' => '배열 구분자',
  'If true, %s will never change repository history (e.g., through amending or rebasing). Defaults to true in Mercurial and false in Git. This setting has no effect in Subversion.' => '참이면 %s은(는) 저장소 역사를 절대 변경하지 않습니다(예: 어멘드 또는 리베이스를 통해). Mercurial에서는 기본값이 참이고 Git에서는 거짓입니다. Subversion에는 영향을 주지 않습니다.',
  'Binary Integer Casing' => '바이너리 정수 명명 규칙',
  'Unrecognized argument "%s".' => '"%s" 인수를 인식하지 못했습니다.',
  'Unable to upload file: path "%s" is not a file.' => '파일을 업로드할 수 없습니다: "%s" 경로는 파일이 아닙니다.',
  'Space After Control Statement' => '제어문 뒤에 공백',
  'Patch deletes file \'%s\', but the file does not exist in the working copy. Continue anyway?' => '패치가 파일 \'%s\'을(를) 삭제시키지만, 파일이 작업 사본에 존재하지 않습니다. 그래도 계속합니까?',
  'Property hooks are not available before PHP 8.4.' => '속성 훅은 PHP 8.4 이전 버전에서는 사용할 수 없습니다.',
  'Unit testing raised errors, but all failing tests are unsound.' => '단위 테스트에서 오류가 발생했지만, 실패한 테스트는 모두 신뢰할 수 없는 테스트입니다.',
  'Global Variables' => '전역 변수',
  'IMMUTABLE WORKING COPY' => '변경 불가능한 작업 사본',
  'Show information about prompts a workflow may execute, and review saved
responses.

**Show Prompts**

To show possible prompts a workflow may execute, run:

  $ arc prompts __workflow__

**Saving Responses**

If you always want to answer a particular prompt in a certain way, you can
save your response to the prompt. When you encounter the prompt again, your
saved response will be used automatically.

To save a response, add "*" or "!" to the end of the response you want to save
when you answer the prompt:

  - Using "*" will save the response in user configuration. In the future,
    the saved answer will be used any time you encounter the prompt (in any
    project).
  - Using "!" will save the response in working copy configuration. In the
    future, the saved answer will be used when you encounter the prompt in
    the current working copy.

For example, if you would like to always answer "y" to a particular prompt,
respond with "y*" or "y!" to save your response.
' => '워크플로가 실행할 수 있는 프롬프트에 대한 정보를 표시하고 저장된 응답을 검토합니다.

**프롬프트 표시**

워크플로가 실행할 수 있는 가능한 프롬프트를 보려면 다음을 실행하세요.

  $ arc prompts __워크플로__

**응답 저장**

특정 프롬프트에 항상 같은 방식으로 답하고 싶다면 해당 프롬프트에 대한 응답을 저장할 수 있습니다. 같은 프롬프트를 다시 만나면 저장된 응답이 자동으로 사용됩니다.

응답을 저장하려면 프롬프트에 답할 때 저장하려는 응답 끝에 "*" 또는 "!"를 추가하세요:

  - "*"를 사용하면 응답이 사용자 설정에 저장됩니다. 이후에는 어떤 프로젝트에서든 해당 프롬프트를 만나면 저장된 답변이 사용됩니다.
  - "!"를 사용하면 응답이 작업 사본 설정에 저장됩니다. 이후에는 현재 작업 사본에서 해당 프롬프트를 만날 때 저장된 답변이 사용됩니다.

예를 들어 특정 프롬프트에 항상 "y"라고 답하려면 "y*" 또는 "y!"로 응답하여 저장하세요.',
  'Files must end in a newline.' => '파일은 새 줄로 끝나야 합니다.',
  'You may need to open a new terminal window or launch a new shell before the changes take effect.' => '변경 사항을 적용하려면 새 터미널 창을 열거나 새 셸을 시작해야 할 수 있습니다.',
  'The regex to process output with.' => '출력을 처리할 정규 표현식입니다.',
  'Lint changes since a specific revision.' => '특정 판 이후의 변경 사항을 린트합니다.',
  'Do you want to use this message?' => '이 메시지를 사용하시겠습니까?',
  '(This configuration value is not recognized by arc. It may be misspelled or out of date.)' => '(이 구성 값은 arc에서 인식되지 않습니다. 철자가 틀렸거나 최신 값이 아닐 수 있습니다.)',
  'Custom preset.' => '사용자 지정 프리셋입니다.',
  'The use of `%s` in an anonymous closure is not available before PHP 5.4.' => '익명 클로저에서 `%s`의 사용은 PHP 5.4 이전 버전에서는 사용할 수 없습니다.',
  'Unit test engine (of class "%s") returned invalid results when run (with method "%s"). Expected a list of "%s" objects as results, but value with key "%s" is not valid.' => '클래스 "%s"의 단위 테스트 엔진이 메서드 "%s"을(를) 실행했을 때 유효하지 않은 결과를 반환했습니다. 결과로 "%s" 객체의 목록이 예상되었지만, 키 "%s"을(를) 가진 값이 유효하지 않습니다.',
  'Prior to PHP 5.4, `%s` fails when given empty arrays. Prefer to write `%s` as `%s`.' => 'PHP 5.4 이전 버전에서는 빈 배열을 전달하면 `%s`이(가) 실패합니다. `%s` 대신 `%s`을(를) 사용하는 것이 좋습니다.',
  'Match expressions are not available before PHP 8.0.' => '일치 표현식은 PHP 8.0 이전 버전에서는 사용할 수 없습니다.',
  'You have uncommitted changes in this working copy. Commit or revert them before proceeding.' => '이 작업 사본에 커밋하지 않은 변경 사항이 있습니다. 계속 진행하기 전에 커밋하거나 되돌리세요.',
  'In module `%s`, declaration `%s`.' => '모듈 `%s`, 선언 `%s`.',
  'Space After Unary Prefix Operator' => '단항 후위 연산자 뒤에 공백',
  'Stashing uncommitted changes. (You can restore them with `%s`).' => '커밋되지 않은 변경 사항을 스태시합니다. (`%s`(으)로 복원할 수 있습니다.)',
  'Call %s to build the graph out before calling %s.' => '%2$s을(를) 호출하기 전에 %s을(를) 호출해 그래프를 빌드하세요.',
  'These changes will land:' => '이 변경들은 최종 반영될 예정입니다:',
  'Unrecognized symbol name.' => '심볼 이름을 인식할 수 없습니다.',
  'Support for arbitrary expressions in the `%s` construct was not introduced until PHP 5.5, but this codebase targets an earlier version of PHP.' => '`%s`에서의 임의 표현식 지원은 PHP 5.5부터 도입되었지만, 이 코드베이스는 이전 버전의 PHP를 대상으로 합니다.',
  'Attempting to convert a string encoding from \'%s\' to \'%s\', but the \'%s\' PHP extension is not available. Install %s to work with encodings other than UTF-8.' => '문자열 인코딩을 \'%s\'에서 \'%s\'(으)로 변환하려고 시도했지만 PHP 확장 기능 \'%s\'을(를) 사용할 수 없습니다. UTF-8 이외의 인코딩을 사용하려면 %s을(를) 설치하세요.',
  'Expected a regular expression, but value is not valid: %s' => '정규 표현식을 예상했지만 값이 유효하지 않습니다: %s',
  'INSTALLED' => '설치됨',
  'Restored stashed changes to the working directory.' => '스태시했던 변경 사항을 작업 디렉터리에 복원했습니다.',
  'Default list of "onto" remote for "arc land".' => '"arc land"에 대한 "onto" 원격의 기본 목록입니다.',
  'Fuse two or more files together, absolutely without any involvement of animals,
unlike the competitor unix tool __cat__.
Please do not expect deterministic results because the printed output
is generated by stick electrodes.
Please still consider the environment before printing the result.' => '두 개 이상의 파일을 서로 용접합니다. 경쟁 Unix 도구인 __cat__과 달리, 동물은 절대 관여하지 않습니다.
출력 결과는 용접봉으로 만들어지므로 결정적인 결과를 기대하지 마세요.
그래도 결과를 출력하기 전에는 환경을 생각해 주세요.',
  'Land these changes?' => '이 변경 사항들을 최종 반영합니까?',
  'Future graphs can not be rewound.' => '퓨처 그래프는 되감기될 수 없습니다.',
  'IP address "%s" is not properly formatted. Address segments should be between 0 and 255, inclusive, but segment "%s" has a value outside of this range.' => 'IP 주소 "%s"의 형식이 올바르지 않습니다. 주소 세그먼트는 0에서 255 사이여야 하지만, 세그먼트 "%s"의 값이 이 범위를 벗어났습니다.',
  'BOOKMARK' => '책갈피',
  'Local branch "%s" tracks an upstream but following it leads to a local cycle, ignoring branch.' => '로컬 브랜치 "%s"은(는) 업스트림을 추적하지만, 이를 따라가면 로컬 순환으로 이어집니다, 브랜치를 무시합니다.',
  'Continue Inside Switch' => 'Switch문 내부의 Continue',
  'Expected exactly one argument to "browse(...)" with a token.' => '"browse(...)"에 정확히 인수(토큰)가 하나 주어지는 것을 예상했습니다.',
  'CONFIGURED' => '구성됨',
  'Unable to run a command in directory "%s".' => '"%s" 디렉터리에서 명령을 실행할 수 없습니다.',
  'Return type hints are not available before PHP 7.0.' => '반환 유형 힌트는 PHP 7.0 이전 버전에서는 사용할 수 없습니다.',
  'When updating a revision under git, edit revision information before updating.' => 'Git에서 판을 업데이트할 때는 업데이트하기 전에 판 정보를 편집하세요.',
  'LOCAL CHANGES' => '로컬 변경 사항',
  'This codebase targets PHP %s, but `%s` was not introduced until PHP 5.3.' => '이 코드베이스는 PHP %s을(를) 대상으로 하지만 `%s`은(는) PHP 5.3 까지 도입되지 않았습니다.',
  'UNIT UNSOUND' => '단위 신뢰할 수 없음',
  'Invalid value for `%s`: %s.' => '`%s`에 대한 유효하지 않은 값: %s.',
  '    **extract-symbols.php** [__options__] __path.php__
        Identify the symbols (clases, functions and interfaces) in a PHP
        source file. Symbols are divided into "have" symbols (symbols the file
        declares) and "need" symbols (symbols the file depends on). For example,
        class declarations are "have" symbols, while object instantiations
        with "new X()" are "need" symbols.

        Dependencies on builtins and symbols marked \'@phutil-external-symbol\'
        in docblocks are omitted without __--all__.

        Symbols are reported in JSON on stdout.

        This script is used internally to build maps of library
        symbols.

        It would be nice to eventually implement this as a C++ xhpast binary,
        as it\'s relatively stable and performance is currently awful
        (500ms+ for moderately large files).
' => '    **extract-symbols.php** [__옵션__] __path.php__
        PHP 소스 파일에서 심볼(클래스, 인터페이스, 함수)을 식별합니다. 심볼은 파일이 선언하는 "have" 심볼과 파일이 의존하는 "need" 심볼로 나뉩니다. 예를 들어 클래스 선언은 "have" 심볼이고, "new X()"로 객체를 생성하는 것은 "need" 심볼입니다.

        내장 심볼과 docblock에서 \'@phutil-external-symbol\'로 표시된 심볼에 대한 종속성은 __--all__ 없이는 생략됩니다.

        심볼은 stdout에 JSON으로 출력됩니다.

        이 스크립트는 라이브러리 심볼 맵을 빌드하기 위해 내부적으로 사용됩니다.

        이 기능은 비교적 안정적이고 현재 성능이 매우 좋지 않으므로 (보통 크기의 파일에서도 500ms 이상), 언젠가는 C++ xhpast 바이너리로 구현하면 좋을 것입니다.',
  'Make sure all the symbols used in an %s library are defined and known.  This linter is specific to PHP source in %s libraries.' => '%s 라이브러리에서 사용되는 모든 심볼이 정의되어 있고 알려져 있는지 확인하세요. 이 린터는 %s 라이브러리의 PHP 소스 코드에 특화되어 있습니다.',
  'Argument position specified with "--current" ("%s") is greater than the number of arguments provided ("%s").' => '"--current"("%s")로 지정한 인수 위치가 제공된 인수 수 ("%s")보다 큽니다.',
  'Generator (for query "%s") returned an "ArcanistHardpointTaskResult" object, which is not a valid thing to return from a generator.

This almost always means the generator implementation has a "return $this->yield..." statement which should be a "yield $this->yield..." instead.' => '생성기(쿼리 "%s")가 "ArcanistHardpointTaskResult" 객체를 반환했습니다. 이는 생성기에서 반환할 수 있는 유효한 객체가 아닙니다.

이는 거의 항상 생성기 구현에 "return $this->yield..." 문이 있으며, 이것을 "yield $this->yield..."로 변경해야 함을 의미합니다.',
  'COMMIT RANGE' => '커밋 범위',
  'Specifies the remote to fetch the "into" ref from. By default, this is the same as the "onto" remote.' => '"into" 참조를 가져올 원격을 지정합니다. 기본적으로 이것은 "onto" 원격과 동일합니다.',
  'No tasks found.' => '태스크를 찾을 수 없습니다.',
  '%s' => '%s',
  'No child with index \'%d\'.' => '인덱스가 \'%d\'인 하위가 없습니다.',
  'Choose an object to inspect:' => '검사할 객체를 선택하세요:',
  '%s REVISION(S) ARE ALREADY PUBLISHED' => '%s개 판이 이미 게시됨',
  'Invalid EditorConfig property.' => '유효하지 않은 EditorConfig 속성.',
  'List of event listener classes to install at startup.' => '시작 시 설치할 이벤트 리스너 클래스 목록입니다.',
  'Provide a branch, bookmark, task, or revision name to begin or resume work on.' => '일을 시작하거나 재개할 분기, 책갈피, 태스크 또는 판 이름을 제공하세요.',
  'Use **%s** __command__ for a detailed command reference.' => '자세한 명령어 참조를 보려면 **%s** __명렁어__를 사용하세요.',
  'At the far edge of the grove, you see remotes:' => '숲의 가장자리에는 원격들이 보입니다:',
  'It is nearly dusk. The wind has picked up and the trees around you sway and rustle.' => '거의 해질녘입니다. 바람이 거세졌고 주변 나무들이 흔들리며 바스락거립니다.',
  'The test failed.' => '테스트를 실패했습니다.',
  'Install shell completion.' => '셸 자동 완성 기능을 설치합니다.',
  '%s revision(s) have build failures:' => '%s개 판의 빌드가 실패했습니다:',
  'Failed to upload binary "%s".' => '"%s" 바이너리 업로드를 실패했습니다.',
  'Commit symbol "%s" contains a newline. This is not a valid character in a Git commit symbol.' => '커밋 심볼 "%s"에 줄 바꿈 문자가 포함되어 있습니다. 이는 Git 커밋 심볼에서 유효한 문자가 아닙니다.',
  'ARGV' => 'ARGV',
  'Both sides of this expression are identical, so it always evaluates to a constant.' => '이 표헌식의 양변은 동일하므로 항상 상수로 평가됩니다.',
  'Conflicts in working copy:' => '작업 사본에서 충돌:',
  'Revision \'%s: %s\' has not been accepted. Commit this revision anyway?' => '판 \'%s: %s\'은(는) 승인되지 않았습니다. 그래도 이 판을 커밋합니까?',
  'Commit "%s"' => '커밋 "%s"',
  'Commit a specific revision. If you do not specify a revision, arc will look for committable revisions.' => '특정 판을 커밋하세요. 판을 지정하지 않으면 arc는 커밋 가능한 판을 찾습니다.',
  'Lint all tracked files in the working copy. Ignored files and untracked files will not be linted.' => '작업 사본에서 추적된 모든 파일을 린트 검사합니다. 무시된 파일과 추적되지 않은 파일은 린트 검사 대상이 아닙니다.',
  'Instead of exporting changes from the working copy, export them from a Differential revision.' => '변경 사항을 작업 사본에서 내보내는 대신, Differential 판에서 내보냅니다.',
  '%s submodule(s) have uncommitted or untracked changes:' => '하위 모듈에 커밋되지 않았거나 추적되지 않은 변경 사항이 있습니다:',
  'Normally under git/hg, if the patch is successful, the changes are committed to the working copy. This flag prevents the commit.' => '일반적으로 git/hg 환경에서는 패치가 성공하면 변경 사항이 작업 사본에 커밋됩니다. 이 플래그는 커밋을 방지합니다.',
  'The null coalescing operator is not available before PHP 7.0.' => 'null 병합 연산자는 PHP 7.0 이전 버전에서는 사용할 수 없습니다.',
  'Updating local branch "%s"...' => '로컬 브랜치 "%s" 업데이트 중...',
  'Unable to identify the current branch in the working copy.' => '작업 사본 안의 현재 브랜치를 식별할 수 없습니다.',
  'Type of setting \'%s\' must be boolean.' => '\'%s\' 설정의 유형은 불리언이어야 합니다.',
  'No type name for node type ID \'%s\' in \'%s\' AAST.' => '\'%2$s\' AAST의 노드 유형 ID \'%s\'에 유형 이름이 없습니다.',
  'Search for linters. Search is case-insensitive, and is performed against name and description of each linter.' => '린터를 검색합니다. 검색은 대소문자를 구분하지 않으며, 각 린터의 이름과 설명을 기준으로 수행됩니다.',
  'Call-time pass-by-reference calls are prohibited.' => 'Call-time Pass-by-reference 호출은 금지되어 있습니다.',
  'For consistency, use `%s` (a type cast) instead of `%s` (a function call). Function calls impose additional overhead.' => '일관성을 위해 `%2$s`(함수 호출) 대신 `%s`(타입 캐스트)을(를) 사용하세요. 함수 호출은 추가 오버헤드를 발생시킵니다.',
  'Expected file \'%s\' to begin `%s`.' => '파일 \'%s\'이(가) `%s`(으)로 시작할 것으로 예상했습니다.',
  'Array elements should each occupy a single line.' => '배열 요소는 각각 한 줄씩을 차지해야 합니다.',
  'identify symbols in a PHP source file' => 'PHP 소스 파일 안의 심볼을 식별',
  'Filesystem path "%s" can not be accessed because a parent directory ("%s") is not executable (the current process does not have "+x" permission).' => '상위 디렉터리("%2$s")에 실행 권한이 없기 때문에 파일 시스템 경로 "%s"에 접근할 수 없습니다 (현재 프로세스에 "+x" 권한이 없습니다).',
  'File "%s" does not exist, or you do not have permission to view it.' => '파일 "%s"이(가) 존재하지 않거나 볼 권한이 없습니다.',
  'Included commits in branch %s:' => '브랜치 %s에서 포함된 커밋:',
  '  NOTE: Failed to load the commit message from Differential (for revision "%s".)' => '  참고: Differential에서 (판 "%s"에 대한)커밋 메시지를 불러오는 데 실패했습니다.',
  'Spaces Inside Parentheses' => '괄호 안에 공백',
  'Configuration (%s)' => '구성 (%s)',
  'This file contains a syntax error: %s' => '이 파일에 문법 오류가 있습니다: %s',
  'Create new library?' => '새 라이브러리를 만드시겠습니까?',
  'Provide a nonempty symbol to begin or resume work on.' => '작업을 시작하거나 재개하려면 비어 있지 않은 심볼을 제공하세요.',
  'Remote "%s", specified with "--into", is not a valid fetchable remote.' => '"--into"로 지정된 원격 "%s"은(는) 유효한 가져올 수 있는 원격이 아닙니다.',
  'Name of a concrete subclass of `%s` which tunes the analysis of `%s` statements for this linter.' => '이 린터에 대해 `%2$s` 구문의 분석을 조정하는 `%s`의 구상 하위 클래스 이름입니다.',
  'Single lined arrays should not have a trailing comma.' => '한 줄로 된 배열에는 끝에 쉼표가 없어야 합니다.',
  'Generator has never rewound, but has a value to send. This is invalid.' => '생성기가 되감기된 적은 없지만 전송할 값이 있습니다. 이는 유효하지 않습니다.',
  'Remote "%s" has multiple bookmarks with name "%s". This is unexpected.' => '원격 "%s"에 "%s"(이)라는 이름의 책갈피가 여러 개 있습니다. 이는 예상치 못한 상황입니다.',
  'Base commit rule \'%s\' (from source \'%s\') is not a recognized rule.' => '기본 커밋 규칙 \'%s\'(소스 \'%s\'에서부터)은(는) 인식되지 않는 규칙입니다.',
  'Unsafe Usage of Dynamic String' => '동적 문자열의 안전하지 않은 사용법',
  'it is what you typed when prompted.' => '이는 입력을 요청받았을 때 입력한 것입니다.',
  '%s can not be used with %s.' => '%s은(는) %s와(과) 함께 사용할 수 없습니다.',
  'Merge conflicts in working copy:' => '작업 사본에서 병합 충돌:',
  'Expected to find key "%s", but it is not present.' => '키 "%s"을(를) 찾을 것으로 예상했지만 존재하지 않습니다.',
  'Night has fallen, and the thin sliver of moon overhead offers no comfort. It is almost pitch black. The night is bitter cold. It will be difficult to look around in these conditions.' => '밤이 찾아왔고, 오버헤드로 가느다란 초승달이 떠 있지만 위안이 되지 못합니다. 거의 칠흑 같은 어둠이 깔려 있습니다. 밤은 몹시 춥습니다. 이런 날씨에 주위를 둘러보는 것은 어려울 것입니다.',
  'Future has already resolved. Futures may not resolve more than once.' => '퓨처가 이미 해결되었습니다, 퓨처는 두 번 이상 해결될 수 없습니다.',
  '**version**' => '**버전**',
  'Broken' => '망가짐',
  'Length must be larger than 0!' => '길이는 0보다 커야 합니다!',
  'The "SHELL" environment variable does not match any recognized shell.' => '"SHELL" 환경 변수는 알려진 셸과 일치하지 않습니다.',
  'All reviewers are away until %s:' => '모든 검토자가 %s까지 부재 중입니다:',
  'Server to connect to.' => '연결할 서버입니다.',
  'Created a new Differential revision:' => '새로운 Differential 판을 만듭니다:',
  'The name of this file differs from the name of the class, interface, trait or enum it declares. Rename the file to `%s`.' => '이 파일의 이름이 파일에서 선언한 클래스, 인터페이스, trait 또는 enum의 이름과 다릅니다. 파일 이름을 `%s`(으)로 바꾸세요.',
  'When creating a revision, try to use the working copy commit message verbatim, without prompting to edit it. When updating a revision, update some fields from the local commit message.' => '판을 생성할 때는 편집하라는 확인 요청 없이 작업 사본의 커밋 메시지를 그대로 사용합니다. 판을 업데이트할 때는 로컬 커밋 메시지의 일부 필드를 업데이트하세요.',
  'LOAD STASH' => '스태시 로드',
  'Put space after comment start.' => '댓글 시작 부분 뒤에 공백을 넣으세요.',
  'class, interface, trait or enum' => '클래스, 인터페이스, Trait 또는 Enum',
  'Failed to write file \'%s\'.' => '\'%s\' 파일 쓰기를 실패했습니다.',
  'Path \'%s\' does not exist!' => '\'%s\' 경로가 존재하지 않습니다!',
  'Config: Reading system configuration file "%s"...' => '구성: "%s" 시스템 구성 파일을 읽는 중...',
  'Continue even though reviewers are unavailable?' => '검토자가 사용 불가능 하더라도 계속합니까?',
  'Config: Reading local configuration file "%s"...' => '구성: "%s" 로컬 구성 파일을 읽는 중...',
  'Use of `%s`' => '`%s` 사용',
  'Unable to parse \'%s\' file \'%s\'.' => '\'%s\' 파일 \'%s\'의 구문을 분석할 수 없습니다.',
  'Too few arguments to %s.' => '%s에 인수가 너무 적습니다.',
  'Unknown Mercurial feature "%s".' => '알 수 없는 Mercurial 기능 "%s".',
  'They river bubbles peacefully.' => '강물은 평화롭게 거품을 일으키며 흐릅니다.',
  'PHP files must only contain PHP code.' => 'PHP 파일은 PHP 코드만을 포함해야 합니다.',
  'Exit after serving __limit__ clients.' => '__제한__개의 클라이언트를 처리한 뒤 종료합니다.',
  '<Process was terminated by signal %s (%d).>

' => '<프로세스가 신호 %s에 의해 종료되었습니다 (%d).>',
  'Line Too Long' => '줄이 너무 김',
  'Skip' => '건너뛰기',
  'Confirms that the correct changes have been selected to land.' => '최종 반영할 올바른 변경 사항이 선택되었음을 확인합니다.',
  'Source code should contain only ASCII bytes with ordinal decimal values between 32 and 126 inclusive, plus linefeed. Do not use UTF-8 or other multibyte charsets.' => '소스 코드는 32 이상 126 이하의 10진 서수 값을 가진 ASCII 바이트와 라인 피드만 포함해야 합니다. UTF-8 또는 다른 멀티바이트 문자셋을 사용하지 마세요.',
  'There are no changes to generate a diff from!' => '차이를 생성할 변경 사항이 없습니다!',
  'Type' => '유형',
  'Toolset "%s" is unknown. The binary should be executed so that "argv[0]" identifies a supported toolset. Rename the binary or install the library that provides the desired toolset. Current available toolsets: %s.' => 'Toolset "%s"을(를) 알 수 없습니다. 바이너리는 "argv[0]"이 지원되는 toolset을 식별하도록 실행되어야 합니다. 바이너리 이름을 바꾸거나 원하는 toolset을 제공하는 라이브러리를 설치하세요. 현재 사용 가능한 toolset: %s.',
  'Rule \'%s\' can never be reduced: it recurses indefinitely and reaches no production of terminals.' => '규칙 \'%s\'은(는) 절대 reduce될 수 없습니다: 무한히 재귀하며 터미널의 프로덕션에 도달하지 않습니다.',
  'Specifying keys when destructuring arrays is not available before PHP 7.1.' => '배열을 구조 분해할 때 키를 지정하는 것은 PHP 7.1 이전 버전에서는 사용할 수 없습니다.',
  'Translating legacy name \'%s\' to \'%s\'' => '레거시 이름 \'%s\'을(를) \'%s\'(으)로 번역하는 중',
  'Could not encode repository versions!' => '저장소 버전을 인코딩할 수 없습니다!',
  'Set minimum message severity. One of: %s. Defaults to \'%s\'.' => '메시지 심각도의 최소값을 설정하세요. 다음 중 하나: %s. 기본값은 \'%s\'입니다.',
  'Paamayim Nekudotayim Spacing' => 'Paamayim Nekudotayim 띄어짐',
  'Command-Line Flags' => '명령 줄 플래그',
  'Expected JSON response from Asana.' => 'Asana에서 JSON 응답을 예상했습니다.',
  'The name or path of the coding standard to use.' => '사용할 코딩 표준의 이름 또는 경로입니다.',
  'Space Around Comma' => '쉼표 주변 공백',
  'Unable to parse path as PHAR file. PHAR file paths must be prefixed with `%s` and include a segment with one of these extensions (case-sensitive): %s' => '경로를 PHAR 파일로 구문 분석할 수 없습니다. PHAR 파일 경로는 `%s` 접두어로 시작하고 다음 확장자 중 하나(대소문자 구분)를 가진 세그먼트를 포함해야 합니다: %s',
  'Enabled verbose mode.' => '자세한 정보 모드가 활성화되었습니다.',
  'PHP Syntax Error!' => 'PHP 문법 오류!',
  'INVALID CREDENTIALS' => '유효하지 않은 자격 증명',
  'Attempting to rebase changes.' => '변경 사항을 리베이스하려고 시도합니다.',
  'Hold indefinitely without prompting.' => '확인 요청 없이 무기한 유지합니다.',
  'Cannot access `%s` when current class scope has no parent.' => '현재 클래스 범위에 상위가 없을 때는 `%s`에 접근할 수 없습니다.',
  '"%s" is being run noninteractively, but the argument list is missing "--" to indicate end of flags.' => '"%s"이(가) 비대화형으로 실행 중이지만, 인수 목록에 플래그 끝을 나타내는 "--"가 누락되었습니다.',
  'Configuration option ("%s") defined by extension "%s" conflicts with an existing option. Each option must have a unique key.' => '확장 기능 "%2$s"에서 정의한 구성 옵션("%s")이 기존 옵션과 충돌합니다. 각 옵션은 고유한 키를 가져야 합니다.',
  '%s called with no messages!' => '%s이(가) 메시지 없이 호출되었습니다!',
  'Two files were added with identical explicit keys ("%s"); each explicit key must be unique.' => '동일한 명시적 키("%s")를 가진 파일이 두 개 추가되었습니다. 각 명시적 키는 고유해야 합니다.',
  'Specify exactly one base commit. The end of the commit range is always the working copy state.' => '기준 커밋을 정확히 하나만 지정하세요. 커밋 범위의 끝은 항상 작업 사본 상태입니다.',
  'The remote URI for this working copy is "%s".' => '이 작업 사본에 대한 원격 URI는 "%s"입니다.',
  'Unable to launch an interactive text editor. Set the %s environment variable to an appropriate editor.' => '대화형 텍스트 편집기를 실행할 수 없습니다. 환경 변수 %s을(를) 적절한 편집기로 설정하세요.',
  'URI \'%s\' must be fully qualified and include host name.' => 'URI \'%s\'은(는) 정규화되어 있어야 하며 호스트 이름을 포함해야 합니다.',
  'Command exited with error code %d.' => '명령이 오류 코드 %d와(과) 함께 종료되었습니다.',
  'Landing the current HEAD, "%s".' => '현재 HEAD인 "%s"을(를) 최종 반영합니다.',
  'CoffeeLint is a style checker that helps keep CoffeeScript code clean and consistent.' => 'CoffeeLint는 CoffeeScript 코드를 깔끔하고 일관성 있게 유지하는 데 도움이 되는 스타일 검사 도구입니다.',
  'Requested path \'%s\' is not a directory.' => '요청된 경로 \'%s\'은(는) 디렉터리가 아닙니다.',
  'Command failed with error #%d!' => '명령이 오류 #%d(으)로 실패했습니다!',
  'You can\'t get local commit information for a repository with no commits.' => '커밋이 없는 저장소의 경우 로컬 커밋 정보를 가져올 수 없습니다.',
  'Unable to find Mono and you are not on Windows!' => 'Mono를 찾을 수 없으며 현재 윈도우를 사용하고 있지 않습니다!',
  'You may now push this commit upstream, as appropriate (e.g. with \'%s\' or by printing and faxing it).' => '이제 적절히 이 커밋을 업스트림으로 푸시할 수 있습니다(예: \'%s\' 또는 출력해서 팩스로 보내기).',
  'Trying to pop an empty workflow stack!' => '빈 워크플로 스택을 pop 하려고 했습니다!',
  'MULTIPLE BRANCH HEADS' => '복수의 브랜치 헤드',
  'SimpleXML Linter' => 'SimpleXML 린터',
  'Load one or more configuration files. If this flag is provided, the system and user configuration files are ignored.' => '하나 이상의 구성 파일을 로드합니다. 이 플래그가 제공되면 시스템 및 사용자 구성 파일은 무시됩니다.',
  'Can\'t parse an empty diff!' => '비어있는 diff의 구문을 분석할 수 없습니다!',
  'Unexpected data type in request data: %s.' => '요청 데이터 중 예측하지 못한 자료형이 있습니다: %s.',
  'You are trying to construct an ambiguous URI: query parameter "%s" is present in both the string argument ("%s") and the map argument.' => '모호한 URI를 구성하려고 합니다: 쿼리 매개변수 "%s"이(가) 문자열 인수("%s")와 맵 인수 모두에 존재합니다.',
  'Convention: no spaces around string concatenation operator.' => '명명 규칙: 문자열 연결 연산자 주위에는 공백을 두지 마세요.',
  'Unnecessary Final Modifier' => '불필요한 최종 수식어',
  'INVALID LOCALE' => '유효하지 않은 로케일',
  'DOS Newlines' => 'DOS 새 줄',
  'Support for grouped use statements was not introduced until PHP 7.0 but this codebase targets an earlier version of PHP.' => '그룹화된 use 문에 대한 지원은 PHP 7.0부터 도입되었지만, 이 코드베이스는 이전 버전의 PHP를 대상으로 합니다.',
  'There was an error resolving the server hostname. Check that you are connected to the internet and that DNS is correctly configured. (Did you add the domain to `%s` on some other machine, but not this one?)' => '서버 호스트 이름을 확인하는 데 오류가 발생했습니다. 인터넷에 연결되어 있는지, DNS가 올바르게 구성되어 있는지 확인하세요. (다른 컴퓨터에서는 도메인을 `%s`에 추가했지만 이 컴퓨터에는 추가하지 않았습니까?)',
  'Usage Exception:' => '사용법 예외 발생:',
  'Pushing changes to "%s".' => '"%s"에 대한 변경 사항을 푸시합니다.',
  'Argument was \'%s\', but must be \'%s\'. For example, %s' => '인수는 \'%s\'이지만 \'%s\'여야 합니다. 예를 들어, %s',
  'User "%s"' => '사용자 "%s"',
  'Installing certificate for \'%s\'...' => '\'%s\'에 대한 자격 증명을 설치하는 중...',
  'You are passing an integer to %s which is so large it can not be represented without loss of precision by Javascript\'s native %s class. Use %%# instead.' => '%s에 전달하는 정수 값이 너무 커서 자바스크립트의 기본 클래스인 %s(으)로는 정밀도 손실 없이 표현할 수 없습니다. 대신 %%#을(를) 사용하세요.',
  'Config: Did not find local configuration at "%s".' => '구성: "%s"에서 로컬 구성을 찾을 수 없습니다.',
  'Symbol \'%s\' in production \'%s\' (\'%s\') of rule \'%s\' does not name a rule or terminal. Did you misspell a symbol, fail to specify a terminal, or forget a rule?' => '규칙 \'%4$s\'의 프로덕션 \'%2$s\'(\'%3$s\')에 있는 심볼 \'%s\'은(는) 규칙 또는 터미널 이름이 아닙니다. 심볼 철자를 틀렸거나, 터미널을 지정하지 않았거나, 규칙을 잊었습니까?',
  'To update shell completion support for "%s", your existing "%s" file will be modified. This line will be removed:' => '"%s"에 대한 셸 자동 완성 기능을 업데이트하기 위해, 기존 "%s" 파일이 수정됩니다. 이 줄이 제거됩니다:',
  'Confirms that local commits which are not associated with a revision have been associated correctly and should land.' => '판과 연결되지 않은 로컬 커밋이 올바르게 연결되었고 최종 반영되어야 함을 확인합니다.',
  'Class' => '클래스',
  'Specify either "true" or "false".' => '"true" 또는 "false"를 지정하세요.',
  'Rules are already up to date for "%s" in: %s' => '규칙은 이미 다음에서 "%s" 날짜에 대해 최신입니다: %s',
  'Installing shell completion support for "%s" into "%s".' => '"%s"에 대한 셸 자동 완성 기능을 "%s"에 설치합니다.',
  'Export change as a git patch. This format is more complete than unified, but less complete than arc bundles. These patches can be applied with \'%s\' or \'%s\'.' => '변경 사항을 git 패치로 내보냅니다. 이 형식은 unified보다 완전하지만 arc 번들보다는 덜 완전합니다. 이 패치는 \'%s\' 또는 \'%s\'(으)로 적용할 수 있습니다.',
  'Expected to find meminfo key "%s" in meminfo source "%s".' => 'meminfo 키 "%s"을(를) meminfo 소스 "%s"에서 찾을 것으로 예상했습니다.',
  'Will merge into empty state, selected with the "--into-empty" flag.' => '"--into-empty" 플래그로 선택한 빈 상태에 병합됩니다.',
  'Use parentheses when invoking a constructor.' => '생성자를 호출할 때 괄호를 사용하세요.',
  'Automatically amending HEAD with lint patches.' => '린트 패치로 HEAD를 자동으로 어멘드합니다.',
  'Failed to remove directory \'%s\'!' => '\'%s\' 디렉터리 제거를 실패했습니다!',
  'Prepare the changes to be pushed, but do not actually push them.' => '푸시할 변경 사항을 준비하지만 실제로 푸시하지는 않습니다.',
  'This test is expected to fail.' => '이 테스트는 실패할 것으로 예측됩니다.',
  'SKIP' => '건너뛰기',
  'Unexpected type %s.' => '예상치 못한 유형 %s.',
  'Execution of "git cat-file --batch-check" emitted an unexpected line ("%s").' => '"git cat-file --batch-check" 실행 결과 예기치 않은 줄("%s")이 출력되었습니다.',
  'Do not print status messages to stdout.' => 'stdout에 상태 메시지를 출력하지 않습니다.',
  'Typed constants are not available before PHP 8.3.' => 'Typed 상수는 PHP 8.3 이전 버전에서는 사용할 수 없습니다.',
  'AMBIGUOUS MARKER' => '모호한 마커',
  'Revision Symbol "%s"' => '판 심볼 "%s"',
  'Unable to open stdout temporary file ("%s") for writing.' => 'stdout 임시 파일("%s")을 쓰기를 위해 열 수 없습니다.',
  'Class member access on instantiation was not introduced until PHP 5.4, but this codebase targets an earlier version of PHP. You can rewrite this expression using `%s`.' => '인스턴스화 시 클래스 멤버 접근은 PHP 5.4부터 도입되었지만, 이 코드베이스는 이전 버전의 PHP를 대상으로 합니다. `%s`을(를) 사용하여 이 표현식을 다시 작성할 수 있습니다.',
  'The name of this file differs from the name of the class or interface it declares. Rename the file to `%s`.' => '이 파일의 이름이 파일에서 선언한 클래스 또는 인터페이스의 이름과 다릅니다. 파일 이름을 `%s`(으)로 바꾸세요.',
  'Deleted' => '삭제됨',
  'Configuration value ("%s") defined in source "%s" is not valid.' => '소스 "%2$s"에 정의된 구성 값("%s")이 유효하지 않습니다.',
  'MULTIPLE "ONTO" BRANCHES' => '복수의 "onto" 브랜치',
  'The HTTP method \'%s\' is not supported. Supported HTTP methods are: %s.' => 'HTTP 메서드 \'%s\'은(는) 지원되지 않습니다. 지원되는 HTTP 메서드: %s.',
  'Some hunks could not be applied cleanly by the unix \'%s\' utility. Your working copy may be different from the revision\'s base, or you may be in the wrong subdirectory. You can export the raw patch file using \'%s\', and then try to apply it by fiddling with options to \'%s\' (particularly, %s), or manually. The output above, from \'%s\', may be helpful in figuring out what went wrong.' => '일부 hunk를 unix \'%s\' 유틸리티가 깔끔하게 적용하지 못했습니다. 작업 사본이 판의 기준과 다르거나 잘못된 하위 디렉터리에 있을 수 있습니다. \'%s\'을(를) 사용해 원본 패치 파일을 내보낸 뒤 \'%s\'의 옵션(특히 %s)을 조정하거나 수동으로 적용해 볼 수 있습니다. 위의 \'%s\' 출력은 무엇이 잘못되었는지 파악하는 데 도움이 될 수 있습니다.',
  'Show the changes that will land. Does not modify the working copy or the remote.' => '최종 반영될 변경 사항을 보여줍니다. 작업 사본이나 원격을 수정하지 않습니다.',
  'PUSH STAGING' => '스테이징에 푸시',
  'SUBMITTING' => '제출 중',
  'Associate the working copy with a specific repository. Normally, %s can figure this association out on its own, but if your setup is unusual you can use this option to tell it what the desired value is.' => '작업 사본을 특정 저장소와 연결합니다. 일반적으로 %s이(가) 이 연결을 스스로 파악할 수 있지만, 설정이 특이한 경우 이 옵션으로 원하는 값을 지정할 수 있습니다.',
  'Fetch URI: %s' => '가져오기 URI: %s',
  'Default value for parameters with a true type hint can only be true.' => '참 유형 힌트가 있는 매개변수의 기본값은 참만 가능합니다.',
  'Remote "%s" was selected with the "--onto-remote" flag.' => '원격 "%s"이(가) "--onto-remote" 플래그로 선택되었습니다.',
  'it is the greatest common ancestor of the working directory and the commit you specified explicitly.' => '이는 현재 작업 디렉터리와 사용자가 명시적으로 지정한 커밋의 최대 공통 조상입니다.',
  'IP address "%s" is not properly formatted. Expected an IPv4 address like "%s", or an IPv6 address like "%s".' => 'IP 주소 "%s"의 형식이 올바르지 않습니다. "%s" 같은 IPv4 주소 또는 "%s" 같은 IPv6 주소를 예상했습니다.',
  'Response Body: %s' => '응답 본문: %s',
  'Default branch name to view on server. Defaults to "%s".' => '서버에 보일 기본 브랜치 이름입니다. 기본값은 "%s"입니다.',
  'Do not print a success message.' => '성공 메시지를 출력하지 않습니다.',
  'The shift operators no longer accept negative shifts in PHP 7.0.' => '시프트 연산자는 PHP 7.0에서 더 이상 음수 시프트를 허용하지 않습니다.',
  'Failed to read socket.' => '소켓 읽기를 실패했습니다.',
  'Start in remote console mode.' => '원격 콘솔 모드에서 시작합니다.',
  'Landing onto target "%s", selected by following tracking branches upstream to the closest remote branch.' => '추적 브랜치를 따라 가장 가까운 원격 브랜치까지 올라가 선택된 대상 "%s"에 최종 반영합니다.',
  'In a "switch" statement, "continue;" is equivalent to "break;" but causes compile errors beginning with PHP 7.0.0.' => '"switch" 문에서 "continue;"는 "break;"와 동일한 기능을 하지만 PHP 7.0.0 버전부터 컴파일 오류를 발생시킵니다.',
  'Specifies the default behavior when "arc land" is run with no "--onto-remote" flag.' => '"arc land"가 "--onto-remote" 플래그 없이 실행될 때의 기본 동작을 지정합니다.',
  'Copied Away' => '다른 곳으로 복사됨',
  'Expected to find "%s" in `%s` output, but did not.' => '`%2$s` 출력에서 "%s"을(를) 찾을 것으로 예상했지만, 그렇지 않았습니다.',
  'you specified \'%s\' in your %s \'base\' configuration.' => '%2$s \'base\' 구성에서 \'%s\'을(를) 지정했습니다.',
  '%s revision(s) have ongoing builds:' => '%s개 판의 빌드가 진행중입니다:',
  'MERGE CONFLICTS' => '병합 충돌',
  'You must set PayPal API credentials!' => 'PayPal API 자격 증명을 설정해야 합니다!',
  'Failed to create directory \'%s\'.' => '\'%s\' 디렉터리 만들기를 실패했습니다.',
  'Symbol "%s" is ambiguous: it matches multiple markers (of type "%s"). Use an unambiguous identifier.' => '심볼 "%s"은(는) 모호합니다: 여러개의 마커(유형 "%s")와 일치합니다. 모호하지 않은 식별자를 사용하세요.',
  'Default Parameters' => '기본 매개변수',
  'copies' => '복사',
  'File \'%s\' mixes function (%s) and class/interface (%s) definitions in the same file. A file which declares a class or an interface MUST declare nothing else.' => '파일 \'%s\'은(는) 함수(%s)와 클래스/인터페이스(%s) 정의를 같은 파일에 혼합하여 사용합니다. 클래스 또는 인터페이스를 선언하는 파일은 다른 어떤 것도 선언해서는 안 됩니다.',
  'Local commit "%s" (reachable from: %s) does not merge cleanly into "%s". Rebase or merge local changes so they can merge cleanly.' => '"%s" 로컬 커밋("%s"에서 접근 가능)은 "%s"에 깨끗하게 병합되지 않습니다. 로컬 변경 사항을 리베이스하거나 병합하면 깨끗하게 병합할 수 있습니다.',
  'Configuration option ("%s") defined by extension "%s" conflicts with an alias for another option ("%s"). The key and aliases of each option must be unique.' => '확장 기능 "%2$s"에 의해 정의된 구성 옵션("%s")이 다른 확장 기능 옵션("%3$s")의 별칭과 충돌합니다. 각 옵션의 키와 별칭은 고유해야 합니다.',
  'Unable to determine repository for this change.' => '이 변경사항을 위한 저장소를 결정할 수 없습니다.',
  'Provided path \'%s\' is not a %s library.' => '제공된 경로 \'%s\'은(는) %s 라이브러리가 아닙니다.',
  'Downloading binary data...' => '바이너리 데이터를 다운로드하는 중...',
  'Unable to access %s or `%s` on this system to get system memory information.' => '이 시스템에서 시스템 메모리 정보를 얻기 위해 %s 또는 `%s`에 접근할 수 없습니다.',
  'Unable to locate xUnit console runner. Configure it with the `%s\' option in %s.' => 'xUnit 콘솔 실행기를 찾을 수 없습니다. %2$s의 `%s` 옵션을 사용하여 구성하세요.',
  'This working copy is configured to have an immutable local history, using the "history.immutable" configuration option. Amending the working copy will mutate local history.' => '이 작업 사본은 "history.immutable" 구성 옵션을 사용하여 변경 불가능한 로컬 역사를 갖도록 구성되어 있습니다. 작업 사본을 수정하면 로컬 역사가 변경됩니다.',
  'You have uncommitted changes in the working copy ("%s") for this library ("%s"):' => '이 라이브러리("%2$s")의 작업 사본("%s")에 커밋되지 않은 변경 사항이 있습니다:',
  'Set key "%s" = %s in %s config (was %s).' => '%3$s 구성에서 키 "%s" = %s (으)로 설정합니다 (원래 값: %4$s).',
  'Function %s is not implemented!' => '함수 %s은(는) 구현되지 않았습니다!',
  'Revision \'%s: %s\' was generated from \'%s\', but current working copy root is \'%s\'. Commit this revision anyway?' => '\'%s:%s\' 판은 \'%s\'에서 생성되었지만 현재 작업 사본 루트는 \'%s\'입니다. 그래도 이 판을 커밋합니까?',
  'Unable to write configuration: more than one writable source exists in the "%s" scope.' => '구성을 쓸 수 없습니다: "%s" 범위에 쓰기 가능한 소스가 두 개 이상 있습니다.',
  'Emit all symbols, including built-ins and declared externals.' => '내장 심볼과 선언된 외부 심볼을 포함한 모든 심볼을 출력합니다.',
  'Convention: space before opening parenthesis in anonymous function declarations.' => '명명 규칙: 익명 함수 선언 시 여는 괄호 앞에 공백을 두세요.',
  'Reference assignments in array destructuring is not available before PHP 7.3.' => '배열 구조 분해에서의 참조 할당은 PHP 7.3 이전 버전에서는 사용할 수 없습니다.',
  'The token "%s" is not formatted correctly. Valid API tokens should begin "cli-" and be 32 characters long. Make sure you visited the correct URI and copy/pasted the token correctly.' => '토큰 "%s"의 형식이 올바르지 않습니다. 유효한 API 토큰은 "cli-"로 시작하고 32자여야 합니다. 올바른 URI에 접속하여 토큰을 정확하게 복사/붙여넣기했는지 확인하세요.',
  'You follow a wide, straight path to the north and arrive in a grove of fruit trees after a few minutes of walking. The grass underfoot is thick and small insects flit through the air.' => '북쪽으로 뻗은 넓고 곧은 길을 따라 몇 분 정도 걸으면 과일나무 숲에 도착합니다. 발밑의 풀은 빽빽하고 작은 곤충들이 공중을 날아다닙니다.',
  'Specifies the default behavior when "arc land" is run with no "--onto" flag.' => '"arc land"가 "--onto" 플래그 없이 실행될 때의 기본 동작을 지정합니다.',
  'Anonymous readonly classes are not available before PHP 8.3.' => '익명 읽기 전용 클래스는 PHP 8.3 이전 버전에서는 사용할 수 없습니다.',
  'Functions which should not be used because they represent the unsafe usage of dynamic strings.' => '동적 문자열의 안전하지 않은 사용법을 나타내므로 사용해서는 안 되는 함수들입니다.',
  'Failed to load library at location "%s". This library is specified by "%s". Check that the library is up to date.' => '"%s" 위치에서 라이브러리를 로드하지 못했습니다. 이 라이브러리는 "%s"(으)로 지정되어 있습니다. 라이브러리가 최신인지 확인하세요.',
  'Use of Close Tag `%s`' => '종료 태그 `%s`의 사용',
  'TO UPGRADE: %s' => '업그레이드 하려면: %s',
  'No type ID for token type name \'%s\' in \'%s\' AAST.' => '\'%2$s\' AAST의 토큰 유형 이름 \'%s\'에 유형 ID가 없습니다.',
  'Ruleset for selecting commit ranges.' => '커밋 범위 선택을 위한 규칙집합입니다.',
  'Alias definitions form an unreasonably deep stack. A chain of aliases may not resolve more than %s times.' => '별칭 정의가 지나치게 깊은 스택을 형성합니다. 별칭 체인은 %s번보다 많이 해석될 수 없습니다.',
  'Default pager command.' => '기본 페이저 명령입니다.',
  'Expected exactly one argument to "remote(...)" with a remote name.' => '"remote(...)"에 정확히 인수(원격 이름)가 하나 주어지는 것을 예상했습니다.',
  'Unable to find \'%s\' file to configure linters. Create an \'%s\' file in the root directory of the working copy.' => '린터를 구성하는 데 필요한 \'%s\' 파일을 찾을 수 없습니다. 작업 사본의 루트 디렉터리에 \'%s\' 파일을 생성하세요.',
  'HTTP extension "%s" (of class "%s") returned an invalid result from "%s": expected null, or an object of class "%s".' => 'HTTP 확장 기능 "%s"(클래스 "%s")이(가) "%s"에서 유효하지 않은 결과를 반환했습니다: null 또는 클래스 "%s"의 객체를 예상했습니다.',
  'Unable to find any git commit named \'%s\' in this repository.' => '이 저장소에서 \'%s\'이라는 이름의 git 커밋을 찾을 수 없습니다.',
  'Lists bookmarks in the working copy, annotated with additional information
about review status.' => '작업 사본의 책갈피 목록을 나열하고, 검토 상태에 대한 추가 정보를 주석으로 추가합니다.',
  'Use `%s` to instantiate the current class.' => '현재 클래스를 인스턴스화하기 위해 `%s`을(를) 사용하세요.',
  'Specify a key and a value.' => '키와 값을 지정하세요.',
  'Options \'%s\', \'%s\' and \'%s\' are not compatible. Choose exactly one export format.' => '옵션 \'%s\', \'%s\' 및 \'%s\'은(는) 호환되지 않습니다. 내보내기 형식을 정확히 하나만 선택하세요.',
  'Fetching "%s" from remote "%s"...' => '원격 "%2$s"에서 "%s" 가져오는 중...',
  'Limit the amount of tasks outputted, default is all.' => '출력되는 작업 수의 제한입니다. 기본값은 all입니다.',
  'Amend HEAD with lint patches?' => '린트 패치로 HEAD를 어멘드합니까?',
  'Using `%s` as the only type hint is not allowed before PHP 8.2.' => '`%s`을(를) 유일한 타입 유형으로 사용하는 것은 PHP 8.2 이전 버전에서는 허용되지 않습니다.',
  'Connecting to "%s"...' => '"%s"에 연결 중...',
  'Disable ANSI terminal codes, printing plain text with no color or style.' => 'ANSI 터미널 코드를 비활성화하고 색상이나 스타일 없이 일반 텍스트로 출력합니다.',
  'Unrecognized argument \'%s\'. Try \'%s\'.' => '\'%s\' 인수를 인식할 수 없습니다. \'%s\'을(를) 시도하세요.',
  'Library name should contain only lowercase letters and hyphens.' => '라이브러리 이름은 소문자와 하이픈만 포함해야 합니다.',
  'Land %s commit(s)?' => '%s개 커밋을 최종 반영합니까?',
  '%s does not update any revision.' => '%s은(는) 어느 판도 업데이트하지 않습니다.',
  'Unable to find any libraries under the current working directory. To create a library, provide a path.' => '현재 작업 디렉터리에서 라이브러리를 찾을 수 없습니다. 라이브러리를 생성하려면 경로를 제공하세요',
  '<default>' => '<기본값>',
  'Do not run lint.' => '린트를 실행하지 않습니다.',
  'If you intended to update an existing revision, use:' => '기존 판을 업데이트하려면 다음을 사용하세요:',
  'Override configured unit engine for this project.' => '이 프로젝트를 위해 구성된 단위 엔진을 덮어씁니다.',
  'Expected \'%s\' in unified diff.' => '통합된 차이에서 \'%s\'이(가) 예상되었습니다.',
  'Unable to upload file: failed to determine filesize of path "%s".' => '파일을 업로드할 수 없습니다. 경로 "%s"의 파일 크기를 결정하는데 실패했습니다.',
  'String does not require double quotes. For consistency, prefer single quotes.' => '문자열에는 큰따옴표가 필요하지 않습니다. 일관성을 위해 작은따옴표를 사용하는 것이 좋습니다.',
  'Methods should have their visibility declared explicitly.' => '메서드의 공개 여부는 명시적으로 선언되어야 합니다.',
  'Merge strategy "%s" specified in "%s" configuration is unknown. Supported merge strategies are: %s.' => '"%2$s" 구성에 지정된 병합 방식 "%s"을(를) 알 수 없습니다. 지원되는 병합 방식: %3$s.',
  'Relative commit \'%s\' is not the name of a commit!' => '상대적 커밋 \'%s\'은(는) 커밋의 이름이 아닙니다!',
  'Associates this working copy with a specific server.' => '이 작업 사본을 특정한 서버에 연관짓습니다.',
  'You must configure \'%s\' with the name of a linter in order to use %s.' => '%2$s을(를) 사용하려면 \'%s\'에 린터 이름을 구성해야 합니다.',
  'Projects to assign to the task.' => '태스크에 할당할 프로젝트입니다.',
  'Unknown event %s' => '%s 이벤트를 알 수 없습니다',
  'Not installing API token.' => 'API 토큰을 설치하지 않습니다.',
  'Config: Did not find system configuration at "%s".' => '구성: "%s"에서 시스템 구성을 찾을 수 없습니다.',
  'Continue?' => '계속하시겠습니까?',
  'Failed to push changes to staging area. Correct the issue, or use --skip-staging to skip this step.' => '스테이징 영역으로 변경 사항을 푸시하는 데 실패했습니다. 문제를 해결하거나 --skip-staging을 사용해서 이 단계를 건너뛰세요.',
  'Execution of "hg log" emitted an unexpected line ("%s").' => '"hg log" 실행 중 예상치 못한 줄("%s")이 출력되었습니다.',
  '%dm%02ds' => '%d분%02d초',
  'you explicitly specified the empty tree.' => '빈 트리를 명시적으로 지정했습니다.',
  'Apply this patch to %s?' => '이 패치를 %s에 적용합니까?',
  'Commit Message' => '커밋 메시지',
  'Unrecognized lint message code "%s".' => '"%s" 린트 메시지 코드를 인식할 수 없습니다.',
  'Lists branches in the working copy, annotated with additional information
about review status.' => '작업 사본의 브랜치 목록을 나열하고, 검토 상태에 대한 추가 정보를 주석으로 추가합니다.',
  'List statements should use the `%s` statement syntax.' => '리스트 문은 `%s`문 구문을 사용해야 합니다.',
  'Constants on traits are not available before PHP 8.2.' => 'Trait에서의 상수는 PHP 8.2 이전 버전에서는 사용할 수 없습니다.',
  'Updating %s: %s' => '%s 업데이트 중: %s',
  'Current Value' => '현재 값',
  'Install jsonlint using `%s`.' => '`%s`을(를) 사용해 jsonlint를 설치합니다.',
  'Create %s new remote bookmark(s)?' => '새 원격 책갈피 %s개를 생성합니까?',
  'identify symbols in PHP source files' => 'PHP 소스 파일 안의 심볼을 식별',
  '%s does not support the "%s" modifier.' => '%s은(는) "%s" 수식어를 지원하지 않습니다.',
  'This `%s` has a nonempty block which does not end with `%s`, `%s`, `%s`, `%s` or `%s`. Did you forget to add one of those? If you intend to fall through, add a `%s` comment to silence this warning.' => '이 `%s` 또는 `%s`에는 `%s`, `%s`, `%s` 또는 `%s`(으)로 끝나지 않는 비어 있지 않은 블록이 있습니다. 이 중 하나를 추가하는 것을 잊었습니까? Fallthrough를 의도했다면 `%s` 댓글을 추가해 이 경고를 억제하세요.',
  'Push URI: %s' => '푸시 URI: %s',
  'Found the wrong number of hunk lines.' => 'hunk 줄의 개수가 잘못되었습니다.',
  'Land only the changes directly named by arguments, instead of all reachable ancestors.' => '도달 가능한 모든 조상 변경 사항이 아닌, 인수로 직접 지정된 변경 사항만 최종 반영합니다.',
  'A mercurial commit hash in the commit range is already attached to the Differential revision.' => '커밋 범위 내의 Mercurial 커밋 해시값이 이미 Differential 판에 부착되어 있습니다.',
  'Install this token anyway?' => '그래도 이 토큰을 설치하시겠습니까?',
  'The remote host closed the connection before the request completed.' => '원격 호스트가 요청이 완료되기 전에 연결을 종료했습니다.',
  '(Assuming \'%s\' is the British spelling of \'%s\'.)' => '(\'%s\'을(를) \'%s\'의 영국식 철자인 것으로 가정합니다.)',
  'You stand in the middle of a small clearing in the woods.' => '당신은 숲 속 작은 공터 한가운데에 서 있습니다.',
  'Expected JSON response from WordPress.com.' => 'WordPress.com에서 JSON 응답을 예상했습니다.',
  'Oct' => '10월',
  '`%s` expects an object instance, constant given.' => '`%s`은(는) 객체 인스턴스를 예상했지만 상수가 주어졌습니다.',
  'Launching editor "%s"...' => '편집기 "%s" 시작하는 중...',
  'Language Construct Parentheses' => '언어 구조 괄호',
  'Force targets to be interpreted as naming particular types of resources.' => '특정 유형의 리소스를 지칭하는 것으로 해석되도록 대상을 강제합니다.',
  'Blacklisted functions which should not be used.' => '사용하면 안 되는 차단 목록 함수들입니다.',
  'Show every option, including standard options like this one.' => '이것과 같은 표준 옵션을 포함해, 모든 옵션을 표시합니다.',
  'Uploading chunks (%s chunks to upload).' => '청크를 업로드 합니다 (업로드 할 청크 %s개).',
  'Specify at most one URI.' => '최대 하나의 URI를 지정하세요.',
  'Shows the current version.' => '현재 버전을 표시합니다.',
  'Enforces basic text rules like line length, character encoding, and trailing whitespace.' => '줄 길이, 문자 인코딩, 후행 공백 같은 기본 텍스트 규칙을 강제합니다.',
  'Too many arguments: provide exactly one argument.' => '인수가 너무 많습니다: 정확히 하나의 인수만 지정하세요.',
  'Close only if the repository is untracked and the revision is accepted. Continue even if the close can\'t happen. This is a soft version of \'close-revision\' used by other workflows.' => '저장소가 추적되지 않고 판이 승인된 경우에만 닫습니다. 닫기가 불가능하더라도 계속 진행합니다. 이는 다른 워크플로에서 사용되는 \'수정 사항 닫기\'의 소프트한 버전입니다.',
  'Automatic branch naming from tasks is not supported yet for %s.' => '%s에 대해서는 태스크에서 자동으로 브랜치 이름을 지정하는 기능이 아직 지원되지 않습니다.',
  'Object specification "%s" is unknown, expected a specification like "commit(HEAD)".' => '객체 명세 "%s"을(를) 알 수 없습니다. "commit(HEAD)"와 같은 명세를 예상했습니다.',
  'Successfully committed patch.' => '성공적으로 패치를 커밋했습니다.',
  '`%s` class `%s` has an invalid ID constant. ID must be an integer.' => '`%s` 클래스 `%s`이(가) 유효하지 않은 ID 상수를 가집니다.ID는 정수이어야 합니다.',
  'Use `%s` to detect issues with CSS source files.' => 'CSS 소스 파일의 문제를 탐지하기 위해 `%s`을(를) 사용하세요.',
  'UPDATE' => '업데이트',
  'Unable to determine current system locale (call to "setlocale(LC_ALL, 0)" failed).' => '현재 시스템 로케일을 결정할 수 없습니다 ("setlocale(LC_ALL, 0)" 호출 실패).',
  'Downloaded hash does not match: expected any of %s, got %s.' => '다운로드된 해시값이 일치하지 않습니다: %s 중 하나를 예상했지만 %s을(를) 받았습니다.',
  'You may not set new credentials after authenticating conduit.' => 'conduit 인증 후에는 새 자격 증명을 설정할 수 없습니다.',
  'With %s, use uglier (but more efficient) formatting.' => '%s(으)로 더 보기 나쁘지만 효율적인 형식을 사용합니다.',
  'OPTION REFERENCE' => '옵션 참조',
  'Message begins:' => '메시지 시작:',
  'Use the "alias" workflow to review aliases.' => '별칭을 검토하려면 "alias" 워크플로를 사용하세요.',
  'This codebase targets PHP %s, but `%s` was removed in PHP %s.' => '이 코드베이스는 PHP %s을(를) 대상으로 하지만 `%s`은(는) PHP %s에서 제거되었습니다.',
  'Additional rules for determining base revision.' => '기준 판 결정을 위한 추가 규칙입니다.',
  'Rule \'%s\' discarded empty context!' => '규칙 \'%s\'이(가) 빈 컨텍스트를 버렸습니다!',
  'Usage of `%s` is preferred over `%s`.' => '`%2$s` 보다는 `%s`의 사용법이 더 추천됩니다.',
  'PHPUnit configuration file was not found in %s' => '%s에서 PHPUnit 구성 파일을 찾을 수 없음',
  'Not String Concatenation' => '문자열 연결이 아님',
  'STAGING FAILED' => '스테이징 실패',
  'Name of a concrete subclass of `%s` which enforces more granular naming convention rules for symbols.' => '심볼에 대해 보다 세분화된 명명 규칙을 적용하는 `%s`의 구상 하위 클래스 이름입니다.',
  'Convention: logical and arithmetic operators should be surrounded by whitespace.' => '명명 규칙: 논리 연산자와 산술 연산자는 공백으로 묶어야 합니다.',
  'Space Before Unary Postfix Operator' => '단항 전위 연산자 앞에 공백',
  'Expected any exception, got no exception.' => '예외를 기대했지만, 예외가 없었습니다.',
  'Discard these changes before running "arc upgrade".' => '"arc upgrade"를 실행하기 전에 이러한 변경 사항을 버립니다.',
  'Failed to copy file from "%s" to "%s": %s' => '파일을 "%s"에서 "%s"(으)로 복사하는데 실패했습니다: %s',
  'The test failed, but this change is probably not what broke it. For example, it might have already been failing.' => '테스트는 실패했지만, 이 변경 사항이 실패의 원인은 아닐 가능성이 높습니다. 예를 들어, 원래부터 실패하고 있었을 수도 있습니다.',
  'Invalid Default Parameter' => '유효하지 않은 기본 매개변수',
  'Class constants cannot be marked as final before PHP 8.1.' => '클래스 상수는 PHP 8.1 이전 버전에서는 최종으로 표시될 수 없습니다.',
  'String components of a sort vector must not contain NULL bytes.' => '정렬 벡터의 문자열 구성 요소에는 NULL 바이트가 포함되어서는 안 됩니다.',
  'Using saved response to prompt "%s".' => '프롬프트 "%s"에 대해 저장된 응답을 사용합니다.',
  'The `%s` syntax was not introduced until PHP 5.4, but this codebase targets an earlier version of PHP. You can rewrite this expression using `%s`.' => '`%s` 구문은 PHP 5.4부터 도입되었지만, 이 코드베이스는 이전 버전의 PHP를 대상으로 합니다. `%s`을(를) 사용하여 이 표현식을 다시 작성할 수 있습니다.',
  'Prompts the user to stash changes and continue when the working copy has untracked, uncommitted, or unstaged changes.' => '사용자에게 변경 사항을 스태시할 것인지 확인을 요청하고, 작업 사본에 추적되지 않거나, 커밋되지 않았거나, 스테이징 되지 않은 변경 사항이 있는 경우 계속합니다.',
  'This file contains unnecessary trailing whitespace.' => '이 파일에는 끝에 불필요한 공백이 있습니다.',
  'Not a symlink!' => 'symlink가 아닙니다!',
  'Halting all rule processing.' => '모든 규칙 처리를 중단하고 있습니다.',
  'Default value for parameters with a float type hint can only be an integer or a floating point number.' => 'float 유형 힌트가 있는 매개변수의 기본값은 정수 또는 부동 소수점 숫자만 가능합니다.',
  'Configured lint engine "%s" is not a subclass of "%s", but must be.' => '구성된 린트 엔진 "%s"은(는) "%s"의 하위 클래스가 아니지만, 반드시 하위 클래스여야 합니다.',
  'This repository API (\'%s\') does not support the requested capability.' => '이 저장소 API(\'%s\')는 요청된 기능을 지원하지 않습니다.',
  'Land %s revision(s) that are already published?' => '이미 게시된 %s개 판을 최종 반영합니까?',
  'Expected to find "%s" in "%s" output, but did not.' => '"%2$s" 출력에서 "%s"을(를) 찾을 것으로 예상했지만, 그렇지 않았습니다.',
  'Golint is a linter for Go source code.' => 'Golint는 Go 소스 코드의 린터입니다.',
  '%s is broken.' => '%s은(는) 망가졌습니다.',
  '"%s" class "%s" has an invalid "%s" property. Field constants must be strings and no more than %s bytes in length.' => '"%s" 클래스 "%s"에 유효하지 않은 "%s" 속성이 있습니다. 필드 상수는 문자열이어야 하며 길이가 %s바이트를 초과해서는 안 됩니다.',
  'GENERATE' => '생성',
  'Empty Block Statement' => '빈 블록 서술문',
  'Properties cannot be declared "abstract".' => '속성은 "abstract"로 선언될 수 없습니다.',
  'Working copy' => '작업 사본',
  'Unknown Hardpoint request specification (of type "%s").' => '알 수 없는 하드포인트 요청 명세(유형 "%s")입니다.',
  'Undefined Lint Message' => '정의되지 않은 린트 메시지',
  'Unknown Command' => '알 수 없는 명령',
  'Submitting changes to "%s".' => '"%s"에 변경 사항을 제출합니다.',
  'Configure a default merge strategy for "arc land".' => '"arc land"에 대한 기본 병합 방식을 구성합니다.',
  'Downloading binary data for \'%s\'...' => '\'%s\'의 바이너리 데이터를 다운로드하는 중...',
  '**upload** [__options__] -- __file__ [__file__ ...]' => '**upload** [__옵션__] -- __파일__ [__파일__ ...]',
  'Unrecognized key \'%s\' in argument specification. Recognized keys are: %s.' => '인수 명세에 인식할 수 없는 키 \'%s\'이(가) 있습니다. 인식 가능한 키: \'%s\'.',
  'The SSL CA Bundles that we tried to use could not be read or are not formatted correctly.' => '저희가 사용하려고 했던 SSL CA 번들을 읽을 수 없거나 형식이 올바르지 않습니다.',
  'DATA' => '데이터',
  'Unary prefix operators should not be followed by whitespace.' => '단항 전위 연산자는 공백으로 끝나서는 안됩니다.',
  'You can not use "--current" when generating rules.' => '규칙을 생성할 때는 "--current"를 사용할 수 없습니다.',
  'Unable to fork!' => '포크할 수 없습니다!',
  'This workflow (\'%s\') requires a working copy, override %s to return true.' => '이 워크플로(\'%s\')는 작업 사본을 요구합니다, 참을 반환하려면 %s을(를) 덮어쓰세요.',
  'No revision specified with "--revision", and no revisions found that match the current working copy state. Use "--revision <id>" to specify which revision you want to amend.' => '"--revision"으로 지정된 판이 없으며, 현재 작업 사본 상태와 일치하는 판도 찾을 수 없습니다. "--revision <id>"를 사용해서 어멘드할 판을 지정하세요.',
  'Call to "curl_setopt(...) failed for option key "%s".' => '"curl_setopt(...) 호출이 옵션 키 "%s"에 대해 실패했습니다.',
  'EXCEPTION' => '예외',
  'Failed to split line "%s" from "git log".' => '"git log"에서 "%s" 줄을 분리하는 데 실패했습니다.',
  '---' => '---',
  'Failed to write %d bytes to \'%s\'.' => '\'%2$s\'에 %d 바이트를 쓰지 못했습니다.',
  'The "merge" strategy generates a merge commit when publishing that retains local checkpoint commits (but produces a nonlinear published history). Select this strategy if you do not want "arc land" to discard checkpoint commits.' => '"merge" 방식을 사용하면 로컬 체크포인트 커밋을 유지하는 병합 커밋이 게시 시 생성됩니다(단, 게시된 역사는 비선형이 됩니다). "arc land"에서 체크포인트 커밋을 버리지 않으려면 이 전략을 선택하세요.',
  'Will merge into remote "%s", selected with the "--into" flag.' => '"--into" 플래그로 선택한 원격 "%s"에 병합됩니다.',
  'When running noninteractively, you MUST provide "--" to all commands (even if they take no arguments).' => '비대화형 모드로 실행할 때는 모든 명령(인수가 없는 명령이라도) 앞에 반드시 "--"를 붙여야 합니다.',
  'Parse error on line %d at column %d: %s' => '구문 분석 오류, 열 %2$d의 줄 %d: %3$s',
  'No viable means to download llaville/compatinfo-db is available.' => 'llaville/compatinfo-db를 다운로드할 수 있는 적절한 수단이 없습니다.',
  'Contents Modified' => '콘텐츠 수정됨',
  'Output aliases in JSON format.' => '출력 별칭(JSON 형식)입니다.',
  'Flag --skip-staging was specified.' => '--skip-staging 플래그가 지정되었습니다.',
  'Child in position \'%d\' is not of type \'%s\': %s' => '위치 \'%d\'의 하위가 \'%s\' 유형이 아닙니다: %s',
  'Parameter to %s must be a Differential Revision number.' => '%s에 대한 매개변수는 Differential 판 번호여야 합니다.',
  '%s currently supports only one file attachment for each parameter name. You are trying to attach two different files with the same parameter, "%s".' => '%s은(는) 현재 각 매개변수 이름당 하나의 파일 첨부만 지원합니다. 현재 동일한 매개변수 "%s"에 서로 다른 두 파일을 첨부하려고 합니다.',
  'Arguments "--into-local", "--into-remote", and "--into-empty" are mutually exclusive.' => '"--into-local", "--into-remote" 및 "--into-empty" 인수는 서로 같이 사용될 수 없습니다.',
  'Use `%s` for local static member references.' => '로컬 정적 멤버 참조에는 `%s`을(를) 사용하세요.',
  'Wrote updated completion rules for "%s" to: %s.' => '"%s"에 대한 업데이트된 자동 완성 규칙을 다음에 작성했습니다: %s',
  '`%s` Methods Cannot Be Marked `%s`' => '`%s` 메서드는 `%s`(으)로 표시될 수 없음',
  'Leading Whitespace at BOF' => 'BOF 앞에 붙은 공백',
  'No library currently exists at the path "%s"...' => '현재 경로 "%s"에 존재하는 라이브러리가 없습니다...',
  'Show committed and abandoned revisions.' => '커밋된 판과 포기된 판을 표시합니다.',
  'Unable to locate %s.' => '%s을(를) 찾을 수 없습니다.',
  'The `%s` operator is not available before PHP 5.6.' => '`%s` 연산자는 PHP 5.6 이전 버전에서는 사용할 수 없습니다.',
  'SAVE STASH' => '스태시 저장',
  'Wildcard arguments may not specify a parameter.' => '와일드카드 인수는 매개변수를 지정할 수 없습니다.',
  'After creating a paste, open it in a web browser.' => '붙여넣기를 만든 이후 웹 브라우저에서 엽니다.',
  'The node \'%s\' is not known. Call %s to seed the graph with nodes.' => '노드 \'%s\'을(를) 알 수 없습니다. 그래프에 노드를 시드하려면 %s을(를) 호출하세요.',
  'Do not run any sanity checks.' => 'sanity check를 실행하지 않습니다.',
  'Execution of "git cat-file --batch-check" emitted an unexpected number of lines, expected %s but got %s.' => '"git cat-file --batch-check" 실행 결과 예상치 못한 줄 수가 출력되었습니다. %s개를 예상했지만 %s개가 출력되었습니다.',
  'Classes should extend from `%s` or from some other class. All classes (except for `%s` itself) should have a base class.' => '클래스는 `%s` 또는 다른 클래스에서 확장되어야 합니다. 모든 클래스(`%s` 자체 제외)는 기본 클래스를 가져야 합니다.',
  'Missing VCS support.' => 'VCS 지원이 없습니다.',
  'Bookmark name %s already exists; trying a new name.' => '책갈피 이름 %s은(는) 이미 존재합니다, 다른 이름을 시도하세요.',
  'Alias definitions form a cycle which can not be resolved: %s.' => '별칭 정의가 해결할 수 없는 순환 구조를 형성합니다: %s.',
  'Arc unit does not currently support %s in SVN.' => 'Arc unit은 현재 SVN에서 %s을(를) 지원하지 않습니다.',
  'Argument Error' => '인수 오류',
  'Multiple "final" modifiers are not allowed.' => '"final" 수식어는 여러 개 사용할 수 없습니다.',
  'Flag "--lang" is not supported when reading pastes.' => '붙여넣기를 읽을 때는 플래그 "--lang"이 지원되지 않습니다.',
  'Allows you to make a raw Conduit method call:

  - Run this command from a working directory.
  - Call parameters are required, and read as a JSON blob from stdin.
  - Results are written to stdout as a JSON blob.

This workflow is primarily useful for writing scripts. Examples:

  $ echo \'{}\' | arc call-conduit conduit.ping --
  $ echo \'{"phid":"PHID-FILE-xxxx"}\' | arc call-conduit file.download --' => '원본 Conduit 메서드 호출을 수행할 수 있습니다:

  - 이 명령은 작업 디렉터리에서 실행하세요.
  - 호출 매개변수는 필수이며 stdin에서 JSON 블롭으로 읽습니다.
  - 결과는 stdout에 JSON 블롭으로 기록됩니다.

이 워크플로는 주로 스크립트 작성에 유용합니다. 예:

  $ echo \'{}\' | arc call-conduit conduit.ping --
  $ echo \'{"phid":"PHID-FILE-xxxx"}\' | arc call-conduit file.download --',
  'Two argument specifications have the same name ("%s").' => '두 개의 인수 명세가 같은 이름을 가집니다 ("%s").',
  '(No commits.)' => '(커밋이 없습니다.)',
  'This working copy has no metadata directory, so you can not resolve metadata paths within it.' => '이 작업 사본에는 메타데이터 디렉터리가 없으므로 그 안에 있는 메타데이터 경로를 확인할 수 없습니다.',
  'Export change as a unified patch. This format is less complete than git patches or arc bundles. These patches can be applied with \'%s\' or \'%s\'.' => '변경 사항을 unified 패치로 내보냅니다. 이 형식은 Git 패치나 Arc 번들보다 완전성이 떨어집니다. 이러한 패치는 \'%s\' 또는 \'%s\'을(를) 사용하여 적용할 수 있습니다.',
  'Perforce sync failed! Fix the error and run "arc land" again.' => 'Perforce 동기화에 실패했습니다! 오류를 수정하고 "arc land"를 다시 실행하세요.',
  'Failed to close file handle.' => '파일 핸들 닫기를 실패했습니다.',
  'Name files using only letters, numbers, period, hyphen and underscore.' => '파일 이름은 문자, 숫자, 마침표, 하이픈, 밑줄만 사용하여 지정하세요.',
  'Call to "curl_setopt(...)" returned "false".' => '"curl_setopt(...)" 호출이 "false"를 반환했습니다.',
  'Unable to set socket nonblocking!' => '소켓을 nonblocking으로 설정할 수 없습니다!',
  'Generator delegation (`%s`) is not available before PHP 7.0.' => '생성기 위임(`%s`)은 PHP 7.0 이전 버전에서는 사용할 수 없습니다.',
  'Unable to upload file chunks: %s' => '파일 청크를 업로드할 수 없습니다: %s',
  'it is the first ancestor of %s that has a diff and is the gca or a descendant of the gca with \'%s\', specified by \'%s\' in your %s \'base\' configuration.' => '이는 %s의 첫 번째 조상 중 차이가 있으며, gca이거나 \'%s\'와(과) 함께 gca의 후손이고, %4$s \'base\' 구성의 \'%s\'에 지정된 조상입니다.',
  'Unsupported base85 encoding mode "%s".' => '지원되지 않는 base85 인코딩 모드 "%s".',
  'The configuration key "%s" is not recognized by arc. It may be misspelled or out of date.' => '구성 옵션 "%s"을(를) arc가 인식할 수 없습니다. 철자가 틀렸거나 오래된 것일 수도 있습니다.',
  'Failed to read patch from stdin!' => 'stdin으로부터 패치를 읽을 수 없습니다!',
  'Server URI "%s" must include a protocol and domain. It should be in the form "%s".' => '서버 URI "%s"에는 프로토콜과 도메인이 포함되어야 합니다. 형식은 "%s"여야 합니다.',
  'PHP Coding Standards for Phutil libraries.' => 'Phutil 라이브러리에 대한 PHP 코딩 표준입니다.',
  'Specify a string (or list of strings) identifying the interpreter which should be used to invoke the linter binary. If you provide a list of possible interpreters, the first one that exists will be used.' => '린터 바이너리를 실행하는 데 사용할 인터프리터를 식별하는 문자열(또는 문자열 목록)을 지정합니다. 가능한 인터프리터 목록을 제공하는 경우, 존재하는 인터프리터 중 첫 번째 인터프리터가 사용됩니다.',
  'Channel closed while flushing output!' => '출력을 비우는 중 채널이 닫혔습니다!',
  'Install CoffeeLint using `%s`.' => '`%s`을(를) 사용해 CoffeeLint를 설치합니다.',
  'Multi-lined arrays should have trailing commas.' => '여러 줄로 된 배열에는 끝에 쉼표가 있어야 합니다.',
  'Configuration source ("%s") defines an invalid alias, which will be ignored: %s' => '구성 소스("%s")가 유효하지 않은 별칭을 정의하기에, 다음이 무시됩니다: %s',
  'Your \'%s\' file is not a valid JSON file.' => '\'%s\' 파일은 유효한 JSON 파일이 아닙니다.',
  'it is specified by \'%s\' in your %s \'base\' configuration.' => '이는 %2$s \'base\' 구성의 \'%s\'에 의해 지정된 것입니다.',
  'These %s revision(s) have changes planned:' => '다음 %s개 판에 변경이 계획되어 있습니다:',
  'Use __%s__ to show additional options.' => '추가 옵션을 표시하려면 __%s__을(를) 사용하세요.',
  'No repositories matched the query. Check that your configuration is correct, or use "%s" to select a repository explicitly.' => '쿼리와 일치하는 저장소가 없습니다. 구성이 맞는지 확인하거나 "%s"을(를) 사용해서 저장소를 명시적으로 선택하세요.',
  'Unable to upload file: path "%s" is not readable.' => '파일을 업로드할 수 없습니다: "%s" 경로를 읽을 수 없습니다.',
  'Examining paths for linter \'%s\'.' => '린터 \'%s\'의 경로를 검사합니다.',
  'Expected to find an integer value for meminfo key "%s" in meminfo source "%s", found "%s".' => 'meminfo 키 "%s"에 대한 정수 값을 meminfo 소스 "%s"에서 찾을 것으로 예상했지만, "%s"을(를) 찾았습니다.',
  'Unable to list contents of directory \'%s\'.' => '\'%s\' 디렉터리 내용을 나열할 수 없습니다.',
  'You can not read the result buffer while streaming results to disk: there is no in-memory buffer to read.' => '결과를 디스크로 스트리밍하는 동안 결과 버퍼를 읽을 수 없습니다: 읽을 메모리 내 버퍼가 없습니다.',
  'File \'%s\' declares more than one class or interface (%s). A file which declares a class or interface MUST declare nothing else.' => '파일 \'%s\'은(는) 두 개 이상의 클래스 또는 인터페이스(%s)를 선언합니다. 클래스 또는 인터페이스를 선언하는 파일은 다른 것을 선언해서는 안됩니다.',
  'NEW LIBRARY' => '새로운 라이브러리',
  'Show the amended commit message, without modifying the working copy.' => '작업 사본을 수정하지 않고, 어멘드된 커밋 메시지 표시합니다.',
  'Downloading "%s" (%s byte(s)) to "%s"...' => '"%s"(%s바이트)을(를) "%s"에 다운로드하는 중...',
  'Type of setting \'%s\' must be list.' => '\'%s\' 설정의 유형은 목록이어야 합니다.',
  'When creating a revision, add CCs.' => '판을 만들 때 CC를 추가합니다.',
  'Specify a string (or list of strings) identifying the binary which should be invoked to execute this linter. This overrides the default binary. If you provide a list of possible binaries, the first one which exists will be used.' => '이 린터를 실행하기 위해 호출할 바이너리를 식별하는 문자열(또는 문자열 목록)을 지정합니다. 이는 기본 바이너리를 대체합니다. 가능한 바이너리 목록을 제공하면 존재하는 첫 번째 바이너리가 사용됩니다.',
  'Failed to open file!' => '파일 열기를 실패했습니다!',
  'Confirms that revisions with ongoing builds should land.' => '빌드가 진행중인 판이 최종 반영되어야 함을 확인합니다.',
  'Expected JSON response from Twitch.' => 'Twitch에서 JSON 응답을 예상했습니다.',
  'No specification exists for argument "%s"!' => '인수 "%s"에 대한 명세가 없습니다!',
  'Two workflows with name \'%s!' => '두 개의 워크플로가 \'%s\' 이름을 가지고 있습니다!',
  'Class symbol "%s" should be written as "%s".' => '클래스 심볼 "%s"은(는) "%s"(으)로 작성되어야 합니다.',
  'Accepted' => '승인됨',
  'Append to this file?' => '이 파일에 추가합니까?',
  'Empty files usually don\'t serve any useful purpose.' => '빈 파일은 보통 쓸모가 없습니다.',
  'Specify two or more files to weld together.' => '결합할 파일을 둘 이상 지정하세요.',
  'Magic constants should be uppercase.' => '특수 상수는 대문자여야 합니다.',
  'CASCADE' => '연쇄 처리',
  '%s REVISION(S) HAVE CHANGES PLANNED' => '%s개 판에 변경이 계획됨',
  'You are not the author of \'%s: %s\'. Commit this revision anyway?' => '\'%s: %s\'의 작성자가 아닙니다. 그래도 이 판을 커밋합니까?',
  'Lookup of encoding in project failed: %s' => '프로젝트에서 인코딩 검색 실패: %s',
  'Concatenation Spacing' => '문자열 연결 띄어짐',
  'Array item with key \'%s\' must be of type array, %s given.' => '\'%s\' 키를 가진 배열 항목은 배열 타입이어야 하지만 %s이(가) 주어졌습니다.',
  'No mode provided for path "%s".' => '경로 "%s"에 대해 제공된 모드가 없습니다.',
  'PHP-Parser Lint' => 'PHP-Parser 린트',
  'LOG IN' => '로그인',
  'Final property promotion is not available before PHP 8.5.' => '최종 속성 승격은 PHP 8.5 이전 버전에서는 사용할 수 없습니다.',
  'Ignore the changes to these %s submodule(s) and continue?' => array(
    '이 하위모듈에의 변경 사항을 무시하고 계속합니까?',
    '이 하위모듈들에의 변경 사항을 무시하고 계속합니까?',
  ),
  'Variable Reused As Iterator' => '변수가 반복자로 재사용됨',
  '(regenerate projects for %s)' => '(%s에 대한 프로젝트를 재생성)',
  'Always update a specific revision.' => '항상 특정 판을 업데이트합니다.',
  'In multi-line use declarations, each variable should be on a separate line.' => '변수를 여러 줄로 선언할 경우, 각 변수는 별도의 줄에 작성해야 합니다.',
  'Partial Catch' => '부분적 캐치',
  'Call to "assertCaught(<junk>, ...)" passed bad expected value. expected result. Expected null, Exception, or Throwable; got: %s.' => '"assertCaught(<junk>, ...)" 호출이 잘못된 예상 값을 전달했습니다. null, Exception 또는 Throwable이 예상되었지만, 다음을 받았습니다: %s',
  'Example Value' => '예제 값',
  'Dynamic expressions cannot be used as initializers for static variables before PHP 8.3.' => '동적 표현식은 PHP 7.0 이전 버전에서는 정적 변수를 초기화시키는데 사용할 수 없습니다.',
  'You have saved the response "%s" to this prompt.' => '이 프롬프트에 대한 응답 "%s"을(를) 저장했습니다.',
  'This workflow (\'%s\') requires a Conduit, override %s to return true.' => '이 워크플로(\'%s\')는 Conduit을 요구합니다, 참을 반환하려면 %s을(를) 덮어쓰세요.',
  'BRANCH' => '브랜치',
  'Moved Here' => '여기로 이동됨',
  'A cast statement must not be followed by a space.' => 'cast문 앞에 공백이 있어서는 안됩니다.',
  'Run unit tests covering changes since a specific revision.' => '특정 판 이후 변경 사항을 포함하는 단위 테스트를 실행합니다.',
  'Expected an object, string, or list of objects for "object" context, got "%s".' => '"object" 컨텍스트에 대해 객체, 문자열 또는 객체 목록을 예상했지만 "%s"을(를) 받았습니다.',
  'Run "arc help prompts" for detailed help on configuring responses.' => '응답을 구성하는 데 자세한 도움말은 "arc help prompts"을 실행하세요.',
  'Unexpected output from %s: no author for commit %s' => '%s에서 예상치 못한 출력: 커밋 %s의 작성자가 없음',
  'Confirms that revisions with failed builds should land.' => '빌드가 실패한 판이 최종 반영되어야 함을 확인합니다.',
  'Did not reach every wait node??' => '모든 대기 노드에 도달하지 못했습니다??',
  'Unknown escaping mode!' => '알 수 없는 이스케이프 모드!',
  'The river bubbles quietly, but you do not see any published commits anywhere.' => '강물은 조용히 거품을 일으키며 흐르지만, 당신은 게시된 커밋을 어디에서도 보지 못합니다.',
  'Unable to parse SVN info.' => 'SVN 정보의 구문을 분석할 수 없습니다.',
  'Logical Operators' => '논리 연산자',
  'Keep local branches around after changes are pushed. By default, local branches are deleted after the changes they contain are published.' => '변경 사항이 푸시된 뒤에도 로컬 브랜치를 유지합니다. 기본적으로 로컬 브랜치는 포함한 변경 사항이 게시된 뒤 삭제됩니다.',
  'Repository API is not supported.' => '저장소 API가 지원되지 않습니다.',
  'HTTP parameter pair (with key "%s") is not valid: each pair must be an array with exactly two elements.' => 'HTTP 매개변수 쌍(키 "%s")이 유효하지 않습니다. 각 쌍은 정확히 두 요소를 가진 배열이어야 합니다.',
  'Working Copy: Project root is at "%s".' => '작업 사본: 프로젝트 루트가 "%s"에 있습니다.',
  '(DEPRECATED) Obsolete, use "--types path" instead.' => '(구식) 더 이상 사용되지 않습니다, 대신 "--types path"를 사용하세요.',
  '    %s (%s) %s
' => '    %s (%s) %s',
  'Follow naming conventions: variables should be named using `%s`.' => '명명 규칙을 따르세요: 변수 이름에는 `%s`을(를) 사용해야 합니다',
  'This is just an example function!' => '이것은 예시 함수입니다!',
  'Warning - legacy default value ignored' => '경고 - 레거시 기본 값 무시됨',
  'Use the local "into" ref state instead of fetching it from a remote.' => '원격에서 가져오는 대신 로컬의 "into" ref 상태를 사용합니다.',
  'Phutil PHPAST' => 'Phutil PHPAST',
  'Specifies the default behavior when "arc land" is run with no "--strategy" flag.' => '"arc land"가 "--strategy" 플래그 없이 실행될 때의 기본 동작을 지정합니다.',
  'Configuration option ("%s") is unrecognized. You can only read recognized configuration options.' => '구성 옵션("%s")을 인식할 수 없습니다. 인식된 구성 옵션만 읽을 수 있습니다.',
  'IP address "%s" is not properly formated: it has too few parts. Expected a minimum of 2 colons, like "%s".' => 'IP 주소 "%s"의 형식이 올바르지 않습니다: 콜론이 너무 적습니다. "%s"처럼 최소 2개의 콜론이 예상되었습니다.',
  'You can not specify paths with %s. The %s flag runs every test associated with a tracked file in the working copy.' => '%s(으)로 경로를 지정할 수 없습니다. %s 플래그는 작업 사본에서 추적되는 파일과 연관된 모든 테스트를 실행합니다.',
  'Enums are not available before PHP 8.1.' => 'Enum은 PHP 8.1 이전 버전에서는 사용할 수 없습니다.',
  'Invalid UTF-8 string passed to %s.' => '유효하지 않은 UTF-8 문자열이 %s(으)로 통과되었습니다.',
  'Creating new branch "%s" from "%s".' => '"%2$s"에서 새 브랜치 "%s"을(를) 생성합니다.',
  'Use the full form of the PHP open tag, `%s`.' => 'PHP 시작 태그의 전체 형태인 `%s`을(를) 사용하세요.',
  'Merge succeeded.' => '성공적으로 병합했습니다.',
  'Definition of symbol "%s" (of type "%s") in file "%s" in library "%s" duplicates builtin definition of the same symbol.' => '라이브러리 "%4$s"의 파일 "%3$s"에 있는 심볼 "%s"(유형 "%s")의 정의는 같은 심볼의 내장 정의와 중복됩니다.',
  'Amending commit message to reflect revision:' => '판을 반영하도록 커밋 메시지를 어멘드하는 중:',
  'Unknown URI type "%s"!' => '알 수 없는 URI 유형 "%s"!',
  'it is the merge-base of \'%s\' and HEAD, as specified in \'%s\'.' => '이는 \'%2$s\'에 지정된 대로 \'%s\'와(과) HEAD의 병합 기준입니다.',
  'Specify a file to download.' => '다운로드할 파일을 지정하세요.',
  'Parameter provided to argument "--%s" is too large to parse as an integer.' => '인수 "--%s"에 제공된 매개변수가 정수로 구문 분석하기에는 너무 큽니다.',
  'Expected a list or dictionary!' => '목록 또는 딕셔너리를 예상했습니다!',
  'Invalid Content Encoding (Non-UTF8)' => '유효하지 않은 콘텐츠 인코딩 (UTF8이 아님)',
  'Yielding processing of rules from \'%s\'.' => '\'%s\'의 규칙 처리를 양보합니다.',
  'IP address "%s" is not properly formatted. Address segments should have no leading zeroes, but segment "%s" has a leading zero.' => 'IP 주소 "%s"의 형식이 올바르지 않습니다. 주소 세그먼트는 앞에 0이 없어야 하지만, 세그먼트 "%s"은(는) 앞에 0이 있습니다.',
  'For consistency, write hexadecimals integers in uppercase with a leading `%s`.' => '일관성을 유지하기 위해 16진수 정수는 대문자로 쓰고 앞에 `%s`을 붙이세요.',
  'Use `%s` single-line comments, not `%s`.' => '한 줄 댓글을 위해 `%2$s`이(가) 아닌 `%s`을(를) 사용하세요.',
  'Definition of %s \'%s\' in file \'%s\' duplicates prior definition in file \'%s\'. You can not declare the same symbol twice.' => '파일 \'%3$s\'에 있는 %s \'%s\'의 정의가 파일 \'%4$s\'에 있는 이전 정의와 중복됩니다. 동일한 심볼을 두 번 선언할 수 없습니다.',
  '(No revisions match.)' => '(일치하는 판이 없습니다.)',
  'Unrecognized lint message code: "%s"' => '린트 메시지 코드를 인식할 수 없습니다: "%s"',
  'No lint engine configured for this project.' => '이 프로젝트를 위해 구성된 린트 엔진이 없습니다.',
  'Lint can not be output into "%s" format because the PHP "%s" extension is not installed. Install the extension or choose a different output format.' => 'PHP "%2$s" 확장 기능이 설치되어 있지 않으므로 린트를 "%s" 형식으로 출력할 수 없습니다. 확장 기능을 설치하거나 다른 출력 형식을 선택하세요.',
  'Call to phutil_nonempty_string() expected null or a string, got: %s.' => 'phutil_nonempty_string() 호출 시 null 또는 문자열이 예상되었지만 다음을 받았습니다: %s.',
  'Your version of \'%s\' is unbuilt or out of date. Run this script to build it.' => '\'%s\' 버전이 빌드되지 않았거나 오래되었습니다. 빌드하려면 이 스크립트를 실행하세요.',
  'Failed to copy file from "%s" to "%s".' => '파일을 "%s"에서 "%s"(으)로 복사하는데 실패했습니다.',
  'CoffeeLint does not currently support custom severity levels, because rules can\'t be identified from messages in output.' => '출력 메시지에서 규칙을 식별할 수 없기 때문에, 현재 CoffeeLint는 사용자 지정 심각도 수준을 지원하지 않습니다.',
  'Attempt to read from undeclared property %s.' => '선언되지 않은 속성 %s(으)로부터 읽으려고 시도했습니다.',
  'Select a Default Commit Range' => '기본 커밋 범위 선택',
  'Unable to start socket! Error #%d: %s' => '소켓을 시작할 수 없습니다! 오류 #%d: %s',
  'Failed to read modified time for %s.' => '%s의 수정된 시간을 읽는데 실패했습니다.',
  'Hexadecimal Integer Casing' => '16진 정수 명명 규칙',
  'Calls to built-in PHP functions should be lowercase.' => 'PHP 내장 함수 호출은 소문자로 작성해야 합니다.',
  'Status: %s' => '상태: %s',
  'Follow naming conventions: functions should be named using `%s`.' => '명명 규칙을 따르세요: 함수 이름에는 `%s`을(를) 사용해야 합니다',
  'Unexpected value type provided for an HREF field - %s. Please share this stack trace as comment in Task %s' => 'HREF 필드에 예상치 못한 값 유형이 제공되었습니다 - %s. 이 스택 트레이스를 태스크 %s의 댓글로 공유해 주세요.',
  'Argument index is not a scalar.' => '인수 인덱스가 스칼라가 아닙니다.',
  'Vigorously fuse files together, without using a cat.' => 'cat을 사용하지 않고 파일을 힘차게 결합합니다.',
  'The test passed.' => '테스트를 통과했습니다.',
  'Received error from Twitch: %s' => 'Twitch에서 오류 수신함: %s',
  'Rewrite this code to use an array. Variable variables are unclear and hinder static analysis.' => '배열을 사용하도록 이 코드를 다시 작성하세요. Variable 변수는 정적 분석을 모호하고 어렵게 만듭니다.',
  'Missing files in working copy:' => '작업 사본에서 누락된 파일',
  'Preparing to run a command in directory "%s", but that directory is not readable (the current process does not have "+r" permission).' => '"%s" 디렉터리에서 명령을 실행하려고 준비했지만, 해당 디렉터리는 읽기 가능하지 않습니다(현재 프로세스에 "+r" 권한이 없습니다).',
  '**anoid**' => '**anoid**',
  'This workflow isn\'t executable!' => '이 워크플로는 실행할 수 없습니다!',
  'Unknown command \'%s\'. Try \'%s\'.' => '\'%s\' 명령어를 알 수 없습니다. \'%s\'을(를) 시도하세요.',
  'This function can not convert into the unit "%s".' => '이 함수는 "%s" 단위로 변환될 수 없습니다.',
  'Turkish (Turkey)' => '튀르키예어 (튀르키예)',
  'Runtime "--config" Flags' => '런타임 "--config" 플래그',
  'SUCCESS!' => '성공!',
  'No "%s %s" alias is defined, did you mean "%s %s"?' => '"%s %s"(이)라는 별칭이 정의되지 않았습니다. "%s %s"을(를) 찾으셨나요?',
  'Cannot display current version without "%s" installed.' => '"%s"이(가) 설치되지 않은 상태에서 현재 버전을 표시할 수 없습니다.',
  'Flag "--title" is not supported when reading pastes.' => '붙여넣기를 읽을 때는 플래그 "--title"이 지원되지 않습니다.',
  'Expected exactly one argument to "%s(...)" with a symbol.' => '"%s(...)"에 정확히 인수(심볼)가 하나 주어지는 것을 예상했습니다.',
  'In remote "%s", the name "%s" identifies one or more branch heads and one or more bookmarks. Close, rename, or delete all but one of these markers, or pull the state you want to merge into and use "--into-local --into <hash>" to disambiguate the desired merge target.' => '원격 "%s"에서 이름 "%s"은(는) 하나 이상의 브랜치 헤드와 하나 이상의 책갈피를 식별합니다. 이 마커 중 하나만 남기고 모두 닫거나, 이름을 바꾸거나, 삭제하세요. 또는 병합하려는 상태를 가져온 뒤 "--into-local --into <해시>"를 사용해 원하는 병합 대상을 명확히 하세요.',
  'System Config File' => '시스템 구성 파일',
  'Show an enhanced view of bookmarks in the working copy.' => '작업 사본 내의 책갈피의 향상된 보기를 표시합니다.',
  'A git commit or tree hash in the commit range is already attached to the Differential revision.' => '커밋 범위 내의 git 커밋 또는 트리 해시값이 이미 Differential 판에 부착되어 있습니다.',
  'Use braces to surround a statement block.' => '문 블록을 중괄호로 묶으세요.',
  '"arc land" must be run in a Git or Mercurial working copy.' => '"arc land"는 Git 또는 Mercurial 작업 사본에서 실행해야 합니다.',
  'Begin or resume work.' => '일을 시작 또는 재개합니다.',
  'Saving local state (at detached commit "%s").' => '로컬 상태를 저장합니다 (분리된 커밋 "%s"에).',
  'Properties can not be declared "final".' => '속성은 "final"로 선언될 수 없습니다.',
  'Landing onto remote "%s", the default remote under Mercurial.' => 'Mercurial의 기본 원격인 원격 "%s"에 최종 반영합니다.',
  'Create a paste using the content in a file.' => '파일 안의 내용을 이용해 붙여넣기를 만듭니다.',
  'Jun' => '6월',
  '%s failed: %s' => '%s 실패: %s',
  'Unrecognized lint message code "%s". Expected a valid JSHint lint code like "%s" or "%s".' => '"%s" 린트 메시지 코드를 인식할 수 없습니다. 예상되는 유효한 JSHint 린트 코드는 "%s" 또는 "%s" 등입니다.',
  'This patch has binary data. The PHP zlib extension is required to apply patches with binary data to git. Install the PHP zlib extension to continue.' => '이 패치에는 바이너리 데이터가 포함되어 있습니다. 바이너리 데이터가 포함된 패치를 Git에 적용하려면 PHP zlib 확장 기능이 필요합니다. 계속하려면 PHP zlib 확장 기능을 설치하세요.',
  'Parameter ("%s") passed to "%s" when constructing a lint message must be a string with a maximum length of %s bytes, but is %s bytes in length.' => '린트 메시지를 구성할 때 "%2$s"에 전달된 매개변수("%s")의 길이는 최대 %3$s바이트의 문자열이어야 하지만 길이가 %4$s바이트입니다.',
  'CONNECT' => '연결',
  'Unable to parse unit specification (expected a specification in the form "%s"): %s' => '단위 명세를 구문 분석할 수 없습니다("%s" 형태의 명세를 예상함): %s',
  'Follow naming conventions: traits should be named using `%s`.' => '명명 규칙을 따르세요: Trait 이름에는 `%s`을(를) 사용해야 합니다.',
  'The shell "%s" is not supported. Supported shells are: %s.' => '셸 "%s"은(는) 지원되지 않습니다. 지원되는 셸: %s.',
  'Confirms use of a revision that does not appear to be present in the working copy.' => '작업 사본에 나타나지 않는 판의 사용을 확인합니다.',
  'INTO COMMIT' => '"into" 커밋',
  'Dictionary key "%s" is not valid UTF8, and cannot be JSON encoded.' => '"%s" 딕셔너리 키는 유효한 UTF8이 아니므로 JSON 인코딩을 할 수 없습니다.',
  'Unsupported escape sequence "%s" found in pattern: %s' => '다음 패턴에서 지원되지 않는 이스케이프 시퀀스 "%s"이(가) 발견되었습니다: %s',
  'Upgrading "%s" (on branch "%s").' => '"%s"을(를) 업그레이드 합니다 ("%s" 브랜치에서).',
  'The request took too long to complete.' => '요청이 완료되기까지 너무 많은 시간이 소요되었습니다.',
  '"arc amend" must be run from inside a working copy of a repository using a version control system that supports amending commits, like Git or Mercurial.' => '"arc amend" 명령은 Git이나 Mercurial처럼 커밋 어멘드를 지원하는 버전 관리 시스템을 사용하는 저장소의 작업 사본 내에서 실행해야 합니다.',
  'Possible Spelling Mistake' => '가능한 철자 실수',
  'Moved Away' => '다른 곳으로 이동됨',
  'Found no state ref for hash "%s".' => '해시 "%s"에 대한 상태 ref는 발견되지 않았습니다.',
  'Invalid glob pattern.' => '유효하지 않은 glob 패턴.',
  '%s is not compatible with the installed version of pylint. Minimum version: %s; installed version: %s.' => '%s은(는) 설치된 pylint 버전과 호환되지 않습니다. 최소 버전: %s, 설치된 버전: %s.',
  'These Differential revisions match the changes in this working copy:' => '다음의 Differential 판이 이 작업 사본의 변경 사항과 일치합니다:',
  'Pass in a custom jshintignore file path.' => '사용자 지정 jshintignore 파일 경로를 전달합니다.',
  'Use of Undeclared Variable' => '선언되지 않은 변수 사용',
  'Expected value to be a list of objects to support calling "%s" to generate unique keys, but item with index "%s" is "%s".' => '고유 키를 생성하기 위해 "%s" 호출을 지원하는 객체 목록을 예상했지만, 인덱스 "%s"의 항목은 "%s"입니다.',
  'This working copy has no remote named "%s".' => '이 작업 사본에는 "%s"(이)라는 이름의 원격이 없습니다.',
  'Hardpoint data (for hardpoint "%s") is not attached.' => '(하드포인트 "%s"에 대한) 하드포인트 데이터가 부착되지 않았습니다.',
  'Type of setting \'%s\' must be string.' => '\'%s\' 설정의 유형은 문자열이어야 합니다.',
  'Received error from Postmark: (%s) %s' => 'Postmark에서 오류 수신함: (%s) %s',
  '"arc upgrade" can only upgrade clean working copies.' => '"arc upgrade"는 작동하는 깨끗한 복사본만 업그레이드할 수 있습니다.',
  'Call to phutil_nonempty_stringlike() expected a string or stringlike object, got: %s.' => 'phutil_nonempty_stringlike() 호출 시 문자열 또는 문자열과 유사한 객체을 예상했지만, 다음이 반환되었습니다: %s.',
  'Name' => '이름',
  'Promoted properties are not available before PHP 8.0.' => '승격된 속성은 PHP 8.0 이전 버전에서는 사용할 수 없습니다.',
  'Unit testing raised errors!' => '단위 테스트에 오류가 발생했습니다!',
  '... (%s more byte(s)) ...' => '... (추가 %s바이트) ...',
  'Install %s using `%s`.' => '`%2$s`을(를) 사용해 %s을(를) 설치합니다.',
  'Unexpected output to stderr on exec channel: %s' => 'exec 채널에서 stderr로의 예상치 못한 출력: %s.',
  'The name of a default lint engine to use, if no lint engine is specified by the current project.' => '현재 프로젝트에서 린트 엔진이 지정되지 않은 경우 사용할 기본 린트 엔진의 이름입니다.',
  'Writing bundle to \'%s\'...' => '\'%s\'에 번들 쓰는 중...',
  'Configuration option "%s" was provided multiple times with "--config" flags. Specify each option no more than once.' => '구성 옵션 "%s"이(가) "--config" 플래그와 함께 여러 번 제공되었습니다. 각 옵션은 한 번만 지정하세요.',
  'Cannot find the %s equivalent of %s.' => '%2$s에 해당하는 %s을(를) 찾을 수 없습니다.',
  'Saving local state (on ref "%s" at commit "%s").' => '로컬 상태를 저장합니다 (커밋 "%2$s"의 ref "%s"에).',
  'The `%s` type hint is not available before PHP 7.0.' => '`%s` 유형 힌트는 PHP 7.0 이전 버전에서는 사용할 수 없습니다.',
  'Maximum value must be an integer.' => '최대값은 정수이어야 합니다.',
  'Commit message has errors:' => '커밋 메시지에 오류가 있습니다:',
  'Adjust the maximum line length before a warning is raised. By default, a warning is raised on lines exceeding 80 characters.' => '경고가 발생하기 까지의 최대 줄 길이를 조정합니다. 기본적으로 80자를 초과하는 줄에 대해 경고가 발생합니다.',
  'UNKNOWN CONFIGURATION' => '알 수 없는 구성',
  'Enter a commit message for this patch. If you just want to apply the patch to the working copy without committing, re-run arc patch with the %s flag.' => '이 패치에 대한 커밋 메시지를 입력하세요. 커밋하지 않고 작업 사본에 패치만 적용하려면 %s 플래그로 `arc patch` 명령을 재실행하세요.',
  'Failed to chmod \'%s\' to \'%s\'.' => '\'%2$s\'(으)로 \'%s\'을(를) chmod 하는데 실패했습니다.',
  'Operating in Git/Perforce mode after selecting a Perforce remote.' => 'Perforce 원격을 선택한 후 Git/Perforce 모드로 작업합니다.',
  'IP address "%s" is not properly formatted: an address may only contain a maximum of one subsequence omitted with "::".' => 'IP 주소 "%s"의 형식이 올바르지 않습니다: 주소에는 "::"로 생략된 하위 시퀀스가 최대 하나만 포함될 수 있습니다.',
  'Report results in JSON format.' => 'JSON 포맷의 보고서 결과입니다.',
  'Failed to match "ls-remote" pattern against line "%s".' => '"%s" 줄과 "ls-remote" 패턴을 일치시키지 못했습니다.',
  'Attempt to write to undeclared property %s.' => '선언되지 않은 속성 %s에 쓰려고 시도했습니다.',
  'Provide a workflow to list prompts for.' => '프롬프트 목록을 표시할 워크플로를 지정하세요.',
  'Raw changes can not be pushed to a staging area.' => '원본 변경 사항은 스테이징 영역으로 푸시될 수 없습니다.',
  'Operation Error' => '작업 오류',
  'Template not edited.' => '틀이 편집되지 않았습니다.',
  'runtime --library flag' => '런타임 --library 플래그',
  'Convention: no spaces before opening parenthesis in function and method declarations.' => '명명 규칙: 함수 및 메서드 선언 시 여는 괄호 앞에 공백을 넣지 마세요.',
  'Publish reviewed changes.' => '검토된 변경 사항을 게시합니다.',
  'fread() from stdin failed with an error.' => 'stdin에서 fread()가 오류와 함께 실패했습니다.',
  'You must either provide a signing key with setSigningKey(), or provide a secret key with setSecretKey().' => 'setSigningKey()로 서명 키를 제공하거나 setSecretKey()로 비밀 키를 제공해야 합니다.',
  'Omitting the variable in a catch clause is not allowed before PHP 8.0.' => 'catch절에서 변수를 생략하는 것은 PHP 8.0 이전 버전에서는 사용할 수 없습니다.',
  'With \'full\', show full pretty report (Default). With \'json\', report results in JSON format. With \'ugly\', use uglier (but more efficient) JSON formatting. With \'none\', don\'t print results.' => '\'full\'은 보기 좋은 전체 보고서를 표시합니다(기본값). \'json\'은 결과를 JSON 형식으로 보고합니다. \'ugly\'는 더 보기 나쁘지만 효율적인 JSON 형식을 사용합니다. \'none\'은 결과를 출력하지 않습니다.',
  'SAVE STATE' => '상태 저장',
  '<placeholder>' => '<자리 표시자>',
  '%s failed!' => '%s 실패!',
  'Preparing to run a command in directory "%s", but that path is not a directory.' => '"%s" 디렉터리에서 명령을 실행하려고 준비했지만, 그 경로는 디렉터리가 아닙니다.',
  'Expected %s to return array, got %s.' => '%s이(가) 배열을 반환할 것으로 예상했지만 %s을(를) 반환했습니다.',
  'Assertion of caught exception failed (at %s:%d in test case "%s").' => '포착된 예외에 대한 단언문이 실패했습니다 (테스트 케이스 "%3$s"의 %s:%d에서).',
  'The dependencies for this patch have a cycle. Applying them is not guaranteed to work. Continue anyway?' => '이 패치에 대한 종속성에는 순환이 존재합니다. 적용해도 작동하리라는 보장이 없습니다. 그래도 계속합니까?',
  'Local commit "%s" (%s) does not merge cleanly into "%s". Rebase or merge local changes so they can merge cleanly.' => '"%s" (%s) 로컬 커밋은 "%s"에 깨끗하게 리베이스되지 않습니다. 로컬 변경 사항을 리베이스하거나 병합하면 깨끗하게 병합할 수 있습니다.',
  '<%s> %s' => '<%s> %s',
  '%s requires exactly one revision.' => '%s에는 정확히 하나의 판이 필요합니다.',
  'Unable to read file permissions for "%s"!' => '"%s"의 파일 권한을 읽을 수 없습니다!',
  'Override default binary.' => '기본 바이너리를 덮어씁니다.',
  'Parameter %d of `%s` should be a scalar string, otherwise it\'s not safe.' => '`%2$s`의 %d 매개변수는 스칼라 문자열이어야 합니다. 그렇지 않으면 안전하지 않습니다.',
  'Just ahead to the north, you can see **remotes**.
' => '바로 북쪽으로 향하자, 당신은 **원격**이 보입니다.',
  'Unable to verify request signature, specified "%s" ("%s") is unknown.' => '요청 서명을 확인할 수 없습니다, 지정된 "%s" ("%s") 을(를) 알 수 없습니다.',
  'Commit \'%s\' is not a valid Mercurial commit identifier.' => '커밋 \'%s\'은(는) 유효한 Mercurial 커밋 식별자가 아닙니다.',
  'Self Class Reference' => '자기 클래스 참조',
  'Host returned HTTP/200, but invalid JSON data in response to a Conduit method call.' => '호스트가 HTTP/200을 반환했지만 Conduit 메서드 호출에 대한 응답으로 유효하지 않은 JSON 데이터가 전송되었습니다.',
  'Czech (Czech Republic)' => '체코어 (체코)',
  'Constructor Parentheses' => '생성자 괄호',
  'Paste Symbol "%s"' => '붙여넣기 심볼 "%s"',
  'Reviewers: %s' => '검토자: %s',
  'Convention: no spaces before closing parenthesis in function and method declarations.' => '명명 규칙: 함수 및 메서드 선언 시 닫는 괄호 앞에 공백을 두지 마세요.',
  'The "SHELL" environment variable has value "%s", so the target shell was detected as "%s".' => '"SHELL" 환경 변수의 값이 "%s"이므로 대상 셸은 "%s"(으)로 감지되었습니다.',
  'Unable to overwrite path \'%s\', patched version was left at \'%s\'.' => '경로 \'%s\'을(를) 덮어쓸 수 없습니다. 패치된 버전이 \'%s\'에 남아 있습니다.',
  'Aug' => '8월',
  'Future has already ended; futures can not end more than once.' => '퓨처가 이미 끝났습니다, 퓨처는 두 번 이상 끝날 수 없습니다.',
  'Method %s in class %s is not implemented!' => '클래스 %2$s의 메서드 %s이(가) 구현되지 않았습니다!',
  'Convention: double arrow should be surrounded by whitespace.' => '명명 규칙: 이중 화살표는 공백으로 둘러싸야 합니다.',
  'Prefer "__CLASS__" or "__TRAIT__" over hard-coded class or trait names.' => '하드코딩된 클래스 또는 trait 이름보다 "__CLASS__" 또는 "__TRAIT__"를 선호하세요.',
  '%s disables lint.' => '%s은(는) 린트를 비활성화 합니다.',
  'If you provide an alter cost with %s, you must enable type computation with %s.' => '%s(으)로 alter 비용을 제공하는 경우 %s(으)로 유형 계산을 활성화해야 합니다.',
  'Test case \'%s\' was expected to succeed, but it raised an exception of class %s with message: %s' => '테스트 케이스 \'%s\'은(는) 성공할 것으로 예상되었지만, 다음의 메시지와 함께 클래스 %s의 예외를 발생시켰습니다: %s',
  'Title' => '제목',
  'Stage 1 bootloader is too large!' => '스테이지 1 부트로더가 너무 큽니다!',
  'Comment Spaces' => '댓글 공간',
  'More than one revision was found in the working copy:' => '작업 사본에서 두 개 이상의 판이 발견되었습니다:',
  'Rule \'%s\' in state \'%s\' in %s has unknown context rule \'%s\', expected \'%s\', \'%s\' or \'%s\'.' => '%3$s의 상태 \'%2$s\'에 있는 규칙 \'%s\'에 알 수 없는 컨텍스트 규칙 \'%4$s\'이 있습니다. 예상값은 \'%5$s\', \'%6$s\' 또는 \'%7$s\'입니다.',
  '**work** [--start __start__] __symbol__' => '**work** [--start __시작__] __심볼__',
  'No unit test engine is configured for this project. Create an \'%s\' file, or configure an advanced engine with \'%s\' in \'%s\'.' => '이 프로젝트에 구성된 단위 테스트 엔진이 없습니다. \'%s\' 파일을 생성하거나 \'%3$s\'에서 \'%s\'(으)로 고급 엔진을 구성하세요.',
  'Enable strict handling of units in expressions.' => '표현식에서 단위의 엄격한 처리를 활성화합니다.',
  'Unexpected `%s` value in `%s` method.' => '`%2$s` 메서드에서 예상치 못한 `%s` 값.',
  'Lock file out-of-date' => '잠금 파일이 최신 상태가 아님',
  'Disconnected' => '연결이 끊어짐',
  'Unresolved merge conflict' => '해결되지 않은 병합 충돌',
  'English (Very Wow)' => '영어 (매우 와우)',
  'Look around, or look at a specific __thing__.' => '주변을 둘러보거나, 특정한 __것__을 봅니다.',
  'Call Formatting' => '호출 형식',
  'Encountered a merge conflict.' => '병합 충돌이 발생했습니다.',
  'Always enable coverage information.' => '항상 커버리지 정보를 활성화합니다.',
  'PHP Compatibility' => 'PHP 호환성',
  'it is the greatest common ancestor of \'%s\' and %s, as specified by \'%s\' in your %s \'base\' configuration.' => '이는 \'%s\'와(과) %s의 최대 공통 조상이며, %4$s \'base\' 구성의 \'%s\'에 지정되어 있는 것입니다.',
  'Use `%s` to detect issues with JavaScript source files.' => '자바스크립트 소스 파일의 문제를 탐지하기 위해 `%s`을(를) 사용하세요.',
  'Attempting to convert a string encoding, but no target encoding was provided. Explicitly provide the target encoding.' => '문자열 인코딩을 변환하려고 시도했지만 대상 인코딩이 제공되지 않았습니다. 대상 인코딩을 명시적으로 제공하세요.',
  'Landed changes.' => '최종 반영된 변경 사항입니다.',
  'This codebase targets PHP %s, but `%s` was not introduced until PHP %s.' => '이 코드베이스는 PHP %s을(를) 대상으로 하지만 `%s`은(는) PHP %s까지 도입되지 않았습니다.',
  'Use of `%s` Properties' => '`%s` 속성의 사용',
  'INTO TARGET' => '"into" 대상',
  'Chinese (Simplified)' => '중국어(간체)',
  'Begin or resume work on a branch, bookmark, task, or revision.

The __symbol__ may be a branch or bookmark name, a revision name (like "D123"),
a task name (like "T123"), or a new symbol.

If you provide a symbol which currently does not identify any ongoing work,
a new branch or bookmark will be created with the name you provide.

If you provide the name of an existing branch or bookmark, the working copy
will be switched to that branch or bookmark.

If you provide the name of a revision or task, the workflow will look for a
related branch or bookmark that already exists in the working copy. If one is
found, it will switch to it. If it does not find one, it will attempt to create
a new branch or bookmark.

When "arc work" creates a branch or bookmark, it will use **--start** as the
branchpoint if it is provided. Otherwise, the current working copy state will
serve as the starting point.' => '브랜치, 책갈피, 태스크 또는 판에 대한 일을 시작하거나 재개합니다.

__심볼__은 브랜치 또는 북마크 이름, "D123" 같은 판 이름, "T123" 같은 태스크 이름, 또는 새 심볼일 수 있습니다.

현재 진행 중인 일을 식별하지 않는 심볼을 제공하면, 제공한 이름으로 새 브랜치 또는 책갈피가 생성됩니다.

기존 브랜치 또는 책갈피의 이름을 제공하면 작업 사본이 해당 브랜치 또는 책갈피로 전환됩니다.

판이나 작업의 이름을 제공하면, 워크플로는 작업 사본에 이미 존재하는 관련 브랜치 또는 책갈피를 찾습니다. 찾으면 그 항목으로 전환합니다. 찾지 못하면 새 브랜치 또는 책갈피 생성을 시도합니다.

"arc work"가 브랜치 또는 책갈피를 만들 때 **--start**가 제공되면 이를 분기 지점으로 사용합니다. 그렇지 않으면 현재 작업 사본 상태가 시작 지점으로 사용됩니다.',
  'Unknown patch type \'%s\'!' => '알 수 없는 패치 유형 "%s"!',
  'Expected list of rules for state \'%s\' in %s, got %s.' => '%2$s에서 상태 \'%s\'에 대한 규칙 목록을 예상했지만, %3$s을(를) 받았습니다.',
  'Rebasing "%s" onto landed state...' => '"%s"을(를) 최종 반영된 상태에 리베이스하는 중...',
  'Open a file or object in a local web browser.' => '파일이나 객체를 로컬 웹 브라우저에서 엽니다.',
  'This codebase targets PHP %s, but short ternary was not introduced until PHP 5.3.' => '이 코드베이스는 PHP %s을(를) 대상으로 하지만 단축 삼항 연산자는 PHP 5.3 까지 도입되지 않았습니다.',
  'Paste "%s" does not exist, or you do not have access to see it.' => '붙여넣기 "%s"이(가) 존재하지 않거나, 볼 수 있는 권한이 없습니다.',
  'Arrays should use the long array syntax.' => '배열은 긴 배열 문법을 사용해야 합니다.',
  'You have no open Differential revisions.' => '열린 Differential 판이 없습니다.',
  'You are landing %s revision(s) which are already in the state "%s", indicating that they have previously landed:' => array(
    '이미 상태가 "%2$s"인 판을 최종 반영하려고 합니다. 이 상태는 이전에 최종 반영되었음을 나타냅니다.',
    '이미 상태가 "%2$s"인 판 %s개를 최종 반영하려고 합니다. 이 상태는 이전에 최종 반영되었음을 나타냅니다.',
  ),
  'Local branches and bookmarks have not been changed, and are still in the same state as before.' => '로컬 브랜치와 책갈피는 변경되지 않았으며 이전과 동일한 상태입니다.',
  'Nested `%s` Statements' => '중첩된 `%s` 서술',
  'Two workflows ("%s" and "%s") both have the same name ("%s") and both support the current toolset ("%s", "%s"). Each workflow in a given toolset must have a unique name.' => '두 워크플로("%s" 및 "%s")는 모두 동일한 이름("%s")을 가지고 있으며 현재 Toolset(" %s ", "%s")을 지원합니다. 주어진 도구집합 내의 각 워크플로는 고유한 이름을 가져야 합니다.',
  'Linter Rules' => '린터 규칙',
  'Void casts (`%s`) are not available before PHP 8.4.' => '보이드 cast(`%s`)는 PHP 8.4 이전 버전에서는 사용할 수 없습니다.',
  'Preparing to run a command in directory "%s", but that directory is not executable (the current process does not have "+x" permission).' => '"%s" 디렉터리에서 명령을 실행하려고 준비했지만, 해당 디렉터리는 실행 가능하지 않습니다(현재 프로세스에 "+x" 권한이 없습니다).',
  'It is late in the evening. The air is cool and still, and filled with the sound of crickets.' => '저녁이 깊었습니다. 공기는 선선하고 고요하며 귀뚜라미 소리로 가득합니다.',
  '(The Empty Tree)' => '(비어있는 트리)',
  'VERY META' => '매우 메타적',
  'Shelving uncommitted changes from working copy.' => '작업 사본으로부터 커밋되지 않은 변경 사항을 셸빙합니다.',
  'OKAY' => '정상',
  '%s locally modified path(s) are not included in this revision:' => array(
    '로컬에서 수정된 경로가 이 판에 포함되어 있지 않습니다:',
    '로컬에서 수정된 경로들이 이 판에 포함되어 있지 않습니다:',
  ),
  'Implicitly marking parameters as nullable is deprecated beginning with PHP 8.4.0.' => '매개변수를 암시적으로 nullable로 표시하는 것은 PHP 8.4.0부터 구식이 될 예정입니다.',
  'Failed to JSON encode value (%s): %s.' => '값을 JSON 인코딩하는데 실패했습니다 (%s): %s.',
  'Landing the active commit, "%s".' => '활성 커밋인 "%s"을(를) 최종 반영합니다.',
  'IP address "%s" is not properly formatted: the segments of an address must be hexadecimal values between "0000" and "ffff", inclusive. Segment "%s" is not.' => 'IP 주소 "%s"의 형식이 올바르지 않습니다: 주소의 각 부분은 "0000"부터 "ffff"까지의 16진수 값이어야 합니다. 세그먼트 "%s"은(는) 형식을 충족하지 않습니다.',
  '          Supports: cli
          List the available and configured linters, with information about
          what they do and which versions are installed.

          if __name__ is provided, the linter with that name will be displayed.' => '지원: cli
사용 가능한 린터와 구성된 린터 목록을 표시합니다. 각 린터의 기능과 설치된 버전에 대한 정보도 함께 제공합니다.

__이름__이 제공되면 해당 이름의 린터가 표시됩니다.',
  'Unable to move %s to %s.' => '%s을(를) %s(으)로 이동할 수 없습니다.',
  'Local branch "%s" tracks an upstream, but there is no path to a remote; ignoring branch upstream.' => '로컬 브랜치 "%s"은(는) 업스트림을 추적하지만, 원격으로 가는 경로가 없습니다, 브랜치 업스트림을 무시합니다.',
  'Prompt ("%s") is executing, but it is not properly bound to the invoking workflow. You may have called "newPrompt()" to execute a prompt instead of "getPrompt()". Use "newPrompt()" when defining prompts and "getPrompt()" when executing them.' => '프롬프트("%s")는 실행되고 있지만, 호출하는 워크플로에 제대로 바운딩되어 있지 않습니다. "getPrompt()" 대신 "newPrompt() "를 호출하여 프롬프트를 실행했을 수도 있습니다. 명령어를 정의할 때 "newPrompt()"를, 실행할 때 "getPrompt()"를 사용하세요.',
  'BROKEN' => '망가짐',
  'Unparsable Mercurial status line \'%s\'.' => '구문 분석 할 수 없는 Mercurial 상태 줄 \'%s\'입니다.',
  'Private methods in traits are not available before PHP 8.0.' => 'Trait 내에서의 개인 메서드는 PHP 8.0 이전 버전에서는 사용할 수 없습니다.',
  'You\'re running a command which operates on a range of revisions (usually, from some revision to HEAD) but have not specified the revision that should determine the start of the range.

Previously, arc assumed you meant \'%s\' when you did not specify a start revision, but this behavior does not make much sense in most workflows outside of Facebook\'s historic %s workflow.

arc no longer assumes \'%s\'. You must specify a relative commit explicitly when you invoke a command (e.g., `%s`, not just `%s`) or select a default for this working copy.

In most cases, the best default is \'%s\'. You can also select \'%s\' to preserve the old behavior, or some other remote or branch. But you almost certainly want to select \'origin/master\'.

(Technically: the merge-base of the selected revision and HEAD is used to determine the start of the commit range.)' => '판 범위(일반적으로 어떤 판부터 HEAD까지)에 대해 동작하는 명령을 실행하고 있지만, 범위의 시작을 결정할 판을 지정하지 않았습니다.

이전에는 시작 판을 지정하지 않으면 arc가 \'%s\'을(를) 의미한다고 가정했지만, 이 동작은 Facebook의 과거 %s 워크플로 외 대부분의 워크플로에서는 별로 타당하지 않습니다.

arc는 더 이상 \'%s\'을(를) 가정하지 않습니다. 명령을 호출할 때 상대 커밋을 명시적으로 지정하거나(예: 단순히 `%5$s`이(가) 아니라 `%s`) 이 작업 사본에 대한 기본값을 선택해야 합니다.

대부분의 경우 가장 좋은 기본값은 \'%6$s\'입니다. 이전 동작을 유지하려면 \'%7$s\'을(를) 선택할 수도 있고, 다른 원격 또는 브랜치를 선택할 수도 있습니다. 하지만 거의 확실히 \'origin/master\'를 선택하는 것이 좋습니다.

(기술적으로는 선택한 판과 HEAD의 병합 기준이 커밋 범위의 시작을 결정하는 데 사용됩니다.)',
  'Show this help, or workflow help for __command__.' => '이 도움말 또는 __명령__에 대한 워크플로 도움말을 표시합니다.',
  'Trailing commas in function or method calls are not available before PHP 7.3.' => '함수나 메서드 호출에서의 쉼표 나열은 PHP 7.3 이전 버전에서는 사용할 수 없습니다.',
  'Configuration option ("%s") specified with "--config" flag is not a recognized option.' => '"--config" 플래그로 지정된 구성 옵션("%s")은 인식되지 않는 옵션입니다.',
  'Other locations: %s' => '기타 위치: %s',
  'UNIT ERRORS' => '단위 오류',
  'Associates this working copy with a specific installation of %s (or compatible software).' => '이 작업 사본을 %s(또는 호환 소프트웨어)의 특정 설치와 연결합니다.',
  'Upload complete.' => '업로드가 완료되었습니다.',
  'When using \'%s\' to update a revision, specify an update message with \'%s\'. (Normally, we\'d launch an editor to ask you for a message, but can not do that because stdin is the diff source.)' => '\'%s\'(으)로 판을 업데이트할 때는 \'%s\'(으)로 업데이트 메시지를 지정하세요. (일반적으로 메시지를 묻기 위해 편집기를 실행하지만, stdin이 차이 소스이므로 그렇게 할 수 없습니다.)',
  'Remote "%s" was selected by reading "%s" configuration.' => '원격 "%s"은(는) "%s" 구성을 읽어 선택되었습니다.',
  'Unable to open stderr temporary file ("%s") for reading.' => 'stderr 임시 파일("%s")을 읽기를 위해 열 수 없습니다.',
  'Unable to locate interpreter "%s" to run linter %s. You may need to install the interpreter, or adjust your linter configuration.' => '린터 %2$s을(를) 실행하기 위한 인터프리터 "%s"을(를) 찾을 수 없습니다. 인터프리터를 설치하거나 린터 구성을 조정해야 할 수 있습니다.',
  'Landing onto remote "%s", the default remote under Git.' => 'Git의 기본 원격인 원격 "%s"에 최종 반영합니다.',
  'Hardpoint engine can not resolve: no request made progress during the last update cycle and there are no futures awaiting resolution.' => '하드포인트 엔진이 해결할 수 없습니다: 마지막 업데이트 주기 동안 진행된 요청이 없으며 해결을 기다리는 퓨처도 없습니다.',
  'Unrecognized item status \'%s\'.' => '\'%s\' 항목 상태를 인식할 수 없습니다.',
  'There should be no whitespace after the object operator.' => '객체 연산자 뒤에는 공백이 존재해서는 안됩니다.',
  'Checks for syntax errors in PHP files.' => 'PHP 파일의 구문 오류를 확인합니다.',
  'HTTP Basic Auth is not supported by %s.' => '%s은(느) HTTP 기본 Auth를 지원하지 않습니다.',
  'Using short array syntax for `%s` was not introduced until PHP 7.1, but this codebase targets an earlier version of PHP.You can rewrite this expression using the `list(...)` instead.' => '`%s`에 대한 단축 배열 구문은 PHP 7.1부터 도입되었지만, 이 코드베이스는 이전 버전의 PHP를 대상으로 합니다. `list(...)`를 사용하여 이 표현을 다시 작성할 수 있습니다.',
  'Local Config File' => '로컬 구성 파일',
  'Update the details for a revision, then save and exit.' => '판의 세부 정보를 업데이트하고, 저장한 후 종료하세요.',
  'Will merge into target "%s", selected with the "--into" flag.' => '"--into" 플래그로 선택한 대상 "%s"에 병합됩니다.',
  'Did you mean:' => '이것을 찾으셨나요:',
  'Flag "--builtins" may not be used with a path.' => '"--builtins" 플래그는 경로와 같이 사용될 수 없습니다.',
  'This software is now up to date.' => '이 소프트웨어는 이제 최신입니다.',
  'Message has unresolved errors.' => '메시지에 해결할 수 없는 오류가 있습니다.',
  'Error' => '오류',
  'Object Operator Spacing' => '객체 연산자 띄어짐',
  'PayPal API call failed: %s' => '페이팔 API 호출 실패: %s',
  'Revision includes changes to %s path(s) that do not exist:' => '판에 존재하지 않는 경로 대한 변경 사항이 포함됩니다.',
  'Creating new bookmark "%s" from "%s".' => '"%2$s"에서 새 책갈피 "%s"을(를) 생성합니다.',
  'TODO: Support merge strategies' => 'TODO: 병합 방식 지원',
  'arc could not identify any existing revision in your working copy.' => 'arc가 사용자의 작업 사본에서 기존 판을 찾을 수 없었습니다.',
  'Convention: no spaces before opening parenthesis in property hooks.' => '명명 규칙: 속성 훅의 여는 괄호 앞에 공백을 넣지 마세요.',
  'Learn More:' => '더 알아보기:',
  'This syntax indicates there is an unresolved merge conflict.' => '이 구문은 해결되지 않은 병합 충돌이 있음을 나타냅니다.',
  'State has multiple ambiguous revisions refs.' => '상태에 여러개의 모호한 판 ref가 존재합니다.',
  'Command (of class "%s") was constructed with a "PhutilCommandString", but also passed arguments. When using a prebuilt command, you must not pass arguments.' => '명령(클래스 "%s")이 "PhutilCommandString"으로 구성되었지만 인수도 전달받았습니다. 미리 빌드된 명령을 사용할 때는 인수를 전달하면 안 됩니다.',
  'Upload one or more files from local disk.' => '로컬 디스크에서 하나 이상의 파일을 업로드합니다.',
  'Newline After PHP Open Tag' => 'PHP 시작 태그 이후 새 줄',
  'Hardpoint ("%s") is not registered on this object (of type "%s") so the definition object does not exist. Hardpoints are: %s.' => '하드포인트("%s")가 이 객체(유형 "%s")에 등록되어 있지 않으므로 정의 객체가 존재하지 않습니다. 하드포인트: %s.',
  'Use "Commandeer" in the web interface to become the author of a revision.' => '웹 인터페이스에서 "소유권 가져오기"를 사용하면 판의 작성자가 될 수 있습니다.',
  'LINT MESSAGES' => '린트 메시지',
  'Use "--revision <id>" to specify which revision you want to amend.' => '"--revision <id>"로 어멘드 하려는 판을 지정하세요.',
  'Exiting (Client Limit)' => '종료 중 (클라이언트 제한)',
  'File "%s"' => '파일 "%s"',
  'Failed to parse URI "%s" as a Git URI.' => 'URI "%s"을(를) Git URI로 구문 분석하는데 실패했습니다.',
  'Incomplete directories in working copy:' => '작업 사본 내의 불완전한 디렉토리:',
  'Unable to write to logfile "%s"!' => '"%s" 로그 파일에 쓸 수 없습니다!',
  'Unnecessary Symbol Alias' => '불필요한 심볼 별칭',
  'Always create a new revision.' => '항상 새로운 판을 만듭니다.',
  'User Symbol "%s"' => '사용자 심볼 "%s"',
  'Class or interface symbol "%s" should be written as "%s".' => '클래스 또는 인터페이스 심볼 "%s"은(는) "%s"(으)로 작성되어야 합니다.',
  'Instead of holding the lock, release it and exit.' => '잠금을 유지하는 대신, 해제하고 종료합니다.',
  'Press ^C again to exit.' => '^C를 다시 누르면 종료됩니다.',
  'You have incompletely checked out directories in this working copy. Fix them before proceeding.\'' => '이 작업 복사본에는 불완전하게 체크아웃된 디렉터리가 있습니다. 진행하기 전에 수정하세요.',
  'You\'re in a detached HEAD and no start point was given.
Run `%s` or switch to a branch first.' => '분리된 HEAD 상태이며 시작점이 지정되지 않았습니다.
먼저 `%s`을(를) 실행하거나 브랜치로 전환하세요.',
  'Lint for %s:' => '%s의 린트:',
  'Exiting (Idle Limit)' => '종료 중 (유휴 상태 제한)',
  'Call to phutil_nonempty_scalar() expected: a string; or stringlike object; or int; or float. Got: %s.' => 'phutil_nonempty_scalar() 호출은: 문자열, 문자열 유사 객체, int 또는 float를 예상했습니다. 받은 값: %s.',
  'Expected \'Date:\'.' => '\'Date:\'를 예상했습니다.',
  'JSON protocol message must be an array, got some other type ("%s").' => 'JSON 프로토콜 메시지는 배열이어야 하지만 다른 유형("%s")을 받았습니다.',
  'Advice' => '권고',
  'Unable to resolve argument "%s".' => '인수 "%s"을(를) 해결할 수 없습니다.',
  'Unable to resolve startpoint "%s".' => '시작점 "%s"을(를) 해결할 수 없습니다.',
  'The remote host refused the connection. This usually means the host is not running an HTTP server, or the network is blocking connections from this machine. Verify you can connect to the remote host from this host.' => '원격 호스트에서 연결을 거부했습니다. 이는 일반적으로 해당 호스트에서 HTTP 서버가 실행되고 있지 않거나 네트워크에서 해당 컴퓨터의 연결을 차단하고 있음을 의미합니다. 이 호스트에서 원격 호스트에 연결할 수 있는지 확인하세요.',
  'The server does not support staging areas.' => '서버가 스테이징 영역을 지원하지 않습니다.',
  'Connect to server specified by __uri__.' => '__uri__로 지정된 서버에 연결합니다.',
  'Expected type \'%s\', got type \'%s\'.' => '유형 \'%s\'을(를) 예상했지만, 유형 \'%s\'을(를) 받았습니다.',
  'DEPRECATED' => '구식',
  'Unable to unlock file!' => '파일의 잠금을 해제할 수 없습니다!',
  'String conversion from encoding \'%s\' to encoding \'%s\' failed: %s' => '인코딩 \'%s\'에서 인코딩 \'%s\'(으)로의 문자열 변환이 실패했습니다: %s',
  'Configured command aliases. Use the "alias" workflow to define aliases.' => '구성된 명령 별칭입니다. 별칭을 정의하려면 "alias" 워크플로를 사용하세요.',
  'You can not reiterate over a %s object. The entire goal of the construct is to avoid keeping output in memory. What you are attempting to do is silly and doesn\'t make any sense.' => '%s 객체를 반복할 수 없습니다. 이 구조의 핵심 목적은 출력을 메모리에 저장하지 않는 것입니다. 따라서 지금 시도하는 방식은 어리석고 전혀 의미가 없습니다.',
  'Successfully applied patch to the working copy.' => '성공적으로 패치를 작업 사본에 적용했습니다.',
  'Unstaged changes in working copy:' => '작업 사본의 스테이징 되지 않은 변경 사항:',
  'Failed to unserialize object: %s' => '객체 역직렬화에 실패했습니다: %s',
  'Use of Short Tag `%s`' => '단축 태그 `%s`의 사용',
  'Intersection types are not available before PHP 8.1.' => '인터섹션 유형은 PHP 8.1 이전 버전에서는 사용할 수 없습니다.',
  'It is early morning. Glimses of sunlight peek through the trees and you hear the faint sound of birds overhead.' => '이른 아침입니다. 나무 사이로 햇살이 비치고 오버헤드로 새소리가 희미하게 들립니다.',
  'Flag "--input" is not supported when reading pastes.' => '붙여넣기를 읽을 때는 플래그 "--input"이 지원되지 않습니다.',
  'Pass in a custom configuration file path.' => '사용자 지정 구성 파일 경로를 전달합니다.',
  'Reduce/reduce conflict: from state \'%s\', when a \'%s\' is encountered, it may be reduced in multiple ways: %s' => 'Reduce/reduce 충돌: 상태 \'%s\'에서, \'%s\'이(가) 발생할 경우, 여러 방식으로 reduce될 수 있습니다: %s',
  'Configured prompt aliases. Use the "prompts" workflow to show prompts and responses.' => '구성된 프롬프트의 별칭입니다. "prompts"를 사용해서 프롬프트와 응답을 표시하세요.',
  'List Assignment' => '린트 할당',
  '`%s` Should Be `%s`' => '`%s`은(는) `%s`여야 합니다',
  'ACTUAL VALUE' => '실제 값',
  'No HTTP engine extension exists with extension key "%s".' => '확장 기능 키 "%s"을(를) 가진 HTTP 엔진 확장 기능이 없습니다.',
  'Symbol Information file does not exist!' => '심볼 정보 파일이 존재하지 않습니다!',
  'P4 SYNC' => 'P4 동기화',
  'Apply changes from a git patchfile or unified patchfile.' => 'Git 패치 파일 또는 통합 패치 파일의 변경 사항을 적용합니다.',
  'Self Member Reference' => '자기 자신 멤버 참조',
  'Unable to upload file: path "%s" does not exist.' => '파일을 업로드 할 수 없음: 경로 "%s"이(가) 존재하지 않습니다.',
  'Multiple access type modifiers are not allowed.' => '접근 유형 수식어는 여러 개 사용할 수 없습니다.',
  'Engine \'%s\' does not support %s.' => '\'%s\' 엔진은 %s을(를) 지원하지 않습니다.',
  'Use PHP-Parser instead of XHPAST.' => 'XHPAST 대신 PHP-Parser를 사용합니다.',
  'Class Not Extending `%s`' => '클래스가 `%s`을(를) 확장하지 않음',
  'Browse Query "%s"' => '쿼리 "%s"을(를) 찾아보기',
  'LOAD ERROR' => '로드 오류',
  'Do not send "capability" message when clients connect. Clients must be configured not to expect the message. This deviates from the Mercurial protocol, but slightly improves performance.' => '클라이언트가 연결 시 "capability" 메시지를 보내지 않습니다. 클라이언트가 해당 메시지를 예상하지 않도록 구성되어야 합니다. 이는 Mercurial 프로토콜과는 다르지만 성능을 약간 향상시킵니다.',
  'Options "D12345", "--revision", "--diff", "--arcbundle" and "--patch" are mutually exclusive. Choose exactly one patch source.' => '옵션 "D12345", "--revision", "--diff", "--arcbundle" 및 "--patch"는 같이 사용할 수 없습니다. 정확히 하나의 패치 소스만 선택하세요.',
  'Failed to decode JSON object.' => 'JSON 객체의 디코딩을 실패했습니다.',
  'You must provide a nonempty commit message.' => '비어있지 않은 커밋 메시지를 지정해야 합니다.',
  '%s runs all tests.' => '%s은(는) 모든 테스트를 실행합니다.',
  'Trying to execute a class map query for descendants of class "%s", but no such class or interface exists.' => '클래스 "%s"의 하위 항목에 대한 클래스 맵 쿼리를 실행하려고 하지만, 그런 클래스나 인터페이스가 없습니다.',
  'Argument to "phutil_microseconds_since(...)" should be a value returned from "microtime(true)".' => '"phutil_microseconds_since(...)" 함수의 인수는 "microtime(true)" 함수에서 반환된 값이어야 합니다.',
  'Declaration Formatting' => '선언 형식',
  'Normally, if a patch has dependencies that are not present in the working copy, arc tries to apply them as well. This flag prevents such work.' => '일반적으로 패치에 작업 사본에 없는 종속성이 있는 경우 arc는 그것들도 적용하려고 시도합니다. 이 플래그는 이러한 작업을 방지합니다.',
  'Regular expression engine emitted message: %s' => '정규 표현식 엔진이 메시지를 출력했습니다: %s',
  'Argument "%s" is ambiguous.' => '인수 "%s"은(는) 모호합니다.',
  'Install puppet-lint using `%s`.' => '`%s`을(를) 사용해 puppet-lint를 설치합니다.',
  'This repository has no VCS UUID (this is normal for git/hg).' => '이 저장소에는 VCS UUID가 없습니다 (git/hg에 있어서는 정상입니다).',
  'Call to "proc_open()" to open a subprocess failed: %s' => '하위 프로세스를 열기 위한 "proc_open()" 호출이 실패했습니다: %s',
  'Library "%s" (in "%s") is on branch "%s", but this branch is not supported for automatic upgrades. Supported branches are: %s.' => '("%2$s"의) 라이브러리 "%s"은(는) "%3$s" 브랜치에 있지만, 이 브랜치는 자동 업그레이드가 지원되지 않습니다. 지원되는 브랜치: %4$s.',
  'Successfully %s patch.' => '성공적으로 패치를 %s.',
  'Unable to find any local branches to update, staying on detached head.' => '업데이트할 로컬 브랜치를 찾을 수 없어 분리된 헤드 상태를 유지하고 있습니다.',
  'A copy was saved to %s.' => '사본이 %s(으)로 저장되었습니다.',
  'Title for the paste.' => '붙여넣기의 제목입니다.',
  'AWS Request ID: %s' => 'AWS 요청 ID: %s',
  'Priority' => '우선 순위',
  'Unnecessary Semicolon' => '불필요한 세미콜론',
  'There is nothing left to commit. None of the modified paths exist.' => '더이상 커밋할 것이 남아있지 않습니다. 수정된 경로가 아무것도 존재하지 않습니다.',
  'Unable to resolve default browse target.' => '기본 탐색 대상을 해결할 수 없습니다.',
  'Argument "%s" conflicts with unspecified argument "%s".' => '인수 "%s"이(가) 지정되지 않은 인수 "%s"와(과) 충돌합니다.',
  'Unable to write configuration: there is no writable configuration source in the "%s" scope.' => '구성을 쓸 수 없습니다: "%s" 범위에 쓰기 가능한 구성 소스가 없습니다.',
  'Closed' => '닫힘',
  'To go back to how things were before you ran "arc land", run these %s command(s):' => array(
    '"arc land"를 실행하기 전 상태로 되돌리려면 다음 명령을 실행하세요:',
    '"arc land"를 실행하기 전 상태로 되돌리려면 다음 명령들을 실행하세요:',
  ),
  'Useless Overriding Method' => '쓸모없는 덮어쓰기 메서드',
  'Perform a clean rebuild, ignoring caches. Thorough, but slow.' => '캐시를 무시하고 완전히 재빌드합니다. 철저하지만 느립니다.',
  'Multiple exceptions were raised during test execution.' => '테스트 실행 중 여러 예외가 발생했습니다.',
  'Expected exactly one argument to "user(...)" with a user symbol.' => '"user(...)"에 정확히 인수(사용자 심볼)가 하나 주어지는 것을 예상했습니다.',
  'Use PHP-Parser to enforce coding conventions on PHP source files.' => 'PHP-Parser를 사용하여 PHP 소스 파일에 코딩 규칙을 적용시킵니다.',
  'Semicolon Spacing' => '세미콜론 띄어짐',
  'Trying rule \'%s\'.' => '규칙 \'%s\'을(를) 시도합니다.',
  'ID' => 'ID',
  'Allows you to disable all lint messages for a file by putting "%s" in the file body.' => '파일 본문에 "%s"을(를) 넣음으로써 해당 파일에 대한 모든 린트 메시지를 비활성화할 수 있습니다.',
  'AMBIGUOUS SYMBOL' => '모호한 심볼',
  'PyLint is a Python source code analyzer which looks for programming errors, helps enforcing a coding standard and sniffs for some code smells.' => 'PyLint는 프로그래밍 오류를 찾고, 코딩 표준을 준수하도록 돕고, 코드의 문제점을 감지하는 파이썬 소스 코드 분석 도구입니다.',
  'This loop reuses iterator variables (%s) from an outer loop. You might be clobbering the outer iterator. Change the inner loop to use a different iterator name.' => '이 루프는 외부 루프의 반복자 변수(%s)를 재사용합니다. 외부 반복자가 덮어쓰여질 수 있습니다. 내부 루프에서 다른 반복자 이름을 사용하도록 바꾸세요.',
  'This codebase targets PHP %s, but nowdoc was not introduced until PHP 5.3.' => '이 코드베이스는 PHP %s을(를) 대상으로 하지만 nowdoc은 PHP 5.3 까지 도입되지 않았습니다.',
  'Implode With Glue First' => 'Glue로 먼저 Implode',
  'Diff for \'%s\' with context is %s bytes in length. Generally, source changes should not be this large.' => '컨텍스트가 포함된 \'%s\'의 차이 길이가 %s바이트입니다. 일반적으로 소스 변경 사항은 이렇게 커서는 안 됩니다.',
  'Deleted After Multiple Copy' => '여러 번 복사 후 삭제됨',
  'Empty `%s` statements are no longer supported in PHP 7.0.' => '빈 `%s`문은 PHP 7.0에서 더 이상 지원되지 않습니다.',
  'Naming Conventions' => '명명 규칙',
  'Failed to remove file \'%s\'!' => '\'%s\' 파일 제거를 실패했습니다!',
  'Argument specification MUST have a \'name\'.' => '인수 명세는 \'name\'을 반드시 가져야 합니다.',
  'To configure Git to ignore certain files in this working copy, add the file paths to "%s".' => 'Git이 이 작업 사본에서 특정 파일을 무시하도록 구성하려면 파일 경로를 "%s"에 추가하세요.',
  'Unable to determine the installed version of binary "%s". This version is required.' => '설치된 바이너리 "%s"의 결정할 수 없습니다. 이 버전이 필요합니다.',
  'Dereferencing array and string literals was not introduced until PHP 5.5, but this codebase targets an earlier version of PHP. You can rewrite this expression using `%s`.' => '배열과 문자열 리터럴 역참조는 PHP 5.5부터 도입되었지만, 이 코드베이스는 이전 버전의 PHP를 대상으로 합니다. `%s`을(를) 사용하여 이 표현식을 다시 작성할 수 있습니다.',
  '%s must return an edge list array for each provided node, or the cycle detection algorithm may not terminate.' => '%s은(는) 제공된 각 노드에 대한 엣지 목록 배열을 반환해야 합니다. 그렇지 않으면 순환 감지 알고리즘이 종료되지 않을 수 있습니다.',
  'Specify a command to execute using one or more arguments.' => '하나 이상의 인수를 사용해 실행할 명령을 지정하세요.',
  'MERGING' => '병합 중',
  '`%s` Containing `%s` Methods Must Be Declared `%s`' => '`%2$s` 메서드를 포함하는 `%s`은(는) `%3$s`(으)로 선언되어야 함',
  '(Old and new values are identical.)' => '(이전 값과 새로운 값이 동일합니다.)',
  'Parent of: %s %s' => '다음의 상위: %s %s',
  'Unable to locate script "%s" to run linter %s. You may need to install the script, or adjust your linter configuration.' => '린터 %2$s을(를) 실행하는 데 필요한 스크립트 "%s"을(를) 찾을 수 없습니다. 스크립트를 설치하거나 린터 구성을 조정해야 할 수 있습니다.',
  'This workflow (\'%s\') requires authentication, override %s to return true.' => '이 워크플로(\'%s\')는 인증을 요구합니다, 참을 반환하려면 %s을(를) 덮어쓰세요.',
  'Parse Error' => '구문 분석 오류',
  'You can see the exact changes that will be sent by running this command:' => '다음 명령을 실행하면 전송될 정확한 변경 사항을 확인할 수 있습니다:',
  'Upload files.' => '파일을 업로드합니다.',
  'Trying to resolve a path that goes higher then root' => '루트보다 더 높은 경로를 해결하려고 함',
  'You can fix these paths by running \'%s\' on them.' => '이 경로들에 \'%s\'을(를) 실행해서 경로들을 수정할 수 있습니다.',
  'Call to "assertCaught(..., <junk>, ...)" for test case "%s" passed bad value for test result. Expected null, Exception, or Throwable; got: %s.' => '테스트 케이스 "%s"에 대한 "assertCaught(..., <junk>, ...)" 호출이 테스트 결과에 대해 잘못된 값을 전달했습니다. 부울, 문자열로 된 클래스 이름 또는 문자열 이름 목록이 예상되었지만, 다음을 받았습니다: %s',
  'Certificate installed.' => '자격 증명이 설치되었습니다.',
  'Merging with "%s" strategy, configured with "%s".' => '"%2$s"(으)로 구성된 "%s" 방식으로 병합합니다.',
  'SKIP STAGING' => '스테이징 건너뛰기',
  'Error #%d executing svn info against \'%s\'.' => '\'%2$s\'에 대해 svn info를 실행하는 중 오류 #%d이(가) 발생했습니다.',
  'Failed to set system locale (to "%s").' => '시스템 로케일을 ("%s"(으)로) 설정하는데 실패했습니다.',
  'The "onto" refs you have selected are connected to multiple different remotes via Git branch upstreams. Use "--onto-remote" to select a single remote.' => '선택한 "onto" 참조는 Git 브랜치 업스트림을 통해 여러 개의 서로 다른 원격에 연결되어 있습니다. 단일 원격을 선택하려면 "--onto-remote" 옵션을 사용하세요.',
  'Class Name Literal' => '클래스 이름 리터럴',
  'Name Error' => '이름 오류',
  '**alias**' => '**별칭**',
  '...and the current working copy state will be sent to Differential, because %s' => '...그리고 현재 작업 사본 상태는 Differential로 보내집니다. 이유: %s',
  'Land revisions you are not the author of?' => '자신이 작성하지 않은 판을 최종 반영합니까?',
  '**prompts** __workflow__' => '**prompts** __워크플로__',
  '(PROTOTYPE) Record a copy of the test results on the specified Harbormaster build target.' => '(프로토타입) 지정한 Harbormaster 빌드 대상에 테스트 결과 사본을 기록합니다.',
  'Duplicate Symbol' => '중복 심볼',
  'Implicit Fallthrough' => '암시적 Fallthrough',
  'Provide a map from lint codes to adjusted severity levels: error, warning, advice, autofix or disabled.' => '린트 코드에서 다음의 조정된 심각도 수준으로의 매핑을 제공합니다: error, warning, advice, autofix 또는 disabled.',
  'Unexpected `%s` Value' => '예상치 못한 `%s` 값',
  'Failed to match against branch pattern "%s".' => '브랜치 패턴 "%s"와(과) 일치시키지 못했습니다.',
  'LOCAL CYCLE' => '로컬 순환',
  'Extension ("%s") defines invalid alias ("%s") for configuration key ("%s"). Configuration keys and aliases: may only contain lowercase letters, numbers, hyphens, underscores, and periods; must start with a letter; and must be at least three characters long.' => '확장 기능("%s")이 구성 키("%3$s")에 대한 유효하지 않은 별칭("%s")을 정의합니다. 구성 키와 별칭: 소문자, 숫자, 하이픈, 밑줄 및 마침표만 포함될 수 있고, 문자로 시작해야 하며, 최소 3자 이상이어야 합니다.',
  'Functions which should be considered deprecated.' => '구식인 것으로 고려되어야 하는 함수입니다.',
  'Connection could not be initiated. This usually indicates a DNS problem: verify the domain name is correct, that you can perform a DNS lookup for it from this machine. (Did you add the domain to `%s` on some other machine, but not this one?) This might also indicate that you specified the wrong port.' => '연결을 시작할 수 없습니다. 보통 DNS 문제를 나타냅니다. 도메인 이름이 올바른지, 이 머신에서 DNS 조회를 수행할 수 있는지 확인하세요. (다른 머신의 `%s`에는 도메인을 추가했지만 이 머신에는 추가하지 않았습니까?) 잘못된 포트를 지정했음을 나타낼 수도 있습니다.',
  'Resolved commit \'%s\' from rule \'%s\'.' => '규칙 \'%2$s\'(으)로부터 커밋 \'%s\'을(를) 해결했습니다.',
  'When landing multiple revisions at once, push and rebase after each merge completes instead of waiting until all merges are completed to push.' => '여러 판을 동시에 최종 반영할 때, 모든 병합이 완료되기까지 기다리는 대신, 각 병합이 완료되면 푸시 및 리베이스합니다.',
  'HEAD has been amended with \'Differential Revision:\', as specified by \'%s\' in your %s \'base\' configuration.' => '%2$s \'base\' 구성에서 \'%s\'(으)로 지정되었기에, HEAD가 \'Differential Revision:\'으로 어멘드 되었습니다.',
  'Untracked changes in working copy:' => '작업 사본 내의 추적되지 않은 변경 사항:',
  'Hardpoint generator (for query "%s") yielded an unexpected value (of type "%s").' => '하드포인트 생성기(쿼리 "%s")에서 예상치 못한 값(유형 "%s")이 반환되었습니다.',
  'The "execute()" method of "PhutilExecPassthru" is deprecated and calls should be replaced with "resolve()". See T13660.' => '"PhutilExecPassthru"의 "execute()" 메서드는 구식이며, 이 호출은 "resolve()"로 대체해야 합니다. T13660을 참조하세요.',
  'List of prompt responses.' => '프롬프트 명령 응답 목록입니다.',
  'Then paste the API Token on that page below.' => '그런 다음 API 토큰을 그 페이지 아래에 붙여넣으세요.',
  'Peforce remote "%s" was selected because the existence of this remote implies this working copy was synchronized from a Perforce repository.' => 'Perforce 원격 "%s"이 선택된 이유는 이 원격의 존재가 이 작업 사본이 Perforce 저장소에서 동기화되었음을 의미하기 때문입니다.',
  'Failed to push lfs changes to staging area. Correct the issue, or use --skip-staging to skip this step.' => '스테이징 영역으로 lfs 변경 사항을 푸시하는 데 실패했습니다. 문제를 해결하거나 --skip-staging을 사용해서 이 단계를 건너뛰세요.',
  'RULES' => '규칙',
  'Installed shell completion support for "%s" to "%s".' => '"%s"에 대한 셸 자동 완성 기능이 "%s"에 설치되었습니다.',
  'There was an error verifying the SSL Certificate Authority while negotiating the SSL connection. This usually indicates that you are using a self-signed certificate but have not added your CA to the CA bundle. See instructions in "%s".' => 'SSL 연결을 협상하는 동안 SSL 인증 기관(CA)을 확인하는 데 오류가 발생했습니다. 이는 일반적으로 자체 서명된 인증서를 사용하고 있지만 CA 번들에 CA를 추가하지 않았음을 나타냅니다. "%s"의 지침을 참조하세요.',
  'LINT ERRORS' => '린트 오류',
  'Put closing braces on the same line as control statements and declarations, with a single space after them.' => '닫는 중괄호는 제어문과 선언문과 같은 줄에 쓰고, 닫는 중괄호 뒤에 한 칸을 띄우세요.',
  'Base revisions of changed paths are mismatched. Update all paths to the same base revision before creating a diff: 

%s' => '변경된 경로의 기본 판이 일치하지 않습니다. 차이를 생성하기 전에 모든 경로를 동일한 기본 판으로 업데이트하세요:

%s',
  'Unexpected `%s` value in property hook setter.' => '속성 훅 setter에 예상치 못한 값 `%s`.',
  'You can not add new actions to an exiting agent.' => '기존 에이전트에 새 작업을 추가할 수 없습니다.',
  'To install shell completion support for "%s", a new "%s" file will be created with this content:' => '"%s"에 대한 셸 자동 완성 기능을 설치하기 위해, 새 "%s" 파일이 이 내용으로 생성됩니다:',
  'The diff or revision you specified is either invalid or you don\'t have permission to view it.' => '지정한 차이 또는 판은 유효하지 않거나 볼 권한이 없습니다.',
  'Install `%s` from <%s>.' => '<%2$s>에서 `%s`을(를) 설치합니다.',
  'Configuration source ("%s") has no value for key ("%s").' => '구성 소스("%s")에 키("%s")에 대한 값이 없습니다.',
  'Create %s new branche(s) in the remote?' => '원격에 새 브랜치 %s개를 생성합니까?',
  'You can not execute an HTTP future with both a raw request body and structured request data.' => '원본 요청 본문과 구조화된 요청 데이터를 모두 포함하여 HTTP 퓨처를 실행할 수 없습니다.',
  'Writing %s...' => '%s 쓰는 중...',
  'Use `%s` instead of `%s` to indicate public visibility.' => '공개 표시를 나타내려면 `%2$s` 대신 `%s`을(를) 사용하세요.',
  'Returning to original branch "%s" in original state.' => '원래 상태의 원래 브랜치 "%s"(으)로 돌아갑니다.',
  'Landing onto target "%s", the default target under Mercurial.' => 'Mercurial의 기본 대상인 대상 "%s"에 최종 반영합니다.',
  'You are installing a standard API token, but a CLI API token was expected. If you\'re writing a script, consider passing the token at runtime with --conduit-token instead of installing it.' => '현재 표준 API 토큰을 설치하고 있지만, CLI API 토큰이 예상되었습니다. 스크립트를 작성하는 경우, 토큰을 설치하는 대신 `--conduit-token` 옵션을 사용하여 런타임에 토큰을 전달하는 것을 고려해 보세요.',
  'Controls the number of symbol mapper subprocesses run at once. Defaults to 8.' => '동시에 실행할 수 있는 심볼 매퍼 하위 프로세스의 개수를 제어합니다. 기본값은 8입니다.',
  'Unable to connect socket! Error #%d: %s' => '소켓에 연결할 수 없습니다! 오류 #%d: %s',
  'Failed to set socket nonblocking!' => '소켓을 nonblocking으로 설정하는데 실패했습니다!',
  'Will merge into target "%s" by default, because this is the first "onto" target.' => '이것이 첫 번째 "onto" 대상이므로 기본적으로 대상 "%s"에 병합됩니다.',
  'USAGE EXCEPTION' => '사용법 예외 발생',
  'Unable to locate %s. Configure it with the \'%s\' option in %s.' => '%s을(를) 찾을 수 없습니다. %3$s에서 \'%s\' 옵션을 사용하여 구성하세요.',
  'Always disable coverage information.' => '항상 커버리지 정보를 비활성화합니다.',
  'Generated Code' => '생성된 코드',
  'Specify exactly one working copy!' => '정확히 하나의 작업 사본만 지정하세요!',
  'Unable to load hardpoint "%s" for object (of type "%s"). All hardpoint query tasks resolved but none attached a value to the hardpoint.' => '객체(유형 "%2$s")의 하드포인트 "%s"을(를) 로드할 수 없습니다. 모든 하드포인트 쿼리 작업이 해결되었지만 어떤 작업도 하드포인트에 값을 부착하지 않았습니다.',
  'Multiple supported shells were detected. Unable to determine which shell to install autocompletion rules for. Use "--shell" to select a shell.' => '지원되는 셸이 여러 개 감지되었습니다. 자동 완성 규칙을 설치할 셸을 결정할 수 없습니다. 셸을 선택하려면 "--shell" 옵션을 사용하세요.',
  '(The Empty Void)' => '(텅 빈 공허)',
  'Revision %s, %s' => '판 %s, %s',
  'Assertion failed, expected values to be equal (at %s:%d): %s' => '단언문이 실패했습니다, 값이 같을 것으로 예상되었습니다 (%s:%d에서): %s',
  'Trailing Whitespace at EOF' => 'EOF 끝에 붙은 공백',
  'You don\'t own revision %s: "%s". Normally, you should only update revisions you own. You can "Commandeer" this revision from the web interface if you want to become the owner.

Update this revision anyway?' => '판 %s을(를) 소유하고 있지 않습니다: "%s". 일반적으로, 자신이 소유한 판만 업데이트해야 합니다. 소유자가 되고 싶은 경우에는 웹 인터페이스에서 이 판에 대해 "소유권 가져오기"를 할 수 있습니다.

그래도 판을 업데이트 합니까?',
  'Arguments "--into" and "--into-empty" are mutually exclusive.' => '인수 "--into"와 "--into-empty"는 같이 사용할 수 없습니다.',
  'Imported symbols should not be prefixed with `%s`.' => '가져온 심볼을 `%s`(으)로 시작해서는 안됩니다.',
  'When creating a revision, add reviewers.' => '판을 만들 때 검토자를 추가합니다.',
  'Trailing Whitespace' => '끝에 붙은 공백',
  'Expected \'\\ No newline at end of file\'.' => '\'\\ No newline at end of file\'을 예상했습니다.',
  'Interface symbol "%s" should be written as "%s".' => '인터페이스 심볼 "%s"은(는) "%s"(으)로 작성되어야 합니다.',
  'Preparing merge into local target "%s", at commit "%s".' => '로컬 대상 "%s"(으)로의 병합을 준비합니다 (커밋 "%s"에서).',
  'Call to %s(%s, ...) failed.' => '%s(%s, ...) 호출이 실패했습니다.',
  'Unnecessary Double Quotes' => '불필요한 큰따옴표',
  'Some rules can never be reached from any production: %s' => '어떤 프로덕션에서도 도달할 수 없는 규칙이 있습니다: %s',
  'Can not draw a grid with no columns!' => '열이 없는 경우에는 그리드를 그릴 수 없습니다!',
  '%s suppresses unassigned' => '%s은(는) 할당되지 않음을 억제합니다.',
  'French (France)' => '프랑스어 (프랑스)',
  'Unable to write log "%s" to path "%s" because the path is not writable.' => '경로가 쓰기 가능이 아니기 때문에 로그 "%s"을(를) 경로 "%s"에 쓸 수 없습니다.',
  'Included changes:' => '포함된 변경 사항',
  'Command failed with error #%s!' => '명령이 오류 #%s(으)로 실패했습니다!',
  'The default response to this prompt is "%s".' => '이 프롬프트에 대한 기본 응답은 "%s"입니다.',
  'Received error from Slack: %s' => 'Slack에서 오류 수신함: %s',
  'Use faster but less readable serialization for "--show".' => '"--show"에 대한 더 빠르지만 가독성이 떨어지는 직렬화를 사용합니다.',
  'Failed to read file!' => '파일 읽기를 실패했습니다!',
  'Branch "%s" does not exist in the local working copy.' => '브랜치 "%s"은(는) 로컬 작업 사본에 존재하지 않습니다.',
  'Refs were selected with the "--onto" flag: %s.' => 'Ref가 "--onto" 플래그로 선택되었습니다: %s.',
  'Use `%s` instead of `%s`.' => '`%2$s` 대신 `%s`을(를) 사용하세요.',
  'Unable to locate %s coverage runner (have you built yet?)' => '%s 검사 실행기를 찾을 수 없음 (아직 빌드하지 않았습니까?)',
  'PROMPT' => '프롬프트',
  'This configuration option ("%s") does not support runtime definition with "--config".' => '이 구성 옵션("%s")은 "--config"를 사용한 런타임 정의를 지원하지 않습니다.',
  'You have a saved revision message in \'%s\'.
%sYou can use this message, or discard it.' => '\'%s\'에 저장된 판 메시지가 있습니다.
%s이 메시지를 사용하거나 버릴 수 있습니다.',
  'Hardpoint ("%s") already has attached data.' => '하드포인트("%s")에 이미 데이터가 부착되어 있습니다.',
  'Array Element' => '배열 요소',
  'Selected "onto" ref "%s" is invalid: the empty string is not a valid ref.' => '선택한 "onto" ref "%s"이(가) 유효하지 않습니다: 빈 문자열은 유효한 ref가 아닙니다.',
  'Use of `%s` in Static Context' => '정적 컨텍스트에서의 `%s`의 사용',
  'Instead of exporting changes from the working copy, export them from a Differential diff.' => '변경 사항을 작업 사본에서 내보내는 대신, Differential 차이에서 내보냅니다.',
  'Show detailed information about options.' => '옵션에 대한 자세한 정보를 표시합니다.',
  'Push failed! Fix the error and run "arc land" again.' => '푸시에 실패했습니다! 오류를 수정하고 "arc land"를 다시 실행하세요.',
  '%s argument to %s must not be empty' => '%2$s에 대한 %s 인수는 비어있을 수 없습니다.',
  '%s %s -> %s %s %s' => '%s %s -> %s %s %s',
  'Expected %s for %%P conversion.' => '%%P 변환에 대해 %s을(를) 예상했습니다.',
  'Provide the details for a new revision, then save and exit.' => '새로운 판의 세부 정보를 제공하고, 저장한 후 종료하세요.',
  'Common causes are:

  - Your copy of %s is out of date.
    This is the most common cause.
    Update this copy of %s:

      %s

  - Some other library is out of date.
    Update the library this symbol appears in.

  - The symbol is misspelled.
    Spell the symbol name correctly.

  - You added the symbol recently, but have not updated
    the symbol map for the library.
    Run "arc liberate" in the library where the symbol is
    defined.

  - This symbol is defined in an external library.
    Use "@phutil-external-symbol" to annotate it.
    Use "grep" to find examples of usage.' => '일반적인 원인은 다음과 같습니다:

  - %s 복사본이 오래되었습니다.
    이것이 가장 흔한 원인입니다.
    %s의 사본을 업데이트하세요.

      %s

  - 다른 라이브러리가 오래되었습니다.
    이 심볼이 나타나는 라이브러리를 업데이트하세요.

  - 심볼의 철자가 틀렸습니다.
    심볼 이름의 철자를 올바르게 입력하세요.

  - 최근에 심볼을 추가했지만 라이브러리의 심볼 맵을
    업데이트하지 않았습니다.
    심볼이 정의된 라이브러리에서 "arc liberate"를
    실행하세요.

  - 이 심볼은 외부 라이브러리에 정의되어 있습니다.
    "@phutil-external-symbol"을 사용하여 주석을
    추가하세요.
    사용 예시는 "grep"으로 찾으세요.',
  'Possible spelling error. You wrote \'%s\', but did you mean \'%s\'?' => '가능한 철자 오류입니다. \'%s\'이(가) 아닌 \'%s\'을(를) 찾으셨나요?',
  'See <%s>. The default merge strategy under Git with "history.immutable" has changed from "merge" to "squash". Your configuration is ambiguous under this behavioral change. (Use "--strategy" or configure "arc.land.strategy" to bypass this check.)' => '<%s>을(를) 참조하세요. Git에서 "history.immutable"을 사용할 때 기본 병합 방식이 "merge"에서 "squash"로 변경되었습니다. 이러한 동작 변경으로 인해 구성이 모호해질 수 있습니다. (이 검사를 건너뛰려면 "--strategy"를 사용하거나 "arc.land.strategy"를 구성하세요.)',
  'Unknown diff type.' => 'diff 유형을 알 수 없습니다.',
  '"arc amend" is only supported under Mercurial 2.2 or newer. Older versions of Mercurial do not support the "--amend" flag to "hg commit ...", which this workflow requires.' => '"arc amend"는 Mercurial 2.2 이상 버전에서만 지원됩니다. 이전 버전의 Mercurial에서는 이 워크플로에 필요한 "hg commit ..." 명령의 "--amend" 플래그를 지원하지 않습니다.',
  'Since exactly one revision in Differential matches this working copy, it will be **updated** if you run \'%s\'.' => '정확히 하나의 Differential의 판만이 이 작업 사본과 일치하므로 \'%s\'을(를) 실행하면 **업데이트**됩니다.',
  'Assertion failed, expected \'%s\' (at %s:%d).' => '단언문이 실패했습니다, \'%s\'이(가) 예상되었습니다 (%s:%d에서).',
  'Merge strategy "%s" specified with "--strategy" is unknown. Supported merge strategies are: %s.' => '"--strategy"로 지정된 병합 방식 "%s"을(를) 알 수 없습니다. 지원되는 병합 방식: %s.',
  'Expected exactly one change.' => '정확히 하나의 변경 사항만 예상했습니다.',
  'Local branch "%s" has unpublished changes, checking it out but leaving them in place.' => '로컬 브랜치 "%s"에 게시되지 않은 변경 사항이 있습니다. 체크아웃하지만 그대로 둡니다.',
  'This version control system does not support commit ranges.' => '이 버전 관리 시스템은 커밋 범위를 지원하지 않습니다.',
  'Unexpected operator in static expression.' => '정적 표현식에서의 예상치 못한 연산자입니다.',
  'Class Not `%s` Or `%s`' => '클래스가 `%s` 또는 `%s`이(가) 아님',
  'Confirms history mutation in a working copy marked as immutable.' => '불변으로 표시된 작업 사본에서의 역사 변경을 확인합니다.',
  'Second hash argument must be a string.' => '두 번째 해시값 인수는 문자열이어야 합니다.',
  'it is the merge-base of the upstream of the current branch and HEAD, and matched the rule \'%s\' in your %s \'base\' configuration.' => '이는 현재 브랜치의 업스트림과 HEAD의 병합 기준이며, %2$s \'base\' 구성의 규칙 \'%s\'와(과) 일치하는 것입니다.',
  'Unable to get checksum.' => '체크섬을 얻을 수 없습니다.',
  'LOAD' => '로드',
  'Open this page in your browser and log in if necessary:' => '이 페이지를 브라우저에서 열고 필요한 경우 로그인하세요:',
  'Can\'t resolve a PHAR path relative to another PHAR path. Trying to resolve path `%s` relative to `%s` .' => '다른 PHAR 경로를 기준으로 PHAR 경로를 해결할 수 없습니다. `%2$s` 경로를 기준으로 `%s` 경로를 해결하려고 시도합니다.',
  'Attempting to reduce and rebase changes.' => '변경 사항을 줄이고 리베이스하려고 시도합니다.',
  'A definition of "%s %s" in "%s" will be ignored.' => '"%3$s"에 있는 "%s %s"의 정의는 무시됩니다.',
  'TODO: You are forcing a revision, but commits are associated with some other revision. Are you REALLY sure you want to land ALL these commits with a different unrelated revision???' => 'TODO: 현재 판을 강제로 병합하려고 하는데, 해당 커밋들이 다른 판과 연결되어 있습니다. 정말로 이 모든 커밋들을 서로 관련 없는 다른 판에 병합하고 싶으신 건가요???',
  'Unexpected return value from call to "%s": %s.' => '"%s" 호출에서 예상치 못한 반환 값: %s.',
  'Specify one of \'%s\', \'%s\' or \'%s\' to choose an export format.' => '내보내기 형식을 선택하기 위해 \'%s\', \'%s\' 또는 \'%s\'(을)를 지정하세요.',
  'Export change as an arc bundle. This format can represent all changes. These bundles can be applied with \'%s\'.' => '변경 사항을 arc 번들로 내보냅니다. 이 형식은 모든 변경 사항을 나타낼 수 있습니다. 이러한 번들은 \'%s\'(으)로 적용될 수 있습니다.',
  'Unknown object type "%s", supported types are: %s.' => '알 수 없는 객체 유형 "%s"입니다. 지원되는 유형: %s.',
  'When linting git repositories, amend HEAD with all patches suggested by lint without prompting.' => 'Git 저장소를 린트 검사할 때, 린트가 제안하는 모든 패치를 확인 요청 없이 HEAD에 어멘드합니다.',
  'Expected a hunk header, like \'%s\' (svn), \'%s\' (svn properties), \'%s\' (git show), \'%s\' (git diff), \'%s\' (unified diff), or \'%s\' (hg diff or patch).' => '\'%s\'(svn), \'%s\'(svn 속성), \'%s\'(git show), \'%s\'(git 차이), \'%s\'(unified 차이), 또는 \'%s\'(hg 차이 또는 패치) 같은 hunk 헤더를 예상했습니다.',
  'Run every test associated with a tracked file in the working copy.' => '작업 사본의 추적된 파일과 연결된 모든 테스트를 실행합니다.',
  'To push changes manually, run these %s command(s):' => array(
    '변경 사항을 수동으로 푸시하려면 다음 명령을 실행하세요:',
    '변경 사항을 수동으로 푸시하려면 다음 명령들을 실행하세요:',
  ),
  'Preparing merge into the empty state to create target "%s" in remote "%s".' => '원격 "%2$s"에 대상 "%s"을(를) 만들기 위해 빈 상태로의 병합을 준비합니다.',
  'To do this, run: **%s**' => '이것을 수행하려면 다음을 실행하십시오: **%s**',
  '`%s` methods cannot be marked as `%s`. This construct will cause a fatal error.' => '`%s` 메서드는 `%s`(으)로 표시될 수 없습니다. 이러한 구조는 치명적인 오류를 발생시킵니다.',
  'Lint issued unresolved warnings.' => '린트가 해결되지 않은 경고를 알렸습니다.',
  'The test failed in an abnormal or severe way. For example, the harness crashed instead of reporting a failure.' => '테스트가 비정상적이거나 심각한 방식으로 실패했습니다. 예를 들어, 테스트 하네스가 실패를 보고하는 대신 크래시했습니다.',
  'Dec' => '12월',
  'Resolve these errors:' => '이 오류들을 해결:',
  'Channel closed while waiting for message!' => '메시지를 기다리는 동안 채널이 닫혔습니다!',
  'Nullsafe operators are not available before PHP 8.0.' => 'Nullsafe 연산자는 PHP 8.0 이전 버전에서는 사용할 수 없습니다.',
  'Unable to push changes to the staging area.' => '변경 사항을 스테이징 영역으로 푸시할 수 없습니다.',
  'SHELVE' => '셸빙',
  'Script and Regex' => '스크립트와 정규 표현식',
  'To install shell completion support for "%s", this line will be added to your existing "%s" file:' => '"%s"에 대한 셸 자동 완성 기능을 설치하기 위해, 이 줄이 기존 "%s" 파일에 추가됩니다:',
  'Instead of creating or updating a revision, only create a diff, which you may later attach to a revision.' => '판을 생성하거나 업데이트하는 대신 차이만 생성합니다. 나중에 이를 판에 부착할 수 있습니다.',
  'Follow naming conventions: methods should be named using `%s`.' => '명명 규칙을 따르세요: 메서드 이름에는 `%s`을(를) 사용해야 합니다',
  'These branches were selected:' => '이 브랜치들이 선택되었습니다:',
  'You must provide a commit message.' => '커밋 메시지를 지정해야 합니다.',
  'What do you want to name this library?' => '이 라이브러리에 사용할 이름은 무엇입니까?',
  'Preparing to upgrade "%s"...' => '"%s" 업그레이드 준비 중...',
  'No changes found. (Did you specify the wrong commit range?)' => '변경사항이 없습니다. (잘못된 커밋 범위를 지정하셨습니까?)',
  'Request specifies two values for key "%s", but parameter names must be unique if you are posting file data due to limitations with cURL.' => '요청에서 키 "%s"에 대해 두 개의 값을 지정했지만, cURL의 제한 사항으로 인해, 파일 데이터를 게시하는 경우 매개변수의 이름은 고유해야 합니다.',
  'DETECT' => '탐지',
  'rebuild the symbol-information.json file' => 'symbol-information.json 파일 재빌드',
  'Build Plan %d' => '빌드 계획 %d',
  'No lint engine is configured for this project. Create an \'%s\' file, or configure an advanced engine with \'%s\' in \'%s\'.' => '이 프로젝트에 구성된 린트 엔진이 없습니다. \'%s\' 파일을 생성하거나 \'%3$s\'에서 \'%s\'(으)로 고급 엔진을 구성하세요.',
  'Unexpected output on agent stderr: %s.' => '에이전트 stderr에서의 예상치 못한 출력: %s.',
  'Attempting to make an HTTP request which includes file data, but the value of a query parameter begins with "%s". PHP interprets these values to mean that it should read arbitrary files off disk and transmit them to remote servers. Declining to make this request.' => '파일 데이터를 포함하는 HTTP 요청을 만들려고 하지만, 쿼리 매개변수 값이 "%s"(으)로 시작합니다. PHP는 이 값을 디스크의 임의 파일을 읽어 원격 서버로 전송하라는 의미로 해석합니다. 이 요청을 만들기를 거부합니다.',
  'CLEANUP' => '정리',
  'Failed to parse \'%s\' as JSON.' => '\'%s\'의 구문을 JSON으로 분석하는데 실패했습니다.',
  'This function is expected to have a format string.' => '이 함수는 형식 문자열을 가질 것으로 예상했습니다.',
  'First class callables are not available before PHP 8.1.' => '일급 콜러블은 PHP 8.1 이전 버전에서는 사용할 수 없습니다.',
  'Revision \'%s\' does not exist!' => '\'%s\' 판이 존재하지 않습니다!',
  'Run with %s for more details.' => '자세한 내용을 보려면 %s(으)로 실행하세요.',
  'UNRELATED REVISION' => '관련 없는 판',
  'LibXML Error' => 'LibXML 오류',
  '`%s` Method Cannot Contain Body' => '`%s` 메서드는 본문을 포함할 수 없음',
  'Unknown type \'%s\' in type matrix.' => '유형 매트릭스 안의 알 수 없는 유형 \'%s\'.',
  'OPEN REVISION' => '열린 판',
  'Remote "%s" was selected by following tracking branches upstream to the closest remote.' => '추적 브랜치를 업스트림으로 따라가 가장 가까운 원격을 찾음으로써 원격 "%s"이(가) 선택되었습니다.',
  'Prompt ("%s") has no query text!' => '프롬프트 ("%s")에 쿼리 텍스트가 없습니다!',
  'Methods should have one preceding blank line.' => '메서드 앞에는 빈 줄이 하나 있어야 합니다.',
  'These commits will be included in the diff:' => '다음 커밋들이 차이에 포함됩니다:',
  '%s REVISION(S) ARE NOT ACCEPTED' => '%s개 판이 승인되지 않음',
  'HOLD CHANGES' => '변경 사항 보류',
  'Expected unit for meminfo key "%s" in meminfo source "%s" to be "kB", found "%s".' => 'meminfo 소스 "%2$s"의 meminfo 키 "%s"에 대한 예상 단위는 "kB"이지만 "%3$s"이(가) 발견되었습니다.',
  'The cURL library raised an error while making a request. You may be able to find more information about this error (error code: %d) on the cURL site: %s' => 'cURL 라이브러리를 사용하여 요청을 보내는 동안 오류가 발생했습니다. 이 오류(오류 코드: %d)에 대한 자세한 정보는 다음 cURL 웹사이트에서 확인할 수 있습니다: %s.',
  'Unable to upload file: failed to read %d bytes after offset %d from file at path "%s".' => '파일을 업로드할 수 없습니다: 경로 "%3$s"의 파일에서 오프셋 %2$d 이후 %d바이트를 읽는 데 실패했습니다.',
  'Duplicate Case Statements' => 'Case문 중복',
  'P4 MODE' => 'P4 모드',
  'This variable was used already as a by-reference iterator variable. Such variables survive outside the `%s` loop, do not reuse.' => '이 변수는 이미 참조 반복자 변수로 사용되었습니다. 이러한 변수는 `%s` 루프 밖에서도 유지되므로 재사용하지 마세요.',
  'Install completion support for a particular shell.' => '특정 셸에 대한 자동 완성 기능을 설치합니다.',
  'Expected a regular expression, but \'%s\' is not valid: %s' => '정규 표현식을 예상했지만 \'%s\'은(는) 유효하지 않습니다: %s',
  'Expected a natural list!' => '순수 리스트를 예상했습니다!',
  'Options \'%s\' and \'%s\' are not compatible. Choose exactly one change source.' => '옵션 \'%s\' 및 \'%s\'은(는) 호환되지 않습니다. 변경 소스를 정확히 하나만 선택하세요.',
  'German (Germany)' => '독일어 (독일)',
  'A list of paths to phutil libraries that should be loaded at startup. This can be used to make classes available, like lint or unit test engines.' => '시작 시 로드해야 하는 phutil 라이브러리의 경로 목록입니다. 이를 사용하여 린트 또는 단위 테스트 엔진과 같은 클래스를 사용할 수 있도록 할 수 있습니다.',
  'Revision %s does not exist.' => '%s 판이 존재하지 않습니다.',
  'Unable to write log "%s" to path "%s". The containing directory ("%s") does not exist or is not readable, and could not be created.' => '로그 파일 "%s"을(를) 경로 "%s"에 쓸 수 없습니다. 해당 디렉터리("%s")가 존재하지 않거나 읽을 수 없으며, 생성할 수 없습니다.',
  'INFO' => '정보',
  'You are using "--hold", so execution will stop before the %s branche(s) are actually created. You will be given instructions to create the branches.' => '"--hold" 옵션을 사용하고 있으므로 브랜치가 실제로 생성되기 전에 실행이 중단됩니다. 브랜치를 생성하는 방법에 대한 지침이 제공될 것입니다.',
  'Trying to create a %s without a working copy!' => '작업 사본 없이 %s을(를) 만들려고 했습니다!',
  'Defining constant arrays was not introduced until PHP 5.6, but this codebase targets an earlier version of PHP.' => '상수 배열 정의 기능은 PHP 5.6부터 도입되었지만, 이 코드베이스는 이전 버전의 PHP를 대상으로 합니다.',
  'PREPARING' => '준비 중',
  'Korean (Republic of Korea)' => '한국어 (대한민국)',
  'Stifles developer creativity by requiring files have uninspired names containing only letters, numbers, period, hyphen and underscore.' => '파일 이름이 문자, 숫자, 마침표, 하이픈, 밑줄만 포함하는 단조로운 이름이어야 한다고 요구하여 개발자의 창의성을 억누릅니다.',
  'Use `%s` instead of `%s`. The former is a language construct whereas the latter is a function call, which has additional overhead.' => '`%2$s` 대신 `%s`을(를) 사용하세요. 전자는 언어 구조이고 후자는 함수 호출이므로 추가 오버헤드가 있습니다.',
  'Attempt to convert non UTF-8 patch into specified encoding.' => 'UTF-8이 아닌 패치를 지정된 인코딩으로 변환하려고 시도합니다.',
  'Mercurial does not support %s yet.' => '머큐리얼은 %s을(를) 아직 지원하지 않습니다.',
  'Amend working copy using revision owned by %s?' => '%s님이 소유한 판을 사용하여 작업 사본을 어멘드합니까?',
  'Callback must be callable.' => '콜백은 callable 이어야 합니다.',
  'Trailing commas in group-use statements are not available before PHP 7.2.' => '그룹-사용문에서의 쉼표 나열은 PHP 7.2 이전 버전에서는 사용할 수 없습니다.',
  'Converted a \'%s\' hunk from \'%s\' to UTF-8.
' => '\'%s\' hunk를 \'%s\'에서 UTF-8로 변환했습니다.',
  'moves' => '이동',
  'INTO REMOTE' => '"into" 원격',
  'Unknown conversion %s.' => '알 수 없는 변환 %s.',
  'Unable to write to stdin!' => 'stdin에 쓸 수 없습니다!',
  'Uncommitted changes in working copy:' => '작업 사본 내의 커밋되지 않은 변경 사항:',
  'Merge Conflicts' => '병합 충돌',
  'Symbol "%s" does not identify a bookmark, branch, or commit.' => '심볼 "%s"은(는) 책갈피, 브랜치, 또는 커밋을 식별하지 않습니다.',
  '<none>' => '<none>',
  'The flags "--generate" and "--shell" are mutually exclusive. The "--shell" flag selects which shell to install support for, but the "--generate" suppresses installation.' => '"--generate" 플래그와 "--shell" 플래그는 같이 사용할 수 없습니다. "--shell" 플래그는 지원을 설치할 셸을 선택하지만, "--generate" 플래그는 설치를 억제합니다.',
  'Builtin Defaults' => '내장 기본값',
  'Paste API Token from that page:' => '그 페이지로부터 API 토큰을 붙여 넣으세요:',
  'User Config File' => '사용자 구성 파일',
  'it is the merge-base of \'%s\' (the Git upstream of the current branch) HEAD.' => '이는 \'%s\'(현재 브랜치의 Git 업스트림)와(과) HEAD의 병합 기준입니다.',
  'Call to "assertCaught(<junk>, ...)" for test case "%s" passed bad expected value. Expected bool, class name as a string, or a list of class names. Got: %s.' => '테스트 케이스 "%s"에 대한 "assertCaught(<junk>, ...)" 호출이 잘못된 예상 값을 전달했습니다. 부울, 문자열로 된 클래스 이름 또는 문자열 이름 목록이 예상되었지만, 다음을 받았습니다: %s',
  'Do not prettify JSON output.' => 'JSON 출력을 보기 좋게 정리하지 않습니다.',
  'Print symbol information to stdout instead of writing it to the symbol-information.json file.' => '심볼 정보를 symbol-information.json 파일에 쓰는 대신 stdout에 출력합니다.',
  'The format of user symbol "%s" is unrecognized. Expected a username like "alice" or "@alice", or a user PHID, or a user ID, or a special function like "viewer()".' => '사용자 심볼 "%s"의 형식을 인식할 수 없습니다. "alice" 또는 "@alice" 같은 사용자 이름, 사용자 PHID, 사용자 ID, 또는 "viewer()" 같은 특수 함수를 예상했습니다.',
  'Checks the permissions on files and ensures that they are not made to be executable unnecessarily. In particular, a file should not be executable unless it is either binary or contain a shebang.' => '파일 권한을 확인하고 불필요하게 실행 가능하게 설정되지 않았는지 확인합니다. 특히 파일은 바이너리이거나 셔뱅을 포함하지 않는 한 실행 가능하면 안 됩니다.',
  'Use XHPAST to enforce coding conventions on PHP source files.' => 'XHPAST를 사용하여 PHP 소스 파일에 코딩 규칙을 적용시킵니다.',
  'Set conduit credentials with %s before authenticating conduit!' => 'conduit을 인증하기 전에 conduit 자격 인증을 %s(으)로 설정하세요!',
  'There are no commits to land.' => '최종 반영할 커밋이 없습니다.',
  '`%s` Reassignment' => '`%s` 재할당',
  'Failed to connect to server (%s): %s' => '서버(%s) 연결을 실패했습니다: %s',
  'These %s symbol(s) do not exist in the remote. They will be created as new bookmarks:' => array(
    '이 심볼은 원격에 존재하지 않습니다. 새 책갈피로 생성됩니다:',
    '이 심볼들은 원격에 존재하지 않습니다. 새 책갈피들로 생성됩니다:',
  ),
  'You must %s!' => '%s해야 합니다!',
  'When creating a new branch or bookmark, use this as the branch point.' => '새로운 브랜치나 책갈피를 만들 때, 이것을 분기점으로 사용합니다.',
  'CHOOSE' => '선택',
  'Expected: %s
  Actual: %s' => '예측된 값: %s
  실제 값: %s',
  'Brace Placement' => '중괄호 배치',
  'Accept/reduce conflict!' => 'Accept/reduce 충돌!',
  'Specify a URI explicitly with `--config phabricator.uri=<uri>`.' => '`--config phabricator.uri=<uri>`로 URI을 명시적으로 지정하세요.',
  'You can not reference `%s` inside a static method.' => '정적 메서드 안에서 `%s`을(를) 참조할 수 없습니다.',
  'Buildable Symbol "%s"' => '빌드가능 심볼 "%s"',
  'Passing any other value than `%s` to the third parameter of `%s` is no longer supported in PHP 8.0.' => '`%s` 이외의 다른 값을 `%s`의 세 번째 매개변수에 전달하는 것은 더 이상 PHP 8.0에서 지원되지 않습니다.',
  'Merge target is ambiguous.' => '병합 대상이 모호합니다.',
  'Local ref "%s" does not exist.' => '로컬 ref "%s"이(가) 존재하지 않습니다.',
  '%s us' => '%s us',
  'Unary postfix operators should not be prefixed by whitespace.' => '단항 후위 연산자는 공백으로 시작해서는 안됩니다.',
  'Night has fallen, but your surroundings are illuminated by the silvery glow of a full moon overhead. The night is cool and the air is crisp. The trees are calm.' => '밤이 찾아왔지만, 오버헤드로 뜬 보름달의 은은한 빛이 주변을 환하게 비춥니다. 밤공기는 시원하고 공기는 상쾌합니다. 나무들은 고요합니다.',
  'Enable strict math, which only processes mathematical expressions inside extraneous parentheses.' => 'strict math를 활성화합니다. 이 모드에서는 굳이 덧붙인 괄호 안의 수식만 처리합니다.',
  'UNCOMMITTED CHANGES' => '커밋되지 않은 변경 사항',
  'Your stored credentials for the server you are trying to connect to ("%s") are not valid.' => '연결하려는 서버("%s")에 저장한 자격 증명이 유효하지 않습니다.',
  'Expected a string for "method" context, got "%s".' => '"method" 컨텍스트에 대해 문자열을 예상했지만 "%s"을(를) 받았습니다.',
  'Build Plan Symbol "%s"' => '빌드 계획 심볼 "%s"',
  'Spellchecker' => '맞춤법 검사기',
  'Object (of class "%s") did not return a string from "__toString()".' => '객체(클래스 "%s")가 "__toString()"에서 문자열을 반환하지 않았습니다.',
  'Default list of "onto" refs for "arc land".' => '"arc land"에 대한 "onto" ref의 기본 목록입니다.',
  'The `%s` function should be avoided. It is potentially unsafe and makes debugging more difficult.' => '`%s` 함수는 피해야 합니다. 잠재적으로 안전하지 않으며 디버깅을 더 어렵게 만듭니다.',
  'MERGE STRATEGY IS AMBIGUOUS' => '병합 방식이 모호함',
  'Invalid severity code \'%s\', should begin with \'%s.\'.' => '유효하지 않은 심각도 코드 \'%s\'입니다, \'%s.\'(으)로 시작해야 합니다.',
  'No such project: "%s"' => '해당 프로젝트가 없습니다: "%s"',
  'English (Great Britain)' => '영어 (영국)',
  'Custom configuration file.' => '사용자 지정 구성 파일입니다.',
  'Received error from WordPress.com: %s' => 'WordPress.com에서 오류 수신함: %s',
  'PUSHING' => '푸시 중',
  'The format of symbol "%s" is unrecognized. Expected a monogram like "X123", or an ID like "123", or a PHID.' => '심볼 "%s"의 형식을 인식할 수 없습니다. "X123" 같은 모노그램, "123" 같은 ID, 또는 PHID를 예상했습니다.',
  'Readonly properties are not available before PHP 8.1.' => '읽기 전용 속성은 PHP 8.1 이전 버전에서는 사용할 수 없습니다.',
  'Linter "%s" generated a lint message that is invalid because it does not have a name. Lint messages must have a name.' => '린터 "%s"이(가) 이름이 없어서 유효하지 않은 린트 메시지를 생성했습니다. 린트 메시지에 이름은 필수입니다.',
  'Pass in a custom %s file path.' => '사용자 지정 %s 파일 경로를 전달합니다.',
  'The `%s` type hint is not available before PHP 7.1.' => '`%s` 유형 힌트는 PHP 7.1 이전 버전에서는 사용할 수 없습니다.',
  'In order to keep StyleCop integration with IDEs and other tools consistent with lint results, you aren\'t permitted to disable StyleCop rules within \'%s\'. Instead configure the severity using the StyleCop settings dialog (usually accessible from within your IDE). StyleCop settings for your project will be used when linting.' => 'StyleCop과 IDE 및 기타 도구의 통합을 린트 결과와 일관되게 유지하기 위해 \'%s\' 안에서 StyleCop 규칙을 비활성화할 수 없습니다. 대신 StyleCop 설정 대화상자(보통 IDE 안에서 접근 가능)를 사용해 심각도를 구성하세요. 프로젝트의 StyleCop 설정이 린트시 사용됩니다.',
  'Restoring local state (at "%s" on branch "%s").' => '로컬 상태를 복구합니다 (브랜치 "%2$s"의 "%s"에).',
  'Filename' => '파일 이름',
  'Default behavior is ambiguous.' => '기본 동작이 모호합니다.',
  'Patch Failed!' => '패치를 실패했습니다!',
  'Confirms that revisions with changes planned should land.' => '변경이 계획된 판이 최종 반영되어야 함을 확인합니다.',
  'Querying system processes is not currently supported on Windows.' => '시스템 프로세스를 검색하는 것은 현재 윈도우에서 지원되지 않습니다.',
  'Received unknown console message of type \'%s\'.' => '유형 \'%s\'의 알 수 없는 콘솔 메시지를 수신했습니다.',
  'Client %s' => '클라이언트 %s',
  'Across the grove, a stream flows north toward **published** commits.
' => '숲을 가로질러, 스트림이 북쪽의 **게시된** 커밋들을 향해 흘러갑니다.',
  'You can not use "--shell" when completing arguments.' => '인수를 자동 완성할 때는 "--shell"을 사용할 수 없습니다.',
  'Parameter provided to argument "--%s" must be an integer.' => '"--%s"에 제공된 매개변수는 정수이어야 합니다.',
  'Passing null to `%s` is no longer allowed in PHP 7.2.' => '`%s`에 null을 전달하는 것은 PHP 7.2에서 더이상 허용되지 않습니다.',
  'Filesystem path "%s" does not exist.' => 'Filesystem 경로 "%s"이(가) 존재하지 않습니다.',
  'Hardpoint (at index "%s") has no hardpoint key. Each hardpoint must have a key that is unique among hardpoints on the object.' => '하드포인트(인덱스 "%s")에 하드포인트 키가 없습니다. 각 하드포인트는 객체의 다른 하드포인트와 구별되는 고유한 키를 가져야 합니다.',
  'You are landing %s revision(s) which are currently in the state "%s", indicating that you expect to revise them before moving forward.' => array(
    '현재 상태가 "%2$s"인 판을 최종 반영하려고 합니다. 이는 계속 진행하기 전에 이 판을 수정할 것으로 예상됨을 나타냅니다.',
    '현재 상태가 "%2$s"인 판 %s개를 최종 반영하려고 합니다. 이는 계속 진행하기 전에 이 판들을 수정할 것으로 예상됨을 나타냅니다.',
  ),
  'Expected exactly one argument to "commit(...)" with a commit symbol.' => '"commit(...)"에 정확히 인수(커밋 심볼)가 하나 주어지는 것을 예상했습니다.',
  'Apply changes from a Differential revision, using the most recent diff that has been attached to it. You can run \'%s\' as a shorthand.' => 'Differential 판에서 가장 최근에 부착된 차이를 사용해 변경 사항을 적용합니다. \'%s\'을(를) 단축형으로 실행할 수 있습니다.',
  'The software version on the server is too old to support this workflow. Upgrade the software version on the server to a version released after October 2017.' => '서버의 소프트웨어 버전이 너무 오래되어 이 워크플로를 지원하지 않습니다. 서버의 소프트웨어를 2017년 10월 이후 릴리스된 버전으로 업그레이드하세요.',
  'Specify the pager command to use when displaying documentation.' => '설명문서를 표시할 때 사용할 페이저 명령을 지정하세요.',
  'Expected resource "%s" to be an instance of "%s"!' => '리소스 "%s"이(가) "%s"의 인스턴스이기를 예상했습니다!',
  'Invalid "Differential Revision" field in commit message. This field should have a revision identifier like "%s" or a server URI like "%s", but has "%s".' => '커밋 메시지의 "Differential Revision" 필드가 유효하지 않습니다. 이 필드는 "%s" 같은 판 식별자나 "%s" 같은 서버 URI를 가져야 하지만 "%s"이(가) 있습니다.',
  'Merging local "%s" into "%s" produces an empty diff. This usually means these changes have already landed.' => '로컬 "%s"을(를) "%s"에 병합하면 빈 차이가 생성됩니다. 이는 일반적으로 이러한 변경 사항이 이미 최종 반영되었다는 것을 뜻합니다.',
  'Checking out "%s".' => '"%s"을(를) 확인 중입니다.',
  'Parameter "timeout" to "Future->resolve()" is no longer supported. Update the caller so it no longer passes a timeout.' => '"Future->resolve()"의 매개변수 "timeout"은 더 이상 지원되지 않습니다. 호출자가 더 이상 timeout을 전달하지 않도록 업데이트하세요.',
  'Unknown Mercurial Extension: "%s".' => '알 수 없는 Mercurial 확장 기능 "%s".',
  'There is no **%s** workflow.' => '**%s** 워크플로가 없습니다.',
  'AWS Errors:' => 'AWS 오류:',
  'Failed to fread() from request input stream.' => '요청 입력 스트림으로부터 fread()를 실패했습니다.',
  'Limit the use of global variables. Global variables are generally a bad idea and should be avoided when possible.' => '전역 변수 사용을 제한하세요. 전역 변수는 일반적으로 좋지 않은 생각이며 가능한 한 피해야 합니다.',
  'Unrecognized lint message code "%s". Expected a valid cpplint lint code like "%s" or "%s".' => '"%s" 린트 메시지 코드를 인식할 수 없습니다. 예상되는 유효한 cpplint 린트 코드는 "%s" 또는 "%s" 등입니다.',
  'Protocol channel expected %s-character, zero-padded numeric frame length, got something else ("%s"). Full buffer (of length %s) begins: %s' => '프로토콜 채널은 0으로 채워진 %s자리 숫자 프레임 길이를 예상했지만, 다른 값("%s")을 받았습니다. (길이가 %s인) 전체 버퍼는 다음으로 시작합니다: %s',
  'Failed to read file \'%s\'.' => '\'%s\' 파일 읽기를 실패했습니다.',
  'FETCH' => '가져오기',
  'Create or update a library.' => '라이브러리를 만들거나 업데이트합니다.',
  'SYNOPSIS' => '시놉시스',
  'Arcventure' => 'Arc드벤쳐',
  'Parameter ("%s") passed to "%s" when constructing a lint message must be a scalar with a maximum string length of %s bytes, but is %s bytes in length.' => '린트 메시지를 구성할 때 "%2$s"에 전달된 매개변수("%s")의 길이는 최대 %3$s바이트의 문자열의 스칼라이어야 하지만 길이가 %4$s바이트입니다.',
  'Revision "%s" is not in the state "Accepted", so it will be left open.' => '판 "%s"은(는) "승인됨" 상태가 아니므로 열린 상태로 남습니다.',
  'Expected hunk target \'%s\'.' => 'Hunk 대상 \'%s\'을(를) 예상했습니다.',
  'Closing parenthesis should be on a new line.' => '닫는 괄호는 새 줄에 있어야 합니다.',
  'IP address "%s" is not properly formatted: an address with omitted leading sements must begin with "::".' => 'IP 주소 "%s"의 형식이 올바르지 않습니다: 선행 문자가 생략된 주소는 "::"로 시작해야 합니다.',
  'Declaring a function named `%s` causes any call to %s to fail. This is because `%s` eval-declares the function `%s`, then modifies the symbol table so that the function is instead named `%s`, and returns that name.' => '`%s`이라는 이름의 함수를 선언하면 %s 호출이 실패합니다. 이는 `%s`이(가) 함수 `%s`을(를) eval로 선언한 뒤, 심볼 테이블을 수정해 함수 이름을 대신 `%s`(으)로 만들고 그 이름을 반환하기 때문입니다.',
  'Raises errors on unresolved merge conflicts in source files, to catch mistakes where a conflicted file is accidentally marked as resolved.' => '소스 파일에서 해결되지 않은 병합 충돌이 발생하면 오류를 발생시켜, 충돌이 있는 파일이 실수로 해결된 것으로 표시되는 오류를 잡아냅니다.',
  '\'%s\' has been amended with \'Differential Revision:\', as specified by \'%s\' in your %s \'base\' configuration.' => '%3$s \'base\' 구성에서 \'%2$s\'(으)로 지정되었기에, \'%s\'(이)가 \'Differential Revision:\'으로 어멘드 되었습니다.',
  'NOTE' => '참고',
  'You are trying to connect to a server ("%s") that you do not have any stored credentials for, but the command you are running requires authentication.' => '저장된 자격 증명이 없는 서버("%s")에 연결하려고 시도하고 있지만, 실행 중인 명령에는 인증이 필요합니다.',
  'Expected \'Author:\'.' => '\'Author:\'를 예상했습니다.',
  'First argument to `%s` must be a string literal.' => '`%s`에 대한 인수는 문자열 리터럴이어야 합니다.',
  'Use of Blacklisted Function' => '차단 목록에 등록된 함수의 사용',
  'Restoring local state (at "%s" on branch "%s", bookmarked as "%s").' => '로컬 상태를 복구합니다 (브랜치 "%2$s"의 "%s"에, "%3$s"(으)로 북마크됨).',
  'Useless overriding method.' => '쓸모없는 덮어쓰기 메서드입니다.',
  'The name of the default branch to land changes onto when `%s` is run.' => '`%s`이(가) 실행될 때 변경 사항을 최종 반영할 기본 브랜치의 이름입니다.',
  'You must use ONLY Unix linebreaks ("%s") in source code.' => '소스 코드에서 ONLY Unix 줄바꿈("%s")만을 사용해야 합니다.',
  'NAME' => '이름',
  'Unknown attribute label "%s" in line "%s" while parsing raw commit blob: %s' => '다음의 원본 커밋 블롭을 구문 분석하는 동안 "%2$s"번째 줄에서 알 수 없는 속성 레이블 "%s"을(를) 발견했습니다: %3$s',
  'Unknown Mercurial log field \'%s\'!' => '알 수 없는 Mercurial 로그 필드 "%s"!',
  '%s returned unexpected error code: %d
stdout: %s
stderr: %s' => '%s 예기치 않은 오류 코드가 반환되었습니다: %d 
stdout: %s
stderr: %s',
  'Delimiter character must be one byte in length or null.' => '구분자 문자는 길이가 1바이트이거나 null이어야 합니다.',
  'Prefer "__CLASS__" over hard-coded class names.' => '하드코딩된 클래스 이름보다 "__CLASS__"를 선호하세요.',
  'API Token installed.' => 'API 토큰이 설치되었습니다.',
  'The "--json" argument may only be used when listing aliases.' => '"--json" 인수는 별칭을 나열할 때만 사용할 수 있습니다.',
  'Wildcard arguments may not be repeatable.' => '와일드카드 인수는 반복해서 사용할 수 없습니다.',
  'AMBIGUOUS' => '모호함',
  'Use a specific version of llavile/php-compatinfo-db' => 'llavile/php-compatinfo-db의 특정 버전을 사용',
  'Unrecognized lint message code "%s". Expected a valid flake8 lint code like "%s", or "%s", or "%s", or "%s".' => '"%s" 린트 메시지 코드를 인식할 수 없습니다. 예상되는 유효한 flake8 린트 코드는 "%s" 또는 "%s" 또는 "%s" 또는 "%s" 등입니다.',
  'You have merge conflicts in this working copy.' => '이 작업 사본에 병합 충돌이 발생했습니다.',
  'Ignore these %s untracked file(s) and continue?' => array(
    '이 추적되지 않는 파일을 무시하고 계속합니까?',
    '이 추적되지 않는 파일들을 무시하고 계속합니까?',
  ),
  'PHP_CodeSniffer tokenizes PHP, JavaScript and CSS files and detects violations of a defined set of coding standards.' => 'PHP_CodeSniffer는 PHP, 자바스크립트, CSS 파일을 토큰화하고 정의된 코딩 표준 위반을 감지합니다.',
  'To identify the repository associated with this working copy, arc followed this process:' => '이 작업 사본과 연결된 저장소를 식별하기 위해, arc는 다음 프로세스를 따랐습니다:',
  'Linter %s requires %s version %s. Unable to determine the version that you have installed.' => '린터 %s은(는) %s 버전 %s을(를) 요구합니다. 설치된 버전을 결정할 수 없습니다.',
  'Writing \'%s\' to \'%s\'...
' => '\'%s\'을(를) \'%s\'에 쓰는 중...',
  '< %sus' => '< %sus',
  'Download a file to local disk.' => '파일을 로컬 디스크에 다운로드합니다.',
  'Parameter passed to setDuration() must be an integer or a float.' => 'setDuration()에 전달된 매개변수는 정수 또는 float형이어야 합니다.',
  'More than one branch matching task ID \'%s\' exists. Use \'git checkout\' instead.' => '두 개 이상의 브랜치 일치 태스크 ID \'%s\'이(가) 있습니다. 대신 \'git checkout\'을 사용하세요.',
  'Call %s before calling %s. You can not add more nodes once you have loaded the graph.' => '%2$s을(를) 호출하기 전에 %s을(를) 호출하세요. 그래프를 로드한 뒤에는 노드를 더 추가할 수 없습니다.',
  'Related configuration:' => '관련된 구성:',
  'This line is %s characters long, but the convention is %s characters.' => '이 줄은 길이가 %s자이지만, 규칙은 %s자입니다.',
  'Working Copy: Path "%s" is part of `%s` working copy "%s".' => '작업 사본: 경로 "%s"은(는) `%s` 작업 사본 "%s"의 일부입니다.',
  '"%s" is not an exact quantity.' => '"%s"은(는) 정확한 수량이 아닙니다.',
  'Linter failed to parse output!' => '린터가 출력의 구문 분석을 실패했습니다!',
  'Failed to load XUnit report; Input starts with:' => 'XUnit 보고서를 로드하는 데 실패했습니다. 입력은 다음과 같이 시작됩니다:',
  'Multiple "static" modifiers are not allowed.' => '"static" 수식어는 여러 개 사용할 수 없습니다.',
  'Assertion failed, expected values to be equal (at %s:%d).' => '단언문이 실패했습니다, 값이 같을 것으로 예상되었습니다 (%s:%d에서).',
  'No query exists which can load hardpoint "%s" for object (with key "%s" of type "%s").' => '객체(키 "%2$s", 유형 "%3$s")에 대한 하드포인트 "%s"을 로드할 수 있는 쿼리가 없습니다.',
  'Waiting for input on stdin...' => 'stdin에서의 입력 대기 중...',
  'Attempting to wait on a hardpoint request (with index "%s", for hardpoint "%s") that is part of a different engine.' => '다른 엔진의 일부인 하드포인트 요청(인덱스 "%s", 하드포인트 "%s")을 기다리려고 시도하고 있습니다.',
  'Do not use "each()". This function was deprecated in PHP 7.2 and removed in PHP 8.0' => '"each()"를 사용하지 마세요. 이 함수는 PHP 7.2에서 구식이 되었고 PHP 8.0에서 제거되었습니다.',
  'Some linters failed:' => '일부 린터 실패:',
  'There is no revision %s.' => '%s 판이 없습니다.',
  'Comment Style' => '댓글 스타일',
  'The token "%s" is not a valid API Token. The server returned this response when trying to use it as a token: %s' => '토큰 "%s"은(는) 유효한 API 토큰이 아닙니다. 서버가 이 토큰을 사용하려고 할 때 다음 응답을 반환했습니다: %s',
  'Unknown merge approach "%s".' => '알 수 없는 병합 접근 "%s".',
  'Provide method parameters on stdin as a JSON blob.' => '메서드 매개변수를 stdin에 JSON 블롭으로 제공합니다.',
  'CREATE %s BRANCHE(S)' => '브랜치 %s개 생성',
  'Use of unknown class or interface symbol "%s".' => '알 수 없는 클래스 또는 인터페이스 심볼 "%s"의 사용.',
  'Follow naming conventions: interfaces should be named using `%s`.' => '명명 규칙을 따르세요: 인터페이스 이름에는 `%s`을(를) 사용해야 합니다',
  'Configured unit test engine "%s" is not a subclass of "%s", but must be.' => '구성된 단위 테스트 엔진 "%s"은(는) "%s"의 하위 클래스가 아니지만, 반드시 하위 클래스여야 합니다.',
  'Rule \'%s\' popped empty context!' => '규칙 \'%s\'이(가) 빈 컨텍스트를 pop했습니다!',
  'Expected rule \'%s\' in state \'%s\' in %s to have 2-4 elements (regex, token, [next state], [options]), got %d.' => '%3$s의 상태 \'%2$s\'에 있는 규칙 \'%s\'은(는) 2~4개 요소(정규 표현식, 토큰, [다음 상태], [옵션])를 가질 것으로 예상되었지만 %4$d개가 주어졌습니다.',
  'Specifying multiple exceptions in a catch clause is not available before PHP 7.1.' => 'catch절 내에서 복수의 예외를 지정하는 것은 PHP 7.1 이전 버전에서는 사용할 수 없습니다.',
  'Provide exactly one Conduit method name to call.' => '호출할 Conduit 메서드 이름을 정확히 하나 제공하세요.',
  'Unable to verify request signature, no "%s" present in request protocol information.' => '요청 서명을 확인할 수 없습니다. 요청 프로토콜 정보에 "%s"이(가) 없습니다.',
  'To log in and save valid credentials for this server, run this command:' => '이 서버에 로그인하고 유효한 자격 증명을 저장하려면 다음 명령을 실행하세요:',
  'Tab Literal' => '탭 리터럴',
  'Encountered duplicate meminfo key "%s" in meminfo source "%s".' => 'meminfo 소스 "%2$s"에서 중복 meminfo 키 "%s"을(를) 발견했습니다.',
  'Failed to JSON encode value: %s.' => '값을 JSON 인코딩하는데 실패했습니다: %s.',
  'Encoding UTF8 codepoint "%s" is not supported.' => '코드포인트 "%s"을(를) UTF-8로 인코딩하는 것은 지원되지 않습니다.',
  'Provide a directory to create or update a library in.' => '라이브러리를 만들거나 업데이트할 디렉터리를 지정하세요.',
  'Several small trails and footpaths cross here, twisting away from you among the trees.' => '이곳에는 여러 개의 작은 오솔길과 보행로가 교차하며, 나무들 사이로 굽이굽이 이어져 나갑니다.',
  'Amend the working copy, synchronizing the local commit message.' => '작업 사본을 어멘드해서 로컬 커밋 메시지를 동기화합니다.',
  'Use `%s` for checking if the string starts with something.' => '문자열이 무언가로 시작하는지를 확인하기 위해 `%s`을(를) 사용하세요.',
  'Use of unknown interface symbol "%s".' => '알 수 없는 인터페이스 심볼 "%s"의 사용.',
  'UNKNOWN REVISION' => '알 수 없는 판',
  'Query parameters include a duplicate key ("%s") and can not be nondestructively represented as a map.' => '쿼리 매개변수에 중복 키("%s")가 포함되어 있어 손실 없이 맵으로 표현할 수 없습니다.',
  'Buildable "%s"' => '빌드가능 "%s"',
  'Lock \'%s\' is already registered!' => '잠금 \'%s\'이(가) 이미 등록되어 있습니다!',
  'Request specifies a file with key "%s", but that key is also defined by normal request data. Due to limitations with cURL, requests that post file data must use unique keys.' => '요청이 키 "%s"인 파일을 지정했지만, 이 키는 일반 요청 데이터에도 정의되어 있습니다. cURL 제한 때문에 파일 데이터를 게시하는 요청은 고유한 키를 사용해야 합니다.',
  'Failed to set stream nonblocking.' => '스트림을 nonblocking으로 설정하는데 실패했습니다.',
  'This version of %s is not supported (it is too new). You can try upgrading with `%s`.' => '이 %s 버전은 지원되지 않습니다 (너무 새 버전입니다). `%s`(으)로 업그레이드를 시도할 수 있습니다.',
  'Expected JSON.' => 'JSON을(를) 예상했습니다.',
  'TODO: Ambiguous ref.' => 'TODO: 모호한 ref.',
  '<paths = %s>' => '<paths = %s>',
  '"%s" class "%s" must define a "%s" constant.' => '"%s" 클래스 "%s"은(는) "%s" 상수를 정의해야 합니다.',
  'You walk along the narrow bank of the stream as it winds lazily downhill and turns east, gradually widening into a river.' => '좁은 스트림의 둑을 따라 걷다 보면 스트림이 완만하게 내리막길을 따라 흐르다가 동쪽으로 방향을 틀어 점차 넓어져 강이 됩니다.',
  'Unable to Parse' => '구문을 분석할 수 없습니다',
  'Unknown smoothing type "%s".' => '알 수 없는 스무딩 유형 "%s".',
  'Received errors from Asana: %s' => 'Asana에서 오류 수신함: %s',
  'Follow naming conventions: class properties should be named using `%s`.' => '명명 규칙을 따르세요: 클래스 속성 이름에는 `%s`을(를) 사용해야 합니다',
  'Flag arguments may not have a default (always false).' => '플래그 인수는 기본값을 가질 수 없습니다 (항상 거짓).',
  'Found invalid alias definition (with key "%s").' => '별칭 정의가 유효하지 않습니다 (키 "%s").',
  'Ruby' => '루비',
  'Convention: comma should be followed by space.' => '명명 규칙: 쉼표 뒤에는 공백이 와야 합니다.',
  'Checking out branch "%s".' => '"%s" 브랜치를 확인 중입니다.',
  'None of the rules in your \'base\' configuration matched a valid commit. Adjust rules or specify which commit you want to use explicitly.' => '\'base\' 구성의 어떤 규칙도 유효한 커밋과 일치하지 않았습니다. 규칙을 조정하거나 사용할 커밋을 명시적으로 지정하세요.',
  'ALIAS' => '별칭',
  '**liberate** [__path__]' => '**liberate** [__경로__]',
  'Done, closed revision.' => '완료했습니다, 판을 닫았습니다.',
  'Properties should have their visibility declared explicitly.' => '속성의 공개 여부는 명시적으로 선언되어야 합니다.',
  'This codebase targets PHP %s, but namespaces were not introduced until PHP 5.3.' => '이 코드베이스는 PHP %s을(를) 대상으로 하지만 이름공간은 PHP 5.3 까지 도입되지 않았습니다.',
  'Writing to a closed pipe!' => '닫힌 파이프에 쓰는 중입니다!',
  'Follow naming conventions: constants should be named using `%s`.' => '명명 규칙을 따르세요: 상수 이름에는 `%s`을(를) 사용해야 합니다',
  'Lint renderer "%s" is unknown. Supported renderers are: %s.' => '린트 렌더러 "%s"을(를) 알 수 없습니다. 지원되는 렌더러: %s.',
  'Spanish (Spain)' => '스페인어 (스페인)',
  'Convention: space before `%s` token.' => '명명 규칙: `%s` 토큰 앞에 공백을 넣으세요.',
  'Linter `%s` configured in \'%s\' MUST be a subclass of `%s`.' => '\'%2$s\'에 구성된 린터 `%s`은(는) 반드시 `%3$s`의 하위 클래스여야 합니다.',
  'Unable to find %s or %s in %s!' => '%3$s에서 %s 또는 %s을(를) 찾을 수 없습니다!',
  'Use `%s` to detect syntax errors in JSON files.' => 'JSON 파일에서 문법 오류를 찾으려면 `%s`을(를) 사용하세요.',
  'List style to prefer.' => '선호하는 목록 스타일입니다.',
  'Branch name %s already exists; trying a new name.' => '브랜치 이름 %s은(는) 이미 존재합니다, 다른 이름을 시도하세요.',
  'UNSOUND' => '신뢰할 수 없음',
  'Found a unique matching repository.' => '일치하는 고유한 저장소를 찾았습니다.',
  'Confirms that new branches or bookmarks should be created in the remote.' => '원격에 새 브랜치 또는 책갈피를 생성해야 함을 확인합니다.',
  'User aborted the workflow.' => '사용자가 워크플로를 중단했습니다.',
  'Auto-Fix' => '자동 수정',
  'Object (with key "%s", of type "%s") has no hardpoint "%s". Hardpoints on this object are: %s.' => '객체(키 "%s", 유형 "%s")에 하드포인트 "%s"이(가) 없습니다. 이 객체의 하드포인트: %s.',
  'Modified \'%s\' files:' => '수정된 파일 \'%s\'개:',
  '%s revision(s) have build failures or ongoing builds:' => '%s개 판의 빌드가 실패 또는 진행중입니다:',
  'Unrecognized lint message code "%s". Expected a valid Pylint lint code like "%s", or "%s", or "%s".' => '"%s" 린트 메시지 코드를 인식할 수 없습니다. 예상되는 유효한 Pylint 린트 코드는 "%s" 또는 "%s" 또는 "%s" 등입니다.',
  'Unable to identify the current commit in the working copy.' => '작업 사본 안의 현재 커밋을 식별할 수 없습니다.',
  'Revision %s can not be closed. You can only close revisions which have been \'accepted\'.' => '판 %s을(를) 닫을 수 없습니다. \'승인됨\'으로 표시된 판만 닫을 수 있습니다.',
  'Use of unknown function symbol "%s".' => '알 수 없는 함수 심볼 "%s"의 사용.',
  'Switching to source \'%s\'.' => '소스 \'%s\'(으)로 전환합니다.',
  'Unable to parse line in meminfo source "%s": "%s".' => 'meminfo 소스 "%s"의 줄을 구문 분석할 수 없습니다: "%s"',
  'Data has fewer than %d lines.' => '데이터가 줄 %d개보다 적습니다.',
  'Expected \'%s\'.' => '\'%s\'을(를) 예상했습니다.',
  'Rebase onto %s failed!' => '%s(으)로의 리베이스가 실패했습니다!',
  'Specify a version requirement for the binary. The version number may be prefixed with <, <=, >, >=, or = to specify the version comparison operator (default: =).' => '바이너리 버전 요구사항을 지정하세요. 버전 번호는 <, <=, >, >=, 또는 =으로 시작하거나 버전 비교 연산자를 지정할 수 있습니다 (기본값: =).',
  'STRATEGY' => '방식',
  'Convention: put a single space after control statements.' => '명명 규칙: 제어문 뒤에 공백 하나를 넣으세요.',
  'Modifier Ordering' => '수식어 순서',
  'Input and expectations must have the same number of values.' => '입력값과 기대값은 동일한 개수의 값을 가져야 합니다.',
  'Error in parsing \'%s\' file, for test engine \'%s\'.' => '테스트 엔진 \'%2$s\'에 대해 \'%s\' 파일을 구문 분석하는 도중 오류가 발생했습니다.',
  'Duplicate key in array initializer. PHP will ignore all but the last entry.' => '배열 이니셜라이저에 중복 키가 있습니다. PHP는 마지막 항목을 제외한 나머지 항목을 무시합니다.',
  '(Assuming "%s" is the British spelling of "%s".)' => '("%s"을(를) "%s"의 영국식 철자인 것으로 가정합니다.)',
  'Avoid `%s`. It is confusing and hinders static analysis.' => '`%s`의 사용을 피하세요. 혼란을 야기하고 정적 분석을 방해합니다.',
  'The first line is used as subject, next lines as comment.' => '첫 번째 줄은 제목으로 사용되고, 다음 줄들은 댓글로 사용됩니다.',
  'In PHP, `%s` is the string concatenation operator, not `%s`. This expression uses `%s` with a string literal as an operand.' => 'PHP에서는 `%s`가 문자열 연결 연산자입니다 (`%s`가 아닙니다). 이 표현식은 문자열 리터럴을 피연산자로 사용하면서 `%s`를 사용합니다.',
  'Failed to write to buffer.' => '버퍼에 쓰기를 실패했습니다.',
  'Uses `%s` to run several linters (PyFlakes, pep8, and a McCabe complexity checker) on Python source files.' => '`%s`을(를) 사용해 Python 소스 파일에 여러 린터(PyFlakes, pep8, McCabe 복잡도 검사기)를 실행합니다.',
  'Upgrade this program to the latest version.' => '이 프로그램을 최신 버전으로 업그레이드합니다.',
  'Phutil XHPAST' => 'Phutil XHPAST',
  'You have uncommitted changes in this working copy.' => '이 작업 사본에 커밋되지 않은 변경 사항이 있습니다.',
  'You\'ve enabled code coverage but XDebug is not installed.' => '코드 검사를 활성화했지만 XDebug가 설치되지 않았습니다.',
  'Configure a locale to print messages in.' => '메시지를 출력할 로케일을 구성합니다.',
  'Arc was unable to automagically make a name for this patch. Please clean up your working copy and try again.' => 'Arc가 이 패치의 이름을 자동으로 만들 수 없었습니다. 작업 사본을 정리한 뒤 다시 시도하세요.',
  'JSCS does not currently support custom severity levels, because rules can\'t be identified from messages in output.' => '출력 메시지에서 규칙을 식별할 수 없기 때문에, JSCS는 현재 사용자 지정 심각도 수준을 지원하지 않습니다.',
  'You can not "--pick" changes under the "merge" strategy.' => '"merge" 방식에서는 변경 사항을 "--pick" 할 수 없습니다.',
  'Config: Did not find user configuration at "%s".' => '구성: "%s"에서 사용자 구성을 찾지 못했습니다.',
  'Added' => '추가됨',
  '`%s`-style functions which take a format string and list of values as arguments. The value for the mapping is the start index of the function parameters (the index of the format string parameter).' => '형식 문자열과 값 목록을 인수로 받는 `%s` 스타일의 함수입니다. 매핑 값은 함수 매개변수의 시작 인덱스(형식 문자열 매개변수의 인덱스)입니다.',
  'Jul' => '7월',
  'Paste "%s"' => '붙여넣기 "%s"',
  'Command string argument includes a NULL byte. This byte can not be safely escaped in command line arguments in Windows environments.' => '명령 문자열 인수에 NULL 바이트가 포함되어 있습니다. 이 바이트는 윈도우 환경의 명령줄 인수에서 안전하게 이스케이프 할 수 없습니다.',
  'DISCARDING ANCESTORS' => '조상 버리기',
  'Syntax Error' => '구문 오류',
  'Too many arguments to %s.' => '%s에 인수가 너무 많습니다.',
  'The revision associated with commit "%s" (an ancestor of: %s) is ambiguous. These %s revisions are associated with the commit:' => '커밋 "%s"(다음의 조상: %s)에 연관된 판이 모호합니다. 이 %s개의 판이 커밋과 연관되어 있습니다:',
  'Resuming upload (%s of %s chunks remain).' => '업로드를 재개합니다. (%s / %s청크 남음)',
  'Rule \'%s\' contains a production \'%s\' which is nonempty but has a null in it. A rule with other may not contain null.' => '규칙 \'%s\'에는 비어 있지 않지만 null을 포함하는 프로덕션 \'%s\'이(가) 있습니다. 다른 것을 포함한 규칙은 null을 포함할 수 없습니다.',
  'Hardpoint ("%s", of type "%s") does not support merging values.' => '하드포인트("%s", 유형 "%s")는 값 병합을 지원하지 않습니다.',
  'Library "%s" (at "%s") is not a Git working copy, so no version information can be provided.' => '라이브러리 "%s"("%s" 위치)은(는) Git 작업 사본이 아니므로 버전 정보를 제공할 수 없습니다.',
  'Unknown lint severity \'%s\'!' => '알 수 없는 린트 심각도 \'%s\'!',
  'Configuration Options' => '구성 옵션',
  'No unit test failures.' => '실패한 단위 테스트가 없습니다.',
  'Conduit URI \'%s\' must include a valid host.' => 'Conduit URI \'%s\'은(는) 유효한 호스트를 포함해야 합니다.',
  'ONTO REMOTE' => '"onto" 원격',
  'This test case made no assertions. Test cases must make at least one assertion.' => '이 테스트 케이스는 단언문을 만들지 않았습니다. 테스트 케이스는 최소한 하나의 단언문을 만들어야 합니다.',
  '%s AFFECTED FILE(S)' => '영향 받은 파일',
  'Git status has changed!' => 'Git 상태가 변경되었습니다!',
  'No such linter standard. Available standards are: %s.' => '해당 린터 표준이 없습니다. 사용 가능한 표준: %s.',
  '%s Library Linter' => '%s 라이브러리 린터',
  'Basic Text Linter' => '기본 텍스트 린터',
  'Unable to parse Mercurial blame line: %s' => 'Mercurial 블레임 줄을 구문 분석할 수 없습니다: %s',
  '%s (until %s)' => '%s (%s까지)',
  'Cleaning up branch "%s". To recover, run:' => '브랜치 "%s"을(를) 정리합니다. 복구하려면 다음을 실행하세요:',
  'Install hlint with `%s`.' => '`%s`을(를) 사용해 hlint를 설치합니다.',
  'Hardpoint future list is marked to send results to the generator, but the list does not have exactly one future (it has %s).' => '하드포인트 퓨처 목록은 결과를 생성기로 보내도록 표시되어 있지만, 목록에 정확히 하나의 퓨처만이 있지 않습니다.(%s개가 있습니다.)',
  'D, M j' => 'D, M j',
  'Fetched ref "%s" from remote "%s".' => '원격 "%2$s"에서 가져온 ref "%s" 입니다.',
  'Use `%s` as a statement, not an expression.' => '`%s`을(를) 표현식이 아닌 서술로써 사용하세요.',
  'Created task %s: \'%s\' at %s
' => '태스크 %s이(가) 생성되었습니다: %s (%s에)',
  'Expected a revision ID to be returned by "differential.revision.edit".' => '"differential.revision.edit"에서 판 ID가 반환될 것으로 예상했습니다.',
  'cover does not currently support %s in svn.' => 'cover는 현재 SVN에서 %s을(를) 지원하지 않습니다.',
  'Closing revision "%s"...' => '판 "%s" 닫는 중...',
  'Expected option key passed to "addCurlOption(<key>, ...)" to be a scalar, got "%s".' => '"addCurlOption(<key>, ...)"에 전달된 옵션 키가 스칼라이기를 예상했지만, "%s"을 받았습니다.',
  'Status' => '상태',
  'Can only add execute actions to an agent.' => '에이전트에는 실행 작업만 추가할 수 있습니다.',
  'Formatted String' => '서식이 있는 문자열',
  'Two different HTTP extensions ("%s" of class "%s" and "%s" of class "%s") both provided a proxy URI for URI "%s". No more than one extension may provide a proxy for any URI.' => '서로 다른 두 HTTP 확장 기능("%s" 클래스 "%s" 및 "%s" 클래스 "%s")이 모두 URI "%s"에 대한 프록시 URI를 제공했습니다. 어떤 URI에도 둘 이상의 확장 기능이 프록시를 제공할 수 없습니다.',
  'INPUT' => '입력',
  'Unnecessary `%s` modifier in `%s` class.' => '`%2$s` 클래스 안의 `%s` 수식어가 불필요합니다.',
  'It is afternoon. The air has changed and it feels as though it may rain. You hear a squirrel chittering high overhead.' => '오후입니다. 날씨가 바뀌고 비가 올 것 같은 기분이 듭니다. 오버헤드 높은 곳에서 다람쥐가 찍찍거리는 소리가 들립니다.',
  'Created and checked out branch %s.' => '브랜치 %s을(를) 생성하고 체크아웃했습니다.',
  'Unable to upload file: failed to fseek() to offset %d in file at path "%s".' => '파일을 업로드할 수 없습니다: 경로 "%2$s"의 파일에서 오프셋 %d(으)로 fseek() 하는데 실패했습니다.',
  'Nov' => '11월',
  'Unnecessary whitespace around paamayim nekudotayim (double colon) operator.' => 'Paamayim Nekudotayim (이중 콜론) 연산자 주변에 불필요한 공백이 있습니다.',
  'You can not change the Conduit URI after a conduit is already open.' => 'Conduit이 이미 열린 후에는 Conduit URI를 변경할 수 없습니다.',
  'Lint raised errors!' => '린트가 오류를 일으켰습니다!',
  '%s: failed to decode tree.' => '%s: 트리를 디코딩하는데 실패했습니다.',
  'Commit message was not amended. Amending commit message is only supported in git and hg (version 2.2 or newer)' => '커밋 메시지가 어멘드되지 않았습니다. 커밋 메시지를 어멘드 하는 것은 git 및 hg(버전 2.2 이상)에서만 지원됩니다.',
  'ONTO TARGET' => '"onto" 대상',
  'Call-Time Pass-By-Reference' => 'Call-time Pass-by-reference',
  'Unknown' => '알 수 없음',
  'Confirms landing more than %s commit(s) in a single operation.' => '한 번의 작업에서 %s개보다 많은 커밋을 최종 반영하는 것임을 확인합니다.',
  'Executed in %d us.' => '%dus만에 실행되었습니다.',
  'Variable references should not be prefixed with whitespace.' => '변수 참조는 공백으로 시작해서는 안됩니다.',
  'Install PHP.' => 'PHP를 설치합니다.',
  'The logical value of this expression is static. Did you forget to remove some debugging code?' => '이 표현식의 논리값은 정적입니다. 디버깅 코드를 제거하는 것을 잊었나요?',
  'There are no commits reachable from the specified sources (%s) which are not already present in the state you are merging into ("%s"), so nothing can land.' => '지정한 소스(%s)에서 도달 가능하면서 병합 대상 상태("%s")에 이미 존재하지 않는 커밋이 없으므로, 최종 반영할 수 있는 것이 없습니다.',
  'Please provide a summary.' => '요약을 제공해 주세요.',
  'Supply a commit message for this patch, then save and exit.' => '이 패치에 대한 커밋 메시지를 제공하고, 저장한 후 종료하세요.',
  'Avoid use of product name literals in "pht()": use generic language or an appropriate method from the "PlatformSymbols" class instead so the software can be forked. String uses names: %s.' => '"pht()"에서 제품 이름 리터럴을 사용하지 마세요. 소프트웨어가 포크될 수 있도록 일반적인 표현이나 "PlatformSymbols" 클래스의 적절한 메서드를 사용하세요. 문자열이 사용하는 이름: %s.',
  'Graph already has a node "%s"!' => '그래프에 이미 "%s" 노드가 있습니다!',
  '`%s` Method Cannot Be Declared `%s`' => '`%s` 메서드는 `%s`(으)로 선언될 수 없음',
  'Channel closed!' => '채널이 닫혔습니다!',
  'PASS' => '통과',
  'Argument "%s" appears after the first non-flag argument. This special argument must appear before other arguments.' => '인수 "%s"은(는) 첫 번째 플래그가 아닌 인수 뒤에 나타납니다. 이 특수 인수는 다른 인수들보다 먼저 와야 합니다.',
  'UPGRADED' => '업그레이드됨',
  'Switching to local branch "%s".' => '로컬 브랜치 "%s"(으)로 전환합니다.',
  'Importing functions or constants is not available before PHP 5.6.' => '함수 또는 상수 가져오기는 PHP 5.6 이전 버전에서는 사용할 수 없습니다.',
  'Expected an array for %%L%s conversion.' => '%%L%s 변환에 배열을 예상했습니다.',
  'You have selected multiple branches to push changes onto. Pushing to multiple branches is not supported by "arc land" in Mercurial: Mercurial commits may only belong to one branch, so this operation can not be executed atomically.' => '변경 사항을 푸시할 여러개의 브랜치를 선택했습니다. Mercurial에서 "arc land"는 여러개의 브랜치로 푸시하는 기능을 지원하지 않습니다. Mercurial 커밋은 하나의 브랜치에만 속할 수 있으므로 이 작업은 원자적으로 실행할 수 없습니다.',
  'Defining typed for class properties was not introduced until PHP 7.4, but this codebase targets an earlier version of PHP.' => '클래스 속성에 typed를 정의하는 기능은 PHP 7.4부터 도입되었지만, 이 코드베이스는 이전 버전의 PHP를 대상으로 합니다.',
  'Failed to replace template variables while rendering cow!' => 'cow를 렌더링하는 동안 틀 변수를 교체하는데 실패했습니다!',
  'Buffer discards are not currently supported by the streaming parser.' => '버퍼 버리기는 현재 스트리밍 파서에서 지원되지 않습니다.',
  '[Invalid Translation!] %s' => '[유효하지 않은 트랜잭션!] %s',
  'Skip checks for untracked files in the working copy.' => '작업 사본 내의 추적되지 않는 파일에 대한 확인을 건너뜁니다.',
  'Confirms use of a revision that you are not the author of.' => '자신이 작성자가 아닌 판을 사용하고 있음을 확인합니다.',
  'Created a new paste.' => '새로운 붙여넣기를 만듭니다.',
  'Apr' => '4월',
  'Spacing Before Array Index' => '배열 인덱스 앞에 공백 존재',
  'Attempting to merge changes.' => '변경 사항을 병합하려고 시도합니다.',
  'Tautological Expression' => '동일한 표현식',
  'Some ancestor commits are associated with revisions that have already been closed. These changes will be skipped:' => '일부 조상 커밋은 이미 닫힌 판과 연결되어 있습니다. 이 변경 사항은 건너뛰어 집니다:',
  'Drop the symbol cache and rebuild the entire map from scratch.' => '심볼 캐시를 삭제하고 전체 맵을 처음부터 재빌드합니다.',
  '%4.1fs' => '%4.1f초',
  'Optional parameters specified before a required parameter are always considered required in PHP 8.1.' => '필수 매개변수 앞에 지정된 선택적 매개변수는 PHP 8.1에서는 항상 필수로 간주됩니다.',
  'Pushing changes to staging area...' => '변경 사항을 스테이징 영역으로 푸시 중...',
  'IP address "%s" is not properly formatted: an address with omitted trailing segments must end with "::".' => 'IP 주소 "%s"의 형식이 올바르지 않습니다: 후행 세그먼트가 생략된 주소는 "::"로 끝나야 합니다.',
  'Lock \'%s\' has already been locked by this process.' => '\'%s\' 잠금은 이미 이 프로세스에 의해 잠겼습니다.',
  'Minimum value must be an integer.' => '최소값은 정수이어야 합니다.',
  'SAVE PROMPT' => '프롬프트 저장',
  'Sort out the lint changes that were applied to the working copy and relint.' => '작업 사본에 적용된 린트 변경 사항을 정리하고 린트를 다시 실행합니다.',
  'the repository has only one commit.' => '저장소는 하나의 커밋만 있습니다.',
  'If you run \'%s\', changes between the commit:' => '\'%s\'을(를) 실행할 경우, 커밋 간의 변경 사항은:',
  'it is the first commit between \'%s\' (the merge-base of \'%s\' and HEAD) which is also contained by another branch (%s).' => '이는 \'%s\'(\'%s\'와(과) HEAD의 병합 기준) 사이의 첫 번째 커밋 중 다른 브랜치(%s)에도 포함된 커밋입니다.',
  'Failed to open URI "%s" in browser ("%s"). Check your "browser" config option.' => '브라우저 ("%2$s") 에서 URI "%s"을(를) 열지 못했습니다. "브라우저" 구성 옵션을 확인하세요.',
  'applied' => '적용했습니다',
  'This line contains trailing whitespace. Consider setting up your editor to automatically remove trailing whitespace.' => '이 줄에는 끝에 공백이 있습니다. 편집기에서 끝의 공백을 자동으로 제거하도록 설정하는 것을 고려해 보세요.',
  'Stream iterators can not be rewound!' => '스트림 반복자는 되감기될 수 없습니다!',
  'You must configure discovery rules to map C# files back to test projects (`%s` in %s).' => 'C# 파일을 테스트 프로젝트(%2$s의 `%s`)에 다시 매핑하려면 발견 규칙을 구성해야 합니다.',
  'Revision "%s" was not found anywhere in this working copy.' => '판 "%s"을(를) 이 작업 사본 어디에서도 찾지 못했습니다.',
  'Apply changes from an arc bundle generated with \'%s\'.' => '\'%s\'(으)로 생성된 arc bundle의 변경 사항을 적용합니다.',
  'Readonly classes are not available before PHP 8.2.' => '읽기 전용 클래스는 PHP 8.2 이전 버전에서는 사용할 수 없습니다.',
  'Unable to decode MIME header: install "iconv" or "mbstring" extension.' => 'MIME 헤더를 디코딩할 수 없습니다: "iconv" 또는 "mbstring" 확장 기능을 설치하세요.',
  'Revision URI:' => '판 URI:',
  'Lock is already held.' => '잠금이 이미 유지 중입니다.',
  'Alias Functions' => '별칭 함수',
  'Argument "%s" was provided twice.' => '인수 "%s"이(가) 두 번 제공되었습니다.',
  'Show a detailed coverage report on the CLI. Implies %s.' => 'CLI에서 자세한 검사 보고서를 표시합니다. %s을(를) 암시합니다.',
  'function' => '함수',
  'Unpacking within arrays is not available before PHP 7.4.' => '배열 내에서 언패킹은 PHP 7.4 이전 버전에서는 사용할 수 없습니다.',
  'Convention: no spaces before closing parentheses.' => '명명 규칙: 닫는 괄호 앞에 공백을 넣지 마세요.',
  'You are landing %s revision(s) which are not in the state "Accepted", indicating that they have not been accepted by reviewers. Normally, you should land changes only once they have been accepted. These revisions are in the wrong state:' => '아니어서 검토자가 승인하지 않았음을 나타내는, "승인됨" 상태가 아닌 판 %s개를 최종 반영하려고 합니다. 일반적으로 변경 사항은 승인된 뒤에만 최종 반영해야 합니다. 다음 판들은 상태가 잘못되었습니다:',
  'Config File' => '구성 파일',
  'Opening %s failed! %s.' => '%s 열기를 실패했습니다! %s.',
  'Command to execute.' => '실행할 명령입니다.',
  'Connected' => '연결함',
  '<opaque envelope>' => '<opaque envelope>',
  'The remote host returned something other than an HTTP response: %s' => '원격 호스트가 HTTP 응답이 아닌 다른 응답을 반환했습니다: %s',
  'You have merge conflicts in this working copy. Resolve merge conflicts before proceeding.' => '이 작업 사본에 병합 충돌이 발생했습니다. 계속 진행하기 전에 병합 충돌을 해결하세요.',
  'INSTALL' => '설치',
  'Never amend commits in the working copy with lint patches.' => '작업 사본의 커밋을 린트 패치로 절대 어멘드하지 않습니다.',
  'CIDR block "%s" is not formatted correctly. Expected an IP block in CIDR notation, like "%s" or "%s".' => 'CIDR 블록 "%s"의 형식이 올바르지 않습니다. "%s" 또는 "%s"와(과) 같은 CIDR 표기법의 IP 블록을 예상했습니다.',
  'Pilot a probe from the vessel "Arcanoid".' => '함선 "Arcanoid"의 탐사기를 조종합니다.',
  'Configuration option ("%s") defined by extension "%s" has an alias ("%s") which conflicts with an existing option. The key and aliases of each option must be unique.' => '확장 기능 "%2$s"에 의해 정의된 구성 옵션("%s")의 별칭("%3$s")이 기존 옵션과 충돌합니다. 각 옵션의 키와 별칭은 고유해야 합니다.',
  'CONDUIT' => 'CONDUIT',
  'Specifying this flag multiple times will push to multiple branches.' => '이 플래그를 여러번 지정하면 여러개의 브랜치로 푸시됩니다.',
  'it is the merge-base of the explicitly specified base commit \'%s\' and HEAD.' => '이는 명시적으로 지정된 기준 커밋 \'%s\'와(과) HEAD의 병합 기준입니다.',
  'Install RuboCop using `%s`.' => '`%s`을(를) 사용해 RuboCop을 설치합니다.',
  'This diff is against commit %s, but the commit is nowhere in the working copy. Try to apply it against the current working copy state? (%s)' => '이 차이는 커밋 %s에 대한 것이지만 해당 커밋이 작업 사본 어디에도 없습니다. 현재 작업 사본 상태에 적용해 보겠습니까? (%s)',
  'The \'%s\' file seems to be out-of-date. You probably need to run `%s`.' => '\'%s\' 파일이 오래된 것 같습니다. \'%s\'을(를) 실행해야 할 것 같습니다.',
  'When updating a revision, use the specified message instead of prompting.' => '판을 업데이트할 때, 확인 요청 대신 지정된 메시지를 사용합니다.',
  'No revision "%s" exists, or you do not have permission to view it.' => '판 "%s"이(가) 존재하지 않거나 볼 권한이 없습니다.',
  'First hash argument must be a string.' => '첫 번째 해시값 인수는 문자열이어야 합니다.',
  'One Class Per File' => '파일 당 클래스 하나',
  'Unknown line change type \'%s\'.' => '알 수 없는 줄 변경 유형 "%s".',
  'Mar' => '3월',
  'You are not the author of revision "%s", are you sure you want to close it?' => '당신은 판 "%s"의 작성자가 아닙니다. 정말로 닫으시겠습니까?',
  'Failed to extract link target!' => '링크 대상의 추출을 실패했습니다!',
  'No rules left from source \'%s\'.' => '소스 \'%s\'에 남아있는 규칙이 없습니다.',
  'Only show tasks assigned to the given username, also accepts %s to show all, default is you.' => '지정한 사용자 이름에 할당된 작업만 표시합니다. 모두 표시하려면 %s도 허용되며, 기본값은 본인입니다.',
  'New Version Available!' => '새 버전을 사용할 수 있습니다!',
  'BRANCH OPTION NOT AVAILABLE' => '브랜치 옵션이 사용 가능하지 않음',
  'SCAN' => '스캔',
  'Command to use to invoke an interactive editor, like `%s` or `%s`. This setting overrides the %s environmental variable.' => '`%s` 또는 `%s` 와 같은 대화형 편집기를 호출하는 데 사용할 명령입니다. 이 설정은 환경 변수 %s을(를) 덮어씁니다.',
  'Bad object key ("%s").' => '잘못된 객체 키("%s")입니다.',
  'Expected workflow ("%s", of class "%s") to return an "ArcanistWorkflowInformation" object from call to "getWorkflowInformation()", got %s.' => '워크플로("%s", 클래스 "%s")가 "getWorkflowInformation()" 호출에서 "ArcanistWorkflowInformation" 객체를 반환할 것으로 예상했지만 %s을(를) 받았습니다.',
  'Parameter has invalid type.' => '매개변수가 유효하지 않은 유형을 가지고 있습니다.',
  'Noncanonical Symbol' => '비표준적 심볼',
  'The server does not support staging areas for this repository.' => '서버가 이 저장소에 대한 스테이징 영역을 지원하지 않습니다.',
  'Install cpplint.py using `%s`, and place it in your path with the appropriate permissions set.' => '`%s`을(fmf) 사용해 cpplint.py를 설치한 뒤, 적절한 권한을 설정하여 경로에 배치하세요.',
  'Specify either setData() or setPath() when building a file data reference, but not both.' => '파일 데이터 참조를 빌드할 때 setData() 또는 setPath()를 지정하되, 둘을 동시에 지정하지는 마세요.',
  'Parameter \'%s\' has invalid type.' => '매개변수 \'%s\'이(가) 유효하지 않은 유형을 가지고 있습니다.',
  'BUILD FAILURES' => '빌드 실패',
  'Exit after __seconds__ spent idle.' => '__초__ 동안 유휴 상태로 있은 후 종료합니다.',
  '`%s` method cannot be declared `%s`. This construct will cause a fatal error.' => '`%s` 메서드는 `%s`(으)로 선언될 수 없습니다. 이러한 구조는 치명적인 오류를 발생시킵니다.',
  '\'%s\' files should not be executable.' => '\'%s\' 파일은 실행 파일이 될 수 없습니다.',
  'Path to a custom CA bundle file to be used for cURL calls. This is used primarily when your conduit endpoint is behind HTTPS signed by your organization\'s internal CA.' => 'cURL 호출에 사용할 사용자 지정 CA 번들 파일 경로입니다. 주로 Conduit 엔드포인트가 조직 내부 CA로 서명된 HTTPS 뒤에 있을 때 사용됩니다.',
  'JSHint returned unparseable output.' => 'JSHint가 구문 분석할 수 없는 출력을 반환했습니다.',
  'Disables lint for files that are marked as "%s", indicating that they contain generated code.' => '생성된 코드를 포함하고 있음을 나타내는 "%s"(으)로 표시된 파일에 대해 린트 검사를 비활성화합니다.',
  'Revision \'%s\' does not exist.' => '\'%s\' 판이 존재하지 않습니다.',
  ' <%dms' => ' <%dms',
  'Follow naming conventions: classes should be named using `%s`.' => '명명 규칙을 따르세요: 클래스 이름에는 `%s`을(를) 사용해야 합니다',
  'Failed to install signal handler!' => '신호 핸들러 설치에 실패했습니다!',
  'Depends on %s. ' => '%s에 의존합니다.',
  '**upgrade**' => '**업그레이드**',
  'Nullable type hints are not available before PHP 7.1.' => 'Nullable 유형 힌트는 PHP 7.1 이전 버전에서는 사용할 수 없습니다.',
  'This class is neither `%s` nor `%s`, and does not have a docblock marking it `%s`.' => '이 클래스는 `%s`도 아니고 `%s`도 아니며, `%s`(으)로 표시하는 docblock도 없습니다.',
  'Avoid `%s` unless the second parameter is specified. It is confusing and hinders static analysis.' => '두 번째 매개변수가 지정되지 않은 한 `%s`의 사용을 피하세요. 혼란을 야기하고 정적 분석을 방해합니다.',
  'Local branch "%s" has unpublished changes, ending updates.' => '로컬 브랜치 "%s"에 게시되지 않은 변경 사항이 있습니다, 업데이트를 마칩니다.',
  'Requested path \'%s\' is not a file.' => '요청된 경로 \'%s\'은(는) 파일이 아닙니다.',
  'No type name for token type ID \'%s\' in \'%s\' AAST.' => '\'%2$s\' AAST의 토큰 유형 ID \'%s\'에 유형 이름이 없습니다.',
  'Unable to convert URI "%s" into a standard URI because the path is relative. Standard URIs can not represent relative paths.' => 'URI "%s"을(를) 표준 URI로 변환할 수 없습니다. 경로가 상대적이 때문입니다. 표준 URI는 상대 경로를 나타낼 수 없습니다.',
  'it is the merge-base of \'%s\' and HEAD, as you just specified.' => '이는 방금 지정한 대로 \'%s\'와(과) HEAD의 병합 기준입니다.',
  'Aborted update of revision: You are not the owner.' => '판의 업데이트가 중단되었습니다: 당신은 소유자가 아닙니다.',
  'Empty user in credentials.' => '자격 증명에 사용자가 비었습니다.',
  'Union types are not available before PHP 8.0.' => '유니언 유형은 PHP 8.0 이전 버전에서는 사용할 수 없습니다.',
  'Convention: put a space after control statements.' => '명명 규칙: 제어문 뒤에 공백을 넣으세요.',
  'Unknown Mercurial capability "%s".' => '알 수 없는 Mercurial 기능 "%s".',
  'the repository has no commits.' => '저장소에 커밋이 없습니다.',
  'Command string argument includes text which is not valid UTF-8. This library can not safely escape this sequence in command line arguments in Windows environments.' => '명령 문자열 인수에 유효한 UTF-8이 아닌 텍스트가 포함되어 있습니다. 이 라이브러리는 윈도우 환경에서 명령줄 인수에 있는 이러한 시퀀스를 안전하게 이스케이프 처리할 수 없습니다.',
  'Expected \'%s\' divider line.' => '\'%s\' 구분선 줄을 예상했습니다.',
  '...and "%s" will be sent to Differential, because %s' => '...그리고 "%s"은(는) Differential으로 보내집니다, 이유: %s',
  'Supports: git, git/p4, git/svn, hg

Publish accepted revisions after review. This command is the last step in the
standard Differential code review workflow.

To publish changes in local branch or bookmark "feature1", you will usually
run this command:

  **$ arc land feature1**

This workflow merges and pushes changes associated with revisions that are
ancestors of __ref__. Without __ref__, the current working copy state will be
used. You can specify multiple __ref__ arguments to publish multiple changes at
once.

A __ref__ can be any symbol which identifies a commit: a branch name, a tag
name, a bookmark name, a topic name, a raw commit hash, a symbolic reference,
etc.

When you provide a __ref__, all unpublished changes which are present in
ancestors of that __ref__ will be selected for publishing. (With the
**--pick** flag, only the unpublished changes you directly reference will be
selected.)

For example, if you provide local branch "feature3" as a __ref__ argument, that
may also select the changes in "feature1" and "feature2" (if they are ancestors
of "feature3"). If you stack changes in a single local branch, all commits in
the stack may be selected.

The workflow merges unpublished changes reachable from __ref__ "into" some
intermediate branch, then pushes the combined state "onto" some destination
branch (or list of branches).

(In Mercurial, the "into" and "onto" branches may be bookmarks instead.)

In the most common case, there is only one "onto" branch (often "master" or
"default" or some similar branch) and the "into" branch is the same branch. For
example, it is common to merge local feature branch "feature1" into
"origin/master", then push it onto "origin/master".

The list of "onto" branches is selected by examining these sources in order:

  - the **--onto** flags;
  - the __arc.land.onto__ configuration setting;
  - (in Git) the upstream of the branch targeted by the land operation,
    recursively;
  - or by falling back to a standard default:
    - (in Git) "master";
    - (in Mercurial) "default".

The remote to push "onto" is selected by examining these sources in order:

  - the **--onto-remote** flag;
  - the __arc.land.onto-remote__ configuration setting;
  - (in Git) the upstream of the current branch, recursively;
  - (in Git) the special "p4" remote which indicates a repository has
    been synchronized with Perforce;
  - or by falling back to a standard default:
    - (in Git) "origin";
    - (in Mercurial) "default".

The branch to merge "into" is selected by examining these sources in order:

  - the **--into** flag;
  - the **--into-empty** flag;
  - or by falling back to the first "onto" branch.

The remote to merge "into" is selected by examining these sources in order:

  - the **--into-remote** flag;
  - the **--into-local** flag (which disables fetching before merging);
  - or by falling back to the "onto" remote.

After selecting remotes and branches, the commits which will land are printed.

With **--preview**, execution stops here, before the change is merged.

The "into" branch is fetched from the "into" remote (unless **--into-local** or
**--into-empty** are specified) and the changes are merged into the state in
the "into" branch according to the selected merge strategy.

The default merge strategy is "squash", which produces a single commit from
all local commits for each change. A different strategy can be selected with
the **--strategy** flag.

The resulting merged change will be given an up-to-date commit message
describing the final state of the revision in Differential.

With **--hold**, execution stops here, before the change is pushed.

The change is pushed onto all of the "onto" branches in the "onto" remote.

If you are landing multiple changes, they are normally all merged locally and
then all pushed in a single operation. Instead, you can merge and push them one
at a time with **--incremental**.

Under merge strategies which mutate history (including the default "squash"
strategy), local refs which descend from commits that were published are
now updated. For example, if you land "feature4", local branches "feature5" and
"feature6" may now be rebased on the published version of the change.

Once everything has been pushed, cleanup occurs. Consulting mystical sources of
power, the workflow makes a guess about what state you wanted to end up in
after the process finishes. The working copy is put into that state.

Any obsolete refs that point at commits which were published are deleted,
unless the **--keep-branches** flag is passed.' => '지원: git, git/p4, git/svn, hg

검토를 통과한 판을 게시합니다. 이 명령어는 표준 Differential 코드 검토 워크플로의 마지막 단계입니다.

로컬 브랜치 또는 책갈피 "feature1"의 변경 사항을 게시하려면 일반적으로 다음 명령어를 실행합니다.

  **$ arc land feature1**

이 워크플로는 __ref__의 조상인 판과 관련된 변경 사항을 병합하고 푸시합니다. __ref__를 지정하지 않으면 현재 작업 사본 상태가 사용됩니다. 여러 개의 __ref__ 인수를 지정하여 여러 변경 사항을 한 번에 게시할 수 있습니다.

__ref__는 커밋을 식별하는 모든 심볼일 수 있습니다: 브랜치 이름, 태그 이름, 책갈피 이름, 주제 이름, 원본 커밋 해시값, 심볼 참조 등입니다.

__ref__를 지정하면, 해당 __ref__의 조상들에 존재하는 모든 게시되지 않은 변경 사항이 게시 대상으로 선택됩니다. (**--pick** 플래그를 사용하면, 직접 참조한 게시되지 않은 변경 사항만 선택됩니다.)

예를 들어, 로컬 브랜치 "feature3"을 __ref__ 인수로 지정하면, "feature1"과 "feature2"의 변경 사항도 함께 선택될 수 있습니다(이들이 "feature3"의 조상인 경우). 단일 로컬 브랜치에 변경 사항을 스택으로 쌓은 경우, 스택에 포함된 모든 커밋이 선택될 수 있습니다.

이 워크플로는 __ref__에서 접근 가능한 게시되지 않은 변경 사항을 어떤 중간 브랜치로 "into" 병합한 다음, 병합된 상태를 어떤 대상 브랜치(또는 브랜치 목록)로 "onto" 푸시합니다.

(Mercurial에서는 "into" 및 "onto" 브랜치가 책갈피일 수도 있습니다.)

가장 일반적인 경우, "onto" 브랜치는 하나뿐이며(대개 "master"나 "default" 또는 이와 유사한 브랜치), "into" 브랜치도 동일한 브랜치입니다. 예를 들어, 로컬 기능 브랜치 "feature1"을 "origin/master"로 병합한 다음, 이를 "origin/master"로 푸시하는 것이 일반적입니다.

"onto" 브랜치 목록은 다음 소스들을 순서대로 검토하여 선택됩니다:

  - **--onto** 플래그
  - __arc.land.onto__ 구성 설정
  - (Git의 경우) 최종 반영 작업의 대상이 되는 브랜치의 업스트림 (재귀적으로)
  - 또는 표준 기본값으로 대체:
    - (Git의 경우) "master"
    - (Mercurial의 경우) "default"

"onto"로 푸시할 원격 저장소는 다음 소스들을 순서대로 검토하여 선택됩니다:

  - **--onto-remote** 플래그
  - __arc.land.onto-remote__ 구성 설정
  - (Git의 경우) 현재 브랜치의 업스트림 (재귀적으로)
  - (Git의 경우) 저장소가 Perforce와 동기화되었음을 나타내는 특수 "p4" 원격
  - 또는 표준 기본값으로 대체:
    - (Git의 경우) "origin"
    - (Mercurial의 경우) "default"

병합할 "into" 브랜치는 다음 소스들을 순서대로 검토하여 선택됩니다:

  - **--into** 플래그
  - **--into-empty** 플래그
  - 또는 첫 번째 "onto" 브랜치로 대체

병합할 "into" 원격 저장소는 다음 소스들을 순서대로 검토하여 선택됩니다:

  - **--into-remote** 플래그
  - **--into-local** 플래그(병합 전 가져오기를 비활성화함)
  - 또는 "onto" 원격 저장소로 대체

원격 저장소와 브랜치를 선택한 후, 병합될 커밋들이 출력됩니다.

**--preview**를 사용하면 변경 사항이 병합되기 전, 이 단계에서 실행이 중지됩니다.

"into" 브랜치는 "into" 원격 저장소에서 가져오며(**--into-local** 또는 **--into-empty**가 지정된 경우는 제외), 선택된 병합 전략에 따라 변경 사항이 "into" 브랜치의 상태에 병합됩니다.

기본 병합 방식은 "squash"이며, 이는 각 변경 사항에 대해 모든 로컬 커밋을 단일 커밋으로 통합합니다. **--strategy** 플래그를 사용하여 다른 방식을 선택할 수 있습니다.

결과적으로 병합된 변경 사항에는 Differential에서 판의 최종 상태를 설명하는 최신 커밋 메시지가 부여됩니다.

**--hold**를 사용하면 변경 사항이 푸시되기 전, 이 단계에서 실행이 중지됩니다.

변경 사항은 "onto" 원격 저장소의 모든 "onto" 브랜치로 푸시됩니다.

여러 변경 사항을 적용하는 경우, 일반적으로 모두 로컬에서 병합된 후 단일 작업으로 일괄 푸시됩니다. 대신 **--incremental**을 사용하여 한 번에 하나씩 병합하고 푸시할 수도 있습니다.

역사를 변경하는 병합 전략(기본 "squash" 전략 포함)을 사용할 경우, 게시된 커밋에서 파생된 로컬 참조가 이제 업데이트됩니다. 예를 들어, "feature4"를 적용하면 로컬 브랜치 "feature5"와 "feature6"이 게시된 변경 버전을 기준으로 리베이스될 수 있습니다.

모든 것이 푸시되면 정리 작업이 수행됩니다. 신비로운 힘의 원천을 참조하여, 워크플로는 프로세스가 완료된 후 사용자가 어떤 상태로 마무리하기를 원했는지 추측합니다. 작업 사본은 해당 상태로 전환됩니다.

**--keep-branches** 플래그가 전달되지 않는 한, 게시된 커밋을 가리키는 더 이상 사용되지 않는 참조는 삭제됩니다.',
  'You can not discard the result buffer while streaming results to disk: there is no in-memory buffer to discard.' => '결과를 디스크로 스트리밍하는 동안 결과 버퍼를 버릴 수 없습니다: 버릴 메모리 내 버퍼가 없습니다.',
  'Space Around Binary Operator' => '이진 연산자 주변 공백',
  'The branches you are landing are connected to multiple different remote branches via Git branch upstreams. Use "--onto" to select the refs you want to push to.' => '푸시하려는 브랜치는 Git 브랜치 업스트림을 통해 여러 원격 브랜치에 연결되어 있습니다. 푸시할 참조를 선택하려면 "--onto" 옵션을 사용하세요.',
  'Landing the current branch, "%s".' => '현재 브랜치인 "%s"을(를) 최종 반영합니다.',
  'You are amending the working copy using information from a revision that does not appear to be associated with the current state of the working copy.' => '현재 작업본의 상태와 연관이 없어 보이는 판의 정보를 사용하여 판을 수정하고 있습니다.',
  'Land changes that depend on %s open revision(s)?' => '열린 판 %s개에 의존하는 변경 사항을 최종 반영합니까?',
  'Confirms creation of a new library.' => '새 라이브러리 생성을 확인합니다.',
  'it is the merge-base of \'%s\' and HEAD, as specified in \'%s\' in \'%s\'. This setting overrides other settings.' => '이는 \'%3$s\'의 \'%2$s\'에 지정된 대로 \'%s\'과 HEAD의 병합 기준입니다. 이 설정은 다른 설정을 덮어씌웁니다.',
  'Failed to resolve symbol ref "%s".' => '심볼 ref "%s"을(를) 해결하는데 실패했습니다.',
  'Server' => '서버',
  '%s Value' => '%s 값',
  'Unable to sign Conduit request with signing key.' => '서명 키로 Conduit 요청에 서명할 수 없습니다.',
  'instance of %s' => '%s의 인스턴스',
  'URI' => 'URI',
  'Need head hashes or exact hashes!' => '헤드 해시값이나 정확한 해시값이 필요합니다!',
  '`%s` cannot be re-assigned. This construct will cause a PHP fatal error.' => '`%s`은(는) 재할당될 수 없습니다. 이 구조는 PHP에서 치명적인 오류를 발생시킵니다.',
  'Land %s revision(s) anyway, despite ongoing builds?' => '빌드가 진행중임에도 불구하고 %s개 판을 최종 반영합니까?',
  'Minimum ("%d") must not be greater than maximum ("%d").' => '최소값("%d")은 최대값("%d")을 초과할 수 없습니다.',
  'You must specify a Conduit URI with %s before you can establish a conduit.' => 'Conduit을 설정하려면 먼저 Conduit URI를 %s(으)로 지정해야 합니다.',
  'Rewrite this file?' => '이 파일을 다시 작성합니까?',
  'To log in and save credentials for this server, run this command:' => '이 서버에 로그인하고 자격 증명을 저장하려면 다음 명령을 실행하세요:',
  'Attempting to get subprocess status in "ExecFuture" with no valid subprocess.' => '유효한 하위 프로세스가 없어 "ExecFuture"에서 하위 프로세스 상태를 가져오려고 시도하는 중입니다.',
  'Command string argument includes a NULL byte. This byte can not be safely escaped in command line arguments in Linux environments.' => '명령 문자열 인수에 NULL 바이트가 포함되어 있습니다. Linux 환경에서는 이 NULL 바이트를 명령줄 인수에서 안전하게 이스케이프 처리할 수 없습니다.',
  'Array Style' => '배열 스타일',
  'There are %s commits reachable from the specified sources (%s) that are not present in the repository state you are merging into ("%s"). All of these commits will land:' => '지정한 소스(%2$s)에서 도달 가능하며 병합 대상 저장소 상태("%3$s")에 존재하지 않는 커밋이 %s개 있습니다. 다음의 모든 커밋이 최종 반영됩니다:',
  '**liberate**' => '**liberate**',
  'Unknown lint message!' => '린트 메시지를 알 수 없습니다!',
  'Default value for parameters with a bool type hint can only be true or false.' => '부울 유형 힌트가 있는 매개변수의 기본값은 참 또는 거짓만 가능합니다.',
  'Grid has no column "%s".' => '그리드에 열 "%s"이(가) 없습니다.',
  'The UUID for this working copy is "%s".' => '이 작업 사본에 대한 UUID는 "%s"입니다.',
  'Searching for libraries in the current working directory...' => '현재 작업 디렉터리에서 라이브러리를 검색하는 중...',
  'MATCHING REVISIONS' => '일치하는 판',
  'You can learn more about how this software handles character encodings (and how to configure encoding settings and detect and correct encoding problems) by reading \'User Guide: UTF-8 and Character Encoding\' in the documentation.' => '이 소프트웨어가 문자 인코딩을 처리하는 방식(인코딩 설정 구성 방법, 인코딩 문제 감지 및 수정 방법 포함)에 대한 자세한 내용은 설명문서의 \'사용자 가이드: UTF-8 및 문자 인코딩\'을 참조하세요.',
  'Command exited with nonzero error code.' => '명령이 0이 아닌 오류 코드와 함께 종료되었습니다.',
  'No unit test engine is configured for this project.' => '이 프로젝트를 위해 구성된 단위 엔진이 없습니다.',
  'When creating a revision, read revision information from this file.' => '판을 만들 때 이 파일로부터 판 정보를 읽어옵니다.',
  'Invalid octal numeric scalar. `%s` is not a valid octal and will be interpreted as `%d`.' => '유효하지 않은 8진수 숫자 스칼라입니다. `%s`은(는) 유효한 8진수가 아니므로 `%d`(으)로 해석됩니다.',
  'SHELL ALIAS' => '셸 별칭',
  'Questionable Use of `%s`' => '의문스러운 `%s` 사용',
  'Data parameter must be an array or string.' => '데이터 매개변수는 배열 또는 문자열이어야 합니다.',
  'Resuming work on revision:' => '판에서의 일 재개:',
  'Only agent actions may be added to a plan.' => '계획에는 에이전트 작업만 추가될 수 있습니다.',
  'Assertion of caught exception failed (at %s:%d).' => '포착된 예외에 대한 단언문이 실패했습니다 (%s:%d에서).',
  'NEW DIFFERENTIAL REVISION' => '새로운 Differential 판',
  'Argument' => '인수',
  '%s line(s)' => '줄',
  'Error in parsing \'%s\' file.' => '\'%s\' 파일의 구문 분석 중 오류가 있었습니다.',
  'Trying rules from source \'%s\'.' => '소스 \'%s\'에서 규칙을 시도합니다.',
  'After creating a diff or revision, open it in a web browser.' => '차이나 판을 만든 이후 웹 브라우저에서 엽니다.',
  'Missing required "--" in argument list.' => '인수 목록에 필수 "--"가 누락되었습니다.',
  'Generate diff by executing a specified command, not from the working copy. This disables many features which depend on having access to the working copy.' => '작업 사본이 아닌 지정된 명령을 실행하여 차이를 생성합니다. 이렇게 하면 작업 사본에 접근해야 하는 여러 기능이 비활성화됩니다.',
  'Only show tasks that are not assigned (upforgrabs).' => '할당되지 않은 태스크(upforgrabs/담당자 모집 중)만 표시합니다.',
  'Do you want to amend these %s change(s) to the current commit?' => array(
    '이 변경 사항을 현재 커밋에 어멘드합니까?',
    '이 변경 사항들을 현재 커밋에 어멘드합니까?',
  ),
  'You have missing files in this working copy. Revert or formally remove them (with `%s`) before proceeding.' => '이 작업 사본에 누락된 파일이 있습니다. 계속 진행하기 전에 (`%s`(으)로) 해당 파일을 되돌리거나 공식적으로 제거하세요.',
  'USAGE' => '사용법',
  'LOGIN REQUIRED' => '로그인 필요',
  'Class contains %s %s method(s) and must therefore be declared `%s`.' => '클래스에는 %s %s 메서드가 포함되어 있으므로 `%s`(으)로 선언되어야 합니다.',
  'Rule \'%s\' popped off the last state.' => '규칙 \'%s\'이(가) 마지막 상태를 pop했습니다!',
  'ALREADY A DRAFT' => '이미 초안임',
  'Command killed by timeout after running for more than %s seconds.' => '명령이 %s초 이상 실행된 후 시간 초과로 종료되었습니다.',
  'Pass in custom dictionaries.' => '사용자 지정 딕셔너리를 전달합니다.',
  'Linter \'%s\' specifies invalid type \'%s\'. Available linters are: %s.' => '린터 \'%s\'이(가) 유효하지 않은 유형 \'%s\'을(를) 지정합니다. 유효한 린터: %s.',
  'Configure your editor to use spaces for indentation.' => '편집기에서 들여쓰기에 공백을 사용하도록 구성합니다.',
  'AMBIGUOUS REVISION' => '모호한 판',
  'Query matched multiple refs, expected zero or one.' => '쿼리에서 여러 개의 ref가 일치했습니다. 0개 또는 1개를 예상했습니다.',
  'Unexpected return value from calls to "%s(...)". More than one object returned a value with unique key "%s". This key was returned by objects with indexes: %s.' => '"%s(...)" 호출에서 예상치 못한 반환 값이 발생했습니다. 둘 이상의 객체가 고유 키 "%s"을(를) 가진 값을 반환했습니다. 이 키는 다음 인덱스의 객체에서 반환되었습니다: %s.',
  'Generate a diff (with just local changes) anyway?' => '그래도 차이(로컬 변경 사항만 포함)를 생성합니까?',
  'Editor exited with an error code (#%d).' => '편집기가 오류 코드 (#%d)(으)로 종료되었습니다.',
  'Use of Deprecated Function' => '구식 함수의 사용',
  'Type of setting \'%s\' must be list. You can specify a list in JSON, like: %s' => '\'%s\' 설정의 유형은 목록이어야 합니다. JSON으로 목록을 지정할 수 있습니다. 예: %s',
  'Detect syntax errors in JSON files.' => 'JSON 파일의 구문 오류를 감지합니다.',
  'Unexpected "%s" section in property deletion.' => '속성 삭제에 예상치 못한 섹션 "%s".',
  'You are using "--hold", so execution will stop before the %s bookmark(s) are actually created. You will be given instructions to create the bookmarks.' => '"--hold" 옵션을 사용하고 있으므로 북마크가 실제로 생성되기 전에 실행이 중단됩니다. 북마크를 생성하는 방법에 대한 지침이 제공될 것입니다.',
  '`%s` properties should be avoided. Instead of exposing the property value directly, consider using getter and setter methods.' => '`%s` 속성은 피해야 합니다. 속성 값을 직접 노출하는 대신, getter 및 setter 메서드를 사용하는 것을 고려하세요.',
  'In Preparation' => '준비 중',
  'Unable to parse byte size \'%s\'!' => '바이트 크기 \'%s\'을(를) 구문 분석할 수 없습니다!',
  'No task "%s" exists, or you do not have permission to view it.' => '태스크 "%s"이(가) 존재하지 않거나 볼 권한이 없습니다.',
  'You are updating a revision ("%s") with the "--draft" flag, but this revision is already a draft. You only need to provide the "--draft" flag when creating a revision. Draft revisions are not published until you explicitly request review from the web UI.' => '"--draft" 플래그를 사용하여 판(" %s ")을 업데이트하려고 하지만, 이 판은 이미 초안 상태입니다. "--draft" 플래그는 판을 생성할 때만 사용해야 합니다. 초안 판은 웹 UI에서 명시적으로 검토를 요청하기 전까지는 게시되지 않습니다.',
  'Synchronizing "%s" from Perforce...' => 'Perforce로부터 "%s" 동기화 중...',
  'Failed to write response to disk. (Maybe the disk is full?)' => '응답을 디스크에 작성하는 데 실패했습니다. (디스크 용량이 가득 찼을 수 있습니다)',
  'Expected Open Tag' => '시작 태그 예상됨',
  'Remain in the foreground instead of daemonizing.' => '데몬화 대신 포그라운드에 머무릅니다.',
  'Unable to determine revision for commit "%s".' => '커밋 "%s"에 대한 판을 결정할 수 없습니다.',
  'Updating to the revision\'s base commit' => '핀의 기본 커밋으로 업데이트 중',
  'You can not specify paths with %s. The %s flag lints every tracked file in the working copy.' => '%s(으)로 경로를 지정할 수 없습니다. %s 플래그는 작업 사본에서 추적되는 모든 파일을 린트합니다.',
  'Expected a non-null return from call to "%s->saveStash()".' => '"%s >saveStash()" 호출에서 null이 아닌 반환값이 예상되었습니다.',
  'Detecting current shell...' => '현재 셸 감지 중...',
  'There was an error negotiating the SSL connection. This usually indicates that the remote host has a bad SSL certificate, or your local host has some sort of SSL misconfiguration which prevents it from accepting the CA. If you are using a self-signed certificate, see instructions in "%s".' => 'SSL 연결 협상 중 오류가 발생했습니다. 이는 일반적으로 원격 호스트의 SSL 인증서가 잘못되었거나 로컬 호스트에 CA를 수락하지 못하도록 하는 SSL 구성 오류가 있음을 나타냅니다. 자체 서명 인증서를 사용하는 경우 "%s"의 지침을 참조하세요.',
  'OpenSSL encountered an error verifying the request signature: %s' => 'OpenSSL에서 요청 서명을 확인하는 중 오류가 발생했습니다: %s',
  'Flags "--all" and "--builtins" are not compatible.' => '플래그 "--all"과 "--builtins"는 호환되지 않습니다.',
  'Default value for parameters with bool type hint can only be true or false.' => '부울 유형 힌트가 있는 매개변수의 기본값은 참 또는 거짓만 가능합니다.',
  'Unable to parse path as PHAR file. PHAR file paths must include a segment with one of these extensions (case-sensitive): %s' => '경로를 PHAR 파일로 구문 분석할 수 없습니다. PHAR 파일 경로는 다음 확장자 중 하나를 포함하는 세그먼트를 반드시 포함해야 합니다(대소문자 구분): %s',
  'LINT OKAY' => '린트 정상',
  'This file contains leading whitespace at the beginning of the file. This is unnecessary and should be avoided when possible.' => '이 파일에는 파일 시작 부분에 불필요한 공백이 포함되어 있습니다. 이는 가능한 한 피해야 합니다.',
  'Severity rule "%s" is not a valid regular expression.' => '심각도 규칙 "%s"은(는) 유효한 정규 표현식이 아닙니다.',
  'This test is expected to skip.' => '이 테스트는 건너뛸 것으로 예측됩니다.',
  'Flag "--browse" is not supported when reading pastes. Use "arc browse" to browse known objects.' => '붙여넣기를 읽을 때는 플래그 "--browse"가 지원되지 않습니다. 알려진 객체를 탐색하려면 "arc browse"를 사용하세요.',
  'After the upload completes, open the files in a web browser.' => '업로드가 완료되면 웹 브라우저에서 파일을 엽니다.',
  '`%s` has limited support for features introduced after PHP 5.2.3. This library uses an unsupported feature (%s) on line %d of %s.' => '`%s`은(는) PHP 5.2.3 이후 도입된 기능을 제한적으로 지원합니다. 이 라이브러리는 %4$s의 %3$d줄에서 지원되지 않는 기능(%s)을 사용합니다.',
  'Fetch of "%s" from remote "%s" failed! Fix the error and run "arc land" again.' => '원격 "%2$s"에서 "%s"을(를) 가져오는데 실패했습니다! 오류를 수정하고 "arc land"를 다시 실행하세요.',
  'Shell completion for "%s" is already installed.' => '"%s"에 대한 셸 자동 완성 기능은 이미 설치되었습니다.',
  '[%s] Working...' => '[%s] 작업 중...',
  'There is no locale with the locale code "%s".' => '로케일 코드 "%s"을(를) 가진 로케일이 없습니다.',
  'Python PyFlakes' => '파이썬 PyFlakes',
  'namespaces' => '이름공간',
  'Default value for parameters with a union type hint can only be a value of one of its types.' => '유니온 유형 힌트가 있는 매개변수의 기본값은 그 유형 중 하나의 값만 가능합니다.',
  'Argument unpacking is not available before PHP 5.6.' => '인수 언패킹은 PHP 5.6 이전 버전에서는 사용할 수 없습니다.',
  'Create and modify command aliases.' => '명령 별칭을 만들고 수정합니다.',
  'Use PHP-parser for parsing instead of XHPAST.' => '구문 분석에 XHPAST 대신 PHP-Parser를 사용합니다.',
  'Default value for parameters with an iterable type hint can only be an instantation of an iterable type or an array.' => 'iterable 유형 힌트가 있는 매개변수의 기본값은 iterable 유형의 인스턴스나 배열만 가능합니다.',
  'Default value for parameters with an object type hint can only be an instantation of an object.' => '객체 유형 힌트가 있는 매개변수의 기본값은 객체의 인스턴스만 가능합니다.',
  'it is the merge-base of \'%s\' and HEAD, as specified by \'%s\' in your %s \'base\' configuration.' => '이는 \'%s\'와(과) HEAD의 병합 기준이며, %3$s \'base\' 구성의 \'%s\'에 지정되어 있는 것입니다.',
  'The specified commit range is empty, backward or invalid: the base (%s) is not an ancestor of the head (%s). You can not diff an empty or reversed commit range.' => '지정된 커밋 범위가 비어 있거나, 역순이거나, 유효하지 않습니다: 기준(%s)이 헤드(%s)의 조상이 아닙니다. 비어 있거나 역순으로 정렬된 커밋 범위는 차이를 만들 수 없습니다.',
  'The directory "%s" does not exist. Do you want to create it?' => '디렉터리 "%s"이(가) 존재하지 않습니다. 만들겠습니까?',
  'JSON command \'%s\' emitted text to stderr when none was expected: %d' => 'JSON 명령 \'%s\'이(가) 예상치 않게 stderr에 텍스트를 출력했습니다: %d',
  'You are running an old version of %s. Please upgrade to version %s.' => '현재 구버전인 %s을(를) 사용 중입니다. 버전 %s(으)로 업그레이드하세요.',
  'Unexpected field count when parsing line "%s", got %s but expected %s.' => '"%s" 줄을 구문 분석하는 동안 예상치 않은 필드 개수를 받았습니다. %3$s개를 예상했지만 %s개를 받았습니다.',
  'Failed closing file \'%s\' after write.' => '쓰기 작업 후 파일 \'%s\'을(를) 닫는 데 실패했습니다.',
  'Unexpected output from "hg log ...": %s' => '"hg log ..."로부터 예상치 못한 출력: %s',
  'Specify exactly one path!' => '정확히 하나의 경로만 지정하세요!',
  'The null coalescing assignment operator was not introduced until PHP 7.4, but this codebase targets an earlier version of PHP.' => '널 병합 할당 연산자는 PHP 7.4부터 도입되었지만, 이 코드베이스는 이전 버전의 PHP를 대상으로 합니다.',
  'Since there are no revisions in Differential which match this working copy, a new revision will be **created** if you run \'%s\'.

' => 'Differential에 이 작업 사본과 일치하는 판이 없기 때문에, \'%s\'을(를) 실행하면 새 판이 **생성**됩니다.',
  '<... %s more commits ...>' => '<... %s개의 더 많은 커밋 ...>',
  '%s does affect revisions.' => '%s은(는) 판에 영향을 미칩니다.',
  'Use `%s` to call parent method.' => '상위 메서드를 호출하기 위해 `%s`을(를) 사용하세요.',
  'Empty File' => '빈 파일',
  'Expected exactly one argument to "working-copy(...)" with a commit hash.' => '"working-copy(...)"에 정확히 인수(커밋 해시값)가 하나 주어지는 것을 예상했습니다.',
  '**download** [__options__] -- __file__' => '**download** [__옵션__] -- __파일__',
  '%s (%s)' => '%s (%s)',
  'Install Cppcheck using `%s` or similar.' => '`%s` 또는 이와 유사한 방법으로 Cppcheck를 설치하세요.',
  'Server exited unexpectedly!' => '서버가 예기치 않게 종료되었습니다!',
  'Unexpected \'%s\' in state %s! Expected: %s' => '상태 %2$s에 예상치 못한 \'%s\'! 예상됨: %3$s',
  'This is not a container action.' => '이것은 컨테이너 작업이 아닙니다.',
  '(Message saved to %s.)' => '(메시지를 %s에 저장했습니다.)',
  'INTERRUPT' => '중단됨',
  'You must call %s before you can call %s.' => '%2$s을(를) 호출하기 전에 %s을(를) 호출해야 합니다.',
  'String value is not valid UTF8, and can not be JSON encoded: %s' => '문자열 값이 유효한 UTF8이 아니므로, JSON으로 인코딩될 수 없습니다: %s',
  'No workflow selected.' => '선택된 워크플로가 없습니다.',
  'Specify the end of the commit range to select.' => '선택할 커밋 범위의 끝을 지정합니다.',
  'Class constant visibility is not available before PHP 7.1.' => '클래스 상수 가시성은 PHP 7.1 이전 버전에서는 사용할 수 없습니다.',
  'Unable to open stdout temporary file ("%s") for reading.' => 'stdout 임시 파일("%s")을 읽기를 위해 열 수 없습니다.',
  'Show internal object information.' => '내부 객체 정보를 표시합니다',
  'Configured command aliases. Use "arc alias" to define aliases.' => '구성된 명령 별칭입니다. 별칭을 정의하려면 "arc alias"를 사용하세요.',
  'This function exists only to document the call signature for %s callbacks.' => '이 함수는 %s 콜백의 호출 서명을 문서화하기 위해서만 존재합니다.',
  'Changes:' => '변경 사항:',
  '(To ignore these %s change(s), add them to "%s".)' => array(
    '(이 변경 사항을 무시하려면 "%2$s"에 추가하세요.)',
    '(이 변경 사항들을을 무시하려면 "%2$s"에 추가하세요.)',
  ),
  'Amend the working copy, synchronizing the local commit message from
Differential.

Supported in Mercurial 2.2 and newer.' => '작업 사본을 어멘드해서 Differential의 로컬 커밋 메시지를 동기화합니다.

Mercurial 2.2 이상에서 지원됩니다.',
  '<listeners = %s>' => '<listeners = %s>',
  'Pass' => '통과',
  'Some commits reachable from the specified sources (%s) are not associated with revisions, and may not have been reviewed. These commits will be landed as though they belong to the nearest ancestor revision:' => '지정된 소스(%s)에서 도달 가능한 일부 커밋은 판과 연결되어 있지 않아 검토되지 않았을 수 있습니다. 이 커밋들은 가장 가까운 조상 판에 속한 것처럼 최종 반영됩니다:',
  'Required executable "%s" is not available.' => '요구되는 실행 가능 "%s"이(가) 사용 가능하지 않습니다.',
  '**inspect** [__options__] -- __object__' => '**inspect** [__옵션__] -- __객체__',
  'File "%s" already exists.' => '"%s" 파일이 이미 존재합니다.',
  'IMPLICIT COMMITS' => '암시적 커밋',
  'Night has fallen. The moon overhead is waning. You can barely make out your surroundings. It is very cold.' => '밤이 찾아왔습니다. 오버헤드의 달은 점점 기울고 있습니다. 주변이 거의 보이지 않습니다. 몹시 춥습니다.',
  'If you intended to create a new revision, use:' => '새 판을 생성하려면 다음을 사용하세요:',
  'APPLIED' => '적용됨',
  'Repeatable arguments may not have a default (always array() for arguments which accept a parameter, or 0 for arguments which do not).' => '반복 가능한 인수는 기본값을 가질 수 없습니다(매개변수를 받는 인수의 경우 항상 array()이고, 매개변수를 받지 않는 인수의 경우 0입니다).',
  'Land a specific revision, rather than determining revisions automatically from the commits that are landing.' => '최종 반영되는 커밋에서 판을 자동으로 결정하는 대신 특정 판을 최종 반영합니다.',
  'You can not define an alias for "%s" because it is a builtin workflow for the current toolset ("%s"). The "alias" workflow can only define new commands as aliases; it can not redefine existing commands to mean something else.' => '"%s"은(는) 현재 toolset("%s")의 내장 워크플로이므로 별칭을 정의할 수 없습니다. "alias" 워크플로는 새 명령을 별칭으로 정의하는 것만 가능하며, 기존 명령의 의미를 다른 것으로 재정의할 수는 없습니다.',
  'Upgrade arc now?' => '지금 arc를 업그레이드하시겠습니까?',
  'Refs were selected by reading "%s" configuration: %s.' => 'Ref가 "%s" 구성을 읽음으로써 선택되었습니다: %s.',
  'This working copy is not associated with any repository.' => '이 작업 사본은 어느 저장소와도 연관되어있지 않습니다.',
  'Default value for parameters with `%s` type hint can only be an `%s` or `%s`.' => '`%s` 유형 힌트가 있는 매개변수의 기본값은 `%s` 또는 `%s`만 가능합니다.',
  'Show an enhanced view of branches in the working copy.' => '작업 사본 내의 브랜치의 향상된 보기를 표시합니다.',
  'Constant expressions were not introduced until PHP 5.6, but this codebase targets an earlier version of PHP.' => '상수 표현식은 PHP 5.6부터 도입되었지만, 이 코드베이스는 이전 버전의 PHP를 대상으로 합니다.',
  'Unnecessary comma in list assignment.' => '리스트 할당에 불필요한 쉼표가 있습니다.',
  'Argument should be countable.' => '인수의 갯수는 셀 수 있어야 합니다.',
  'Internal. Current term in the argument list being completed.' => '내부적입니다. 현재 인자 목록의 항이 완료되고 있습니다.',
  'Land %s revision(s) anyway, despite failed builds?' => '빌드가 실패했음에도 불구하고 %s개 판을 최종 반영합니까?',
  '%s: %s' => '%s: %s',
  'Successfully applied patch.' => '성공적으로 패치를 적용했습니다.',
  'JSON command \'%s\' did not produce a valid JSON object on stdout: %s' => 'JSON 명령 \'%s\'이(가) stdout에 유효한 JSON 객체를 생성하지 못했습니다: %s',
  'Updated an existing Differential revision:' => '기존 Differential 판을 업데이트했습니다:',
  'Provide exactly one library root!' => '정확히 하나의 라이브러리 루트를 제공하세요!',
  'Support for the class constant `%s` was not introduced until PHP 5.5 but this codebase targets an earlier version of PHP. You can rewrite this expression using the class name as a string directly.' => '클래스 상수 `%s` 에 대한 지원은 PHP 5.5부터 도입되었지만, 이 코드베이스는 이전 버전의 PHP를 대상으로 합니다. 클래스 이름을 문자열로 직접 사용하여 이 표현식을 다시 작성할 수 있습니다:',
  'This command needs to communicate with a server, but no server URI is configured.' => '이 명령은 서버와 통신해야 하지만, 서버 URI가 구성되어 있지 않습니다.',
  'Use `%s` to perform static analysis on C/C++ code.' => '`%s` 을 사용하여 C/C++ 코드에 대한 정적 분석을 수행하세요.',
  '%s requires a revision number.' => '%s에는 판 번호가 필요합니다.',
  'Parent Member Reference' => '상위 멤버 참조',
  'Linter %s requires %s version %s. You have version %s.' => '린터 %s은(는) %s의 버전 %s이(가) 필요합니다. 현재 버전은 %s 입니다.',
  'Convention: space after `%s` token.' => '명명 규칙: `%s` 토큰 뒤에 공백을 넣으세요.',
  'Default value for parameters with an int type hint can only be an integer.' => 'int 유형 힌트가 있는 매개변수의 기본값은 정수만 가능합니다.',
  'RETURN' => '반환',
  'The version control system ("%s") in the current working copy does not support branches.' => '현재 작업 사본의 버전 관리 시스템("%s")은 브랜치를 지원하지 않습니다.',
  'Working Copy: Unable to find %s in any of these locations: %s.' => '작업 사본: 다음 위치에서 %s을(를) 찾을 수 없습니다: %s.',
  'Do not run unit tests.' => '단위 시험을 수행하지 않습니다.',
  'Updated %s librarie(s).' => '라이브러리 %s개가 업데이트 되었습니다.',
  'Default value for parameters with an array type hint can only be an array.' => '배열 유형 힌트가 있는 매개변수의 기본값은 배열만 가능합니다.',
  'Unexpected tokens whilst processing `%s`.' => '`%s`을(를) 처리 중에 예상치 못한 토큰.',
  'Failed to overwrite file.' => '파일을 덮어쓰는데 실패했습니다.',
  'Chinese (Traditional)' => '중국어(정체)',
  'Keyword Conventions' => '키워드 명명 규칙',
  'This large diff requires more space than it is allowed to use (limited to %s bytes; needs more than %s bytes).' => '이 큰 차이는 허용된 공간보다 더 많은 공간을 필요로 합니다 ( %s바이트로 제한됨, %s바이트가 더 필요).',
  'Expected vs Actual Output Diff
%s' => '예상 출력 vs 실제 출력 차이
%s',
  'The locale "%s" has an invalid fallback locale code ("%s"). No locale class exists which defines this locale.' => '로케일 "%s"에 유효하지 않은 폴백 로케일 코드("%s")가 있습니다. 이 로케일을 정의하는 로케일 클래스가 존재하지 않습니다.',
  'Only the function "viewer()" is supported.' => '"viewer()" 함수만 지원됩니다.',
  'WORKFLOWS' => '워크플로',
  'CLOSE' => '닫기',
  'Use of Echo Tag `%s`' => '에코 태그 `%s`의 사용',
  'Create this file?' => '이 파일을 만듭니까?',
  'Listening' => '리스닝',
  'Feb' => '2월',
  'Symbol "%s" is ambiguous.' => '심볼 "%s"은(는) 모호합니다.',
  'Inner Functions' => '내부 함수',
  'This is slower than the default behavior and not atomic, but may make it easier to resolve conflicts and land complicated changes by allowing you to make progress one step at a time.' => '이 방법은 기본 동작보다 느리고 원자적이지는 않지만, 단계적으로 진행할 수 있도록 하여 충돌을 해결하고 복잡한 변경 사항을 최종 반영하는 데 도움이 될 수 있습니다.',
  '`%s` Used as Expression' => '`%s` 표현식으로 사용됨',
  'More than one marker in the local working copy is associated with the revision "%s", using the most recent one.' => '로컬 작업 사본에 있는 둘 이상의 마커가 가장 최근의 판 "%s"와(과) 연관되어 있습니다.',
  'Arguments \'%s\' and \'%s\' are mutually exclusive' => '인수 \'%s\'와(과) \'%s\'은(는) 같이 사용할 수 없습니다',
  'Take control of a probe launched from the science vessel "Arcanoid".' => '과학선 "Arcanoid"에서 발사된 탐사기를 제어합니다.',
  'OpenSSL encountered an unknown error verifying the request: %s' => 'OpenSSL이 요청을 확인하는 중 알 수 없는 오류가 발생했습니다: %s',
  'Install pyflakes with `%s`.' => '`%s`을(를) 사용해 RuboCop를 설치합니다.',
  '%s WORKFLOW' => '%s 워크플로',
  'Trying to get change for unchanged path \'%s\'!' => '변경되지 않은 경로 \'%s\'에 대한 변경 사항을 가져오려고 합니다!',
  'No staging area is configured for this repository.' => '이 저장소에 대해 구성된 스테이징 영역이 없습니다.',
  'namespace `%s` statements' => '이름공간 `%s`문',
  'Message to Mercurial server should be an array.' => 'Mercurial 서버로의 메시지는 배열이어야 합니다.',
  'Merge using a particular strategy. Supported strategies are "squash" and "merge".' => '특정 방식을 사용하여 병합합니다. 지원되는 방식은 "squash"와 "merge"입니다.',
  'When calling "implode()", pass the "glue" argument first. (The other parameter order is deprecated in PHP 7.4 and raises a warning.)' => '"implode()"를 호출할 때 "glue" 인수를 먼저 전달하세요. (다른 매개변수 순서는 PHP 7.4에서 구식이 되었으며 경고를 발생시킵니다.)',
  'CIDR block "%s" is not formatted correctly. The IP block mask ("%s") must not have leading zeroes.' => 'CIDR 블록 "%s"의 형식이 올바르지 않습니다. IP 블록 마스크("%s")에는 앞에 0이 없어야 합니다.',
  'Parameter passed to "%s" must be an integer.' => '"%s"에 전달된 매개변수는 정수이어야 합니다.',
  'Repository for the current working copy.' => '현재 작업 사본에 대한 저장소입니다.',
  'The test was not executed.' => '테스트가 실행되지 않았습니다.',
  'Downloading authentication certificate...' => '인증 자격 증명 다운로드 중...',
  'Submit failed! Fix the error and run "arc land" again.' => '제출에 실패했습니다! 오류를 수정하고 "arc land"를 다시 실행하세요.',
  'Specify setData() or setPath() when building a file data reference.' => '파일 데이터 참조를 빌드할 때 setData() 또는 setPath()를 지정하세요.',
  'Included commits:' => '포함된 커밋:',
  'Unable to upload file data: %s' => '파일 데이터를 업로드할 수 없습니다: %s',
  'Use `%s` to check that your Puppet manifests conform to the style guide.' => 'Puppet manifest가 스타일 가이드를 따르는지 확인하려면 `%s`을(를) 사용하세요.',
  'Restoring local state (to ref "%s" at commit "%s").' => '로컬 상태를 복구합니다 (커밋 "%2$s"의 ref "%s"(으)로).',
  '**land** [__options__] -- [__ref__ ...]' => '**land** [__옵션__] -- [__ref__ ...]',
  'Workflow ("%s") is requesting a prompt ("%s") but it did not generate any prompt with that name in "newPrompts()".' => '워크플로("%s")는 프롬프트("%s")를 요청하고 있지만, "newPrompts()"에서 해당 이름으로 프롬프트를 생성하지 않았습니다.',
  'Dictionary value at key "%s" is not valid UTF8, and cannot be JSON encoded: %s' => '"%s" 딕셔너리 키는 유효한 UTF8이 아니므로 JSON 인코딩을 할 수 없습니다: %s',
  'Will merge into target "%s" by default, because this is the "onto" target.' => '이것이 "onto" 대상이므로 기본적으로 대상 "%s"에 병합됩니다.',
  'Expected value to be a list of objects which are instances of "%s", but item with index "%s" is "%s".' => '예상되는 값은 "%s" 인스턴스인 객체들의 목록이지만, 인덱스 "%s"에 있는 항목은 "%s"입니다.',
  'Show detailed information, including options.' => '옵션을 포함한 세부 정보를 표시합니다.',
  'Save the file to a specific location.' => '파일을 특정 위치에 저장합니다.',
  'committed' => '커밋했습니다',
  'Lowercase Functions' => '소문자 함수',
  'In order to provide replacements for nodes, the original token stream is required.' => '노드에 대한 교체 항목을 제공하려면 원본 토큰 스트림이 필요합니다.',
  'Some terminals do not appear in any rule: %s' => '일부 터미널이 아무 규칙에서도 나타나지 않습니다: %s',
  'Convention: no spaces before index access.' => '명명 규칙: 인덱스 접근 앞에 공백을 두지 마세요.',
  'The `%s` type hint is not available before PHP 8.1.' => '`%s` 유형 힌트는 PHP 8.1 이전 버전에서는 사용할 수 없습니다.',
  '< ... %s more commits ... >' => '< ... %s개의 더 많은 커밋 ... >',
  'M j Y' => 'M j Y',
  'The "upgrade" workflow uses "git pull" to upgrade, but the software directory (in "%s") is not a Git working copy. You must leave this directory as a Git working copy to use "arc upgrade".' => '"upgrade" 워크플로는 "git pull"을 사용하여 업그레이드하지만, 소프트웨어 디렉터리("%s")는 Git 작업 복사본이 아닙니다. "arc upgrade"를 사용하려면 이 디렉터리를 Git 작업 복사본으로 유지해야 합니다.',
  'You\'re covered, you didn\'t change anything.' => '문제 없습니다. 변경한 내용이 없습니다.',
  'Linting...' => '린트 처리 중...',
  'Duplicate Keys in Array' => '배열의 중복 키',
  'RuboCop is a Ruby static code analyzer, based on the community Ruby style guide.' => 'RuboCop은 커뮤니티 Ruby 스타일 가이드를 기반으로 하는 Ruby 정적 코드 분석기입니다.',
  'Class member access on instantiation without parentheses was not introduced until PHP 8.4, but this codebase targets an earlier version of PHP.' => '괄호 없이 인스턴스화 시 클래스 멤버에 접근하는 것은 PHP 8.4부터 도입되었지만, 이 코드베이스는 이전 버전의 PHP를 대상으로 합니다.',
  'Created a new Differential diff:' => '새로운 Differential 차이를 만듭니다:',
  'You may now push this commit upstream, as appropriate (e.g. with \'%s\', or \'%s\', or by printing and faxing it).' => '이제 적절히 이 커밋을 업스트림으로 푸시할 수 있습니다(예: \'%s\' 또는 \'%s\', 또는 출력해서 팩스로 보내기).',
  'Show this help.' => '이 도움말을 표시합니다.',
  'a node of type %s: "%s"' => '유형 %s의 노드: "%s"',
  'Commit Symbol "%s"' => '커밋 심볼 "%s"',
  'Failed to unpack data.' => '데이터 언팩에 실패했습니다.',
  'Future has not yet resolved. Resolve futures before retrieving results.' => '퓨처가 아직 해결되지 않았습니다. 결과를 검색하기 전에 퓨처를 해결하세요.',
  'This codebase targets PHP %s, but parameter %d of `%s()` was not introduced until PHP %s.' => '이 코드베이스는 PHP %s을(를) 대상으로 하지만 `%3$s()`의 매개변수 %d은(는) PHP %4$s 까지 도입되지 않았습니다.',
  'List Style' => '목록 스타일',
  'It is not possible to throw an `%s` from within the `%s` method.' => '`%2$s` 메서드 안에서는 `%s`을 발생시킬 수 없습니다.',
  'Show tasks that are open or closed, default is open.' => '열린 또는 닫힌 태스크를 표시합니다, 기본값은 \'열린\'입니다.',
  'For consistency, write binary integers with a leading `%s`.' => '일관성을 위해 바이너리 정수는 앞에 `%s`을(를) 붙여 작성하세요.',
  'Streaming reads are not currently supported by the streaming parser.' => '스트리밍 읽기는 현재 스트리밍 파서에서 지원되지 않습니다.',
  'acquire and hold a lockfile' => '잠금 파일을 획득 및 유지',
  'Review' => '검토',
  '%s lints all files' => '%s 모든 파일 린트하기',
  'No working copy to write config to!' => '구성을 쓸 작업 사본이 없습니다!',
  'Print base commit only and exit.' => '기본 커밋만을 출력하고 종료합니다.',
  'For details on available commands, run "%s".' => '사용 가능한 명령에 대한 자세한 내용을 보려면 "%s"을(를) 실행하세요.',
  'Done.' => '완료.',
  'Parentheses should hug their contents.' => '괄호는 그 내용을 감싸야 합니다.',
  'This codebase targets PHP %s, but `%s()` was not introduced until PHP %s.' => '이 코드베이스는 PHP %s을(를) 대상으로 하지만 `%s()`은(는) PHP %s까지 도입되지 않았습니다.',
  'Remote "%s" has no bookmark or branch named "%s".' => '원격 "%s"에 "%s"(이)라는 이름의 책갈피나 브랜치가 없습니다.',
  'Unable to install signal handler, pcntl_signal() unavailable. Continuing without signal handling.' => '신호 핸들러를 설치할 수 없습니다, pcntl_signal()을 사용할 수 없습니다. 신호 처리 없이 계속합니다.',
  'Argument "--branch" for "arc browse" is not available in your software version control. For example, in SVN, a branch is just a directory with a special meaning for your team. Please omit the "--branch" argument.' => '"arc browse"의 인수 "--branch"는 사용 중인 버전 관리 시스템에서 사용할 수 없습니다. 예를 들어 SVN에서 브랜치는 팀에 특별한 의미를 갖는 디렉터리일 뿐입니다. "--branch" 인수를 생략하세요.',
  'you have no outgoing commits, so arc assumes you intend to submit uncommitted changes in the working copy.' => 'outgoing 커밋이 없으므로, arc는 작업 사본의 커밋되지 않은 변경 사항을 제출하려는 것으로 간주합니다.',
  'No viable means to download PHP-parser is available.' => 'PHP-parser를 다운로드할 수 있는 적절한 수단이 없습니다.',
  'UPGRADING' => '업그레이드 중',
  'Generating shell completion rules...' => '셸 완료 규칙을 생성 중...',
  'Argument must be scalar or object which implements %s!' => '인수는 스칼라거나 %s을(를) 구현하는 객체여야 합니다!',
  'Merging with "%s" strategy, selected with "--strategy".' => '"--strategy"로 선택된 "%s" 방식으로 병합합니다.',
  'Methods may not be both "abstract" and "final".' => '메서드는 "abstract"인 동시에 "final"일 수 없습니다',
  'Share and grab text using the Paste application. To create a paste, use the
"--input" flag or provide the text on stdin:

  $ cat list_of_ducks.txt | arc paste --
  $ arc paste --input list_of_ducks.txt

To retrieve a paste, specify the paste ID:

  $ arc paste P123' => 'Paste 애플리케이션을 사용해 텍스트를 공유하고 가져옵니다. 붙여넣기를 만들려면 "--input" 플래그를 사용하거나 stdin으로 텍스트를 제공하세요:

  $ cat 오리_목록.txt | arc paste --
  $ arc paste --input 오리_목록.txt

붙여넣기를 가져오려면 붙여넣기 ID를 지정하세요:

  $ arc paste P123',
  'Unnecessary semicolons after statement.' => '선언문 뒤에 불필요한 세미콜론이 있습니다.',
  'Failed to passthru %s: %s' => '%s 패스스루 실패: %s',
  'Exiting in %d seconds' => '%d초 후에 종료합니다',
  'Put opening braces on the same line as control statements and declarations, with a single space before them.' => '여는 중괄호는 제어문과 선언문과 같은 줄에 쓰고, 여는 중괄호 앞에 한 칸을 띄우세요.',
  'Cast Spacing' => 'Cast문 띄어짐',
  'Trying to execute a class map query for descendants of class "%s", but the query specifies an "expand method" ("%s") without specifying a "unique method". Class maps which support expansion must have unique keys.' => '클래스 "%s"의 하위 항목에 대한 클래스 맵 쿼리를 실행하려고 하지만, 쿼리가 "unique method"를 지정하지 않은 채 "expand method"("%s")를 지정했습니다. 확장을 지원하는 클래스 맵은 고유 키가 있어야 합니다.',
  '`%s` blocks are not available before PHP 5.5.' => '`%s` 블록은 PHP 5.5 이전 버전에서는 사용할 수 없습니다.',
  'Unable to determine system temporary directory.' => '시스템 임시 디렉터리를 결정할 수 없습니다.',
  'Expected all items passed to "array_mergev()" to be arrays, but argument with key "%s" has type "%s".' => '"array_mergev()"에 전달된 모든 항목은 배열이어야 하지만, 키 "%s"의 인수는 "%s" 유형입니다.',
  'Confirms writing to to "~/.profile" (or another similar file) to install shell completion.' => '셸 자동 완성 기능을 설치하기 위해 "~/.profile"(또는 유사한 다른 파일)에 쓰는 것을 확인합니다.',
  'Linter \'%s\' configured in \'%s\' does not exist!' => '\'%2$s\'에 구성된 린터 \'%s\'이(가) 존재하지 않습니다!',
  'Unknown output kind "%s".' => '알 수 없는 출력 유형 "%s".',
  'Task "%s"' => '태스크 "%s"',
  'Avoid the PHP echo short form, `%s`.' => 'PHP 에코 단축형 `%s`의 사용을 피하세요.',
  'UNSHELVE' => '언셸빙',
  'Build successful!' => '빌드 성공!',
  'Revision for commit "%s" is ambiguous. Use "--revision" to force selection of a particular revision.' => '커밋 "%s"의 판이 모호합니다. 특정 판을 강제로 선택하려면 "--revision" 옵션을 사용하세요.',
  'Provide a discovery map.' => '발견 맵을 제공하세요.',
  'Default value for parameters with a class type hint can only be an instantiation of that class or a descendant.' => '클래스 유형 힌트가 있는 매개변수의 기본값은 해당 클래스 또는 하위 클래스의 인스턴스만 가능합니다.',
  'Set a local config value instead of a user one.' => '사용자의 값 대신 로컬 구성 값을 설정합니다.',
  'Continue with this mapping between commits and revisions?' => '이 커밋과 판 간의 매핑으로 계속합니까?',
  'it is the first ancestor of the working copy that is not outgoing, and it matched the rule %s in your %s \'base\' configuration.' => '이는 작업 복사본의 첫 번째 조상 중 outgoing이 아니며, %2$s \'base\' 구성의 규칙 %s와(과) 일치한 조상입니다.',
  'Found more than %s unpublished commits which are ancestors of heads.' => '헤드의 조상인 미게시 커밋이 %s개보다 많이 발견되었습니다.',
  'No path provided to %s.' => '%s에 제공된 경로가 없습니다.',
  'Subversion does not support commit ranges.' => 'Subversion은 커밋 범위를 지원하지 않습니다.',
  'Remote "%s"' => '원격 "%s"',
  'Defining closures with arrow functions was not introduced until PHP 7.4, but this codebase targets an earlier version of PHP.' => '클로저를 화살표 함수로 정의하는 기능은 PHP 7.4부터 도입되었지만, 이 코드베이스는 이전 버전의 PHP를 대상으로 합니다.',
  'Never apply patches suggested by lint.' => '린트가 제안한 패치를 절대 적용하지 않습니다.',
  'Current Source' => '현재 소스',
  'There are %s commits reachable from the specified sources (%s). You are landing into the empty state, so all of these commits will land:' => '지정한 소스(%2$s)에서 도달 가능한 커밋이 %s개 있습니다. 빈 상태로 최종 반영하므로 이 커밋들이 모두 최종 반영됩니다:',
  '`%s` Statement Namespace Prefix' => '`%s`문 이름공간 접두어',
  'Apply changes from a Differential diff. Normally you want to use %s to get the most recent changes, but you can specifically apply an out-of-date diff or a diff which was never attached to a revision by using this flag.' => 'Differential 차이의 변경 사항을 적용합니다. 일반적으로 최신 변경 사항을 가져오려면 %s을(를) 사용하는 것이 좋지만, 이 플래그를 사용하면 오래된 차이나 판에 첨부된 적 없는 차이를 구체적으로 적용할 수 있습니다.',
  'this is a new repository (all changes are outgoing).' => '새 저장소입니다 (모든 변경 사항이 outgoing입니다).',
  'Unable to set stream nonblocking.' => '스트림을 nonblocking으로 설정할 수 없습니다.',
  'This workflow does not have any prompts.' => '이 워크플로에는 프롬프트가 없습니다.',
  'DONE' => '완료',
  'Preparing merge into "%s" from remote "%s", at commit "%s".' => '원격 "%2$s"에서 로컬 대상 "%s"(으)로의 병합을 준비합니다 (커밋 "%3$s"에서).',
  'You\'re covered, your changes didn\'t touch anyone else\'s code.
' => '문제 없습니다. 변경 사항이 다른 사람의 코드를 건드리지 않았습니다.',
  'Edit revisions via the web interface when using SVN.' => 'SVN을 사용할 때는 웹 인터페이스를 통해 판을 편집하세요.',
  'You can not continue with uncommitted changes. Commit or discard them before proceeding.' => '커밋되지 않은 변경 사항이 있는 상태로 계속할 수 없습니다. 처리하기 전에 커밋하거나 버리세요.',
  'The server \'%s\' rejected your request:' => '\'%s\' 서버는 요청을 거절했습니다:',
  'The use of variadic arguments is not available before PHP 5.6.' => '가변 인자의 사용은 PHP 5.6 이전 버전에서는 사용할 수 없습니다.',
  'Argument method is not a string.' => '인수 메서드가 문자열이 아닙니다.',
  'No paths are lintable.' => '린트 처리할 수 있는 경로가 없습니다.',
  'Specify exactly one file to download.' => '다운로드할 파일을 정확히 하나만 지정하세요.',
  'Bad origin state %s.' => '잘못된 출처 상태 %s.',
  'Extension ("%s") defines invalid configuration with key "%s". Configuration keys: may only contain lowercase letters, numbers, hyphens, underscores, and periods; must start with a letter; and must be at least three characters long.' => '확장 기능("%s")이 키 "%s"(으)로 유효하지 않은 구성을 정의합니다. 구성 키: 소문자, 숫자, 하이픈, 밑줄 및 마침표만 포함될 수 있고, 문자로 시작해야 하며, 최소 3자 이상이어야 합니다.',
  'Unable to create temporary file in %s.' => '%s에 임시 파일을 생성할 수 없습니다.',
  'Expected a string (at index "%s"), found "%s".' => '문자열을 예상했지만 (인덱스 "%s"에), "%s"이(가) 발견되었습니다.',
  'Do not expect "capability" message when connecting. The server must be configured not to send the message. This deviates from the Mercurial protocol, but slightly improves performance.' => '연결 시 "capability" 메시지를 기대하지 않습니다. 서버에서 해당 메시지를 보내지 않도록 구성되어야 합니다. 이는 Mercurial 프로토콜과는 다르지만 성능을 약간 향상시킵니다.',
  'Install JSHint using `%s`.' => '`%s`을(를) 사용해 JSHint를 설치합니다.',
  'SOURCE' => '소스',
  'Warning' => '경고',
  '%s can not write bytes directly!' => '%s은(는) 바이트를 직접 쓸 수 없습니다!',
  'NO PATH TO REMOTE' => '원격으로의 경로 없음',
  'MULTIPLE REVISIONS IN WORKING COPY' => '작업 사본 내 복수의 판',
  'Trailing commas in parameter lists are not available before PHP 8.0.' => '매개변수 목록에서의 쉼표 나열은 PHP 8.0 이전 버전에서는 사용할 수 없습니다.',
  'HTTP query parameter value (for key "%s") must be a scalar.' => '(키 "%s"에 대한) HTTP 쿼리 매개변수 값은 스칼라이어야 합니다.',
  'Test case \'%s\' threw, as expected.' => '테스트 케이스 \'%s\'이(가) 예상대로 예외를 발생시켰습니다.',
  'NEW BRANCH' => '새로운 브랜치',
  'Creating new library in \'%s\'.' => '\'%s\'에 새 라이브러리를 생성 중입니다.',
  'Completed preview of land operation.' => '최종 반영 작업 미리보기를 완료했습니다.',
  'Created and checked out bookmark %s.' => '책갈피 %s을(를) 생성하고 체크아웃했습니다.',
  'AWS Request Failed' => 'AWS 요청 실패',
  'PREVIEW' => '미리 보기',
  'Unexpected copy source in %s, \'%s\'.' => '%s에서 예상치 못한 복사 소스인 \'%s\'이(가) 발견되었습니다.',
  '`elseif` Usage' => '`elseif` 사용법',
  'This function can not convert from the unit "%s".' => '이 함수는 "%s" 단위로부터 변환될 수 없습니다.',
  'This commit includes the directory \'%s\', but it contains a modified path (\'%s\') which is NOT included in the commit. Subversion can not handle this operation and will commit the path anyway. You need to sort out the working copy changes to \'%s\' before you may proceed with the commit.' => '이 커밋에는 디렉터리 \'%s\'이(가) 포함되어 있지만, 커밋에 포함되지 않은 수정된 경로(\'%s\')가 포함되어 있습니다. Subversion은 이 작업을 처리할 수 없으므로 해당 경로를 그대로 커밋합니다. 커밋을 진행하기 전에 작업 사본의 변경 사항을 \'%s\'(으)로 정리해야 합니다.',
  'You can not use "--generate" when completing arguments.' => '인수를 완료할 때는 "--generate"를 사용할 수 없습니다.',
  '**alias** __command__ __target__ -- [__arguments__]' => '**alias** __명령어__ __대상__ -- [__인수__]',
  'Ignoring unrecognized configuration option ("%s") from source: %s.' => '소스에서 인식할 수 없는 구성 옵션("%s")을 무시합니다: %s.',
  'WORK' => '일',
  '`%s` Function' => '`%s` 함수',
  'Value "%s" is not valid: expected a list, got "%s".' => '값 "%s"이(가) 유효하지 않습니다: 목록을 예상했지만, "%s"을(를) 받았습니다.',
  'List should use the array syntax.' => '목록은 배열 구문을 사용해야 합니다.',
  'Rule \'%s\' in state \'%s\' in %s has unknown option \'%s\'.' => '%3$s의 상태 \'%2$s\'에 있는 규칙 \'%s\'에 알 수 없는 옵션 \'%4$s\'이(가) 있습니다.',
  'Argument Alignment' => '인수 정렬',
  'Error in parsing \'%s\' file, in key \'%s\' for linter \'%s\'.' => '린터 \'%3$s\'의 키 \'%2$s\'에서 \'%s\' 파일을 구문 분석하는 중 오류가 발생했습니다.',
  'You must generate at least 1 byte of entropy.' => '최소 1바이트의 엔트로피를 생성해야 합니다.',
  'You are running one copy of this software (at path "%s") against another copy of this software (at path "%s"). Code in the current working directory will not be loaded or executed.' => '현재 이 소프트웨어의 한 복사본(경로 "%s")이 다른 복사본(경로 "%s")에 대해 실행되고 있습니다. 현재 작업 디렉터리의 코드는 로드되거나 실행되지 않습니다.',
  'Specify the end of the commit range. This disables many features which depend on having access to the working copy.' => '커밋 범위의 끝을 지정합니다. 이렇게 하면 작업 사본에 대한 접근 권한이 필요한 여러 기능이 비활성화됩니다.',
  'PCNTL' => 'PCNTL',
  'Choose a name for the new library.' => '새로운 라이브러리의 이름을 선택하세요.',
  'To use "--xprofile", you must install XHProf.' => '"--xprofile"을 사용하려면 XHProf를 설치해야 합니다.',
  'Do you want to mark these %s file(s) as binary and continue?' => array(
    '이 파일을 바이너리 파일로 표시하고 계속합니까?',
    '이 파일들을 바이너리 파일로 표시하고 계속합니까?',
  ),
  'IP address "%s" is not properly formatted: is has too many parts. Expected a maximum of 7 colons, like "%s".' => 'IP 주소 "%s"의 형식이 올바르지 않습니다: 콜론이 너무 많습니다. "%s"처럼 최대 7개의 콜론이 예상되었습니다.',
  'No lint problems.' => '린트 문제가 없습니다.',
  'Type of setting \'%s\' must be boolean, like \'true\' or \'false\'.' => '\'%s\' 설정의 유형은 \'true\' 또는 \'false\'의 불리언이어야 합니다.',
  'Implicit Method Visibility' => '암시적 메서드 공개 여부',
  'Requested path \'%s\' is not writable.' => '요청된 경로 \'%s\'은(는) 쓰기 가능하지 않습니다.',
  'English (Raw Strings)' => '영어 (원본 문자열)',
  'The short array syntax ("[...]") was not introduced until PHP 5.4, but this codebase targets an earlier version of PHP. You can rewrite this expression using `array(...)` instead.' => '단축 배열 구문("[...]")은 PHP 5.4부터 도입되었지만, 이 코드베이스는 이전 버전의 PHP를 대상으로 합니다.`array(...)`를 사용하여 이 표현을 다시 작성할 수 있습니다.',
  'Suppress warning about uncommitted changes.' => '커밋되지 않은 변경 사항에 대한 경고를 숨깁니다.',
  'CREATE %s BOOKMARK(S)' => '책갈피 %s개 생성',
  'You must resolve these errors to continue.' => '계속하려면 이 오류들을 해결해야 합니다.',
  'Default value for parameters with a class type hint can only be `%s`.' => '클래스 유형 힌트가 있는 매개변수의 기본값은 `%s`만 가능합니다.',
  'Unknown column alignment "%s".' => '알 수 없는 열 정렬 "%s".',
  'Push Repository: %s' => '푸시 저장소: %s',
  'Test engine \'%s\' specifies invalid type \'%s\'. Available test engines are: %s.' => '테스트 엔진 \'%s\'이(가) 유효하지 않은 유형 \'%s\'을(를) 지정합니다. 유효한 테스트 엔진: %s.',
  'Other users to CC on the new task.' => '새 태스크에 CC할 다른 사용자들입니다.',
  'XHPAST Lint' => 'XHPAST 린트',
  'Specify one or more paths to files you want to upload.' => '업로드 할 파일의 하나 이상의 경로를 지정하세요.',
  'To push changes manually, run this command:' => '변경 사항을 수동으로 푸시하려면 다음 명령을 실행하세요:',
  'Reading diff from stdin...' => 'stdin에서 diff를 읽는 중...',
  'HTTPS Trusted Domains' => 'HTTPS 신뢰된 도메인',
  'Multi-line parameter declarations should be followed by a blank line.' => '여러 줄로 매개변수를 선언하는 경우, 그 뒤에는 빈 줄이 와야 합니다.',
  'Working Copy' => '작업 사본',
  'Provide only one path to "arc liberate". The path should identify a directory where you want to create or update a library.' => '"arc liberate"에는 경로를 하나만 제공하세요. 경로는 라이브러리를 생성하거나 업데이트하려는 디렉터리를 가리켜야 합니다.',
  'Signal router has not been initialized!' => '신호 라우터가 초기화되지 않았습니다!',
  'Non-conventional modifier ordering.' => '일반적이지 않은 수식어 순서입니다.',
  'The program is attempting to read user input, but stdin is being piped from some other source (not a TTY).' => '프로그램이 사용자 입력을 읽으려고 하지만, stdin이 다른 소스에서 파이프되고 있습니다 (TTY가 아님).',
  '    **rebuild-map.php** [__options__] __root__
        Rebuild the library map file for a libphutil library.
' => '    **rebuild-map.php** [__옵션__] __루트__
        libphutil 라이브러리의 라이브러리 맵 파일을 재빌드합니다.',
  'Specify an explicit URI or run this command from within a project which is configured with a %s.' => '명시적인 URI를 지정하거나 %s(으)로 구성된 프로젝트 내에서 이 명령을 실행하세요.',
  'Unterminated string in argument list!' => '인수 목록에 종료되지 않은 문자열이 있습니다!',
  'Override the configured locale and use this locale code instead.' => '구성된 로케일을 덮어쓰고 이 로케일을 대신 사용합니다.',
  'Git ref selector "%s" is not a valid selector and can not be passed to the Git CLI safely in the general case.' => 'Git ref 선택기 "%s"은(는) 유효한 선택기가 아니며 일반적인 경우 Git CLI에 안전하게 전달할 수 없습니다.',
  'Unit test engine (of class "%s") returned invalid results when run (with method "%s"). Expected a list of "%s" objects as results.' => '단위 테스트 엔진(클래스 "%s")이 실행 시(메서드 "%s") 유효하지 않은 결과를 반환했습니다. 결과로 "%s" 객체 목록을 예상했습니다.',
  'Jan' => '1월',
  'It is midday. The sun is high overhead and the air is still. It is very warm. You hear the cry of a hawk high overhead and far in the distance.' => '정오입니다. 태양은 오버헤드 높이 떠 있고 공기는 고요합니다. 날씨는 매우 따뜻합니다. 저 멀리 오버헤드에서 매의 울음소리가 들립니다.',
  'MERGE CONFLICT' => '병합 충돌',
  'The spaceship operator is not available before PHP 7.0.' => '우주선 연산자는 PHP 7.0 이전 버전에서는 사용할 수 없습니다.',
  '`%s` class `%s` must define an ID constant.' => '`%s` 클래스 `%s`은(는) ID 상수를 정의해야 합니다.',
  'Message type \'%s\' is already enabled!' => '메시지 유형 \'%s\'이(가) 이미 활성화되어 있습니다!',
  'Confirms that revisions that are not accepted should land.' => '승인되지 않은 수정 사항이 최종 반영되어야 함을 확인합니다.',
  'Lock \'%s\' is not locked by this process!' => '잠금 \'%s\'이(가) 이 프로세스에 의해 잠겨있지 않습니다!',
  'The `%s` type hint is not available before PHP 7.2.' => '`%s` 유형 힌트는 PHP 7.2 이전 버전에서는 사용할 수 없습니다.',
  'Build %d' => '%d 빌드',
  'Unable to upload file: failed to open path "%s" for reading.' => '파일을 업로드할 수 없었습니다: 파일 경로 "%s"을(를) 읽기를 위해 여는데 실패했습니다.',
  'Expected an object, string, or list of objects for "object" context. Got a list ("%s"), but the list item at index "%s" (with type "%s") is not an object.' => '"object" 컨텍스트에 대해 객체, 문자열 또는 객체 목록을 예상했습니다. 목록("%s")을 받았지만 인덱스 "%s"의 목록 항목(유형 "%s")은 객체가 아닙니다.',
  'A custom configuration file.' => '사용자 지정 구성 파일입니다.',
  'Are you sure you want to mutate history?' => '정말로 역사를 변경하겠습니까?',
  'Reuse of Iterator Variable' => '반복자 변수의 재사용',
  'Use the `%s` mode provided by `%s` to detect errors in Less source files.' => 'Less 소스 파일의 오류를 감지하려면 `%2$s`에서 제공하는 `%s` 모드를 사용하세요.',
  'HTTP query parameter key must be a scalar.' => 'HTTP 쿼리 매개변수 키는 스칼라이어야 합니다.',
  'English (US)' => '영어 (미국)',
  'Locale "%s" is part of a cycle of locales which fall back on one another in a loop (%s). Locales which fall back on other locales must not loop.' => '로케일 "%s"은(는) 서로에게 폴백하는 로케일 순환(%s)의 일부입니다. 다른 로케일로 폴백하는 로케일은 순환하면 안 됩니다.',
  'Reason' => '이유',
  'Use a specific authentication token.' => '특정 인증 토큰을 사용합니다.',
  'Associate the working copy with a specific repository. Normally, this association can be determined automatically, but if your setup is unusual you can use this option to tell it what the desired value is.' => '작업 사본을 특정 저장소와 연결합니다. 일반적으로 이 연결은 자동으로 결정되지만, 설정이 특이한 경우 이 옵션으로 원하는 값을 지정할 수 있습니다.',
  'Whether %s should permit the automatic stashing of changes in the working directory when requiring a clean working copy. This option should only be used when users understand how to restore their working directory from the local stash if an operation causes an unrecoverable error.' => '깨끗한 작업 사본이 필요할 때 %s이(가) 작업 디렉터리의 변경 사항을 자동으로 스태시하도록 허용할지 여부입니다. 이 옵션은 작업에서 복구할 수 없는 오류가 발생했을 때 로컬 스태시에서 작업 디렉터리를 복원하는 방법을 사용자가 이해하는 경우에만 사용해야 합니다.',
  'Test case \'%s\' did not throw, as expected.' => '테스트 케이스 \'%s\'이(가) 예상대로 예외를 발생시키지 않았습니다.',
  'Failed to set streams nonblocking.' => '스트림을 nonblocking으로 설정하는데 실패했습니다.',
  'Use of unknown class symbol "%s".' => '알 수 없는 클래스 심볼 "%s"의 사용.',
  'Signal handlers raised exceptions while handling "%s".' => '신호 핸들러가 "%s"을(를) 처리하는 동안 예외가 발생했습니다.',
  'Emit builtin symbols.' => '내장 심볼을 출력합니다.',
  'Imbalanced calls to shared futures: each call to %s for a path must be paired with a call to %s.' => '공유된 퓨처 호출이 균형을 이루지 않습니다: 경로에 대한 %s 호출은 각각 %s 호출과 짝을 이루어야 합니다.',
  'This very old library is no longer supported.' => '이 매우 오래된 라이브러리는 더이상 지원되지 않습니다.',
  'The `%s` and `%s` statements no longer accept variable arguments in PHP 5.4.' => '`%s` 및 `%s`문은 PHP 5.4에서 더이상 변수 인수를 받지 않습니다.',
  'Abandoned' => '포기됨',
  'Argument short aliases may only be in a-z, A-Z and 0-9. \'%s\' is invalid.' => '인수의 축약 별칭은 a-z, A-Z, 0-9만 사용할 수 있습니다. \'%s\'은(는) 유효하지 않습니다.',
  'Expected \'%s\' file to be a valid JSON file, but failed to decode \'%s\'.' => '\'%s\' 파일이 유효한 JSON 파일일 것으로 예상했지만, \'%s\' 파일을 디코딩하는 데 실패했습니다.',
  'Invalid %s root directory specified (\'%s\'). Root directory must be a directory, be readable, and be specified with an absolute path.' => '유효하지 않은 %s 루트 디렉터리가 지정되었습니다 (\'%s\'). 루트 디렉터리는 디렉터리이고, 읽을 수 있어야 하며, 절대 경로로 지정되어야 합니다.',
  'Call to "hg arc-ls-markers" failed with error "%s".' => '"hg arc-ls-markers" 호출이 오류 "%s"(으)로 실패했습니다.',
  'Default value for parameters with a string type hint can only be a string.' => '문자열 유형 힌트가 있는 매개변수의 기본값은 문자열만 가능합니다.',
  'Uses Google\'s Closure Linter to check JavaScript code.' => 'Google의 Closure Linter를 사용하여 자바스크립트 코드를 검사합니다.',
  'Partition query requires heads.' => '파티션 쿼리는 헤드를 필요로 합니다.',
  'Local branches have not been changed, and are still in the same state as before.' => '로컬 브랜치는 변경되지 않았으며 이전과 동일한 상태입니다.',
  'Failed to parse \'%s\' output: %s' => '\'%s\' 출력의 구문 분석을 실패했습니다: %s',
  'Portuguese (Brazil)' => '포르투갈어 (브라질)',
  'Install PyLint using `%s`.' => '`%s`을(를) 사용해 PyLint를 설치합니다.',
  'Wrote C++ definition.' => 'C++ 정의를 작성했습니다.',
  'Working Copy: Reading %s from "%s".' => '작업 사본: "%2$s"에서 %s을(를) 읽는 중입니다.',
  'Channel closed unexpectedly!' => '채널이 예상치 못하게 닫혔습니다!',
  'English (US, ALL CAPS)' => '영어 (미국, 모두 대문자)',
  'Command ("%s") exited nonzero ("%s")!' => '명령("%s")이 0이 아닌 값("%s")으로 종료되었습니다!',
  'Unexpected output from "git log ...": %s' => '"git log ..."로부터 예상치 못한 출력: %s',
  'Methods should be followed by one blank line.' => '메서드 뒤에는 빈 줄이 하나 있어야 합니다.',
  'Will merge into local state, selected with the "--into-local" flag.' => '"--into-empty" 플래그로 선택한 로컬 상태에 병합됩니다.',
  'Declare variables prior to use (even if you are passing them as reference parameters). You may have misspelled this variable name.' => '사용하기 전에 변수를 선언하세요 (참조 매개변수로 전달하는 경우에도). 변수 이름을 잘못 입력했을 수 있습니다.',
  'Uses SimpleXML to detect formatting errors in XML files.' => 'SimpleXML을 사용해서 XML 파일의 형식 오류를 감지합니다.',
  'COVERAGE REPORT' => '검사 보고서',
  'Disabled' => '비활성화됨',
  'File permissions on your %s are too open. Fix them by chmod\'ing to 600?' => '%s의 파일 권한이 너무 열려 있습니다. chmod 600으로 수정합니까?',
  'Holding changes locally, they have not been pushed.' => '변경 사항을 로컬에 보관했으며, 푸시되지 않았습니다.',
  'Specify file by ID, e.g. %s.' => '파일을 ID로 지정하세요 (예: %s).',
  'Function symbol "%s" should be written as "%s".' => '함수 심볼 "%s"은(는) "%s"(으)로 작성되어야 합니다.',
  '"arc work" must be run in a Git or Mercurial working copy.' => '"arc work"는 Git 또는 Mercurial 작업 사본에서 실행해야 합니다.',
  '%s suppresses lint.' => '%s은(는) 린트를 억제합니다.',
  'Committing \'%s: %s\'...
' => '\'%s: %s\' 커밋 중...',
  'Unable to apply patch!' => '패치를 적용할 수 없습니다!',
  'Bad Filename' => '잘못된 파일 이름',
  'Specify a file to download, like "F123".' => '"F123" 같이 다운로드할 파일을 지정하세요.',
  'Use "--incremental" to merge and push changes one by one.' => '변경 사항을 한 번에 하나씩 병합 및 푸시하려면 "--incremental"을 사용하세요.',
  'This future graph already has a future with key "%s". Each future must have a unique key.' => '이 퓨처 그래프에는 이미 키가 "%s"인 퓨처가 있습니다. 각 퓨처는 고유한 키를 가져야 합니다.',
  'Two argument specifications are marked as wildcard arguments. You can have a maximum of one wildcard argument.' => '두 개의 인수 명세가 와일드카드 인수로 표시되어 있습니다. 와일드카드 인수는 최대 하나만 사용할 수 있습니다.',
  '**branches**' => '**브랜치**',
  'Variable Reference Spacing' => '변수 참조 띄어짐',
  'Message should be %s.' => '메시지는 %s여야 합니다.',
  'File Does Not End in Newline' => '파일이 새 줄로 끝나지 않습니다',
  'Invalid command "%s". Valid commands are: %s.' => '유효하지 않은 명령 "%s". 유효한 명령: %s.',
  'Unable to push lfs changes to the staging area.' => 'lfs 변경 사항을 스테이징 영역으로 푸시할 수 없습니다.',
  'Composer Dependency Manager' => 'Composer 종속성 관리자',
  'You must specify changes to apply to the working copy with "D12345", "--revision", "--diff", "--arcbundle", or "--patch".' => '"D12345", "--revision", "--diff", "--arcbundle" 또는 "--patch"를 사용해서 작업 사본에 적용할 변경 사항을 지정해야 합니다.',
  'Use formatting even in environments which probably don\'t support it.' => '아마 지원하지 않을 환경에서도 서식을 사용합니다.',
  'PHP files should start with `%s`, which may be preceded by a `%s` line for scripts.' => 'PHP 파일은 `%s`(으)로 시작해야 하며, 스크립트의 경우 그 앞에 `%s` 줄이 올 수 있습니다.',
  'Call to "hg arc-ls-markers" returned marker of unknown type "%s".' => '"hg arc-ls-markers" 호출이 알 수 없는 유형 "%s"의 마커를 반환했습니다.',
  'Trace command execution and show service calls.' => '명령 실행을 추적하고 서비스 호출을 표시합니다.',
  'Downloaded file size (%s bytes) does not match expected file size (%s bytes). This download may be incomplete or corrupt.' => '다운로드한 파일 크기(%s바이트)가 예상 파일 크기(%s바이트)와 일치하지 않습니다. 다운로드가 불완전하거나 손상되었을 수 있습니다.',
  'TARGET' => '대상',
  'The "SHELL" environment variable is not defined, so it can not be used to detect the shell to install rules for.' => '"SHELL" 환경 변수가 정의되지 않았으므로, 해당 변수를 사용하여 규칙을 설치할 셸을 감지할 수 없습니다.',
  'Unable to determine which revision is associated with commit "%s". Use "arc diff" to create or update a revision with this commit, or "--revision" to force selection of a particular revision.' => '커밋 "%s"와(과) 관련된 판을 결정할 수 없습니다. 이 커밋으로 판을 만들거나 업데이트하려면 "arc diff"를 사용하거나, 특정 판을 강제로 선택하려면 "--revision"을 사용하세요.',
  'Run in a working copy with "phabricator.uri" set in ".arcconfig".' => '".arcconfig"에 "phabricator.uri"가 설정된 작업 사본에서 실행하세요.',
  'Rule \'%s\' in state \'%s\' in %s transitions to state \'%s\', but there are no rules for that state.' => '%3$s의 상태 \'%2$s\'에 있는 규칙 \'%s\'은(는) 상태 \'%4$s\'(으)로 전환하지만 해당 상태에 대한 규칙이 없습니다.',
  'Got unexpected parameters: %s' => '예상치 못한 매개변수를 받았습니다: %s',
  'Rejecting ambiguous URI "%s". This URI is not formatted or encoded properly.' => '모호한 URI "%s"을(를) 거부합니다. 이 URI는 형식이 올바르지 않거나 인코딩이 잘못되었습니다.',
  'Attempting to iterate an object (of class %s) which is not iterable.' => 'iterable이 아닌 객체(클래스 %s)를 반복하려고 시도했습니다.',
  'Show toolset version information.' => 'Toolset 버전 정보를 표시합니다',
  'PHP version to target.' => '대상으로 할 PHP 버전입니다.',
  'Floating on the water, you see published commits:' => '당신은 물 위에 떠 있는, 게시된 커밋들을 볼 수 있습니다:',
  'Bad blame? `%s\'' => '잘못된 블레임? `%s\'',
  'Needs Review' => '검토 필요',
  'Supply commit message for uncommitted changes, then save and exit.' => '커밋하지 않은 변경 사항에 대한 커밋 메시지를 제공하고, 저장한 후 종료하세요.',
  'Attempting to run unit tests on a library which has not been loaded, at:

    %s

Make sure this library is configured to load.

(In rare cases, this may be because you are attempting to run one copy of this software against a different copy of this software. This operation is not supported.)' => '로드되지 않은 라이브러리에서 단위 테스트를 실행하려고 합니다. 위치:

    %s

이 라이브러리가 로드되도록 설정되어 있는지 확인하세요.

(드문 경우, 이 소프트웨어의 한 복사본을 다른 복사본에 대해 실행하려고 해서 발생할 수 있습니다. 이 작업은 지원되지 않습니다.)',
  'Methods may not be both "private" and "final".' => '메서드는 "private"인 동시에 "final"일 수 없습니다',
  'Restoring uncommitted changes to working copy.' => '작업 사본으로 커밋되지 않은 변경 사항을 복구합니다.',
  'Default value for parameters with a callable type hint can only be a string, an array or an instantiation of a type declaring an `%s` method.' => 'callable 유형 힌트가 있는 매개변수의 기본값은 문자열, 배열, 또는 `%s` 메서드를 선언하는 유형의 인스턴스만 가능합니다.',
  'The `%s` type hint is not available before PHP 8.0.' => '`%s` 유형 힌트는 PHP 8.0 이전 버전에서는 사용할 수 없습니다.',
  'This diff includes %s file(s) which are not valid UTF-8 (they contain invalid byte sequences). You can either stop this workflow and fix these files, or continue. If you continue, these files will be marked as binary.' => array(
    '이 차이에는 유효한 UTF-8이 아닌 파일(잘못된 바이트 시퀀스가 있음)이 포함되어 있습니다. 이 워크플로를 중단하고 수정하거나 계속할 수 있습니다. 계속하면 이 파일은 바이너리로 표시됩니다.',
    '이 차이에는 유효한 UTF-8이 아닌 파일들(잘못된 바이트 시퀀스가 있음)이 포함되어 있습니다. 이 워크플로를 중단하고 이 파일들을 수정하거나 계속할 수 있습니다. 계속하면 이 파일들은 바이너리로 표시됩니다.',
  ),
  'Failed to rename \'%s\' to \'%s\'!' => '\'%s\'에서 \'%s\'(으)로 이름 바꾸기를 실패했습니다!',
  'Slow Construct' => '느린 구조',
  'Saving local state (at "%s" on branch "%s", bookmarked as "%s").' => '로컬 상태를 저장합니다 (브랜치 "%2$s"의 "%s"에, "%3$s"(으)로 북마크됨).',
  'Failed to open stdin for reading.' => 'stdin을 읽기를 위해 여는데 실패했습니다.',
  'Curly Brace Array Index' => '중괄호 배열 인덱스',
  'Landing onto multiple branches at once is not supported in Mercurial.' => 'Mercurial에서는 여러개의 브랜치에 동시에 최종 반영하는 기능이 지원되지 않습니다.',
  'Use `%s` to check for syntax errors in Ruby source files.' => '루비 소스 파일의 구문 오류를 확인하기 위해 `%s`을(를) 사용하세요.',
  'Invalid Conduit API credentials.' => '유효하지 않은 Conduit API 자격 증명.',
  'Show all lint warnings, not just those on changed lines. When paths are specified, this is the default behavior.' => '변경된 줄의 경고뿐 아니라 모든 린트 경고를 표시합니다. 경로가 지정된 경우 이것이 기본 동작입니다.',
  'Unable to open lock \'%s\' for writing!' => '잠금 \'%s\'을(를) 쓰기를 위해 열 수 없습니다!',
  'Class-Filename Mismatch' => '클래스-파일 이름 불일치',
  '%s and %s both need stdin. Use %s.' => '%s 및 %s은(는) 둘 다 stdin을(를) 사용합니다. %s을(를) 사용하세요.',
  'You are landing revisions which you ("%s") are not the author of:' => '자신("%s")이 작성하지 않은 판을 최종 반영하는 중입니다:',
  'This comment has a TODO.' => '이 주석에 TODO가 있습니다.',
  'Provide a list of additional flags to pass to the linter on the command line.' => '명령줄에서 린터에 전달할 추가 플래그 목록을 제공하세요.',
  'Deleting bookmark "%s".' => '책갈피 "%s"을(를) 삭제합니다.',
  'Signature method \'%s\' requires %s!' => '서명 메서드 \'%s\'은(는) %s을(를) 필요로 합니다!',
  'Unable to open stderr temporary file ("%s") for writing.' => 'stderr 임시 파일("%s")을 쓰기를 위해 열 수 없습니다.',
  'A script which contains a `%s` statement expects the very first statement to be a `%s` statement. Otherwise, a PHP fatal error will occur. %s' => '`%s`문을 포함하는 스크립트는 첫 번째 문이 반드시 `%s` 문이어야 합니다. 그렇지 않으면 치명적 PHP 오류가 발생합니다. %s',
  'PyFlakes is a simple program which checks Python source files for errors.' => 'PyFlakes는 파이썬 소스 파일의 오류를 검사하는 간단한 프로그램입니다.',
  'Output the linter results to a file. Defaults to stdout.' => '린터 결과를 파일로 출력합니다. 기본값은 stdout입니다.',
  'Attempting to convert a string encoding, but no source encoding was provided. Explicitly provide the source encoding.' => '문자열 인코딩을 변환하려고 시도했지만 소스 인코딩이 제공되지 않았습니다. 소스 인코딩을 명시적으로 제공하세요.',
  'Automatically add all unstaged and uncommitted files to the commit.' => '스테이징되지 않았거나 커밋되지 않은 모든 파일을 자동으로 커밋에 추가합니다.',
  'Remote "%s" has multiple branch heads named "%s". Close all but one, or pull the head you want and use "--into-local --into <hash>" to specify an explicit merge target.' => '원격 "%s"에는 "%s"(이)라는 이름의 브랜치 헤드가 여러 개 있습니다. 하나만 남기고 나머지를 모두 닫거나, 원하는 헤드를 풀해서 "--into-local --into <해시>"를 사용해 명시적인 병합 대상을 지정하세요.',
  'Path \'%s\' already exists!' => '\'%s\' 경로는 이미 존재합니다!',
  'Specified download path "%s" already exists, refusing to overwrite.' => '지정된 다운로드 경로 "%s"이(가) 이미 존재하므로 덮어쓰기를 거부합니다.',
  'Expected method "%s->%s()" to return a string or integer for use as a unique key, got "%s" from object at index "%s".' => '메서드 "%s->%s()"이(가) 고유 키로 사용할 문자열 또는 정수를 반환해야 할 것으로 예상했지만, 인덱스 "%4$s"에 있는 객체에서 "%s"을(를) 반환했습니다.',
  'Parameter Alignment' => '매개변수 정렬',
  'it is the merge-base of the explicitly specified base commit \'%s\' and the explicitly specified head commit \'%s\'.' => '이는 명시적으로 지정된 기준 커밋 \'%s\'와(과) 명시적으로 지정된 헤드 커밋 \'%s\'의 병합 기준입니다.',
  'Expected base85 line length character (a-zA-Z).' => 'base85 줄 길이 문자(a-zA-Z)를 예상했습니다.',
  'Unexpected node during static evaluation, of type: %s' => '정적 평가 중 예상치 못한 노드, 유형: %s',
  'Load all object hardpoints.' => '모든 객체 하드포인트를 로드합니다.',
  'No local copy of ref "%s" in remote "%s" exists, attempting fetch...' => '원격 "%2$s"에 ref "%s"의 로컬 복사본이 없습니다. 가져오기를 시도합니다...',
  '%s %s -> $ %s' => '%s %s -> $ %s',
  'No data provided for path "%s".' => '경로 "%s"에 대해 제공된 데이터가 없습니다.',
  'This software version on the server you are connecting to is out of date and does not have support for identifying repositories by callsign or URI. Update the server software to enable these features.' => '현재 접속 중인 서버의 소프트웨어 버전이 오래되어 콜사인 또는 URI로 저장소를 식별하는 기능을 지원하지 않습니다. 이러한 기능을 사용하려면 서버 소프트웨어를 업데이트하세요.',
  'The changes you are landing depend on %s open parent revision(s). Usually, you should land parent revisions before landing the changes which depend on them. These parent revisions are open:' => array(
    '최종 반영하려는 변경 사항은 열려 있는 상위 판에 의존합니다. 보통 의존하는 변경 사항을 최종 반영하기 전에 상위 판을 먼저 최종 반영해야 합니다. 다음 상위 판은 열려 있습니다:',
    '최종 반영하려는 변경 사항은 열려 있는 상위 판 %s개에 의존합니다. 보통 의존하는 변경 사항을 최종 반영하기 전에 상위 판을 먼저 최종 반영해야 합니다. 다음 상위 판들은 열려 있습니다:',
  ),
  'Convention: no spaces before opening parentheses.' => '명명 규칙: 여는 괄호 앞에 공백을 넣지 마세요.',
  'The current working directory is not part of a working copy for a supported version control system (Git, Subversion or Mercurial).' => '현재 작업 디렉터리는 지원되는 버전 관리 시스템(Git, Subversion, 또는 Mercurial)의 작업 사본 일부가 아닙니다.',
  'Use the "prompts" workflow to review prompt responses.' => '프롬프트 응답을 검토하려면 "prompts" 워크플로를 사용하세요.',
  'WARNING' => '경고',
  'LINT NOTICE' => '린트 고지',
  'msort() was passed a method ("%s") which returns "PhutilSortVector" objects. Use "msortv()", not "msort()", to sort a list which produces vectors.' => 'msort()에서 "PhutilSortVector" 객체를 반환하는 메서드("%s")가 전달되었습니다. 벡터를 생성하는 리스트를 정렬하려면 "msort()"가 아닌 "msortv()"를 사용하세요.',
  'FAIL' => '실패',
  'Hardpoint ("%s") is not registered on this object (of type "%s"). Hardpoints are: %s.' => '하드포인트("%s")가 이 객체(유형 "%s")에 등록되어 있지 않습니다. 하드포인트: %s.',
  'Sep' => '9월',
  'Failed to create a temporary directory in \'%s\'.' => '\'%s\'에 임시 디렉터리를 생성하는 데 실패했습니다.',
  'Call %s before calling %s!' => '%2$s을(를) 호출하기 전에 %s을(를) 호출했습니다!',
  'Unknown Mercurial status \'%s\'.' => '알 수 없는 Mercurial 상태 \'%s\'.',
  'Expected \'Name\', \'Added\', \'Deleted\', or \'Modified\'.' => '\'Name\', \'Added\', \'Deleted\' 또는 \'Modified\'를 예상했습니다.',
  'Script to execute.' => '실행할 스크립트입니다.',
  '`%s` should be separated from code by an empty line.' => '`%s`은(는) 코드와 빈 줄로 구분되어야 합니다.',
  'AVAILABLE' => '사용 가능',
  '`%s` declarations cannot be nested. This construct will cause a PHP fatal error.' => '`%s` 선언은 중첩될 수 없습니다. 이 구조는 PHP에서 치명적인 오류를 발생시킵니다.',
  'To configure Mercurial to ignore certain files in the working copy, add them to ".hgignore".' => 'Mercurial이 작업 사본에서 특정 파일을 무시하도록 구성하려면 해당 파일을 ".hgignore"에 추가하세요.',
  'commit message' => '커밋 메시지',
  'Using `%s` as a type hint is not allowed before PHP 8.2.' => '`%s`을(를) 유형 힌트로 사용하는 것은 PHP 8.2 이전 버전에서는 허용되지 않습니다.',
  'Running unit tests...' => '유닛 테스트 실행 중...',
  'Unable to locate binary "%s" to run linter %s. You may need to install the binary, or adjust your linter configuration.' => '린터 %2$s을(를) 실행하기 위한 바이너리 "%s"을(를) 찾을 수 없습니다. 바이너리를 설치하거나 린터 구성을 조정해야 할 수 있습니다.',
  'This iterator variable is a previously declared local variable. To avoid overwriting locals, do not reuse them as iterator variables.' => '이 반복자 변수는 이전에 선언된 로컬 변수입니다. 로컬 변수를 덮어쓰지 않도록 반복자 변수로 재사용하지 마세요.',
  'CIDR block "%s" is not formatted correctly. The IP block mask ("%s") must mask between 0 and %s bits, inclusive.' => 'CIDR 블록 "%s"의 형식이 올바르지 않습니다. IP 블록 마스크("%s")는 0에서 %s비트(포함) 사이의 값을 가져야 합니다.',
  'Fatal Error' => '치명적인 오류',
  'No remote "%s" exists in this repository.' => '이 저장소에는 원격 "%s"이(가) 존재하지 않습니다.',
  'String does not parse into exactly one statement!' => '문자열이 정확히 하나의 서술로 구문 분석되지 않습니다!',
  'YOU NEED TO __INSTALL A CERTIFICATE__ TO LOG IN' => '로그인 하려면 __자격 증명을 설치해야 함__',
);
  }

}
