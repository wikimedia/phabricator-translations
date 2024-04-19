<?php

final class PhabricatorSlowvoteLb
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'lb';
  }

  protected function getTranslations() {
    return array(
      'Close Poll' => 'Ëmfro zoumaachen',
      'Create a Poll' => 'Eng Ëmfro uleeën',
      'No such poll exists.' => 'Esou eng Ëmfro gëtt et net.',
      'Polls must have a question.' => 'Ëmfroe mussen eng Fro hunn.',
      '%s updated the description for this poll.' => '%s huet d\'Beschreiwung vun dëser Ëmfro aktualiséiert.',
      'Reopen' => 'Nees opmaachen',
      'Responses' => 'Äntwerten',
      'Create Poll' => 'Ëmfro uleeën',
      'No polls found.' => 'Keng Ëmfroe fonnt.',
      'Response %d' => 'Äntwert %s',
    );
  }

}
