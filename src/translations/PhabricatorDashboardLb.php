<?php

final class PhabricatorDashboardLb
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'lb';
  }

  protected function getTranslations() {
    return array(
      'New Portal' => 'Neit Portal',
      'One Column: 100%%' => 'Eng Kolonn: 100%%',
      'Portal' => 'Portal',
      'All Portals' => 'All Portaler',
      'Portal names must not be longer than %s characters.' => 'Portalnimm däerfen net méi laang wéi %s Zeeche sinn.',
    );
  }

}
