<?php

final class PhabricatorFeedEsES
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'es_ES';
  }

  protected function getTranslations() {
    return array(
      'Include Projects' => 'Incluir proyectos',
      'Include stories about projects I am a member of.' => 'Incluir historias sobre proyectos de los que soy miembro.',
    );
  }

}
