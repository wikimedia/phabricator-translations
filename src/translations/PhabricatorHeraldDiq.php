<?php

final class PhabricatorHeraldDiq
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'diq';
  }

  protected function getTranslations() {
    return array(
      'Prevent' => 'Verkew',
      'exists' => 'esto',
      'Conditions' => 'Şerti',
      'is myself' => 'be xo',
      'Object Transcript' => 'Transkriptê Obceyi',
      'Herald Rules' => 'Şertê Heraldi',
      'Create Herald Rule' => 'Şertê Heraldi Vırazê',
      'Affects: %s' => 'Tesiri: %s',
      'Transcript %s' => 'Transkriptê %s',
      'Content Type' => 'Tewrê zerreki',
      'Utility' => 'Fayde',
      'No rules found.' => 'Şert nêvineya',
      'Firehose' => 'Xortımê şewateyi',
      'Hook Error' => 'Xetay Qencay',
      'Dry Run' => 'Wışk Gureynayış',
    );
  }

}
