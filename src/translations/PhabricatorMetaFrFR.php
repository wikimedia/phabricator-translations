<?php

final class PhabricatorMetaFrFR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr_FR';
  }

  protected function getTranslations() {
    return array(
      'Completely Break Everything' => 'Casser complètement Phabricator',
      'Information' => 'Informations',
      'Syntax' => 'Syntaxe',
      'You cannot install an installed application.' => 'Vous ne pouvez pas installer une application déjà installée.',
      'Show First-Party Applications' => 'Voir les applications originales',
      'Create Application' => 'Créer une application',
      'Unknown order "%s"!' => 'Tri inconnu : « %s » !',
      'Really Uninstall Application?' => 'Voulez-vous réellement désinstaller l’application ?',
      'Prototypes Not Enabled' => 'Prototypes désactivés',
      'Really uninstall the %s application?' => 'Voulez-vous réellement désinstaller l’application %s ?',
      'Policy does not exist.' => 'La politique n’existe pas.',
      'Launcher' => 'Lanceur',
      'This application is a prototype. %s' => 'Cette application est un prototype. %s',
      '%s installed this application.' => '%s a installé cette application.',
      'Confirmation' => 'Confirmation',
      'Explore More Applications' => 'Explorer plus d’applications',
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
    ' => 'Après avoir configuré Phabricator pour traiter le courriel entrant, vous pouvez interagir par courriel avec des objets (tels que les tâches et révisions). Pour des  informations sur la configuration de Phabricator, voir **[[%s|Configurer le courriel entrant]]**.
    Dans la plupart des cas, vous pouvez répondre au courriel que vous recevez depuis Phabricator afin de laisser des commentaires. Vous pouvez également utiliser des **commandes par courriel** pour effectuer une gamme élargie d’actions (comme prendre la main sur une tâche ou demander des changements à une révision) sans avoir besoin de vous connecter sur l’interface web.
    Les commandes par courriel sont des mots-clés qui commencent par un point d’exclamation, comme `!claim`. certaines commandes peuvent prendre des paramètres, comme `!assign alincoln`.
    Pour utiliser des commandes par courriel, écrivez une commande par ligne au début ou à la fin du corps de votre message. Par exemple, vous pourriez écrire ceci dans une réponse à un courriel de tâche, afin de prendre la main sur la tâche :
    ```
    !claim
    Je me charge de ceci.
    ```
    Quand Phabricator recevra votre courriel, il traitera d’abord toutes les commandes, puis postera le reste du corps du message en tant que commentaire. Vous pouvez exécuter plusieurs commandes en même temps :
    ```
    !assign alincoln
    !close
    Je viens de parler avec @alincoln et il m’a montré qu’il avait corrigé ceci.
    ```',
      'Uninstalled' => 'Désinstallée',
      'Show Uninstalled Applications' => 'Voir les applications désinstallées',
      'Launchable' => 'Lançable',
      'Save Policies' => 'Enregistrer les politiques',
      'Browse Applications' => 'Parcourir les applications',
      'To manage prototypes, enable them by setting %s in your configuration.' => 'Pour gérer les prototypes, activez-les en paramétrant %s dans votre configuration Phabricator.',
      'Prototype' => 'Prototype',
      'Edit Policies: %s' => 'Modifier les politiques : %s',
      'Create New Application' => 'Créer une nouvelle application',
      'Extension' => 'Extension',
      'Validation Failed' => 'La validation a échoué',
      'Show Installed Applications' => 'Voir les applications installées',
      '%s uninstalled this application.' => '%s a désinstallé cette application.',
      'Capability "%s" is not editable for this application.' => 'La capacité « %s » n’est pas modifiable pour cette application.',
      'Mail Commands Overview' => 'Vue générale des commandes de courriel',
      'Show Launchable Applications' => 'Afficher les applications lançables',
      'Show Released Applications' => 'Afficher les applications publiées',
      'Show Non-Launchable Applications' => 'Afficher les applications non lançables',
      '%s uninstalled %s.' => '%s a désinstallé %s.',
      'This is very unusual and will leave you without any content on the home page. You should only do this if you are certain you know what you are doing.' => 'Ceci est très inhabituel et vous laissera sans aucun contenu sur la page d’accueil de Phabricator. Vous ne devriez faire ceci que si vous avez l’assurance de savoir ce que vous faites.',
      'Can\'t set non-public policies to public.' => 'Impossible de rendre publiques des politiques non publiques.',
      '%s installed %s.' => '%s a installé %s.',
      'Configure Application Forms' => 'Configurer les formulaires d’application',
      'Show Applications w/ App Email Support' => 'Afficher les applications qui prennent en charge le courriel d’appli',
      'Uninstall' => 'Désinstaller',
      'Can\'t set the policy to a policy you can\'t view!' => 'Impossible de définir la politique pour une politique que vous ne pouvez pas voir !',
      'This application is required and cannot be uninstalled.' => 'Cette application ne peut pas être désinstallée car elle est nécessaire au fonctionnement de Phabricator.',
      'Type an application name...' => 'Saisissez un nom d’application...',
      'Install %s application?' => 'Installer l’application %s ?',
      'Quick Reference' => 'Référence rapide',
      'Show Applications w/o App Email Support' => 'Afficher les applications qui ne prennent pas en charge le courriel d’appli',
      'Are you absolutely certain you want to uninstall the Home application?' => 'Avez-vous la certitude absolue de vouloir désinstaller l’application Accueil ?',
      '%s changed the %s policy for application %s from %s to %s.' => '%s a changé la politique «  %s » pour l’application %s de « %s » en « %s ».',
      'Configure creation and editing forms in Applications.' => 'Configurer la création et la modification des formulaires dans les applications.',
      'Show Prototype Applications' => 'Afficher les applications prototypes',
      'This server is not currently configured to accept inbound mail. You won\'t be able to interact with objects over email until inbound mail is set up.' => 'Phabricator n’est pas configuré actuellement pour accepter les courriel entrants. Vous ne pourrez pas interagir par courriel avec les objets avant d’avoir configuré le courriel entrant.',
      '%s changed the %s policy from %s to %s.' => '%s a changé la politique « %s » de « %s » en « %s ».',
      'Edit Application: %s' => 'Modifier l’application : %s',
      'Show Third-Party Applications' => 'Afficher les applications tierces',
      'This table summarizes the available mail commands. For details on a specific command, see the command section below.' => 'Cette table résume les commande de courriel disponibles. Pour les détails sur une commande spécifique, consultez la section de commande en dessous',
      'Show All Applications' => 'Afficher toutes les applications',
    );
  }

}
