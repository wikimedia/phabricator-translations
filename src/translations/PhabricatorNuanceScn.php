<?php

final class PhabricatorNuanceScn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'scn';
  }

  protected function getTranslations() {
    return array(
      'Work' => 'Travagghiu',
      'GitHub Actor' => 'Atturi GitHub',
      'User %s' => 'Utenti %s',
      'Tag %s' => 'Etichetta %s',
      'GitHub Event URI' => 'URI d\'eventu GitHub',
      'GitHub %s %s (%s)' => 'GitHub %s %s (%s)',
    );
  }

}
