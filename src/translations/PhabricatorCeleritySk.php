<?php

final class PhabricatorCeleritySk
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sk';
  }

  protected function getTranslations() {
    return array(
  'Use Standard Colors' => 'Používať štandardné farby',
  'No resource source exists with name "%s"!' => 'Neexistuje žiadny zdroj prostriedkov s názvom „%s“!',
  'Unable to render resource "%s", which has unknown type "%s".' => 'Nepodarilo sa vykresliť prostriedok „%s“, ktorý má neznámy typ „%s“.',
  'Writing map "%s".' => 'Zapisuje sa mapa „%s“.',
  'Done generating sprites - updating map...' => 'Generovanie spritov dokončené – aktualizuje sa mapa...',
  'Use High Contrast Colors' => 'Používať farby s vysokým kontrastom',
  'Use Larger Font Size' => 'Používať väčšiu veľkosť písma',
  'Do not invoke `%s` after updating sprites' => 'Po aktualizácii spritov nespúšťať `%s`',
  'Found %d binary resources.' => 'Nájdených %d binárnych prostriedkov.',
  'No resource with symbol "%s" exists in source "%s"!' => 'V zdroji „%2$s“ neexistuje žiadny prostriedok so symbolom „%s“!',
  'Celerity' => 'Celerity',
  'Package specification for "%s" includes "%s", but that symbol is not %s by any resource.' => 'Špecifikácia balíka pre „%s“ obsahuje „%s“, ale tento symbol nie je %s žiadnym prostriedkom.',
  'Attempting to resolve unknown resource, "%s".' => 'Pokus o vyhodnotenie neznámeho prostriedku „%s“.',
  'Rebuilding %s resource source(s).' => array(
    'Prebudováva sa %s zdroj prostriedkov.',
    'Prebudováva sa %s zdroje prostriedkov.',
    'Prebudováva sa %s zdrojov prostriedkov.',
  ),
  'Rebuilt "%s" syntax CSS.' => 'Syntaktické CSS „%s“ bolo prebudované.',
  '`%s` not found in PATH.' => '`%s` sa v PATH nenašiel.',
  'CSS file \'%s\' has unknown variable \'%s\'.' => 'Súbor CSS „%s“ obsahuje neznámu premennú „%s“.',
  'Literal %s is not allowed inside inline script.' => 'Literál %s nie je vo vloženom skripte povolený.',
  'Use Red/Green (Deuteranopia) Colors' => 'Používať červeno-zelené farby (deuteranopia)',
  'Sprites will not be optimized! Install `%s`!' => 'Sprity nebudú optimalizované! Nainštalujte `%s`!',
  'Resource "%s" must %s at most one Celerity target.' => 'Prostriedok „%s“ musí %s najviac jeden cieľ Celerity.',
  'Rebuild CSS sprite sheets.' => 'Prebudovať hárky CSS spritov.',
  'Cycle detected in resource graph: %s' => 'V grafe prostriedkov bol zistený cyklus: %s',
  'Rebuild syntax highlighting CSS.' => 'Prebudovať CSS zvýrazňovania syntaxe.',
  'Resource source defines two resources with the same name, "%s". One is defined in the "%s" map; the other in the "%s" map. Each resource must have a unique name.' => 'Zdroj prostriedkov definuje dva prostriedky s rovnakým názvom „%s“. Jeden je definovaný v mape „%s“, druhý v mape „%s“. Každý prostriedok musí mať jedinečný názov.',
  'Resource "%s" does not have a header doc comment. Encode dependency data in a header docblock.' => 'Prostriedok „%s“ nemá hlavičkový dokumentačný komentár. Údaje o závislostiach zapíšte do hlavičkového dokumentačného bloku.',
  'Package specification for "%s" includes resources of multiple types (%s, %s). Each package may only contain one type of resource.' => 'Špecifikácia balíka pre „%s“ obsahuje prostriedky viacerých typov (%s, %s). Každý balík smie obsahovať iba jeden typ prostriedku.',
  'Force regeneration even no sources have changed.' => 'Vynútiť opätovné vygenerovanie, aj keď sa žiadne zdroje nezmenili.',
  'Optimizing...' => 'Optimalizuje sa...',
  'Found %d text resources.' => 'Nájdených %d textových prostriedkov.',
  'Expected file \'%s\' in \'%s\' to be a sprite source ending in \'%s\'.' => 'Očakávalo sa, že súbor „%s“ v „%s“ bude zdrojom spritov končiacim na „%s“.',
  'Only static resources may be served.' => 'Poskytovať možno iba statické prostriedky.',
  'Rebuilding resource source "%s" (%s)...' => 'Prebudováva sa zdroj prostriedkov „%s“ (%s)...',
  'Resources name "%s" is not valid; it must contain only lowercase latin letters and digits.' => 'Názov prostriedkov „%s“ nie je platný; smie obsahovať iba malé písmená latinky a číslice.',
  'Attempting to add more metadata after metadata has been locked.' => 'Pokus o pridanie ďalších metaúdajov po ich uzamknutí.',
  'Dark Mode' => 'Tmavý režim',
  'Rebuild static resource maps.' => 'Prebudovať mapy statických prostriedkov.',
  'Found %d packages.' => 'Nájdených %d balíkov.',
);
  }

}
