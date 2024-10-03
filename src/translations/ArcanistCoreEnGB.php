<?php

final class ArcanistCoreEnGB
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en_GB';
  }

  protected function getTranslations() {
    return array(
      'Argument "%s" is unrecognized. Use "%s" to indicate the end of flags.' => 'Argument "%s" is unrecognised. Use "%s" to indicate the end of flags.',
      'Got unrecognized upstream format ("%s") from Git, expected "refs/heads/..." or "refs/remotes/...".' => 'Got unrecognised upstream format ("%s") from Git, expected "refs/heads/..." or "refs/remotes/...".',
      'Unrecognized property status \'%s\'.' => 'Unrecognised property status \'%s\'.',
      'No analyzer is available for binary "%s".' => 'No analyser is available for binary "%s".',
      'Unrecognized argument "%s".' => 'Unrecognised argument "%s".',
      '(This configuration value is not recognized by arc. It may be misspelled or out of date.)' => '(This configuration value is not recognised by arc. It may be misspelled or out of date.)',
      'Unrecognized symbol name.' => 'Unrecognised symbol name.',
      'Base commit rule \'%s\' (from source \'%s\') is not a recognized rule.' => 'Base commit rule \'%s\' (from source \'%s\') is not a recognised rule.',
      'The "SHELL" environment variable does not match any recognized shell.' => 'The "SHELL" environment variable does not match any recognised shell.',
      'Disable ANSI terminal codes, printing plain text with no color or style.' => 'Disable ANSI terminal codes, printing plain text with no colour or style.',
      'Unrecognized argument \'%s\'. Try \'%s\'.' => 'Unrecognised argument \'%s\'. Try \'%s\'.',
      'Unrecognized lint message code "%s".' => 'Unrecognised lint message code "%s".',
      'Unrecognized key \'%s\' in argument specification. Recognized keys are: %s.' => 'Unrecognised key \'%s\' in argument specification. Recognized keys are: %s.',
      'The configuration key "%s" is not recognized by arc. It may be misspelled or out of date.' => 'The configuration key "%s" is not recognised by arc. It may be misspelled or out of date.',
      'Configuration option ("%s") is unrecognized. You can only read recognized configuration options.' => 'Configuration option ("%s") is unrecognised. You can only read recognized configuration options.',
      'Unrecognized lint message code: "%s"' => 'Unrecognised lint message code: "%s"',
      'Unrecognized lint message code "%s". Expected a valid JSHint lint code like "%s" or "%s".' => 'Unrecognised lint message code "%s". Expected a valid JSHint lint code like "%s" or "%s".',
      'Configuration option ("%s") specified with "--config" flag is not a recognized option.' => 'Configuration option ("%s") specified with "--config" flag is not a recognised option.',
      'Unrecognized item status \'%s\'.' => 'Unrecognised item status \'%s\'.',
      'Failed to unserialize object: %s' => 'Failed to unserialise object: %s',
      'PyLint is a Python source code analyzer which looks for programming errors, helps enforcing a coding standard and sniffs for some code smells.' => 'PyLint is a Python source code analyser which looks for programming errors, helps enforcing a coding standard and sniffs for some code smells.',
      'The format of user symbol "%s" is unrecognized. Expected a username like "alice" or "@alice", or a user PHID, or a user ID, or a special function like "viewer()".' => 'The format of user symbol "%s" is unrecognised. Expected a username like "alice" or "@alice", or a user PHID, or a user ID, or a special function like "viewer()".',
      'The format of symbol "%s" is unrecognized. Expected a monogram like "X123", or an ID like "123", or a PHID.' => 'The format of symbol "%s" is unrecognised. Expected a monogram like "X123", or an ID like "123", or a PHID.',
      'Unrecognized lint message code "%s". Expected a valid cpplint lint code like "%s" or "%s".' => 'Unrecognised lint message code "%s". Expected a valid cpplint lint code like "%s" or "%s".',
      'Unrecognized lint message code "%s". Expected a valid PEP8 lint code like "%s" or "%s".' => 'Unrecognised lint message code "%s". Expected a valid PEP8 lint code like "%s" or "%s".',
      'Unrecognized lint message code "%s". Expected a valid flake8 lint code like "%s", or "%s", or "%s", or "%s".' => 'Unrecognised lint message code "%s". Expected a valid flake8 lint code like "%s", or "%s", or "%s", or "%s".',
      'PHP_CodeSniffer tokenizes PHP, JavaScript and CSS files and detects violations of a defined set of coding standards.' => 'PHP_CodeSniffer tokenises PHP, JavaScript and CSS files and detects violations of a defined set of coding standards.',
      'Amend the working copy, synchronizing the local commit message.' => 'Amend the working copy, synchronising the local commit message.',
      'Unrecognized lint message code "%s". Expected a valid Pylint lint code like "%s", or "%s", or "%s".' => 'Unrecognised lint message code "%s". Expected a valid Pylint lint code like "%s", or "%s", or "%s".',
      'Duplicate key in array initializer. PHP will ignore all but the last entry.' => 'Duplicate key in array initialiser. PHP will ignore all but the last entry.',
      'Synchronizing "%s" from Perforce...' => 'Synchronising "%s" from Perforce...',
      'Amend the working copy, synchronizing the local commit message from
    Differential.
    Supported in Mercurial 2.2 and newer.' => 'Amend the working copy, synchronising the local commit message from
    Differential.
    Supported in Mercurial 2.2 and newer.',
      'RuboCop is a Ruby static code analyzer, based on the community Ruby style guide.' => 'RuboCop is a Ruby static code analyser, based on the community Ruby style guide.',
      'Ignoring unrecognized configuration option ("%s") from source: %s.' => 'Ignoring unrecognised configuration option ("%s") from source: %s.',
      'Signal router has not been initialized!' => 'Signal router has not been initialised!',
    );
  }

}
