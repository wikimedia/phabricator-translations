<?php

final class ArcanistCoreEnGB
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en_GB';
  }

  protected function getTranslations() {
    return array(
      'Try running your arc command again.' => 'Essayez de relancer votre command arc.',
      'CC: %s' => 'CC : %s',
      'If the file is not a text file, you can mark it \'binary\'. Mark this file as \'binary\' and continue?' => 'Si le fichier n\'est pas un fichier texte, vous pouvez le consider comme "binaire". Voulez-vous considérer ce fichier comme binaire et continuer ?',
      'Rule \'%s\' is invalid, it must have a type and name like \'%s\'.' => 'La règle "%s" est invalide, elle doit avoir un type et un nom comme "%s".',
      'None of the configured interpreters can be located.' => 'Aucun des interpréteurs configurés n\'a pu être localisé.',
      'Unknown argument \'%s\'. Try \'%s\'.' => 'Argument "%s" inconnu. Essayez "%s".',
      'Pick' => 'Choisissez',
      'Output upload information in JSON format.' => 'Afficher les informations de téléversement au format JSON.',
      'Remote Repository' => 'Dépôt distant',
      'Empty certificate in credentials.' => 'Le certificat est vide.',
      'No tests to run.' => 'Aucun test à lancer.',
      'Order: Global' => 'Ordre : global',
      '%s assertion(s) passed.' => '%s assertion(s) valide(s).',
      'Unknown Symbol' => 'Symbole inconnu',
      'HLint is a linter for Haskell code.' => 'HLint est un linter pour du code Haskell.',
      'Argument "%s" is unrecognized. Use "%s" to indicate the end of flags.' => 'Argument "%s" is unrecognised. Use "%s" to indicate the end of flags.',
      'Assertion failed, expected \'%s\' (at %s:%d): %s' => 'L\'assertion a échoué, \'%s\' était attendu (à %s:%s) : %s',
      'ERROR' => 'ERREUR',
      'Do not upload binaries (like images).' => 'Ne pas téléverser les fichiers binaires (comme les images).',
      'The URI of a server to connect to by default, if %s is run in a project without a configured URI or run outside of a project.' => 'L\'URI d\'une installation de Phabricator à contacter par défaut, si %s est lancé dans un projet sans URI de configurée, ou lancé en dehors d\'un projet.',
      'Copied Here' => 'Copié ici',
      'Aborted generation of gigantic diff.' => 'La génération d\'un diff giga-énorme a été interrompue.',
      'Install PEP8 using `%s`.' => 'Installez PHP8 en utilisation `%s`.',
      'Aborted workflow to fix UTF-8.' => 'Le workflow pour corriger l\'UTF-8 a été interrompu.',
      'This codebase targets PHP %s, but `%s()` was removed in PHP %s.' => 'Ce code source est pour PHP %s, mais `%s()` a été supprimé en PHP %s.',
      'Install flake8 using `%s`.' => 'Installez flake8 en utilisation `%s`.',
      'Updating commit message...' => 'Mise à jour du message de commit…',
      'Constants should be uppercase.' => 'Les constantes doivent être en majuscules.',
      '(Run `%s` for more details.)' => '(Exécutez `%s` pour plus de détails.)',
      'Got unrecognized upstream format ("%s") from Git, expected "refs/heads/..." or "refs/remotes/...".' => 'Got unrecognised upstream format ("%s") from Git, expected "refs/heads/..." or "refs/remotes/...".',
      'Unrecognized property status \'%s\'.' => 'Unrecognised property status \'%s\'.',
      'No analyzer is available for binary "%s".' => 'No analyser is available for binary "%s".',
      'Unrecognized argument "%s".' => 'Unrecognised argument "%s".',
      '(This configuration value is not recognized by arc. It may be misspelled or out of date.)' => '(This configuration value is not recognised by arc. It may be misspelled or out of date.)',
      'Unrecognized symbol name.' => 'Unrecognised symbol name.',
      'Base commit rule \'%s\' (from source \'%s\') is not a recognized rule.' => 'Base commit rule \'%s\' (from source \'%s\') is not a recognised rule.',
      'The "SHELL" environment variable does not match any recognized shell.' => 'The "SHELL" environment variable does not match any recognised shell.',
      'Overlong form canonicalization of: %s' => 'Overlong form canonicalisation of: %s',
      'Unrecognized argument \'%s\'. Try \'%s\'.' => 'Unrecognised argument \'%s\'. Try \'%s\'.',
      'Unrecognized lint message code "%s".' => 'Unrecognised lint message code "%s".',
      'Unrecognized key \'%s\' in argument specification. Recognized keys are: %s.' => 'Unrecognised key \'%s\' in argument specification. Recognized keys are: %s.',
      'The configuration key "%s" is not recognized by arc. It may be misspelled or out of date.' => 'The configuration key "%s" is not recognised by arc. It may be misspelled or out of date.',
      'Configuration option ("%s") is unrecognized. You can only read recognized configuration options.' => 'Configuration option ("%s") is unrecognised. You can only read recognized configuration options.',
      'Unrecognized lint message code: "%s"' => 'Unrecognised lint message code: "%s"',
      'Unrecognized lint message code "%s". Expected a valid JSHint lint code like "%s" or "%s".' => 'Unrecognised lint message code "%s". Expected a valid JSHint lint code like "%s" or "%s".',
      'Configuration option ("%s") specified with "--config" flag is not a recognized option.' => 'Configuration option ("%s") specified with "--config" flag is not a recognised option.',
      'Unrecognized item status \'%s\'.' => 'Unrecognised item status \'%s\'.',
      'Normalized SVN path for "%s".' => 'Normalised SVN path for "%s".',
      'Failed to unserialize object: %s' => 'Failed to unserialise object: %s',
      'PyLint is a Python source code analyzer which looks for programming errors, helps enforcing a coding standard and sniffs for some code smells.' => 'PyLint is a Python source code analyser which looks for programming errors, helps enforcing a coding standard and sniffs for some code smells.',
      'Normalized Git path for "%s".' => 'Normalised Git path for "%s".',
      'Open this page in your browser and log in if necessary:' => 'Ouvrez cette page dans votre navigateur et connectez-vous à Phabricator si nécessaire :',
      'The format of user symbol "%s" is unrecognized. Expected a username like "alice" or "@alice", or a user PHID, or a user ID, or a special function like "viewer()".' => 'The format of user symbol "%s" is unrecognised. Expected a username like "alice" or "@alice", or a user PHID, or a user ID, or a special function like "viewer()".',
      'The format of symbol "%s" is unrecognized. Expected a monogram like "X123", or an ID like "123", or a PHID.' => 'The format of symbol "%s" is unrecognised. Expected a monogram like "X123", or an ID like "123", or a PHID.',
      'Unrecognized lint message code "%s". Expected a valid cpplint lint code like "%s" or "%s".' => 'Unrecognised lint message code "%s". Expected a valid cpplint lint code like "%s" or "%s".',
      'Unrecognized lint message code "%s". Expected a valid PEP8 lint code like "%s" or "%s".' => 'Unrecognised lint message code "%s". Expected a valid PEP8 lint code like "%s" or "%s".',
      'Unrecognized lint message code "%s". Expected a valid flake8 lint code like "%s", or "%s", or "%s", or "%s".' => 'Unrecognised lint message code "%s". Expected a valid flake8 lint code like "%s", or "%s", or "%s", or "%s".',
      'PHP_CodeSniffer tokenizes PHP, JavaScript and CSS files and detects violations of a defined set of coding standards.' => 'PHP_CodeSniffer tokenises PHP, JavaScript and CSS files and detects violations of a defined set of coding standards.',
      'Amend the working copy, synchronizing the local commit message.' => 'Amend the working copy, synchronising the local commit message.',
      'Unrecognized lint message code "%s". Expected a valid Pylint lint code like "%s", or "%s", or "%s".' => 'Unrecognised lint message code "%s". Expected a valid Pylint lint code like "%s", or "%s", or "%s".',
      'Duplicate key in array initializer. PHP will ignore all but the last entry.' => 'Duplicate key in array initialiser. PHP will ignore all but the last entry.',
      'Normalized domain for "%s".' => 'Normalised domain for "%s".',
      'Empty arrays should serialize as `%s`, not `%s`.' => 'Empty arrays should serialise as `%s`, not `%s`.',
      'Synchronizing "%s" from Perforce...' => 'Synchronising "%s" from Perforce...',
      'Amend the working copy, synchronizing the local commit message from
    Differential.
    Supported in Mercurial 2.2 and newer.' => 'Amend the working copy, synchronising the local commit message from
    Differential.
    Supported in Mercurial 2.2 and newer.',
      'RuboCop is a Ruby static code analyzer, based on the community Ruby style guide.' => 'RuboCop is a Ruby static code analyser, based on the community Ruby style guide.',
      'Ignoring unrecognized configuration option ("%s") from source: %s.' => 'Ignoring unrecognised configuration option ("%s") from source: %s.',
      'Signal router has not been initialized!' => 'Signal router has not been initialised!',
      'Serialization of PHP-object JSON values.' => 'Serialisation of PHP-object JSON values.',
    );
  }

}
