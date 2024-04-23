<?php

final class PhabricatorAuthEsES
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'es_ES';
  }

  protected function getTranslations() {
    return array(
      'Passwords' => 'Contraseñas',
      'Algorithm' => 'Algoritmo',
      'Unlink "%s" Account?' => '¿Quieres desenlazar la cuenta «%s»?',
      'Verify Email' => 'Verifica email',
      'Really trust this PKCS8 keyfile?' => '¿De verdad quieres marcar este archivo de clave PKCS8 como de confianza?',
      'No public key was provided.' => 'No se proporcionó ninguna clave pública.',
      'Log In with LDAP' => 'Acceder con LDAP',
      'TOTP Code' => 'Código TOTP',
      'Wrong Account' => 'Cuenta incorrecta',
      'Already Registered' => 'Ya registrado',
      'SECURITY WARNING' => 'ALERTA DE SEGURIDAD',
      'Anonymous Password' => 'Contraseña anónima',
      'Google' => 'Google',
      'Authentication Error' => 'Error de autenticación',
      'Multi-Factor Authentication is Misconfigured' => 'La autenticación en varias fases está mal configurada',
      'Disqus' => 'Disqus',
      '%s updated the "%s" value.' => '%s actualizó el valor «%s».',
      'All Keys' => 'Todas las claves',
      'Log In (%s)' => 'Acceder (%s)',
      'Twitter' => 'Twitter',
      'Server Name' => 'Nombre de instancia de Phabricator',
      'Next Step' => 'Próximo paso',
      'Not Installed' => 'No instalado',
      'No user exists with username "%s".' => 'Nadie utiliza el nombre de usuario «%s».',
      'Add Multi-Factor Authentication' => 'Añadir autenticación en varias fases',
      'Username or Email' => 'Nombre de usuario o correo electrónico',
      'Amazon' => 'Amazon',
      'Unlink Account' => 'Desenlazar cuenta',
      'Allow Unlinking Accounts' => 'Permitir desenlazar cuentas',
      '"%s" Account' => 'Cuenta «%s»',
      'Password Reset' => 'Reinicializar contraseña',
      'Link Accounts' => 'Vincular cuentas',
      'Log Out?' => '¿Salir?',
      'Log in to %s' => 'Acceder a Phabricator',
      'Factor Name: %s' => 'Nombre de fase: %s',
      'Providers' => 'Proveedores',
      'Account Disabled' => 'Cuenta desactivada',
      'SSH KEY DETAIL' => 'DETALLE DE LA CLAVE S.S.H.',
      'Link Account' => 'Cuenta vinculada',
      'Account Recovery' => 'Recuperación de cuenta',
      'Multi-Factor Authentication Setup Complete' => 'Se completó la configuración de la autenticación en varias fases',
      'Email Sent' => 'Correo electrónico enviado',
      'Twitch.tv' => 'Twitch.tv',
      'Sent By' => 'Enviado por',
      'Install Instructions' => 'Instrucciones de instalación',
      'Download Private Key' => 'Descargar clave privada',
      'Authentication Canceled' => 'Se canceló la autenticación',
      'Login Required' => 'Es necesario iniciar sesión',
      'To configure Facebook OAuth, create a new Facebook Application here:
    https://developers.facebook.com/apps
    You should use these settings in your application:
    %s
    After creating your new application, copy the **App ID** and **App Secret** to the fields above.' => 'Para configurar Facebook OAuth, cree una nueva Aplicación de Facebook aquí:
    https://developers.facebook.com/apps
    Tendrá que utilizar estos ajustes en su aplicación:
    %s
    Después de crear su nueva aplicación, copie la **ID de Aplicación** y el **Secreto de Aplicación** a los campos arriba.',
      'You must log in to take this action.' => 'Debes acceder a tu cuenta para realizar esta acción.',
      'Stay' => 'Permanecer',
      'Two authentication providers use the same provider key (\'%s\'). Each provider must be identified by a unique key.' => 'Dos proveedores de autenticación utilizan la misma clave de proveedor («%s»). Cada uno de los proveedores debe identificarse con una clave única.',
      'Create a New Account' => 'Crear una cuenta nueva',
      'JIRA' => 'JIRA',
      'Verify %s' => 'Verifica %s',
      '%s set the "%s" value to "%s".' => '%s estableció el valor de «%s» a «%s».',
      'Confirm External Account Link' => 'Confirmar enlace de cuenta externa',
      '[SSH Key]' => '[Clave SSH]',
      'Link %s Account' => 'Enlazar cuenta de %s',
      'Multi-Factor' => 'Varias fases',
      'Register Account' => 'Cuenta de registro',
      'You canceled authentication.' => 'Has cancelado la autenticación.',
      'Accepted By' => 'Aceptado por',
      'Auth Factor' => 'Fase de autenticación',
      'Confirm Link' => 'Confirmar enlace',
      'You can try again, or request a new link via email.' => 'Puedes intentarlo de nuevo o solicitar un enlace nuevo por correo electrónico.',
      'Create New Account' => 'Crear cuenta nueva',
      'Log In' => 'Acceder',
      'Register' => 'Registrarse',
      'LDAP' => 'LDAP',
      'Engine: Session' => 'Motor: Sesión',
      'Wait for Approval' => 'Espera para aprobación',
      'LDAP Username' => 'Nombre de usuario LDAP',
      'Search Attributes' => 'Atributos de búsqueda',
      '%s renamed this key from "%s" to "%s".' => '%s cambió el nombre de esta clave de «%s» a «%s».',
      'Allow Linking Accounts' => 'Permitir enlazar cuentas',
      'Always Search' => 'Buscar siempre',
      'Captcha' => 'Captcha',
      '%s Account' => 'Cuenta de %s',
    );
  }

}
