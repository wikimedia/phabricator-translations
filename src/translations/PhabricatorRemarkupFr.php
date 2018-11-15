<?php

final class PhabricatorRemarkupFr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr';
  }

  protected function getTranslations() {
    return array(
      'Process text through remarkup in Phabricator context.' => 'Analyser le texte en refaisant un marquage dans le contexte de Phabricator.',
      'Invalid markup engine.' => 'Moteur de marquage invalide.',
      'Content may not be empty.' => 'Le contenu ne peut pas être vide.',
    );
  }

}
