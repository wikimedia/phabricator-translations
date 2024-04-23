<?php

final class PhabricatorFeedTr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'tr';
  }

  protected function getTranslations() {
    return array(
      'Call %s before publishing!' => 'Yayınlamadan önce %s arayın!',
      'Dictionary with various data of the story' => 'Hikayenin çeşitli verileri ile sözlük',
      'All Stories' => 'Tüm Hikayeler',
      'Query the feed for stories' => 'Hikayeler için özet akışını sorgula',
      'Story type must be a valid class name and must subclass %s. \'%s\' is not a subclass of %s.' => 'Öykü türü geçerli bir sınıf adı olmalı ve %s alt sınıfını almalıdır. \'%s\', %s bir alt sınıf değil.',
      'Full HTML presentation of story' => 'Hikayenin tam HTML sunumu',
      '(Unable to render story of class %s for Doorkeeper.)' => '(Doorkeeper için %s sınıfının hikayesi hazırlanamadı.)',
      'Story has no primary object!' => 'Hikayenin birincil nesnesi yok!',
      'Republishing story...' => 'Hikaye yeniden yayınlanıyor...',
      'Story is asking for an object it did not request (\'%s\')!' => 'Öykü, istemediği bir nesneyi istiyor (\'%s\')!',
      'Simple one-line plain text representation of story' => 'Hikayenin basit tek satırlık düz metin gösterimi',
      'Include Projects' => 'Projeleri Dahil Et',
      'Specify a story key to republish.' => 'Yeniden yayınlamak için bir hikaye anahtarı belirtin.',
      'The specified "Occurs Before" date is earlier in time than the specified "Occurs After" date, so this query can never match any results.' => 'Belirtilen "Önce Oluşur" tarihi, belirtilen "Oluştuktan Sonra" tarihinden daha erkendir, bu nedenle bu sorgu hiçbir sonuçla eşleşemez.',
      'Republish a feed event to all consumers.' => 'Bir yayın etkinliğini tüm tüketicilere yeniden yayınlayın.',
      'Include Users' => 'Kullanıcıları Dahil Et',
      'Feed Story Failed to Render (%s)' => 'Yayın Hikayesi Oluşturulamadı (%s)',
      'Story' => 'Hikaye',
      'Full dictionary of story data plus rendered HTML' => 'Hikaye verilerinin tam sözlüğü ve işlenmiş HTML',
      'Specify exactly one story key to republish.' => 'Yeniden yayınlamak için tam olarak bir hikaye anahtarı belirtin.',
      'You must call %s if you %s!' => '%2$s iseniz %1$s\'i aramalısınız!',
      'Unloaded Object \'%s\'' => 'Yüklenmemiş Nesne \'%s\'',
      'No story exists with key "%s"!' => '"%s" anahtarına sahip hiçbir hikaye yok!',
      'Feed options.' => 'Yayın seçenekleri.',
      'Deprecated.' => 'Kullanımdan kaldırıldı.',
      'No Stories.' => 'Hikaye Yok.',
      'Story contains only the title of the story' => 'Hikaye yalnızca hikayenin başlığını içerir',
      'Unsupported view type, possibles are: %s' => 'Desteklenmeyen görünüm türü, olasılıklar: %s',
      'Object Types' => 'Nesne Türleri',
      'Transaction Logs' => 'İşlem Kütüğü',
      'Trying to retrieve markup field key "%s", but this feed story did not request it be rendered.' => '"%s" işaretleme alan anahtarını almaya çalışıyor, ancak bu yayın öyküsü oluşturulmasını istemedi.',
      'Feed Stories' => 'Yayın Hikayeleri',
      'Unknown rendering target: %s' => 'Bilinmeyen görüntü oluşturma hedefi: %s',
      'Include stories about projects I am a member of.' => 'Üyesi olduğum projelerle ilgili hikayeleri dahil et.',
      'All Transactions' => 'Tüm İşlemler',
      'Story type must be a valid class name and must subclass %s. \'%s\' is not a loadable class.' => 'Öykü türü geçerli bir sınıf adı olmalı ve %s alt sınıfını almalıdır. \'%s\' yüklenebilir bir sınıf değil.',
      'Feed story (with key "%s") does not exist or could not be loaded.' => 'Yayın hikayesi ("%s" tuşuyla) mevcut değil veya yüklenemedi.',
      'Review Recent Activity' => 'Son Etkinliği İnceleyin',
    );
  }

}
