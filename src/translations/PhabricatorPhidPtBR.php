<?php

final class PhabricatorPhidPtBR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'pt_BR';
  }

  protected function getTranslations() {
    return array(
      'Retrieve information about an arbitrary PHID.' => 'Recuperar informações sobre um PHID arbitrário.',
      'Handles should use viewer handle pool cache.' => 'Os identificadores devem usar o cache do conjunto de identificadores do visualizador.',
      'Restricted %s' => 'Restrito %s',
    );
  }

}
