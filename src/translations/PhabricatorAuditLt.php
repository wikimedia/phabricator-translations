<?php

final class PhabricatorAuditLt
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'lt';
  }

  protected function getTranslations() {
    return array(
      'USERS' => 'NAUDOTOJAI',
      '%s added subscribers...' => '%s pridėjo prenumeratorių...',
      '%s added auditors...' => '%s pridėjo auditorių...',
      '%s resigned from this audit.' => '%s atsistatydino iš šio audito.',
      'Updating "%s" (%s)...' => 'Atnaujinama „%s“ (%s)...',
      '%s removed auditors from %s: %s.' => '%s pašalino auditorius iš %s: %s.',
      'Select only audits in a given list of repositories.' => 'Pasirinkti auditus tik pateiktame saugyklų sąraše.',
      'No synchronization changes for "%s".' => 'Jokių „%s“ sinchronizavimo pakeitimų.',
      'Welcome to Audit' => 'Sveiki atvykę į Auditą',
      'Object "%s" is not a valid object.' => 'Objektas „%s“ nėra tinkamas objektas.',
      '%s added auditors to %s: %s.' => '%s pridėjo auditorių prie %s: %s.',
      'Select only audits with the given IDs.' => 'Pasirinkite tik auditus su nurodytais ID.',
      'Select only audits in the given status. By default, only open audits are selected.' => 'Pasirinkti tik nurodytos būsenos auditus. Pagal numatytuosius nustatymus pasirenkami tik atidaryti auditai.',
      'Select only audits by a given list of users.' => 'Pasirinkti auditus, atliekamus tik pateikto sąrašo naudotojų.',
      'Identifiers' => 'Identifikatoriai',
      '%s edited subscribers; added: %s, removed: %s.' => '%s redagavo prenumeratorius; pridėta: %s, pašalinta: %s.',
      'Auditor' => 'Auditorius',
      '%s closed the audit of %s.' => '%s užbaigė %s auditą.',
      'none' => 'nėra',
      '%s removed auditors: %s.' => '%s pašalino auditorius: %s.',
      'Show what would be deleted, but do not actually delete anything.' => 'Parodyti, kas būtų ištrinta, bet iš tikrųjų nieko neištrinti.',
      '%s removed subscribers: %s.' => '%s pašalino prenumeratorius: %s.',
      'Synchronizing "%s": "%s" -> "%s".' => 'Sinchronizuojama „%s“: „%s“ -> „%s“.',
      '%s edited auditors; added: %s, removed: %s.' => '%s redagavo auditorius; pridėta: %s, pašalinta: %s.',
      'No audits match the query.' => 'Nei vienas auditas neatitinka užklausos.',
      'Really delete these %s audit(s)? They will be permanently deleted and can not be recovered.' => 'Tikrai ištrinti šį (šiuos) %s auditą(-us)? Jis (jie) bus visam laikui ištrintas(-į) ir jo (jų) nebebus galima atkurti.',
      'Audits' => 'Auditai',
      'Unreachable' => 'Nepasiekiamas',
      'Permanent' => 'Nuolatinis',
      'Active Audits' => 'Aktyvūs auditai',
      '%s closed this audit.' => '%s užbaigė šį auditą.',
      'No such user with username "%s"!' => 'Nėra tokio naudotojo, su naudotojo vardu „%s“!',
      'Deleting audit %d...' => 'Ištrinamas auditas %s...',
      '%s added auditors: %s.' => '%s pridėjo auditorius: %s.',
      'Audit Requested' => 'Reikalingas auditas',
      'Audit' => 'Auditas',
      '%s added auditors to %s...' => '%s pridėjo auditorių prie %s...',
      '%s edited auditors for %s; added: %s, removed: %s.' => '%s redagavo %s auditorius; pridėta: %s, pašalinta: %s.',
    );
  }

}
