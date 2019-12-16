<?php

final class PhabricatorDivinerFrFR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr_FR';
  }

  protected function getTranslations() {
    return array(
      'Article has no %s!' => 'L\'article n\'a pas de %s!',
      'Writing graph cache.' => 'Écriture du cache graphique.',
      'Edit Basics' => 'Modifier les bases',
      'This interface is not documented.' => 'Cet interface n\'est pas documenté.',
      'Type a book name...' => 'Entrer un nom de livre...',
      'Documentation uses `%s`, but should use `%s`.' => 'La documentation utilise \'%s\', mais devrait utiliser \'%s\'.',
      'Atom "%s" is preceded by a comment containing `%s`, but the comment is not a documentation comment. Documentation comments must begin with `%s`, followed by a newline. Did you mean to use a documentation comment? (As the comment is not a documentation comment, it will be ignored.)' => 'L’atome « %s » est précédé par un commentaire contenant `%s`, mais le commentaire n’est pas un commentaire de documentation. Les commentaires de documentation doivent commencer par `%s`, suivi par un saut de ligne. Vouliez-vous utiliser un commentaire de documentation (comme le commentaire n’est pas un commentaire de documentation, il sera ignoré) ?',
      'No such atom \'%s\'!' => 'Pas d’atome \'%s\' !',
      'Diviner Atom' => 'Atome de Diviner',
      'Found %s book(s).' => 'Trouvé %s livre(s).',
      'Propagating changes through the graph.' => 'Propagation des modifications dans le graphe.',
      'Atoms inherit the policies of the books they are part of.' => 'Les atomes héritent des politiques des livres auxquels ils appartiennent.',
      'Deleting %s document(s).' => 'Suppression de %s document(s).',
      'Rule \'%s\' is not a valid regular expression.' => 'La règle \'%s\' n’est pas une expression régulière valide.',
      'Return' => 'Retour',
      'Found %s file(s) in project.' => '%s fichier(s) trouvé(s) dans le projet.',
      'PUBLISHING DOCUMENTATION' => 'PUBLICATION DE LA DOCUMENTATION',
      'All Atoms' => 'Tous les atomes',
      'Book configuration \'%s\' has name \'%s\', but book names must include only lowercase letters and hyphens.' => 'La configuration du livre \'%s\' a pour nom \'%s\', mais les noms des livres ne doivent comprendre que des minuscules et des tirets.',
      'Read More Documentation' => 'Lire plus de documentation',
      'Specify a Diviner book configuration file with %s.' => 'Spécifier un fichier de configuration de livre de Diviner avec %s.',
      'Creating %s document(s).' => 'Création de %s document(s).',
      'Diviner' => 'Diviner',
      'Specify a subclass of %s.' => 'Spécifier une sous-classe de %s.',
      'Atom names must not be in the form \'%s\'. This pattern is reserved for disambiguating atoms with similar names.' => 'Les noms d’atome ne doivent pas être dans la forme \'%s\'. Ce modèle est réservé pour désambiguiser les atomes avec des noms similaires.',
      'Article' => 'Article',
      'Skipping %s...' => 'Saut de %s…',
      'This article is not documented.' => 'Cet article n’est pas documenté.',
      'Books' => 'Livres',
      'This atom no longer exists.' => 'Cet atome n’existe plus.',
      'No books found.' => 'Pas de livres trouvés.',
      'This call takes %s parameter(s), but only %s are documented.' => 'Cet appel prend %s paramètre(s), mais seulement %s sont documentés.',
      'Writing atom cache.' => 'Écriture du cache d’atomes.',
      'Inherited' => 'Hérité',
      'Documentation Warnings' => 'Avertissements de documentation',
      'Diviner Books' => 'Livres de Diviner',
      'Generating book "%s"...' => 'Génération du livre "%s"...',
      'No methods for this task.' => 'Aucune méthode pour cette tâche.',
      'Repository that the documentation belongs to.' => 'Dépôt auquel appartient la documentation.',
      'Atom already has a parent!' => 'L’atome a déjà un parent !',
      'Produce ugly (but faster) output.' => 'Produire une sortie moche (mais plus rapide).',
      'This file is not documented.' => 'Ce fichier n’est pas documenté.',
      'Found %s affected atoms.' => '%s atomes affectés trouvés.',
      'Diviner Book' => 'Livre de Diviner',
      'Found %s new atom(s) in graph.' => array(
        '%s nouvel atome trouvé dans le graphe.',
        '%s nouveaux atomes trouvés dans le graphe.',
      ),
      'There are no Diviner \'%s\' files anywhere beneath the current directory. Use \'%s\' to specify a documentation book to generate.' => 'Il n’y a de fichiers \'%s\' de Diviner nulle part en dessous du répertoire actuel. Utiliser \'%s\' pour spécifier un livre de documentation à générer.',
      'Edit Book' => 'Modifier le livre',
      'Child hashes have already been computed!' => 'Les hachages enfant ont déjà été calculés !',
      'Defined' => 'Défini',
      'Clear the caches before generating documentation.' => 'Effacer les caches avant de générer la documentation.',
      'Implements' => 'Implémente',
      'Parent hash has already been computed!' => 'Le hachage parent a déjà été calculé !',
      'Free Radicals' => 'Radicaux libres',
      'Generate documentation.' => 'Générer la documentation',
      'Expected exactly one atom from file atomizer.' => 'Un atome exactement attendu depuis l’atomiseur de fichier.',
      'Untitled Article "%s"' => 'Article « %s » sans titre',
      'Publisher class \'%s\' must be a concrete subclass of %s.' => 'La classe de publication \'%s\' doit être une sous-classe concrète de %s.',
      'Need translation for \'%s\'.' => 'Besoin d’une traduction pour \'%s\'.',
      'Documentation Not Found' => 'Documentation non trouvée',
      'Path to a Diviner book configuration.' => 'Chemin vers une configuration de livre de Diviner.',
      'This class is not documented.' => 'Cette classe n’est pas documentée.',
      'This method is not documented.' => 'Cette méthode n’est pas documentée.',
      'Documentation Atoms' => 'Atomes de documentation',
      'Parameter "%s" is named "%s" in the documentation. The documentation may be out of date.' => 'Le paramètre « %s » est nommé « %s » dans la documentation. La documentation est peut-être obsolète.',
      'Atomizer class \'%s\' must be a concrete subclass of %s.' => 'La classe de l’atomiseur \'%s\' doit être une sous-classe concrète de %s.',
      'BUILDING ATOM CACHE' => 'CONSTRUCTION DU CACHE D’ATOMES',
      'Specify an atomizer class with %s.' => 'Spécifier une classe d’atomiseur avec %s.',
      'BUILDING GRAPH CACHE' => 'CONSTRUCTION DU CACHE DE GRAPHE',
      'Unable to find the specified documentation. You may have followed a bad or outdated link.' => 'Impossible de trouver la documentation spécifiée. Vous avez peut-être suivi un lien incorrect ou obsolète.',
      'Extends' => 'Étend',
      'Found %s obsolete atom(s) in graph.' => array(
        '%s atome obsolète trouvé dans le graphe.',
        '%s atomes obsolètes trouvés dans le graphe.',
      ),
      'No such atom with node hash \'%s\'!' => 'Pas d’atome avec le hachage de nœud \'%s\' !',
      'Atomization complete.' => 'Atomisation terminée.',
      'Documentation specifies `%s` multiple times.' => 'La documentation spécifie `%s` plusieurs fois.',
      'CLEARING CACHES' => 'EFFACEMENT DES CACHES',
      'Diviner User Guide' => 'Guide d’utilisateur de Diviner',
      'Edit Book: %s' => 'Modifier le livre : %s',
      'Found %s file(s) to atomize.' => array(
        '%s fichier trouvé à atomiser.',
        '%s fichiers trouvés à atomiser.',
      ),
      'Found %s unatomized, uncached file(s).' => array(
        '%s fichier non atomisé et non en cache trouvé.',
        '%s fichiers non atomisés et non en cache trouvés.',
      ),
      'Method `%s` has explicitly documented `%s`. The `%s` method always returns `%s`. Diviner documents this implicitly.' => 'La méthode `%s` a documenté `%s` de façon explicite. La méthode `%s` renvoie toujours `%s`. Diviner documente implicitement cela.',
      'Build atoms from source.' => 'Construire les atomes depuis la source.',
      '(NOTE) **Looking for Phabricator documentation?** If you\'re looking for help and information about Phabricator, you can [[https://secure.phabricator.com/diviner/ | browse the public Phabricator documentation]] on the live site.
    Diviner is the documentation generator used to build the Phabricator documentation.
    You haven\'t generated any Diviner documentation books yet, so there\'s nothing to show here. If you\'d like to generate your own local copy of the Phabricator documentation and have it appear here, run this command:
      %s
    ' => '(NOTE) **Vous cherchez de la documentation sur Phabricator ?** Si vous cherchez de l’aide et de l’information sur Phabricator, Vous pouvez [[https://secure.phabricator.com/diviner/ | naviguer dans la documentation publique de Phabricator]] sur le site en direct.
    Diviner est le générateur de documentation utilisé pour construire la documentation de Phabricator.
    Vous n’avez pas encore généré de livre Diviner, donc il n’y a rien à afficher ici. Si vous voulez générer votre propre copie locale de la documentation de Phabricator et qu’elle apparaisse ici, lancez cette commande :
      %s',
      'This function is not documented.' => 'Cette fonction n\'est pas documentée.',
      'Find' => 'Rechercher',
      'Other Methods' => 'Autres méthodes',
      'Expected to find atom while disambiguating!' => 'Trouver un atome lors de la désambiguïsation était attendu !',
      'This %s is not documented.' => 'Ce %s n’est pas documenté.',
      'Documentation Books' => 'Livres de documentation',
      'Atom cache is up to date, no files to atomize.' => 'Le cache d’atomes est à jour, aucun fichier à atomiser.',
      'Repository "%s" does not exist.' => 'Le dépôt « %s » n’existe pas.',
      'Book' => 'Livre',
      'Specify one or more files to atomize.' => 'Spécifier un ou plusieurs fichiers à atomiser.',
      'Atomizing %s...' => 'Atomisation de %s...',
      'Completed generation of "%s".' => 'Génération terminée de "%s".',
      'Atomizing %s file(s).' => 'Atomisation de %s fichier(s).',
      'Atom has no symbol map entry!' => 'Atome n’a pas d’entrée de table de symbole !',
      'Browse Books' => 'Naviguer dans les livres',
      'FINDING DOCUMENTATION BOOKS' => 'RECHERCHE DES LIVRES DE DOCUMENTATION',
    );
  }

}
