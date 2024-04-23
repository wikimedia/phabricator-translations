<?php

final class PhabricatorAuditId
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'id';
  }

  protected function getTranslations() {
    return array(
      'USERS' => 'PENGGUNA',
      '%s added subscribers...' => '%s menambahkan pelanggan...',
      'Welcome to Audit' => 'Selamat datang di Audit',
      'Auditor' => 'Auditor',
    );
  }

}
