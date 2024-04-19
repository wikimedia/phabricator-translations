<?php

final class PhabricatorSearchSrEC
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sr_EC';
  }

  protected function getTranslations() {
    return array(
      'No results.' => 'Нема резултата.',
      'This menu item is very important, and can not be disabled.' => 'Овај ставка менија је веома важна. Не може да се онемогући.',
      'Personal Menu Items' => 'Личне ставке менија',
      'The queries you have saved are private. Only you can view or edit them.' => 'Упит који сте сачували је приватан. Само ви можете да га видите или уредите.',
      'Readable' => 'Читљиво',
      'Search Engines' => 'Претраживачи',
      'Form "%s" is not a valid form which you have permission to see.' => 'Образац „%s” није важећи образац за којег имате дозволу да видите.',
      'N/A' => 'Недоступно',
      'You must choose a room.' => 'Морате да одаберете собу.',
      'Elasticsearch server returned invalid JSON!' => 'Сервер Elasticsearch је вратио неважећи JSON.',
      'Failed to load custom PHID "%s"!' => 'Неуспело учитавање прилагођеног PHID-а „%s”.',
      'You must choose a dashboard.' => 'Морате да одаберете контролну таблу.',
      'Query: %s' => 'Упит: %s',
      '—' => '—',
      'Personal Saved Queries' => 'Лични сачувани упити',
      'Ignored Common Word' => 'Занемарена честа реч',
      'You must choose a link name.' => 'Морате да одаберете име линка.',
      'Global Menu Items' => 'Глобалне ставке менија',
      'This query specifies an invalid parameter. Review the query parameters and correct errors.' => 'Овај упит наводи неважећи параметар. Прегледајте параметре упита и исправите грешке.',
      'You must choose a label name.' => 'Морате да одаберете име ознаке.',
      'Queries' => 'Упити',
      'Already Default' => 'Већ подразумевано',
      'No services need initialization.' => 'Ниједној услузи не треба покретање.',
      'The Spanish word for cat is "cato". The biggest cat is called "el cato".' => 'Шпанска реч за мачку је „cato”. Највећа мачка се зове „el cato”.',
      'Untitled "%s" Item' => 'Ненасловљена ставка „%s”',
      'Query key "%s" does not correspond to a valid query.' => 'Кључ упита „%s” не одговара важећем упиту.',
      '"2022-12-25" or "7 days ago"...' => '„25. децембар 2022.” или „пре 7 дана”...',
      'Choose a valid export format.' => 'Одаберите важећи формат извоза.',
      'Export Results' => 'Резултати извоза',
      'Exact Search' => 'Тачна претрага',
      '%s (Not Available)' => '%s (није доступно)',
    );
  }

}
