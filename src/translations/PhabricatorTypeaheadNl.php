<?php

final class PhabricatorTypeaheadNl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'nl';
  }

  protected function getTranslations() {
    return array(
  'Typeahead Results' => 'Typeahead-resultaten',
  'Typeahead' => 'Typeahead',
  'This datasource ("%s") can not evaluate the function "%s(...)".' => 'Deze gegevensbron ("%s") kan de functie "%s(...)" niet evalueren.',
  'Function Help' => 'Functiehulp',
  'This control does not support typeahead functions.' => 'Dit besturingselement ondersteunt geen typeahead-functies.',
  'In addition to typing user and project names to build queries, you can also type the names of special functions which give you more options and the ability to express more complex queries.

Functions have an internal name (like `%s`) and a human-readable name, like `Current Viewer`. In general, you can type either one to select the function. You can also click the {nav icon=search} button on any typeahead control to browse available functions and find this documentation.

This documentation uses the internal names to make it clear where tokens begin and end. Specifically, you will find queries written out like this in the documentation:

%s

When this query is actually shown in the control, it will look more like this:

%s' => 'Naast het typen van gebruikers- en projectnamen om query\'s te maken, kunt u ook de namen van speciale functies typen. Deze functies bieden u meer opties en de mogelijkheid om complexere zoekopdrachten uit te drukken.

Functies hebben een interne naam (zoals `%s`) en een leesbare naam, zoals `Current Viewer`. Over het algemeen kunt u een van beide typen om de functie te selecteren. U kunt ook op de knop {nav icon=search} in een typeahead-besturingselement klikken om door de beschikbare functies te bladeren en deze documentatie te vinden.

Deze documentatie gebruikt de interne namen om duidelijk te maken waar tokens beginnen en eindigen. Specifiek vindt u query\'s die in de documentatie als volgt zijn uitgeschreven:

%s

Wanneer deze zoekopdracht daadwerkelijk in het besturingselement wordt weergegeven, ziet deze er meer zo uit:

%s',
  'Invalid Parameters' => 'Incorrecte parameters',
  'Source Class' => 'Bronklasse',
  'Raw Query' => 'Ruwe query',
  'Token Results (%s)' => 'Tokenresultaten (%s)',
  'Configured datasource class "%s" must be a valid subclass of "%s".' => 'De geconfigureerde gegevensbronklasse "%s" moet een geldige subklasse zijn van "%s".',
  'Parameters (JSON)' => 'Parameters (JSON)',
  'Reference: Advanced Functions' => 'Referentie: Geavanceerde functies',
  'Image URI' => 'Afbeeldings-URI',
  'Select' => 'Selecteren',
  'Typeahead functions are an advanced feature which allow you to build more powerful queries. This document explains functions available for the selected control.

For general help with search, see the [[ %s | Search User Guide ]] in the documentation.

Note that different controls support //different// functions (depending on what the control is doing), so these specific functions may not work everywhere. You can always check the help for a control to review which functions are available for that control.' => 'Typeahead-functies zijn een geavanceerde functie waarmee u krachtigere zoekopdrachten kunt samenstellen. Dit document beschrijft de functies die beschikbaar zijn voor het geselecteerde besturingselement.

Zie voor algemene hulp bij het zoeken de [[ %s | Gebruikershandleiding Zoeken ]] in de documentatie.

Houd er rekening mee dat verschillende besturingselementen //verschillende// functies ondersteunen (afhankelijk van wat het besturingselement doet), dus deze specifieke functies werken mogelijk niet overal. U kunt altijd de helpfunctie van een besturingselement raadplegen om te zien welke functies voor dat besturingselement beschikbaar zijn.',
  'Display Name' => 'Weergavenaam',
  'This table briefly describes available functions for this control. For details on a particular function, see the corresponding section below.' => 'Deze tabel geeft een kort overzicht van de beschikbare functies voor deze besturing. Voor meer informatie over een specifieke functie, zie het betreffende gedeelte hieronder.',
  'This source is not usable directly.' => 'Deze bron is niet direct bruikbaar.',
  'Unable to parse function and arguments for token "%s".' => 'Kan de functie en argumenten voor token "%s" niet verwerken.',
  'Token Query' => 'Tokenzoekopdracht',
  'Invalid Function: %s' => 'Ongeldige functie: %s',
  'More Results' => 'Meer resultaten',
  'Browse Objects' => 'Objecten bekijken',
  'Typeahead Function Help' => 'Hulp bij de typeahead-functie',
  'Sprite' => 'Sprite',
  'The HTTP parameter named "parameters" for this request is not a valid JSON parameter. JSON is required. Exception: %s' => 'De HTTP-parameter met de naam "parameters" voor dit verzoek is geen geldige JSON-parameter. JSON is vereist. Uitzondering: %s',
  'Function Quick Reference' => 'Snel naslagwerk over functies',
  'Auto' => 'Auto',
  'You reach the edge of the abyss.' => 'U staat aan de rand van de afgrond.',
  'This datasource ("%s") requires to be logged-in to use the function "%s(...)".' => 'Voor deze gegevensbron ("%s") is een aanmelden vereist om de functie " %s(...)" te kunnen gebruiken.',
  'Priority Type' => 'Prioriteitstype',
  'Using Typeahead Functions' => 'Gebruikmaken van typeahead-functies',
);
  }

}
