<?php

final class PhabricatorPhidSk
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sk';
  }

  protected function getTranslations() {
    return array(
  'Retrieve information about an arbitrary PHID.' => 'Získať informácie o ľubovoľnom PHID.',
  'Requested handle "%s" was not loaded.' => 'Požadovaný ovládač „%s“ nebol načítaný.',
  'Restricted %s' => 'Obmedzené: %s',
  'Trying to mutate a %s, but this is not permitted; handle lists are immutable.' => 'Pokus o zmenu %s, čo nie je povolené; zoznamy ovládačov sú nemenné.',
  'Attempting to test capability "%s" for handle of type "%s", but this capability has not been attached.' => 'Pokus o overenie schopnosti „%s“ pre ovládač typu „%s“, ale táto schopnosť nebola pripojená.',
  'Object (of class "%s") has no PHID, so handles can not interact with capabilities for it.' => 'Objekt (triedy „%s“) nemá PHID, takže ovládače nemôžu pracovať s jeho schopnosťami.',
  '%s class "%s" has an invalid %s property. PHID constants must be a four character uppercase string.' => '%s trieda „%s“ má neplatnú vlastnosť %s. Konštanty PHID musia byť štvorznakový reťazec veľkých písmen.',
  'Attempting to load PHID "%s", but it was not requested by any handle list.' => 'Pokus o načítanie PHID „%s“, ktorý si však nevyžiadal žiadny zoznam ovládačov.',
  'The objects you have listed include objects of the wrong type (%s).' => 'Objekty, ktoré ste uviedli, obsahujú objekty nesprávneho typu (%s).',
  'Application Email' => 'E-mail aplikácie',
  'Must pass PHIDs.' => 'Je potrebné odovzdať PHID.',
  'Look up objects by name.' => 'Vyhľadať objekty podľa názvu.',
  'Trying to render a handle which does not exist!' => 'Pokus o vykreslenie ovládača, ktorý neexistuje!',
  'Retrieve information about arbitrary PHIDs.' => 'Získať informácie o ľubovoľných PHID.',
  'Unknown Object (%s)' => 'Neznámy objekt (%s)',
  'The objects you have listed include objects which do not exist (%s).' => 'Objekty, ktoré ste uviedli, obsahujú objekty, ktoré neexistujú (%s).',
  'Trying to create a new sublist of an existing handle list, but PHID "%s" does not appear in the parent list.' => 'Pokus o vytvorenie nového podzoznamu existujúceho zoznamu ovládačov, ale PHID „%s“ sa v nadradenom zozname nenachádza.',
  'Must pass names.' => 'Je potrebné odovzdať názvy.',
  'Attempting to attach capability ("%s") for object ("%s") to handle, but this handle (of type "%s") can not have capabilities.' => 'Pokus o pripojenie schopnosti („%s“) pre objekt („%s“) k ovládaču, ale tento ovládač (typu „%s“) nemôže mať schopnosti.',
  'The objects you have listed include objects of the wrong type (%s) and objects which do not exist (%s).' => 'Objekty, ktoré ste uviedli, obsahujú objekty nesprávneho typu (%s) a objekty, ktoré neexistujú (%s).',
  'No such object exists.' => 'Taký objekt neexistuje.',
  'Can not generate PHID with no type.' => 'Nie je možné vygenerovať PHID bez typu.',
);
  }

}
