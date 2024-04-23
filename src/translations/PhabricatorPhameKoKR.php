<?php

final class PhabricatorPhameKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
      'here' => '여기',
      'Blog name.' => '블로그 이름입니다.',
      'Blog' => '블로그',
      'Posts must be attached to a blog.' => '게시물은 블로그에 첨부해야 합니다.',
      'Blog description.' => '블로그의 설명입니다.',
      'No external domain' => '외부 도메인 없음',
      '%s changed the profile image for this blog.' => '%s 님이 이 블로그의 프로파일 그림을 변경했습니다.',
      'Read information about blog posts.' => '블로그 게시물에 관한 정보를 읽습니다.',
      'You must choose a file when uploading a new blog picture.' => '새로운 블로그 사진을 업로드할 때 파일을 선택해야 합니다.',
      'All Blogs' => '모든 블로그',
      'New post title.' => '새로운 게시물 제목입니다.',
      '[No Blog]' => '[블로그 없음]',
      'CHANGES TO BLOG DESCRIPTION' => '블로그 설명의 변경사항',
      '404 Not Found' => '404 찾을 수 없습니다',
      'Blogs' => '블로그',
      'No description.' => '설명이 없습니다.',
      'The parent site can be no longer than %s characters.' => '부모 사이트는 %s자를 초과할 수 없습니다.',
      'Title of the post.' => '게시물의 제목입니다.',
      'Change the blog description.' => '블로그의 설명을 변경합니다.',
      'Blog to publish this post to.' => '이 게시물을 게시할 블로그입니다.',
      'BLOG DETAIL' => '블로그 세부사항',
      'About %s' => '%s 정보',
      'Blog: %s' => '블로그: %s',
      'The name of the blog.' => '블로그의 이름입니다.',
      '%s published this blog.' => '%s님이 이 블로그를 게시했습니다.',
      'Browse Blogs' => '블로그 찾아보기',
      'Posts must have a title.' => '게시물에는 제목이 필수입니다.',
      '(Empty Post)' => '(빈 게시물)',
    );
  }

}
