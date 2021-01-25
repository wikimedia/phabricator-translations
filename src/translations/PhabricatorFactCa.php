<?php

final class PhabricatorFactCa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ca';
  }

  protected function getTranslations() {
    return array(
      'Analyze from the beginning, ignoring cursors.' => 'Analitza des del principi, ignorant els cursors.',
      'Iterator \'%s\' does not exist.' => 'L\'iterador «%s» no existeix.',
      'Manually invoke fact analyzers.' => 'Invoqueu manualment els analitzadors de fets.',
      'No fact engines support generating facts for this object.' => 'No hi ha motors de fets per a generar fets per a aquest objecte.',
      'Executing a fact query requires facts.' => 'Executar una consulta de fets requereix fets.',
      'Process only iterator __name__.' => 'Processa només l\'iterador  __name__.',
      'Cursor %s does not exist or is already reset.' => 'El cursor %s no existeix o ja s\'ha reiniciat.',
      'No cursors.' => 'Cap cursor.',
      'Fact Extraction Report' => 'Informe d’Extracció de Fets',
      'Dimension' => 'Dimensió',
      'Processing %s...' => 'S’està processant %s...',
      'No Stored Datapoints' => 'Sense Punts de Dades Emmagatzemats',
      '%sms' => '%s ms',
      'Processing cursor \'%s\'.' => 'Processament del cursor \'%s\'.',
      'Show a list of fact engines.' => 'Mostra una llista de motors de fets.',
      'Chart and Analyze Data' => 'Rastrejar i Analitzar Dades',
      'Really destroy all facts? They will need to be rebuilt through analysis, which may take some time.' => 'Vols realment destruir tots els fets?  Hauran de reconstruir-se a través de l\'anàlisi, la qual cosa pot portar algun temps.',
      '%s (Transactions)' => '%s (Transaccions)',
      'Show a list of fact iterators and cursors.' => 'Mostra una llista d\'iteradors de fet i cursors.',
      'Failed to load or generate dimension ID ("%s") for dimension key "%s".' => 'No s\'ha pogut carregar ni generar l\'identificador de dimensió ("%s") per a la clau de dimensió "%s".',
      'Destroy all facts.' => 'Destruir tots els fets.',
      'Facts' => 'Fets',
      'Resetting cursor %s...' => 'Restablint el cursor %s...',
      'Not Stored' => 'No Emmagatzemat',
      'Reset cursor __cursor__.' => 'Restableix el cursor __cursor__.',
      'Skip analysis of aggregate facts.' => 'Omet l\'anàlisi dels fets agregats.',
      'No Engines' => 'Cap Motor',
      'Destroying table \'%s\'...' => 'Destruint la taula \'%s\'...',
      'Fact' => 'Fets',
      'Unknown fact ("%s") for engine "%s".' => 'Fet  ("%s") desconegut per al motor "%s".',
      'Fact "%s"' => 'Fet "%s"',
      'Consistent Fact' => 'Fet Compatible',
      'Not Generated' => 'No Generat',
    );
  }

}
