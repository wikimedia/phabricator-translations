<?php

final class PhabricatorAuditRu
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ru';
  }

  protected function getTranslations() {
    return array(
      '%s added auditors...' => 'Пользователь %s добавил аудиторов...',
      'Auditor' => 'Аудитор',
      'Audits' => 'Аудиты',
      'Active Audits' => 'Активные аудиты',
      'Audit Requested' => 'Запрошен аудит',
    );
  }

}
