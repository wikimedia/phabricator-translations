<?php

final class PhabricatorPhragmentTr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'tr';
  }

  protected function getTranslations() {
    return array(
      'Snapshot names can not contain "/".' => 'Anlık görüntü adları "/" içeremez.',
      'Update Fragment' => 'Parçayı Güncelle',
      'Phragment' => 'Phragment',
      'Select the snapshot you want to promote to \'%s\':' => '\'%s\'e yükseltmek istediğiniz anlık görüntüyü seçin:',
      'Revert to Here' => 'Buraya Geri Al',
      'Download Version' => 'Sürüm İndir',
      'Unable to open ZIP.' => 'ZIP açılamıyor.',
      'Download Snapshot as ZIP' => 'Anlık Görüntüyü ZIP Olarak İndir',
      'Download Contents as ZIP' => 'İçeriği ZIP Olarak İndir',
      'Create Fragments' => 'Fragmanlar Oluştur',
      'File must have mimetype \'%s\'.' => 'Dosyada \'%s\' mimetipi olmalı.',
      'Delete Snapshot' => 'Anlık Görüntü Sil',
      'Deleting this snapshot is a permanent operation. You can not recover the state of the snapshot.' => 'Bu anlık görüntüyü silmek kalıcı bir işlemdir. Anlık görüntünün durumunu kurtaramazsınız.',
      'Can Create Fragments' => 'Fragmanlar Oluşturabilir',
      'Because Phragment generates files (such as ZIP archives and patches) as they are requested, it requires that you configure the `%s` option. This option on it\'s own will also provide additional security when serving files across Phabricator.' => 'Phragment istendiği gibi dosyalar (ZIP arşivleri ve yamalar) oluşturduğundan, `%s` seçeneğini yapılandırmanız gerekir. Bu seçenek kendi başına, Phabricator\'da dosya sunarken ek güvenlik sağlar.',
      'Latest Version' => 'En Son Sürüm',
      'Edit Fragment Policies: %s' => 'Parça Politikalarını Düzenle: %s',
      'ZIP Extension Not Installed' => 'ZIP Uzantısı Yüklenmedi',
      'Really delete this snapshot?' => 'Bu anlık görüntüyü gerçekten silinsin mi?',
      'Versioned Artifact Storage' => 'Sürümlü Ürün Depolama',
      'View Version %d' => 'Sürüm %s Görüntüle',
      'Create Snapshot' => 'Anlık Görüntü Oluştur',
      'The specified file doesn\'t exist.' => 'Belirtilen dosya mevcut değil.',
      'View Version' => 'Sürümü Görüntüle',
      'Directory' => 'Rehber',
      'Errors while updating fragment' => 'Parça güncellenirken hatalar oluştu',
      'Fragment Version %d: %s' => 'Parça Sürümü %s: %s',
      'No such fragment exists.' => 'Böyle bir parça yok.',
      'Snapshots' => 'Anlık resimler',
      'Snapshot Name' => 'Anlık Görüntü Adı',
      'Promote Snapshot to Here' => 'Anlık Fotoğrafı Buraya Tanıtın',
      'Prior to any content (empty file)' => 'Herhangi bir içerikten önce (boş dosya)',
      'File ID' => 'Dosya Kimliği',
      'No snapshots to promote' => 'Tanıtılacak anlık görüntü yok',
      '%s at version %d' => '%2$s sürümünde %1$s',
      'Promote' => 'Destekleme',
      'Edit Fragment Policies' => 'Parça İlkelerini Düzenle',
      'Parent Path' => 'Ana Yol',
      'The file associated with this version was not found.' => 'Bu sürümle ilişkilendirilmiş dosya bulunamadı.',
      'The snapshot will contain the following fragments at the specified versions: ' => 'Anlık görüntü, belirtilen sürümlerde aşağıdaki parçaları içerecektir:',
      'Get Patch' => 'Yama Al',
      'Snapshot: %s' => 'Anlık Görüntü: %s',
      'The fragment name can not contain \'/\'.' => 'Parça adı \'/\' içeremez.',
      'A snapshot with this name already exists.' => 'Bu ada sahip bir anlık görüntü zaten var.',
      '%s must be configured!' => '%s yapılandırılmalıdır!',
      'Save Fragment Policies' => 'Parça İlkelerini Kaydet',
      'Reverting this fragment to version %d will create a new version of the fragment. It will not delete any version history.' => 'Bu parçayı %s sürümüne geri almak, parçanın yeni bir versiyonunu oluşturacaktır. Herhangi bir sürüm geçmişini silmez.',
      'Update Fragment: %s' => 'Güncelleme Parçası: %s',
      'File (Deleted)' => 'Dosya (Silindi)',
      'Query fragments based on their paths.' => 'Yollarını temel alarak parçaları sorgula.',
      'Last Updated %s' => 'Son Güncelleme %s',
      'View Snapshot' => 'Anlık Görüntüyü Görüntüle',
      '"%s" Snapshot' => '"%s" Anlık Görüntü',
      'View Child Fragments' => 'Alt Parçaları Göster',
      'Errors while creating fragment' => 'Parça oluşturulurken hatalar',
      'Download' => 'İndir',
      'Fragment Path' => 'Parça Yolu',
      'You must specify a name.' => 'Bir isim belirtmelisiniz.',
      'Set Fragment Policies' => 'Parça Politikalarını Ayarla',
      'Create Fragment' => 'Parça Oluştur',
      'Select the snapshot you want to promote to the latest version:' => 'En son sürüme yükseltmek istediğiniz fotoğrafı seçin:',
      'This system does not have the ZIP PHP extension installed. This is required to download ZIPs from Phragment.' => 'Bu sistem ZIP PHP uzantısına sahip değil. Bu, Phragment\'ten ZIP indirmek için gereklidir.',
      'Snapshot' => 'Anlık Resim',
      'There are no snapshots available to promote.' => 'Teşvik edilecek hiçbir anlık görüntü yok.',
      'Download Fragment' => 'Parçayı İndir',
      'Prior to Version 0' => '0 Sürümünden Önce',
      'Latest Version %s' => 'Son Sürüm %s',
      'Browse Fragments' => 'Parçalara Göz At',
      'Really revert this fragment?' => 'Gerçekten bu parçayı geri alınsın mı?',
      'Fragment Version' => 'Parça Sürümü',
      'Promote which snapshot?' => 'Hangi anlık görüntüyü tanıtınsın?',
      'Deletion' => 'Silinme',
      'Promote Another Snapshot to Here' => 'Buraya Başka Bir Anlık Fotoğrafı Tanıtın',
      'Replace policies on child fragments with the policies above.' => 'Alt kısımlardaki politikaları yukarıdaki politikalarla değiştirin.',
      'You do not have permission to create fragments.' => 'Parça oluşturma izniniz yok.',
      'Convert to File' => 'Dosyaya Dönüştür',
      'Fragment History' => 'Parça Geçmişi',
      'Create Snapshot of %s' => '%s Anlık Görüntü Oluştur',
      'Unable to create ZIP archive!' => 'ZIP arşivi oluşturulamıyor!',
      'Fragment %s: %s' => 'Parça %s: %s',
      'Retrieve the patches to apply for a given set of files.' => 'Belirli bir dosya grubuna uygulanacak yamaları alın.',
    );
  }

}