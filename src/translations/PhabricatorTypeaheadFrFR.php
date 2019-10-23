<?php

final class PhabricatorTypeaheadFrFR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr_FR';
  }

  protected function getTranslations() {
    return array(
      'Typeahead Results' => 'Résultats de saisie semi-automatique',
      'Typeahead' => 'Saisie semi-automatique',
      'This datasource ("%s") can not evaluate the function "%s(...)".' => 'Cette source de données (« %s ») ne peut pas évaluer la fonction « %s(...) ».',
      'Function Help' => 'Aide sur la fonction',
      'In addition to typing user and project names to build queries, you can also type the names of special functions which give you more options and the ability to express more complex queries.
    Functions have an internal name (like `%s`) and a human-readable name, like `Current Viewer`. In general, you can type either one to select the function. You can also click the {nav icon=search} button on any typeahead control to browse available functions and find this documentation.
    This documentation uses the internal names to make it clear where tokens begin and end. Specifically, you will find queries written out like this in the documentation:
    %s
    When this query is actually shown in the control, it will look more like this:
    %s' => 'En plus de saisir les noms d’utilisateurs et de projets pour construire des requêtes, vous pouvez également saisir des noms de fonctions spéciales qui vous donnent davantage d’options et la capacité d’exprimer des requêtes plus complexes.
    Les fonctions ont un nom interne (tel que « %s ») et un nom lisible par un humain (tel que « Visualisateur actuel »). En général, vous pouvez taper l’un des deux pour sélectionner la fonction. Vous pouvez cliquer le bouton {nav icon=search} sur tout contrôle de saisie semi-automatique pour parcourir les fonctions disponibles et trouver sa documentation.
    Cette documentation utilise les noms internes afin d’exprimer clairement où commencent et finissent les mots-clés. En particulier, vous trouverez des requêtes écrites comme ceci dans la documentation :
    %s
    Quand cette requête est réellement affichée dans le contrôle, elle paraît plutôt sous cette forme :
    %s',
      'All arguments to "%s(...)" must be integers, found "%s" in position %d.' => 'Tous les arguments de « %s(...) » doivent être des entiers : « %s » trouvé en position %s.',
      'Invalid Parameters' => 'Paramètres non valides',
      'Source Class' => 'Classe source',
      'Raw Query' => 'Requête brute',
      'Token Results (%s)' => 'Mots-clés résultats (%s)',
      'Configured datasource class "%s" must be a valid subclass of "%s".' => 'La classe de source de données configurée « %s » doit être une sous-classe valide de « %s ».',
      'Token Name' => 'Nom d’élément lexical',
      'Reference: Advanced Functions' => 'Référence : fonctions avancées',
      'Image URI' => 'URI de l’image',
      'Select' => 'Sélectionner',
      'Typeahead functions are an advanced feature which allow you to build more powerful queries. This document explains functions available for the selected control.
    For general help with search, see the [[ %s | Search User Guide ]] in the documentation.
    Note that different controls support //different// functions (depending on what the control is doing), so these specific functions may not work everywhere. You can always check the help for a control to review which functions are available for that control.' => 'Les fonctions de saisie semi-automatique sont une fonctionnalité avancée qui vous permet de construire des requêtes plus puissantes. Ce document explique les fonctions disponibles pour le contrôle sélectionné.
    Pour l’aide générale sur la recherche, consultez le [[%s|Manuel de la recherche]] dans la documentation.
    Notez que des contrôles différents prennent en charge des fonctions //différentes// (selon ce que fait chaque contrôle), aussi ces fonctions spécifiques peuvent ne pas fonctionner partout. Vous pouvez toujours consulter l’aide sur chaque contrôle pour passer en revue quelles fonctions sont disponibles pour ce contrôle.',
      'Display Name' => 'Nom affiché',
      'This table briefly describes available functions for this control. For details on a particular function, see the corresponding section below.' => 'Ce tableau décrit brièvement les fonctions disponibles pour ce contrôle. Pour plus de détails sur une fonction particulière, consultez la section correspondante ci-dessous.',
      'This source is not usable directly.' => 'Cette source n’est pas utilisable directement.',
      'Unable to parse function and arguments for token "%s".' => 'Impossible d’analyser la fonction et les arguments pour l’élément lexical « %s ».',
      'Token Query' => 'Requête d’élément lexical',
      'Invalid Function: %s' => 'Fonction non valide : %s',
      'More Results' => 'Plus de résultats',
      'Browse Objects' => 'Parcourir les objets',
      'Typeahead Function Help' => 'Aide sur la fonction de saisie semi-automatique',
      'Sprite' => 'Icône',
      'The HTTP parameter named "parameters" for this request is not a valid JSON parameter. JSON is required. Exception: %s' => 'Le paramètre HTTP appelé « parameters » pour cette requête n’est pas un paramètre JSON valide. JSON est obligatoire. Erreur : %s',
      'Function Quick Reference' => 'Référence rapide des fonctions',
      'Constraints for input "%s".' => 'Contraintes pour l’entrée « %s ».',
      'Auto' => 'Auto',
      'You reach the edge of the abyss.' => 'Vous atteignez le bord de l’abysse.',
      'Tokenization of "%s"' => 'Lexicalisation de « %s »',
      'Browse Numbers' => 'Explorer les nombres',
      'Priority Type' => 'Type de priorité',
      'Using Typeahead Functions' => 'Utilisation des fonctions de saisie semi-automatique',
    );
  }

}
