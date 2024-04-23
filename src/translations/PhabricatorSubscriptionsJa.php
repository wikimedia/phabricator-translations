<?php

final class PhabricatorSubscriptionsJa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ja';
  }

  protected function getTranslations() {
    return array(
      'subscribers' => '購読者',
      'Remove subscribers.' => '購読者を除去。',
      'Add subscribers' => '購読者を追加',
      'Remove subscribers' => '購読者を除去',
      'Added Subscribers' => '追加された購読者',
      'Removed Subscribers' => '除去された購読者',
    );
  }

}
