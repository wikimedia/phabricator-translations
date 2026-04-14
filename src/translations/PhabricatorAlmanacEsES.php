<?php

final class PhabricatorAlmanacEsES
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'es_ES';
  }

  protected function getTranslations() {
    return array(
  'Edit Namespace' => 'Editar espacio de nombres',
  'Reset' => 'Restablecer',
  'Edit Network' => 'Edita red',
  'Edit Service' => 'Edita servicio',
  'Create Namespace' => 'Crear un espacio de nombre',
  'Network' => 'Red',
  'All Networks' => 'Todas las redes',
  'Delete Property' => 'Elimina propiedad',
  'Device status information.' => 'Información del estado del dispositivo.',
  'This key is associated with device "%s".' => 'Esta clave está asociada con el dispositivo "%s".',
  'Almanac' => 'Almanaque',
  'Device Disabled' => 'Dispositivo inhabilitado',
  'Set the device.' => 'Configurar el dispositivo.',
  'All Interfaces' => 'Todas las interfaces',
  'Almanac Interface' => 'Interfaz de almanaque',
  'Create Interface' => 'Crea interfaz',
  'All Devices' => 'Todos los dispositivos',
  '%s changed the status of this device from %s to %s.' => '%s cambió el estado de este dispositivo de %s a %s.',
  'Can Create Devices' => 'Puede crear dispositivos',
  'True if device is disabled.' => 'Cierto si el dispositivo está inhabilitado.',
  'Device status.' => 'Estado del dispositivo.',
  'Active Devices' => 'Dispositivos activos',
  'Networks' => 'Redes',
  'Service type.' => 'Tipo de servicio.',
);
  }

}
