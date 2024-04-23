<?php

final class PhabricatorDoorkeeperDga
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'dga';
  }

  protected function getTranslations() {
    return array(
      'When %s creates tasks in Asana, it can add the tasks to Asana projects based on which application the corresponding object in %s comes from. For example, you can add code reviews in Asana to a "Differential" project.
    NOTE: This feature is new and experimental.' => 'A %s maaloo toma a Adana, o naŋ toɔŋ eŋ la a toma a Adana tombulo yineŋ a teɛre teroo ana a boma naŋ kyaare a %s naŋ yi wa. Aseŋ, fo naŋ baŋ eŋ la bammo leɛ kaabo a Asana ko a \'\'tɛɛtɛɛ sere\'\' tombulo.
    Kyɛlle kyɛ: A yɛlɛ ama e la saama aneŋ ekaa nyɛ',
      '⚠ DO NOT EDIT THIS TASK ⚠
    ☠ Your changes will not be reflected in %s.
    ☠ Your changes will be destroyed the next time state is synchronized.' => '⚠ TA LEƐ MAALE A TOMA EŊ ⚠
    ☠ A fo leɛroo koŋ kpɛ a  %s.
    ☠ A fo leɛroo naŋ saaŋ la a puori wagere naŋ saaŋkoronase la.',
      'This software is running in silent mode.' => 'A saseɛ ŋa tona la neŋ beɛl beɛl lɛ.',
    );
  }

}
