<?php

final class PhabricatorTransactionsLb
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'lb';
  }

  protected function getTranslations() {
    return array(
  'Lock / Hide Fields' => 'Spären / Verstoppen vu Felder',
  'Parameter "%s" is not a list of transactions.' => 'De Parameter „%s“ ass keng Lëscht vun Transaktiounen.',
  'Empty Comment' => 'Eidel Bemierkung',
  'Warnings' => 'Warnungen',
  'Form Disabled' => 'Formulaire desaktivéiert',
  '🔒 Locked' => '🔒 Gespaart',
  'New Object' => 'Neien Objet',
  'Edit Configuration' => 'Konfiguratioun änneren',
  '✘ Hidden' => '✘ Verstoppt',
  '"%s" must be a string.' => '„%s“ muss eng Zeechekette sinn.',
  'Mark Form' => 'Formulaire markéieren',
  'Really remove this comment?' => 'Dës Bemierkung wierklech ewechhuelen?',
  '%s removed %s contributor(s) for %s: %s.' => array(
    
    array(
      'De Benotzer %s huet e Contributeur fir %3$s ewechgeholl: %4$s.',
      'De Benotzer %s huet Contributeuren fir %3$s ewechgeholl: %4$s.',
    ),
  ),
  'Group ID' => 'Gruppen-ID',
  'export' => 'exportéieren',
  'You have not selected any objects to edit.' => 'Dir hutt keng Objete selektionéiert fir z\'änneren.',
  '%s removed %s contributor(s): %s.' => array(
    
    array(
      'De Benotzer %s huet e Contributeur ewechgeholl: %3$s.',
      'De Benotzer %s huet Contributeuren ewechgeholl: %3$s.',
    ),
  ),
  'Transaction PHID' => 'Transaktiouns-PHID',
  '%s disabled this form.' => '%s huet dëse Formulaire desaktivéiert.',
  'No transactions found.' => 'Keng Transaktioune fonnt.',
  'Edit Form' => 'Formulaire änneren',
  '%s edited contributor(s) for %s, added %s: %s; removed %s: %s.' => 'De Benotzer %s huet Contributeure fir %s geännert, derbäigesat: %4$s; ewechgeholl: %6$s.',
  'Filter by transaction type' => 'No Transaktiounstyp filteren',
  'Remove Action: %s' => 'Aktioun ewechhuelen: %s',
  '(Show Details)' => '(Detailer weisen)',
  'You can not post an empty comment.' => 'Dir kënnt keng eidel Bemierkung ofspäicheren.',
  'Edit Comment' => 'Bemierkung änneren',
  '%s added %s contributor(s): %s.' => array(
    
    array(
      'De Benotzer %s huet e Contributeur derbäigesat: %3$s.',
      'De Benotzer %s huet Contributeuren derbäigesat: %3$s.',
    ),
  ),
  'User "%s" was not found' => 'De Benotzer „%s“ gouf net fonnt.',
  'Object "%s" was not found' => 'Den Objet „%s“ gouf net fonnt',
  'Add Another Action' => 'eng aner Aktioun derbäisetzen',
  'Forms must have a name.' => 'Formulaire mussen en Numm hunn.',
  'Subtype "%s" is not a valid subtype.' => 'Den Ënnertyp „%s“ ass kee gültegen Ënnertyp.',
  'This comment was removed by %s.' => 'D\'Bemierkung gouf vum %s ewechgeholl.',
  '%s edited contributor(s), added %s: %s; removed %s: %s.' => 'De Benotzer %s huet Contributeure geännert, derbäigesat: %3$s; ewechgeholl: %5$s.',
  '%s added %s contributor(s) for %s: %s.' => array(
    
    array(
      'De Benotzer %s huet e Contributeur fir %3$s derbäigesat: %4$s.',
      'De Benotzer %s huet Contributeuren fir %3$s derbäigesat: %4$s.',
    ),
  ),
);
  }

}
