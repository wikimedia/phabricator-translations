<?php

final class PhabricatorSearchPt
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'pt';
  }

  protected function getTranslations() {
    return array(
      'Open Documents' => 'Documentos abertos',
      'All Open Objects' => 'Todos os objetos em aberto',
      'Edit Query' => 'Editar consulta',
      'Edit Queries...' => 'Editar consultas...',
    );
  }

}
