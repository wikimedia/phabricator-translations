<?php

final class PhabricatorAuditTr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'tr';
  }

  protected function getTranslations() {
    return array(
      'A commit is created.' => 'Bir taahhüt oluşturuldu.',
      'USERS' => 'KULLANICILAR',
      'Find commits with particular identifiers (usually, hashes). Supports full or partial identifiers (like "abcd12340987..." or "abcd1234") and qualified or unqualified identifiers (like "rXabcd1234" or "abcd1234").' => 'Belirli tanımlayıcılara (genellikle karma) sahip taahhütler bulun. Tam veya kısmi tanımlayıcıları ("abcd12340987..." veya "abcd1234" gibi) ve nitelikli veya niteliksiz tanımlayıcıları ("rXabcd1234" veya "abcd1234" gibi) destekler.',
      '%s resigned from auditing %s.' => '%s, %s denetiminden istifa etti.',
      'Specified maximum date must come after specified minimum date.' => 'Belirtilen maksimum tarih, belirtilen minimum tarihten sonra gelmelidir.',
      'A commit\'s projects change.' => 'Bir taahhüdün projeleri değişir.',
      '%s added subscribers: %s.' => '%s abone ekledi: %s.',
      'Query audit requests.' => 'Sorgu denetimi istekleri.',
      'Specify "--all" to affect everything, or a list of specific commits or repositories to affect.' => 'Her şeyi etkilemek için "--all" veya etkilenecek belirli taahhütlerin veya depoların bir listesini belirtin.',
      'Update all commits in all repositories.' => 'Tüm depolardaki tüm taahhütleri güncelleyin.',
      '%s added subscribers...' => '%s abone ekledi...',
      'A commit is closed.' => 'Bir taahhüt kapatıldı.',
      '%s added auditors...' => '%s denetçi eklendi...',
      '%s resigned from this audit.' => '%s bu denetimden istifa etti.',
      'Updating "%s" (%s)...' => '"%s" güncelleniyor (%s)...',
      '%s removed auditors from %s: %s.' => '%s, %s denetçiyi kaldırdı: %s.',
      'Select only audits in a given list of repositories.' => 'Yalnızca belirli bir depo listesindeki denetimleri seçin.',
      'No synchronization changes for "%s".' => '"%s" için senkronizasyon değişikliği yok.',
      'Find or exclude unreachable commits which are not ancestors of any branch, tag, or ref.' => 'Herhangi bir şube, etiket veya referansın atası olmayan ulaşılamayan taahhütleri bulun veya hariç tutun.',
      'Welcome to Audit' => 'Denetim\'e Hoş Geldiniz',
      'Select only audits for commits on or after the given date.' => 'Yalnızca belirtilen tarihte veya bu tarihten sonraki taahhütler için denetimleri seçin.',
      'Object "%s" is not a valid object.' => '"%s" nesnesi geçerli bir nesne değil.',
      'Hide Unreachable Commits' => 'Ulaşılamayan Taahhütleri Gizle',
      'Audit Not Required' => 'Denetim Gerekmez',
      '%s committed %s (authored by %s).' => '%s, %s taahhüt etti (%s yazdı).',
      'Select only audits for commits on or before the given date.' => 'Yalnızca belirtilen tarihte veya daha önceki taahhütler için denetimleri seçin.',
      'All Commits' => 'Tüm Taahhütler',
      '%s added auditors to %s: %s.' => '%s, %s denetçileri ekledi: %s.',
      'Select only audits with the given IDs.' => 'Yalnızca belirtilen kimliklere sahip denetimleri seçin.',
      'A commit has an auditor resign.' => 'Bir taahhütte denetçi istifa vardır.',
      'Find commits with given audit statuses.' => 'Verilen denetim durumlarına sahip taahhütleri bulun.',
      'Select only audits in the given status. By default, only open audits are selected.' => 'Yalnızca belirtilen durumdaki denetimleri seçin. Varsayılan olarak, yalnızca açık denetimler seçilidir.',
      'Auditors: %s' => 'Denetçiler: %s',
      'Object "%s" is not a valid repository or commit.' => '"%s" nesnesi geçerli bir depo veya taahhüt değil.',
      'Unable to parse date "%s". Use a format like "%s".' => '"%s" tarihi ayrıştırılamıyor. "%s" gibi bir biçim kullanın.',
      'Failed to load commit during transaction finalization!' => 'İşlemin sonlandırılması sırasında taahhüt yüklenemedi!',
      'Update commits to make their summary audit state reflect the state of their actual audit requests. This can fix inconsistencies in database state if audit requests have been mangled accidentally (or on purpose).' => 'Güncelleme, özet denetim durumlarının gerçek denetim taleplerinin durumunu yansıtmasını taahhüt eder. Bu, denetim istekleri yanlışlıkla (veya bilerek) yönetiliyorsa veritabanı durumundaki tutarsızlıkları giderebilir.',
      'A commit has auditors added.' => 'Bir taahhüt, denetçiler ekledi.',
      'Select only audits by a given list of users.' => 'Yalnızca belirli bir kullanıcı listesinin denetimlerini seçin.',
      'Identifiers' => 'Tanımlayıcılar',
      '%s edited subscribers; added: %s, removed: %s.' => '%s aboneliği düzeltti; eklendi: %s, kaldırıldı: %s.',
      'Failed to reload commit ("%s").' => 'Taahhüt yeniden yüklenemedi ("%s").',
      'Auditor' => 'Denetçi',
      '%s closed the audit of %s.' => '%s, %s denetimi kapattı.',
      'none' => 'yok',
      '%s removed auditors: %s.' => '%s denetçileri kaldırdı: %s.',
      'Show what would be deleted, but do not actually delete anything.' => 'Nelerin silineceğini gösterin, ancak hiçbir şeyi gerçekten silmeyin.',
      'Select only audits for the given commits.' => 'Yalnızca verilen taahhütler için denetimleri seçin.',
      'Find commits which affect given packages.' => 'Verilen paketleri etkileyen taahhütleri bulun.',
      'Show Only Unreachable Commits' => 'Yalnızca Ulaşılamayan Taahhütleri Göster',
      '(This commit affected more than %d files. Only %d are shown here and additional ones are truncated.)' => '(Bu işlem %s\'den fazla dosyayı etkiledi. Burada yalnızca %s gösteriliyor ve ek dosyalar kesiliyor.)',
      'Other commit activity not listed above occurs.' => 'Yukarıda listelenmeyen diğer taahhüt faaliyetleri gerçekleşir.',
      'Update package relationships for commits.' => 'Taahhütler için paket ilişkilerini güncelleyin.',
      'Find commits where given users, projects, or packages are auditors.' => 'Belirli kullanıcıların, projelerin veya paketlerin denetçi olduğu taahhütleri bulun.',
      '%s removed subscribers: %s.' => '%s abone kaldırdı: %s.',
      'Synchronizing "%s": "%s" -> "%s".' => '"%s" senkronize ediliyor: "%s" -> "%s".',
      '%s edited auditors; added: %s, removed: %s.' => '%s denetçileri düzenledi; eklendi: %s, kaldırıldı: %s.',
      'No audits match the query.' => 'Sorgu ile eşleşen denetim yok.',
      'Find commits which are ancestors of a particular ref, like "master".' => '"Usta" gibi belirli bir referansın atası olan taahhütleri bulun.',
      'Was CC\'d' => 'CC\'d idi',
      'Post-commit code review and auditing. Audits you are assigned to will appear here.' => 'İşlem sonrası kod incele ve denetle. Atandığınız denetimler burada görünür.',
      'Ancestors Of' => 'Ataları',
      '%s committed %s.' => '%s %s taahhüt etti.',
      'Find commits authored by particular users.' => 'Bul belirli kullanıcılar tarafından yazılan taahhütleri.',
      'Really delete these %s audit(s)? They will be permanently deleted and can not be recovered.' => 'Bu %s denetimi gerçekten silmek istiyor musunuz? Bunlar kalıcı olarak silinecek ve kurtarılamaz.',
      'A commit has a concerned raised against it.' => 'Bir taahhüdün buna karşı bir endişesi vardır.',
      'Someone comments on a commit.' => 'Birisi bir taahhüt hakkında yorum yapar.',
      'Find commits where given users, projects, or packages are responsible for the next steps in the audit workflow.' => 'Denetim iş akışındaki sonraki adımlardan belirli kullanıcıların, projelerin veya paketlerin sorumlu olduğu taahhütleri bulun.',
      'Specify either a list of objects to affect or "--all", but not both.' => 'Etkilenecek nesnelerin listesini veya "--all" (her ikisini birden değil) belirtin.',
      'This is a dry run, so no changes will be made.' => 'Bu kuru bir çalışmadır, bu nedenle değişiklik yapılmaz.',
      'Audits' => 'Denetimler',
      'Unreachable' => 'Ulaşılamıyor',
      'Active Audits' => 'Aktif Denetimler',
      'Browse and Audit Commits' => 'Taahhüt ve Denetim Taahhütleri',
      'Delete audit requests matching parameters.' => 'Parametrelere uyan denetim isteklerini silin.',
      '%s closed this audit.' => '%s bu denetimi kapattı.',
      'Find commits in particular repositories.' => 'Belirli depolardaki taahhütleri bulun.',
      'No such user with username "%s"!' => '"%s" kullanıcı adına sahip böyle bir kullanıcı yok!',
      'No such commit "%s"!' => 'Böyle bir taahhüt "%s" yok!',
      'Deleting audit %d...' => 'Denetim %s siliniyor...',
      'Update named commits and repositories.' => 'Adlandırılmış taahhütleri ve depoları güncelleyin.',
      '%s added auditors: %s.' => '%s denetçi eklendi: %s.',
      'A commit\'s subscribers change.' => 'Bir taahhüdün aboneleri değişir.',
      'Audit Requested' => 'Denetim İstendi',
      'Audit' => 'Denetim',
      'No commits found.' => 'Taahhüt bulunamadı.',
      '%s added auditors to %s...' => '%s %s denetçi ekledi...',
      '%s edited auditors for %s; added: %s, removed: %s.' => '%s, %s için denetçi düzenledi; ekledi: %s, kaldırıldı: %s.',
      'A commit is accepted.' => 'Bir taahhüt kabul edildi.',
    );
  }

}
