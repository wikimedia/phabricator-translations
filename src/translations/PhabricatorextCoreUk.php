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
      'ElasticSearch' => 'ElasticSearch',
      'Enable this to use the experimental ElasticSearch fulltext backend.' => 'Увімкніть це, щоб використовувати експериментальний повнотекстовий сервер ElasticSearch.',
      'Enable expert mode to reveal additional "advanced" options in the Phabricator UI.' => 'Увімкніть експертний режим, щоб відкрити додаткові «розширені» параметри в інтерфейсі фабрикатора.',
      'Expert Mode.' => 'Режим експерта.',
      'MediaWiki User' => 'Користувач MediaWiki',
      'Open Tasks' => 'Відкрити завдання',
      'OAuth error: this account has been blocked in MediaWiki.' => 'Помилка OAuth: обліковий запис заблоковано на MediaWiki.',
      'Global Accounts' => 'Глобальні облік. записи',
      'Expert Mode' => 'Режим експерта',
      'Enable ElasticSearch' => 'Увімкнути ElasticSearch',
      'Link to Burnup Graph' => 'Посилання на Графік вигоряння',
    );
  }

}
