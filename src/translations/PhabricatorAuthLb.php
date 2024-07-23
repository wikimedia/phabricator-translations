<?php

final class PhabricatorAuthLb
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'lb';
  }

  protected function getTranslations() {
    return array(
      'Passwords' => 'Passwierder',
      'Too Short' => 'Ze kuerz',
      'Wrong Account' => 'Falsche Kont',
      'Yes (Optional)' => 'Jo (fakultativ)',
      'Log In (%s)' => 'Aloggen (%s)',
      'Server Name' => 'Servernumm',
      'Customize Messages' => 'Message personaliséieren',
      'Username or Email' => 'Benotzernumm oder E-Mail',
      'Email Sent' => 'E-Mail geschéckt',
      'Very Weak' => 'Ganz schwaach',
      'Log In' => 'Aloggen',
      'Anonymous Username' => 'Anonymme Benotzernumm',
      'Username/Password' => 'Benotzernumm/Passwuert',
      'Again' => 'Nach eng Kéier',
    );
  }

}
