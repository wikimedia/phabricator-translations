<?php

final class PhabricatorTypeaheadFr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr';
  }

  protected function getTranslations() {
    return array(
      'Typeahead' => 'Saisie semi-automatique',
      'Reference: Advanced Functions' => 'Référence: fonctions avancées',
      'Image URI' => 'URI d\'image',
      'This source is not usable directly.' => 'Cette source n\'est pas utilisable directement.',
      'Sprite' => 'sprite',
      'Function Quick Reference' => 'Référence rapide des fonctions',
      'Auto' => 'Auto',
      'Tokenization of "%s"' => 'Signe de \'\'%s\'\'',
    );
  }

}
