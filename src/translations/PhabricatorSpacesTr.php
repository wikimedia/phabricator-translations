<?php

final class PhabricatorSpacesTr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'tr';
  }

  protected function getTranslations() {
    return array(
      '%s updated the space description for %s.' => '%s, %s için alan açıklamasını güncelledi.',
      '(This error generally indicates that %s is enabled, but there are no spaces with a "%s" view policy. These settings are contradictory and imply a misconfiguration.)' => '(Bu hata genellikle %s etkin olduğunu gösterir, ancak "%s" görünüm politikasına sahip hiçbir boşluk yoktur. Bu ayarlar çelişkilidir ve yanlış bir yapılandırma anlamına gelir.)',
      'Spaces User Guide' => 'Kullanım Alan Kılavuzu',
      'Hide Active Spaces' => 'Aktif Alanları Gizle',
      '%s updated the space description.' => '%s, alan açıklamasını güncelledi.',
      '%s archived space %s.' => '%s, %s alanı arşivledi.',
      'PHID of the policy space this object is part of.' => 'Bu nesnenin parçası olduğu politika alanının PHID\'si.',
      'Default edit policy for newly created spaces.' => 'Yeni oluşturulan alanlar için varsayılan düzenleme politikası.',
      'Only the first space created can be the default space, and it must remain the default space evermore.' => 'Yalnızca oluşturulan ilk alan varsayılan alan olabilir ve bunun dışında kalan varsayılan alan da kalmalıdır.',
      'Search for objects in certain spaces.' => 'Belirli alanlardaki nesneleri arayın.',
      'Activate Space: %s' => 'Alanı Etkinleştir: %s',
      'Support for Spaces' => 'Alanları Destek',
      '%s renamed space %s from %s to %s.' => '%s, %s üzerinden %s ile %s alan değiştirdi.',
      'Create a Space' => 'Alan Oluştur',
      'Alternate Space' => 'Alternatif Alan',
      '%s activated this space.' => '%s bu alanı etkinleştirdi.',
      'Archive Space: %s' => 'Arşiv Alanı: %s',
      'Spaces must have a name.' => 'Boşlukların bir adı olmalı.',
      'Existing objects in this Space will be hidden from query results by default.' => 'Bu alandaki mevcut nesneler, varsayılan olarak sorgu sonuçlarından gizlenir.',
      '%s made this the default space.' => '%s bunu varsayılan alan yaptı.',
      '%s archived this space.' => '%s bu alanı arşivledi.',
      'Type a space name...' => 'Bir boşluk adı yazın...',
      'Existing objects will no longer be hidden from query results.' => 'Mevcut nesneler artık sorgu sonuçlarından gizlenmeyecek.',
      'You do not have permission to create spaces.' => 'Boşluk oluşturma izniniz yok.',
      'Ask someone to give you access to a space so you can view and create objects.' => 'Birinden sizden bir alana erişim izni vermesini isteyin, böylece nesneleri görüntüleyip oluşturabilirsiniz.',
      'Default Space' => 'Varsayılan Alan',
      'Archive Space' => 'Arşiv Alanı',
      'CHANGES TO SPACE DESCRIPTION' => 'BOŞLUK AÇIKLAMASINDAKİ DEĞİŞİKLİKLER',
      'Default view policy for newly created spaces.' => 'Yeni oluşturulan alanlar için varsayılan görünüm politikası.',
      'Spaces' => 'Alanlar',
      'Drift Aimlessly' => 'Amaçsızca Drift',
      'Browse Spaces' => 'Alanları Göz At',
      'Can Create Spaces' => 'Alanlar Oluşturabilir',
      'All Spaces' => 'Tüm Alanlar',
      'Control access to groups of objects.' => 'Nesne gruplarına erişimi denetleyin.',
      'If you activate this space, you will be able to create objects inside it again.' => 'Bu alanı etkinleştirirseniz, içinde yeniden nesneler oluşturabileceksiniz.',
      'Create Space' => 'Alan Oluştur',
      'Log in, or ask someone to create a public space which logged out users are permitted to access.' => 'Giriş yapın veya birinden çıkış yapmış kullanıcıların erişmesine izin verilen bir ortak alan yaratmasını isteyin.',
      'Policy Namespaces' => 'Politika Ad Alanları',
      '%s activated space %s.' => '%s, %s alanı etkinleştirdi.',
      '%s created this space.' => '%s bu alanı oluşturdu.',
      'Space %s: %s' => 'Alan %s: %s',
      'No Access to Spaces' => 'Alanlara Erişim Yok',
      '%s renamed this space from %s to %s.' => '%s, bu alanı %s iken %s olarak yeniden adlandırdı.',
      'No spaces found.' => 'Alan bulunamadı.',
      'This install uses spaces to organize objects, but logged out users do not have access to any spaces.' => 'Bu yükleme, nesneleri düzenlemek için boşluk kullanır, ancak oturumu kapatmış kullanıcılar herhangi bir alana erişemez.',
      'Edit Space' => 'Alanı Düzenle',
      'Test Space' => 'Alanı Test Et',
      '%s made space %s the default space.' => '%s, %s alanını varsayılan alan yaptı.',
      'NOTE: You are creating the **default space**. All existing objects will be put into this space. You must create a default space before you can create other spaces.' => 'NOT: **Varsayılan alanı** oluşturuyorsunuz. Mevcut tüm nesneler bu alana yerleştirilecektir. Başka boşluklar oluşturmadan önce varsayılan bir boşluk oluşturmanız gerekir.',
      'Activate Space' => 'Alanı Etkinleştir',
      'PhabricatorSpacesApplication' => 'PhabricatorAlanUygulaması',
      'Show Only Active Spaces' => 'Yalnızca Etkin Alanları Göster',
      'Policy namespaces to segment object visibility throughout your instance.' => 'İlke ad alanları, örneğiniz boyunca nesne görünürlüğünü bölümlere ayırmak için.',
      'If you archive this Space, you will no longer be able to create new objects inside it.' => 'Bu Alanı arşivlerseniz, artık içinde yeni nesneler oluşturamazsınız.',
      '%s created space %s.' => '%s, %s alan oluşturdu.',
      'Default Space #2' => 'Varsayılan Alan #2',
      'Active Spaces' => 'Etkin Alanlar',
      'This install uses spaces to organize objects, but your account does not have access to any spaces.' => 'Bu yükleme, nesneleri düzenlemek için boşluk kullanır, ancak hesabınız herhangi bir alana erişemez.',
    );
  }

}
