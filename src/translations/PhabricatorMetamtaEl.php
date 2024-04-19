<?php

final class PhabricatorMetamtaEl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'el';
  }

  protected function getTranslations() {
    return array(
      'File PHID: %s' => 'PHID αρχείου: %s',
      'External Recipient' => 'Εξωτερικός παραλήπτης',
      'ID: %d' => 'Αναγνωριστικό: %s',
      'Message PHID' => 'PHID μηνύματος',
      'No Subject' => 'Χωρίς Θέμα',
      'Cc' => 'Αντίγραφο προς',
      'Mail (Received)' => 'Ταχυδρομείο (ελήφθη)',
      'Mail %d' => 'Ταχυδρομείο %s',
      'No Receivers' => 'Χωρίς παραλήπτες',
      'Related PHID' => 'Σχετιζόμενο PHID',
      'No such user \'%s\' exists.' => 'Δεν υπάρχει τέτοιος χρήστης \'%s\'.',
      'Deliver as email' => 'Αποστολή ως ηλεκτρονικό ταχυδρομείο',
      'Outbox' => 'Εξερχόμενα',
      'Not Mailable' => 'Μη ταχυδρομήσιμο',
      'Default Author' => 'Προεπιλεγμένος συγγραφέας',
      'MetaMTA Mail' => 'Ταχυδρομείο MetaMTA',
      'Bad Address' => 'Κακή διεύθυνση',
      'Inbox' => 'Εισερχόμενα',
      'Author PHID: %s' => 'PHID συγγραφέα: %s',
      'Got it! Thanks, SendGrid!' => 'Το κατάλαβα! Ευχαριστώ, SendGrid!',
      'Emails' => 'Διεύθυνση ηλεκτρονικού ταχυδρομείου',
      'Duplicate Message' => 'Διπλότυπο μήνυμα',
      'Effective Rule' => 'Ισχύον κανόνας',
      'This email address is already in use.' => 'Αυτή η διεύθυνση ηλ. ταχυδρομείου είναι ήδη σε χρήση.',
      'Headers' => 'Επικεφαλίδες',
      'PARAMETERS' => 'Παράμετροι',
      'Similar Reply' => 'Παρόμοια απάντηση',
      'Empty Mail' => 'Άδειο ταχυδρομείο',
      'TEXT BODY' => 'Σώμα κειμένου',
      'Send an email to: %s.' => 'Αποστολή email στο: %s.',
      'Bot Recipient' => 'Παραλήπτης ρομπότ',
      'Unit Test (Temporary)' => 'Μονάδα δοκιμής (προσωρινή)',
      'Unnamed File' => 'Αρχείο χωρίς όνομα',
      'Status: %s' => 'Κατάσταση: %s',
      'Delete Address' => 'Διαγραφή διεύθυνσης',
      'Mail (Sent)' => 'Ταχυδρομείο (εστάλη)',
      'Address: %s' => 'Διεύθυνση: %s',
      'PROPERTIES' => 'Ιδιότητες',
      'Message: %s' => 'Μήνυμα: %s',
      'No Such Object' => 'Δεν υπάρχει τέτοιο αντικείμενο',
      'Subject' => 'Θέμα',
      'Delivery' => 'Παράδοση',
      'HEADERS' => 'Επικεφαλίδες',
      'Attach a file.' => 'Σύναψη αρχείου.',
      'Mail Disabled' => 'το ταχυδρομείο έχει απενεργοποιηθεί',
      'No Address' => 'Χωρίς διεύθυνση',
      'Sent by %s' => 'Εστάλη από το Phabricator',
      'Reasons' => 'Αιτίες',
      'Delivery Failed' => 'Η παράδοση απέτυχε',
      'Related PHID: %s' => 'Σχετιζόμενα PHID: %s',
      'Deliver as notification.' => 'Αποστολή ως ειδοποίησης.',
      'MESSAGE' => 'Μήνυμα',
      'Message Fields' => 'Πεδία μηνυμάτων',
      'Browse Subscribers' => 'Περιήγηση συνδρομητών',
    );
  }

}
