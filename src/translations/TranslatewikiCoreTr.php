<?php

final class TranslatewikiCoreTr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'tr';
  }

  protected function getTranslations() {
    return array(
      'Provide the path to a library to export translations from.' => 'Çeviri aktarmak için bir kütüphaneye giden yolu belirtin.',
      'Unable to extract string with unrecognized "%%" pattern, "%s": %s.' => 'Tanınmayan "%%" deseniyle dize çıkartılamıyor, "%s": %s.',
      'NONE' => 'YOK',
      'Provide a locale code with "--locale".' => '"--locale" ile bir yerel kod sağlayın.',
      'Ignoring string "%s"; not present in translation source file.' => '"%s" dizesini dikkate almamak; çeviri kaynak dosyasında yok.',
      'Provide the path to exactly one library to export translations from.' => 'Çevirileri dışa aktarmak için tam olarak bir kütüphaneye giden yolu belirtin.',
      'Provide a project name to export strings under with "--as".' => '"--as" altındaki dizeleri dışa aktarmak için bir proje adı girin.',
      'Raw strings' => 'Ham dizeler',
      'Name of the project that a translation file is being generated for.' => 'Projenin bir çeviri dosyasının üretildiği adı.',
      'Extracting library strings...' => 'Kütüphane dizileri çıkartılıyor...',
      'GENDER' => 'CİNSİYET',
      'Locale code for the generated source.' => 'Oluşturulan kaynak için yerel (\'\'locale\'\') kod.',
      'Provide a classname with "--class".' => '"--class" ile bir sınıf adı sağlayın.',
      'Read %s string(s).' => '%s dizesini okuyun.',
      'Class name to generate.' => 'Oluşturulacak sınıf ismi.',
      'Frequency Data' => 'Frekans Verileri',
      'Provide a JSON source file with "--source".' => '"--source" ile bir JSON kaynak dosyası sağlayın.',
      'Generate a Phabricator translation classfile.' => 'Bir Phabricator çeviri sınıfı dosyası oluşturun.',
      'JSON source file containing translation strings.' => 'Çeviri dizelerini içeren JSON kaynak dosyası.',
      'Export translation strings from a libphutil library.' => 'Çeviri dizelerini bir libphutil kütüphanesinden dışa aktarın.',
      'Writing data (%s, %s) to "%s"...' => 'Veri yazma (%s, %s), "%s" e...',
      'Expected library string extraction to genrate file "%s", but no such file exists!' => '"%s" dosyasını oluşturmak için kütüphane dizesinin çıkarılması bekleniyor, ancak böyle bir dosya yok!',
      'Name for the project being exported. Exported files will be written to "projects/" using this name.' => 'Dışa aktarılmakta olan projenin adı. Dışa aktarılan dosyalar bu adı kullanarak "projects/" e yazılacaktır.',
      'Used in:' => 'Kullanılır:',
      'English strings' => 'İngilizce dizeleri',
      'Context strings' => 'Bağlam dizeleri',
      'Provide a project name with "--project".' => '"--project" ile bir proje adı girin.',
      'Variable Types: %s.' => 'Değişken Türleri: %s.',
      'Provide an output file with "--out".' => '"--out" ile bir çıktı dosyası sağlayın.',
      'Base URI for browsing files in the project being exported.' => 'Dışa aktarılmakta olan projedeki dosyalara göz atmak için temel URI.',
      'Pass --clean to the underlying extractor to drop caches before extracting strings and do a full clean rebuild. Slow!' => 'Geçiş --clean dizeleri çıkarmadan önce önbellekleri bırakmak ve tamamen temiz bir işlem yapmak için alttaki temizleyiciye temizleyin. Yavaş!',
      'Done.' => 'Yapıldı.',
      'Location to write the generated translation file.' => 'Oluşturulan çeviri dosyasını yazacağınız yer.',
      'PLURAL' => 'PLURAL',
    );
  }

}
