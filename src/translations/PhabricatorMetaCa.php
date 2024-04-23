<?php

final class PhabricatorMetaCa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ca';
  }

  protected function getTranslations() {
    return array(
      'Completely Break Everything' => 'Trenca Phabricator completament',
      'Information' => 'Informació',
      'Syntax' => 'Sintaxi',
      'You cannot install an installed application.' => 'No pots instal·lar una aplicació instal·lada.',
      'Show First-Party Applications' => 'Consulteu les aplicacions originals',
      'Create Application' => 'Crea una aplicació',
      'Unknown order "%s"!' => 'Comanda desconeguda "%s"!',
      'Really Uninstall Application?' => 'Voleu desinstal·lar l\'aplicació?',
      'Prototypes Not Enabled' => 'Prototips no habilitats',
      'Really uninstall the %s application?' => 'Voleu desinstal·lar l’aplicació %s?',
      'Policy does not exist.' => 'La política no existeix.',
      'Launcher' => 'Llançador',
      'This application is a prototype. %s' => 'Aquesta aplicació és un prototip. %s',
      '%s installed this application.' => '%s ha instal·lat aquesta aplicació.',
      'Confirmation' => 'Confirmació',
      'Explore More Applications' => 'Explora Més Aplicacions',
      'After configuring processing for inbound mail, you can interact with objects (like tasks and revisions) over email. For information on configuring inbound mail, see **[[ %s | Configuring Inbound Email ]]**.
    In most cases, you can reply to email you receive from this server to leave comments. You can also use **mail commands** to take a greater range of actions (like claiming a task or requesting changes to a revision) without needing to log in to the web UI.
    Mail commands are keywords which start with an exclamation point, like `!claim`. Some commands may take parameters, like `!assign alincoln`.
    To use mail commands, write one command per line at the beginning or end of your mail message. For example, you could write this in a reply to task email to claim the task:
    ```
    !claim
    I\'ll take care of this.
    ```
    When %s receives your mail, it will process any commands first, then post the remaining message body as a comment. You can execute multiple commands at once:
    ```
    !assign alincoln
    !close
    I just talked to @alincoln, and he showed me that he fixed this.
    ```
    ' => 'Després de configurar Phabricator per processar el correu entrant, podeu interactuar amb els objectes (com ara les tasques i revisions) a través del correu electrònic.  Per obtenir informació sobre com configurar Phabricator, consulteu **. %s | Configurant el correu entrant .**. 
    En la majoria dels casos, podeu respondre al correu electrònic que rebeu de Phabricator per deixar comentaris.  També podeu utilitzar **ordres de correu** per prendre un major rang d\'accions (com reclamar una tasca o demanar canvis a una revisió) sense necessitat d\'iniciar sessió a la interfície d\'usuari web. 
    Les ordres de correu són paraules clau que comencen amb un punt d\'exclamació, com `.!claim`..  Algunes ordres poden prendre paràmetres, com `.!assign alincoln`.. 
    Per utilitzar ordres de correu, escriviu una ordre per línia al principi o al final del vostre missatge de correu.  Per exemple, podeu escriure això en una resposta al correu electrònic de la tasca per reclamar la tasca: 
    ```
    !claim
    I\'ll take care of this.
    ```
    Quan Phabricator rebi el vostre correu, processarà primer qualsevol ordre i després enviarà el cos del missatge restant com a comentari.  Podeu executar múltiples ordres alhora: 
    ```
    !assign alincoln
    !close
    I just talked to @alincoln, and he showed me that he fixed this.
    ```',
      'Uninstalled' => 'Desinstal·lat',
      'Show Uninstalled Applications' => 'Mostra les aplicacions desinstal·lades',
      'Launchable' => 'Llançable',
      'Save Policies' => 'Desa les polítiques',
      'Browse Applications' => 'Navega per aplicacions',
      'To manage prototypes, enable them by setting %s in your configuration.' => 'Per gestionar prototips, activeu-los establint %s a la configuració de Phabricator.',
      'Prototype' => 'Prototipus',
      'Edit Policies: %s' => 'Editar Polítiques: %s',
      'Create New Application' => 'Crea una Aplicació Nova',
      'Extension' => 'Extensió',
      'Validation Failed' => 'La validació va Fallar',
      'Show Installed Applications' => 'Mostra les aplicacions instal·lades',
      '%s uninstalled this application.' => '%s ha desinstal·lat aquesta aplicació.',
      'Capability "%s" is not editable for this application.' => 'L\'aptitud "%s" no es pot editar amb aquesta aplicació.',
      'Mail Commands Overview' => 'Informació general dels comandaments de correu',
      'Show Launchable Applications' => 'Mostra les aplicacions que es poden llançar',
      'Show Released Applications' => 'Mostrar les aplicacions alliberades',
      'Show Non-Launchable Applications' => 'Mostra les aplicacions que no es poden llançar',
      '%s uninstalled %s.' => '%s ha desinstal·lat %s.',
      'This is very unusual and will leave you without any content on the home page. You should only do this if you are certain you know what you are doing.' => 'Això és molt inusual i us deixarà sense contingut a la pàgina principal de Phabricator. Només ho heu de fer si esteu segurs de saber el que feu.',
      'Can\'t set non-public policies to public.' => 'No pot posar polítiques no públiques a públic.',
      '%s installed %s.' => '%s ha instal·lat %s.',
      'Configure Application Forms' => 'Configureu els formularis de sol·licitud',
      'Show Applications w/ App Email Support' => 'Veure les aplicacions que admeten el correu electrònic de les aplicacions',
      'Uninstall' => 'Desinstal·la',
      'Can\'t set the policy to a policy you can\'t view!' => 'No es pot establir la política a una política que no podeu veure!',
      'This application is required and cannot be uninstalled.' => 'Aquesta aplicació no es pot desinstal·lar, perquè és necessària perquè funcioni Phabricator.',
      'Type an application name...' => 'Tecleja un nom d\'aplicació...',
      'Install %s application?' => 'Voleu instal·lar l\'aplicació %s?',
      'Quick Reference' => 'Referència ràpida',
      'Show Applications w/o App Email Support' => 'Vegeu les aplicacions que no admeten el correu electrònic de les aplicacions',
      'Are you absolutely certain you want to uninstall the Home application?' => 'Esteu absolutament segur de voler desinstal·lar l\'aplicació Home?',
      '%s changed the %s policy for application %s from %s to %s.' => '%s ha canviat la política de %s per a l\'aplicació %s de %s a %s.',
      'Configure creation and editing forms in Applications.' => 'Configureu formularis de creació i edició a Aplicacions.',
      'Show Prototype Applications' => 'Mostra aplicacions de prototipus',
      'This server is not currently configured to accept inbound mail. You won\'t be able to interact with objects over email until inbound mail is set up.' => 'Phabricator no està configurat actualment per acceptar el correu entrant. No podreu interactuar amb objectes per correu electrònic fins que no estigui configurat el correu entrant.',
      '%s changed the %s policy from %s to %s.' => '%s ha canviat la política de %s de %s a %s.',
      'Edit Application: %s' => 'Edita Aplicació: %s',
      'Show Third-Party Applications' => 'Mostra aplicacions de tercers',
      'This table summarizes the available mail commands. For details on a specific command, see the command section below.' => 'Aquesta taula resumeix les ordres de correu disponibles. Per obtenir detalls sobre una ordre específica, consulteu la secció d’ordres següent.',
      'Show All Applications' => 'Mostra totes les aplicacions',
    );
  }

}
