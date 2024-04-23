<?php

final class PhabricatorMetamtaNl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'nl';
  }

  protected function getTranslations() {
    return array(
      'Mail Properties' => 'Posteigenschappen',
      'Got it! Thanks, Postmark!
    ' => 'Begrepen! Bedankt, poststempel!',
      'Muted' => 'Gedempt',
      'STAMPS' => 'STEMPELS',
    );
  }

}
