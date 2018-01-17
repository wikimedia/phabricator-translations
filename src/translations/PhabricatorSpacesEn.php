<?php

final class PhabricatorSpacesEn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en';
  }

  protected function getTranslations() {
    return array(
      '%s updated the space description for %s.' => '%s updated the space description for %s.',
      '(This error generally indicates that %s is enabled, but there are no spaces with a "%s" view policy. These settings are contradictory and imply a misconfiguration.)' => '(This error generally indicates that %s is enabled, but there are no spaces with a "%s" view policy. These settings are contradictory and imply a misconfiguration.)',
      'Spaces User Guide' => 'Spaces User Guide',
      'Hide Active Spaces' => 'Hide Active Spaces',
      '%s updated the space description.' => '%s updated the space description.',
      '%s archived space %s.' => '%s archived space %s.',
      'PHID of the policy space this object is part of.' => 'PHID of the policy space this object is part of.',
      'Default edit policy for newly created spaces.' => 'Default edit policy for newly created spaces.',
      'Only the first space created can be the default space, and it must remain the default space evermore.' => 'Only the first space created can be the default space, and it must remain the default space evermore.',
      'Search for objects in certain spaces.' => 'Search for objects in certain spaces.',
      'Activate Space: %s' => 'Activate Space: %s',
      'Support for Spaces' => 'Support for Spaces',
      '%s renamed space %s from %s to %s.' => '%s renamed space %s from %s to %s.',
      'Create a Space' => 'Create a Space',
      'Alternate Space' => 'Alternate Space',
      '%s activated this space.' => '%s activated this space.',
      'Archive Space: %s' => 'Archive Space: %s',
      'Spaces must have a name.' => 'Spaces must have a name.',
      'Existing objects in this Space will be hidden from query results by default.' => 'Existing objects in this Space will be hidden from query results by default.',
      '%s made this the default space.' => '%s made this the default space.',
      '%s archived this space.' => '%s archived this space.',
      'Type a space name...' => 'Type a space name...',
      'Existing objects will no longer be hidden from query results.' => 'Existing objects will no longer be hidden from query results.',
      'You do not have permission to create spaces.' => 'You do not have permission to create spaces.',
      'Ask someone to give you access to a space so you can view and create objects.' => 'Ask someone to give you access to a space so you can view and create objects.',
      'Default Space' => 'Default Space',
      'Archive Space' => 'Archive Space',
      'CHANGES TO SPACE DESCRIPTION' => 'CHANGES TO SPACE DESCRIPTION',
      'Default view policy for newly created spaces.' => 'Default view policy for newly created spaces.',
      'Spaces' => 'Spaces',
      'Drift Aimlessly' => 'Drift Aimlessly',
      'Browse Spaces' => 'Browse Spaces',
      'Can Create Spaces' => 'Can Create Spaces',
      'All Spaces' => 'All Spaces',
      'Control access to groups of objects.' => 'Control access to groups of objects.',
      'If you activate this space, you will be able to create objects inside it again.' => 'If you activate this space, you will be able to create objects inside it again.',
      'Create Space' => 'Create Space',
      'Log in, or ask someone to create a public space which logged out users are permitted to access.' => 'Log in, or ask someone to create a public space which logged out users are permitted to access.',
      'Policy Namespaces' => 'Policy Namespaces',
      '%s activated space %s.' => '%s activated space %s.',
      '%s created this space.' => '%s created this space.',
      'Space %s: %s' => 'Space %s: %s',
      'No Access to Spaces' => 'No Access to Spaces',
      '%s renamed this space from %s to %s.' => '%s renamed this space from %s to %s.',
      'No spaces found.' => 'No spaces found.',
      'This install uses spaces to organize objects, but logged out users do not have access to any spaces.' => 'This install uses spaces to organize objects, but logged out users do not have access to any spaces.',
      'Edit Space' => 'Edit Space',
      'Test Space' => 'Test Space',
      '%s made space %s the default space.' => '%s made space %s the default space.',
      'NOTE: You are creating the **default space**. All existing objects will be put into this space. You must create a default space before you can create other spaces.' => 'NOTE: You are creating the **default space**. All existing objects will be put into this space. You must create a default space before you can create other spaces.',
      'Activate Space' => 'Activate Space',
      'PhabricatorSpacesApplication' => 'PhabricatorSpacesApplication',
      'Show Only Active Spaces' => 'Show Only Active Spaces',
      'Policy namespaces to segment object visibility throughout your instance.' => 'Policy namespaces to segment object visibility throughout your instance.',
      'If you archive this Space, you will no longer be able to create new objects inside it.' => 'If you archive this Space, you will no longer be able to create new objects inside it.',
      '%s created space %s.' => '%s created space %s.',
      'Default Space #2' => 'Default Space #2',
      'Active Spaces' => 'Active Spaces',
      'This install uses spaces to organize objects, but your account does not have access to any spaces.' => 'This install uses spaces to organize objects, but your account does not have access to any spaces.',
    );
  }

}
