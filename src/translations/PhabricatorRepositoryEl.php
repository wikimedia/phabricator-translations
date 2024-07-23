<?php

final class PhabricatorRepositoryEl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'el';
  }

  protected function getTranslations() {
    return array(
      'Unknown repository type \'%s\'!' => 'Άγνωστος τύπος αποθηκευτηρίου \'%s\'!',
      'Unknown VCS \'%s\'!' => 'Άγνωστο VCS \'%s\'!',
      'branch' => 'παράρτημα',
      'Repository Ref' => 'Παραπομπή αποθηκευτηρίου',
      'Repository "%s" does not exist!' => 'Το αποθετήριο \'\'\'%s\'\'\' δεν υπάρχει!',
      'bookmark:' => 'σελιδοδείκτης:',
      'Unexpected end of file.' => 'Απροσδόκητο τέλος του αρχείου.',
      'TAGS' => 'Ετικέτες',
      'bookmark' => 'σελιδοδείκτης',
      'Active and Inactive Repositories' => 'Ενεργά και ανενεργά αποθηκευτήρια',
      'Dst' => 'Προορ',
      '%s ♻ %s' => '%s ♻ %s',
      'Rewrite' => 'Ξαναγράψιμο',
    );
  }

}
