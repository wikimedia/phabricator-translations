<?php

final class PhabricatorSettingsPtBr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'pt_Br';
  }

  protected function getTranslations() {
    return array(
      '12 Hour, 2:34 PM' => '12 horas, 2:34 PM',
      'When a revision is updated, Phabricator attempts to bring inline comments on the older version forward to the new changes. You can disable this behavior if you prefer comments stay anchored in one place.' => 'Quando uma revisão é atualizada, o Phabricator tenta trazer comentários in-line sobre a versão anterior para as novas alterações. Você pode desativar esse comportamento se preferir que os comentários permaneçam ancorados em um só lugar.',
      'Default (%s)' => 'Padrão (%s)',
      'You haven\'t added any contact numbers to your account.' => 'Você não adicionou números de contato à sua conta.',
      'Conpherence Column Visible' => 'Coluna de confeção visível',
      'This web browser does not support desktop notifications. Only application notifications will be sent for this browser regardless of this preference.' => 'Este navegador da Web não suporta notificações na área de trabalho. Somente notificações de aplicativos serão enviadas para este navegador, independentemente dessa preferência.',
      'Choose Factor Type' => 'Escolha o tipo de fator',
      'Page Titles' => 'Títulos de Página',
      'Personal Account Settings' => 'Configurações de conta pessoal',
      'ISO 8601: 2000-02-28' => 'ISO 8601: 2000-02-28',
      'Many text editors can be configured as URI handlers for special protocols like `editor://`. If you have such an editor, Phabricator can generate links that you can click to open files locally.
    These special variables are supported:
    | Value | Replaced With |
    |-------|---------------|
    | `%%f`  | Filename |
    | `%%l`  | Line Number |
    | `%%r`  | Repository Callsign |
    | `%%%%`  | Literal `%%` |
    For complete instructions on editor configuration, see **[[ %s | %s ]]**.' => 'Muitos editores de texto podem ser configurados como manipuladores de URI para protocolos especiais como `editor://`. Se você tiver esse editor, o Phabricator pode gerar links nos quais você pode clicar para abrir arquivos localmente.
    Essas variáveis especiais são suportadas:
    | Valor | Substituído por |
    |-------|---------------|
    | `%%f`  |Nome do arquivo |
    | `%%l`  | Número da linha |
    | `%%r`  | Indicativo de Repositório |
    | `%%%%`  | Literal `%%` |
    Para obter instruções completas sobre a configuração do editor, consulte **[[ %s | %s ]]**.',
      'Global Default Settings' => 'Configurações padrão globais',
      'Self Actions' => 'Auto ações',
      'Choose which language you would like the Phabricator UI to use.' => 'Escolha qual idioma você gostaria que a interface do Phabricator fosse usada.',
      'Email Notifications' => 'Notificações por email',
      'Show Unified Diffs' => 'Mostrar diferenças unificadas',
      'Diff Preferences' => 'Preferências de diferencia',
      'Saturday' => 'Sábado',
      'Change Primary Address' => 'Alterar endereço principal',
      'Send Stamps' => 'Enviar selos',
      'Show Older Inlines' => 'Mostrar linhas antigas',
      'Select the format you prefer for editing dates.' => 'Selecione o formato preferido para editar datas.',
      'On Small Screens' => 'Em telas pequenas',
      'A verification email has been sent. Click the link in the email to verify your address.' => 'Um email de verificação foi enviado. Clique no link no e-mail para confirmar seu endereço.',
      'Enable Email Notifications' => 'Ativar notificações por email',
      'Edit Multiple Files' => 'Editar vários arquivos',
      'Edit global default settings for all users.' => 'Editar configurações padrão globais para todos os usuários.',
      'No settings panels are available.' => 'Nenhum painel de configurações está disponível.',
      'Empty string is not a valid setting for "%s".' => 'Cadeia vazia não é uma configuração válida para "%s".',
      'Adjust Timezone' => 'Ajustar o fuso horário',
      'Show Filetree' => 'Mostrar árvore de arquivos',
      '%s updated her profile' => '%s atualizou o perfil dela',
      'Add Contact Number' => 'Adicionar número de contato',
      'Value "%s" is not valid for setting "%s": valid values are %s.' => 'O valor "%s" não é válido para definir "%s": os valores válidos são %s.',
      'You can opt to receive plain text email from Phabricator instead of HTML email. Plain text email works better with some clients.' => 'Você pode optar por receber um email em texto simples do Phabricator em vez de um email em HTML. E-mail de texto simples funciona melhor com alguns clientes.',
      'Extra Settings' => 'Configurações extra',
      'Are you sure you want to delete this address? You will no longer be able to use it to login.' => 'Tem certeza de que deseja excluir este endereço? Você não poderá mais usá-lo para entrar.',
      'You can customize the font used when showing monospaced text, including source code. You should enter a valid CSS font declaration like: `13px Consolas`' => 'Você pode personalizar a fonte usada ao exibir texto monoespaçado, incluindo o código-fonte. Você deve inserir uma declaração de fonte CSS válida, como: `13px Consolas`',
      'Enable Self Action Mail' => 'Ativar email de ação própria',
      'You haven\'t added any SSH Public Keys.' => 'Você não adicionou nenhuma chave pública SSH.',
      'All Messages' => 'Todas as mensagens',
      'This browser has been granted permission to send desktop notifications for this Phabricator instance.' => 'Este navegador recebeu permissão para enviar notificações da área de trabalho para essa instância do Phabricator.',
      'Save Preference' => 'Salvar preferência',
      'Email Format' => 'Formato de Email',
      'Your browser timezone and profile timezone are now in agreement (%s).' => 'O fuso horário e o fuso horário do seu perfil estão agora de acordo (%s).',
      'Edit Authentication Factor' => 'Editar fator de autenticação',
      'Changing your password will terminate any other outstanding login sessions.' => 'Alterar sua senha encerrará qualquer outra sessão de login pendente.',
      'You have no linked accounts.' => 'Você não tem contas vinculadas.',
      'Active Login Sessions' => 'Sessões de entradas ativas',
      'Edit Global Settings' => 'Editar configurações globais',
      'Ignore Conflict' => 'Ignorar conflito',
      'Vary Subjects' => 'Variados assuntos',
      'Delete Authentication Factor' => 'Excluir fator de autenticação',
      '%s updated their profile' => '%s atualizou seu perfil',
      'Current Setting' => 'Configuração atual',
      'Provider: %s' => 'Fornecedor: %s',
      'Use Variable-Width Font' => 'Use a fonte de largura variável',
      'Use Plain Text: [Differential]' => 'Use texto simples: [Diferencial]',
      '⚪ Ignore' => '⚪ Ignorar',
      'Date Format' => 'Formato de data',
      'Your browser timezone (%s) differs from your profile timezone (%s). You can ignore this conflict or adjust your profile setting to match your client.' => 'O fuso horário do seu navegador (%s) difere do fuso horário do seu perfil (%s). Você pode ignorar esse conflito ou ajustar sua configuração de perfil para corresponder ao seu cliente.',
      'This install does not have any active MFA providers configured. At least one provider must be configured and active before you can add new MFA factors.' => 'Esta instalação não possui nenhum provedor de MFA ativo configurado. Pelo menos um provedor deve estar configurado e ativo antes de adicionar novos fatores do MFA.',
      'Select the format you prefer for editing and displaying time.' => 'Selecione o formato que você preferir para editar e exibir a hora.',
      'The conflict between your browser and profile timezone settings will be ignored.' => 'O conflito entre as configurações do seu navegador e do fuso horário do perfil será ignorado.',
      'Terminate All Sessions' => 'Encerrar todas as sessões',
      'Your account is linked with all available providers.' => 'Sua conta está vinculada a todos os provedores disponíveis.',
      'Timezone Ignored Offset' => 'Deslocamento ignorado do fuso horário',
      'External Accounts' => 'Contas externas',
      'If you disable **Self Actions**, Phabricator will not notify you about actions you take.' => 'Se você desabilitar **Auto ações**, o Phabricator não notificará você sobre as ações executadas.',
      'Verification Email Sent' => 'E-mail de verificação enviado',
      'Add External Account' => 'Adicionar conta externa',
      'Mail Headers and Body' => 'Cabeçalhos de correio e corpo',
      'You haven\'t added any authentication factors to your account yet.' => 'Você ainda não adicionou fatores de autenticação à sua conta.',
      'To set a new password, request a password reset link from the login screen and then follow the instructions.' => 'Para definir uma nova senha, solicite um link de redefinição de senha na tela de login e siga as instruções.',
      'Multi-Factor Auth' => 'Autenticação de fator múltiplo',
      'You can choose to use either a monospaced or variable-width font in textareas in the UI. Textareas are used for editing descriptions and writing comments, among other things.' => 'Você pode optar por usar uma fonte monoespaçada ou de largura variável em áreas de texto na interface do usuário. Textareas são usadas para editar descrições e escrever comentários, entre outras coisas.',
      'Disable Self Action Mail' => 'Desativar o e-mail de ação própria',
      'Filetree Visible' => 'Filetree visível',
      'Grant Permission' => 'Conceder permissão',
      'Edit Settings Configurations' => 'Editar configurações',
      'Monospaced Textareas' => 'Textareas mono espaçadas',
      'Really remove the authentication factor %s from your account?' => 'Realmente remover o fator de autenticação %s da sua conta?',
      'Mail Headers' => 'Cabeçalhos de discussão',
      'Old Password' => 'Senha Anterior',
      'Conpherence Column Minimize' => 'Minimizar coluna de conforto',
      'Display Preferences' => 'Preferências de exibição',
      'Add Auth Factor' => 'Adicionar fator de autenticação',
      'You don\'t have any active sessions.' => 'Você não tem nenhuma sessão ativa.',
      'Changes saved.' => 'Alterações salvas.',
      'Authentication factors must have a name to identify them.' => 'Os fatores de autenticação devem ter um nome para identificá-los.',
      'Diffusion Blame' => 'Responsabilidade de comunicação',
      'The dialog asking for permission to send desktop notifications was closed without granting permission. Only application notifications will be sent.' => 'A caixa de diálogo solicitando permissão para enviar notificações da área de trabalho foi fechada sem conceder permissão. Apenas notificações de aplicativos serão enviadas.',
      'Really delete address \'%s\'?' => 'Excluir realmente o endereço \'%s\'?',
      'Another user already has this email.' => 'Outro usuário já tem este e-mail.',
      'Change primary email address?' => 'Alterar o endereço de email principal?',
      'Monospaced Font' => 'Fonte monoespaçada',
      'HTML Email' => 'E-mail em HTML',
      'Global Defaults' => 'Padrões globais',
      'Conpherence Sound' => 'Som de Conforto',
      'Enable "Re:" Prefix' => 'Ativar prefixo "Re:"',
      'Phabricator can send real-time notifications to your web browser or to your desktop. Select where you want to receive these real-time updates.' => 'O Phabricator pode enviar notificações em tempo real para o seu navegador da Web ou para a sua área de trabalho. Selecione onde você deseja receber essas atualizações em tempo real.',
      'Change Timezone' => 'Alterar fuso horário',
      'DarkConsole Visible' => 'Console escuro visível',
      'DarkConsole is a debugging console for developing and troubleshooting Phabricator applications. After enabling DarkConsole, press the {nav `} key on your keyboard to toggle it on or off.' => 'Console escuro é um console de depuração para o desenvolvimento e solução de problemas aplicações phabricator. Depois de ativar o DarkConsole, pressione a tecla {nav `} no seu teclado para ativá-lo ou desativá-lo.',
      'You are adding too many email addresses to your account too quickly.' => 'Você está adicionando muitos endereços de e-mail à sua conta com muita rapidez.',
      'You can adjust **Application Settings** here to customize when you are emailed and notified.
    | Setting | Effect
    | ------- | -------
    | Email | You will receive an email and a notification, but the notification will be marked "read".
    | Notify | You will receive an unread notification only.
    | Ignore | You will receive nothing.
    If an update makes several changes (like adding CCs to a task, closing it, and adding a comment) you will receive the strongest notification any of the changes is configured to deliver.
    These preferences **only** apply to objects you are connected to (for example, Revisions where you are a reviewer or tasks you are CC\'d on). To receive email alerts when other objects are created, configure [[ /herald/ | Herald Rules ]].' => 'Você pode ajustar aqui **Configurações do aplicativo** para personalizar quando você é enviado por e-mail e notificado.
    | Configuração | Efeito
    | ------- | -------
    | E-mail | Você receberá um e-mail e uma notificação, mas a notificação será marcada como "lida".
    | Notificar | Você receberá apenas uma notificação não lida.
    | Ignorar | Você não receberá nada.
    Se uma atualização fizer várias alterações (como adicionar CCs a uma tarefa, fechá-la e adicionar um comentário), você receberá a notificação mais forte de que qualquer uma das alterações está configurada para ser entregue.
    Estas preferências **apenas** aplicam-se a objetos aos quais você está conectado (por exemplo, Revisões em que você é um revisor ou tarefas em que você está usando o CC). Para receber alertas de email quando outros objetos são criados, configure [[ /herald/ | Regras Herald  ]].',
      'You must enter your current password.' => 'Você deve digitar sua senha atual.',
      'Europe: 28-02-2000' => 'Europa: 28-02-2000',
      'Enable Filetree' => 'Ativar Filetree',
      'The old password you entered is incorrect.' => 'A senha antiga que você digitou está incorreta.',
      '◐ Notify' => '◐ Notificar',
      'This browser has denied permission to send desktop notifications for this Phabricator instance. Consult your browser settings / documentation to figure out how to clear this setting, do so, and then re-visit this page to grant permission.' => 'Este navegador negou permissão para enviar notificações da área de trabalho para essa instância do Phabricator. Consulte as configurações/documentação do seu navegador para descobrir como limpar essa configuração, fazê-lo e, em seguida, visite novamente esta página para conceder permissão.',
      '%s updated his profile' => '%s atualizou seu perfil',
      'You can change your date and time preferences in Settings.' => 'Você pode alterar suas preferências de data e hora em Configurações.',
      'Some editors support opening multiple files with a single URI. You can specify the behavior of your editor here.' => 'Alguns editores suportam a abertura de vários arquivos com um único URI. Você pode especificar o comportamento do seu editor aqui.',
      'Timezone Calibrated' => 'O fuso horário foi calibrado',
      'Limited Translations' => 'Traduções limitadas',
      'Email Delivery' => 'Entrega de e-mail',
      'Send Test Notification' => 'Enviar notificação de teste',
      'Monospaced font value "%s" is unsafe. You may only enter letters, numbers, spaces, commas, periods, hyphens, forward slashes, and double quotes' => 'O valor da fonte monoespaçada "%s" não é seguro. Você só pode inserir letras, números, espaços, vírgulas, pontos, hifens, barras e aspas duplas.',
      'Edit settings for your personal account.' => 'Edite as configurações da sua conta pessoal.',
      'Create Settings' => 'Criar configurações',
      'Use Unicode Glyphs: ⚙' => 'Utilizar caracteres de Unicode: ⚙',
      'Editor Link' => 'Editor de Link',
      'Silly Translations' => 'Traduções absurdas',
      'Send Plain Text Email' => 'Enviar e-mail de texto simples',
      'DarkConsole' => 'Console escuro',
      'Filetree Width' => 'Largura do filtro',
      'Phabricator normally shows diffs in a side-by-side layout on large screens and automatically switches to a unified view on small screens (like mobile phones). If you prefer unified diffs even on large screens, you can select them for use on all displays.' => 'O Phabricator normalmente mostra diffs em um layout lado a lado em telas grandes e alterna automaticamente para uma visão unificada em telas pequenas (como telefones celulares). Se você preferir os diffs unificados, mesmo em telas grandes, poderá selecioná-los para uso em todos os displays.',
      'Supported, Separated by Spaces' => 'Suportado, Separado por espaços',
      'Search Scope' => 'Escopo de pesquisa',
      'Email Preferences' => 'Preferências de Email',
      'You don\'t have any active tokens.' => 'Você não tem nenhum token ativo.',
      'Send another copy of the verification email to %s?' => 'Enviar outra cópia do e-mail de confirmação para %s?',
      '24 Hour, 14:34' => '24 Horas, 14:34',
      'If you disable **Email Notifications**, Phabricator will never send email to notify you about events. This preference overrides all your other settings.
    //You will still receive some administrative email, like password reset email.//' => 'Se você desativar **Notificações por Email**, o Phabricator nunca enviará um email para notificá-lo sobre eventos. Essa preferência substitui todas as outras configurações.
    //Você ainda receberá alguns e-mails administrativos, como o e-mail de redefinição de senha.//',
      'Disable "Re:" Prefix' => 'Desativar prefixo "Re:"',
      'Conpherence Widget Pane Visible' => 'Painel de widget da conferência visível',
      'Disable Filetree' => 'Desativar Filetree',
      'Disable Email Notifications' => 'Desativar notificações por e-mail',
      'Phabricator uses unicode glyphs in page titles to provide a compact representation of the current application. You can substitute plain text instead if these glyphs do not display on your system.' => 'Phabricator usa caracteres Unicode nos títulos das páginas como uma representação compacta do aplicativo atual. Se os caracteres não aparecerem no sistema, você poderá substituí-los por texto simples.',
      'Expired' => 'Expirado',
      'No Notifications' => 'Nenhuma notificação',
      'Password Algorithms' => 'Algoritmos de senha',
      'This browser has not yet granted permission to send desktop notifications for this Phabricator instance.' => 'Este navegador ainda não concedeu permissão para enviar notificações da área de trabalho para esta instância do Phabricator',
      'Your password is currently hashed using an algorithm which is no longer available on this install.' => 'Sua senha está atualmente em hash usando um algoritmo que não está mais disponível nesta instalação.',
      'Send HTML Email' => 'Enviar email em HTML',
      'Translation' => 'Tradução',
      'UTC+%d' => 'UTC+%s',
      'Settings %d' => 'Configurações %s',
      'Time Format' => 'Formato da hora',
      'Permission for desktop notifications was denied. Only application notifications will be sent.' => 'A permissão para notificações na área de trabalho foi negada. Apenas notificações de aplicativos serão enviadas.',
      'Send Notifications' => 'Enviar notificações',
      'Number' => 'Número',
      'Permanently Linked' => 'Permanentemente ligado',
      'Account Setup Issues' => 'Problemas de configuração de conta',
      'Authentication Factors' => 'Fatores de autenticação',
      'Web and Desktop' => 'Web e Desktop',
      'Sunday' => 'Domingo',
      'US: 2/28/2000' => 'US: 2/28/2000',
      'User Guide: Configuring an External Editor' => 'Guia do usuário: configurando um editor externo',
      'You have no account setup issues.' => 'Você não tem problemas de configuração da conta.',
      'Personal Settings' => 'Configurações pessoais',
      'Web Only' => 'Apenas na Web',
      'Disable Vary Subjects' => 'Desativar vários assuntos',
      'Developer/Test Translations' => 'Desenvolvedor/Teste de Traduções',
      'User Preferences' => 'Preferências do usuário',
      'No Sounds' => 'Sem sons',
      'Create Global Defaults' => 'Criar padrões globais',
      'Enable Vary Subjects' => 'Ativar vários assuntos',
      'No MFA Providers' => 'Nenhum provedor de MFA',
      'There is no known application setting with key "%s".' => 'Não há configuração de aplicativo conhecida com chave "%s".',
      'Choose the default sound behavior for new Conpherence rooms.' => 'Escolha o comportamento de som padrão para novas salas de conferência.',
      'Policy Favorites' => 'Favoritos da política',
      'If you have difficulty reading the Phabricator UI, this setting may make Phabricator more accessible.' => 'Se você tiver dificuldade em ler a interface do Phabricator, essa configuração poderá tornar o Phabricator mais acessível.',
      'Conpherence Notifications' => 'Notificações de conferências',
      'Friday' => 'Sexta-feira',
      'Timezone "%s" is not a valid timezone identifier.' => 'O fuso horário "%s" não é um identificador de fuso horário válido.',
      'Select your local timezone.' => 'Selecione seu fuso horário local.',
      'Note: Removing an email address from your account will invalidate any outstanding password reset links.' => 'Nota: A remoção de um endereço de e-mail da sua conta invalidará todos os links de redefinição de senha pendentes.',
      'Click "Save Preference" to persist these changes.' => 'Clique em "Salvar preferência" para persistir essas alterações.',
      'Week Starts On' => 'Semana começa em',
      'Remove Factor' => 'Remover fator',
      'Editor link has an invalid or missing protocol. You must use a whitelisted editor protocol from this list: %s. To add protocols, update "%s" in Config.' => 'O link do editor tem um protocolo inválido ou ausente. Você deve usar um protocolo de editor na lista de permissões desta lista: %s. Para adicionar protocolos, atualize "%s" no Config.',
      'Your account does not currently have a password set. You can choose a password by performing a password reset.' => 'Sua conta não possui atualmente uma senha definida. Você pode escolher uma senha executando uma redefinição de senha.',
      'Disabled (an administrator has disabled login for this account provider).' => 'Desativado (um administrador desativou a entrada para esse provedor de conta).',
      'If you change your primary address, Phabricator will send all email to %s.' => 'Se você alterar seu endereço principal, o Phabricator enviará todos os emails para %s.',
      'Send Another Verification Email?' => 'Enviar outro e-mail de verificação?',
      'Because the algorithm implementation is missing, your password can not be used or updated.' => 'Como a implementação do algoritmo está ausente, sua senha não pode ser usada ou atualizada.',
      'Verify' => 'Verificar',
      'Edit Settings: %s' => 'Editar configurações: %s',
      'Add "Re:" Prefix' => 'Adicionar prefixo "Re:"',
      'Desktop Only' => 'Somente desktop',
      'Account Settings' => 'Configurações da conta',
      'Add Authentication Factor' => 'Adicionar fator de autenticação',
      'Choose which day a calendar week should begin on.' => 'Escolha em qual dia uma semana do calendário deve começar.',
      'Account Activity Logs' => 'Registros de atividade da conta',
      'Date and Time' => 'Data e hora',
      'Use Monospaced Font' => 'Use fonte monoespaçada',
      'The strength of your stored password hash can be upgraded. To upgrade, either: log out and log in using your password; or change your password.' => 'A força do seu hash de senha armazenada pode ser atualizada. Para atualizar: efetue logout e login usando sua senha; ou mude sua senha.',
      'Save Preferences' => 'Salvar preferências',
      '⚫ Email' => '⚫ Email',
      'New Setting' => 'Nova configuração',
      'Pronoun' => 'Pronome',
      'Choose the default notification behavior for Conpherence rooms.' => 'Escolha o comportamento de notificação padrão para salas de conferência.',
      'DarkConsole Tab' => 'Guia Console escuro',
      'Note: Changing your primary email address will invalidate any outstanding password reset links.' => 'Nota: Alterar seu endereço de e-mail principal invalida todos os links de redefinição de senha pendentes.',
      'Sessions and Logs' => 'Sessões e registros',
      'Your primary email address is unverified. You will not be able to receive email until you verify it.' => 'Seu endereço de e-mail principal não foi verificado. Você não poderá receber e-mails até que você os confirme.',
      'Pinned Applications' => 'Aplicativos fixos',
      'Revoke All' => 'Revogar tudo',
      'No settings panel group with key "%s" exists!' => 'Nenhum grupo de painéis de configurações com a chave "%s" existe!',
      'When viewing a revision or commit, you can enable a sidebar showing affected files. When this option is enabled, press {nav %s} to show or hide the sidebar.' => 'Ao visualizar uma revisão ou confirmação, você pode ativar uma barra lateral mostrando os arquivos afetados. Quando esta opção estiver ativada, pressione {nav %s} para mostrar ou ocultar a barra lateral.',
      'Linked Accounts and Authentication' => 'Contas vinculadas e autenticação',
      'UTC-%d' => 'UTC-%s',
      'Choose the pronoun you prefer.' => 'Escolha o pronome que você preferir.',
      'Conflict Ignored' => 'Conflito ignorado',
      'This engine is used to edit settings.' => 'Este mecanismo é usado para editar configurações.',
      'Default (Unknown, "%s")' => 'Padrão (desconhecido, "%s")',
      'Primary Email Unverified' => 'E-mail principal não confirmado',
      'HiSec' => 'HiSec',
    );
  }

}
