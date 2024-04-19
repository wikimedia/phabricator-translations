<?php

final class PhabricatorAlmanacEsES
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'es_ES';
  }

  protected function getTranslations() {
    return array(
      'Reset' => 'Restablecer',
      'Edit Network' => 'Edita red',
      'Edit Service' => 'Edita servicio',
      'Create Namespace' => 'Crear un espacio de nombre',
      'Network' => 'Red',
      'All Networks' => 'Todas las redes',
      'Delete Property' => 'Elimina propiedad',
      'Device status information.' => 'Información del estado del dispositivo.',
      'Almanac' => 'Almanaque',
      'Device Disabled' => 'Dispositivo inhabilitado',
      'Set the device.' => 'Configurar el dispositivo.',
      'All Interfaces' => 'Todas las interfaces',
      'Almanac Interface' => 'Interfaz de almanaque',
      'Create Interface' => 'Crea interfaz',
      'All Devices' => 'Todos los dispositivos',
      'Can Create Devices' => 'Puede crear dispositivos',
      'True if device is disabled.' => 'Cierto si el dispositivo está inhabilitado.',
      'Device status.' => 'Estado del dispositivo.',
      'Active Devices' => 'Dispositivos activos',
      'Networks' => 'Redes',
      'Service type.' => 'Tipo de servicio.',
    );
  }

}
