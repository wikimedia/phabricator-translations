<?php

final class PhabricatorCacheKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
      'APCu' => 'APCu',
      'APC' => 'APC',
      'General Cache (TTL)' => '일반 캐시 (TTL)',
      'General Cache' => '일반 캐시',
      'Unknown cache format.' => '알 수 없는 캐시 포맷입니다.',
      'Purge all caches.' => '모든 캐시를 지웁니다.',
      'Specify either "--all" or "--caches", not both.' => '"--all" 또는 "--caches" 중 하나만 지정하십시오.',
      'APC User Cache' => 'APC 사용자 캐시',
      'OPcache Config' => 'OPcache 구성',
      'OPcache' => 'OPcache',
    );
  }

}
