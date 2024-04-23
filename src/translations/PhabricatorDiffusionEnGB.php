<?php

final class PhabricatorDiffusionEnGB
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en_GB';
  }

  protected function getTranslations() {
    return array(
      'Repository "%s" is being synchronized on device "%s", but this device is not bound to the corresponding cluster service ("%s").' => 'Repository "%s" is being synchronised on device "%s", but this device is not bound to the corresponding cluster service ("%s").',
      'New display behavior.' => 'New display behaviour.',
      'Client transmitted more than 1MB of data without transmitting a recognizable protocol frame.' => 'Client transmitted more than 1MB of data without transmitting a recognisable protocol frame.',
      'Initialization Error' => 'Initialisation Error',
      'Change display behavior.' => 'Change display behaviour.',
      'Repository "%s" does not have a working copy on this device yet, so it can not be synchronized. Wait for the daemons to construct one or run `bin/repository update %s` on this host ("%s") to build it explicitly.' => 'Repository "%s" does not have a working copy on this device yet, so it can not be synchronised. Wait for the daemons to construct one or run `bin/repository update %s` on this host ("%s") to build it explicitly.',
      'Trying to synchronize after write, but not holding a write lock!' => 'Trying to synchronise after write, but not holding a write lock!',
      'Synchronizing this device ("%s") from cluster leader ("%s").' => 'Synchronising this device ("%s") from cluster leader ("%s").',
      'Unrecognized hook "%s"!' => 'Unrecognised hook "%s"!',
      'Synchronization of "%s" from leader "%s" failed: %s' => 'Synchronisation of "%s" from leader "%s" failed: %s',
      'Prioritized' => 'Prioritised',
      'URI display behavior.' => 'URI display behaviour.',
      'Daemons are initializing the working copy.' => 'Daemons are initialising the working copy.',
      'Unrecognized repository path "%s". Expected a path like "%s", "%s", or "%s".' => 'Unrecognised repository path "%s". Expected a path like "%s", "%s", or "%s".',
      'Initializing Working Copy' => 'Initialising Working Copy',
      'Synchronization of "%s" from remote failed: %s' => 'Synchronisation of "%s" from remote failed: %s',
      'Device "%s" is already a cluster leader and does not need to be synchronized.' => 'Device "%s" is already a cluster leader and does not need to be synchronised.',
    );
  }

}
