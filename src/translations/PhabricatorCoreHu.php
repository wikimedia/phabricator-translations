<?php

final class PhabricatorCoreHu
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'hu';
  }

  protected function getTranslations() {
    return array(
      'Assigned to Me' => 'Én vagyok a felelőse',
      'Parents' => 'Szülők',
      'Simple Subtypes' => 'Egyszerű altípusok',
      'Browse Subtypes' => 'Altípusok böngészése',
      'Description' => 'Leírás',
      'DOCUMENT DETAIL' => 'DOKUMENTUM RÉSZLETEI',
      'Edit Related Tasks' => 'Kapcsolódó feladatok szerkesztése',
      'Assigned: %s' => 'Felelős: %s',
      'Subscribers' => 'Feliratkozók',
      'Default' => 'Alapértelmezett',
      'Assigned Tasks' => 'Feladatok felelőssel',
      'Find results which are not assigned.' => 'Feladatok felelős nélkül.',
      'Direct Parent' => 'Közvetlen szülő',
      '%s updated the description.' => '%s frissítette a leírást.',
      'Subtype' => 'Altípus',
      'Settings' => 'Beállítások',
      'Assigned To' => 'Fefelős',
      'Edit Related Commits' => 'Kapcsolódó commitok szerkesztése',
      'Subtypes' => 'Altípusok',
      'Edit Related Revisions' => 'Kapcsolódó változatok szerkesztése',
      'Save Related Tasks' => 'Kapcsolódó feladatok mentése',
    );
  }

}
