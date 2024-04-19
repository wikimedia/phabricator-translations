<?php

final class PhabricatorRemarkupAst
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ast';
  }

  protected function getTranslations() {
    return array(
      'Invalid markup engine.' => 'Motor de llinguaxe de marques inválidu.',
      'Process text through remarkup.' => 'Procesar testu con remarkup nel contestu de Phabricator.',
      'Content may not be empty.' => 'El conteníu nun puede tar vacíu.',
    );
  }

}
