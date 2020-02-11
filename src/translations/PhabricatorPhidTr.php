<?php

final class PhabricatorPhidTr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'tr';
  }

  protected function getTranslations() {
    return array(
      'Retrieve information about an arbitrary PHID.' => 'Keyfi bir PHID hakkında bilgi al.',
      'Requested handle "%s" was not loaded.' => 'İstenen tanıtıcı "%s" yüklenmedi.',
      'Handles should use viewer handle pool cache.' => 'Kollar, görüntüleyici tanıtıcı depo önbelleğini kullanmalıdır.',
      'Restricted %s' => 'Sınırlı %s',
      'Trying to mutate a %s, but this is not permitted; handle lists are immutable.' => '%s bir değer değiştirmeye çalışıyor, ancak buna izin verilmiyor; işleç listeleri değişmez.',
      '%s class "%s" has an invalid %s property. PHID constants must be a four character uppercase string.' => '%s sınıfı "%s" geçersiz bir %s özelliğine sahip. PHID sabitleri dört karakterli büyük bir dize olmalıdır.',
      'Attempting to load PHID "%s", but it was not requested by any handle list.' => 'PHID "%s" yüklenmeye çalışılıyor, ancak herhangi bir tanıtıcı listesi tarafından istenmedi.',
      'The objects you have listed include objects of the wrong type (%s).' => 'Listelenen nesneler yanlış türde nesneler içeriyor (%s).',
      'Query Test Package' => 'Sorgu Test Paketi',
      'Application Email' => 'Başvuru E-postası',
      'Look up objects by name.' => 'Nesneleri ada göre arayın.',
      'Trying to render a handle which does not exist!' => 'Var olmayan bir tutamaç yapmaya çalışıyor!',
      'Retrieve information about arbitrary PHIDs.' => 'Keyfi PHID\'ler hakkında bilgi edinin.',
      'Unknown Object (%s)' => 'Bilinmeyen Nesne (%s)',
      'The objects you have listed include objects which do not exist (%s).' => 'Listelenen nesneler var olmayan nesneleri içerir (%s).',
      'Trying to create a new sublist of an existing handle list, but PHID "%s" does not appear in the parent list.' => 'Mevcut bir tanıtıcı listesinin yeni bir alt listesini oluşturmaya çalışıyor, ancak PHID "%s" üst listede görünmüyor.',
      'Replaced by \'phid.query\'.' => '\'phid.query\' ile değiştirildi.',
      'The objects you have listed include objects of the wrong type (%s) and objects which do not exist (%s).' => 'Listelenen nesneler yanlış türde (%s) ve olmayan (%s) nesneleri içerir.',
      'No such object exists.' => 'Böyle bir nesne yok.',
      'Can not generate PHID with no type.' => 'Türü olmayan PHID üretilemiyor.',
    );
  }

}
