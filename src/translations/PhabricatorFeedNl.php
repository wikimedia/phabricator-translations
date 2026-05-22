<?php

final class PhabricatorFeedNl
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'nl';
  }

  protected function getTranslations() {
    return array(
  'Call %s before publishing!' => 'Roep %s aan voordat u publiceert!',
  'IMPORTANT: Feed hooks are deprecated and have been replaced by Webhooks.

You can configure Webhooks in Herald. This configuration option will be removed
in a future version of the software.

(This legacy option may be configured with a list of URIs; feed stories will
send to these URIs.)' => 'BELANGRIJK: Feedhooks zijn verouderd en zijn vervangen door Webhooks. 

U kunt Webhooks in Herald configuren. Deze optie wordt verwijderd in een toekomstige versie van de software.

(Deze optie kan worden geconfigureerd met een lijst met URI\'s; feedverhalen worden naar deze URI\'s verzonden.)',
  'Dictionary with various data of the story' => 'Dictionary met verschillende gegevens van het verhaal',
  'All Stories' => 'Alle verhalen',
  'Query the feed for stories' => 'Zoeken in de feed met verhalen',
  'Story type must be a valid class name and must subclass %s. \'%s\' is not a subclass of %s.' => 'Het verhaaltype moet een geldige klassenaam zijn en moet een subklasse %s zijn. \'%s\' is geen onderklasse van %s.',
  'Full HTML presentation of story' => 'Volledige HTML-presentatie van het verhaal',
  '(Unable to render story of class %s for Doorkeeper.)' => '(Het lukte niet om het verhaal van klasse %s voor Doorkeeper weer te geven.)',
  'Story has no primary object!' => 'Het verhaal heeft geen primair object!',
  'Republishing story...' => 'Het verhaal opnieuw publiceren...',
  'Story is asking for an object it did not request (\'%s\')!' => 'Het verhaal vraagt om een object waar het niet om heeft gevraagd (\'%s\')!',
  'Simple one-line plain text representation of story' => 'Een eenvoudige weergave van het verhaal in één regel, in platte tekst',
  'Include Projects' => 'Projecten opnemen',
  'Specify a story key to republish.' => 'Geef een verhaalsleutel op om het opnieuw te publiceren.',
  'The specified "Created Before" date is earlier in time than the specified "Created After" date, so this query can never match any results.' => 'De opgegeven "Aangemaakt vóór"-datum ligt eerder dan de opgegeven "Aangemaakt na"-datum, waardoor deze zoekopdracht nooit resultaten kan opleveren.',
  'The specified "Occurs Before" date is earlier in time than the specified "Occurs After" date, so this query can never match any results.' => 'De opgegeven "Gebeurd vóór"-datum ligt eerder dan de opgegeven "Gebeurd na"-datum, waardoor deze zoekopdracht nooit resultaten kan opleveren.',
  'Republish a feed event to all consumers.' => 'Een feedgebeurtenis opnieuw publiceren voor alle gebruikers.',
  'Include Users' => 'Gebruikers opnemen',
  'Feed Story Failed to Render (%s)' => 'Het feedverhaal kon niet worden weergegeven (%s)',
  'Story' => 'Verhaal',
  'Specify exactly one story key to republish.' => 'Geef precies één verhaalsleutel op om opnieuw te publiceren.',
  'You must call %s if you %s!' => 'U moet %s aanroepen als u %s!',
  'Unloaded Object \'%s\'' => 'Niet geladen object \'%s\'',
  'No story exists with key "%s"!' => 'Er bestaat geen verhaal met de sleutel "%s"!',
  'Feed options.' => 'Feedinstellingen.',
  'Deprecated.' => 'Verouderd.',
  'No Stories.' => 'Geen verhalen.',
  'Story contains only the title of the story' => 'Het verhaal bevat alleen de titel van het verhaal.',
  'Unsupported view type, possibles are: %s' => 'Niet-ondersteund weergavetype, mogelijk zijn: %s',
  'Object Types' => 'Objecttypen',
  'Transaction Logs' => 'Transactielogboeken',
  'Trying to retrieve markup field key "%s", but this feed story did not request it be rendered.' => 'Er is geprobeerd om de opmaakveldsleutel "%s" op te halen, maar dit feedbericht heeft niet gevraagd om weergegeven te worden.',
  'Feed Stories' => 'Feedverhalen',
  'Feed query minimum range must be lower than maximum range.' => 'Het minimale bereik van een feedzoekopdracht moet kleiner zijn dan het maximale bereik.',
  'Unknown rendering target: %s' => 'Onbekend weergavedoel: %s',
  'Include stories about projects I am a member of.' => 'Verhalen opnemen over projecten waarin ik lid ben.',
  'All Transactions' => 'Alle transacties',
  'Story type must be a valid class name and must subclass %s. \'%s\' is not a loadable class.' => 'Het verhaaltype moet een geldige klassenaam zijn en moet een subklasse van %s zijn. \'%s\' is geen te laden klasse.',
  'Feed story (with key "%s") does not exist or could not be loaded.' => 'Feedverhaal (met de sleutel "%s") bestaat niet of kon niet worden geladen.',
  'Review Recent Activity' => 'Recente activiteit bekijken',
);
  }

}
