<?php

final class PhabricatorAphlictScn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'scn';
  }

  protected function getTranslations() {
    return array(
      'Send a notification to a user.' => 'Manna na nutìfica a n\'utenti.',
      'The notification server should not be run as root.' => 'Lu server di nutìfica nun devi èssiri eseguitu comu root.',
      'Two servers (at indexes "%s" and "%s") both bind to the same port ("%s"). Each server must bind to a unique port.' => 'Dui server (a l\'ìnnici "%s" e "%s") sunnu lijati â stissa porta ("%s"). Ogni server devi èssiri lijatu a n\'ùnica porta.',
      'Configuration file is not properly formatted JSON. %s' => 'Lu file du configurazzioni nun è nu JSON furmattatu beni. %s',
      'No `%s` or `%s` binary was found in %s. You must install Node.js to start the Aphlict server.' => 'Nuddu binariu `%s` o `%s` fu attruvatu supra %s. Devi nstallari Node.js p\'abbiari lu server Aphlict.',
      'Message to send.' => 'Missaggiu da mannari.',
      'Sent notification.' => 'Nutìfica mannata.',
    );
  }

}
