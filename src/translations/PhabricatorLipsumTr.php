<?php

final class PhabricatorLipsumTr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'tr';
  }

  protected function getTranslations() {
    return array(
      'Argument "%s" does not match the name of any generators.' => 'Argüman "%s", herhangi bir jeneratörler ismiyle eşleşmiyor.',
      'A lipsum generator is registered with key "%s". This key is reserved.' => 'Bir lipsum jeneratörü "%s" anahtarıyla kaydedilir. Bu anahtar saklıdır.',
      'Failed to load a random user. You may need to generate more test users first.' => 'Rastgele bir kullanıcı yüklenemedi. Önce daha fazla test kullanıcısı oluşturmanız gerekebilir.',
      'Generate objects without prompting for confirmation.' => 'Onay istemeden nesneler oluşturun.',
      'LIPSUM' => 'LIPSUM',
      'Unable to load symbol %s: this class does not exist.' => '%s sembolü yüklenemedi: Bu sınıf mevcut değil.',
      'Generator ("%s") was unable to generate an object.' => 'Jeneratör ("%s") bir nesne oluşturamadı.',
      'OOPS' => '
    OOPS',
      'This command generates synthetic test data, including user accounts. It is intended for use in development environments so you can test features more easily. There is no easy way to delete this data or undo the effects of this command. If you run it in a production environment, it will pollute your data with large amounts of meaningless garbage that you can not get rid of.' => 'Bu komut, kullanıcı hesapları dâhil olmak üzere sentetik test verileri üretir. Geliştirme ortamlarında kullanılmak üzere tasarlanmıştır, böylece özellikleri daha kolay test edebilirsiniz. Bu verileri silmenin veya bu komutun etkilerini geri almanın kolay bir yolu yoktur. Bir üretim ortamında çalıştırırsanız, verilerinizi gereksiz miktarlarda gereksiz çöplerle kirletemezsiniz.',
      'Generate synthetic test objects.' => 'Sentetik test objeleri oluşturun.',
      'class' => 'sınıf',
      'Generating synthetic test objects forever. Use ^C to stop when satisfied.' => 'Sonsuza kadar sentetik test nesneleri üretmek. Memnun kaldığında durdurmak için ^C kullanın.',
      'Generated "%s": %s' => 'Oluşturuldu "%s": %s',
      'Choose which type or types of test data you want to generate, or select "%s".' => 'Oluşturmak istediğiniz test türlerini seçin veya "%s" seçeneğini belirleyin.',
      'Generate objects as quickly as possible.' => 'Nesneleri olabildiğince çabuk oluşturun.',
      'Argument "%s" is ambiguous, and matches multiple generators: %s.' => 'Argüman "%s" belirsizdir ve birden fazla jeneratörü eşleştirir: %s.',
      'lipsum is a development and testing tool and may only be run on installs in developer mode. Enable "%s" in your configuration to enable lipsum.' => 'lipsum bir geliştirme ve test aracıdır ve yalnızca geliştirici modunda kurulumlarda çalıştırılabilir. Lipsum\'u etkinleştirmek için konfigürasyonunuzda "%s"i etkinleştirin.',
      'Selected generators: %s.' => 'Seçilen jeneratörler: %s.',
      'GENERATORS' => 'JENERATÖRLER',
      'Are you sure you want to generate piles of garbage?' => 'Çöp yığınları üretmek istediğinden emin misin?',
    );
  }

}
