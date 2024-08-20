<?php

final class PhabricatorDoorkeeperHu
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'hu';
  }

  protected function getTranslations() {
    return array(
      'Available publishers class names are:' => 'Elérhető kiadók osztálynevei:',
      'JIRA %s %s' => 'JIRA %s %s',
      'Workspace ID' => 'Munkaterület ID',
      'When %s creates tasks in Asana, it can add the tasks to Asana projects based on which application the corresponding object in %s comes from. For example, you can add code reviews in Asana to a "Differential" project.
    NOTE: This feature is new and experimental.' => 'Amikor a Phabricator feladatait Asana-ban hozza létre, hozzáadhatja a feladatokat az Asana projektekhez, attól függően, hogy melyik alkalmazásból származik a megfelelő objektum a Phabricator-ban. Például kódváltozatokat adhat az Asanában egy "Differenciál" projekthez.
    MEGJEGYZÉS: Ez a szolgáltatás új és kísérleti jellegű.',
      'No Asana provider configured.' => 'Az Asana szolgáltató nincs konfigurálva.',
      'Asana integration options.' => 'Asana integrációs lehetőségek.',
      'JIRA integration is configured not to post anything.' => 'A JIRA integráció úgy van beállítva, hogy ne küldjön semmit.',
      'Skipping main task update, object is no longer visible.' => 'A fő feladat frissítésének átugrása után az objektum már nem látható.',
      'No related users have linked Asana accounts.' => 'Nem kapcsolódó felhasználók kapcsolták össze az Asana fiókokat.',
      'Story is about an unsupported object type.' => 'A történet egy nem támogatott objektumtípusról szól.',
      'No JIRA provider configured.' => 'Nincs beállítva a JIRA szolgáltató.',
      'External Object' => 'Külső objektum',
      'JIRA %s' => 'JIRA %s',
      'Asana Task %s' => 'Asana feladat %s',
      'GitHub Issue %s' => 'GitHub hiba %s',
      'Asana Workspace ID to publish into.' => 'Az Asana munkaterületi azonosítója közzétehető.',
      'Integration with Asana' => 'Integráció az Asanával',
      'Asana: %s' => 'Asana: %s',
      'Failed to load external object after collision.' => 'Nem sikerült a külső objektum betöltése az ütközés után.',
      'GitHub User %s' => 'GitHub felhasználó %s',
      'Workspace Name' => 'Munkaterület neve',
      'This software is running in silent mode.' => 'Ez a szoftver csendes üzemmódban fut.',
      'Optional Asana projects to use as application tags.' => 'Opcionális Asana projektek használata alkalmazáscímkeként.',
      'No users to act on linked JIRA objects.' => 'Nincsenek felhasználók, akik a kapcsolt JIRA objektumokon tevékenykedhetnek.',
    );
  }

}
