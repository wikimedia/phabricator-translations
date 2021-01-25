<?php

final class PhabricatorHelpEn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en';
  }

  protected function getTranslations() {
    return array(
      'Close any dialog, including this one.' => 'Close any dialog, including this one.',
      'Page Shortcuts' => 'Page Shortcuts',
      '%s Help' => '%s Help',
      'Hiding Content' => 'Hiding Content',
      'Editing Inline Comments' => 'Editing Inline Comments',
      'Global Shortcuts' => 'Global Shortcuts',
      'Keyboard Shortcuts' => 'Keyboard Shortcuts',
      'Diff Navigation' => 'Diff Navigation',
    );
  }

}
