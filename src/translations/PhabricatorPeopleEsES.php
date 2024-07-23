<?php

final class PhabricatorPeopleEsES
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'es_ES';
  }

  protected function getTranslations() {
    return array(
      'You are creating a new **standard** user account.' => 'Estás creando una nueva cuenta de usuario **estándar**.',
      'Disable User?' => '¿Desactivar usuario?',
      'Manage User' => 'Gestionar usuario',
      'Make real names optional' => 'Hacer opcionales los nombres reales',
      'Delete User' => 'Eliminar usuario',
      'Email: Add Address' => 'Correo electrónico: añadir dirección',
      'You can not send welcome mail to this user because their account is disabled.' => 'No puedes enviar un correo electrónico de bienvenida a este usuario porque su cuenta está desactivada.',
      'User account "%s" is already approved. You can only approve accounts that are not yet approved.' => 'Cuenta de usuario "%s" ya ha sido aprobada. Solo puedes aprobar cuentas que todavía no han sido aprobadas.',
      'Stores the real name of the user, like "Abraham Lincoln".' => 'Almacena el nombre real del usuario, como «Fulano de Tal».',
      'You must be an administrator to create administrators.' => 'Debes tener permisos de administrador para crear nuevos administradores.',
      'Invite Users' => 'Invitar usuarios',
      'Revise Invites' => 'Revisar invitaciones',
      'Approves a user.' => 'Aprueba un usuario.',
      'Send Invitations' => 'Enviar invitaciones',
      'Confirm Approval' => 'Confirmar aprobación',
      'MediaWiki username.' => 'Nombre de usuario en MediaWiki.',
      'User has not been created yet!' => '¡El usuario todavía no se ha creado!',
      'Musician' => 'Músico',
      'Make real names required' => 'Hacer obligatorios los nombres reales',
      'Account Activity' => 'Actividad de la cuenta',
      'Relationships' => 'Relaciones',
      'Username and email must be unique.' => 'Tanto el nombre de usuario como la dirección de correo electrónico deben ser únicas.',
      '%s sent this user a test notification.' => '%s envió a este usuario una notificación de prueba.',
      'User has already been created!' => '¡Este usuario ya existe!',
      'Only administrators can disapprove users.' => 'Solo los administradores pueden bloquear usuarios.',
      'Not an Administrator' => 'No es administrador',
      '%s defrocked this user.' => '%s eliminó los permisos de administrador a este usuario.',
      'Show Only Bots' => 'Mostrar solo bots',
      '%s (%s) has created an account for you.' => '%s (%s) te creó una cuenta.',
      'Create Mailing List User' => 'Crear un usuario para una lista de correo',
      'Disable or enable the user.' => 'Desactivar o activar al usuario.',
      'The user\'s real name.' => 'El nombre real del usuario.',
      'Only admins can call this method.' => 'Solo los administradores pueden usar este método.',
      'Hide Mailing Lists' => 'Ocultar listas de correo',
      'User does not belong to any projects.' => 'El usuario no pertenece a ningún proyecto.',
      'Remove as Administrator?' => '¿Eliminar como administrador?',
      'Approved' => 'Aprobado',
      'Usernames' => 'Nombres de usuario',
      'Create New User' => 'Crear usuario nuevo',
      '%s empowered %s as an administrator.' => '%s otorgó permisos de administrador a %s.',
      'Bots' => 'Robots',
      'User Profiles' => 'Perfiles de usuario',
      'Mailing Lists' => 'Listas de correo',
      'Admin' => 'Administrador',
      'Rename User' => 'Cambiar nombre de usuario',
      'Hide Bots' => 'Ocultar robots',
      'User Details' => 'Detalles de usuario',
      'users' => 'usuarios',
      '%s disabled this user.' => '%s desactivó a este usuario.',
      'Disable User' => 'Desactivar usuario',
      'Remove %s as an administrator? They will no longer be able to perform administrative functions on this server.' => '¿Quieres eliminar los permisos de administrador a %s? No podrá en lo sucesivo realizar acciones administrativas en esta instalación de Phabricator.',
      'Approved user account "%s".' => 'Cuenta de usuario "%s" aprobado.',
      'administrators' => 'administradores',
      '[%s] Email Verification' => '[Phabricator] Confirmación de la dirección de correo electrónico',
      'Projects (%s)' => 'Proyectos (%s)',
      'Make Administrator' => 'Hacer administrador',
      'Make Administrator?' => '¿Hacer administrador?',
      '%s defrocked %s.' => '%s eliminó los permisos de administrador a %s.',
      'People' => 'Personas',
      '%s (%s) has changed your %s username.' => '%s (%s) cambió su nombre de usuario en Phabricator.',
    );
  }

}
