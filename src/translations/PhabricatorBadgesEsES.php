<?php

final class PhabricatorBadgesEsES
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'es_ES';
  }

  protected function getTranslations() {
    return array(
      'Rebel' => 'Rebelde',
      'Create Badge' => 'Crear insignia',
      'Active Badges' => 'Insignias activas',
      'Edit Badge: %s' => 'Editar insignia: %s',
      'Badges must have a name.' => 'Las insignias deben tener un nombre.',
      'Other badge activity not listed above occurs.' => 'Otras actividades relativas a insignias no listadas más arriba.',
      'Activate Badge' => 'Activar insignia',
      'Escape Route' => 'Ruta de escape',
      'This badge does not have any recipients.' => 'Esta insignia no ha sido entregada a nadie todavía.',
      '%s disabled the badge %s.' => '%s desactivó la insignia %s.',
      'All Badges' => 'Todas las insignias',
      'View Badge' => 'Ver insignia',
      'Coder' => 'Creador de código',
      'Revoke Badge' => 'Revocar insignia',
      'Edit Badge' => 'Editar insignia',
      'Choose Badge Icon' => 'Escoger icono para la insignia',
      '%s renamed this badge from %s to %s.' => '%s cambió el nombre de la insignia de %s a %s.',
      'Already awarded' => 'Ya entregada',
      '%s created this badge.' => '%s creó esta insignia.',
      'Create a Badge' => 'Crear una insignia',
      'Poor' => 'Pobre',
      'View Recipients' => 'Ver receptores',
      'Quality' => 'Calidad',
      'Epic' => 'Épico',
      'Legendary' => 'Legendario',
      'This dedicated badge, once a distinguish icon of this install, shall be immediately retired from service, but will never far from our hearts. Godspeed.' => 'Esta insignia dedicada, que alguna vez fue un ícono distinguido de esta instalación, se retirará inmediatamente del servicio, pero nunca estará lejos de nuestros corazones. Buena suerte.',
      'Rare' => 'Raro',
    );
  }

}
