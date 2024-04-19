<?php

final class PhabricatorSettingsMy
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'my';
  }

  protected function getTranslations() {
    return array(
      'Default (%s)' => 'နဂိုအတိုင်း (%s)',
      'Page Titles' => 'စာမျက်နှာ ခေါင်းစဉ်များ',
      'Email Notifications' => 'အီးမေးလ် အသိပေးချက်များ',
      'Saturday' => 'စနေ',
      'Adjust Timezone' => 'အချိန်ဇုန် ချိန်ညှိရန်',
      'Extra Settings' => 'အပိုအပြင်အဆင်များ',
      'All Messages' => 'မက်ဆေ့အားလုံး',
      '⚪ Ignore' => 'လျစ်လျူရှု',
      'Date Format' => 'ရက်စွဲပုံစံ',
      '◐ Notify' => 'အသိပေးရန်',
      'Translation' => 'ဘာသာပြန်ခြင်း',
      'Sunday' => 'တနင်္ဂနွေ',
      'Friday' => 'သောကြာ',
    );
  }

}
