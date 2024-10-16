<?php

final class PhabricatorOauthserverEn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en';
  }

  protected function getTranslations() {
    return array(
      'Log In with %s' => 'Log In with %s',
      'Enable OAuth Application' => 'Enable OAuth Application',
      'Server Error' => 'Server Error',
      'OAuth application "%s" has been disabled.' => 'OAuth application "%s" has been disabled.',
      'Authorize Application' => 'Authorize Application',
      '%s enabled this application.' => '%s enabled this application.',
      'Request included a client_id parameter and an "Authorization" header with a username, but the values "%s" and "%s") disagree. The values must match.' => 'Request included a client_id parameter and an "Authorization" header with a username, but the values "%s" and "%s") disagree. The values must match.',
      'The authorization server encountered an unexpected condition which prevented it from fulfilling the request.' => 'The authorization server encountered an unexpected condition which prevented it from fulfilling the request.',
      'No clients found.' => 'No clients found.',
      'OAuth Login Provider' => 'OAuth Login Provider',
      'Unknown Scope' => 'Unknown Scope',
      'Authorization code %s not found.' => 'Authorization code %s not found.',
      'This engine manages OAuth client applications.' => 'This engine manages OAuth client applications.',
      'Redirect URI in request must exactly match redirect URI from authorization code.' => 'Redirect URI in request must exactly match redirect URI from authorization code.',
      'OAuth Application' => 'OAuth Application',
      'OAuth Access Token' => 'OAuth Access Token',
      'Authenticate: %s' => 'Authenticate: %s',
      'Required parameter %s was not present in the request.' => 'Required parameter %s was not present in the request.',
      'The %s OAuth application has been disabled.' => 'The %s OAuth application has been disabled.',
      'Search for applications created by particular users.' => 'Search for applications created by particular users.',
      'Invalid Response Type' => 'Invalid Response Type',
      'OAuth applications must have a name.' => 'OAuth applications must have a name.',
      'Required request parameter %s is missing.' => 'Required request parameter %s is missing.',
      'Request parameter %s specifies an invalid redirect URI. The redirect URI must be a fully-qualified domain with no fragments, and must have the same domain and at least the same query parameters as the redirect URI the client registered.' => 'Request parameter %s specifies an invalid redirect URI. The redirect URI must be a fully-qualified domain with no fragments, and must have the same domain and at least the same query parameters as the redirect URI the client registered.',
      'Client PHID' => 'Client PHID',
      'The redirect URI for OAuth handshakes.' => 'The redirect URI for OAuth handshakes.',
      'Show Application Secret' => 'Show Application Secret',
      'Revoke Authorization' => 'Revoke Authorization',
      'Unsupported Response Type' => 'Unsupported Response Type',
      'OAuth Authorizations' => 'OAuth Authorizations',
      'User with PHID %s not found.' => 'User with PHID %s not found.',
      'Change where this application redirects users to during OAuth handshakes.' => 'Change where this application redirects users to during OAuth handshakes.',
      'Application Secret' => 'Application Secret',
      'Malformed Request' => 'Malformed Request',
      'OAuth applications must have a valid redirect URI.' => 'OAuth applications must have a valid redirect URI.',
      'Scope' => 'Scope',
      'Invalid authorization code %s.' => 'Invalid authorization code %s.',
      'Application %d' => 'Application %s',
      'Really show application secret?' => 'Really show application secret?',
      'Edit OAuth Server' => 'Edit OAuth Server',
      '%s disabled this application.' => '%s disabled this application.',
      'Disable OAuth Application' => 'Disable OAuth Application',
      'OAuth Application Authorizations' => 'OAuth Application Authorizations',
      'OAuth application redirect URIs must not contain URI fragments, but the URI "%s" has a fragment ("%s").' => 'OAuth application redirect URIs must not contain URI fragments, but the URI "%s" has a fragment ("%s").',
      'OAuth Application: %s' => 'OAuth Application: %s',
      'Authorize Access' => 'Authorize Access',
      '%s renamed this application from "%s" to "%s".' => '%s renamed this application from "%s" to "%s".',
      'OAuth application redirect URIs must only use the "http" or "https" protocols, but the URI "%s" uses the "%s" protocol.' => 'OAuth application redirect URIs must only use the "http" or "https" protocols, but the URI "%s" uses the "%s" protocol.',
      'You do not have permission to create OAuth applications.' => 'You do not have permission to create OAuth applications.',
      'This application also requested additional unrecognized permissions. These permissions may have existed in an older version of the software, or may be from a future version of the software. They will not be granted.' => 'This application also requested additional unrecognized permissions. These permissions may have existed in an older version of the software, or may be from a future version of the software. They will not be granted.',
      'Keep this token private, it allows any bearer to access your account on behalf of this application.' => 'Keep this token private, it allows any bearer to access your account on behalf of this application.',
      'OAuth Error Code: %s' => 'OAuth Error Code: %s',
      'Enable Application' => 'Enable Application',
      'The secret associated with this OAuth application will be shown in plain text on your screen. Before continuing, wrap your arms around your monitor to create a human shield, keeping it safe from prying eyes. Protect company secrets!' => 'The secret associated with this OAuth application will be shown in plain text on your screen. Before continuing, wrap your arms around your monitor to create a human shield, keeping it safe from prying eyes. Protect company secrets!',
      'This will create an authorization and OAuth token, permitting %s to access your account.' => 'This will create an authorization and OAuth token, permitting %s to access your account.',
      'The secret associated with this OAuth application will be shown in plain text on your screen.' => 'The secret associated with this OAuth application will be shown in plain text on your screen.',
      'Do you want to authorize the external application "%s" to access your %s account data, including your primary email address?' => 'Do you want to authorize the external application "%s" to access your %s account data, including your primary email address?',
      'Do Not Authorize' => 'Do Not Authorize',
      'Using the Phabricator OAuth Server' => 'Using the Phabricator OAuth Server',
      'This application will no longer be able to access this server on your behalf.' => 'This application will no longer be able to access this server on your behalf.',
      'Can Create OAuth Applications' => 'Can Create OAuth Applications',
      'Invalid Redirect URI' => 'Invalid Redirect URI',
      'Rename the application.' => 'Rename the application.',
      'Authorization for "%s" confirmed, redirecting...' => 'Authorization for "%s" confirmed, redirecting...',
      'Redirect URI in request and no redirect URI in authorization code. The two must exactly match.' => 'Redirect URI in request and no redirect URI in authorization code. The two must exactly match.',
      'Required parameter %s missing.' => 'Required parameter %s missing.',
      'Invalid Client Application' => 'Invalid Client Application',
      'OAuth Clients' => 'OAuth Clients',
      'You haven\'t authorized any OAuth applications.' => 'You haven\'t authorized any OAuth applications.',
      'The name of the OAuth application.' => 'The name of the OAuth application.',
      'Revoke Authorization?' => 'Revoke Authorization?',
      'OAuth: %s' => 'OAuth: %s',
      'Continue to Application' => 'Continue to Application',
      '%s changed the application redirect URI from "%s" to "%s".' => '%s changed the application redirect URI from "%s" to "%s".',
      'OAuth Applications' => 'OAuth Applications',
      'Client with %s %s not found.' => 'Client with %s %s not found.',
      'Generate Test Token' => 'Generate Test Token',
      'Authorize Application?' => 'Authorize Application?',
      'Authorize "%s"?' => 'Authorize "%s"?',
      'Disable Application' => 'Disable Application',
      '%s created this OAuth application.' => '%s created this OAuth application.',
      'Edit OAuth Applications' => 'Edit OAuth Applications',
      'OAuth Not Available' => 'OAuth Not Available',
      'Create OAuth Server' => 'Create OAuth Server',
      'Really enable the %s OAuth application? Users will be able to authenticate against it, and existing tokens will become usable again.' => 'Really enable the %s OAuth application? Users will be able to authenticate against it, and existing tokens will become usable again.',
      'Only %s %s is supported.' => 'Only %s %s is supported.',
      'This application ("%s") is authorized to use your %s credentials. Continue to complete the authentication workflow.' => 'This application ("%s") is authorized to use your %s credentials. Continue to complete the authentication workflow.',
      'New application name.' => 'New application name.',
      'Request parameter %s does not specify a valid client application.' => 'Request parameter %s does not specify a valid client application.',
      'Application Disabled' => 'Application Disabled',
      'This application has requested these additional permissions. Authorizing it will grant it the permissions it requests:' => 'This application has requested these additional permissions. Authorizing it will grant it the permissions it requests:',
      'OAuth Authorization' => 'OAuth Authorization',
      'Authorizations can only be viewed by the authorizing user.' => 'Authorizations can only be viewed by the authorizing user.',
      'OAuth Server' => 'OAuth Server',
      'Alas!' => 'Alas!',
      'Redirect URI' => 'Redirect URI',
      'Required parameter code missing.' => 'Required parameter code missing.',
      'Request parameter %s specifies an unsupported response type. Valid response types are: %s.' => 'Request parameter %s specifies an unsupported response type. Valid response types are: %s.',
      'New OAuth application redirect URI.' => 'New OAuth application redirect URI.',
      'Really disable the %s OAuth application? Users will no longer be able to authenticate against it, nor access this server using tokens generated by this application.' => 'Really disable the %s OAuth application? Users will no longer be able to authenticate against it, nor access this server using tokens generated by this application.',
      'Edit OAuth Server: %s' => 'Edit OAuth Server: %s',
      'The user declined to authorize this application.' => 'The user declined to authorize this application.',
      'Edit Application' => 'Edit Application',
      'You do not have access to OAuth authorizations.' => 'You do not have access to OAuth authorizations.',
    );
  }

}
