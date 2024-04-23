<?php

final class PhabricatorSearchUk
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'uk';
  }

  protected function getTranslations() {
    return array(
      'Format' => 'Формат',
      'Add to Dashboard' => 'Додати до панелі',
      'Query: %s' => 'Запит: %s',
      'No visible menu items can render content.' => 'Жодні видимі пункти меню не можуть відображати вміст.',
      'Add New Menu Item...' => 'Додати новий пункт меню…',
      'Open Documents' => 'Відкриті документи',
      'Menu Items' => 'Пункти меню',
      'Select a document type...' => 'Виберіть тип документу…',
      'Current Menu Items' => 'Поточні пункти меню',
      'No Content' => 'Без вмісту',
      'Document Status' => 'Стан документа',
      'This menu currently has no items.' => 'У цьому меню наразі немає елементів.',
      'Document Types' => 'Типи документа',
      'Link' => 'Посилання',
      'Created By Me' => 'Створено мною',
      'Use Results' => 'Результати використання',
      'Order By' => 'Сортувати за',
      'Export Data' => 'Експортувати дані',
    );
  }

}
