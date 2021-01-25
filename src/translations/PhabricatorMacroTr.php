<?php

final class PhabricatorMacroTr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'tr';
  }

  protected function getTranslations() {
    return array(
      'Play audio continuously, treating the macro as an audio source. Best for ambient sounds.' => 'Makroyu ses kaynağı olarak kabul ederek sesi sürekli çalın. Ortam sesleri için en iyisi.',
      'This page documents the commands you can use to interact with image macros.' => 'Bu sayfa, görüntü makrolarıyla etkileşimde bulunmak için kullanabileceğiniz komutları belgeler.',
      'Create Meme' => 'Mem Oluştur',
      'Active Macros' => 'Aktif Makrolar',
      'Validity of macro "%s"' => '"%s" makrosunun geçerliliği',
      'Upload New Audio' => 'Yeni Ses Yükle',
      'Image Macro "%s"' => 'Resim Makrosu "%s"',
      'MACRO DETAIL' => 'MAKRO DETAYI',
      'Macro Image' => 'Makro Resmi',
      'Image File' => 'Resim Dosyası',
      'Name of the macro.' => 'Makronun adı.',
      'Create a Macro' => 'Bir Makro Oluştur',
      'Type an emoji name...' => 'Bir emoji adı yazın...',
      'Apply transactions to create a new macro or edit an existing one.' => 'Yeni bir makro oluşturmak için işlemleri uygulayın veya mevcut olanı düzenleyin.',
      'Do not play audio.' => 'Ses çalma.',
      'Edit Macro %s' => 'Makroyu Düzenle %s',
      '%s set the audio for %s to loop.' => '%s, sesi %s olarak ayarlayacaktır.',
      '(Marked With Any Flag)' => '(Herhangi Bir Bayrakla İşaretlenmiş)',
      'Active and Disabled Macros' => 'Aktif ve Engelli Makrolar',
      'Disabled Macros' => 'Engelli Makrolar',
      'Configure creation and editing of Macro images.' => 'Makro görüntülerin oluşturulmasını ve düzenlenmesini yapılandırın.',
      'Created on %s' => '%s Tarihinde Oluşturuldu',
      'Can Manage Macros' => 'Makroları Yönetebilir',
      '%s renamed this macro from %s to %s.' => '%s, bu makrosu %s ile %s yeniden adlandırdı.',
      '%s set the audio for %s to play once.' => '%s, sesi %s olarak bir kez çalacak şekilde ayarladı.',
      'Edit Audio: %s' => 'Ses Düzenle: %s',
      'New macro name.' => 'Yeni makro adı.',
      'No matching flags.' => 'Eşleşen bayrak yok.',
      'Audio Behavior' => 'Ses Davranışı',
      'To change the audio for a macro, you must upload an audio file.' => 'Bir makronun sesini değiştirmek için, bir ses dosyası yüklemelisiniz.',
      'Image macros must have a file.' => 'Görüntü makroları bir dosyaya sahip olmalıdır.',
      'Save Audio Behavior' => 'Ses Davranışını Kaydet',
      '%s set the audio to play once.' => '%s, sesi bir kez çalacak şekilde ayarladı.',
      'Macro %s: %s %s' => 'Makro %s: %s %s',
      'Image file to import.' => 'Alınacak resim dosyası.',
      '%s changed the image for this macro.' => '%s bu makro için resmi değiştirdi.',
      'Do Not Play' => 'Oynatma',
      'Below' => 'Aşağı',
      'Created in ages long past' => 'Uzun zaman önce oluşturulan',
      '%s changed the image for %s.' => '%s görüntüyü %s olarak değiştirdi.',
      'Above' => 'Yukarı',
      'Macro' => 'Makro',
      'Edit Audio' => 'Sesi Düzenle',
      'Failed to imagecreatefromstring() image template data.' => 'Resim imagecreatefromstring() şablon verilerinden oluşturamadı.',
      'Create Macro' => 'Makro Oluştur',
      'Macro name.' => 'Makro adı.',
      '%s disabled the audio for %s.' => '%s, sesi %s için devre dışı bıraktı.',
      'Macro name "%s" be: at least three characters long; and contain only lowercase letters, digits, hyphens, colons, underscores, and emoji; and not be composed entirely of latin symbols.' => 'Makro adı "%s" olabilir: en az üç karakter uzunluğunda; ve sadece küçük harfler, rakamlar, kısa çizgiler, iki nokta üst üste, alt çizgi ve emoji; ve tamamen latin sembollerinden oluşmaz.',
      'Macro "%s"' => 'Makro "%s"',
      'Macro was not found.' => 'Makro bulunamadı.',
      'Activate Macro' => 'Makroyu Etkinleştir',
      'The file you uploaded is invalid: it is not recognizable as a valid audio file.' => 'Yüklediğiniz dosya geçersiz: geçerli bir ses dosyası olarak tanınabilir değildir.',
      'Image Macro' => 'Görüntü Makro',
      'Macro name is required.' => 'Makro adı gerekli.',
      '[Macro]' => '[Makro]',
      'Macros' => 'Makrolar',
      'Retrieve image macro information.' => 'Görüntü makro bilgilerini alın.',
      'Configure Macro Image Forms' => 'Makro Görüntü Formlarını Yapılandır',
      'Play audio once, when the viewer looks at the macro.' => 'Görüntüleyici makroya baktığında, sesi bir kez çalın.',
      'Create New Macro' => 'Yeni Makro Oluştur',
      'Image Macros and Memes' => 'Görüntü Makroları ve Memleri',
      '%s set the audio to loop.' => '%s sesi döngüye ayarladı.',
      'Edit Macro' => 'Makro Düzenle',
      'Masterfully imagined by %s on %s.' => 'Ustalıkla %2$s üzerinde %1$s hayal etti.',
      '%s changed the audio for %s from %s to %s.' => '%s, sesi %s için %s\'den %s\'e değiştirdi.',
      'Really disable the much-beloved image macro %s? It will be sorely missed.' => 'Çok sevilen görüntü makrosu %s gerçekten devre dışı bırakılsın mı? Çok özlenecek.',
      'Audio File' => 'Ses Dosyası',
      'Generate a meme.' => 'Bir mem oluştur.',
      'No such macro.' => 'Böyle bir makro yok.',
      '%s disabled this macro.' => '%s bu makroyu devre dışı bıraktı.',
      'Browse Macros' => 'Makrolara Göz Atın',
      '%s restored this macro.' => '%s bu makroyu geri yükledi.',
      '%s attached audio to %s: %s.' => '%s, %s\'e ses ekledi: %s',
      '%s attached audio: %s.' => '%s ses ekledi: %s.',
      '%s created this macro.' => '%s bu makroyu oluşturdu.',
      'Macros must have a name.' => 'Makroların bir adı olmalı.',
      '%s restored %s.' => '%s %s geri getirdi.',
      'Interacting with Macros' => 'Makrolarla Etkileşim',
      'Marked with Flag' => 'Bayrakla İşaretlenmiş',
      'Allows creating and editing macros.' => 'Makro oluşturmaya ve düzenlemeye izin verir.',
      'Archive Macro' => 'Makroyu Arşivle',
      'Play Continuously' => 'Sürekli Oyna',
      'Loop' => 'Döngü',
      '%s disabled the audio for this macro.' => '%s bu makro için sesi kapattı.',
      'Create easy to remember shortcuts to images and memes.' => 'Resimlere ve memlere kısayolları hatırlamak kolay oluşturun.',
      '(No Filtering)' => '(Filtresiz)',
      'Really disable macro?' => 'Makro gerçekten devre dışı bırakılsın mı?',
      'Llama Diorama' => 'Llama Diorama',
      'Browse Emojis' => 'Emojileri Göz At',
      '%s changed the audio for this macro from %s to %s.' => '%s, bu makro için sesi %s\'den %s\'e değiştirdi.',
      'You do not have permission to manage image macros.' => 'Görüntü makrolarını yönetme izniniz yok.',
      'Template "%s" is not a valid template.' => '"%s" şablonu geçerli bir şablon değil.',
      'Email Commands: Macros' => 'E-posta Komutları: Makrolar',
      'Type a macro name...' => 'Bir makro adı yazın...',
      'Macro "%s" already exists.' => '"%s" makrosu zaten var.',
      'Play Once' => 'Bir Kere Oynat',
    );
  }

}
