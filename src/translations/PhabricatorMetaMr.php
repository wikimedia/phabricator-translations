<?php

final class PhabricatorMetaMr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'mr';
  }

  protected function getTranslations() {
    return array(
      'Information' => 'माहिती',
      'This application is required and cannot be uninstalled.' => 'ही योजनावली काढून टाकणे शक्य नाही. कारण घडवित्याच्या सुचालनासाठी तीची आवश्यकता आहे.',
    );
  }

}
