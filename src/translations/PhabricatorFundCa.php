<?php

final class PhabricatorFundCa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ca';
  }

  protected function getTranslations() {
    return array(
      'Initiative long description.' => 'Descripció llarga de la iniciativa.',
      'Initiative risks and challenges.' => 'Riscos i reptes de la iniciativa.',
      '%s closed this initiative.' => '%s ha tancat aquesta iniciativa.',
      'Find Backers' => 'Cerca patrocinadors',
      '%s created this initiative.' => '%s ha creat aquesta iniciativa.',
      'Create Initiative' => 'Crea una iniciativa',
      'Initiatives must have a name.' => 'Les iniciatives han de tenir un nom.',
      '%s updated the initiative risks/challenges for %s.' => '%s ha actualitzat els riscos/reptes de la iniciativa per %s.',
      'Close Initiative' => 'Tanca la iniciativa',
      'Other initiative activity not listed above occurs.' => 'Es produeix una altra activitat d\'iniciativa que no s\'enumera més amunt.',
      'All Initiatives' => 'Totes les iniciatives',
      'You can not back a closed initiative.' => 'No pots donar suport a una iniciativa tancada.',
      'Edit Initiative: %s' => 'Edita la iniciativa: %s',
      'New initiative merchant.' => 'Nou venedor d\'iniciatives.',
      'Reopen Initiative' => 'Reobre la iniciativa',
      'Payable to Merchant' => 'Pagable al venedor',
      'Initiative name.' => 'Nom de la iniciativa.',
      'Fund Initiatives' => 'Finançar les iniciatives',
      'Fund Backers' => 'Patrocinadors financers',
      'Fund <Unknown Initiative>' => 'Finançar <Unknown Initiative>',
      'You do not have permission to create Fund initiatives.' => 'No teniu permís per crear iniciatives de finançament.',
      '%s set the merchant receiving funds from this initiative to %s.' => '%s ha establert el venedor que rebia fons d\'aquesta iniciativa en %s.',
      '%s changed the merchant receiving funds from %s from %s to %s.' => '%s ha canviat el venedor que rebia fons de %s de %s a %s.',
      'Total Funding' => 'Finançament total',
      'Initiatives must have a payable merchant.' => 'Les iniciatives han de tenir un venedor a qui pagar.',
      'Fund %s %s' => 'Finançament %s %s',
      '%s changed the merchant receiving funds from this initiative from %s to %s.' => '%s ha canviat el venedor que rebia fons d\'aquesta iniciativa de %s a %s.',
      'Configure creation and editing forms in Fund.' => 'Configureu formularis de creació i modificació de patrocinis.',
      'NOTE: You do not control any merchant accounts which can receive payments from this initiative. When you create an initiative, you need to specify a merchant account where funds will be paid to. Create a merchant account in the Phortune application before creating an initiative in Fund.' => 'NOTA: no controleu cap compte mercantil que pugui rebre pagaments d\'aquesta iniciativa. Quan creeu una iniciativa, heu d\'especificar un compte mercantil on es pagaran els fons. Creeu un compte mercantil a l\'aplicació Phortune abans de crear una iniciativa de patrocini.',
      'Merchant operating the initiative.' => 'Venedor que porta la iniciativa.',
      '%s renamed this initiative from %s to %s.' => '%s ha reanomenat aquesta iniciativa de "%s" a "%s".',
      'Merchant %d %s' => 'Venedor %s %s',
      '(Restricted Merchant)' => '(Venedor restringit)',
      'You must specify a merchant account you control as the recipient of funds from this initiative.' => 'Heu d\'especificar un compte mercantil que controleu com a destinatari dels fons d\'aquesta iniciativa.',
      'Configure Fund Forms' => 'Configureu els formularis de financiació',
    );
  }

}
