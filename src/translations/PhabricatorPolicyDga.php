<?php

final class PhabricatorPolicyDga
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'dga';
  }

  protected function getTranslations() {
    return array(
      'Interact Policy' => 'Toŋ ne a poolisi',
      'Controls who can interact with the object.' => 'Daane neɛ naŋ na baŋ toŋ ne a ɔbgyɛte ŋa.',
      'This object is public and can be viewed by anyone, even if they do not have an account on this server.' => 'A ɔbyɛte ŋa e yieŋ bone ane neɛzaa na baŋ nyɛ o la, ka bannaŋ gba ba taa die daga a sɛva ŋa poɔ.',
    );
  }

}
