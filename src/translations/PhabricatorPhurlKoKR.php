<?php

final class PhabricatorPhurlKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
      'Alias' => '별칭',
      'Edit Phurl' => 'Phurl 편집',
      'URL' => 'URL',
      'All URLs' => '모든 URL',
      '%s changed the alias from %s to %s.' => '%s님이 다른 이름을 %s에서 %s(으)로 변경했습니다.',
      'New URL description.' => '새로운 URL 설명입니다.',
      '[Phurl]' => '[Phurl]',
      'The URL to shorten.' => '길이를 줄일 URL입니다.',
      'New URL.' => '새 URL입니다.',
      'A description of the URL.' => 'URL의 설명입니다.',
      'This alias is already in use.' => '이 별칭은 이미 사용 중입니다.',
      'Shorten your favorite URL.' => '즐겨찾는 URL의 길이를 줄입니다.',
      'No URLs found.' => 'URL을 찾을 수 없습니다.',
      'URL path is required' => 'URL 경로는 필수입니다',
      '%s changed the name of %s from %s to %s.' => '%s님이 %s의 이름을 %s에서 %s(으)로 변경했습니다.',
      'Edit URL: %s' => 'URL 편집: %s',
      'URL name.' => 'URL 이름입니다.',
      'Long URLs' => '긴 URL',
      'URL DESCRIPTION' => 'URL 설명',
      'New alias.' => '새로운 별칭입니다.',
      'Original URL' => '원래의 URL',
      'The protocol of the URL is invalid.' => 'URL의 프로토콜이 유효하지 않습니다.',
      'Short URL' => '짧은 URL',
      'Invalid URL' => '유효하지 않은 URL',
      'New URL name.' => '새로운 URL 이름입니다.',
      'The alias for the URL.' => 'URL의 별칭입니다.',
      '%s created this URL.' => '%s님이 이 URL을 만들었습니다.',
      'URL Shortener' => 'URL 단축기',
      'Visit URL' => 'URL 방문',
      'A URL\'s details change.' => 'URL의 세부 변경사항입니다.',
      'The alias can be no longer than %d characters.' => '이 별칭은 %s자를 초과할 수 없습니다.',
      'Create URL' => 'URL 만들기',
    );
  }

}
