<?php

final class PhabricatorFeedSk
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sk';
  }

  protected function getTranslations() {
    return array(
  'Call %s before publishing!' => 'Pred publikovaním zavolajte %s!',
  'IMPORTANT: Feed hooks are deprecated and have been replaced by Webhooks.

You can configure Webhooks in Herald. This configuration option will be removed
in a future version of the software.

(This legacy option may be configured with a list of URIs; feed stories will
send to these URIs.)' => 'DÔLEŽITÉ: Háčiky kanála sú zastarané a boli nahradené webhookmi.

Webhooky môžete nakonfigurovať v aplikácii Herald. Táto možnosť konfigurácie bude
v budúcej verzii softvéru odstránená.

(Túto zastaranú možnosť je možné nastaviť na zoznam URI; príspevky kanála sa
budú odosielať na tieto URI.)',
  'Dictionary with various data of the story' => 'Slovník s rôznymi údajmi o príspevku',
  'All Stories' => 'Všetky príspevky',
  'Query the feed for stories' => 'Vyhľadať príspevky v kanáli',
  'Story type must be a valid class name and must subclass %s. \'%s\' is not a subclass of %s.' => 'Typ príspevku musí byť platný názov triedy a musí byť podtriedou triedy %s. „%s“ nie je podtriedou triedy %s.',
  'Full HTML presentation of story' => 'Úplná prezentácia príspevku v HTML',
  '(Unable to render story of class %s for Doorkeeper.)' => '(Príspevok triedy %s sa nepodarilo vykresliť pre Doorkeeper.)',
  'Story has no primary object!' => 'Príspevok nemá žiadny primárny objekt!',
  'Republishing story...' => 'Príspevok sa opätovne publikuje...',
  'Story is asking for an object it did not request (\'%s\')!' => 'Príspevok žiada objekt, ktorý si nevyžiadal („%s“)!',
  'Simple one-line plain text representation of story' => 'Jednoduchá jednoriadková textová reprezentácia príspevku',
  'Comma separated list of PHIDs or object names.' => 'Čiarkami oddelený zoznam PHID alebo názvov objektov.',
  'Include Projects' => 'Zahrnúť projekty',
  'Specify a story key to republish.' => 'Zadajte kľúč príspevku na opätovné publikovanie.',
  'The specified "Created Before" date is earlier in time than the specified "Created After" date, so this query can never match any results.' => 'Zadaný dátum „Vytvorené pred“ je skorší ako zadaný dátum „Vytvorené po“, takže tento dopyt nikdy nemôže nájsť žiadne výsledky.',
  'The specified "Occurs Before" date is earlier in time than the specified "Occurs After" date, so this query can never match any results.' => 'Zadaný dátum „Nastane pred“ je skorší ako zadaný dátum „Nastane po“, takže tento dopyt nikdy nemôže nájsť žiadne výsledky.',
  'Republish a feed event to all consumers.' => 'Opätovne publikovať udalosť kanála všetkým príjemcom.',
  'Include Users' => 'Zahrnúť používateľov',
  'Feed Story Failed to Render (%s)' => 'Príspevok kanála sa nepodarilo vykresliť (%s)',
  'Story' => 'Príspevok',
  'Specify exactly one story key to republish.' => 'Zadajte presne jeden kľúč príspevku na opätovné publikovanie.',
  'You must call %s if you %s!' => 'Musíte zavolať %s, ak %s!',
  'Unloaded Object \'%s\'' => 'Nenačítaný objekt „%s“',
  'No story exists with key "%s"!' => 'Neexistuje žiadny príspevok s kľúčom „%s“!',
  'Feed options.' => 'Možnosti kanála.',
  'Deprecated.' => 'Zastarané.',
  'No Stories.' => 'Žiadne príspevky.',
  'objectPHID inputs didn\'t match any known objects.' => 'Vstupy objectPHID nezodpovedali žiadnym známym objektom.',
  'Story contains only the title of the story' => 'Príspevok obsahuje iba nadpis príspevku',
  'Object PHIDs' => 'PHID objektov',
  'Unsupported view type, possibles are: %s' => 'Nepodporovaný typ zobrazenia, možnosti sú: %s',
  'Object Types' => 'Typy objektov',
  'Transaction Logs' => 'Záznamy transakcií',
  'Trying to retrieve markup field key "%s", but this feed story did not request it be rendered.' => 'Pokus o získanie kľúča poľa značiek „%s“, tento príspevok kanála však nepožiadal o jeho vykreslenie.',
  'Feed Stories' => 'Príspevky kanála',
  'Feed query minimum range must be lower than maximum range.' => 'Minimálny rozsah dopytu kanála musí byť nižší ako maximálny rozsah.',
  'Unknown rendering target: %s' => 'Neznámy cieľ vykresľovania: %s',
  'Include stories about projects I am a member of.' => 'Zahrnúť príspevky o projektoch, ktorých som členom.',
  'All Transactions' => 'Všetky transakcie',
  'Story type must be a valid class name and must subclass %s. \'%s\' is not a loadable class.' => 'Typ príspevku musí byť platný názov triedy a musí byť podtriedou triedy %s. „%s“ nie je načítateľná trieda.',
  'Feed story (with key "%s") does not exist or could not be loaded.' => 'Príspevok kanála (s kľúčom „%s“) neexistuje alebo sa nepodarilo načítať.',
  'Review Recent Activity' => 'Skontrolovať nedávnu aktivitu',
);
  }

}
