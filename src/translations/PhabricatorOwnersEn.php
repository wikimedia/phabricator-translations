<?php

final class PhabricatorOwnersEn
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'en';
  }

  protected function getTranslations() {
    return array(
      '"" (empty string)' => '"" (empty string)',
      'Configure Owners Package Forms' => 'Configure Owners Package Forms',
      'Package name is required.' => 'Package name is required.',
      'Create New Package' => 'Create New Package',
      'Tales of adventure for this package.' => 'Tales of adventure for this package.',
      'Search for active or archived packages.' => 'Search for active or archived packages.',
      'Change package authority rules.' => 'Change package authority rules.',
      'Automatically trigger audits for commits affecting files in this package.' => 'Automatically trigger audits for commits affecting files in this package.',
      'Include' => 'Include',
      'Path Exists in Repository' => 'Path Exists in Repository',
      'Included Paths' => 'Included Paths',
      'Audit Unreviewed Commits and Commits With No Owner Involvement' => 'Audit Unreviewed Commits and Commits With No Owner Involvement',
      'No exclusion value for path "%s"!' => 'No exclusion value for path "%s"!',
      'Search for packages by name substrings.' => 'Search for packages by name substrings.',
      'Authority setting information.' => 'Authority setting information.',
      'Changeset attribute "%s" is not valid. Valid changeset attributes are: %s.' => 'Changeset attribute "%s" is not valid. Valid changeset attributes are: %s.',
      'Owners Packages' => 'Owners Packages',
      'Select and reorder package fields.' => 'Select and reorder package fields.',
      'Path specification must be a list of paths.' => 'Path specification must be a list of paths.',
      'Validating...' => 'Validating...',
      '%s changed %s package owner(s), added %s: %s; removed %s: %s.' => '%s changed %s package owner(s), added %s: %s; removed %s: %s.',
      '%s updated paths for this package.' => '%s updated paths for this package.',
      'Auto Review' => 'Auto Review',
      '%s adjusted package authority rules from %s to %s.' => '%s adjusted package authority rules from %s to %s.',
      'Packages: Invalid Owner' => 'Packages: Invalid Owner',
      'Auto review information.' => 'Auto review information.',
      'Group sections of a codebase into packages for re-use in other applications, like Herald rules.' => 'Group sections of a codebase into packages for re-use in other applications, like Herald rules.',
      'Path Not Found On Default Branch' => 'Path Not Found On Default Branch',
      'Affected By Herald Rules' => 'Affected By Herald Rules',
      'Users and projects which own the package.' => 'Users and projects which own the package.',
      'Subscribe to Changes With Non-Owner Author' => 'Subscribe to Changes With Non-Owner Author',
      'Specify the files and directories which comprise this package.' => 'Specify the files and directories which comprise this package.',
      'Packages: %s' => 'Packages: %s',
      'owner' => 'owner',
      'The package description.' => 'The package description.',
      'Strong (Package Owns Paths)' => 'Strong (Package Owns Paths)',
      'Review Changes With Non-Owner Author' => 'Review Changes With Non-Owner Author',
      '%s renamed this package from %s to %s.' => '%s renamed this package from %s to %s.',
      'Audit Unreviewed Commits' => 'Audit Unreviewed Commits',
      'Type a package name or function...' => 'Type a package name or function...',
      'Save Paths' => 'Save Paths',
      'List of dictionaries, each describing a path.' => 'List of dictionaries, each describing a path.',
      'Edit Paths' => 'Edit Paths',
      '%s changed %s ignored attribute(s), added %s: %s.' => '%s changed %s ignored attribute(s), added %s: %s.',
      'Owners User Guide' => 'Owners User Guide',
      'Path specification list references repository PHID "%s", but that is not a valid, visible repository.' => 'Path specification list references repository PHID "%s", but that is not a valid, visible repository.',
      'Package auditing value "%s" is not supported. Supported options are: %s. Deprecated options are: %s.' => 'Package auditing value "%s" is not supported. Supported options are: %s. Deprecated options are: %s.',
      'Type packages(<user>) or packages(<project>)...' => 'Type packages(<user>) or packages(<project>)...',
      'Dominion' => 'Dominion',
      'Read information about Owners packages.' => 'Read information about Owners packages.',
      'Dominion setting "%s" is not valid. Valid settings are: %s.' => 'Dominion setting "%s" is not valid. Valid settings are: %s.',
      'Configure Owners.' => 'Configure Owners.',
      'Ignored attribute information.' => 'Ignored attribute information.',
      'Weak' => 'Weak',
      'Strong (Control All Paths)' => 'Strong (Control All Paths)',
      'Custom Owners fields.' => 'Custom Owners fields.',
      'Own Source Code' => 'Own Source Code',
      'Search for packages with specific owners.' => 'Search for packages with specific owners.',
      'Authority' => 'Authority',
      'Package names may not contain commas (",") or exclamation marks ("!"). These characters are ambiguous when package names are parsed from the command line.' => 'Package names may not contain commas (",") or exclamation marks ("!"). These characters are ambiguous when package names are parsed from the command line.',
      '%s changed %s ignored attribute(s), added %s: %s; removed %s: %s.' => '%s changed %s ignored attribute(s), added %s: %s; removed %s: %s.',
      'Ignore generated files (review only).' => 'Ignore generated files (review only).',
      'Automatically trigger reviews for commits affecting files in this package.' => 'Automatically trigger reviews for commits affecting files in this package.',
      'Dominion setting information.' => 'Dominion setting information.',
      'Owners of a package may always view it.' => 'Owners of a package may always view it.',
      'Weak (Package Watches Paths)' => 'Weak (Package Watches Paths)',
      'No commits in this package.' => 'No commits in this package.',
      'Review All Changes' => 'Review All Changes',
      'Archive or enable the package.' => 'Archive or enable the package.',
      'Package Lore' => 'Package Lore',
      'Review All Changes (Blocking)' => 'Review All Changes (Blocking)',
      'No active Herald rules add this package as an auditor, reviewer, or subscriber.' => 'No active Herald rules add this package as an auditor, reviewer, or subscriber.',
      'Owners Package' => 'Owners Package',
      'Browse Packages by Owner' => 'Browse Packages by Owner',
      'Change package dominion rules.' => 'Change package dominion rules.',
      'No Autoreview' => 'No Autoreview',
      'Create a Package' => 'Create a Package',
      '[Package]' => '[Package]',
      'Search for packages by included repositories.' => 'Search for packages by included repositories.',
      'Audit All Commits' => 'Audit All Commits',
      'Audit Commits With No Owner Involvement' => 'Audit Commits With No Owner Involvement',
      '%s adjusted autoreview from %s to %s.' => '%s adjusted autoreview from %s to %s.',
      'Owned' => 'Owned',
      'No repository PHID for path "%s"!' => 'No repository PHID for path "%s"!',
      '%s archived this package.' => '%s archived this package.',
      'Ignored Attributes' => 'Ignored Attributes',
      'Path specification list contains invalid value in key "%s": %s.' => 'Path specification list contains invalid value in key "%s": %s.',
      'Review Changes With Non-Owner Author (Blocking)' => 'Review Changes With Non-Owner Author (Blocking)',
      '%s added %s owner(s): %s.' => '%s added %s owner(s): %s.',
      '%s changed %s ignored attribute(s), removed %s: %s.' => '%s changed %s ignored attribute(s), removed %s: %s.',
      'Find results in any of an owner\'s packages.' => 'Find results in any of an owner\'s packages.',
      'Get the paths for each package.' => 'Get the paths for each package.',
      'Search for packages affecting specific paths.' => 'Search for packages affecting specific paths.',
      'Subscribe to All Changes' => 'Subscribe to All Changes',
      'Human-readable description of the package.' => 'Human-readable description of the package.',
      'Auditing' => 'Auditing',
      'This package does not contain any paths yet. Use "Edit Paths" to add some.' => 'This package does not contain any paths yet. Use "Edit Paths" to add some.',
      'Overwrite existing package paths with new paths.' => 'Overwrite existing package paths with new paths.',
      'Strong' => 'Strong',
      'No Auditing' => 'No Auditing',
      'Map of custom fields for Owners packages. For details on adding custom fields to Owners, see "Configuring Custom Fields" in the documentation.' => 'Map of custom fields for Owners packages. For details on adding custom fields to Owners, see "Configuring Custom Fields" in the documentation.',
      'Packages: ...' => 'Packages: ...',
      'Authority setting "%s" is not valid. Valid settings are: %s.' => 'Authority setting "%s" is not valid. Valid settings are: %s.',
      'Activate Package' => 'Activate Package',
      'This package will become active again.' => 'This package will become active again.',
      '%s updated the description for this package.' => '%s updated the description for this package.',
      'Adopt today!' => 'Adopt today!',
      'Ignore paths with any of these attributes.' => 'Ignore paths with any of these attributes.',
      'This function allows you to find results associated with any of the packages a specified user or project is an owner of. For example, this will find results associated with all of the projects `%s` owns:
    %s
    ' => 'This function allows you to find results associated with any of the packages a specified user or project is an owner of. For example, this will find results associated with all of the projects `%s` owns:
    %s
    ',
      '%s activated this package.' => '%s activated this package.',
      'List of package owners.' => 'List of package owners.',
      'Active or archived status of the package.' => 'Active or archived status of the package.',
      'Apply transactions to create a new Owners package or edit an existing one.' => 'Apply transactions to create a new Owners package or edit an existing one.',
      'This package has no open problem commits.' => 'This package has no open problem commits.',
      'PACKAGE DETAIL' => 'PACKAGE DETAIL',
      'Configure forms for creating and editing packages in Owners.' => 'Configure forms for creating and editing packages in Owners.',
      '%s removed %s owner(s): %s.' => '%s removed %s owner(s): %s.',
      '%s adjusted package dominion rules from %s to %s.' => '%s adjusted package dominion rules from %s to %s.',
      'CHANGES TO PACKAGE DESCRIPTION' => 'CHANGES TO PACKAGE DESCRIPTION',
      'Autoreview setting "%s" is not valid. Valid settings are: %s.' => 'Autoreview setting "%s" is not valid. Valid settings are: %s.',
      'Edit Paths: %s' => 'Edit Paths: %s',
      'Package %d' => 'Package %s',
      'Add New Path' => 'Add New Path',
      'When updating the paths for a package, pass a list of dictionaries like
    this as the `value` for the transaction:
    ```lang=json, name="Example Paths Value"
    [
      {
        "repositoryPHID": "PHID-REPO-1234",
        "path": "/path/to/directory/",
        "excluded": false
      },
      {
        "repositoryPHID": "PHID-REPO-1234",
        "path": "/another/example/path/",
        "excluded": false
      }
    ]
    ```
    This transaction will set the paths to the list you provide, overwriting any
    previous paths.
    Generally, you will call `owners.search` first to get a list of current paths
    (which are provided in the same format), make changes, then update them by
    applying a transaction of this type.' => 'When updating the paths for a package, pass a list of dictionaries like
    this as the `value` for the transaction:
    ```lang=json, name="Example Paths Value"
    [
      {
        "repositoryPHID": "PHID-REPO-1234",
        "path": "/path/to/directory/",
        "excluded": false
      },
      {
        "repositoryPHID": "PHID-REPO-1234",
        "path": "/another/example/path/",
        "excluded": false
      }
    ]
    ```
    This transaction will set the paths to the list you provide, overwriting any
    previous paths.
    Generally, you will call `owners.search` first to get a list of current paths
    (which are provided in the same format), make changes, then update them by
    applying a transaction of this type.',
      '%s changed the audit rule for this package from %s to %s.' => '%s changed the audit rule for this package from %s to %s.',
      'Active Packages' => 'Active Packages',
      'Exclude' => 'Exclude',
      'Archive Package' => 'Archive Package',
      'Weak (Control Unowned Paths)' => 'Weak (Control Unowned Paths)',
      'Auto audit information.' => 'Auto audit information.',
      'This package will be marked as archived.' => 'This package will be marked as archived.',
    );
  }

}
