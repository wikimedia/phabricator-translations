<?php

final class PhabricatorCacheEsES
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'es_ES';
  }

  protected function getTranslations() {
    return array(
      'OPcache is not configured properly for development.' => 'OPcache no está configurado correctamente para el desarrollo.',
      'General Cache (TTL)' => 'Caché general (TTL)',
      'APC/APCu Disabled' => 'APC/APCu deshabilitado',
      'Purging "%s" cache...' => 'Purgando el caché "%s"...',
      'Zend OPcache' => 'OPcache de Zend',
      'PHP Extension \'APC\' Not Installed' => 'La extensión PHP \'APC\' no está instalada',
    );
  }

}
