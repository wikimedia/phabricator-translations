<?php

final class PhabricatorCelerityCa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ca';
  }

  protected function getTranslations() {
    return array(
      'Use Standard Colors' => 'Utilitza Colors Estàndard',
      'No resource source exists with name "%s"!' => 'No existeix cap font de recursos amb el nom «%s»!',
      'Unable to render resource "%s", which has unknown type "%s".' => 'No s\'ha pogut renderitzar el recurs «%s», que té un tipus desconegut «%s».',
      'Writing map "%s".' => 'S\'està escrivint el mapa «%s».',
      'Use High Contrast Colors' => 'Usa Colors d\'Alt Contrast',
      'Dark Mode (Experimental)' => 'Mode Fosc (Experimental)',
      'Use Larger Font Size' => 'Utilitza una Mida de Lletra Més Gran',
      'Found %d binary resources.' => 'S\'han trobat %s recursos binaris.',
      'No resource with symbol "%s" exists in source "%s"!' => 'No existeix cap recurs amb el símbol «%s» a la font «%s»!',
      'Celerity' => 'Celeritat',
      'Package specification for "%s" includes "%s", but that symbol is not %s by any resource.' => 'L\'especificació del paquet per a «%s» inclou «%s», però aquest símbol no és %s per cap recurs.',
      'Attempting to resolve unknown resource, "%s".' => 'S\'està intentant resoldre un recurs desconegut, "%s".',
      'Rebuilt "%s" syntax CSS.' => 'CSS de sintaxi "%s" reconstruïda.',
      'CSS file \'%s\' has unknown variable \'%s\'.' => 'El fitxer CSS \'%s\' té una variable desconeguda \'%s\'.',
      'Literal %s is not allowed inside inline script.' => 'El literal %s no està permès dins de l\'script en línia.',
      'Use Red/Green (Deuteranopia) Colors' => 'Utilitza els colors vermell/verd (Deuteranopia)',
      'Resource "%s" must %s at most one Celerity target.' => 'El recurs "%s" ha de tenir %s com a màxim un objectiu de Celeritat.',
      'Cycle detected in resource graph: %s' => 'S\'ha detectat un cicle al gràfic de recursos: %s',
      'Rebuild syntax highlighting CSS.' => 'Sintaxi reconstruïda que ressalta CSS.',
      'Resource source defines two resources with the same name, "%s". One is defined in the "%s" map; the other in the "%s" map. Each resource must have a unique name.' => 'Font de recursos defineix dos recursos amb el mateix nom, "%s".  Una es defineix en el mapa «%s»; l\'altra en el mapa «%s».  Cada recurs ha de tenir un nom únic.',
      'Resource "%s" does not have a header doc comment. Encode dependency data in a header docblock.' => 'El recurs "%s" no té cap capçalera de document. Codifiqueu les dades de dependència en un bloc de doc de capçalera.',
      'Package specification for "%s" includes resources of multiple types (%s, %s). Each package may only contain one type of resource.' => 'L\'especificació del paquet per a "%s" inclou recursos de diversos tipus (%s, %s). Cada paquet només pot contenir un tipus de recurs.',
      'Rebuilding %d resource source(s).' => 'Reconstruint %s font/s de recursos.',
      'Found %d text resources.' => 'S\'han trobat %s recursos de text.',
      'Expected file \'%s\' in \'%s\' to be a sprite source ending in \'%s\'.' => 'S\'esperava que el fitxer «%s» a «%s» fos una font d\'sprite que acabés en «%s».',
      'Only static resources may be served.' => 'Només es poden fer servir recursos estàtics.',
      'Rebuilding resource source "%s" (%s)...' => 'Reconstruint la font de recursos «%s» (%s)...',
      'Resources name "%s" is not valid; it must contain only lowercase latin letters and digits.' => 'El nom dels recursos «%s» no és vàlid; només ha de contenir lletres minúscules i dígits.',
      'Attempting to add more metadata after metadata has been locked.' => 'S\'està intentant afegir més metadades després que s\'hagin blocat les metadades.',
      'Rebuild static resource maps.' => 'Reconstrueix mapes de recursos estàtics.',
      'Found %d packages.' => 'Trobats %s paquets.',
    );
  }

}
