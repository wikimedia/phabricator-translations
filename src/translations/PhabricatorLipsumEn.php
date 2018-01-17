<?php

final class PhabricatorLipsumEn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en';
  }

  protected function getTranslations() {
    return array(
      'Argument "%s" does not match the name of any generators.' => 'Argument "%s" does not match the name of any generators.',
      'A lipsum generator is registered with key "%s". This key is reserved.' => 'A lipsum generator is registered with key "%s". This key is reserved.',
      'Failed to load a random user. You may need to generate more test users first.' => 'Failed to load a random user. You may need to generate more test users first.',
      'Generate objects without prompting for confirmation.' => 'Generate objects without prompting for confirmation.',
      'LIPSUM' => 'LIPSUM',
      'Unable to load symbol %s: this class does not exist.' => 'Unable to load symbol %s: this class does not exist.',
      'Generator ("%s") was unable to generate an object.' => 'Generator ("%s") was unable to generate an object.',
      'OOPS' => 'OOPS',
      'This command generates synthetic test data, including user accounts. It is intended for use in development environments so you can test features more easily. There is no easy way to delete this data or undo the effects of this command. If you run it in a production environment, it will pollute your data with large amounts of meaningless garbage that you can not get rid of.' => 'This command generates synthetic test data, including user accounts. It is intended for use in development environments so you can test features more easily. There is no easy way to delete this data or undo the effects of this command. If you run it in a production environment, it will pollute your data with large amounts of meaningless garbage that you can not get rid of.',
      'Generate synthetic test objects.' => 'Generate synthetic test objects.',
      'class' => 'class',
      'Generating synthetic test objects forever. Use ^C to stop when satisfied.' => 'Generating synthetic test objects forever. Use ^C to stop when satisfied.',
      'Generated "%s": %s' => 'Generated "%s": %s',
      'Choose which type or types of test data you want to generate, or select "%s".' => 'Choose which type or types of test data you want to generate, or select "%s".',
      'Generate objects as quickly as possible.' => 'Generate objects as quickly as possible.',
      'Argument "%s" is ambiguous, and matches multiple generators: %s.' => 'Argument "%s" is ambiguous, and matches multiple generators: %s.',
      'lipsum is a development and testing tool and may only be run on installs in developer mode. Enable "%s" in your configuration to enable lipsum.' => 'lipsum is a development and testing tool and may only be run on installs in developer mode. Enable "%s" in your configuration to enable lipsum.',
      'Selected generators: %s.' => 'Selected generators: %s.',
      'GENERATORS' => 'GENERATORS',
      'Are you sure you want to generate piles of garbage?' => 'Are you sure you want to generate piles of garbage?',
    );
  }

}
