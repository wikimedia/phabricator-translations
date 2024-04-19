<?php

final class PhabricatorCelerityDga
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'dga';
  }

  protected function getTranslations() {
    return array(
      'Done generating sprites - updating map...' => 'Baare la gyɛneratiŋ sipiriti - mapoŋ apdeetiri...',
      'Do not invoke `%s` after updating sprites' => 'Ta daŋ `%s` ka foŋ wa apdeeti nyɛnseɛ baare',
      '`%s` not found in PATH.' => '`%s` ba nyɛ o a kyɛ PATH.',
      'Sprites will not be optimized! Install `%s`!' => 'Nyɛnseere koŋ soma! Furi `%s`!',
      'Rebuild CSS sprite sheets.' => 'Leɛmɛ CSS spiriti siti.',
      'Force regeneration even no sources have changed.' => 'Fere leɛmaale ane ka zipeɛre zaa ba leɛre.',
      'Optimizing...' => 'Ɔptimaaziŋ...',
    );
  }

}
