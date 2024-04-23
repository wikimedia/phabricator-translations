<?php

final class PhabricatorCalendarMy
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'my';
  }

  protected function getTranslations() {
    return array(
      'Movie' => 'ရုပ်ရှင်',
      'Weekly' => 'အပတ်စဉ်',
      'Meeting' => 'အစည်းအဝေး',
      'Upcoming Events' => 'ရောက်လာမည့် ဖြစ်ရပ်များ',
      'Travel' => 'ခရီးသွား',
      'Busy' => 'အလုပ်များ',
    );
  }

}
