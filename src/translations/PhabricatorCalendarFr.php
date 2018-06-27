<?php

final class PhabricatorCalendarFr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr';
  }

  protected function getTranslations() {
    return array(
      'No events found.' => 'Pas d\'événements trouvés.',
      'New event icon.' => 'Nouvelle icône d’événement.',
      'Change the event icon.' => 'Modifier l’icône d’événement.',
      'Read information about events.' => 'Lire les informations concernant les événements.',
      'Drag and drop .ics files to upload them and import them into Calendar.' => 'Glisser et déposer les fichiers .ics pour les télécharger et les importer dans Calendar.',
      'Configure Calendar Event Forms' => 'Configurer les formulaires d’événement de Calendar',
      'You can not attach an ICS file to an import type other than an ICS import (type is "%s").' => 'Vous ne pouvez pas attacher un fichier ICS à un type d’importation autre qu’une importation ICS (le type est « %s »).',
      'Reload this source? Events imported from this source will be updated.' => 'Recharger cette source ? Les événements importés depuis cette source seront mis à jour.',
      '%s changed the automatic update frequency for this import.' => '%s a modifié la fréquence de mise à jour automatique pour cette importation.',
      'Import Disabled' => 'Importation désactivée',
      'File PHID "%s" is not valid or not visible.' => 'Le PHID « %s » du fichier n’est pas valide ou pas visible.',
      'Calendar Import' => 'Importation de calendrier',
      'You can not disable import of an ICS file because the entire import occurs immediately when you upload the file. There is no further activity to disable.' => 'Vous ne pouvez pas désactiver l’importation d’un fichier ICS parce que l’importation complète a lieu immédiatement quand vous téléchargez le fichier. Il n’y a pas d&activité ultérieure à désactiver.',
      'Meal' => 'Repas',
      'Not Attending Event' => 'N\'assiste pas à l\'événement',
      'ICS File' => 'Fichier ICS',
      'Event Host' => 'Hôte de l’événement',
      'Unable to Disable' => 'Impossible de désactiver',
      'Exports' => 'Exportations',
      'Query to execute.' => 'Requête à exécuter.',
      'Movie' => 'Film',
      'Official Business' => 'Occupation officielle',
      'Show invites the current viewer is invited to. This function includes events the user is invited to because a project they are a member of is invited.' => 'Afficher les invitations auxquelles le visiteur actuel est invité. Cette fonction inclut les événements auxquels l’utilisateur est invité parce qu’un projet dont il est membre est invité.',
      'End date and time of the event.' => 'Date et heure de fin de l\'événement.',
      'Edit This And All Later Events' => 'Modifier cela et tous les événements ultérieurs',
      '%s changed the host of %s from %s to %s.' => '%s a modifié l’hôte de %s de %s en %s.',
      'Reload event imports from the command line. Useful for testing and debugging importers.' => 'Recharger les importations d’événement depuis la ligne de commande. Utile pour tester et déboguer les importateurs.',
      'Start time of the event.' => 'Heure de début de l\'événement.',
      'Invitee "%s" identifies an object that does not exist or which you do not have permission to view.' => 'L’invitation « %s » identifie un objet qui n’existe pas ou que vous n’avez pas le droit de voir.',
      'Event icon.' => 'Icône de l\'événement.',
      'Too Frequent' => 'Trop fréquent',
      'Cancel this event?' => 'Supprimer cet événement ?',
      'You can not attach an ICS URI to an import type other than an ICS URI import (type is "%s").' => 'Vous ne pouvez pas attacher une URI d’ICS à un type d’importation autre qu’une importation d’URI d’ICS (le type est « %s »).',
      'This event is an instance of %s, and repeats every year.' => 'Cet événement est une instance de %s, et se répète chaque année.',
      'Uses Import Policy' => 'Utilise la politique d\'importation',
      'Weekly' => 'Hebdomadaire',
      'Anyone who knows the URI for this export can view all event details as though they were logged in with your account.' => 'Quiconque connaît l’URI pour cette exportation pourra voir tous les détails de l’événement, comme s’il était connecté avec votre compte.',
      'To RSVP to the event, specify the desired RSVP, like `!rsvp yes`. This table shows the configured names for rsvp\'s.
    %s
    If you specify an invalid rsvp, the command is ignored. This command has no effect if you do not specify an rsvp.' => 'Pour RSVP à l’événement, spécifier le RSVP souhaité, comme `!rsvp yes`. Cette table montre les noms configurés pour les rsvp.
    %s
    Si vous spécifiez un rsvp non valide, la commande est ignorée. Cette commande est sans effet si vous ne spécifiez pas de rsvp.',
      'Reinstate Event' => 'Rétablir l’événement',
      'Export private data.' => 'Exporter les données privées.',
      'Meeting' => 'Réunion',
      'event invitees' => 'invitations d’événement',
      'Configure how users create and edit exports.' => 'Configurer comment les utilisateurs créent et modifient les exportations.',
      'Calendar exports must have a query key.' => 'Les exportations de Calendar doivent avoir une clé de requête.',
      'List of import IDs to reload.' => 'Liste des ID d\'import à recharger.',
      '%s set %s to repeat yearly.' => '%s à configurer %s pour se répéter annuellement.',
      'Upcoming Events' => 'Événements imminents',
      'Adjust export mode.' => 'Ajuster le mode d’exportation.',
      'Imported Events' => 'Événements importés',
      'Queued for background import: data size (%s) exceeds limit for immediate processing (%s).' => 'Mis en file pour une importation en tâche de fond : la taille des données (%s) dépasse la limite pour un traitement immédiat (%s).',
      'Set the automatic update frequency.' => 'Configurer la fréquence de la mise à jour automatique.',
      '%s updated the event description for %s.' => '%s a mis à jour la description de l’événement pour %s.',
      'Cancel This And All Later Events' => 'Annuler celui-ci ainsi que tous les événements ultérieurs',
      '.ics URI' => 'URI d\' .ics',
      'Travel' => 'Voyage',
      '%s updated the invite list for %s, invited %s: %s; uninvited %s: %s.' => '%s a mis à jour la liste des invitations pour %s, invités à %s : %s ; non invités à %s : %s.',
      'Calendar Import Logs' => 'Journaux d’importation de Calendar',
      'This event is an instance of %s, and repeats every month.' => 'Cet événement est une instance de %s, et se répète tous les mois.',
      'Imported By' => 'Importé par',
      'Export Query as .ics' => 'Exporter la requête sous forme de .ics',
      'This export has an invalid mode ("%s").' => 'Cette exportation a un mode non valide (« %s »).',
      'Disable Export' => 'Désactiver l\'exportation',
      'Test rules which run when an event is created or updated.' => 'Tester les règles qui se lancent quand un événement est créé ou mis à jour.',
      'The host of an event can always view and edit it.' => 'L’hôte de cet événement peut toujours l’afficher et le modifier.',
      'Found orphaned child event ("%s") without a parent event ("%s").' => 'Événement enfant orphelin trouvé (« %s ») sans événement parent (« %s »).',
      '%s changed %s to repeat until %s.' => '%s a modifié %s pour se répéter jusqu’à %s.',
      'Cancel the event.' => 'Annuler l’événement.',
      'Change the end time of the event.' => 'Modifier l’heure de fin de l’événement.',
      '%s changed %s to an all day event.' => '%s a transformé %s en un événement quotidien.',
      'Import %d %s' => 'Importer %s %s',
      'Update frequency constant.' => 'Mettre à jour la constante de fréquence.',
      'True if the event is an all day event.' => 'Vrai si l’événement est un événement quotidien.',
      'Edit Event' => 'Modifier l’événement',
      'Calendar Export %s: %s' => 'Exportation de Calendar %s : %s',
      '%s is attending %s.' => '%s essaye %s.',
      'event host' => 'hôte de l’événement',
      '%s set %s to repeat monthly.' => '%s a défini %s pour se répéter tous les mois.',
      'Original Event' => 'Événement d’origine',
      'Event Start' => 'Début de l’événement',
      'Email Commands: Events' => 'Commandes de courriel : Événements',
      'Import %d' => 'Importer %s',
      'Invitees' => 'Invitations',
      'Recurring' => 'Récurrence',
      'Event must be recurring to have a recurrence end date.' => 'L’événement doit être récurrent pour avoir une date de fin de récurrence.',
      '%s declined this event.' => '%s a refusé cet événement.',
      'Cancelled Events' => 'Événements annulés',
      'New event name.' => 'Nouveau nom d’événement.',
      '%s from %s' => '%s de %s',
      'Host of the event.' => 'Hôte de l’événement.',
      'Create Export' => 'Créer l’exportation',
      'Mode "%s" is not a valid policy mode. Valid modes are: %s.' => 'Le mode « %s » n’est pas un mode de politique valide. Les modes valides sont : %s.',
      'Edit Export' => 'Modifier l’exportation',
      'No Automatic Updates' => 'Pas de mises à jour automatiques',
      '%s declined %s.' => '%s a refusé %s .',
      'Drop .ics Files to Import' => 'Déposer les fichiers .ics à importer',
      'Staycation' => 'Repos à domicile',
      'Can not materialize an event stub: this event is not a stub.' => 'Impossible de matérialiser une ébauche d’événement : cet événement n’est pas une ébauche.',
      'Reload Events' => 'Recharger les événements',
      '%s changed the start date for %s from %s to %s.' => '%s a modifié la date de début pour %s de %s en %s.',
      'Guide: Exporting Events' => 'Guide : Exporter des événements',
      'The host of this event can take this action.' => 'L’hôte de cet événement peut effectuer cette action.',
      '%s changed the host of this event from %s to %s.' => '%s a modifié l’hôte de cet événement de %s en %s.',
      'The event description.' => 'La description de l’événement.',
      'Event Fields' => 'Champs de l’événement',
      'New export mode.' => 'Nouveau mode d’exportation.',
      'Warning ("%s") while parsing ICS data (near line %s): %s' => 'Avertissement (« %s ») en analysant les données ICS (près de la ligne %s) : %s',
      'Make the event recurring.' => 'Rendre l’événement récurrent.',
      '%s set %s to repeat weekly.' => '%s a défini %s pour se répéter hebdomadairement.',
      'Description of the event.' => 'Description de l’événement.',
      'Started background processing.' => 'Processus démarré en tâche de fond.',
      'New Import' => 'Nouvelle importation',
      'Ignored duplicate event "%s" present in source.' => 'Événement « %s » dupliqué présent dans la source et ignoré.',
      'Import an event in ".ics" (iCalendar) format.' => 'Importer un événement au format « .ics » (iCalendar).',
      'Would you like to decline this event?' => 'Voulez-vous décliner cet événement ?',
      'Enable Export' => 'Autoriser l’exportation',
      'Imported' => 'Importé',
      'Import Events' => 'Importer des événements',
      'Only publicly available data is exported.' => 'Seules les données disponibles publiquement sont exportées.',
      'Calendar Imports' => 'Importations de Calendar',
      'End date is invalid.' => 'La date de fin est invalide.',
      '%s changed the icon for %s from %s to %s.' => '%s a modifié l’icône pour %s de %s en %s.',
      '.ics File' => 'Fichier .ics',
      'To import events, you must select a source to import from.' => 'Pour importer des événements, vous devez sélectionner une source depuis laquelle importer.',
      '[Calendar]' => '[Calendar]',
      'Unknown import trigger frequency "%s".' => 'Fréquence de déclenchement de l’importation « %s » inconnue.',
      'Calendar Import %s: %s' => 'Importation %s de Calendar : %s',
      'URI to import.' => 'URI à importer.',
      'No imported events.' => 'Aucun événement importé.',
      'Name of the event.' => 'Nom de l\'événement.',
      'Last instance of the event.' => 'Dernière instance de l’événement.',
      'Import Triggered' => 'Importation déclenchée',
      'This event is part of a series. Which events do you want to edit?' => 'Cet événement fait partie d’une série. Quels événements voulez-vous modifier ?',
      'This event has been imported from an external source and can not be edited.' => 'Cet événement a été importé depuis une source externe et ne peut pas être modifié.',
      'Calendar Export' => 'Exportation de Calendar',
      'Unable to load Calendar import with ID "%s".' => 'Impossible de charger une importation de Calendar avec l’ID « %s ».',
      'Away' => 'Parti',
      'Configure Calendar Import Forms' => 'Configurer les formulaires d’importation de Calendar',
      'Change the start time of the event.' => 'Modifier l’heure de démarrage de l’événement.',
      'An event can not be stopped from recurring once it has been made recurring. You can cancel the event.' => 'Un événement ne peut pas être arrêté dans sa récurrence une fois qu’il a été rendu récurrent. Vous pouvez annuler l’événement.',
      'Previous' => 'Précédent',
      'Disable this import? Events from this source will no longer be updated.' => 'Désactiver cette importation ? Les événements depuis cette source ne seront plus mis à jour.',
      'Importing "%s"...' => 'Importation de « %s »…',
      'Hosts' => 'Hôtes',
      'Create Event' => 'Créer un événement',
      'Failed to parse ICS data ("%s"): %s' => 'Échec d’analyse des données ICS (« %s ») : %s',
      'This event repeats every year.' => 'Cet événement se répète chaque année.',
      'Series Event' => 'Événement d’une série',
      'Users who are invited to an event can always view it.' => 'Les utilisateurs qui sont invités à un événement peuvent toujours le voir.',
      'Imported events can not be edited in Phabricator.' => 'Les événements importés ne peuvent pas être modifiés dans Phabricator.',
      'Change the host of the event.' => 'Modifier l’hôte de l’événement.',
      'Busy' => 'Occupé',
      '%s named this import %s.' => '%s a nommé cette importation %s.',
      'Decline Event' => 'Refuser l\'événement',
      'This event repeats every week.' => 'Cet événement se répète chaque semaine.',
      'New event host.' => 'Nouvel hôte d’événement.',
      'Marks this as an all day event.' => 'Marque cela comme un événement quotidien.',
      'Hosted by %s' => 'Hébergé par %s',
      'You must select an ".ics" file to import.' => 'Vous devez sélectionner un fichier « .ics » à importer.',
      'Test and debug notifications about upcoming events.' => 'Tester et déboguer les notifications sur les événements imminents.',
      'Create New Export' => 'Créer une nouvelle exportation',
      'Display Options' => 'Afficher les options',
      'Events must have a name.' => 'Les événments doivent être nommés.',
      'Export %d' => 'Exporter %s',
      'Can Not Edit Imported Event' => 'Impossible de modifier un événement importé',
      'Import or subscribe to a calendar in .ics format by URI.' => 'Importer ou s’inscrire à un agenda au format .ics par URI.',
      'Delete all events from this source.' => 'Supprimer tous les événements de cette source.',
      'Party' => 'Équipe',
      '%s changed this to an all day event.' => '%s a modifié ceci comme événement durant toute la journée.',
      'One-Time Event' => 'Evénement ponctuel',
      'Change the export query key.' => 'Modifier la clé de la requête d’exportation.',
      '%s imported an ICS file.' => '%s a importé un fichier ICS.',
      'All Day Event' => 'Evénément durant toute la journée',
      'New import name.' => 'Nouveau nom d\'import.',
      'True to delete imported events.' => 'Vrai pour supprimer les événements importés.',
      'Reinstate Only This Event' => 'Réinstancier seulement cet événement',
      '%s - %s, All Day' => '%s - %s, toute la journée',
      '%s uninvited %s attendee(s): %s.' => '%s n’a plus invité %s participant(s) : %s.',
      'New export query key.' => 'Nouvelle clé de requête d’exportation.',
      'Deleted Event' => 'Evénement supprimé',
      'Name of the import.' => 'Nom de l’importation.',
      'Enable Import' => 'Autoriser l\'importation',
      '%s invited %s attendee(s): %s; uninvited %s attendee(s): %s.' => '%s a invité %s participant(s) : %s ; n’a plus invité %s participant(s) : %s.',
      'Unable to copy from parent event: this is not a child event.' => 'Impossible de copier depuis l’événement parent : ceci n’est pas un événement enfant.',
      'Disable Import' => 'Arrêter les importations',
      'New event start time.' => 'Nouvelle heure de début de l’événement.',
      'Event Series' => 'Suite d’événements.',
      '%s cancelled %s.' => '%s a annulé %s.',
      'Sequence "%s" is not valid for event!' => 'La suite « %s » n’est pas valide pour l’événement !',
      'No imports found.' => 'Aucune importation trouvée.',
      'Show only upcoming events.' => 'Afficher seulement les événements imminents.',
      'ICS file to import.' => 'Fichier ICS à importer.',
      '%s is attending this event.' => '%s participe à cet événement.',
      'Imported events can only be viewed by users who can view the import source.' => 'Les événements importés ne peuvent être affichés que par les utilisateurs autorisés à voir la source d’importation.',
      'Daily' => 'Quotidien',
      'Event frequency "%s" is not valid. Valid frequencies are: %s.' => 'La fréquence « %s » de l’événement n’est pas valide. Les fréquences valides sont : %s.',
      'Configure how users create and edit imports.' => 'Configurer comment les utilisateurs créent et modifient les importations.',
      'Month View' => 'Affichage mensuel',
      'Fetched Calendar' => 'Agenda récupéré',
      'Yearly' => 'Annuel',
      'New event end time.' => 'Nouvelle heure de fin de l’événement.',
      'Create Import' => 'Créer une importation',
      '%s changed the query for this export.' => '%s a modifié la requête pour cette exportation.',
      'Import Type' => 'Type d’importation',
      'Never miss an episode ever again.' => 'Ne manquez plus jamais un épisode.',
      'This event is an instance of %s, and repeats every week.' => 'Cet événement est une instance de %s, et se répète chaque semaine.',
      'Change Invitees' => 'Modifier les invitations',
      'No events from this source currently exist. They may have failed to import, have been updated by another source, or already have been deleted.' => 'Aucun événement de cette source n’existe actuellement. Il se peut qu’il y ait eu un échec pendant leur importation, une mise à jour depuis une autre source, ou qu’ils aient déjà été supprimés.',
      'Sabbatical / Leave' => 'Sabbatique / Abandonné',
      '%s removed the name of this import (was: %s).' => '%s a supprimé le nom de cette importation (qui était : %s).',
      '(+%s more...)' => '(+%s plus…)',
      'Notify about events in the next __N__ minutes (default: 15). Setting this to a larger value makes testing easier.' => 'Notifier les événements dans les __N__ prochaines minutes (par défaut : 15). Le fixer à une valeur supérieure facilite les tests.',
      'Next Update' => 'Prochaine mise à jour',
      '%s changed the start date for this event from %s to %s.' => '%s a modifié la date de début de cet événement de %s en %s.',
      '%s created this event.' => '%s a créé cet événement.',
      'Edit this event and all events in the series which occur on or after %s. This will overwrite previous edits!' => 'Modifier cet événement et tous les événements de la série qui ont lieu après %s. Cela écrasera les modifications précédentes !',
      'All Events' => 'Tous les événements',
      'Interacting with Calendar Events' => 'Interaction avec les événements du calendrier',
      'Host PHID "%s" is not a valid user PHID.' => 'Le PHID « %s » de l’hôte n’est pas un PHID utilisateur valide.',
      'Delete all the events that were imported from this source? This action can not be undone.' => 'Supprimer tous les événements qui ont été importés depuis cette source ? Cette action ne peut pas être annulée.',
      'No exports found.' => 'Aucune exportation trouvée.',
      'Availability: %s' => 'Disponibilité : %s',
      'Away at %s until %s.' => 'Parti à %s jusqu’à %s.',
      'Reinstate only the event which occurs on %s.' => 'Réinstancier seulement l’événement qui a lieu sur %s.',
      'Users invited to the event.' => 'Utilisateurs invités à l’événement.',
      'Other event activity not listed above occurs.' => 'Une autre activité d’événement non listée ci-dessus s’est produite.',
      '%s enabled this export.' => '%s a activé cette exportation.',
      'Default view policy for newly created events.' => 'Politique d’affichage par défaut pour les événements nouvellement créés.',
      'Out of Range' => 'Hors de portée',
      'Unable to load file ("%s") for import.' => 'Impossible de charger le fichier (« %s ») pour l’importation.',
      'Create New Event' => 'Créer un nouvel événement',
      'ICS Parser Warning' => 'Avertissement de l’analyseur ICS',
      'Frequency' => 'Fréquence',
      'Conference' => 'Conférence',
      'Change the event frequency.' => 'Modifier la fréquence de l’événement.',
      'Cancel only the event which occurs on %s.' => 'Annuler seulement l’événement qui a lieu sur %s.',
      'Updated Event' => 'Événement mis à jour',
      '%s updated the import URI.' => '%s a mis à jour l’URI d’import.',
      'Calendar Exports' => 'Exportations de Calendar',
      'End date must be after start date.' => 'La date de fin doit être postérieure à la date de début.',
      'Calendar Events' => 'Événements de Calendar',
      '%s changed %s to repeat forever.' => '%s a modifié %s pour se répéter indéfiniment.',
      'Reload events imported from this source.' => 'Recharger les événements importés depuis cette source.',
      'End time of the event.' => 'Heure de fin de l’événement.',
      'No Events Imported' => 'Aucun événement importé',
      'Repeat until date is invalid.' => 'Répéter jusqu’à ce que la date ne soit plus valide.',
      'Automatic Updates' => 'Mises à jour automatiques',
      'Browse Invitees' => 'Regarder les invités',
      'Configure Calendar Export Forms' => 'Configurer les formulaires d’exportation de Calendar',
      'New event invitees.' => 'Nouveaux invités de l’événement.',
      'One time or recurring event.' => 'Événement ponctuel ou récurrent.',
      'Event host is required.' => 'L’hôte de l’événement est obligatoire.',
      '%s updated the event description.' => '%s a mis à jour la description de l’événement.',
      'Calendar User Guide' => 'Guide utilisateur de Calendar',
      'Reload Import' => 'Recharger l’importation',
      'Attending' => 'Participant',
      'ICS URI' => 'URI de ICS',
      'This event is part of a series. Which events do you want to cancel?' => 'Cet événement fait partie d’une série. Quels événements voulez-vous annuler ?',
      'Deleted event "%s" which is no longer present in the source.' => 'L’événement « %s » supprimé qui n’est plus présent dans la source.',
      'Cancel Event' => 'Annuler l’événement',
      'Update Hourly' => 'Mis à jour chaque heure',
      'Choose Import Type' => 'Choisir le type d’importation',
      'Unknown Message' => 'Message inconnu',
      '%s, All Day' => '%s, tous les jours',
      'ICS Parse Error' => 'Erreur d’analyse ICS',
      'Failed to load import with PHID "%s".' => 'Échec au chargement de l’importation avec le PHID « %s ».',
      '%s enabled this import.' => '%s a activé cette importation.',
      'Source URI' => 'URI source',
      'Cancel this event and all events in the series which occur on or after %s.' => 'Annuler cet événement et tous ceux de la série qui ont lieu à partir de %s.',
      'RSVP' => 'RSVP',
      'Apply transactions to create a new event or edit an existing one.' => 'Appliquer les transactions pour créer un nouvel événement ou modifier un existant.',
      'Recurring Event' => 'Événement récurrent',
      'Away until %s.' => 'Parti depuis %s.',
      'Day View' => 'Affichage quotidien',
      'Query key "%s" does not identify a valid event query.' => 'La clé de requête « %s » n’identifie pas une requête d’événement valide.',
      'Calendar exports must have a name.' => 'Les exportations de Calendar doivent avoir un nom.',
      'EVENT DETAIL' => 'DÉTAIL DE L’ÉVÉNEMENT',
      '%s renamed this import from %s to %s.' => '%s a renommé cette importation de %s en %s.',
      'Holiday' => 'Congé',
      'Create New Import' => 'Créer une nouvelle importation',
      'Ignored an event with an unsupported frequency rule ("%s"). Events which repeat more frequently than daily are not supported.' => 'Un événement avec une règle de fréquence non supportée (« %s ») a été ignoré. Les événements qui se répètent plus fréquemment que quotidiennement ne sont pas supportés.',
      'EVENT DESCRIPTION' => 'DESCRIPTION DE L’ÉVÉNEMENT',
      'Make Recurring' => 'Rendre récurrent',
      'Edit Only This Event' => 'Modifier seulement cet événement',
      'React to events being created or updated.' => 'Réagir aux événements créés ou mis à jour.',
      'New URI.' => 'Nouvelle URI.',
      'True to cancel the event.' => 'Vrai pour annuler l’événement.',
      'Import frequency "%s" is not valid. Valid frequencies are: %s.' => 'La fréquence d’importation « %s » n’est pas valide. Les fréquences valides sont : %s.',
      '%s created this export.' => '%s a créé cette exportation.',
      'Cancel Only This Event' => 'Annuler seulement cet événement',
      '%s uninvited %s attendee(s) to %s: %s.' => '%s n’a plus invité %s participant(s) à %s : %s.',
      'Disable the export.' => 'Désactiver l’exportation.',
      'Unable to generate a new child event for an event which is not a recurring parent event!' => 'Impossible de générer un nouvel événement enfant pour un événement qui n’est pas un événement parent récurrent !',
      'Edit Recurrence' => 'Modifier la récurrence',
      '%s converted this from an all day event.' => '%s l’a converti depuis un événement durant toute la journée.',
      'Ignored unsupported "%s" node present in source.' => 'Nœud « %s » non supporté ignoré présent dans la source.',
      'This event is an instance in an event series. To change the behavior for the series, edit the parent event.' => 'Cet événement est une instance dans une série d’événements. Pour modifier ce comportement pour la série, modifier l’événement parent.',
      'Delete Imported Events' => 'Supprimer les événements importés',
      '%s invited %s attendee(s) to %s: %s.' => '%s a invité %s participant(s) à %s : %s.',
      '%s set this event to repeat monthly.' => '%s a défini cet événement comme se répétant mensuellement.',
      'Coffee Meeting' => 'Réunion café',
      'Export as .ics' => 'Exporter comme .ics',
      'Orphan' => 'Orphelin',
      '%s invited %s attendee(s): %s.' => '%s a invité %s participant(s) : %s.',
      '%s changed the event icon from %s to %s.' => '%s a modifié l’icône de l’événement de %s en %s.',
      '[Reminder]' => '[Rappel]',
      'Delete Events' => 'Supprimer les événements',
      'Rename the event.' => 'Renommer l’événement.',
      '%s deleted imported events from this source.' => '%s a supprimé les événements importés depuis cette source.',
      'No Imported Events' => 'Aucun événement importé',
      'The name of the event.' => 'Le nom de l’événement.',
      'Hosted by %s on %s.' => 'Hébergé par %s sur %s.',
      'Rename the export.' => 'Renommer l’exportation.',
      'Invalid Trigger' => 'Déclencheur non valide',
      'Decline' => 'Décliner',
      'Unnamed Imported Event' => 'Événement importé non nommé',
      'Reinstate this event and all events in the series which occur on or after %s.' => 'Réinstancier cet événement et tous ceux de la série qui ont lieu à partir de %s.',
      'Edit Import: %s' => 'Modifier l’importation : %s',
      'Mark the event as a recurring event.' => 'Marquer l’événement comme récurrent.',
      'Specify at least one import ID to reload.' => 'Spécifier au moins un ID d’importation à recharger.',
      'Change invited users.' => 'Modifier les utilisateurs invités.',
      '%s created this import.' => '%s a créé cette importation.',
      'Update the event description.' => 'Mettre à jour la description de l’événement.',
      'Enable this export? Anyone who knows the export URI will be able to export the data.' => 'Activer cette exportation ? Quiconque connaît l’URI d’exportation pourra exporter les données.',
      'Update Daily' => 'Mettre à jour quotidiennement',
      'Duplicate Event' => 'Dupliquer l’événement',
      'Update Automatically' => 'Mettre à jour automatiquement',
      '%s changed this event to repeat until %s.' => '%s a modifié cet événement pour qu’il se répète jusqu’à %s.',
      'An event\'s start and end date and cancellation status changes.' => 'Les dates de début et de fin d’un événement et les modifications de l’état d’annulation.',
      'Accept' => 'Accepter',
      'This event is an instance of %s, and repeats every day.' => 'Cet événement est une instance de %s, et se répète chaque jour.',
      'True to cancel the import.' => 'Vrai pour annuler l’importation.',
      'Enable this import? Events from this source will be updated again.' => 'Activer cette importation ? Les événements depuis cette source seront mis à jour de nouveau.',
      'New export name.' => 'Nouveau nom d’exportation.',
      'Both Cancelled and Active Events' => 'Événements annulés ou actifs',
      'New event frequency.' => 'Nouvelle fréquence d’événement.',
      'Disable the import.' => 'Désactiver l’importation.',
      'Ignored an event with an out-of-range date. Only dates between 1970 and 2037 are supported.' => 'Un événement avec une date périmée a été ignoré. Seules les dates entre 1970 et 2037 sont supportées.',
      'Found no valid events to import.' => 'Aucun événement valide à importer trouvé.',
      'Busy at %s until %s.' => 'Occupé à %s jusqu’à %s.',
      'Import/Export' => 'Importer/Exporter',
      'Repeat Until' => 'Répéter jusqu’à',
      'Choose Event Icon' => 'Choisir l’icône de l’événement',
      'Start date and time of the event.' => 'Date et heure de début de l’événement.',
      'No Exports Configured' => 'Aucune exportation configurée',
      'Busy until %s.' => 'Occupé jusqu’à %s.',
      'Edit Event: %s' => 'Modifier l’événement : %s',
      'Cancel or restore the event.' => 'Annuler ou restaurer l’événement.',
      'Import Sources' => 'Importer les sources',
      'ICS File "%s"' => 'Fichier ICS « %s »',
      'Reinstate this event?' => 'Réinstancier cet événement ?',
      'Private User %d' => 'Utilisateur caché %s',
      'This event repeats every day.' => 'Cet événement se répète chaque jour.',
      '%s converted %s from an all day event.' => '%s a converti %s en un événement durant toute la journée.',
      'Importing Events' => 'Importation des événements',
      'Event Invitees' => 'Invités à l’événement',
      'Import .ics File' => 'Importer le fichier .ics',
      '%s set this event to repeat weekly.' => '%s a défini cet événement comme se répétant hebdomadairement.',
      'This event instance has not been created yet. Log in to create it.' => 'Cette instance d’événement n’a pas encore été créé. Connectez-vous pour la créer.',
      '%s changed the end date for %s from %s to %s.' => '%s a modifié la date de fin pour %s de %s en %s.',
      'Change when the event repeats until.' => 'Modifier jusqu’à quand l’événement se répète.',
      'Disable or restore the import.' => 'Désactiver ou restaurer l’importation.',
      'Ignored Node' => 'Nœud ignoré',
      'Change the policy mode for the export.' => 'Modifier le mode de politique pour l’exportation.',
      'Exporting Events' => 'Exportation des événements',
      'Monthly' => 'Mensuel',
      'Edit Import' => 'Modifier l’importation',
      '%s changed this event to repeat forever.' => '%s a modifié cet événement pour qu’il se répète indéfiniment.',
      'This event repeats every month.' => 'Cet événement se répète tous les mois.',
      'New final event time.' => 'Nouvelle heure de fin de l’événement.',
      'New event description.' => 'Nouvelle description de l’événement.',
      'Default edit policy for newly created events.' => 'Politique de modification par défaut pour les événements nouvellement créés.',
      'Events are only rendered indirectly.' => 'Les événements sont rendus seulement de façon indirecte.',
      'Privileged' => 'Privilégié',
      'Reinstate This And All Later Events' => 'Le réinstancier et tous les événements ultérieurs',
      'Name of the export.' => 'Nom de l’exportation.',
      'All Imports' => 'Toutes les importations',
      '%s changed the policy mode for this export from %s to %s.' => '%s a modifié le mode de politique pour cette exportation de %s à %s.',
      'Disable or restore the export.' => 'Désactiver ou restaurer l’exportation.',
      'RSVP to event.' => 'RSVP en événement.',
      'Rename the import.' => 'Renommer l’importation.',
      'Source File' => 'Fichier source',
      'Normal Event' => 'Événement normal',
      'Log Messages' => 'Messages du journal',
      '%s cancelled this event.' => '%s a annulé cet événement.',
      'You can not change your display availability for events you are not attending.' => 'Vous ne pouvez pas modifier votre disponibilité d’affichage pour les événements auxquels vous ne participez pas.',
      'Working From Home' => 'Travail depuis la maison',
      'Make the event an all day event.' => 'Faire de l’événement un événement durant toute la journée.',
      '%s set this event to repeat daily.' => '%s a défini cet événement pour se répéter quotidiennement.',
      'True to cancel the export.' => 'Vrai pour annuler l’exportation.',
      '%s disabled this export.' => '%s a désactivé cette exportation.',
      'All Exports' => 'Toutes les exportations',
      'You have not set up any events for export from Calendar yet. See the documentation for instructions on how to get started.' => 'Vous n’avez défini encore aucun événement à exporter de Calendar. Voir la documentation pour les instructions sur comment démarrer.',
      'Join' => 'Rejoindre',
      'Import .ics URI' => 'Importer l’URI .ics',
      'Configure how users create and edit events.' => 'Configurer comment les utilisateurs créent et modifient les événements.',
      '%s - %s' => '%s - %s',
      'CHANGES TO EVENT DESCRIPTION' => 'MODIFICATIONS DE LA DESCRIPTION DE L’ÉVÉNEMENT',
      '%s reloaded this event source.' => '%s a rechargé cette source d’événement.',
      'Imports' => 'Importations',
      '%s set %s to repeat daily.' => '%s a défini %s pour qu’il se répète quotidiennement.',
      '%s is starting in %s minute(s), at %s.' => '%s démarre dans %s minute(s), à %s.',
      'Ignored an event (%s) because the original version of this event was created here.' => 'Un événement (%s) ignoré parce que la version d’origine de cet événement a été créée ici.',
      '%s renamed this event from %s to %s.' => '%s a renommé cet événement de %s en %s.',
      'Cancelled Events Only' => 'Événements annulés uniquement',
      'Recurring event frequency.' => 'Fréquence d’événement récurrent.',
      'Disable this export? The export URI will no longer function.' => 'Désactiver cette exportation ? L’URI d’exportation ne fonctionnera plus.',
      '%s reinstated this event.' => '%s a réinstancié cet événement',
      'Triggered a periodic update.' => 'Une mise à jour périodique déclenchée.',
      'Unknown Message "%s"' => 'Message « %s » inconnu',
      'An event\'s name, status, invite list, icon, and description changes.' => 'Modifications du nom, de l’état, de la liste d’invités et de la description d’un événement.',
      'Configure an automatic update frequency.' => 'Configurer une fréquence de mise à jour automatique.',
      'You must select an ".ics" URI to import.' => 'Vous devez sélectionner une URI « .ics » à importer.',
      'Event queries which generate ghost events must include either a result limit or an end date, because they may otherwise generate an infinite number of results. This query has neither.' => 'Les requêtes d’événement qui génèrent des événements fantômes doivent inclure soit une limite de résultat, soit une date de fin, car sinon, ils peuvent générer un nombre infini de résultats. Cette requête n’a ni l’un ni l’autre.',
      'Users invited to this event can take this action.' => 'Les utilisateurs invités à cet événement peuvent effectuer cette action.',
      '%s disabled this import.' => '%s a désactivé cette importation.',
      'This event is part of a series. Which events do you want to reinstate?' => 'Cet événement fait partie d’une série. Quels événements voulez-vous réinstancier ?',
      'True to reload the import.' => 'Vrai pour recharger l’importation.',
      'Start date is invalid.' => 'La date de début n’est pas valide.',
      'Edit Export: %s' => 'Modifier l’exportation : %s',
      '%s renamed this export from %s to %s.' => '%s a renommé cette exportation de %s en %s.',
      'Type a user or project name, or function...' => 'Saisir un utilisateur ou un nom de projet, ou une fonction…',
      'Active Events Only' => 'Événements actifs uniquement',
      'Export only public data.' => 'Exporter uniquement les données publiques.',
      '%s changed the end date for this event from %s to %s.' => '%s a modifié la date de fin pour cet événement de %s en %s.',
      'Export' => 'Exporter',
      'Imported Event' => 'Événement importé',
      '%s set this event to repeat yearly.' => '%s a défini cet événement pour qu’il se répète chaque année.',
      'Health / Appointment' => 'Santé / Poste',
      'Unnamed Event "%s"' => 'Événement « %s » non nommé',
      'Recurrence' => 'Récurrence',
      'Join Event' => 'Rejoindre l’événement',
      'Field Trip' => 'Sortie scolaire',
      'Edit only the event which occurs at %s.' => 'Modifier seulement l’événement qui se produit à %s.',
      'External Invitee' => 'Invité externe',
      'Would you like to join this event?' => 'Voudriez-vous rejoindre cet événement ?',
      'This page documents the commands you can use to interact with events in Calendar. These commands work when creating new tasks via email and when replying to existing tasks.' => 'Cette page documente les commandes que vous pouvez utiliser pour interagir avec les événements dans Calendar. Ces commandes travaillent lors de la création de nouvelles tâches via courriel et lors de la réponse à des tâches existantes.',
      'List View' => 'Vue Liste',
      'Pet Activity' => 'Activité favorite',
      '%s reinstated %s.' => '%s a réinstancié %s.',
      'Mark the event as an all day event.' => 'Marquer l’événement comme durant toute la journée.',
      'Export %d %s' => 'Exporter %s %s',
    );
  }

}
