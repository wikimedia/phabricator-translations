<?php

final class PhabricatorCalendarHe
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'he';
  }

  protected function getTranslations() {
    return array(
      'No events found.' => 'לא נמצאו אירועים.',
      'Calendar Import' => 'יבוא יומן',
      'ICS File' => 'קובץ ICS',
      'Query to execute.' => 'שאילתה לביצוע.',
      'End date and time of the event.' => 'תאריך ושעת סיום של האירוע.',
      'Edit This And All Later Events' => 'לערוך את האירוע הזה ואת כל האירועים הבאים',
    );
  }

}
