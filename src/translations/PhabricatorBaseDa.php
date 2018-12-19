<?php

final class PhabricatorBaseDa
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'da';
  }

  protected function getTranslations() {
    return array(
      'No application \'%s\'!' => 'Ingen applikation \'%s\'!',
      'Expect user \'%s\' to be allowed access to \'%s\'.' => 'Forvent, at brugeren \'%s\' har tilladelse til at tilgå \'%s\'.',
      'Can Configure Application' => 'Kan konfigurere applikation',
      'Can Use Application' => 'Kan bruge applikation',
      'Public + configured' => 'Offentlig + konfigureret',
      'Public Access' => 'Offentlig adgang',
      'No Login Required' => 'Ingen login påkrævet',
      'No application!' => 'Ingen applikation!',
      'Email Verification Required' => 'Verificering af e-mail er påkrævet',
      'Developer Tools' => 'Udviklerværktøjer',
      'Admin Required' => 'Admin påkrævet',
    );
  }

}
