<?php

final class PhabricatorBasePs
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ps';
  }

  protected function getTranslations() {
    return array(
  'No application \'%s\'!' => 'د \'%s\' هېڅ غوښتنليک نشته!',
  'This application is required, so all users must have access to it.' => 'دا غوښتنليک اړين دی؛ نو ټول کارنان بايد ورته لاسرسی ولري.',
  'Can Configure Application' => 'غوښتنليک برابرولی شي',
  'Can Use Application' => 'غوښتنليک کارولی شي',
  'Core Applications' => 'مهم غوښتنليک',
  'No application!' => 'هېڅ غوښتنليک نشته!',
  '%s Application' => '%s غوښتنليک',
  'Request includes restricted parameter "%s", but this controller ("%s") does not whitelist it. Refusing to serve this request because it might be part of a redirection attack.' => 'په غوښتنه کې محدوده پاراميتر "%s" شته، خو دا واگگر ("%s") په سپينلړ کې نشي ورگډولی. دا غوښتنه نشي وړاندې کېدای ځکه شايد د بيا لارښوونې بريد برخه وي.',
  'Unknown capability \'%s\'!' => 'د \'%s\' ناڅرگنده وړتيا!',
  'Unable to find transaction query for object of class "%s".' => 'د " %s " ټولگي د څیز لپاره د راکړې‌ورکړې تپوس ونه موندل شو.',
);
  }

}
