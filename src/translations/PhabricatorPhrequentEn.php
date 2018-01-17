<?php

final class PhabricatorPhrequentEn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en';
  }

  protected function getTranslations() {
    return array(
      'Working Now' => 'Working Now',
      'by nearest start date' => 'by nearest start date',
      'You can not stop tracking time at a future time. Enter the current time, or a time in the past.' => 'You can not stop tracking time at a future time. Enter the current time, or a time in the past.',
      'Stop Time' => 'Stop Time',
      'Stop Timer' => 'Stop Timer',
      'Ended on %s' => 'Ended on %s',
      'Unknown ended \'%s\'!' => 'Unknown ended \'%s\'!',
      'Tracked %s so far' => 'Tracked %s so far',
      'Tracked: %s' => 'Tracked: %s',
      'Start Time' => 'Start Time',
      'Returns current objects being tracked in Phrequent.' => 'Returns current objects being tracked in Phrequent.',
      'Interrupted' => 'Interrupted',
      'Stop Tracking Time' => 'Stop Tracking Time',
      'Start Tracking Time' => 'Start Tracking Time',
      'Stop Tracking' => 'Stop Tracking',
      'Time Spent' => 'Time Spent',
      'Tracked %s' => 'Tracked %s',
      'Phrequent Time' => 'Phrequent Time',
      'Not Tracking Time' => 'Not Tracking Time',
      'All Tracked' => 'All Tracked',
      'by furthest end date' => 'by furthest end date',
      'Unknown order "%s".' => 'Unknown order "%s".',
      'by nearest end date' => 'by nearest end date',
      'Ended' => 'Ended',
      'by furthest start date' => 'by furthest start date',
      'Stop' => 'Stop',
      'Not Working Now' => 'Not Working Now',
      'Started At' => 'Started At',
      'Start Tracking' => 'Start Tracking',
      '%s (%s ago)' => '%s (%s ago)',
      'Start Timer' => 'Start Timer',
      'What time did you start working?' => 'What time did you start working?',
      'Phrequent' => 'Phrequent',
      'What time did you stop working?' => 'What time did you stop working?',
      'Track Time Spent' => 'Track Time Spent',
      'Please choose a valid date.' => 'Please choose a valid date.',
      'You are not currently tracking time on this object.' => 'You are not currently tracking time on this object.',
      'Stop tracking time on an object by popping it from the stack.' => 'Stop tracking time on an object by popping it from the stack.',
      'Start tracking time on an object by pushing it on the tracking stack.' => 'Start tracking time on an object by pushing it on the tracking stack.',
      'Stop time must be after start time.' => 'Stop time must be after start time.',
      'Currently Tracking' => 'Currently Tracking',
      'You can not start tracking time at a future time. Enter the current time, or a time in the past.' => 'You can not start tracking time at a future time. Enter the current time, or a time in the past.',
    );
  }

}
