<?php

final class PhabricatorFilesEsES
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'es_ES';
  }

  protected function getTranslations() {
    return array(
      'New alt text.' => 'Nuevo texto alternativo.',
      '%s removed the alternate text for this file (was %s).' => '%s removió el texto alternativo de este archivo (era %s).',
      '%s removed the alternate text for %s (was %s).' => '%s removió el texto alternativo para %s (era %s).',
      'Alt Text' => 'Texto alternativo',
      'Default Alt Text' => 'Texto alternativo predeterminado',
      'Not Applicable' => 'No aplicable',
      'Custom Alt Text' => 'Texto alternativo personalizado',
      '%s changed the alternate text for this file from %s to %s.' => '%s cambió el texto alternativo para este archivo de %s a %s.',
      'Human-readable file description.' => 'Description legible por humanos para el archivo.',
      'File alternate text must not be longer than %s character(s).' => 'El texto alternativo para el archivo no debe ser más grande de %s caracteres.',
      '%s set the alternate text for this file to %s.' => '%s estableció el texto alternativo para este archivo a %s.',
      'Set the file alt text.' => 'Establece el texto alternativo para el archivo.',
      '%s changed the alternate text for %s from %s to %s.' => '%s cambio el texto alternativo para %s de %s a %s.',
    );
  }

}
