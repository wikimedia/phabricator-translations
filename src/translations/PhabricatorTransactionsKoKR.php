<?php

final class PhabricatorTransactionsKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
  'Lock / Hide Fields' => '필드 잠구기 / 숨기기',
  'Unmark as "Edit" Form' => '"편집" 양식 표시를 해제',
  'Parameter "%s" is not a list of transactions.' => '매개변수 "%s"은(는) 트랜잭션 목록이 아닙니다.',
  'Transactions have no effect:' => '트랜잭션은 효과가 없습니다:',
  'This endpoint supports these types of transactions. See below for detailed information about each transaction type.' => '이 종단점은 다음과 같은 유형의 트랜잭션을 지원합니다. 각 트랜잭션 유형에 대한 자세한 내용은 아래를 참조하세요.',
  'To silence this edit, run this command:' => '이 편집을 조용하게 만들려면, 다음 명령을 실행하세요:',
  'In call to "transaction.search", selected object (of type "%s") does not implement "%s", so transactions can not be loaded for it.' => '"transaction.search" 호출에서 선택된 객체("%s" 유형)가 "%s" 인터페이스를 구현하지 않으므로 해당 객체에 대한 트랜잭션을 로드할 수 없습니다.',
  'Builtin Form "%s"' => '내장 양식 "%s"',
  '%s added a comment.' => '%s님이 코멘트를 추가했습니다.',
  'Empty Comment' => '빈 댓글',
  'The selected %s policy excludes you. Choose a %s policy which allows you to %s the object.' => '선택한 %s 정책이 당신을 제외합니다. 객체에 %3$s 할 수 있게 하는 %s 정책을 선택하세요.',
  'All users are already subscribed to this %s.' => '모든 사용자가 이미 이 %s에 구독되어 있습니다.',
  'Edge transaction has no \'%s\'!' => '엣지 트랜잭션에 \'%s\'이(가) 없습니다!',
  'No object exists with PHID "%s".' => 'PHID "%s"의 객체가 존재하지 않습니다.',
  'You can not edit this comment because the conversation is locked.' => '대화가 잠겨 있으므로 이 의견을 편집할 수 없습니다.',
  'Reorder Edit Forms' => '편집 양식 재정렬',
  'Reorder Create Forms' => '생성 양식 재정렬',
  'Edit Form Defaults' => '양식 기본값 편집하기',
  'The %s action(s) you are taking have no effect:' => array(
    '수행한 작업은 효과가 없습니다:',
    '수행한 작업들은 효과가 없습니다:',
  ),
  '%s removed %s subscriber(s) for %s: %s.' => '%s님이 %3$s에 대한 구독자를 제거했습니다: %4$s.',
  'New Mode' => '새로운 모드',
  'Engine: Editor' => '엔진: 편집기',
  '%s moved %s to %s on the %s board.' => '%s님이 작업판 %4$s 상에서 %s을(를) %s(으)로 이동했습니다.',
  'To continue, configure multi-factor authentication in Settings.' => '계속하려면 설정에서 다단계 인증을 구성하세요.',
  'SearchEngine class to export data from.' => '데이터를 내보낼 SearchEngine 클래스입니다.',
  'In %s, %s wrote:' => '%s에서, %s님이 작성:',
  'Unmark as Create Form' => '생성 양식 표시를 해제',
  'Mark as Edit Form' => '편집 양식으로 표시',
  'Edges already exist; transaction has no effect.' => '엣지가 이미 존재합니다, 트랜잭션은 효과가 없습니다.',
  '%s updated the preamble for this form.' => '%s님이 이 양식의 서문을 업데이트했습니다.',
  '%s changed the default value for field %s.' => '%s님이 필드 %s의 기본값을 변경했습니다.',
  'Comment Action Options' => '댓글 작업 옵션',
  '%s marked %s inline comment(s) as done.' => '%s님이 인라인 댓글 %s개를을 완료됨으로 표시했습니다.',
  'Email Body Text' => '이메일 본문',
  'Optional instructions, shown above the form.' => '양식 위에 보여지는, 선택적인 지침입니다.',
  'This transaction group requires MFA to apply, but you can not provide an MFA response via Conduit. Edit this object via the web UI.' => '이 트랜잭션 그룹을 적용하려면 MFA가 필요하지만, Conduit을 통해 MFA 응답을 제공할 수 없습니다. 웹 UI를 통해 이 객체를 편집하세요.',
  'Subtype key "%s" does not identify a valid subtype.' => '하위 유형 키 "%s"은(는) 유효한 하위 유형을 식별하지 않습니다.',
  'Name of the form.' => '양식의 이름입니다.',
  'No search engines match "%s". Available engines which support data export are: %s.' => '"%s"와(과) 일치하는 검색 엔진이 없습니다. 데이터 내보내기를 지원하는 사용 가능한 검색 엔진: %s.',
  'Default Create Form' => '기본 생성 양식',
  '%s changed the visibility for %s.' => '%s님이 %s의 표시 여부를 변경했습니다.',
  'Warnings' => '경고',
  'Expected "newTransactionWarning()" to return an object of class "PhabricatorTransactionWarning", got something else ("%s") from transaction of class "%s".' => '"newTransactionWarning()"이 "PhabricatorTransactionWarning" 클래스의 객체를 반환할 것으로 예상했지만 클래스 "%2$s"의 트랜잭션으로부터 다른것("%s")을 받았습니다.',
  '%s edited subscriber(s), added %s: %s; removed %s: %s.' => '%s님이 구독자를 편집했습니다, 추가됨: %3$s, 제거됨: %5$s.',
  'Name for a %s can be no longer than %s characters.' => '%s에 대한 이름은 %s자를 초과할 수 없습니다.',
  'Take Action' => '액션 취하기',
  'Use "--output <path>" to specify an output file, or "--output -" to print to stdout.' => '"--output <path>"를 사용해서 출력 파일을 지정하거나, "--output -"을 사용해서 stdout으로 출력하세요.',
  'Form Disabled' => '양식 비활성화됨',
  '%s marked %s inline comment(s) as not done.' => '%s님이 인라인 댓글 %s개를 완료되지 않음으로 표시했습니다.',
  'Must specify either parameter "%s" or parameter "%s".' => '"%s" 매개변수 또는 "%s" 매개변수를 지정해야 합니다.',
  'Recipient Removed' => '수상자 제거됨',
  'EditField (with key "%s", of class "%s") is generating transactions, but has no EditType.' => 'EditField(키 "%s", 클래스 "%s")는 트랜잭션을 생성하지만 EditType이 없습니다.',
  'Bulk Edit Actions' => '일괄 편집 작업',
  'Primary Fields' => '기본 필드',
  '%s updated %s attached file(s), removed %s: %s; modified %s: %s.' => '%s님이 첨부된 파일을 업데이트했습니다, 제거됨: %4$s, 수정됨: %6$s.',
  '%s attached %s referenced file(s): %s.' => '%s님이 참조된 파일을 첨부했습니다: %3$s.',
  'Mentioned In' => '멘션됨',
  '%s moved %s on %s board(s): %s.' => '%s님이 작업판 %3$s개 상에서 %s을(를) 이동했습니다: %4$s.',
  'Export format.' => '내보내기 형식입니다.',
  'Drag and drop fields to change the order in which they appear in the application "Create" menu.' => '필드를 드래그 앤 드롭하여 애플리케이션의 "만들기" 메뉴에 표시되는 순서를 변경할 수 있습니다.',
  'Invalid \'%s\' value for Edge transaction. Value should contain only keys \'%s\' (add edges), \'%s\' (remove edges) and \'%s\' (set edges).' => '엣지 트랜잭션에 대한 \'%s\' 값이 잘못되었습니다. 값에는 \'%s\'(엣지 추가), \'%s\'(엣지 제거) 및 \'%s\'(엣지 설정) 키만 포함되어야 합니다.',
  'Monogram "%s" identifies an object of the wrong type. Loaded object has class "%s", but this editor operates on objects of type "%s".' => '모노그램 "%s"이(가) 잘못된 유형의 객체를 식별합니다. 로드된 객체의 클래스는 "%s"이지만, 이 편집기는 "%s" 유형의 객체에서 작동합니다.',
  '🔒 Locked' => '🔒 잠김',
  'New Object' => '새로운 객체',
  'Type an object type name...' => '객체 유형 이름을 입력하세요...',
  '%s enabled this form.' => '%s님이 이 양식을 활성화했습니다.',
  'EditEngine "%s" created or loaded an invalid object: object (of class "%s") must implement "%s", but does not.' => 'EditEngine "%s"이(가) 유효하지 않은 객체를 생성하거나 로드했습니다. 객체(클래스 "%s")는 "%s"을(를) 구현해야 하지만 그렇지 않습니다.',
  'Edit Configurations' => '구성 편집',
  'Edit type (with key "%s") is missing a Conduit parameter type.' => '편집 유형(키 "%s" 사용)에 Conduit 매개변수 유형이 누락되었습니다.',
  'Validation Errors' => '유효성 검사 오류',
  'You are about to apply a bulk edit which will affect %s object(s).' => '%s개의 객체에 영향을 주는 대량 편집을 적용하려고 합니다.',
  'You do not have access to any forms which are enabled and marked as edit forms.' => '활성화되어 편집 양식으로 표시된 양식에 접근할 권한이 없습니다.',
  'Edit engine (of class "%s") does not support subtypes, so subtype transactions can not be applied to it.' => '편집 엔진(클래스 "%s")은 하위 유형을 지원하지 않으므로 하위 유형 트랜잭션을 적용할 수 없습니다.',
  'You are editing the default values for this form.' => '이 양식의 기본값을 편집하고 있습니다.',
  'This job is already configured to run silently.' => '이 작업은 이미 조용히 실행되도록 구성되어 있습니다.',
  'This form ("%s") has been disabled, so it can not be used.' => '이 양식("%s")은 비활성화되어 있으므로 사용할 수 없습니다.',
  'Browse Forms' => '양식 찾아보기',
  'Specify an export format with "--format".' => '"--format"을 사용해서 내보내기 형식을 지정하세요.',
  'Using HTTP Parameters' => 'HTTP 매개변수를 사용',
  'Subtype "%s" is not valid: subtype keys must have a minimum length of 3 bytes.' => '하위 유형 "%s"이(가) 유효하지 않습니다: 하위 유형 키의 길이는 3바이트 이상이어야 합니다.',
  'Expected a query key or a set of query constraints.' => '쿼리 키 또는 쿼리 제약 조건 집합을 예상했습니다.',
  'Enable Form' => '양식 활성화',
  'Specified "%s" does not exist.' => '지정된 "%s"이(가) 존재하지 않습니다.',
  '%s edited edge metadata for %s.' => '%s님이 %s에 대한 엣지 메타데이터를 편집했습니다.',
  '"%s" must be a non-empty list of transaction PHIDs.' => '"%s"은(는) 비어 있지 않은 트랜잭션 PHID 목록이어야 합니다.',
  'Create Forms' => '생성 양식',
  'Post as Comment' => '댓글로 게시하기',
  'Edit Configuration' => '편집 구성',
  '%s updated %s attached file(s), added %s: %s; modified %s: %s.' => '%s님이 첨부된 파일을 업데이트했습니다, 추가됨: %4$s, 수정됨: %6$s.',
  'Query does not match any objects you have permission to edit.' => '쿼리 결과가 편집 권한이 있는 어떤 객체와도 일치하지 않습니다.',
  'Mark this form as an edit form? Users who can view it will be able to use it to edit objects.' => '이 양식을 편집 양식으로 표시하시겠습니까? 그러면 이 양식을 볼 수 있는 사용자만 이 양식을 사용하여 객체를 편집할 수 있습니다.',
  'Query does not match any objects.' => '쿼리가 어떠한 객체와도 일치하지 않습니다.',
  'In call to "%s", specified "%s" ("%s") is not supported because it does not implement "%s". Valid object types are: %s.' => '"%s" 호출에서 지정된 "%s"("%s")은(는) "%s"을(를) 구현하지 않으므로 지원되지 않습니다. 유효한 객체 유형: %s.',
  'Read transactions and comments for a particular object or an entire object type.' => '특정 객체 또는 전체 객체 유형에 대한 트랜잭션과 댓글을 읽습니다.',
  '✘ Hidden' => '✘ 숨김',
  '"%s" must be a string.' => '"%s"은(는) 문자열이어야 합니다.',
  'EditEngine BuiltinKey contains an invalid key character "/".' => 'EditEngine BuiltinKey는 유효하지 않은 키 문자 "/"를 포함합니다.',
  'Must not specify both parameter "%s" and parameter "%s".' => '"%s" 매개변수와 "%s" 매개변수를 동시에 지정해서는 안 됩니다.',
  '%s rescinded a token.' => '%s님이 토큰을 철회했습니다.',
  '%s awarded a token.' => '%s님이 토큰을 수여했습니다.',
  'New object subtype key.' => '새로운 객체 하위 유형 키입니다.',
  'This comment was signed with MFA, so edits to it must also be signed with MFA. You do not have any MFA factors attached to your account, so you can not sign this edit. Add MFA to your account in Settings.' => '이 댓글은 MFA로 서명되었으므로, 편집 시에도 MFA로 서명해야 합니다. 계정에 MFA 단계가 연결되어 있지 않으므로, 이 댓글을 편집할 수 없습니다. 설정에서 계정에 MFA를 추가하세요.',
  '%s added a comment to %s.' => '%s님이 %s에 댓글을 추가했습니다.',
  '%s changed locked and hidden fields.' => '%s님이 잠긴 및 숨겨진 필드를 변경했습니다.',
  'Edit Form %d: %s' => '편집 양식 %d: %s',
  'Output path already exists. Use "--overwrite" to overwrite it.' => '출력 경로가 이미 존재합니다. 덮어쓰려면 "--overwrite"를 사용하세요.',
  'Change Subtype' => '하위 유형 변경',
  'Drag and drop fields to reorder them.' => '필드를 드래그 앤 드롭하여 순서를 변경하세요.',
  '%s removed %d subscriber(s): %s.' => '%s님이 구독자를 제거했습니다: %3$s.',
  '%s renamed this %s from %s to %s.' => '%s님이 이 %s의 이름을 %s에서 %s(으)로 변경했습니다.',
  'Not an Edit Form' => '편집 양식이 아님',
  'Mark Form' => '양식 표시',
  'EditEngine ("%s") contains an invalid key character "/".' => 'EditEngine("%s")은 유효하지 않은 키 문자 "/"를 포함합니다.',
  'Change Default Values' => '기본 값 변경하기',
  '%s added %s watcher(s) for %s: %s.' => '%s님이 %3$s에 대한 주시자를 추가했습니다: %4$s.',
  'No default edit engine configuration for bulk edit.' => '대량 편집을 위한 기본 편집 엔진 구성이 없습니다.',
  'After running this command, reload this page to see the new setting.' => '이 명령을 실행한 이후 새로운 설정을 보려면 이 페이지를 다시 로드하세요.',
  'Save Defaults' => '기본값 저장',
  'Change how forms in other applications are created and edited. Advanced!' => '다른 애플리케이션에서 양식을 생성하고 편집하는 방식을 변경합니다. 고급 기능입니다!',
  'Form Order' => '형식 순서',
  'Mention In' => '멘션함',
  'HTTP Parameters' => 'HTTP 매개변수',
  'Transaction has type "%s", but that transaction type is not supported by this editor (%s).' => '트랜잭션 유형은 "%s"이지만 이 편집기(%s)에서는 해당 트랜잭션 유형을 지원하지 않습니다.',
  'Edit Engines' => '엔진 편집',
  'Disable this form? Users will no longer be able to use it.' => '이 양식을 비활성화합니까? 사용자들이 더 이상 사용할 수 없게 됩니다.',
  'Bulk Editor' => '대량 편집기',
  'Aliases
-------

Aliases are alternate recognized keys for a field. For example, a field with
a complex key like `examplePHIDs` might be have a simple version of that key
as an alias, like `example`.

Aliases work just like the primary key when prefilling forms. They make it
easier to remember and use HTTP parameters by providing more natural ways to do
some prefilling.

For example, if a field has `examplePHIDs` as a key but has aliases `example`
and `examples`, these three URIs will all do the same thing:

```
%s?examplePHIDs=...
%s?examples=...
%s?example=...
```

If a URI specifies multiple default values for a field, the value using the
primary key has precedence. Generally, you can not mix different aliases in
a single URI.
' => '별칭
-------

별칭은 필드에 대해 인식되는 대체 키입니다. 예를 들어, `examplePHIDs`와 같은 복잡한 키를 가진 필드는 해당 키의 간단한 버전인 `example`과 같은 별칭을 가질 수 있습니다.

별칭은 양식을 미리 채울 때 기본 키와 동일하게 작동합니다. 보다 자연스러운 방식으로 미리 채우기를 제공하여 HTTP 매개변수를 기억하고 사용하기 쉽게 만듭니다.

예를 들어, 필드의 키가 `examplePHIDs`이고 별칭이 `example`과 `examples`인 경우, 다음 세 URI는 모두 동일한 작업을 수행합니다.

```
 %s ?examplePHIDs=...
 %s ?examples=...
 %s ?example=...
```

URI에서 필드에 대해 여러 기본값을 지정하는 경우 기본 키를 사용하는 값이 우선합니다. 일반적으로 하나의 URI에 서로 다른 별칭을 혼합하여 사용할 수 없습니다.',
  'Transaction edge specification contains unexpected key "%s".' => '트랜잭션 엣지 명세에 예기치 않은 키 "%s"이(가) 포함되어 있습니다.',
  'Support Applications' => '지원 애플리케이션',
  'File attachment mode "%s" (for file "%s") is invalid. Valid modes are: %s.' => '(파일 "%2$s"에 대한) 파일 첨부 모드 "%s"이(가) 유효하지 않습니다. 유효한 모드: %3$s.',
  'Transaction must have a PHID before calling %s!' => '%s을(를) 호출하기 전에 트랜잭션에 PHID가 있어야합니다!',
  'EditEngine ("%s") returned no builtin engine configurations, but an edit engine must have at least one configuration.' => 'EditEngine("%s")이 내장 엔진 구성을 반환하지 않았지만 편집 엔진에는 최소한 하나의 구성이 있어야 합니다.',
  'This transaction group requires MFA to apply, but the Editor was not configured with a Request. This workflow can not perform an MFA check.' => '이 트랜잭션 그룹에 적용하려면 MFA가 필요하지만 편집기에 요청이 구성되어 있지 않습니다. 따라서 이 워크플로는 MFA 확인을 수행할 수 없습니다.',
  'Working Set' => '작업중인 셋',
  'Change the object subtype.' => '객체의 하위 유형을 변경합니다.',
  'Field Types
-----------

Fields in this form have the types described in the table below. This table
shows how to format values for each field type.' => '필드 유형
-----------

이 양식의 필드는 아래 표에 설명된 유형을 가집니다. 이 표는 각 필드 유형에 대한 값 형식 지정 방법을 보여줍니다.',
  'Subtype configuration is invalid: there is no subtype defined with key "%s". This subtype is required and must be defined.' => '하위 유형 구성이 잘못되었습니다: 키 "%s"(으)로 정의된 하위 유형이 없습니다. 이 하위 유형은 필수이며 반드시 정의되어야 합니다.',
  'Make comments.' => '댓글을 만듭니다.',
  'No Manage Permission' => '관리 권한 없음',
  'Via Content Source' => '내용 원본을 통해',
  'The object being edited does not implement any standard interfaces (like PhabricatorSubscribableInterface) which allow CCs to be generated automatically. Override the "getMailCC()" method and generate CCs explicitly.' => '편집 중인 객체가 CC를 자동으로 생성할 수 있는 표준 인터페이스(예: PhabricatorSubscribableInterface)를 구현하지 않습니다. "getMailCC()" 메서드를 재정의하고 CC를 명시적으로 생성하세요.',
  'Really remove this comment?' => '정말로 이 코멘트를 제거합니까?',
  'No MFA' => 'MFA 없음',
  '%s removed %s contributor(s) for %s: %s.' => '%s님이 %3$s에 대한 기여자를 제거했습니다: %4$s.',
  'Export format ("%s") is not enabled.' => '내보내기 형식("%s")이 활성화되어 있지 않습니다.',
  'This object has been locked.' => '이 객체는 잠겼습니다.',
  'Changed Policy' => '변경된 정책',
  'You can not apply transactions which already have IDs/PHIDs!' => '이미 ID/PHID가 있는 트랜잭션을 적용할 수 없습니다!',
  'Forms' => '양식',
  'File attachment mode (for file "%s") is invalid. Expected a string, found "%s".' => '(파일 "%s"에 대한) 파일 첨부 모드가 잘못되었습니다. 문자열이 예상되었지만 "%s"이(가) 발견되었습니다.',
  'Hide Edit Forms' => '편집 양식 숨기기',
  'Disable Form' => '양식 비활성화',
  'This form ("%s") is not marked as an edit form, so it can not be used to edit objects.' => '이 양식("%s")은 편집 양식으로 표시되어 있지 않으므로 객체 편집에 사용할 수 없습니다.',
  'Export data to a flat file (JSON, CSV, Excel, etc.).' => '데이터를 플랫 파일 형식(JSON, CSV, Excel 등)으로 내보냅니다.',
  'You must provide multi-factor credentials to comment or make changes, but you do not have multi-factor authentication configured on your account.' => '댓글을 달거나 변경하려면 다단계 인증 정보를 제공해야 하지만, 계정에 다단계 인증이 설정되어 있지 않습니다.',
  '%s edited a custom field on %s.' => '%s님이 %s의 사용자 지정 필드를 편집했습니다.',
  'Mention' => '언급',
  'export' => '내보내기',
  'Call to setShouldRequireMFA() is too late: this Editor has already checked for MFA requirements.' => 'setShouldRequireMFA() 호출이 너무 늦었습니다: 이 편집기는 이미 MFA 요구 사항을 확인했습니다.',
  'You have not selected any objects to edit.' => '편집할 객체를 선택하지 않았습니다.',
  'Work has already started on job "%s". Jobs can not be reconfigured after they have been started.' => '작업 "%s"에 대한 일이 이미 시작되었습니다. 작업은 시작된 후에는 재구성될 수 없습니다.',
  'Post Comment' => '댓글 게시하기',
  '%s moved this task to %s on the %s board.' => '%s님이 작업판 %3$s 상에서 이 태스크를 %s(으)로 이동했습니다.',
  'Enable this form? Users who can see it will be able to use it to create objects.' => '이 양식을 활성화합니까? 이 양식을 볼 수 있는 사용자들은 해당 양식을 사용하여 오브벡트를 만들 수 있게 됩니다.',
  'Specify one or more queries to export with "--query".' => '"--query"를 사용하여 내보낼 하나 이상의 쿼리를 지정하세요.',
  '%s changed the order in which this form appears in the "Edit" menu.' => '%s님이 "편집하기" 메뉴에서 이 양식이 나타나는 순서를 변경했습니다.',
  'View Herald Transcript' => 'Herald 기록 보기',
  'Unmark this form as a create form? It will still function properly, but no longer be reachable directly from the application "Create" menu.' => '이 양식의 생성 양식 표시를 해제하시겠습니까? 기능은 정상적으로 작동하지만, 애플리케이션의 "생성" 메뉴에서 직접 접근할 수 없게 됩니다.',
  'Removing a comment prevents anyone (including you) from reading it. Removing a comment also hides the comment\'s edit history and prevents it from being edited.' => '댓글을 삭제하면 본인을 포함한 누구도 해당 댓글을 읽을 수 없게 됩니다. 또한 댓글의 편집 역사가 숨겨지고 더 이상 편집할 수 없게 됩니다.',
  '%s removed %s contributor(s): %s.' => '%s님이 기여자를 제거했습니다: %3$s.',
  'Editor method "queuePublishing()" was called, but no publishable object is present. This Editor is not ready to publish.' => '편집기 메서드 "queuePublishing()"이 호출되었지만, 게시 가능한 객체가 없습니다. 이 편집기는 게시할 준비가 되지 않았습니다.',
  '%s created %s in the %s space.' => '%s님이 공간 %3$s에 %s을(를) 만들었습니다.',
  '%s added this form to the "Create" menu.' => '%s님이 이 양식을 "만들기" 메뉴에 추가했습니다.',
  'This %s already has that interact policy.' => '이 %s은(는) 이미 해당 상호작용 정책이 있습니다.',
  'You will be required to provide multi-factor credentials to make changes.' => '변경을 하려면 다단계 자격 인증을 제공해야 합니다.',
  '%s renamed this form from %s to %s.' => '%s님이 이 양식의 이름을 %s에서 %s(으)로 변경했습니다.',
  'Transaction edge data must either be the edge PHID or an edge specification dictionary.' => '트랜잭션 엣지 데이터는 엣지 PHID이거나 엣지 명세 딕셔너리이어야 합니다.',
  '**Locked** fields are visible in the form, but their values can not be changed
by the user.

**Hidden** fields are not visible in the form.

Any assigned default values are still respected, even if the field is locked
or hidden.' => '**잠김** 필드는 양식에 표시되지만 사용자는 값을 변경할 수 없습니다.

**숨겨짐** 필드는 양식에 표시되지 않습니다.

필드가 잠겨 있거나 숨겨져 있더라도 할당된 기본값은 그대로 유지됩니다.',
  'Unmark as Edit Form' => '편집 양식 표시를 해제',
  'Method Details' => '메서드 세부 정보',
  'No Default Create Forms' => '기본 생성 양식 없음',
  'Subtype configuration is invalid: subtype with key "%s" specifies both child subtypes and child forms. Specify one or the other, but not both.' => '하위 유형 구성이 잘못되었습니다: 키가 "%s"인 하위 유형은 하위 하위 유형과 하위 양식을 모두 지정합니다. 둘을 동시에 지정하지는 마세요.',
  'You can not sign a transaction group that has no other effects.' => '다른 효과가 없는 트랜잭션 그룹에는 서명할 수 없습니다.',
  'No Edit Forms' => '편집 양식이 없음',
  'Mark this form as a create form? It will appear in the application "Create" menus by default.' => '이 양식을 생성 양식으로 표시하시겠습니까? 그러면 기본적으로 애플리케이션의 "만들기" 메뉴에 표시됩니다.',
  '%s added %s unsubscriber(s) for %s: %s.' => '%s님이 %3$s에 대한 구독 해제자를 추가했습니다: %4$s.',
  'Edit Defaults' => '기본값 편집',
  'Encryption Required' => '암호화 필요',
  'Form name is required.' => '양식 이름은 필수입니다.',
  'No object exists with ID "%s".' => '"%s" ID의 객체가 존재하지 않습니다.',
  'You do not have any MFA factors attached to your account, so you can not sign this transaction group with MFA. Add MFA to your account in %s.' => '계정에 MFA 단계가 연결되어 있지 않으므로 MFA를 사용하여 이 트랜잭션 그룹에 서명할 수 없습니다. %s에서 계정에 MFA를 추가하세요.',
  '%s wrote:' => '%s님이 작성:',
  'Extension "%s" defines a bulk edit group with the same key ("%s") as the main editor or another extension. Each bulk edit group must have a unique key.' => '확장 기능 "%s"은(는) 기본 편집기 또는 다른 확장 기능과 동일한 키("%s")를 가진 대량 편집 그룹을 정의합니다. 각 대량 편집 그룹은 고유한 키를 가져야 합니다.',
  'Save Edit Order' => '편집 순서 저장',
  'File "%s" is invalid: it could not be loaded, or you do not have permission to view it. You must be able to see a file to attach it to an object.' => '파일 "%s"이(가) 유효하지 않습니다: 파일을 로드할 수 없거나 파일을 볼 수 있는 권한이 없습니다. 파일을 객체에 부착하려면 파일을 볼 수 있어야 합니다.',
  '%s removed %s unsubscriber(s): %s.' => '%s님이 구독 해제자를 제거했습니다: %3$s.',
  'EMAIL PREFERENCES' => '이메일 환경 설정',
  '%s edited this object (transaction type "%s").' => '%s님이 이 객체를 편집했습니다(트랜잭션 유형 "%s").',
  'Mark as "Edit" Form' => '"편집" 양식으로 표시',
  '%s edited watcher(s) for %s, added %s: %s; removed %s: %s.' => '%s님이 %s에 대한 주시자를 편집했습니다, 추가됨: %4$s, 제거됨: %6$s.',
  'This %s already has that edit policy.' => '이 %s은(는) 이미 해당 편집 정책이 있습니다.',
  'Conversation Locked' => '대화 잠김',
  'You do not have permission to configure forms for this application.' => '이 애플리케이션의 양식을 구성할 권한이 없습니다.',
  'CHANGES TO %s DESCRIPTION' => '설명 %s개의 변경사항',
  'Transaction ("%s", of type "%s") requires a handle ("%s") that it did not load.' => '트랜잭션("%s", 유형 "%s")에는 로드되지 않은 핸들("%s")이 필요합니다.',
  'Choose the object **subtype** that this form should create and edit.' => '이 양식이 생성하고 편집할 객체의 **하위 유형**을 선택하세요.',
  'Unmark this form as an edit form? It will no longer be able to be used to edit objects.' => '이 양식의 편집 양식 표시를 해제합니까? 그러면 더 이상 객체를 편집하는 데 사용할 수 없습니다.',
  'Configure bulk job __id__ to run silently (without sending mail or publishing notifications).' => '대량 작업 __id__를 조용하게 실행하도록 구성합니다 (메일을 보내거나 알림을 보내지 않음).',
  'User Guide: Customizing Forms' => '사용자 가이드: 양식 사용자 지정',
  'Make Editable' => '편집 가능하게 만들기',
  '%s disabled this form.' => '%s님이 이 양식을 비활성화했습니다.',
  '%s created an object: %s.' => '%s님이 객체를 만들었습니다: %s.',
  'Make this builtin form editable?' => '이 내장 양식을 편집 가능하게 만듭니까?',
  'Duplicate Form' => '양식 복제하기',
  'Drag and drop fields to change their priority for edits. When a user edits an object, they will be shown the first form in this list that they have permission to see.' => '필드를 드래그 앤 드롭하여 편집 우선순위를 변경하세요. 사용자가 객체를 편집할 때, 해당 사용자가 볼 수 있는 권한이 있는 목록의 첫 번째 양식이 표시됩니다.',
  '%s added %d subscriber(s): %s.' => '%s님이 구독자를 추가했습니다: %3$s.',
  'Unmark as "Create" Form' => '"생성" 양식 표시 해제',
  'When creating objects in the web interface, you can use HTTP parameters to
prefill fields in the form. This allows you to quickly create a link to a
form with some of the fields already filled in with default values.

To prefill a form, start by finding the URI for the form you want to prefill.
Do this by navigating to the relevant application, clicking the "Create" button
for the type of object you want to create, and then copying the URI out of your
browser\'s address bar. It will usually look something like this:

```
%s
```

However, `phorge.example.com` will be the domain where your copy of this
software is installed, and `application/` will be the URI for an application.
Some applications have multiple forms for creating objects or URIs that look a
little different than this example, so the URI may not look exactly like this.

To prefill the form, add properly encoded HTTP parameters to the URI. You
should end up with something like this:

```
%s?title=Platypus&body=Ornithopter
```

If the form has `title` and `body` fields of the correct types, visiting this
link will prefill those fields with the values "Platypus" and "Ornithopter"
respectively.

The rest of this document shows which parameters you can add to this form and
how to format them.


Supported Fields
----------------

This form supports these fields:
' => '웹 인터페이스에서 객체를 만들 때 HTTP 매개변수를 사용하여 양식의 필드를 미리 채울 수 있습니다. 이를 통해 일부 필드가 기본값으로 이미 채워진 양식으로 연결되는 링크를 빠르게 만들 수 있습니다.

양식을 미리 채우려면 먼저 미리 채우려는 양식의 URI를 찾습니다. 관련 애플리케이션으로 이동하고, 만들려는 객체 유형의 "만들기" 버튼을 클릭한 뒤, 브라우저 주소 표시줄에서 URI를 복사하면 됩니다. 보통 다음과 비슷한 형태입니다:

```
%s
```

하지만 `phorge.example.com`은 이 소프트웨어가 설치된 도메인이며, `application/`은 애플리케이션의 URI입니다. 일부 애플리케이션에는 객체를 만들기 위한 여러 양식이나 이 예시와 조금 다른 URI가 있을 수 있으므로, URI가 반드시 이 예시와 정확히 같지는 않을 수 있습니다.

양식을 미리 채우려면 URI에 올바르게 인코딩된 HTTP 매개변수를 추가합니다. 최종 결과는 다음과 비슷해야 합니다:

```
%s?title=Platypus&body=Ornithopter
```

양식에 올바른 유형의 `title` 및 `body` 필드가 있으면, 이 링크를 방문했을 때 해당 필드는 각각 "Platypus"와 "Ornithopter" 값으로 미리 채워집니다.

이 문서의 나머지 부분에서는 이 양식에 추가할 수 있는 매개변수와 형식을 설명합니다.


지원되는 필드
----------------

이 양식은 다음 필드를 지원합니다:',
  'Exception when processing transaction of type "%s": %s' => '"%s" 유형의 트랜잭션 처리 중 예외 발생: %s',
  '%s created this object in space %s.' => '%s님이 공간 %s에 이 객체를 만들었습니다.',
  'Engine: Edit' => '엔진: 편집',
  '%s changed the interact policy for %s.' => '%s님이 %s의 상호작용 정책을 변경했습니다.',
  '%s removed %s watcher(s) for %s: %s.' => '%s님이 %3$s에 대한 주시자를 제거했습니다: %4$s.',
  '%s moved %s from %s to %s on the %s board.' => '%s님이 작업판 %5$s 상에서 %s을(를) %s에서 %s(으)로 이동했습니다.',
  'EditEngine "%s" created or loaded an invalid object: object must actually be an object, but is of some other type ("%s").' => 'EditEngine "%s"이(가) 유효하지 않은 객체를 생성하거나 로드했습니다. 객체는 실제로는 객체여야 하지만 다른 유형입니다("%s").',
  '%s edited unsubscriber(s) for %s, added %s: %s; removed %s: %s.' => '%s님이 %s에 대한 구독 해제자를 편집했습니다, 추가됨: %4$s, 제거됨: %6$s.',
  'Attempting to apply a transaction (of class "%s", with type "%s") which has not been constructed correctly: %s' => '올바르게 구성되지 않은 트랜잭션(클래스 "%s", 유형 "%s")을 적용하려고 시도했습니다: %s',
  '%s modified %s attached file(s): %s.' => '%s님이 첨부된 파일을 수정했습니다: %3$s.',
  'Unable to load transactions: %s.' => '트랜잭션을 불러올 수 없습니다: %s.',
  'Subtype configuration is invalid: subtype with key "%s" has no name. Subtypes must have a name.' => '하위 유형 구성이 잘못되었습니다: 키 "%s"을(를) 가진 하위 유형에 이름이 없습니다. 하위 유형에 이름은 필수입니다.',
  'Comment to add, formatted as remarkup.' => '리마크업 형식의, 추가하려는 댓글입니다.',
  'Transaction with key "%s" has invalid type "%s". This type is not recognized. Valid types are: %s.' => '"%s" 키의 트랜잭션은 유효하지 않은 "%s" 유형이 있습니다. 이 유형을 인식할 수 없습니다. 유효한 유형은 %s입니다.',
  'Show Only Create Forms' => '만들기 양식만 표시',
  'You can not interact with this object because it is locked.' => '이 객체가 잠겨있기 때문에 상호작용할 수 없습니다.',
  'This object is already in that space.' => '이 객체는 이미 그 공간에 있습니다.',
  'Expected "newTimelineView()" to return an object of class "%s" (in engine "%s").' => '"newTimelineView()"가 (엔진 "%2$s"의) "%s" 클래스의 객체를 반환할 것으로 예상했습니다.',
  'This %s already has that join policy.' => '이 %s은(는) 이미 해당 참여 정책이 있습니다.',
  '%s shifted this object from the %s space to the %s space.' => '%s님이 이 객체를 공간 %s에서 공간 %s(으)로 옮겼습니다.',
  '%s changed the interact policy from "%s" to "%s".' => '%s님이 상호작용 정책을 "%s"에서 "%s"(으)로 변경했습니다.',
  'Create Form' => '생성 양식',
  '%s renamed %s %s from %s to %s.' => '%s님이 %s %s의 이름을 %s에서 %s(으)로 변경했습니다.',
  '%s moved this task on %s board(s): %s.' => '%s님이 작업판 %s개 상에서 이 태스크를 이동했습니다: %s.',
  'Unable to load query for transaction object "%s"!' => '트랜잭션 객체 "%s"에 대한 쿼리를 로드할 수 없습니다!',
  'Changed Subscribers' => '변경된 구독자',
  '%s created %s %s.' => '%s님이 %s %s을(를) 만들었습니다.',
  'Comment for this transaction was not loaded.' => '이 트랜잭션에 대한 댓글이 로드되지 않았습니다.',
  'Raw Comment' => '원본 댓글',
  '%s created this object with interact policy "%s".' => '%s님이 이 객체를 상호작용 정책 "%s"와(과) 함께 만들었습니다.',
  'Save Create Order' => '생성 순서 저장',
  '%s updated subscribers of %s.' => '%s님이 %s의 구독자를 업데이트했습니다.',
  '%s created this object.' => '%s님이 이 객체를 만들었습니다.',
  'Unknown export format ("%s"). Known formats are: %s.' => '알 수 없는 내보내기 형식입니다 ("%s"). 알려진 형식: %s.',
  'You have not chosen any edits to apply.' => '적용할 편집을 선택하지 않았습니다.',
  'No herald adapter specified.' => 'Herald 어댑터가 지정되지 않았습니다.',
  'Comment History' => '코멘트 역사',
  'Unable to load object with PHID "%s"!' => '"%s" PHID의 객체를 불러올 수 없습니다!',
  'Edit Form' => '편집 양식',
  'You can not apply transactions which already have %s!' => '이미 %s이(가) 있는 트랜잭션을 적용할 수 없습니다!',
  '%s edited an edge.' => '%s님이 엣지를 편집했습니다.',
  '%s unsubscribed.' => '%s님이 구독을 해제했습니다.',
  '%s edited contributor(s) for %s, added %s: %s; removed %s: %s.' => '%s님이 %s에 대한 기여자를 편집했습니다, 추가됨: %4$s, 제거됨: %6$s.',
  'Subtype configuration is invalid: two subtypes use the same key ("%s"). Each subtype must have a unique key.' => '하위 유형 구성이 잘못되었습니다: 두 개의 하위 유형이 동일한 키("%s")를 사용하고 있습니다. 각 하위 유형은 고유한 키를 가져야 합니다.',
  'Parameter "%s" must contain a list of transaction descriptions, but item with key "%s" is missing a "type" field. Each transaction must have a type field.' => '매개변수 "%s"에는 트랜잭션 설명 목록이 포함되어야 하지만, 키 "%s"을(를) 가진 항목에 "유형" 필드가 누락되었습니다. 각 트랜잭션에는 유형 필드가 있어야 합니다.',
  'This transaction is supposed to have an %s set, but it does not!' => '이 트랜잭션은 "%s"이(가) 설정되어 있어야 하지만, 그렇지 않습니다!',
  'Comment Preview' => '댓글 미리보기',
  'Untitled Form' => '제목 없는 양식',
  '%s edited subscriber(s) for %s, added %s: %s; removed %s: %s.' => '%s님이 %s에 대한 구독자를 편집했습니다, 추가됨: %4$s, 제거됨: %6$s.',
  'Unsupported bulk edit type "%s".' => '지원되지 않는 대량 편집 유형 "%s".',
  'Validation errors:' => '유효성 검사 오류:',
  'This object has no select fields.' => '이 객체에는 선택 필드가 없습니다.',
  'Mentioned User' => '언급된 사용자',
  '%s created this form.' => '%s님이 이 양식을 만들었습니다.',
  'List of PHIDs to set.' => '설정할 PHID 목록입니다.',
  'This comment was signed with MFA, so you will be required to provide MFA credentials to make changes.' => '이 댓글은 MFA로 서명되었으므로, 수정하려면 MFA 자격 증명을 제시해야 합니다.',
  'The %s policy of this object would no longer allow you to %s the object.' => '이 객체에 적용된 %s 정책 때문에 더 이상 객체에 %s 할 수 없습니다.',
  '%s added %s unsubscriber(s): %s.' => '%s님이 구독 해제자를 추가했습니다: %3$s.',
  'EDIT DETAILS' => '편집 세부 정보',
  '%s edited a custom field (with key "%s").' => '%s님이 (키 "%s"을(를) 사용하여) 사용자 지정 필드를 편집했습니다.',
  'No Create Permission' => '생성 권한 없음',
  'Edge transactions must have PHIDs or edge specs as values (found value "%s" on transaction of type "%s").' => '엣지 트랜잭션에는 PHID 또는 엣지 사양을 값으로 가져야 합니다 (예: "%2$s" 유형의 트랜잭션에서 "%s" 값 발견).',
  'Remove Action: %s' => '작업 제거: %s',
  'Show Only Edit Forms' => '편집 양식만 표시',
  'This is a standard **ApplicationEditor** method which allows you to create and modify objects by applying transactions. For documentation on these endpoints, see **[[ %s | Conduit API: Using Edit Endpoints ]]**.' => '트랜잭션을 적용하여 객체를 생성 및 수정할 수 있는 표준 **ApplicationEditor** 메서드입니다. 이러한 종단점에 대한 문서는 **[[ %s | Conduit API: 편집 종단점 사용 ]]**을 참조하세요.',
  'HTTP Parameters: %s' => 'HTTP 매개변수: %s',
  '"%s" must be a non-empty list of author PHIDs.' => '"%s"은(는) 비어 있지 않은 작성자 PHID 목록이어야 합니다.',
  'Edit Form: %s' => '양식 편집하기: %s',
  '%s moved this task from %s to %s on the %s board.' => '%s님이 작업판 %4$s 상에서 이 태스크를 %s에서 %s(으)로 이동했습니다.',
  'List of PHIDs to remove.' => '제거할 PHID 목록입니다.',
  'Create New Form' => '새로운 양식 만들기',
  '%s updated the description for %s %s.' => '%s님이 %s %s에 대한 설명을 업데이트했습니다.',
  'This application is not configured with any forms for creating objects that are visible to you and enabled.' => '이 애플리케이션에는 사용자가 볼 수 있고 활성화된 객체를 생성하기 위한 양식이 구성되어 있지 않습니다.',
  'Select Fields
-------------

Some fields support selection from a specific set of values. When prefilling
these fields, use the value in the **Value** column to select the appropriate
setting.
' => '필드 선택
-------------

일부 필드는 특정 값 집합에서 선택할 수 있습니다. 이러한 필드를 미리 채울 때는 **값** 열의 값을 사용하여 적절한 설정을 선택하세요.',
  'Transaction requires handles and it did not load them.' => '트랜잭션이 핸들을 필요로 하지만, 핸들을 로드하지 않았습니다.',
  '"%s" must be a list of constraints.' => '"%s"은(는) 제약 조건 목록이어야 합니다.',
  '(Show Details)' => '(세부 정보 보기)',
  '%s edited this %s.' => '%s님이 이 %s을(를) 편집했습니다.',
  '%s edited a custom field.' => '%s님이 사용자 지정 필드를 편집했습니다.',
  'Apply remaining actions?' => '나머지 작업을 적용합니까?',
  'Two bulk edit groups have the same key ("%s"). Each bulk edit group must have a unique key.' => '두 개의 대량 편집 그룹이 동일한 키("%s")를 사용하고 있습니다. 각 대량 편집 그룹은 고유한 키를 가져야 합니다.',
  'Supported values:' => '지원되는 값:',
  'If the output file already exists, overwrite it instead of raising an error.' => '출력 파일이 이미 존재하는 경우 오류를 발생시키는 대신 덮어씁니다.',
  'List of PHIDs to add.' => '추가할 PHID 목록입니다.',
  'You have not moved this object to any columns it is not already in.' => '이 객체를 현재 열 이외의 다른 열로 이동하지 않았습니다.',
  'Failed to reload object identified by monogram "%s" when querying by PHID.' => 'PHID로 검색할 때 모노그램 "%s"(으)로 식별된 객체를 다시 로드하는 데 실패했습니다.',
  'Configure Form' => '양식 구성',
  'Edit Locked Object' => '잠긴 객체 편집',
  '%s of your actions have no effect:' => array(
    '작업 중 하나는 효과가 없습니다:',
    '작업 중 몇 개는 효과가 없습니다:',
  ),
  'You can not post an empty comment.' => '비어 있는 코멘트를 게시할 수 없습니다.',
  'Field "%s" has a bulk edit group key ("%s") with no corresponding bulk edit group.' => '필드 "%s"에는 대응하는 대량 편집 그룹이 없는 대량 편집 그룹 키("%s")가 있습니다.',
  'Exported data to "%s".' => '"%s"(으)로 데이터를 내보냈습니다.',
  '%s edited subscriber(s), added %d: %s; removed %d: %s.' => '%s님이 구독자를 편집했습니다, 추가됨: %3$s, 제거됨: %5$s.',
  'Mail extension ("%s") defines a stamp template with the same key ("%s") as another template. Each stamp template must have a unique key.' => '메일 확장 기능("%s")은 다른 틀과 동일한 키("%s")를 가진 스탬프 틀을 정의합니다. 각 스탬프 틀은 고유한 키를 가져야 합니다.',
  'File attachment transaction must have a map of files to attachment modes, found "%s".' => '파일 첨부 트랜잭션에는 파일과 첨부 모드의 매핑이 있어야 하며, "%s"이(가) 발견되었습니다.',
  '%s updated %s attached file(s), added %s: %s; removed %s: %s.' => '%s님이 첨부된 파일을 업데이트했습니다, 추가됨: %4$s, 제거됨: %6$s.',
  '%s changed the order in which this form appears in the "Create" menu.' => '%s님이 "만들기" 메뉴에서 이 양식이 나타나는 순서를 변경했습니다.',
  '%s named this form %s.' => '%s님이 이 양식을 %s(으)로 지정했습니다.',
  '%s added %s subscriber(s) for %s: %s.' => '%s님이 %3$s에 대한 구독 해제자를 추가했습니다: %4$s.',
  '%s mentioned this in %s.' => '%s님이 이 것을 %s에서 언급했습니다.',
  '%s created this object with join policy "%s".' => '%s님이 이 객체를 참가 정책 "%s"와(과) 함께 만들었습니다.',
  'Subtype configuration is invalid: it must be a list of subtype specifications.' => '하위 유형 구성이 잘못되었습니다: 하위 유형 명세의 목록이어야 합니다.',
  'Transaction Summary' => '트랜잭션 요약',
  'Use Form' => '양식 사용',
  'The command "!%s" is not a supported mail command. Valid commands for this object are: %s.' => '명령어 "!%s"은(는) 지원되지 않는 메일 명령입니다. 이 객체에 대한 유효한 명령: %s.',
  'Parameter "%s" must contain a list of transaction descriptions, but item with key "%s" is not a dictionary.' => '매개변수 "%s"에는 트랜잭션 설명 목록이 포함되어야 하지만, 키 "%s"을(를) 가진 항목은 딕셔너리가 아닙니다.',
  'Edit Comment' => '코멘트 편집',
  '%s marked this form as an edit form.' => '%s님이 이 양식을 편집 양식으로 표시했습니다.',
  'Edge transactions must have destination PHIDs as in edge lists (found key "%s" on transaction of type "%s").' => '엣지 트랜잭션은 엣지 목록에 있는 것과 같은 대상 PHID를 가져야 합니다("%2$s" 유형의 트랜잭션에서 "%s" 키가 발견됨).',
  'This transaction group requires MFA to apply, but the Editor was not configured with a Cancel URI. This workflow can not perform an MFA check.' => '이 트랜잭션 그룹에 적용하려면 MFA가 필요하지만 편집기에 취소 URI가 구성되어 있지 않습니다. 따라서 이 워크플로는 MFA 확인을 수행할 수 없습니다.',
  'EditEngine ("%s") returned builtin engine configurations, but one (with key "%s") is missing a builtin key. Provide a builtin key for each configuration (you can omit it from the first configuration in the list to automatically assign the default key).' => 'EditEngine("%s")이 내장 엔진 구성을 반환했지만, 하나(키 "%s")는 내장 키가 누락된 채입니다. 각 구성에 내장 키를 지정하세요(목록의 첫 번째 구성에서 생략함으로써 기본 키를 자동으로 할당하도록 할 수 있습니다).',
  'Monogram "%s" does not identify a valid object.' => '모노그램 "%s"이(가) 유효한 객체를 식별하지 않습니다.',
  'Silent Edit' => '조용한 편집',
  '"%s" must be a string (PHID or object monogram).' => '"%s"은(는) 문자열이어야 합니다(PHID 또는 객체 모노그램).',
  'Reorder Fields' => '필드 재정렬',
  'Task has invalid task data.' => '태스크에 유효하지 않은 태스크 데이터가 있습니다.',
  'Add Action...' => '작업 추가...',
  'Detached' => '분리됨',
  'This transaction should generate its %s automatically, but has already had one set!' => '이 트랜잭션은 자신의 "%s"을(를) 자동으로 생성해야 하지만, 이미 설정되어 있습니다!',
  '%s removed this form from the "Create" menu.' => '%s님이 이 양식을 "만들기" 메뉴에서 제거했습니다.',
  'Type a form name...' => '양식 이름을 입력하세요...',
  'Custom field transaction \'%s\' does not implement integration for %s.' => '사용자 지정 필드 트랜잭션 \'%s\'은(는) %s에 대한 통합을 구현하지 않습니다.',
  'Create %s' => '%s 만들기',
  'Specified queries use different engines: query "%s" uses engine "%s", not "%s". All queries must run on the same engine.' => '지정된 쿼리들이 서로 다른 엔진을 사용합니다. 예를 들어, 쿼리 "%s"은(는) 엔진 "%3$s"이(가) 아닌 "%s"을(를) 사용합니다. 모든 쿼리는 동일한 엔진에서 실행되어야 합니다.',
  '%s changed the join policy from "%s" to "%s".' => '%s님이 참여 정책을 "%s"에서 "%s"(으)로 변경했습니다.',
  '%s updated subscribers...' => '%s님이 다음의 구독자를 업데이트했습니다...',
  'Remove Comment' => '댓글 제거',
  'Transaction (of type "%s") has no effect.' => '트랜잭션(유형 "%s")은 아무런 효과가 없습니다.',
  'Make Builtin Editable' => '내장을 편집 가능하게 만들기',
  'Editor ("%s") has no mail stamp template with provided key ("%s").' => '편집기("%s")에는 제공된 키("%s")를 가진 메일 스탬프 틀이 없습니다.',
  'You can not shift this object in the selected space, because the space does not exist or you do not have access to it.' => '선택한 공간이 존재하지 않거나 접근 권한이 없으므로 해당 공간으로 이 객체를 이동할 수 없습니다.',
  'You must choose a space for this object.' => '이 객체에 대한 공간을 선택해야 합니다.',
  'Edit Forms' => '편집 양식',
  'Mark as Create Form' => '생성 양식으로 표시',
  '%s added %s subscriber(s): %s.' => '%s님이 구독자를 추가했습니다: %3$s.',
  'Unmark Form' => '양식 표시 해제',
  'Parameter "%s" must contain a list of transaction descriptions, but item with key "%s" is missing a "value" field. Each transaction must have a value field.' => '매개변수 "%s"에는 트랜잭션 설명 목록이 포함되어야 하지만, 키 "%s"을(를) 가진 항목에 "값" 필드가 누락되었습니다. 각 트랜잭션에는 값 필드가 있어야 합니다.',
  'Subtype "%s" is not valid: subtype keys may only contain lowercase latin letters ("a" through "z").' => '하위 유형 "%s"이(가) 유효하지 않습니다: 하위 유형 키에는 소문자 라틴 문자("a"부터 "z"까지)만 포함될 수 있습니다.',
  'Capability not supported.' => '기능이 지원되지 않습니다.',
  'Use "--id" to choose a bulk job to make silent.' => '"--id"를 사용해서 조용하게 만들 대량 작업을 선택하세요.',
  'Change Form Subtype' => '양식 하위 유형 변경하기',
  '%s added %s contributor(s): %s.' => '%s님이 기여자를 추가했습니다: %3$s.',
  '%s removed %s watcher(s): %s.' => '%s님이 주시자를 제거했습니다: %3$s.',
  '%s created this object with edit policy "%s".' => '%s님이 이 객체를 편집 정책 "%s"와(과) 함께 만들었습니다.',
  'Unable to load bulk job with ID "%s".' => 'ID "%s"을(를) 가진 대량 작업을 로드할 수 없습니다.',
  '%s added %s watcher(s): %s.' => '%s님이 주시자를 추가했습니다: %3$s.',
  'Task has no object PHID!' => '태스크에 객체 PHID가 없습니다!',
  'Transaction type \'%s\' is missing an internal apply implementation!' => '트랜잭션 유형 \'%s\'에 내부 적용 구현이 누락되어 있습니다!',
  '%s attached files...' => '%s개의 첨부된 파일...',
  'Old Mode' => '이전 모드',
  'Flag "--overwrite" has no effect when outputting to stdout.' => '"--overwrite" 플래그는 stdout으로 출력할 경우엔 아무런 효과가 없습니다.',
  'You do not have permission to create these objects.' => '이 객체를 만들 권한이 없습니다.',
  'Export the data selected by one or more queries.' => '하나 이상의 쿼리에서 선택한 데이터를 내보냅니다.',
  'Specified "%s" does not exist. See the endpoint documentation for valid object types.' => '지정된 "%s"이(가) 존재하지 않습니다. 유효한 객체 유형에 대해서는 종단점 설명문서를 참조하세요.',
  'Bulk Edit' => '대량 편집',
  'Write output to a file. If omitted, output will be sent to stdout.' => '출력을 파일에 작성합니다. 생략하면 stdout으로 보내집니다.',
  'You will be required to provide multi-factor credentials to comment or make changes.' => '댓글을 달거나 변경을 하려면 다단계 자격 인증을 제공해야 합니다.',
  '%s shifted %s from the %s space to the %s space.' => '%s님이 %s을(를) 공간 %s에서 공간 %s(으)로 옮겼습니다.',
  'EditEngine ("%s") returned builtin engine configurations, but at least two specify the same builtin key ("%s"). Engines must have unique builtin keys.' => 'EditEngine("%s")이 내장 엔진 구성을 반환했지만, 최소 두 개 이상의 엔진이 동일한 내장 키("%s")를 지정했습니다. 엔진은 고유한 내장 키를 가져야 합니다.',
  'This comment has been deleted.' => '이 댓글은 삭제되었습니다.',
  'Add Another Action' => '다른 작업 추가하기',
  'Template Objects
----------------

Instead of specifying each field value individually, you can specify another
object to use as a template. Some of the initial fields will be copied from the
template object.

Specify a template object with the `template` parameter. You can use an ID,
PHID, or monogram (for objects which have monograms). For example, you might
use URIs like these:

```
%s?template=123
%s?template=PHID-WXYZ-abcdef...
%s?template=T123
```

You can combine the `template` parameter with HTTP parameters: the template
object will be copied first, then any HTTP parameters will be read.

When using `template`, these fields will be copied:' => '틀 객체
----------------

각 필드 값을 개별적으로 지정하는 대신, 틀으로 사용할 다른 객체를 지정할 수 있습니다. 초기 필드 중 일부는 틀 객체에서 복사됩니다.

`template` 매개변수를 사용하여 틀 객체를 지정합니다. ID, PHID 또는 모노그램(모노그램이 있는 객체의 경우)을 사용할 수 있습니다. 예를 들어, 다음과 같은 URI를 사용할 수 있습니다.

```
%s?template=123
%s?template=PHID-WXYZ-abcdef...
%s?template=T123
```

`template` 매개변수를 HTTP 매개변수와 함께 사용할 수 있습니다. 틀 객체가 먼저 복사된 다음 HTTP 매개변수가 읽힙니다.

`template`을 사용하는 경우 다음 필드가 복사됩니다.',
  'Name is required.' => '이름은 필수입니다.',
  'Hide Create Forms' => '만들기 양식 숨기기',
  'Configure a bulk job to execute silently.' => '대량 작업을 조용하게 실행하도록 구성합니다.',
  'Custom field transaction has no \'%s\'!' => '사용자 지정 필드 트랜잭션에 \'%s\'이(가) 없습니다!',
  '%s signed these changes with MFA.' => '%s님이 이 변경들을 MFA에 서명했습니다.',
  'SearchEngine class ("%s") does not support data export.' => 'SearchEngine 클래스("%s")는 데이터 내보내기를 지원하지 않습니다.',
  '%s unmarked this form as an edit form.' => '%s님이 이 양식의 편집 양식 표시를 해제했습니다.',
  'Multiple search engines match "%s": %s.' => '복수의 검색 엔진이 "%s"와(과) 일치합니다: %s.',
  'Mark as "Create" Form' => '"생성" 양식으로 표시',
  'Failed to base64_decode() value for key "%s".' => '"%s" 키에 대한 값을 base64_decode()하는데 실패했습니다.',
  'Create another form with the same settings as this one?' => '이 양식과 동일한 설정으로 다른 양식을 만듭니까?',
  'Change Field Order' => '필드 순서 변경하기',
  'Forms must have a name.' => '폼에 이름은 필수입니다.',
  '%s changed the default values for field %s.' => '%s님이 필드 %s의 기본값을 변경했습니다.',
  'This EditField does not provide a Bulk EditType with key "%s".' => '이 EditField는 키 "%s"을(를) 가진 Bulk EditType을 제공하지 않습니다.',
  'EditEngine ("%s") returned builtin engine configurations, but none are marked as default and the first configuration has a different builtin key already. Mark a builtin as default or omit the key from the first configuration' => 'EditEngine("%s")이 내장 엔진 구성을 반환했지만, 기본값으로 표시된 구성이 없으며 첫 번째 구성에 이미 다른 내장 키가 있습니다. 내장 엔진을 기본값으로 표시하거나 첫 번째 구성에서 키를 생략하세요.',
  '%s marked %s inline comment(s) as done and %s inline comment(s) as not done.' => '%s님이 인라인 댓글 %s개를 완료됨으로, 인라인 댓글 %s개를 완료되지 않음으로 표시했습니다.',
  '!%s (or %s)' => '!%s (또는 %s)',
  '%s reordered the fields in this form.' => '%s님이 이 양식의 필드를 재정렬했습니다.',
  'This is a preview of the current form configuration.' => '이것은 현재 양식 구성의 미리 보기입니다.',
  '%s changed the edit policy for %s.' => '%s님이 %s의 편집 정책을 변경했습니다.',
  'All Forms' => '모든 양식',
  'This %s already has that view policy.' => '이 %s은(는) 이미 해당 보기 정책이 있습니다.',
  '%s subscribed.' => '%s님이 구독했습니다.',
  'Transactions are visible to users that can see the object which was acted upon. Some transactions - in particular, comments - are editable by the transaction author.' => '트랜잭션은 해당 작업이 수행된 객체를 볼 수 있는 사용자에게 표시됩니다. 일부 트랜잭션, 특히 댓글은 트랜잭션의 작성자가 편집할 수 있습니다.',
  'Subtype configuration is invalid: subtype with key "%s" specifies that it can mutate into subtype "%s", but that is not a valid subtype.' => '하위 유형 구성이 잘못되었습니다: 키가 "%s"인 하위 유형은 하위 유형 "%s"(으)로 변경될 수 있다고 지정하지만 이는 유효한 하위 유형이 아닙니다.',
  'Subtype "%s" is not a valid subtype.' => '하위 유형 "%s"은(는) 유효한 하위 유형이 아닙니다.',
  'Query "%s" is unknown. To run a builtin query like "all" or "active", also specify the search engine with "--class".' => '"%s" 쿼리를 알 수 없습니다. "all" 또는 "active"와 같은 내장 쿼리를 실행하려면 "--class"를 사용하여 검색 엔진을 지정하세요.',
  'The source object has a comment which mentions the destination object.' => '소스 객체는 도착 객체를 언급하는 댓글을 가집니다.',
  '%s removed %s unsubscriber(s) for %s: %s.' => '%s님이 %3$s에 대한 구독 해제자를 제거했습니다: %4$s.',
  'For full details, run `/bin/mail show-inbound --id %d`' => '자세한 내용을 보려면 `/bin/mail show-inbound --id %d`을 실행하세요.',
  'This object is locked. Edit it anyway?' => '이 객체는 잠겨 있습니다. 그래도 편집합니까?',
  '%s Action(s) With No Effect' => '효과 없는 작업',
  'Configured job "%s" to run silently.' => '작업 "%s"이(가) 조용히 실행되도록 구성되었습니다.',
  'View Form Configurations' => '양식 구성 보기',
  '%s removed %s attached file(s): %s.' => '%s님이 첨부된 파일을 제거했습니다: %3$s.',
  '%s ("%s")' => '%s ("%s")',
  'Comments are visible to users who can see the object which was commented on. Comments can be edited by their authors.' => '댓글은 해당 댓글이 달린 객체를 볼 수 있는 사용자에게 표시됩니다. 댓글 작성자는 댓글을 편집할 수 있습니다.',
  'Custom field transaction has invalid \'%s\'; field \'%s\' is disabled or does not exist.' => '사용자 지정 필드 트랜잭션에 유효하지 않은 필드 \'%s\'이(가) 있습니다. 필드 \'%s\'이(가) 비활성화되었거나 존재하지 않습니다.',
  'This object has no fields with aliases.' => '이 객체는 별칭을 가진 필드가 없습니다.',
  'Do you want to post your comment anyway?' => '그래도 코멘트를 게시하시겠습니까?',
  'All Edit Engines' => '모든 편집 엔진',
  '%s Action(s) Have No Effect' => '효과 없는 작업',
  'This EditField does not provide a Conduit EditType with key "%s".' => '이 EditField는 키 "%s"을(를) 가진 Conduit EditType을 제공하지 않습니다.',
  'None of the fields on this object support templating.' => '이 객체의 필드 중 틀화를 지원하는 필드는 없습니다.',
  'Mentioned Here' => '여기에 언급됨',
  'Edge transaction includes edge of type \'%s\', but transaction is of type \'%s\'. Each edge transaction must alter edges of only one type.' => '엣지 트랜잭션에는 \'%s\' 유형의 엣지가 포함되지만 트랜잭션 유형은 \'%s\'입니다. 각 엣지 트랜잭션은 한 가지 유형의 엣지만 변경해야 합니다.',
  'This comment was removed by %s.' => '이 댓글은 %s님에 의해 제거되었습니다.',
  'Apply Remaining Actions' => '나머지 작업을 적용',
  '%s edited watcher(s), added %s: %s; removed %s: %s.' => '%s님이 주시자를 편집했습니다, 추가됨: %3$s, 제거됨: %5$s.',
  '%s edited unsubscriber(s), added %s: %s; removed %s: %s.' => '%s님이 구독 해제자를 편집했습니다, 추가됨: %3$s, 제거됨: %5$s.',
  '%s changed the join policy for %s.' => '%s님이 %s의 참여 정책을 변경했습니다.',
  'Object Locked' => '객체 잠김',
  'Edit Form Configuration' => '편집 양식 구성',
  'Query "%s" is not a recognized query for class "%s".' => '"%s" 쿼리는 "%s" 클래스에 대해 인식하지 못했습니다.',
  'You can not remove this comment because the conversation is locked.' => '대화가 잠겨 있으므로 이 의견을 제거할 수 없습니다.',
  '%s updated a token.' => '%s님이 토큰을 업데이트했습니다.',
  'Form Preview' => '양식 미리 보기',
  '%s changed the subtype of this form from %s to %s.' => '%s님이 이 양식의 하위 유형을 %s에서 %s(으)로 변경했습니다.',
  'If you start work now, this edit will send mail and publish notifications normally.' => '지금 일을 시작하면 이 편집은 메일을 보내고 알림을 정상적으로 게시합니다.',
  'When an object (like a task) is edited, the relevant application creates a
"transaction" and applies it. This list of transactions on each object is the
basis for essentially all edits and comments. Reviewing the transaction
record allows you to see who edited an object, when, and how their edit changed
things.

One common reason to call this method is that you\'re implementing a webhook and
just received a notification that an object has changed. See the Webhooks
documentation for more detailed discussion of this use case.

One Object Type at a Time
=========================

This API method can query transactions for any type of object which supports
transactions, but only one type of object can be queried per call. For example:
you can retrieve transactions affecting Tasks, or you can retrieve transactions
affecting Revisions, but a single call can not retrieve both.

This is a technical limitation arising because (among other reasons) there is
no global ordering on transactions.

To find transactions for a specific object (like a particular task), pass the
object PHID or an appropriate object identifier (like `T123`) as an
`objectIdentifier`.

To find all transactions for an object type, pass the object type constant as
an `objectType`. For example, the correct identifier for tasks is `TASK`. (You
can quickly find an unknown type constant by looking at the PHID of an object
of that type.)

All supported values for `objectType`:

%s

Constraints
===========

These constraints are supported:

  - `phids` //Optional list<phid>.// Find specific transactions by PHID. This
    is most likely to be useful if you\'re responding to a webhook notification
    and want to inspect only the related events.
  - `authorPHIDs` //Optional list<phid>.// Find transactions with particular
    authors.

Transaction Format
==================

Each transaction has custom data describing what the transaction did. The
format varies from transaction to transaction. The easiest way to figure out
exactly what a particular transaction looks like is to make the associated kind
of edit to a test object, then query that object.

Not all transactions have data: by default, transactions have a `null` "type"
and no additional data. This API does not expose raw transaction data because
some of it is internal, oddly named, misspelled, confusing, not useful, or
could create security or policy problems to expose directly.

New transactions are exposed (with correctly spelled, comprehensible types and
useful, reasonable fields) as we become aware of use cases for them.
' => '객체(예: 태스크)가 편집되면, 관련 애플리케이션은 "트랜잭션"을 생성하고 이를 적용합니다. 각 객체의 트랜잭션 목록은 사실상 모든 편집과 댓글의 기반이 됩니다. 트랜잭션 기록을 검토하면 누가 객체를 편집했는지, 언제 편집했는지, 그리고 그 편집으로 무엇이 어떻게 변경되었는지 확인할 수 있습니다.

이 메서드를 호출하는 일반적인 이유 중 하나는 웹훅을 구현하고 있으며 방금 어떤 객체가 변경되었다는 알림을 받은 경우입니다. 이 사용 사례에 대한 자세한 설명은 웹훅 문서를 참고하세요.

한 번에 하나의 객체 유형만
=========================

이 API 메서드는 트랜잭션을 지원하는 모든 유형의 객체에 대해 트랜잭션을 조회할 수 있지만, 한 번의 호출에서는 하나의 유형만 조회할 수 있습니다. 예를 들어태스크에 영향을 준 트랜잭션을 가져오거나, 판에 영향을 준 트랜잭션을 가져올 수는 있지만, 한 번의 호출로 둘 다 가져올 수는 없습니다.

이는 (무엇보다도) 트랜잭션에 전역 순서가 없기 때문에 발생하는 기술적 제한입니다.

특정 객체(예: 특정 태스크)의 트랜잭션을 찾으려면 객체 PHID 또는 적절한 객체 식별자(예: `T123`)를 `objectIdentifier`로 전달하세요.

특정 객체 유형의 모든 트랜잭션을 찾으려면 객체 유형 상수를 `objectType`으로 전달하세요. 예를 들어 태스크의 올바른 식별자는 `TASK`입니다. 알 수 없는 유형 상수는 해당 유형 객체의 PHID를 보면 빠르게 찾을 수 있습니다.

`objectType`에 지원되는 모든 값:

%s

제약 조건
===========

다음 제약 조건이 지원됩니다:

  - `phids` //선택적 리스트<phid>.// PHID로 특정 트랜잭션을 찾습니다. 웹훅 알림에 응답하면서 관련 이벤트만 검사하려는 경우에 가장 유용할 가능성이 높습니다.
  - `authorPHIDs` //선택적 리스트<phid>.// 특정 작성자의 트랜잭션을 찾습니다.

트랜잭션 형식
==================

각 트랜잭션에는 해당 트랜잭션이 수행한 태스크를 설명하는 사용자 지정 데이터가 있습니다. 형식은 트랜잭션마다 다릅니다. 특정 트랜잭션이 정확히 어떤 형태인지 알아보는 가장 쉬운 방법은 테스트 객체에 해당 종류의 편집을 수행한 뒤, 그 객체를 조회하는 것입니다.

모든 트랜잭션에 데이터가 있는 것은 아닙니다. 기본적으로 트랜잭션은 "type"이 `null`이고 추가 데이터가 없습니다. 이 API는 원본 트랜잭션 데이터를 노출하지 않습니다. 그중 일부는 내부용이거나, 이름이 이상하거나, 철자가 틀렸거나, 혼란스럽거나, 유용하지 않거나, 노출할 경우 보안 또는 정책상 문제가 생길 수 있기 때문입니다.

새로운 트랜잭션은 해당 사용 사례를 인지하게 될 때마다 (올바른 철자와 이해하기 쉬운 타입, 그리고 유용하고 합리적인 필드를 갖춘 형태로) 노출됩니다.',
  'If you start work now, this edit will be applied silently: it will not send mail or publish notifications.' => '지금 일을 시작하면 편집은 조용하게 적용됩니다: 메일을 보내거나 알림을 게시하지 않습니다.',
  '%s edited contributor(s), added %s: %s; removed %s: %s.' => '%s님이 기여자를 편집했습니다, 추가됨: %3$s, 제거됨: %5$s.',
  'Transaction type \'%s\' is missing an external apply implementation!' => '트랜잭션 유형 \'%s\'에 외부 적용 구현이 누락되어 있습니다!',
  'The subtype "%s" is not a valid subtype.' => '하위 유형 "%s"은(는) 유효한 하위 유형이 아닙니다.',
  '%s updated %s attached file(s), added %s: %s; removed %s: %s; modified %s: %s.' => '%s님이 첨부된 파일을 업데이트했습니다, 추가됨: %4$s, 제거됨: %6$s, 수정됨: %8$s.',
  'Form %d' => '양식 %d',
  'Configure Forms for Configuring Forms' => '양식을 구성하기 위한 양식 구성',
  '%s added %s contributor(s) for %s: %s.' => '%s님이 %3$s에 대한 기여자를 추가했습니다: %4$s.',
  '%s changed the edit policy from "%s" to "%s".' => '%s님이 편집 정책을 "%s"에서 "%s"(으)로 변경했습니다.',
  'The source object is mentioned in a comment on the destination object.' => '소스 객체는 도착 객체의 댓글에서 언급됩니다.',
  'You can not shift this object into the selected space, because the space is archived. Objects can not be created inside (or moved into) archived spaces.' => '선택한 공간이 보존되어 있으므로 이 객체를 해당 공간으로 이동할 수 없습니다. 보존된 공간 내에는 객체를 생성하거나 이동할 수 없습니다.',
  'Capability not supported!' => '기능이 지원되지 않습니다!',
  '%s created this object with visibility "%s".' => '%s님이 이 객체를 표시 여부 "%s"와(과) 함께 만들었습니다.',
  'Override Lock' => '잠금 덮어쓰기',
  'You can not apply transactions which already have commentVersions!' => '이미 commentVersions이 있는 트랜잭션을 적용할 수 없습니다!',
  'Object Monogram' => '객체 모노그램',
  'Subtype "%s" is not valid: subtype keys must be no longer than 64 bytes.' => '하위 유형 "%s"이(가) 유효하지 않습니다: 하위 유형 키는 64바이트를 초과할 수 없습니다.',
  'Will Copy' => '복사될 예정',
  '%s removed %s subscriber(s): %s.' => '%s님이 구독자를 제거했습니다: %3$s.',
  'Transaction comment must not yet have a PHID!' => '트랜잭션 댓글은 아직 PHID를 가져서는 안 됩니다!',
  '%s changed the visibility from "%s" to "%s".' => '%s님이 표시 여부를 "%s"에서 "%s"(으)로 변경했습니다.',
  'Unable to load configuration for this EditEngine ("%s").' => '이 EditEngine("%s")에 대한 구성을 로드할 수 없습니다.',
  'Invalid \'%s\' value for PHID transaction. Value should contain only keys \'%s\' (add PHIDs), \'%s\' (remove PHIDs) and \'%s\' (set PHIDS).' => 'PHID 트랜잭션에 대한 \'%s\' 값이 잘못되었습니다. 값에는 \'%s\'(PHID 추가), \'%s\'(PHID 제거) 및 \'%s\'(PHID 설정) 키만 포함되어야 합니다.',
);
  }

}
