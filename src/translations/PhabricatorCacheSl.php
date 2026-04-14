<?php

final class PhabricatorCacheSl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sl';
  }

  protected function getTranslations() {
    return array(
  'Select caches to purge with "--all" or "--caches". Available caches are: %s.' => 'Izberite predpomnilnike za počiščenje z »--all« ali »--caches«. Razpoložljivi predpomnilniki so: %s.',
  'Unknown cache format.' => 'Neznan format pomnilnika.',
  'Purge all caches.' => 'Počisti vse predpomnilnike.',
  'Purge a specific set of caches.' => 'Počisti določen nabor predpomnilnikov.',
  'When using "--caches", you must select at least one valid cache to purge.' => 'Pri uporabi »--caches« morate izbrati vsaj en veljaven predpomnilnik za počiščenje.',
  'Enabling OPcache will dramatically improve performance.' => 'Če boste omogočili OPcache, boste daramatično izboljšali delovanje.',
  'Enabling APCu will improve performance.' => 'Če boste omogočili APC/APCu, boste izboljšali delovanje.',
);
  }

}
