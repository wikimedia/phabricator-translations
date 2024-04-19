<?php

final class PhabricatorCelerityLb
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'lb';
  }

  protected function getTranslations() {
    return array(
      'Use Standard Colors' => 'Standardfaarwe benotzen',
      'No resource source exists with name "%s"!' => 'Et gëtt keng Ressourcequell mam Numm "%s"!',
      'Use Larger Font Size' => 'Méi eng grouss Schrëftgréisst benotzen',
    );
  }

}
