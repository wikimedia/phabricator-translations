<?php

final class PhabricatorTypeaheadCa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ca';
  }

  protected function getTranslations() {
    return array(
      'Typeahead Results' => 'Resultats de l\'escriptura anticipada',
      'Typeahead' => 'Entrada de dades semiautomàtica',
      'This datasource ("%s") can not evaluate the function "%s(...)".' => 'Aquesta font de dades («%s») no pot avaluar la funció «%s(...)».',
      'Function Help' => 'Ajuda de la Funció',
      'In addition to typing user and project names to build queries, you can also type the names of special functions which give you more options and the ability to express more complex queries.
    Functions have an internal name (like `%s`) and a human-readable name, like `Current Viewer`. In general, you can type either one to select the function. You can also click the {nav icon=search} button on any typeahead control to browse available functions and find this documentation.
    This documentation uses the internal names to make it clear where tokens begin and end. Specifically, you will find queries written out like this in the documentation:
    %s
    When this query is actually shown in the control, it will look more like this:
    %s' => 'A més de teclejar noms d\'usuari i de projecte per crear consultes, també podeu escriure els noms de funcions especials que us donen més opcions i la capacitat d\'expressar consultes més complexes. 
    Les funcions tenen un nom intern (com `%s`) i un nom llegible per humans, com `Current Viewer`. En general, es pot escriure un per seleccionar la funció. També podeu fer clic al botó {nav icon=search} en qualsevol control d\'escriptura anticipada per explorar les funcions disponibles i trobar aquesta documentació. 
    Aquesta documentació utilitza els noms interns per deixar clar on comencen i acaben els testimonis. En concret, trobareu consultes escrites així en la documentació: 
    %s 
    Quan aquesta consulta es mostri realment en el control, es veurà més així: 
    %s',
      'All arguments to "%s(...)" must be integers, found "%s" in position %d.' => 'Tots els arguments a "%s(...)" han de ser enters, trobats "%s" en la posició %s.',
      'Invalid Parameters' => 'Paràmetres no vàlids!',
      'Source Class' => 'Classe de Font',
      'Raw Query' => 'Consulta en brut',
      'Token Results (%s)' => 'Resultats del testimoni (%s)',
      'Configured datasource class "%s" must be a valid subclass of "%s".' => 'La classe «%s» configurada ha de ser una subclasse vàlida de «%s».',
      'Token Name' => 'Nom del Testimoni',
      'Reference: Advanced Functions' => 'Referència: Funcions Avançades',
      'Image URI' => 'URL de la Imatge',
      'Select' => 'Seleccionar',
      'Typeahead functions are an advanced feature which allow you to build more powerful queries. This document explains functions available for the selected control.
    For general help with search, see the [[ %s | Search User Guide ]] in the documentation.
    Note that different controls support //different// functions (depending on what the control is doing), so these specific functions may not work everywhere. You can always check the help for a control to review which functions are available for that control.' => 'Les funcions d\'escriptura anticipada són unes funcionalitats avançades que permeten construir consultes més poderoses. Aquest document explica les funcions disponibles per al control seleccionat. 
    Per obtenir ajuda general amb la cerca, vegeu la [[ %s | Guia d\'usuari de cerca ]] a la documentació. 
    Tingueu en compte que els diferents controls suporten //diferents// funcions (depenent del que estigui fent el control), de manera que aquestes funcions específiques poden no funcionar a tot arreu. Sempre podeu comprovar l\'ajuda d\'un control per revisar quines funcions estan disponibles per a aquest control.',
      'Display Name' => 'Nom Visualitzat',
      'This table briefly describes available functions for this control. For details on a particular function, see the corresponding section below.' => 'Aquesta taula descriu breument les funcions disponibles per a aquest control. Per a més detalls sobre una funció en particular, vegeu a continuació la secció corresponent.',
      'This source is not usable directly.' => 'Aquesta font no és utilitzable directament.',
      'Unable to parse function and arguments for token "%s".' => 'No s\'ha pogut analitzar sintàcticament la funció i els arguments del testimoni «%s».',
      'Token Query' => 'Consulta de Testimonis',
      'Invalid Function: %s' => 'Funció No Vàlida: %s',
      'More Results' => 'Més Resultats',
      'Browse Objects' => 'Navega pels Objectes',
      'Typeahead Function Help' => 'Ajuda sobre la funció d\'escriptura anticipada',
      'Sprite' => 'Sprite',
      'The HTTP parameter named "parameters" for this request is not a valid JSON parameter. JSON is required. Exception: %s' => 'El paràmetre HTTP anomenat "paràmetres" per aquesta petició no és un paràmetre JSON vàlid. Es requereix JSON. Excepció: %s',
      'Function Quick Reference' => 'Funció de Referència Ràpida',
      'Constraints for input "%s".' => 'Restriccions per a l\'entrada «%s».',
      'Auto' => 'Automàtic',
      'You reach the edge of the abyss.' => 'Arribes al flanc l’abisme.',
      'Tokenization of "%s"' => 'Lexicalització de "%s"',
      'Browse Numbers' => 'Navega pels números',
      'Priority Type' => 'Tipus de Prioritat',
      'Using Typeahead Functions' => 'Ús de funcions d\'escriptura anticipada',
    );
  }

}
