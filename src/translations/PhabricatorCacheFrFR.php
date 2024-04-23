<?php

final class PhabricatorCacheFrFR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr_FR';
  }

  protected function getTranslations() {
    return array(
      '%s is not available; unable to read deflated data!' => '%s n’est pas disponible ; impossible de lire les données décompressées !',
      'APCu' => 'APCu',
      '"%s" Disabled' => '« %s » désactivé',
      '"%s" Enabled in Production' => '« %s » activé en production',
      'Select caches to purge with "--all" or "--caches". Available caches are: %s.' => 'Sélectionner les caches à purger avec with « --all« » ou « --caches ». Les caches disponibles sont : %s.',
      'APC Has Noisy Configuration' => 'APC a une configuration bruyante',
      'APC' => 'APC',
      'OPcache is not configured properly for development.' => 'OPcache n’est pas bien configuré pour le développement.',
      'General Cache (TTL)' => 'Cache général (temps de survie)',
      'Enabling APC/APCu will improve performance.' => 'Activer APC/APCu améliorera la performance.',
      'Zend OPcache Not Installed' => 'OPcache de Zend n’est pas installé',
      '"%s" Enabled' => '« %s » activé',
      'Markup Cache' => 'Cache de balisage',
      'General Cache' => 'Cache général',
      'Unknown cache format.' => 'Format de cache inconnu.',
      'Two objects (of classes "%s" and "%s") generate the same map value ("%s"). Each object must generate a unique map value.' => 'Deux objets (de classe « %s » et « %s ») ont généré la même valeur de correspondance (« %s »). Chaque objet doit générer une valeur de correspondance unique.',
      'OPcache Not Configured for Production' => 'OPcache non configuré pour la production',
      'The PHP "Zend OPcache" extension is installed, but not enabled in your PHP configuration. Enabling it will dramatically improve performance. Edit the "%s" setting to enable the extension.' => 'L\'extension « Zend OPcache » est installée, mais n’est pas activée dans votre configuration PHP. En l’activant, vous allez grandement améliorer les performances de Phabricator. Modifiez la valeur de « %s » pour activer l’extension.',
      'Installing the "Zend OPcache" extension will dramatically improve performance.' => 'Installer l’extension « Zend OPcache » améliorera grandement les performances.',
      'Only strings may be written to the DB cache!' => 'Seules des chaînes peuvent être écrites dans le cache de la base de données !',
      'Purge all caches.' => 'Purger tous les caches.',
      'Specify either "--all" or "--caches", not both.' => 'Indiquez soit « --all », soit « --caches », mais pas les deux.',
      'APC/APCu Extensions Not Enabled' => 'Les extensions APC/APCu ne sont pas activées',
      'PHP Extension "APCu" Not Installed' => 'L’extension « APCu » de PHP n’est pas installée',
      'Zend OPcache Not Enabled' => '« Zend OPcache » n’est pas activé',
      'Noisy APC' => 'APC bruyant',
      'Drop data from readthrough caches.' => 'Retirer les données des caches de lecture.',
      'Cache purger "%s" is not recognized. Available caches are: %s.' => 'Le purgeur de cache « %s » n’est pas reconnu. Les caches disponibles sont : %s.',
      'Installing the "APCu" PHP extension will improve performance. This extension is strongly recommended. Without it, this software must rely on a very inefficient disk-based cache.' => 'Installer l’extension PHP « APCu » améliorera les performances. Cette extension est fortement recommandée. Sans elle, Phabricator ne peut compter que sur un cache disque beaucoup moins efficace.',
      'OPcache Disabled' => 'OPcache désactivé',
      'APC/APCu Disabled' => 'APC/APCu désactivé',
      '"%s" is currently enabled, but should probably be disabled.' => '« %s » est actuellement activé, mais devrait probablement être désactivé.',
      'APC User Cache' => 'Cache utilisateur APC',
      'The APC or APCu PHP extensions are installed, but not enabled in your PHP configuration. Enabling these extensions will improve performance. Edit the "%s" setting to enable these extensions.' => 'Les extensions PHP APC ou APCu sont installées, mais pas activées dans votre configuration PHP. Activer ces extensions améliorera la performance de Phabricator. Modifiez le paramètre « %s » pour activer ces extensions.',
      'OPcache Config' => 'Configuration d’OPcache',
      'Adjust APC settings to quiet unnecessary errors.' => 'Ajuster les paramètres d’APC pour ne plus voir les erreurs inutiles.',
      'OPcache is not configured ideally for production.' => 'La configuration d’OPcache n’est pas optimale pour la production.',
      '"%s" is currently disabled, but should probably be enabled.' => '« %s » est actuellement désactivé, mais devrait probablement être activé.',
      'OPcache' => 'OPcache',
      'Serializing cache can not write objects (for key "%s")!' => 'Le cache de sérialisation ne peut pas écrire des objets (pour la clé « %s ») !',
      'In development, OPcache should be configured to always reload code so nothing needs to be restarted after making changes. To do this, enable "%s" and set "%s" to 0.' => 'En cours de développement, OPCache devrait être configuré pour toujours recharger le code afin que rien n’ait besoin d’être redémarré après avoir effectué des modifications. Pour cela, activez « %s » et mettez « %s » à 0.',
      'The "%s" setting is currently enabled in your PHP configuration. In production mode, "%s" should be disabled. This will improve performance slightly.' => 'Le paramètre « %s » est actuellement activé dans votre configuration PHP. En mode production, « %s » doit être désactivé. Cela améliorera un peu les performances.',
      'Purging "%s" cache...' => 'Purge du cache « %s »...',
      'Installing the PHP extension \'APC\' (Alternative PHP Cache) will dramatically improve performance. Note that APC versions 3.1.14 and 3.1.15 are broken; 3.1.13 is recommended instead.' => 'Installer l’extension PHP « APC » (Cache PHP alternatif) améliorera la performance de façon spectaculaire. Notez que les versions 3.1.14 et 3.1.15 d’APC ne fonctionnent pas correctement ; 3.1.13 est recommandé à la place.',
      'Purge a specific set of caches.' => 'Purger un ensemble spécifique de caches.',
      'When using "--caches", you must select at least one valid cache to purge.' => 'Si vous utilisez « --caches », vous devez choisir au moins un cache valide à purger.',
      'Some versions of APC may emit unnecessary errors into the error log under the current APC settings. To resolve this, enable "%s" and disable "%s" in your PHP configuration.' => 'Certaines versions d’APC peuvent émettre des erreurs inutiles dans le journal, avec les paramètres actuels d’APC. Pour résoudre cela, activez « %s » et désactivez « %s » dans votre configuration PHP.',
      'In production, OPcache should be configured to never revalidate code. This will slightly improve performance. To do this, disable "%s" in your PHP configuration.' => 'En production, OPcache doit être configuré de telle sorte à ne jamais revalider le code. Ceci améliorera sensiblement les performances. Pour faire cela, désactivez « %s » dans votre configuration PHP.',
      '"%s" Disabled in Development' => '« %s » désactivé pour le développement',
      'OPcache Not Configured for Development' => 'OPcache n’est pas configuré pour le développement',
      'Failed to inflate data!' => 'Échec de décompression des données !',
      'Zend OPcache' => 'Zend OPcache',
      'Enabling OPcache will dramatically improve performance.' => 'L’activation d’OPcache améliorera grandement les performances.',
      'PHP Extension \'APC\' Not Installed' => 'Extension PHP « APC » non installée',
      'The "%s" setting is currently disabled in your PHP configuration, but this software is running in development mode. This option should normally be enabled in development so you do not need to restart anything after making changes to the code.' => 'Le paramètre « %s » est actuellement désactivé dans votre configuration PHP, mais Phabricator fonctionne en mode de développement. Cette option devrait normalement être activée en cours de développement, afin que vous n’ayez pas besoin de redémarrer quoi que ce soit après avoir effectué des modifications dans le code.',
    );
  }

}
