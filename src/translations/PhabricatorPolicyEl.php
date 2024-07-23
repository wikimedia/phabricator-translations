<?php

final class PhabricatorPolicyEl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'el';
  }

  protected function getTranslations() {
    return array(
      'Access Denied: %s' => 'Δεν επετράπη η πρόσβαση: %s',
      'Required Capabilities on Other Objects' => 'Απαιτούμενες δυνατότητες σε άλλα αντικείμενα',
      'Logged in users can take this action.' => 'Οι συνδεδεμένοι χρήστες μπορούν να κάνουν αυτή την ενέργεια.',
      'when the moon' => 'όταν η σελήνη',
      'User Policies' => 'Πολιτικές χρηστών',
      'Other: %s' => 'Άλλα: %s',
      'Can View' => 'Μπορεί να δει',
      'Only User: %s' => 'Μόνο ο χρήστης: %s',
      'Invalid action \'%s\'!' => 'Μη έγκυρη ενέργεια \'%s\'!',
      'Allow Public Visibility' => 'Να επιτρέπεται η δημόσια ορατότητα',
      'Object Policies' => 'Πολιτικές αντικειμένου',
      'Members of Project...' => 'Μέλη του εγχειρήματος...',
      'Advanced' => 'Προχωρημένο',
      'By default, no one can take this action.' => 'Από προεπιλογή, κανένας δεν μπορεί να κάνει αυτή τη ενέργεια.',
      'Deny' => 'Άρνηση',
      'Special Rules' => 'Ειδικοί κανόνες',
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
