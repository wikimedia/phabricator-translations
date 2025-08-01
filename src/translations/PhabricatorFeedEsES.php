<?php

final class PhabricatorFeedEsES
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'es_ES';
  }

  protected function getTranslations() {
    return array(
      'Include Projects' => 'Incluir proyectos',
      'The specified "Occurs Before" date is earlier in time than the specified "Occurs After" date, so this query can never match any results.' => 'La fecha especificada de "Ocurre antes" es más temprana que la fecha especificada "Ocurren después", por lo que esta consulta nunca puede coincidir con ningún resultado.',
      'Include stories about projects I am a member of.' => 'Incluir historias sobre proyectos de los que soy miembro.',
    );
  }

}
