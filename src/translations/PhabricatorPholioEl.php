<?php

final class PhabricatorPholioEl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'el';
  }

  protected function getTranslations() {
    return array(
      '%s replaced %s with %s.' => 'Ο %s αντικατέστησε το %s με το %s.',
      'Edit Mock: %s' => 'Επεξεργασία προσομοίωσης: %s',
      '%s added %d image(s): %s.' => 'Ο %s πρόσθεσε %s εικόνα(-ες): %s.',
      'Close Mock' => 'Κλείσιμο προσομοίωσης',
      '%s closed mock %s.' => 'Ο %s έκλεισε τη προσομοίωση %s.',
      'No image attached!' => 'Δεν επισυνάφθηκε εικόνα!',
      'Subject prefix for Pholio email.' => 'Πρόθεμα υποκείμενου για το ηλ. ταχυδρομείο του Pholio.',
      '%s removed %s task(s) for %s: %s.' => 'Ο %s αφαίρεσε %s εργασία(-ες) για το %s: %s.',
      '%s removed %d image(s): %s.' => 'Ο %s αφαίρεσε %s εικόνα(-ες): %s.',
      'Undo' => 'Αναίρεση',
      'Pholio' => 'Pholio',
      '%s updated image descriptions of %s.' => 'Ο %s ενημέρωσε τις περιγραφές εικόνας για το %s.',
      'Configure Pholio.' => 'Ρύθμιση του Pholio.',
      'Uploading Image...' => 'Φόρτωση εικόνας...',
      'Upload Complete...' => 'Το ανέβασμα ολοκληρώθηκε...',
      'Current Revision' => 'Τρέχουσα αναθεώρηση',
      'Image %d: %s' => 'Εικόνα %s: %s',
      '%s edited task(s), added %s: %s; removed %s: %s.' => 'Ο %s επεξεργάστηκε τις εργασία(-ες), πρόσθεσε τις: %s, %s, αφαίρεσε τις: %s, %s.',
      '%s updated an image\'s (%s) description.' => 'Ο %s ενημέρωσε την περιγραφή μιας εικόνας (%s).',
      '%s renamed an image (%s) from %s to %s.' => 'Ο %s μετονόμασε μια εικόνα (%s) από %s σε %s.',
      'By %s on %s' => 'Από τον %s στις %s',
      'Save Draft' => 'Αποθήκευση προχείρου',
      'Inline Comment' => 'Εσωτερικό σχόλιο',
      '%s updated the image names of %s.' => 'Ο %s ενημέρωσε τα ονόματα εικόνας του %s.',
      '%s edited image(s), added %d: %s; removed %d: %s.' => 'Ο %s επεξεργάστηκε τις εικόνα(-ες), πρόσθεσε τις: %s, %s, αφαίρεσε τις: %s, %s.',
      'Design Review' => 'Θεώρηση Σχεδιασμού',
    );
  }

}
