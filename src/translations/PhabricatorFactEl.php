<?php

final class PhabricatorFactEl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'el';
  }

  protected function getTranslations() {
    return array(
      'Y-Axis' => 'Ψ-άξονας',
      'Processing %s...' => 'Γίνεται επεξεργασία του %s...',
      'Zzz...' => 'Zzz...',
      'Show a list of fact engines.' => 'Εμφάνιση λίστας μηχανών γεγονότων.',
      'Chart' => 'Γράφημα',
      'Chart and Analyze Data' => 'Γράφημα και ανάλυση δεδομένων',
      'Really destroy all facts? They will need to be rebuilt through analysis, which may take some time.' => 'Καταστροφή όλων των γεγονότων πραγματικά; Θα χρειαστούν να ξαναχτιστούν μέσω ανάλυσης, που μπορεί να πάρει λίγο χρόνο.',
      'Destroy all facts.' => 'Καταστροφή όλων των γεγονότων.',
      'Facts' => 'Γεγονότα',
      'Destroying table \'%s\'...' => 'Η καταστροφή του πίνακα \'%s\' είναι σε εξέλιξη...',
      'Fact' => 'Γεγονός',
      'Count of %s' => 'Μέτρηση του %s',
      'Plot Chart' => 'Γράφημα Plot',
    );
  }

}
