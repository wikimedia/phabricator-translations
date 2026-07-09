<?php

final class PhabricatorFlagKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
  'Removed "%s" flag.' => '"%s" 플래그를 제거했습니다.',
  'Marked with "%s" flag.' => '"%s" 플래그를 표시했습니다.',
  'Personal Bookmarks' => '개인 북마크',
  'Query flag markers.' => '플래그 마커를 쿼리합니다.',
  'Clear a flag.' => '플래그를 지웁니다.',
  'Purple' => '보라색',
  'Unknown groupBy parameter: %s' => '알 수 없는 groupBy 매개변수: %s',
  'Mark with %s flag.' => '%s 플래그로 표시합니다.',
  'Flags are private. Only you can view or edit your flags.' => '플래그는 비공개입니다. 오직 당신만 플래그를 보고 있고 편집할 수 있습니다.',
  'Must pass an id or an objectPHID.' => 'id나 objectPHID를 전달해야 합니다.',
  'Already marked with %s flag.' => '이미 %s 플래그로 표시되었습니다.',
  'Remove %s flag.' => '%s 플래그를 제거합니다.',
  'Flag For Later' => '나중을 위해 플래그',
  'This object is temporary and cannot be flagged.' => '이 객체는 임시이며 플래그가 지정될 수 없습니다.',
  'Remove flag' => '플래그 제거',
  'You are not the creator of this flag.' => '이 플래그의 작성자가 아닙니다.',
  'Flag %s' => '플래그 %s',
  'Removed Flag' => '플래그 제거됨',
  'Create or modify a flag.' => '플래그를 만들거나 수정합니다.',
  'Create Flag' => '플래그 만들기',
  'Marked with flag of the wrong color ("%s").' => '잘못된 색상의 플래그 ("%s")으로 표시되었습니다.',
  'You can flag this %s if you want to remember to look at it later.' => '나중에 보고 싶으면 %s으로 플래그 할 수 있습니다.',
  'No flags found.' => '플래그가 없습니다.',
  'Bad flag ID.' => '잘못된 플래그 ID입니다.',
  'Remove %s Flag' => '%s 플래그를 제거',
  'All Object Types' => '모든 객체 유형',
  'Already Marked' => '이미 표시됨',
  'Flag Color' => '플래그 색상',
  'Mark with flag' => '플래그로 표시',
  'Did Not Remove Flag' => '플래그를 제거하지 않음',
  'Not marked with any flag.' => '아무 플래그도 표시되지 않았습니다.',
  'Flagged' => '플래그됨',
);
  }

}
