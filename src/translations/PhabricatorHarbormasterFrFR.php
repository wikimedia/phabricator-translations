<?php

final class PhabricatorHarbormasterFrFR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr_FR';
  }

  protected function getTranslations() {
    return array(
      'Build Artifact' => 'Construire l’artéfact',
      'Plan %d %s' => 'Plan %s %s',
      'Waiting for Message' => 'En attente de message',
      'Harbormaster Artifacts' => 'Artefacts de Habormaster',
      'Updating build %d of buildable %s...' => 'Mise à jour de la construction %s du constructible %s...',
      'TEST RESULT' => 'RÉSULTAT DU TEST',
      'Browse Dependencies' => 'Parcourir les dépendances',
      'Unable to Pause Build' => 'Impossible d’interrompre la construction',
      'Search for builds by containing revision or repository.' => 'Rechercher des constructions par révision ou dépôt qui les contient.',
      'Started at %s' => 'Commencé à %s',
      'Valid Output' => 'Sortie valide',
      'Failed to gzdeflate() log data!' => 'Échec de décompression avec « gzdeflate() » des données des journaux !',
      'Deadlocked' => 'Verrouillé sans issue',
      'Buildkite did not return a "%s"!' => 'Buildkite n’a renvoyé aucun « %s » !',
      'For example:' => 'Par exemple :',
      'OK: Ignored event.' => 'OK : événement ignoré.',
      'Behavior: %s' => 'Comportement : %s',
      'Build Passed' => 'Construction réussie',
      'You can only restart some builds.' => 'Vous ne pouvez redémarrer que certaines constructions.',
      'Resume Build' => 'Reprendre la construction',
      'Retrieve information about Harbormaster build targets.' => 'Récupérer les informations sur les cibles de construction de Harbormaster.',
      'Unable to identify the protocol for URI "%s". URIs must be fully qualified and have an identifiable protocol.' => 'Impossible d’identifier le protocole de l’URI « %s ». Les URI doivent être pleinement qualifiées et avoir un protocole identifiable.',
      'Log Not Finalized' => 'Journal non finalisé',
      'PHID of the object this build is building.' => 'Le PHID de l’objet généré par cette construction.',
      'No build plans found.' => 'Aucun plan de construction trouvé.',
      'This plan can not be run manually.' => 'Ce plan ne peut pas être lancé manuellement.',
      'Artifact "%s" not found!' => 'Artéfact « %s » introuvable !',
      'Run a command on Drydock resource.' => 'Lancer une commande sur une ressource Drydock.',
      '%s Skipped Test(s)' => array(
        '%s test sauté',
        '%s tests sautés',
      ),
      'Severity of the message.' => 'Sévérité du message.',
      'The build plan for this build is configured to prevent users who can not edit it from issuing commands to the build, and you do not have permission to edit the build plan.' => 'Le plan de construction pour cette construction est configuré pour empêcher les utilisateurs qui ne peuvent pas la modifier d\'émettre des commandes à la construction, et vous n\'avez pas l\'autorisation de modifier le plan de construction.',
      'You can not pause a build that uses an autoplan.' => 'Vous ne pouvez pas suspendre une construction qui utilise une planification automatique.',
      'Search for targets with given statuses.' => 'Recherche les tâches avec les états donnés.',
      'Unsound' => 'Douteux',
      'Run a build in CircleCI.' => 'Lancer une construction dans CircleCI.',
      'View External Build Results' => 'Afficher les résultats de construction externe',
      'Build with Buildkite' => 'Construire avec Buildkite',
      'Attempt to load log bytes (%d - %d) failed: failed to load a single contiguous range. Actual ranges: %s.' => 'La tentative de chargement des octets du journal (%s – %s) a échoué : échec du chargement d’une seule plage contiguë. Plages réelles : %s.',
      'Not A Haiku' => 'Ce n’est pas un haïku',
      '%s Broken Test(s)' => '%s test(s) incorrect(s)',
      'Resuming' => 'Reprend le travail...',
      'Insufficient Build Plan Permission' => 'Autorisation insuffisante pour modifier le plan de construction',
      'Publishing "%s"...' => 'Publication en cours de « %s »...',
      'The name of the build target.' => 'Nom de la cible construite.',
      'Edit Plan' => 'Modifier le plan',
      'Use %s instead.' => 'Utiliser %s à la place.',
      'This test has too much data to display inline.' => 'Ce test contient trop de données pour être affiché en ligne.',
      'Run %d' => 'Exécuter %s',
      'Organization Name' => 'Nom de l’organisation',
      'True if this artifact has been released.' => 'Vrai si cet artéfact a été publié.',
      'Browse Builds' => 'Parcourir les constructions',
      'Expected "%s" property to contain a dictionary.' => 'La propriété « %s » attendue aurait dû contenir un dictionnaire.',
      'You must have edit permission on this build plan to pause, abort, resume, or restart it.' => 'Vous devez avoir la permission de modification sur ce plan de construction pour l’abandonner, le suspendre, le reprendre ou le recommencer.',
      'Really Delete Step?' => 'Vraiment supprimer l’étape ?',
      'or' => 'ou',
      'Completed' => 'Terminé',
      'Revisions are not sent for review until the build completes, but they will be sent for review even if it fails.' => 'Les révisions ne sont pas envoyées en relecture tant que la construction n’est pas terminée, mais elles le seront ensuite même en cas d’échec de construction.',
      'You can not resume this build because it is already restarting.' => 'Vous ne pouvez pas relancer cette construction car elle est déjà en cours de redémarrage.',
      'Output Artifacts' => 'Artéfacts en sortie',
      'Manage Build Plans' => 'Gérer les plans de construction',
      'Default Build Plan View Policy' => 'Politique par défaut de visualisation des plans de construction',
      'Choose a build target to attach the log to with "--target".' => 'Choisissez une cible de construction pour y attacher le journal avec « --target ».',
      'Build Preparing' => 'Préparation de la construction',
      'This test result has %s bytes of Remarkup test details. Remarkup blocks longer than %s bytes are not rendered inline when showing test summaries.' => 'Ce résultat de test contient %s octets de détails de test Remarkup. Les blocs Remarkup de plus de %s octets ne sont pas rendus en ligne lors de l’affichage des résumés de test.',
      'Edit Buildable' => 'Modifier le constructible',
      'Call includes "lint" parameter. This parameter must be omitted when the receiver is not a Build Target.' => 'L\'appel inclut le paramètre « lint ». Ce paramètre doit être omis lorsque le récepteur n\'est pas une cible de construction.',
      'This build can not be restarted because it is an automatic build.' => 'Cette construction ne peut pas être recommencée car c’est une construction automatique.',
      'Started After' => 'Commencé après',
      'Specify exactly one buildable, by object name.' => 'Spécifiez exactement un constructible par son nom d’objet.',
      'You can use this method to send control commands to Buildables and Builds.
    This table summarizes which object types may receive control commands:
    <table>
      <tr>
        <th>Object Type</th>
        <th>PHID Example</th>
        <th />
        <th>Description</th>
      </tr>
      <tr>
        <td>Harbormaster Buildable</td>
        <td>`PHID-HMBB-...`</td>
        <td>{icon check color=green}</td>
        <td>Buildables may receive control commands.</td>
      </tr>
      <tr>
        <td>Harbormaster Build</td>
        <td>`PHID-HMBD-...`</td>
        <td>{icon check color=green}</td>
        <td>Builds may receive control commands.</td>
      </tr>
      <tr>
        <td>Harbormaster Build Target</td>
        <td>`PHID-HMBT-...`</td>
        <td>{icon times color=red}</td>
        <td>You may **NOT** send control commands to build targets.</td>
      </tr>
    </table>
    You can send these commands:
    %s
    To send a command message, specify the PHID of the object you would like to
    receive the message using the `receiver` parameter, and specify the message
    type using the `type` parameter.
    ' => 'Vous pouvez utiliser cette méthode pour envoyer des commandes de contrôle aux constructibles et aux constructions.
    Ce tableau résume les types d\'objets pouvant recevoir des commandes de contrôle :
    <table>
     <tr>
      <th>Type d\'objet</th>
      <th>Exemple de PHID</th>
      <th />
      <th>Description</th>
     </tr>
     <tr>
      <td>Constructible Harbormaster</td>
      <td>`PHID-HMBB-...`</td>
      <td>{icon check color=green}</td>
      <td>Les constructibles peuvent recevoir des commandes de contrôle.</td>
     </tr>
     <tr>
      <td>Construction Harbormaster</td>
      <td>`PHID-HMBD-...`</td>
      <td>{icon check color=green}</td>
      <td>Les constructions peuvent recevoir des commandes de contrôle.</td>
     </tr>
     <tr>
      <td>Cible de construction Harbormaster</td>
      <td>`PHID-HMBT-...`</td>
      <td>{icon times color=red}</td>
      <td>Vous ne pouvez **PAS** envoyer de commandes de contrôle aux cibles de construction.</td>
     </tr>
    </table>
    Vous pouvez envoyer ces commandes :
    %s
    Pour envoyer un message de commande, spécifiez le PHID de l\'objet qui doit recevoir le message à l\'aide du paramètre `receiver` et spécifiez le type du message à l\'aide du paramètre `type`.',
      'Enable Plan' => 'Activer le plan',
      'Unable to Abort Build' => 'Impossible d’abandonner la construction',
      'Unable to Load File' => 'Changement impossible du fichier',
      'Edit Build: %s' => 'Modifier la construction : %s',
      'The object PHID of the object (usually a diff or commit) being built.' => 'Le PHID de l’objet (généralement un diff ou une validation) à construire.',
      'Build Target' => 'Cible de la construction',
      'Unable to determine how to fetch changes: this buildable does not identify a commit or a staging ref. You may need to configure a repository staging area.' => 'Impossible de déterminer comment récupérer les modifications : ce constructible n’identifie aucune validation ou ni aucune référence de transit. Vous devez peut-être configurer une zone de transit du dépôt.',
      'Failed to load build plan ("%s").' => 'Échec du chargement du plan de construction (« %s »).',
      'Run plan __id__ on __buildable__.' => 'Lancer le plan __id__ sur __buildable__.',
      'Step %d' => 'Étape %s',
      'Build Started' => 'Construction démarrée',
      'Done. Total byte size of affected logs: %s -> %s.' => 'Fait. Taille totale en octets des journaux affectés : %s → %s.',
      'Build %d: %s' => 'Construction %s : %s',
      '%s aborted this build.' => '%s a abandonné cette construction.',
      'Disable Build Plan' => 'Désactiver le plan de construction',
      'Search for targets of a given build.' => 'Rechercher les cibles d’une construction donnée.',
      'Enable Build Plan' => 'Activer le plan de construction',
      'Webhook Token' => 'Jeton d\'accroche Internet',
      'When creating an artifact, you will choose an `artifactType` from this table. These types of artifacts are supported:' => 'En créant un artéfact, vous choisirez un `artifactType` depuis ce tableau. Les types d’artéfacts suivants sont pris en charge :',
      'Aborting' => 'Abandon',
      '%s Other Test(s)' => '%s autre(s) test(s)',
      'A buildable inherits policies from the underlying object.' => 'Un constructible hérite des politiques de l’objet sous-jacent.',
      'Build Steps' => 'Étapes de construction',
      'Harbormaster Builds' => 'Constructions Harbormaster',
      '%s paused this build.' => '%s a suspendu cette construction.',
      'Sleep for %s seconds.' => 'Patiente durant %s secondes.',
      '%s created this build step.' => '%s a créé cette étape de construction.',
      'Buildable Name' => 'Nom du constructible',
      'If Complete' => 'Si terminé',
      'This object does not support builds with Buildkite.' => 'Cet objet ne prend pas en charge les constructions avec Buildkite.',
      'Search for targets completed on or before a particular date.' => 'Recherche de cibles terminées à une date particulière ou avant.',
      'Compress, decompress, store or destroy build logs.' => 'Compresser, décompresser, stocker ou détruire des journaux de construction.',
      'Target %d' => 'Cible %s',
      'The build the target is associated with.' => 'La construction à laquelle la cible est associée.',
      'Received' => 'Reçu',
      'Use "plain" to remove encoding, or "compress" to compress logs.' => 'Utilisez « plain » pour retirer l’encodage, ou bien « compress » pour compresser les journaux.',
      'Default Build Plan Edit Policy' => 'Politique par défaut de modification des plans de construction',
      'Unused Output' => 'Sortie inutilisée',
      'Abort Older Builds' => 'Interrompre les constructions plus anciennes',
      'Pause Build' => 'Suspendre la construction',
      'Interacting with External Build Systems' => 'En interaction avec des systèmes de construction externe',
      'Progress on this build will be discarded. Really abort build?' => 'Toute progression sur cette construction sera annulée. Abandonner vraiment la construction ?',
      'Artifact %d' => 'Artefact %s',
      'Path to the file containing the lint message, from the project root.' => 'Le chemin du fichier contenant le message « lint », à partir de la racine du projet.',
      'No artifacts found.' => 'Aucun artéfact trouvé.',
      'A build step has the same policies as its build plan.' => 'Une étape de construction suit les mêmes politiques que son plan de construction.',
      'Rebuilding log "%s"...' => 'Reconstruction du journal « %s »...',
      '%s Failed Test(s)' => '%s test(s) échoué(s)',
      'Unknown mode "%s". Valid modes are: %s.' => 'Mode « %s » inconnu. Les modes valides sont : « %s ».',
      'Wait for previous commits to finish building the current plan before continuing.' => 'Attend que les validations précédentes aient fini de construire le plan actuel avant de continuer.',
      'No handler found for %s' => 'Aucun gestionnaire trouvé pour %s',
      'Follow Log' => 'Suivre le journal',
      'You can not resume a build that uses an autoplan.' => 'Vous ne pouvez pas relancer une construction qui utilise une planification automatique.',
      'Explicitly update the builds for __buildable__.' => 'Mettre à jour explicitement les constructions pour __buildable__.',
      'Path to the file where the test is declared, relative to the project root.' => 'Le chemin du fichier où le test est déclaré, relatif à la racine du projet.',
      'Apply transactions to create a new build step or edit an existing one.' => 'Appliquer les transactions pour créer une nouvelle étape de construction ou en modifier une existante.',
      'Show more details about operations as they are performed. Slow! But also very reassuring!' => 'Montrer plus de détails sur les opérations lorsqu’elles sont réalisées. Lent ! Mais également très rassurant !',
      'Lint message code identifying the type of message, like "ERR123".' => 'Code de message de « lint » identifiant le type de message, comme « ERR123 ».',
      'Build will pause.' => 'La construction sera interrompue.',
      'This is an autoplan (a builtin plan provided by an application) so it can not be edited.' => 'Ceci est un plan automatique (un plan intégré fourni par une application), il ne peut donc pas être modifié.',
      'Make an authenticated HTTP %s request to %s.' => 'Envoyer une requête HTTP %s authentifiée à %s.',
      'The build target this artifact is attached to.' => 'La cible de construction à laquelle cet artefact est attaché.',
      'Sent a restart message to build.' => 'Envoi d\'un message de redémarrage à la construction.',
      'Line number in the file where the text which triggered the message first appears. The first line of the file is line 1, not line 0.' => 'Le numéro de ligne du fichier où le texte ayant activé le message apparaît en premier. La première ligne du fichier est la ligne 1 et non la ligne 0.',
      'Buildables' => 'Constructibles',
      'The artifact key.' => 'La clé de l’artéfact.',
      'Build step "%s" has step group key "%s", but no step group with that key exists.' => 'L’étape de construction « %s » a la clé de groupe d’étapes « %s », mais aucun groupe d’étapes n’existe avec cette clé.',
      'When Complete' => 'Une fois terminé',
      'Show all logs.' => 'Montrer tous les journaux.',
      'Invalid buildable PHID "%s".' => 'PHID du constructible « %s » invalide.',
      'Find out information about buildables.' => 'Trouver des informations sur les constructibles.',
      'ID of build plan to run.' => 'L’identifiant du plan de construction à lancer.',
      'Run Build Plan Manually' => 'Lancer le plan de construction manuellement',
      'Limit the rate at which the log is written, to test live log streaming.' => 'Limiter le débit d’écriture du journal, pour tester la diffusion en direct du journal.',
      'Running for %s' => 'Lancé pour %s',
      'Show More Above' => 'Afficher davantage ci-dessus',
      '**rebuild-log** --id __id__ [__options__]
    **rebuild-log** --all' => '**rebuild-log** --id __id__ [__options__]
    **rebuild-log** --all',
      '%s created this build plan.' => '%s a créé ce plan de construction.',
      'Search for builds running a given build plan.' => 'Recherchez les constructions qui exécutent un plan de construction donné.',
      'You do not have permission to create Harbormaster build plans.' => 'Vous n’avez pas la permission de créer des plans de construction Harbormaster.',
      'Epoch timestamp for target completion, if the target has completed.' => 'Horodatage d’époque de l’achèvement de la cible, si la cible est terminée.',
      'Build plan "%s" does not exist.' => 'Le plan de construction « %s » n’existe pas.',
      'You can not pause this build because it is already aborting.' => 'Vous ne pouvez pas suspendre cette construction car elle est déjà en cours d\'abandon.',
      'Pause the build.' => 'Suspendre la construction.',
      'Really resume %s build(s)?' => array(
        'Voulez-vous vraiment relancer la construction ?',
        'Voulez-vous vraiment relancer les %s constructions ?',
      ),
      'Uploaded File' => 'Fichier téléversé',
      'Force the buildable to update even if no build status changes occur during normal update.' => 'Forcer le constructible à se mettre à jour même si aucun changement d’état de construction ne se produit lors d’une mise à jour normale.',
      'INVALID' => 'NON VALIDE',
      'Unable to load object "%s" to receive message.' => 'Impossible de charger l\'objet « %s » pour recevoir le message.',
      'No such variable \'%s\'!' => 'Il n\'y a pas de variable « %s » !',
      'Request OK
    ' => 'Requête OK',
      'The object PHID of the Harbormaster Build being built.' => 'Le PHID d’objet de la construction Harbormaster à effectuer.',
      'Logs must be fully written and processed before they can be downloaded. This log is still being written or processed.' => 'Les journaux doivent être entièrement écris et traités avant qu’ils puissent être téléchargés. Ce journal est encore en cours d’écriture ou de traitement.',
      '%s restarted this build.' => '%s a recommencé cette construction.',
      'Harbormaster Buildables' => 'Constructibles Harbormaster',
      'Sleep' => 'Dormir',
      'Writing log, slowly...' => 'Écriture du journal, lentement...',
      'Unknown CircleCI build type "%s". Expected "%s" or "%s".' => 'Type de construction CircleCI « %s » inconnu. « %s » ou « %s » était attendu.',
      'You must openBuildLog() before you can append() content to the log.' => 'Vous devez appeler « openBuildLog() » avant « append() » pour ajouter du contenu au journal.',
      'Plan %d' => 'Plan %s',
      'Drydock: Run Command' => 'Drydock : exécuter une commande',
      'Abort the build, discarding progress.' => 'Abandonne la construction, abandonnant ainsi la progression.',
      'Buildables may receive control commands like "abort" and "restart". Sending a control command to a Buildable is the same as sending it to each Build for the Buildable.' => 'Les constructibles peuvent recevoir des commandes de contrôle telles que « abort » (abandonner) et « restart » (redémarrer). Envoyer une commande de contrôle à un constructible revient à l\'envoyer à chaque construction de ce constructible.',
      'Coverage information for this test.' => 'Informations de couverture de ce test.',
      'This attachment exists solely to provide compatibility with the message format returned by an outdated API method. It will be taken away at some point and you should not rely on these fields being available.' => 'Ces champs joints existent uniquement pour assurer la compatibilité avec le format de message renvoyé par une méthode obsolète de l’API. Ils seront supprimés à un moment donné et vous ne devez pas vous fier à la disponibilité de ces champs.',
      'The build plan name.' => 'Le nom du plan de construction.',
      'View Current Build' => 'Afficher la construction courante',
      'Next Steps' => 'Étapes suivantes',
      'Fragment' => 'Fragment',
      'Build target this log is attached to.' => 'Cible de la construction à laquelle ce journal est attaché.',
      'Work will continue on all builds. Really resume?' => 'Le travail continuera sur toutes les constructions. Reprendre vraiment ?',
      'Already Restarting' => 'Déjà en recommencement',
      'Stores a URI.' => 'Stocke une URI.',
      'Edit Build Step: %s' => 'Modifier l’étape de construction : %s',
      'rXYZ, R123, D456, ...' => 'rXYZ, R123, D456, ...',
      'Rebuild all logs.' => 'Reconstruire tous les journaux.',
      'Attempting to access unknown build status property ("%s").' => 'Tentative d’accès à une propriété inconnue (« %s ») d’état de construction.',
      'Rebuild the file and summary for a log. This is primarily intended to make it easier to develop new log summarizers.' => 'Reconstruire le fichier du journal et son résumé. Ceci est principalement destiné à faciliter le développement de nouveaux générateurs de résumé d’un journal.',
      'Standalone Log Fragment' => 'Fragment de journal autonome',
      'Harbormaster Build Steps' => 'Étapes de construction Harbormaster',
      'You can report test results when updating the state of a build target. The
    simplest way to do this is to report all the results alongside a `pass` or
    `fail` message, but you can also send a `work` message to report intermediate
    results.
    To provide unit test results, pass a list of results in the `unit`
    parameter. Each result should be a dictionary with these keys:
    %s
    The `result` parameter recognizes these test results:
    %s
    This is a simple, valid value for the `unit` parameter. It reports one passing
    test and one failing test:
    ```lang=json
    %s
    ```' => 'Vous pouvez signaler les résultats des tests lors de la mise à jour de l\'état d\'une cible de construction. Le moyen le plus simple de procéder consiste à signaler tous les résultats accompagnés d\'un message « pass » (réussi) ou « fail » (échec), mais vous pouvez également envoyer un message « work » (en cours) pour signaler les résultats intermédiaires.
    Pour fournir les résultats des tests des unités, transmettez une liste de résultats dans le paramètre « unit » (unité). Chaque résultat doit être un dictionnaire avec ces clés :
    %s
    Le paramètre « result » (résultat) reconnaît ces résultats de test :
    %s
    Voici un exemple de valeur simple et valide pour le paramètre « unit » (unité). Il présente un test réussi et un test échoué :
    ```lang=json
    %s
    ```',
      'Origin' => 'Origine',
      'Build Status' => 'État de la construction',
      'Run At' => 'Exécuter sur',
      'No build plan behavior with key "%s" exists.' => 'Aucun comportement de plan de construction n’existe avec la clé « %s ».',
      'The build may not be restarted.' => 'La construction ne peut pas être recommencée.',
      'Initiators' => 'Initiateurs',
      'Runtime duration of the test, in seconds.' => 'Durée d’exécution du test, en secondes.',
      'Lint Messages' => 'Messages de « lint »',
      'Missing Dependency' => 'Dépendance manquante',
      'Search for targets started on or after a particular date.' => 'Recherche de cibles commencées à une date particulière ou après.',
      'This target has no associated artifacts.' => 'Cette cible n’a aucun artéfact associé.',
      'Choose Build Statuses' => 'Choisir les états de construction',
      'Search for targets started on or before a particular date.' => 'Recherche de cibles commencées à une date donnée ou avant.',
      'New Step: %s' => 'Nouvelle étape : %s',
      'This build plan will deadlock when executed, due to circular dependencies present in the build plan. Examine the step list and resolve the deadlock.' => 'Ce plan de construction se bloquera en impasse lors de son exécution, en raison des dépendances circulaires présentes dans le plan de construction. Examinez la liste des étapes et résolvez cette impasse.',
      'This older log is missing required rendering data. To rebuild rendering data, run: %s' => 'Ce journal plus ancien n’a pas les données de rendu nécessaires. Pour reconstruire les données de rendu, exécutez : %s',
      '%s changed the %s behavior for this plan from %s to %s.' => '%s a changé le comportement %s pour ce plan de %s en %s.',
      'No such buildable "%s"!' => 'Constructible « %s » inexistant !',
      'Receiver object (of class "%s") is not a valid receiver.' => 'L\'objet récepteur (de classe « %s ») n\'est pas un récepteur valide.',
      'PHID of the object that is built.' => 'PHID de l’objet construit.',
      'Harbormaster Build Logs' => 'Journaux de construction Harbormaster.',
      'QUEUED' => 'EN FILE D’ATTENTE',
      'You can not abort this build because it is already complete.' => 'Vous ne pouvez pas abandonner cette construction car elle est déjà terminée.',
      'Retrieve information about Harbormaster build steps.' => 'Récupérer les informations sur les étapes de construction de Harbormaster.',
      'Edit Harbormaster Build Configurations' => 'Modifier les configurations de construction Harbormaster',
      'WARNING: This build step is new and experimental!
    To build **revisions** with CircleCI, they must:
      - belong to a tracked repository;
      - the repository must have a Staging Area configured;
      - the Staging Area must be hosted on GitHub; and
      - you must configure the webhook described below.
    To build **commits** with CircleCI, they must:
      - belong to a repository that is being imported from GitHub; and
      - you must configure the webhook described below.
    Webhook Configuration
    =====================
    Add this webhook to your `circle.yml` file to make CircleCI report results
    to Harbormaster. Until you install this hook, builds will hang waiting for
    a response from CircleCI.
    ```lang=yml
    notify:
      webhooks:
        - url: %s
    ```
    Environment
    ===========
    These variables will be available in the build environment:
    | Variable | Description |
    |----------|-------------|
    | `HARBORMASTER_BUILD_TARGET_PHID` | PHID of the Build Target.
    ' => 'AVERTISSEMENT : cette étape de construction est nouvelle et expérimentale !
    Pour générer des **révisions** avec CircleCI, elles doivent :
      - appartenir à un dépôt suivi ;
      - le dépôt doit avoir une zone de préparation (staging area) configurée ;
      - la zone de préparation doit être hébergée sur GitHub ;
      - vous devez configurer l\'accroche Internet décrite ci-dessous.
    Pour générer des **validations** avec CircleCI, elles doivent :
      - appartenir à un dépôt en cours d\'importation depuis GitHub ;
      - vous devez configurer l\'accroche Internet décrite ci-dessous.
    Configuration de l\'accroche Internet
    ====================================
    Ajoutez cette accroche Internet (webhook) à votre fichier `circle.yml` pour que CircleCI signale les résultats à Harbormaster. Tant que vous n\'aurez pas installé cette accroche, les constructions resteront suspendues en attente d\'une réponse de CircleCI.
    ```lang=yml
    notify:
      webhooks:
        - url: %s
    ```
    Environnement
    =============
    Ces variables seront disponibles dans l\'environnement de construction :
    | Variable | Description |
    |----------|-------------|
    | `HARBORMASTER_BUILD_TARGET_PHID` | PHID de la cible de construction. |',
      'Search for builds started by someone or something in particular.' => 'Rechercher les constructions démarrées par quelqu’un ou quelque chose en particulier.',
      'Any user who can view the plan can run it manually.' => 'Tout utilisateur qui peut visualiser le plan peut l’exécuter manuellement.',
      'When a build is restarted, side effects associated with the build may occur again.' => 'Lorsqu’une construction est recommencée, les effets secondaires associés à la construction peuvent se produire à nouveau.',
      'The build may be restarted.' => 'La construction peut être recommencée.',
      'Resume work on a previously paused build.' => 'Relancer le travail sur une construction précédemment interrompue.',
      'Automatic `arc unit` step.' => 'Étape automatique des « unités d\'arc ».',
      'Build Plan' => 'Plan de construction',
      'Drydock lease PHID "%s" does not correspond to a valid lease.' => 'Le PHID « %s » ne correspond à aucun bail Drylock valide.',
      'The name of this build.' => 'Le nom de cette construction.',
      'File PHID "%s" does not correspond to a valid file.' => 'Le PHID « %s » ne correspond à aucun fichier valide.',
      'Name one or more buildables to publish, like "B123".' => 'Indiquez une ou plusieurs constructibles à publier, comme « B123 ».',
      'Pausing' => 'Suspension',
      'Manual' => 'Manuel',
      'Harbormaster build objects work somewhat differently from objects in many other
    applications. Most application objects can be edited directly using synchronous
    APIs (like `maniphest.edit`, `differential.revision.edit`, and so on).
    However, builds require long-running background processing and Habormaster
    objects have a more complex lifecycle than most other application objects and
    may spend significant periods of time locked by daemon processes during build
    execution. A synchronous edit might need to wait an arbitrarily long amount of
    time for this lock to become available so the edit could be applied.
    Additionally, some edits may also require an arbitrarily long amount of time to
    //complete//. For example, aborting a build may execute cleanup steps which
    take minutes (or even hours) to complete.
    Since a synchronous API could not guarantee it could return results to the
    caller in a reasonable amount of time, the edit API for Harbormaster build
    objects is asynchronous: to update a Harbormaster build or build target, use
    this API (`harbormaster.sendmessage`) to send it a message describing an edit
    you would like to effect or additional information you want to provide.
    The message will be processed by the daemons once the build or target reaches
    a suitable state to receive messages.
    Select an object to send a message to using the `receiver` parameter. This
    API method can send messages to multiple types of objects:
    <table>
      <tr>
        <th>Object Type</th>
        <th>PHID Example</th>
        <th>Description</th>
      </tr>
      <tr>
        <td>Harbormaster Buildable</td>
        <td>`PHID-HMBB-...`</td>
        <td>%s</td>
      </tr>
      <tr>
        <td>Harbormaster Build</td>
        <td>`PHID-HMBD-...`</td>
        <td>%s</td>
      </tr>
      <tr>
        <td>Harbormaster Build Target</td>
        <td>`PHID-HMBT-...`</td>
        <td>%s</td>
      </tr>
    </table>
    See below for specifics on sending messages to different object types.' => 'Les objets de construction Harbormaster fonctionnent un peu différemment des objets de nombreuses autres applications. La plupart des objets d\'application peuvent être modifiés directement à l\'aide d\'API synchrones (comme `maniphest.edit`, `differential.revision.edit`, etc.).
    Cependant, les constructions nécessitent un traitement en arrière-plan de longue durée et les objets Habormaster ont un cycle de vie plus complexe que la plupart des autres objets d\'application. Ils peuvent passer des périodes de temps importantes verrouillés par des processus de services en arrière-plan lors de l\'exécution de la construction. Une modification synchrone peut devoir attendre un temps arbitrairement long pour que ce verrou soit libéré et que la modification puisse être appliquée.
    De plus, certaines modifications peuvent également nécessiter un temps arbitrairement long pour //se terminer//. Par exemple, l\'abandon d\'une construction peut exécuter des étapes de nettoyage qui prennent des minutes (voire des heures).
    Étant donné qu\'une API synchrone ne peut pas garantir qu\'elle puisse renvoyer des résultats à l\'appelant dans un délai raisonnable, l\'API d\'édition pour les objets de construction Harbormaster est asynchrone : pour mettre à jour une construction ou une cible de construction Harbormaster, utilisez cette API (`harbormaster.sendmessage`) pour lui envoyer un message décrivant une modification que vous souhaitez effectuer ou des informations supplémentaires que vous souhaitez fournir. Le message sera traité par les services en arrière-plan une fois que la construction ou la cible atteindra un état approprié pour recevoir des messages.
    Sélectionnez un objet auquel envoyer un message à l\'aide du paramètre `receiver` (récepteur). Cette méthode API peut envoyer des messages à plusieurs types d\'objets :
    <table>
     <tr>
      <th>Type d\'objet</th>
      <th>Exemple de PHID</th>
      <th>Description</th>
     </tr>
     <tr>
      <td>Constructible Harbormaster</td>
      <td>`PHID-HMBB-...`</td>
      <td>%s</td>
     </tr>
     <tr>
      <td>Construction Harbormaster</td>
      <td>`PHID-HMBD-...`</td>
      <td>%s</td>
     </tr>
     <tr>
      <td>Cible de construction Harbormaster</td>
      <td>`PHID-HMBT-...`</td>
      <td>%s</td>
     </tr>
    </table>
    Voir ci-dessous pour plus de détails sur l\'envoi de messages à différents types d\'objets.',
      'The name of the build step.' => 'Le nom de l’étape de construction.',
      'All Builds' => 'Toutes les constructions',
      'No such object "%s" exists.' => 'Objet « %s » inexistant.',
      'Object ("%s") claims "%s" is a GitHub repository URI, but the path ("%s") does not have enough components (expected at least two).' => 'L’objet (« %s ») prétend que « %s » est une URI de dépôt GitHub, mais le chemin (« %s ») n’a pas assez de composants (au moins deux sont attendus).',
      'Create Buildable' => 'Créer un constructible',
      'To run a build manually, you normally must have permission to edit the related build plan. If you would prefer that anyone who can see the build plan be able to run and restart the build, you can change the behavior here.
    Note that this controls access to all build management actions: "Run Plan Manually", "Restart", "Abort", "Pause", and "Resume".
    WARNING: This may be unsafe, particularly if the build has side effects like deployment.
    If you weaken this policy, an attacker with control of an account that has "Can View" permission but not "Can Edit" permission can manually run this build against any old version of the code, including versions with known security issues.
    If running the build has a side effect like deploying code, they can force deployment of a vulnerable version and then escalate into an attack against the deployed service.' => 'Pour exécuter une construction manuellement, vous devez normalement avoir l’autorisation de modifier le plan de construction associé. Si vous préférez que toute personne pouvant voir le plan de construction puisse exécuter et redémarrer la construction, vous pouvez modifier le comportement ici.
    Notez que cela contrôle l’accès à toutes les actions de gestion des constructions : « Exécuter le plan manuellement« », « Redémarrer », « Abandonner », « Suspendre » et « Reprendre ».
    ATTENTION : cela peut être dangereux, en particulier si la version a des effets secondaires comme un déploiement.
    Si vous affaiblissez cette politique, un attaquant contrôlant un compte disposant de l’autorisation « Peut afficher » mais pas de l’autorisation « Peut modifier » peut exécuter manuellement cette version sur n’importe quelle ancienne version du code, y compris les versions présentant des problèmes de sécurité connus.
    Si l’exécution de la construction a un effet secondaire comme le déploiement de code, il peut forcer le déploiement d’une version vulnérable, puis dégénérer en une attaque contre le service déployé.',
      'Build Log %d (%s - %s)' => 'Journal de construction %s (%s – %s)',
      'Lease Working Copy' => 'Copie de travail du bail',
      'No Build Plan Permission' => 'Aucune permission de plan de construction',
      'No behavior with key "%s" exists. Valid keys are: %s.' => 'Aucun comportement n’existe avec la clé « %s ». Les clés valides sont : %s .',
      'Nameless Test (%d)' => 'Test non nommé (%s)',
      'Really restart build?' => 'Vraiment recommencer la construction ?',
      '%s renamed this build plan from "%s" to "%s".' => '%s a renommé ce plan de construction de « %s » en « %s ».',
      'Completed After' => 'Terminé après',
      '%s resumed this buildable.' => '%s a relancé ce constructible.',
      'Force logs to rebuild even if they appear to be in good shape already.' => 'Forcer la reconstruction des journaux même s’ils paraissent être déjà en bon état.',
      'You can not process build log chunks unless the log lock is held.' => 'Vous ne pouvez traiter aucun tronçon de journal de construction tant que le verrou du journal est maintenu.',
      'Unit Tests' => 'Tests des unités',
      'No buildables found.' => 'Aucun constructible trouvé.',
      'Invalid build log PHID "%s".' => 'PHID de journal de construction « %s » non valide.',
      'References a host lease from Drydock.' => 'Référence un bail d’hôte émis par Drydock.',
      'Type a build status name...' => 'Saisissez un nom d’état de construction...',
      'Short message name, like "Syntax Error".' => 'Nom court du message, comme « Erreur de syntaxe ».',
      'Stores a reference to file data.' => 'Conserve une référence vers les données du fichier.',
      'Edit Step: %s' => 'Modifier l’étape : %s',
      'Optional namespace for this test. This is organizational and is often a class or module name, like "ExampleTestCase".' => 'Espace de noms facultatif pour ce test. Ceci est organisationnel et c’est souvent un nom de classe ou de module, comme « ExempleDeTestUnitaire ».',
      'Buildkite' => 'Buildkite',
      'Built for %s' => 'Construit pour %s',
      'Create a build artifact.' => 'Crée un artéfact de construction.',
      'Pause, abort, restart, and report results for builds.' => 'Met en pause, abandonne, redémarre et signale les résultats des constructions.',
      'Step Type' => 'Type d’étape',
      'You must openBuildLog() before you can closeBuildLog().' => 'Vous devez appeler « openBuildLog() » avant de pouvoir appeler « closeBuildLog() ».',
      'Unknown Input' => 'Entrée inconnue',
      'HTTP Request' => 'Requête HTTP',
      'Skipped' => 'Sauté',
      'Optional label for this URI.' => 'Libellé facultatif pour cette URI.',
      'Harbormaster' => 'Harbormaster',
      'Build Log' => 'Journal de construction',
      'Control Commands' => 'Commandes de contrôle',
      'If Viewable' => 'Si visible',
      'Users must be able to see a build target to view its build log.' => 'Les utilisateurs doivent pouvoir voir une construction cible pour voir son journal de construction.',
      'Waiting for %s' => 'En attente de %s',
      'Query Harbormaster buildables.' => 'Interroger les constructibles Harbormaster.',
      'Create Build Plan' => 'Créer un plan de construction',
      'Call omits required "type" parameter. Specify the type of message you want to send.' => 'L\'appel omet le paramètre « type » obligatoire. Spécifiez le type de message que vous souhaitez envoyer.',
      '%s disabled this build plan.' => '%s a désactivé ce plan de construction.',
      'Create Build' => 'Créer une construction',
      'Reading log content from stdin...' => 'Lecture du contenu du journal depuis l’entrée standard...',
      'No messages for this build target.' => 'Aucun message pour cette cible de construction.',
      'View in CircleCI' => 'Voir dans CircleCI',
      '%s aborted this buildable.' => '%s a arrêté ce constructible.',
      'Hold Drafts' => 'Conserver les brouillons',
      'All Plans' => 'Tous les plans',
      'You can not resume this build because it is already aborting.' => 'Vous ne pouvez pas relancer cette construction car elle est en cours d\'abandon.',
      'Unable to Resume Build' => 'Impossible de reprendre la construction',
      'WARNING: This build step is new and experimental!
    To build **revisions** with Buildkite, they must:
      - belong to a tracked repository;
      - the repository must have a Staging Area configured;
      - you must configure a Buildkite pipeline for that Staging Area; and
      - you must configure the webhook described below.
    To build **commits** with Buildkite, they must:
      - belong to a tracked repository;
      - you must configure a Buildkite pipeline for that repository; and
      - you must configure the webhook described below.
    Webhook Configuration
    =====================
    In {nav Settings} for your Organization in Buildkite, under
    {nav Notification Services}, add a new **Webhook Notification**.
    Use these settings:
      - **Webhook URL**: %s
      - **Token**: The "Webhook Token" field below and the "Token" field in
        Buildkite should both be set to the same nonempty value (any random
        secret). You can use copy/paste the value Buildkite generates into
        this form.
      - **Events**: Only **build.finish** needs to be active.
    Environment
    ===========
    These variables will be available in the build environment:
    | Variable | Description |
    |----------|-------------|
    | `HARBORMASTER_BUILD_TARGET_PHID` | PHID of the Build Target. |' => 'AVERTISSEMENT : cette étape de construction est nouvelle et expérimentale !
    Pour générer des **révisions** avec Buildkite, elles doivent :
      - appartenir à un dépôt suivi ;
      - le dépôt doit avoir une zone de préparation (Staging Area) configurée ;
      - vous devez configurer un pipeline Buildkite pour cette zone de préparation ;
      - et vous devez configurer l\'accroche Internet décrite ci-dessous.
    Pour générer des **validations** avec Buildkite, elles doivent :
      - appartenir à un dépôt suivi ;
      - vous devez configurer un pipeline Buildkite pour ce dépôt ;
      - et vous devez configurer l\'accroche Internet décrit ci-dessous.
    Configuration de l\'accroche Internet (webhook)
    =========================================
    Dans {nav Settings} pour votre organisation dans Buildkite, sous {nav Notification Services}, ajoutez une nouvelle **Webhook Notification** (notification d\'accroche Internet).
    Utilisez ces paramètres :
      - **Webhook URL** (URL de l\'accroche Internet) : %s
      - **Token** (jeton) : le champ « Webhook Token » (jeton de l\'accroche Internet) ci-dessous et le champ « Token » (jeton) dans Buildkite doivent être définis avec la même valeur non vide (n\'importe quel code secret aléatoire). Vous pouvez faire un copier/coller de la valeur générée par Buildkite vers ce formulaire.
      - **Events** (événements) : seul **build.finish** doit être actif.
    Environnement
    =============
    Ces variables seront disponibles dans l\'environnement de la construction :
    |             Variable             |             Description             |
    |----------------------------------|-------------------------------------|
    | `HARBORMASTER_BUILD_TARGET_PHID` | PHID de la cible de la construction |',
      'Runnable' => 'Exécutable',
      'No active Herald rules trigger this build.' => 'Aucune règle Herald active ne déclenche cette construction.',
      'You can not specify both "--id" and "--all". Choose one or the other.' => 'Vous ne pouvez pas spécifier à la fois « --id » et « --all ». Choisissez l’un ou l\'autre.',
      'Revisions are not sent for review until the build completes, and are returned to the author for updates if the build fails.' => 'Les révisions ne sont pas envoyées en relecture tant que la construction n’est pas terminée et elles sont renvoyées à leur auteur pour des mises à jour si la construction échoue.',
      'Invalid build ID "%s".' => 'Identifiant de construction « %s » non valide.',
      'This engine is used to edit Harbormaster builds.' => 'Ce moteur est utilisé pour modifier les constructions Harbormaster.',
      'Started Before' => 'Commencé avant',
      'The URI to store.' => 'L’URI à stocker.',
      'Type a build plan name...' => 'Saisissez un nom de plan de construction...',
      'Test' => 'Test',
      'Harbormaster Build %s ("%s") for %s' => 'Construction Harbormaster %s (« %s ») pour %s',
      'Updating Build Targets' => 'Mise à jour des cibles de construction',
      'Delete Build Step' => 'Supprimer une étape de construction',
      'Step %d.%d' => 'Étape %s.%s',
      'Log "%s" is still live. Logs can not be finalized until they have closed.' => 'Le journal « %s » est encore actif. Les journaux ne peuvent pas être finalisés tant qu’ils ne sont pas fermés.',
      'Use this method to attach artifacts to build targets while running builds. Artifacts can be used to carry data through a complex build workflow, provide extra information to users, or store build results.' => 'Utilisez cette méthode pour attacher des artéfacts pour construire les cibles lors de l’exécution des constructions. Les artéfacts peuvent être utilisés pour transporter des données via un processus de construction complexe, fournir des informations supplémentaires aux utilisateurs, ou bien stocker les résultats de construction.',
      'This engine is used to edit Harbormaster build steps.' => 'Ce moteur est utilisé pour modifier les étapes de construction de Harbormaster.',
      'Modify running builds, and report build results.' => 'Modifie les constructions en cours d\'exécution et rapporte les résultats des constructions.',
      'OK: No Harbormaster target PHID.' => 'OK : aucun PHID cible Harbormaster.',
      'Each artifact also needs an `artifactKey`, which names the artifact. Finally, you will provide some `artifactData` to fill in the content of the artifact. The data you provide depends on what type of artifact you are creating.' => 'Chaque artéfact a aussi besoin d’un `artifactKey` pour le nommer. Enfin, vous devez fournir des données `artifactData` pour renseigner son contenu. Les données que vous fournissez dépendent du type d’artéfact que vous créez.',
      'Local Name' => 'Nom local',
      'Long explanation of the lint message.' => 'Explication longue du message « lint ».',
      'This step has an invalid implementation (%s).' => 'Cette étape a une mise en œuvre non valide (%s).',
      'Build Target PHID' => 'PHID de la cible de la construction',
      'Build/CI' => 'Construire / CI',
      'rXabcdef, PHID-DIFF-1234, ...' => 'rXabcdef, PHID-DIFF-1234, ...',
      'Applying plan %s to new buildable %s...' => 'Application du plan %s au nouveau constructible %s...',
      'Bad Input Type' => 'Mauvais type d’entrée',
      'True if this is a manual buildable.' => 'Vrai si c’est un constructible manuel.',
      'Upload %s from %s.' => 'Téléverser %s depuis %s.',
      'Search for targets completed on or after a particular date.' => 'Recherche de cibles terminées à une date particulière ou après.',
      'Publish a buildable. This is primarily useful for developing and debugging applications which have buildable objects.' => 'Publie un constructible. Ceci est principalement utile pour développer et déboguer des applications ayant des objets constructibles.',
      'Search for builds running against particular buildables.' => 'Recherche les constructions s’exécutant sur des constructibles particuliers.',
      'Specify exactly one buildable object, by object name.' => 'Spécifie exactement un objet constructible, par son nom d’objet.',
      'Can Create Build Plans' => 'Peut créer des plans de construction',
      'You can not abort a build that uses an autoplan.' => 'Vous ne pouvez pas interrompre une construction qui utilise une planification automatique.',
      'You can not pause this build because it is already pausing.' => 'Vous ne pouvez pas mettre cette construction en pause car elle l\'est déjà.',
      'Add Build Step' => 'Ajouter une étape de construction',
      'No such build target "%s"!' => 'Cible de construction « %s » inexistante !',
      'My Builds' => 'Mes constructions',
      'Write rate must be more than 0 bytes/sec.' => 'Le débit en écriture doit être supérieur à 0 octet/seconde.',
      'Required Input' => 'Entrée obligatoire',
      'The current UNIX timestamp.' => 'L’horodatage Unix actuel.',
      'Object "%s" is not a Harbormaster Buildable!' => 'L’objet « %s » n’est pas un constructible Harbormaster !',
      'Length of the log in bytes.' => 'Longueur du journal en octets.',
      'Report that work on the target is ongoing. This message can be used to report partial results during a build.' => 'Signaler que le travail sur la cible est en cours. Ce message peut être utilisé pour signaler des résultats partiels lors d’une construction.',
      'Really pause %s build(s)?' => array(
        'Voulez-vous vraiment mettre en pause la construction ?',
        'Voulez-vous vraiment mettre en pause les %s constructions ?',
      ),
      'This group has no available build steps.' => 'Ce groupe n’a aucune étape de construction disponible.',
      'Stores a URI.
    With `ui.external`, you can use this artifact type to add links to build results in an external build system.' => 'Stocke une URI.
    Avec `ui.external`, vous pouvez utiliser ce type d’artéfact pour ajouter des liens vers les résultats de la construction dans un système de construction externe.',
      'CircleCI' => 'CircleCI',
      'Trigger a build in Buildkite.' => 'Déclencher une construction dans Buildkite.',
      'Call omits required "receiver" parameter. Specify the PHID of the object you want to send a message to.' => 'L\'appel omet le paramètre « receiver » obligatoire. Spécifiez le PHID de l\'objet auquel vous souhaitez envoyer un message.',
      'When' => 'Quand',
      'Search for only manual or automatic buildables.' => 'Recherche seulement les constructibles manuels ou automatiques.',
      'New plan name.' => 'Nouveau nom de plan.',
      'You can only abort some builds. Work will halt immediately on builds you can abort. Progress will be discarded, and builds must be completely restarted if you want them to complete.' => 'Vous ne pouvez interrompre que certaines constructions. Le travail s\'arrêtera immédiatement sur les constructions que vous pouvez interrompre. La progression sera annulée et les constructions devront être entièrement redémarrées si vous souhaitez les reprendre plus tard.',
      'Harbormaster Build Targets' => 'Cibles de construction de Harbormaster',
      'Sleep for a specified number of seconds.' => 'Patienter durant un nombre spécifié de secondes.',
      'The current status of this build.' => 'L’état actuel de cette construction.',
      'Reporting Lint Results' => 'Rapport des résultats Lint',
      'Make an HTTP %s request to %s.' => 'Effectuer une requête HTTP %s à %s.',
      'Status "%s" is not a valid build plan status. Valid statuses are: %s.' => 'L’état « %s » n’est pas un état de plan de construction valide. Les états valides sont : %s.',
      'A file containing the log data.' => 'Un fichier contenant les données du journal.',
      '<Invalid URI>' => '<URI non valide>',
      'You can not issue this command because you do not have permission to access the build plan for this build.' => 'Vous ne pouvez pas émettre cette commande car vous n\'avez pas l\'autorisation d\'accéder au plan de construction pour cette construction.',
      'Artifact Name' => 'Nom d’artéfact',
      'Build Artifact %d' => 'Construire l’artéfact %s',
      'Object "%s" is not a buildable!' => 'L’objet « %s » n’est pas un constructible !',
      'Use %s to specify a build plan to run.' => 'Utiliser %s pour spécifier un plan de construction à exécuter.',
      'Input Artifacts' => 'Artéfacts d’entrée',
      'Revisions are sent for review regardless of the status of the build.' => 'Les révisions sont envoyées en relecture quel que soit le statut de la construction.',
      'Unknown chunk encoding "%s"!' => 'Encodage de tronçon « %s » non reconnu !',
      'Object ("%s") claims "%s" is a GitHub repository URI, but the domain does not appear to be GitHub.' => 'L’objet (« %s ») prétend que « %s » est un URI de dépôt GitHub, mais le domaine ne semble pas être GitHub.',
      'Usually, builds may be restarted by users who have permission to edit the related build plan. (You can change who is allowed to restart a build by adjusting the "Runnable" behavior.)
    Restarting a build may be useful if you suspect it has failed for environmental or circumstantial reasons unrelated to the actual code, and want to give it another chance at glory.
    If you want to prevent a build from being restarted, you can change when it may be restarted by adjusting this behavior. This may be useful to prevent accidents where a build with a dangerous side effect (like deployment) is restarted improperly.' => 'Généralement, les constructions peuvent être redémarrées par les utilisateurs autorisés à modifier le plan de construction associé. (Vous pouvez changer qui est autorisé à redémarrer une construction en ajustant le comportement « Exécutable ».)
    Redémarrer une construction peut être utile si vous suspectez qu’elle a échoué pour des motifs circonstanciels ou liés à l’environnement et non liés au code réel, et si vous souhaitez alors lui donner une autre chance de réussir.
    Si vous voulez prévenir tout redémarrage d’une construction, vous pouvez changer quand elle peut être redémarrée en ajustant ce comportement. Cela peut être utile pour éviter des accidents où une construction ayant un effet secondaire dangereux (comme un déploiement) serait redémarrée de manière inappropriée.',
      'The name of this build plan.' => 'Le nom de ce plan de construction.',
      'Opened a new build log:' => 'Un nouveau journal de construction a été ouvert :',
      'Unable to determine how to clone the repository for this buildable: it is not associated with a tracked repository.' => 'Impossible de déterminer comment cloner le dépôt pour ce constructible : il n’est associé à aucun dépôt suivi.',
      '"arc land" never warns that the build is still running or has failed.' => '« arc land » n’avertit jamais qur la construction est toujours en cours d’exécution ou a échoué.',
      'This build can not be restarted because the build plan is configured to prevent the build from restarting unless it has failed, and it has not failed.' => 'Cette construction ne peut pas être redémarrée car le plan de construction est configuré pour empêcher la son redémarrage à moins qu’elle n’ait échoué, mais elle n’a pas échoué.',
      '"arc land" warns if the build has failed, but ignores the build if it is still running.' => '« arc land » avertit si la construction a échoué, mais ignore la construction si elle est toujours en cours d’exécution.',
      'View URI for the buildable.' => 'Voir l’URI pour le constructible.',
      'This build can not be restarted because the build plan is configured to prevent the build from restarting.' => 'Cette construction ne peut pas être redémarrée car le plan de construction est configuré pour empêcher son redémarrage.',
      'You can use this method (`harbormaster.sendmessage`) to send control commands
    to Buildables and Builds.
    Specify the Build or Buildable to receive the control command by providing its
    PHID in the `receiver` parameter.
    Sending a control command to a Buildable has the same effect as sending it to
    each Build for the Buildable. For example, sending a "Pause" message to a
    Buildable will pause all builds for the Buildable (or at least attempt to).
    When sending control commands, the `unit` and `lint` parameters of this API
    method must be omitted. You can not report lint or unit results directly to
    a Build or Buildable, and can not report them alongside a control command.
    More broadly, you can not report build results directly to a Build or
    Buildable. Instead, report results to a Build Target.
    See below for a list of control commands.
    ' => 'Vous pouvez utiliser la méthode (`harbormaster.sendmessage`) pour envoyer des commandes de contrôle aux constructibles et aux constructions.
    Spécifiez la construction ou le constructible qui recevra la commande de contrôle en fournissant son PHID dans le paramètre `receiver` (récepteur).
    L\'envoi d\'une commande de contrôle à un constructible a le même effet que son envoi à chaque construction de ce constructible. Par exemple, l\'envoi d\'un message "Pause" à un constructible mettra en pause toutes ses constructions (ou au moins tentera de le faire).
    Lors de l\'envoi de commandes de contrôle, les paramètres `unit` et `lint` de cette méthode API doivent être omis. Vous ne pouvez pas présenter les résultats de `lint` ou `unit` directement à une construction ou à un constructible, et vous ne pouvez pas leur présenter non plus une commande de contrôle.
    Plus généralement, vous ne pouvez pas présenter les résultats d\'une construction directement à une construction ou à un constructible. Au lieu de cela, présentez les résultats à une cible de construction.
    Voir ci-dessous pour une liste des commandes de contrôle.',
      'You must choose a name for your build plan.' => 'Vous devez choisir un nom pour votre plan de construction.',
      'Build Targets may receive build status and result messages, like "pass" or "fail".' => 'Les cibles de construction peuvent recevoir des états de construction et des messages de résultat tels que « pass » (réussi) ou « fail » (échec).',
      'If you abort all builds, work will halt immediately. Work will be discarded, and builds must be completely restarted.' => 'Si vous abandonnez toutes les constructions, le travail s’arrêtera immédiatement. Tout travail réalisé sera jeté et les constructions devront être entièrement recommencées.',
      'Reporting Unit Results' => 'Rapport des résultats de l\'unité',
      'Argument "%s" does not name a buildable. Provide one or more valid buildable monograms or PHIDs.' => 'L’argument « %s » n’identifie aucun constructible. Veuillez fournir un ou plusieurs monogrammes ou PHID de constructibles valides.',
      'Edit Step' => 'Modifier l’étape',
      'The ID of the current build.' => 'L’identifiant de la construction actuelle.',
      'Progress on running builds will be discarded.' => 'La progression des constructions en cours d’exécution sera mise au rebut.',
      'Submit builds into the build queue normally instead of running them in the foreground.' => 'Soumettre normalement les constructions dans la file de construction au lieu de les exécuter au premier plan.',
      '%s resumed this build.' => '%s a repris cette construction.',
      'This input is required, but not configured.' => 'Cette entrée est obligatoire, mais n’est pas configurée.',
      'Bad build target ID "%d".' => 'Mauvais identifiant de cible de construction « %s ».',
      'Edit Build' => 'Modifier la construction',
      'Restart %s build(s)?' => 'Recommencer %s construction(s) ?',
      'This build log is already open!' => 'Ce journal de construction est déjà ouvert !',
      'Show Only Automated Builds' => 'Afficher seulement les constructions automatiques',
      'Format for the text provided in "details". Valid values are "text" (default) or "remarkup". This controls how test details are rendered when shown to users.' => 'Format du texte fourni dans le champ « details ». Les  valeurs valides sont « text » (par défaut, pour du texte brut) ou « remarkup » (pour du texte balisé). Cela contrôle comment les détails du test sont rendus quand ils sont affichés aux utilisateurs.',
      'Build Target ID' => 'Identifiant de la cible de la construction',
      'Build will restart.' => 'La construction va redémarrer.',
      'Unable to load the file for this log. The file may have been destroyed.' => 'Impossible de charger le fichier pour ce journal. Le fichier a pu être détruit.',
      'Short test name, like "ExampleTest".' => 'Nom court du test, tel que « ExempleDeTest ».',
      'Active Plans' => 'Plans actifs',
      'Restartable' => 'Recommençable',
      'Unit %d' => 'Unité %s',
      'Harbormaster build target "%s" is not a Buildkite build step. Only Buildkite steps may be updated via the Buildkite hook.' => 'La cible de construction de Harbormaster « %s » n’est pas une étape de construction Buildkite. Seules les étapes Buildkite peuvent être mises à jour via le crochet Buildkite.',
      'Choose a build plan behavior for "%s".' => 'Choisissez un comportement de plan de construction pour « %s ».',
      'New View (Prototype)' => 'Nouvelle vue (prototype)',
      'After completing this build step Harbormaster can continue the build normally, or it can pause the build and wait for a message. If you are using this build step to trigger some work in an external system, you may want wait for that system to perform the work and report results back.
    If you select **Continue Build Normally**, the build plan will proceed once this step finishes.
    If you select **Wait For Message**, the build plan will pause indefinitely once this step finishes. To resume the build, an external system must call `harbormaster.sendmessage` with the build target PHID, and either `"pass"` or `"fail"` to indicate the result for this step. After the result is recorded, the build plan will resume.' => 'Après avoir terminé cette étape de construction, Harbormaster peut poursuivre la construction normalement ou la suspendre en attendant un message. Si vous utilisez cette étape de construction pour déclencher un travail dans un système externe, vous souhaitez peut-être attendre que ce système effectue le travail et vienne rapporter les résultats.
    Si vous choisissez **Poursuivre la construction normalement**, le plan de construction se poursuivra dès que l’étape sera achevée.
    Si vous choisissez **Attendre un message**, le plan de construction sera suspendu indéfiniment dès que cette étape est achevée. Pour reprendre la construction, un système externe devra appeler `harbormaster.sendmessage` avec le PHID de la cible de construction et avec `"pass"` (réussite) ou `"fail"` (échec) pour indiquer le résultat de cette étape. Une fois ce résultat enregistré, le plan de construction reprendra.',
      'Disable this build plan? It will no longer be executed automatically.' => 'Désactiver ce plan de construction’? Il ne sera plus exécuté automatiquement.',
      'Ship Some Freight' => 'Expédier du fret',
      '"arc land" warns if the build is still running or has failed.' => '« arc land » avertit si la construction est toujours en cours ou a échoué.',
      'View Details' => 'Afficher les détails',
      'Buildable' => 'Constructible',
      'Only users who can edit the plan can run it manually.' => 'Seuls les utilisateur qui peuvent visualiser le plan peuvent l’exécuter manuellement.',
      'Unable to find fetch!' => 'Impossible de trouver la récupération’!',
      'arc lint + arc unit' => 'arc Lint + unité d\'arc',
      '%s restarted this buildable.' => '%s a redémarré ce constructible.',
      'Really abort build?' => 'Abandonner vraiment les constructions ?',
      'The build step description.' => 'La description de l’étape de construction.',
      'Browse Build Plans' => 'Parcourir les plans de construction',
      'The PHID of the user or Object that initiated the build, if applicable.' => 'Le PHID de l’utilisateur ou de l’objet qui a initié la construction, le cas échéant.',
      'All Buildables' => 'Tous les constructibles',
      'Also Clone' => 'Cloner également',
      'Query information about build artifacts.' => 'Demander des informations sur les artéfacts de construction.',
      'Unable to Send Command' => 'Impossible d\'envoyer la commande',
      'No behavior option is marked as the default option (for behavior "%s"). Exactly one option must be marked as the default option.' => 'Aucune option de comportement n’est marquée comme option par défaut (pour le comportement « %s »). Une seule option doit être marquée comme option par défaut.',
      'Select all active builds.' => 'Sélectionner toutes les constructions actives.',
      'Preparing' => 'En cours de préparation',
      'Build Plans' => 'Plans de construction',
      'Edit Buildable: %s' => 'Modifier le constructible : %s',
      'Unable to load build target "%s".' => 'Impossible de charger la cible de construction « %s ».',
      'Retrieve information about Harbormaster build plans.' => 'Récupérer les informations sur les plans de construction de Harbormaster.',
      'File to create an artifact from.' => 'Fichier à partir duquel créer un artéfact.',
      'You can only resume some builds. Work will continue on builds you have permission to resume.' => 'Vous ne pouvez relancer que certaines constructions. Le travail continuera sur les constructions que vous avez l\'autorisation de relancer.',
      'All Artifacts' => 'Tous les artéfacts',
      'Attempt to load log bytes (%d - %d) failed: the loaded range (%d - %d) does not span the requested range.' => 'Échec de la tentative de chargement des octets (%s – %s) du journal : la plage chargée (%s – %s) ne couvre pas la plage demandée.',
      'The current status of this buildable.' => 'L’état actuel de ce constructible.',
      'Standalone Fragment' => 'Fragment autonome',
      'Wait For Message' => 'Attendre un message',
      'Builds may receive control commands like "pause", "resume", "abort", and "restart".' => 'Les constructions peuvent recevoir des commandes de contrôle telles que « pause », « resume » (poursuivre), « abort » (abandonner) et « restart » (redémarrer).',
      'Edit Build Plan' => 'Modifier le plan de construction',
      'Select one or more builds by ID.' => 'Sélectionnez une ou plusieurs construction par identifiant.',
      'Unable to find lines.' => 'Impossible de trouver les lignes.',
      '%s empty logs are hidden.' => array(
        '%s journal vide est masqué.',
        '%s journaux vides sont masqués.',
      ),
      'Delete Step' => 'Supprimer l’étape',
      'No builds found.' => 'Aucune construction trouvée.',
      'OK: Processed event.' => 'OK : événement traité.',
      'Status for the build target.' => 'État de la cible de construction.',
      'CircleCI did not return a "%s"!' => 'CircleCI n’a renvoyé aucun « %s » !',
      'Message Type' => 'Type de message',
      'Artifact Type' => 'Type d’artéfact',
      'Object "%s" is not a HarbormasterBuildable (it is a "%s"). Name one or more buildables to publish, like "B123".' => 'L’objet « %s » n’est pas un constructible Harbormaster (c’est un « %s »). Nommez un ou plusieurs constructibles à publier, tel que « B123 ».',
      'Load or create build autotargets.' => 'Charger ou créer des cibles automatiques de construction.',
      'Apply transactions to create a new build plan or edit an existing one.' => 'Appliquer les transactions pour créer un nouveau plan de construction ou en modifier un existant.',
      'Apply transactions to create a new build or edit an existing one.' => 'Applique des transactions pour créer une nouvelle construction ou en modifier une existante.',
      'Warn When Landing' => 'Avertir lors de l’atterrissage',
      'Attempting to access unknown buildable status property ("%s").' => 'Tentative d’accès à une propriété d’état du constructible inconnue (« %s »).',
      'The current status of this build plan.' => 'L’état actuel de ce plan de construction.',
      'Unknown Status ("%s")' => 'État (« %s ») inconnu',
      'You can not restart this build because you do not have permission to access the build plan.' => 'Vous ne pouvez pas redémarrer cette construction car vous n’avez pas la permission d’accéder au plan de construction.',
      'Edit Build Plan: %s' => 'Modifier le plan de construction : %s',
      'View in Buildkite' => 'Voir avec Buildkite',
      'Multiple behavior options (for behavior "%s") have the same key ("%s"). Each option must have a unique key.' => 'Plusieurs options de comportement (pour le comportement « %s ») ont la même clé (« %s »). Chaque option doit avoir une clé unique.',
      'No implementation is specified!' => 'Aucune mise en œuvre n’est spécifiée !',
      '(This is an explicit exception.)' => '(Ceci est une exception explicite.)',
      'Abort Build' => 'Abandonner la construction',
      'Artifacts' => 'Artéfacts',
      'Invalid Implementation ("%s")!' => 'Mise en œuvre (« %s ») non valide !',
      'Apply transactions to create a new buildable or edit an existing one.' => 'Applique des transactions pour créer un nouveau constructible ou en modifier un existant.',
      'View Full Test Results (%s)' => 'Voir les résultats de test complets (%s)',
      '<Unknown Artifact Type>' => '<Type d’artéfact inconnu>',
      'Multiple behavior options (for behavior "%s") are marked as default options ("%s" and "%s"). Exactly one option must be marked as the default option.' => 'Plusieurs options de comportement (pour le comportement « %s ») sont marquées comme options par défaut (« %s » et « %s »). Une seule d’entre elles doit être marquée comme option par défaut.',
      'Behavior configuration for the build plan.' => 'Configuration du comportement pour le plan de construction.',
      'You can not pause this build because it is already paused.' => 'Vous ne pouvez pas mettre cette construction en pause car elle l\'est déjà.',
      'Byte position on the line where the text which triggered the message starts. The first byte on the line is byte 1, not byte 0. This position is byte-based (not character-based) because not all lintable files have a valid character encoding.' => 'Position en octets sur la ligne où commence le texte ayant déclenché le message. Le premier octet sur la ligne est l’octet 1, et non l’octet 0. Cette position est basée sur le comptage des octets (et non des caractères) car les fichiers analysables par « lint » n’ont pas tous un encodage de caractères valide.',
      'Unable to inflate log chunk!' => 'Impossible de décompresser le tronçon de journal !',
      'Search for artifacts attached to particular build targets.' => 'Rechercher des artéfacts attachés à des cibles de construction particulières.',
      'Testing Utilities' => 'Utilitaires de test',
      'Search for builds with given statuses.' => 'Recherche des constructions avec les états donnés.',
      'Restart Harbormaster builds.' => 'Recommencer les constructions Harbormaster.',
      'Value "%s" is not a valid option for behavior "%s". Valid options are: %s.' => 'La valeur « %s » n’est pas une option valide pour le comportement « %s ». Les options valides sont : %s.',
      'Automatic `arc lint` step.' => 'Étape `arc lint` automatique.',
      'PHID of the object containing this buildable.' => 'PHID de l’objet contenant ce constructible.',
      'Call includes "unit" parameter. This parameter must be omitted when the receiver is not a Build Target.' => 'L\'appel inclut le paramètre « unit ». Ce paramètre doit être omis lorsque le récepteur n\'est pas une cible de construction.',
      'Variables' => 'Variables',
      'The buildable does not wait for the build.' => 'Le constructible n’attend pas la construction.',
      'Unknown Unit Message ("%s")' => 'Message d\'unité (« %s ») inconnu',
      '%s: %s -> %s' => '%s : %s → %s',
      'Search for builds of particular objects.' => 'Rechercher les constructions d’objets particuliers.',
      'Show More Below' => 'Afficher davantage ci-dessous',
      'Search for targets created on or after a particular date.' => 'Recherche de cibles créées à une date particulière ou après.',
      'Build Target ID to attach the log to.' => 'Identifiant de la construction cible à laquelle attacher le journal.',
      'Restart Builds' => 'Recommencer les constructions',
      'Additional human-readable information about the failure.' => 'Informations supplémentaires lisibles par un humain concernant l’échec.',
      'Trigger a build in CircleCI.' => 'Déclenche une construction sur CircleCI.',
      'Aborted' => 'Abandonné',
      'Create Build Step' => 'Créer une étape de construction',
      'Plan Behaviors' => 'Planifier les comportements',
      'If true, display this URI in the UI as an link to additional build details in an external build system.' => 'Si vrai, afficher cet URI sur l’interface utilisateur en tant que lien vers des détails supplémentaires de construction dans un système de construction externe.',
      'Write a new Harbormaster build log. This is primarily intended to make development and testing easier.' => 'Écrire un nouveau journal de construction Harbormaster. Ceci est principalement destiné à faciliter le développement et les tests.',
      'Update only this build.' => 'Mettre à jour seulement cette construction.',
      'Pause Builds' => 'Suspendre les constructions',
      'Search for targets created on or before a particular date.' => 'Recherche de cibles créées à une date particulière ou avant.',
      'Run build plans' => 'Exécuter les plans de construction',
      'Use one of "--id" or "--active" to select builds, but not both.' => 'Utilisez soit « --id », soit « --active » pour sélectionner des constructions, mais pas les deux.',
      'Resume Builds' => 'Reprendre les constructions',
      'RESTARTING' => 'RECOMMENCEMENT',
      'This build step has since been deleted on the build plan.  Some information may be omitted.' => 'Cette étape de construction a depuis été supprimée du plan de construction. Certaines informations peuvent être omises.',
      'There is no implementation available for artifacts of type "%s".' => 'Il n’y a aucune mise en œuvre disponible pour les artéfacts de type « %s ».',
      'Build Step' => 'Étape de construction',
      '**publish** __buildable__ ...' => '**publier** __buildable__ ...',
      'Syntax Error' => 'Erreur de syntaxe',
      'This dependency specifies a build step which doesn\'t exist.' => 'Cette dépendance spécifie une étape de construction qui n’inexiste pas.',
      'All builds will restart.' => 'Toutes les constructions vont redémarrer.',
      'Valid Input' => 'Entrée valide',
      'This input is bound to an artifact ("%s") which does not exist at this stage in the build process.' => 'Cette entrée est liée à un artéfact (« %s ») qui n’existe pas à cette étape dans le processus de construction.',
      'Unknown log chunk encoding ("%s")!' => 'Encodage du tronçon de journal (« %s ») inconnu !',
      'No builds to restart.' => 'Aucune construction à recommencer.',
      'Build target ("%s") has the wrong type of build step. Only CircleCI build steps may be updated via the CircleCI webhook.' => 'La cible de construction (« %s ») a un mauvais type d’étape de construction. Seules les étapes de construction CircleCI peuvent être mises à jour via l\'accroche Internet CircleCI.',
      'Completed at %s' => 'Terminé à %s',
      'Build' => 'Construire',
      'Make HTTP Request' => 'Faire une Requête HTTP',
      'Really pause build?' => 'Suspendre réellement la construction ?',
      'If updating generates tasks, queue them for the daemons instead of executing them in this process.' => 'Si la mise à jour génère des tâches, les mettre en file d’attente pour les services en arrière-plan au lieu de les exécuter dans ce processus.',
      'This build plan does not have any build steps yet, so it will not do anything when run.' => 'Ce plan de construction ne comporte encore aucune étape de construction, il ne fera donc rien lorsqu’il sera exécuté.',
      'Type another build step name...' => 'Saisissez le nom d’une autre étape de construction...',
      'Buildable %d' => 'Constructible %s',
      'Really restart %s build(s)?' => array(
        'Voulez-vous vraiment redémarrer la construction ?',
        'Voulez-vous vraiment redémarrer les %s constructions ?',
      ),
      '"arc land" warns if the build is still running, but ignores the build if it has failed.' => '« arc land » avertit si la construction est toujours en cours d’exécution, mais ignore la construction si elle a échoué.',
      'Recent Builds' => 'Constructions récentes',
      'Rename the plan.' => 'Renommer le plan.',
      'Edit Harbormaster Build Step Configurations' => 'Modifier les configurations d’étapes de construction de Harbormaster',
      'Users must be able to see a build target to see its artifacts.' => 'Les utilisateurs doivent pouvoir voir une construction cible pour voir ses artéfacts.',
      'Build Failed' => 'Échec de la construction',
      'The buildable waits for the build, and fails if the build fails.' => 'Le constructible attend la construction et échoue si la construction échoue.',
      'References a working copy lease from Drydock.' => 'Fait référence à un bail de copie de travail fourni par Drydock.',
      'PHID of the build plan being run.' => 'PHID du plan de construction en cours d’exécution.',
      'Build Log %d' => 'Journal de construction %s',
      'Queued at %s' => 'Mis en file d’attente à %s',
      'Pipeline Name' => 'Nom du pipeline',
      'You must have edit permission on this build plan to run it manually.' => 'Vous devez avoir une permission de modification sur ce plan de construction pour l’exécuter manuellement.',
      'Data Hash' => 'Valeur de hachage des données',
      'Automatic Buildable' => 'Constructible automatique',
      'Lines' => 'Lignes',
      'Updating Builds' => 'Mise à jour des constructions',
      'The specified buildable does not have a build with ID "%s".' => 'Le constructible spécifié n’a pas de construction avec l’ID « %s ».',
      'If Building' => 'En cas de construction',
      'Find out information about builds.' => 'Découvrez des informations sur les constructions.',
      'Edit Build Step' => 'Modifier l’étape de construction',
      'Edit Harbormaster Build Plan Configurations' => 'Modifier les configurations de plans de construction Harbormaster',
      'Buildkite request to target "%s" had the wrong authentication token. The Buildkite pipeline and Harbormaster build step must be configured with the same token.' => 'La requête Buildkite pour cibler « %s » avait le mauvais jeton d’authentification. Le pipeline Buildkite et l’étape de construction Harbormaster doivent être configurés avec le même jeton.',
      'Throw Exception' => 'Lever une exception',
      'Harbormaster Query Builds' => 'Constructions de requêtes Harbormaster',
      'If you run external builds, you can use this method to publish build results
    back into Harbormaster after the external system finishes work (or as it makes
    progress).
    To report build status or results, you must send a message to the appropriate
    Build Target. This table summarizes which object types may receive build status
    and result messages:
    <table>
      <tr>
        <th>Object Type</th>
        <th>PHID Example</th>
        <th />
        <th>Description</th>
      </tr>
      <tr>
        <td>Harbormaster Buildable</td>
        <td>`PHID-HMBB-...`</td>
        <td>{icon times color=red}</td>
        <td>Buildables may **NOT** receive status or result messages.</td>
      </tr>
      <tr>
        <td>Harbormaster Build</td>
        <td>`PHID-HMBD-...`</td>
        <td>{icon times color=red}</td>
        <td>Builds may **NOT** receive status or result messages.</td>
      </tr>
      <tr>
        <td>Harbormaster Build Target</td>
        <td>`PHID-HMBT-...`</td>
        <td>{icon check color=green}</td>
        <td>Report build status and results to Build Targets.</td>
      </tr>
    </table>
    The simplest way to use this method to report build results is to call it once
    after the build finishes with a `pass` or `fail` message. This will record the
    build result, and continue the next step in the build if the build was waiting
    for a result.
    When you send a status message about a build target, you can optionally include
    detailed `lint` or `unit` results alongside the message. See below for details.
    If you want to report intermediate results but a build hasn\'t completed yet,
    you can use the `work` message. This message doesn\'t have any direct effects,
    but allows you to send additional data to update the progress of the build
    target. The target will continue waiting for a completion message, but the UI
    will update to show the progress which has been made.
    When sending a message to a build target to report the status or results of
    a build, your message must include a `type` which describes the overall state
    of the build. For example, use `pass` to tell Harbormaster that a build target
    completed successfully.
    Supported message types are:
    %s
    ' => 'Si vous exécutez des constructions externes, vous pouvez utiliser cette méthode pour publier les résultats des constructions dans Harbormaster une fois que le système externe a terminé son travail (ou au fur et à mesure de sa progression).
    Pour signaler l\'état ou les résultats de la construction, vous devez envoyer un message à la cible de construction appropriée. Ce tableau résume les types d\'objets qui peuvent recevoir des messages d\'état
    et de résultat de construction :
    <table>
     <tr>
      <th>Type d\'objet</th>
      <th>Exemple de PHID</th>
      <th />
      <th>Description</th>
     </tr>
     <tr>
      <td>Constructible Harbormaster</td>
      <td>`PHID-HMBB-...`</td>
      <td>{icon times color=red}</td>
      <td>Les constructibles ne peuvent **PAS** recevoir de messages d\'état ou de résultat.</td>
     </tr>
     <tr>
      <td>Construction Harbormaster</td>
      <td>`PHID-HMBD-...`</td>
      <td>{icon times color=red}</td>
      <td>Les constructions ne peuvent **PAS** recevoir de messages d\'état ou de résultat.</td>
     </tr>
     <tr>
      <td>Cible de construction Harbormaster</td>
      <td>`PHID-HMBT-...`</td>
      <td>{icon check color=green}</td>
      <td>Signaler l\'état et les résultats de la construction aux cibles de construction.</td>
     </tr>
    </table>
    La manière la plus simple avec cette méthode pour signaler les résultats de la construction est de l\'appeler une seule fois, à la fin de la construction, avec un message `pass` (réussi) ou `fail` (échec). Cela enregistrera le résultat de la construction et poursuivra l\'étape suivante de la construction si la construction attendait un résultat.
    Lorsque vous envoyez un message d\'état concernant une cible de construction, vous pouvez éventuellement inclure des résultats détaillés `lint` ou `unit` en parallèle du message. Voir ci-dessous pour plus de détails.
    Si vous souhaitez signaler des résultats intermédiaires alors qu\'une construction n\'est pas encore terminée, vous pouvez utiliser le message `work`. Ce message n\'a pas d\'effets directs, mais vous permet d\'envoyer des données supplémentaires pour suivre la progression de la cible de construction. La cible continuera d\'attendre un message d\'achèvement mais l\'interface utilisateur sera mise à jour pour afficher l\'étape qui a été atteinte.
    Lorsque vous envoyez un message à une cible de construction pour signaler l\'état ou les résultats d\'une construction, votre message doit inclure un « type » qui décrit l\'état général de la construction. Par exemple, utilisez « pass » (réussi) pour indiquer à Harbormaster qu\'une cible de construction s\'est terminée avec succès.
    Les types de messages pris en charge sont :
    %s',
      'Can Not Restart Autobuild' => 'Impossible de redémarrer une construction automatique',
      'The object PHID of the Harbormaster Buildable being built.' => 'Le PHID de l’objet du constructible Harbormaster en cours de construction.',
      'HTTP Method' => 'Méthode HTTP',
      'Restart the build, discarding all progress.' => 'Redémarre la construction en annulant tout avancement antérieur.',
      'Epoch timestamp for target start, if the target has started.' => 'Horodatage d’époque du démarrage de la cible, si la cible a démarré.',
      'Affects Buildable' => 'Affecte le constructible',
      'Build a working copy in Drydock.' => 'Crée une copie de travail dans Drydock.',
      'Harbormaster Build Plans' => 'Plans de construction Harbormaster',
      'If you pause this build, work will halt once the current steps complete. You can resume the build later.' => 'Si vous suspendez cette construction, le travail s’arrêtera une fois les étapes actuelles terminées. Vous pouvez reprendre la construction plus tard.',
      'Harbormaster User Guide' => 'Guide de l’utilisateur d’Harbormaster',
      'Object ("%s") does not implement interface "%s". Only objects which implement this interface can be built with CircleCI.' => 'L’objet (« %s ») ne met pas en œuvre pas l’interface « %s ». Seuls les objets qui mettent en œuvre cette interface peuvent être construits avec CircleCI.',
      'If Editable' => 'Si modifiable',
      'Build Target %d' => 'Cible de construction %s',
      'Completed Before' => 'Terminé avant',
      'Download Log' => 'Journal des téléchargements',
      'Make an HTTP request.' => 'Faire une requête HTTP.',
      'Drydock Host' => 'Hôte Drydock',
      'Consumed' => 'Consommé',
      'When users create revisions in Differential, the default behavior is to hold them in the "Draft" state until all builds pass. Once builds pass, the revisions promote and are sent for review, which notifies reviewers.
    The general intent of this workflow is to make sure reviewers are only spending time on review once changes survive automated tests. If a change does not pass tests, it usually is not really ready for review.
    If you want to promote revisions out of "Draft" before builds pass, or promote revisions even when builds fail, you can change the promotion behavior. This may be useful if you have very long-running builds, or some builds which are not very important.
    Users may always use "Request Review" to promote a "Draft" revision, even if builds have failed or are still in progress.' => 'Lorsque les utilisateurs créent des révisions dans Differential, le comportement par défaut est de les maintenir dans l’état « Brouillon » jusqu’à ce que toutes les versions soient réussies. Une fois les constructions réussies, les révisions sont promues et envoyées en relecture, ce qui en informe les relecteurs.
    L’intention générale de ce flux de travail est de s’assurer que les relecteurs ne consacrent du temps à la relecture qu’une fois que les modifications ont survécu aux tests automatisés. Si une modification ne réussit pas les tests, elle n’est généralement pas vraiment prête à être relue.
    Si vous souhaitez promouvoir des révisions hors de l’état de « Brouillon» avant que les constructions ne réusissent, ou bien promouvoir des révisions même si des constructions ont échoué, vous pouvez changer le
    comportement de promotion. Cela peut être utile si vous avez des constructions très longues, ou bien des constructions qui ne sont pas très importantes.
    Les utilisateurs peuvent toujours utiliser « Demander une relecture » pour promouvoir une révision encore à l’état de « Brouillon », même si des constructions ont échoué ou sont toujours en cours.',
      'Browse Build Initiators' => 'Parcourir les initiateurs de la construction',
      'Run Plan Manually' => 'Exécuter le plan manuellement',
      'The PHID of the build plan this build step belongs to.' => 'Le PHID du plan de construction auquel appartient cette étape de construction.',
      'Unexpected Error' => 'Erreur inattendue',
      'Add Step' => 'Ajouter une étape',
      'When run against a revision, this build step will abort any older copies of
    the same build plan which are currently running against older diffs.
    There are some nuances to the behavior:
      - if this build step is triggered manually, it won\'t abort anything;
      - this build step won\'t abort manual builds;
      - this build step won\'t abort anything if the diff it is building isn\'t
        the active diff when it runs.
    Build results on outdated diffs often aren\'t very important, so this may
    reduce build queue load without any substantial cost.' => 'Lorsqu\'elle est exécutée sur une révision, cette étape de construction interrompt toutes les anciennes copies du même plan de construction qui sont actuellement exécutées sur des diffs plus anciens.
    Le comportement présente quelques nuances :
      - si cette étape de construction est déclenchée manuellement, elle n\'interrompt rien ;
      - cette étape de construction n\'interrompt pas les constructions manuelles ;
      - cette étape de construction n\'interrompt rien si le diff qu\'elle est en train de créer n\'est pas le diff actif lorsqu\'elle s\'exécute.
    Les résultats de construction sur des diffs obsolètes ne sont souvent pas très importants, ce qui peut réduire la charge de la file d\'attente de construction sans coût substantiel.',
      'The object PHID of the container (usually a revision or repository) for the object being built.' => 'Le PHID d’objet du conteneur (généralement une révision ou un dépôt) pour l’objet à construire.',
      'Only Restartable if Failed' => 'Redémarrable seulement en cas d’échec',
      'Processing Harbormaster build log #%d...' => 'Traitement du journal de construction de Harbormaster nº %s...',
      'Targets' => 'Cibles',
      'No such implementation "%s" exists!' => 'Mise en œuvre « %s » inexistante !',
      'You can not send this command to any of the current builds for this buildable.' => 'Vous ne pouvez pas envoyer cette commande à l\'une des constructions actuelles de ce constructible.',
      'Build Step %d: %s' => 'Étape de construction %s : %s',
      'Started %s build(s): %s.' => '%s construction(s) démarrée(s) : %s.',
      'Message type "%s" is not supported.' => 'Le type de message « %s » n\'est pas pris en charge.',
      '%s paused this buildable.' => '%s a suspendu ce constructible.',
      'Create an artifact of this type by passing `%s` as the `artifactType`. When creating an artifact of this type, provide these parameters as a dictionary to `artifactData`:' => 'Créez un artéfact de ce type en passant `%s` comme `artifactType`. Lors de la création d’un artéfact de ce type, fournissez les paramètres suivants sous forme de dictionnaire dans un `artifactData` :',
      'Choose an archival mode with --mode.' => 'Choisissez un mode d’archivage avec « --mode ».',
      'Build with CircleCI' => 'Construire avec CircleCI',
      'You can only pause some builds. Once the current steps complete, work will halt on builds you can pause. You can resume the builds later.' => 'Vous ne pouvez mettre en pause que certaines constructions. Une fois les étapes en cours terminées, le travail s\'arrêtera pour les constructions que vous pouvez mettre en pause. Vous pourrez poursuivre ces constructions plus tard.',
      'Can Not Run Plan' => 'Impossible d’exécuter le plan.',
      'Users must be able to see a build to view its build targets.' => 'Les utilisateurs doivent pouvoir voir une construction pour visualiser ses cibles de construction.',
      'Build Variables' => 'Variables de construction',
      'The PHID of the current build target.' => 'Le PHID de la cible de construction actuelle.',
      'Write completed. Closing log...' => 'Écriture terminée. Fermeture du journal en cours...',
      'No recent builds.' => 'Aucune construction récente.',
      'This engine is used to edit Harbormaster buildables.' => 'Ce moteur est utilisé pour modifier les constructibles Harbormaster.',
      'You are viewing an older run of this build. %s' => 'Vous consultez une exécution plus ancienne de cette construction. %s',
      'You must choose a revision or commit to build.' => 'Vous devez choisir une révision ou une validation à construire.',
      'No build step provides autotarget "%s"!' => 'Aucune étape de construction ne fournit la cible automatique « %s » !',
      'Stored Chunks' => 'Tronçons stockés',
      'Restart Build' => 'Recommencer la construction',
      'No details provided.' => 'Aucun détail fourni.',
      'Other Build Steps' => 'Autres étapes de construction',
      '%s Unsound Test(s)' => ' %s Test(s) douteux',
      'You can not resume this build because it is not paused. You can only resume a paused build.' => 'Vous ne pouvez pas relancer cette construction car elle n\'est pas en pause. Vous ne pouvez poursuivre qu\'une construction en pause.',
      'Log data hashes differ! Something is tragically wrong!' => 'Les hachages des données du journal diffèrent ! Quelque chose va tragiquement mal !',
      'Build will abort.' => 'La construction va être abandonnée.',
      'Like unit test results, you can report lint results when updating the state
    of a build target. The `lint` parameter should contain results as a list of
    dictionaries with these keys:
    %s
    The `severity` parameter recognizes these severity levels:
    %s
    This is a simple, valid value for the `lint` parameter. It reports one error
    and one warning:
    ```lang=json
    %s
    ```
    ' => 'Comme pour les résultats des tests des unités, vous pouvez signaler les résultats Lint lors de la mise à jour de l\'état d\'une cible de construction. Le paramètre `lint` doit contenir les résultats sous forme de liste de dictionnaires avec ces clés :
    %s
    Le paramètre `severity` reconnaît ces niveaux de gravité :
    %s
    Voici un exemple de valeur simple et valide pour le paramètre `lint`. Il présente une erreur et un avertissement :
    ```lang=json
    %s
    ```',
      'Step' => 'Étape',
      'All Steps' => 'Toutes les étapes',
      'Run command %s on %s.' => 'Exécuter la commande %s sur %s.',
      'Show Only Manual Builds' => 'Afficher uniquement les versions manuelles',
      'No line map.' => 'Aucune correspondance des lignes.',
      'Report that the target is complete, and the target has failed.' => 'Signaler que la cible est terminée mais qu’elle a échoué.',
      'When building a revision, abort copies of this build plan which are currently running against older diffs.' => 'Lors de la construction d’une version, abandonner les copies de ce plan de construction qui s’exécutent actuellement sur des diffs plus anciens.',
      'Are you sure you want to delete this step? This can\'t be undone!' => 'Voulez-vous vraiment supprimer cette étape ? Cela ne pourra pas être annulé !',
      'Build messages have the same policies as their receivers.' => 'Les messages de construction suivent les mêmes politiques que leurs récepteurs.',
      'This build plan can not be run manually.' => 'Ce plan de construction ne peut pas être exécuté manuellement.',
      'Report that the target is complete, and the target has passed.' => 'Signaler que la cible est complète et qu’elle a réussi.',
      'This build plan has conflicts in one or more build steps. Examine the step list and resolve the listed errors.' => 'Ce plan de construction présente des conflits dans une ou plusieurs étapes de construction. Examinez la liste des étapes et résolvez les erreurs indiquées.',
      'Containers' => 'Conteneurs',
      'The number of seconds to sleep for.' => 'Nombre de secondes à patienter.',
      'This input is bound to the wrong artifact type. It is bound to a "%s" artifact, but should be bound to a "%s" artifact.' => 'Cette entrée est liée au mauvais type d’artéfact. Elle est liée à un artéfact de type « %s », mais elle devrait être liée à un artéfact de type « %s ».',
      'Stop Following Log' => 'Arrêter de suivre le journal',
      'Flow Control' => 'Contrôle de flux',
      'Manual Buildable' => 'Constructible manuel',
      'Run a build in Buildkite.' => 'Exécuter une construction dans Buildkite.',
      'Built instantly' => 'Construire instantanément',
      'Save Build Step' => 'Enregistrer l’étape de construction',
      'Enter the name of a revision or commit.' => 'Saisissez le nom d’une révision ou d’une validation.',
      'Option' => 'Option',
      'Arcanist Lint Results' => 'Résultats de l’analyse « lint » d’Arcanist',
      'Edit Harbormaster Buildable Configurations' => 'Modifier les configurations de constructibles Harbormaster',
      'You can not pause this build because it is already restarting.' => 'Vous ne pouvez pas mettre cette construction en pause car elle est en cours de redémarrage.',
      'Continue Build Normally' => 'Poursuivre la construction normalement',
      'Drydock working copy lease to create an artifact from.' => 'Location de copie de travail sur Drydock à partir de laquelle créer un artéfact.',
      'Autoplan' => 'Planification automatique',
      'Unable to load repository with PHID "%s".' => 'Impossible de charger le dépôt avec le PHID « %s ».',
      'Test engine running the test, like "JavascriptTestEngine". This primarily prevents collisions between tests with the same name in different test suites (for example, a Javascript test and a Python test).' => 'Moteur de test exécutant le test, tel que « JavascriptTestEngine ». Ceci prévient principalement les collisions entre des tests ayant le même nom dans différentes suites de test (par exemple, un test Javascript et un test Python).',
      'Container' => 'Conteneur',
      'Choose a build log to rebuild with "--id", or rebuild all logs with "--all".' => 'Choisir un journal de construction à reconstruire avec « --id », ou bien reconstruire tous les journaux avec « --all ».',
      'Depends On' => 'Dépend de',
      'Build will resume.' => 'La construction va reprendre.',
      'Run build plans: %s.' => 'Exécuter les plans de construction : %s.',
      'Declining to make service call because `phabricator.silent` is enabled in configuration.' => 'Refus de faire appel au service parce que `phabricator.silent` est activé dans la configuration.',
      'Build Logs' => 'Journaux de construction',
      'The buildable waits for the build, but does not fail if the build fails.' => 'Le constructible attend la construction, mais n’échoue pas si la construction échoue.',
      'The person (or thing) that started this build.' => 'La personne (ou l’objet) qui a démarré cette construction.',
      'View Build' => 'Afficher la construction',
      'Really abort %s build(s)?' => array(
        'Voulez-vous vraiment abandonner la construction ?',
        'Voulez-vous vraiment abandonner les %s constructions ?',
      ),
      '(%d - %d)' => '(%s – %s)',
      'Object "%s" does not implement interface "%s". Autotargets may only be queried for buildable objects.' => 'L’objet « %s » ne met pas en œuvre l’interface « %s ». Les cibles automatiques ne peuvent être interrogées que pour les objets constructibles.',
      '%s enabled this build plan.' => '%s a activé ce plan de construction.',
      'Stored Bytes' => 'Octets stockés',
      'Work will continue on the build. Really resume?' => 'Le travail se poursuivront sur la construction. Voulez-vous réellement la reprendre ?',
      'Log to rebuild.' => 'Journal à reconstruire.',
      'Run By Herald Rules' => 'Exécuter par des règles Herald',
      'When a user attempts to `arc land` a revision and that revision has ongoing or failed builds, the default behavior of `arc` is to warn them about those builds and give them a chance to reconsider: they may want to wait for ongoing builds to complete, or fix failed builds before landing the change.
    If you do not want to warn users about this build, you can change the warning behavior. This may be useful if the build takes a long time to run (so you do not expect users to wait for it) or the outcome is not important.
    This warning is only advisory. Users may always elect to ignore this warning and continue, even if builds have failed.
    This setting also affects the warning that is published to revisions when commits land with ongoing or failed builds.' => 'Lorsqu’un utilisateur tente l’action `arc land` pour appliquer une révision et que cette révision a des constructions en cours ou ayant échoué, le comportement par défaut pour `arc` est d’avertir l’utilisateur de ces constructions et de lui donner une chance de reconsidérer : l’utilisateur peut vouloir attendre que les constructions en cours se terminent, ou bien corriger les constructions ayant échoué avant d’appliquer la modification.
    Si vous ne souhaitez pas avertir les utilisateurs de cette construction, vous pouvez modifier le comportement d’avertissement. Cela peut être utile si la construction prend beaucoup de temps à s’exécuter (vous ne vous attendez donc pas à ce que les utilisateurs l’attendent) ou si le résultat n’est pas important.
    Cet avertissement n’est qu’un avertissement. Les utilisateurs peuvent toujours choisir d’ignorer cet avertissement et de continuer, même si des constructions ont échoué.
    Ce paramètre affecte également l’avertissement qui est publié pour les révisions lorsque des validations atterrissent avec des constructions encore en cours ou ayant échoué.',
      'Edit Behavior: %s' => 'Modifier le comportement : %s',
      'Result of the test.' => 'Résultat du test.',
      'Use "--id" or "--active" to select builds.' => 'Utilisez « --id » ou « --active » pour sélectionner des constructions.',
      'Unable to load build log "%s".' => 'Impossible de charger le journal de construction « %s ».',
      'Upload a file.' => 'Téléverse un fichier.',
      'Build Plan Prevents Restart' => 'Le plan de construction empêche de le recommencer',
      'Unable to load API token ("%s")!' => 'Impossible de charger le jeton de l’API (« %s ») !',
      'Find out information about build logs.' => 'Trouver des informations sur les journaux de construction.',
      '%s Passed Test(s)' => '%s test(s) réussi(s)',
      'Sending Messages' => 'Envoi de messages',
      'ERROR:' => 'ERREUR :',
      'Builtins' => 'Intégrés',
      'Build %d' => 'Construction %s',
      'Harbormaster build target "%s" does not exist.' => 'La cible de construction « %s » de Harbormaster n’existe pas.',
      'If you pause all builds, work will halt once the current steps complete. You can resume the builds later.' => 'Si vous suspendez toutes les constructions, le travail ne s’arrêtera qu’une fois les étapes en cours achevées. Vous pouvez reprendre les constructions ultérieurement.',
      'Call specifies both "receiver" and "buildTargetPHID". When using the modern "receiver" parameter, omit the deprecated "buildTargetPHID" parameter.' => 'L\'appel spécifie à la fois « receiver » (récepteur) et « buildTargetPHID » (PHID de la cible de construction) ce qui est inutile. Si vous utilisez le paramètre moderne « receiver », l\'autre paramètre « buildTargetPHID » peut être omis car obsolète.',
      'Host Artifact' => 'Artéfact hôte',
      'No Unit Tests' => 'Aucun test des unités',
      'All Targets' => 'Toutes les cibles',
      'Throw an exception.' => 'Lever une exception.',
      'Query Harbormaster builds.' => 'Interroger les constructions de Harbormaster.',
      'View All Builds' => 'Afficher toutes les constructions',
      'If Failed' => 'En cas d’échec',
      'Builds for this buildable:' => 'Constructions pour ce constructible :',
      'The artifact type.' => 'Le type d’artéfact.',
      'Search for logs that belong to a particular build target.' => 'Recherche des journaux attachés à une cible de construction particulière.',
      'Type the name of a user, application or Herald rule...' => 'Saisissez le nom d’un utilisateur, d’une application ou d’une règle Herald...',
      'This build plan does not have any build steps yet.' => 'Ce plan de construction n’a encore aucune étape de construction.',
      'Build Targets' => 'Cibles de construction',
      'Really resume build?' => 'Reprendre vraiment la construction ?',
      'Build generation this target belongs to. When builds restart, a new generation with new targets is created.' => 'Génération de la construction à laquelle appartient cette cible. Quand les constructions recommencent, une nouvelle génération avec de nouvelles cibles est créée.',
      'External Link' => 'Lien externe',
      'You can not pause this build because it has already completed.' => 'Vous ne pouvez pas mettre cette construction en pause car elle est déjà terminée.',
      'Unknown build step field "%s"!' => 'Champ d’étape de construction « %s » inconnu !',
      'URI "%s" does not have an allowable protocol. Configure protocols in `%s`. Allowed protocols are: %s.' => 'L’URL « %s » n’a pas de protocole acceptable. Configurez les protocoles dans `%s`. Les protocoles acceptés sont : %s.',
      'Wait for Previous Commits to Build' => 'Attendre que les précédentes validations se construisent',
      'Disable Plan' => 'Désactiver le plan',
      'Enable this build plan?' => 'Activer ce plan de construction ?',
      'Drydock Working Copy' => 'Copie de travail de Drydock',
      'This buildable has no builds, so you can not issue any commands.' => 'Ce constructible n\'a pas de constructions donc vous ne pouvez pas émettre de commandes.',
      'Show More (%s Bytes)' => 'Afficher davantage (%s octets)',
      'The overall state of a buildable (like a commit or revision) is normally the aggregation of the individual states of all builds that have run against it.
    Buildables are "building" until all builds pass (which changes them to "pass"), or any build fails (which changes them to "fail").
    You can change this behavior if you do not want to wait for this build, or do not care if it fails.' => 'L’état global d’un constructible (comme une validation ou une version) est normalement l’agrégation des états individuels de toutes les constructions qui s\'y sont exécutées.
    Les constructibles restent « en cours de construction » tant que toutes les constructions ne sont pas passées (ce qui change leur état en « réussi ») ou que des constructions ont échoué (ce qui change leur état en « échoué »).
    Vous pouvez changer ce comportement si vous ne voulez pas attendre cette construction ou si vous ne vous souciez pas qu’elle échoue.',
      'The build may be restarted if it has failed.' => 'La construction peut être recommencée si elle a échouée.',
      'A build inherits policies from its buildable.' => 'Une construction hérite des politiques de son constructible.',
      'You can not abort this build because it is already aborting.' => 'Vous ne pouvez pas abandonner cette construction car elle est déjà en cours d\'abandon.',
      'Arcanist Unit Results' => 'Résultats des unités d’Arcanist',
      'This build is already restarting. You can not reissue a restart command to a restarting build.' => 'Cette construction est déjà en cours de recommencement. Vous ne pouvez émettre une commande de recommencement à aucune construction qui recommence.',
      'The following variables can be used in most fields. To reference a variable, use `%s` in a field.' => 'Les variables suivantes peuvent être utilisées dans la plupart des champs. Pour référencer une variable, utilisez `%s` dans un champ.',
      'This engine is used to edit Harbormaster build plans.' => 'Ce moteur est utilisé pour modifier les plans de construction de Harbormaster.',
      'This function definition is not a haiku.' => 'Cette définition de fonction n’est pas un haïku.',
      'You can not resume this build because it is already resuming.' => 'Vous ne pouvez pas relancer cette construction car elle est déjà en cours de relance.',
      '(null)' => '(nul)',
      'Progress on this build will be discarded and the build will restart. Side effects of the build will occur again. Really restart build?' => 'La progression sur cette construction sera abandonnée et la construction recommencera. Les effets secondaires de cette construction se produiront à nouveau. Vraiment redémarrer la construction ?',
      'Search for builds by buildable status.' => 'Recherche des constructions par état du constructible.',
      'Abort Builds' => 'Abandonner les constructions',
      'Upload From Host' => 'Téléverser depuis un hôte',
      'The build step the target runs.' => 'L’étape de construction exécutée par la cible.',
    );
  }

}
