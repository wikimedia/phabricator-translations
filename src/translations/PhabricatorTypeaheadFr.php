<?php

final class PhabricatorTypeaheadFr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr';
  }

  protected function getTranslations() {
    return array(
      'Typeahead' => 'Saisie semi-automatique',
      'This datasource ("%s") can not evaluate the function "%s(...)".' => 'Cette source de données (« %s ») ne peut pas évaluer la fonction « %s(...) ».',
      'All arguments to "%s(...)" must be integers, found "%s" in position %d.' => 'Tous les arguments de « %s(...) » doivent être des entiers, trouvé « %s » en position %s.',
      'Configured datasource class "%s" must be a valid subclass of "%s".' => 'La classe de source de données configurée « %s » doit être une sous-classe valide de « %s » .',
      'Reference: Advanced Functions' => 'Référence: fonctions avancées',
      'Image URI' => 'URI d\'image',
      'This source is not usable directly.' => 'Cette source n\'est pas utilisable directement.',
      'Unable to parse function and arguments for token "%s".' => 'Impossible d\'analyser la fonction et les arguments pour le jeton « %s ».',
      'Sprite' => 'sprite',
      'Function Quick Reference' => 'Référence rapide des fonctions',
      'Constraints for input "%s".' => 'Contraintes pour l\'entrée « %s ».',
      'Auto' => 'Auto',
      'Tokenization of "%s"' => 'Signe de \'\'%s\'\'',
      'Browse Numbers' => 'Explorer Numbers',
    );
  }

}
