<?php

final class PhabricatorDoorkeeperNl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'nl';
  }

  protected function getTranslations() {
    return array(
  'Available publishers class names are:' => 'De beschikbare namen voor uitgeversklassen zijn:',
  'To enable synchronization into Asana, enter an Asana Workspace ID here.

NOTE: This feature is new and experimental.' => 'Om synchronisatie met Asana mogelijk te maken, voert u hier een Asana-werkruimte-ID in.

OPMERKING: Deze functie is nieuw en experimenteel.',
  'JIRA %s %s' => 'JIRA %s %s',
  'Workspace ID' => 'Werkruimte-ID',
  'DoorkeeperURIRef display mode "%s" is unknown.' => 'De weergavemodus van DoorkeeperURIRef "%s" is onbekend.',
  '%s has no visible object on the other side; this likely indicates the Asana task has been deleted.' => 'Aan de andere kant van %s is geen zichtbaar object te zien; dit duidt er waarschijnlijk op dat de Asana-taak is verwijderd.',
  'Using publisher \'%s\'.' => 'Gebruikmakend van uitgever \'%s\'.',
  'Connect to Other Software' => 'Verbinden met andere software',
  'When %s creates tasks in Asana, it can add the tasks to Asana projects based on which application the corresponding object in %s comes from. For example, you can add code reviews in Asana to a "Differential" project.

NOTE: This feature is new and experimental.' => 'Wanneer %s taken aanmaakt in Asana, kunnen deze taken worden toegevoegd aan Asana-projecten op basis van de toepassing waar het corresponderende object in %s vandaan komt. U kunt bijvoorbeeld codereviews in Asana toevoegen aan een project met de naam "Differential". 

OPMERKING: Deze functie is nieuw en experimenteel.',
  'Failed to update object %s using user %s.' => 'Het bijwerken van object %s met gebruiker %s is mislukt.',
  'You can find an Asana project ID by clicking the project in Asana and then examining the URL:

  lang=txt
  https://app.asana.com/0/12345678901234567890/111111111111111111
                          ^^^^^^^^^^^^^^^^^^^^
                        This is the ID to use.
' => 'U kunt de project-ID van Asana vinden door in Asana op het project te klikken en vervolgens de url te bekijken: 

  lang=txt
  https://app.asana.com/0/12345678901234567890/111111111111111111
                          ^^^^^^^^^^^^^^^^^^^^

Dit is de ID die u moet gebruiken.',
  'No Asana provider configured.' => 'Er is geen Asana-provider geconfigureerd.',
  'Asana integration options.' => 'Integratiemogelijkheden met Asana.',
  '⚠ DO NOT EDIT THIS TASK ⚠
☠ Your changes will not be reflected in %s.
☠ Your changes will be destroyed the next time state is synchronized.' => '⚠ WIJZIG DEZE TAAK NIET ⚠
☠ Uw wijzigingen worden niet doorgevoerd in %s .
☠ Uw wijzigingen worden verwijderd bij de volgende synchronisatie van de status.',
  'JIRA integration is configured not to post anything.' => 'De JIRA-integratie is zo geconfigureerd dat er geen berichten worden verzonden.',
  'Skipping main task update, object is no longer visible.' => 'De update van de hoofdtaak wordt overgeslagen, het object is niet langer zichtbaar.',
  'Doorkeeper' => 'Doorkeeper',
  'Imported From' => 'Geïmporteerd van',
  'No related users have linked Asana accounts.' => 'Er zijn geen gerelateerde gebruikers die Asana-accounts aan elkaar hebben gekoppeld.',
  'Story is about an unsupported object type.' => 'Het verhaal gaat over een objecttype dat niet wordt ondersteund.',
  'No JIRA provider configured.' => 'Er is geen JIRA-provider geconfigureerd.',
  '%s could not be loaded.' => '%s kon niet worden geladen.',
  'Expected "getDoorkeeperURIRef()" to return "null" or an object of type "DoorkeeperURIRef", but got %s from provider "%s".' => 'Verwacht werd dat "getDoorkeeperURIRef()" "null" of een object van het type "DoorkeeperURIRef" zou retourneren, maar er werd %s ontvangen van provider "%s".',
  'External Object' => 'Extern object',
  'JIRA %s' => 'JIRA %s',
  'Asana Task %s' => 'Asana-taak %s',
  'GitHub Issue %s' => 'GitHub-melding %s',
  'Asana Workspace ID to publish into.' => 'Asana-werkruimte-ID om in te publiceren.',
  'Removing subtask edge to %s, foreign object is not visible.' => 'Subtaakverbinding naar %s wordt verwijderd. Het vreemde object is niet zichtbaar.',
  'Integration with Asana' => 'Integratie met Asana',
  'Doorkeeper worker \'%s\' is not enabled.' => 'Doorkeeper-werker \'%s\' is niet ingeschakeld.',
  'Object has no followers or active/passive users.' => 'Het object heeft geen volgers of actieve/passieve gebruikers.',
  'Skipping main task update, cursor is ahead of the story.' => 'De hoofdtaakupdate wordt overgeslagen, de cursor staat voor het verhaal.',
  'Asana: %s' => 'Asana: %s',
  'Failed to load external object after collision.' => 'Het laden van het externe object is mislukt na een conflict.',
  'To specify projects to add tasks to, enter a JSON map with publisher class names as keys and a list of project IDs as values. For example, to put Differential tasks into Asana projects with IDs `123` and `456`, enter:

  lang=txt
  {
    "DifferentialDoorkeeperRevisionFeedStoryPublisher" : [123, 456]
  }
' => 'Om projecten te specificeren waaraan taken moeten worden toegevoegd, voert u een JSON-map in met de namen van de uitgeversklassen als sleutels en een lijst met project-ID\'s als waarden. Om bijvoorbeeld taken voor Differential toe te voegen aan Asana-projecten met ID\'s `123` en `456`, voert u het volgende in: 

  lang=txt
  {
    "DifferentialDoorkeeperRevisionFeedStoryPublisher" : [123, 456]
  }',
  'Synchronization of child task from Asana failed!' => 'Synchronisatie van subtaken vanuit Asana is mislukt!',
  'Expected external Asana account to have exactly one external account identifier, found %s.' => 'Er werd verwacht dat het externe Asana-account precies één externe account-ID zou hebben, maar er zijn er %s gevonden.',
  'Story is about an object with no linked JIRA issues.' => 'Het verhaal gaat over een object waaraan geen JIRA-issues zijn gekoppeld.',
  'GitHub User %s' => 'GitHub-gebruiker %s',
  'GitHub Issue ID "%s" is not properly formatted. Expected an ID in the form "owner/repository#123".' => 'Het GitHub-melding-ID "%s" is niet correct opgemaakt. Er werd een ID verwacht in de vorm "owner/repository#123".',
  'Workspace Name' => 'Werkruimtenaam',
  'This software is running in silent mode.' => 'Deze software draait in de stille modus.',
  'Unable to find any Asana user with valid credentials to pull an OAuth token out of.' => 'Er is geen Asana-gebruiker gevonden met geldige aanmeldgegevens om een OAuth-token van te verkrijgen.',
  'Synchronization of parent task from Asana failed!' => 'Synchronisatie van de hoofdtaak vanuit Asana is mislukt!',
  'Optional Asana projects to use as application tags.' => 'Optionele Asana-projecten die als toepassingstags kunnen worden gebruikt.',
  'The Asana Workspaces your linked account has access to are:

%s' => 'De Asana-werkruimtes waartoe uw gekoppelde account toegang heeft, zijn:

%s',
  'No users to act on linked JIRA objects.' => 'Er zijn geen gebruikers die handelingen kunnen uitvoeren op gekoppelde JIRA-objecten.',
  'Updating main task.' => 'Hoofdtaak bijwerken.',
  'Story object has no corresponding external JIRA objects.' => 'Het Story-object heeft geen overeenkomstige externe JIRA-objecten.',
);
  }

}
