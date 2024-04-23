<?php

final class PhabricatorXhprofEsES
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'es_ES';
  }

  protected function getTranslations() {
    return array(
      'All Samples' => 'Todas las muestras',
      'Symbol' => 'Símbolo',
      'Unnamed Sample' => 'Muestra sin nombre',
      'Drop .xhprof Files to Import' => 'Coloca archivos .xhprof para importarlos',
      'Child Calls' => 'Llamadas de hijo',
    );
  }

}
