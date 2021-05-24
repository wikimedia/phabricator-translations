<?php

final class PhabricatorAuditCa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ca';
  }

  protected function getTranslations() {
    return array(
      'A commit is created.' => 'Es crea una validació.',
      'USERS' => 'USUARIS',
      'Find commits with particular identifiers (usually, hashes). Supports full or partial identifiers (like "abcd12340987..." or "abcd1234") and qualified or unqualified identifiers (like "rXabcd1234" or "abcd1234").' => 'Cerca validacions amb identificadors particulars (normalment, hash). Admet identificadors parcials o complets (com ara "abcd12340987 ..." o "abcd1234") i identificadors qualificats o no qualificats (com "rXabcd1234" o "abcd1234").',
      '%s resigned from auditing %s.' => '%s ha renunciat a fer l\'auditoria de %s.',
      'Specified maximum date must come after specified minimum date.' => 'La data màxima especificada ha de venir després de la data mínima especificada.',
      'A commit\'s projects change.' => 'Modificació de les validacions del projecte.',
      '%s added subscribers: %s.' => '%s ha afegit subscriptors: %s.',
      'Query audit requests.' => 'Sol·licituds d\'auditoria de consultes.',
      'Specify "--all" to affect everything, or a list of specific commits or repositories to affect.' => 'Especifiqueu "--all" per afectar-ho tot, o una llista de validacions o repositoris específics per afectar.',
      'Update all commits in all repositories.' => 'Actualitzeu totes les validacions de tots els repositoris.',
      '%s added subscribers...' => '%s ha afegit subscriptors...',
      'A commit is closed.' => 'Una validació està tancada.',
      '%s added auditors...' => '%s ha afegit auditors...',
      '%s resigned from this audit.' => '%s ha renunciat a fer aquesta auditoria.',
      'Updating "%s" (%s)...' => 'Actualitzant "%s" (%s)...',
      '%s removed auditors from %s: %s.' => '%s ha suprimit auditors des de %s: %s.',
      'Select only audits in a given list of repositories.' => 'Seleccioneu només auditories en una llista donada de repositoris.',
      'No synchronization changes for "%s".' => 'Cap canvi de sincronització per "%s".',
      'Find or exclude unreachable commits which are not ancestors of any branch, tag, or ref.' => 'Cerqueu o excloeu validacions inaccessibles que no siguin avantpassades de cap branca, etiqueta o referència.',
      'Welcome to Audit' => 'Benvingut a Auditoria',
      'Select only audits for commits on or after the given date.' => 'Seleccioneu només les auditories per les validacions a la data indicada o després.',
      'Object "%s" is not a valid object.' => 'L\'objecte \'%s\' no és un objecte vàlid.',
      'Hide Unreachable Commits' => 'Oculta les validacions inaccessibles',
      '%s committed %s (authored by %s).' => '%s ha validat per %s (escrit per %s).',
      'Select only audits for commits on or before the given date.' => 'Seleccioneu només les auditories per a les validacions a la data indicada o abans.',
      'All Commits' => 'Totes les validacions',
      '%s added auditors to %s: %s.' => '%s ha afegit auditors a %s: %s.',
      'Select only audits with the given IDs.' => 'Seleccioneu només auditories amb els identificadors proporcionats.',
      'A commit has an auditor resign.' => 'Una validació utilitza un auditor que ha renunciat.',
      'Find commits with given audit statuses.' => 'Cerqueu validacions amb els estats de validació donats.',
      'Select only audits in the given status. By default, only open audits are selected.' => 'Seleccioneu només auditories en l\'estat indicat. Per defecte, només se seleccionen auditories obertes.',
      'Object "%s" is not a valid repository or commit.' => 'L\'objecte «%s» no és un repositori vàlid o una validació.',
      'Unable to parse date "%s". Use a format like "%s".' => 'No es pot analitzar sintàcticament la data \'%s\'. Utilitzeu un format com \'%s\'.',
      'Failed to load commit during transaction finalization!' => 'No s\'ha pogut carregar la validació durant la finalització de la transacció.',
      'Update commits to make their summary audit state reflect the state of their actual audit requests. This can fix inconsistencies in database state if audit requests have been mangled accidentally (or on purpose).' => 'Actualitzeu les validacions perquè el resum del seu estat d\'auditoria reflecteixi l\'estat de les sol·licituds d\'auditoria reals. Això pot corregir inconsistències en l\'estat de la base de dades si les consultes d\'auditoria s\'han destruït accidentalment (o deliberadament).',
      'A commit has auditors added.' => 'S\'ha afegit un auditor a una validació.',
      'Select only audits by a given list of users.' => 'Seleccioneu només les auditories d\'una llista determinada d\'usuaris.',
      'Identifiers' => 'Identificadors',
      '%s edited subscribers; added: %s, removed: %s.' => '%s ha modificat els subscriptors, afegit: %s, esborrat: %s.',
      'Failed to reload commit ("%s").' => 'No s\'ha pogut tornar a carregar la validació ("%s").',
      'Auditor' => 'Auditor',
      '%s closed the audit of %s.' => '%s ha tancat l\'auditoria de %s.',
      'none' => 'cap',
      '%s removed auditors: %s.' => '%s ha suprimit auditors: %s.',
      'Show what would be deleted, but do not actually delete anything.' => 'Mostra el que se suprimiria, però en realitat no suprimeixis res.',
      'Select only audits for the given commits.' => 'Seleccioneu només validacions per als compromisos donats.',
      'Find commits which affect given packages.' => 'Cerqueu validacions que afectin determinats paquets.',
      'Show Only Unreachable Commits' => 'Mostra només validacions inaccessibles',
      '(This commit affected more than %d files. Only %d are shown here and additional ones are truncated.)' => '(Aquesta validació ha afectat més de %s fitxers. Només es mostren %s aquí i es trunquen els addicionals.)',
      'Other commit activity not listed above occurs.' => 'Es produeix una altra activitat de validació no esmentada aquí dalt.',
      'Update package relationships for commits.' => 'Actualitzeu les relacions de paquets per a les validacions.',
      'Find commits where given users, projects, or packages are auditors.' => 'Cerqueu validacions on els usuaris, els projectes o els paquets donats siguin auditors.',
      '%s removed subscribers: %s.' => '%s ha suprimit subscriptors: %s.',
      'Synchronizing "%s": "%s" -> "%s".' => 'Sincronitzant "%s": "%s" -> "%s".',
      '%s edited auditors; added: %s, removed: %s.' => '%s ha modificat els auditors, afegit: %s, esborrat: %s.',
      'No audits match the query.' => 'No hi ha auditories que coincideixin amb la consulta.',
      'Find commits which are ancestors of a particular ref, like "master".' => 'Cerqueu validacions que són avantpassats d\'una referència determinada, com ara "mestre".',
      'Post-commit code review and auditing. Audits you are assigned to will appear here.' => 'Revisió i auditoria del codi de postvalidació. Les auditories que se li assignin apareixeran aquí.',
      'Ancestors Of' => 'Avantpassats de',
      '%s committed %s.' => '%s ha validat %s.',
      'Find commits authored by particular users.' => 'Cerqueu validacions creades per usuaris concrets.',
      'Really delete these %s audit(s)? They will be permanently deleted and can not be recovered.' => 'Voleu suprimir aquestes auditories de %s? Se suprimiran definitivament i no es podran recuperar.',
      'A commit has a concerned raised against it.' => 'Una validació té un comentari en contra.',
      'Someone comments on a commit.' => 'Algú comenta en una validació.',
      'Find commits where given users, projects, or packages are responsible for the next steps in the audit workflow.' => 'Cerqueu validacions on els usuaris, els projectes o els paquets determinats són els responsables de les etapes següents del flux de treball d\'auditoria.',
      'Specify either a list of objects to affect or "--all", but not both.' => 'Especifiqueu una llista d\'objectes a afectar o "--all", però no tots dos.',
      'This is a dry run, so no changes will be made.' => 'Es tracta d’una prova en blanc, de manera que no es realitzaran canvis.',
      'Audits' => 'Auditories',
      'Unreachable' => 'Inaccessible',
      'Active Audits' => 'Auditories actives',
      'Browse and Audit Commits' => 'Explorar i auditar validacions',
      'Delete audit requests matching parameters.' => 'Suprimiu les sol·licituds d\'auditoria que coincideixin amb paràmetres.',
      '%s closed this audit.' => '%s ha tancat aquesta auditoria.',
      'Find commits in particular repositories.' => 'Cerca validacions en repositoris particulars.',
      'No such user with username "%s"!' => 'No existeix l\'usuari amb el nom d\'usuari "%s"!',
      'No such commit "%s"!' => 'No existeix la validació «%s»!',
      'Deleting audit %d...' => 'Eliminant l\'auditoria %s...',
      'Update named commits and repositories.' => 'Actualitzeu les validacions i els repositoris amb nom.',
      '%s added auditors: %s.' => '%s ha afegit auditors: %s.',
      'A commit\'s subscribers change.' => 'Una modificació dels subscriptors d’una validació.',
      'Audit Requested' => 'Cal tenir Audit',
      'View Commit' => 'Mostra la validació',
      'Audit' => 'Auditoria',
      'No commits found.' => 'Cap validació trobada.',
      '%s added auditors to %s...' => '%s ha afegit auditors a %s...',
      '%s edited auditors for %s; added: %s, removed: %s.' => '%s ha modificat els auditors per %s; afegit: %s, esborrat: %s.',
      'A commit is accepted.' => 'Una validació està acceptada.',
    );
  }

}
