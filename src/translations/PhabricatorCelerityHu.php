<?php

final class PhabricatorCelerityHu
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'hu';
  }

  protected function getTranslations() {
    return array(
      'Use Standard Colors' => 'Használja a standard színeket',
      'No resource source exists with name "%s"!' => 'Nincs ilyen erőforrás ezen a "%s" néven!',
      'Unable to render resource "%s", which has unknown type "%s".' => 'Nem sikerült olyan "%s" erőforrást létrehozni, mely ismeretlen típusú "%s".',
      'Writing map "%s".' => 'Térkép írása "%s".',
      'Use High Contrast Colors' => 'Használjon nagy kontrasztú színeket',
      'Dark Mode (Experimental)' => 'Sötét mód (kísérleti)',
      'Use Larger Font Size' => 'Használjon nagyobb betűméretet',
      'Found %d binary resources.' => 'Találtam egy %s nevű bináris erőforrást.',
      'Rebuilt "%s" syntax CSS.' => 'Újraépített "%s" szintaxis CSS.',
      'Cycle detected in resource graph: %s' => 'Az erőforrás-grafikonban észlelt ciklus: %s',
      'Rebuild syntax highlighting CSS.' => 'A szintaxiskiemelő CSS újraépítése.',
      'Found %d text resources.' => 'Találtam egy %s nevű szöveges erőforrást.',
      'Only static resources may be served.' => 'Csak statikus erőforrásokat lehet kiszolgálni.',
      'Attempting to add more metadata after metadata has been locked.' => 'Ha utóbb még több metaadatot szeretne felvenni, a metaadatok le vannak zárva.',
      'Rebuild static resource maps.' => 'A statikus erőforrás térképek újraépítése.',
      'Found %d packages.' => 'Találtam egy %s nevű csomagot.',
    );
  }

}
