<?php

final class PhabricatorFundHe
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'he';
  }

  protected function getTranslations() {
    return array(
      'Initiative long description.' => 'תיאור ארוך של היוזמה.',
      '%s closed this initiative.' => '%s סגר את היוזמה הזאת.',
      'Find Backers' => 'מציאת תומכים',
      '%s created this initiative.' => '%s יצר את היוזמה הזאת.',
      'Create Initiative' => 'יצירת יוזמה',
      'Initiatives must have a name.' => 'יוזמות חייבות להיות עם שם.',
      'All Initiatives' => 'כל היוזמות',
      'Edit Initiative: %s' => 'עריכת יוזמה: %s',
      'Reopen Initiative' => 'פתיחה מחדש של יוזמה',
      'Fund' => 'מימון',
      'New initiative description.' => 'תיאור חדש ליוזמה.',
      'Backers' => 'תומכים',
      'Unable to load %s!' => 'לא ניתן לטעון את %s!',
      '%s backed %s with %s.' => '%s תמך ביוזמה %s עם %s.',
      'Backer' => 'תומך',
      'Return to Initiative' => 'חזרה ליוזמה',
      'Someone backs an initiative.' => 'מישהו תומך ביוזמה.',
    );
  }

}
