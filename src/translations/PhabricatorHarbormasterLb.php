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
      'INVALID' => 'ONGÜLTEG',
      'HTTP Request' => 'HTTP Ufro',
      'Skipped' => 'Iwwersprongen',
      'Invalid Implementation ("%s")!' => 'Ongülteg Implementéierung („%s“)!',
      'Show More Below' => 'Méi hei drënner weisen',
      'Syntax Error' => 'Syntaxfeeler',
      'Lines' => 'Linnen',
      'Unexpected Error' => 'Onerwaarte Feeler',
      'Targets' => 'Ziler',
      'No details provided.' => 'Keng Detailer uginn.',
      'Option' => 'Optioun',
      'Result of the test.' => 'Resultat vum Test.',
      'ERROR:' => 'FEELER:',
      'All Targets' => 'all Ziler',
      'External Link' => 'Externe Link',
    );
  }

}
