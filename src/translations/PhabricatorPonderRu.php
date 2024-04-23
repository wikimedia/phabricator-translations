<?php

final class PhabricatorPonderRu
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ru';
  }

  protected function getTranslations() {
    return array(
      'A simple questions and answers application for your teams.' => 'Простое приложение вопросов и ответов для ваших команд.',
      'Ponder Answers' => 'Ответы',
      'Ask a Question' => 'Задать вопрос',
      'Open Questions' => 'Открытые вопросы',
      'Ponder Questions' => 'Вопросы',
      'Ponder Question' => 'Вопрос',
      'Ponder Answer' => 'Ответ',
      'All Questions' => 'Все вопросы',
      'Ponder' => 'Вопрос-ответ',
      'Recent Questions' => 'Недавние вопросы',
      'Answered' => 'Отвеченные',
      'Already Answered' => 'Уже есть ответ',
      'Resolved Questions' => 'Решённые вопросы',
    );
  }

}
