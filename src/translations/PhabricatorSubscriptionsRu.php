<?php

final class PhabricatorSubscriptionsRu
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ru';
  }

  protected function getTranslations() {
    return array(
      'Mute' => 'Откл. уведомления',
      'Subscriber' => 'Подписчик',
      'Unmute Notifications' => 'Вкл. уведомления',
      'subscribers' => 'подписчики',
      'Remove me as a subscriber' => 'Удалить меня из подписчиков',
      'Remove subscribers.' => 'Удалить подписчиков.',
      'Unmute this object? You will receive notifications and email again.' => 'Включить уведомления? Вы снова будет извещены об изменениях.',
      'Set subscribers, overwriting current value.' => 'Введите подписчиков, тем самым убирая прежних.',
      'Support for Subscriptions' => 'Поддержка по подпискам',
      'Automatically Subscribed' => 'Автоматически подписаны',
      '%d other(s)' => 'остальные: %s',
      'You are automatically subscribed to this object.' => 'Вы были автоматически подписаны на это.',
      'Add subscribers' => 'Добавить подписчиков',
      'Remove yourself as a subscriber.' => 'Удалить себя из подписчиков.',
      'Search for objects with certain subscribers.' => 'Поиск объектов с определенными подписчиками.',
      'Subscribers can take this action.' => 'Подписчики могут принять это решение.',
      'Remove subscribers' => 'Удалить подписчиков',
      'All %d subscribers removed by %s' => 'Все %s подписчиков, удалённых %s',
      'Added Subscribers' => 'Добавленные подписчики',
      'Declined to resubscribe %s target(s) because they previously unsubscribed: %s.' => 'Отклонено для повторной отправки %s мишень(ы) потому что они ранее не подписались: %s.',
      'Removed %s subscriber(s): %s.' => 'Удалены %s подписчик(и): %s.',
      'Bad Object' => 'Неверный объект',
      'Add users or projects as subscribers.' => 'Добавьте пользователей или проекты в качестве подписчиков.',
      'Add subscribers: %s.' => 'Добавить подписчиков: %s.',
      'Removed Subscribers' => 'Удаленные подписчики',
      'All %d subscribers added by %s' => 'Все %s подписчиков, добавлено %s',
      'Add me as a subscriber' => 'Добавите меня как подписчик',
      '%s automatically subscribed target(s) were not affected: %s.' => '%s автоматически подписанная цель(и) не была затронута: %s.',
      'Choose subscribers.' => 'Выберите подписчиков.',
      '%s, %s, %s and %s' => '%s, %s, %s и %s',
      'Previously Unsubscribed' => 'Ранее не подписались',
      'Remove subscribers: %s.' => 'Удалить подписчиков: %s.',
      'Change Subscribers' => 'Изменить подписчиков',
      'This object is not subscribable.' => 'Этот объект не подлежит подписке.',
      'Add one or more subscribers to the object. You can add users by providing their usernames, or add projects by adding their hashtags. For example, use `%s` to add the user `alincoln` and the project with hashtag `#ios` as subscribers.
    Subscribers which are invalid or unrecognized will be ignored. This command has no effect if you do not specify any subscribers.
    Users who are CC\'d on the email itself are also automatically subscribed if Phabricator knows which accounts are linked to their email addresses.' => 'Добавьте к объекту одного или нескольких подписчиков. Вы можете добавлять пользователей, предоставляя свои имена пользователей или добавлять проекты, добавляя свои хэштеги. Например, используйте `%s`, чтобы добавить пользователя `alincoln` и проект с помощью хэштегов `#ios` в качестве подписчиков.
    Подписчики, которые являются недопустимыми или непризнанными, будут проигнорированы. Эта команда не действует, если вы не укажете каких-либо подписчиков.
    Пользователи, которые являются CC\'d на самом электронном письме, также автоматически подписываются, если Phabricator знает, какие учетные записи связаны с их адресами электронной почты.',
      'Add rule author as subscriber.' => 'Добавьте автора правила в качестве подписчика.',
      'Added %s subscriber(s): %s.' => 'Добавлены %s подписчик(и): %s.',
      'Remove rule author as subscriber.' => 'Удалите автора правила из подписчиков.',
      'Add subscribers.' => 'Добавить подписчиков.',
      'Get information about subscribers.' => 'Получите информацию об подписчики.',
    );
  }

}
