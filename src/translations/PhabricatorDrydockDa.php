<?php

final class PhabricatorDrydockDa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'da';
  }

  protected function getTranslations() {
    return array(
      'Resource' => 'Ressource',
      'Show Details' => 'Vis detaljer',
      'Lease %d' => 'Lease %s',
      'Release a lease.' => 'Frigiv en lease.',
      'Resource type.' => 'Ressourcetype.',
      'Type a resource name...' => 'Indtast et ressourcenavn...',
      'Hide Details' => 'Skjul detaljer',
      'Resource %d: %s' => 'Ressource %s: %s',
      'Resource %d' => 'Ressource %s',
      'Resource Type' => 'Ressourcetype',
      'Really release resource?' => 'Vil du virkelig frigive denne ressource?',
      'Update a resource.' => 'Opdater en ressource.',
      'Working' => 'Arbejder',
      '"%s" (owned by "%s")' => '"%s" (ejet af "%s")',
      'All Resources' => 'Alle ressourcer',
      'Commands' => 'Kommandoer',
      'Lease Released' => 'Lease frigjort',
      'Lease a resource.' => 'Lease en ressource.',
      'Release Resource' => 'Frigiv ressource',
      'Lease destroyed.' => 'Lease destrueret.',
      'Lease activated.' => 'Lease aktiveret.',
      'Lease Activated' => 'Lease aktiveret',
      'Specify a command to run.' => 'Angiv en kommando at køre.',
      'Release Lease?' => 'Frigiv lease?',
      'Release a resource.' => 'Frigiv en ressource.',
      'All Leases' => 'Alle leases',
      'Resource %s %s' => 'Ressource %s %s',
      'Already Complete' => 'Allerede fuldendt',
      'Updating resource "%s".' => 'Opdaterer ressourcen "%s".',
      '%s enabled %s.' => '%s aktiverede %s.',
      'Lease' => 'Lease',
      'Update a lease.' => 'Opdater en lease.',
      'Waiting for Activation' => 'Venter på aktivering',
      'Active Leases' => 'Aktive leases',
      'No Resource' => 'Ingen ressource',
      'Resource: %s' => 'Ressource: %s',
      'Resource "%s" does not exist.' => 'Ressourcen "%s" findes ikke.',
      'Waiting For Resource' => 'Venter på ressource',
      'Lease ID.' => 'Lease-ID.',
      'Active Resources' => 'Aktive ressourcer',
    );
  }

}
