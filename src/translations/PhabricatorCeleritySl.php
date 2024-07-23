<?php

final class PhabricatorCeleritySl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sl';
  }

  protected function getTranslations() {
    return array(
      'Dark Mode (Experimental)' => 'Temni način (eksperimentalno)',
      'Literal %s is not allowed inside inline script.' => 'Literal %s ni dovoljen v vrstičnem skriptu.',
      'Rebuild syntax highlighting CSS.' => 'Znova sestavi CSS za označevanje skladnje.',
    );
  }

}
