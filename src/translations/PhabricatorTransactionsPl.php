<?php

final class PhabricatorTransactionsPl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'pl';
  }

  protected function getTranslations() {
    return array(
  '%s added a comment.' => '%s dodał komentarz.',
  '%s added a comment to %s.' => '%s dodał komentarz do %s.',
  '%s mentioned this in %s.' => '%s wspomniał(a) o tym w %s.',
  '%s subscribed.' => '%s zasubskrybował.',
  'Mentioned Here' => 'Odniesiono się tutaj do',
);
  }

}
