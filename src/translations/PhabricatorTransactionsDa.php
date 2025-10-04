<?php

final class PhabricatorTransactionsDa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'da';
  }

  protected function getTranslations() {
    return array(
      'Lock / Hide Fields' => 'Lås / Skjul felter',
      'Transactions have no effect:' => 'Transaktioner har ingen effekt:',
      '%s added a comment.' => '%s tilføjede en kommentar.',
      'Empty Comment' => 'Tom kommentar',
      'Warnings' => 'Advarsler',
      'Take Action' => 'Udfør handling',
      'Recipient Removed' => 'Modtage fjernet',
      'Primary Fields' => 'Primære felter',
      '🔒 Locked' => '🔒 Låst',
      'New Object' => 'Nyt objekt',
      '✘ Hidden' => '✘ Skjult',
      'Save Defaults' => 'Gem standarder',
      'HTTP Parameters' => 'HTTP-parametre',
      'Really remove this comment?' => 'Vil du virkelig fjerne denne kommentar?',
      'This object has been locked.' => 'Dette objekt er blevet låst.',
      'export' => 'eksporter',
      'Edit Defaults' => 'Rediger standarder',
      'Encryption Required' => 'Kryptering påkrævet',
      '%s wrote:' => '%s skrev:',
      'Make Editable' => 'Gør redigerbar',
      'Changed Subscribers' => 'Ændrede abonnenter',
      'Raw Comment' => 'Rå kommentar',
      '%s created this object.' => '%s oprettede dette objekt.',
      'Comment History' => 'Kommentarhistorik',
      'Mentioned User' => 'Nævnte bruger',
      'EDIT DETAILS' => 'REDIGER DETALJER',
      'HTTP Parameters: %s' => 'HTTP-parametre: %s',
      '(Show Details)' => '(Vis detaljer)',
      '%s mentioned this in %s.' => '%s nævnte dette i %s.',
      'Edit Comment' => 'Rediger kommentar',
      'Silent Edit' => 'Stille redigering',
      'Add Action...' => 'Tilføj handling...',
      'Remove Comment' => 'Fjern kommentar',
      'This comment has been deleted.' => 'Denne kommentar er blevet slettet.',
      'Add Another Action' => 'Tilføj en anden handling',
      '!%s (or %s)' => '!%s (eller %s)',
      'This object is locked. Edit it anyway?' => 'Dette objekt er låst. Rediger alligevel?',
      'This comment was removed by %s.' => 'Denne kommentar blev fjernet af %s.',
      'Object Locked' => 'Objektet er låst',
      'Will Copy' => 'Vil kopiere',
    );
  }

}
