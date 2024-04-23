<?php

final class PhabricatorNotificationKn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'kn';
  }

  protected function getTranslations() {
    return array(
      'Unread' => 'ಓದದ',
      'All Notifications' => 'ಎಲ್ಲಾ ಅಧಿಸೂಚನೆಗಳು',
      'Really mark all notifications as read?' => 'ನಿಜವಾಗಿಯೂ ಎಲ್ಲಾ ಅಧಿಸೂಚನೆಗಳನ್ನು ಓದಿರುವುದಾಗಿ ನಮೂದಿಸಬೇಕೇ?',
      'Unread Notifications' => 'ಓದದ ಅಧಿಸೂಚನೆಗಳು',
      'Mark All Read' => 'ಎಲ್ಲವನ್ನೂ ಓದಿರುವುದಾಗಿ ನಮೂದಿಸಿ',
      'Show only unread notifications.' => 'ಕೇವಲ ಓದದ ಅಧಿಸೂಚನೆಗಳನ್ನು ತೋರಿಸಿ.',
      'You have no notifications.' => 'ನಿಮಗೆ ಯಾವುದೇ ಅಧಿಸೂಚನೆಗಳಿಲ್ಲ.',
    );
  }

}
