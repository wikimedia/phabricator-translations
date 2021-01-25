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
      '"%s" Disabled' => '%s Desactivat',
      '"%s" Enabled in Production' => '«%s» Activat en Producció',
      'Select caches to purge with "--all" or "--caches". Available caches are: %s.' => 'Seleccioneu la memòria cau a purgar amb «--all» o «--caches». Les memòries cau disponibles són: %s.',
      'APC Has Noisy Configuration' => 'APC Té una Configuració Sorollosa',
      'APC' => 'APC',
      'OPcache is not configured properly for development.' => 'OPcache no està configurat correctament per al desenvolupament.',
      'General Cache (TTL)' => 'Memòria cau general (TTL)',
      'Enabling APC/APCu will improve performance.' => 'L\'habilitació d\'APC/APCu millorarà el rendiment.',
      'Zend OPcache Not Installed' => 'L\'OPcache de Zend no està instal·lat',
      '"%s" Enabled' => '%s Activat',
      'Markup Cache' => 'Memòria cau de marcat',
      'The PHP "Zend OPcache" extension is installed, but not enabled in your PHP configuration. Enabling it will dramatically improve Phabricator performance. Edit the "%s" setting to enable the extension.' => 'L\'extensió PHP "Zend OPcache" està instal·lada, però no està habilitada en la configuració de PHP. Habilitar-ho millorarà dràsticament el rendiment del Phabricator.  Edita el paràmetre «%s» per activar l\'extensió.',
      'General Cache' => 'Memòria cau general',
      'Unknown cache format.' => 'Format de memòria cau desconegut.',
      'Two objects (of classes "%s" and "%s") generate the same map value ("%s"). Each object must generate a unique map value.' => 'Dos objectes (de classes «%s» i «%s») generen el mateix valor de mapa («%s»). Cada objecte ha de generar un valor de mapa únic.',
      'OPcache Not Configured for Production' => 'OPcache No Configurat per Producció',
      'Installing the "Zend OPcache" extension will dramatically improve performance.' => 'Instal·lar l\'extensió «Zend OPcache» millorarà dràsticament el rendiment.',
      'Only strings may be written to the DB cache!' => 'Només es poden escriure cadenes a la memòria cau de la BD!',
      'Purge all caches.' => 'Purga totes les memòries cau.',
      'Specify either "--all" or "--caches", not both.' => 'Especifiqueu "--all" o "--caches", no tots dos.',
      'APC/APCu Extensions Not Enabled' => 'Extensions APC/APCu no activades',
      'PHP Extension "APCu" Not Installed' => 'Extensió PHP "APCu" no instal·lada',
      'Zend OPcache Not Enabled' => 'Zend OPcache no està habilitat',
      'Noisy APC' => 'APC sorollós',
      'Drop data from readthrough caches.' => 'Elimina les dades de la memòria cau de lectura.',
      'Cache purger "%s" is not recognized. Available caches are: %s.' => 'No es reconeix el purgador de memòria cau «%s».  Les memòries cau disponibles són: %s.',
      'OPcache Disabled' => 'OPcache Desactivat',
      'APC/APCu Disabled' => 'APC/APCu desactivat',
      '"%s" is currently enabled, but should probably be disabled.' => '«%s» està habilitat actualment però probablement s\'ha de desactivar.',
      'APC User Cache' => 'Memòria cau d\'usuari APC',
      'OPcache Config' => 'Configuració d\'OPcache',
      'Adjust APC settings to quiet unnecessary errors.' => 'Ajusteu la configuració de l\'APC per silenciar els errors  no necessaris.',
      'OPcache is not configured ideally for production.' => 'OPcache no està configurat idealment per a la producció.',
      '"%s" is currently disabled, but should probably be enabled.' => 'Actualment «%s» està desactivat, però probablement hauria d\'estar habilitat.',
      'OPcache' => 'OPcache',
      'Serializing cache can not write objects (for key "%s")!' => 'La serialització de la memòria cau no pot escriure objectes (per a la clau «%s»)!',
      'In development, OPcache should be configured to always reload code so nothing needs to be restarted after making changes. To do this, enable "%s" and set "%s" to 0.' => 'En desenvolupament, l\'OPcache ha de ser configurat per recarregar el codi de manera que no cal reiniciar res després de fer canvis. Per fer-ho, activeu «%s» i establiu «%s» a 0.',
      'The "%s" setting is currently enabled in your PHP configuration. In production mode, "%s" should be disabled. This will improve performance slightly.' => 'La configuració de «%s» està habilitada actualment en la configuració de PHP. En mode producció, s\'ha de desactivar "%s". Això millorarà lleugerament el rendiment.',
      'Purging "%s" cache...' => 'S\'està purgant la memòria cau de "%s" ...',
      'Installing the "APCu" PHP extension will improve performance. This extension is strongly recommended. Without it, Phabricator must rely on a very inefficient disk-based cache.' => 'Instal·lar l\'extensió PHP "APCu" millorarà el rendiment. Aquesta extensió és molt recomanable. Sense ella, Phabricator ha de dependre d\'una memòria cau de disc molt ineficient.',
      'Installing the PHP extension \'APC\' (Alternative PHP Cache) will dramatically improve performance. Note that APC versions 3.1.14 and 3.1.15 are broken; 3.1.13 is recommended instead.' => 'La instal·lació de l\'extensió PHP \'APC\' (Alternative PHP Cache) millorarà dràsticament el rendiment. Tingueu en compte que les versions APC 3.1.14 i 3.1.15 estan trencades; en lloc d\'això es recomana 3.1.13.',
      'Purge a specific set of caches.' => 'Purga un conjunt específic de memòries cau.',
      'The APC or APCu PHP extensions are installed, but not enabled in your PHP configuration. Enabling these extensions will improve Phabricator performance. Edit the "%s" setting to enable these extensions.' => 'Les extensions APC o APCu de PHP estan instal·lades, però no estan habilitades en la configuració de PHP. Si activeu aquestes extensions es millorarà el rendiment del Phabricator. Edita la configuració «%s» per habilitar aquestes extensions.',
      'When using "--caches", you must select at least one valid cache to purge.' => 'Quan utilitzeu "--caches", heu de seleccionar almenys una memòria cau vàlida per purgar.',
      'Some versions of APC may emit unnecessary errors into the error log under the current APC settings. To resolve this, enable "%s" and disable "%s" in your PHP configuration.' => 'Algunes versions de l\'APC poden emetre errors innecessaris al registre d\'errors sota la configuració actual de l\'APC. Per resoldre això, activeu «%s» i desactiveu «%s» en la vostra configuració de PHP.',
      'The "%s" setting is currently disabled in your PHP configuration, but Phabricator is running in development mode. This option should normally be enabled in development so you do not need to restart anything after making changes to the code.' => 'La configuració de «%s» està desactivada actualment en la configuració de PHP, però el Phabricator s\'està executant en mode de desenvolupament.  Aquesta opció normalment s\'ha d\'activar en el desenvolupament de manera que no cal reiniciar res després de fer canvis al codi.',
      'In production, OPcache should be configured to never revalidate code. This will slightly improve performance. To do this, disable "%s" in your PHP configuration.' => 'En producció, l\'OPcache s\'ha de configurar per no tornar a validar el codi.  Això millorarà lleugerament el rendiment.  Per fer-ho, desactiveu "%s" en la configuració de PHP.',
      '"%s" Disabled in Development' => '«%s» desactivat en el desenvolupament',
      'OPcache Not Configured for Development' => 'OPcache no està configurat per al desenvolupament',
      'Failed to inflate data!' => 'Fracàs en el desenvolupament de dades!',
      'Zend OPcache' => 'Zend OPcache',
      'Enabling OPcache will dramatically improve performance.' => 'Habilitar OPcache millorarà dramàticament el rendiment.',
      'PHP Extension \'APC\' Not Installed' => 'L\'extensió PHP \'APC\' no instal·lada',
    );
  }

}
