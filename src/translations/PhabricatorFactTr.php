<?php

final class PhabricatorFactTr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'tr';
  }

  protected function getTranslations() {
    return array(
      'Analyze from the beginning, ignoring cursors.' => 'İmleçleri yok sayarak baştan analiz edin.',
      'Iterator \'%s\' does not exist.' => 'Yineleyici \'%s\' mevcut değil.',
      'Manually invoke fact analyzers.' => 'Gerçek analiz cihazlarını manüel olarak çağırın.',
      'No fact engines support generating facts for this object.' => 'Hiçbir gerçek motor bu amaç için gerçekler üretmeyi desteklememektedir.',
      'Y-Axis' => 'Y-Ekseni',
      'Executing a fact query requires facts.' => 'Bir olgu sorgusu yürütmek gerçekleri gerektirir.',
      'Process only iterator __name__.' => 'Sadece yineleyici __name__ işle.',
      'Cursor %s does not exist or is already reset.' => 'İmleç %s mevcut değil veya sıfırlandı.',
      'No cursors.' => 'İmleç yok.',
      'Fact Extraction Report' => 'Gerçek Çıkarma Raporu',
      'Dimension' => 'Boyut',
      'Processing %s...' => '%s İşleniyor...',
      'Zzz...' => 'Zzz...',
      'No Stored Datapoints' => 'Depolanan Veri Noktası Yok',
      '%sms' => '%sms',
      'Processing cursor \'%s\'.' => 'İmleç \'%s\' işleniyor.',
      'Show a list of fact engines.' => 'Gerçek motorlarının bir listesini göster.',
      'Chart' => 'Grafik',
      'Chart and Analyze Data' => 'Verileri Grafikle ve Analiz Et',
      'Really destroy all facts? They will need to be rebuilt through analysis, which may take some time.' => 'Gerçekten tüm gerçekleri yok edilsin mi? Zaman alabilecek analizlerle yeniden yapı edilmeleri gerekecek.',
      '%s (Transactions)' => '%s (İşlemler)',
      'Show a list of fact iterators and cursors.' => 'Gerçek yineleyiciler ve imleçlerin bir listesini göster.',
      'Failed to load or generate dimension ID ("%s") for dimension key "%s".' => '"%2$s" boyut anahtarı için boyut kimliği ("%1$s") yüklenemedi ya da üretilemedi.',
      'Destroy all facts.' => 'Tüm gerçekleri yok et.',
      'Facts' => 'Gerçekler',
      'Resetting cursor %s...' => 'İmleci %s sıfırlanıyor...',
      'Not Stored' => 'Depolanmadı',
      'Reset cursor __cursor__.' => '__cursor__ imleci sıfırla.',
      'Skip analysis of aggregate facts.' => 'Toplam gerçeklerin analizini atla.',
      'No Engines' => 'Motor Yok',
      'Destroying table \'%s\'...' => '\'%s\' tablosu yok ediliyor...',
      'Fact' => 'Gerçek',
      'Unknown fact ("%s") for engine "%s".' => '"%2$s" motoru için bilinmeyen gerçek ("%1$s").',
      'Fact "%s"' => 'Gerçek "%s"',
      'Consistent Fact' => 'Tutarlı Gerçekler',
      'Count of %s' => '%s Sayısı',
      'Not Generated' => 'Oluşturulmamış',
      'Plot Chart' => 'Grafik Çizimi',
    );
  }

}
