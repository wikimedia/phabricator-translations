<?php

final class PhabricatorSearchLn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ln';
  }

  protected function getTranslations() {
    return array(
      'Global Search' => 'Boluki ya mokili mobimba',
      'Select an item type...' => 'Pona lolenge ya eloko moko...',
      '%s Search' => '%s Boluka',
      'Query is too long (%s bytes, maximum is %s bytes). Please use more specific search criteria.' => 'Query ezali molai mingi ( %s octets, maximum ezali %s octets). Svp salela ba critères ya boluki ya sikisiki mingi.',
      'Open Items' => 'Biloko ya Fungola',
      '%s Queries' => '%s Mituna',
      'Excluding Search' => 'Kolongola Bolukiluki',
      'Query has too many search tokens (%s tokens, maximum is %s tokens). Please use more specific search criteria.' => 'Query ezali na ba jetons ya recherche ebele ( %s jetons, maximum ezali %s jetons). Svp salela ba critères ya boluki ya sikisiki mingi.',
      'Browse Item Types' => 'Talá mitindo ya biloko',
      'Profile picture' => 'Elilingi ya profil',
      'Item Status' => 'Ezalela ya Eloko',
      'Global Queries' => 'Mituna ya mokili mobimba',
      'Item Types' => 'Mitindo ya Biloko',
      'System Saved Queries' => 'Ba Queries oyo ebombami na Système',
    );
  }

}
