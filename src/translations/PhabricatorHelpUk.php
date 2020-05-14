<?php

final class PhabricatorHelpUk
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'uk';
  }

  protected function getTranslations() {
    return array(
      'Close any dialog, including this one.' => 'Закрити будь-який діалог, в тому числі й цей.',
      'Unsupported Editor Protocol' => 'Протокол редагування не підтримується',
      'Change Settings' => 'Змінити налаштування',
      'Your configured editor URI uses an unsupported protocol. Change your settings to use a supported protocol, or ask your administrator to add support for the chosen protocol by configuring: %s' => 'URI редактора налаштовано із протоколом, що не підтримується. Змініть свої налаштування вказавши правильний протокол, або зверніться до адміністратора, щоб була додана підтримка вибраного протоколу з допомогою конфігурації: %s',
      '%s Help' => 'Довідка з %s',
      'Keyboard Shortcuts' => 'Комбінації клавіш',
    );
  }

}
