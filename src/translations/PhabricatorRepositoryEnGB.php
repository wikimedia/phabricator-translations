<?php

final class PhabricatorRepositoryEnGB
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en_GB';
  }

  protected function getTranslations() {
    return array(
      'Specified version control system must be a VCS recognized by this software. Valid systems are: %s.' => 'Specified version control system must be a VCS recognised by Phabricator. Valid systems are: %s.',
      'Matching function "%s(...)" is not recognized. Valid functions are: regexp(...).' => 'Matching function "%s(...)" is not recognised. Valid functions are: regexp(...).',
      'Demote a device (or all devices in a service) discarding unsynchronized changes. Clears stuck write locks and recovers from lost leaders.' => 'Demote a device (or all devices in a service) discarding unsynchronised changes. Clears stuck write locks and recovers from lost leaders.',
      'Use default behavior.' => 'Use default behaviour.',
      'If you clusterize a repository onto this service it may be unclear which devices have up-to-date copies of the repository. If so, leader/follower ambiguity will freeze the repository. You may need to manually promote a device to unfreeze it. See "Ambiguous Leaders" in the documentation for discussion.' => 'If you clusterise a repository onto this service it may be unclear which devices have up-to-date copies of the repository. If so, leader/follower ambiguity will freeze the repository. You may need to manually promote a device to unfreeze it. See "Ambiguous Leaders" in the documentation for discussion.',
      'Specify one or more repositories to clusterize.' => 'Specify one or more repositories to clusterise.',
      'Error While Initializing Repository' => 'Error While Initialising Repository',
      'The URI protocol is unrecognized. It should begin with "%s", "%s", "%s", "%s", "%s", "%s", or be in the form "%s".' => 'The URI protocol is unrecognised. It should begin with "%s", "%s", "%s", "%s", "%s", "%s", or be in the form "%s".',
    );
  }

}
