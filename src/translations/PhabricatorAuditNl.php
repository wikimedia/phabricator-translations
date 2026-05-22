<?php

final class PhabricatorAuditNl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'nl';
  }

  protected function getTranslations() {
    return array(
  'A commit is created.' => 'Er is een commit aangemaakt.',
  'USERS' => 'GEBRUIKERS',
  'Find commits with particular identifiers (usually, hashes). Supports full or partial identifiers (like "abcd12340987..." or "abcd1234") and qualified or unqualified identifiers (like "rXabcd1234" or "abcd1234").' => 'Zoeken naar commits met specifieke identificatoren (meestal hashes). Ondersteunt volledige of gedeeltelijke identificatoren (zoals "abcd12340987..." of "abcd1234") en gekwalificeerde of niet-gekwalificeerde identificatoren (zoals "rXabcd1234" of "abcd1234").',
  '%s resigned from auditing %s.' => '%s heeft de rol als auditor van %s neergelegd.',
  'Specified maximum date must come after specified minimum date.' => 'De opgegeven uiterste datum moet na de opgegeven vroegste datum komen.',
  'A commit\'s projects change.' => 'De projecten van een commit veranderen.',
  '%s added subscribers: %s.' => '%s heeft abonnees toegevoegd: %s.',
  'Query audit requests.' => 'Auditverzoeken opvragen.',
  'Specify "--all" to affect everything, or a list of specific commits or repositories to affect.' => 'Gebruik "--all" om op alles te werken, of een lijst met specifieke commits of repository\'s die moeten worden beïnvloed.',
  'Update all commits in all repositories.' => 'Alle commits in alle repository\'s bijwerken.',
  'Unknown Audit Request Status ("%s")' => 'Onbekende status van auditverzoek ("%s")',
  '%s added subscribers...' => '%s heeft abonnees toegevoegd...',
  'A commit is closed.' => 'Een commit is afgesloten.',
  '%s added auditors...' => '%s heeft auditors toegevoegd...',
  '%s resigned from this audit.' => '%s heeft bedankt voor deze audit.',
  'Updating "%s" (%s)...' => '"%s" bijwerken (%s)...',
  '%s removed auditors from %s: %s.' => '%s heeft auditors van %s: %s.',
  'Select only audits in a given list of repositories.' => 'Selecteer alleen audits in een bepaalde lijst met repository\'s.',
  'No synchronization changes for "%s".' => 'Geen synchronisatiewijzigingen voor "%s".',
  'Find or exclude unreachable commits which are not ancestors of any branch, tag, or ref.' => 'Onbereikbare commits zoeken of uitsluiten die geen voorouders zijn van een branch, tag of ref.',
  'Welcome to Audit' => 'Welkom bij Audit',
  'Select only audits for commits on or after the given date.' => 'Selecteer alleen audits voor commits op of na de opgegeven datum.',
  'Object "%s" is not a valid object.' => 'Object "%s" is incorrect.',
  'Hide Unreachable Commits' => 'Onbereikbare commits verbergen',
  '%s committed %s (authored by %s).' => '%s heeft %s gecommit (geschreven door %s).',
  'Select only audits for commits on or before the given date.' => 'Selecteer alleen audits voor commits op of vóór de opgegeven datum.',
  'Find or exclude permanent commits which are ancestors of any permanent branch, tag, or ref.' => 'Permanente commits zoeken of uitsluiten die voorouders zijn van een permanente branch, tag of ref.',
  'All Commits' => 'Alle commits',
  '%s added auditors to %s: %s.' => '%s heeft auditors toegevoegd aan %s: %s.',
  'Select only audits with the given IDs.' => 'Alleen audits selecteren met de opgegeven ID\'s.',
  'A commit has an auditor resign.' => 'Een audit is niets langer gekoppeld aan een commit.',
  'Find commits with given audit statuses.' => 'Naar commits zoeken met de opgegeven auditstatus.',
  'Select only audits in the given status. By default, only open audits are selected.' => 'Alleen audits selecteren met de opgegeven status. Standaard worden alleen openstaande audits geselecteerd.',
  'Object "%s" is not a valid repository or commit.' => 'Object "%s" is geen correctie repository of commit.',
  'Unable to parse date "%s". Use a format like "%s".' => 'Datum "%s" kan niet worden verwerkt. Gebruik een opmaak zoals "%s".',
  'Failed to load commit during transaction finalization!' => 'Het laden van de commit is mislukt tijdens het afronden van de transactie!',
  'Update commits to make their summary audit state reflect the state of their actual audit requests. This can fix inconsistencies in database state if audit requests have been mangled accidentally (or on purpose).' => 'Commits bijwerken zodat hun samenvattende auditstatus de status van hun daadwerkelijke auditverzoeken weerspiegelt. Dit kan inconsistenties in de databasestatus verhelpen als auditverzoeken per ongeluk (of opzettelijk) zijn gewijzigd.',
  'A commit has auditors added.' => 'Aan een commit zijn auditors toegevoegd.',
  'Select only audits by a given list of users.' => 'Alleen selecteren audits van een bepaalde lijst met gebruikers.',
  'none' => 'geen',
);
  }

}
