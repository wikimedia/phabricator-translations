<?php

final class PhabricatorTransactionsPtBR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'pt_BR';
  }

  protected function getTranslations() {
    return array(
      'Lock / Hide Fields' => 'Bloquear / ocultar campos',
      'You do not have any MFA factors attached to your account, so you can not sign this transaction group with MFA. Add MFA to your account in Settings.' => 'Você não tem nenhum fator do MFA anexado à sua conta, portanto, não pode assinar este grupo de transações com o MFA. Adicione o MFA à sua conta em Configurações.',
      'To silence this edit, run this command:' => 'Para silenciar esta edição, execute este comando:',
      '%s added a comment.' => '%s adicionou um comentário.',
      '%s removed %s subscriber(s) for %s: %s.' => '%s removeu $ 2  inscrito(s) por %3$s: %4$s.',
      'Engine: Editor' => 'Motor: Editor',
      'To continue, configure multi-factor authentication in Settings.' => 'Para continuar, configure a autenticação de múltiplos fatores em Configurações.',
      'SearchEngine class to export data from.' => 'Classe do SearchEngine  para exportar dados de.',
      'In %s, %s wrote:' => 'Em %s, %s escreveu:',
      'This transaction group requires MFA to apply, but you can not provide an MFA response via Conduit. Edit this object via the web UI.' => 'Esse grupo de transações exige que o MFA seja aplicado, mas você não pode fornecer uma resposta do MFA via Conduit. Edite esse objeto pela interface da web.',
      'Subtype key "%s" does not identify a valid subtype.' => 'A chave de subtipo "%s" não identifica um subtipo válido.',
      'No search engines match "%s". Available engines which support data export are: %s.' => 'Nenhum mecanismo de pesquisa corresponde a "%s". Os mecanismos disponíveis que suportam a exportação de dados são: %s.',
      '%s edited subscriber(s), added %s: %s; removed %s: %s.' => '%s inscrito(s) editado(s), adicionado %s: %s; removido %s: %s.',
      'Use "--output <path>" to specify an output file, or "--output -" to print to stdout.' => 'Use "--output <path>" para especificar um arquivo de saída, ou "--output -" para imprimir no stdout.',
      'Bulk Edit Actions' => 'Ações de edição em massa',
      'Primary Fields' => 'Campos primários',
      'Export format.' => 'Formato de exportação.',
      'Drag and drop fields to change the order in which they appear in the application "Create" menu.' => 'Arraste e solte os campos para alterar a ordem em que eles aparecem no menu "Criar" do aplicativo.',
      'This job is already configured to run silently.' => 'Este trabalho já está configurado para ser executado silenciosamente.',
      'Specify an export format with "--format".' => 'Especifique um formato de exportação com "--format".',
      'Using HTTP Parameters' => 'Usando parâmetros HTTP',
      'Expected a query key or a set of query constraints.' => 'Esperado uma chave de consulta ou um conjunto de restrições de consulta.',
      'Edit Configuration' => 'Editar configuração',
      'Query does not match any objects you have permission to edit.' => 'A consulta não corresponde a nenhum objeto que você tenha permissão para editar.',
      'Query does not match any objects.' => 'Consulta não corresponde a nenhum objeto.',
      '%s awarded a token.' => '%s premiado com um token.',
      '%s added a comment to %s.' => '%s adicionou um comentário a %s.',
      'Output path already exists. Use "--overwrite" to overwrite it.' => 'O caminho de saída já existe. Use "--overwrite" para sobrescrevê-lo.',
      'Change Subtype' => 'Alterar subtipo',
      '%s removed %d subscriber(s): %s.' => '%s removeu %s inscritos: %s.',
      'Change Default Values' => 'Alterar valores padrão',
      'No default edit engine configuration for bulk edit.' => 'Nenhuma configuração de mecanismo de edição padrão para edição em massa.',
      'After running this command, reload this page to see the new setting.' => 'Depois de executar este comando, recarregue esta página para ver a nova configuração.',
      'Mention In' => 'Mencionado em',
      'Disable this form? Users will no longer be able to use it.' => 'Desativar este formulário? Os usuários não poderão mais usá-lo.',
      'Bulk Editor' => 'Editor em massa',
      'Support Applications' => 'Aplicativos Suportados',
      'This transaction group requires MFA to apply, but the Editor was not configured with a Request. This workflow can not perform an MFA check.' => 'Este grupo de transações exige que o MFA seja aplicado, mas o Editor não foi configurado com um Pedido. Este fluxo de trabalho não pode executar uma verificação de MFA.',
      'Via Content Source' => 'Via fonte de conteúdo',
      'Really remove this comment?' => 'Realmente remover este comentário?',
      'No MFA' => 'Nenhum MFA',
      'Export format ("%s") is not enabled.' => 'Formato de exportação ("%s") não está ativado.',
      'Disable Form' => 'Desativar formulário',
      'You must provide multi-factor credentials to comment or make changes, but you do not have multi-factor authentication configured on your account.' => 'Você deve fornecer credenciais de vários fatores para comentar ou fazer alterações, mas não possui a autenticação multifator configurada em sua conta.',
      'Mention' => 'Menção',
      'export' => 'exportar',
      'Call to setShouldRequireMFA() is too late: this Editor has already checked for MFA requirements.' => 'A chamada para setShouldRequireMFA() é muito tarde: este Editor já verificou os requisitos de MFA.',
      'You have not selected any objects to edit.' => 'Você não selecionou nenhum objeto para editar.',
      'Specify one or more queries to export with "--query".' => 'Especifique uma ou mais consultas para exportar com "--query".',
      'View Herald Transcript' => 'Visualizar transcrição herald',
      'Removing a comment prevents anyone (including you) from reading it. Removing a comment also hides the comment\'s edit history and prevents it from being edited.' => 'Remover um comentário impede que qualquer pessoa (inclusive você) o leia. Remover um comentário também oculta o histórico de edição do comentário e impede que ele seja editado.',
      'You will be required to provide multi-factor credentials to make changes.' => 'Você será solicitado a fornecer credenciais de vários fatores para fazer alterações.',
      'Subtype configuration is invalid: subtype with key "%s" specifies both child subtypes and child forms. Specify one or the other, but not both.' => 'A configuração do subtipo é inválida: o subtipo com a chave "%s" especifica os subtipos secundários e os formulários secundários. Especifique um ou outro, mas não ambos.',
      'You can not sign a transaction group that has no other effects.' => 'Você não pode assinar um grupo de transações que não tenha outros efeitos.',
      'Encryption Required' => 'Criptografia Requerida',
      '%s wrote:' => '%s escreveu:',
      'EMAIL PREFERENCES' => 'PREFERÊNCIAS DE EMAIL',
      'User Guide: Customizing Forms' => 'Guia do Usuário: personalização de formulários',
      'Duplicate Form' => 'Duplicar formulário',
      '%s added %d subscriber(s): %s.' => '%s adicionou %s inscrito(s): %s.',
      'Expected "newTimelineView()" to return an object of class "%s" (in engine "%s").' => 'Esperado "newTimelineView()" para retornar um objeto da classe "%s" (no mecanismo "%s").',
      'Raw Comment' => 'Comentário bruto',
      'Unknown export format ("%s"). Known formats are: %s.' => 'Formato de exportação desconhecido ("%s"). Formatos conhecidos são: %s.',
      'You have not chosen any edits to apply.' => 'Você não escolheu edições para aplicar.',
      'Comment History' => 'Histórico de comentários',
      'Comment Preview' => 'Pré-visualização de comentários',
      '%s edited subscriber(s) for %s, added %s: %s; removed %s: %s.' => '$ 1 inscrito(s) editado(s) por %2$s, adicionado %3$s: %4$s; removido %5$s: %6$s.',
      'Mentioned User' => 'Usuário mencionado',
      'EDIT DETAILS' => 'EDITAR DETALHES',
      'Remove Action: %s' => 'Remover ação: %s',
      '%s moved this task from %s to %s on the %s board.' => '%s moveu esta tarefa de %s para %s no quadro de %s.',
      '(Show Details)' => '(Mostrar detalhes)',
      'Two bulk edit groups have the same key ("%s"). Each bulk edit group must have a unique key.' => 'Dois grupos de edição em massa possuem a mesma chave ("%s"). Cada grupo de edição em massa deve ter uma chave exclusiva.',
      'Configure Form' => 'Configurar formulário',
      'Exported data to "%s".' => 'Dados exportados para "%s".',
      '%s edited subscriber(s), added %d: %s; removed %d: %s.' => '%s inscrito(s) editado(s), adicionado %s: %s; removido %s: %s.',
      '%s added %s subscriber(s) for %s: %s.' => '%s adicionou %s inscrito(s) por %s: %s.',
      '%s mentioned this in %s.' => '%s mencionou isso em %s.',
      'Edit Comment' => 'Editar comentário',
      'This transaction group requires MFA to apply, but the Editor was not configured with a Cancel URI. This workflow can not perform an MFA check.' => 'Esse grupo de transações exige que o MFA seja aplicado, mas o Editor não foi configurado com um URI de cancelamento. Este fluxo de trabalho não pode executar uma verificação de MFA.',
      'Add Action...' => 'Adicionar ação...',
      'Specified queries use different engines: query "%s" uses engine "%s", not "%s". All queries must run on the same engine.' => 'As consultas especificadas usam mecanismos diferentes: a consulta "%s" usa o mecanismo "%s", não "%s". Todas as consultas devem ser executadas no mesmo mecanismo.',
      '%s updated subscribers...' => '%s inscritos atualizados...',
      'Remove Comment' => 'Remover comentário',
      'Export data to a flat file (JSON, CSV, Excel, etc).' => 'Exportar dados para um arquivo simples (JSON, CSV, Excel, etc.).',
      'Mark as Create Form' => 'Marcar como criar formulário',
      'Change Form Subtype' => 'Alterar subtipo de formulário',
      '%s created this object with edit policy "%s".' => '%s criou este objeto com a política de edição "%s".',
      'Unable to load bulk job with ID "%s".' => 'Não é possível carregar o trabalho em massa com o ID "%s".',
      'Flag "--overwrite" has no effect when outputting to stdout.' => 'Sinalizador "--overwrite" não tem nenhum efeito na saída para stdout.',
      'Export the data selected by one or more queries.' => 'Exportar os dados selecionados por uma ou mais consultas.',
      'Bulk Edit' => 'Edição em massa',
      'You will be required to provide multi-factor credentials to comment or make changes.' => 'Você será solicitado a fornecer credenciais de vários fatores para comentar ou fazer alterações.',
      'Add Another Action' => 'Adicionar outra ação',
      '%s signed these changes with MFA.' => '%s assinou essas alterações com o MFA.',
      'SearchEngine class ("%s") does not support data export.' => 'A classe SearchEngine ("%s") não suporta exportação de dados.',
      'Multiple search engines match "%s": %s.' => 'Múltiplos mecanismos de pesquisa "%s": %s.',
      'Mark as "Create" Form' => 'Marcar como "criar" formulário',
      'Change Field Order' => 'Alterar ordem de campo',
      'This is a preview of the current form configuration.' => 'Esta é uma pré-visualização da configuração atual do formulário.',
      'All Forms' => 'Todos os formulários',
      'Query "%s" is unknown. To run a builtin query like "all" or "active", also specify the search engine with "--class".' => 'A consulta "%s" é desconhecida. Para executar uma consulta interna como "tudo" ou "ativo", especifique também o mecanismo de pesquisa com "--class".',
      'View Form Configurations' => 'Exibir configurações de formulário',
      'This comment was removed by %s.' => 'Este comentário foi removido por %s.',
      'Edit Form Configuration' => 'Editar configuração de formulário',
      'Query "%s" is not a recognized query for class "%s".' => 'A consulta "%s" não é uma consulta reconhecida para a classe "%s".',
      'Form Preview' => 'Pré-visualização de formulário',
      'If you start work now, this edit will be applied silently: it will not send mail or publish notifications.' => 'Se você começar a trabalhar agora, essa edição será aplicada silenciosamente: ela não enviará mensagens nem publicará notificações.',
      '%s changed the edit policy from "%s" to "%s".' => '%s alterou a política de edição de "%s" para "%s".',
      'The source object is mentioned in a comment on the destination object.' => 'O objeto de origem é mencionado em um comentário no objeto de destino.',
      'You can not shift this object into the selected space, because the space is archived. Objects can not be created inside (or moved into) archived spaces.' => 'Você não pode deslocar este objeto para o espaço selecionado, porque o espaço é arquivado. Objetos não podem ser criados dentro (ou movidos para) espaços arquivados.',
      'Object Monogram' => 'Monograma de Objetos',
    );
  }

}
