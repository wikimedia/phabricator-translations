<?php

final class PhabricatorPhameEsES
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'es_ES';
  }

  protected function getTranslations() {
    return array(
      'Blog name.' => 'Nombre del blog.',
      'The custom domain should include a valid protocol in the URI (for example, "%s"). Valid protocols are "http" or "https".' => 'El URI del dominio personalizado debe incluir un protocolo válido (por ejemplo, «%s»). Los protocolos válidos son «http» y «https».',
      'Blog' => 'Blog',
      'Blog description.' => 'Descripción del blog.',
      'PHID of the blog.' => 'PHID del blog.',
      'Post subtitle.' => 'Subtítulo del blog.',
      'Internal and External Blogs' => 'Blogs internos y externos',
      'All Blogs' => 'Todos los blogs',
      'Header' => 'Cabecera',
      'Publish Date' => 'Fecha de publicación',
      'Change the blog subtitle.' => 'Cambiar el subtítulo del blog.',
      'Blog Header' => 'Cabecera del blog',
      'Edit Blog Header' => 'Editar cabecera del blog',
      'CHANGES TO BLOG DESCRIPTION' => 'CAMBIOS A LA DESCRIPCIÓN DEL BLOG',
      'Active Blogs' => 'Blogs activos',
      'Local Blog' => 'Blog local',
      'About %s' => 'Acerca de %s',
      'The name of the blog.' => 'El nombre del blog.',
      'Full Domain' => 'Dominio completo',
    );
  }

}
