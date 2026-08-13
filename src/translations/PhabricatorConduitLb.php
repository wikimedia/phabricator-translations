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
  'Expected integer, got something else.' => 'Ganz Zuel erwaart, eppes anescht kritt.',
  'Invalid JSON input.' => 'Ongültegen JSON-Input.',
  'Stability' => 'Stabilitéit',
  'Errors' => 'Feeler',
  'Username.' => 'Benotzernumm.',
  'Output Format' => 'Outputformat',
  'Access token is invalid or expired.' => 'Den Zougangstoken ass ongülteg oder ofgelaf.',
  'API token "%s" is not valid.' => 'Den API-Token „%s“ ass net gülteg.',
  'Developer API' => 'Entwéckler-API',
  'Access token is for invalid user.' => 'Den Zougangstoken ass fir en ongültege Benotzer.',
  'Show old methods which will be deleted in a future version of this software.' => 'Al Methode weisen, déi an enger zukünfteger Versioun vu Phabricator geläscht wäerte ginn.',
);
  }

}
