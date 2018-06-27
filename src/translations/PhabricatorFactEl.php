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
      'Total Objects' => 'Συνολικά αντικείμενα',
      'Fact (%s)' => 'Γεγονός (%s)',
      'Show a list of fact engines.' => 'Εμφάνιση λίστας μηχανών γεγονότων.',
      'Chart' => 'Γράφημα',
      'Chart and Analyze Data' => 'Γράφημα και ανάλυση δεδομένων',
      'Really destroy all facts? They will need to be rebuilt through analysis, which may take some time.' => 'Καταστροφή όλων των γεγονότων πραγματικά; Θα χρειαστούν να ξαναχτιστούν μέσω ανάλυσης, που μπορεί να πάρει λίγο χρόνο.',
      'Total Objects of type %s' => 'Συνολικά αντικείμενα του τύπου %s',
      'Objects of type %s' => 'Αντικείμενα του τύπου %s',
      'Destroy all facts.' => 'Καταστροφή όλων των γεγονότων.',
      'Facts' => 'Γεγονότα',
      'Destroying table \'%s\'...' => 'Η καταστροφή του πίνακα \'%s\' είναι σε εξέλιξη...',
      'Fact' => 'Γεγονός',
      'Show status of fact data.' => 'Εμφάνιση κατάστασης δεδομένων γεγονότος.',
      'Count of %s' => 'Μέτρηση του %s',
      'Facts Last Updated' => 'Τελευταία ενημέρωση γεγονότων',
      'No Chartable Facts' => 'Κανένα γραφηματοποιήσιμο γεγονός',
      'Plot Chart' => 'Γράφημα Plot',
    );
  }

}
