<?php

final class PhabricatorTransactionsSv
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sv';
  }

  protected function getTranslations() {
    return array(
      'Lock / Hide Fields' => 'Lås/dölj fält',
      'All users are already subscribed to this %s.' => 'Alla användare prenumererar redan på detta %s.',
      '%s removed %s subscriber(s) for %s: %s.' => '%s tog bort %s prenumerant(er) för %s: %s.',
      'In %s, %s wrote:' => 'I %s skrev %s:',
      'Warnings' => 'Varningar',
      '%s edited subscriber(s), added %s: %s; removed %s: %s.' => '%s redigerade prenumerant(er), lade till %s: %s; tog bort %s: %s.',
      'Primary Fields' => 'Primära fält',
      'Export format.' => 'Exportera format.',
      'New Object' => 'Nytt objekt',
      '%s awarded a token.' => '%s tilldelade en pollett.',
      '%s added a comment to %s.' => '%s lade till en kommentar på %s.',
      'Change Subtype' => 'Ändra undertyp',
      '%s removed %d subscriber(s): %s.' => '%s tog bort %s prenumerant(er): %s.',
      'Not an Edit Form' => 'Inte ett redigeringsformulär',
      'export' => 'exportera',
      '%s added %s unsubscriber(s) for %s: %s.' => '%s lade till %s prenumerant(er) för %s: %s.',
      '%s wrote:' => '%s skrev:',
      '%s disabled this form.' => '%s inaktiverade detta formulär.',
      '%s added %d subscriber(s): %s.' => '%s lade till %s prenumerant(er): %s.',
      'Changed Subscribers' => 'Ändrade prenumeranter',
      '%s updated subscribers of %s.' => '%s uppdaterade prenumeranter i %s.',
      '%s edited subscriber(s) for %s, added %s: %s; removed %s: %s.' => '%s redigerade prenumerant(er) för %s, lade till %s: %s; tog bort %s: %s.',
      '%s edited subscriber(s), added %d: %s; removed %d: %s.' => '%s redigerade prenumerant(er), lade till %s: %s; tog bort %s: %s.',
      '%s added %s subscriber(s) for %s: %s.' => '%s lade till %s prenumerant(er) för %s: %s.',
      'Silent Edit' => 'Tyst redigering',
      '%s updated subscribers...' => 'Uppdaterade %s prenumeranter...',
      '%s added %s subscriber(s): %s.' => '%s lade till %s prenumerant(er): %s.',
      'Add Another Action' => 'Lägg till en annan åtgärd',
      '%s ("%s")' => '%s ("%s")',
      '%s created this object with visibility "%s".' => '%s skapade detta objekt med synlighet "%s".',
      '%s removed %s subscriber(s): %s.' => '%s tog bort %s prenumerant(er): %s.',
    );
  }

}
