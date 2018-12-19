<?php

final class PhabricatorAuditPl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'pl';
  }

  protected function getTranslations() {
    return array(
      'A commit is created.' => 'Zatwierdzenie jest utworzone.',
      'USERS' => 'UŻYTKOWNICY',
      '%s resigned from auditing %s.' => '%s zrezygnował z audytu %s.',
      'Specified maximum date must come after specified minimum date.' => 'Określona maksymalna data musi nastąpić po określonej minimalnej dacie.',
      'Query audit requests.' => 'Pobierz żądania audytu.',
      'COMMIT' => 'ZATWIERDŹ',
      'Update all commits in all repositories.' => 'Zaktualizuj wszystkie zatwierdzenia we wszystkich repozytoriach.',
      'A commit is closed.' => 'Zatwierdzenie jest zamknięte.',
      'Updating "%s" (%s)...' => 'Aktualizacja "%s" (%s)...',
      'Welcome to Audit' => 'Witaj w Audycie',
      'Audit Not Required' => 'Audyt nie jest wymagany',
      'All Commits' => 'Wszystkie zatwierdzenia',
      'Auditors: %s' => 'Audytorzy: %s',
      'Updating "%s": "%s" -> "%s".' => 'Aktualizacja "%s": "%s" -> "%s".',
      'Failed to reload commit ("%s").' => 'Nie udało się ponownie załadować zatwierdzenia ("%s").',
      'Auditor' => 'Audytor',
      'Audit Required' => 'Wymagana weryfikacja',
      '%s closed the audit of %s.' => '%s zamknął weryfikację %s.',
      'none' => 'brak',
      'Show Only Unreachable Commits' => 'Pokaż tylko nieosiągalne zatwierdzenia',
      'Other commit activity not listed above occurs.' => 'Wystąpiły inne działania związane z zatwierdzaniem niewymienione powyżej.',
      'No Audits' => 'Brak audytów',
      'Partially Audited' => 'Częściowo audytowany',
      '%s committed %s.' => '%s zatwierdził %s.',
      'Someone comments on a commit.' => 'Ktoś komentuje zatwierdzenie.',
      'Update audit status for commits.' => 'Aktualizacja statusu audytu dla zatwierdzeń.',
      'Unreachable' => 'Nieosiągalny',
      'Active Audits' => 'Aktywne audyty',
      'A commit is accepted.' => 'Zatwierdzenie jest akceptowane.',
    );
  }

}
