<?php

final class PhabricatorHelpEl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'el';
  }

  protected function getTranslations() {
    return array(
      'Close any dialog, including this one.' => 'Κλείστε οποιονδήποτε διάλογο, συμπεριλαμβανομένου αυτού.',
      'Unsupported Editor Protocol' => 'Μη υποστηριγμένο πρωτόκολλο συντάκτη.',
      'Change Settings' => 'Αλλαγή ρυθμίσεων.',
      'Your configured editor URI uses an unsupported protocol. Change your settings to use a supported protocol, or ask your administrator to add support for the chosen protocol by configuring: %s' => 'Ο ορισμένος σας συντάκτης URI χρησιμοποιεί ένα μη υποστηριγμένο πρωτόκολλο. Αλλάξτε τις ρυθμίσεις σας για να χρησιμοποιήσετε ένα υποστηριγμένο πρωτόκολλο, η ζητήστε από τον διαχειριστή σας να προσθέσει υποστήριξξη για το επιλεγμένο πρωτόκολλο ορίζοντας το: %s',
      '%s Help' => '%s Βοήθεια',
      'Keyboard Shortcuts' => 'Συντομεύσεις Πληκτρολογίου',
    );
  }

}
