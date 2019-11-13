<?php

final class PhabricatorCelerityTr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'tr';
  }

  protected function getTranslations() {
    return array(
      'Use Standard Colors' => 'Standart Renkleri Kullan',
      'No resource source exists with name "%s"!' => '"%s" isimli hiçbir kaynak yok!',
      'Unable to render resource "%s", which has unknown type "%s".' => '"%2$s" türü bilinmeyen kaynak "%1$s" oluşturulamıyor.',
      'Writing map "%s".' => 'Harita yazılıyor "%s".',
      'Use High Contrast Colors' => 'Yüksek Kontrast Renkleri Kullan',
      'Dark Mode (Experimental)' => 'Karanlık Mod (Deneysel)',
      'Use Larger Font Size' => 'Daha Büyük Yazı Tipi Boyutu Kullan',
      'Found %d binary resources.' => '%s ikili kaynak bulundu.',
      'No resource with symbol "%s" exists in source "%s"!' => '"%2$s" sembolünde hiçbir kaynak "%1$s" kaynağında mevcut değil!',
      'Celerity' => 'Sürat',
      'Package specification for "%s" includes "%s", but that symbol is not %s by any resource.' => '"%s" için paket belirtimi "%s" içerir, ancak bu sembol hiçbir kaynak %s değildir.',
      'Attempting to resolve unknown resource, "%s".' => '"%s" bilinmeyen kaynağı çözmeye çalışıyor.',
      'Rebuilt "%s" syntax CSS.' => '"%s" sözdizimini CSS\'yi yeniden oluştur.',
      'CSS file \'%s\' has unknown variable \'%s\'.' => '\'%s\' CSS dosyasında \'%s\' değişkeni yok.',
      'Literal %s is not allowed inside inline script.' => 'Satır içi betikde %s değişmezine izin verilmez.',
      'Binary' => 'İkili',
      'Use Red/Green (Deuteranopia) Colors' => 'Kırmızı/Yeşil (Deuteranopia) Renkleri Kullan',
      'Resource "%s" must %s at most one Celerity target.' => '"%s" kaynağı en fazla bir Sürat hedefinde %s olmalıdır.',
      'Cycle detected in resource graph: %s' => 'Kaynak grafikte tespit edilen döngü: %s',
      'Rebuild syntax highlighting CSS.' => 'CSS\'yi vurgulayarak sözdizimini yeniden oluşturun.',
      'Resource source defines two resources with the same name, "%s". One is defined in the "%s" map; the other in the "%s" map. Each resource must have a unique name.' => 'Kaynak kaynağı, aynı adı taşıyan iki kaynağı "%s" olarak tanımlar. Bir tanesi "%s" haritasında tanımlanmış; diğeri de "%s" haritasında. Her kaynağın benzersiz bir adı olmalıdır.',
      'Resource "%s" does not have a header doc comment. Encode dependency data in a header docblock.' => '"%s" kaynağının bir başlık dokümanı yorumu yok. Bağımlılık verilerini bir başlık bloğunda kodlayın.',
      'Package specification for "%s" includes resources of multiple types (%s, %s). Each package may only contain one type of resource.' => '"%s" için paket belirtimi birden fazla türde kaynak içeriyor (%s, %s). Her paket yalnızca bir tür kaynak içerebilir.',
      'Rebuilding %d resource source(s).' => '%s kaynak kaynağı yeniden oluşturuluyor.',
      'Found %d text resources.' => '%s metin kaynağı bulundu.',
      'Expected file \'%s\' in \'%s\' to be a sprite source ending in \'%s\'.' => '\'%3$s\' ile biten bir sprite kaynağı olması için \'%s\' içindeki \'%1$s\' dosyası bekleniyordu.',
      'Only static resources may be served.' => 'Yalnızca statik kaynaklar sunulabilir.',
      'Rebuilding resource source "%s" (%s)...' => '"%s" kaynak kaynağının yeniden oluşturulması (%s)...',
      'Resources name "%s" is not valid; it must contain only lowercase latin letters and digits.' => '"%s" kaynak adı geçerli değil; sadece küçük harfli latin harfleri ve rakamları içermelidir.',
      'Attempting to add more metadata after metadata has been locked.' => 'Meta veriler kilitlendikten sonra daha fazla meta veri eklemeye çalışılıyor.',
      'Rebuild static resource maps.' => 'Statik kaynak haritalarını yeniden oluşturun.',
      'Found %d packages.' => '%s paket bulundu.',
    );
  }

}
