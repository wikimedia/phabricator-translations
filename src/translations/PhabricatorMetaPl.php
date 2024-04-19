<?php

final class PhabricatorMetaPl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'pl';
  }

  protected function getTranslations() {
    return array(
      'Information' => 'Informacja',
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
      'Show Launchable Applications' => 'Pokaż uruchamialne aplikacje',
      'Show Released Applications' => 'Pokaż wydane aplikacje',
      'Uninstall' => 'Odinstaluj',
      'This application is required and cannot be uninstalled.' => 'Nie można odinstalować tej aplikacji, ponieważ jest ona wymagana do działania Phabricatora.',
      'Type an application name...' => 'Wpisz nazwę aplikacji...',
      'Show All Applications' => 'Pokaż wszystkie aplikacje',
    );
  }

}
