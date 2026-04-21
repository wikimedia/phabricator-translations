<?php

final class PhabricatorPhidNl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'nl';
  }

  protected function getTranslations() {
    return array(
  'Retrieve information about an arbitrary PHID.' => 'Informatie ophalen over een willekeurige PHID.',
  'Requested handle "%s" was not loaded.' => 'De aangevraagde verwijzing "%s" is niet geladen.',
  'Restricted %s' => 'Beperkte %s',
  'Trying to mutate a %s, but this is not permitted; handle lists are immutable.' => 'Er wordt geprobeerd een %s te wijzigen, maar dat is niet toegestaan; verwijzingslijsten zijn onveranderbaar.',
  'Attempting to test capability "%s" for handle of type "%s", but this capability has not been attached.' => 'Poging om de functionaliteit "%s" te testen voor een verwijzing van het type "%s", maar deze functionaliteit is niet gekoppeld.',
  'Object (of class "%s") has no PHID, so handles can not interact with capabilities for it.' => 'Het object (van klasse "%s") heeft geen PHID, dus verwijzingen kunnen niet met de functionaliteiten ervan communiceren.',
  '%s class "%s" has an invalid %s property. PHID constants must be a four character uppercase string.' => '%s klasse "%s" heeft een onjuiste eigenschap %s. PHID-constanten moeten een tekenreeks van vier tekens in hoofdletters zijn.',
  'Attempting to load PHID "%s", but it was not requested by any handle list.' => 'Poging om PHID "%s" te laden, maar deze werd niet aangevraagd door een verwijzingenlijst.',
  'The objects you have listed include objects of the wrong type (%s).' => 'De objecten die u hebt opgesomd, bevatten objecten van het verkeerde type (%s).',
  'Application Email' => 'Toepassingse-mail',
  'Look up objects by name.' => 'Objecten opzoeken op naam.',
  'Trying to render a handle which does not exist!' => 'Er wordt geprobeerd een verwijzing weer te geven die niet bestaat!',
  'Retrieve information about arbitrary PHIDs.' => 'Informatie ophalen over willekeurige PHID\'s.',
  'Unknown Object (%s)' => 'Onbekend Object (%s)',
  'The objects you have listed include objects which do not exist (%s).' => 'De objecten die u hebt vermeld, zijn objecten die niet bestaan (%s).',
  'Trying to create a new sublist of an existing handle list, but PHID "%s" does not appear in the parent list.' => 'Ik probeer een nieuwe sublijst te maken van een bestaande verwijzingenlijst, maar PHID "%s" komt niet voor in de bovenliggende lijst.',
  'Attempting to attach capability ("%s") for object ("%s") to handle, but this handle (of type "%s") can not have capabilities.' => 'Poging om een functionaliteit ("%s") voor object ("%s") aan verwijzing, maar deze evrwijzing (van type "%s") kan geen functionaliteiten hebben.',
  'The objects you have listed include objects of the wrong type (%s) and objects which do not exist (%s).' => 'De objecten die u hebt opgesomd, bevatten objecten van het verkeerde type (%s) en objecten die niet bestaan (%s).',
  'No such object exists.' => 'Een dergelijk object bestaat niet.',
  'Can not generate PHID with no type.' => 'Het is niet mogelijk om een PHID te maken zonder type.',
);
  }

}
