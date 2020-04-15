<?php

final class PhabricatorProjectFrFR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr_FR';
  }

  protected function getTranslations() {
    return array(
      'Timeline' => 'Planification',
      'Really activate project?' => 'Voulez-vous réellement activer le projet?',
      '%s changed project member(s), added %d: %s; removed %d: %s.' => '%s a modifié le/les membres du projet, ajouté %s: %s; enlevé %s: %s.',
      '%s set this project\'s color to %s.' => '%s a mis la couleur de ce projet à %s.',
      '%s created this column.' => '%s a créé cette colonne.',
      '%s added %s member(s) for %s: %s.' => array(
        array(
          '%s a ajouté %s membre pour %s: %s.',
          '%s a ajouté %s membres pour %s: %s.',
        ),
      ),
      'Project Column' => 'Colonne du projet',
      'Edit Background Color' => 'Changer la couleur de fond',
      'Leave works.' => 'Quitter les travaux.',
      'New project tag color.' => 'Couleur de l\'étiquette des nouveaux projets.',
      'Hide Hidden Columns' => 'Ne pas montrer les colonnes cachées',
      'Find results with only the specified tags.' => 'Trouver les résultats ayant uniquement les balises spécifiées.',
      'Find results in any of a user\'s projects.' => 'Trouver les résultats dans tous les projets d\'un utilisateur.',
      'Search for projects with given subtypes.' => 'Chercher les projets avec les sous-types donnés.',
      'Lock Project' => 'Bloquer le projet',
      'Save Default Order' => 'Enregistrer l\'ordre par défaut',
      'Project Watchers' => 'Observateurs du projet',
      'Intensity' => 'Intensité',
      'The name of the project.' => 'Le nom du projet.',
      'Type a project name or function...' => 'Entrez un nom de projet ou une fonction...',
      'Are you sure you want to show this column?' => 'Êtes-vous sûr de vouloir afficher cette colonne  ?',
      'Add projects' => 'Ajouter des projets',
      'Archive Project' => 'Archiver le projet',
      'Default view policy for newly created projects.' => 'Politique d’affichage par défaut pour les projets nouvellement créés.',
      '%s locked %s membership.' => '%s a bloqué la participation de %s .',
      'When mail is sent to members of this project, you will receive a copy.' => 'Quand un courriel sera envoyé aux membres de ce projet, vous en recevrez une copie.',
      'Project Card' => 'Carte du projet',
      'This milestone has no tasks.' => 'Ce jalon n\'a pas de tâches.',
      'Project Members' => 'Membres du projet',
      'Other project activity not listed above occurs.' => 'D\'autres activités du projet se produisent mais ne sont pas listées ci-dessus.',
      'Cleanup' => 'Nettoyage',
      '%s of %s %s' => '%s de %s %s',
      '%s removed this project\'s image.' => '%s a supprimé cette image de projet.',
      'Members: %s' => 'Membres: %s',
      'In Any: ...' => 'Quelconque parmi: ...',
      'You can not change members of a project with subprojects directly. Members of any subproject are automatically members of the parent project.' => 'Vous ne pouvez pas modifier directement les membres d\'un projet ayant des sous-projets. Les membres d\'un sous-projet quelconque sont automatiquement membres du projet parent.',
      'Unwatch Project?' => 'Ne plus suivre le projet ?',
      'Convert Project' => 'Convertir le projet',
      'Set project tags to' => 'Fixer les balises du projet à',
      'Projects, Tags, and Teams' => 'Projets, labels et équipes',
      'Edit Column' => 'Modifier la colonne',
      'Include results tagged with this project.' => 'Inclure les résultats labellisés avec ce projet.',
      'The workboard for this project has not been created yet.' => 'Le tableau des tâches n\'a pas encore été créé pour ce projet.',
      'No Editable Tasks' => 'Pas de tâches modifiables',
      'Activate Subproject' => 'Activer un sous-projet',
      '%s changed %s hashtag(s), added %d: %s; removed %d: %s.' => array(
        array(
          '%s a modifié %s balise de hash, ajouté %s: %s; retiré %s: %s.',
          '%s a modifié %s balises de hash, ajouté %s: %s; retiré %s: %s.',
        ),
      ),
      'Really archive project?' => 'Voulez-vous réellement archiver le projet?',
      'Select only results with exactly the other specified tags.' => 'Sélectionner uniquement les résultats avec exactement les autres balises spécifiées.',
      '(Hidden)' => '(Masqué)',
      'Create Project' => 'Créer un projet',
      '%s edited project(s), added %s: %s; removed %s: %s.' => array(
        '%s projet modifié, ajouté %s: %s; retiré %s: %s.',
        '%s projets modifiés, ajouté %s: %s; retiré %s: %s.',
      ),
      'Milestone Of' => 'Jalons de',
      'Column point limit must either be empty or a nonnegative integer.' => 'La limite du point de colonne doit être vide ou être un entier non négatif.',
      '%s added %s member(s): %s.' => array(
        array(
          '%s a ajouté %s membre: %s.',
          '%s a ajouté %s membres: %s.',
        ),
      ),
      'Configure Projects.' => 'Configurer les projets.',
      'Show All Projects' => 'Afficher tous les projets',
      'Browse User Projects' => 'Afficher les projets de l\'utilisateur',
      'Enable Project Mail' => 'Activer les courriels de projet',
      'Remove members.' => 'Supprimer des membres.',
      'Project Subprojects' => 'Sous-projets du projet',
      'Unknown project status \'%s\'!' => 'Etat inconnu de projet \'%s\' !',
      'Parent' => 'Parent',
      'You are already watching %s, an ancestor of this project, and are thus watching all of its subprojects.' => 'Vous suivez déja le projet %s, ainsi qu\'un ancêtre de ce projet, donc vous suivez tous ses sous-projets.',
      'Adjust project colors.' => 'Ajuster les couleurs du projet.',
      'Leave Project' => 'Quitter le projet',
      'This project has no subprojects.' => 'Ce projet n\'a pas de sous-projets.',
      'Not In: %s' => 'Pas dans: %s',
      'Watch Project?' => 'Suivre le projet ?',
      'Add project tags' => 'Ajouter des balises de projets',
      'Removed %s project(s): %s.' => array(
        'Suppression de %s projet: %s.',
        'Suppression de %s projets: %s.',
      ),
      'Reorder Columns' => 'Réordonner les colonnes',
      'Edit Project: %s' => 'Modifier le projet: %s',
      'Hide Column' => 'Cacher la colonne',
      'Initial Members' => 'Membres initiaux',
      'Type a user or project name...' => 'Entrez le nom d\'un utilisateur ou d\'un projet...',
      'Project icon.' => 'Icône du projet.',
      'Hashtags' => 'Hashtags',
      'Project policy rule; user in no projects' => 'Règle de politique projet; utilisateur dans aucun projet',
      'Project Picture' => 'Image du projet',
      'Watch Project' => 'Suivre le projet',
      'Watching Ancestor' => 'Voir les ancêtres',
      'Support for Projects' => 'Prises en charge pour les projets',
      'This One Is Purple' => 'Celui-ci est pourpre',
      'Projects being edited' => 'Projets en cours de modification',
      'Source Workboard Has No Columns' => 'Le tableau de travail source n\'a pas de colonnes',
      '%s left this project.' => '%s a quitté ce projet.',
      '%s Milestones' => 'Jalons de %s',
      'Remove Watcher' => 'Enlever un observateur',
      'Normal Project' => 'Projet standard',
      'Parent Projects' => 'Projets parents',
      'Type a user, project name, or function...' => 'Entrez un utilisateur, un nom de projet, ou une fonction ...',
      '%s set the color for %s to %s.' => '%s a défini la couleur pour %s à %s.',
      'Browse Members' => 'Afficher les membres',
      'Show Only Archived Projects' => 'N\'afficher seulement que les projets archivés',
      'Unlock Project' => 'Débloquer le projet',
      'Show Only Milestones' => 'Ne montrer que les jalons',
      'The display name of the column.' => 'Le nom d\'affichage de la colonne.',
      '%s marked this column hidden.' => '%s a marqué cette colonne comme masquée.',
      'PROJECT DETAIL' => 'DÉTAIL DU PROJET',
      'No Milestones' => 'Aucun jalon',
      'Blue Sky' => 'Bleu ciel',
      'Search for projects with particular slugs. (Slugs are the same as project hashtags.)' => 'Chercher des projets à l\'aide de « slug » particuliers (les slugs sont la même chose que les hashtags de projets).',
      'Too many tasks (%s).' => 'Trop de tâches (%s).',
      'This project does not have any watchers.' => 'Ce projet n\'est suivi par personne.',
      'Umbrella' => 'Parapluie',
      'Subprojects' => 'Sous-projets',
      '%s added %s project(s) to %s: %s.' => array(
        array(
          '%s a ajouté %s projet à %s: %s.',
          '%s a ajouté %s projets à %s: %s.',
        ),
      ),
      'Archive and Hide Column' => 'Archiver et masquer la colonne',
      'No Limit' => 'Pas de limites',
      'Added Projects' => 'Projets ajoutés',
      '%s added %s project(s): %s.' => '%s a ajouté %s projet(s): %s.',
      'Milestones can be created for this project.' => 'Des jalons peuvent être créés pour ce projets.',
      'Set project members.' => 'Déclarer les membres du projet.',
      'Read information about projects.' => 'Lire l\'information concernant les projets.',
      'Organization' => 'Organisation',
      'members of any project' => 'membres d\'un projet quelconque',
      'If you unlock this project, members will be free to leave.' => 'Si vous débloquez ce projet, les membres seront libres de partir.',
      'Edit Project Picture' => 'Modifier l\'image du projet',
      'members of project' => 'membres du projet',
      '%s added %s project(s) for %s: %s.' => array(
        array(
          '%s a ajouté %s projet à %s: %s.',
          '%s a ajouté %s projets à %s: %s.',
        ),
      ),
      'Add Column' => 'Ajouter une colonne',
      'Project Details' => 'Détails du projet',
      'Choose Project Icon' => 'Choisir l\'icône du projet',
      'Unnamed Column' => 'Colonne sans nom',
      'Enable Mail' => 'Activer le courriel',
      'View as Query' => 'Afficher en tant que requête',
      'Exploration Only' => 'Exploration seulement',
      '(Deprecated.) Search for projects with a given name or hashtag using tokenizer/datasource query matching rules. This is deprecated in favor of the more powerful "query" constraint.' => '(Obsolète.) Recherche des projets avec un nom donné ou un hashtag à l\'aide des règles de concordance des requêtes de l\'analyseur de balises ou de la source de données. Ceci est obsolète en faveur des contraintes plus puissantes de "query".',
      '%s removed %s member(s) for %s: %s.' => array(
        array(
          '%s a retiré %s membre pour %s: %s .',
          '%s a retiré %s membres pour %s: %s .',
        ),
      ),
      'Added %s project(s): %s.' => array(
        'Ajout de %s projet: %s.',
        'Ajout de %s projets: %s.',
      ),
      'Import Columns' => 'Importer des colonnes',
      '%s edited %s project(s) for %s, added %s: %s; removed %s: %s.' => array(
        array(
          '%s a mmodifié %s projet pour %s, ajouté %s: %s; supprimé %s: %s.',
          '%s a mmodifié %s projets pour %s, ajouté %s: %s; supprimé %s: %s.',
        ),
      ),
      'Member' => 'Membre',
      'Watching a project also watches all subprojects and milestones of that project.' => 'Suivre un projet implique que vous suivez aussi tous les sous-projets et les jalons de ce projet.',
      'Unsupported Project' => 'Projet non supporté',
      'Test Project %d' => 'Projet de test %s',
      'Ancestor Projects' => 'Projets ancêtres',
      'Get information about projects.' => 'Obtenir de l\'information concernant les projets.',
      'Save Column' => 'Enregistrer la colonne',
      '%s added %d project member(s): %s.' => array(
        array(
          '%s a ajouté %s membre de projet: %s.',
          '%s a ajouté %s membres de projet: %s.',
        ),
      ),
      'Column: %s' => 'Colonne: %s',
      '%s removed %s member(s): %s.' => '%s a supprimé %s membre(s): %s.',
      '%s activated this project.' => '%s a activé ce projet.',
      'Information about the project icon.' => 'Information concernant l\'icône du projet.',
      'Can Create Projects' => 'Peut créer des projets',
      'Create New Project' => 'Créer un nouveau projet',
      'You are watching this project and will receive mail about changes made to any related object.' => 'Vous suivez ce projet et vous recevrez un courriel quand l\'un de ses objets sera modifié.',
      'React to projects being created or updated.' => 'Réagir aux projets créés ou mis à jour.',
      'Your tremendous contributions to this project will be sorely missed. Are you sure you want to leave?' => 'Vos apports exceptionnels à ce projet fantastique vont nous manquer. Êtes-vous sûr que vous partez déjà ?',
      'Move to Column' => 'Déplacer en colonne',
      'Remove projects' => 'Supprimer des projets',
      'Advanced Filter...' => 'Filtre avancé...',
      'Gradients' => 'Gradients',
      'Members of a project can always view it.' => 'Les membres d\'un projet peuvent toujours le voir.',
      'Change the project icon.' => 'Modifier l\'icône du projet.',
      'You can not add milestones to this project.' => 'Vous ne pouvez pas ajouter de jalons à ce projet.',
      'Project tags' => 'Labels du projet',
      'You are not a project member, so you do not receive mail sent to members of this project.' => 'Vous n\'êtes pas membre du projet, donc vous ne recevez pas les courriels envoyés aux membres de ce projet.',
      'Hide Milestones' => 'Masquer les jalons',
      'You can not import columns into this workboard because it already has columns. You can only import into an empty workboard.' => 'Vous ne pouvez pas importer de colonnes dans ce tableau de travail parce qu\'il en possède déja. Vous ne pouvez importer de colonnes que dans un tableau vide.',
      'Only' => 'Seulement',
      'Background Color' => 'Couleur de fond',
      'Activate Project' => 'Activer le projet',
      '%s archived this project.' => '%s a archivé ce projet.',
      'Projects must have a name.' => 'Les projets doivent avoir un nom.',
      'Move Tasks to Column...' => 'Déplacer les tâches vers la colonne...',
      '%s edited member(s), added %s: %s; removed %s: %s.' => array(
        'Modification de %s membre, ajouté %s: %s; supprimé %s: %s.',
        'Modification de %s membres, ajouté %s: %s; supprimé %s: %s.',
      ),
      'Save Default Filter' => 'Enregistrer le filtre par défaut',
      'Manage Project' => 'Gérer le projet',
      'Create a project.' => 'Créer un projet.',
      '%s removed %s project(s) from %s: %s.' => array(
        array(
          '%s a supprimé %s projet de %s: %s.',
          '%s a supprimé %s projets de %s: %s.',
        ),
      ),
      'No Subprojects' => 'Aucun sous-projet',
      'Edit Details' => 'Modifier les détails',
      'Advanced Filter' => 'Filtre avancé',
      'Solid Colors' => 'Couleurs continues',
      'Infrastructure' => 'Infrastructure',
      'Move to Project' => 'Déplacer vers le projet',
      'Watching' => 'Suivre',
      'Project Fields' => 'Champs du projet',
      'Array of custom fields for Projects.' => 'Tableau des champs utilisateur pour les projets.',
      'This project has no milestones.' => 'Ce projet n\'a pas de jalons.',
      'Project watcher list changes.' => 'La liste des personnes qui suivent ce projet a été modifiée.',
      'Save as Default' => 'Enregistrer comme défaut',
      'Add members.' => 'Ajouter des membres.',
      'New list of members.' => 'Nouvelle liste des membres.',
      'This project will be moved to the archive.' => 'Ce projet sera déplacé vers l\'archive.',
      'This project has milestones.' => 'Ce projet possède des jalons.',
      'Convert to Parent Project' => 'Convertir en projet parent',
      'Subprojects can be created for this project.' => 'Des sous-projets peuvent être créés pour ce projet.',
      'Choose a project to move tasks to.' => 'Choisissez un projet auquel attribuer les tâches.',
      '%s removed %s project(s): %s.' => array(
        array(
          '%s a supprimé %s projet: %s.',
          '%s a supprimé %s projets: %s.',
        ),
      ),
      'Members: ...' => 'Membres: ...',
      'Create Milestone' => 'Créer un jalon',
      'Project %s' => 'Projet %s',
      'Browse Projects' => 'Afficher les projets',
      '%s created this project.' => '%s a créé ce projet.',
      'New project name.' => 'Nouveau nom de projet.',
      'Depths' => 'Profondeurs',
      'Default Join Policy' => 'Politique de participation par défaut',
      'Unit Test User %d' => 'Utilisateur de tests unitaires %s',
      'This project will become active again.' => 'Ce projet redeviendra actif.',
      'Apply Filter' => 'Appliquer le filtre',
      'Sort by Priority' => 'Trier par priorité',
      'Custom Filter' => 'Filtre personnalisé',
      'Subtype of the project.' => 'Sous-type du projet.',
      'Projects User Guide' => 'Guide utilisateur des projets',
      'Projects: ...' => 'Projets: ...',
      'Join Project' => 'Rejoindre le projet',
      'This project has subprojects.' => 'Ce projet possède des sous-projets.',
      'Remove projects: %s.' => 'Supprimer les projets: %s.',
      'Project Ancestors' => 'Ancêtres du projet',
      '%s named this column "%s".' => '%s a appelé cette colonne « %s ».',
      'Unwatch Project' => 'Ne plus suivre le projet',
      'You can not import columns from that workboard because it has no importable columns.' => 'Vous ne pouvez pas importer de colonnes de ce tableau de travail car il ne possède pas de colonnes importables.',
      'You must choose a valid project.' => 'Vous devez choisir un projet valide.',
      '%s removed %s project(s) for %s: %s.' => array(
        array(
          '%s a supprimé %s projet de %s: %s.',
          '%s a supprimé %s projets de %s: %s.',
        ),
      ),
      'User\'s Projects: %s' => 'Projets de l\'utilisateur: %s',
      'Workboard Already Has Columns' => 'Le tableau de travail possède déjà des colonnes',
      'Project History' => 'Historique du projet',
      'Locked Project' => 'Projet verrouillé',
      'Fullscreen' => 'Plein écran',
      'Change Background Color' => 'Changer la couleur de fond',
      '%s joined this project.' => '%s a rejoint ce projet.',
      'Type a project subtype name...' => 'Entrez le nom d\'un sous-type de fichier...',
      'Show Hidden Columns' => 'Afficher le colonnes masquées',
      '(Default)' => '(par défaut)',
      'Tagged with Project' => 'Labellisé avec le projet',
      '%s / All' => '%s / Tous',
      '%s added %d %s hashtag(s): %s.' => array(
        array(
          array(
            '%s a ajouté %s %s balise de hachage: %s.',
            '%s a ajouté %s %s balises de hachage: %s.',
          ),
        ),
      ),
      'Bugs' => 'Bogues',
      'Add Members' => 'Ajouter des membres',
      'Choose Icon and Color...' => 'Choisir une icône et une couleur...',
      'No projects found.' => 'Pas de projet trouvé.',
      'Watchers' => 'Observateurs',
      'Remove project tags' => 'Supprimer les balises de projet',
      'Add project tags.' => 'Ajouter des tags de projet',
      'Disable Project Mail' => 'Désactiver les courriels du projet',
      'Archive Subproject' => 'Archiver un sous-projet',
      'Bulk Edit Tasks...' => 'Tâches de modification en masse...',
      'Select project members.' => 'Choisir les membres du projet.',
      'Remove %s as a watcher of %s?' => 'Supprimer %s en tant qu\'observateur de %s ?',
      'Define project subtypes.' => 'Définir des sous-types de projets.',
      'Get the watcher list for the project.' => 'Obtenir la liste des personnes qui suivent ce projet.',
      'Project names must not be longer than %s character(s).' => array(
        'Les noms de projet ne doivent pas dépasser %s caractère.',
        'Les noms de projet ne doivent pas dépasser %s caractères.',
      ),
      '%s edited project(s) for %s, added %s: %s; removed %s: %s.' => array(
        '%s projet modifié pour %s, ajouté %s: %s; supprimé %s: %s.',
        '%s projets modifiés pour %s, ajouté %s: %s; supprimé %s: %s.',
      ),
      'Project name.' => 'Nom du projet.',
      'No Background' => 'Pas d\'arrière plan',
      'Project policy rule; user in all projects' => 'Règle de politique projet; utilisateur de tous les projets',
      'Milestones' => 'Jalons',
      'Project policy rule; user in some projects' => 'Règle de politique projet; utilisateur de certains projets',
      'members of all projects' => 'membres de tous les projets',
      'Natural' => 'Naturel',
      'Add projects: %s.' => 'Ajouter des projets : %s.',
      'Members and Watchers' => 'Membres et observateurs',
      'Remove Member' => 'Supprimer un membre',
      'Removed Projects' => 'Projets supprimés',
      '%s Subprojects' => '%s sous-projets',
      'Disable Mail' => 'Désactiver le courriel',
      'Slugs' => 'Slugs',
      'Move Tasks' => 'Déplacer les tâches',
      'Watching a project will let you monitor it closely. You will receive email and notifications about changes to every object tagged with projects you watch.' => 'Suivre un projet vous permettra de le maîtriser de près. Vous recevrez un courriel et des notifications concernant les changements réalisés sur chaque objet labellisé relatifs aux projets que vous suivez.',
    );
  }

}
