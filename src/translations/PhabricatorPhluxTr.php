<?php

final class PhabricatorPhluxTr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'tr';
  }

  protected function getTranslations() {
    return array(
      'Update Variable' => 'Değişkeni Güncelle',
      'Variable value must be valid JSON.' => 'Değişken değer geçerli JSON olmalıdır.',
      'Lowercase letters, digits, dot and hyphen only.' => 'Yalnızca küçük harf, rakam, nokta ve kısa çizgi.',
      'Edit Variable: %s' => 'Değişkeni Düzenle: %s',
      'Key/Value Configuration Store' => 'Anahtar/Değer Yapılandırma Mağazası',
      'Variable "%s"' => 'Değişken "%s"',
      'Phlux Variables' => 'Phlux Değişkenler',
      'Enter value as JSON.' => 'JSON olarak değer girin.',
      'Variable key must be unique.' => 'Değişken anahtar benzersiz olmalıdır.',
      'Create Variable' => 'Değişken Oluştur',
      'Phlux' => 'Phlux',
      '%s updated this variable.' => '%s, bu değişkeni güncelledi.',
      '%s created this variable.' => '%s, bu değişkeni oluşturdu.',
      'Edit Variable' => 'Değişkeni Düzenle',
      'Variable List' => 'Değişken Listesi',
      'Variable key is required.' => 'Değişken anahtarı zorunludur.',
      'Variable key "%s" must contain only lowercase letters, digits, period, and hyphen.' => '"%s" değişken anahtarında yalnızca küçük harfler, rakamlar, nokta ve kısa çizgi bulunmalıdır.',
    );
  }

}
