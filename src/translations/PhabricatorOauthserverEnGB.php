<?php

final class PhabricatorOauthserverEnGB
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en_GB';
  }

  protected function getTranslations() {
    return array(
      'Authorize Application' => 'Authorise Application',
      'The authorization server encountered an unexpected condition which prevented it from fulfilling the request.' => 'The authorisation server encountered an unexpected condition which prevented it from fulfilling the request.',
      'Authorization code %s not found.' => 'Authorisation code %s not found.',
      'Redirect URI in request must exactly match redirect URI from authorization code.' => 'Redirect URI in request must exactly match redirect URI from authorisation code.',
      'Revoke Authorization' => 'Revoke Authorisation',
      'OAuth Authorizations' => 'OAuth Authorisations',
      'Invalid authorization code %s.' => 'Invalid authorisation code %s.',
      'OAuth Application Authorizations' => 'OAuth Application Authorisations',
      'Authorize Access' => 'Authorise Access',
      'This application also requested additional unrecognized permissions. These permissions may have existed in an older version of the software, or may be from a future version of the software. They will not be granted.' => 'This application also requested additional unrecognised permissions. These permissions may have existed in an older version of the software, or may be from a future version of the software. They will not be granted.',
      'This will create an authorization and OAuth token, permitting %s to access your account.' => 'This will create an authorisation and OAuth token, permitting %s to access your account.',
      'Do you want to authorize the external application "%s" to access your %s account data, including your primary email address?' => 'Do you want to authorise the external application "%s" to access your %s account data, including your primary email address?',
      'Do Not Authorize' => 'Do Not Authorise',
      'Authorization for "%s" confirmed, redirecting...' => 'Authorisation for "%s" confirmed, redirecting...',
      'Redirect URI in request and no redirect URI in authorization code. The two must exactly match.' => 'Redirect URI in request and no redirect URI in authorisation code. The two must exactly match.',
      'You haven\'t authorized any OAuth applications.' => 'You haven\'t authorised any OAuth applications.',
      'Revoke Authorization?' => 'Revoke Authorisation?',
      'Authorize Application?' => 'Authorise Application?',
      'Authorize "%s"?' => 'Authorise "%s"?',
      'This application ("%s") is authorized to use your %s credentials. Continue to complete the authentication workflow.' => 'This application ("%s") is authorised to use your %s credentials. Continue to complete the authentication workflow.',
      'This application has requested these additional permissions. Authorizing it will grant it the permissions it requests:' => 'This application has requested these additional permissions. Authorising it will grant it the permissions it requests:',
      'OAuth Authorization' => 'OAuth Authorisation',
      'Authorizations can only be viewed by the authorizing user.' => 'Authorisations can only be viewed by the authorising user.',
      'The user declined to authorize this application.' => 'The user declined to authorise this application.',
      'You do not have access to OAuth authorizations.' => 'You do not have access to OAuth authorisations.',
    );
  }

}
