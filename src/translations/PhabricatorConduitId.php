<?php

final class PhabricatorConduitId
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'id';
  }

  protected function getTranslations() {
    return array(
      'JSON' => 'JSON',
      'All Methods' => 'Semua Metode',
      'API Method: %s' => 'Metode API: %s',
      'List of strings.' => 'Daftar string.',
      'Stability' => 'Stabilitas',
      'Call Logs' => 'Log Panggilan',
    );
  }

}
