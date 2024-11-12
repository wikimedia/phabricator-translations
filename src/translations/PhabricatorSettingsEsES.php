<?php

final class PhabricatorSettingsEsES
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'es_ES';
  }

  protected function getTranslations() {
    return array(
      'On Small Screens' => 'En pantallas pequeñas',
      'Edit global default settings for all users.' => 'Editar la configuración global predeterminada para todos los usuarios.',
      'Adjust Timezone' => 'Ajustar huso horario',
      'You haven\'t added any SSH Public Keys.' => 'No has añadido ninguna clave pública de SSH.',
      'Save Preference' => 'Guardar preferencia',
      'Email Format' => 'Formato de correo electrónico',
      'Edit Authentication Factor' => 'Editar factor de autenticación',
      'Edit Global Settings' => 'Editar configuración global',
      'Delete Authentication Factor' => 'Eliminar fase de autenticación',
      'Date Format' => 'Formato de fecha',
      'The conflict between your browser and profile timezone settings will be ignored.' => 'Se pasará por alto el conflicto entre tu navegador y la configuración de huso horario del perfil.',
      'Your account is linked with all available providers.' => 'Su cuenta está vinculada con todos los proveedores disponibles.',
      'Changes saved.' => 'Se guardaron los cambios.',
      'Choose which language you would like the UI to use.' => 'Seleccione el idioma que desea que use la interfaz de usuario.',
      'Really delete address \'%s\'?' => '¿De verdad quieres eliminar la dirección «%s»?',
      '◐ Notify' => '◐ Notificar',
      'Timezone Calibrated' => 'Se calibró el huso horario',
      'Use Unicode Glyphs: ⚙' => 'Utilizar caracteres de Unicode: ⚙',
      'Silly Translations' => 'Traducciones absurdas',
      'Email Preferences' => 'Preferencias de correo electrónico',
      'Disable Email Notifications' => 'Desactivar notificaciones por correo electrónico',
      'Translation' => 'Traducción',
      'Time Format' => 'Formato horario',
      'Some applications use unicode glyphs in page titles to provide a compact representation of the current application. You can substitute plain text instead if these glyphs do not display on your system.' => 'Phabricator utiliza caracteres de Unicode en los títulos de las páginas como una representación compacta de la aplicación actual. Si los caracteres no aparecen en tu sistema, puedes sustituirlos por texto sencillo.',
      'Friday' => 'Viernes',
      'Remove Factor' => 'Quitar fase',
      'Add Authentication Factor' => 'Añadir fase de autenticación',
      'Date and Time' => 'Fecha y hora',
      'Save Preferences' => 'Guardar preferencias',
      'Revoke All' => 'Revocar todo',
      'Linked Accounts and Authentication' => 'Cuentas enlazadas y autenticación',
      'This engine is used to edit settings.' => 'Este motor se utiliza para modificar la configuración.',
    );
  }

}
