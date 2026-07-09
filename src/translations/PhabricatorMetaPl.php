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
  'Create Application' => 'Utwórz aplikację',
  'Explore More Applications' => 'Poznaj więcej aplikacji',
  'Show Enabled Applications' => 'Pokaż zainstalowane aplikacje',
  'You cannot enable an enabled application.' => 'Nie można zainstalować zainstalowanej aplikacji.',
  'Browse Applications' => 'Przeglądaj aplikacje',
  'Prototype' => 'Prototyp',
  'Really Disable Application?' => 'Naprawdę odinstalować aplikację?',
  'Create New Application' => 'Utwórz nową aplikację',
  'Extension' => 'Rozszerzenie',
  'Show Launchable Applications' => 'Pokaż uruchamialne aplikacje',
  'Show Released Applications' => 'Pokaż wydane aplikacje',
  'Show Disabled Applications' => 'Pokaż odinstalowane aplikacje',
  'Type an application name...' => 'Wpisz nazwę aplikacji...',
  'This application is required and cannot be disabled.' => 'Ta aplikacja jest wymagana i nie można jej odinstalować.',
  'Show All Applications' => 'Pokaż wszystkie aplikacje',
);
  }

}
