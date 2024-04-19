<?php

final class PhabricatorProjectNl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'nl';
  }

  protected function getTranslations() {
    return array(
      'Month' => 'Maand',
      '%d month(s)' => '%s maand(en)',
      'Members' => 'Leden',
      'Add project tags' => 'Projectetiketten toevoegen',
      'members of any project' => 'leden van welk project dan ook',
      'Project tags' => 'Projectetiketten',
      'Tagged with Project' => 'Aan project geëtiketteerd.',
      'members of all projects' => 'leden van alle projecten',
    );
  }

}
