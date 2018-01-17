<?php

final class PhabricatorLipsumEl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'el';
  }

  protected function getTranslations() {
    return array(
      'Argument "%s" does not match the name of any generators.' => 'Το όρισμα "%s" δεν αντιστοιχεί στο όνομα κάποιου δημιουργού.',
      'A lipsum generator is registered with key "%s". This key is reserved.' => 'Ένας δημιουργός lipsum είναι εγγεγραμμένος με το κλειδί "%s". Αυτό το κλειδί είναι κατοχυρωμένο.',
      'Failed to load a random user. You may need to generate more test users first.' => 'Αποτυχία στην φόρτωση τυχαίου χρήστη. Ίσως χρειαστείτε να δημιουργήσετε περισσότερους δοκιμαστικούς χρήστες πρώτα.',
      'Generate objects without prompting for confirmation.' => 'Δημιουργήστε αντικείμενα χωρίς να προτρέπετε για επιβεβαίωση.',
      'LIPSUM' => 'LIPSUM',
      'Unable to load symbol %s: this class does not exist.' => 'Σφάλμα στην φόρτωση του συμβόλου %s: αυτή η τάξη δεν υπάρχει.',
      'Generator ("%s") was unable to generate an object.' => 'Ο δημιουργός ("%s") δεν ήταν ικανός να δημιουργήσει ένα αντικείμενο.',
      'OOPS' => 'Ουπς',
      'This command generates synthetic test data, including user accounts. It is intended for use in development environments so you can test features more easily. There is no easy way to delete this data or undo the effects of this command. If you run it in a production environment, it will pollute your data with large amounts of meaningless garbage that you can not get rid of.' => 'Αυτή η εντολή δημιουργεί συνθετικά δοκιμαστικά δεδομένα συμπεριλαμβανομένων των λογαριασμών χρηστών. Είναι προορισμένο για χρήση σε περιβάλλοντα ανάπτυξης για να μπορείτε να δοκιμάσετε χαρακτηριστικά πιο εύκολα. Δεν υπάρχει εύκολος τρόπος για να διαγράψετε αυτά τα δεδομένα ή να αναιρέσετε τα αποτελέσματα αυτής της εντολής. Αν το τρέχετε σε ένα περιβάλλον παραγωγής, θα μολύνει τα δεδομένα σας με μεγάλες ποσότητες άχρηστων σκουπιδιών που δεν θα μπορείτε να τα ξεφορτωθείτε.',
      'Generate synthetic test objects.' => 'Δημιουργήστε συνθετικά δοκιμαστικά συνθετικά αντικείμενα.',
      'class' => 'Κλάση',
      'Generating synthetic test objects forever. Use ^C to stop when satisfied.' => 'Δημιουργεί συνθετικά δοκιμαστικά αντικείμενα για πάντα. Χρησιμοποιήστε το ^C για να σταματήσει όταν ικανοποιηθείτε.',
      'Generated "%s": %s' => 'Δημιουργημένα "%s": %s',
      'Choose which type or types of test data you want to generate, or select "%s".' => 'Επιλέξτε ποιο τύπο ή τύπους δοκιμαστικών δεδομένων θέλετε να δημιουργήσετε, ή επιλέξτε "%s".',
      'Generate objects as quickly as possible.' => 'Δημιουργεί αντικείμενα όσο γίνεται πιο γρήγορα.',
      'Argument "%s" is ambiguous, and matches multiple generators: %s.' => 'Το όρισμα "%s" είναι ασαφές, και αντιστοιχεί με πολλούς δημιουργούς: %s',
      'lipsum is a development and testing tool and may only be run on installs in developer mode. Enable "%s" in your configuration to enable lipsum.' => 'Το lipsum είναι ένα αναπτυξιακό και δοκιμαστικό εργαλείο και μπορεί να εκτελεστεί μόνο σε εγκαταστάσεις σε αναπτυξιακή λειοτυργία. Ενεργοποιήστε το "%s" στον προσδιορισμό σας για να ενεργοποιήσετε το lipsum.',
      'Selected generators: %s.' => 'Επιλεγμένοι δημιουργοί: %s.',
      'GENERATORS' => 'Δημιουργεί',
      'Are you sure you want to generate piles of garbage?' => 'Είστε σίγουρος ότι θα θέλατε να δημιουργήσετε σωρό σκουπιδιών;',
    );
  }

}
