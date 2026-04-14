<?php

final class PhabricatorCacheCa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ca';
  }

  protected function getTranslations() {
    return array(
  '%s is not available; unable to read deflated data!' => '%s no està disponible; impossible llegir dades sense comprimir.',
  'APCu' => 'APCu',
  'Select caches to purge with "--all" or "--caches". Available caches are: %s.' => 'Seleccioneu la caché a purgar amb "--all" o "--caché". Les cachés disponibles són: %s.',
  'The APCu PHP extension is installed, but not enabled in your PHP configuration. Enabling this extension will improve performance. Edit the "%s" setting to enable this extension.' => 'Les extensions APC o APCu de PHP estan instal·lades, però no estan habilitades en la configuració de PHP. Si activeu aquestes extensions es millorarà el rendiment del Phabricator. Edita el paràmetre «%s» per habilitar aquestes extensions.',
  'OPcache is not configured properly for development.' => 'OPcache no està configurat correctament per al desenvolupament.',
  'General Cache (TTL)' => 'Caché general (TTL)',
  'Zend OPcache Not Installed' => 'L\'OPcache de Zend no està instal·lat',
  'Markup Cache' => 'Caché de marcatge',
  'General Cache' => 'Caché general',
  'Unknown cache format.' => 'Format de caché desconegut.',
  'Two objects (of classes "%s" and "%s") generate the same map value ("%s"). Each object must generate a unique map value.' => 'Dos objectes (de classes «%s» i «%s») generen el mateix valor de mapa («%s»). Cada objecte ha de generar un valor de mapa únic.',
  'OPcache Not Configured for Production' => 'OPcache No Configurat per Producció',
  'The PHP "Zend OPcache" extension is installed, but not enabled in your PHP configuration. Enabling it will dramatically improve performance. Edit the "%s" setting to enable the extension.' => 'L\'extensió PHP "Zend OPcache" està instal·lada, però no està habilitada en la configuració de PHP. Habilitar-ho millorarà dràsticament el rendiment del Phabricator.  Edita el paràmetre «%s» per activar l\'extensió.',
  'Installing the "Zend OPcache" extension will dramatically improve performance.' => 'Instal·lar l\'extensió «Zend OPcache» millorarà dràsticament el rendiment.',
  'Only strings may be written to the DB cache!' => 'Només es poden escriure cadenes a la caché de la BD!',
  'Purge all caches.' => 'Purga totes les memòries cau.',
  'Specify either "--all" or "--caches", not both.' => 'Especifiqueu "--all" o "--caches", no tots dos.',
  'PHP Extension "APCu" Not Installed' => 'Extensió PHP "APCu" no instal·lada',
  'Zend OPcache Not Enabled' => 'Zend OPcache no està habilitat',
  'Drop data from readthrough caches.' => 'Buida les dades de la caché de lectura.',
  'Cache purger "%s" is not recognized. Available caches are: %s.' => 'No es reconeix el purgador de caché «%s». Les cachés disponibles són: %s.',
  'Installing the "APCu" PHP extension will improve performance. This extension is strongly recommended. Without it, this software must rely on a very inefficient disk-based cache.' => 'Instal·lar l\'extensió PHP "APCu" millorarà el rendiment. Aquesta extensió és molt recomanable. Sense ella, Phabricator ha de dependre d\'una caché de disc molt ineficient.',
  'OPcache Disabled' => 'OPcache Desactivat',
  'APCu Extension Not Enabled' => 'Extensions APC/APCu no activades',
  'OPcache Config' => 'Configuració d\'OPcache',
  'OPcache is not configured ideally for production.' => 'OPcache no està configurat idealment per a la producció.',
  'OPcache' => 'OPcache',
  'Serializing cache can not write objects (for key "%s")!' => 'La serialització de la caché no pot escriure objectes (per a la clau «%s»)!',
  'In development, OPcache should be configured to always reload code so nothing needs to be restarted after making changes. To do this, enable "%s" and set "%s" to 0.' => 'En desenvolupament, l\'OPcache ha de ser configurat per recarregar el codi de manera que no cal reiniciar res després de fer canvis. Per fer-ho, activeu «%s» i establiu «%s» a 0.',
  'Purging "%s" cache...' => 'S\'està purgant la caché de "%s" ...',
  'Purge a specific set of caches.' => 'Purga un conjunt específic de memòries cau.',
  'When using "--caches", you must select at least one valid cache to purge.' => 'Quan utilitzeu "--caches", heu de seleccionar almenys una caché vàlida per purgar.',
  'In production, OPcache should be configured to never revalidate code. This will slightly improve performance. To do this, disable "%s" in your PHP configuration.' => 'En producció, l\'OPcache s\'ha de configurar per no tornar a validar el codi.  Això millorarà lleugerament el rendiment.  Per fer-ho, desactiveu "%s" en la configuració de PHP.',
  'OPcache Not Configured for Development' => 'OPcache no està configurat per al desenvolupament',
  'Failed to inflate data!' => 'Fracàs en el desenvolupament de dades!',
  'Zend OPcache' => 'Zend OPcache',
  'Enabling OPcache will dramatically improve performance.' => 'Habilitar OPcache millorarà dramàticament el rendiment.',
  'Enabling APCu will improve performance.' => 'L\'habilitació d\'APC/APCu millorarà el rendiment.',
  'APCu Disabled' => 'APC/APCu desactivat',
);
  }

}
