<?php

final class PhabricatorHelpRu
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ru';
  }

  protected function getTranslations() {
    return array(
      'Close any dialog, including this one.' => 'Закрыть любой диалог, включая этот.',
      'Unsupported Editor Protocol' => 'Неподдерживаемый протокол редактирования',
      'Change Settings' => 'Изменить настройки',
      'Your configured editor URI uses an unsupported protocol. Change your settings to use a supported protocol, or ask your administrator to add support for the chosen protocol by configuring: %s' => 'URI вашего настроенного редактора использует неподдерживаемый протокол. Измените свои настройки, чтобы использовать поддерживаемый протокол, или попросите администратора добавить поддержку выбранного протокола, конфигурируя: %s',
      '%s Help' => 'Справка по %s',
      'Keyboard Shortcuts' => 'Сочетания клавиш',
    );
  }

}
