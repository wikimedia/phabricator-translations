<?php

final class PhabricatorCeleritySl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sl';
  }

  protected function getTranslations() {
    return array(
  'Literal %s is not allowed inside inline script.' => 'Literal %s ni dovoljen v vrstičnem skriptu.',
  'Rebuild syntax highlighting CSS.' => 'Znova sestavi CSS za označevanje skladnje.',
  'Dark Mode' => 'Temni način (eksperimentalno)',
);
  }

}
