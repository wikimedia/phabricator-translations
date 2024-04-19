<?php

final class PhabricatorDrydockPtBR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'pt_BR';
  }

  protected function getTranslations() {
    return array(
      'Show Details' => 'Mostrar detalhes',
      'Active Authorizations' => 'Autorizações ativas',
      'One or more blueprints promised a new resource, but failed when allocating: [%s] %s' => 'Um ou mais projetos prometiam um novo recurso, mas falharam ao alocar: [%s] %s',
      'Operation' => 'Operação',
      'Allocation Failed' => 'Alocação falhada',
      'Activated' => 'Ativado',
      'Blueprint names can be no longer than %s characters.' => 'Os nomes dos projetos não podem ter mais de %s caracteres.',
      'You must select a blueprint type when creating a blueprint.' => 'Você deve selecionar um tipo de blueprint ao criar um blueprint.',
      'Type a blueprint name...' => 'Digite um nome de blueprint...',
    );
  }

}
