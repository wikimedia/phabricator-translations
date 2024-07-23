<?php

final class PhabricatorBasePl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'pl';
  }

  protected function getTranslations() {
    return array(
      'This application is required, so all users must have access to it.' => 'Ta aplikacja jest wymagana do działania Phabricatora, więc wszyscy użytkownicy muszą mieć do niej dostęp.',
      'Can Configure Application' => 'Może konfigurować aplikacje',
      'Can Use Application' => 'Może korzystać z aplikacji',
      'Developer Tools' => 'Narzędzia programistyczne',
    );
  }

}
