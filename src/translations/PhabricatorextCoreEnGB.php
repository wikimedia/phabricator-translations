<?php

final class PhabricatorextCoreEnGB
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en_GB';
  }

  protected function getTranslations() {
    return array(
      'Customize query in gerrit' => 'Customise query in gerrit',
      'You do not have permission to escalate tasks as security issues. This action can only be taken by authorized users.' => 'You do not have permission to escalate tasks as security issues. This action can only be taken by authorised users.',
      'Wikimedia Customizations' => 'Wikimedia Customisations',
    );
  }

}
