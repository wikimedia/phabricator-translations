<?php

final class PhabricatorCelerityNl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'nl';
  }

  protected function getTranslations() {
    return array(
  'Use Standard Colors' => 'Standaardkleuren gebruiken',
  'No resource source exists with name "%s"!' => 'Er bestaat geen resourcebron met de naam "%s"!',
  'Unable to render resource "%s", which has unknown type "%s".' => 'Kan bron "%s" niet weergeven, deze heeft een onbekend type "%s".',
  'Writing map "%s".' => 'Kaart "%s" schrijven.',
  'Done generating sprites - updating map...' => 'Het genereren van sprites is voltooid - kaart wordt bijgewerkt...',
  'Use High Contrast Colors' => 'Kleuren met een hoog contrast gebruiken',
  'Dark Mode (Experimental)' => 'Donkere modus (experimenteel)',
  'Use Larger Font Size' => 'Grotere lettergrootte gebruiken',
  'Do not invoke `%s` after updating sprites' => '`%s` niet aanroepen na het bijwerken van sprites',
  'Found %d binary resources.' => 'Er zijn %d binaire bronnen gevonden.',
  'No resource with symbol "%s" exists in source "%s"!' => 'Er bestaat geen bron met symbool "%s" in bron "%s"!',
  'Celerity' => 'Celerity',
  'Package specification for "%s" includes "%s", but that symbol is not %s by any resource.' => 'De pakketspecificatie voor "%s" omvat "%s", maar dat symbool is volgens geen enkele bron gelijk aan %s.',
  'Attempting to resolve unknown resource, "%s".' => 'Poging om onbekende bron "%s" op te lossen.',
  'Rebuilt "%s" syntax CSS.' => 'De CSS-syntaxis "%s" is opnieuw opgebouwd.',
  '`%s` not found in PATH.' => '`%s` niet gevonden in PATH.',
  'CSS file \'%s\' has unknown variable \'%s\'.' => 'CSS-bestand \'%s\' bevat een onbekende variabele \'%s\'.',
  'Literal %s is not allowed inside inline script.' => 'De letterlijke waarde %s is niet toegestaan binnen ingebedde scripts.',
  'Use Red/Green (Deuteranopia) Colors' => 'Kleuren rood en groen gebruiken (deuteranopie)',
  'Sprites will not be optimized! Install `%s`!' => 'Sprites worden niet geoptimaliseerd! Installeer `%s`!',
  'Resource "%s" must %s at most one Celerity target.' => 'Bron "%s" mag %s voor maximaal één Celerity-doelwit.',
  'Rebuild CSS sprite sheets.' => 'CSS-spritesheets opnieuw bouwen.',
  'Cycle detected in resource graph: %s' => 'Cyclus gedetecteerd in brongrafiek: %s',
  'Rebuild syntax highlighting CSS.' => 'Syntaxmarkering voor CSS herbouwen.',
  'Resource source defines two resources with the same name, "%s". One is defined in the "%s" map; the other in the "%s" map. Each resource must have a unique name.' => 'De bron definieert twee bronnen met dezelfde naam, "%s". De ene is gedefinieerd in de map "%s"; de andere in de map " %s ". Elke bron moet een unieke naam hebben.',
  'Resource "%s" does not have a header doc comment. Encode dependency data in a header docblock.' => 'Bron "%s" heeft geen opmerkingen in de headerdocumentatie. Codeer afhankelijkheidsgegevens in een headerdocumentblok.',
  'Package specification for "%s" includes resources of multiple types (%s, %s). Each package may only contain one type of resource.' => 'De pakketspecificatie voor "%s" omvat bronnen van meerdere typen (%s, %s). Elk pakket mag slechts één type bron bevatten.',
  'Rebuilding %d resource source(s).' => 'Herbouwen van %d bron(nen).',
  'Force regeneration even no sources have changed.' => 'Herbouwen uitvoeren ook als bronnen niet gewijzigd zijn.',
  'Optimizing...' => 'Optimaliseren...',
  'Found %d text resources.' => 'Er zijn %d tekstbronnen gevonden.',
  'Expected file \'%s\' in \'%s\' to be a sprite source ending in \'%s\'.' => 'Het bestand \'%s\' in \'%s\' wordt verwacht een spritebron te zijn die eindigt op \'%s\'.',
  'Only static resources may be served.' => 'Alleen statische bronnen mogen worden bediend.',
  'Rebuilding resource source "%s" (%s)...' => 'Bron "%s" (%s) opnieuw bouwen...',
  'Resources name "%s" is not valid; it must contain only lowercase latin letters and digits.' => 'De bronnaam "%s" is niet geldig; deze mag alleen kleine Latijnse letters en cijfers bevatten.',
  'Attempting to add more metadata after metadata has been locked.' => 'Poging om meer metagegevens toe te voegen nadat de metagegevens al vergrendeld zijn.',
  'Rebuild static resource maps.' => 'Statische bron-maps herbouwen.',
  'Found %d packages.' => '%d pakketten gevonden.',
);
  }

}
