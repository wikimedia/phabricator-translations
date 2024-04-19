<?php

final class PhabricatorSearchEnGB
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en_GB';
  }

  protected function getTranslations() {
    return array(
      'No services need initialization.' => 'No services need initialisation.',
      'Service initialization complete.' => 'Service initialisation complete.',
      'Initialize or repair a search service.' => 'Initialise or repair a search service.',
      'Customize Query: %s' => 'Customise Query: %s',
      'Initializing search service "%s".' => 'Initialising search service "%s".',
      'You can tell how warm a cat is by examining the coloration: cooler areas are darker.' => 'You can tell how warm a cat is by examining the colouration: cooler areas are darker.',
    );
  }

}
