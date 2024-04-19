<?php

final class PhabricatorAlmanacDeDE
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'de_DE';
  }

  protected function getTranslations() {
    return array(
      'Name of the service.' => 'Name des Dienstes.',
      'Add Property' => 'Eigenschaft hinzufügen',
      'Name of the network.' => 'Name des Netzwerks.',
      'You can not bind a nonexistent or restricted service.' => 'Du kannst einen nicht existierenden oder eingeschränkten Dienst nicht binden.',
      'Almanac Networks' => 'Almanac-Netzwerke',
      'Network %d' => 'Netzwerk %s',
      'You can not bind a service to an invalid or restricted interface.' => 'Du kannst einen Dienst nicht an eine ungültige oder eingeschränkte Schnittstelle binden.',
      'Read information about Almanac networks.' => 'Lies Informationen über Almanac-Netzwerke.',
      'Edit Network' => 'Netzwerk bearbeiten',
      'Interface %d' => 'Schnittstelle %s',
      'Network' => 'Netzwerk',
      'Create Network' => 'Netzwerk erstellen',
      'The name of the network.' => 'Der Name des Netzwerks.',
      'All Networks' => 'Alle Netzwerke',
      'You do not have permission to create Almanac networks.' => 'Du bist nicht berechtigt, Almanac-Netzwerke zu erstellen.',
      'You can not attach an interface to a nonexistent or restricted device.' => 'Du kannst eine Schnittstelle nicht mit einem nicht existierenden oder eingeschränkten Gerät verbinden.',
      'Almanac' => 'Almanac',
      'Almanac Namespaces' => 'Almanac-Namensräume',
      'You can not put an interface on a nonexistent or restricted network.' => 'Du kannst eine Schnittstelle nicht an ein nicht existierendes oder eingeschränktes Netzwerk anschließen.',
      'Device "%s" is unrecognized, restricted, or you do not have permission to edit it.' => 'Das Gerät "%s" wird nicht erkannt, ist eingeschränkt oder du hast nicht die Erlaubnis, es zu bearbeiten.',
    );
  }

}
