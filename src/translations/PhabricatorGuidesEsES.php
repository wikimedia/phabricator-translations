<?php

final class PhabricatorGuidesEsES
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'es_ES';
  }

  protected function getTranslations() {
    return array(
      'Project tags define everything. Create them for teams, tags, or actual projects.' => 'Las etiquetas del proyecto lo definen todo. Créelos para equipos, etiquetas o proyectos reales.',
      'You\'ve created at least one project.' => 'Has creado al menos un proyecto.',
    );
  }

}
