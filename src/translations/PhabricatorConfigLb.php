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
  '(No Value Configured)' => '(Kee Wäert konfiguréiert)',
  'Unknown Configuration Option "%s"' => 'Onbekannt Konfiguratiounsoptioun „%s“',
  'Current Configuration' => 'Aktuell Konfiguratioun',
  'Not Enabled' => 'Net aktivéiert',
  'Constant' => 'Konstant',
  'No Messages' => 'Keng Messagen',
  'Database Status' => 'Datebankstatus',
  '%s Day(s)' => array(
    '%s Dag',
    '%s Deeg',
  ),
  'PHP version: %s' => 'PHP-Versioun: %s',
  'Database Value' => 'Datebankwäert',
  '%s Not Found' => '%s net fonnt',
  'Value for option "%s" must be an integer.' => 'De Wäert fir d\'Optioun „%s“ muss eng ganz Zuel sinn.',
  'Automatic' => 'Automatesch',
  'Simple Example' => 'Einfacht Beispill',
  'Advanced Settings' => 'Erweidert Astellungen',
  '%s Active' => '%s Aktiv',
  'Database configuration.' => 'Datebankkonfiguratioun.',
  'User Interface' => 'Benotzeruewerfläch',
  'Delete a local configuration value.' => 'E lokale Konfiguratiounswäert läschen.',
  'Option "%s" is dangerously long for a database prefix in MySQL/MariaDB. The current value is %d characters long. It should be less than %d to be safe for future changes.' => 'D\'Optioun „%s“ ass geféierlech laang fir en Datebankprefix a MySQL/MariaDB. Den aktuelle Wäert huet eng Längt vun %d Zeechen. Se sollt manner wéi %d sinn, fir virun zukünftegen Ännerunge sécher ze sinn.',
);
  }

}
