<?php

final class PhabricatorDifferentialPtBR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'pt_BR';
  }

  protected function getTranslations() {
    return array(
      'Load File' => 'Carregar arquivo',
      'Modified' => 'Modificado',
      'CHANGE DETAILS' => 'MUDAR DETALHES',
      'Revision Author' => 'Autor da revisão',
      'This binary file was added.' => 'Este arquivo binário foi adicionado.',
      'Configure Editor' => 'Configurar o editor',
      'Type a user, project, or package name...' => 'Digite um nome de usuário, projeto ou pacote...',
      'Load Changes' => 'Carregar alterações',
      'No View Permission' => 'Sem permissão de visualização',
      'This file was deleted.' => 'Este arquivo foi excluído.',
      '%s Lines' => '%s linhas',
      'Active Operations' => 'Operações ativas',
      'Edit Revision' => 'Editar revisão',
      'Edit Parent Revisions' => 'Editar revisões dos pais',
      'View Standalone' => 'Visualizar autônomo',
      'You must specify an initial diff when creating a revision.' => 'Você deve especificar um diff inicial ao criar uma revisão.',
      'Type a user, project, or package name, or function...' => 'Digite um usuário, projeto ou nome do pacote ou função...',
      'Show Raw File (Right)' => 'Mostrar arquivo bruto (à direita)',
      'Open Revisions' => 'Revisões abertas',
      'All Context Shown' => 'Todo o contexto mostrado',
      'Pre-Commit Review' => 'Revisão pré-validação',
      'Differential Changesets' => 'Mudanças diferenciais',
      'Hold as Draft' => 'Segure como esboço',
      'Add a comment to a Differential revision.' => 'Adicione um comentário a uma revisão diferencial.',
      'You must select a comment to edit.' => 'Você deve selecionar um comentário para editar.',
      'New revision summary.' => 'Novo resumo de revisão.',
      'Add an inline comment to a Differential revision.' => 'Adicione um comentário in-line a uma revisão diferencial.',
      'You can not request changes to this revision because you are the revision author. You can only request changes to revisions you do not own.' => 'Você não pode solicitar alterações nesta revisão porque é o autor da revisão. Você só pode solicitar alterações nas revisões que você não possui.',
      'React to new diffs being uploaded, before writes occur.
    These rules can reject diffs before they are written to permanent storage, to prevent users from accidentally uploading private keys or other sensitive information.' => 'Reagir aos novos diferenças que estão sendo enviados, antes que as gravações ocorram.
    Essas regras podem rejeitar os diferenças antes de serem gravados no armazenamento permanente, para impedir que os usuários façam upload de chaves privadas ou outras informações confidenciais.',
      'Revision summary.' => 'Resumo da revisão.',
      'Closed by commit %s (authored by %s).' => 'Fechado pela validação %s (criado por %s).',
      'Editing Comment' => 'Edição de comentário',
      'Request Changes' => 'Solicitar alterações',
      'This file was added.' => 'Este arquivo foi adicionado.',
      'REVISION SUMMARY' => 'RESUMO DA REVISÃO',
      'List of tasks.' => 'Lista de tarefas',
      'Type a revision status name or function...' => 'Digite um nome ou função de status de revisão...',
      'These changes have failed to build.' => 'Essas alterações não foram criadas.',
      'Options "--all" (to migrate all hunks) and "--id" (to migrate a specific hunk) are mutually exclusive.' => 'Opções "--all" (para migrar todos os pedaços) e "--id" (para migrar um pedaço específico) são mutuamente exclusivos.',
      'Reply and quote selected inline comment.' => 'Responder e citar o comentário in-line selecionado.',
      'Rebuild changesets for a revision.' => 'Recriar conjuntos de alterações para uma revisão.',
      'Revision summary' => 'Resumo da revisão',
    );
  }

}
