<?php

final class PhabricatorSearchHu
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'hu';
  }

  protected function getTranslations() {
    return array(
      'Format' => 'Formázás',
      'Profile Menu' => 'Profil menü',
      'Full Name' => 'Teljes név',
      'No Content' => 'Nincs tartalom',
      'Edit Related Objects...' => 'Kapcsolódó objektumok szerkesztése…',
      'You can not create a relationship to object "%s" because objects can not be related to themselves.' => 'Nem létesíthetsz kapcsolatot a(z) „%s” objektummal, mert az objektumok nem kapcsolódhatnak önmagukhoz.',
    );
  }

}
