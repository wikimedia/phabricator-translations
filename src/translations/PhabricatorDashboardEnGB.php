<?php

final class PhabricatorDashboardEnGB
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en_GB';
  }

  protected function getTranslations() {
    return array(
      'Customize Query' => 'Customise Query',
      'Dashboards organize panels, creating a cohesive page for analysis or action.' => 'Dashboards organise panels, creating a cohesive page for analysis or action.',
      'Add to Personal Favorites' => 'Add to Personal Favourites',
      'Add to Favorites' => 'Add to Favourites',
      'Add to Favorites Menu' => 'Add to Favourites Menu',
      'Add to Global Favorites' => 'Add to Global Favourites',
    );
  }

}
