<?php

final class PhabricatorRepositoryFrFR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr_FR';
  }

  protected function getTranslations() {
    return array(
      'Repository "%s" is a non-hosted Subversion repository, which does not require a local working copy to be pulled.' => 'Le dépôt %s est un dépôt Subversion non hébergé, qui ne nécessite pas d\'extraire de copie de travail locale.',
      '%s set the copy time limit for this repository to %s seconds.' => '%s a défini la limite du temps de copie pour ce dépôt à %s secondes.',
      '%s set the filesize limit for this repository to %s bytes.' => '%s a défini la limite de la taille des fichiers pour ce dépôt à %s octets.',
      'Skipping pull on read-only repository.
    %s' => 'Ignore l’extraction depuis le dépôt en lecture seule.
    %s',
      'Something is wrong; source of a copy must exist.' => 'Quelquechose ne va pas; la source d\'une copie doit exister.',
      'These repositories will be thawed:' => 'Ces dépôts seront débloqués:',
      'Another process is currently updating repository "%s", skipping pull.' => 'Un autre processus est en train de mettre à jour le dépôt « %s », le transfert est sauté.',
      'This repository ("%s") is not writable with the given protocols (%s). The Almanac service for this repository has no writable bindings that support these protocols.' => 'Ce dépôt (« %s ») n\'est pas accessible en écriture avec le protocole donné (%s). Le service Almanac pour ce dépôt n\'a pas de liens d\'écriture qui supportent ces protocoles.',
      '%s set the encoding for this repository to %s.' => '%s a défini l\'encodage pour ce dépôt à %s.',
      'branch' => 'branche',
      'Search for push logs by specific users.' => 'Rechercher des utilisateurs spécifiques dans les journaux des poussées.',
      'Result Details' => 'Détails des résultats',
      'Oversized' => 'Surdimensionné',
      '%s set the touch limit for this repository to %s paths.' => '%s a défini la limite d\'accessibilité pour ce dépôt à %s chemins.',
      '%s changed the copy time limit for this repository from %s seconds to %s seconds.' => '%s a modifé la limite du temps de copie pour ce dépôt de %s secondes à %s secondes.',
      'Cluster repository ("%s") is out of sync on this node ("%s").' => 'Le dépôt de la grappe (« %s ») est désynchronisé sur ce nœud (« %s »).',
      'Create Subversion Repository' => 'Créer un dépôt Subversion',
      'Result Name' => 'Nom de résultat',
      'Permanently unpublish "%s"?' => 'Annuler de manière permanente la publication de « %s » ?',
      'Unable to promote "%s" for repository "%s" because this cluster already has one or more unambiguous leaders: %s.' => 'Impossible de promouvoir « %s » pour le dépôt « %s »  car cette grappe possède déjà un ou plusieurs meneurs non ambigus : %s.',
      '%s removed %s as the default branch.' => '%s a supprimé la branche par défaut %s .',
      'Pusher PHID' => 'PHID de la personne qui a poussé',
      'Create a new Mercurial repository.' => 'Créer un nouveau dépôt Mercurial.',
      'Expression "%s" is not a valid regular expression. Note that you must include delimiters.' => 'L\'expression « %s » n\'est pas une expression régulière valide. Notez que vous devez inclure les délimiteurs.',
      'No support yet.' => 'Pas encore implémenté.',
      '%s changed the filesize limit for this repository from %s bytes to %s bytes.' => '%s a modifé la limite de la taille maximale des fichiers pour ce dépôt de %s octets à %s bytes.',
      '%s set the repository "Import Only" path to %s.' => '%s a défini le chemin d\' « Importation seulement » à %s .',
      'Push ID' => 'ID de poussée',
      'MERGED COMMITS' => 'COMMITS FUSIONNÉS',
      'No Commits' => 'Pas de validations',
      'Found %s feed storie(s).' => array(
        'Trouvé %s historique de flux.',
        'Trouvé %s historiques de flux.',
      ),
      'Specify a list of repositories or "--all-repositories", but not both.' => 'Choisissez une liste de dépôts ou « --all-repositories », mais non les deux.',
      'Rebuild identities across all repositories.' => 'Reconstruire les identités parmi tous les dépôts.',
      '%s ♻ %s' => '%s ♻ %s',
      'Unexpected infinite loop in %s!' => 'Boucle infinie non-attendue dans %s !',
      'Will unpublish %s commits.
    ' => array(
        'Annulera la publication de %s validation.',
        'Annulera la publication de %s validations.',
      ),
      'Short Names' => 'Noms courts',
      'Matching function "%s(...)" is not recognized. Valid functions are: regexp(...).' => 'Correspond à la fonction « %s(...) » n\'est pas reconnu. Les fonctions valides sont : regexp(...).',
      '%s removed the touch limit (%s paths) for this repository.' => '%s a supprimé la limite d\'accessibilité des fichiers (%s chemins) pour ce dépôt.',
      '(This is a write request.)' => '(Ceci est une requête d\'écriture).',
      '%s changed the callsign for this repository from %s to %s.' => '%s a modifié le préfixe pour ce dépôt de %s à %s.',
      '%s enabled this URI.' => '%s a activé cette URI.',
      'Touches Too Many Paths' => 'Atteint beaucoup trop de chemins',
      '%s removed %s as the assignee of this identity.' => '%s a supprimé %s comme destinataire de cette identité.',
      'Destroyed edge of type "%s" between "%s" and "%s".' => 'Arête supprimée de type « %s » entre « %s » et « %s ».',
      'Show a list of repositories.' => 'Afficher une liste de dépôts.',
      '%s changed the "Import Only" path from %s to %s.' => '%3$s%1$s a modifé le chemin d\' « Importation seulement » de %2$s en %3$s.',
      '%s changed tracked branches from %s to %s.' => '%s a modifé les branches suivies de %s vers %s .',
      'Destroyed transaction "%s" on object "%s".' => 'Transaction « %s » détruite sur l\'objet « %s ».',
      'CHANGES TO REPOSITORY DESCRIPTION' => 'MODIFICATIONS DE LA DESCRIPTION DU DEPOT',
      'Override this identity\'s assignment.' => 'Réécraser cet assignement d\'identité.',
      'Demote a device (or all devices in a service) discarding unsynchronized changes. Clears stuck write locks and recovers from lost leaders.' => 'Rétrograder un appareil (ou tous les appareils d\'un service) sans prendre en compte les modifications non synchronisées. Libère les verrous d\'écriture bloqués et redémarre à partir des meneurs perdus.',
      'This engine is used to edit Repository identities.' => 'Ce moteur est utilisé pour modifier les identités des dépôts.',
      'Applied changes.' => 'Appliquer les modifications.',
      'This script will unpublish all feed stories and notifications which a repository generated during import. This action can not be undone.' => 'Ce script va annuler la publication de toutes les historiques de flux et les notifications qu\'un dépôt a générées pendant l\'importation. Cette action ne peut pas être annulée.',
      'dangerous change' => 'modification dangereuse',
      '%s set %s as the staging area for this repository.' => '%s a défini %s comme zone de mise en place pour ce dépôt.',
      'Enormous' => 'Enorme',
      'EMAIL' => 'COURRIEL',
      'Repositories must have a name.' => 'Les dépôts doivent avoir un nom.',
      'Merged Commits' => 'Validations fusionnées',
      'Rebuild repository identities from commits.' => 'Reconstruction des identités des répertoires à partir des validations.',
      '%s removed %s as the staging area for this repository.' => '%s a supprimé %s comme zone de mise en place pour ce dépôt.',
      '%s removed the callsign (%s) for this repository.' => '%s a supprimé le préfixe (%s) pour ce dépôt.',
      'Rebuilding all existing identities.' => 'Reconstruction en cours des identités existantes.',
      'The commit identifier.' => 'L\'identifiant du commit.',
      'Search for pushes blocked by particular Herald rules.' => 'Recherche des poussages bloqués par des règles Herald particulières.',
      'True if the commit is fully imported.' => 'Vrai si la validation est complètement importée.',
      'Create Identity' => 'Créer une identité',
      'Edit Identity: %s' => 'Modifier l\'identité: %s',
      '%s disabled protection against enormous changes.' => '%s a désactivé la protection  contre les énormes modifications.',
      'Rewrite' => 'Réécrire',
      '%s changed the touch limit for this repository from %s paths to %s paths.' => '%s a modifé la limite d\'accessibilité pour ce dépôt de %s chemins à %s chemins.',
      'Found edge transaction "%s" on object "%s" for type "%s".' => 'Transaction d\'arête trouvée « %s » sur l\'objet « %s » pour le type « %s ».',
      'Append' => 'Ajouter après',
      'Diffusion Commit' => 'Commit de diffusion',
      'Ref New' => 'Nouvelle référence',
      '%s reset the copy time limit (%s seconds) for this repository to the default value.' => '%s a réinitialisé la limite du temps de copie (%s secondes) pour ce dépôt à sa valeur par défaut.',
      'A repository\'s push events are visible to users who can see the repository.' => 'Les événements « push » sur un dépôt sont visibles aux utilisateurs qui ont la visibilité sur ce dépôt.',
      '%s set the callsign for this repository to %s.' => '%s a défini le préfixe pour ce dépôt à %s.',
      'Flag Names' => 'Noms des drapeaux',
      'Most Recent Commit' => 'Validation la plus récente',
      'Move' => 'Déplacer',
      'The chosen callsign or repository short name is already in use by another repository.' => 'Le nom court du callsign ou du dépôt choisi est déjà utilisé par un autre dépôt.',
      '%s changed the repository encoding from %s to %s.' => '%s a modifié l\'encodage du dépôt de %s en %s.',
      'Blocked By' => 'Bloqué par',
      '%s changed the assigned user for this identity from %s to %s.' => '%s a changé l\'utilisateur assigné à cette identité de %s à %s.',
      'Information about the commit author.' => 'Information concernant l\'auteur de la validation.',
      'Skipping "%s": Subversion repositories do not require this cache to be built.' => '« %s » sauté: les dépôts Subversion n\'ont pas besoin que ce cache soit construit.',
      '%s set the default branch to %s.' => '%s a défini la branche par défaut à %s.',
      'The commit message.' => 'Le message de validation.',
      '%s changed the default branch from %s to %s.' => '%s a modifié la branche par défaut de %s en %s.',
      'Error while pushing "%s" repository to mirrors.' => 'Erreur de push du dépôt « %s » vers les sites mirroir.',
      'SSH' => 'SSH',
      'No device or service named "%s" exists.' => 'Aucun appareil ou service trouvé avec le nom « %s ».',
      '%s removed the filesize limit (%s bytes) for this repository.' => '%s a supprimé la taille limite des fichiers (%s octets) pour ce dépôt.',
      '%s enabled protection against enormous changes.' => '%s a activé la protection contre les modifications énormes.',
      'Not a subversion repository!' => 'N\'est pas un dépôt Subversion!',
      'A repository\'s sync events are visible to users who can see the repository.' => 'Les événements de synchronisation d\'un dépôt sont visibles par les utilisateurs qui ont accès à ce dépôt.',
      'Unknown SVN file kind \'%s\'.' => 'Type de fichier SVN inconnu : \'%s\' .',
      'This repository is still importing.' => 'Ce dépôt est encore en cours d’importation.',
      'The Almanac Service that hosts this repository, if the repository is clustered.' => 'Le service Almanac qui héberge ce dépôt, si le dépôt est en grappe.',
      'Show additional debugging information.' => 'Afficher davantage d\'informations de débogage.',
      'All Repositories' => 'Tous les dépôts',
      'DETECTED PHID' => 'PHID DÉTECTÉ',
      '%s set the short name of this repository to %s.' => '%s a défini le nom court de ce dépôt à %s.',
      '%s removed %s as the "Import Only" path.' => '%s a supprimé %s en tant que chemin d\' « Importation seulement ».',
      'DETAILS' => 'DÉTAILS',
      'No changes to identity.' => 'Aucune modification de l’identité.',
      '%s assigned this identity to %s.' => '%s a assigné cette identité à %s.',
      'Rejected: External Hook' => 'Refusé: point d\'ancrage externe',
      '%s renamed this repository from %s to %s.' => '%s a renommé ce dépôt de %s en %s.',
      'Specify one or more repositories to discover.' => 'Spécifier un ou plusieurs dépôts à découvrir.',
      'True if the commit is not the ancestor of any tag, branch, or ref.' => 'Vrai si la validation n\'est pas l\'ancêtre d\'un marqueur quelconque, d\'une branche ou d\'une référence.',
      'Unpublishing commit "%s".' => 'Annuler la publication de la validation « %s ».',
      'Unpublish all feed stories and notifications that a repository has generated. Keep expectations low; can not rewind time.' => 'Annuler la publication de toutes les historiques de flux et les notifications qu\'un dépôt a générées. Modérez les attentes; vous ne pouvez pas remonter le temps.',
      'Apply the promotion or demotion to all repositories hosted on the device.' => 'Promouvoir ou dégrader tous les dépôts hébergés sur l\'appareil.',
      'Create Git Repository' => 'Créer un dépôt Git',
      'Destroyed %s feed storie(s).' => array(
        '%s historique de flux détruit.',
        '%s historiques de flux détruits.',
      ),
      'Create a new Git repository.' => 'Créer un nouveau dépôt Git.',
      '%s changed the push policy of this repository from %s to %s.' => '%s a modifié la politique des poussées sur ce dépôt de %s à %s.',
      'Edit Repository Identity Configurations' => 'Modifier les configurations d\'identité des dépôts',
      'Repository "%s" does not have a correctly configured remote URI. The remote URI for a Subversion repository MUST point at the repository root. The root for this repository is "%s", but the configured URI is "%s". To resolve this error, set the remote URI to point at the repository root. If you want to import only part of a Subversion repository, use the "Import Only" option.' => 'Le dépôt « %s » n\'a pas d\'URI distante configurée correctement. L\'URI distante pour un dépôt Subversion DOIT pointer sur la racine du dépôt. La racine pour ce dépôt est  « %s », mais l\'URI configurée est « %s » . Pour corriger cette erreur, initialisez l\'URI distante pour qu\'elle pointe sur la racine du dépôt. Si vous ne voulez importer qu\'une partir d\'un répertoire Subversion, utilisez l\'option  « Import Only ».',
      'Ref Type' => 'Type de référence',
      'Repository "%s" has no active binding to device "%s". Only actively bound devices can be promoted.' => 'Le dépôt « %s » n\'a pas de lien actif avec l\'équipement « %s ». Seuls les appareils liés et actifs peuvent être promus.',
      'Rejected: Herald' => 'Rejeté: Herald',
      'Sync Event %d' => 'Evénement synchronisé %s',
      'Rejected: Dangerous' => 'Refusé: dangereux',
      'Rejected: Enormous' => 'Rejeté: énorme',
      'Dangerous' => 'Dangereux',
      'MANUAL Revision "%s" was likely closed improperly by "%s".' => 'La relecture MANUELLE « %s » semble ne pas avoir été fermée proprement par « %s ».',
      'Select repositories to affect by providing a list of repositories or using the "--all-repositories" flag.' => 'Selectionner les dépôts concernés en fournissant une liste de dépôts ou en utilisant le drapeau « --all-repositories  » .',
      'Specify exactly one repository to unpublish.' => 'Spécifiez exactement un dépôt à ne plus publier.',
      'Service "%s" is not bound to any devices.' => 'Le service « %s » n’est attaché à aucun appareil.',
      '%s deactivated this repository.' => '%s a désactivé ce dépôt.',
      'Convert existing repositories into cluster repositories.' => 'Convertir les dépôts existants en groupes de dépôts.',
      'Do not perform any writes.' => 'Ne réalisez aucune écriture.',
      'Ref Old' => 'Ancienne référence',
      'There are no repositories on the selected device or service.' => 'Il n\'y a aucun dépôt sur l\'appareil sélectionné ou le service.',
      'Observe' => 'Observer',
      'Repository status "%s" is not valid. Valid statuses are: %s.' => 'L\'état « %s » du dépôt n\'est pas valide. Les états valides sont: %s.',
      '%s changed the staging area for this repository from %s to %s.' => '%s a modifié la zone de mise en place pour dépôt de %s en %s .',
      '(This is a read request.)' => '(Ceci est une requête de lecture).',
      'Rejected: Touches Too Many Paths' => 'Refusé: implique trop de chemins',
      'Unable to parse touch limit, specify a positive number of paths.' => 'Impossible d\'analyser la limite à atteindre, précisez un nombre positif de chemins.',
      'Skipping forced out-of-sync update because the last update was too recent (%s seconds ago).' => 'Mise à jour forcée de synchronisation sautée parce que la dernière mise à jour est trop récente (il y a %s secondes).',
      'Create a new Subversion repository.' => 'Créer un nouveau dépôt Subversion.',
      'Information about the current audit status.' => 'Information concernant l\'état actuel de l\'audit.',
      'Sync Event' => 'Evénement synchronisé',
      'Query repositories.' => 'Interroger les dépôts.',
      'List repository local paths.' => 'Lister les chemins locaux vers les dépôts.',
      'tag:' => 'balise :',
      'Unable to parse filesize limit: %s' => 'Impossible d\'analyser la taille limite de fichier: %s',
      'MANUAL Task "%s" was likely closed improperly by "%s".' => 'La tâche MANUELLE « %s » semble ne pas avoir été fermée proprement par « %s ».',
      'The repository this commit belongs to.' => 'Le dépôt auquel appartient cette validation.',
      'You can not attach audit authority for a user with no PHID.' => 'Vous ne pouvez pas attacher des droits d\'auditeur à un utilisateur sans PHID.',
      'Move repository local paths.' => 'Renommer les chemins locaux du dépôt.',
      '%s removed the %s encoding configured for this repository.' => '%s a supprimé l\'encodage %s configuré pour ce dépôt.',
      '%s changed the short name of this repository from %s to %s.' => '%s a modifié le nom cours de ce dépôt de %s à %s.',
      'Commit "%s" has edge of type "%s" to object "%s".' => 'La validation « %s » a pour d\'arête le type « %s » sur l\'objet « %s ».',
      'Repository "%s" has versions on inactive devices. Demote (or reactivate) these devices before promoting a new leader: %s.' => 'Le dépôt « %s » possède des versions sur des appareils désactivés. Rétrogradez (ou réactivez) ces appareils avant de promouvoir un nouveau principal: %s.',
      'Expected %s or %s, got %s.' => 'Attendu %s ou %s, reçu %s .',
      'Rejected: Broken' => 'Rejeté: cassé',
      'Hook Wait (us)' => 'Accroche Attente (micro-secondes)',
      '%s updated the description for this repository.' => '%s a modifié la description de ce dépôt.',
      'Search for push logs for specific repositories.' => 'Chercher dans les journaux des poussées sur des dépôts spécifiques.',
      'When creating a repository, you must specify a valid underlying version control system. Valid systems are: %s.' => 'Lorsque vous créez un dépôt, vous devez préciser un système de contrôle des versions sous-jacent. Les systèmes valides sont : %s .',
      'NULL' => 'NUL',
      'Specified version control system must be a VCS recognized by Phabricator. Valid systems are: %s.' => 'Le système spécifié de contrôle des versions doit être un VCS reconnu par Phabricator. Les systèmes valides sont : %s .',
      'Do not prompt for confirmation.' => 'Ne pas demander de confirmation.',
      'HTTP' => 'HTTP',
      'HTTPS' => 'HTTPS',
      'Information about the committer.' => 'Information concernant le valideur.',
      'You can not "--promote" an entire service ("%s"). Only a single device may be promoted.' => 'Vous ne pouvez pas utiliser « --promote » pour un service entier (« %s »). Un seul appareil à la fois peut être promu.',
      'Do not perform any I/O.' => 'Ne réalisez aucune entrée/sortie.',
      'Rejected: Oversized File' => 'Rejet: fichier surdimensionné',
      'Authentication Required' => 'Identification nécessaire',
      'Unable to parse copy time limit, specify a positive number of seconds.' => 'Impossible d\'analyser la limite du temps de copie, précisez un nombre positif de secondes.',
    );
  }

}
