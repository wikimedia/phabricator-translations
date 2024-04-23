<?php

final class PhabricatorTypeaheadEsES
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'es_ES';
  }

  protected function getTranslations() {
    return array(
      'Typeahead' => 'Compleción de escritura anticipada',
      'Reference: Advanced Functions' => 'Referencia: funciones avanzadas',
      'Image URI' => 'URI de imagen',
      'This source is not usable directly.' => 'No se puede utilizar esta fuente directamente.',
    );
  }

}
