<?php

final class PhabricatorDiffusionEsES
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'es_ES';
  }

  protected function getTranslations() {
    return array(
      'Repositories: Invalid Project' => 'Repositorios: Proyecto no válido',
      'Type a user, project or package name...' => 'Escriba un nombre de usuario, proyecto o paquete...',
      'Find results for repositories of a project.' => 'Buscar resultados de los repositorios de un proyecto.',
      'Commit Date' => 'Fecha de commit',
      'Auditor "%s" must be a user, a package, or a project.' => 'El auditor "%s" debe ser un usuario, un paquete o un proyecto.',
      'Browse Repository' => 'Explorar el Repositorio',
      'Select repositories tagged with this project.' => 'Seleccionar repositorios etiquetados con este proyecto.',
      'Discovering…' => 'Descubriendo…',
      'Type tagged(<project>)...' => 'Tipo etiquetado (<proyecto>)...',
      'Authored on %s' => 'Escrito el %s',
      'Unpublished' => 'Sin publicar',
    );
  }

}
