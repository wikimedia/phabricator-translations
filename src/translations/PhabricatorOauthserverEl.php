<?php

final class PhabricatorOauthserverEl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'el';
  }

  protected function getTranslations() {
    return array(
      'Log In with %s' => 'Σύνδεση με το Phabricator',
      'Enable OAuth Application' => 'Ενεργοποίηση εφαρμογής OAuth',
      'Server Error' => 'Σφάλμα διακομιστή',
      'OAuth application "%s" has been disabled.' => 'Η εφαρμογή του OAuth "%s" έχει απενεργοποιηθεί.',
      'Authorize Application' => 'Εξουσιοδότηση εφαρμογής',
      '%s enabled this application.' => 'Ο %s ενεργοποίησε την εφαρμογή.',
      'No clients found.' => 'Δεν βρέθηκαν πελάτες',
      'OAuth Login Provider' => 'Παροχέας σύνδεσης OAuth',
      'Unknown Scope' => 'Άγνωστος σκοπός',
      'Authorization code %s not found.' => 'Ο κωδικός ταυτοποίησης %s δεν βρέθηκε.',
      'OAuth Application' => 'Εφαρμογή OAuth',
      'OAuth Access Token' => 'Κλείδι Πρόσβασης OAuth',
      'Authenticate: %s' => 'Επαλήθευση: %s',
      'Client PHID' => 'PHID πελάτη',
      'Unsupported Response Type' => 'Μη υποστηριζόμενος τύπος απάντησης',
      'User with PHID %s not found.' => 'Δεν βρέθηκε χρήστης με PHID %s.',
      'Scope' => 'Πεδίο εφαρμογής',
      'Application %d' => 'Εφαρμογή %s',
      'Enable Application' => 'Ενεργοποίηση εφαρμογής',
      'OAuth Clients' => 'Πελάτες OAuth',
      'The name of the OAuth application.' => 'Το όνομα της εφαρμογής OAuth.',
      'OAuth: %s' => 'OAuth: %s',
      'Continue to Application' => 'Συνέχεια στην εφαρμογή',
      'OAuth Applications' => 'Εφαρμογές OAuth',
      'Client with %s %s not found.' => 'Δεν βρέθηκε πελάτης με %s %s.',
      'Generate Test Token' => 'Δημιουργία δοκιμαστικού κλειδιού',
      'Authorize Application?' => 'Εξουσιοδότηση εφαρμογής;',
      'Authorize "%s"?' => 'Εξουσιοδότηση του "%s";',
      'Disable Application' => 'Απενεργοποίηση εφαρμογής',
      '%s created this OAuth application.' => 'Ο %s δημιούργησε αυτή τη εφαρμογή OAuth.',
      'Edit OAuth Applications' => 'Επεξεργασία εφαρμογών OAuth',
      'OAuth Not Available' => 'Το OAuth δεν είναι διαθέσιμο',
      'Create OAuth Server' => 'Δημιουργία διακομιστή OAuth',
      'Only %s %s is supported.' => 'Μόνο τα %s %s υποστηρίζονται.',
      'New application name.' => 'Νέο όνομα εφαρμογής.',
      'Application Disabled' => 'Η εφαρμογή είναι απενεργοποιημένη.',
      'OAuth Authorization' => 'Επαλήθευση OAuth',
      'OAuth Server' => 'Διακομιστής OAuth',
      'Alas!' => 'Άλας!',
      'Redirect URI' => 'Διεύθυνση URI ανακατεύθυνσης',
      'Edit OAuth Server: %s' => 'Επεξεργασία διακομιστή OAuth: %s',
      'The user declined to authorize this application.' => 'Ο χρήστης αρνήθηκε να επαληθεύσει την εφαρμογή.',
      'Edit Application' => 'Επεξεργασία εφαρμογής',
      'You do not have access to OAuth authorizations.' => 'Δεν έχετε πρόσβαση σε επαληθεύσεις OAuth.',
    );
  }

}
