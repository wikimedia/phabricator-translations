<?php

final class PhabricatorAuditPtBR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'pt_BR';
  }

  protected function getTranslations() {
    return array(
      'USERS' => 'USUÁRIOS',
      '%s added subscribers: %s.' => '%s de asisinates: %s.',
      '%s added subscribers...' => '%s assinantes adicionados...',
      'Welcome to Audit' => 'Bem-vindo ao Audit',
      'Select only audits for commits on or after the given date.' => 'Selecione somente auditorias para confirmações na data ou após a data especificada.',
      'All Commits' => 'Todas as validações',
      '%s edited subscribers; added: %s, removed: %s.' => 'Inscrito(s) editados %s; adicionado: %s, removido: %s.',
      'Other commit activity not listed above occurs.' => 'Outra atividade de confirmação não listada acima ocorre.',
      '%s removed subscribers: %s.' => '%s removeu inscritos: %s.',
      'Find commits authored by particular users.' => 'Encontre validações criados por usuários específicos.',
      'Active Audits' => 'Auditorias ativas',
      'Browse and Audit Commits' => 'Navegar e fazer auditoria de validações',
      'Audit' => 'Auditoria',
      'No commits found.' => 'Nenhuma validação encontrada.',
    );
  }

}
