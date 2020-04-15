<?php

final class PhabricatorSubscriptionsPtBR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'pt_BR';
  }

  protected function getTranslations() {
    return array(
      'Mute' => 'Silenciar',
      'Subscriber' => 'Inscrever',
      'Unmute Notifications' => 'Ativar notificações',
      'subscribers' => 'inscrições',
      'Remove me as a subscriber' => 'Remover minha inscrição',
      'Remove subscribers.' => 'Remover inscrição',
      'Unmute this object? You will receive notifications and email again.' => 'Ativar este objeto? Você receberá notificações e e-mail novamente.',
      'Set subscribers, overwriting current value.' => 'Defina os inscritos sobrescrevendo o valor atual.',
      'Support for Subscriptions' => 'Suporte para inscrições',
      'Automatically Subscribed' => 'Inscrito automaticamente',
      '%d other(s)' => '%s outro(s)',
      'You are automatically subscribed to this object.' => 'Você está automaticamente inscrito nesse objeto.',
      'Add subscribers' => 'Adicionar inscritos',
      'Remove yourself as a subscriber.' => 'Cancelar sua inscrição',
      'Search for objects with certain subscribers.' => 'Procure por objetos com certos inscritos.',
      'Subscribers can take this action.' => 'Os inscritos podem realizar essa ação.',
      'Unmute' => 'Reativar',
      'Remove subscribers' => 'Remover inscritos',
      'All %d subscribers removed by %s' => 'Todos os inscritos de %s removidos por %s',
      'Added Subscribers' => 'Assinantes adicionados',
      'Mute this object? You will no longer receive notifications or email about it.' => 'Silenciar esse objeto? Você não receberá mais notificações ou enviará um e-mail sobre isso.',
      'Declined to resubscribe %s target(s) because they previously unsubscribed: %s.' => 'Recusou-se a inscrever novamente a(s) meta(s) de %s porque cancelou anteriormente a inscrição: %s.',
      'Removed %s subscriber(s): %s.' => 'Removido %s inscrito(s): %s.',
      'Unsubscribe' => 'Cancelar inscrição',
      'Bad Object' => 'Objeto inválido',
      'Add users or projects as subscribers.' => 'Adicionar usuários ou projetos como assinantes.',
      'Add subscribers: %s.' => 'Adicionar assinantes: %s.',
      'Removed Subscribers' => 'Inscritos removidos',
      'All %d subscribers added by %s' => 'Todos os %s inscritos adicionados por %s',
      'Add me as a subscriber' => 'Adicione-me como assinante',
      'Mute Notifications' => 'Silenciar notificações',
      '%s automatically subscribed target(s) were not affected: %s.' => 'A meta de %s automaticamente inscritos não foi afetada: %s.',
      'Set subscribers to' => 'Definir inscritos para',
      'Choose subscribers.' => 'Escolher inscritos.',
      '%s, %s, %s and %s' => '%s, %s, %s e %s',
      'Previously Unsubscribed' => 'Anteriormente anulado',
      'Remove subscribers: %s.' => 'Remover inscritos: %s.',
      'Change Subscribers' => 'Alterar inscrições',
      'This object is not subscribable.' => 'Este objeto não é assinável.',
      'Add one or more subscribers to the object. You can add users by providing their usernames, or add projects by adding their hashtags. For example, use `%s` to add the user `alincoln` and the project with hashtag `#ios` as subscribers.
    Subscribers which are invalid or unrecognized will be ignored. This command has no effect if you do not specify any subscribers.
    Users who are CC\'d on the email itself are also automatically subscribed if Phabricator knows which accounts are linked to their email addresses.' => 'Adicionar um ou mais inscrições ao objeto. Você pode adicionar usuários fornecendo seus nomes de usuário ou adicionar projetos adicionando suas hashtags. Por exemplo, use `%s` para adicionar o usuário `alincoln` e o projeto com a hashtag `#ios` como assinantes.
    Inscrições  inválidos ou não reconhecidos serão ignorados. Este comando não tem efeito se você não especificar nenhum assinante.
    Os usuários que são certificados pelo próprio e-mail também são automaticamente inscritos se o Phabricator souber quais contas estão vinculadas a seus endereços de e-mail.',
      'Add rule author as subscriber.' => 'Adicione o autor da regra como assinante.',
      'Added %s subscriber(s): %s.' => 'Adicionado %s inscritos(s): %s.',
      'Remove rule author as subscriber.' => 'Remover autor da regra como inscrito.',
      'Add subscribers.' => 'Adicionar assinantes',
      'Get information about subscribers.' => 'Obtenha informações sobre os inscritos.',
    );
  }

}
