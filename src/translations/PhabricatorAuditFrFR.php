<?php

final class PhabricatorAuditFrFR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr_FR';
  }

  protected function getTranslations() {
    return array(
      'A commit is created.' => 'Une validation est créée.',
      'USERS' => 'UTILISATEURS',
      'Find commits with particular identifiers (usually, hashes). Supports full or partial identifiers (like "abcd12340987..." or "abcd1234") and qualified or unqualified identifiers (like "rXabcd1234" or "abcd1234").' => 'Trouve des validations ayant des identifiants particuliers (en général, des hachages). Prend en charge les identifiants complets ou partiels (comme « abcd12340987… » ou « abcd1234 ») et les identifiants qualifiés ou non (comme « rXabcd1234 » ou « abcd1234 »).',
      '%s resigned from auditing %s.' => '%s a renoncé à auditer %s.',
      'Specified maximum date must come after specified minimum date.' => 'La date maximale spécifiée doit être postérieure à la date minimale spécifiée.',
      'A commit\'s projects change.' => 'Modification des projets d’une validation.',
      '%s added subscribers: %s.' => '%s a ajouté des abonnés : %s.',
      'Query audit requests.' => 'Obtenir les demandes d’audit.',
      'Specify "--all" to affect everything, or a list of specific commits or repositories to affect.' => 'Spécifier « --all » pour tout affecter, ou bien une liste de validations ou de dépôts spécifiques à affecter.',
      'Update all commits in all repositories.' => 'Mettre à jour toutes les validations dans tous les dépôts.',
      'Unknown Audit Request Status ("%s")' => 'État de la demande d’audit inconnu (« %s »)',
      '%s added subscribers...' => '%s a ajouté des abonnés...',
      'A commit is closed.' => 'Une validation est clôturée.',
      '%s added auditors...' => '%s a ajouté des auditeurs...',
      '%s resigned from this audit.' => '%s a renoncé à cet audit.',
      'Updating "%s" (%s)...' => 'Mise à jour de « %s » (%s)...',
      '%s removed auditors from %s: %s.' => '%s a supprimé des auditeurs de %s : %s.',
      'Select only audits in a given list of repositories.' => 'Sélectionner seulement les audits dans une liste donnée de dépôts.',
      'No synchronization changes for "%s".' => 'Aucune modification de synchronisation pour « %s ».',
      'Find or exclude unreachable commits which are not ancestors of any branch, tag, or ref.' => 'Trouver ou exclure les validations inatteignables qui ne sont des ancêtres d’aucune branche, balise ou référence.',
      'Welcome to Audit' => 'Bienvenue dans l’audit.',
      'Select only audits for commits on or after the given date.' => 'Sélectionner seulement les audits pour des validations à partir d’une date donnée.',
      'Object "%s" is not a valid object.' => 'L’objet « %s » n’est pas un objet valide.',
      'Hide Unreachable Commits' => 'Masquer les validations inatteignables',
      '%s committed %s (authored by %s).' => '%s a validé %s (écrit par %s).',
      'Select only audits for commits on or before the given date.' => 'Sélectionner seulement les audits pour des validations jusqu’à la date donnée.',
      'Find or exclude permanent commits which are ancestors of any permanent branch, tag, or ref.' => 'Trouve ou exclut les validations permanentes qui sont des ancêtres de n’importe quelle branche, balise ou référence.',
      'All Commits' => 'Toutes les validations',
      '%s added auditors to %s: %s.' => '%s a ajouté des auditeurs à %s : %s.',
      'Select only audits with the given IDs.' => 'Sélectionner seulement les audits ayant les identifiants fournis.',
      'A commit has an auditor resign.' => 'Une validation indique un auditeur qui y a renoncé.',
      'Find commits with given audit statuses.' => 'Trouver les validations avec les états de validation donnés.',
      'Select only audits in the given status. By default, only open audits are selected.' => 'Sélectionner seulement les audits dans l’état donné. Par défaut, seuls les audits ouverts sont sélectionnés.',
      'Object "%s" is not a valid repository or commit.' => 'L’objet « %s » n’est pas un dépôt valide ni une validation.',
      'Unable to parse date "%s". Use a format like "%s".' => 'Impossible d’analyser la date « %s ». Utiliser un format tel que « %s ».',
      'Failed to load commit during transaction finalization!' => 'Échec de chargement de la validation lors de la finalisation d’une transaction !',
      'Update commits to make their summary audit state reflect the state of their actual audit requests. This can fix inconsistencies in database state if audit requests have been mangled accidentally (or on purpose).' => 'Mettre à jour les validations pour que le résumé de leur état d’audit reflète l’état de leurs réelles demandes d’audit. Cela peut corriger des incohérences dans l’état de la base de données si des demandes d’audit ont été détruites accidentellement (ou délibérément).',
      'A commit has auditors added.' => 'Une validation comprend des auditeurs ajoutés.',
      'Select only audits by a given list of users.' => 'Sélectionner seulement les audits d’après une liste donnée d’utilisateurs.',
      'Identifiers' => 'Identifiants',
      '%s edited subscribers; added: %s, removed: %s.' => '%s a modifié des abonnés ; ajoutés : %s, enlevés : %s.',
      'Failed to reload commit ("%s").' => 'Échec du rechargement de la validation « %s ».',
      'Auditor' => 'Auditeur',
      '%s closed the audit of %s.' => '%s a clôturé l’audit de %s.',
      'none' => 'néant',
      '%s removed auditors: %s.' => '%s a retiré les auditeurs : %s.',
      'Show what would be deleted, but do not actually delete anything.' => 'Afficher ce qui serait supprimé, mais ne rien supprimer réellement.',
      'Select only audits for the given commits.' => 'Sélectionner seulement les audits pour les validations fournies.',
      'Find commits which affect given packages.' => 'Trouver les validations qui affectent les paquets donnés.',
      'Show Only Unreachable Commits' => 'Montrer seulement les validations inatteignables',
      '(This commit affected more than %d files. Only %d are shown here and additional ones are truncated.)' => '(Cette validation a affecté plus de %s fichiers. Seuls %s d’entre eux sont affichés ici et les autres sont tronqués.)',
      'Other commit activity not listed above occurs.' => 'Une autre activité de validation non listée ci-dessus s’est produite.',
      'Update package relationships for commits.' => 'Mise à jour des relations entre paquets pour les validations.',
      'Find commits where given users, projects, or packages are auditors.' => 'Trouver les validations où les utilisateurs, projets ou paquets indiqués sont des auditeurs.',
      'Diffusion Raw Commits' => 'Validations brutes de diffusion',
      '%s removed subscribers: %s.' => '%s a retiré les abonnés : %s.',
      'Committed' => 'Validé',
      'Synchronizing "%s": "%s" -> "%s".' => 'Synchronisation de « %s » : « %s » → « %s ».',
      '%s edited auditors; added: %s, removed: %s.' => '%s auditeurs modifiés ; ajoutés : %s, enlevés : %s.',
      'No audits match the query.' => 'Aucun audit ne correspond à la requête.',
      'Find commits which are ancestors of a particular ref, like "master".' => 'Trouver les validations qui sont des ancêtres d’une référence particulière, telle que « master ».',
      'Post-commit code review and auditing. Audits you are assigned to will appear here.' => 'Revue et audit de code après validation. Les audits auxquels vous êtes affecté apparaîtront ici.',
      'Ancestors Of' => 'Ancêtres de',
      '%s committed %s.' => '%s a validé %s.',
      'Find commits authored by particular users.' => 'Trouver des validations réalisées par certains utilisateurs.',
      'Really delete these %s audit(s)? They will be permanently deleted and can not be recovered.' => 'Voulez-vous vraiment supprimer cet/ces %s audit(s) ? Cette suppression sera définitive et ne pourra pas être récupérée.',
      'Someone comments on a commit.' => 'Quelqu’un commente une validation.',
      'Find commits where given users, projects, or packages are responsible for the next steps in the audit workflow.' => 'Trouver les validations où les utilisateurs, projets ou paquets donnés sont responsables des prochaines étapes dans le flux de travail de l’audit.',
      'Hide Permanent Commits' => 'Masquer les validations permanentes',
      'Specify either a list of objects to affect or "--all", but not both.' => 'Spécifiez soit une liste d’objets à affecter, soit « --all », mais pas les deux.',
      'This is a dry run, so no changes will be made.' => 'Ceci est un test à blanc, aucune modification ne sera donc effectuée.',
      'Audits' => 'Audits',
      'Unreachable' => 'Inatteignable',
      'Permanent' => 'Permanente',
      'Active Audits' => 'Audits actifs',
      'Browse and Audit Commits' => 'Afficher et auditer les validations',
      'Delete audit requests matching parameters.' => 'Supprimer les demandes d’audit correspondant aux paramètres.',
      '%s closed this audit.' => '%s a clôturé cet audit.',
      'Find commits in particular repositories.' => 'Trouver les validations dans des dépôts particuliers.',
      'No such user with username "%s"!' => 'Aucun utilisateur n’existe avec le nom « %s » !',
      'No such commit "%s"!' => 'Validation « %s » non trouvée !',
      'Deleting audit %d...' => 'Suppression de l’audit %s...',
      'A commit has a concern raised against it.' => 'Une validation a reçu une remarque la concernant.',
      'Update named commits and repositories.' => 'Mettre à jour les validations et dépôts nommés.',
      '%s added auditors: %s.' => '%s a ajouté des auditeurs : %s.',
      'A commit\'s subscribers change.' => 'Modification des abonnés d’une validation.',
      'Audit Requested' => 'Audit demandé',
      'Show Only Permanent Commits' => 'Montrer seulement les validations permanentes',
      'View Commit' => 'Afficher la validation',
      'Audit' => 'Audit',
      'No commits found.' => 'Aucune validation trouvée.',
      '%s added auditors to %s...' => '%s a ajouté des auditeurs à %s...',
      '%s edited auditors for %s; added: %s, removed: %s.' => '%s a modifié les auditeurs pour %s ; ajoutés : %s, enlevés : %s.',
      'A commit is accepted.' => 'Une validation a été acceptée.',
    );
  }

}
