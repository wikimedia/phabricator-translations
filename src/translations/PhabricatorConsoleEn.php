<?php

final class PhabricatorConsoleEn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en';
  }

  protected function getTranslations() {
    return array(
      'Listener Class' => 'Listener Class',
      'Profiling was not enabled for this page. Use the button above to enable it.' => 'Profiling was not enabled for this page. Use the button above to enable it.',
      'Event Type' => 'Event Type',
      'Internal ID' => 'Internal ID',
      'Error Log (%d)' => 'Error Log (%s)',
      'Debugging console for real-time notifications.' => 'Debugging console for real-time notifications.',
      'Provides detailed PHP profiling information through XHProf.' => 'Provides detailed PHP profiling information through XHProf.',
      'Analyze Query Plans' => 'Analyze Query Plans',
      'Realtime' => 'Realtime',
      'Site' => 'Site',
      '+%s ms' => '+%s ms',
      'Calls to External Services' => 'Calls to External Services',
      'Machine' => 'Machine',
      'Reconnect' => 'Reconnect',
      'Information about Phabricator events and event listeners.' => 'Information about Phabricator events and event listeners.',
      'No errors.' => 'No errors.',
      'Startup' => 'Startup',
      'Information about %s and %s.' => 'Information about %s and %s.',
      'Timing information about the startup sequence.' => 'Timing information about the startup sequence.',
      'Event Log' => 'Event Log',
      'Profile Page' => 'Profile Page',
      'Whole Table' => 'Whole Table',
      'Repaint' => 'Repaint',
      'Small Table Scan' => 'Small Table Scan',
      'Profile Permalink' => 'Profile Permalink',
      'Error Log' => 'Error Log',
      'Controller' => 'Controller',
      'TABLE SCAN!' => 'TABLE SCAN!',
      'STOPPED' => 'STOPPED',
      'Information about services.' => 'Information about services.',
      'Unknown event: %s' => 'Unknown event: %s',
      'Shows errors and warnings.' => 'Shows errors and warnings.',
      'XHProf Profiler' => 'XHProf Profiler',
      'The "xhprof" PHP extension is not available. Install xhprof to enable the XHProf console plugin. You can find instructions in the %s.' => 'The "xhprof" PHP extension is not available. Install xhprof to enable the XHProf console plugin. You can find instructions in the %s.',
      'Replay' => 'Replay',
      'Can\'t Analyze' => 'Can\'t Analyze',
      'Events' => 'Events',
      'Page Weight' => 'Page Weight',
      'Hostname' => 'Hostname',
      'Registered Event Listeners' => 'Registered Event Listeners',
      'No Tables' => 'No Tables',
    );
  }

}
