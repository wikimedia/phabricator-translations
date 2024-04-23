<?php

final class PhabricatorRepositoryScn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'scn';
  }

  protected function getTranslations() {
    return array(
      'Unknown VCS \'%s\'!' => 'VCS \'%s\' scanusciutu!',
      'TAGS' => 'ETICHETTI',
      'Result Name' => 'Nomu dû risurtatu',
      '%s ♻ %s' => '%s ♻ %s',
      '(%s) %s' => '(%s) %s',
      '<%s: %s>' => '<%s: %s>',
      'EMAIL' => 'EMAIL',
      'Unknown VCS "%s"!' => 'VCS "%s" scanusciutu!',
      'tag' => 'etichetta',
      'USER' => 'UTENTI',
      'Mirror' => 'Specchiu',
      'Move' => 'Sposta',
      'SSH' => 'SSH',
      'DETAILS' => 'DITTAGGHÎ',
      'URI %d %s' => 'URI %s %s',
      'Dangerous' => 'Piriculusu',
      'tag:' => 'etichetta:',
      'HTTP' => 'HTTP',
      'HTTPS' => 'HTTPS',
      'Src' => 'Src',
    );
  }

}
