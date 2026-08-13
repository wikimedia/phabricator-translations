<?php

final class PhabricatorOwnersSk
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sk';
  }

  protected function getTranslations() {
    return array(
  '"" (empty string)' => '„“ (prázdny reťazec)',
  'Configure Owners Package Forms' => 'Konfigurovať formuláre balíkov Owners',
  'Package name is required.' => 'Názov balíka je povinný.',
  'Create New Package' => 'Vytvoriť nový balík',
  'Tales of adventure for this package.' => 'Dobrodružné príbehy tohto balíka.',
  'Search for active or archived packages.' => 'Vyhľadať aktívne alebo archivované balíky.',
  'Change package authority rules.' => 'Zmeniť pravidlá právomoci balíka.',
  'Automatically trigger audits for commits affecting files in this package.' => 'Automaticky spúšťať audity pre commity ovplyvňujúce súbory v tomto balíku.',
  'Include' => 'Zahrnúť',
  'Path Exists in Repository' => 'Cesta existuje v repozitári',
  'Included Paths' => 'Zahrnuté cesty',
  'Audit Unreviewed Commits and Commits With No Owner Involvement' => 'Auditovať neposúdené commity a commity bez účasti vlastníka',
  'No exclusion value for path "%s"!' => 'Pre cestu „%s“ chýba hodnota vylúčenia!',
  'Search for packages by name substrings.' => 'Vyhľadať balíky podľa podreťazcov názvu.',
  'Authority setting information.' => 'Informácie o nastavení právomoci.',
  'Changeset attribute "%s" is not valid. Valid changeset attributes are: %s.' => 'Atribút zmenovej sady „%s“ nie je platný. Platné atribúty zmenovej sady sú: %s.',
  'Owners Packages' => 'Balíky Owners',
  'Select and reorder package fields.' => 'Vybrať a preusporiadať polia balíka.',
  'Path specification must be a list of paths.' => 'Špecifikácia ciest musí byť zoznam ciest.',
  'Validating...' => 'Prebieha overovanie...',
  '%s changed %s package owner(s), added %s: %s; removed %s: %s.' => '%s zmenil vlastníkov balíka, pridaní: %4$s; odstránení: %6$s.',
  '%s updated paths for this package.' => '%s aktualizoval cesty tohto balíka.',
  'Auto Review' => 'Automatické posúdenie',
  '%s adjusted package authority rules from %s to %s.' => '%s upravil pravidlá právomoci balíka z %s na %s.',
  'Packages: Invalid Owner' => 'Balíky: neplatný vlastník',
  'Auto review information.' => 'Informácie o automatickom posúdení.',
  'Group sections of a codebase into packages for re-use in other applications, like Herald rules.' => 'Zoskupujte časti kódovej základne do balíkov na opätovné použitie v iných aplikáciách, napríklad v pravidlách Herald.',
  'Path Not Found On Default Branch' => 'Cesta sa v predvolenej vetve nenašla',
  'Affected By Herald Rules' => 'Ovplyvnené pravidlami Herald',
  'Users and projects which own the package.' => 'Používatelia a projekty, ktoré balík vlastnia.',
  'Failed to load a random repository. You may need to generate more test repositories first.' => 'Nepodarilo sa načítať náhodný repozitár. Možno musíte najprv vygenerovať viac testovacích repozitárov.',
  'Subscribe to Changes With Non-Owner Author' => 'Odoberať zmeny, ktorých autorom nie je vlastník',
  'Specify the files and directories which comprise this package.' => 'Zadajte súbory a adresáre, z ktorých sa tento balík skladá.',
  'Packages: %s' => 'Balíky: %s',
  'owner' => 'vlastník',
  'The package description.' => 'Popis balíka.',
  'Strong (Package Owns Paths)' => 'Silný (balík vlastní cesty)',
  'Review Changes With Non-Owner Author' => 'Posudzovať zmeny, ktorých autorom nie je vlastník',
  '%s renamed this package from %s to %s.' => '%s premenoval tento balík z %s na %s.',
  'Audit Unreviewed Commits' => 'Auditovať neposúdené commity',
  'Type a package name or function...' => 'Zadajte názov balíka alebo funkciu...',
  'Save Paths' => 'Uložiť cesty',
  'List of dictionaries, each describing a path.' => 'Zoznam slovníkov, z ktorých každý opisuje jednu cestu.',
  'Edit Paths' => 'Upraviť cesty',
  '%s changed %s ignored attribute(s), added %s: %s.' => '%s zmenil ignorované atribúty, pridané: %4$s.',
  'Owners User Guide' => 'Používateľská príručka k Owners',
  'Path specification list references repository PHID "%s", but that is not a valid, visible repository.' => 'Zoznam špecifikácií ciest odkazuje na PHID repozitára „%s“, ten však nie je platný ani viditeľný repozitár.',
  'Package auditing value "%s" is not supported. Supported options are: %s. Deprecated options are: %s.' => 'Hodnota auditovania balíka „%s“ nie je podporovaná. Podporované možnosti sú: %s. Zastarané možnosti sú: %s.',
  'Type packages(<user>) or packages(<project>)...' => 'Zadajte packages(<používateľ>) alebo packages(<projekt>)...',
  'Dominion' => 'Dominion',
  'Read information about Owners packages.' => 'Čítať informácie o balíkoch Owners.',
  'Dominion setting "%s" is not valid. Valid settings are: %s.' => 'Nastavenie Dominion „%s“ nie je platné. Platné nastavenia sú: %s.',
  'Configure Owners.' => 'Konfigurovať Owners.',
  'Ignored attribute information.' => 'Informácie o ignorovaných atribútoch.',
  'Weak' => 'Slabý',
  'Strong (Control All Paths)' => 'Silný (riadi všetky cesty)',
  'Custom Owners fields.' => 'Vlastné polia Owners.',
  'Own Source Code' => 'Vlastnite zdrojový kód',
  'Search for packages with specific owners.' => 'Vyhľadať balíky s konkrétnymi vlastníkmi.',
  'Authority' => 'Právomoc',
  'Package names may not contain commas (",") or exclamation marks ("!"). These characters are ambiguous when package names are parsed from the command line.' => 'Názvy balíkov nesmú obsahovať čiarky („,“) ani výkričníky („!“). Tieto znaky sú nejednoznačné pri spracovaní názvov balíkov z príkazového riadka.',
  '%s changed %s ignored attribute(s), added %s: %s; removed %s: %s.' => '%s zmenil ignorované atribúty, pridané: %4$s; odstránené: %6$s.',
  'Ignore generated files (review only).' => 'Ignorovať vygenerované súbory (iba posúdenie).',
  'Automatically trigger reviews for commits affecting files in this package.' => 'Automaticky spúšťať posúdenia pre commity ovplyvňujúce súbory v tomto balíku.',
  'Dominion setting information.' => 'Informácie o nastavení Dominion.',
  'Owners of a package may always view it.' => 'Vlastníci balíka ho môžu vždy zobraziť.',
  'Weak (Package Watches Paths)' => 'Slabý (balík sleduje cesty)',
  'No commits in this package.' => 'V tomto balíku nie sú žiadne commity.',
  'Review All Changes' => 'Posudzovať všetky zmeny',
  'Archive or enable the package.' => 'Archivovať alebo povoliť balík.',
  'Package Lore' => 'Príbeh balíka',
  'Review All Changes (Blocking)' => 'Posudzovať všetky zmeny (blokujúce)',
  'No active Herald rules add this package as an auditor, reviewer, or subscriber.' => 'Žiadne aktívne pravidlá Herald nepridávajú tento balík ako audítora, posudzovateľa ani odberateľa.',
  'Owners Package' => 'Balík Owners',
  'Browse Packages by Owner' => 'Prehliadať balíky podľa vlastníka',
  'Change package dominion rules.' => 'Zmeniť pravidlá Dominion balíka.',
  'No Autoreview' => 'Bez automatického posúdenia',
  'Create a Package' => 'Vytvoriť balík',
  '[Package]' => '[Package]',
  'Search for packages by included repositories.' => 'Vyhľadať balíky podľa zahrnutých repozitárov.',
  'Audit All Commits' => 'Auditovať všetky commity',
  'Audit Commits With No Owner Involvement' => 'Auditovať commity bez účasti vlastníka',
  '%s adjusted autoreview from %s to %s.' => '%s upravil automatické posúdenie z %s na %s.',
  'Owned' => 'Vlastnené',
  'No repository PHID for path "%s"!' => 'Pre cestu „%s“ chýba PHID repozitára!',
  '%s archived this package.' => '%s archivoval tento balík.',
  'Ignored Attributes' => 'Ignorované atribúty',
  'Path specification list contains invalid value in key "%s": %s.' => 'Zoznam špecifikácií ciest obsahuje neplatnú hodnotu v kľúči „%s“: %s.',
  'Review Changes With Non-Owner Author (Blocking)' => 'Posudzovať zmeny, ktorých autorom nie je vlastník (blokujúce)',
  '%s added %s owner(s): %s.' => array(
    
    array(
      '%s pridal vlastníka: %3$s.',
      '%s pridal vlastníkov: %3$s.',
    ),
  ),
  '%s changed %s ignored attribute(s), removed %s: %s.' => '%s zmenil ignorované atribúty, odstránené: %4$s.',
  'Find results in any of an owner\'s packages.' => 'Nájsť výsledky v ktoromkoľvek z balíkov vlastníka.',
  'Get the paths for each package.' => 'Získať cesty každého balíka.',
  'Search for packages affecting specific paths.' => 'Vyhľadať balíky ovplyvňujúce konkrétne cesty.',
  'Subscribe to All Changes' => 'Odoberať všetky zmeny',
  'Human-readable description of the package.' => 'Ľudsky čitateľný popis balíka.',
  'Auditing' => 'Auditovanie',
  'This package does not contain any paths yet. Use "Edit Paths" to add some.' => 'Tento balík zatiaľ neobsahuje žiadne cesty. Pridajte ich pomocou položky „Upraviť cesty“.',
  'Overwrite existing package paths with new paths.' => 'Prepísať existujúce cesty balíka novými cestami.',
  'Strong' => 'Silný',
  'No Auditing' => 'Bez auditovania',
  'Map of custom fields for Owners packages. For details on adding custom fields to Owners, see "Configuring Custom Fields" in the documentation.' => 'Mapa vlastných polí pre balíky Owners. Podrobnosti o pridávaní vlastných polí do Owners nájdete v časti „Configuring Custom Fields“ v dokumentácii.',
  'Packages: ...' => 'Balíky: ...',
  'Authority setting "%s" is not valid. Valid settings are: %s.' => 'Nastavenie právomoci „%s“ nie je platné. Platné nastavenia sú: %s.',
  'Activate Package' => 'Aktivovať balík',
  'This package will become active again.' => 'Tento balík bude opäť aktívny.',
  '%s updated the description for this package.' => '%s aktualizoval popis tohto balíka.',
  'Adopt today!' => 'Adoptujte si ho ešte dnes!',
  'Ignore paths with any of these attributes.' => 'Ignorovať cesty s ktorýmkoľvek z týchto atribútov.',
  'This function allows you to find results associated with any of the packages a specified user or project is an owner of. For example, this will find results associated with all of the projects `%s` owns:

%s

' => 'Táto funkcia vám umožňuje nájsť výsledky spojené s ktorýmkoľvek z balíkov, ktoré vlastní zadaný používateľ alebo projekt. Napríklad takto nájdete výsledky spojené so všetkými projektmi, ktoré vlastní `%s`:

%s',
  '%s activated this package.' => '%s aktivoval tento balík.',
  'List of package owners.' => 'Zoznam vlastníkov balíka.',
  'Active or archived status of the package.' => 'Aktívny alebo archivovaný stav balíka.',
  'Apply transactions to create a new Owners package or edit an existing one.' => 'Použiť transakcie na vytvorenie nového balíka Owners alebo úpravu existujúceho.',
  'This package has no open problem commits.' => 'Tento balík nemá žiadne otvorené problémové commity.',
  'PACKAGE DETAIL' => 'PODROBNOSTI BALÍKA',
  'Configure forms for creating and editing packages in Owners.' => 'Konfigurovať formuláre na vytváranie a úpravu balíkov v Owners.',
  '%s removed %s owner(s): %s.' => array(
    
    array(
      '%s odstránil vlastníka: %3$s.',
      '%s odstránil vlastníkov: %3$s.',
    ),
  ),
  '%s adjusted package dominion rules from %s to %s.' => '%s upravil pravidlá Dominion balíka z %s na %s.',
  'CHANGES TO PACKAGE DESCRIPTION' => 'ZMENY POPISU BALÍKA',
  'Autoreview setting "%s" is not valid. Valid settings are: %s.' => 'Nastavenie automatického posúdenia „%s“ nie je platné. Platné nastavenia sú: %s.',
  'Edit Paths: %s' => 'Upraviť cesty: %s',
  'Package %d' => 'Balík %d',
  'Add New Path' => 'Pridať novú cestu',
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
applying a transaction of this type.' => 'Pri aktualizácii ciest balíka odovzdajte ako `value` transakcie zoznam
slovníkov v tomto tvare:

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

Táto transakcia nastaví cesty na zoznam, ktorý zadáte, a prepíše všetky
predchádzajúce cesty.

Zvyčajne najprv zavoláte `owners.search`, aby ste získali zoznam aktuálnych ciest
(poskytnutých v rovnakom formáte), vykonáte zmeny a potom ich aktualizujete
použitím transakcie tohto typu.',
  '%s changed the audit rule for this package from %s to %s.' => '%s zmenil pravidlo auditu tohto balíka z %s na %s.',
  'Active Packages' => 'Aktívne balíky',
  'Exclude' => 'Vylúčiť',
  'Archive Package' => 'Archivovať balík',
  'Weak (Control Unowned Paths)' => 'Slabý (riadi nevlastnené cesty)',
  'Auto audit information.' => 'Informácie o automatickom audite.',
  'This package will be marked as archived.' => 'Tento balík bude označený ako archivovaný.',
);
  }

}
