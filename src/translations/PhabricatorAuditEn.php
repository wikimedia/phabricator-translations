<?php

final class PhabricatorAuditEn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en';
  }

  protected function getTranslations() {
    return array(
      'A commit is created.' => 'A commit is created.',
      'USERS' => 'USERS',
      'Find commits with particular identifiers (usually, hashes). Supports full or partial identifiers (like "abcd12340987..." or "abcd1234") and qualified or unqualified identifiers (like "rXabcd1234" or "abcd1234").' => 'Find commits with particular identifiers (usually, hashes). Supports full or partial identifiers (like "abcd12340987..." or "abcd1234") and qualified or unqualified identifiers (like "rXabcd1234" or "abcd1234").',
      '%s resigned from auditing %s.' => '%s resigned from auditing %s.',
      'Specified maximum date must come after specified minimum date.' => 'Specified maximum date must come after specified minimum date.',
      'A commit\'s projects change.' => 'A commit\'s projects change.',
      '%s added subscribers: %s.' => '%s added subscribers: %s.',
      'Query audit requests.' => 'Query audit requests.',
      'Specify "--all" to affect everything, or a list of specific commits or repositories to affect.' => 'Specify "--all" to affect everything, or a list of specific commits or repositories to affect.',
      'Update all commits in all repositories.' => 'Update all commits in all repositories.',
      'Show Only Unpublished Commits' => 'Show Only Unpublished Commits',
      '%s added subscribers...' => '%s added subscribers...',
      'A commit is closed.' => 'A commit is closed.',
      '%s added auditors...' => '%s added auditors...',
      '%s resigned from this audit.' => '%s resigned from this audit.',
      'Updating "%s" (%s)...' => 'Updating "%s" (%s)...',
      '%s removed auditors from %s: %s.' => '%s removed auditors from %s: %s.',
      'Select only audits in a given list of repositories.' => 'Select only audits in a given list of repositories.',
      'No synchronization changes for "%s".' => 'No synchronization changes for "%s".',
      'Find or exclude unreachable commits which are not ancestors of any branch, tag, or ref.' => 'Find or exclude unreachable commits which are not ancestors of any branch, tag, or ref.',
      'Welcome to Audit' => 'Welcome to Audit',
      'Select only audits for commits on or after the given date.' => 'Select only audits for commits on or after the given date.',
      'Object "%s" is not a valid object.' => 'Object "%s" is not a valid object.',
      'Hide Unreachable Commits' => 'Hide Unreachable Commits',
      'Audit Not Required' => 'Audit Not Required',
      '%s committed %s (authored by %s).' => '%s committed %s (authored by %s).',
      'Select only audits for commits on or before the given date.' => 'Select only audits for commits on or before the given date.',
      'All Commits' => 'All Commits',
      '%s added auditors to %s: %s.' => '%s added auditors to %s: %s.',
      'Select only audits with the given IDs.' => 'Select only audits with the given IDs.',
      'A commit has an auditor resign.' => 'A commit has an auditor resign.',
      'Find commits with given audit statuses.' => 'Find commits with given audit statuses.',
      'Select only audits in the given status. By default, only open audits are selected.' => 'Select only audits in the given status. By default, only open audits are selected.',
      'Auditors: %s' => 'Auditors: %s',
      'Object "%s" is not a valid repository or commit.' => 'Object "%s" is not a valid repository or commit.',
      'Unable to parse date "%s". Use a format like "%s".' => 'Unable to parse date "%s". Use a format like "%s".',
      'Failed to load commit during transaction finalization!' => 'Failed to load commit during transaction finalization!',
      'Update commits to make their summary audit state reflect the state of their actual audit requests. This can fix inconsistencies in database state if audit requests have been mangled accidentally (or on purpose).' => 'Update commits to make their summary audit state reflect the state of their actual audit requests. This can fix inconsistencies in database state if audit requests have been mangled accidentally (or on purpose).',
      'Find or exclude unpublished commits which are not ancestors of any permanent branch, tag, or ref.' => 'Find or exclude unpublished commits which are not ancestors of any permanent branch, tag, or ref.',
      'A commit has auditors added.' => 'A commit has auditors added.',
      'Select only audits by a given list of users.' => 'Select only audits by a given list of users.',
      'Identifiers' => 'Identifiers',
      '%s edited subscribers; added: %s, removed: %s.' => '%s edited subscribers; added: %s, removed: %s.',
      'Failed to reload commit ("%s").' => 'Failed to reload commit ("%s").',
      'Auditor' => 'Auditor',
      '%s closed the audit of %s.' => '%s closed the audit of %s.',
      'none' => 'none',
      '%s removed auditors: %s.' => '%s removed auditors: %s.',
      'Show what would be deleted, but do not actually delete anything.' => 'Show what would be deleted, but do not actually delete anything.',
      'Select only audits for the given commits.' => 'Select only audits for the given commits.',
      'Find commits which affect given packages.' => 'Find commits which affect given packages.',
      'Show Only Unreachable Commits' => 'Show Only Unreachable Commits',
      '(This commit affected more than %d files. Only %d are shown here and additional ones are truncated.)' => '(This commit affected more than %s files. Only %s are shown here and additional ones are truncated.)',
      'Other commit activity not listed above occurs.' => 'Other commit activity not listed above occurs.',
      'Update package relationships for commits.' => 'Update package relationships for commits.',
      'Find commits where given users, projects, or packages are auditors.' => 'Find commits where given users, projects, or packages are auditors.',
      '%s removed subscribers: %s.' => '%s removed subscribers: %s.',
      'Synchronizing "%s": "%s" -> "%s".' => 'Synchronizing "%s": "%s" -> "%s".',
      '%s edited auditors; added: %s, removed: %s.' => '%s edited auditors; added: %s, removed: %s.',
      'No audits match the query.' => 'No audits match the query.',
      'Find commits which are ancestors of a particular ref, like "master".' => 'Find commits which are ancestors of a particular ref, like "master".',
      'Was CC\'d' => 'Was CC\'d',
      'Post-commit code review and auditing. Audits you are assigned to will appear here.' => 'Post-commit code review and auditing. Audits you are assigned to will appear here.',
      'Ancestors Of' => 'Ancestors Of',
      '%s committed %s.' => '%s committed %s.',
      'Find commits authored by particular users.' => 'Find commits authored by particular users.',
      'Really delete these %s audit(s)? They will be permanently deleted and can not be recovered.' => 'Really delete these %s audit(s)? They will be permanently deleted and can not be recovered.',
      'A commit has a concerned raised against it.' => 'A commit has a concerned raised against it.',
      'Someone comments on a commit.' => 'Someone comments on a commit.',
      'Find commits where given users, projects, or packages are responsible for the next steps in the audit workflow.' => 'Find commits where given users, projects, or packages are responsible for the next steps in the audit workflow.',
      'Specify either a list of objects to affect or "--all", but not both.' => 'Specify either a list of objects to affect or "--all", but not both.',
      'This is a dry run, so no changes will be made.' => 'This is a dry run, so no changes will be made.',
      'Hide Unpublished Commits' => 'Hide Unpublished Commits',
      'Audits' => 'Audits',
      'Unreachable' => 'Unreachable',
      'Active Audits' => 'Active Audits',
      'Browse and Audit Commits' => 'Browse and Audit Commits',
      'Delete audit requests matching parameters.' => 'Delete audit requests matching parameters.',
      '%s closed this audit.' => '%s closed this audit.',
      'Find commits in particular repositories.' => 'Find commits in particular repositories.',
      'No such user with username "%s"!' => 'No such user with username "%s"!',
      'No such commit "%s"!' => 'No such commit "%s"!',
      'Deleting audit %d...' => 'Deleting audit %s...',
      'Update named commits and repositories.' => 'Update named commits and repositories.',
      '%s added auditors: %s.' => '%s added auditors: %s.',
      'A commit\'s subscribers change.' => 'A commit\'s subscribers change.',
      'Audit Requested' => 'Audit Requested',
      'View Commit' => 'View Commit',
      'Audit' => 'Audit',
      'No commits found.' => 'No commits found.',
      '%s added auditors to %s...' => '%s added auditors to %s...',
      '%s edited auditors for %s; added: %s, removed: %s.' => '%s edited auditors for %s; added: %s, removed: %s.',
      'A commit is accepted.' => 'A commit is accepted.',
    );
  }

}
