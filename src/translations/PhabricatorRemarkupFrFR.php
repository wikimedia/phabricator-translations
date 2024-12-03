<?php

final class PhabricatorRemarkupFrFR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr_FR';
  }

  protected function getTranslations() {
    return array(
      'Invalid markup engine.' => 'Moteur de marquage invalide.',
      'Process text through remarkup.' => 'Traiter le texte via remarkup.',
      'Content may not be empty.' => 'Le contenu ne peut pas être vide.',
    );
  }

}
