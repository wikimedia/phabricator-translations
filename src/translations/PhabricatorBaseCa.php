<?php

final class PhabricatorBaseCa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ca';
  }

  protected function getTranslations() {
    return array(
      'No application \'%s\'!' => 'Cap aplicació \'%s\'!',
      'Expect user \'%s\' to be allowed access to \'%s\'.' => 'Espera a l\'usuari \'%s\' per tenir permisos d\'accés a \'%s\'.',
      'Can Configure Application' => 'Pot configurar l\'aplicació',
      'Can Use Application' => 'Pot utilitzar l\'aplicació',
      'Application Controller' => 'Controlador d\'aplicació',
      'Public + configured' => 'Públic + configurat',
      'Public Access' => 'Accés públic',
      'Core Applications' => 'Aplicacions del nucli',
      'No Login Required' => 'No requereix inici de sessió',
      'No application!' => 'Cap aplicació!',
      '%s Application' => 'Aplicació %s',
      'Email Verification Required' => 'Requereix verificació de correu electrònic',
      'Application Controller, No Login Required' => 'Controlador d\'aplicació, no requereix inici de sessió',
      'Developer Tools' => 'Eines de desenvolupador',
      'This application is required for Phabricator to operate, so all users must have access to it.' => 'Aquesta aplicació és requerida per Phabricator per funcionar, així que tots els usuaris han de tenir accés a ella.',
      'Expect user \'%s\' to be denied access to \'%s\'.' => 'Espera a l\'usuari \'%s\' per denegar accés a \'%s\'',
      'Request includes restricted parameter "%s", but this controller ("%s") does not whitelist it. Refusing to serve this request because it might be part of a redirection attack.' => 'La petició inclou el paràmetre restringit "%s", però aquest controlador ("%s") no es blanqueja. Es rebutja servir aquesta petició perquè podria ser part d\'un atac de redirecció.',
      'Unknown capability \'%s\'!' => 'Capacitat desconeguda \'%s\'!',
      'Admin Required' => 'Es requereix administrador',
      'Email Verification Required, With Exception' => 'Es requereix verificació de correu electrònic, amb excepció',
      'Allow Disabled' => 'Permet deshabilitat',
    );
  }

}
