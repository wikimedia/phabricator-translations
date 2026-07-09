<?php

final class PhabricatorDivinerNl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'nl';
  }

  protected function getTranslations() {
    return array(
  'Article has no %s!' => 'Artikel heeft geen %s!',
  'This trait is not documented.' => 'Dit kenmerk is niet gedocumenteerd.',
  'Writing graph cache.' => 'Grafiekcache schrijven.',
  'Edit Basics' => 'Basisgegevens bewerken',
  'This interface is not documented.' => 'Deze interface is niet gedocumenteerd.',
  'Type a book name...' => 'Voer een boeknaam in...',
  'Documentation uses `%s`, but should use `%s`.' => 'Documentatie gebruikt `%s`, maar zou `%s` moeten gebruiken.',
  'Atom "%s" is preceded by a comment containing `%s`, but the comment is not a documentation comment. Documentation comments must begin with `%s`, followed by a newline. Did you mean to use a documentation comment? (As the comment is not a documentation comment, it will be ignored.)' => 'Atom "%s" wordt voorafgegaan door een opmerking met `%s`, maar de opmerking is geen documentatieopmerking. Documentatieopmerkingen moeten beginnen met `%s`, gevolgd door een nieuwe regel. Bedoelde u een documentatieopmerking te gebruiken? (Omdat de opmerking geen documentatieopmerking is, wordt deze genegeerd.)',
  'No such atom \'%s\'!' => 'Atom \'%s\' bestaat niet!',
  'Diviner Atom' => 'Diviner-atom',
  'This enum is not documented.' => 'Deze enum is niet gedocumenteerd.',
  'Found %s book(s).' => array(
    '%s boek gevonden.',
    '%s boeken gevonden.',
  ),
  'Propagating changes through the graph.' => 'Wijzigingen door de grafiek propageren.',
  'Atoms inherit the policies of the books they are part of.' => 'Atoms erven het beleid van de boeken waar ze deel van uitmaken.',
  'Symbol \'%s\' is not a method!' => 'Symbool \'%s\' is geen methode!',
  'Search Results for %s' => 'Zoekresultaten voor %s',
  'Deleting %s document(s).' => array(
    '%s document verwijderen.',
    '%s documenten verwijderen.',
  ),
  'Enum' => 'Enum',
  'Rule \'%s\' is not a valid regular expression.' => 'Regel \'%s\' is geen geldige reguliere expressie.',
  '(NOTE) **Looking for documentation?** If you\'re looking for help and information about %s, you can [[https://we.phorge.it/diviner/ | browse the public %s documentation]] on the live site.

Diviner is the documentation generator used to build this documentation.

You haven\'t generated any Diviner documentation books yet, so there\'s nothing to show here. If you\'d like to generate your own local copy of the documentation and have it appear here, run this command:

  %s

' => '(OPMERKING) **Op zoek naar documentatie?** Als u hulp en informatie zoekt over %s, kunt u [[https://we.phorge.it/diviner/ | de openbare %s-documentatie bekijken]] op de live site.

Diviner is de documentatiegenerator die wordt gebruikt om deze documentatie te bouwen.

U hebt nog geen Diviner-documentatieboeken aangemaakt, dus er is hier niets weer te geven. Als u uw eigen lokale kopie van de documentatie wilt genereren en hier wilt weergeven, voer dan dit commando uit:

  %s',
  'Return' => 'Terug',
  'Found %s file(s) in project.' => array(
    '%s bestand gevonden in project.',
    '%s bestanden gevonden in project.',
  ),
  'Diviner Search' => 'Diviner-zoekopdracht',
  'PUBLISHING DOCUMENTATION' => 'DOCUMENTATIE PUBLICEREN',
  'All Atoms' => 'Alle atoms',
  'Book configuration \'%s\' has name \'%s\', but book names must include only lowercase letters and hyphens.' => 'Boekconfiguratie \'%s\' heeft de naam \'%s\', maar boeknamen mogen alleen kleine letters en koppeltekens bevatten.',
  'Read More Documentation' => 'Meer documentatie lezen',
  'Specify a Diviner book configuration file with %s.' => 'Geef een Diviner-boekconfiguratie op met %s.',
  'Creating %s document(s).' => array(
    '%s document aanmaken.',
    '%s documenten aanmaken.',
  ),
  'Diviner' => 'Diviner',
  'Specify a subclass of %s.' => 'Geef een subklasse van %s op.',
  'Atom names must not be in the form \'%s\'. This pattern is reserved for disambiguating atoms with similar names.' => 'Atomnamen mogen niet de vorm \'%s\' hebben. Dit patroon is gereserveerd voor het onderscheiden van atoms met vergelijkbare namen.',
  'Article' => 'Artikel',
  'Skipping %s...' => '%s overslaan...',
  'This article is not documented.' => 'Dit artikel is niet gedocumenteerd.',
  'Books' => 'Boeken',
  'This atom no longer exists.' => 'Dit atom bestaat niet meer.',
  'No books found.' => 'Geen boeken gevonden.',
  'This call takes %s parameter(s), but only %s are documented.' => array(
    
    array(
      'Deze aanroep heeft %s parameter, maar slechts %1$s parameter is gedocumenteerd.',
      'Deze aanroep heeft %s parameter, maar slechts %s parameters zijn gedocumenteerd.',
    ),
    
    array(
      'Deze aanroep heeft %s parameters, maar slechts %1$s parameter is gedocumenteerd.',
      'Deze aanroep heeft %s parameters, maar slechts %s parameters zijn gedocumenteerd.',
    ),
  ),
  'Writing atom cache.' => 'Atomcache schrijven.',
  'Inherited' => 'Overgeërfd',
  'Documentation Warnings' => 'Documentatiewaarschuwingen',
  'Diviner Books' => 'Diviner-boeken',
  'Generating book "%s"...' => 'Boek "%s" genereren...',
  'No methods for this task.' => 'Geen methoden voor deze taak.',
  'Repository that the documentation belongs to.' => 'Repository waartoe de documentatie behoort.',
  'Atom already has a parent!' => 'Atom heeft al een bovenliggend element!',
  'Produce ugly (but faster) output.' => 'Lelijke (maar snellere) uitvoer produceren.',
  'This file is not documented.' => 'Dit bestand is niet gedocumenteerd.',
  'Found %s affected atoms.' => array(
    '%s beïnvloede atom gevonden.',
    '%s beïnvloede atoms gevonden.',
  ),
  'Unexpected property "%s" in Javelin class definition!' => 'Onverwachte eigenschap "%s" in de Javelin-klassedefinitie!',
  'Diviner Book' => 'Diviner-boek',
  'Found %s new atom(s) in graph.' => array(
    '%s nieuwe atom gevonden in grafiek.',
    '%s nieuwe atoms gevonden in grafiek.',
  ),
  'There are no Diviner \'%s\' files anywhere beneath the current directory. Use \'%s\' to specify a documentation book to generate.' => 'Er zijn geen Diviner \'%s\'-bestanden in de huidige map of submappen. Gebruik \'%s\' om een documentatieboek op te geven om te genereren.',
  'Edit Book' => 'Boek bewerken',
  'Child hashes have already been computed!' => 'Onderliggende hashes zijn al berekend!',
  'Defined' => 'Gedefinieerd',
  'Clear the caches before generating documentation.' => 'De caches wissen voordat documentatie wordt gegenereerd.',
  'Implements' => 'Implementeert',
  'Parent hash has already been computed!' => 'Bovenliggende hash is al berekend!',
  'Free Radicals' => 'Vrije radicalen',
  'Generate documentation.' => 'Documentatie genereren.',
  'Expected exactly one atom from file atomizer.' => 'Precies één atom verwacht van bestandsatomizer.',
  'Untitled Article "%s"' => 'Naamloos artikel "%s"',
  'Publisher class \'%s\' must be a concrete subclass of %s.' => 'Uitgeversklasse \'%s\' moet een concrete subklasse van %s zijn.',
  'Need translation for \'%s\'.' => 'Vertaling nodig voor \'%s\'.',
  'Documentation Not Found' => 'Documentatie niet gevonden',
  'Path to a Diviner book configuration.' => 'Pad naar een Diviner-boekconfiguratie.',
  'This class is not documented.' => 'Deze klasse is niet gedocumenteerd.',
  'This method is not documented.' => 'Deze methode is niet gedocumenteerd.',
  'Documentation Atoms' => 'Documentatie-atoms',
  'Parameter "%s" is named "%s" in the documentation. The documentation may be out of date.' => 'Parameter "%s" heet "%s" in de documentatie. De documentatie is mogelijk verouderd.',
  'Atomizer class \'%s\' must be a concrete subclass of %s.' => 'Atomizerklasse \'%s\' moet een concrete subklasse van %s zijn.',
  'BUILDING ATOM CACHE' => 'ATOMCACHE OPBOUWEN',
  'Specify an atomizer class with %s.' => 'Geef een atomizerklasse op met %s.',
  'BUILDING GRAPH CACHE' => 'GRAFIEKCACHE OPBOUWEN',
  'Trait' => 'Kenmerk',
  'Unable to find the specified documentation. You may have followed a bad or outdated link.' => 'De opgegeven documentatie kan niet worden gevonden. Mogelijk hebt u een foutieve of verouderde koppeling gevolgd.',
  'Extends' => 'Breidt uit',
  'Expected "%s" node but found "%s" (on line %d:%d).' => 'Knooppunt "%s" werd verwacht, maar "%s" is aangetroffen (op regel %d:%d).',
  'Found %s obsolete atom(s) in graph.' => array(
    '%s verouderde atom gevonden in grafiek.',
    '%s verouderde atoms gevonden in grafiek.',
  ),
  'No such atom with node hash \'%s\'!' => 'Geen atom met knoophash \'%s\'!',
  'Atomization complete.' => 'Atomisering voltooid.',
  'Documentation specifies `%s` multiple times.' => 'Documentatie specificeert `%s` meerdere keren.',
  'CLEARING CACHES' => 'CACHES WISSEN',
  'Diviner User Guide' => 'Diviner-gebruikershandleiding',
  'Edit Book: %s' => 'Boek bewerken: %s',
  'Found %s file(s) to atomize.' => array(
    '%s bestand gevonden om te atomiseren.',
    '%s bestanden gevonden om te atomiseren.',
  ),
  'Found %s unatomized, uncached file(s).' => array(
    '%s niet-geatomiseerd, niet-gecachet bestand gevonden.',
    '%s niet-geatomiseerde, niet-gecachete bestanden gevonden.',
  ),
  'Method `%s` has explicitly documented `%s`. The `%s` method always returns `%s`. Diviner documents this implicitly.' => 'Methode `%s` heeft expliciet `%s` gedocumenteerd. De methode `%s` retourneert altijd `%s`. Diviner documenteert dit impliciet.',
  'Build atoms from source.' => 'Atoms bouwen vanuit broncode.',
  'This function is not documented.' => 'Deze functie is niet gedocumenteerd.',
  'Find' => 'Zoeken',
  'Other Methods' => 'Overige methoden',
  'Expected to find atom while disambiguating!' => 'Verwachtte een atom te vinden tijdens het onderscheiden!',
  'This %s is not documented.' => 'Dit %s is niet gedocumenteerd.',
  'Documentation Books' => 'Documentatieboeken',
  'Atom cache is up to date, no files to atomize.' => 'Atomcache is actueel, geen bestanden om te atomiseren.',
  'Repository "%s" does not exist.' => 'Repository "%s" bestaat niet.',
  'Book' => 'Boek',
  'Specify one or more files to atomize.' => 'Geef een of meer bestanden op om te atomiseren.',
  'Atomizing %s...' => '%s atomiseren...',
  'Completed generation of "%s".' => 'Genereren van "%s" voltooid.',
  'Atomizing %s file(s).' => array(
    '%s bestand atomiseren.',
    '%s bestanden atomiseren.',
  ),
  'Atom has no symbol map entry!' => 'Atom heeft geen vermelding in de symboolkaart!',
  'Browse Books' => 'Boeken bekijken',
  'FINDING DOCUMENTATION BOOKS' => 'DOCUMENTATIEBOEKEN ZOEKEN',
);
  }

}
