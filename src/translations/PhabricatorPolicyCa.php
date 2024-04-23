<?php

final class PhabricatorPolicyCa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ca';
  }

  protected function getTranslations() {
    return array(
      'Access Denied: %s' => 'Accés denegat: %s',
      'No One Policy' => 'Cap política',
      '%s with user %s should fail.' => '%s amb l\'usuari %s hauria de fallar.',
      'is waning' => 'està minvant',
      'Required Capabilities on Other Objects' => 'Aptituds necessàries en altres objectes',
      'Logged in users can take this action.' => 'Els usuaris connectats poden dur a terme aquesta acció.',
      'Object URI' => 'URI d\'objecte',
      'when the moon' => 'quan la lluna',
      'Specify the name of an object to unlock.' => 'Especifica el nom del objecte a desbloquejar.',
      'Identify each __object__ by passing an object name (like "T123") or a PHID (like "PHID-ABCD-1234...").
    Not every type of object has an editable view policy, edit policy, or owner, so not all modes will work with all objects. ' => 'Identifica cada __objecte__ passant un nom d\'objecte (com "T123") o un PHID (com "PHID-ABCD-1234...").
    No tots els tipus d\'objecte tenen una política de vista editable, política d\'edició o propietari, de manera que no tots els modes funcionaran amb tots els objectes.',
      'Unknown user spec \'%s\'.' => 'Especificació d\'usuari desconeguda \'%s\'.',
      'Lock Create User Policy To Admins' => 'Bloqueja la política de creació d\'usuari per als administradors',
      'Limit + offset work.' => 'Límit + treball de l\'òfset.',
      'These rules are processed in order.' => 'Aquestes regles es processen per ordre.',
      'This software has application policies which can dictate whether users can take certain actions, such as creating new users. 
    This setting allows for "locking" these policies such that no further edits can be made on a per-policy basis.' => 'Phabricator té polítiques d\'aplicació que poden dictar si els usuaris poden prendre certes accions, com la creació de nous usuaris.  
    Aquest paràmetre permet "bloquejar" aquestes polítiques de manera que no es poden fer més edicions sobre una base per política.',
      'Users who can see objects in this space:' => 'Usuaris que poden veure objectes en aquest espai:',
      'After a user passes space policy checks, they must still pass object policy checks.' => 'Després que un usuari passi les comprovacions de la política espacial, encara ha de passar les comprovacions de la política d\'objectes.',
      'Modified object policies.' => 'Polítiques d\'objecte modificades.',
      'User Policies' => 'Polítiques d\'usuari',
      'Shift the object between spaces.' => 'Desplaça l\'objecte entre espais.',
      'You Shall Not Pass: %s' => 'No passareu: %s',
      'is waxing' => 'encerant',
      'This software allows you to set the visibility of objects (like repositories and tasks) to \'Public\', which means **anyone on the internet can see them, without needing to log in or have an account**.
    This is intended for open source projects. Many installs will never want to make anything public, so this policy is disabled by default. You can enable it here, which will let you set the policy for objects to \'Public\'.
    Enabling this setting will immediately open up some features, like the user directory. Anyone on the internet will be able to access these features.
    With this setting disabled, the \'Public\' policy is not available, and the most open policy is \'All Users\' (which means users must have accounts and be logged in to view things).' => 'Phabricator us permet establir la visibilitat dels objectes (com repositoris i tasques) a «Public», el que significa que **qualsevol persona a Internet els pot veure, sense necessitat d\'iniciar sessió o tenir un compte**. 
    Això està pensat per a projectes de codi obert.  Moltes instal·lacions mai volen fer públic res, de manera que aquesta política està inhabilitada per defecte.  Ho podeu habilitar aquí, la qual cosa us permetrà definir la política dels objectes com a "públics". 
    En activar aquest paràmetre s\'obriran immediatament algunes funcionalitats, com ara el directori d\'usuari. Qualsevol persona a Internet podrà accedir a aquestes funcionalitats. 
    Amb aquest paràmetre inhabilitat, la política "pública" no està disponible, i la política més oberta és "Tots els usuaris" (el que significa que els usuaris han de tenir comptes i estar connectats per veure les coses).',
      'Unable to find any object with the specified name ("%s").' => 'No s\'ha pogut trobar cap objecte amb el nom especificat (\'%s\').',
      'You do not have permission to edit this object.' => 'No teniu permís per editar aquest objecte.',
      'CAPABILITIES' => 'APTITUDS',
      'No Extended Policy' => 'Sense política ampliada',
      'Map of capabilities to current policies.' => 'Mapa d\'aptituds de les polítiques actuals.',
      'Capability "%s" for user "%s" on object "%s" is being resolved, but was never queued with "addCapability()".' => 'La capacitat «%s» per a l\'usuari «%s» en l\'objecte «%s» s\'està resolent, però mai es va consultar amb «addCapability()».',
      'Other: %s' => 'Altre: %s',
      'Can View' => 'Pot veure',
      'Lock specific application policies so they can not be edited.' => 'Bloqueja les polítiques d\'aplicació específiques perquè no es puguin editar.',
      'Only User: %s' => 'Només per a l\'usuari: %s.',
      'Limits work.' => 'Limita el treball.',
      'Invalid action \'%s\'!' => 'L\'acció \'%s\' no és vàlida.',
      'Admin Policy' => 'Política d\'admin',
      'Unlock one or more objects by changing their view policies, edit policies, or owners.' => 'Desbloqueja un o més objectes canviant les seves polítiques de vista, polítiques d\'edició o propietaris.',
      'Allow Public Visibility' => 'Permet la visibilitat pública',
      'Object Policies' => 'Polítiques d\'objecte',
      'Members of Project...' => 'Membres de projecte...',
      'Two policy rules (of classes "%s" and "%s") define the same object policy key ("%s"), but each object policy rule must use a unique key.' => 'Dues regles de política (de les classes \'%s\' i \'%s\') defineixen la mateixa clau de política d\'objectes (\'%s\'), però cada regla de política d\'objectes ha d\'utilitzar una clau única.',
      'Advanced' => 'Avançat',
      'By default, no one can take this action.' => 'Per defecte, ningú pot fer aquesta acció.',
      'Application class \'%s\' for query \'%s\'.' => 'Classe d\'aplicació "%s" per a la consulta "%s".',
      'Testing for capability "%s" on an object ("%s") which does not support that capability.' => 'Provant la capacitat de \'%s\' en un objecte (\'%s\') que no admet aquesta capacitat.',
      'Change the owner of an object to the specified user.' => 'Canvia el propietari d\'un objecte per l\'usuari especificat.',
      'Deny' => 'Refusa',
      'Special Rules' => 'Regles especials',
      'With Extended Policy + Edit' => 'Amb la política ampliada + Modificació',
      'Failed to JSON decode rule data!' => 'No s\'han pogut descodificar les dades de la regla JSON.',
      'Controls who can edit the object.' => 'Controla qui pot editar l\'objecte.',
      'Other Policies' => 'Altres polítiques',
      'Object Policy' => 'Política d\'objecte',
      'Can Interact' => 'Podeu interaccionar',
      'These rules are processed in order:' => 'Aquestes regles són processades en ordre:',
      'Members of the project "%s" can take this action.' => 'Els membres del projecte \'%s\' poden fer aquesta acció.',
      'UNLOCKING' => 'DESBLOQUEIG',
      'Members of a particular project can take this action. (You can not see this object, so the name of this project is restricted.)' => 'Els membres d\'un projecte concret poden emprendre aquesta acció.  (No podeu veure aquest objecte, de manera que el nom d\'aquest projecte està restringit).',
      'Specify the name of exactly one object to show policy information for.' => 'Especifica el nom d\'un objecte per a mostrar la informació de la política.',
      'This object is public and can be viewed by anyone, even if they do not have an account on this server.' => 'Aquest objecte és públic i pot ser vist per qualsevol persona, fins i tot si no té un compte de Phabricator.',
      'You do not have the required capability ("%s") to do whatever you are trying to do.' => 'No teniu l\'aptitud necessària (\'%s\') per fer tot el que intenteu fer.',
      'Support for Policies' => 'Suport a les polítiques',
      'Allow users to set object visibility to public.' => 'Permet als usuaris establir la visibilitat de l\'objecte com a pública.',
      'Space:' => 'Espai:',
      'Change the edit policy of the object.' => 'Canvia la política d\'edició de l\'objecte.',
      'Join Policy' => 'Política d\'unió',
      'Members Of' => 'Membres de',
      'Invalid rule class \'%s\'!' => 'La classe de regla \'%s\' no és vàlida.',
      'Specify the name of an object to show policy information for.' => 'Especifica el nom d\'un objecte de què mostrar informació de política.',
      'Select Project' => 'Selecciona un projecte',
      'Policy identifier is an object PHID (\'%s\'), but the provided handle has a different PHID (\'%s\'). The handle must correspond to the policy identifier.' => 'L\'identificador de política és un PHID d\'objecte ("%s"), però el manegador proporcionat té un PHID diferent ("%s"). El manegador ha de correspondre a l\'identificador de la política.',
      'Unlocking: %s' => 'Desbloqueig: %s',
      'Change the view policy of an object so that the specified user may view it.' => 'Canvi la política de visualització d\'un objecte de manera que l\'usuari especificat el pugui veure.',
      '%s can take this action.' => '%s pot fer aquesta acció.',
      'Capability "%s" does not exist.' => 'L\'aptitud \'%s\' no existeix.',
      'OBJECT' => 'OBJECTE',
      'Note:' => 'Nota:',
      'You do not have permission to view policy details.' => 'No teniu permís per veure els detalls de la política.',
      'Can Edit' => 'Pot editar',
      'Offset pages through visible objects only.' => 'Desplaça les pàgines només a través dels objectes visibles.',
      'Unable to perform capability tests on an object (of class "%s") with no PHID.' => 'No es poden realitzar proves de capacitat en un objecte (de classe «%s») sense PHID.',
      'Edit Policy' => 'Editar la política',
      'Invisible objects are ignored.' => 'Els objectes invisibles són ignorats.',
      'Controls who can view the object.' => 'Controls que poden veure l\'objecte.',
      'is new' => 'és nou',
      'Require Login' => 'Requereix inici de sessió',
      'To access this object, users must have first have access capabilities on these other objects:' => 'Per accedir a aquest objecte, els usuaris han de tenir primer aptituds d\'accés a aquests altres objectes:',
      '[%s] (%s) %s // %s' => '[%s] (%s) %s // %s',
      'Invalid Policy' => 'Política no vàlida',
      'Members of Project: %s' => 'Membres del projecte: %s',
      'Offsets work correctly.' => 'Els òfsets funcionen correctament.',
      'Public Policy (Enabled in Config)' => 'Política pública (habilitada a configuració)',
      'Offset with no limit works.' => 'L\'òfset sense límit funciona.',
      'Specify the name of exactly one object to unlock.' => 'Especifiqueu el nom d\'un objecte per desbloquejar.',
      'Options relating to object visibility.' => 'Opcions relacionades amb la visibilitat d\'objectes.',
      'This policy rule (of class "%s") does not have an associated object policy key.' => 'Aquesta regla de política (de classe "%s) no té una clau de política d\'objecte associada.',
      'Custom "%s" Policy' => 'Política \'%s\' personalitzada',
      'Custom Policy' => 'Política personalitzada',
      'Basic Policies' => 'Polítiques bàsiques',
      'Public Policy (Disabled in Config)' => 'Política pública (desactivada a configuració)',
      'Change the view policy of the object.' => 'Canvia la política de visualització de l\'objecte.',
      'All Users' => 'Tots els usuaris',
      'Show policy information about an object.' => 'Mostra la informació de la política sobre un objecte.',
      'Capability "%s" does not support public policy.' => 'La capacitat "%s" no admet les polítiques públiques.',
      'Controls who can join the object.' => 'Controla qui pot unir l\'objecte.',
      'Change the edit policy of an object so that the specified user may edit it.' => 'Canviar la política d\'edició d\'un objecte de manera que l\'usuari especificat el pugui editar.',
      'Administrators can take this action.' => 'Els administradors poden dur a terme aquesta acció.',
      'You do not have permission to view this object.' => 'No teniu permís per veure aquest objecte.',
      'Policy Details: %s' => 'Detalls de política: %s',
      'Policy identifier is an object PHID (\'%s\'), but no object handle was provided. A handle must be provided for object policies.' => 'L\'identificador de política és un PHID d\'objecte (\'%s\'), però no s\'ha proporcionat cap manegador d\'objectes. Cal proporcionar un manegador per a les polítiques d\'objecte.',
      '%s all other users.' => '%s la resta d\'usuaris.',
      'You can not issue a policy query with both %s and %s.' => 'No podeu emetre una consulta de política amb %s i %s junts.',
      'Extended Policy with Cycle' => 'Política ampliada amb cicle',
      'If No Rules Match' => 'Si no hi ha regles coincidents',
      'The space this object is in has a more restrictive view policy ("%s") than the object does ("%s"), so the space\'s view policy is shown as a hint instead of the object policy.' => 'L\'espai en què es troba aquest objecte té una política de visualització més restrictiva (\'%s\') que l\'objecte (\'%s\'), de manera que la política de visualització de l\'espai es mostra com un suggeriment en lloc de la política d\'objectes.',
      'Capability "%s" has invalid policy "%s"; "%s" does not exist.' => 'L\'aptitud "%s" té una política "%s" no vàlida; "%s" no existeix.',
      'This object is in %s and can only be seen or edited by users with access to view objects in the space.' => 'Aquest objecte és a %s i només pot ser vist o editat per usuaris amb accés per veure objectes en l\'espai.',
      'In detail, this means that these users can take this action, provided they pass all of the checks described above first:' => 'En detall, això significa que aquests usuaris poden fer aquesta acció, sempre que passin totes les comprovacions descrites anteriorment:',
      'Choose which capabilities to unlock with "--view", "--edit", or "--owner".' => 'Trieu quines aptituds voleu desbloquejar amb "--view", "--edit", o "--owner".',
      'With Extended Policy' => 'Amb política ampliada',
      'None of these policy rules have any effect.' => 'Cap d\'aquestes regles de política té efecte.',
      'Select a space for the object.' => 'Selecciona un espai per l\'objecte.',
      'Save Policy' => 'Desar la política',
      'This object is in a space you do not have permission to access.' => 'Aquest objecte es troba en un espai al qual no teniu permís per accedir.',
      'Spaces Documentation' => 'Documentació d’espais',
      'Unknown Policy' => 'Política desconeguda',
      'Change the join policy of the object.' => 'Canvieu la política d\'unió de l\'objecte.',
      'is full' => 'està ple',
      'You can not make that edit, because it would remove your ability to \'%s\' the object.' => 'No podeu fer aquesta edició, perquè us eliminaria la possibilitat de \'%s\' l\'objecte.',
      'Policy \'%s\' is not a global policy!' => 'La política "%s" no és una política global.',
      'You do not have permission to join this object.' => 'No teniu permís per unir aquest objecte.',
      'If no rules match, %s all other users.' => 'Si no hi ha regles coincidents, %s la resta d\'usuaris.',
      '%s with user %s should succeed.' => '%s amb l\'usuari %s hauria de tenir èxit.',
      'This object has an unknown or invalid policy setting ("%s").' => 'Aquest objecte té un paràmetre de política desconegut o no vàlid (\'%s\').',
      'UNLOCKED' => 'DESBLOQUEJAT',
      'This object has special rules which override normal object policy rules:' => 'Aquest objecte té regles especials que anul·len les regles normals de la política d\'objectes:',
      'Can Join' => 'Es pot unir',
      'This object has a custom policy controlling who can take this action.' => 'Aquest objecte té una política personalitzada que controla qui pot dur a terme aquesta acció.',
      'New space PHID.' => 'El PHID de l\'espai nou.',
      'Capability "%s" has invalid policy "%s".' => 'L\'aptitud \'%s\' té una política \'%s\' no vàlida.',
      'You do not have permission to interact with this object.' => 'No teniu permís per interactuar amb aquest objecte.',
      'User Policy' => 'Política d’usuari',
    );
  }

}
