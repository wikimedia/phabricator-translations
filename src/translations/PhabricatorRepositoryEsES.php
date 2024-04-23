<?php

final class PhabricatorRepositoryEsES
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'es_ES';
  }

  protected function getTranslations() {
    return array(
      'Got too many results (%s) for commit "%s", expected %s.' => 'Demasiados resultados conseguidos (%s) para el commit "%s", se esperaba %s.',
      'branch' => 'rama',
      'Repository ("%s") does not exist, or you do not have permission to see it.' => 'El repositorio («%s») no existe o no tienes permiso de verlo.',
      'Task data has no "commitPHID".' => 'Data de la tarea no tiene "commitPHID".',
      'Repository "%s" is already imported.' => 'Ya se importó el repositorio «%s».',
      '%s enabled this URI.' => '%s activó este URI.',
      'Show a list of repositories.' => 'Mostrar una lista de repositorios.',
      'Repository "%s" is currently updating.' => 'Se está actualizando el repositorio «%s».',
      'Applied changes.' => 'Se aplicaron los cambios.',
      'dangerous change' => 'cambio peligroso',
      'Discover commits in __repository__.' => 'Descubre commits en __repository__.',
      'Move' => 'Trasladar',
      'Accept the possibility of permanent data loss?' => '¿Aceptas la posibilidad de que se produzca una pérdida permanente de datos?',
      'Commit "%s" (with PHID "%s") is no longer reachable from any branch, tag, or ref in this repository, so it will not be imported. This usually means that the branch the commit was on was deleted or overwritten.' => 'Commit "%s" (con PHID "%s") ya no es alcanzable por medio de ningúna rama, etiqueta o referencia en este repositorio, y por lo tanto no será importado. Esto usualmente significa que la rama en el cual el commit estaba ha sido borrada o sobreescrita.',
      'The Almanac service for this repository is not bound to any active interfaces.' => 'El servicio de Almanaque para este repositorio no está atado a ninguna interfaz activa.',
      'DETAILS' => 'DETALLES',
      'Create Git Repository' => 'Crear repositorio Git',
      'Create a new Git repository.' => 'Crear un repositorio Git nuevo.',
      'Discover all commits, even if they are ancestors of known commits. This can repair gaps in repository history.' => 'Descubre todos los commits, incluso si son antepasados de commits ya conocidos. Estos pueden reparar vacíos en la historia del repositorio.',
      'Unknown repository "%s"!' => 'Se desconoce el repositorio «%s».',
      'Unknown repository type "%s"!' => '¡Tipo de repositorio desconocido: "%s"!',
      'Pull even if the repository should not be present on this host according to repository cluster configuration.' => 'Pull incluso si el repositorio no debiera de estar presente en el servidor según la configuración de grupo del repositorio.',
      'Unable to retrieve CommitRef record for commit "%s".' => 'Incapaz de obtener el récord CommitRef del commit "%s".',
      'Observe' => 'Observar',
    );
  }

}
