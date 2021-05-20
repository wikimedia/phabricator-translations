<?php

final class PhabricatorMetaPtBR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'pt_BR';
  }

  protected function getTranslations() {
    return array(
      'Information' => 'Informação',
      'This application cannot be uninstalled, because it is required for Phabricator to work.' => 'Este aplicativo não pode ser desinstalado porque é necessário que o Phabricator funcione.',
      'Syntax' => 'Sintaxe',
      'You cannot install an installed application.' => 'Você não pode instalar um aplicativo instalado.',
      'Show First-Party Applications' => 'Mostrar aplicativos primários',
      'Create Application' => 'Criar aplicativo',
      'Unknown order "%s"!' => 'Ordem desconhecida "%s"!',
      'Really Uninstall Application?' => 'Desinstalar realmente o aplicativo?',
      'Prototypes Not Enabled' => 'Protótipos não habilitados',
      'Really uninstall the %s application?' => 'Desinstalar realmente o aplicativo de %s?',
      'Policy does not exist.' => 'Política não existe.',
      'Launcher' => 'Iniciador',
      'To manage prototypes, enable them by setting %s in your Phabricator configuration.' => 'Para gerenciar protótipos, ative-os definindo %s em sua configuração do Phabricator.',
      'This application is a prototype. %s' => 'Esse aplicativo é um protótipo. %s',
      'This is very unusual and will leave you without any content on the Phabricator home page. You should only do this if you are certain you know what you are doing.' => 'Isso é muito incomum e o deixará sem conteúdo na home page do Phabricator. Você só deve fazer isso se tiver certeza de que sabe o que está fazendo.',
      'Completely Break Phabricator' => 'Quebrar completamente o phabricator',
      '%s installed this application.' => '%s instalou este aplicativo.',
      'Confirmation' => 'Confirmação',
      'Explore More Applications' => 'Explorar mais aplicativos',
      'Uninstalled' => 'Desinstalado',
      'Show Uninstalled Applications' => 'Mostrar aplicativos desinstalados',
      'Launchable' => 'Executável',
      'Save Policies' => 'Salvar políticas',
      'Browse Applications' => 'Procurar aplicativos',
      'Prototype' => 'Protótipo',
      'Edit Policies: %s' => 'Editar políticas: %s',
      'Create New Application' => 'Criar novo aplicativo',
      'Extension' => 'Extensão',
      'Validation Failed' => 'Falha ao validar',
      'Show Installed Applications' => 'Mostrar aplicativos instalados',
      '%s uninstalled this application.' => '%s desinstalou este aplicativo.',
      'Capability "%s" is not editable for this application.' => 'A capacidade "%s" não é editável para este aplicativo.',
      'Configure' => 'Configurar',
      'Mail Commands Overview' => 'Visão geral dos comandos de correio',
      'Show Launchable Applications' => 'Mostrar aplicações iniciadas',
      'Show Released Applications' => 'Mostrar aplicativos liberados',
      'Show Non-Launchable Applications' => 'Mostrar Aplicativos não-iniciados',
      '%s uninstalled %s.' => '%s desinstalou %s.',
      'Can\'t set non-public policies to public.' => 'Não é possível definir políticas não públicas para público.',
      '%s installed %s.' => '%s instalou %s.',
      'Phabricator is not currently configured to accept inbound mail. You won\'t be able to interact with objects over email until inbound mail is set up.' => 'O Phabricator não está atualmente configurado para aceitar o correio de entrada. Você não poderá interagir com objetos por e-mail até que o e-mail de entrada esteja configurado.',
      'Configure Application Forms' => 'Configurar formulários de aplicativo',
      'Show Applications w/ App Email Support' => 'Mostrar aplicativos com suporte por e-mail do aplicativo',
      'Uninstall' => 'Desinstalar',
      'After configuring Phabricator to process inbound mail, you can interact with objects (like tasks and revisions) over email. For information on configuring Phabricator, see **[[ %s | Configuring Inbound Email ]]**.
    In most cases, you can reply to email you receive from Phabricator to leave comments. You can also use **mail commands** to take a greater range of actions (like claiming a task or requesting changes to a revision) without needing to log in to the web UI.
    Mail commands are keywords which start with an exclamation point, like `!claim`. Some commands may take parameters, like `!assign alincoln`.
    To use mail commands, write one command per line at the beginning or end of your mail message. For example, you could write this in a reply to task email to claim the task:
    ```
    !claim
    I\'ll take care of this.
    ```
    When Phabricator receives your mail, it will process any commands first, then post the remaining message body as a comment. You can execute multiple commands at once:
    ```
    !assign alincoln
    !close
    I just talked to @alincoln, and he showed me that he fixed this.
    ```
    ' => 'Depois de configurar o Phabricator para processar o correio de entrada, você pode interagir com objetos (como tarefas e revisões) por email. Para obter informações sobre como configurar o Phabricator, consulte **[[ %s | Configurando o email de entrada ]]**.
    Na maioria dos casos, você pode responder ao e-mail que receber do Phabricator para deixar comentários. Você também pode usar **comandos de correio** para executar um maior número de ações (como reivindicar uma tarefa ou solicitar alterações em uma revisão) sem precisar efetuar login na interface do usuário da web.
    Comandos de correio são palavras-chave que começam com um ponto de exclamação, como `!claim`. Alguns comandos podem ter parâmetros, como `!assign alincoln`.
    Para usar comandos de correio, escreva um comando por linha no início ou no final da sua mensagem de correio. Por exemplo, você poderia escrever isso em uma resposta ao email da tarefa para reivindicar a tarefa:
    ```
    !claim
    Eu vou cuidar disso.
    ```
    Quando o Phabricator recebe seu e-mail, ele processará qualquer comando primeiro e, em seguida, publicará o corpo da mensagem restante como um comentário. Você pode executar vários comandos de uma só vez:
    ```
    !assign alincoln
    !close
    Eu acabei de falar com @alincoln, e ele me mostrou que ele consertou isso.
    ```',
      'Can\'t set the policy to a policy you can\'t view!' => 'Não é possível definir a política para uma política que você não pode ver!',
      'Type an application name...' => 'Digite um nome de aplicativo...',
      'Install %s application?' => 'Instale o aplicativo de %s?',
      'Quick Reference' => 'Referência rápida',
      'Show Applications w/o App Email Support' => 'Mostrar aplicativos sem o suporte por e-mail do aplicativo',
      'Are you absolutely certain you want to uninstall the Home application?' => 'Tem certeza absoluta de que deseja desinstalar o aplicativo Home?',
      'Configure creation and editing forms in Applications.' => 'Configurar criação e edição de formulários em aplicativos.',
      'Show Prototype Applications' => 'Mostrar aplicativos de protótipo',
      'Edit Application: %s' => 'Editar aplicativo: %s',
      'Show Third-Party Applications' => 'Mostrar aplicativos de terceiros',
      'This table summarizes the available mail commands. For details on a specific command, see the command section below.' => 'Esta tabela resume os comandos de correio disponíveis. Para detalhes sobre um comando específico, veja a seção de comando abaixo.',
      'Show All Applications' => 'Mostrar todos os aplicativos',
      'Install' => 'Instalar',
    );
  }

}
