<?php

final class PhabricatorExtensionsFi
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'fi';
  }

  protected function getTranslations() {
    return array(
  'Failed to upgrade git library. Try fixing manually. Error: %s' => 'Git-kirjaston päivittäminen epäonnistui. Kokeile manuaalista korjaustaa. Virhe: %s',
  'Can only remove one extension at a time.' => 'Vain yksi laajennus kerrallaan voidaan poistaa.',
  'Would remove library file %s' => 'Tämä poistaisi kirjastotiedoston %s',
  'Update complete; Current version %s. Remember to run `%s` and restart the server!' => 'Päivitys on valmis. Nykyinen versio on %s. Muista suorittaa %s ja käynnistää palvelin uudelleen!',
  'Identify the extension by its local path' => 'Tunnista laajennus sen paikallisen polun perusteella',
  'Provide a name or extension id to remove' => 'Anna poistettavan laajennuksen nimi tai tunniste',
  'Remove an installed extensions.' => 'Poista asennettu laajennus.',
  'Removed library file %s' => 'Kirjastotiedosto %s poistettiin',
  'Identify the extension by its extension name' => 'Tunnista laajennus sen laajennusnimen perusteella',
  'Library was already at latest version.' => 'Kirjasto oli jo uusimmassa versiossaan.',
  'Extension %s is already up-to-date' => 'Laajennus %s on jo ajan tasalla',
  'It appears that this is not a valid library.' => 'Tämä ei tunnu olevan kelvollinen kirjasto.',
  'Local path "%s" is not writable.' => 'Paikalliseen polkuun %s ei voi kirjoittaa.',
  'Copying `%s` to `%s`' => 'Kopioidaan %s kohteeseen %s',
  'Skipping core library `%s`.' => 'Ohitetaan ydinkirjasto %s.',
  'Installing this would require copying to location %s, but that file already exists.' => 'Tämän asentaminen edellyttäisi kopiointia kohteeseen %s, mutta kyseinen tiedosto on jo olemassa.',
  'Invalid filename `%s`' => 'Tiedostonnimi %s ei kelpaa',
  'Lists installed extensions.' => 'Luetteloi kaikki laajennukset.',
  'Identify the extension by its Extension Key' => 'Tunnista laajennus sen laajennusavaimen perusteella',
  'Provide a uri or extension key to install' => 'Anna URI tai laajennusavain asennusta varten',
  'Try to update all installed extensions.' => 'Kokeile kaikkien asennettujen laajennusten päivittämistä.',
  'Upgrading extensions of format "%s" is not supported.' => '%s-muotoisten laajennusten päivittämistä ei tueta.',
  'Finding extension by %s is not yet implemented.' => 'Laajennusten etsimistä kriteerillä %s ei ole vielä toteutettu.',
);
  }

}
