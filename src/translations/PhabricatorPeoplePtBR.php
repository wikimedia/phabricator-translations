<?php

final class PhabricatorPeoplePtBR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'pt_BR';
  }

  protected function getTranslations() {
    return array(
      'Blurb' => 'Sobre mim',
      'Filter IP' => 'IP do filtro',
      'You are creating a new **standard** user account.' => 'Você está criando uma nova conta de usuário **padrão**.',
      'Pass true to find only administrators, or false to omit administrators.' => 'Passe verdadeiro para encontrar apenas administradores, ou falso para omitir administradores.',
      'Disable User?' => 'Desativar usuário?',
      'Multi-Factor: Remove Factor' => 'Fator Múltiplo: Remover fator',
      'Manage User' => 'Gerenciar usuário',
      'Confirm' => 'Confirme',
      'Approve Registration' => 'Aprovar registro',
      'Validity of \'%s\'.' => 'Validade de \'%s\'.',
      'Make real names optional' => 'Criar opcionalmente nomes reais',
      'Hisec: Exit' => 'Hisec: Saída',
      'Delete User' => 'Deletar usuário',
      'Email: Add Address' => 'Email: Adicionar endereço',
      'Email: Verify' => 'Email: Verificar',
      'You can not send welcome mail to this user because their account is disabled.' => 'Você não pode enviar uma mensagem de boas-vindas para esse usuário porque a conta dele está desativada.',
      'Stores the real name of the user, like "Abraham Lincoln".' => 'Armazena o nome real do usuário, como "Abraham Lincoln".',
      'You can not delete your own account.' => 'Você não pode excluir sua própria conta.',
      'You must be an administrator to create administrators.' => 'Você deve ser um administrador para criar administradores.',
      'Obsoleted by "%s".' => 'Obsoleto por "%s".',
      'User Accounts and Profiles' => 'Contas de usuário e perfis',
      'Login: Partial Login' => 'Login: Login Parcial',
      'User has not been awarded any badges.' => 'O usuário não recebeu nenhum selo.',
      'Invite Users' => 'Convidar usuários',
      'Revise Invites' => 'Revisar convites',
      'Sort of a social utility.' => 'Tipo de utilidade social.',
      '[Phabricator] Email Verification' => '[Phabricator] Verificação de Email',
      'Send Invitations' => 'Enviar convites',
      'Confirm Approval' => 'Confirme a aprovação',
      'User has not been created yet!' => 'O usuário ainda não foi criado!',
      'The user\'s username.' => 'O nome de usuário do usuário.',
      '%s empowered this user as an administrator.' => '%s autorizou esse usuário como administrador.',
      'Musician' => 'Músico',
      'Make real names required' => 'Criar nomes reais necessários',
      'Already Approved' => 'Já aprovado',
      'After you set up your account, you can log in to Phabricator in the future by going here:' => 'Depois de configurar sua conta, você pode entrar no Phabricator no futuro, indo até aqui:',
      'After you have set a password, you can log in to Phabricator in the future by going here:' => 'Depois de ter definido uma senha, você pode entrar no Phabricator no futuro, indo aqui:',
      'Force a default profile image to be replaced.' => 'Força a substituição uma imagem de perfil padrão.',
      'Account Activity' => 'Atividade da conta',
      'Relationships' => 'Relacionamentos',
      'Remove %s as an administrator? They will no longer be able to perform administrative functions on this Phabricator install.' => 'Remover %s como administrador? Eles não poderão mais executar funções administrativas na instalação do Phabricator.',
      'Username and email must be unique.' => 'O nome de usuário e o email devem ser exclusivos.',
      '%s sent this user a test notification.' => '%s enviou ao usuário uma notificação de teste.',
      'The email will identify you as the sender. You may optionally replace the [[ %s | default custom mail body ]] with different text by providing a message below.' => 'O email irá identificá-lo como o remetente. Você pode opcionalmente substituir o [[%s | corpo de correio personalizado padrão]] com texto diferente, fornecendo uma mensagem abaixo.',
      'User has already been created!' => 'Usuário já foi criado!',
      'Only administrators can disapprove users.' => 'Somente administradores podem reprovar usuários.',
      'Not an Administrator' => 'Não é um administrador',
      '%s defrocked this user.' => '%s desmembrou este usuário.',
      'Show Only Bots' => 'Mostrar apenas robôs',
      'Email is already primary!' => 'E-mail já é primário!',
      'Be careful when deleting users! This will permanently and irreversibly destroy this user account.' => 'Tenha cuidado ao excluir usuários! Isso destruirá permanentemente e irreversivelmente essa conta de usuário.',
      '%s (%s) has created an account for you.' => '%s (%s) criou uma conta para você.',
      'Disable or enable the user.' => 'Desative ou ative o usuário.',
      'User does not belong to any projects.' => 'O usuário não pertence a nenhum projeto.',
      'Joined Before' => 'Registrado Antes',
      'User Activity Logs' => 'Registros de atividade do usuário',
      'Bot' => 'Robô',
      'Search for activity affecting specific users.' => 'Pesquisar por atividade que afeta usuários específicos.',
      'Account Menu' => 'Menu da conta',
      'Remove as Administrator?' => 'Remover como administrador?',
      'Email User' => 'Email de usuário',
      'Engineering' => 'Engenharia',
      'Approved' => 'Aprovado',
      'Information on user profiles on this install is publicly visible.' => 'Informações sobre perfis de usuários nesta instalação são visíveis publicamente.',
      'Roles' => 'Funções',
      'User Picture' => 'Imagem do usuário',
      'Choose User Icon' => 'Escolha o ícone do usuário',
      '%s empowered %s as an administrator.' => '%s autorizou %s como administrador.',
      'Obsoleted by method "user.edit".' => 'Obsoleto pelo método "user.edit".',
      'This user has already been approved.' => 'Este usuário já foi aprovado.',
      'Awarded by %s' => 'Concedido por %s',
      'Admin' => 'Administrador',
      'Configure User Forms' => 'Configurar formulários do usuário',
      '  %s' => '  %s',
      'No open, assigned tasks.' => 'Nenhuma tarefa atribuída aberta.',
      'You can not send this user welcome mail because they are not a normal user and can not log in to the web interface. Special users (like bots and mailing lists) are unable to establish web sessions.' => 'Você não pode enviar este e-mail de boas-vindas ao usuário porque ele não é um usuário normal e não pode efetuar login na interface da web. Usuários especiais (como bots e listas de discussão) não conseguem estabelecer sessões na web.',
      '%s approved this user.' => '%s aprovou este usuário.',
      'Generate default profile images for all users.' => 'Gerar imagens de perfil padrão para todos os usuários.',
      'User Details' => 'Detalhes do usuário',
      'Approve User' => 'Aprovar usuário',
      '%s disabled this user.' => '%s desativou este usuário.',
      'Disable User' => 'Desativar usuário',
      'Availability' => 'Disponibilidade',
      'Usernames must contain only numbers, letters, period, underscore, and hyphen, and can not end with a period. They must have no more than %d characters.' => 'Os nomes de usuário devem conter apenas números, letras, ponto final, sublinhado e hífen e não podem terminar com um ponto final. Eles não devem ter mais do que %s caracteres.',
      'Get availability information for users.' => 'Obtenha informações de disponibilidade para usuários.',
      'Permanently Delete User' => 'Excluir permanentemente o usuário',
      'The email will contain a link that the user may use to log in to their account. This link bypasses authentication requirements and allows them to log in without credentials. Sending a copy of this email can be useful if the original was lost or never sent.' => 'O email conterá um link que o usuário pode usar para fazer login em sua conta. Esse link ignora os requisitos de autenticação e permite que eles efetuem login sem credenciais. Enviar uma cópia deste e-mail pode ser útil se o original foi perdido ou nunca foi enviado.',
      'Executive' => 'Executivo',
      'Logistics' => 'Logística',
      'Users can view their activity and activity that affects them.' => 'Os usuários podem ver suas atividades e atividades que os afetam.',
      'To log in to your account for the first time, follow this link:' => 'Para entrar na sua conta pela primeira vez, siga este link:',
      'Any Owner' => 'Qualquer proprietário',
      'The email will identify you as the sender. You may optionally include additional text in the mail body by specifying it below.' => 'O e-mail irá identificá-lo como o remetente. Você pode, opcionalmente, incluir texto adicional no corpo do e-mail, especificando-o abaixo.',
      'Edit User: %s' => 'Editar usuário: %s',
      '%s renamed this user from %s to %s.' => '%s renomeou este usuário de %s para %s.',
      'Approve the user.' => 'Aprovar o usuário.',
      'Recent Revisions' => 'Revisões recentes',
      'Edit Profile Picture' => 'Edite a foto de perfil',
      'Projects (%s)' => 'Projetos (%s)',
      'Save Profile' => 'Salvar perfil',
      'You do not have permission to disable or enable users.' => 'Você não tem permissão para desativar ou ativar usuários.',
      'No recent revisions.' => 'Nenhuma revisão recente.',
      'Edit Profile: %s' => 'Editar perfil: %s',
      'Make Administrator' => 'Tornar administrador',
      'Remove Administrator' => 'Remover administrador',
      'Permanently disable specified users (admin only).' => 'Desabilitar permanentemente usuários especificados (somente administrador).',
      'Make Administrator?' => 'Tornar administrador?',
      'You must be an administrator to rename users.' => 'Você deve ser um administrador para renomear usuários.',
      'Type a username...' => 'Digite um nome de usuário...',
      'Send Welcome Email' => 'Enviar Mensagem de boas-vindas',
      'Edit Settings' => 'Editar configurações',
      '%s defrocked %s.' => '%s perdeu %s.',
      'Select current viewer.' => 'Selecionar o visualizador atual.',
      'Change Username' => 'Mudar nome de usuário',
      'People' => 'Pessoas',
      'Disable the user.' => 'Desativar o usuário.',
      'Approve or reject the user.' => 'Aprovar ou rejeitar o usuário.',
      'User Availability' => 'Disponibilidade do usuário',
      'Can Disable Users' => 'Pode desabilitar usuários',
      'Research' => 'Pesquisa',
      '%s rejected this user.' => '%s rejeitou este usuário.',
      'You must be an administrator to approve users.' => 'Você deve ser um administrador para aprovar usuários.',
      'Spy' => 'Espião',
      'Edit Profile' => 'Editar perfil',
      'Browse Owners' => 'Navegue pelos proprietários',
      'User is Disabled' => 'O usuário está desativado',
      'Search for particular types of activity.' => 'Pesquise por tipos específicos de atividade.',
      'Configure creation and editing forms for users.' => 'Configure formulários de criação e edição para usuários.',
      '    Username: %s' => 'Nome de usuário: %s',
      'You can not enable or disable your own account.' => 'Você não pode ativar ou desativar sua própria conta.',
      'Update Preview' => 'Atualizar pré-visualização',
      'Apply transactions to edit a user. (Users can not be created via the API.)' => 'Aplicar transações para editar um usuário. (Usuários não podem ser criados através da API.)',
      'Unapproved' => 'Não aprovada',
      'You can not send welcome mail because you are not an administrator. Only administrators may send welcome mail.' => 'Você não pode enviar e-mails de boas-vindas porque você não é um administrador. Somente administradores podem enviar mensagens de boas vindas.',
      'User Since' => 'Usuário desde',
      '%s enabled this user.' => '%s ativou este usuário.',
    );
  }

}
