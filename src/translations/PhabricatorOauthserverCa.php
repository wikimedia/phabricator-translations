<?php

final class PhabricatorOauthserverCa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ca';
  }

  protected function getTranslations() {
    return array(
      'Log In with %s' => 'Iniciar sessió amb Phabricator',
      'Enable OAuth Application' => 'Habilitar l\'aplicació OAuth',
      'Server Error' => 'Error de servidor',
      'OAuth application "%s" has been disabled.' => 'L\'aplicació OAuth "%s" s\'ha desactivat.',
      'Authorize Application' => 'Autoritzar l\'aplicació',
      '%s enabled this application.' => '%s ha habilitat aquesta aplicació.',
      'Request included a client_id parameter and an "Authorization" header with a username, but the values "%s" and "%s") disagree. The values must match.' => 'La sol·licitud incloïa un client_id i una capçalera \'Autorització\' amb un nom d\'usuari, però els valors \'%s\' i \'%s\') no hi estan d\'acord. Els valors han de coincidir.',
      'The authorization server encountered an unexpected condition which prevented it from fulfilling the request.' => 'El servidor d\'autorització ha trobat una condició inesperada que impedeix que compleixi la sol·licitud.',
      'No clients found.' => 'Cap client trobat.',
      'OAuth Login Provider' => 'Proveïdor d’inici de sessió d’OAuth',
      'Unknown Scope' => 'Abast desconegut',
      'Authorization code %s not found.' => 'Codi d\'autorització %s no trobat.',
      'This engine manages OAuth client applications.' => 'Aquest motor gestiona les aplicacions del client OAuth.',
      'Redirect URI in request must exactly match redirect URI from authorization code.' => 'L\'URI de redirecció a la sol·licitud ha de coincidir exactament amb l\'URI de redirecció del codi d\'autorització.',
      'OAuth Application' => 'Aplicació OAuth',
      'OAuth Access Token' => 'Testimoni d\'Accés OAuth',
      'Authenticate: %s' => 'Autenticar: %s',
      'Required parameter %s was not present in the request.' => 'El paràmetre necessari %s no estava present a la sol·licitud.',
      'The %s OAuth application has been disabled.' => 'L\'aplicació OAuth %s s\'ha desactivat.',
      'Search for applications created by particular users.' => 'Cerca aplicacions creades per usuaris concrets.',
      'Invalid Response Type' => 'Tipus de resposta no vàlida',
      'OAuth applications must have a name.' => 'Les aplicacions OAuth han de tenir un nom.',
      'Required request parameter %s is missing.' => 'Falta el paràmetre de sol·licitud necessari %s.',
      'Request parameter %s specifies an invalid redirect URI. The redirect URI must be a fully-qualified domain with no fragments, and must have the same domain and at least the same query parameters as the redirect URI the client registered.' => 'El paràmetre de sol·licitud %s especifica un URI de redirecció no vàlid. L\'URI de redirecció ha de ser un domini plenament qualificat sense fragments, i ha de tenir el mateix domini i almenys els mateixos paràmetres de consulta que l\'URI de redirecció que el client registrat.',
      'Client PHID' => 'PHID del client',
      'The redirect URI for OAuth handshakes.' => 'L\'URI de redirecció per a les encaixades OAuth.',
      'Show Application Secret' => 'Mostrar el secret de l’aplicació',
      'Revoke Authorization' => 'Revocar l\'autorització',
      'Unsupported Response Type' => 'Tipus de resposta no admesa',
      'OAuth Authorizations' => 'Autoritzacions d\'OAuth',
      'User with PHID %s not found.' => 'No s\'ha trobat cap usuari amb el PHID %s.',
      'Change where this application redirects users to during OAuth handshakes.' => 'Canvia el lloc on aquesta aplicació redirigeix ​​els usuaris durant les encaixades OAuth.',
      'Application Secret' => 'Secret de l\'aplicació',
      'Malformed Request' => 'Sol·licitud mal formada',
      'OAuth applications must have a valid redirect URI.' => 'Les aplicacions OAuth han de tenir un URI de redirecció vàlid.',
      'Scope' => 'Abast',
      'Invalid authorization code %s.' => 'Codi d\'autorització no vàlid %s.',
      'Application %d' => 'Aplicació %s',
      'Really show application secret?' => 'Voleu mostrar el secret de l’aplicació?',
      'Edit OAuth Server' => 'Modificar el servidor OAuth',
      '%s disabled this application.' => '%s ha desactivat aquesta aplicació.',
      'Disable OAuth Application' => 'Deshabilitar l\'aplicació OAuth',
      'OAuth Application Authorizations' => 'Autoritzacions de l\'aplicació OAuth',
      'OAuth application redirect URIs must not contain URI fragments, but the URI "%s" has a fragment ("%s").' => 'Els URI de redirecció d\'aplicacions OAuth no han de contenir fragments d\'URI, però l\'URI «%s» té un fragment («%s»).',
      'OAuth Application: %s' => 'Aplicació OAuth: %s',
      'Authorize Access' => 'Autoritzar l\'accés',
      '%s renamed this application from "%s" to "%s".' => '%s ha reanomenat aquesta aplicació de "%s" a "%s".',
      'OAuth application redirect URIs must only use the "http" or "https" protocols, but the URI "%s" uses the "%s" protocol.' => 'Els URI de redirecció d\'aplicacions OAuth només han d\'utilitzar els protocols "http" o "https", però l\'URI "%s" utilitza el protocol "%s".',
      'You do not have permission to create OAuth applications.' => 'No teniu permís per crear aplicacions OAuth.',
      'This application also requested additional unrecognized permissions. These permissions may have existed in an older version of the software, or may be from a future version of the software. They will not be granted.' => 'Aquesta aplicació també sol·licitava permisos addicionals no reconeguts. Aquests permisos poden haver existit en una versió anterior de Phabricator, o bé provenir d’una versió futura de Phabricator. No se’ls concedirà.',
      'Keep this token private, it allows any bearer to access your account on behalf of this application.' => 'Mantenir aquest testimoni en privat, permet que qualsevol portador accedeixi al teu compte en nom d\'aquesta aplicació.',
      'OAuth Error Code: %s' => 'Codi d\'error OAuth: %s',
      'Enable Application' => 'Habilitar l\'aplicació',
      'The secret associated with this OAuth application will be shown in plain text on your screen. Before continuing, wrap your arms around your monitor to create a human shield, keeping it safe from prying eyes. Protect company secrets!' => 'El secret associat a aquesta aplicació OAuth es mostrarà en text clar a la vostra pantalla. Abans de continuar, abraça bé el teu monitor per crear un escut humà, mantenint-lo fora de perill dels ulls plorosos. Protegiu els secrets de les empreses!',
      'This will create an authorization and OAuth token, permitting %s to access your account.' => 'Això crearà una autorització i un testimoni d\'OAuth, permetent que %s accedeixi al teu compte.',
      'The secret associated with this OAuth application will be shown in plain text on your screen.' => 'El secret associat amb aquesta aplicació OAuth es mostrarà en text senzill a la pantalla.',
      'Do you want to authorize the external application "%s" to access your %s account data, including your primary email address?' => 'Voleu autoritzar l\'aplicació externa "%s" per accedir a les dades del vostre compte de Phabricator, inclosa la vostra adreça electrònica principal?',
      'Do Not Authorize' => 'No autoritzar',
      'Using the Phabricator OAuth Server' => 'Utilitzar el servidor OAuth de Phabricator',
      'This application will no longer be able to access this server on your behalf.' => 'Aquesta aplicació ja no serà capaç d\'accedir Phabricator en el seu nom.',
      'Can Create OAuth Applications' => 'Pot crear aplicacions OAuth',
      'Invalid Redirect URI' => 'URI de redirecció no vàlid',
      'Rename the application.' => 'Reanomenar l\'aplicació.',
      'Authorization for "%s" confirmed, redirecting...' => 'Autorització per "%s" confirmada, redirigint...',
      'Redirect URI in request and no redirect URI in authorization code. The two must exactly match.' => 'URI de redirecció a la petició però cap URI de redirecció al codi d\'autorització. Els dos han de coincidir exactament.',
      'Required parameter %s missing.' => 'El paràmetre requerit %s ha desaparegut.',
      'Invalid Client Application' => 'Aplicació de client no vàlid',
      'OAuth Clients' => 'Clients OAuth',
      'You haven\'t authorized any OAuth applications.' => 'No heu autoritzat cap aplicació OAuth.',
      'The name of the OAuth application.' => 'El nom de l\'aplicació OAuth.',
      'Revoke Authorization?' => 'Revocar l\'autorització?',
      'OAuth: %s' => 'OAuth: %s',
      'Continue to Application' => 'Continuar a l\'aplicació',
      '%s changed the application redirect URI from "%s" to "%s".' => '%s ha canviat l\'URI de redirecció de l\'aplicació de «%s» a «%s».',
      'OAuth Applications' => 'Aplicacions d\'OAuth',
      'Client with %s %s not found.' => 'No s\'ha trobat el client amb %2$s %1$s.',
      'Generate Test Token' => 'Generar un Testimoni de Prova',
      'Authorize Application?' => 'Autoritzar l\'aplicació?',
      'Authorize "%s"?' => 'Autoritzar a "%s"?',
      'Disable Application' => 'Deshabilitar l\'aplicació',
      '%s created this OAuth application.' => '%s ha creat aquesta aplicació OAuth.',
      'Edit OAuth Applications' => 'Editar les aplicacions d\'OAuth',
      'OAuth Not Available' => 'OAuth no disponible',
      'Create OAuth Server' => 'Crear el servidor OAuth',
      'Really enable the %s OAuth application? Users will be able to authenticate against it, and existing tokens will become usable again.' => 'Voleu activar l\'aplicació OAuth %s? Els usuaris podran autenticar-se amb ella i es podran tornar a utilitzar els testimonis existents.',
      'Only %s %s is supported.' => 'Només s\'admeten %s %s.',
      'This application ("%s") is authorized to use your %s credentials. Continue to complete the authentication workflow.' => 'Aquesta aplicació (\'%s\') està autoritzada per utilitzar les vostres credencials de Phabricator. Continueu completant el flux de treball d\'autenticació.',
      'New application name.' => 'Nou nom de l\'aplicació.',
      'Request parameter %s does not specify a valid client application.' => 'El paràmetre de sol·licitud %s no especifica una aplicació de client vàlida.',
      'Application Disabled' => 'L\'aplicació està desactivada',
      'This application has requested these additional permissions. Authorizing it will grant it the permissions it requests:' => 'Aquesta aplicació ha sol·licitat aquests permisos addicionals. En autoritzar-lo, se li concediran els permisos que sol·liciti:',
      'OAuth Authorization' => 'Autorització d\'OAuth',
      'Authorizations can only be viewed by the authorizing user.' => 'Les autoritzacions només poden ser visualitzades per l\'usuari autoritzant.',
      'OAuth Server' => 'Servidor d\'OAuth',
      'Alas!' => 'Ai!',
      'Redirect URI' => 'URI de redirecció',
      'Required parameter code missing.' => 'Falta el codi de paràmetre obligatori.',
      'Request parameter %s specifies an unsupported response type. Valid response types are: %s.' => 'El paràmetre de sol·licitud %s especifica un tipus de resposta no admesa. Els tipus de resposta vàlids són: %s.',
      'New OAuth application redirect URI.' => 'Nou URI de redirecció d\'aplicacions OAuth.',
      'Really disable the %s OAuth application? Users will no longer be able to authenticate against it, nor access this server using tokens generated by this application.' => 'Segur que voleu desactivar l\'aplicació %s OAuth? Els usuaris ja no podran autenticar-s\'hi ni accedir a Phabricator mitjançant els testimonis generats per aquesta aplicació.',
      'Edit OAuth Server: %s' => 'Modificar el servidor OAuth: %s',
      'The user declined to authorize this application.' => 'L\'usuari ha rebutjat autoritzar aquesta aplicació.',
      'Edit Application' => 'Editar l\'aplicació',
      'You do not have access to OAuth authorizations.' => 'No teniu accés a les autoritzacions OAuth.',
    );
  }

}
