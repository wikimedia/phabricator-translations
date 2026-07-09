<?php

final class PhabricatorCacheKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
  '%s is not available; unable to read deflated data!' => '%s은(는) 이용할 수 없습니다. deflate된 데이터를 읽을 수 없습니다!',
  'APCu' => 'APCu',
  'Select caches to purge with "--all" or "--caches". Available caches are: %s.' => '"--all" 또는 "--caches" 옵션을 사용하여 새로 고침할 캐시를 선택하세요. 사용 가능한 캐시: %s.',
  'APCu Disabled' => 'APCu 비활성화됨',
  'The APCu PHP extension is installed, but not enabled in your PHP configuration. Enabling this extension will improve performance. Edit the "%s" setting to enable this extension.' => 'APCu PHP 확장 기능이 설치되어 있지만 PHP 설정에서 활성화되어 있지 않습니다. 이 확장 기능을 활성화하면 성능이 향상됩니다. "%s" 설정을 편집하여 확장 기능을 활성화하세요.',
  'OPcache is not configured properly for development.' => 'OPcache가 개발 환경에 맞게 제대로 구성되어 있지 않습니다.',
  'General Cache (TTL)' => '일반 캐시 (TTL)',
  'Zend OPcache Not Installed' => 'Zend OPcache 설치되지 않음',
  'Markup Cache' => '캐시를 마크업',
  'General Cache' => '일반 캐시',
  'Unknown cache format.' => '알 수 없는 캐시 포맷입니다.',
  'Two objects (of classes "%s" and "%s") generate the same map value ("%s"). Each object must generate a unique map value.' => '두 객체 (클래스가 "%s" 및 "%s")가 동일한 맵 값("%s")을 생성합니다. 각 객체는 고유한 맵 값을 생성해야 합니다.',
  'OPcache Not Configured for Production' => 'OPcache가 프로덕션 환경에 맞게 구성되지 않았음',
  'The PHP "Zend OPcache" extension is installed, but not enabled in your PHP configuration. Enabling it will dramatically improve performance. Edit the "%s" setting to enable the extension.' => 'PHP "Zend OPcache" 확장 기능이 설치되어 있지만 PHP 설정에서 활성화되어 있지 않습니다. 이 확장 기능을 활성화하면 성능이 크게 향상됩니다. "%s" 설정을 편집하여 확장 그뇅을 활성화하세요.',
  'Installing the "Zend OPcache" extension will dramatically improve performance.' => '"Zend OPcache" 확장 기능을 설치하면 성능이 크게 향상됩니다.',
  'Only strings may be written to the DB cache!' => '데이터베이스 캐시에는 문자열만 기록할 수 있습니다!',
  'Purge all caches.' => '모든 캐시를 지웁니다.',
  'Specify either "--all" or "--caches", not both.' => '"--all" 또는 "--caches"를 지정하되, 둘을 동시에 지정하지는 마세요.',
  'PHP Extension "APCu" Not Installed' => 'PHP 확장 기능 "APCu"가 설치되지 않음',
  'Zend OPcache Not Enabled' => 'Zend OPcache가 활성화되지 않음',
  'Drop data from readthrough caches.' => 'Read-Through 캐시로부터 데이터를 삭제합니다.',
  'Cache purger "%s" is not recognized. Available caches are: %s.' => '캐시 새로 고침기 "%s"을(를) 인식할 수 없습니다. 사용 가능한 캐시: %s.',
  'Installing the "APCu" PHP extension will improve performance. This extension is strongly recommended. Without it, this software must rely on a very inefficient disk-based cache.' => '"APCu" PHP 확장 기능을 설치하면 성능이 향상됩니다. 이 확장 기능은 강력히 권장됩니다. 이 확장 기능이 없으면 이 소프트웨어는 매우 비효율적인 디스크 기반 캐시에 의존해야 합니다.',
  'OPcache Disabled' => 'OPcache 비활성화됨',
  'APCu Extension Not Enabled' => 'APCu 확장 기능이 활성화되지 않음',
  'OPcache Config' => 'OPcache 구성',
  'OPcache is not configured ideally for production.' => 'OPcache가 프로덕션 환경에 최적화된 구성이 아닙니다.',
  'OPcache' => 'OPcache',
  'Serializing cache can not write objects (for key "%s")!' => '직렬화 캐시에서 객체를 쓸 수 없습니다(키 "%s"에 대해)!',
  'In development, OPcache should be configured to always reload code so nothing needs to be restarted after making changes. To do this, enable "%s" and set "%s" to 0.' => '개발 환경에서는 OPcache가 변경 후 재시작할 필요 없이 항상 코드를 다시 로드하도록 구성해야 합니다. 이를 위해서는 "%s"을(를) 활성화하고 "%s"을(를) 0으로 설정하세요.',
  'Purging "%s" cache...' => '"%s" 캐시 새로 고침 중...',
  'Purge a specific set of caches.' => '특정 캐시 세트를 새로 고침합니다.',
  'When using "--caches", you must select at least one valid cache to purge.' => '"--caches" 옵션을 사용할 때는 새로 고침할 유효한 캐시를 최소 하나 이상 선택해야 합니다.',
  'In production, OPcache should be configured to never revalidate code. This will slightly improve performance. To do this, disable "%s" in your PHP configuration.' => '프로덕션 환경에서는 OPcache가 코드 재검증을 절대 수행하지 않도록 설정해야 합니다. 이렇게 하면 성능이 약간 향상됩니다. 이를 위해서는 "%s"을(를) 비활성화하세요.',
  'OPcache Not Configured for Development' => 'OPcache가 개발 환경에 맞게 구성되지 않았습니다.',
  'Failed to inflate data!' => '데이터를 inflate 하는데 실패했습니다!',
  'Zend OPcache' => 'Zend OPcache',
  'Enabling OPcache will dramatically improve performance.' => 'OPcache를 활성화하면 성능이 크게 향상됩니다.',
  'Enabling APCu will improve performance.' => 'APCu를 활성화하면 성능이 향상됩니다.',
);
  }

}
