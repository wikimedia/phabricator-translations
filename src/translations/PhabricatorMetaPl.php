<?php

final class PhabricatorMetaPl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'pl';
  }

  protected function getTranslations() {
    return array(
      'Information' => 'Informacja',
      'This application cannot be uninstalled, because it is required for Phabricator to work.' => 'Nie można odinstalować tej aplikacji, ponieważ jest ona wymagana do działania Phabricatora.',
      'Syntax' => 'Składnia',
      'You cannot install an installed application.' => 'Nie można zainstalować zainstalowanej aplikacji.',
      'Create Application' => 'Utwórz aplikację',
      'Really Uninstall Application?' => 'Naprawdę odinstalować aplikację?',
      'Explore More Applications' => 'Poznaj więcej aplikacji',
      'Uninstalled' => 'Odinstalowana',
      'Show Uninstalled Applications' => 'Pokaż odinstalowane aplikacje',
      'Browse Applications' => 'Przeglądaj aplikacje',
      'Prototype' => 'Prototyp',
      'Create New Application' => 'Utwórz nową aplikację',
      'Extension' => 'Rozszerzenie',
      'Show Installed Applications' => 'Pokaż zainstalowane aplikacje',
      'Configure' => 'Konfiguruj',
      'Show Launchable Applications' => 'Pokaż uruchamialne aplikacje',
      'Show Released Applications' => 'Pokaż wydane aplikacje',
      'Uninstall' => 'Odinstaluj',
      'Type an application name...' => 'Wpisz nazwę aplikacji...',
      'Show All Applications' => 'Pokaż wszystkie aplikacje',
      'Install' => 'Instaluj',
    );
  }

}
