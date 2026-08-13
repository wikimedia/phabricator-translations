<?php

final class PhabricatorBaseSk
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sk';
  }

  protected function getTranslations() {
    return array(
  'No application \'%s\'!' => 'Aplikácia „%s“ neexistuje!',
  'This application is required, so all users must have access to it.' => 'Táto aplikácia je povinná, takže k nej musia mať prístup všetci používatelia.',
  'Can Configure Application' => 'Môže konfigurovať aplikáciu',
  'Can Use Application' => 'Môže používať aplikáciu',
  'Core Applications' => 'Základné aplikácie',
  'No application!' => 'Žiadna aplikácia!',
  '%s Application' => 'Aplikácia %s',
  'Request includes restricted parameter "%s", but this controller ("%s") does not whitelist it. Refusing to serve this request because it might be part of a redirection attack.' => 'Požiadavka obsahuje obmedzený parameter „%s“, ale tento kontrolér („%s“) ho nemá na zozname povolených. Požiadavka bola odmietnutá, pretože môže byť súčasťou útoku pomocou presmerovania.',
  'Unknown capability \'%s\'!' => 'Neznáma schopnosť „%s“!',
  'Unable to find transaction query for object of class "%s".' => 'Nepodarilo sa nájsť dopyt na transakcie pre objekt triedy „%s“.',
);
  }

}
