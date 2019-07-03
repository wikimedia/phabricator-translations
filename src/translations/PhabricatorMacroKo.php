<?php

final class PhabricatorMacroKo
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko';
  }

  protected function getTranslations() {
    return array(
      'Create Meme' => '밈 만들기',
      'Active Macros' => '사용 중인 매크로',
      'Upload New Audio' => '새로운 오디오 업로드',
      'Image Macro "%s"' => '영상 매크로 "%s"',
      'Macro Image' => '매크로 이미지',
      'Image File' => '이미지 파일',
      'Name of the macro.' => '매크로의 이름입니다.',
      'Create a Macro' => '매크로 만들기',
      'Do not play audio.' => '오디오를 재생하지 않습니다.',
      'Edit Macro %s' => '매크로 %s 편집',
      'Configure creation and editing of Macro images.' => '매크로 이미지의 생성과 편집을 구성합니다.',
      'Created on %s' => '작성일: %s',
      'Can Manage Macros' => '매크로를 관리할 수 있음',
      'Edit Audio: %s' => '오디오 편집: %s',
      'New macro name.' => '새 매크로 이름입니다.',
      'Audio Behavior' => '오디오 동작',
      'Image macros must have a file.' => '이미지 매크로에는 파일이 있어야 합니다.',
      'Save Audio Behavior' => '오디오 동작 저장',
      '%s set the audio to play once.' => '%s님이 오디오를 한 번 재생으로 설정했습니다.',
      'Macro %s: %s %s' => '매크로 %s: %s %s',
      'Image file to import.' => '가져올 이미지 파일입니다.',
      'Do Not Play' => '재생하지 않음',
      'Below' => '아래',
      'Above' => '위',
      'Macro' => '매크로',
      'Edit Audio' => '오디오 편집',
      'Create Macro' => '매크로 만들기',
      'Behavior' => '동작',
      'Macro name.' => '매크로 이름입니다.',
      '%s disabled the audio for %s.' => '%s님이 %s의 오디오를 비활성화했습니다.',
      'Macro "%s"' => '매크로 "%s"',
      'Macro was not found.' => '매크로를 찾을 수 없습니다.',
      'Activate Macro' => '매크로 활성화',
      'The file you uploaded is invalid: it is not recognizable as a valid audio file.' => '업로드한 파일이 유효하지 않습니다: 유효한 오디오 파일로 인식되지 않습니다.',
      'Image Macro' => '이미지 매크로',
      'Macro name is required.' => '매크로 이름은 필수입니다.',
      '[Macro]' => '[매크로]',
      'Macros' => '매크로',
      'Create New Macro' => '새 매크로 만들기',
      'Image Macros and Memes' => '이미지 매크로와 밈',
      '%s set the audio to loop.' => '%s님이 오디오를 반복으로 설정했습니다.',
      'Edit Macro' => '매크로 편집',
      'Audio File' => '오디오 파일',
      'Generate a meme.' => '밈을 만듭니다.',
      'No such macro.' => '해당 매크로가 없습니다.',
      '%s disabled this macro.' => '%s님이 이 매크로를 비활성화했습니다.',
      'Browse Macros' => '매크로 찾아보기',
      '%s created this macro.' => '%s님이 이 매크로를 만들었습니다.',
      'Macros must have a name.' => '매크로에 이름은 필수입니다.',
      'Play Continuously' => '계속 재생',
      'Loop' => '반복',
      'Really disable macro?' => '정말로 매크로를 비활성화하시겠습니까?',
      'You do not have permission to manage image macros.' => '이미지 매크로를 관리할 권한이 없습니다.',
      'Template "%s" is not a valid template.' => '"%s" 틀은 유효한 틀이 아닙니다.',
      'Type a macro name...' => '매크로 이름을 입력하십시오...',
      'Macro "%s" already exists.' => '"%s" 매크로는 이미 존재합니다.',
      'Play Once' => '한 번 재생',
    );
  }

}
