<?php

final class PhabricatorNotificationPtBr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'pt_Br';
  }

  protected function getTranslations() {
    return array(
      'Unread' => 'Não lidas',
      'Unable to load server status: this is not an admin server!' => 'Não é possível carregar o status do servidor: este não é um servidor de administrador!',
      'All Notifications' => 'Todas as notificações',
      'Really mark all notifications as read?' => 'Realmente marcar todas as notificações como lidas?',
      'Setting Up Client' => 'Configurando o Cliente',
      'All unread notifications will be marked as read. You can not undo this action.' => 'Todas as notificações não lidas serão marcadas como lidas. Você não pode desfazer essa ação.',
      'Unread Notifications' => 'Notificações não lidas',
      'Unable to post message: this is not an admin server!' => 'Não foi possível postar a mensagem: este não é um servidor de administração!',
      'Disconnected' => 'Desconectado',
      'No notifications to mark as read.' => 'Nenhuma notificação para marcar como lida.',
      'Unable to test client on an admin server!' => 'Não é possível testar o cliente em um servidor de administrador!',
      'Real-Time Updates and Alerts' => 'Atualizações e alertas em tempo real',
      'You can\'t ignore your problems forever, you know.' => 'Você não pode ignorar seus problemas para sempre, você sabe.',
      'Unable to Connect to Notification Server' => 'Não é possível conectar-se ao servidor de notificação',
      'Phabricator is configured to use a notification server, but is unable to connect to it. You should resolve this issue or disable the notification server. It may be helpful to double check your configuration or restart the server using the command below.
    %s' => 'O Phabricator está configurado para usar um servidor de notificação, mas não consegue se conectar a ele. Você deve resolver esse problema ou desabilitar o servidor de notificação. Pode ser útil verificar novamente sua configuração ou reiniciar o servidor usando o comando abaixo.
    %s',
      'Test Notification' => 'Notificação de teste',
      'Notification server not enabled' => 'Servidor de notificação não ativado',
      'This is a test notification, sent at %s.' => 'Esta é uma notificação de teste enviada em %s.',
      '(To start the server, run this command.)
    %s' => '(Para iniciar o servidor, execute este comando.)
    %s',
      'You have no unread notifications.' => 'Você não tem notificações não lidas.',
      'Connecting...' => 'Conectando...',
      'Got HTTP 200, but expected HTTP 501 (WebSocket Upgrade)!' => 'Tem HTTP 200, mas espera HTTP 501 (Atualização WebSocket)!',
      'Mark All Read' => 'Marcar todas como lidas',
      'Show only unread notifications.' => 'Mostrar apenas notificações não lidas.',
      'You have no notifications.' => 'Você não tem notificações.',
    );
  }

}
