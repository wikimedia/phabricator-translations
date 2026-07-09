<?php

final class PhabricatorOwnersNl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'nl';
  }

  protected function getTranslations() {
    return array(
  '"" (empty string)' => '"" (lege tekenreeks)',
  'Configure Owners Package Forms' => 'Owners-pakketformulieren configureren',
  'Package name is required.' => 'Pakketnaam is vereist.',
  'Create New Package' => 'Nieuw pakket aanmaken',
  'Tales of adventure for this package.' => 'Avonturenverhalen voor dit pakket.',
  'Search for active or archived packages.' => 'Zoek naar actieve of gearchiveerde pakketten.',
  'Change package authority rules.' => 'Pakketautoriteitsregels wijzigen.',
  'Automatically trigger audits for commits affecting files in this package.' => 'Automatisch audits starten voor commits die bestanden in dit pakket beïnvloeden.',
  'Include' => 'Opnemen',
  'Path Exists in Repository' => 'Pad bestaat in repository',
  'Included Paths' => 'Opgenomen paden',
  'Audit Unreviewed Commits and Commits With No Owner Involvement' => 'Niet-beoordeelde commits en commits zonder eigenaarsbetrokkenheid auditen',
  'No exclusion value for path "%s"!' => 'Geen uitsluitingswaarde voor pad "%s"!',
  'Search for packages by name substrings.' => 'Zoek naar pakketten op basis van een deel van de naam.',
  'Authority setting information.' => 'Informatie over autoriteitsinstellingen.',
  'Changeset attribute "%s" is not valid. Valid changeset attributes are: %s.' => 'Wijzigingssetkenmerk "%s" is niet geldig. Geldige wijzigingssetkenmerken zijn: %s.',
  'Owners Packages' => 'Owners-pakketten',
  'Select and reorder package fields.' => 'Pakketvelden selecteren en herordenen.',
  'Path specification must be a list of paths.' => 'Padspecificatie moet een lijst van paden zijn.',
  'Validating...' => 'Valideren...',
  '%s changed %s package owner(s), added %s: %s; removed %s: %s.' => '%s heeft pakketeigenaren gewijzigd; toegevoegd: %4$s; verwijderd: %6$s.',
  '%s updated paths for this package.' => '%s heeft paden voor dit pakket bijgewerkt.',
  'Auto Review' => 'Automatische beoordeling',
  '%s adjusted package authority rules from %s to %s.' => '%s heeft pakketautoriteitsregels aangepast van %s naar %s.',
  'Packages: Invalid Owner' => 'Pakketten: onjuiste eigenaar',
  'Auto review information.' => 'Gegevens automatisch controleren.',
  'Group sections of a codebase into packages for re-use in other applications, like Herald rules.' => 'Groepeer secties van een codebase in pakketten voor hergebruik in andere toepassingen, zoals Herald-regels.',
  'Path Not Found On Default Branch' => 'Pad niet gevonden op standaard-branch',
  'Affected By Herald Rules' => 'Beïnvloed door Herald-regels',
  'Users and projects which own the package.' => 'Gebruikers en projecten die eigenaar zijn van het pakket.',
  'Failed to load a random repository. You may need to generate more test repositories first.' => 'Kan geen willekeurige repository laden. Mogelijk moet u eerst meer testrepositories genereren.',
  'Subscribe to Changes With Non-Owner Author' => 'Abonneren op wijzigingen met niet-eigenaar als auteur',
  'Specify the files and directories which comprise this package.' => 'Geef de bestanden en mappen op die dit pakket vormen.',
  'Packages: %s' => 'Pakketten: %s',
  'owner' => 'eigenaar',
  'The package description.' => 'De pakketbeschrijving.',
  'Strong (Package Owns Paths)' => 'Sterk (pakket bezit paden)',
  'Review Changes With Non-Owner Author' => 'Wijzigingen beoordelen met niet-eigenaar als auteur',
  '%s renamed this package from %s to %s.' => '%s heeft dit pakket hernoemd van %s naar %s.',
  'Audit Unreviewed Commits' => 'Niet-beoordeelde commits auditen',
  'Type a package name or function...' => 'Typ een pakketnaam of functie...',
  'Save Paths' => 'Paden opslaan',
  'List of dictionaries, each describing a path.' => 'Lijst van woordenboeken, elk met een padbeschrijving.',
  'Edit Paths' => 'Paden bewerken',
  '%s changed %s ignored attribute(s), added %s: %s.' => '%s heeft genegeerde kenmerken gewijzigd; toegevoegd: %4$s.',
  'Owners User Guide' => 'Owners-gebruikershandleiding',
  'Path specification list references repository PHID "%s", but that is not a valid, visible repository.' => 'Padspecificatielijst verwijst naar repository-PHID "%s", maar dat is geen geldige, zichtbare repository.',
  'Package auditing value "%s" is not supported. Supported options are: %s. Deprecated options are: %s.' => 'Pakketauditwaarde "%s" wordt niet ondersteund. Ondersteunde opties zijn: %s. Verouderde opties zijn: %s.',
  'Type packages(<user>) or packages(<project>)...' => 'Typ packages(<gebruiker>) of packages(<project>)...',
  'Dominion' => 'Domein',
  'Read information about Owners packages.' => 'Lees informatie over Owners-pakketten.',
  'Dominion setting "%s" is not valid. Valid settings are: %s.' => 'Domeininstelling "%s" is niet geldig. Geldige instellingen zijn: %s.',
  'Configure Owners.' => 'Owners configureren.',
  'Ignored attribute information.' => 'Informatie over genegeerde kenmerken.',
  'Weak' => 'Zwak',
  'Strong (Control All Paths)' => 'Sterk (alle paden beheren)',
  'Custom Owners fields.' => 'Aangepaste Owners-velden.',
  'Own Source Code' => 'Broncode beheren',
  'Search for packages with specific owners.' => 'Zoek naar pakketten met specifieke eigenaren.',
  'Authority' => 'Autoriteit',
  'Package names may not contain commas (",") or exclamation marks ("!"). These characters are ambiguous when package names are parsed from the command line.' => 'Pakketnamen mogen geen komma\'s (",") of uitroeptekens ("!") bevatten. Deze tekens zijn dubbelzinnig wanneer pakketnamen vanaf de opdrachtregel worden verwerkt.',
  '%s changed %s ignored attribute(s), added %s: %s; removed %s: %s.' => '%s heeft genegeerde kenmerken gewijzigd; toegevoegd: %4$s; verwijderd: %6$s.',
  'Ignore generated files (review only).' => 'Gegenereerde bestanden negeren (alleen beoordeling).',
  'Automatically trigger reviews for commits affecting files in this package.' => 'Automatisch beoordelingen starten voor commits die bestanden in dit pakket beïnvloeden.',
  'Dominion setting information.' => 'Informatie over domeininstellingen.',
  'Owners of a package may always view it.' => 'Eigenaren van een pakket kunnen het altijd bekijken.',
  'Weak (Package Watches Paths)' => 'Zwak (pakket bewaakt paden)',
  'No commits in this package.' => 'Geen commits in dit pakket.',
  'Review All Changes' => 'Alle wijzigingen controleren',
  'Archive or enable the package.' => 'Het pakket archiveren of inschakelen.',
  'Package Lore' => 'Pakketgeschiedenis',
  'Review All Changes (Blocking)' => 'Alle wijzigingen controleren (blokkeert)',
  'No active Herald rules add this package as an auditor, reviewer, or subscriber.' => 'Geen actieve Herald-regels voegen dit pakket toe als auditor, beoordelaar of abonnee.',
  'Owners Package' => 'Owners-pakket',
  'Browse Packages by Owner' => 'Pakketten doorbladeren op eigenaar',
  'Change package dominion rules.' => 'Pakketdomeinregels wijzigen.',
  'No Autoreview' => 'Geen automatische beoordeling',
  'Create a Package' => 'Een pakket aanmaken',
  '[Package]' => '[Pakket]',
  'Search for packages by included repositories.' => 'Zoek naar pakketten op basis van opgenomen repositories.',
  'Audit All Commits' => 'Alle commits auditen',
  'Audit Commits With No Owner Involvement' => 'Commits zonder eigenaarsbetrokkenheid auditen',
  '%s adjusted autoreview from %s to %s.' => '%s heeft automatische beoordeling aangepast van %s naar %s.',
  'Owned' => 'In eigendom',
  'No repository PHID for path "%s"!' => 'Geen repository-PHID voor pad "%s"!',
  '%s archived this package.' => '%s heeft dit pakket gearchiveerd.',
  'Ignored Attributes' => 'Genegeerde kenmerken',
  'Path specification list contains invalid value in key "%s": %s.' => 'Padspecificatielijst bevat een onjuiste waarde in sleutel "%s": %s.',
  'Review Changes With Non-Owner Author (Blocking)' => 'Wijzigingen beoordelen met niet-eigenaar als auteur (blokkerend)',
  '%s added %s owner(s): %s.' => array(
    
    array(
      '%s heeft een eigenaar toegevoegd: %3$s.',
      '%s heeft eigenaren toegevoegd: %3$s.',
    ),
  ),
  '%s changed %s ignored attribute(s), removed %s: %s.' => '%s heeft genegeerde kenmerken gewijzigd; verwijderd: %4$s.',
  'Find results in any of an owner\'s packages.' => 'Zoek resultaten in een van de pakketten van een eigenaar.',
  'Get the paths for each package.' => 'Haal de paden op voor elk pakket.',
  'Search for packages affecting specific paths.' => 'Zoek naar pakketten die specifieke paden beïnvloeden.',
  'Subscribe to All Changes' => 'Abonneren op alle wijzigingen',
  'Human-readable description of the package.' => 'Leesbare beschrijving van het pakket.',
  'Auditing' => 'Auditing',
  'This package does not contain any paths yet. Use "Edit Paths" to add some.' => 'Dit pakket bevat nog geen paden. Gebruik "Paden bewerken" om er toe te voegen.',
  'Overwrite existing package paths with new paths.' => 'Bestaande pakketpaden overschrijven met nieuwe paden.',
  'Strong' => 'Sterk',
  'No Auditing' => 'Geen auditing',
  'Map of custom fields for Owners packages. For details on adding custom fields to Owners, see "Configuring Custom Fields" in the documentation.' => 'Map van aangepaste velden voor Owners-pakketten. Zie "Configuring Custom Fields" in de documentatie voor details over het toevoegen van aangepaste velden aan Owners.',
  'Packages: ...' => 'Pakketten: ...',
  'Authority setting "%s" is not valid. Valid settings are: %s.' => 'Autoriteitsinstelling "%s" is niet geldig. Geldige instellingen zijn: %s.',
  'Activate Package' => 'Pakket activeren',
  'This package will become active again.' => 'Dit pakket wordt weer actief.',
  '%s updated the description for this package.' => '%s heeft de beschrijving voor dit pakket bijgewerkt.',
  'Adopt today!' => 'Adopteer vandaag!',
  'Ignore paths with any of these attributes.' => 'Paden met een van deze kenmerken negeren.',
  'This function allows you to find results associated with any of the packages a specified user or project is an owner of. For example, this will find results associated with all of the projects `%s` owns:

%s

' => 'Met deze functie kunt u resultaten vinden die gekoppeld zijn aan een van de pakketten waarvan een opgegeven gebruiker of project eigenaar is. Dit vindt bijvoorbeeld resultaten die gekoppeld zijn aan alle projecten waarvan `%s` eigenaar is:

%s

\\',
  '%s activated this package.' => '%s heeft dit pakket geactiveerd.',
  'List of package owners.' => 'Lijst van pakketeigenaren.',
  'Active or archived status of the package.' => 'Actieve of gearchiveerde status van het pakket.',
  'Apply transactions to create a new Owners package or edit an existing one.' => 'Pas transacties toe om een nieuw Owners-pakket aan te maken of een bestaand pakket te bewerken.',
  'This package has no open problem commits.' => 'Dit pakket heeft geen openstaande probleemcommits.',
  'PACKAGE DETAIL' => 'PAKKETDETAILS',
  'Configure forms for creating and editing packages in Owners.' => 'Configureer formulieren voor het aanmaken en bewerken van pakketten in Owners.',
  '%s removed %s owner(s): %s.' => array(
    
    array(
      '%s heeft een eigenaar verwijderd: %3$s.',
      '%s heeft eigenaren verwijderd: %3$s.',
    ),
  ),
  '%s adjusted package dominion rules from %s to %s.' => '%s heeft pakketdomeinregels aangepast van %s naar %s.',
  'CHANGES TO PACKAGE DESCRIPTION' => 'WIJZIGINGEN IN PAKKETBESCHRIJVING',
  'Autoreview setting "%s" is not valid. Valid settings are: %s.' => 'Automatische beoordelingsinstelling "%s" is niet geldig. Geldige instellingen zijn: %s.',
  'Edit Paths: %s' => 'Paden bewerken: %s',
  'Package %d' => 'Pakket %d',
  'Add New Path' => 'Nieuw pad toevoegen',
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
applying a transaction of this type.' => 'Bij het bijwerken van de paden voor een pakket, geef een lijst van woordenboeken zoals
dit door als de `value` voor de transactie:

```lang=json, name="Voorbeeld padenwaarde"
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

Deze transactie stelt de paden in op de lijst die u opgeeft, waarbij eerdere
paden worden overschreven.

Over het algemeen roept u eerst `owners.search` aan om een lijst van huidige paden
op te halen (die in hetzelfde formaat worden aangeboden), wijzigingen aan te brengen
en ze vervolgens bij te werken door een transactie van dit type toe te passen.',
  '%s changed the audit rule for this package from %s to %s.' => '%s heeft de auditregel voor dit pakket gewijzigd van %s naar %s.',
  'Active Packages' => 'Actieve pakketten',
  'Exclude' => 'Uitsluiten',
  'Archive Package' => 'Pakket archiveren',
  'Weak (Control Unowned Paths)' => 'Zwak (paden zonder eigenaar beheren)',
  'Auto audit information.' => 'Informatie over automatische auditing.',
  'This package will be marked as archived.' => 'Dit pakket wordt als gearchiveerd gemarkeerd.',
);
  }

}
