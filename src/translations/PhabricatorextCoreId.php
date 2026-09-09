<?php

final class PhabricatorextCoreId
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'id';
  }

  protected function getTranslations() {
    return array(
  'Must pass a list of valid Policy PHIDs.' => 'Harus memberikan daftar Policy PHID yang valid.',
  'Execute searches for Policies by PHID.' => 'Eksekusi pencarian untuk Kebijakan berdasarkan PHID.',
);
  }

}
