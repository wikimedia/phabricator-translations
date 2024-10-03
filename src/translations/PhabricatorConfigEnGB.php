<?php

final class PhabricatorConfigEnGB
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en_GB';
  }

  protected function getTranslations() {
    return array(
      'Customize the logo and wordmark text in the header.' => 'Customise the logo and wordmark text in the header.',
      'Run the storage upgrade script to setup databases (host "%s" has not been initialized).' => 'Run the storage upgrade script to setup databases (host "%s" has not been initialised).',
      'Unrecognized verb: %s' => 'Unrecognised verb: %s',
      'Configure the UI, including colors.' => 'Configure the UI, including colours.',
      'This option has been removed, you can use Dashboards to provide homepage customization. See T11533 for more details.' => 'This option has been removed, you can use Dashboards to provide homepage customisation. See T11533 for more details.',
      'Customize the logo image and text which appears in the main site header:
      - **Logo Image**: Upload a new 80 x 80px image to replace the logo in the site header.
      - **Wordmark**: Choose new text to display next to the logo. By default, the header displays //%s//.
    ' => 'Customise the logo image and text which appears in the main site header:
      - **Logo Image**: Upload a new 80 x 80px image to replace the logo in the site header.
      - **Wordmark**: Choose new text to display next to the logo. By default, the header displays //%s//.',
      'The configuration option "%s" is not recognized. It may be misspelled, or it might have existed in an older version of the software. It has no effect, and should be corrected or deleted.' => 'The configuration option \'%s\' is not recognised. It may be misspelled, or it might have existed in an older version of the software. It has no effect, and should be corrected or deleted.',
      'Unexpected \'%s\' Behavior' => 'Unexpected \'%s\' Behaviour',
      'Synchronized' => 'Synchronised',
      'Unsynchronized' => 'Unsynchronised',
      'This option is not recognized. It may be misspelled.' => 'This option is not recognised. It may be misspelled.',
      'Per-application mail subject prefix customization is no longer directly supported. Prefixes and other strings may be customized with "translation.override".' => 'Per-application mail subject prefix customisation is no longer directly supported. Prefixes and other strings may be customized with "translation.override".',
      'Customized settings for applications.' => 'Customised settings for applications.',
      'Sets the default color scheme.' => 'Sets the default colour scheme.',
      'Customizes retention policies for garbage collectors.' => 'Customises retention policies for garbage collectors.',
    );
  }

}
