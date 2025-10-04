<?php

final class PhabricatorRemarkupNl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'nl';
  }

  protected function getTranslations() {
    return array(
      'Invalid markup engine.' => 'Onjuiste markup-engine.',
      'Process text through remarkup.' => 'Tekst als Remarkup verwerken.',
      'Content may not be empty.' => 'De inhoud mag niet leeg zijn.',
    );
  }

}
