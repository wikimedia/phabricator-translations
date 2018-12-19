<?php

final class PhabricatorSystemPl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'pl';
  }

  protected function getTranslations() {
    return array(
      'Phabricator is currently configured with no writable ("master") database, so it can not write new information anywhere. Phabricator will run in read-only mode until an administrator reconfigures it with a writable database.' => 'Phabricator jest obecnie skonfigurowany bez bazy danych do zapisu ("master"), więc nie może nigdzie zapisywać nowych informacji. Phabricator będzie działał w trybie tylko do odczytu, dopóki administrator nie skonfiguruje go ponownie z bazą danych do zapisu.',
      'This system does not have the "%s" extension installed, so character encodings are not supported. Install "%s" to enable support.' => 'Ten system nie ma zainstalowanego rozszerzenia "%s", więc kodowanie znaków nie jest obsługiwane. Zainstaluj "%s", aby włączyć obsługę.',
      'Panic!' => 'Panika!',
      'No Writable Database' => 'Brak zapisywalnej bazy danych',
      'Destroying %s **%s**...
    ' => 'Niszczenie %s **%s**...',
      'Object "%s" can not be destroyed (it does not implement %s).' => 'Obiekt "%s" nie może zostać zniszczony (nie implementuje %s).',
      'No Encoding Support' => 'Brak obsługi kodowania',
      'No such object "%s" exists!' => 'Nie ma takiego obiektu "%s"!',
      '%d / hour' => '%s / godz',
      'Choose Encoding' => 'Wybierz kodowanie',
      'IMPORTANT' => 'WAŻNE',
      'Destruction Logs' => 'Rejestry niszczenia',
      'This likely indicates a severe misconfiguration or major service interruption.' => 'Prawdopodobnie oznacza to poważny błąd w konfiguracji lub poważną awarię usługi.',
      'Destroying objects...' => 'Niszczenie obiektów...',
      'Select Character Encoding' => 'Wybierz kodowanie znaków',
      'Select Syntax Highlighting' => 'Wybierz podświetlanie składni',
      'DATA WILL BE PERMANENTLY DESTROYED' => 'DANE ZOSTANĄ TRWALE ZNISZCZONE',
      'System' => 'System',
      'You are performing too many actions too quickly.' => 'Zbyt szybko wykonujesz zbyt wiele czynności.',
      'Choose a text encoding to use.' => 'Wybierz kodowanie tekstu do użycia.',
      'These %s object(s) will be destroyed forever:' => 'Te %s obiekty zostaną zniszczone na zawsze:',
      '%d / minute' => '%s / min',
      'Destroy objects without prompting.' => 'Niszcz obiekty bez potwierdzenia.',
    );
  }

}
