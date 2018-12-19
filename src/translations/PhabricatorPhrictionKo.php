<?php

final class PhabricatorPhrictionKo
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko';
  }

  protected function getTranslations() {
    return array(
      'No such document.' => '해당 문서가 없습니다.',
      'DOCUMENT DIFF' => '문서 차이',
      'This document was moved from %s.' => '이 문서는 %s에서 이동되었습니다.',
      'A moved document can not be moved again.' => '이동한 문서는 다시 이동할 수 없습니다.',
      'Next Change »' => '다음 변경사항 »',
      'Moved' => '이동됨',
      'DOCUMENT CONTENT' => '문서 내용',
      'Unknown document status \'%s\'!' => '알 수 없는 문서 상태 \'%s\'!',
      'Can Not Delete Document!' => '문서를 삭제할 수 없습니다!',
      'Unknown URI type \'%s\'!' => '알 수 없는 URI 유형 \'%s\'!',
      'There is no document here, but you may create it.' => '여기에 문서가 없지만 만들 수 있습니다.',
      'More...' => '더 보기...',
      'Current Path' => '현재 경로',
      '(Untitled Document)' => '(제목 없는 문서)',
      'Content' => '내용',
      'Edit this Document' => '이 문서 편집하기',
      'Document History: %s' => '문서 역사: %s',
      'Wiki Documents' => '위키 문서',
      'Create This Document' => '이 문서 만들기',
      '%s deleted this document.' => '%s님이 이 문서를 삭제했습니다.',
      'No such document exists.' => '해당 문서가 존재하지 않습니다.',
      'The document %s already exists. Do you want to edit it instead?' => '%s 문서는 이미 존재합니다. 대신 편집하시겠습니까?',
      'CHANGES TO DOCUMENT CONTENT' => '문서 내용의 변경사항',
      '%s moved %s from %s' => '%s님이 %s에서 %s(으)로 이동했습니다',
      'A document is deleted.' => '문서가 삭제되어 있습니다.',
      'Would you like to use the path %s instead?' => '%s 경로를 대신 사용하시겠습니까?',
      'Delete Document?' => '문서를 삭제하시겠습니까?',
      'Documents must have content.' => '문서에 내용이 있어야 합니다.',
      '"%s" <%s>' => '"%s" <%s>',
      'Document History' => '문서 역사',
      'Document already exists!' => '문서가 이미 존재합니다!',
      '« Previous Change' => '« 이전 변경사항',
      'Show Change' => '변경사항 보기',
      'Edit Conflict' => '편집 충돌',
      '%s moved %s to %s' => '%s님이 %s을(를) %s(으)로 이동했습니다',
      '%s changed the title from %s to %s.' => '%s님이 제목을 %s에서 %s(으)로 변경했습니다.',
      'Edited by %s' => '편집자: %s',
      'No Document Here' => '여기에 문서가 없습니다',
      'Create this Document' => '이 문서 만들기',
      'Edits' => '편집',
      'All Content' => '모든 내용',
      'Page Not Found' => '페이지를 찾을 수 없습니다',
      'New Document' => '새 문서',
      '%s moved this document to %s' => '%s님이 이 문서를 %s(으)로 이동했습니다',
      'Empty Document' => '빈 문서',
      'Move Here' => '여기로 이동',
    );
  }

}
