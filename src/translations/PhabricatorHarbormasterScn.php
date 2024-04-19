<?php

final class PhabricatorHarbormasterScn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'scn';
  }

  protected function getTranslations() {
    return array(
      'For example:' => 'P\'asempiu:',
      'Behavior: %s' => 'Cumpurtamentu: %s',
      'Not A Haiku' => 'Nun n\'haiku',
      'or' => 'o',
      'Webhook Token' => 'Token dû Webhook',
      'Show all logs.' => 'Ammustra tutti li riggistri.',
      'INVALID' => 'NUN VÀLIDU',
      'Sleep' => 'Dormi',
      'rXYZ, R123, D456, ...' => 'rXYZ, R123, D456, ...',
      'Origin' => 'Orìggini',
      'Manual' => 'Manuali',
      'Local Name' => 'Nomu lucali',
      'rXabcdef, PHID-DIFF-1234, ...' => 'rXabcdef, PHID-DIFF-1234, ...',
      'When' => 'Quannu',
      '<Invalid URI>' => '<URI nun vàlidu>',
      '%s empty logs are hidden.' => '%s riggistri vacanti sunnu ammucciati.',
      '%s: %s -> %s' => '%s: %s -> %s',
      'Aborted' => 'Interrumputu',
      'Lines' => 'Lìnii',
      'Option' => 'Opzioni',
      '(%d - %d)' => '(%s - %s)',
      'ERROR:' => 'ERRURI:',
    );
  }

}
