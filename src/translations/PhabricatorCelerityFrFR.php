<?php

final class PhabricatorCelerityFrFR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fr_FR';
  }

  protected function getTranslations() {
    return array(
      'Use Standard Colors' => 'Utiliser des couleurs standards',
      'No resource source exists with name "%s"!' => 'Aucune source de ressource n’existe avec le nom « %s » !',
      'Unable to render resource "%s", which has unknown type "%s".' => 'Impossible de rendre la ressource « %s », qui a le type inconnu « %s ».',
      'Writing map "%s".' => 'Écriture de la carte « %s ».',
      'Use High Contrast Colors' => 'Utiliser des couleurs à fort contraste',
      'Dark Mode (Experimental)' => 'Mode sombre (expérimental)',
      'Use Larger Font Size' => 'Utiliser une taille de police plus grande',
      'Found %d binary resources.' => '%s ressources binaires trouvées.',
      'No resource with symbol "%s" exists in source "%s"!' => 'Aucune ressource avec le symbole « %s » n’existe dans la source « %s » !',
      'Celerity' => 'Célérité',
      'Package specification for "%s" includes "%s", but that symbol is not %s by any resource.' => 'La spécification du paquetage pour « %s » inclut « %s », mais ce symbole n’est %s par aucune ressource.',
      'Attempting to resolve unknown resource, "%s".' => 'Tentative de résoudre une ressource inconnue, « %s ».',
      'Rebuilt "%s" syntax CSS.' => 'CSS de syntaxe « %s » reconstruit.',
      'CSS file \'%s\' has unknown variable \'%s\'.' => 'Le fichier CSS \'%s\' a une variable inconnue \'%s\'.',
      'Literal %s is not allowed inside inline script.' => 'Le littéral %s n’est pas autorisé dans un script en ligne.',
      'Use Red/Green (Deuteranopia) Colors' => 'Utiliser des couleurs rouge/vert (Deutéranopie)',
      'Resource "%s" must %s at most one Celerity target.' => 'La ressource « %s » doit %s à au moins une cible de Célérité.',
      'Cycle detected in resource graph: %s' => 'Cycle détecté dans le graphe de ressource : %s',
      'Rebuild syntax highlighting CSS.' => 'CSS de surlignage de la syntaxe reconstruit',
      'Resource source defines two resources with the same name, "%s". One is defined in the "%s" map; the other in the "%s" map. Each resource must have a unique name.' => 'La source de ressources définit deux ressources avec le même nom « %s ». L’une est définie dans la correspondance « %s » ; l’autre dans la correspondance « %s ». Chaque ressource doit avoir un nom unique.',
      'Resource "%s" does not have a header doc comment. Encode dependency data in a header docblock.' => 'La ressource « %s » n’a pas de commentaire de doc en entête. Encoder les données de dépendance dans un bloc de doc en entête.',
      'Package specification for "%s" includes resources of multiple types (%s, %s). Each package may only contain one type of resource.' => 'La spécification du paquet pour « %s » inclut des ressources de divers types (%s, %s). Chaque paquet ne peut contenir qu’un type de ressource.',
      'Rebuilding %d resource source(s).' => 'Reconstruction de %s source(s) de ressources.',
      'Optimizing...' => 'Optimisation...',
      'Found %d text resources.' => '%s ressources de texte trouvées.',
      'Expected file \'%s\' in \'%s\' to be a sprite source ending in \'%s\'.' => 'Le fichier \'%s\' dans \'%s\' est censé être une source de sprite finissant en \'%s\'.',
      'Only static resources may be served.' => 'Seules les ressources statiques peuvent être servies.',
      'Rebuilding resource source "%s" (%s)...' => 'Reconstruction de la source de ressource « %s » (%s)…',
      'Resources name "%s" is not valid; it must contain only lowercase latin letters and digits.' => 'Le nom de ressource « %s » n’est pas valide ; il doit contenir seulement des lettres minuscules de l’alphabet latin et des chiffres.',
      'Attempting to add more metadata after metadata has been locked.' => 'Tentative d’ajouter plus de métadonnées après que celles-ci aient été verrouillées.',
      'Rebuild static resource maps.' => 'Reconstruire les correspondances des ressources statiques.',
      'Found %d packages.' => '%s paquets trouvés.',
    );
  }

}
