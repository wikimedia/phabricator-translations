<?php

final class PhabricatorSystemDeDE
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'de_DE';
  }

  protected function getTranslations() {
    return array(
      'Panic!' => 'Panik!',
      'This request was served from a replica database. Replica databases may lag behind the master, so very recent activity may not be reflected in the UI. This data will be restored if the master database is restored, but may have been lost if the master database has been reduced to a pile of ash.' => 'Diese Anfrage wurde von einer Replikat-Datenbank bedient. Replikat-Datenbanken können dem Master hinterherhinken, so dass sehr aktuelle Aktivitäten möglicherweise nicht in der Benutzeroberfläche angezeigt werden. Diese Daten werden wiederhergestellt, wenn die Hauptdatenbank wiederhergestellt wird, können jedoch verloren gegangen sein, wenn die Hauptdatenbank zu einem Haufen Asche zerfallen ist.',
    );
  }

}
