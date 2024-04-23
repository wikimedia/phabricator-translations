<?php

final class PhabricatorRepositoryNl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'nl';
  }

  protected function getTranslations() {
    return array(
      'Enormous' => 'Enorm',
      'Rewrite' => 'Herschrijven',
      '%s changed the assigned user for this identity from %s to %s.' => '%s heeft voor deze identiteit de toegewezen gebruiker gewijzigd van %s naar %s.',
      '%s enabled protection against enormous changes.' => '%s heeft bescherming tegen enorme wijzigingen ingeschakeld.',
      'Dangerous' => 'Gevaarlijk',
      'HTTP' => 'HTTP',
      'HTTPS' => 'HTTPS',
    );
  }

}
