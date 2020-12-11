<?php

final class PhabricatorTypeaheadTr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'tr';
  }

  protected function getTranslations() {
    return array(
      'Typeahead Results' => 'Typeahead Sonuçları',
      'Typeahead' => 'Typeahead',
      'This datasource ("%s") can not evaluate the function "%s(...)".' => 'Bu veri kaynağı ("%s"), "%s(...)" işlevini değerlendiremez.',
      'Function Help' => 'İşlev Yardımı',
      'In addition to typing user and project names to build queries, you can also type the names of special functions which give you more options and the ability to express more complex queries.
    Functions have an internal name (like `%s`) and a human-readable name, like `Current Viewer`. In general, you can type either one to select the function. You can also click the {nav icon=search} button on any typeahead control to browse available functions and find this documentation.
    This documentation uses the internal names to make it clear where tokens begin and end. Specifically, you will find queries written out like this in the documentation:
    %s
    When this query is actually shown in the control, it will look more like this:
    %s' => 'Sorgu oluşturmak için kullanıcı ve proje adlarını yazmanın yanı sıra, size daha fazla seçenek sunan ve daha karmaşık sorgular ifade etme yeteneği veren özel işlevlerin adlarını da yazabilirsiniz.
    İşlevlerin dahili adı (%s gibi) ve `Geçerli Görüntüleyici` gibi insan tarafından okunabilen bir adı vardır. Genel olarak, işlevi seçmek için ikisinden birini yazabilirsiniz. Kullanılabilir işlevlere göz atmak ve bu belgeleri bulmak için herhangi bir daktilo kontrolünde {nav icon=search} düğmesini de tıklayabilirsiniz.
    Bu belge, anahtarların nerede başladığını ve bittiğini netleştirmek için dahili adları kullanır. Özellikle, belgelerde bu şekilde yazılan sorguları bulacaksınız:
    %s
    Bu sorgu gerçekte kontrolde gösterildiğinde, şöyle görünecektir:
    %s',
      'All arguments to "%s(...)" must be integers, found "%s" in position %d.' => '"%s(...)" için tüm argümanlar tamsayı olmalı, "%s" konumunda %s konumunda bulundu.',
      'Invalid Parameters' => 'Geçersiz Parametreler',
      'Source Class' => 'Kaynak Sınıfı',
      'Raw Query' => 'Ham Sorgu',
      'Token Results (%s)' => 'Anahtar Sonuçları (%s)',
      'Configured datasource class "%s" must be a valid subclass of "%s".' => 'Yapılandırılmış veri kaynağı sınıfı "%s", "%s" geçerli bir alt sınıfı olmalıdır.',
      'Token Name' => 'Anahtar Adı',
      'Reference: Advanced Functions' => 'Kaynak: Gelişmiş İşlevler',
      'Image URI' => 'Resim URI',
      'Select' => 'Seç',
      'Typeahead functions are an advanced feature which allow you to build more powerful queries. This document explains functions available for the selected control.
    For general help with search, see the [[ %s | Search User Guide ]] in the documentation.
    Note that different controls support //different// functions (depending on what the control is doing), so these specific functions may not work everywhere. You can always check the help for a control to review which functions are available for that control.' => 'Typeahead işlevleri, daha güçlü sorgular oluşturmanıza olanak tanıyan gelişmiş bir özelliktir. Bu belge seçilen kontrol için mevcut fonksiyonları açıklar.
    Arama ile ilgili genel yardım için, [[ %s | Kullanım Kılavuzunda Arayın ]].
    Farklı kontrollerin //farklı// işlevleri (kontrolün ne yaptığına bağlı olarak) desteklediğini, bu nedenle bu belirli işlevlerin her yerde çalışmayabileceğini unutmayın. Bu kontrol için hangi işlevlerin mevcut olduğunu gözden geçirmek üzere kontrol için yardımı her zaman kontrol edebilirsiniz.',
      'Display Name' => 'Ekran Adı',
      'This table briefly describes available functions for this control. For details on a particular function, see the corresponding section below.' => 'Bu tablo, bu kontrol için mevcut işlevleri kısaca açıklamaktadır. Belirli bir işlevle ilgili ayrıntılar için aşağıdaki ilgili bölüme bakın.',
      'This source is not usable directly.' => 'Bu kaynak doğrudan kullanılamaz.',
      'Unable to parse function and arguments for token "%s".' => '"%s" anahtarı için işlev ve argümanlar ayrıştırılamıyor.',
      'Token Query' => 'Anahtar Sorgusu',
      'Invalid Function: %s' => 'Geçersiz İşlev: %s',
      'More Results' => 'Daha Fazla Sonuç',
      'Browse Objects' => 'Nesnelere Göz At',
      'Typeahead Function Help' => 'Typeahead İşlev Yardımı',
      'Sprite' => 'Peri',
      'The HTTP parameter named "parameters" for this request is not a valid JSON parameter. JSON is required. Exception: %s' => 'Bu istek "parametreler" adlı HTTP parametresi geçerli bir JSON parametresi değil. JSON gereklidir. İstisna: %s',
      'Function Quick Reference' => 'İşlev Hızlı Kaynağı',
      'Constraints for input "%s".' => '"%s" girişi kısıtlaması.',
      'Auto' => 'Otomatik',
      'You reach the edge of the abyss.' => 'Uçurumun kenarına ulaştınız.',
      'Tokenization of "%s"' => '"%s" etiketinin simgesi',
      'Browse Numbers' => 'Numaralara Göz At',
      'Priority Type' => 'Öncelik Türü',
      'Using Typeahead Functions' => 'Typeahead İşlevlerini Kullanma',
    );
  }

}
