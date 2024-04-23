<?php

final class PhabricatorPolicyEl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'el';
  }

  protected function getTranslations() {
    return array(
      'Access Denied: %s' => 'Δεν επετράπη η πρόσβαση: %s',
      'No One Policy' => 'Πολιτική όχι ενός',
      '%s with user %s should fail.' => 'Ο %s με χρήστη %s θα έπρεπε να αποτύχει.',
      'Required Capabilities on Other Objects' => 'Απαιτούμενες δυνατότητες σε άλλα αντικείμενα',
      'Logged in users can take this action.' => 'Οι συνδεδεμένοι χρήστες μπορούν να κάνουν αυτή την ενέργεια.',
      'when the moon' => 'όταν η σελήνη',
      'User Policies' => 'Πολιτικές χρηστών',
      'No Extended Policy' => 'Χωρίς εκτεταμένη πολιτική',
      'Other: %s' => 'Άλλα: %s',
      'Can View' => 'Μπορεί να δει',
      'Only User: %s' => 'Μόνο ο χρήστης: %s',
      'Invalid action \'%s\'!' => 'Μη έγκυρη ενέργεια \'%s\'!',
      'Admin Policy' => 'Πολιτική διαχειριστών',
      'Allow Public Visibility' => 'Να επιτρέπεται η δημόσια ορατότητα',
      'Object Policies' => 'Πολιτικές αντικειμένου',
      'Members of Project...' => 'Μέλη του εγχειρήματος...',
      'Advanced' => 'Προχωρημένο',
      'By default, no one can take this action.' => 'Από προεπιλογή, κανένας δεν μπορεί να κάνει αυτή τη ενέργεια.',
      'Deny' => 'Άρνηση',
      'Special Rules' => 'Ειδικοί κανόνες',
      'With Extended Policy + Edit' => 'Με εκτεταμένη πολιτική + επεξεργασία',
      'Other Policies' => 'Άλλες πολιτικές',
      'Object Policy' => 'Πολιτική αντικειμένου',
      'Can Interact' => 'Μπορεί να διαδραστεί',
      'Space:' => 'Χώρος:',
      'Members Of' => 'Μέλη του',
      'Select Project' => 'Επιλογή Εφαρμογής',
      'OBJECT' => 'Αντικείμενο',
      'Note:' => 'Σημείωση:',
      'Can Edit' => 'Μπορεί να επεξεργαστεί',
    );
  }

}
