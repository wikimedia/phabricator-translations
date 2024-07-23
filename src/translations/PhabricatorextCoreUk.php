<?php

final class PhabricatorextCoreUk
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'uk';
  }

  protected function getTranslations() {
    return array(
      'Standard Phabricator.' => 'Стандартний фабрикатор.',
      'MediaWiki' => 'MediaWiki',
      'Burnup Graph' => 'Графік вигоряння',
      'Enable expert mode to reveal additional "advanced" options in the Phabricator UI.' => 'Увімкніть експертний режим, щоб відкрити додаткові «розширені» параметри в інтерфейсі фабрикатора.',
      'Expert Mode.' => 'Режим експерта.',
      'MediaWiki User' => 'Користувач MediaWiki',
      'Open Tasks' => 'Відкрити завдання',
      'Global Accounts' => 'Глобальні облік. записи',
      'Expert Mode' => 'Режим експерта',
      'Link to Burnup Graph' => 'Посилання на Графік вигоряння',
    );
  }

}
