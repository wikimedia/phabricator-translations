<?php

final class PhabricatorPolicyKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
  'Access Denied: %s' => '접근 거부됨: %s',
  'is waning' => '기울 때',
  'Required Capabilities on Other Objects' => '다른 객체에 요구되는 기능',
  'Logged in users can take this action.' => '로그인한 사용자는 이 작업을 수행할 수 있습니다.',
  'Name of the Policy.' => '정책의 이름입니다.',
  'Object URI' => '객체 URI',
  'when the moon' => '달이',
  'Specify the name of an object to unlock.' => '잠금을 해제할 객체의 이름을 지정하세요.',
  'Identify each __object__ by passing an object name (like "T123") or a PHID (like "PHID-ABCD-1234...").

Not every type of object has an editable view policy, edit policy, or owner, so not all modes will work with all objects. ' => '객체 이름(예: "T123") 또는 PHID(예: "PHID-ABCD-1234...")를 전달함으로써 각 __객체__를 식별합니다.

모든 객체 유형에 편집 가능한 보기 정책, 편집 정책 또는 소유자가 있는 것은 아니므로 모든 모드가 모든 객체에서 작동하는 것은 아닙니다.',
  'Lock Create User Policy To Admins' => '사용자 생성 정책을 관리자 한정으로 잠금',
  'Interact Policy' => '상호 작용 정책',
  '%s set the effective policy to %s.' => '%s님이 유효 정책을 %s(으)로 설정했습니다.',
  'These rules are processed in order.' => '이 규칙들은 순서대로 처리됩니다.',
  'When selected as the policy for other objects, this policy will behave like the **Effective Policy**.

**Visible To** and **Editable By** are the policies controlling access to the Named Policy itself.' => '다른 객체에 대한 정책으로 선택될 경우, 이 정책은 **유효 정책**처럼 작동합니다.

**표시 대상** 및 **편집 가능 사용자**는 명명된 정책 자체에 대한 접근를 제어하는 정책입니다.',
  'Target Object Type' => '대상 객체 유형',
  'Implementation of the Global rules' => '글로벌 규칙의 구현',
  'This software has application policies which can dictate whether users can take certain actions, such as creating new users. 

This setting allows for "locking" these policies such that no further edits can be made on a per-policy basis.' => '이 소프트웨어에는 사용자가 새 사용자 생성과 같은 특정 작업을 수행할 수 있는지 여부를 결정하는 애플리케이션 정책이 있습니다.

이 설정을 사용하면 정책별로 더 이상 편집할 수 없도록 이러한 정책을 "잠금"할 수 있습니다.',
  'The Type of objects this policy can apply to. If set, this policy can only be applied to that type of objects, but can use Object Rules that apply to that object.

If not set, this policy can be applied to any object.

You may need to save the Named Policy and edit it again for changes to take effect.' => '이 정책을 적용할 수 있는 객체 유형입니다. 설정된 경우, 이 정책은 해당 유형의 객체에만 적용할 수 있지만, 해당 객체에 적용되는 객체 규칙을 사용할 수 있습니다.

설정하지 않으면 이 정책은 모든 객체에 적용할 수 있습니다.

변경 사항을 적용하려면 명명된 정책을 저장한 다음 다시 편집해야 할 수 있습니다.',
  'Users who can see objects in this space:' => '이 공간의 객체를 볼 수 있는 사용자:',
  'After a user passes space policy checks, they must still pass object policy checks.' => '사용자가 공간 정책 검사를 통과했더라도 객체 정책 검사를 통과해야 합니다.',
  'Modified object policies.' => '객체 정책을 수정했습니다.',
  'User Policies' => '사용자 정책',
  'Shift the object between spaces.' => '객체를 공간 사이로 이동시킵니다.',
  'You Shall Not Pass: %s' => '너는 지나갈 수 없다: %s',
  '%s set the effective policy of %s to %s' => '%s님이 %s의 유효 정책을 %s(으)로 설정했습니다.',
  'is waxing' => '차오를 때',
  'This software allows you to set the visibility of objects (like repositories and tasks) to \'Public\', which means **anyone on the internet can see them, without needing to log in or have an account**.

This is intended for open source projects. Many installs will never want to make anything public, so this policy is disabled by default. You can enable it here, which will let you set the policy for objects to \'Public\'.

Enabling this setting will immediately open up some features, like the user directory. Anyone on the internet will be able to access these features.

With this setting disabled, the \'Public\' policy is not available, and the most open policy is \'All Users\' (which means users must have accounts and be logged in to view things).' => '이 소프트웨어를 사용하면 (저장소나 태스크 등의) 같은 객체의 공개 범위를 \'공개\'로 설정할 수 있습니다. 즉, **인터넷에 있는 누구나 로그인이나 계정 없이 해당 객체를 볼 수 있습니다**.

이 기능은 오픈 소스 프로젝트를 위해 만들어졌습니다. 대부분의 설치 환경에서는 객체를 공개할 필요가 없으므로 이 정책은 기본적으로 비활성화되어 있습니다.

여기에서 이 정책을 활성화하면 객체에 대한 정책을 \'공개\'로 설정할 수 있습니다. 이 설정을 활성화하면 사용자 디렉터리와 같은 일부 기능이 즉시 공개됩니다. 인터넷에 있는 누구나 이러한 기능에 접근할 수 있게 됩니다.

이 설정을 비활성화하면 \'공개\' 정책을 사용할 수 없으며, 가장 개방적인 정책은 \'모든 사용자\'입니다(즉, 사용자는 계정을 가지고 로그인해야 객체를 볼 수 있습니다).',
  'Unable to find any object with the specified name ("%s").' => '지정된 이름("%s")을 가진 객체를 찾을 수 없습니다.',
  'You do not have permission to edit this object.' => '이 프로젝트를 편집할 권한이 없습니다.',
  'CAPABILITIES' => '기능',
  'Map of capabilities to current policies.' => '기능에서 현재 정책으로의 매핑입니다.',
  'Capability "%s" for user "%s" on object "%s" is being resolved, but was never queued with "addCapability()".' => '사용자 "%2$s"님의 객체 "%3$s"에 대한 "%s" 기능이 해결되고 있지만, "addCapability()"로 대기열에 추가되지는 않았습니다.',
  'Other: %s' => '기타: %s',
  'Can View' => '볼 수 있음',
  'Lock specific application policies so they can not be edited.' => '특정 애플리케이션 정책을 잠가서 편집될 수 없도록 합니다.',
  'Only User: %s' => '사용자 전용: %s',
  'All Named Policies' => '모든 명명된 정책',
  'Invalid action \'%s\'!' => '유효하지 않은 작업 \'%s\'!',
  'Unlock one or more objects by changing their view policies, edit policies, or owners.' => '보기 정책, 편집 정책 또는 소유자를 변경하여 하나 이상의 객체를 잠금 해제합니다.',
  'Allow Public Visibility' => '공개 표시 허용',
  'Controls who can interact with the object.' => '객체와 상호 작용할 수 있는 사용자를 제어합니다.',
  'A %s cannot be used as an effective policy for a %s' => '%s은(는) %s에 대한 유효 정책으로써 사용될 수 없습니다.',
  'Object Policies' => '객체 정책',
  'Members of Project...' => '프로젝트의 구성원...',
  'Two policy rules (of classes "%s" and "%s") define the same object policy key ("%s"), but each object policy rule must use a unique key.' => '두 개의 정책 규칙(클래스 "%s" 및 "%s")이 동일한 객체 정책 키("%s")를 정의하지만, 각 객체 정책 규칙은 고유한 키를 사용해야 합니다.',
  'Advanced' => '고급',
  'By default, no one can take this action.' => '기본적으로, 아무도 이 작업을 수행할 수 없습니다.',
  'You must choose a policy.' => '정책을 선택해야 합니다.',
  'Edit Named Policy' => '명명된 정책 편집',
  'Testing for capability "%s" on an object ("%s") which does not support that capability.' => '해당 기능을 지원하지 않는 객체("%2$s")에서 "%s" 기능에 대한 테스트를 수행했습니다.',
  'Change the owner of an object to the specified user.' => '객체의 소유자를 지정된 사용자로 변경합니다.',
  'All object types' => '모든 객체 유형',
  'Deny' => '거부',
  'Special Rules' => '특수 규칙',
  'Failed to JSON decode rule data!' => '규칙 데이터를 JSON 디코딩하는데 실패했습니다!',
  'Controls who can edit the object.' => '객체를 편집할 수 있는 사용자를 제어합니다.',
  'Other Policies' => '다른 정책',
  'Edit %s: %s' => '%s 편집: %s',
  'Object Policy' => '객체 정책',
  'Can Interact' => '상호작용할 수 있음',
  'These rules are processed in order:' => '이 규칙들은 순서대로 처리됩니다:',
  'Members of the project "%s" can take this action.' => '프로젝트 "%s"의 구성원은 이 작업을 수행할 수 있습니다.',
  'UNLOCKING' => '잠금 해제',
  'Members of a particular project can take this action. (You can not see this object, so the name of this project is restricted.)' => '특정 프로젝트의 구성원만 이 작업을 수행할 수 있습니다. (이 객체는 볼 수 없으므로 프로젝트 이름은 공개가 제한됩니다.)',
  'Named Policy %d: %s' => '명명된 정책 %d: %s',
  'Specify the name of exactly one object to show policy information for.' => '정책 정보를 표시할 객체의 이름을 정확히 하나만 지정하세요.',
  'This object is public and can be viewed by anyone, even if they do not have an account on this server.' => '이 객체는 공개되어 있으며, 이 서버에 계정이 없는 사람을 포함해 누구라도 볼 수 있습니다.',
  'Invalid value `%s`' => '유효하지 않은 값 `%s`',
  'Rename the policy.' => '정책의 이름을 변경합니다.',
  'You do not have the required capability ("%s") to do whatever you are trying to do.' => '현재 하려는 것을 수행하는 데 필요한 기능("%s")이 없습니다.',
  'Support for Policies' => '정책 지원',
  'Allow users to set object visibility to public.' => '사용자가 객체의 공개 여부를 공개로 설정할 수 있도록 허용합니다.',
  '%s changed the objects type this policy is applicable to from %s to %s' => '%s님이 이 정책이 적용되는 객체 유형을 %s에서 %s(으)로 변경했습니다',
  'Space:' => '공간:',
  'Change the edit policy of the object.' => '객체의 편집 정책을 변경합니다.',
  'Join Policy' => '참여 정책',
  'Members Of' => '소속:',
  'Invalid rule class \'%s\'!' => '유효하지 않은 규칙 클래스 \'%s\'!',
  'Specify the name of an object to show policy information for.' => '정책 정보를 표시할 객체의 이름을 지정합니다.',
  'Select Project' => '프로젝트 선택',
  'Policy identifier is an object PHID (\'%s\'), but the provided handle has a different PHID (\'%s\'). The handle must correspond to the policy identifier.' => '정책 식별자는 객체 PHID(\'%s\')이지만, 제공된 핸들의 PHID는 다릅니다(\'%s\'). 핸들은 정책 식별자와 일치해야 합니다.',
  'Select Named Policy' => '명명된 정책 선택하기',
  'Unlocking: %s' => '잠금 해제: %s',
  'Change the view policy of an object so that the specified user may view it.' => '지정된 사용자가 객체를 볼 수 있도록 객체의 보기 정책을 변경합니다.',
  'Applicable To' => '적용 대상',
  '%s can take this action.' => '%s님은 이 작업을 수행할 수 있습니다.',
  'Capability "%s" does not exist.' => '기능 "%s"이(가) 존재하지 않습니다.',
  'Named Policy has invalid effective policy: %s -> %s' => '명명된 규칙에 유효하지 않은 유효 정책이 있습니다: %s -> %s',
  'OBJECT' => '객체',
  'Note:' => '참고:',
  'You do not have permission to view policy details.' => '정책의 세부 정보를 볼 권한이 없습니다.',
  'Effective Policy' => '유효 정책',
  'Can Edit' => '편집할 수 있음',
  'Type Named Policy\'s name...' => '명명된 정책의 이름을 입력하세요...',
  '%s changed the effective policy from %s to %s.' => '%s님이 유효 정책을 %s에서 %s(으)로 변경했습니다.',
  'Unable to perform capability tests on an object (of class "%s") with no PHID.' => 'PHID가 없는 객체(클래스 "%s")에 대해 기능 테스트를 수행할 수 없습니다.',
  'Edit Policy' => '정책 편집하기',
  'Controls who can view the object.' => '객체를 볼 수 있는 사용자를 제어합니다.',
  'is new' => '초승달일 때',
  'Require Login' => '로그인 필요',
  'To access this object, users must have first have access capabilities on these other objects:' => '이 객체에 접근하려면 사용자는 먼저 다음 객체들에 대한 접근 권한을 보유해야 합니다:',
  '[%s] (%s) %s // %s' => '[%s] (%s) %s // %s',
  'Members of Project: %s' => '프로젝트의 구성원: %s',
  'You do not have permission to create named policies.' => '명명된 정책을 만들 권한이 없습니다.',
  '%s changed the effective policy of %s from %s to %s' => '%s님이 %s의 유효 정책을 %s에서 %s(으)로 변경했습니다.',
  'Specify the name of exactly one object to unlock.' => '잠금을 해제할 객체의 이름을 정확히 하나만 지정하세요.',
  'Options relating to object visibility.' => '객체 공개 여부와 광련된 옵션입니다.',
  'This policy rule (of class "%s") does not have an associated object policy key.' => '이 정책 규칙(클래스 "%s")에는 연결된 객체 정책 키가 없습니다.',
  'Custom "%s" Policy' => '사용자 지정 "%s" 정책',
  'Custom Policy' => '사용자 지정 정책',
  'Basic Policies' => '기본 정책',
  'Browse Named Policies' => '명명된 정책 찾아보기',
  'Change the view policy of the object.' => '객체의 보기 정책을 변경합니다.',
  'All Users' => '모든 사용자',
  'Show policy information about an object.' => '객체에 대한 정책 정보를 표시합니다.',
  'Capability "%s" does not support public policy.' => '기능 "%s"은(는) 공개 정책을 지원하지 않습니다.',
  'Controls who can join the object.' => '객체에 참여할 수 있는 사용자를 제어합니다.',
  'Change the edit policy of an object so that the specified user may edit it.' => '지정된 사용자가 객체를 편집할 수 있도록 객체의 편집 정책을 변경합니다.',
  'No such capability exists. This is a logic error which should be reported as a bug.' => '그런 기능은 존재하지 않습니다. 이는 논리적 오류이므로 버그로 보고해야 합니다.',
  '%s changed the objects type policy %s is applicable to from %s to %s' => '%s님이 정책 %s이(가) 적용되는 객체 유형을 %s에서 %s(으)로 변경했습니다',
  'Effective Policy is required.' => '유효 정책은 필수입니다.',
  'Administrators can take this action.' => '관리자는 이 작업을 수행할 수 있습니다.',
  'You do not have permission to view this object.' => '이 객체를 볼 권한이 없습니다.',
  'Policy Details: %s' => '정책 세부 정보: %s',
  'Policy identifier is an object PHID (\'%s\'), but no object handle was provided. A handle must be provided for object policies.' => '정책 식별자는 객체 PHID(\'%s\')이지만 객체 핸들이 제공되지 않았습니다. 객체 정책에는 핸들이 제공되어야 합니다.',
  '%s all other users.' => '다른 모든 사용자를 %s합니다.',
  'You can not issue a policy query with both %s and %s.' => '%s 및 %s을(를) 동시에 사용하여 정책 쿼리를 실행할 수 없습니다.',
  'If No Rules Match' => '일치하는 규칙이 없는 경우',
  'No objects found.' => '객체가 없습니다.',
  'Named Policies' => '명명된 정책',
  'POLICY DETAIL' => '정책 세부 정보',
  'Named Policy' => '명명된 정책',
  'The space this object is in has a more restrictive view policy ("%s") than the object does ("%s"), so the space\'s view policy is shown as a hint instead of the object policy.' => '이 객체가 속한 공간의 보기 정책("%s")이 객체 자체의 보기 정책("%s")보다 더 엄격하므로 객체 정책 대신 공간의 보기 정책이 힌트로 표시됩니다.',
  'Capability "%s" has invalid policy "%s"; "%s" does not exist.' => '기능 "%s"에 유효하지 않은 정책 "%s"이(가) 있습니다, "%s"은(는) 존재하지 않습니다.',
  'This object is in %s and can only be seen or edited by users with access to view objects in the space.' => '이 객체는 %s에 속하며 해당 공간의 객체를 볼 수 있는 권한이 있는 사용자만 보거나 편집할 수 있습니다.',
  'In detail, this means that these users can take this action, provided they pass all of the checks described above first:' => '자세히 설명하면, 이는 해당 사용자들이 위에 설명된 모든 검사 조건을 먼저 통과하는 경우에만 이러한 작엄을 수행할 수 있음을 의미합니다:',
  'Choose which capabilities to unlock with "--view", "--edit", or "--owner".' => '"--view", "--edit", 또는 "--owner" 옵션을 사용하여 어떤 기능을 잠금 해제할지 선택하세요.',
  'None of these policy rules have any effect.' => '이 중 어떤 정책 규칙도 효과가 없습니다.',
  'Select a space for the object.' => '객체를 위한 공간을 선택하세요.',
  'Save Policy' => '정책 저장하기',
  'This object is in a space you do not have permission to access.' => '이 객체는 접근 권한이 없는 공간에 있습니다.',
  'Spaces Documentation' => '공간 설명문서',
  'Unknown Policy' => '알 수 없는 정책',
  'Change the join policy of the object.' => '객체의 참여 정책을 변경합니다.',
  'is full' => '보름달일 때',
  'You can not make that edit, because it would remove your ability to \'%s\' the object.' => '해당 편집은 객체를 \'%s\'(으)로 설정하는 기능을 제거하기 때문에 할 수 없습니다.',
  'Failed to create usable reference object for named policy %s - target type is %s' => '명명된 정책 %s에 대한 사용 가능한 참조 객체를 생성하는 데 실패했습니다, 대상 유형은 %s입니다',
  'Policy \'%s\' is not a global policy!' => '\'%s\' 정책은 전역 정책이 아닙니다!',
  'You do not have permission to join this object.' => '이 객체에 참여할 권한이 없습니다.',
  'If no rules match, %s all other users.' => '일치하는 규칙이 없는 경우, 다른 모든 사용자를 %s합니다.',
  'Can Create Named Policies' => '명명된 정책을 만들 수 있음',
  '[Policy]' => '[정책]',
  'This object has an unknown or invalid policy setting ("%s").' => '이 객체는 알 수 없거나 유효하지 않은 정책 설정("%s")을 가지고 있습니다.',
  'UNLOCKED' => '잠금 해제됨',
  'This object has special rules which override normal object policy rules:' => '이 객체에는 일반 객체 정책 규칙을 무시하는 특별 규칙이 적용됩니다:',
  'Can Join' => '가입할 수 있음',
  'This object has a custom policy controlling who can take this action.' => '이 객체에는 누가 이 작업을 수행할 수 있는지를 제어하는 사용자 지정 정책이 있습니다:',
  'New space PHID.' => '새로운 공간 PHID입니다.',
  'Capability "%s" has invalid policy "%s".' => '기능 "%s"에 유효하지 않은 정책 "%s"이(가) 있습니다.',
  'You do not have permission to interact with this object.' => '이 객체와 상호작용할 권한이 없습니다.',
  'Change the interaction policy of the object.' => '객체의 상호 작용 정책을 변경합니다.',
);
  }

}
