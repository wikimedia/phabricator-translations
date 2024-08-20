<?php

final class PhabricatorConsoleHu
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'hu';
  }

  protected function getTranslations() {
    return array(
      'Listener Class' => 'Hallgatózó osztály (?)',
      'Profiling was not enabled for this page. Use the button above to enable it.' => 'A profilozás nem engedélyezett erre az oldalra. A fenti gomb használatával engedélyezheti.',
      'Internal ID' => 'Belső ID',
      'Error Log (%d)' => 'Hibanapló (%s)',
      'Debugging console for real-time notifications.' => 'Hibaelhárító konzol valós idejű értesítésekhez.',
      'Provides detailed PHP profiling information through XHProf.' => 'Részletes PHP profilozási információkat biztosít az XHProf segítségével.',
      'Analyze Query Plans' => 'Lekérdezési tervek elemzése',
      'Realtime' => 'Valós idő',
      'Site' => 'Oldal',
      '+%s ms' => '+%s ms',
      'Calls to External Services' => 'Külső szolgáltatások hívása',
      'Machine' => 'Számítógép (?)',
      'Reconnect' => 'Újracsatlakozás',
      'No errors.' => 'Nincsenek hibák.',
      'Error Log' => 'Hibanapló',
      'Information about services.' => 'Információk a szolgáltatásokról.',
      'Unknown event: %s' => 'Ismeretlen esemény: %s',
      'Can\'t Analyze' => 'Nem lehet elemezni',
      'Events' => 'Események',
      'Information about events and event listeners.' => 'Információk eseményekről és eseményhallgatókról.',
      'No Tables' => 'Nincsenek táblák',
    );
  }

}
