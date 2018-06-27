<?php

final class PhabricatorRemarkupAst
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ast';
  }

  protected function getTranslations() {
    return array(
      'Process text through remarkup in Phabricator context.' => 'Procesar testu con remarkup nel contestu de Phabricator.',
      'Invalid markup engine.' => 'Motor de llinguaxe de marques inválidu.',
      'Content may not be empty.' => 'El conteníu nun puede tar vacíu.',
    );
  }

}
