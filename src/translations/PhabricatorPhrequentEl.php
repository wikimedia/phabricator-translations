<?php

final class PhabricatorPhrequentEl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'el';
  }

  protected function getTranslations() {
    return array(
      'Working Now' => 'Εργάζεται τώρα',
      'by nearest start date' => 'ανά κοντινότερη ημερομηνία αρχής',
      'You can not stop tracking time at a future time. Enter the current time, or a time in the past.' => 'Δεν μπορείτε να σταματήσετε τον χρόνο ανίχνευσης σε μελλοντικό χρόνο. Εισαγάγετε τον τρέχον χρόνο, ή ένα χρόνο στο παρελθόν.',
      'Stop Time' => 'Παύση χρόνου',
      'Stop Timer' => 'Παύση χρονορρύθμισης',
      'Ended on %s' => 'Τελείωσε στο %s',
      'Unknown ended \'%s\'!' => 'Άγνωστο ολοκληρωμένο \'%s\'!',
      'Tracked %s so far' => 'Ανιχνεύτηκαν τόσα %s ως τώρα',
      'Tracked: %s' => 'Ανιχνεύτηκαν: %s',
      'Start Time' => 'Έναρξη χρόνου',
      'Returns current objects being tracked in Phrequent.' => 'Επιστρέφει τα τρέχων αντικείμενα που ανιχνεύονται στο Phrequent.',
      'Interrupted' => 'Διακόπηκε',
      'Stop Tracking Time' => 'Σταματήστε τον χρόνο ανίχνευσης',
      'Start Tracking Time' => 'Ξεκινήστε τον χρόνο ανίχνευσης',
      'Stop Tracking' => 'Σταματήστε την ανίχνευση',
      'Time Spent' => 'Χρόνος που ξοδεύτηκε',
      'Tracked %s' => 'Ανιχνεύτηκαν: %s',
      'Phrequent Time' => 'Χρόνος Phrequent',
      'Not Tracking Time' => 'Χωρίς χρόνο ανίχνευσης',
      'All Tracked' => 'Όλα έχουν ανιχνευτεί',
      'by furthest end date' => 'ανά μακρινότερη ημερομηνία τέλους',
      'Unknown order "%s".' => 'Άγνωστη σειρά "%s"',
      'by nearest end date' => 'ανά κοντινότερη ημερομηνία τέλους',
      'Ended' => 'Έληξε',
      'by furthest start date' => 'σνά μακρινότερη ημερομηνία αρχής',
      'Stop' => 'Διακοπή',
      'Not Working Now' => 'Δεν δουλεύει τώρα',
      'Started At' => 'Ξεκίνησε την',
      'Start Tracking' => 'Ξεκινήστε ανίχνευση',
      '%s (%s ago)' => '%s (%s πριν)',
      'Start Timer' => 'Ξεκινήστε την χρονορρύθμιση',
      'What time did you start working?' => 'Ποια ώρα ξεκινήσατε να εργάζεστε;',
      'Phrequent' => 'Phrequent',
      'What time did you stop working?' => 'Ποια ώρα σταματήσατε να εργάζεστε;',
      'Track Time Spent' => 'Χρόνος ανίχνευσης που ξοδεύτηκε',
      'Please choose a valid date.' => 'Παρακαλώ επιλέξτε μια έγκυρη ημερομηνία.',
      'You are not currently tracking time on this object.' => 'Προς το παρόν δεν ανιχνεύετε χρόνο σε αυτό το αντικείμενο.',
    );
  }

}
