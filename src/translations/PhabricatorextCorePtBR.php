<?php

final class PhabricatorextCorePtBR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'pt_BR';
  }

  protected function getTranslations() {
    return array(
      'Escalate' => 'Escalar',
      'Next: %s' => 'Próximo: %s',
      'Standard Phabricator.' => 'Phabricator padrão.',
      'Auto-generated release schedule details.' => 'Detalhes da programação de lançamentos gerados automaticamente.',
      'Merged' => 'Fundida',
      '**Step 2 of 2**: Create a MediaWiki auth consumer for this Phabricator instance.
    NOTE: Propose a consumer with the form at this url: %s
    Provide the following settings on the consumer registration:
      - **Callback URL:** Set this to: `%s`
      - **Grants:** `Basic Rights` is all that is needed for authentication.
    After you register the consumer, a **Consumer Key** and **Consumer Secret** will be provided to you by MediaWiki. To complete configuration of phabricator, copy the provided keys into the corresponding fields above.
    NOTE: Before Phabricator can successfully authenticate to your MediaWiki, a wiki admin must approve the oauth consumer registration using the form which can be found at the following url: %s' => 'Passo 2 de 2: Crie um consumidor de autenticação MediaWiki para essa instância do Phabricator.
    NOTA: Proponha um consumidor com a forma nesse url: %s
    Providencie as seguintes configurações no registro do consumidor:
    -Revogar URL:Coloque em %s
    -Permissões:\'Direitos Básicos\' é só que precisa de autenticação.
    Depois de registrar o consumidor, uma "Chave de Consumidor" e um "Segredo de Consumidor" vão ser fornecidas para você pela MediaWiki. Para completar a configuração do Phabricator, copie as chaves fornecidas nos campos correspondentes acima.
    NOTA:Antes que o Phabricator possa autenticar com sucesso seu MediaWiki, um administrador wiki deve aprovar o registro do consumidor oauth usando a forma que pode ser encontrada no seguinte url: %s',
      'Gerrit Projects' => 'Projetos no Gerrit',
      'Unresolved code review comments: %d' => 'Comentários de revisão de código não resolvidos: %s',
      'Cannot Lock Task' => 'Não é Possível Trancar a Tarefa',
      'Deploy `%s` to %s Wikis.' => 'Implantar \'%s\' à Wikis %s',
      'Unknown objectType \'%s\'' => 'Objeto desconhecido digite \'%s\'',
      'You do not have permission to escalate tasks as security issues. This action can only be taken by authorized users.' => 'Você não tem permissão para escalar tarefas como problemas de segurança. Esta ação só pode ser realizada por usuários autorizados.',
      'Related Links' => 'Sites relacionados',
      'No deployments on fridays' => 'Sem implantações às sextas-feiras',
      'You must provide either a username or userPHID' => 'Você deve fornecer um nome de usuário ou usuárioPHID',
      'Unknown policies: %s' => 'Políticas desconhecidas: %s',
      'Protect as security issue' => 'Proteger como questão de segurança',
      'OAuth JWT iss didn\'t match expected server name' => 'OAuth JWT iss não é compativel com o nome de servidor esperado',
      'Secret Key' => 'Chave secreta',
      'OAuth JWT wasn\'t valid at this time' => 'OAuth JWT não foi válido neste momento',
      'OAuth provider returned an error response.' => 'O provedor OAuth retornou uma resposta de erro.',
      'Ensure Security Task Policies are Enforced' => 'Tenha certeza de que políticas de tarefa sejam aplicadas',
      'Release Details' => 'Detalhes de lançamento',
      'Allow' => 'Permitir',
      'LDAP User' => 'Usuário LDAP',
      'Invalid action \'%s\'!' => 'Ação inválida \'%s\'!',
      'MediaWiki' => 'MediaWiki',
      'MediaWiki Base URI' => 'URI de base do MediaWiki',
      'The requested project does not exist' => 'O projeto solicitado não existe',
      'Change type to "%s."' => 'Alterar tipo para "%s."',
      'Find public transactions by a particular user.' => 'Encontre transações públicas por um usuário específico.',
      'Deny' => 'Negar',
      'Consumer Key is required' => 'A chave do consumidor é necessária',
      'Invalid' => 'Inválido',
      'View Change in Gerrit' => 'Ver mudança no Gerrit',
      'You must disable the user before rolling back their activity' => 'Você deve desabilitar o usuário antes de voltar para a atividade',
      'Link to Open Tasks' => 'Link para tarefas abertas',
      'ElasticSearch' => 'PesquisaElástica',
      'Disable ElasticSearch' => 'Desativar ElasticSearch',
      'MediaWiki Instance Name' => 'Nome da instância do MediaWiki',
      'Limit the number of transaction rows to process. Default: 10000' => 'Limite o número de linhas de transação a serem processadas. Padrão: 10000',
      'objectType is required.' => 'tipo de objeto é requerido',
      'Unknown or missing ldap names: %s' => 'Nomes de Idap desconhecidos ou ausentes:%s',
      'Invalid rule class \'%s\'!' => 'Classe \'%s\' de regra inválida.',
      'You must provide either --user or --user-phid' => 'Você deve fornecer --user our --user-phid',
      'Sort by Last Update' => 'Classificar pela última atualização',
      '%s Line(s) removed' => 'Linha(s) %s removida(s)',
      'Consumer Secret is required' => 'A senha do consumidor é requerida',
      'OAuth JWT aud didn\'t match expected consumer key' => 'OAuth JWT aud não correspondeu à chave do consumidor esperada',
      'Related Changes in Gerrit:' => 'Mudanças relacionadas em Gerrit:',
      'Code Review Started' => 'Revisão de código iniciada',
      'Changed Type' => 'Tipo alterado',
      'Hide Instructions' => 'Esconder instruções',
      'Rules do not have any effect.' => 'Regras não possuem nenhum efeito.',
      'users subscribed to' => 'usuários inscritos ao',
      '**Step 1 of 2**: Provide the name and URI for your MediaWiki install.
    In the next step, you will create an auth consumer in MediaWiki to be used by Phabricator oauth.' => '**Etapa 1 de 2**: Forneça o nome e o URI para sua instalação do MediaWiki.
    Na próxima etapa, você criará um consumidor de autenticação no MediaWiki para ser usado pelo Phabricator oauth.',
      'Expert Mode.' => 'Modo especialista.',
      'The specified username / userPHID was not found' => 'O usuário especificado/userPHID não foi encontrado',
      'See https://wikitech.wikimedia.org/wiki/Deployments for full schedule.' => 'Veja https://wikitech.wikimedia.org/wiki/Deployments para programação completa.',
      'You cannot lock this task because it is already protected by a custom security policy.' => 'Você não pode trancar essa tarefa pois ela já está protegida por uma política de segurança customizada.',
      'Wikimedia Customizations' => 'Costumizações da Wikimedia',
      'Missing or malformed parameter.' => 'Parâmetro faltando ou malformado.',
      'Blocked on Code Review' => 'Bloqueado na revisão do código',
      'How this works' => 'Como isso funciona',
      'Create custom access control policy objects.' => 'Crie objetos de política de controle de acesso personalizados.',
      'Use [[%s|this form]] to create one.' => 'Use [[%s|esse formulário]] para criar um.',
      'MediaWiki User' => 'Usuário do MediaWiki',
      'Change type to' => 'Mudar tipo para',
      'Reset security settings' => 'Redefinir as configurações de segurança',
      'Open Tasks' => 'Tarefas abertas',
      'Unknown' => 'Desconhecido',
      'OAuth error: this account has been blocked in MediaWiki.' => 'Erro de OAuth: esta conta foi bloqueada no MediaWiki.',
      'Global Accounts' => 'Contas globais',
      'Previous: %s' => 'Anterior: %s',
      'Expand Instructions' => 'Expandir instruções',
      'You cannot roll back the activity of a privileged user.' => 'Você não pode reverter a atividade de um usuário privilegiado.',
      'Download zip' => 'Baixar zip',
      'The full URL to your MediaWiki install, up to but not including "index.php"' => 'O URL completo para a instalação do seu MediaWiki, até mas sem incluir "index.php"',
      'Download Archive' => 'Baixar arquivo',
      'This panel shows navigation links to other milestones in the same series.' => 'Este painel mostra links de navegação para outros marcos da mesma série.',
      'Expert Mode' => 'Modo especialista',
      'Unknown or missing mediawiki names: %s' => 'Nomes de mediawiki desconhecidos ou ausentes: %s',
      'After reverting transactions, delete the reverted transaction records.' => 'Depois de reverter transações, delete os registros de transação revertida.',
      'No Permission' => 'Sem permissão',
      'Series Navigation' => 'Navegação em série',
      'Enable ElasticSearch' => 'Ativar ElasticSearch',
      'Consumer Key' => 'Chave do consumidor',
      'Required' => 'Requerido',
      'Number of open tasks over time' => 'Número de tarefas abertas ao longo do tempo',
      'Abandoned' => 'Abandonado',
      '%s Line(s) added' => 'Linha(s) %s adicionada(s)',
      'If something is serious enough to warrant a rollback then you should bring it to the attention of deployers on the [[ https://www.mediawiki.org/wiki/MediaWiki_on_IRC | #wikimedia-operations IRC channel ]].' => 'Se algo é sério o suficiente para justificar uma reversão então você deve alertar os implantadores em[[ https://www.mediawiki.org/wiki/MediaWiki_on_IRC | #wikimedia-operations IRC channel ]].',
      'Comments' => 'Comentários',
      'Download tar.gz' => 'Baixar tar.gz',
      'Change type to "%s"' => 'Alterar tipo para "%s"',
    );
  }

}
