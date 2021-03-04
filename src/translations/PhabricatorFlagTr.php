<?php

final class PhabricatorFlagTr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'tr';
  }

  protected function getTranslations() {
    return array(
      'Marked with "%s" flag.' => '"%s" işaretiyle işaretlenmiştir.',
      'Personal Bookmarks' => 'Kişisel Yer İşaretleri',
      'Query flag markers.' => 'Sorgu bayrağı işaretleri.',
      'Clear a flag.' => 'Bir bayrağını temizle.',
      'Purple' => 'Mor',
      'Unknown groupBy parameter: %s' => 'Bilinmeyen groupBy parametresi: %s',
      'Mark with %s flag.' => '%s bayrakla işaretleyin.',
      'Flags are private. Only you can view or edit your flags.' => 'Bayraklar özeldir. Bayraklarınızı yalnızca siz görüntüleyebilir veya düzenleyebilirsiniz.',
      'Must pass an id or an objectPHID.' => 'Bir kimliği veya bir objectPHID geçirmesi gerekir.',
      'Already marked with %s flag.' => 'Zaten %s bayrakla işaretlendi.',
      'Flag For Later' => 'Daha Sonrası için İşaretle',
      'You are not the creator of this flag.' => 'Sen bu bayrağın yaratıcısı değilsin.',
      'Flag %s' => 'Bayrak %s',
      'Create or modify a flag.' => 'Bir bayrak oluşturun veya değiştirin.',
      'Create Flag' => 'Bayrak Oluştur',
      'You can flag this %s if you want to remember to look at it later.' => 'Daha sonra bakmayı hatırlamak istiyorsanız, bu %s\'i işaretleyebilirsiniz.',
      'No flags found.' => 'Bayrak bulunamadı.',
      'Bad flag ID.' => 'Kötü bayrak kimliği.',
      'Remove %s Flag' => '%s Bayrağı Kaldır',
      'All Object Types' => 'Tüm Nesne Türleri',
      'Already Marked' => 'Zaten İşaretlenmiş',
      'Flag Color' => 'Bayrak Rengi',
      'Mark with flag' => 'Bayrakla işaretle',
      'Flagged' => 'İşaretlenmiş',
    );
  }

}
