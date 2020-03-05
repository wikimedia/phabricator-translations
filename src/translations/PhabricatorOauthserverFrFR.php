<?php

final class PhabricatorOauthserverFrFR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr_FR';
  }

  protected function getTranslations() {
    return array(
      'Enable OAuth Application' => 'Activer l’application OAuth',
      'Server Error' => 'Erreur du serveur',
      'OAuth application "%s" has been disabled.' => 'L\'application OAuth « %s » a été désactivée.',
      'Authorize Application' => 'Autoriser l\'application',
      '%s enabled this application.' => '%s a activé cette application.',
      'Request included a client_id parameter and an "Authorization" header with a username, but the values "%s" and "%s") disagree. The values must match.' => 'La requête a inclus un paramètre client_id et une entête « Autorisation » avec un nom d’utilisateur, mais les valeurs « %s » et « %s » diffèrent. Celles-ci doivent correspondre aux paramètres précédents.',
      'The authorization server encountered an unexpected condition which prevented it from fulfilling the request.' => 'Le serveur d’autorisation a rencontré une condition inattendue qui l’a empêché de remplir la requête.',
      'No clients found.' => 'Aucun client trouvé.',
      'OAuth Login Provider' => 'Fournisseur d’identifiant OAuth',
      'Unknown Scope' => 'Portée inconnue',
      'This application will no longer be able to access Phabricator on your behalf.' => 'Cette application ne sera plus en capacité d’accéder à Phabricator en votre nom.',
      'Authorization code %s not found.' => 'Code d’autorisation %s non trouvé.',
      'This engine manages OAuth client applications.' => 'Ce moteur gère les applications client OAuth.',
      'Redirect URI in request must exactly match redirect URI from authorization code.' => 'L’URI de redirection de la requête doit correspondre exactement à celle du code d’autorisation.',
      'OAuth Application' => 'Application OAuth',
      'OAuth Access Token' => 'jeton d’accès OAuth',
      'Authenticate: %s' => 'Authentifier : %s',
      'Required parameter %s was not present in the request.' => 'Le paramètre requis %s n’était pas présent dans la requête.',
      'The %s OAuth application has been disabled.' => 'L’application OAuth %s a été désactivée.',
      'Search for applications created by particular users.' => 'Rechercher des applications créées par des utilisateurs particuliers.',
      'Invalid Response Type' => 'Type de réponse non valide',
      'OAuth applications must have a name.' => 'Les applications OAuth doivent avoir un nom.',
      'Required request parameter %s is missing.' => 'Le paramètre de requête requis %s est manquant.',
      'Request parameter %s specifies an invalid redirect URI. The redirect URI must be a fully-qualified domain with no fragments, and must have the same domain and at least the same query parameters as the redirect URI the client registered.' => 'Le paramètre de requête %s spécifie un URI de redirection non valide. L’URI de redirection doit être un domaine pleinement qualifié sans fragments, et doit avoir le même domaine et au minimum les mêmes paramètres de requête que l’URI de redirection enregistré par le client.',
      'Client PHID' => 'Client PHID',
      'The redirect URI for OAuth handshakes.' => 'L’URI de redirection d’établissement de liaisons OAuth.',
      'Unsupported Response Type' => 'Type de réponse non pris en charge',
      'OAuth Authorizations' => 'Autorisations OAuth',
      'User with PHID %s not found.' => 'L\'utilisateur non trouvé avec le PHID %s.',
      'Change where this application redirects users to during OAuth handshakes.' => 'Changer où sont redirigés les utilisateurs par cette application durant l’établissement de liaisons OAuth.',
      'Malformed Request' => 'Requête mal formulée',
      'OAuth applications must have a valid redirect URI.' => 'Les applications OAuth doivent avoir un URI de redirection valide.',
      'This application also requested additional unrecognized permissions. These permissions may have existed in an older version of Phabricator, or may be from a future version of Phabricator. They will not be granted.' => 'Cette application a aussi demandé des permissions supplémentaires non reconnues. Celles-ci peuvent avoir existé dans une version de Phabricator plus ancienne, ou peuvent provenir d’une future version de Phabricator. Elles ne seront pas fournies.',
      'Scope' => 'Portée',
      'Invalid authorization code %s.' => 'Code d’autorisation %s invalide.',
      'Application %d' => 'Application %s',
      'Edit OAuth Server' => 'Modifier le serveur OAuth',
      '%s disabled this application.' => '%s a désactivé cette application.',
      'Disable OAuth Application' => 'Désactiver l’application OAuth',
      'OAuth Application Authorizations' => 'Autorisations de l’application OAuth',
      'OAuth application redirect URIs must not contain URI fragments, but the URI "%s" has a fragment ("%s").' => 'Les URI de redirection de l’application OAuth ne doivent pas contenir de fragments d’URI, mais l’URI « %s » contient un fragment (« %s »).',
      'Authorization for "%s" confirmed, redirecting...' => 'Authorisation pour « %s » confirmée, redirection en cours...',
      'Authorize "%s"?' => 'Autoriser "%s"?',
      'Edit Application' => 'Modifier l\'application',
    );
  }

}
