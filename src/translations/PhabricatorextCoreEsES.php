<?php

final class PhabricatorextCoreEsES
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'es_ES';
  }

  protected function getTranslations() {
    return array(
      'MediaWiki User' => 'Usuario de MediaWiki',
      'Open Tasks' => 'Tareas abiertas',
      '**MediaWiki Instance Name**
    Choose a permanent name for this instance of MediaWiki. Phabricator uses this name internally to keep track of this instance of MediaWiki, in case the URL changes later.
    Use lowercase letters, digits, and period. For example: 
    `mediawiki`, `mediawiki.mycompany` or `mediawiki.engineering` are reasonable names.' => '**Nombre de instancia de MediaWiki**
    Escoge un nombre permanente para esta instancia de MediaWiki. Phabricator utiliza este nombre internamente para llevar un registro de esta instancia de MediaWiki, en caso de que el URL cambie más tarde.
    Usa letras minúsculas, dígitos, y puntos. Por ejemplo: 
    `mediawiki`, `mediawiki.micompania` o `mediawiki.ingenieria` son nombres razonables.',
      'Global Accounts' => 'Cuentas globales',
      'Any open subtask(s) block the train from moving forward. This means no further deployments until the blockers are resolved.' => 'Cualquier tarea(s) abierta(s) bloquea(n) al tren para avanzar. Esto significa que ningún despliegue  más se hará hasta que se resuelvan los bloqueadores.',
    );
  }

}
