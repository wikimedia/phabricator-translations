<?php

final class PhabricatorPhurlTr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'tr';
  }

  protected function getTranslations() {
    return array(
      'Alias' => 'Takma Ad',
      'Edit Phurl' => 'Phurl Düzenle',
      'URL' => 'URL',
      'All URLs' => 'Tüm URL\'ler',
      '%s changed the alias from %s to %s.' => '%s, takma adı %s\'den %s\'e değiştirdi.',
      'The alias to give the URL.' => 'URL’yi verecek diğer ad.',
      'The alias you provided (%s) must contain at least one letter.' => 'Sağladığınız takma ad (%s) en az bir harf içermelidir.',
      'Configure creation and editing forms in Phurl.' => 'Phurl\'da oluşturma ve düzenleme formlarını yapılandırın.',
      'New URL description.' => 'Yeni URL açıklaması.',
      '[Phurl]' => '[Phurl]',
      'The URL to shorten.' => 'Kısaltılacak URL.',
      'Select a phurl...' => 'Bir phurl seç...',
      '%s changed the destination URL from %s to %s.' => '%s, hedef URL’yi %s\'den %s\'e değiştirdi.',
      'New URL.' => 'Yeni URL.',
      'A description of the URL.' => 'URL\'nin açıklaması.',
      'The alias you provided (%s) may only contain latin letters, digits, periods, and hyphens.' => 'Sağladığınız takma ad (%s) yalnızca latin harfleri, rakamları, periyotları ve kısa çizgileri içerebilir.',
      'This alias is already in use.' => 'Bu takma ad zaten kullanılıyor.',
      'This domain can only be used to open URLs shortened using the Phurl application. The URL you are trying to access does not have a Phurl URL associated with it.' => 'Bu etki alanı yalnızca Phurl uygulamasını kullanarak kısaltılmış URL\'leri açmak için kullanılabilir. Erişmeye çalıştığınız URL, kendisiyle ilişkilendirilmiş bir Phurl URL\'sine sahip değil.',
      'Phurls must have a name.' => 'Phurl\'lar bir isim olmalı.',
      'Shorten your favorite URL.' => 'En sevdiğiniz URL\'yi kısaltın.',
      'No URLs found.' => 'URL bulunamadı.',
      'URL path is required' => 'URL yolu gerekli',
      '%s changed the name of %s from %s to %s.' => '%s, %s adını %s\'den %s\'e değiştirdi.',
      'Read information about Phurl URLS.' => 'Phurl URL\'leri hakkında bilgi okuyun.',
      'Edit URL: %s' => 'URL\'yi düzenle: %s',
      'Can Create Phurl URLs' => 'Phurl URL\'leri Oluşturabilir',
      'URL name.' => 'URL adı.',
      'Long URLs' => 'Uzun URL\'ler',
      'Create New URL' => 'Yeni URL Oluştur',
      'URL DESCRIPTION' => 'URL AÇIKLAMASI',
      'New alias.' => 'Yeni takma ad.',
      'The owner of a URL can always view and edit it.' => 'Bir URL\'nin sahibi her zaman onu görüntüleyebilir ve düzenleyebilir.',
      'Original URL' => 'Orijinal URL',
      'The pre-shortened URL.' => 'Ön kısaltılmış URL.',
      'The protocol of the URL is invalid.' => 'URL\'nin protokolü geçersiz.',
      '%s changed the alias of %s from %s to %s.' => '%s, %s\'in diğer adını %s\'den %s\'e değiştirdi.',
      'Apply transactions to create a new Phurl URL or edit an existing one.' => 'Yeni bir Phurl URL oluşturmak için işlemleri uygulayın veya mevcut olanı düzenleyin.',
      'Short URL' => 'Kısa URL',
      'Shorten a URL' => 'URL kısalt',
      'Invalid URL' => 'Geçersiz URL',
      'New URL name.' => 'Yeni URL adı.',
      '%s changed the destination URL %s from %s to %s.' => '%s, hedef URL\'yi %s\'den %s\'den %s\'e değiştirdi.',
      'You do not have permission to create a Phurl URL.' => 'Phurl URL oluşturma izniniz yok.',
      'Search for Phurl URLs by the non-shortened URL.' => 'Kısaltılmamış URL’ye göre Phurl URL’lerini arayın.',
      'The alias for the URL.' => 'URL için takma ad.',
      'URL long description.' => 'URL uzun açıklaması.',
      'URL must match approved domains / protocols.' => 'URL, onaylanan alanlarla / protokollerle eşleşmelidir.',
      '%s created this URL.' => '%s bu URL\'yi oluşturdu.',
      'Phurls must have an alias.' => 'Phurl\'ler takma adı olmalı.',
      'Phurl URLs' => 'Phurl URL\'leri',
      'CHANGES TO PHURL DESCRIPTION' => 'PHURL AÇIKLAMASI DEĞİŞİYOR',
      'Search for Phurl URLs by name substring.' => 'Phurl URL\'lerini ad alt dizgisine göre arayın.',
      'Browse Phurl URLs' => 'Phurl URL\'lerine göz at',
      'URL Shortener' => 'URL Kısaltıcı',
      'Visit URL' => 'URL\'yi ziyaret et',
      'A URL\'s details change.' => 'Bir URL\'nin detayları değişir.',
      'Configure Phurl Forms' => 'Phurl Formlarını Yapılandır',
      'Search for Phurl URLs by alias.' => 'Takma adı kullanarak Phurl URL\'lerini arayın.',
      'URL DETAIL' => 'URL AYRINTISI',
      'The alias can be no longer than %d characters.' => 'Diğer ad, %s karakterden uzun olamaz.',
      'Create URL' => 'URL oluştur',
      '%s changed the name of the URL from %s to %s.' => '%s, URL\'nin adını %s\'den %s\'e değiştirdi.',
      'Create reusable, memorable, shorter URLs for easy accessibility.' => 'Kolay erişilebilirlik için tekrar kullanılabilir, akılda kalıcı, daha kısa URL\'ler oluşturun.',
    );
  }

}
