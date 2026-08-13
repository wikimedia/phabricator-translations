<?php

final class PhabricatorHeraldLb
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'lb';
  }

  protected function getTranslations() {
    return array(
  'Invalid Targets' => 'Ongülteg Ziler',
  '(Invalid List)' => '(Ongülteg Lëscht)',
  'Disabled Rules' => 'Desaktivéiert Reegelen',
  'Enable Rule' => 'Reegel aktivéieren',
  '<Unknown Action "%s">' => '<Onbekannt Aktioun „%s“>',
  'Invalid Action' => 'Ongülteg Aktioun',
  'Invalid Condition' => 'Ongülteg Bedingung',
  'Invalid URI' => 'Ongülteg URI',
  'true' => 'wouer',
  'Save Rule' => 'Reegel späicheren',
  'No Effect' => 'Keen Effekt',
  'Invalid Object' => 'Ongültegen Objet',
  'false' => 'falsch',
  'Unknown Action ("%s")' => 'Onbekannt Aktioun („%s“)',
  '%s (Disabled)' => '%s (Desaktivéiert)',
  'Second regular expression is invalid!' => 'Den zweete regulären Ausdrock ass ongülteg!',
  '%s target(s) are invalid or of the wrong type: %s.' => array(
    '%s Zil ass ongülteg oder hunn de falschen Typ: %s.',
    '%s Ziler sinn ongülteg oder hunn de falschen Typ: %s.',
  ),
  'Field: %s' => 'Feld: %s',
  'Recent Requests' => 'Rezent Ufroen',
  'Unknown Effect ("%s")' => 'Onbekannten Effekt („%s“)',
  'Active Rules' => 'Aktiv Reegelen',
  'HTTP Status Code' => 'HTTP-Status-Code',
  'First regular expression is invalid!' => 'Den éischte regulären Ausdrock ass ongülteg!',
);
  }

}
