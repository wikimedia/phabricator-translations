<?php

final class PhabricatorRemarkupNl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'nl';
  }

  protected function getTranslations() {
    return array(
      'Invalid markup engine.' => 'Ongeldige markup-engine.',
      'Process text through remarkup.' => 'Tekst verwerken door opnieuw op te maken.',
      'Content may not be empty.' => 'De inhoud mag niet leeg zijn.',
    );
  }

}
