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
  'Mentioning and Embedding objects' => 'Objecten noemen en insluiten',
  'Specialized Syntax' => 'Gespecialiseerde syntaxis',
  'Remarkup Reference' => 'Remarkup-referentie',
  'Input' => 'Invoer',
  'Contents must be a list of strings.' => 'Inhoud moet een lijst met tekenreeksen zijn.',
  'Reference' => 'Referentie',
);
  }

}
