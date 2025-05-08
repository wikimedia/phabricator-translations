<?php

final class PhabricatorMetamtaPa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'pa';
  }

  protected function getTranslations() {
    return array(
      'Got it! Thanks, SendGrid!' => 'ਮਿਲ ਗਿਆ! ਧੰਨਵਾਦ, SendGrid!',
      'All Matching Rules' => 'ਸਾਰੇ ਮੇਲ ਖਾਂਦੇ ਅਸੂਲ',
      'Got it! Thanks, Postmark!
    ' => 'ਮਿਲ ਗਿਆ! ਧੰਨਵਾਦ, ਪੋਸਟਮਾਰਕ!',
      'Got it! Thanks, Mailgun!
    ' => 'ਮਿਲ ਗਿਆ! ਧੰਨਵਾਦ, ਮੇਲਗਨ!',
    );
  }

}
