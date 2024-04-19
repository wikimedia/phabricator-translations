<?php

final class PhabricatorAlmanacIt
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'it';
  }

  protected function getTranslations() {
    return array(
      'Name of the service.' => 'Nome del servizio',
      'Namespace' => 'Namespace',
      'Add Property' => 'Aggiungi proprietà',
      'Name of the network.' => 'Nome del network.',
      'Manage public and private networks.' => 'Gestici network pubblici e privati.',
      'Network for the interface.' => 'Network per l\'interfaccia.',
      'Add Interface' => 'Aggiungi interfaccia',
      'Create Service' => 'Crea servizio',
      'Custom Service' => 'Servizio personalizzato',
      'Edit Namespace' => 'Modifica namespace',
      'Network %d' => 'Network %s',
      'Namespace Name' => 'Nome del namespace',
      'Address of the service.' => 'Indirizzo del servizio.',
      'Reset' => 'Reimposta',
      'Edit Network' => 'Modifica network',
      'Create Namespace' => 'Crea namespace',
      'Interface %d' => 'Interfaccia %s',
      'Namespace %d' => 'Namespace %s',
      'Almanac' => 'Almanacco',
      'IMPORTANT!' => 'IMPORTANTE!',
      'Namespaces' => 'Namespace',
      '%s:%s (%s on %s)' => '%s:%s (%s su %s)',
    );
  }

}
