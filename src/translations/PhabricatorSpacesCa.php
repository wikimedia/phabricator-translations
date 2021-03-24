<?php

final class PhabricatorSpacesCa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ca';
  }

  protected function getTranslations() {
    return array(
      '%s updated the space description for %s.' => '%s ha actualitzat la descripció de l\'espai per %s.',
      '(This error generally indicates that %s is enabled, but there are no spaces with a "%s" view policy. These settings are contradictory and imply a misconfiguration.)' => '(Aquest error generalment indica que %s està activat, però no hi ha espais amb una política de visualització "%s". Aquests paràmetres són contradictoris i impliquen una configuració incorrecta.)',
      'Spaces User Guide' => 'Guia de l\'usuari per a espais',
      'Hide Active Spaces' => 'Ocultar els espais actius',
      '%s updated the space description.' => '%s ha actualitzat la descripció de l\'espai.',
      '%s archived space %s.' => '%s ha arxivat l\'espai %s.',
      'PHID of the policy space this object is part of.' => 'El PHID de l\'espai de polítiques del què forma part aquest objecte.',
      'Default edit policy for newly created spaces.' => 'Política d\'edició predeterminada per als espais creats recentment.',
      'Only the first space created can be the default space, and it must remain the default space evermore.' => 'Només el primer espai creat pot ser l\'espai predeterminat i ha de romandre per sempre.',
      'Search for objects in certain spaces.' => 'Cerqueu objectes en determinats espais.',
      'Activate Space: %s' => 'Activa l\'espai: %s',
      'Support for Spaces' => 'Suport per a espais',
      '%s renamed space %s from %s to %s.' => '%s ha reanomenat l\'espai %s de %s a %s.',
      'Create a Space' => 'Crear un Espai',
      'Alternate Space' => 'Espai alternatiu',
      '%s activated this space.' => '%s ha activat aquest espai.',
      'Archive Space: %s' => 'Espai d\'arxiu: %s',
      'Spaces must have a name.' => 'Els espais han de tenir un nom.',
      'Existing objects in this Space will be hidden from query results by default.' => 'Els objectes existents en aquest Espai s\'ocultaran per defecte dels resultats de les consultes.',
      '%s made this the default space.' => '%s va convertir aquest espai en l\'espai predeterminat.',
      '%s archived this space.' => '%s ha arxivat aquest espai.',
      'Type a space name...' => 'Tecleja un nom d\'espai',
      'Existing objects will no longer be hidden from query results.' => 'Els objectes existents ja no s\'ocultaran dels resultats de la consulta.',
      'You do not have permission to create spaces.' => 'No teniu permís per crear espais.',
      'Ask someone to give you access to a space so you can view and create objects.' => 'Demaneu a algú que us doni accés a un espai perquè pugueu veure i crear objectes.',
      'Default Space' => 'Espai predeterminat',
      'Archive Space' => 'Espai d\'arxiu',
      'CHANGES TO SPACE DESCRIPTION' => 'CANVIS EN LA DESCRIPCIÓ DE L\'ESPAI',
      'Default view policy for newly created spaces.' => 'Política de visualització per defecte per als espais creats recentment.',
      'Spaces' => 'Espais',
      'Drift Aimlessly' => 'Deriva sense objectiu',
      'Browse Spaces' => 'Navega pels espais',
      'Can Create Spaces' => 'Pot Crear Espais',
      'All Spaces' => 'Tots els Espais',
      'Control access to groups of objects.' => 'Accés de control a grups d\'objectes.',
      'If you activate this space, you will be able to create objects inside it again.' => 'Si actives aquest espai, podràs crear objectes dins ell un altre cop.',
      'Create Space' => 'Crear un Espai',
      'Log in, or ask someone to create a public space which logged out users are permitted to access.' => 'Inicieu la sessió o demaneu a algú que creï un espai públic al qual puguin accedir els usuaris que hagin tancat la sessió.',
      'Policy Namespaces' => 'Espais de noms de polítiques',
      '%s activated space %s.' => '%s ha activat l\'espai %s.',
      '%s created this space.' => '%s ha creat aquest espai.',
      'Space %s: %s' => 'Espai %s: %s',
      'No Access to Spaces' => 'Cap Accés a Espais',
      '%s renamed this space from %s to %s.' => '%s ha reanomenat aquest espai de "%s" a "%s".',
      'No spaces found.' => 'Cap espai trobat.',
      'This install uses spaces to organize objects, but logged out users do not have access to any spaces.' => 'Aquesta instal·lació utilitza espais per organitzar objectes, però els usuaris que han tancat la sessió no tenen accés a cap espai.',
      'Edit Space' => 'Edita l\'espai',
      'Test Space' => 'Espai de prova',
      '%s made space %s the default space.' => '%s va convertir l\'espai %s en l\'espai predeterminat.',
      'NOTE: You are creating the **default space**. All existing objects will be put into this space. You must create a default space before you can create other spaces.' => 'NOTA: Esteu creant l\'**espai predeterminat**. Tots els objectes existents es posaran en aquest espai. Heu de crear un espai predeterminat abans de poder crear altres espais.',
      'Activate Space' => 'Activar espai',
      'PhabricatorSpacesApplication' => 'PhabricatorSpacesApplication',
      'Show Only Active Spaces' => 'Mostra només els espais actius',
      'Policy namespaces to segment object visibility throughout your instance.' => 'Espais de noms de polítiques per segmentar la visibilitat dels objectes a tota la vostra instància.',
      'If you archive this Space, you will no longer be able to create new objects inside it.' => 'Si arxiveu aquest espai, ja no podreu crear objectes nous en ell.',
      '%s created space %s.' => '%s ha creat l\'espai %s.',
      'Default Space #2' => 'Espai predeterminat # 2',
      'Active Spaces' => 'Espais actius',
      'This install uses spaces to organize objects, but your account does not have access to any spaces.' => 'Aquesta instal·lació utilitza espais per organitzar objectes, però el vostre compte no té accés a cap espai.',
    );
  }

}
