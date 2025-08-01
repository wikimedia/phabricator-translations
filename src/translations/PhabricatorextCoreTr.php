<?php

final class PhabricatorextCoreTr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'tr';
  }

  protected function getTranslations() {
    return array(
      'Escalate' => 'Eskale et',
      'Next: %s' => 'Sonraki: %s',
      'Standard Phabricator.' => 'Standart Phabricator.',
      'Consumer Token' => 'Kullanıcı anahtarı',
      'Merged' => 'Birleştirildi',
      'Unresolved code review comments: %d' => 'Çözülmemiş kod inceleme yorumları: %s',
      'Customize query in gerrit' => 'Gerrit\'te sorguyu özelleştir',
      'Unknown objectType \'%s\'' => 'Bilinmeyen objectType \'%s\'',
      'Show related patches' => 'İlgili yamaları gösterin',
      'Related Links' => 'İlgili bağlantılar',
      'No deployments on fridays' => 'Cuma günleri dağıtım yok',
      'You must provide either a username or userPHID' => 'Kullanıcı adı veya userPHID sağlamak zorundasınız',
      'MediaWiki base URI is required.' => 'MediaWiki temel URI adresi gerekiyor.',
      'Unknown policies: %s' => 'Bilinmeyen politikalar: %s',
      'Protect as security issue' => 'Güvenlik sorunu olarak koru',
      'OAuth JWT iss didn\'t match expected server name' => 'OAuth JWT iss için beklenen sunucu adıyla eşleşmedi.',
      'Show verbose output.' => 'Ayrıntılı çıktıyı gösterin.',
      'ChangeId' => 'ChangeId',
      'Only admins can call this API' => 'Bu API\'yi sadece hizmetliler çağırabilir.',
      'Release Details' => 'Çıkış Ayrıntıları',
      'Allow' => 'İzin ver',
      'WIP - Work in Progress' => 'WIP - Süreç içerisindeki iş',
      'LDAP User' => 'LDAP kullanıcısı',
      'Invalid action \'%s\'!' => 'Geçersiz eylem \'%s\'!',
      'MediaWiki' => 'MediaWiki',
      'MediaWiki Base URI' => 'MediaWiki Temel URI',
      'Execute searches for Policies.' => 'Politikalar için arama yap.',
      'Execute a rollback.' => 'Geri döndürme işlemini yapın',
      'Deny' => 'Reddet',
      'Invalid' => 'Geçersiz',
      'View Change in Gerrit' => 'Gerrit\'teki değişiklikleri inceleyin',
      'Link to Open Tasks' => 'Açık görevlere bağla',
      'Secret Token' => 'Gizli Anahtar',
      'Secret Token is required' => 'Gizli Anahtar gereklidir',
      'Limit the number of transaction rows to process. Default: 10000' => 'İşlenecek işlem satırlarının sayısını ayarlayın. Varsayılan değer: 10000',
      'objectType is required.' => 'objectType gereklidir.',
      'Unknown or missing ldap names: %s' => 'Bilinmeyen veya eksik ldap adları: %s',
      'Invalid rule class \'%s\'!' => 'Geçersiz kural sınıfı \'%s\'!',
      'Gerrit Patches' => 'Gerrit yamaları',
      'Sort by Last Update' => 'Son güncellemeye göre sırala',
      '%s Line(s) removed' => '%s Satır kaldırıldı',
      'Hide Instructions' => 'Talimatları gizle',
      'users subscribed to' => 'kullanıcılar şuraya abone oldu',
      'PHIDs required' => 'PHID\'ler gereklidir',
      'Expert Mode.' => 'Uzman Modu.',
      'The specified username / userPHID was not found' => 'Belirtilen kullanıcı adı / userPHID bulunamadı',
      'How this works' => 'Nasıl çalışır',
      'MediaWiki User' => 'MediaWiki Kullanıcısı',
      'Reset security settings' => 'Güvenlik ayarlarını sıfırla',
      'Open Tasks' => 'Görevleri Aç',
      'Unknown' => 'Bilinmiyor',
      'Global Accounts' => 'Küresel Hesaplar',
      'Previous: %s' => 'Önceki: %s',
      'Expert Mode' => 'Uzman Modu',
      'Unknown or missing mediawiki names: %s' => 'Bilinmeyen veya eksik mediawiki adı: %s',
      'No Permission' => 'İzin Yok',
      'Required' => 'Gerekli',
      'Abandoned' => 'Terk edilmiş',
      '%s Line(s) added' => '%s Satır eklendi',
      'Comments' => 'Yorumlar',
    );
  }

}
