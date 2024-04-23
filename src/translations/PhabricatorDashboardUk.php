<?php

final class PhabricatorDashboardUk
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'uk';
  }

  protected function getTranslations() {
    return array(
      'Remove Panel' => 'Видалити панель',
      'Impossible!' => 'Неможливо!',
      'Dashboard Used By' => 'Панель управління використовується',
      'All Panels' => 'Усі Панелі',
      'Add Panel to Dashboard' => 'Додати панель на інформаційну панель',
      'Add Panel' => 'Додати панель',
      'Portals' => 'Портали',
      'All Portals' => 'Усі портали',
    );
  }

}
