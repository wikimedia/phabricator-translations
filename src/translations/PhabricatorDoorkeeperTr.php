<?php

final class PhabricatorDoorkeeperTr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'tr';
  }

  protected function getTranslations() {
    return array(
      'Phabricator is running in silent mode.' => 'Phabricator sessiz modda çalışıyor.',
      'Available publishers class names are:' => 'Kullanılabilir yayıncı sınıfı adları:',
      'To enable synchronization into Asana, enter an Asana Workspace ID here.
    NOTE: This feature is new and experimental.' => 'Asana ile senkronizasyonu etkinleştirmek için buraya bir Asana Çalışma Alanı Kimliği girin.
    NOT: Bu özellik yeni ve deneyseldir.',
      'JIRA %s %s' => 'JIRA %s %s',
      'Workspace ID' => 'Çalışma alanı kimliği',
      '%s has no visible object on the other side; this likely indicates the Asana task has been deleted.' => '%s diğer tarafında görünür bir nesne yoktur; bu büyük olasılıkla Asana görevinin silindiğini gösterir.',
      'Using publisher \'%s\'.' => 'Yayıncı \'%s\' kullanılıyor.',
      'Connect to Other Software' => 'Diğer Yazılımlara Bağlan',
      'Failed to update object %s using user %s.' => '%s kullanıcısı kullanılarak %s nesnesi güncellenemedi.',
      'You can find an Asana project ID by clicking the project in Asana and then examining the URL:
      lang=txt
      https://app.asana.com/0/12345678901234567890/111111111111111111
                              ^^^^^^^^^^^^^^^^^^^^
                            This is the ID to use.
    ' => 'Asana\'daki projeyi tıklayıp ardından URL\'yi inceleyerek bir Asana proje kimliği bulabilirsiniz:
      lang=txt
      https://app.asana.com/0/12345678901234567890/111111111111111111
                              ^^^^^^^^^^^^^^^^^^^^
                            Bu, kullanılacak kimliktir.',
      'No Asana provider configured.' => 'Asana sağlayıcı yapılandırılmadı.',
      'Asana integration options.' => 'Asana entegrasyon seçenekleri.',
      'JIRA integration is configured not to post anything.' => 'JIRA entegrasyonu hiçbir şey yayınlamayacak şekilde yapılandırılmıştır.',
      'Skipping main task update, object is no longer visible.' => 'Ana görev güncellemesi atlanır, nesne artık görünmez.',
      'Doorkeeper' => 'Kapıcı',
      'Imported From' => 'İthal',
      'When Phabricator creates tasks in Asana, it can add the tasks to Asana projects based on which application the corresponding object in Phabricator comes from. For example, you can add code reviews in Asana to a "Differential" project.
    NOTE: This feature is new and experimental.' => 'Phabricator Asana\'da görev oluşturduğunda, Ashab projelerine Phabricator\'daki ilgili nesnenin hangi uygulamadan geldiğine bağlı olarak görevler ekleyebilir. Örneğin, "Diferansiyel" bir projeye Asana\'da kod incelemeleri ekleyebilirsiniz.
    NOT: Bu özellik yeni ve deneyseldir.',
      'No related users have linked Asana accounts.' => 'Alakalı kullanıcı bağlı Asana hesabı yok.',
      'Story is about an unsupported object type.' => 'Hikaye desteklenmeyen bir nesne türüyle ilgilidir.',
      'No JIRA provider configured.' => 'Hiçbir JIRA sağlayıcısı yapılandırılmadı.',
      '%s could not be loaded.' => '%s yüklenemedi.',
      'External Object' => 'Dış Nesne',
      'JIRA %s' => 'JIRA %s',
      'Asana Task %s' => 'Asana Görevi %s',
      'GitHub Issue %s' => 'GitHub Sorunu %s',
      'Asana Workspace ID to publish into.' => 'Yayınlanacak Asana Çalışma Alanı Kimliği.',
      '⚠ DO NOT EDIT THIS TASK ⚠
    ☠ Your changes will not be reflected in Phabricator.
    ☠ Your changes will be destroyed the next time state is synchronized.' => '⚠ BU GÖREVİ DÜZENLEMEYİN ⚠
    ☠ Yaptığınız değişiklikler Phabricator\'a yansıtılmayacak.
    ☠ Durumunuz bir sonraki senkronize edildiğinde değişiklikleriniz yok edilir.',
      'Removing subtask edge to %s, foreign object is not visible.' => 'Alt görev kenarı %s kaldırılırsa, yabancı nesne görünmez.',
      'Integration with Asana' => 'Asana ile Entegrasyon',
      'Doorkeeper worker \'%s\' is not enabled.' => 'Kapıcı çalışanı \'%s\' etkin değil.',
      'Object has no followers or active/passive users.' => 'Nesnenin takipçisi veya aktif/pasif kullanıcısı yok.',
      'Skipping main task update, cursor is ahead of the story.' => 'Ana görev güncellemesini atlayarak imleç hikayenin önünde.',
      'Asana: %s' => 'Asana: %s',
      'Failed to load external object after collision.' => 'Çarpışmadan sonra harici nesne yüklenemedi.',
      'To specify projects to add tasks to, enter a JSON map with publisher class names as keys and a list of project IDs as values. For example, to put Differential tasks into Asana projects with IDs `123` and `456`, enter:
      lang=txt
      {
        "DifferentialDoorkeeperRevisionFeedStoryPublisher" : [123, 456]
      }
    ' => 'Görev eklenecek projeleri belirtmek için, anahtar olarak yayıncı sınıfı adlarını ve değer olarak proje kimlikleri listesini içeren bir JSON haritası girin. Örneğin, `123` ve `456` kimliğine sahip Asana projelerine Diferansiyel görevleri koymak için şunu girin:
      lang=txt
      {
        "DifferentialDoorkeeperRevisionFeedStoryPublisher" : [123, 456]
      }',
      'Synchronization of child task from Asana failed!' => 'Asana\'dan alt görevin senkronizasyonu başarısız oldu!',
      'Story is about an object with no linked JIRA issues.' => 'Hikaye, bağlantılı JIRA sorunu olmayan bir nesne hakkında.',
      'GitHub User %s' => 'GitHub Kullanıcı %s',
      'GitHub Issue ID "%s" is not properly formatted. Expected an ID in the form "owner/repository#123".' => 'GitHub Sorun Kimliği "%s" düzgün biçimlendirilmemiş. "owner/repository#123" biçiminde bir kimlik bekleniyordu.',
      'Workspace Name' => 'Çalışma Alanı Adı.',
      'Unable to find any Asana user with valid credentials to pull an OAuth token out of.' => 'OAuth jetonunu çıkarmak için geçerli kimlik bilgilerine sahip Asana kullanıcısı bulunamadı.',
      'Synchronization of parent task from Asana failed!' => 'Asana\'dan üst görevin senkronizasyonu başarısız oldu!',
      'Optional Asana projects to use as application tags.' => 'Uygulama etiketi olarak kullanılacak isteğe bağlı Asana projeleri.',
      'The Asana Workspaces your linked account has access to are:
    %s' => 'Bağlı hesabınızın erişebileceği Asana Çalışma Alanları şunlardır:
    %s',
      'No users to act on linked JIRA objects.' => 'Hiçbir kullanıcı bağlı JIRA nesneleri üzerinde hareket edecek.',
      'Updating main task.' => 'Ana görev güncelleniyor.',
      'Story object has no corresponding external JIRA objects.' => 'Hikaye nesnesinin karşılık gelen harici JIRA nesneleri yok.',
    );
  }

}
