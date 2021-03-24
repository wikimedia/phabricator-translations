<?php

final class PhabricatorSystemCa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ca';
  }

  protected function getTranslations() {
    return array(
      'Phabricator is currently configured with no writable ("master") database, so it can not write new information anywhere. Phabricator will run in read-only mode until an administrator reconfigures it with a writable database.' => 'Phabricator està configurat actualment sense cap base de dades que es pugui escriure ("mestre"), de manera que no pot escriure informació nova enlloc. Phabricator s\'executarà en mode de només lectura fins que un administrador el reconfiguri amb una base de dades on es pugui escriure.',
      'This system does not have the "%s" extension installed, so character encodings are not supported. Install "%s" to enable support.' => 'Aquest sistema no té instal·lada l\'extensió "%s", de manera que no s\'admeten codificacions de caràcters. Instal·leu "%s" per habilitar l\'assistència.',
      'This mode is active because it is enabled in the configuration option "%s".' => 'Aquest mode està actiu perquè està habilitat a l\'opció de configuració "%s".',
      'Panic!' => 'Pànic!',
      'View Handle' => 'Manipular la vista',
      'No Writable Database' => 'No hi ha una base de dades que es pugui escriure',
      'Destroying %s **%s**...
    ' => 'Destruint %s **%s**...',
      'Object "%s" can not be destroyed (it does not implement %s).' => 'L\'objecte "%s" no es pot destruir (no implementa %s).',
      'No Encoding Support' => 'Sense suport de codificació',
      'No such object "%s" exists!' => 'No existeix cap objecte "%s"!',
      'Severed From Master' => 'Separat del Mestre',
      'Cluster Database Status' => 'Estat de la base de dades del clúster',
      'Engine: Destruction' => 'Motor: Destrucció',
      'Object ("%s") does not implement interface "%s", so this type of object can not be unlocked.' => 'Object (\'%s\') no implementa la interfície \'%s\', de manera que aquest tipus d\'objecte no es pot desbloquejar.',
      'This request was served from a replica database. Replica databases may lag behind the master, so very recent activity may not be reflected in the UI. This data will be restored if the master database is restored, but may have been lost if the master database has been reduced to a pile of ash.' => 'Aquesta sol·licitud s\'ha servit des d\'una base de dades de rèplica. Les bases de dades de rèplica poden quedar enrere del mestre, de manera que és possible que l’activitat molt recent no es reflecteixi a la interfície d’usuari. Aquestes dades es restauraran si es restaura la base de dades mestra, però es poden haver perdut si la base de dades mestra s\'ha reduït a un munt de cendres.',
      'Permanently destroy objects.' => 'Destrueix permanentment els objectes.',
      'Choose a syntax highlighting to use.' => 'Trieu un ressaltat de sintaxi que vulgueu utilitzar.',
      '%d / hour' => '%s / hora',
      'This may happen if there is a temporary network anomaly on the server side, like cosmic radiation or spooky ghosts. If this failure was caused by a transient service interruption, Phabricator will recover momentarily.' => 'Això pot passar si hi ha una anomalia temporal de xarxa al costat del servidor, com ara la radiació còsmica o els fantasmes fantasmagòrics. Si aquest error es va produir per una interrupció transitòria del servei, Phabricator es recuperarà momentàniament.',
      'Rate Limiting Actions' => 'Accions de freqüència limitada',
      'Highlighting' => 'Destacant',
      'Unable to Reach Master' => 'No es pot arribar al mestre',
      'Phabricator was unable to connect to the writable ("master") database while handling this request, and automatically degraded into read-only mode.' => 'Phabricator no ha pogut connectar-se a la base de dades que es podia escriure ("mestre") mentre gestionava aquesta sol·licitud i es va degradar automàticament al mode de només lectura.',
      'View As' => 'Veure com',
      'Permanently destroyed %s object(s).' => 'S\'han destruït permanentment %s objectes.',
      'Choose Encoding' => 'Trieu la Codificació',
      'Destroying objects may cause related objects to stop working, and may leave scattered references to objects which no longer exist. In most cases, it is much better to disable or archive objects instead of destroying them. This risk is greatest when deleting complex or highly connected objects like repositories, projects and users.
    These tattered edges are an expected consequence of destroying objects, and the Phabricator upstream will not help you fix them. We strongly recommend disabling or archiving objects instead.' => 'Destruir objectes pot fer que els objectes relacionats deixin de funcionar, i pot deixar referències disperses a objectes que ja no existeixen. En la majoria dels casos, és molt millor desactivar o arxivar els objectes en lloc de destruir-los. Aquest risc és més gran quan s\'esborren objectes complexos o molt connectats, com repositoris, projectes i usuaris.
    Aquests flancs trencats són una conseqüència esperada de la destrucció d\'objectes, i el ascendent de Phabricator no t\'ajudarà a corregir-los. Recomanem encaridament desactivar o arxivar els objectes al seu lloc.',
      'IMPORTANT' => 'IMPORTANT',
      'Quite Unsettling' => 'Molt inestable',
      'Object owner can not be unlocked: the unlocking engine ("%s") for this object does not implement an owner unlocking mechanism.' => 'No pot desbloquejar el propietari de l\'objecte: el motor de desbloqueig (\'%s\') d\'aquest objecte no implementa un mecanisme de desbloqueig del propietari.',
      'Choose a document engine to use.' => 'Escollir un motor de document per utilitzar.',
      'Destruction Logs' => 'Destrucció de registres',
      'This likely indicates a severe misconfiguration or major service interruption.' => 'És probable que això indiqui una configuració errònia greu o una interrupció important del servei.',
      'Destroying objects...' => 'Destruint objectes...',
      'Read-only mode was enabled by the explicit action of a human administrator, so you can get more information about why it has been turned on by rolling your chair away from your desk and yelling "Hey! Why is Phabricator in read-only mode??!" using your very loudest outside voice.' => 'El mode de només lectura es va habilitar amb l\'acció explícita d\'un administrador humà, de manera que podeu obtenir més informació sobre per què s\'ha activat estirant la cadira de l\'escriptori i cridant "Ei! Per què Phabricator està en mode de només lectura? ?! " utilitzant la vostra veu exterior més forta.',
      'This mode is active because no database has a "%s" role in the configuration option "%s".' => 'Aquest mode està actiu perquè cap base de dades té un rol "%s" a l\'opció de configuració "%s".',
      'This may also indicate that a more serious failure has occurred. If this interruption does not resolve on its own, Phabricator will soon detect the persistent disruption and degrade into read-only mode until the issue is resolved.' => 'Això també pot indicar que s\'ha produït un error més greu. Si aquesta interrupció no es resol per si sola, Phabricator aviat detectarà la interrupció persistent i es degradarà al mode de només lectura fins que es resolgui el problema.',
      'Object view policy can not be unlocked because this object does not have a mutable view policy.' => 'La política de visualització d\'objectes no es pot desbloquejar perquè aquest objecte no té una política de visualització mutable.',
      'Select Character Encoding' => 'Seleccioneu la codificació de caràcters',
      'Select Syntax Highlighting' => 'Seleccioneu ressalt de sintaxi',
      'DATA WILL BE PERMANENTLY DESTROYED' => 'LES DADES ES DESTRUIRAN PERMANENTMENT',
      'Choose Highlighting' => 'Trieu el ressaltat',
      'An administrator has placed Phabricator into read-only mode.' => 'Un administrador ha situat Phabricator en mode de només lectura.',
      'Advanced/Developer...' => 'Avançat/desenvolupador ...',
      'Objects will be permanently destroyed. There is no way to undo this operation or ever retrieve this data unless you maintain external backups.' => 'Els objectes seran destruïts permanentment. No hi ha manera de desfer aquesta operació ni de rescatar mai aquestes dades tret que mantingueu còpies de seguretat externes.',
      'Phabricator has consistently been unable to reach the writable ("master") database while processing recent requests.' => 'Phabricator ha estat constantment incapaç d’arribar a la base de dades d’escriptura ("mestra") mentre processava les sol·licituds recents.',
      'Aborted, your objects are safe.' => 'S\'ha interromput, els vostres objectes són segurs.',
      'No Object URI' => 'Cap URI d\'objecte',
      'Show a log of permanently destroyed objects.' => 'Mostra un registre d\'objectes destruïts permanentment.',
      'Cache engine extension "%s" returned object (of class "%s") with no PHID.' => 'L\'extensió del motor de la caché "%s" ha retornat l\'objecte (de la classe "%s") sense PHID.',
      'System' => 'Sistema',
      'You are performing too many actions too quickly.' => 'Esteu realitzant massa accions massa ràpidament.',
      'Phabricator will periodically retry the connection and recover once service is restored. Most causes of persistent service interruption will require administrative intervention in order to restore service.' => 'Phabricator tornarà a intentar periòdicament la connexió i es recuperarà un cop restaurat el servei. La majoria de les causes de la interrupció persistent del servei requeriran una intervenció administrativa per restaurar el servei.',
      'Choose a text encoding to use.' => 'Trieu una codificació de text per a utilitzar.',
      'These %s object(s) will be destroyed forever:' => 'Aquests %s objectes es destruiran per sempre:',
      'Select Document Engine' => 'Selecciona Motor de Document',
      'In read-only mode you can read existing information, but you will not be able to edit objects or create new objects until this mode is disabled.' => 'Al mode de només lectura, podeu llegir informació existent, però no podreu editar objectes ni crear objectes nous fins que aquest mode estigui desactivat.',
      'This mode may be used to perform temporary maintenance, test configuration, or archive an installation permanently.' => 'Aquest mode es pot utilitzar per realitzar un manteniment temporal, provar la configuració o arxivar una instal·lació permanentment.',
      'DELETING OBJECTS OFTEN BREAKS THINGS' => 'LA SUPRESSIÓ D\'OBJECTES SOVINT TRENCA COSES',
      'View Hovercard' => 'View Hovercard',
      'Cache engine extension "%s" did not return a list of linked objects.' => 'L\'extensió del motor de la caché "%s" no ha retornat cap llista d\'objectes enllaçats.',
      'This usually occurs when an administrator is actively working on fixing a temporary configuration or deployment problem.' => 'Normalment, això passa mentre un administrador treballa per solucionar un problema de configuració o desplegament temporal.',
      '%d / minute' => '%s / minut',
      'Destroy objects without prompting.' => 'Destrueix objectes sense demanar-ho.',
      'The maximum allowed rate for this action is %s. You are taking actions at a rate of %s.' => 'La tarifa màxima permesa per a aquesta acció és de %s. Esteu fent accions a un ritme de %s.',
      'Are you absolutely certain you want to destroy these %s object(s)?' => 'Esteu absolutament segur de voler destruir aquests %s objectes?',
      'Administrative Read-Only Mode' => 'Mode administratiu de només lectura',
      'Object edit policy can not be unlocked because this object does not have a mutable edit policy.' => 'La política d\'edició d\'objectes no es pot desbloquejar perquè aquest objecte no té una política d\'edició modificable.',
      '%d / second' => '%s / segon',
      'As an administrator, you can review status information from the %s control panel. This may provide more information about the current state of affairs.' => 'Com a administrador, podeu revisar la informació d\'estat des del tauler de control de %s. Això pot proporcionar més informació sobre l\'estat actual de les coses.',
      'Although this may be the result of a misconfiguration or operational error, this is also the state you reach if a meteor recently obliterated a datacenter.' => 'Tot i que això pot ser el resultat d\'una errònia configuració o error operatiu, aquest és també l\'estat al qual arribeu si un meteorit ha destruït recentment un centre de dades.',
      'Object "%s" exists, but does not have a URI to redirect to.' => 'L\'objecte "%s" existeix, però no té cap URI al qual redirigir.',
      'Specify one or more objects to destroy.' => 'Especifiqueu un o més objectes per destruir.',
      'Choose Engine' => 'Escull Motor',
    );
  }

}
