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
      'Notification server configuration is invalid: it does not specify any enabled servers with type "admin". Notifications require at least one active "admin" server.' => 'A configuração do servidor de notificação é inválida: ela não especifica nenhum servidor ativado com o tipo "admin". Notificações exigem pelo menos um servidor "admin" ativo.',
      'Setting Up Client' => 'Configurando o Cliente',
      'Notification server configuration is invalid: it does not specify any enabled servers with type "client". Notifications require at least one active "client" server.' => 'A configuração do servidor de notificação é inválida: ela não especifica nenhum servidor ativado com o tipo "cliente". Notificações exigem pelo menos um servidor "cliente" ativo.',
      'All unread notifications will be marked as read. You can not undo this action.' => 'Todas as notificações não lidas serão marcadas como lidas. Você não pode desfazer essa ação.',
      'Unread Notifications' => 'Notificações não lidas',
      'Unable to post message: this is not an admin server!' => 'Não foi possível postar a mensagem: este não é um servidor de administração!',
      'Disconnected' => 'Desconectado',
      '%s notification(s) about objects which no longer exist or which you can no longer see were discarded.' => '%s notificação(s) sobre objetos que não existem mais ou que você não pode mais ver foram descartados.',
      'Notification server configuration describes an invalid host ("%s", at index "%s") with an unrecognized type ("%s"). Valid types are "%s" or "%s".' => 'A configuração do servidor de notificação descreve um host inválido ("%s", no índice "%s") com um tipo não reconhecido ("%s"). Tipos válidos são "%s" ou "%s".',
      'Notification server configuration describes an invalid host ("%s", at index "%s") with an invalid protocol ("%s"). Valid protocols are "%s" or "%s".' => 'A configuração do servidor de notificação descreve um host inválido ("%s", no índice "%s") com um protocolo inválido ("%s"). Os protocolos válidos são "%s" ou "%s".',
      'No notifications to mark as read.' => 'Nenhuma notificação para marcar como lida.',
      'Notification Server Down' => 'Notificação de servidor offline',
      'Unable to test client on an admin server!' => 'Não é possível testar o cliente em um servidor de administrador!',
      'Notification server configuration describes an invalid host ("%s", at index "%s"). This is an "admin" service but it has a "path" property. This property is only valid for "client" services.' => 'A configuração do servidor de notificação descreve um host inválido ("%s", no índice "%s"). Este é um serviço "admin", mas tem uma propriedade "path". Esta propriedade é válida apenas para serviços "cliente".',
      'Real-Time Updates and Alerts' => 'Atualizações e alertas em tempo real',
      'You can\'t ignore your problems forever, you know.' => 'Você não pode ignorar seus problemas para sempre, você sabe.',
      'Unable to Connect to Notification Server' => 'Não é possível conectar-se ao servidor de notificação',
      'Phabricator is configured to use a notification server, but is unable to connect to it. You should resolve this issue or disable the notification server. It may be helpful to double check your configuration or restart the server using the command below.
    %s' => 'O Phabricator está configurado para usar um servidor de notificação, mas não consegue se conectar a ele. Você deve resolver esse problema ou desabilitar o servidor de notificação. Pode ser útil verificar novamente sua configuração ou reiniciar o servidor usando o comando abaixo.
    %s',
      'Notification server not enabled' => 'Servidor de notificação não ativado',
      'This is a test notification, sent at %s.' => 'Esta é uma notificação de teste enviada em %s.',
      '(To start the server, run this command.)
    %s' => '(Para iniciar o servidor, execute este comando.)
    %s',
      'You have no unread notifications.' => 'Você não tem notificações não lidas.',
      'Connecting...' => 'Conectando...',
      'Got HTTP 200, but expected HTTP 501 (WebSocket Upgrade)!' => 'Tem HTTP 200, mas espera HTTP 501 (Atualização WebSocket)!',
      'Notification server configuration is invalid: it describes the same host and port ("%s") multiple times. Each host and port combination should appear only once in the list.' => 'A configuração do servidor de notificação é inválida: descreve o mesmo host e porta ("%s") várias vezes. Cada combinação de host e porta deve aparecer apenas uma vez na lista.',
      'Mark All Read' => 'Marcar todas como lidas',
      'Show only unread notifications.' => 'Mostrar apenas notificações não lidas.',
      'Notification server configuration is not valid: each entry in the list must be a dictionary describing a service, but the value with index "%s" is not a dictionary.' => 'A configuração do servidor de notificação não é válida: cada entrada na lista deve ser um dicionário que descreva um serviço, mas o valor com o índice "%s" não é um dicionário.',
      'Notification server configuration has an invalid service specification (at index "%s"): %s.' => 'A configuração do servidor de notificação possui uma especificação de serviço inválida (no índice "%s"): %s.',
      'You have no notifications.' => 'Você não tem notificações.',
    );
  }

}
