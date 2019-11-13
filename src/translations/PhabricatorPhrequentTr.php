<?php

final class PhabricatorPhrequentTr
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'tr';
  }

  protected function getTranslations() {
    return array(
      'Working Now' => 'Şimdi Çalışıyor',
      'by nearest start date' => 'en yakın başlangıç tarihine göre',
      'You can not stop tracking time at a future time. Enter the current time, or a time in the past.' => 'Gelecekteki bir zamanda takip süresini durduramazsınız. Geçerli saati veya geçmişteki bir saati girin.',
      'Stop Time' => 'Zaman Durdur',
      'Stop Timer' => 'Zaman Durdurucu',
      'Ended on %s' => '%s\'de Sona Erdi',
      'Unknown ended \'%s\'!' => 'Bilinmeyen \'%s\' sona erdi!',
      'Tracked %s so far' => 'Şimdiye kadar %s izlendi',
      'Tracked: %s' => 'İzlendi: %s',
      'Start Time' => 'Zaman Başlat',
      'Returns current objects being tracked in Phrequent.' => 'Phrequent\'de izlenen geçerli nesneleri döndürür.',
      'Interrupted' => 'Kesilmiş',
      'Stop Tracking Time' => 'İzleme Zamanını Durdur',
      'Start Tracking Time' => 'İzleme Zamanını Başlat',
      'Stop Tracking' => 'İzlemeyi Durdur',
      'Time Spent' => 'Harcanan Zaman',
      'Tracked %s' => '%s İzlendi',
      'Phrequent Time' => 'Phrequent Zamanı',
      'Not Tracking Time' => 'İzleme Zamanı Değil',
      'All Tracked' => 'Tüm İzlenen',
      'by furthest end date' => 'en uzak bitiş tarihine kadar',
      'Unknown order "%s".' => 'Bilinmeyen düzen "%s".',
      'by nearest end date' => 'en yakın bitiş tarihine göre',
      'Ended' => 'Sona Erdi',
      'by furthest start date' => 'en uzak başlangıç tarihine göre',
      'Stop' => 'Durdur',
      'Not Working Now' => 'Şimdi Çalışmıyor',
      'Started At' => 'Başlatıldı',
      'Start Tracking' => 'İzlemeye Başlat',
      '%s (%s ago)' => '%s (%s önce)',
      'Start Timer' => 'Zamanlayıcıyı Başlat',
      'What time did you start working?' => 'Ne zaman çalışmaya başladın?',
      'Phrequent' => 'Phrequent',
      'What time did you stop working?' => 'Çalışmayı ne zaman durdurdun?',
      'Track Time Spent' => 'Harcanan Süreyi İzleyin',
      'Please choose a valid date.' => 'Lütfen geçerli bir tarih seçin.',
      'You are not currently tracking time on this object.' => 'Şu anda bu nesnede zaman izlemiyorsunuz.',
      'Stop tracking time on an object by popping it from the stack.' => 'Bir nesne üzerinde izleme zamanını yığından açarak durdurun.',
      'Start tracking time on an object by pushing it on the tracking stack.' => 'Bir nesnede izleme zamanını izleme yığınına iterek başlayın.',
      'Stop time must be after start time.' => 'Durdurma zamanı, başlangıç zamanından sonra olmalıdır.',
      'Currently Tracking' => 'Şu Anda İzleme',
      'You can not start tracking time at a future time. Enter the current time, or a time in the past.' => 'Gelecekteki bir zamanda izlemeye başlayamazsınız. Geçerli saati veya geçmişteki bir saati girin.',
    );
  }

}
