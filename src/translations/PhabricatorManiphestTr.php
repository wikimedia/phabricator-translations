<?php

final class PhabricatorManiphestTr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'tr';
  }

  protected function getTranslations() {
    return array(
  'Create Task' => 'Görev Oluştur',
  'Triage' => 'Aciliyetine Göre Sıralama',
  'Define task subtypes.' => 'Görev alt türlerini tanımlayın.',
  '%s removed %s as the assignee of this task.' => '%s, bu görevin asistanı olarak %s çıkardı.',
  'Priority of the task.' => 'Görevin önceliği.',
  'Weigh In' => 'Tartılır',
  'Task Fields' => 'Görev Alanları',
  'Assignee' => 'Atanma',
  'Open Parents' => 'Ebeveynleri Aç',
  'Update an existing Maniphest task.' => 'Mevcut bir Maniphest görevini güncelleyin.',
  'List of columns to move the task to.' => 'Görevin taşınacağı sütunların listesi.',
  'A task\'s subscribers change.' => 'Bir görevin aboneleri değişir.',
  'Change Points' => 'Puan Değiştir',
  'Returns information about the possible statuses for Maniphest tasks.' => 'Maniphest görevleri için olası durumlar hakkında bilgi verir.',
  '%s closed %s as %s.' => '%s, %s\'i %s olarak kapattı.',
  'This task has been locked.' => 'Bu görev kilitlendi.',
  '%s added %s commit(s) to %s: %s.' => '%s, %3$s\'e %s taahhüt ekledi: %4$s.',
  'Edits Locked' => 'Kilitli Düzenlemeler',
  '%s claimed %s.' => '%s, %s talep etti.',
  'TASK DETAIL' => 'GÖREV DETAYI',
  '%s closed this task as a duplicate by committing %s.' => '%s, %s bu görevi yinelemeli olarak kapattı.',
  'Search for tasks closed before a certain date.' => 'Belirli bir tarihten önce kapatılan görevleri ara.',
  'Search Subtasks' => 'Alt Görevleri Ara',
  'Merged' => 'Birleştirilmiş',
  'Closed after %s' => '%s tarihinden sonra kapanmış',
  'Changed Task Priority' => 'Değişen Görev Önceliği',
  'Retrieve Maniphest task transactions.' => 'Maniphest görev işlemlerini al.',
  'New task name.' => 'Yeni görev ismi.',
  '%s changed the point value for this task from %s to %s.' => '%s, bu görevin puan değerini %s\'den %s\'e değiştirdi.',
  'Changed task priority to "%s".' => 'Görev önceliği "%s" olarak değiştirildi.',
  'Tasks must have a title.' => 'Görevlerin bir başlığı olmalıdır.',
  'Retrieve information about possible Maniphest task status values.' => 'Olası Maniphest görev durumu değerleri hakkında bilgi al.',
  'Oldest (Pri)' => 'En Eski (Pri)',
  'Unblock' => 'Engeli Kaldır',
  'Select and reorder task fields.' => 'Görev alanlarını seçin ve yeniden sıralayın.',
  'Description Preview' => 'Açıklama Önizleme',
  '%s changed the subtype of %s from "%s" to "%s".' => '%s, %s\'nin alt tipini "%s"\'den "%s"\'e değiştirdi.',
  'Configuration defines no task status with special attribute "%s", but you must specify a status which fills this special role.' => 'Yapılandırma, "%s" özel özelliğine sahip hiçbir görev durumu tanımlamaz, ancak bu özel rolü dolduracak bir durum belirtmeniz gerekir.',
  'Oldest open task.' => 'En eski açık görev.',
  'Duplicates Merged Here' => 'Burada Birleştirilen Çoğaltmalar',
  'Change the parents of this task.' => 'Bu görevin ebeveynlerini değiştirin.',
  'You can only select a parent task when creating a transaction for the first time.' => 'İlk kez bir işlem oluştururken yalnızca bir üst görev seçebilirsiniz.',
  'Subtasks' => 'Alt Görevler',
  'Update has no effect.' => 'Güncellemenin etkisi yoktur.',
  '○ %s' => '○ %s',
  'Maniphest Reports' => 'Maniphest Raporları',
  'This task is closed as a duplicate. Only comment if you think that this task is not a duplicate.' => '',
  'Search for tasks which have specific subtasks.' => 'Belirli alt görevlere sahip görevleri ara.',
  'Update the task description.' => 'Görev tanımını güncelleyin.',
  'From Email' => 'E-postadan',
  'List of related commit PHIDs.' => '',
  'Show Only Tasks With Open Parents' => 'Yalnızca Açık Ebeveynli Görevleri Göster',
  'Needs Triage' => 'Triyaj Gerekiyor',
  'Minimal Valid Config' => 'Minimum Geçerli Yapılandırma',
  'The source task is associated with the destination commit.' => 'Kaynak görev, hedef taahhüdüyle ilişkilendirilir.',
  'Story Points' => 'Öykü Noktaları',
  'Closed, Spite' => 'Kapalı, Spite',
  '%s changed file(s), attached %s: %s; detached %s: %s.' => '%s ekli dosya değiştirildi, %s ekli: %s; %s ayrılmış: %s.',
  '%s closed this task as a duplicate of %s.' => '%s, bu görevi %s\'nin kopyası olarak kapattı.',
  'Task IDs must be integer numbers.' => 'Görev kimlikleri tam sayı olmalıdır.',
  'Set Sail for Adventure' => 'Maceraya Yelken Aç',
  'Allows you to edit, add, or remove the task statuses available in Maniphest,
like "Open", "Resolved" and "Invalid". The configuration should contain a map
of status constants to status specifications (see defaults below for examples).

The constant for each status should be 1-12 characters long and  contain only
lowercase letters and digits. Valid examples are "open", "closed", and
"invalid". Users will not normally see these values.

The keys you can provide in a specification are:

  - `name` //Required string.// Name of the status, like "Invalid".
  - `name.full` //Optional string.// Longer name, like "Closed, Invalid". This
    appears on the task detail view in the header.
  - `name.action` //Optional string.// Action name for email subjects, like
    "Marked Invalid".
  - `closed` //Optional bool.// Statuses are either "open" or "closed".
    Specifying `true` here will mark the status as closed (like "Resolved" or
    "Invalid"). By default, statuses are open.
  - `special` //Optional string.// Mark this status as special. The special
    statuses are:
    - `default` This is the default status for newly created tasks. You must
      designate one status as default, and it must be an open status.
    - `closed` This is the default status for closed tasks (for example, tasks
      closed via the "!close" action in email or via the quick close button in
      Maniphest). You must designate one status as the default closed status,
      and it must be a closed status.
    - `duplicate` This is the status used when tasks are merged into one
      another as duplicates. You must designate one status for duplicates,
      and it must be a closed status.
  - `transaction.icon` //Optional string.// Allows you to choose a different
    icon to use for this status when showing status changes in the transaction
    log. Please see UIExamples, Icons and Images for a list.
  - `transaction.color` //Optional string.// Allows you to choose a different
    color to use for this status when showing status changes in the transaction
    log.
  - `silly` //Optional bool.// Marks this status as silly, and thus wholly
    inappropriate for use by serious businesses.
  - `prefixes` //Optional list<string>.// Allows you to specify a list of
    text prefixes which will trigger a task transition into this status
    when mentioned in a commit message. For example, providing "closes" here
    will allow users to move tasks to this status by writing `Closes T123` in
    commit messages.
  - `suffixes` //Optional list<string>.// Allows you to specify a list of
    text suffixes which will trigger a task transition into this status
    when mentioned in a commit message, after a valid prefix. For example,
    providing "as invalid" here will allow users to move tasks
    to this status by writing `Closes T123 as invalid`, even if another status
    is selected by the "Closes" prefix.
  - `keywords` //Optional list<string>.// Allows you to specify a list
    of keywords which can be used with `!status` commands in email to select
    this status.
  - `disabled` //Optional bool.// Marks this status as no longer in use so
    tasks can not be created or edited to have this status. Existing tasks with
    this status will not be affected, but you can batch edit them or let them
    die out on their own.
  - `claim` //Optional bool.// By default, closing an unassigned task claims
    it. You can set this to `false` to disable this behavior for a particular
    status.
  - `locked` //Optional string.// Lock tasks in this status. Specify "comments"
    to lock comments (users who can edit the task may override this lock).
    Specify "edits" to prevent anyone except the task owner from making edits.
  - `mfa` //Optional bool.// Require all edits to this task to be signed with
    multi-factor authentication.

Statuses will appear in the UI in the order specified. Note the status marked
`special` as `duplicate` is not settable directly and will not appear in UI
elements, and that any status marked `silly` does not appear if the software
is configured with `phabricator.serious-business` set to true.

Examining the default configuration and examples below will probably be helpful
in understanding these options.
' => '',
  'Recently Closed' => 'Geçenlerde Kapandı',
  'One of a task\'s subtasks changes status.' => 'Bir görevin alt görevlerinden biri durumu değiştirir.',
  'Assigned Task' => 'Atanmış Görev',
  'File ("%s", with MIME type "%s") is not a viewable image file.' => '',
  '%s updated the cover image for %s.' => '%s kapak resmini %s için güncelledi.',
  'Transaction specifies both "beforePHID" and "beforePHIDs". Specify only "beforePHIDs".' => '',
  '%s updated the task description for %s.' => '%s, görev tanımını %s için güncelledi.',
  'Activates a points field on tasks. You can use points for estimation or
planning. If configured, points will appear on workboards.

To activate points, set this value to a map with these keys:

  - `enabled` //Optional bool.// Use `true` to enable points, or
    `false` to disable them.
  - `label` //Optional string.// Label for points, like "Story Points" or
    "Estimated Hours". If omitted, points will be called "Points".
  - `action` //Optional string.// Label for the action which changes points
    in Maniphest, like "Change Estimate". If omitted, the action will
    be called "Change Points".

See the example below for a starting point.' => '',
  'Status set to invalid value.' => 'Durum geçersiz değere ayarlandı.',
  'Status "%s" is marked as default, but it is a closed status. The default status should be an open status.' => '"%s" durumu varsayılan olarak işaretlenmiştir, ancak kapalı bir durumdur. Varsayılan durum açık bir durum olmalıdır.',
  '[Maniphest]' => '[Maniphest]',
  '%s lowered the priority of %s from %s to %s.' => '%s, %s\'nin önceliğini %s\'den %s\'e düşürdü.',
  'Search for tasks with given statuses.' => 'Verilen statüleri olan görevleri arayın.',
  'Task Has Revision' => 'Görev Revizyonu Var',
  'Unbreak Now!' => 'Şimdi Aç!',
  'Change Story Points' => 'Öykü Noktalarını Değiştir',
  'Configure point values for tasks.' => 'Görevler için nokta değerlerini yapılandırın.',
  'This task is locked. Edit it anyway?' => 'Bu görev kilitlendi. Yine de düzenlesin mi?',
  'Create a task in a workboard column.' => 'Bir çalışma masası sütununda bir görev oluşturun.',
  'Search for tasks with given priorities.' => 'Öncelikleri olan görevleri arayın.',
  'Configure the cutoff for the "Recently Closed" column.' => '"En Son Kapatılan" sütun için kesmeyi yapılandırın.',
  'Original task author.' => 'Orijinal görev yazarı.',
  'Information about task priority.' => 'Görev önceliği hakkında bilgi.',
  '%s detached %s file(s): %s.' => '%s ayrılmış %s dosya: %s.',
  'Valid setting' => 'Geçerli ayar',
  'Open Subtasks' => 'Alt Görevleri Aç',
  'Close a task. This changes the task status to the default closed status. For a more powerful (but less concise) way to change task statuses, see `%s`.' => 'Bir görevi kapat. Bu, görev durumunu varsayılan kapalı duruma değiştirir. Görev durumlarını değiştirmenin daha güçlü (ancak daha az özlü) bir yolu için, `%s` sayfasına bakın.',
  '%s removed %s parent task(s): %s.' => '%s, %s üst görevden kaldırıldı: %s.',
  '%s added %s subtask(s): %s.' => '%s, %s alt görev ekledi: %s.',
  'Assign a task to a specific user.' => 'Belirli bir kullanıcıya bir görev atayın.',
  'Date Closed (Latest First)' => 'Kapanma Tarihi (İlk önce Son)',
  'Merged In' => 'Birleştirilmiş',
  '%s edited %s commit(s), added %s: %s; removed %s: %s.' => '%s, %s taahhüt düzenledi, %s eklendi: %s; %s kaldırıldı: %s.',
  'Date Closed' => 'Kapatılma Tarihi',
  'Task title cannot exceed %d characters.' => '',
  'Edit Related Tasks...' => 'İlgili Görevleri Düzenle...',
  'This task is connected to more than %s other tasks. Only direct parents and subtasks are shown here. Use %s to show more of the graph.' => 'Bu görev %s’den fazla başka göreve bağlı. Burada sadece doğrudan ebeveynler ve alt görevler gösterilmektedir. Grafiğin daha fazlasını göstermek için %s kullanın.',
  '%s updated the cover image to %s.' => '%s kapak resmini %s olarak güncelledi.',
  '%s created subtask %s.' => '%s, %s alt görev oluşturdu.',
  'Bulk Edit Selected »' => 'Seçilenleri Toplu Düzenle »',
  'No tasks found.' => 'Görev bulunamadı.',
  'Acting user\'s projects' => '',
  'Can Bulk Edit Tasks' => 'Görevleri Düzenle',
  'Estimated number of hours this will take.' => 'Tahmini saat sayısı bunu alacak.',
  '(Up For Grabs)' => '(Kapmak İçin Yukarı)',
  'Related commits.' => 'İlgili commitler.',
  'Assign task to: %s.' => 'Görevi atama: %s.',
  'Status "%s" is marked as the default status for closing tasks, but is not a closed status. It should be a closed status.' => '"%s" durumu, kapanış görevleri için varsayılan durum olarak işaretlenmiştir, ancak kapalı bir durum değildir. Kapalı bir durum olmalı.',
  'Value for key "%s" should be a dictionary.' => '"%s" anahtarının değeri sözlük olmalı.',
  'You can not lock this task and unassign it at the same time because no one will be able to edit it anymore. Lock the task or remove the assignee, but not both.' => '',
  'Assigned task to: %s.' => 'Atanan görev: %s.',
  'Key "%s" is not a valid status constant. Status constants must be 1-64 alphanumeric characters and cannot be exclusively digits. For example, "%s" or "%s" are reasonable choices.' => '"%s" anahtarı geçerli bir durum sabiti değil. Durum sabitleri 1-64 alfanümerik karakterden oluşmalı ve yalnızca rakam olamaz. Örneğin, "%s" veya "%s" makul seçeneklerdir.',
  'Empty withOwners() constraint is not valid.' => 'Boş withOwners() kısıtlaması geçerli değil.',
  'List of subtask PHIDs.' => 'Alt görev PHID\'lerinin listesi.',
  'Default view policy for newly created tasks.' => 'Yeni oluşturulan görevler için varsayılan görünüm politikası.',
  'Show Only Tasks Without Open Parents' => 'Yalnızca Açık Ebeveynsiz Görevleri Göster',
  '%s changed the task status from %s to %s by committing %s.' => '%s, %4$s görev durumunu %s\'den %s\'e değiştirdi.',
  'New task description.' => 'Yeni görev tanımı.',
  '%s removed the point value for %s.' => '%s, %s için puan değerini kaldırdı.',
  'Mocks' => 'Sahteler',
  '%s removed the point value for this task.' => '%s, bu görevin puan değerini kaldırdı.',
  'Closer' => 'Yakından',
  '%s added %s parent task(s): %s.' => '%s, %s ana görevi ekledi: %s',
  'Change the related commits for this task.' => 'Bu görevin ilişkili commitlerini değiştir.',
  'Subtask' => 'Alt Görev',
  'Configuration has two statuses both marked with the special attribute "%s" ("%s" and "%s"). There should be only one.' => 'Yapılandırmanın her ikisi de "%s" ("%s" ve "%s") özel özniteliklerine sahip iki statüye sahiptir. Sadece bir tane olmalı.',
  'Set priority to' => 'Önceliği olarak ayarla',
  'Configuration is not valid. Maniphest priority configurations must be dictionaries.' => 'Yapılandırma geçerli değil. Maniphest öncelik yapılandırmaları sözlükler olmalıdır.',
  'Search for tasks which block open parent tasks.' => 'Açık üst görevleri engelleyen görevleri ara.',
  'The task description.' => 'Görev tanımı',
  'Filter By Project' => 'Projeye Göre Filtrele',
  '%s claimed this task.' => '%s bu görevi talep etti.',
  'Close This Task As a Duplicate Of' => 'Bu Görevin Çoğaltılması Olarak Kapat',
  '%s removed %s subtask(s) for %s: %s.' => '%s, %3$s için %s alt görev kaldırıldı: %4$s.',
  'Untitled Task' => 'Adsız Görev',
  '%s edited parent task(s) for %s, added %s: %s; removed %s: %s.' => '%s, %s için üst görev düzenledi, %s eklendi: %s; %s kaldırıldı: %s.',
  'Read information about task statuses.' => 'Görev durumları hakkında bilgi edinin.',
  'Move a task to one or more workboard columns.' => 'Bir görevi bir veya daha fazla çalışma masası sütununa taşıyın.',
  '%s added a cover image to %s.' => '%s, %s\'e kapak resmi ekledi.',
  'Edit Subtasks' => 'Alt Görevleri Düzenle',
  '%s assigned this task to %s.' => '%s bu görevi %s\'e atadı.',
  '%s placed %s up for grabs.' => '%s kapmak için %s koydu.',
  'Change status to: %s.' => 'Durumu şu şekilde değiştir: %s.',
  '%s raised the priority of this task from %s to %s.' => '%s, bu görevin önceliğini %s\'den %s\'e yükseltti.',
  'No Forms' => 'Form Yok',
  'Hours Config' => 'Saatler Yapılandırması',
  'Type a task subtype name...' => 'Bir görev alt türü adı yazın...',
  'File ("%s", with MIME type "%s") can not be transformed into a thumbnail. You may be missing support for this file type in the "GD" extension.' => '',
  'To change the priority of a task, specify the desired priority, like `%s`. This table shows the configured names for priority levels.

%s

If you specify an invalid priority, the command is ignored. This command has no effect if you do not specify a priority.' => 'Bir görevin önceliğini değiştirmek için, istediğiniz `%s` gibi bir öncelik belirtin. Bu tabloda öncelik seviyeleri için yapılandırılmış isimler gösterilmektedir.

%s

Geçersiz bir öncelik belirlerseniz, komut dikkate alınmaz. Bir öncelik belirtmezseniz bu komutun etkisi olmaz.',
  '%s edited %s revision(s), added %s: %s; removed %s: %s.' => '%s, %s revizyonu düzenledi, %s eklendi: %s; %s kaldırıldı: %s.',
  'Search for tasks updated after a certain date.' => 'Belirli bir tarihten sonra güncellenen görevleri ara.',
  'Assign task to me' => 'Bana görev ata',
  '%s changed the status of %s, a subtask of %s, from %s to %s.' => '%s, %s durumunu değiştirdi, %s bir alt görev, %s\'den %s\'e.',
  'Search for tasks closed after a certain date.' => 'Belirli bir tarihten sonra kapatılan görevleri ara.',
  'Tasks to Close and Merge' => 'Kapatılması ve Birleştirilmesi Görevleri',
  '%s updated the task description.' => '%s görev tanımını güncelledi.',
  'Task to make this a subtask of.' => 'Bunu bir alt görev yapmak için görev.',
  '%s added %s revision(s) to %s: %s.' => '%s, %s revizyonu %s\'e ekledi: %s.',
  'You can not lock this task because it does not have an assignee. No one would be able to edit the task. Assign the task to an assignee before locking it.' => '',
  'Owner PHID' => 'Sahip PHID',
  'Closed, Duplicate' => 'Kapalı, Çoğalt',
  'Epoch timestamp when the task was closed.' => 'Görev kapatıldığında zaman damgası Epoch.',
  'task author' => 'görev yazarı',
  'This method is frozen and will eventually be deprecated. New code should use "transaction.search" instead.' => 'Bu yöntem donmuş ve sonunda kullanımdan kaldırılacak. Yeni kod, bunun yerine "transaction.search" kullanmalıdır.',
  'Apply transactions to create a new task or edit an existing one.' => 'Yeni bir görev oluşturmak veya işlemleri düzenlemek için işlemleri uygulayın.',
  'Browse Assignees' => 'Atanmışlara Göz Atın',
  '%s attached %d file(s) of %s: %s' => '%s, %d dosyayı %s ekli: %s',
  'Tasks with edits locked may only be edited by their assignee.' => '',
  'Status of the task.' => 'Görevin durumu.',
  'Open Tasks by User and Priority (%s)' => 'Kullanıcı ve Öncelikli Görevleri Aç (%s)',
  'Information about task status.' => 'Görev durumu hakkında bilgi.',
  'List of task monograms, as array.' => 'Dizi olarak görev monogramlarının listesi.',
  'Set description to' => 'Açıklaması ayarla',
  'Subtasks.' => 'Alt görevler.',
  '%s closed this task as %s.' => '%s, bu görevi %s olarak kapattı.',
  'Merge Into Selected Task' => 'Seçili Göreve Birleştir',
  'PHID of the parent task.' => 'Üst görevin PHID\'si.',
  'Configure Maniphest.' => 'Maniphest\'i yapılandırın.',
  '%s edited subtask(s) for %s, added %s: %s; removed %s: %s.' => '%s, %s alt görev düzenledi, %s eklendi: %s; %s kaldırıldı: %s.',
  'A task is moved between columns on a workboard.' => 'Bir çalışma kitabındaki sütunlar arasında bir görev taşınır.',
  'Updated Before' => 'Daha Önce Güncellendi',
  '%s changed the status of %s from %s to %s by committing %s.' => '%s, %s\'nin durumunu %s\'den %s\'e %s taahhüt değiştirdi.',
  'The source task has been closed as a duplicate of the destination task.' => 'Kaynak görev, hedef görevin bir kopyası olarak kapatıldı.',
  'Type a task status name or function...' => 'Bir görev durumu adı veya işlevi yazın...',
  '%s changed the point value for %s from %s to %s.' => '%s, %s için puan değerini %s\'den %s\'e değiştirdi.',
  '%s removed %s mock(s) for %s: %s.' => '%s, %s için %s sahteyi kaldırdı: %s.',
  '%s created this task.' => '%s bu görevi oluşturdu.',
  'You can use this transaction type to create a task into a particular workboard
column, or move an existing task between columns.

The transaction value can be specified in several forms. Some are simpler but
less powerful, while others are more complex and more powerful.

The simplest valid value is a single column PHID:

```lang=json
"PHID-PCOL-1111"
```

This will move the task into that column, or create the task into that column
if you are creating a new task. If the task is currently on the board, it will
be moved out of any exclusive columns. If the task is not currently on the
board, it will be added to the board.

You can also perform multiple moves at the same time by passing a list of
PHIDs:

```lang=json
["PHID-PCOL-2222", "PHID-PCOL-3333"]
```

This is equivalent to performing each move individually.

The most complex and most powerful form uses a dictionary to provide additional
information about the move, including an optional specific position within the
column.

The target column should be identified as `columnPHID`, and you may select a
position by passing either `beforePHIDs` or `afterPHIDs`, specifying the PHIDs
of tasks currently in the column that you want to move this task before or
after:

```lang=json
[
  {
    "columnPHID": "PHID-PCOL-4444",
    "beforePHIDs": ["PHID-TASK-5555"]
  }
]
```

When you specify multiple PHIDs, the task will be moved adjacent to the first
valid PHID found in either of the lists. This allows positional moves to
generally work as users expect even if the client view of the board has fallen
out of date and some of the nearby tasks have moved elsewhere.' => '',
  'The assignee of a task can always view and edit it.' => 'Bir görevin sorumlusu onu her zaman görüntüleyebilir ve düzenleyebilir.',
  'Search...' => 'Ara...',
  'Task Graph' => 'Görev Grafiği',
  'Allows you to edit or override the default priorities available in Maniphest,
like "High", "Normal" and "Low". The configuration should contain a map of
numeric priority values (where larger numbers correspond to higher priorities)
to priority specifications (see defaults below for examples).

The keys you can define for a priority are:

  - `name` //Required string.// Name of the priority.
  - `keywords` //Required list<string>.// List of unique keywords which identify
    this priority, like "high" or "low". Each priority must have at least one
    keyword and two priorities may not share the same keyword.
  - `short` //Optional string.// Alternate shorter name, used in UIs where
    there is less space available.
  - `color` //Optional string.// Color for this priority, like "red" or
    "blue".
  - `disabled` //Optional bool.// Set to true to prevent users from choosing
    this priority when creating or editing tasks. Existing tasks will not be
    affected, and can be batch edited to a different priority or left to
    eventually die out.

You can choose the default priority for newly created tasks with
"maniphest.default-priority".' => '',
  'Parent IDs' => 'Üst Kimlikler',
  'You can not remove the assignee of this task because it is locked and no one would be able to edit the task. Reassign the task or unlock it before removing the assignee.' => '',
  'Wishlist' => 'Dilek Listesi',
  'When moving objects between columns on a board, columns must be identified by PHIDs. This transaction uses "%s" to identify a column, but that is not a valid column PHID.' => 'Nesneleri tahtadaki sütunlar arasında taşırken, sütunların PHID\'ler tarafından tanımlanması gerekir. Bu işlem, bir sütunu tanımlamak için "%s" kullanıyor, ancak bu geçerli bir PHID sütunu değil.',
  'Points value must be numeric or empty.' => 'Puan değeri sayısal veya boş olmalıdır.',
  'Custom Maniphest fields.' => 'Özel Maniphest alanları.',
  'Key "%s" is not a valid priority constant. Priority constants must be nonnegative integers.' => '"%s" anahtarı geçerli bir öncelik sabiti değil. Öncelik sabitleri negatif olmayan tamsayılar olmalıdır.',
  'Search for tasks created after a certain date.' => 'Belirli bir tarihten sonra oluşturulan görevleri ara.',
  '%s removed %s mock(s): %s.' => '%s, %s sahteyi kaldırdı: %s.',
  '%s edited mock(s), added %s: %s; removed %s: %s.' => '%s sahteyi düzenledi, %s ekledi: %s; %s kaldırdı: %s.',
  'Default task priority for create flows.' => 'Oluşturma akışları için varsayılan görev önceliği.',
  'Show Only Tasks With Open Subtasks' => 'Yalnızca Açık Alt Görevli Görevleri Göster',
  'Merge Duplicates Into This Task' => 'Bu Görevin İçine Kopyaları Birleştir',
  '%s lowered the priority of this task from %s to %s.' => '%s, bu görevin önceliğini %s\'den %s\'e düşürdü.',
  '(Not Assigned)' => '(Atanmadı)',
  '(Ungrouped)' => '(Gruplanmamış)',
  'Task' => 'Görev',
  'Search for tasks created before a certain date.' => 'Belirli bir tarihten önce oluşturulan görevleri ara.',
  'Test rules which run when a task is created or updated.' => 'Bir görev oluşturulduğunda veya güncellendiğinde çalışan kuralları test edin.',
  'List of custom fields for Maniphest tasks.

For details on adding custom fields to Maniphest, see [[ %s | %s ]] in the
documentation.' => '',
  'React to tasks being created or updated.' => 'Oluşturulan veya güncellenen görevlere tepki verin.',
  '%s removed the point value %s for this task.' => '',
  'Blocker' => 'Engelleyici',
  'Type a task priority name...' => 'Bir görev önceliği adı yazın...',
  'Configure Maniphest priority names.' => 'Maniphest öncelik adlarını yapılandırın.',
  'This method is frozen and will eventually be deprecated. New code should use "maniphest.edit" instead.' => 'Bu yöntem donmuş ve sonunda kullanımdan kaldırılacak. Yeni kodun yerine "maniphest.edit" kullanılmalıdır.',
  'Close As Duplicate' => 'Kopya Olarak Kapat',
  'Reassigned' => 'Yeniden Atandı',
  'Change the task status.' => 'Görev durumunu değiştirin.',
  'Block' => 'Engelle',
  'Claimed' => 'Talep Edildi',
  'New task point value.' => 'Yeni görev noktası değeri.',
  'Configuration is not valid. Maniphest points configuration must be a dictionary.' => 'Yapılandırma geçerli değil. En açık noktalar yapılandırması bir sözlük olmalıdır.',
  'Returns information about the possible priorities for Maniphest tasks.' => 'Maniphest görevlerinin olası öncelikleri hakkında bilgi döndürür.',
  'One or more PHIDs were invalid for %s.' => 'Bir veya daha fazla PHID, %s için geçersizdi.',
  'Parameter "%s" is no longer supported. Use method "%s" with the "%s" constraint instead.' => '"FullText" parametresi artık desteklenmiyor. Bunun yerine "sorgu" kısıtlamasıyla "maniphest.search" yöntemini kullanın.',
  'Select All' => 'Hepsini seç',
  'This task has no parent tasks and no subtasks, so there is no graph to draw.' => 'Bu görevin üst görevleri ve alt görevleri yoktur, bu nedenle çizilecek grafik yoktur.',
  'User who is responsible for the task.' => 'Görevden sorumlu olan kullanıcı.',
  'Task Author' => 'Görev Yazarı',
  'Closed Before' => 'Öncesinde Kapanmış',
  'Subtask IDs' => 'Alt Görev Kimlikleri',
  'Configure Maniphest Task Forms' => 'Maniphest Görev Formlarını Yapılandır',
  '(No Project)' => '(Proje Yok)',
  'This task is directly connected to more than %s other tasks, which is too many tasks to display. Use %s to browse parents or subtasks.' => 'Bu görev doğrudan görüntülenemeyecek kadar fazla görev olan %s\'den fazla başka göreve doğrudan bağlanır. Ebeveynlere veya alt görevlere göz atmak için %s kullanın.',
  'Duplicates' => 'Kopyalar',
  'Task Locked' => 'Görev Kilitli',
  'Edit Task: %s' => 'Görevi Düzenle: %s',
  '%s merged %s task(s) %s into %s.' => '%s, %s görevini %s ile %s birleştirdi.',
  'No tasks.' => 'Görev yok.',
  'Feature Request' => 'Özellik İsteği',
  'Priorities' => 'Öncelikler',
  'Priority Name' => 'Öncelik Adı',
  'Task description.' => 'Görev açıklaması.',
  'Current Subtasks' => 'Mevcut Alt Görevler',
  'Change the subtasks of this task.' => 'Bu görevin alt görevlerini değiştirin.',
  'Task Has Commit' => 'Görev Taahhüt Var',
  'Type a task status name...' => 'Bir görev durumu adı yazın...',
  'Save Subtasks' => 'Alt Görevleri Kaydet',
  'Assign yourself as the owner of a task. To assign another user, see `%s`.' => 'Kendinizi bir görevin sahibi olarak atayın. Başka bir kullanıcı atamak için, `%s` bakınız.',
  'Task Priority' => 'Görev Önceliği',
  '%s added %s subtask(s) for %s: %s.' => '%s, %s için %s alt görev ekledi: %s.',
  'Parent Task' => 'Üst Görevi',
  'Search for tasks updated before a certain date.' => 'Belirli bir tarihten önce güncellenen görevleri ara.',
  'Parent tasks.' => 'Üst görevleri.',
  'Change subtype to "%s"' => 'Change subtür to "%s"',
  'File PHID ("%s") is invalid, or you do not have permission to view it.' => '',
  'Priority set to invalid value.' => 'Öncelik geçersiz değere ayarlandı.',
  'Points value must be nonnegative.' => 'Puan değeri negatif olmamalıdır.',
  'Type a username or "none"...' => 'Bir kullanıcı adı veya "none" yazın...',
  'Maniphest Project Name Cache' => 'Maniphest Proje Adı Önbelleği',
  'Comma-separated list of task IDs.' => 'Virgülle ayrılmış görev kimlikleri listesi.',
  'To assign a task to another user, provide their username. For example, to assign a task to `%s`, write `%s`.

If you omit the username or the username is not valid, this behaves like `%s` and assigns the task to you instead.' => 'Başka bir kullanıcıya görev atamak için kullanıcı adlarını girin. Örneğin, `%s`\'e bir görev atamak için, `%s` yazınız.

Kullanıcı adını atlarsanız veya kullanıcı adı geçerli değilse, bu işlem `%s` gibi davranır ve yerine görevi size atar.',
  'Edit Parent Tasks' => 'Üst Görevleri Düzenle',
  'Spite' => 'Nispet',
  'Email Commands: Tasks' => 'E-posta Komutları: Görevler',
  'This task is directly connected to more than %s other tasks. Use %s to browse parents or subtasks, or %s to show more of the graph.' => 'Bu görev doğrudan %s\'den fazla başka görevlere doğrudan bağlanır. Ebeveynlere veya alt görevlere göz atmak için %s, grafiğin daha fazlasını göstermek için %s kullanın.',
  'Comma-separated list of task monograms.' => 'Görev monogramlarının virgülle ayrılmış listesi.',
  '%s edited %s commit(s) for %s, added %s: %s; removed %s: %s.' => '%s, %s için %s taahhüt düzenledi, %s eklendi: %s; %s kaldırıldı: %s.',
  'Set title to' => 'Başlığı olarak ayarla',
  'Graph' => 'Grafik',
  'Retrieve information about a Maniphest task, given its ID.' => 'Kimliği verilen bir Maniphest görevi hakkında bilgi alın.',
  'Search for tasks owned by a user from a list.' => 'Bir kullanıcının sahip olduğu görevleri listeden arayın.',
  '%s assigned %s to %s.' => '%s, %s ile %s atandı.',
  'Current task assignee, if task is assigned.' => 'Görev atanmışsa, mevcut görev sorumlusu.',
  'Use Maniphest to track bugs, features, todos, or anything else you need to get done. Tasks assigned to you will appear here.' => 'Hataları, özellikleri, todosları veya yapılması gereken herhangi bir şeyi izlemek için Maniphest kullanın. Size verilen görevler burada görünecektir.',
  'Default edit policy for newly created tasks.' => 'Yeni oluşturulan görevler için varsayılan düzenleme politikası.',
  'Change the priority of a task.' => 'Bir görevin önceliğini değiştirin.',
  '%s closed %s, a subtask of %s, as %s.' => '%s, %s için %s\'den bir alt görevi, %s olarak kapandı.',
  'The source task has had the destination task closed as a duplicate and merged into it.' => 'Kaynak görev, hedef görevi yinelenen olarak kapattı ve onunla birleştirdi.',
  'Mixture of PHIDs, IDs and monograms.' => 'PHID, kimlikler ve monogramların karışımı.',
  'Send email to these addresses to create tasks. %s' => 'Görev oluşturmak için bu adreslere e-posta gönderin. %s',
  'Low' => 'Düşük',
  'Search for tasks in specific workboard columns.' => 'Belirli iş panosu sütunlarındaki görevleri ara.',
  'The author of this task can take this action.' => 'Bu görevin yazarı bu işlemi yapabilir.',
  'Configure Maniphest task statuses.' => 'Maniphest görev durumlarını yapılandırın.',
  'Save Parent Tasks' => 'Üst Görevleri Kaydet',
  'WORKBOARD' => 'ÇALIŞMA TAHTASI',
  'Set status to' => 'Durumu ayarla',
  'Group results by a certain parameter.' => 'Group sonuçs by a certain parametre.',
  'Current Mocks' => 'Mevcut Sahteler',
  '%s added %s mock(s) for %s: %s.' => '%s,%s için %s sahte ekledi: %s.',
  'Other task activity not listed above occurs.' => 'Yukarıda listelenmeyen diğer görev etkinlikleri gerçekleşir.',
  'Override Task Lock' => 'Görev Kilidini Geçersiz Kıl',
  'Points Config' => 'Puan Yapılandırması',
  'Current Parent Tasks' => 'Mevcut Üst Görevler',
  'Recently Means' => 'Son Zamanlarda Demektir',
  'User who closed the task, if the task is closed.' => 'Görev kapatılmışsa, görevi kapatan kullanıcı.',
  '%s added %s mock(s): %s.' => '%s, %s sahte ekledi: %s.',
  '%s reassigned %s from %s to %s.' => '%s, %s\'i %s\'den %s\'e yeniden atadı.',
  'Related Objects' => 'İlgili Nesneler',
  'A task\'s priority changes.' => 'Bir görevin önceliği değişir.',
  'Merge Duplicates In' => 'Kopyaları Birleştir',
  'Raised Priority' => 'Yükseltilmiş Öncelik',
  'Oldest (All)' => 'En Eski (Hepsi)',
  'No such Maniphest task exists.' => 'Böyle bir Maniphest görevi yoktur.',
  '%s raised the priority of %s from %s to %s.' => '%s, %s\'nin önceliğini %s\'den %s\'e yükseltti.',
  'Edit Mocks' => 'Sahteleri Düzenle',
  'High' => 'Yüksek',
  'Move on Workboard' => 'Çalışma Tahtasına Taşı',
  'Search for tasks with given subtypes.' => 'Verilen alt tiplerle görev arayın.',
  'Closer PHID' => 'Daha Yakın PHID',
  'The title of the task.' => 'Görevin başlığı.',
  'Oldest open task, excluding those with priority %s' => '',
  'Changed Status' => 'Değişen Durum',
  'Comma-separated list of task PHIDs.' => 'Görev PHID\'lerinin virgülle ayrılmış listesi.',
  'Column move transaction specifies column PHID "%s", but there is no corresponding column with this PHID.' => 'Sütun taşıma işlemi, PHID "%s" sütununu belirtir, ancak bu PHID ile ilgili bir sütun yoktur.',
  'Save Related Mocks' => 'İlgili Sahteleri Kaydet',
  'Wontfix' => 'Wontfix',
  'List of task PHIDs, as array.' => 'Dizi olarak görev PHID\'lerinin listesi.',
  '%s renamed this task from %s to %s.' => '%s, bu görevi %s iken %s olarak yeniden adlandırdı.',
  'Updated After' => 'Sonrasında Güncellendi',
  'To change the status of a task, specify the desired status, like `%s`. This table shows the configured names for statuses.

%s

If you specify an invalid status, the command is ignored. This command has no effect if you do not specify a status.

To quickly close a task, see `%s`.' => 'Bir görevin durumunu değiştirmek için, istediğiniz `%s` gibi bir durum belirtin. Bu tablo durum için yapılandırılmış adları gösterir.

%s

Geçersiz bir durum belirtirseniz, komut dikkate alınmaz. Bir durum belirtmezseniz bu komutun etkisi olmaz.

Bir görevi hızlıca kapatmak için, `%s` bakınız.',
  'There was an unexpected error displaying the task graph. Use %s to browse parents or subtasks, or %s to show the graph.' => '',
  'TASK DESCRIPTION' => 'GÖREV AÇIKLAMASI',
  '%s closed %s as %s by committing %s.' => '%s, %4$s taahhüt ederek %s\'i %s olarak kapattı.',
  'Read information about task priorities.' => 'Görev öncelikleri hakkında bilgi edinin.',
  'Change the task point value.' => 'Görev noktası değerini değiştirin.',
  'Create as a subtask of another task.' => 'Başka bir görevin alt görevi olarak oluşturun.',
  '● %s' => '● %s',
  'Show Only Tasks Without Open Subtasks' => 'Yalnızca Açık Alt Görevler Olmayan Görevleri Göster',
  'Task priority "%s" is not a valid task priority. Use a priority keyword to choose a task priority: %s.' => '"%s" görev önceliği geçerli bir görev önceliği değil. Bir görev önceliği seçmek için bir öncelikli anahtar kelime kullanın: %s.',
  '%s closed %s as a duplicate by committing %s.' => '%s, %3$s\'i taahhüt ederek %s\'i kopya olarak kapattı.',
  'Transaction specifies both "afterPHID" and "afterPHIDs". Specify only "afterPHIDs".' => '',
  'Task Unassigned' => 'Atanmamış Görev',
  'Reassign the task.' => 'Görevi yeniden atayın.',
  '%s changed file(s) for %s, attached %d: %s; detached %d: %s' => '%s, %s için dosyayı değiştirdi, %d ekli: %s; %d kaldırdı: %s',
  '%s closed subtask %s as %s.' => '%s, %s alt görevini %s olarak kapattı.',
  'Open Tasks by Project and Priority (%s)' => 'Görevleri Proje ve Öncelikle Aç (%s)',
  'You do not have access to any forms which can be used to create a subtask.' => 'Bir alt görev oluşturmak için kullanılabilecek herhangi bir forma erişiminiz yok.',
  'Configure how users create and edit tasks.' => 'Kullanıcıların görevleri nasıl oluşturup düzenleyeceğini yapılandırın.',
  'Assign task to rule author.' => 'Yazara hükmetmek için görev verin.',
  '%s detached %d file(s) of %s: %s' => '%s, %d dosyayı %s ekli kaldırdı: %s',
  'Change subtype to "%s."' => 'Change subtür to "%s."',
  '%s closed %s as a duplicate.' => '%s, %s\'i kopya olarak kapattı.',
  '%s removed %s parent task(s) for %s: %s.' => '%s, %3$s için %s üst düzey görevini kaldırdı: %4$s.',
  'Edit Related Mocks' => 'İlgili Sahteleri Düzenle',
  'The source object has the destination object as a parent.' => 'Kaynak nesne, hedef nesneyi üst öğe olarak içerir.',
  'Maniphest Task' => 'Maniphest Görevi',
  '%s set the cover image to %s.' => '%s kapak resmini %s olarak ayarladı.',
  'By User' => 'Kullanıcıya Göre',
  'The task already has the selected assignee.' => 'Görev zaten seçili sorumluya sahip.',
  'Two different task priorities ("%s" and "%s") have the same keyword ("%s"). Keywords must uniquely identify priorities.' => 'İki farklı görev önceliği ("%s" ve "%s") aynı anahtar kelimeye ("%s") sahip. Anahtar kelimeler öncelikleri benzersiz şekilde tanımlamalıdır.',
  'List of parent task PHIDs.' => 'Üst görev PHID\'lerinin listesi.',
  'Change the status of a task.' => 'Bir görevin durumunu değiştirin.',
  'CHANGES TO TASK DESCRIPTION' => 'GÖREV AÇIKLAMASI DEĞİŞİYOR',
  'Close and Merge Selected Tasks' => 'Seçili Görevleri Kapat ve Birleştir',
  'Key "%s" is not a valid priority keyword. Priority keywords must be 1-64 alphanumeric characters and cannot be exclusively digits. For example, "%s" or "%s" are reasonable choices.' => '"%s" anahtarı geçerli bir öncelikli anahtar kelime değil. Öncelikli anahtar kelimeler 1-64 alfasayısal karakterden oluşmalı ve yalnızca rakam olamaz. Örneğin, "%s" veya "%s" makul seçeneklerdir.',
  'Browse Priorities' => 'Önceliklere Göz Atın',
  'Unbreak!' => 'Kilidi Aç!',
  'The task already has the selected priority.' => 'Görev zaten seçilen önceliğe sahip.',
  'Assign to' => 'Atan',
  '%s edited %s revision(s) for %s, added %s: %s; removed %s: %s.' => '%s, %s için %s revizyon düzenledi, %s eklendi: %s; %s kaldırıldı: %s.',
  'A task\'s status changes.' => 'Bir görevin durumu değişir.',
  'Rename the task.' => 'Görevi yeniden adlandırın.',
  'You can not interact with this task because it is locked.' => 'Kilitli olduğundan bu görevle etkileşime giremezsiniz.',
  'Someone comments on a task.' => 'Birisi bir görev hakkında yorum yapıyor.',
  'New task status constant.' => 'Yeni görev durumu sabiti.',
  '%s added %s parent task(s) for %s: %s.' => '%s, %s için %s üst görev ekledi: %s.',
  'Closed After' => 'Tarihinden Sonra Kapanmış',
  '%s closed this task as a duplicate.' => '%s bu görevi kopya olarak kapattı.',
  'Status "%s" is marked as the status for closing tasks as duplicates, but it is not a closed status. It should be a closed status.' => '"%s" durumu, kopyaları kapatma görevleri olarak belirlendi, ancak kapalı bir durum değil. Kapalı bir durum olmalı.',
  'New task assignee, or `null` to unassign.' => 'Yeni görev atanan kişi veya atamayı kaldırmak için `null`.',
  'Wish' => 'Dile',
  '%s set the point value for %s to %s.' => '%s, puan değerini %s ile %s olarak ayarlar.',
  'This task is connected to more than %s other tasks. Only direct parents and subtasks are shown here.' => 'Bu görev %s\'den fazla başka göreve bağlı. Burada sadece doğrudan ebeveynler ve alt görevler gösterilmektedir.',
  'Search for tasks closed by certain users.' => 'Bazı kullanıcılar tarafından kapatılan görevleri arayın.',
  'Changed Subtype' => 'Changed Subtür',
  '%s edited parent task(s), added %s: %s; removed %s: %s.' => '%s, üst görevi düzenledi, %s eklendi: %s; %s kaldırıldı: %s.',
  '%s removed %s revision(s) from %s: %s.' => '%s, %s\'den %s revizyon kaldırdı: %s.',
  '%s merged %s task(s): %s.' => '%s, %s görevi birleştirdi: %s.',
  '%s edited mock(s) for %s, added %s: %s; removed %s: %s.' => '%s, %s sahteyi düzenledi, %s eklendi: %s; %s kaldırıldı: %s.',
  '%s reassigned this task from %s to %s.' => '%s, bu görevi %s\'den %s\'e yeniden atadı.',
  'Triaged' => 'Triaj',
  'The source object has the destination object as a subtask.' => 'Kaynak nesne hedef nesneyi alt görev olarak içerir.',
  '%s removed %s commit(s) from %s: %s.' => '%s, %s taahhüt %s\'den kaldırdı: %s.',
  'Task Owner' => 'Görev Sahibi',
  'By Project' => 'Projeye Göre',
  '%s triaged %s as %s priority.' => '%s, %s\'i %s öncelik olarak kabul etti.',
  'Change priority to: %s.' => 'Önceliği olarak değiştir: %s.',
  'Batch Task Editor' => 'Toplu Görev Düzenleyicisi',
  'Search Parent Tasks' => 'Ana Görevleri Ara',
  'Subscribed' => 'Abone Olundu',
  'Unknown Status' => 'Bilinmeyen Durum',
  'A task\'s associated projects change.' => 'Bir görevin ilişkili projeleri değişir.',
  'Interacting with Maniphest Tasks' => 'Maniphest Görevleri ile etkileşime girme',
  '%s changed the task status from %s to %s.' => '%s, görev durumunu %s\'den %s\'e değiştirdi.',
  'List of task IDs, as array.' => 'Dizi olarak görev kimlikleri listesi.',
  'Specify exactly one of \'%s\' and \'%s\'.' => 'Tam olarak \'%s\' ve \'%s\'den birini belirtin.',
  'Edit Locked Task' => 'Kilitli Görevi Düzenle',
  'Assigned' => 'Atanan',
  'Search for tasks which have specific parent tasks.' => 'Belirli üst görevlere sahip görevleri ara.',
  '%s reopened %s as %s by committing %s.' => '%s, %4$s taahhüt ederek %s olarak %s tekrar açtı.',
  'Change Estimate' => 'Tahmini Değiştir',
  'Closed as Duplicate' => 'Çoğalt Olarak Kapatıldı',
  '%s merged task %s into %s.' => '%s, %s görevini %s ile birleştirdi.',
  'Estimated Hours' => 'Tahmini Saatler',
  '%s changed the status of subtask %s from %s to %s.' => '%s, %s alt görevinin durumunu %s\'den %s\'e değiştirdi.',
  'Lowered Priority' => 'Düşük Öncelik',
  'Execute complex searches for Maniphest tasks.' => 'Maniphest görevleri için karmaşık aramalar yürütün.',
  'Closed By' => 'Kapatan',
  'This page documents the commands you can use to interact with tasks in Maniphest. These commands work when creating new tasks via email and when replying to existing tasks.' => 'Bu sayfa Maniphest\'teki görevlerle etkileşimde bulunmak için kullanabileceğiniz komutları belgeler. Bu komutlar e-posta yoluyla yeni görevler oluştururken ve mevcut görevleri yanıtlarken çalışır.',
  '%s closed this task as %s by committing %s.' => '%s bu görevi %3$s\'e getirerek %s olarak kapattı.',
  'Allows you to define task subtypes. Subtypes let you hide fields you don\'t
need to simplify the workflows for editing tasks.

To define subtypes, provide a list of subtypes. Each subtype should be a
dictionary with these keys:

  - `key` //Required string.// Internal identifier for the subtype, like
    "task", "feature", or "bug".
  - `name` //Required string.// Human-readable name for this subtype, like
    "Task", "Feature Request" or "Bug Report".
  - `tag` //Optional string.// Tag text for this subtype.
  - `color` //Optional string.// Display color for this subtype.
  - `icon` //Optional string.// Icon for the subtype.
  - `children` //Optional map.// Configure options shown to the user when
     they "Create Subtask". See below.
  - `fields` //Optional map.// Configure field behaviors. See below.
  - `mutations` //Optional list.// Configure which subtypes this subtype
    can easily be converted to by using the "Change Subtype" action. See below.

Each subtype must have a unique key, and you must define a subtype with
the key "%s", which is used as a default subtype.

The tag text (`tag`) is used to set the text shown in the subtype tag on list
views and workboards. If you do not configure it, the default subtype will have
no subtype tag and other subtypes will use their name as tag text.

The `children` key allows you to configure which options are presented to the
user when they "Create Subtask" from a task of this subtype. You can specify
these keys:

  - `subtypes`: //Optional list<string>.// Show users creation forms for these
    task subtypes.
  - `forms`: //Optional list<string|int>.// Show users these specific forms,
    in order.

If you don\'t specify either constraint, users will be shown creation forms
for the same subtype.

For example, if you have a "quest" subtype and do not configure `children`,
users who click "Create Subtask" will be presented with all create forms for
"quest" tasks.

If you want to present them with forms for a different task subtype or set of
subtypes instead, use `subtypes`:

```
  {
    ...
    "children": {
      "subtypes": ["objective", "boss", "reward"]
    }
    ...
  }
```

If you want to present them with specific forms, use `forms` and specify form
IDs:

```
  {
    ...
    "children": {
      "forms": [12, 16]
    }
    ...
  }
```

When specifying forms by ID explicitly, the order you specify the forms in will
be used when presenting options to the user.

If only one option would be presented, the user will be taken directly to the
appropriate form instead of being prompted to choose a form.

The `fields` key can configure the behavior of custom fields on specific
task subtypes. For example:

```
  {
    ...
    "fields": {
      "custom.some-field": {
        "disabled": true
      }
    }
    ...
  }
```

Each field supports these options:

  - `disabled` //Optional bool.// Allows you to disable fields on certain
    subtypes.
  - `name` //Optional string.// Custom name of this field for the subtype.


The `mutations` key allows you to control the behavior of the "Change Subtype"
action above the comment area. By default, this action allows users to change
the task subtype into any other subtype.

If you\'d prefer to make it more difficult to change subtypes or offer only a
subset of subtypes, you can specify the list of subtypes that "Change Subtypes"
offers. For example, if you have several similar subtypes and want to allow
tasks to be converted between them but not easily converted to other types,
you can make the "Change Subtypes" control show only these options like this:

```
  {
    ...
    "mutations": ["bug", "issue", "defect"]
    ...
  }
```

If you specify an empty list, the "Change Subtypes" action will be completely
hidden.

This mutation list is advisory and only configures the UI. Tasks may still be
converted across subtypes freely by using the Bulk Editor or API.
' => '',
  '%s changed the subtype of this task from "%s" to "%s".' => '%s bu görevin alt türünü "%s"\'den "%s"\'e değiştirdi.',
  'Create a new Maniphest task.' => 'Yeni bir Maniphest görevi oluşturun.',
  'Create New Task' => 'Yeni Görev Oluştur',
  'Read information about tasks.' => 'Görevler hakkında bilgi edinin.',
  'New task priority constant.' => 'Yeni görev önceliği sabiti.',
  '%s reopened this task as %s by committing %s.' => '%s, %3$s yaparak bu görevi %s olarak yeniden açtı.',
  'Choose a default priority for newly created tasks. You can review and adjust available priorities by using the %s configuration option. The default value (`90`) corresponds to the default "Needs Triage" priority.' => 'Yeni oluşturulan görevler için varsayılan bir öncelik seçin. %s yapılandırma seçeneğini kullanarak mevcut öncelikleri inceleyebilir ve ayarlayabilirsiniz. Varsayılan değer (`90`) varsayılan" Triyaj İhtiyacı "önceliğine karşılık gelir.',
  'The source task is associated with the destination revision.' => 'Kaynak görev, hedef revizyonu ile ilişkilidir.',
  'Changed Task Status' => 'Değişen Görev Durumu',
  'Search for tasks blocked by open subtasks.' => 'Açık alt görevler tarafından engellenen görevleri ara.',
  'Changed Project Column' => 'Değiştirilen Proje Sütunu',
  'Subtype of the task.' => 'Görevin alt tipi.',
  'Unassigned task.' => 'Atanmamış görev.',
  '%s edited subtask(s), added %s: %s; removed %s: %s.' => '%s alt görevi düzenledi, %s eklendi: %s; %s kaldırıldı: %s.',
  'Task status ("%s") has unrecognized value for "locked" configuration ("%s"). Supported values are: "%s", "%s".' => 'Görev durumu ("%s") "kilitli" yapılandırma ("%s") için tanınmayan bir değere sahip. Desteklenen değerler: "%s", "%s".',
  '%s removed %s subtask(s): %s.' => '%s, %s alt görev kaldırdı: %s.',
  'Closed, Wontfix' => 'Kapalı, Wontfix',
  'Unknown status query \'%s\'!' => 'Bilinmeyen durum sorgusu \'%s\'!',
  'Group PHID ("%s") component of cursor ("%s") is not valid.' => '',
  '%s set the point value for this task to %s.' => '%s bu görevin puan değerini %s olarak ayarladı.',
  'Change the priority of the task.' => 'Görevin önceliğini değiştirin.',
  'Page Size' => 'Sayfa Boyutu',
  '%s reopened this task as %s.' => '%s bu görevi %s olarak yeniden açtı.',
  '%s reopened %s, a subtask of %s, as %s.' => '%s, %4$s olarak %3$s bir alt görev olan %s yeniden açıldı.',
  'Name of the task.' => 'Görevin adı.',
  'Spited' => 'Nispetli',
  'Lock Error' => 'Kilitleme Hatası',
  'Tasks and Bugs' => 'Görevler ve Hatalar',
  'A task\'s assignee changes.' => '',
  'Revisions and Commits' => 'Revizyonlar ve Commitler',
  'Parent task identifier "%s" does not identify a visible task.' => 'Ana görev tanımlayıcısı "%s" görünür bir görevi tanımlamıyor.',
  'Assign / Claim' => 'Atan / Talep Et',
  '%s reopened subtask %s as %s.' => '%s, %3$s olarak %s alt görev açıldı.',
  'Point value of the task.' => 'Görevin puan değeri.',
  'Search for tasks with given authors.' => 'Verilen yazarlarla görevleri arayın.',
  'The task already has the selected status.' => 'Görev zaten seçilmiş durumda.',
  'Clear Selection' => 'Seçimi Sil',
  '%s reopened %s as "%s".' => '%s, %s\'yi "%s" olarak yeniden açtı.',
  '%s triaged this task as %s priority.' => '%s bu görevi %s öncelik olarak kabul etti.',
  'This task has no related commits or revisions.' => 'Bu görevin ilgili commit veya revizyonu yok.',
  'Changed task status to "%s".' => 'Görev durumu "%s" olarak değiştirildi.',
  'View Standalone Graph' => 'Bağımsız Grafiği Görüntüle',
  'Choose Subtype' => 'Alt Türü Seç',
);
  }

}
