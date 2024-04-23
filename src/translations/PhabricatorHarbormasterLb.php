<?php

final class PhabricatorHarbormasterLb
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'lb';
  }

  protected function getTranslations() {
    return array(
      'For example:' => 'Zum Beispill:',
      'Behavior: %s' => 'Verhalen: %s',
      'HTTP Request' => 'HTTP Ufro',
      'Show More Below' => 'Méi hei drënner weisen',
      'Syntax Error' => 'Syntaxfeeler',
      'Lines' => 'Linnen',
      'Unexpected Error' => 'Onerwaarte Feeler',
      'Targets' => 'Ziler',
      'Option' => 'Optioun',
      'Result of the test.' => 'Resultat vum Test.',
      'ERROR:' => 'FEELER:',
      'All Targets' => 'all Ziler',
    );
  }

}
