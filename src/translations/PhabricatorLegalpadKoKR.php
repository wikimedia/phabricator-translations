<?php

final class PhabricatorLegalpadKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
  '%s:

This email address was used to sign a Legalpad document in %s:

  %s

Please verify you own this email address and accept the agreement by clicking this link:

  %s

Your signature is not valid until you complete this verification step.

You can review the document here:

  %s
' => '%s:

이 이메일 주소는 %s의 Legalpad 문서에 서명하는 데 사용되었습니다:

  %s 

이 이메일 주소의 소유권을 확인하고 이 링크를 클릭하여 동의를 승인해 주세요:

  %s 

이 확인 단계를 완료하기 전까지는 서명이 유효하지 않습니다.

여기에서 문서를 검토할 수 있습니다:

  %s',
  'All Signatures' => '모든 서명',
  'Unverified Email' => '인증되지 않은 이메일',
  'Create New Document' => '새로운 문서 만들기',
  'Type of signature required' => '필요한 서명 유형',
  'Only administrators may change whether a document requires a signature.' => '문서의 서명 필수 여부는 오직 관리자만이 변경할 수 있습니다.',
  'Signed At' => '서명일:',
  'Signature Type' => '서명 유형',
  '%s updated the document signature type.' => '%s님이 문서 서명 유형을 업데이트했습니다.',
  '%s set the document %s to require signatures.' => '%s님이 문서 %s에 서명을 요구하도록 설정했습니다.',
  'I agree to the terms laid forth above.' => '위에 명시된 조건에 동의합니다.',
  'Signature Details' => '서명 세부 정보',
  'Email Commands: Legalpad Documents' => '이메일 명령: Legalpad 문서',
  '%s added %s required legal document(s): %s.' => '%s님이 필수 법적 문서를 추가했습니다: %3$s.',
  'That user does not exist.' => '그 사용자는 존재하지 않습니다.',
  'Search for documents signed by given users.' => '주어진 사용자가 서명한 문서를 검색합니다.',
  'Company name is required.' => '회사 이름은 필수입니다.',
  'Legalpad Document' => 'Legalpad 문서',
  '%s edited %s required legal document(s), added %s: %s; removed %s: %s.' => '%s님이 필수 법적 문서를 편집했습니다, 추가됨: %4$s, 제거됨: %6$s.',
  'Document Title.' => '문서 제목입니다.',
  'A valid email is required.' => '유효한 이메일은 필수입니다.',
  'Only documents with signature type "individual" may require signing to log in.' => '서명 유형이 "개인"인 문서만 로그인 시 서명이 필요할 수 있습니다.',
  'Document signers' => '문서 서명자',
  'Unable to Verify Signature' => '서명을 검증할 수 없습니다',
  'Legalpad Document Body' => 'Legalpad 문서 본문',
  'Signed By' => '서명자:',
  'Read information about legalpad document signatures.' => 'legalpad 문서 서명에 대한 정보를 읽습니다.',
  'All Documents' => '모든 문서',
  'Get the full content for each document.' => '각 문서의 전체 내용을 가져옵니다.',
  'Contact Email' => '연락처 이메일',
  'Document Body' => '문서 본문',
  'The PHID of the signer' => '서명자의 PHID',
  'Contact name is required.' => '연락처 이름은 필수입니다.',
  'No signatures match the query.' => '쿼리와 일치하는 서명이 없습니다.',
  'Interacting with Legalpad Documents' => 'Legalpad 문서와 상호작용하기',
  '%s updated the document text.' => '%s님이 문서 텍스트를 업데이트했습니다.',
  'Signed on %s' => '%s에 서명함',
  '%s renamed this document from %s to %s.' => '%s님이 이 문서의 이름을 %s에서 %s(으)로 변경했습니다.',
  'The body of text of the document.' => '문서의 본문입니다.',
  'Not Signed' => '서명되지 않음',
  '%s document(s) are already signed: %s.' => '문서 %s개는 이미 서명되었습니다: %s.',
  'You must choose a company to add an exemption for.' => '면제를 추가할 회사를 선택해야 합니다.',
  '%s set the document %s to not require signatures.' => '%s님이 문서 %s에 서명을 요구하지 않도록 설정했습니다.',
  '%s edited %s required legal document(s) for %s, added %s: %s; removed %s: %s.' => '%s님이 %3$s에 대한 필수 법적 문서를 편집했습니다, 추가됨: %5$s, 제거됨: %7$s.',
  'Email Contains' => '다음을 포함하는 이메일',
  'Signature Already Verified' => '이미 확인 된 서명',
  'You do not have permission to create new documents.' => '문서를 만들 권한이 없습니다.',
  'This user who created this document' => '이 문서를 작성한 사용자',
  'This document has an unknown signature type ("%s").' => '이 문서에는 알 수 없는 서명 유형("%s")이 있습니다.',
  'The name used by the signer.' => '서명자가 사용한 이름입니다.',
  'Legalpad Documents' => 'Legalpad 문서',
  'Legalpad Signatures' => 'Legalpad 서명',
  'You signed this document on %s.' => '%s에 이 문서에 서명했습니다.',
  'Create documents and track signatures.' => '문서를 작성하고 서명을 추적합니다.',
  'Thank you for signing this document. Please check your email to verify your signature and complete the process.' => '이 문서에 서명해 주셔서 감사합니다. 서명을 확인하고 절차를 완료하려면 이메일을 확인해 주세요.',
  'Last Updated' => '최근 업데이트',
  'Read information about legalpad documents.' => 'legalpad 문서에 대한 정보를 읽습니다.',
  'This document requires a corporate signatory. You must log in to accept this document on behalf of a company you represent.' => '이 문서는 법인 서명이 필요합니다. 대표하는 회사를 대신하여 이 문서를 승인하려면 로그인해야 합니다.',
  'Search for documents created after a certain date.' => '특정 날짜 이후에 만들어진 문서를 검색합니다.',
  'Not Signable' => '서명 불가',
  'Signed' => '서명됨',
  'The signature is now verified.' => '서명이 확인되었습니다.',
  'Notes' => '메모',
  'Signature Required to Log In' => '로그인하기 위해 필요한 서명',
  'Legalpad' => 'Legalpad',
  'View/Sign Document' => '문서 보기/서명',
  'Legalpad Signature' => 'Legalpad 서명',
  'Mail receiver is not a LegalpadDocument!' => '메일 수신자가 LegalpadDocument가 아닙니다!',
  'You must choose a user to exempt.' => '면제할 사용자를 선택해야 합니다.',
  'You have already signed this document!' => '이미 이 문서에 서명했습니다!',
  'Verify Signature' => '서명을 확인하기',
  'Signed Documents' => '서명된 문서',
  'This signature has already been verified.' => '이 서명은 이미 확인되었습니다.',
  'Please verify this document signature.' => '이 문서의 서명을 확인해 주세요.',
  'Create a Document' => '문서 만들기',
  'You can record a signature exemption if a user has signed an equivalent document. Other applications will behave as through the user has signed this document.' => '사용자가 동일한 내용의 문서에 서명한 경우 서명 면제를 기록할 수 있습니다. 다른 애플리케이션은 사용자가 해당 문서에 서명한 것처럼 작동합니다.',
  'Company Name' => '회사 이름',
  '%s updated the document text for %s.' => '%s님이 %s에 대한 문서 텍스트를 업데이트했습니다.',
  '%s added %s required legal document(s) to %s: %s.' => '%s님이 %3$s에 필수 법적 문서를 추가했습니다: %4$s.',
  'Email field is required.' => '이메일 필드는 필수입니다.',
  'The email used by the signer.' => '서명자가 사용한 이메일입니다.',
  'Exempt User' => '사용자 면제하기',
  'Company address is required.' => '회사 주소는 필수입니다.',
  'Contact Name' => '연락처 이름',
  'DOCUMENT' => '문서',
  'Require document signatures: %s.' => '문서 서명 요구됨: %s.',
  'Updated By' => '업데이트한 사람:',
  'The email address specified is associated with an account. Please login to that account and sign this document again.' => '입력한 이메일 주소는 계정에 연결되어 있습니다. 해당 계정으로 로그인하신 후 이 문서에 다시 서명해 주세요.',
  '%s updated the document preamble.' => '%s님이 문서 서문을 업데이트했습니다.',
  'Corporations' => '회사',
  'Verified, Corporate' => '확인됨, 기업',
  '%s removed %s required legal document(s): %s.' => '%s님이 필수 법적 문서를 제거했습니다: %3$s.',
  '%s set the document text.' => '%s님이 문서 텍스트를 설정했습니다.',
  'You must check "I agree to the terms laid forth above."' => '"위 약관에 동의합니다"를 반드시 체크해야 합니다.',
  '[Legalpad] Signature Verification' => '[Legalpad] 서명 확인',
  'This page documents the commands you can use to interact with documents in Legalpad.' => '이 페이지에서는 Legalpad의 문서와 상호 작용하는 데 사용할 수 있는 명령어를 설명합니다.',
  'Add Signature Exemption' => '서명 면제 추가',
  'No Signature Required' => '필요한 서명 없음',
  'Add Exemption' => '면제 추가',
  'The author of a document can always view and edit it.' => '문서의 작성자는 언제든지 해당 문서를 보고 편집할 수 있습니다.',
  'Can Create Documents' => '문서를 만들 수 있음',
  '%s removed %s required legal document(s) from %s: %s.' => '%s님이 %3$s에서 필수 법적 문서를 제거했습니다: %4$s.',
  'Contributors' => '기여자',
  'The preamble of the document.' => '문서의 서문입니다.',
  '%s set the document to require signatures.' => '%s님이 문서에 서명을 요구하도록 설정했습니다.',
  'Individuals' => '개인',
  'Whether or not this signature is an exemption' => '이 서명이 면제인지 아닌지',
  'Search for signatures created before a certain date.' => '특정 날짜 이전에 만들어진 서명을 검색합니다.',
  'Search for signatures with a name containing the given string.' => '주어진 문자열을 포함하는 이름을 가진 서명을 검색합니다.',
  'The PHID of the document' => '문서의 PHID',
  'New document title.' => '새로운 문서 제목입니다.',
  'Configure creation and editing documents in Legalpad.' => 'Legalpad에서의 문서 생성 및 편집 양식을 구성합니다.',
  'Signature Verified' => '서명 확인됨',
  'The number of versions of this document' => '이 문서의 버전 개수',
  'NOTE: You can only see your own signatures and signatures on documents you have permission to edit.' => '참고: 본인의 서명과 편집 권한이 있는 문서의 서명만 볼 수 있습니다.',
  '%s updated the document preamble for %s.' => '%s님이 %s에 대한 문서 서문을 업데이트했습니다.',
  'Legalpad User Guide' => 'Legalpad 사용자 가이드',
  '%s set the document to not require signatures.' => '%s님이 문서에 서명을 요구하지 않도록 설정했습니다.',
  'You can not sign a document on behalf of a corporation unless you are logged in.' => '로그인하지 않은 상태에서는 회사를 대신하여 문서에 서명할 수 없습니다.',
  'Exemption By' => '면제 부여자:',
  'Who Should Sign?' => '누가 서명해야 하는지',
  'Name field is required.' => '이름 필드는 필수입니다.',
  'You do not need to sign this document. %s added a signature exemption for you on %s.' => '이 문서에 서명할 필요가 없습니다. %s님이 당신을 %s에 대한 서명 면제에 추가했습니다.',
  'New document preamble.' => '새로운 문서 서문입니다.',
  'Find Signatures' => '서명 찾기',
  'Search for documents with given creators.' => '주어진 작성자의 문서를 검색합니다.',
  'Required %s signature(s): %s.' => '서명 필요함: %2$s',
  'Configure Legalpad Forms' => 'Legalpad 양식 구성',
  'The signature verification code is incorrect, or the signature has been invalidated. Make sure you followed the link in the email correctly.' => '서명 확인 코드가 잘못되었거나 서명이 무효화되었습니다. 이메일에 포함된 링크를 올바르게 클릭했는지 확인하세요.',
  'Search for documents created before a certain date.' => '특정 날짜 이전에 만들어진 문서를 검색합니다.',
  'Agreements and Signatures' => '동의와 서명',
  'Search for signatures on the given documents' => '주어진 문서의 서명을 검색합니다.',
  '%s updated the document signature type for %s.' => '%s님이 %s에 대한 문서 서명 유형을 업데이트했습니다.',
  'Required Signature' => '서명 필요',
  'Verify Signature?' => '서명을 확인합니까?',
  'signers of legalpad documents' => 'Legalpad 문서의 서명자',
  'Company Address' => '회사 주소',
  'CHANGES TO DOCUMENT PREAMBLE' => '문서 서문의 변경사항',
  '**Legalpad** is a simple application for tracking signatures and legal agreements. At the moment, it is primarily intended to help open source projects keep track of Contributor License Agreements.' => '**Legalpad**는 서명 및 법적 동의를 추적하는 간단한 애플리케이션입니다. 당시에는 주로 오픈 소스 프로젝트에서 기여자 라이선스 계약을 관리하는 데 도움을 주기 위해 개발되었습니다.',
  'Unknown field: %s' => '알 수 없는 필드: %s',
  'New document body.' => '새로운 문서 본문입니다.',
  'Search for signatures by given users.' => '주어진 사용자의 서명을 검색합니다.',
  'Marks this document as required signing.' => '이 문서를 서명이 필요한 문서로 표시합니다.',
  'The title of this document' => '이 문서의 제목',
  'Signers' => '서명자',
  'Search for documents with given contributors.' => '주어진 기여자의 문서를 검색합니다.',
  'Signatures' => '서명',
  'Exemption' => '면제',
  'View Signatures' => '서명 보기',
  'Signed Older Version' => '서명된 이전 버전',
  'Search for signatures created after a certain date.' => '특정 날짜 이후에 만들어진 서명을 검색합니다.',
  'CHANGES TO DOCUMENT TEXT' => '문서 텍스트의 변경사항',
  'Version %d (%s)' => '버전 %d (%s)',
  'Get the signer list for the project.' => '프로젝트 서명자 목록을 가져옵니다.',
  'Whether signatures on this doc are required to use this install' => '이 문서에 서명하려면 이 설치가 필요한지 여부',
  'You have not signed this document yet.' => '아직 이 문서에 서명하지 않았습니다.',
  'Require signatures' => '서명이 필요함',
  'Contact email is required.' => '연락처 이메일은 필수입니다.',
  'Agree and Sign Document' => '문서에 동의 및 서명',
  'Already Signed' => '이미 서명함',
  'Verified, Current' => '확인됨, 현재',
  'Signing User' => '서명한 사용자',
  'That user has already signed this document.' => '해당 사용자는 이미 이 문서에 서명했습니다.',
  'Search for signatures with an email containing the given string.' => '주어진 문자열을 포함하는 이메일을 가진 서명을 검색합니다.',
  'New document signature type.' => '새로운 문서 서명 유형입니다.',
  'Sign Document' => '서명 문서',
  'The PHID of the user who granted the exemption' => '면제를 부여한 사용자의 PHID',
);
  }

}
