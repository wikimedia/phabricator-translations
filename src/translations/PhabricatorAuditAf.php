<?php

final class PhabricatorAuditAf
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'af';
  }

  protected function getTranslations() {
    return array(
      'A commit is created.' => '\'N Verbintenis word geskep.',
      'USERS' => 'VERBRUIKERS',
      'Find commits with particular identifiers (usually, hashes). Supports full or partial identifiers (like "abcd12340987..." or "abcd1234") and qualified or unqualified identifiers (like "rXabcd1234" or "abcd1234").' => 'Soek verbintenisse met spesifieke identifiseerders (gewoonlik hasse). Ondersteun volledige of gedeeltelike identifiseerders (soos "abcd12340987 ..." of "abcd1234") en gekwalifiseerde of ongekwalifiseerde identifiseerders (soos "rXabcd1234" of "abcd1234").',
      '%s resigned from auditing %s.' => '%s bedank uit die ouditering van %s.',
      'Specified maximum date must come after specified minimum date.' => 'Die gespesifiseerde maksimum datum moet na die gespesifiseerde minimum datum kom.',
      'A commit\'s projects change.' => 'A commit se projekte verander.',
      '%s added subscribers: %s.' => 'Intekenare by %s bygevoeg:%s.',
      'Query audit requests.' => 'Navrae-ouditversoeke.',
      'Specify "--all" to affect everything, or a list of specific commits or repositories to affect.' => 'Spesifiseer "- alles" om alles te beïnvloed, of \'n lys met spesifieke verbindings of bewaarplekke om te beïnvloed.',
      'Update all commits in all repositories.' => 'Dateer alle opdragte in alle bewaarplekke op.',
      '%s added subscribers...' => 'Intekenare bygevoeg met %s...',
      'A commit is closed.' => '\'N Verbintenis word gesluit.',
      '%s added auditors...' => 'Ouditeure het %s bygevoeg ...',
      '%s resigned from this audit.' => '%s het bedank uit hierdie oudit.',
      'Updating "%s" (%s)...' => 'Dateer "%s" (%s) op ...',
      '%s removed auditors from %s: %s.' => 'Ouditeurs van %s het %s:%s verwyder.',
      'Select only audits in a given list of repositories.' => 'Kies slegs oudits in \'n gegewe lys bewaarplekke.',
      'No synchronization changes for "%s".' => 'Geen sinchronisasieveranderings vir "%s" nie.',
      'Find or exclude unreachable commits which are not ancestors of any branch, tag, or ref.' => 'Soek of sluit onbereikbare verbindings uit wat nie voorouers van enige tak, etiket of verwysing is nie.',
      'Welcome to Audit' => 'Welkom by Oudit',
      'Select only audits for commits on or after the given date.' => 'Kies slegs oudits vir begaan op of na die gegewe datum.',
      'Object "%s" is not a valid object.' => 'Voorwerp "%s" is nie \'n geldige objek nie.',
      'Hide Unreachable Commits' => 'Verberg onbereikbare verbindings',
      'Audit Not Required' => 'Oudit is nie nodig nie',
      '%s committed %s (authored by %s).' => '%s het %s gepleeg (geskryf deur %s).',
      'Select only audits for commits on or before the given date.' => 'Kies slegs oudits vir begaan op of voor die gegewe datum.',
      'All Commits' => 'Almal verbind',
      '%s added auditors to %s: %s.' => 'Ouditeurs het %s by %s:%s gevoeg.',
    );
  }

}
