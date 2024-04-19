<?php

final class PhabricatorDashboardSrEC
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sr_EC';
  }

  protected function getTranslations() {
    return array(
      'Edit Panel' => 'Измени панел',
      'Edit Panel: %s' => 'Измени панел: %s',
      'No dashboards found.' => 'Нема пронађених командних табли.',
      'Archive Panel' => 'Архивирај панел',
      'This dashboard will become active again.' => 'Ова управљачка табла ће поново постати активна.',
      'Dashboards' => 'Управљачке табле',
      'Browse Dashboards' => 'Претражи управљачке табле',
      '%s activated this dashboard.' => '%s је активирао ову управљачку таблу.',
      'Edit Dashboard: %s' => 'Уреди контролну таблу: %s',
      'Choose Dashboard Icon' => 'Изабери иконицу за управљачку таблу',
      'Edit Dashboard' => 'Уреди контролну таблу',
      'Archive Dashboard' => 'Архивирај управљачку таблу',
      'Sports' => 'Спорт',
      'Type a panel name...' => 'Унеси назив панела...',
      'Unknown Type' => 'Непозната врста',
      'Activate Panel?' => 'Активирај панел?',
      '(All Types)' => '(Све врсте)',
      'Remove Panel' => 'Уклони панел',
      '(Invalid Panel)' => '(Неисправан панел)',
      'All Panels' => 'Сви панели',
    );
  }

}
