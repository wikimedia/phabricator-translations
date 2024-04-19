<?php

final class PhabricatorSubscriptionsTr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'tr';
  }

  protected function getTranslations() {
    return array(
      'Mute' => 'Sessize al',
      'Subscriber' => 'Abone',
      'Unmute Notifications' => 'Bildirimleri Aç',
      'subscribers' => 'aboneler',
      'Remove me as a subscriber' => 'Beni abone olarak kaldır',
      'Remove subscribers.' => 'Aboneleri kaldır.',
      'Unmute this object? You will receive notifications and email again.' => 'Bu nesneyi açılsın mı? Bildirimleri alacak ve tekrar e-posta alacaksınız.',
      'Set subscribers, overwriting current value.' => 'Aboneleri ayarlayın, mevcut değerin üzerine yazın.',
      'Support for Subscriptions' => 'Abonelik Desteği',
      'Automatically Subscribed' => 'Otomatik Olarak Abone Oldu',
      '%d other(s)' => '%s diğer',
      'You are automatically subscribed to this object.' => 'Bu nesneye otomatik olarak abone oldunuz.',
      'Add subscribers' => 'Abone ekle',
      'Remove yourself as a subscriber.' => 'Bir abone olarak kendinizi kaldırın.',
      'View All %d Subscriber(s)' => 'Tüm %s Üyeyi Gör',
      'Search for objects with certain subscribers.' => 'Belirli aboneleri olan nesneleri arayın.',
      'Subscribers can take this action.' => 'Aboneler bu işlemi yapabilir.',
      'Unmute' => 'Sesi aç',
      'Remove subscribers' => 'Aboneleri kaldır',
      'All %d subscribers removed by %s' => '%s abonelerin tümü %s tarafından kaldırıldı',
      'Added Subscribers' => 'Abone eklendi',
      'Mute this object? You will no longer receive notifications or email about it.' => 'Bu nesneyi sessize alınsın mı? Artık bununla ilgili bildirim veya e-posta almayacaksınız.',
      'Declined to resubscribe %s target(s) because they previously unsubscribed: %s.' => '%s hedefini daha önce abonelikten çıktıkları için yeniden göndermeyi reddetti: %s.',
      'Removed %s subscriber(s): %s.' => 'Kaldırılan %s abone: %s.',
      'Bad Object' => 'Kötü Nesne',
      'Add users or projects as subscribers.' => 'Abone olarak kullanıcılar veya projeler ekleyin.',
      'Add subscribers: %s.' => 'Abone ekle: %s.',
      'Removed Subscribers' => 'Kaldırılan Aboneler',
      'All %d subscribers added by %s' => '%s abonelerin tümü %s tarafından eklendi',
      'Add me as a subscriber' => 'Beni abone olarak ekle',
      'Mute Notifications' => 'Bildirimleri Kapat',
      '%s automatically subscribed target(s) were not affected: %s.' => '%s otomatik olarak abone olunan hedef etkilenmedi: %s.',
      'Set subscribers to' => 'Aboneleri şuna ayarla',
      'Choose subscribers.' => 'Aboneleri seç.',
      '%s, %s, %s and %s' => '%s, %s, %s ve %s',
      'Previously Unsubscribed' => 'Önceden Abonelikten Çıkmış',
      'Remove subscribers: %s.' => 'Aboneleri kaldır: %s.',
      'Change Subscribers' => 'Aboneleri Değiştir',
      'This object is not subscribable.' => 'Bu nesne abone değil.',
      'Add one or more subscribers to the object. You can add users by providing their usernames, or add projects by adding their hashtags. For example, use `%s` to add the user `alincoln` and the project with hashtag `#ios` as subscribers.
    Subscribers which are invalid or unrecognized will be ignored. This command has no effect if you do not specify any subscribers.
    Users who are CC\'d on the email itself are also automatically subscribed if their addresses are associated with a known account.' => 'Nesneye bir veya daha fazla abone ekleyin. Kullanıcı adlarını vererek kullanıcılar ekleyebilir veya karelerini ekleyerek projeler ekleyebilirsiniz. Örneğin, kullanıcıyı "alincoln" ve "#ios" etiketli projeyi abone olarak eklemek için `%s` kullanın.
    Geçersiz veya tanınmayan aboneler dikkate alınmaz. Aboneler belirtmezseniz bu komutun bir etkisi olmaz.
    Phabricator hangi hesapların e-posta adreslerine bağlı olduğunu bilirse, e-postada CC\'de olan kullanıcılar da otomatik olarak abone olur.',
      'Add rule author as subscriber.' => 'Abone olarak kural yazarı ekleyin.',
      'Added %s subscriber(s): %s.' => 'Eklenen %s abone: %s.',
      'Remove rule author as subscriber.' => 'Kural yazarı abone olarak kaldırın.',
      'Add subscribers.' => 'Abone ekle.',
      'Get information about subscribers.' => 'Aboneler hakkında bilgi edinin.',
    );
  }

}
