<?php

final class PhabricatorAlmanacSl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sl';
  }

  protected function getTranslations() {
    return array(
      'Namespace' => 'Imenski prostor',
      'Add Property' => 'Dodaj lastnost',
      'Map of property names to values.' => 'Preslikava imen lastnosti v vrednosti.',
      'Add Interface' => 'Dodaj vmesnik',
      'Create Service' => 'Ustvari storitev',
      'Add Binding' => 'Dodaj vezavo',
      'Edit Namespace' => 'Uredi imenski prostor',
      'Create Binding' => 'Ustvari vezavo',
      'Edit Network' => 'Uredi omrežje',
      'Edit Service' => 'Uredi storitev',
      'Create Namespace' => 'Ustvari imenski prostor',
      'Interface %d' => 'Vmesnik %s',
      'Create Network' => 'Ustvari omrežje',
      'Installing public key...' => 'Nameščanje javnega ključa ...',
      'Edit Device' => 'Uredi napravo',
      'All Networks' => 'Vsa omrežja',
      'Edit Property' => 'Uredi lastnost',
      'Namespace %d' => 'Imenski prostor %s',
      'Namespace %s' => 'Imenski prostor %s',
      'Create Property' => 'Ustvari lastnost',
      'This host already has a registered private key ("%s"). Remove this key before registering the host, or use --force to overwrite it.' => 'Ta gostitelj že ima registriran zasebni ključ (»%s«). Odstranite ta ključ, preden registrirate gostitelja, ali uporabite --force, da ga prepišete.',
      'This host already has a registered public key ("%s"). Remove this key before registering the host, or use --force to overwrite it.' => 'Ta gostitelj že ima registriran javni ključ (»%s«). Odstranite ta ključ, preden registrirate gostitelja, ali uporabite --force, da ga prepišete.',
      'Invalid Property' => 'Neveljavna lastnost',
      'Device Disabled' => 'Naprava onemogočena',
      'Namespaces' => 'Imenski prostori',
      'All Services' => 'Vse storitve',
      'Create Interface' => 'Ustvari vmesnik',
      'No properties.' => 'Ni lastnosti.',
      'All Devices' => 'Vse naprave',
      'Edit Binding' => 'Uredi vezavo',
    );
  }

}
