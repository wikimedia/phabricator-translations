<?php

final class PhabricatorFactFrFR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr_FR';
  }

  protected function getTranslations() {
    return array(
      'Analyze from the beginning, ignoring cursors.' => 'Analyser depuis le début, en ignorant les curseurs.',
      'Iterator \'%s\' does not exist.' => 'L\'itérateur \'%s\' n\'existe pas.',
      'Manually invoke fact analyzers.' => 'Invoquer manuellement les analyseurs de faits.',
      'No fact engines support generating facts for this object.' => 'Aucun moteur de faits ne supporte la génération de faits pour cet objet.',
      'Y-Axis' => 'Axe Y',
      'Executing a fact query requires facts.' => 'L’exécution d’une requête de faits nécessite des faits.',
      'Process only iterator __name__.' => 'Traiter uniquement l’itérateur __name__.',
      'Cursor %s does not exist or is already reset.' => 'Le curseur %s n’existe pas ou est déjà réinitialisé.',
      'No cursors.' => 'Aucun curseur.',
      'Fact Extraction Report' => 'Rapport d’extraction de faits',
      'Dimension' => 'Dimension',
      'Processing %s...' => 'Traitement de %s…',
      'Zzz...' => 'Zzz...',
      'No Stored Datapoints' => 'Aucun point de donnée stocké',
      '%sms' => '%sms',
      'Processing cursor \'%s\'.' => 'Traitement du curseur \'%s\'.',
      'Show a list of fact engines.' => 'Montrer une liste de moteurs de faits.',
      'Chart' => 'Graphique',
      'Chart and Analyze Data' => 'Tracer et analyser les données',
      'Really destroy all facts? They will need to be rebuilt through analysis, which may take some time.' => 'Vraiment détruire les faits ? Ils devront être reconstruits via l’analyse, ce qui peut prendre du temps.',
      '%s (Transactions)' => '%s (transactions)',
      'Show a list of fact iterators and cursors.' => 'Afficher une liste d’itérateurs de fait et de curseurs.',
      'Failed to load or generate dimension ID ("%s") for dimension key "%s".' => 'Échec au chargement ou à la génération de l’ID de dimension (« %s ») pour la clé de dimension « %s ».',
      'Destroy all facts.' => 'Supprimer tous les faits.',
      'Facts' => 'Faits',
      'Resetting cursor %s...' => 'Réinitialisation du curseur %s…',
      'Not Stored' => 'Non enregistré',
      'Reset cursor __cursor__.' => 'Réinitialisser le curseur __cursor__.',
      'Skip analysis of aggregate facts.' => 'Sauter l’analyse des faits agrégés.',
      'No Engines' => 'Aucun moteur',
      'Destroying table \'%s\'...' => 'Destruction de la table \'%s\'…',
      'Fact' => 'Fait',
      'Unknown fact ("%s") for engine "%s".' => 'Evénement inconnu (« %s ») pour le moteur « %s ».',
      'Fact "%s"' => 'Fait « %s »',
      'Consistent Fact' => 'Fait concordant',
      'Count of %s' => 'Nombre de %s',
      'Not Generated' => 'Non généré',
      'Plot Chart' => 'Graphique par points',
    );
  }

}
