<?php

final class PhabricatorOwnersTr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'tr';
  }

  protected function getTranslations() {
    return array(
      '"" (empty string)' => '"" (boş dizi)',
      'Configure Owners Package Forms' => 'Sahip Paket Formlarını Yapılandır',
      'Package name is required.' => 'Paket adı gerekli.',
      'Create New Package' => 'Yeni Paket Oluştur',
      'Tales of adventure for this package.' => 'Bu paket için macera hikayeleri.',
      'Search for active or archived packages.' => 'Etkin veya arşivlenmiş paketleri arayın.',
      'Automatically trigger audits for commits affecting files in this package.' => 'Bu paketteki dosyaları etkileyen taahhütler için denetimleri otomatik olarak tetikleyin.',
      'Include' => 'Dahil Et',
      'Path Exists in Repository' => 'Depoda Yol Var',
      'Included Paths' => 'Dahil Edilen Yollar',
      'Audit Unreviewed Commits and Commits With No Owner Involvement' => 'Denetlenmemiş Taahhütleri ve Taahhütleri Bulunmayan Sahibin Katılımı Yok',
      'No exclusion value for path "%s"!' => '"%s" yolu için dışlama değeri yok!',
      'Search for packages by name substrings.' => 'Paketleri ad alt dizelerine göre arayın.',
      'Changeset attribute "%s" is not valid. Valid changeset attributes are: %s.' => 'Değişiklik kümesi niteliği "%s" geçerli değil. Geçerli değişiklik kümesi özellikleri: %s.',
      'Owners Packages' => 'Sahip Paketleri',
      'Select and reorder package fields.' => 'Paket alanlarını seçin ve yeniden sıralayın.',
      'Path specification must be a list of paths.' => 'Yol belirtimi bir yol listesi olmalıdır.',
      'Validating...' => 'Doğrulanıyor...',
      '%s changed %s package owner(s), added %s: %s; removed %s: %s.' => '%s, %s paket sahibini değiştirdi, %s eklendi: %s; %s kaldırıldı: %s.',
      '%s updated paths for this package.' => '%s, bu paket yolunu güncelledi.',
      'Auto Review' => 'Otomatik İnceleme',
      'Packages: Invalid Owner' => 'Paketler: Geçersiz Sahip',
      'Auto review information.' => 'Otomatik inceleme bilgisi.',
      'Group sections of a codebase into packages for re-use in other applications, like Herald rules.' => 'Bir kod tabanının bölümlerini, Herald kuralları gibi Phabricator\'ın diğer alanlarında yeniden kullanılmak üzere paketler halinde gruplayın.',
      'Path Not Found On Default Branch' => 'Varsayılan Dalda Bulunmayan Yol',
      'Affected By Herald Rules' => 'Herald Kuralları Tarafından Etkilendi',
      'Users and projects which own the package.' => 'Paketin sahibi olan kullanıcılar ve projeler.',
      'Subscribe to Changes With Non-Owner Author' => 'Sahip Olmayan Yazar ile Değişikliklere Abone Ol',
      'Specify the files and directories which comprise this package.' => 'Bu paketi oluşturan dosyaları ve dizinleri belirtin.',
      'Packages: %s' => 'Paketler: %s',
      'owner' => 'sahibi',
      'The package description.' => 'Paket açıklaması.',
      'Review Changes With Non-Owner Author' => 'Sahibi Olmayan Yazarla Değişiklikleri İncele',
      '%s renamed this package from %s to %s.' => '%s, bu paketi %s iken %s olarak yeniden adlandırdı.',
      'Audit Unreviewed Commits' => 'İncelenmemiş Taahhütleri Denetle',
      'Type a package name or function...' => 'Bir paket adı veya işlevi yazın...',
      'Save Paths' => 'Yolları Kaydet',
      'List of dictionaries, each describing a path.' => 'Her biri bir yolu tanımlayan sözlüklerin listesi.',
      'Edit Paths' => 'Yolları Düzenle',
      '%s changed %s ignored attribute(s), added %s: %s.' => '%s, %s yok sayılmış özellik değiştirdi, %s eklendi: %s.',
      'Owners User Guide' => 'Sahipler Kullanıcı Kılavuzu',
      'Path specification list references repository PHID "%s", but that is not a valid, visible repository.' => 'Yol belirtme listesi, PHID "%s" havuzuna başvuruyor, ancak bu geçerli ve görünür bir depo değil.',
      'Package auditing value "%s" is not supported. Supported options are: %s. Deprecated options are: %s.' => '"%s" paket denetim değeri desteklenmiyor. Desteklenen seçenekler: %s. Kaldırılan seçenekler: %s.',
      'Type packages(<user>) or packages(<project>)...' => 'Paketleri yazın (<kullanıcı>) veya paketler (<proje>)...',
      'Dominion' => 'Hakimiyet',
      'Read information about Owners packages.' => 'Sahip paketleri hakkında bilgi edinin.',
      'Dominion setting "%s" is not valid. Valid settings are: %s.' => 'Hakimiyet ayarı "%s" geçerli değil. Geçerli ayarlar: %s.',
      'Configure Owners.' => 'Sahipleri Yapılandır.',
      'Ignored attribute information.' => 'Yok sayılan öznitelik bilgisi.',
      'Weak' => 'Zayıf',
      'Strong (Control All Paths)' => 'Güçlü (Tüm Yolları Kontrol Et)',
      'Custom Owners fields.' => 'Özel Sahipler alanları.',
      'Own Source Code' => 'Kendi Kaynak Kodu',
      'Search for packages with specific owners.' => 'Belirli sahipleriyle paketleri arayın.',
      'Authority' => 'Yetki',
      'Package names may not contain commas (",") or exclamation marks ("!"). These characters are ambiguous when package names are parsed from the command line.' => 'Paket adları virgül (",") veya ünlem işareti ("!") içeremez. Paket adları komut satırından ayrıştırıldığında bu karakterler belirsizdir.',
      '%s changed %s ignored attribute(s), added %s: %s; removed %s: %s.' => '%s, %s yok sayılmış özellik değiştirdi, %s eklendi: %s; %s kaldırıldı: %s.',
      'Ignore generated files (review only).' => 'Oluşturulan dosyaları yoksay (yalnızca gözden geçir).',
      'Automatically trigger reviews for commits affecting files in this package.' => 'Bu paketteki dosyaları etkileyen taahhütler için incelemeleri otomatik olarak tetikleyin.',
      'Dominion setting information.' => 'Hakimiyet ayar bilgisi.',
      'Owners of a package may always view it.' => 'Bir paketin sahipleri bunu her zaman görebilir.',
      'No commits in this package.' => 'Bu pakette taahhüt yok.',
      'Review All Changes' => 'Tüm Değişiklikleri İnceleyin',
      'Archive or enable the package.' => 'Paketi arşivleyin veya etkinleştirin.',
      'Package Lore' => 'Lore Paketi',
      'Review All Changes (Blocking)' => 'Tüm Değişiklikleri İnceleyin (Engelleme)',
      'No active Herald rules add this package as an auditor, reviewer, or subscriber.' => 'Hiç bir aktif Herald kuralı bu paketi bir denetçi, gözden geçiren, ya da abone olarak eklemedi.',
      'Owners Package' => 'Sahip Paketi',
      'Browse Packages by Owner' => 'Paketlere Sahibinden Göz Atın',
      'Change package dominion rules.' => 'Paket hakimiyet kurallarını değiştirin.',
      'No Autoreview' => 'Oto İnceleme Yok',
      'Create a Package' => 'Paket Oluştur',
      '[Package]' => '[Paket]',
      'Search for packages by included repositories.' => 'Paketleri dahil depolara göre arayın.',
      'Audit All Commits' => 'Tüm Komisyonları Denetle',
      'Audit Commits With No Owner Involvement' => 'Denetim, Sahip Yokuşu Yok Olarak Taahhütte Bulunur',
      '%s adjusted autoreview from %s to %s.' => '%s, otomatik görünüm %s\'den %s\'e ayarladı.',
      'Owned' => 'Sahip',
      'No repository PHID for path "%s"!' => '"%s" yolu için depo PHID yok!',
      '%s archived this package.' => '%s bu paketi arşivledi.',
      'Ignored Attributes' => 'Yoksayılan Nitelikler',
      'Path specification list contains invalid value in key "%s": %s.' => 'Yol belirtme listesi "%s" anahtarında geçersiz değer içeriyor: %s.',
      'Review Changes With Non-Owner Author (Blocking)' => 'Sahibi Olmayan Yazarla Değişiklikleri Gözden Geçirme (Engelleme)',
      '%s added %s owner(s): %s.' => '%s, %s sahibi ekledi: %s.',
      '%s changed %s ignored attribute(s), removed %s: %s.' => '%s, %s yoksayılmış özellik değiştirdi, %s kaldırıldı: %s.',
      'Find results in any of an owner\'s packages.' => 'Herhangi bir sahibinin paketlerinde sonuçları bulun.',
      'Get the paths for each package.' => 'Her paket için yolları alın.',
      'Search for packages affecting specific paths.' => 'Belirli yolları etkileyen paketleri arayın.',
      'Subscribe to All Changes' => 'Tüm Değişikliklere Abone Ol',
      'Human-readable description of the package.' => 'Paketin insan tarafından okunabilir açıklaması.',
      'Auditing' => 'Denetleme',
      'This package does not contain any paths yet. Use "Edit Paths" to add some.' => 'Bu paket henüz bir yol içermiyor. Bazıları eklemek için "Yolları Düzenle"\'yi kullanın.',
      'Overwrite existing package paths with new paths.' => 'Mevcut yolların üzerine yeni yolların üzerine yaz.',
      'Strong' => 'Güçlü',
      'No Auditing' => 'Denetim Yok',
      'Map of custom fields for Owners packages. For details on adding custom fields to Owners, see "Configuring Custom Fields" in the documentation.' => 'Sahipler paketleri için özel alanların haritası. Sahiplere özel alan ekleme hakkında ayrıntılar için, belgelerde "Özel Alanların Yapılandırılması" bölümüne bakın.',
      'Packages: ...' => 'Paketler: ...',
      'Activate Package' => 'Paketi Etkinleştir',
      'This package will become active again.' => 'Bu paket tekrar aktif olacak.',
      '%s updated the description for this package.' => '%s bu paketin açıklamasını güncelledi.',
      'Adopt today!' => 'Bugün benimseyin!',
      'Ignore paths with any of these attributes.' => 'Bu özelliklerin herhangi birinin bulunduğu yolları yoksay.',
      'This function allows you to find results associated with any of the packages a specified user or project is an owner of. For example, this will find results associated with all of the projects `%s` owns:
    %s
    ' => 'Bu işlev, belirtilen bir kullanıcı veya projenin sahibi olduğu paketlerden herhangi biriyle ilgili sonuçları bulmanıza olanak sağlar. Örneğin, bu, `%s`\'in sahibi olduğu tüm projelerle ilgili sonuçları bulur:
    %s',
      '%s activated this package.' => '%s bu paketi etkinleştirdi.',
      'List of package owners.' => 'Paket sahiplerinin listesi.',
      'Active or archived status of the package.' => 'Paketin aktif veya arşivlenmiş durumu.',
      'Apply transactions to create a new Owners package or edit an existing one.' => 'Yeni bir Sahip paketi oluşturmak veya işlemleri düzenlemek için işlemleri uygulayın.',
      'This package has no open problem commits.' => 'Bu paketin açık bir problemi yok.',
      'PACKAGE DETAIL' => 'PAKET DETAYI',
      'Configure forms for creating and editing packages in Owners.' => 'Sahiplerde paket oluşturmak ve düzenlemek için formları yapılandırın.',
      '%s removed %s owner(s): %s.' => '%s, %s sahibi kaldırdı: %s.',
      '%s adjusted package dominion rules from %s to %s.' => '%s paket hakimiyet kuralları %s\'den %s\'e ayarlandı.',
      'CHANGES TO PACKAGE DESCRIPTION' => 'PAKET AÇIKLAMASINDAKİ DEĞİŞİKLİKLER',
      'Autoreview setting "%s" is not valid. Valid settings are: %s.' => 'Otomatik görüntüleme ayarı "%s" geçerli değil. Geçerli ayarlar: %s.',
      'Edit Paths: %s' => 'Yolları Düzenle: %s',
      'Package %d' => 'Paket %s',
      'Add New Path' => 'Yeni Yol Ekle',
      '%s changed the audit rule for this package from %s to %s.' => '%s, bu paketin denetim kuralını %s\'den %s\'e değiştirdi.',
      'Active Packages' => 'Paketleri Etkinleştir',
      'Exclude' => 'Harici Et',
      'Archive Package' => 'Paketi Arşivle',
      'Weak (Control Unowned Paths)' => 'Zayıf (Sahipsiz Yolları Kontrol Et)',
      'Auto audit information.' => 'Otomatik denetim bilgisi.',
      'This package will be marked as archived.' => 'Bu paket arşivlenmiş olarak işaretlenecektir.',
    );
  }

}
