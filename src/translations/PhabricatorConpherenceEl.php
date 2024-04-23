<?php

final class PhabricatorConpherenceEl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'el';
  }

  protected function getTranslations() {
    return array(
      '%s edited participant(s), added %d: %s; removed %d: %s.' => 'Ο %s επεξεργάστηκε τους συμμετέχοντας(-ες), πρόσθεσε τους: %s, %s, αφαίρεσε τους: %s, %s.',
      'Show Newer Messages' => 'Εμφάνιση νεότερων μηνυμάτων',
      'Room name.' => 'Όνομα δωματίου',
      'Leave Room' => 'Αποχώρηση από το δωμάτιο',
      'Initial Participants' => 'Αρχικοί συμμετέχοντες',
      'You must choose a file when uploading a new room picture.' => 'Πρέπει να επιλέξετε αρχείο όταν ανεβάζετε μια νέα εικόνα δωματίου.',
      '%s set the room topic to %s.' => 'Ο %s όρισε το θέμα του δωματίου σε %s.',
      'All Rooms' => 'Όλα τα δωμάτια',
      'Room Picture' => 'Εικόνα δωματίου',
      'You must specify participant phids.' => 'Πρέπει να προσδιορίσετε τα συμμετέχοντα phid.',
      'Edit Room: %s' => 'Επεξεργασία δωματίου: %s',
      'Remove %s from this room?' => 'Αφαίρεση του %s από αυτό το δωμάτιο;',
      'New Message' => 'Νέο μήνυμα',
      '%s renamed this room from %s to %s.' => 'Ο %s μετονόμασε το δωμάτιο από %s σε %s.',
    );
  }

}
