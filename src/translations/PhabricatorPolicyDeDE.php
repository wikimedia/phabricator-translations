<?php

final class PhabricatorPolicyDeDE
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'de_DE';
  }

  protected function getTranslations() {
    return array(
      'User Policies' => 'Benutzer Richtlinie',
      'Advanced' => 'Fortgeschitten',
      'Members of a particular project can take this action. (You can not see this object, so the name of this project is restricted.)' => 'Mitglieder eines bestimmten Projekts können diese Aktion durchführen. (Du kannst dieses Objekt nicht sehen, also ist der Name dieses Projekts beschränkt).',
    );
  }

}
