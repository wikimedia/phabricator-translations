<?php

final class PhabricatorBasePl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'pl';
  }

  protected function getTranslations() {
    return array(
      'Can Configure Application' => 'Może konfigurować aplikacje',
      'Can Use Application' => 'Może korzystać z aplikacji',
      'Application Controller' => 'Kontroler aplikacji',
      'Public Access' => 'Dostęp publiczny',
      'Developer Tools' => 'Narzędzia programistyczne',
      'This application is required for Phabricator to operate, so all users must have access to it.' => 'Ta aplikacja jest wymagana do działania Phabricatora, więc wszyscy użytkownicy muszą mieć do niej dostęp.',
    );
  }

}
