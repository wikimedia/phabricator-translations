<?php

final class PhabricatorCelerityEn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en';
  }

  protected function getTranslations() {
    return array(
      'Use Standard Colors' => 'Use Standard Colors',
      'No resource source exists with name "%s"!' => 'No resource source exists with name "%s"!',
      'Unable to render resource "%s", which has unknown type "%s".' => 'Unable to render resource "%s", which has unknown type "%s".',
      'Writing map "%s".' => 'Writing map "%s".',
      'Use High Contrast Colors' => 'Use High Contrast Colors',
      'Dark Mode (Experimental)' => 'Dark Mode (Experimental)',
      'Use Larger Font Size' => 'Use Larger Font Size',
      'Found %d binary resources.' => 'Found %s binary resources.',
      'No resource with symbol "%s" exists in source "%s"!' => 'No resource with symbol "%s" exists in source "%s"!',
      'Celerity' => 'Celerity',
      'Package specification for "%s" includes "%s", but that symbol is not %s by any resource.' => 'Package specification for "%s" includes "%s", but that symbol is not %s by any resource.',
      'Attempting to resolve unknown resource, "%s".' => 'Attempting to resolve unknown resource, "%s".',
      'Rebuilt "%s" syntax CSS.' => 'Rebuilt "%s" syntax CSS.',
      'CSS file \'%s\' has unknown variable \'%s\'.' => 'CSS file \'%s\' has unknown variable \'%s\'.',
      'Literal %s is not allowed inside inline script.' => 'Literal %s is not allowed inside inline script.',
      'Use Red/Green (Deuteranopia) Colors' => 'Use Red/Green (Deuteranopia) Colors',
      'Resource "%s" must %s at most one Celerity target.' => 'Resource "%s" must %s at most one Celerity target.',
      'Cycle detected in resource graph: %s' => 'Cycle detected in resource graph: %s',
      'Rebuild syntax highlighting CSS.' => 'Rebuild syntax highlighting CSS.',
      'Resource source defines two resources with the same name, "%s". One is defined in the "%s" map; the other in the "%s" map. Each resource must have a unique name.' => 'Resource source defines two resources with the same name, "%s". One is defined in the "%s" map; the other in the "%s" map. Each resource must have a unique name.',
      'Resource "%s" does not have a header doc comment. Encode dependency data in a header docblock.' => 'Resource "%s" does not have a header doc comment. Encode dependency data in a header docblock.',
      'Package specification for "%s" includes resources of multiple types (%s, %s). Each package may only contain one type of resource.' => 'Package specification for "%s" includes resources of multiple types (%s, %s). Each package may only contain one type of resource.',
      'Rebuilding %d resource source(s).' => 'Rebuilding %s resource source(s).',
      'Found %d text resources.' => 'Found %s text resources.',
      'Expected file \'%s\' in \'%s\' to be a sprite source ending in \'%s\'.' => 'Expected file \'%s\' in \'%s\' to be a sprite source ending in \'%s\'.',
      'Only static resources may be served.' => 'Only static resources may be served.',
      'Rebuilding resource source "%s" (%s)...' => 'Rebuilding resource source "%s" (%s)...',
      'Resources name "%s" is not valid; it must contain only lowercase latin letters and digits.' => 'Resources name "%s" is not valid; it must contain only lowercase latin letters and digits.',
      'Attempting to add more metadata after metadata has been locked.' => 'Attempting to add more metadata after metadata has been locked.',
      'Rebuild static resource maps.' => 'Rebuild static resource maps.',
      'Found %d packages.' => 'Found %s packages.',
    );
  }

}
