<?php

final class PhabricatorPolicyFi
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fi';
  }

  protected function getTranslations() {
    return array(
  'Access Denied: %s' => 'Pääsy evätty: %s',
  'These rules are processed in order.' => 'Nämä säännöt käsitellään järjestyksessä.',
  'You do not have permission to edit this object.' => 'Sinulla ei ole oikeutta muokata tätä objektia.',
  'Allow Public Visibility' => 'Salli julkinen näkyvyys',
  'Deny' => 'Kiellä',
  'is new' => 'on uusi',
  'Existing policy PHID or constant.' => 'Olemassa olevan käytännön PHID tai vakio.',
  'All Users' => 'Kaikki käyttäjät',
  'A four-letter object type.' => 'Nelikirjaiminen objektityyppi.',
  'New policy name.' => 'Uuden käytännön nimi.',
  'If no rules match, %s all other users.' => 'Jos säännöt eivät täsmää, %s kaikki muut käyttäjät.',
  'Edit the description of the policy.' => 'Muokkaa käytännön kuvausta.',
  'New description of the policy.' => 'Käytännön uusi kuvaus.',
);
  }

}
