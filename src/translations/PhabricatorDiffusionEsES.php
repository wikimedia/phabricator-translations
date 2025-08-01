<?php

final class PhabricatorDiffusionEsES
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'es_ES';
  }

  protected function getTranslations() {
    return array(
      'Repositories: Invalid Project' => 'Repositorios: Proyecto no válido',
      'Set VCS Password' => 'Establecer contraseña de VCS',
      'Remove VCS Password' => 'Eliminar contraseña de VCS',
      'Type a user, project or package name...' => 'Escriba un nombre de usuario, proyecto o paquete...',
      'Find results for repositories of a project.' => 'Buscar resultados de los repositorios de un proyecto.',
      'No Password Set' => 'No hay contraseña establecida',
      'Having trouble coming up with a good password? Try this randomly generated one, made by a computer:
    `%s`' => '¿Te cuesta encontrar una buena contraseña? Prueba esta generada aleatoriamente por computadora: 
    ` %s `',
      'Repository is not available yet!' => '¡El repositorio aún no está disponible!',
      'Commit Date' => 'Fecha de commit',
      'To access repositories hosted on this server over HTTP, you must set a version control password. This password should be unique.
    This password applies to all repositories available over HTTP.' => 'Para acceder a los repositorios alojados en este servidor mediante HTTP, debe establecer una contraseña de control de versiones. Esta contraseña debe ser única. Esta contraseña se aplica a todos los repositorios disponibles mediante HTTP.',
      'You do not currently have a VCS password set. If you set one, you can remove it here later.' => 'Actualmente no tienes una contraseña de VCS configurada. Si la tienes, puedes eliminarla aquí más tarde.',
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
