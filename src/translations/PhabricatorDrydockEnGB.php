<?php

final class PhabricatorDrydockEnGB
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en_GB';
  }

  protected function getTranslations() {
    return array(
      'Search authorizations from specific objects.' => 'Search authorisations from specific objects.',
      'All Authorizations' => 'All Authorisations',
      'No Authorizations' => 'No Authorisations',
      'Authorization state of this request.' => 'Authorisation state of this request.',
      'Drydock Authorizations' => 'Drydock Authorisations',
      'Search authorizations for specific blueprints.' => 'Search authorisations for specific blueprints.',
      'Decline this authorization? The object will not be able to lease or allocate resources created by this blueprint.' => 'Decline this authorisation? The object will not be able to lease or allocate resources created by this blueprint.',
      'Approve this authorization? The object will be able to lease and allocate resources created by this blueprint.' => 'Approve this authorisation? The object will be able to lease and allocate resources created by this blueprint.',
      'An authorization inherits the policies of the blueprint it authorizes access to.' => 'An authorisation inherits the policies of the blueprint it authorises access to.',
      'Authorization state of the requesting object.' => 'Authorisation state of the requesting object.',
      'This authorization has already been declined.' => 'This authorisation has already been declined.',
      'Approve Authorization' => 'Approve Authorisation',
      'WARNING: There are %s unapproved authorization(s)!' => 'WARNING: There are %s unapproved authorisation(s)!',
      'Authorized' => 'Authorised',
      'Decline Authorization' => 'Decline Authorisation',
      'Authorizations' => 'Authorisations',
      'This authorization has already been approved.' => 'This authorisation has already been approved.',
      'Blueprint type "%s" is unrecognized. Valid types are: %s.' => 'Blueprint type "%s" is unrecognised. Valid types are: %s.',
      'Already Authorized' => 'Already Authorised',
      'Retrieve information about Drydock authorizations.' => 'Retrieve information about Drydock authorisations.',
      'Trying to queue a lease for activation without an authorizing object. Use "%s" to specify the PHID of the authorizing object. The authorizing object must be approved to use the allowed blueprints.' => 'Trying to queue a lease for activation without an authorising object. Use "%s" to specify the PHID of the authorising object. The authorising object must be approved to use the allowed blueprints.',
    );
  }

}
