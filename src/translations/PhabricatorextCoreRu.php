<?php

final class PhabricatorextCoreRu
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ru';
  }

  protected function getTranslations() {
    return array(
      'Deny' => 'Отклонить',
      'Secret Token' => 'Секретное обозначение',
      '**Step 1 of 2**: Provide the name and URI for your MediaWiki install.
    In the next step, you will create an OAuth consumer in MediaWiki to be used by Phabricator OAuth.' => '**Шаг 1 из 2**: Укажите имя и URI для вашей установки MediaWiki.
    На следующем шаге вы создадите потребителя OAuth в MediaWiki, который будет использоваться Phabricator OAuth.',
      'Expert Mode.' => 'Режим эксперта.',
      'How this works' => 'Как это работает',
      'Expert Mode' => 'Режим эксперта',
    );
  }

}
