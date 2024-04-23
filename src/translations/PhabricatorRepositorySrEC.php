<?php

final class PhabricatorRepositorySrEC
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sr_EC';
  }

  protected function getTranslations() {
    return array(
      'Result Name' => 'Име резултата',
      'Short Names' => 'Кратка имена',
      'Enormous' => 'Огромно',
      'Create Identity' => 'Направи идентитет',
      'Rewrite' => 'Поново напишите',
      'Append' => 'Додај',
      'Ref New' => 'Нова референца',
      'Blocked By' => 'Блокирао/ла',
      'SSH' => 'SSH',
      'Ref Name' => 'Име референце',
      'Ref Type' => 'Тип референце',
      'Rejected: Dangerous' => 'Одбијено: Опасно',
      'Dangerous' => 'Опасно',
      'Specify exactly one repository to unpublish.' => 'Наведите тачно једно складиште за опозивање објављивања.',
      'Ref Old' => 'Стара референца',
      'HTTP' => 'HTTP',
      'HTTPS' => 'HTTPS',
      'Authentication Required' => 'Потребна потврда идентитета',
    );
  }

}
