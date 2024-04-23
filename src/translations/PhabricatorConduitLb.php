<?php

final class PhabricatorConduitLb
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'lb';
  }

  protected function getTranslations() {
    return array(
      'JSON' => 'JSON',
      'All Methods' => 'All Methoden',
      'API Method: %s' => 'API-Method: %s',
      'List of integers.' => 'Lëscht vu ganzen Zuelen.',
      'An integer.' => 'Eng ganz Zuel.',
      'List of usernames.' => 'Lëscht vun de Benotzernimm.',
      'Stability' => 'Stabilitéit',
      'Errors' => 'Feeler',
      'Username.' => 'Benotzernumm.',
      'Show old methods which will be deleted in a future version of this software.' => 'Al Methode weisen, déi an enger zukünfteger Versioun vu Phabricator geläscht wäerte ginn.',
    );
  }

}
