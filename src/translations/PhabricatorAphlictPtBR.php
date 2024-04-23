<?php

final class PhabricatorAphlictPtBR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'pt_BR';
  }

  protected function getTranslations() {
    return array(
      'Send a notification to a user.' => 'Enviar uma notificação para um usuário.',
      'User to notify.' => 'Usuário para notificar.',
      'Specify a user to notify with "--user".' => 'Especifique um usuário para notificar com "--user".',
      'Message to send.' => 'Mensagem para enviar.',
      'Specify a message to send with "--message".' => 'Especifique uma mensagem para enviar com "--message".',
      'Sent notification.' => 'Notificação enviada.',
    );
  }

}
