<?php

final class PhabricatorRemarkupFrFR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr_FR';
  }

  protected function getTranslations() {
    return array(
      'Process text through remarkup in Phabricator context.' => 'Analyser le texte en refaisant un marquage dans le contexte de Phabricator.',
      'Invalid markup engine.' => 'Moteur de marquage invalide.',
      'Content may not be empty.' => 'Le contenu ne peut pas être vide.',
    );
  }

}
