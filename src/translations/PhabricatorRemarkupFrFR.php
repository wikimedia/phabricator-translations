<?php

final class PhabricatorRemarkupFrFR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr_FR';
  }

  protected function getTranslations() {
    return array(
      'Invalid markup engine.' => 'Moteur de marquage invalide.',
      'Process text through remarkup.' => 'Analyser le texte en refaisant un marquage dans le contexte de Phabricator.',
      'Content may not be empty.' => 'Le contenu ne peut pas être vide.',
    );
  }

}
