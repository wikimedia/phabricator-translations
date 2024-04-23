<?php

final class PhabricatorBadgesSv
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sv';
  }

  protected function getTranslations() {
    return array(
      'New badge award recipients.' => 'Nya mottagare för emblempriser.',
      '%s renamed %s badge %s to %s.' => '%s bytte namn på emblemet %s från %s till %s.',
      'Recipient PHID "%s" has not been awarded.' => 'Mottagaren med PHID "%s" har inte tilldelats.',
      '%s awarded this badge to %s recipient(s): %s.' => '%s tilldelade detta emblem till %s mottagare: %s.',
      'Already awarded' => 'Redan tilldelad',
      '%s awarded %s to %s recipient(s): %s.' => '%s tilldelade %s till %s mottagare: %s.',
      'Badges Award' => 'Emblempris',
      'Badges let you award and distinguish special users throughout your install.' => 'Emblem låter dig tilldela och särskilja speciella användare i din installation.',
      '%s has already been awarded this badge.' => '%s har redan tilldelats denna emblem.',
      'Award' => 'Pris',
      'Awarded by %s on %s' => 'Tilldelades av %s den %s',
      'Revoke badge award recipients.' => 'Återkalla mottagare av emblempris.',
      'Award Recipients' => 'Prismottagare',
    );
  }

}
