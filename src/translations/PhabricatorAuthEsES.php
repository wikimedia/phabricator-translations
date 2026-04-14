<?php

final class PhabricatorAuthEsES
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'es_ES';
  }

  protected function getTranslations() {
    return array(
  'Disable Contact Number' => 'Deshabilitar número de contacto',
  'This key has been revoked. Choose or generate a new, unique key.' => 'Esta clave ha sido revocada. Elija o genere una clave nueva y única.',
  'Passwords' => 'Contraseñas',
  'Algorithm' => 'Algoritmo',
  'Revoke Tokens' => 'Revocar tokens',
  'Unlink "%s" Account?' => '¿Quieres desenlazar la cuenta «%s»?',
  'Setup Admin Account' => 'Configurar cuenta de administrador',
  'Must Verify Email' => 'Debes verificar el correo electrónico',
  'Verify Email' => 'Verifica email',
  'Really trust this PKCS8 keyfile?' => '¿De verdad quieres marcar este archivo de clave PKCS8 como de confianza?',
  'No public key was provided.' => 'No se proporcionó ninguna clave pública.',
  'Log In with LDAP' => 'Acceder con LDAP',
  'TOTP Code' => 'Código TOTP',
  'You can only recover the username for one account.' => 'Sólo puedes recuperar el nombre de usuario de una cuenta.',
  'Wrong Account' => 'Cuenta incorrecta',
  'Already Registered' => 'Ya registrado',
  'SECURITY WARNING' => 'ALERTA DE SEGURIDAD',
  'Enter LDAP Credentials' => 'Ingrese las credenciales de LDAP',
  'Anonymous Password' => 'Contraseña anónima',
  'Google' => 'Google',
  'Add Multi-Factor Auth' => 'Agregar autenticación multifactor',
  'Authentication Error' => 'Error de autenticación',
  'Multi-Factor Authentication is Misconfigured' => 'La autenticación en varias fases está mal configurada',
  'Username Change Instructions' => 'Instrucciones para cambiar el nombre de usuario',
  'Revoke Token?' => '¿Revocar token?',
  'MFA' => 'MFA',
  'Terminate all login sessions.' => 'Terminar todas las sesiones de inicio de sesión.',
  'No Account Linked' => 'No hay cuenta vinculada',
  'Public SSH Key' => 'Clave SSH pública',
  'Username and password are required!' => '¡Se requieren nombre de usuario y contraseña!',
  'Disqus' => 'Disqus',
  '%s updated the "%s" value.' => '%s actualizó el valor «%s».',
  'All Keys' => 'Todas las claves',
  'Terminate Sessions' => 'Terminar sesiones',
  'Upload Public Key' => 'Subir clave pública',
  'Log In (%s)' => 'Acceder (%s)',
  'Login Failure' => 'Fallo de inicio de sesión',
  'Account Already Linked' => 'Cuenta ya vinculada',
  'Your account has been disabled.' => 'Su cuenta ha sido desactivada.',
  'Twitter' => 'Twitter',
  'Revoke Public Key' => 'Revocar clave pública',
  'Server Name' => 'Nombre del servidor',
  'Next Step' => 'Próximo paso',
  'The email address %s is now verified.' => 'La dirección de correo electrónico %s ahora está verificada.',
  'Not Installed' => 'No instalado',
  'Really terminate session %s?' => '¿De verdad terminar sesión %s?',
  'Edit SSH Key' => 'Editar clave SSH',
  'Attempting to set an empty password!' => '¡Intentando establecer una contraseña vacía!',
  '%s changed this contact number from %s to %s.' => '%s cambió este número de contacto de %s a %s .',
  'No user exists with username "%s".' => 'Nadie utiliza el nombre de usuario «%s».',
  'Add Multi-Factor Authentication' => 'Añadir autenticación en varias fases',
  'ldap.example.com' => 'ldap.ejemplo.com',
  'Username or Email' => 'Nombre de usuario o correo electrónico',
  'Amazon' => 'Amazon',
  'Unlink Account' => 'Desenlazar cuenta',
  'This account is not linkable.' => 'Esta cuenta no se puede vincular.',
  'Allow Unlinking Accounts' => 'Permitir desenlazar cuentas',
  '"%s" Account' => 'Cuenta «%s»',
  'Password Reset' => 'Reinicializar contraseña',
  'Link Accounts' => 'Vincular cuentas',
  'Log Out?' => '¿Salir?',
  'Unlink External Account' => 'Desvincular cuenta externa',
  'Log in to %s' => 'Acceder a %s',
  'Facebook' => 'Facebook',
  'Really revoke all tokens? Among other temporary authorizations, this will disable any outstanding password reset or account recovery links.' => '¿Realmente quieres revocar todos los tokens? Entre otras autorizaciones temporales, esto deshabilitará cualquier enlace de restablecimiento de contraseña o recuperación de cuenta pendiente.',
  'LDAP Version' => 'Versión LDAP',
  'Factor Name: %s' => 'Nombre de fase: %s',
  'Providers' => 'Proveedores',
  'You can not make a disabled number your primary contact number.' => 'No puedes convertir un número deshabilitado en tu número de contacto principal.',
  'Account Disabled' => 'Cuenta desactivada',
  'SSH KEY DETAIL' => 'DETALLE DE LA CLAVE S.S.H.',
  'Link Account' => 'Cuenta vinculada',
  'Account Recovery' => 'Recuperación de cuenta',
  'Multi-Factor Authentication Setup Complete' => 'Se completó la configuración de la autenticación en varias fases',
  'Domain' => 'Dominio',
  'Email Sent' => 'Correo electrónico enviado',
  'Twitch.tv' => 'Twitch.tv',
  'SMS' => 'SMS',
  'Sent By' => 'Enviado por',
  'Forgot your password?' => '¿Has olvidado tu contraseña?',
  'Install Instructions' => 'Instrucciones de instalación',
  'Download Private Key' => 'Descargar clave privada',
  'Authentication Canceled' => 'Se canceló la autenticación',
  'Login Required' => 'Es necesario iniciar sesión',
  'Unable to find LDAP account!' => '¡No puedo encontrar la cuenta de LDAP!',
  'To configure Facebook OAuth, create a new Facebook Application here:

https://developers.facebook.com/apps

You should use these settings in your application:

%s


After creating your new application, copy the **App ID** and **App Secret** to the fields above.' => 'Para configurar Facebook OAuth, cree una nueva Aplicación de Facebook aquí:

https://developers.facebook.com/apps

Tendrá que utilizar estos ajustes en su aplicación:

%s


Después de crear su nueva aplicación, copie la **ID de Aplicación** y el **Secreto de Aplicación** a los campos arriba.',
  'You have already accepted this invitation.' => 'Ya has aceptado esta invitación.',
  'You must log in to take this action.' => 'Debes acceder a tu cuenta para realizar esta acción.',
  'Stay' => 'Permanecer',
  'Two authentication providers use the same provider key (\'%s\'). Each provider must be identified by a unique key.' => 'Dos proveedores de autenticación utilizan la misma clave de proveedor («%s»). Cada uno de los proveedores debe identificarse con una clave única.',
  'Create a New Account' => 'Crear una cuenta nueva',
  'JIRA' => 'JIRA',
  'Very Weak' => 'Muy débil',
  'Mobile Phone App (TOTP)' => 'Aplicación para teléfonos móviles (TOTP)',
  'Verify %s' => 'Verifica %s',
  '%s set the "%s" value to "%s".' => '%s estableció el valor de «%s» a «%s».',
  'Confirm External Account Link' => 'Confirmar enlace de cuenta externa',
  '[SSH Key]' => '[Clave SSH]',
  'Link %s Account' => 'Enlazar cuenta de %s',
  'SMS Code' => 'Código SMS',
  'ldaps://ldaps.example.com/' => 'ldaps://ldaps.ejemplo.com/',
  '%s created this provider.' => '%s creó este proveedor.',
  'Multi-Factor' => 'Varias fases',
  'Register Account' => 'Cuenta de registro',
  'You canceled authentication.' => 'Has cancelado la autenticación.',
  'Accepted By' => 'Aceptado por',
  'Auth Factor' => 'Fase de autenticación',
  'Confirm Link' => 'Confirmar enlace',
  'You can try again, or request a new link via email.' => 'Puedes intentarlo de nuevo o solicitar un enlace nuevo por correo electrónico.',
  '%s is required!' => '¡Se requiere %s!',
  'Create New Account' => 'Crear cuenta nueva',
  'Log In' => 'Acceder',
  'Register' => 'Registrarse',
  'LDAP' => 'LDAP',
  'Set Primary Contact Number' => 'Establecer número de contacto principal',
  'Engine: Session' => 'Motor: Sesión',
  'Wait for Approval' => 'Espera para aprobación',
  'LDAP Username' => 'Nombre de usuario LDAP',
  'Search Attributes' => 'Atributos de búsqueda',
  'Allow Auto Login' => 'Permitir inicio de sesión automático',
  '%s renamed this key from "%s" to "%s".' => '%s cambió el nombre de esta clave de «%s» a «%s».',
  'Allow Linking Accounts' => 'Permitir enlazar cuentas',
  'Always Search' => 'Buscar siempre',
  'Captcha' => 'Captcha',
  '%s Account' => 'Cuenta de %s',
  'LDAP Hostname' => 'Nombre de host LDAP',
  '%s changed the status of this provider from %s to %s.' => '%s cambió el estado de este proveedor de %s a %s.',
  'Consumer Key' => 'Clave de Consumidor',
  'SSH Keys' => 'Claves SSH',
  'LDAP Password: ' => 'Contraseña LDAP:',
  'Bad Invite Code' => 'Código de invitación incorrecto',
  'WordPress.com' => 'WordPress.com',
  'Default Message' => 'Mensaje predeterminado',
  'Customize Message' => 'Personalizar mensaje',
  'Email Address Already in Use' => 'Dirección de correo electrónico ya en uso',
  'Revoke Tokens?' => '¿Revocar tokens?',
);
  }

}
