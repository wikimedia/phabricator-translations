<?php

final class PhabricatorOwnersFrFR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr_FR';
  }

  protected function getTranslations() {
    return array(
      '"" (empty string)' => '"" (chaîne vide)',
      'Package name is required.' => 'Le nom du paquet est obligatoire.',
      'Create New Package' => 'Créer un nouveau paquet',
      'Search for active or archived packages.' => 'Rechercher les paquets actifs ou archivés.',
      'Include' => 'Inclure',
      'Path Exists in Repository' => 'Chemin existant dans le dépôt',
      'Included Paths' => 'Chemins inclus',
      'Audit Unreviewed Commits and Commits With No Owner Involvement' => 'Auditer les validations non relues et celles qui n\'impliquent pas leurs auteurs',
      'Search for packages by name substrings.' => 'Rechercher des paquets avec une partie du nom.',
      'Select and reorder package fields.' => 'Sélectionner et réordonner les champs des paquets.',
      'Path specification must be a list of paths.' => 'La spécification des chemins doit être une liste de chemins.',
      'Validating...' => 'Validation en cours...',
      '%s updated paths for this package.' => '%s a mis à jour les chemins pour ce paquet.',
      'Auto Review' => 'Relecture automatique',
      'Packages: Invalid Owner' => 'Paquets : propriétaire non valide',
      'Auto review information.' => 'Information d\'auto relecture.',
      'Path Not Found On Default Branch' => 'Chemin non trouvé sur la branche par défaut',
      'Users and projects which own the package.' => 'Utilisateurs et projets responsables du paquet.',
      'Parameter should be a phid.' => 'Le paramètre doit être un phid.',
      'Packages: %s' => 'Paquets : %s',
      'owner' => 'propriétaire',
      'The package description.' => 'Description du paquet.',
      '%s renamed this package from %s to %s.' => '%s a renommé ce paquet de %s en %s.',
      'Audit Unreviewed Commits' => 'Auditer les validations non relues',
      'Type a package name or function...' => 'Entrer un nom de paquet ou de fonction...',
      'Save Paths' => 'Enregistrer les chemins',
      'List of dictionaries, each describing a path.' => 'Liste de dictionnaires, chacun d\'eux décrivant un chemin.',
      'Edit Paths' => 'Modifier les chemins',
      '%s changed %s ignored attribute(s), added %s: %s.' => array(
        array(
          '%s a modifié %s attribut ignoré, ajouté %s: %s.',
          '%s a modifié %s attributs ignorés, ajouté %s: %s.',
        ),
      ),
      'Owners User Guide' => 'Guide utilisateur des propriétaires',
      'Ignored attribute information.' => 'Information d\'attribut ignorée.',
      'Weak' => 'Faible',
      'Authority' => 'Autorité',
      '%s changed %s ignored attribute(s), added %s: %s; removed %s: %s.' => array(
        array(
          '%s a modifié %s attribut ignoré, ajouté %s: %s; retiré %s: %s.',
          '%s a modifié %s attributs ignorés, ajouté %s: %s; retiré %s: %s.',
        ),
      ),
      'Ignore generated files (review only).' => 'Ignorer les fichiers générés (relecture seulement).',
      'Review All Changes' => 'Relire toutes les modifications',
      'Review All Changes (Blocking)' => 'Relire toutes les modifications (bloquant)',
      '[Package]' => '[Package]',
      'Audit All Commits' => 'Auditer toutes les validations',
      'Audit Commits With No Owner Involvement' => 'Auditer les validations sans implication d\'utilisateur',
      '%s archived this package.' => '%s a archivé ce paquet.',
      'Ignored Attributes' => 'Attributs ignorés',
      '%s added %s owner(s): %s.' => '%s a ajouté %s propriétaire(s) : %s.',
      '%s changed %s ignored attribute(s), removed %s: %s.' => array(
        array(
          '%s a modifié %s attribut ignoré, supprimé %s: %s.',
          '%s a modifié %s attributs ignorés, supprimé %s: %s.',
        ),
      ),
      'Get the paths for each package.' => 'Obtenir le chemin de chaque paquet.',
      'Subscribe to All Changes' => 'S\'abonner à toutes les modifications',
      'Human-readable description of the package.' => 'Description lisible par un humain du package.',
      'Strong' => 'Fort',
      'No Auditing' => 'Aucun audit en cours',
      'This package will become active again.' => 'Ce paquet redeviendra actif.',
      '%s updated the description for this package.' => '%s a mis à jour la description de ce paquet.',
      'Adopt today!' => 'Adoptez dès aujourd’hui !',
      'Ignore paths with any of these attributes.' => 'Ignorer les chemins ayant n\'importe lequel de ces attributs.',
      '%s activated this package.' => '%s a activé ce paquet.',
      'List of package owners.' => 'Liste des propriétaires de paquets.',
      'PACKAGE DETAIL' => 'DÉTAIL DU PACKAGE',
      'Package %d' => 'Paquet %s',
      'Add New Path' => 'Ajouter un nouveau chemin',
      'Exclude' => 'Exclure',
      'This package will be marked as archived.' => 'Ce paquet sera marqué archivé.',
    );
  }

}
