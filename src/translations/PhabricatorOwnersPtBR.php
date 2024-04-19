<?php

final class PhabricatorOwnersPtBR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'pt_BR';
  }

  protected function getTranslations() {
    return array(
      '[Package]' => '[Pacote]',
      'Audit All Commits' => 'Auditoria de todos as validações',
      'Audit Commits With No Owner Involvement' => 'Auditoria se validação sem envolvimento do proprietário',
      'Owned' => 'Possuído',
      'Find results in any of an owner\'s packages.' => 'Encontre resultados em qualquer um dos pacotes do proprietário.',
      'No Auditing' => 'Sem auditoria',
      'Edit Paths: %s' => 'Editar caminhos: %s',
      '%s changed the audit rule for this package from %s to %s.' => '%s mudou a regra de auditoria para este pacote de %s para %s.',
      'Active Packages' => 'Pacotes ativos',
    );
  }

}
