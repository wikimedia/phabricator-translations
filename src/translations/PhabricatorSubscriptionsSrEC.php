<?php

final class PhabricatorSubscriptionsSrEC
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sr_EC';
  }

  protected function getTranslations() {
    return array(
  'Subscriber' => 'Претплатник',
  'subscribers' => 'пратиоци',
  'Remove me as a subscriber' => 'Уклони ме као пратиоца',
  'Remove subscribers.' => 'Уклони пратиоце.',
  'Set subscribers, overwriting current value.' => 'Промените пратиоце.',
  'Automatically Subscribed' => 'Аутоматски пратите',
  '%d other(s)' => '%d других',
  'You are automatically subscribed to this object.' => 'Аутоматски пратите промене овог објекта.',
  'Remove yourself as a subscriber.' => 'Уклони себе као пратиоца.',
  'Search for objects with certain subscribers.' => 'Претражите објекте са одређеним пратиоцима.',
  'Subscribers can take this action.' => 'Пратиоци могу предузети ову акцију.',
  'All %d subscribers removed by %s' => 'Свих %d пратиоца уклонио је %s',
  'Added Subscribers' => 'Додати пратиоци',
  'Removed %s subscriber(s): %s.' => 'Уклоњен пратиоц(и): %2$s.',
  'Unsubscribe' => 'Откажи праћење',
  'Bad Object' => 'Лош објекат',
  'Add users or projects as subscribers.' => 'Додај кориснике или пројекте као пратиоце.',
  'Removed Subscribers' => 'Пратиоци уклоњени',
  'All %d subscribers added by %s' => 'Свих %d пратиоца додати од стране %s',
  'Add me as a subscriber' => 'Додај ме као пратиоца',
  'Mute Notifications' => 'Пригуши обавештења',
  'Choose subscribers.' => 'Одабери пратиоце.',
  '%s, %s, %s and %s' => '%s, %s, %s и %s',
  'Previously Unsubscribed' => 'Претходно уклонили праћење',
  'Change Subscribers' => 'Промени пратиоце',
  'This object is not subscribable.' => 'Овај предмет нема могућност претплаћивања.',
  'Add rule author as subscriber.' => 'Додај творца правила као пратиоца.',
  'Added %s subscriber(s): %s.' => 'Додато %s пратиоца: %s.',
  'Remove rule author as subscriber.' => 'Уклони творца правила са списка пратиоца.',
  'Add subscribers.' => 'Додај пратиоце.',
  'Get information about subscribers.' => 'Информације о пратиоцима.',
);
  }

}
