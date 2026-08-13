<?php

final class PhabricatorMetaSk
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sk';
  }

  protected function getTranslations() {
    return array(
  'Completely Break Everything' => 'Úplne všetko pokaziť',
  'Information' => 'Informácie',
  'Syntax' => 'Syntax',
  'Show First-Party Applications' => 'Zobraziť vlastné aplikácie',
  'Create Application' => 'Vytvoriť aplikáciu',
  'Unknown order "%s"!' => 'Neznáme zoradenie „%s“!',
  'Prototypes Not Enabled' => 'Prototypy nie sú povolené',
  'Policy does not exist.' => 'Zásada neexistuje.',
  'Launcher' => 'Spúšťač',
  'This application is a prototype. %s' => 'Táto aplikácia je prototyp. %s',
  'Confirmation' => 'Potvrdenie',
  'Explore More Applications' => 'Preskúmať ďalšie aplikácie',
  'After configuring processing for inbound mail, you can interact with objects (like tasks and revisions) over email. For information on configuring inbound mail, see **[[ %s | Configuring Inbound Email ]]**.

In most cases, you can reply to email you receive from this server to leave comments. You can also use **mail commands** to take a greater range of actions (like claiming a task or requesting changes to a revision) without needing to log in to the web UI.

Mail commands are keywords which start with an exclamation point, like `!claim`. Some commands may take parameters, like `!assign alincoln`.

To use mail commands, write one command per line at the beginning or end of your mail message. For example, you could write this in a reply to task email to claim the task:

```
!claim

I\'ll take care of this.
```


When %s receives your mail, it will process any commands first, then post the remaining message body as a comment. You can execute multiple commands at once:

```
!assign alincoln
!close

I just talked to @alincoln, and he showed me that he fixed this.
```
' => 'Po nakonfigurovaní spracovania prichádzajúcej pošty môžete s objektmi (napríklad s úlohami a revíziami) pracovať cez e-mail. Informácie o konfigurácii prichádzajúcej pošty nájdete v **[[ %s | Konfigurácia prichádzajúcej pošty ]]**.

Vo väčšine prípadov môžete komentovať jednoduchou odpoveďou na e-mail, ktorý dostanete z tohto servera. Môžete tiež použiť **poštové príkazy** a vykonať tak širšiu škálu akcií (napríklad prevziať úlohu alebo požiadať o zmeny v revízii) bez toho, aby ste sa museli prihlásiť do webového rozhrania.

Poštové príkazy sú kľúčové slová, ktoré začínajú výkričníkom, napríklad `!claim`. Niektoré príkazy môžu mať parametre, napríklad `!assign alincoln`.

Ak chcete použiť poštové príkazy, napíšte na začiatok alebo koniec svojej e-mailovej správy jeden príkaz na riadok. Napríklad v odpovedi na e-mail o úlohe môžete napísať toto a úlohu tým prevziať:

```
!claim

Postarám sa o to.
```


Keď %s dostane vašu poštu, najprv spracuje všetky príkazy a potom zvyšné telo správy uverejní ako komentár. Naraz môžete vykonať viacero príkazov:

```
!assign alincoln
!close

Práve som hovoril s @alincoln a ukázal mi, že to opravil.
```',
  'Show Enabled Applications' => 'Zobraziť povolené aplikácie',
  'Can\'t set non-public capabilities to public.' => 'Neverejné oprávnenia nie je možné nastaviť na verejné.',
  'Launchable' => 'Spustiteľné',
  'You cannot enable an enabled application.' => 'Nemôžete povoliť už povolenú aplikáciu.',
  'Save Policies' => 'Uložiť zásady',
  'Browse Applications' => 'Prehliadať aplikácie',
  'To manage prototypes, enable them by setting %s in your configuration.' => 'Ak chcete spravovať prototypy, povoľte ich nastavením %s vo svojej konfigurácii.',
  'Prototype' => 'Prototyp',
  'Edit Policies: %s' => 'Upraviť zásady: %s',
  'Really Disable Application?' => 'Naozaj zakázať aplikáciu?',
  'Create New Application' => 'Vytvoriť novú aplikáciu',
  'Extension' => 'Rozšírenie',
  'Enable %s application?' => 'Povoliť aplikáciu %s?',
  'Validation Failed' => 'Overenie zlyhalo',
  'Really disable the %s application?' => 'Naozaj chcete zakázať aplikáciu %s?',
  'Capability "%s" is not editable for this application.' => 'Oprávnenie „%s“ nie je pre túto aplikáciu upraviteľné.',
  'Mail Commands Overview' => 'Prehľad poštových príkazov',
  'Show Launchable Applications' => 'Zobraziť spustiteľné aplikácie',
  'Show Released Applications' => 'Zobraziť vydané aplikácie',
  'Show Non-Launchable Applications' => 'Zobraziť nespustiteľné aplikácie',
  'This is very unusual and will leave you without any content on the home page. You should only do this if you are certain you know what you are doing.' => 'Toto je veľmi nezvyčajné a zostanete bez akéhokoľvek obsahu na domovskej stránke. Urobte to iba vtedy, ak ste si istí, že viete, čo robíte.',
  'Show Disabled Applications' => 'Zobraziť zakázané aplikácie',
  'Configure Application Forms' => 'Konfigurovať formuláre aplikácií',
  'Show Applications w/ App Email Support' => 'Zobraziť aplikácie s podporou e-mailu aplikácií',
  'Can\'t set the policy to a policy you can\'t view!' => 'Zásadu nie je možné nastaviť na zásadu, ktorú nemôžete zobraziť!',
  'Type an application name...' => 'Zadajte názov aplikácie...',
  'Quick Reference' => 'Rýchly prehľad',
  'Show Applications w/o App Email Support' => 'Zobraziť aplikácie bez podpory e-mailu aplikácií',
  'This application is required and cannot be disabled.' => 'Táto aplikácia je vyžadovaná a nie je možné ju zakázať.',
  '%s changed the %s policy for application %s from %s to %s.' => '%s zmenil zásadu %s pre aplikáciu %s z %s na %s.',
  'Configure creation and editing forms in Applications.' => 'Konfigurovať formuláre na vytváranie a úpravu v aplikáciách.',
  'Show Prototype Applications' => 'Zobraziť prototypové aplikácie',
  'This server is not currently configured to accept inbound mail. You won\'t be able to interact with objects over email until inbound mail is set up.' => 'Tento server nie je momentálne nakonfigurovaný na prijímanie prichádzajúcej pošty. Kým nebude prichádzajúca pošta nastavená, nebudete môcť s objektmi pracovať cez e-mail.',
  '%s changed the %s policy from %s to %s.' => '%s zmenil zásadu %s z %s na %s.',
  'Edit Application: %s' => 'Upraviť aplikáciu: %s',
  'Show Third-Party Applications' => 'Zobraziť aplikácie tretích strán',
  'Are you absolutely certain you want to disable the Home application?' => 'Ste si úplne istí, že chcete zakázať aplikáciu Domov?',
  'This table summarizes the available mail commands. For details on a specific command, see the command section below.' => 'Táto tabuľka sumarizuje dostupné poštové príkazy. Podrobnosti o konkrétnom príkaze nájdete v časti o príkaze nižšie.',
  'Show All Applications' => 'Zobraziť všetky aplikácie',
);
  }

}
