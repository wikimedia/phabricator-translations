<?php

final class PhabricatorPhidEn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en';
  }

  protected function getTranslations() {
    return array(
      'Retrieve information about an arbitrary PHID.' => 'Retrieve information about an arbitrary PHID.',
      'Requested handle "%s" was not loaded.' => 'Requested handle "%s" was not loaded.',
      'Restricted %s' => 'Restricted %s',
      'Trying to mutate a %s, but this is not permitted; handle lists are immutable.' => 'Trying to mutate a %s, but this is not permitted; handle lists are immutable.',
      'Attempting to test capability "%s" for handle of type "%s", but this capability has not been attached.' => 'Attempting to test capability "%s" for handle of type "%s", but this capability has not been attached.',
      'Object (of class "%s") has no PHID, so handles can not interact with capabilities for it.' => 'Object (of class "%s") has no PHID, so handles can not interact with capabilities for it.',
      '%s class "%s" has an invalid %s property. PHID constants must be a four character uppercase string.' => '%s class "%s" has an invalid %s property. PHID constants must be a four character uppercase string.',
      'Attempting to load PHID "%s", but it was not requested by any handle list.' => 'Attempting to load PHID "%s", but it was not requested by any handle list.',
      'The objects you have listed include objects of the wrong type (%s).' => 'The objects you have listed include objects of the wrong type (%s).',
      'Application Email' => 'Application Email',
      'Look up objects by name.' => 'Look up objects by name.',
      'Trying to render a handle which does not exist!' => 'Trying to render a handle which does not exist!',
      'Retrieve information about arbitrary PHIDs.' => 'Retrieve information about arbitrary PHIDs.',
      'Unknown Object (%s)' => 'Unknown Object (%s)',
      'The objects you have listed include objects which do not exist (%s).' => 'The objects you have listed include objects which do not exist (%s).',
      'Trying to create a new sublist of an existing handle list, but PHID "%s" does not appear in the parent list.' => 'Trying to create a new sublist of an existing handle list, but PHID "%s" does not appear in the parent list.',
      'Attempting to attach capability ("%s") for object ("%s") to handle, but this handle (of type "%s") can not have capabilities.' => 'Attempting to attach capability ("%s") for object ("%s") to handle, but this handle (of type "%s") can not have capabilities.',
      'Replaced by \'phid.query\'.' => 'Replaced by \'phid.query\'.',
      'The objects you have listed include objects of the wrong type (%s) and objects which do not exist (%s).' => 'The objects you have listed include objects of the wrong type (%s) and objects which do not exist (%s).',
      'No such object exists.' => 'No such object exists.',
      'Can not generate PHID with no type.' => 'Can not generate PHID with no type.',
    );
  }

}
