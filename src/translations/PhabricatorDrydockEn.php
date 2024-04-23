<?php

final class PhabricatorDrydockEn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en';
  }

  protected function getTranslations() {
    return array(
      'All Operations' => 'All Operations',
      'Repository Operation %d' => 'Repository Operation %s',
      'Failed to acquire slot locks: %s.' => 'Failed to acquire slot locks: %s.',
      'Waiting For Reclamation' => 'Waiting For Reclamation',
      'Authorized Object' => 'Authorized Object',
      'Resource' => 'Resource',
      'Lease has unknown status "%s".' => 'Lease has unknown status "%s".',
      'Show Details' => 'Show Details',
      'This change could not be fetched from the remote.' => 'This change could not be fetched from the remote.',
      'Resource "%s" is not releasable.' => 'Resource "%s" is not releasable.',
      'Search engine has no blueprint, resource, lease, or operation.' => 'Search engine has no blueprint, resource, lease, or operation.',
      'Not Acquired' => 'Not Acquired',
      'Lease "%s" is not releasable.' => 'Lease "%s" is not releasable.',
      'No enabled blueprints exist with a blueprint class that can plausibly allocate resources to satisfy the requested lease.' => 'No enabled blueprints exist with a blueprint class that can plausibly allocate resources to satisfy the requested lease.',
      'Scheduled release of resource "%s".' => 'Scheduled release of resource "%s".',
      'This operation has already been dismissed, and can not be dismissed any further.' => 'This operation has already been dismissed, and can not be dismissed any further.',
      'Lease %d' => 'Lease %s',
      'Blueprint' => 'Blueprint',
      'Staging Area Skipped' => 'Staging Area Skipped',
      'Committing this change failed. It may already have been merged.' => 'Committing this change failed. It may already have been merged.',
      'Drydock Blueprints' => 'Drydock Blueprints',
      'Release a lease.' => 'Release a lease.',
      'The PHID of the object that authorized this lease.' => 'The PHID of the object that authorized this lease.',
      'Set lease expiration time.' => 'Set lease expiration time.',
      'Active Authorizations' => 'Active Authorizations',
      'Allows Drydock to lease existing hosts defined in an Almanac service pool.' => 'Allows Drydock to lease existing hosts defined in an Almanac service pool.',
      'Drydock Console' => 'Drydock Console',
      'Blueprint "%s" (of type "%s") is not properly implemented: it returned from "%s" without acquiring a lease.' => 'Blueprint "%s" (of type "%s") is not properly implemented: it returned from "%s" without acquiring a lease.',
      'Type of blueprint.' => 'Type of blueprint.',
      '%s enabled this blueprint.' => '%s enabled this blueprint.',
      'Waiting to land revision into %s on %s...' => 'Waiting to land revision into %s on %s...',
      'Resource type.' => 'Resource type.',
      'No blueprints found.' => 'No blueprints found.',
      'Trying to allocate a resource with no generated PHID. Use "%s" to create new resource templates.' => 'Trying to allocate a resource with no generated PHID. Use "%s" to create new resource templates.',
      'Edit Blueprint' => 'Edit Blueprint',
      'Disable Blueprint' => 'Disable Blueprint',
      'Blueprint Type' => 'Blueprint Type',
      'Logs' => 'Logs',
      'Specify one or more resource IDs to update with "%s".' => 'Specify one or more resource IDs to update with "%s".',
      'Show Only Disabled Blueprints' => 'Show Only Disabled Blueprints',
      'Retrieve information about Drydock resources.' => 'Retrieve information about Drydock resources.',
      'Type a resource name...' => 'Type a resource name...',
      'Hide Details' => 'Hide Details',
      'Drydock Authorization' => 'Drydock Authorization',
      'Resource %d: %s' => 'Resource %s: %s',
      'This lease does not list any usable blueprints.' => 'This lease does not list any usable blueprints.',
      'Lease activation failed: [%s] %s' => 'Lease activation failed: [%s] %s',
      'Resource %d' => 'Resource %s',
      'When this diff was generated, the repository was not configured with a staging area, so the change was not pushed to staging. Changes must be pushed to staging before they can be landed from the web.' => 'When this diff was generated, the repository was not configured with a staging area, so the change was not pushed to staging. Changes must be pushed to staging before they can be landed from the web.',
      'This revision has been abandoned. Only accepted revisions may land.' => 'This revision has been abandoned. Only accepted revisions may land.',
      'Retrieve information about Drydock blueprints.' => 'Retrieve information about Drydock blueprints.',
      'Drydock Resources' => 'Drydock Resources',
      'Resource Type' => 'Resource Type',
      'The object which authorized this lease (%s) is not authorized to use any of the blueprints the lease lists. Approve the authorizations before using the lease.' => 'The object which authorized this lease (%s) is not authorized to use any of the blueprints the lease lists. Approve the authorizations before using the lease.',
      'Diff ("%s") has wrong revision ID ("%s", expected "%s").' => 'Diff ("%s") has wrong revision ID ("%s", expected "%s").',
      'Trying to acquire lease ("%s") on a resource ("%s") in the wrong status ("%s").' => 'Trying to acquire lease ("%s") on a resource ("%s") in the wrong status ("%s").',
      'Drydock Authorization %d' => 'Drydock Authorization %s',
      'This blueprint has no active resources.' => 'This blueprint has no active resources.',
      'Blueprint "%s" (of type "%s") is not properly implemented: it returned from "%s" with a lease acquired on the wrong resource.' => 'Blueprint "%s" (of type "%s") is not properly implemented: it returned from "%s" with a lease acquired on the wrong resource.',
      'This revision is not associated with a known repository. Only revisions associated with a tracked repository can be landed automatically.' => 'This revision is not associated with a known repository. Only revisions associated with a tracked repository can be landed automatically.',
      'Stdout' => 'Stdout',
      'Failed to acquire lock for resource ("%s") while trying to acquire lease ("%s").' => 'Failed to acquire lock for resource ("%s") while trying to acquire lease ("%s").',
      'Trying to activate lease with no resource.' => 'Trying to activate lease with no resource.',
      'Activation complete. Leases are permanent until manually released with:' => 'Activation complete. Leases are permanent until manually released with:',
      'Via:' => 'Via:',
      'Operation Status' => 'Operation Status',
      'Slot Lock Failure' => 'Slot Lock Failure',
      'Blueprint "%s" (of type "%s") is not properly implemented: %s must return an object of type %s or throw, but returned something else.' => 'Blueprint "%s" (of type "%s") is not properly implemented: %s must return an object of type %s or throw, but returned something else.',
      'Unknown repository operation target type "%s" (in target "%s").' => 'Unknown repository operation target type "%s" (in target "%s").',
      'Drydock commands have the same policies as their targets.' => 'Drydock commands have the same policies as their targets.',
      'The diff was generated from a raw input source, so the change could not be pushed to staging. Changes must be pushed to staging before they can be landed from the web.' => 'The diff was generated from a raw input source, so the change could not be pushed to staging. Changes must be pushed to staging before they can be landed from the web.',
      'Host (%s)' => 'Host (%s)',
      'Drydock Repository Operations' => 'Drydock Repository Operations',
      'Search leases by resource.' => 'Search leases by resource.',
      'Browse Blueprints' => 'Browse Blueprints',
      'No objects have active authorizations to use this blueprint.' => 'No objects have active authorizations to use this blueprint.',
      'You do not have permission to create Drydock blueprints.' => 'You do not have permission to create Drydock blueprints.',
      'Name of the blueprint.' => 'Name of the blueprint.',
      'Really release resource?' => 'Really release resource?',
      'Already Dismissed' => 'Already Dismissed',
      'Dismiss this operation? It will no longer be shown, but logs can be found in Drydock.' => 'Dismiss this operation? It will no longer be shown, but logs can be found in Drydock.',
      'Resource "%s" was reclaimed.' => 'Resource "%s" was reclaimed.',
      'Leases activated in %sms.' => 'Leases activated in %sms.',
      'Default Blueprint View Policy' => 'Default Blueprint View Policy',
      'Allows Drydock to check out working copies of repositories.' => 'Allows Drydock to check out working copies of repositories.',
      'Lease released.' => 'Lease released.',
      'Unknown Repository' => 'Unknown Repository',
      'When this diff was generated, the server was running an older version of the software which did not support staging areas, so the change was not pushed to staging. Changes must be pushed to staging before they can be landed from the web.' => 'When this diff was generated, the server was running an older version of the software which did not support staging areas, so the change was not pushed to staging. Changes must be pushed to staging before they can be landed from the web.',
      'Lease "%s" does not exist.' => 'Lease "%s" does not exist.',
      'All blueprints failed to allocate a suitable new resource when trying to allocate lease ("%s").' => 'All blueprints failed to allocate a suitable new resource when trying to allocate lease ("%s").',
      'Enable Blueprint' => 'Enable Blueprint',
      'Release all resources. Dangerous!' => 'Release all resources. Dangerous!',
      'Authorization State' => 'Authorization State',
      'One or more blueprints promised a new resource, but failed when allocating: [%s] %s' => 'One or more blueprints promised a new resource, but failed when allocating: [%s] %s',
      'Revision Closed' => 'Revision Closed',
      'Value provided to "--count" must be a nonzero, positive number.' => 'Value provided to "--count" must be a nonzero, positive number.',
      'Update a resource.' => 'Update a resource.',
      'Waiting For Activation' => 'Waiting For Activation',
      'Search for resources generated by particular blueprints.' => 'Search for resources generated by particular blueprints.',
      'When this diff was generated, it was not pushed to staging for an unknown reason (the status code was "%s"). Changes must be pushed to staging before they can be landed from the web. The server may be running an out-of-date version of this software, and updating may provide more information about this error.' => 'When this diff was generated, it was not pushed to staging for an unknown reason (the status code was "%s"). Changes must be pushed to staging before they can be landed from the web. The server may be running an out-of-date version of this software, and updating may provide more information about this error.',
      'Lease has already been released!' => 'Lease has already been released!',
      'Lease has been broken!' => 'Lease has been broken!',
      'Unable to parse argument to "--until".' => 'Unable to parse argument to "--until".',
      'This revision is already landing.' => 'This revision is already landing.',
      'Hide Disabled Blueprints' => 'Hide Disabled Blueprints',
      'Search authorizations from specific objects.' => 'Search authorizations from specific objects.',
      'Drydock Leases' => 'Drydock Leases',
      'A repository operation inherits the policies of the repository it affects.' => 'A repository operation inherits the policies of the repository it affects.',
      'Unable to load lease with ID "%s"!' => 'Unable to load lease with ID "%s"!',
      'Working' => 'Working',
      'Success! Automation is configured properly and Drydock can operate on %s.' => 'Success! Automation is configured properly and Drydock can operate on %s.',
      'Configure blueprints so Drydock can build resources, like hosts and working copies.' => 'Configure blueprints so Drydock can build resources, like hosts and working copies.',
      'Edit Blueprint: %s' => 'Edit Blueprint: %s',
      'All Authorizations' => 'All Authorizations',
      'Unable to pop working directory, directory stack is empty.' => 'Unable to pop working directory, directory stack is empty.',
      'Unknown blueprint field "%s"!' => 'Unknown blueprint field "%s"!',
      'Dismiss Operation' => 'Dismiss Operation',
      'Trying to activate a resource from the wrong status. Status must be "%s", actually "%s".' => 'Trying to activate a resource from the wrong status. Status must be "%s", actually "%s".',
      'Retrieve information about Drydock leases.' => 'Retrieve information about Drydock leases.',
      'Operation' => 'Operation',
      '"%s" (owned by "%s")' => '"%s" (owned by "%s")',
      'All Resources' => 'All Resources',
      'The string constant and name of this lease\'s status.' => 'The string constant and name of this lease\'s status.',
      'Client Support Unavailable' => 'Client Support Unavailable',
      'Resource reclaimed by %s.' => 'Resource reclaimed by %s.',
      'Leases' => 'Leases',
      'Lease Queued' => 'Lease Queued',
      'Commands' => 'Commands',
      'Drydock Resource' => 'Drydock Resource',
      'If you disable this blueprint, Drydock will no longer use it to allocate new resources. Existing resources will not be affected.' => 'If you disable this blueprint, Drydock will no longer use it to allocate new resources. Existing resources will not be affected.',
      'The repository this revision is associated with ("%s") is not configured to support automation. Configure automation for the repository to enable revisions to be landed automatically.' => 'The repository this revision is associated with ("%s") is not configured to support automation. Configure automation for the repository to enable revisions to be landed automatically.',
      'Staging Unavailable' => 'Staging Unavailable',
      'Blueprint type "%s" is not valid. Valid types are: %s.' => 'Blueprint type "%s" is not valid. Valid types are: %s.',
      'Review the repository operation queue.' => 'Review the repository operation queue.',
      'Unable to Push' => 'Unable to Push',
      'This revision has already been closed. Only open, accepted revisions may land.' => 'This revision has already been closed. Only open, accepted revisions may land.',
      'Specified blueprint "%s" is not capable of satisfying the configured lease.' => 'Specified blueprint "%s" is not capable of satisfying the configured lease.',
      'Lease Released' => 'Lease Released',
      'No Authorizations' => 'No Authorizations',
      'PHID of the leased resource, if any.' => 'PHID of the leased resource, if any.',
      'Lease a resource.' => 'Lease a resource.',
      'Failed to acquire slot locks.' => 'Failed to acquire slot locks.',
      'Unable to acquire slot locks: %s.' => 'Unable to acquire slot locks: %s.',
      'Authorization state of this request.' => 'Authorization state of this request.',
      'Execute a query with identifiers before getting the identifier map.' => 'Execute a query with identifiers before getting the identifier map.',
      'No such operation "%s"!' => 'No such operation "%s"!',
      'No matching operations.' => 'No matching operations.',
      'Permanent failure while activating lease ("%s"): %s' => 'Permanent failure while activating lease ("%s"): %s',
      'Run a command on a leased resource.' => 'Run a command on a leased resource.',
      'When the diff was generated, the client was not able to determine which repository it belonged to, so the change was not pushed to staging. Changes must be pushed to staging before they can be landed from the web.' => 'When the diff was generated, the client was not able to determine which repository it belonged to, so the change was not pushed to staging. Changes must be pushed to staging before they can be landed from the web.',
      'PHID of the object which requested authorization.' => 'PHID of the object which requested authorization.',
      'Scheduled release of lease "%s".' => 'Scheduled release of lease "%s".',
      'Blueprint %d: %s' => 'Blueprint %s: %s',
      'Drydock Authorizations' => 'Drydock Authorizations',
      'Search authorizations for specific blueprints.' => 'Search authorizations for specific blueprints.',
      'Started this operation in a working copy.' => 'Started this operation in a working copy.',
      'Operation %d' => 'Operation %s',
      'This change could not be fetched from the remote staging area. It may not have been pushed, or may have been removed.' => 'This change could not be fetched from the remote staging area. It may not have been pushed, or may have been removed.',
      'Slot Locks' => 'Slot Locks',
      'No leases selected for release.' => 'No leases selected for release.',
      'Trying to allocate a resource from the wrong status. Status must be "%s", actually "%s".' => 'Trying to allocate a resource from the wrong status. Status must be "%s", actually "%s".',
      'No slot locks held.' => 'No slot locks held.',
      'Decline this authorization? The object will not be able to lease or allocate resources created by this blueprint.' => 'Decline this authorization? The object will not be able to lease or allocate resources created by this blueprint.',
      '<Unknown>' => '<Unknown>',
      'Can Create Blueprints' => 'Can Create Blueprints',
      'Waiting for reclamation of resources: %s.' => 'Waiting for reclamation of resources: %s.',
      'Already In Flight' => 'Already In Flight',
      'Lease ("%s") is in bad state ("%s"), expected "%s".' => 'Lease ("%s") is in bad state ("%s"), expected "%s".',
      'Lock Key' => 'Lock Key',
      'Leases can not be released after they are destroyed.' => 'Leases can not be released after they are destroyed.',
      'Waiting for daemons to activate leases...' => 'Waiting for daemons to activate leases...',
      'No Repository' => 'No Repository',
      'You do not have permission to view this log event.' => 'You do not have permission to view this log event.',
      'Waiting for activation of resources: %s.' => 'Waiting for activation of resources: %s.',
      'Create New Blueprint' => 'Create New Blueprint',
      'Resource ID to update.' => 'Resource ID to update.',
      'Allocate Software Resources' => 'Allocate Software Resources',
      'Lease ID to update.' => 'Lease ID to update.',
      'Activation Failed' => 'Activation Failed',
      'Already Declined' => 'Already Declined',
      'Apply transactions to create or edit a blueprint.' => 'Apply transactions to create or edit a blueprint.',
      'Release Resource' => 'Release Resource',
      'Approve this authorization? The object will be able to lease and allocate resources created by this blueprint.' => 'Approve this authorization? The object will be able to lease and allocate resources created by this blueprint.',
      'An authorization inherits the policies of the blueprint it authorizes access to.' => 'An authorization inherits the policies of the blueprint it authorizes access to.',
      'Forcefully releasing a lease may interfere with the operation of the lease holder and trigger destruction of the underlying resource. It can not be undone.' => 'Forcefully releasing a lease may interfere with the operation of the lease holder and trigger destruction of the underlying resource. It can not be undone.',
      'All Blueprints' => 'All Blueprints',
      'Lease destroyed.' => 'Lease destroyed.',
      'The PHID of the object that owns this lease.' => 'The PHID of the object that owns this lease.',
      'States' => 'States',
      'Lease activated.' => 'Lease activated.',
      'This resource has no active leases.' => 'This resource has no active leases.',
      'Dismiss' => 'Dismiss',
      'Lease queued for acquisition.' => 'Lease queued for acquisition.',
      'Resource "%s" could not be reclaimed.' => 'Resource "%s" could not be reclaimed.',
      'Lease a given number of identical resources.' => 'Lease a given number of identical resources.',
      'When this diff was generated, the client did not support staging areas for this version control system, so the change was not pushed to staging. Changes must be pushed to staging before they can be landed from the web. Updating the client may resolve this issue.' => 'When this diff was generated, the client did not support staging areas for this version control system, so the change was not pushed to staging. Changes must be pushed to staging before they can be landed from the web. Updating the client may resolve this issue.',
      'Blueprint "%s" could not be loaded. Try a blueprint ID or PHID.' => 'Blueprint "%s" could not be loaded. Try a blueprint ID or PHID.',
      'The push failed. This usually indicates that the change is breaking some rules or some custom commit hook has failed.' => 'The push failed. This usually indicates that the change is breaking some rules or some custom commit hook has failed.',
      'Maximum number of resources this blueprint can have active concurrently.' => 'Maximum number of resources this blueprint can have active concurrently.',
      'Lease ID to release.' => 'Lease ID to release.',
      'Authorization state of the requesting object.' => 'Authorization state of the requesting object.',
      'Repository Operation' => 'Repository Operation',
      'Can not issue a query with an empty identifier list.' => 'Can not issue a query with an empty identifier list.',
      'Operation encountered an error.' => 'Operation encountered an error.',
      'This authorization has already been declined.' => 'This authorization has already been declined.',
      'Drydock resource ("%s") has no Almanac binding PHID, so its binding can not be loaded.' => 'Drydock resource ("%s") has no Almanac binding PHID, so its binding can not be loaded.',
      'Manage leases on resources.' => 'Manage leases on resources.',
      'The type of a blueprint can not be changed once it has been created.' => 'The type of a blueprint can not be changed once it has been created.',
      'Trying to acquire an active lease on a pending resource. You can not immediately activate leases on resources which need time to start up.' => 'Trying to acquire an active lease on a pending resource. You can not immediately activate leases on resources which need time to start up.',
      'Invalid or unknown object ("%s") for land operation, expected Differential Revision.' => 'Invalid or unknown object ("%s") for land operation, expected Differential Revision.',
      'Reading JSON attributes from stdin...' => 'Reading JSON attributes from stdin...',
      'View and manage resources Drydock has built, like hosts.' => 'View and manage resources Drydock has built, like hosts.',
      'This revision is still under review. Only revisions which have been accepted may land.' => 'This revision is still under review. Only revisions which have been accepted may land.',
      'Provides: %s' => 'Provides: %s',
      'Lease Activated' => 'Lease Activated',
      'Specify a command to run.' => 'Specify a command to run.',
      'No resources selected for release.' => 'No resources selected for release.',
      '%s renamed this blueprint from %s to %s.' => '%s renamed this blueprint from %s to %s.',
      'No active Drydock blueprint exists which can ever allocate a resource for lease "%s".' => 'No active Drydock blueprint exists which can ever allocate a resource for lease "%s".',
      'Release Lease?' => 'Release Lease?',
      'Approve Authorization' => 'Approve Authorization',
      'Default Blueprint Edit Policy' => 'Default Blueprint Edit Policy',
      'Blueprint "%s" (of type "%s") is not properly implemented: it built a resource of type "%s" to satisfy a lease requesting a resource of type "%s".' => 'Blueprint "%s" (of type "%s") is not properly implemented: it built a resource of type "%s" to satisfy a lease requesting a resource of type "%s".',
      'Implementation' => 'Implementation',
      'Testing configuration for %s. This may take a moment if Drydock has to clone the repository for the first time.' => 'Testing configuration for %s. This may take a moment if Drydock has to clone the repository for the first time.',
      'Type a lease ID (exact match)...' => 'Type a lease ID (exact match)...',
      'Resource ID to release.' => 'Resource ID to release.',
      'Started Work' => 'Started Work',
      'Reclaimed Resources' => 'Reclaimed Resources',
      'Use "--lease" to specify a lease.' => 'Use "--lease" to specify a lease.',
      'Unable to acquire slot locks.' => 'Unable to acquire slot locks.',
      'Unable to load lease ("%s").' => 'Unable to load lease ("%s").',
      'Trying to activate a lease which has the wrong status: status must be "%s", actually "%s".' => 'Trying to activate a lease which has the wrong status: status must be "%s", actually "%s".',
      'You must choose a blueprint type.' => 'You must choose a blueprint type.',
      'Stderr' => 'Stderr',
      'Release a resource.' => 'Release a resource.',
      'Lease acquired.' => 'Lease acquired.',
      'Unexpected failure while destroying resource ("%s").' => 'Unexpected failure while destroying resource ("%s").',
      'WARNING: There are %s unapproved authorization(s)!' => 'WARNING: There are %s unapproved authorization(s)!',
      'Blueprint "%s" (of type "%s") is not properly implemented: %s must actually allocate the resource it returns.' => 'Blueprint "%s" (of type "%s") is not properly implemented: %s must actually allocate the resource it returns.',
      'No commands issued.' => 'No commands issued.',
      'Revision landed into %s.' => 'Revision landed into %s.',
      'Waiting %s second(s) for lease to activate.' => 'Waiting %s second(s) for lease to activate.',
      'Attribute "repositories.map" should be a map of repository specifications.' => 'Attribute "repositories.map" should be a map of repository specifications.',
      'Allocation Failed' => 'Allocation Failed',
      'Landing revision into %s on %s...' => 'Landing revision into %s on %s...',
      'Authorized' => 'Authorized',
      'A nautical adventure.' => 'A nautical adventure.',
      'All Leases' => 'All Leases',
      'Resource %s %s' => 'Resource %s %s',
      'Search for blueprints by name substring.' => 'Search for blueprints by name substring.',
      'Activated' => 'Activated',
      'Reclaimed resource %s.' => 'Reclaimed resource %s.',
      'Already Complete' => 'Already Complete',
      'Waiting to test configuration for %s...' => 'Waiting to test configuration for %s...',
      'Drydock Lease %d' => 'Drydock Lease %s',
      'Decline Authorization' => 'Decline Authorization',
      'Specify which resources you want to release. See "--help" for guidance.' => 'Specify which resources you want to release. See "--help" for guidance.',
      'Unable to load diff "%s".' => 'Unable to load diff "%s".',
      'Blueprint type.' => 'Blueprint type.',
      'Lease resources from a specific blueprint.' => 'Lease resources from a specific blueprint.',
      'Repository PHID "%s" does not exist.' => 'Repository PHID "%s" does not exist.',
      'This change did not merge cleanly. This usually indicates that the change is out of date and needs to be updated.' => 'This change did not merge cleanly. This usually indicates that the change is out of date and needs to be updated.',
      'Repository ("%s") has unsupported VCS ("%s").' => 'Repository ("%s") has unsupported VCS ("%s").',
      'Drydock Logs' => 'Drydock Logs',
      'Authorizations' => 'Authorizations',
      'Updating resource "%s".' => 'Updating resource "%s".',
      'Repository Unsupported' => 'Repository Unsupported',
      'Type of resource being leased.' => 'Type of resource being leased.',
      'Resources can not be released after they are destroyed.' => 'Resources can not be released after they are destroyed.',
      '%s enabled %s.' => '%s enabled %s.',
      'Only private key credentials are supported.' => 'Only private key credentials are supported.',
      'New Blueprint' => 'New Blueprint',
      'Trying to activate a lease on a pending resource.' => 'Trying to activate a lease on a pending resource.',
      'Blueprint names can be no longer than %s characters.' => 'Blueprint names can be no longer than %s characters.',
      'Working copy lease has invalid attribute "%s".' => 'Working copy lease has invalid attribute "%s".',
      'Permanent failure while activating resource ("%s"): %s' => 'Permanent failure while activating resource ("%s"): %s',
      'Lease' => 'Lease',
      'Lease Not Releasable' => 'Lease Not Releasable',
      'Specify one or more lease IDs to update with "%s".' => 'Specify one or more lease IDs to update with "%s".',
      'The name of this blueprint.' => 'The name of this blueprint.',
      'Not Activated' => 'Not Activated',
      'Some of the Almanac Services defined by this blueprint could not be loaded. They may be invalid, no longer exist, or be of the wrong type: %s.' => 'Some of the Almanac Services defined by this blueprint could not be loaded. They may be invalid, no longer exist, or be of the wrong type: %s.',
      '%s created this blueprint.' => '%s created this blueprint.',
      'JSON file with lease attributes. Use "-" to read attributes from stdin.' => 'JSON file with lease attributes. Use "-" to read attributes from stdin.',
      'Update a lease.' => 'Update a lease.',
      'Unable to load Almanac binding ("%s") for resource ("%s").' => 'Unable to load Almanac binding ("%s") for resource ("%s").',
      'This authorization has already been approved.' => 'This authorization has already been approved.',
      'Blueprint %d' => 'Blueprint %s',
      'Blueprint "%s" (of type "%s") is not properly implemented: it returned from "%s" without activating a lease.' => 'Blueprint "%s" (of type "%s") is not properly implemented: it returned from "%s" without activating a lease.',
      'Operation encountered an error while performing repository operations.' => 'Operation encountered an error while performing repository operations.',
      'If you enable this blueprint, Drydock will start using it to allocate new resources.' => 'If you enable this blueprint, Drydock will start using it to allocate new resources.',
      'Blueprint failed to allocate a resource after claiming it would be able to: [%s] %s' => 'Blueprint failed to allocate a resource after claiming it would be able to: [%s] %s',
      'Requested' => 'Requested',
      'Command to execute.' => 'Command to execute.',
      'Releasing a resource releases all leases and destroys the resource. It can not be undone.' => 'Releasing a resource releases all leases and destroys the resource. It can not be undone.',
      '%s disabled this blueprint.' => '%s disabled this blueprint.',
      'Trying to activate a resource which has not yet been persisted.' => 'Trying to activate a resource which has not yet been persisted.',
      'Blueprint type "%s" is unrecognized. Valid types are: %s.' => 'Blueprint type "%s" is unrecognized. Valid types are: %s.',
      'No such resource "%s"!' => 'No such resource "%s"!',
      'autocommitter' => 'autocommitter',
      'Waiting for Activation' => 'Waiting for Activation',
      'Blueprints must have a name.' => 'Blueprints must have a name.',
      'Information about resource status.' => 'Information about resource status.',
      'Already Authorized' => 'Already Authorized',
      'Unable to build resource interface of type "%s".' => 'Unable to build resource interface of type "%s".',
      'Lease Destroyed' => 'Lease Destroyed',
      'Active Leases' => 'Active Leases',
      'Resources inherit the policies of their blueprints.' => 'Resources inherit the policies of their blueprints.',
      'Active Blueprints' => 'Active Blueprints',
      'When creating a blueprint, set the type.' => 'When creating a blueprint, set the type.',
      'To view log details, you must be able to view all associated blueprints, resources, leases, and repository operations.' => 'To view log details, you must be able to view all associated blueprints, resources, leases, and repository operations.',
      'Raw Diff Source' => 'Raw Diff Source',
      'Edit Drydock Blueprint Configurations' => 'Edit Drydock Blueprint Configurations',
      'Resource activation failed: [%s] %s' => 'Resource activation failed: [%s] %s',
      'PHID of the blueprint this request was made for.' => 'PHID of the blueprint this request was made for.',
      'Release all leases. Dangerous!' => 'Release all leases. Dangerous!',
      'Blueprint "%s" is specified more than once (as "%s" and "%s").' => 'Blueprint "%s" is specified more than once (as "%s" and "%s").',
      'Unable to acquire lease "%s" on any resource.' => 'Unable to acquire lease "%s" on any resource.',
      'Updating lease "%s".' => 'Updating lease "%s".',
      'Lease has already been destroyed!' => 'Lease has already been destroyed!',
      'When this diff was generated, the server was running an older version of the software which did not support staging areas for this version control system, so the change was not pushed to staging. Changes must be pushed to staging before they can be landed from the web.' => 'When this diff was generated, the server was running an older version of the software which did not support staging areas for this version control system, so the change was not pushed to staging. Changes must be pushed to staging before they can be landed from the web.',
      'Leases queued for activation:' => 'Leases queued for activation:',
      'The blueprint which generated this resource.' => 'The blueprint which generated this resource.',
      'Create Blueprint' => 'Create Blueprint',
      'Retrieve information about Drydock authorizations.' => 'Retrieve information about Drydock authorizations.',
      'Repository Unconfigured' => 'Repository Unconfigured',
      'Only new leases may be queued for activation!' => 'Only new leases may be queued for activation!',
      'This blueprint ("%s") does not define any Almanac Service PHIDs.' => 'This blueprint ("%s") does not define any Almanac Service PHIDs.',
      'The diff author used the %s flag to skip pushing this change to staging. Changes must be pushed to staging before they can be landed from the web.' => 'The diff author used the %s flag to skip pushing this change to staging. Changes must be pushed to staging before they can be landed from the web.',
      'No Resource' => 'No Resource',
      'Trying to queue a lease for activation without any allowed Blueprints. Use "%s" to specify allowed blueprints. The authorizing object must be approved to use the allowed blueprints.' => 'Trying to queue a lease for activation without any allowed Blueprints. Use "%s" to specify allowed blueprints. The authorizing object must be approved to use the allowed blueprints.',
      'Resource: %s' => 'Resource: %s',
      'Lease Acquired' => 'Lease Acquired',
      'Resource Not Releasable' => 'Resource Not Releasable',
      'You must select a blueprint type when creating a blueprint.' => 'You must select a blueprint type when creating a blueprint.',
      'The type of resource this blueprint provides.' => 'The type of resource this blueprint provides.',
      'Select which leases you want to release. See "--help" for guidance.' => 'Select which leases you want to release. See "--help" for guidance.',
      'Reacquiring Resource' => 'Reacquiring Resource',
      'Revision Abandoned' => 'Revision Abandoned',
      'Resource "%s" does not exist.' => 'Resource "%s" does not exist.',
      'This revision has already landed.' => 'This revision has already landed.',
      'Activated on Acquisition' => 'Activated on Acquisition',
      'Release Lease' => 'Release Lease',
      'This engine is used to edit Drydock blueprints.' => 'This engine is used to edit Drydock blueprints.',
      'Epoch at which this lease expires, if any.' => 'Epoch at which this lease expires, if any.',
      'Type a blueprint name...' => 'Type a blueprint name...',
      'Reclaim unused resources.' => 'Reclaim unused resources.',
      'Waiting For Resource' => 'Waiting For Resource',
      'Revision Not Accepted' => 'Revision Not Accepted',
      'Working copy lease is missing required attribute "%s".' => 'Working copy lease is missing required attribute "%s".',
      'Trying to activate lease ("%s") on a resource ("%s") in the wrong status ("%s").' => 'Trying to activate lease ("%s") on a resource ("%s") in the wrong status ("%s").',
      'No such lease "%s"!' => 'No such lease "%s"!',
      'Drydock Resource %d' => 'Drydock Resource %s',
      'No Repository Automation' => 'No Repository Automation',
      'Specify a resource type with "--type".' => 'Specify a resource type with "--type".',
      'Trying to acquire a lease on a resource which is in the wrong state: status must be "%s", actually "%s".' => 'Trying to acquire a lease on a resource which is in the wrong state: status must be "%s", actually "%s".',
      'Blueprints' => 'Blueprints',
      'Lease acquired a resource but failed to activate; acquisition will be retried: [%s] %s' => 'Lease acquired a resource but failed to activate; acquisition will be retried: [%s] %s',
      'Search leases by owner.' => 'Search leases by owner.',
      'Almanac Hosts' => 'Almanac Hosts',
      'Repository Operations' => 'Repository Operations',
      'Leases inherit policies from the resources they lease.' => 'Leases inherit policies from the resources they lease.',
      'Drydock User Guide' => 'Drydock User Guide',
      'No known blueprint class can ever allocate the specified lease. Check that the resource type is spelled correctly.' => 'No known blueprint class can ever allocate the specified lease. Check that the resource type is spelled correctly.',
      'Waiting %s second(s) for resource to activate.' => 'Waiting %s second(s) for resource to activate.',
      'When creating a new Drydock blueprint via the Conduit API, you must provide a "type" transaction to select a type.' => 'When creating a new Drydock blueprint via the Conduit API, you must provide a "type" transaction to select a type.',
      'Trying to queue a lease for activation without an authorizing object. Use "%s" to specify the PHID of the authorizing object. The authorizing object must be approved to use the allowed blueprints.' => 'Trying to queue a lease for activation without an authorizing object. Use "%s" to specify the PHID of the authorizing object. The authorizing object must be approved to use the allowed blueprints.',
      'Set the blueprint type.' => 'Set the blueprint type.',
      'Lease ID.' => 'Lease ID.',
      'Unexpected failure while destroying lease ("%s").' => 'Unexpected failure while destroying lease ("%s").',
      'No Blueprints' => 'No Blueprints',
      'You do not have permission to push to the repository this revision is associated with ("%s"), so you can not land it.' => 'You do not have permission to push to the repository this revision is associated with ("%s"), so you can not land it.',
      'Waiting for available resources from: %s.' => 'Waiting for available resources from: %s.',
      'Active Resources' => 'Active Resources',
      'Unable to allocate any binding as a resource.' => 'Unable to allocate any binding as a resource.',
    );
  }

}
