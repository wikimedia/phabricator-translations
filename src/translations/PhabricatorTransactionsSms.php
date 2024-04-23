<?php

final class PhabricatorTransactionsSms
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sms';
  }

  protected function getTranslations() {
    return array(
      'Empty Comment' => 'Kuâras kommeʹntt',
      'Warnings' => 'Vaartõõzz',
      '✘ Hidden' => '✘ Čiõkkum',
      'HTTP Parameters' => 'HTTP-paramettar',
      'EMAIL PREFERENCES' => 'E-PÅÅʹŠTASETÕÕZZ',
      'HTTP Parameters: %s' => 'HTTP-paramettar: %s',
      '(Show Details)' => '(Čuäʹjet teâđaid)',
    );
  }

}
