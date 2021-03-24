<?php

final class PhabricatorPolicyCa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ca';
  }

  protected function getTranslations() {
    return array(
      'Required Capabilities on Other Objects' => 'Aptituds necessàries en altres objectes',
      'Phabricator has application policies which can dictate whether users can take certain actions, such as creating new users. 
    This setting allows for "locking" these policies such that no further edits can be made on a per-policy basis.' => 'Phabricator té polítiques d\'aplicació que poden dictar si els usuaris poden prendre certes accions, com la creació de nous usuaris.  
    Aquest paràmetre permet "bloquejar" aquestes polítiques de manera que no es poden fer més edicions sobre una base per política.',
      'Lock Create User Policy To Admins' => 'Bloqueja la política de creació d\'usuari per als administradors',
      'Limit + offset work.' => 'Límit + treball de l\'òfset.',
      'These rules are processed in order.' => 'Aquestes regles es processen per ordre.',
      'After a user passes space policy checks, they must still pass object policy checks.' => 'Després que un usuari passi les comprovacions de la política espacial, encara ha de passar les comprovacions de la política d\'objectes.',
      'Shift the object between spaces.' => 'Desplaça l\'objecte entre espais.',
      'CAPABILITIES' => 'APTITUDS',
      'Map of capabilities to current policies.' => 'Mapa d\'aptituds de les polítiques actuals.',
      'Lock specific application policies so they can not be edited.' => 'Bloqueja les polítiques d\'aplicació específiques perquè no es puguin editar.',
      'Application class \'%s\' for query \'%s\'.' => 'Classe d\'aplicació "%s" per a la consulta "%s".',
      'Testing for capability "%s" on an object ("%s") which does not support that capability.' => 'Provant la capacitat de \'%s\' en un objecte (\'%s\') que no admet aquesta capacitat.',
      'Change the owner of an object to the specified user.' => 'Canvia el propietari d\'un objecte per l\'usuari especificat.',
      'Special Rules' => 'Regles especials',
      'Failed to JSON decode rule data!' => 'No s\'han pogut descodificar les dades de la regla JSON.',
      'These rules are processed in order:' => 'Aquestes regles són processades en ordre:',
      'You do not have the required capability ("%s") to do whatever you are trying to do.' => 'No teniu l\'aptitud necessària (\'%s\') per fer tot el que intenteu fer.',
      'Support for Policies' => 'Suport a les polítiques',
      'Invalid rule class \'%s\'!' => 'La classe de regla \'%s\' no és vàlida.',
      'Policy identifier is an object PHID (\'%s\'), but the provided handle has a different PHID (\'%s\'). The handle must correspond to the policy identifier.' => 'L\'identificador de política és un PHID d\'objecte ("%s"), però el manegador proporcionat té un PHID diferent ("%s"). El manegador ha de correspondre a l\'identificador de la política.',
      'Change the view policy of an object so that the specified user may view it.' => 'Canvi la política de visualització d\'un objecte de manera que l\'usuari especificat el pugui veure.',
      'Phabricator allows you to set the visibility of objects (like repositories and tasks) to \'Public\', which means **anyone on the internet can see them, without needing to log in or have an account**.
    This is intended for open source projects. Many installs will never want to make anything public, so this policy is disabled by default. You can enable it here, which will let you set the policy for objects to \'Public\'.
    Enabling this setting will immediately open up some features, like the user directory. Anyone on the internet will be able to access these features.
    With this setting disabled, the \'Public\' policy is not available, and the most open policy is \'All Users\' (which means users must have accounts and be logged in to view things).' => 'Phabricator us permet establir la visibilitat dels objectes (com repositoris i tasques) a «Public», el que significa que **qualsevol persona a Internet els pot veure, sense necessitat d\'iniciar sessió o tenir un compte**. 
    Això està pensat per a projectes de codi obert.  Moltes instal·lacions mai volen fer públic res, de manera que aquesta política està inhabilitada per defecte.  Ho podeu habilitar aquí, la qual cosa us permetrà definir la política dels objectes com a "públics". 
    En activar aquest paràmetre s\'obriran immediatament algunes funcionalitats, com ara el directori d\'usuari. Qualsevol persona a Internet podrà accedir a aquestes funcionalitats. 
    Amb aquest paràmetre inhabilitat, la política "pública" no està disponible, i la política més oberta és "Tots els usuaris" (el que significa que els usuaris han de tenir comptes i estar connectats per veure les coses).',
      'Capability "%s" does not exist.' => 'L\'aptitud \'%s\' no existeix.',
      'Unlock an object which has policies that prevent it from being viewed or edited.' => 'Desbloqueja un objecte que tingui polítiques que impedeixin la seva visualització o edició.',
      'Note:' => 'Nota:',
      'Offset pages through visible objects only.' => 'Desplaça les pàgines només a través dels objectes visibles.',
      'To access this object, users must have first have access capabilities on these other objects:' => 'Per accedir a aquest objecte, els usuaris han de tenir primer aptituds d\'accés a aquests altres objectes:',
      'Offsets work correctly.' => 'Els òfsets funcionen correctament.',
      'Offset with no limit works.' => 'L\'òfset sense límit funciona.',
      'This policy rule (of class "%s") does not have an associated object policy key.' => 'Aquesta regla de política (de classe "%s) no té una clau de política d\'objecte associada.',
      'Capability "%s" does not support public policy.' => 'La capacitat "%s" no admet les polítiques públiques.',
      'Change the edit policy of an object so that the specified user may edit it.' => 'Canviar la política d\'edició d\'un objecte de manera que l\'usuari especificat el pugui editar.',
      'Policy identifier is an object PHID (\'%s\'), but no object handle was provided. A handle must be provided for object policies.' => 'L\'identificador de política és un PHID d\'objecte (\'%s\'), però no s\'ha proporcionat cap manegador d\'objectes. Cal proporcionar un manegador per a les polítiques d\'objecte.',
      'You can not issue a policy query with both %s and %s.' => 'No podeu emetre una consulta de política amb %s i %s junts.',
      'Extended Policy with Cycle' => 'Política estesa amb cicle',
      'If No Rules Match' => 'Si no hi ha regles coincidents',
      'Capability "%s" has invalid policy "%s"; "%s" does not exist.' => 'L\'aptitud "%s" té una política "%s" no vàlida; "%s" no existeix.',
      'Choose which capabilities to unlock with "--view", "--edit", or "--owner".' => 'Trieu quines aptituds voleu desbloquejar amb "--view", "--edit", o "--owner".',
      'This object has an unknown or invalid policy setting ("%s").' => 'Aquest objecte té un paràmetre de política desconegut o no vàlid (\'%s\').',
      'This object has special rules which override normal object policy rules:' => 'Aquest objecte té regles especials que anul·len les regles normals de la política d\'objectes:',
      'This object has a custom policy controlling who can take this action.' => 'Aquest objecte té una política personalitzada que controla qui pot dur a terme aquesta acció.',
      'New space PHID.' => 'El PHID de l\'espai nou.',
      'Capability "%s" has invalid policy "%s".' => 'L\'aptitud \'%s\' té una política \'%s\' no vàlida.',
    );
  }

}
