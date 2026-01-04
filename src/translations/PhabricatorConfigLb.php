<?php

final class PhabricatorConfigLb
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'lb';
  }

  protected function getTranslations() {
    return array(
      'Review and modify configuration settings.' => 'Iwwerpréift an ännert d\'Konfiguratiounsastellungen.',
      'Or:' => 'Oder:',
      '%s / %s' => '%s / %s',
      '(%s%s) %s' => '(%s%s) %s',
      'Not Enabled' => 'Net aktivéiert',
      'Constant' => 'Konstant',
      'No Messages' => 'Keng Messagen',
      'PHP version: %s' => 'PHP-Versioun: %s',
      '%s Not Found' => '%s net fonnt',
      'Simple Example' => 'Einfacht Beispill',
      'Advanced Settings' => 'Erweidert Astellungen',
      'User Interface' => 'Benotzeruewerfläch',
      'Option "%s" is dangerously long for a database prefix in MySQL/MariaDB. The current value is %d characters long. It should be less than %d to be safe for future changes.' => 'D\'Optioun „%s“ ass geféierlech laang fir en Datebankprefix a MySQL/MariaDB. Den aktuelle Wäert huet eng Längt vun %s Zeechen. Se sollt manner wéi %s si fir virun zukünftegen Ännerunge sécher ze sinn.',
    );
  }

}
