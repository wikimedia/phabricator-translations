<?php

final class PhabricatorMetaNl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'nl';
  }

  protected function getTranslations() {
    return array(
  'Completely Break Everything' => 'Maak alles helemaal kapot',
  'Information' => 'Informatie',
  'Syntax' => 'Syntaxis',
  'You cannot install an installed application.' => 'U kunt een reeds geïnstalleerde toepassing niet opnieuw installeren.',
  'Show First-Party Applications' => 'Toepassingen van eerste partij weergeven',
  'Create Application' => 'Toepassing aanmaken',
  'Unknown order "%s"!' => 'Onbekende orde "%s"!',
  'Really Uninstall Application?' => 'Toepassing echt verwijderen?',
  'Prototypes Not Enabled' => 'Prototypes niet ingeschakeld',
  'Really uninstall the %s application?' => 'Toepassing %s echt verwijderen?',
  'Policy does not exist.' => 'Het beleid bestaat niet.',
  'Launcher' => 'Launcher',
  'This application is a prototype. %s' => 'Deze toepassing is een prototype. %s',
  '%s installed this application.' => '%s heeft deze toepassing geïnstalleerd.',
  'Confirmation' => 'Bevestiging',
  'Explore More Applications' => 'Meer toepassingen ontdekken',
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
' => 'Nadat u de verwerking voor inkomende e-mail hebt ingesteld, kunt u via e-mail met objecten (zoals taken en versies) communiceren. Zie **[[ %s | Inkomende e-mail instellen ]]** voor meer informatie over het instelling van inkomende e-mail. In de meeste gevallen kunt u reageren op e-mails die u van deze server ontvangt om opmerkingen achter te laten. U kunt ook **mailcommando\'s** gebruiken om een groter aantal acties uit te voeren (zoals een taak claimen of wijzigingen in een versie aanvragen) zonder dat u hoeft aan te melden op de webinterface. Mailcommando\'s zijn trefwoorden die beginnen met een uitroepsteken, zoals `!claim`. Sommige opdrachten kunnen parameters accepteren, zoals `!assign alincoln`. Om mailcommando\'s te gebruiken, schrijft u één commando per regel aan het begin of einde van uw e-mailbericht. U kan bijvoorbeeld het volgende in een antwoordmail op een taak schrijven om de taak te claimen: 

```
!claim

Ik regel dit wel.
```


Wanneer %s uw e-mail ontvangt, verwerkt het eerst alle commando\'s en plaatst vervolgens de rest van het bericht als een reactie. U kunt meerdere commando\'s tegelijk uitvoeren: 

```
!assign alincoln
!close

Ik heb net met @alincoln gesproken en hij heeft me laten zien dat hij dit heeft opgelost.
```',
  'Uninstalled' => 'Verwijderd',
  'Show Uninstalled Applications' => 'Verwijderde toepassingen weergeven',
  'Launchable' => 'Uit te voeren',
  'Save Policies' => 'Beleid opslaan',
  'Browse Applications' => 'Toepassingen bekijken',
  'To manage prototypes, enable them by setting %s in your configuration.' => 'Om prototypes te beheren, kunt u ze inschakelen door %s in uw instellingen in te stellen.',
  'Prototype' => 'Prototype',
  'Edit Policies: %s' => 'Beleid bewerken: %s',
  'Create New Application' => 'Nieuwe toepassing aanmaken',
  'Extension' => 'Uitbreiding',
  'Validation Failed' => 'Validatie mislukt',
  'Show Installed Applications' => 'Geïnstalleerde toepassingen weergeven',
  '%s uninstalled this application.' => '%s heeft deze toepassing verwijderd.',
  'Capability "%s" is not editable for this application.' => 'De functionaliteit "%s" kan voor deze toepassing niet worden bewerkt.',
  'Mail Commands Overview' => 'Overzicht van e-mailcommando\'s',
  'Show Launchable Applications' => 'Uit te voeren toepassingen weergeven',
  'Show Released Applications' => 'Uitgebrachte toepassingen weergeven',
  'Show Non-Launchable Applications' => 'Niet uit te voeren toepassingen weergeven',
  '%s uninstalled %s.' => '%s heeft %s verwijderd.',
  'This is very unusual and will leave you without any content on the home page. You should only do this if you are certain you know what you are doing.' => 'Dit is zeer ongebruikelijk en zal ertoe leiden dat er geen inhoud meer op de startpagina staat. Doe dit alleen als u zeker weet wat u doet.',
  'Can\'t set non-public policies to public.' => 'Niet-openbare beleidsregels kunnen niet openbaar worden gemaakt.',
  '%s installed %s.' => '%s heeft %s geïnstalleerd.',
  'Configure Application Forms' => 'Toepassingsformulieren instellen',
  'Show Applications w/ App Email Support' => 'Toepassingen met app-e-mailondersteuning weergeven',
  'Uninstall' => 'Verwijderen',
  'Can\'t set the policy to a policy you can\'t view!' => 'U kunt geen beleid instellen dat u niet kunt inzien!',
  'This application is required and cannot be uninstalled.' => 'Deze toepassing is noodzakelijk en kan niet worden verwijderd.',
  'Type an application name...' => 'Voer een toepassingsnaam in...',
  'Install %s application?' => 'Toepassing %s installeren?',
  'Quick Reference' => 'Snel naslagwerk',
  'Show Applications w/o App Email Support' => 'Toepassingen zonder app-e-mailondersteuning weergeven',
  'Are you absolutely certain you want to uninstall the Home application?' => 'Weet u absoluut zeker dat u de Home-toepassing wilt verwijderen?',
  '%s changed the %s policy for application %s from %s to %s.' => '%s heeft het beleid van %s voor toepassing %s gewijzigd van %s naar %s.',
  'Configure creation and editing forms in Applications.' => 'Het aanmaken en bewerken van formulieren in Toepassingen instellen.',
  'Show Prototype Applications' => 'Prototype-toepassingen weergeven',
  'This server is not currently configured to accept inbound mail. You won\'t be able to interact with objects over email until inbound mail is set up.' => 'Deze server is momenteel niet ingesteld om inkomende e-mail te accepteren. U kunt pas via e-mail met objecten communiceren nadat inkomende e-mail is ingesteld.',
  '%s changed the %s policy from %s to %s.' => '%s heeft het beleid van %s gewijzigd van %s naar %s.',
  'Edit Application: %s' => 'Toepassing bewerken: %s',
  'Show Third-Party Applications' => 'Toepassingen van derde partij weergeven',
  'This table summarizes the available mail commands. For details on a specific command, see the command section below.' => 'Deze tabel geeft een overzicht van de beschikbare mailcommando\'s. Voor meer informatie over een specifieke opdracht, zie het gedeelte over commando\'s hieronder.',
  'Show All Applications' => 'Alle toepassingen weergeven',
);
  }

}
