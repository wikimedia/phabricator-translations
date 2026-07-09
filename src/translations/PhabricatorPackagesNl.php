<?php

final class PhabricatorPackagesNl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'nl';
  }

  protected function getTranslations() {
    return array(
  'Once a publisher is created, its key can not be changed.' => 'Zodra een uitgever is aangemaakt, kan de sleutel niet meer worden gewijzigd.',
  'No publishers found.' => 'Geen uitgevers gevonden.',
  'Package name "%s" is not valid: package names must not be more than %s characters long.' => array(
    
    array(
      'Pakketnaam "%s" is onjuist: pakketnamen mogen niet langer zijn dan %s teken.',
      'Pakketnaam "%s" is onjuist: pakketnamen mogen niet langer zijn dan %s tekens.',
    ),
  ),
  'Package Key' => 'Pakketsleutel',
  'Publishers' => 'Uitgevers',
  'Package key "%s" is not valid: package keys may only contain lowercase latin letters.' => 'Pakketsleutel "%s" is onjuist: pakketsleutels mogen alleen kleine Latijnse letters bevatten.',
  'Package Packages' => 'Pakketpakketten',
  'Apply transactions to create a new publisher or edit an existing one.' => 'Transacties toepassen om een nieuwe uitgever aan te maken of een bestaande te bewerken.',
  'Package Publisher' => 'Pakketuitgever',
  'Read information about versions.' => 'Informatie over versies lezen.',
  '%s changed the name of this version from %s to %s.' => '%s heeft de naam van deze versie gewijzigd van %s naar %s.',
  'Can Create Publishers' => 'Kan uitgevers aanmaken',
  'Default Publisher Edit Policy' => 'Standaard bewerkingsbeleid voor uitgevers',
  '%s created this package.' => '%s heeft dit pakket aangemaakt.',
  'Browse Package Publishers' => 'Pakketuitgevers bekijken',
  'Publisher name "%s" is not valid: publisher names are required.' => 'Uitgeversnaam "%s" is onjuist: uitgeversnamen zijn verplicht.',
  'Version name "%s" is not valid: version names are required.' => 'Versienaam "%s" is onjuist: versienamen zijn verplicht.',
  'Edit Version' => 'Versie bewerken',
  'Edit Package Publisher Configurations' => 'Pakketuitgeverconfiguraties bewerken',
  'Search for versions by package.' => 'Versies zoeken op pakket.',
  'Edit Package Version Configurations' => 'Pakketversieconfiguraties bewerken',
  'The package key "%s" is already in use by another package provided by this publisher.' => 'De pakketsleutel "%s" is al in gebruik door een ander pakket van deze uitgever.',
  'Unique key to identify the package.' => 'Unieke sleutel om het pakket te identificeren.',
  'Search for publishers by name substring.' => 'Uitgevers zoeken op deel van de naam.',
  'Publish Software' => 'Software publiceren',
  'Default edit policy for newly created publishers.' => 'Standaard bewerkingsbeleid voor nieuw aangemaakte uitgevers.',
  'All Versions' => 'Alle versies',
  'Create and update software packages.' => 'Softwarepakketten aanmaken en bijwerken.',
  'Version name "%s" is not valid: version names may not start or end with a period or hyphen.' => 'Versienaam "%s" is onjuist: versienamen mogen niet beginnen of eindigen met een punt of koppelteken.',
  'This engine is used to edit Packages versions.' => 'Deze engine wordt gebruikt om pakketversies te bewerken.',
  'Search for packages by name substring.' => 'Pakketten zoeken op deel van de naam.',
  'Publisher key "%s" is not valid: publisher keys must not be more than %s characters long.' => array(
    
    array(
      'Uitgeverssleutel "%s" is onjuist: uitgeverssleutels mogen niet langer zijn dan %s teken.',
      'Uitgeverssleutel "%s" is onjuist: uitgeverssleutels mogen niet langer zijn dan %s tekens.',
    ),
  ),
  'The version "%s" already exists for this package. Each version must have a unique name.' => 'De versie "%s" bestaat al voor dit pakket. Elke versie moet een unieke naam hebben.',
  'You do not have permission to create publishers.' => 'U hebt geen toestemming om uitgevers aan te maken.',
  '%s created this publisher.' => '%s heeft deze uitgever aangemaakt.',
  'This engine is used to edit Packages publishers.' => 'Deze engine wordt gebruikt om pakketuitgevers te bewerken.',
  'Publisher' => 'Uitgever',
  'Publisher "%s" is invalid: the publisher must exist and you must have permission to edit it in order to create a new package.' => 'Uitgever "%s" is onjuist: de uitgever moet bestaan en u moet toestemming hebben om deze te bewerken om een nieuw pakket aan te maken.',
  'The publisher key "%s" is already in use by another publisher.' => 'De uitgeverssleutel "%s" is al in gebruik door een andere uitgever.',
  'Package Publishers' => 'Pakketuitgevers',
  'Name of the publisher.' => 'Naam van de uitgever.',
  'Applications and Extensions' => 'Toepassingen en uitbreidingen',
  'Packages must have a name.' => 'Pakketten moeten een naam hebben.',
  'Edit Version: %s' => 'Versie bewerken: %s',
  'Publisher for this package.' => 'Uitgever voor dit pakket.',
  'Publishers must have a name.' => 'Uitgevers moeten een naam hebben.',
  'Package name "%s" is not valid: package names are required.' => 'Pakketnaam "%s" is onjuist: pakketnamen zijn verplicht.',
  'Package key "%s" is not valid: package keys must not be more than %s characters long.' => array(
    
    array(
      'Pakketsleutel "%s" is onjuist: pakketsleutels mogen niet langer zijn dan %s teken.',
      'Pakketsleutel "%s" is onjuist: pakketsleutels mogen niet langer zijn dan %s tekens.',
    ),
  ),
  'Publisher key "%s" is not valid: publisher keys may only contain lowercase latin letters.' => 'Uitgeverssleutel "%s" is onjuist: uitgeverssleutels mogen alleen kleine Latijnse letters bevatten.',
  'This engine is used to edit Packages packages.' => 'Deze engine wordt gebruikt om pakketten te bewerken.',
  'You must select a package when creating a version' => 'U moet een pakket selecteren bij het aanmaken van een versie',
  'Manage software publishers.' => 'Software-uitgevers beheren.',
  'The unique key of the publisher.' => 'De unieke sleutel van de uitgever.',
  'Create Version' => 'Versie aanmaken',
  'Release and update package versions.' => 'Pakketversies vrijgeven en bijwerken.',
  '%s updated the name for %s from %s to %s.' => '%s heeft de naam van %s bijgewerkt van %s naar %s.',
  'Version name "%s" is not valid: version names must not be more than %s characters long.' => array(
    
    array(
      'Versienaam "%s" is onjuist: versienamen mogen niet langer zijn dan %s teken.',
      'Versienaam "%s" is onjuist: versienamen mogen niet langer zijn dan %s tekens.',
    ),
  ),
  'Unique key to identify the publisher.' => 'Unieke sleutel om de uitgever te identificeren.',
  'Search for versions by name substring.' => 'Versies zoeken op deel van de naam.',
  'Apply transactions to create a new package or edit an existing one.' => 'Transacties toepassen om een nieuw pakket aan te maken of een bestaand pakket te bewerken.',
  'No versions found.' => 'Geen versies gevonden.',
  'Default Package Edit Policy' => 'Standaard bewerkingsbeleid voor pakketten',
  'Package "%s" is invalid: the package must exist and you must have permission to edit it in order to create a new package.' => 'Pakket "%s" is onjuist: het pakket moet bestaan en u moet toestemming hebben om het te bewerken om een nieuw pakket aan te maken.',
  'Versions must have a name.' => 'Versies moeten een naam hebben.',
  'Version name "%s" is not valid: version names may only contain latin letters, digits, periods, and hyphens.' => 'Versienaam "%s" is onjuist: versienamen mogen alleen Latijnse letters, cijfers, punten en koppeltekens bevatten.',
  'Publisher Key' => 'Uitgeverssleutel',
  'Create Publisher' => 'Uitgever aanmaken',
  'Package for this version.' => 'Pakket voor deze versie.',
  'Read information about publishers.' => 'Informatie over uitgevers lezen.',
  'Package key "%s" is not valid: package keys are required.' => 'Pakketsleutel "%s" is onjuist: pakketsleutels zijn verplicht.',
  'Packages Console' => 'Pakkettenconsole',
  'Apply transactions to create a new version or edit an existing one.' => 'Transacties toepassen om een nieuwe versie aan te maken of een bestaande te bewerken.',
  'Once a package is created, its publisher can not be changed.' => 'Zodra een pakket is aangemaakt, kan de uitgever niet meer worden gewijzigd.',
  'Publishers must have a unique publisher key.' => 'Uitgevers moeten een unieke uitgeverssleutel hebben.',
  'Publisher key "%s" is not valid: publisher keys are required.' => 'Uitgeverssleutel "%s" is onjuist: uitgeverssleutels zijn verplicht.',
  'Edit Publisher: %s' => 'Uitgever bewerken: %s',
  'Publisher name "%s" is not valid: publisher names must not be more than %s characters long.' => array(
    
    array(
      'Uitgeversnaam "%s" is onjuist: uitgeversnamen mogen niet langer zijn dan %s teken.',
      'Uitgeversnaam "%s" is onjuist: uitgeversnamen mogen niet langer zijn dan %s tekens.',
    ),
  ),
  'Name of the version.' => 'Naam van de versie.',
  'The name of the version.' => 'De naam van de versie.',
  '%s changed the name of this publisher from %s to %s.' => '%s heeft de naam van deze uitgever gewijzigd van %s naar %s.',
  'Package Versions' => 'Pakketversies',
  'You must select a publisher when creating a package.' => 'U moet een uitgever selecteren bij het aanmaken van een pakket.',
  '%s changed the name of this package from %s to %s.' => '%s heeft de naam van dit pakket gewijzigd van %s naar %s.',
  'All Publishers' => 'Alle uitgevers',
  'Once a package is created, its key can not be changed.' => 'Zodra een pakket is aangemaakt, kan de sleutel niet meer worden gewijzigd.',
  'Edit Package Package Configurations' => 'Pakketconfiguraties bewerken',
  'Default Package View Policy' => 'Standaard weergavebeleid voor pakketten',
  '%s created this version.' => '%s heeft deze versie aangemaakt.',
  'Search for packages by publisher.' => 'Pakketten zoeken op uitgever.',
  'Once a version is created, its name can not be changed.' => 'Zodra een versie is aangemaakt, kan de naam niet meer worden gewijzigd.',
  'Edit Publisher' => 'Uitgever bewerken',
  'The name of the publisher.' => 'De naam van de uitgever.',
  'Once a version is created, its package can not be changed.' => 'Zodra een versie is aangemaakt, kan het pakket niet meer worden gewijzigd.',
  'The unique key of the package.' => 'De unieke sleutel van het pakket.',
  'Read information about packages.' => 'Informatie over pakketten lezen.',
  'Each package provided by a publisher must have a unique package key.' => 'Elk pakket van een uitgever moet een unieke pakketsleutel hebben.',
  'Type a publisher name...' => 'Voer een uitgeversnaam in...',
);
  }

}
