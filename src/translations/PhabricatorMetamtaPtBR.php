<?php

final class PhabricatorMetamtaPtBR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'pt_BR';
  }

  protected function getTranslations() {
    return array(
      'Forced Mail' => 'Correio forçado',
      'Message PHID' => 'Mensagem PHID',
      'This is an older message that predates recording delivery information, so none is available.' => 'Esta é uma mensagem mais antiga que antecede a gravação de informações de entrega, portanto, nenhuma está disponível.',
      'Type a username, project, mailing list, package, or function...' => 'Digite um nome de usuário, projeto, lista de discussão, pacote ou função...',
      'Unhandled Exception' => 'Exceção não tratada',
      'No routing rules applied when delivering this message to you.' => 'Nenhuma regra de roteamento aplicada ao entregar esta mensagem para você.',
      'Inbox' => 'Caixa de entrada',
      'Effective Rule' => 'Regra efetiva',
      'Content sent by electronic mail, also known as e-mail.' => 'Conteúdo enviado por correio eletrônico, também conhecido como e-mail.',
      'Headers' => 'Cabeçalhos',
      'Routing Rules' => 'Regras de roteamento',
      'Unable to send message with unknown message type "%s".' => 'Não é possível enviar uma mensagem com um tipo de mensagem desconhecido "%s".',
      'Your message does not contain any body text or attachments, so this server can not do anything useful with it. Make sure comment text appears at the top of your message: quoted replies, inline text, and signatures are discarded and ignored.' => 'Sua mensagem não contém texto ou anexos do corpo, portanto, o Phabricator não pode fazer nada de útil com ela. Verifique se o texto do comentário aparece na parte superior da sua mensagem: respostas citadas, texto embutido e assinaturas são descartadas e ignoradas.',
      'Specify one or more users to send a message to with "--to" and/or "--cc".' => 'Especifique um ou mais usuários para enviar uma mensagem para "--to" e/ou "--cc".',
      'Delivery' => 'Entrega',
      'Unhandled Exception: %s' => 'Exceção não tratada: %s',
      'HEADERS' => 'CABEÇALHOS',
      'Reasons' => 'Razões',
      'This recipient has disabled all email notifications (Settings > Email Preferences > Email Notifications).' => 'Este destinatário desativou todas as notificações por e-mail (Configurações> Preferências de e-mail> Notificações por e-mail).',
      'Type a user, project, package, or mailing list name...' => 'Digite um nome de usuário, projeto, pacote ou lista de discussão...',
      'No special rules affected this mail.' => 'Nenhuma regra especial afetou este e-mail.',
      'Related Object' => 'Objeto relacionado',
      'Delivered' => 'Entregue',
      'Delivery reasons are listed from weakest to strongest.' => 'As razões de entrega são listadas do mais fraco ao mais forte.',
      'Send and Receive Mail' => 'Enviar e receber e-mail',
      'Delivery of this mail is forced and ignores deliver preferences. Mail which uses forced delivery is usually related to account management or authentication. For example, password reset email ignores mail preferences.' => 'A entrega deste e-mail é forçada e ignora as preferências de entrega. O correio que usa entrega forçada geralmente está relacionado ao gerenciamento de contas ou autenticação. Por exemplo, o e-mail de redefinição de senha ignora as preferências de e-mail.',
      'Browse Subscribers' => 'Procurar inscritos',
    );
  }

}
