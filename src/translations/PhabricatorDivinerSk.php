<?php

final class PhabricatorDivinerSk
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'sk';
  }

  protected function getTranslations() {
    return array(
  'Article has no %s!' => 'Článok nemá %s!',
  'This trait is not documented.' => 'Tento trait nie je zdokumentovaný.',
  'Writing graph cache.' => 'Zapisuje sa vyrovnávacia pamäť grafu.',
  'Edit Basics' => 'Upraviť základné údaje',
  'This interface is not documented.' => 'Toto rozhranie nie je zdokumentované.',
  'Type a book name...' => 'Zadajte názov knihy...',
  'Documentation uses `%s`, but should use `%s`.' => 'Dokumentácia používa `%s`, mala by však používať `%s`.',
  'Atom "%s" is preceded by a comment containing `%s`, but the comment is not a documentation comment. Documentation comments must begin with `%s`, followed by a newline. Did you mean to use a documentation comment? (As the comment is not a documentation comment, it will be ignored.)' => 'Atómu „%s“ predchádza komentár obsahujúci `%s`, tento komentár však nie je dokumentačný. Dokumentačné komentáre musia začínať `%s`, za ktorým nasleduje nový riadok. Chceli ste použiť dokumentačný komentár? (Keďže komentár nie je dokumentačný, bude ignorovaný.)',
  'No such atom \'%s\'!' => 'Neexistuje atóm „%s“!',
  'Diviner Atom' => 'Atóm Diviner',
  'This enum is not documented.' => 'Tento enum nie je zdokumentovaný.',
  'Found %s book(s).' => array(
    'Nájdená %s kniha.',
    'Nájdené %s knihy.',
    'Nájdených %s kníh.',
  ),
  'Propagating changes through the graph.' => 'Zmeny sa šíria grafom.',
  'Atoms inherit the policies of the books they are part of.' => 'Atómy dedia zásady kníh, ktorých sú súčasťou.',
  'Symbol \'%s\' is not a method!' => 'Symbol „%s“ nie je metóda!',
  'Search Results for %s' => 'Výsledky vyhľadávania pre %s',
  'Deleting %s document(s).' => array(
    'Odstraňuje sa %s dokument.',
    'Odstraňuje sa %s dokumenty.',
    'Odstraňuje sa %s dokumentov.',
  ),
  'Enum' => 'Enum',
  'Rule \'%s\' is not a valid regular expression.' => 'Pravidlo „%s“ nie je platný regulárny výraz.',
  '(NOTE) **Looking for documentation?** If you\'re looking for help and information about %s, you can [[https://we.phorge.it/diviner/ | browse the public %s documentation]] on the live site.

Diviner is the documentation generator used to build this documentation.

You haven\'t generated any Diviner documentation books yet, so there\'s nothing to show here. If you\'d like to generate your own local copy of the documentation and have it appear here, run this command:

  %s

' => '(NOTE) **Hľadáte dokumentáciu?** Ak hľadáte pomoc a informácie o %s, môžete si [[https://we.phorge.it/diviner/ | prezrieť verejnú dokumentáciu %s]] na živej stránke.

Diviner je generátor dokumentácie, ktorým bola táto dokumentácia zostavená.

Zatiaľ ste nevygenerovali žiadne knihy dokumentácie Diviner, takže tu nie je čo zobraziť. Ak si chcete vygenerovať vlastnú lokálnu kópiu dokumentácie a zobraziť ju tu, spustite tento príkaz:

  %s',
  'Return' => 'Návratová hodnota',
  'Found %s file(s) in project.' => array(
    'Nájdený %s súbor v projekte.',
    'Nájdené %s súbory v projekte.',
    'Nájdených %s súborov v projekte.',
  ),
  'Diviner Search' => 'Vyhľadávanie v Diviner',
  'PUBLISHING DOCUMENTATION' => 'PUBLIKOVANIE DOKUMENTÁCIE',
  'All Atoms' => 'Všetky atómy',
  'Book configuration \'%s\' has name \'%s\', but book names must include only lowercase letters and hyphens.' => 'Konfigurácia knihy „%s“ má názov „%s“, ale názvy kníh smú obsahovať iba malé písmená a spojovníky.',
  'Read More Documentation' => 'Prečítať si ďalšiu dokumentáciu',
  'Specify a Diviner book configuration file with %s.' => 'Pomocou %s zadajte konfiguračný súbor knihy Diviner.',
  'Creating %s document(s).' => array(
    'Vytvára sa %s dokument.',
    'Vytvára sa %s dokumenty.',
    'Vytvára sa %s dokumentov.',
  ),
  'Diviner' => 'Diviner',
  'Specify a subclass of %s.' => 'Zadajte podtriedu triedy %s.',
  'Atom names must not be in the form \'%s\'. This pattern is reserved for disambiguating atoms with similar names.' => 'Názvy atómov nesmú byť v tvare „%s“. Tento vzor je vyhradený na rozlíšenie atómov s podobnými názvami.',
  'Article' => 'Článok',
  'Skipping %s...' => 'Preskakuje sa %s...',
  'This article is not documented.' => 'Tento článok nie je zdokumentovaný.',
  'Books' => 'Knihy',
  'This atom no longer exists.' => 'Tento atóm už neexistuje.',
  'No books found.' => 'Nenašli sa žiadne knihy.',
  'This call takes %s parameter(s), but only %s are documented.' => array(
    
    array(
      'Toto volanie prijíma %s parameter, ale zdokumentované je %s.',
      'Toto volanie prijíma %s parameter, ale zdokumentované sú %s.',
    ),
    
    array(
      'Toto volanie prijíma %s parametre, ale zdokumentované je %s.',
      'Toto volanie prijíma %s parametre, ale zdokumentované sú %s.',
    ),
    
    array(
      'Toto volanie prijíma %s parametrov, ale zdokumentované je %s.',
      'Toto volanie prijíma %s parametrov, ale zdokumentované sú %s.',
    ),
  ),
  'Writing atom cache.' => 'Zapisuje sa vyrovnávacia pamäť atómov.',
  'Inherited' => 'Zdedené',
  'Documentation Warnings' => 'Upozornenia dokumentácie',
  'Diviner Books' => 'Knihy Diviner',
  'Generating book "%s"...' => 'Generuje sa kniha „%s“...',
  'No methods for this task.' => 'Pre túto úlohu nie sú žiadne metódy.',
  'Repository that the documentation belongs to.' => 'Repozitár, do ktorého dokumentácia patrí.',
  'Atom already has a parent!' => 'Atóm už má rodiča!',
  'Produce ugly (but faster) output.' => 'Produkovať škaredý (ale rýchlejší) výstup.',
  'This file is not documented.' => 'Tento súbor nie je zdokumentovaný.',
  'Found %s affected atoms.' => array(
    'Nájdený %s ovplyvnený atóm.',
    'Nájdené %s ovplyvnený atómy.',
    'Nájdených %s ovplyvnený atómov.',
  ),
  'Unexpected property "%s" in Javelin class definition!' => 'Neočakávaná vlastnosť „%s“ v definícii triedy Javelin!',
  'Diviner Book' => 'Kniha Diviner',
  'Found %s new atom(s) in graph.' => array(
    'V grafe bol nájdený %s nový atóm.',
    'V grafe boli nájdené %s nové atómy.',
    'V grafe bolo nájdených %s nových atómov.',
  ),
  'There are no Diviner \'%s\' files anywhere beneath the current directory. Use \'%s\' to specify a documentation book to generate.' => 'Nikde pod aktuálnym adresárom nie sú žiadne súbory „%s“ pre Diviner. Pomocou „%s“ zadajte knihu dokumentácie, ktorá sa má vygenerovať.',
  'Edit Book' => 'Upraviť knihu',
  'Child hashes have already been computed!' => 'Haše potomkov už boli vypočítané!',
  'Defined' => 'Definované',
  'Clear the caches before generating documentation.' => 'Pred generovaním dokumentácie vyprázdniť vyrovnávacie pamäte.',
  'Implements' => 'Implementuje',
  'Parent hash has already been computed!' => 'Haš rodiča už bol vypočítaný!',
  'Free Radicals' => 'Voľné radikály',
  'Generate documentation.' => 'Vygenerovať dokumentáciu.',
  'Expected exactly one atom from file atomizer.' => 'Z atomizéra súborov sa očakával presne jeden atóm.',
  'Untitled Article "%s"' => 'Článok bez názvu „%s“',
  'Publisher class \'%s\' must be a concrete subclass of %s.' => 'Trieda vydavateľa „%s“ musí byť konkrétnou podtriedou triedy %s.',
  'Need translation for \'%s\'.' => 'Pre „%s“ je potrebný preklad.',
  'Documentation Not Found' => 'Dokumentácia sa nenašla',
  'Path to a Diviner book configuration.' => 'Cesta ku konfigurácii knihy Diviner.',
  'This class is not documented.' => 'Táto trieda nie je zdokumentovaná.',
  'This method is not documented.' => 'Táto metóda nie je zdokumentovaná.',
  'Documentation Atoms' => 'Atómy dokumentácie',
  'Parameter "%s" is named "%s" in the documentation. The documentation may be out of date.' => 'Parameter „%s“ sa v dokumentácii nazýva „%s“. Dokumentácia môže byť zastaraná.',
  'Atomizer class \'%s\' must be a concrete subclass of %s.' => 'Trieda atomizéra „%s“ musí byť konkrétnou podtriedou triedy %s.',
  'BUILDING ATOM CACHE' => 'ZOSTAVOVANIE VYROVNÁVACEJ PAMÄTE ATÓMOV',
  'Specify an atomizer class with %s.' => 'Pomocou %s zadajte triedu atomizéra.',
  'BUILDING GRAPH CACHE' => 'ZOSTAVOVANIE VYROVNÁVACEJ PAMÄTE GRAFU',
  'Trait' => 'Trait',
  'Unable to find the specified documentation. You may have followed a bad or outdated link.' => 'Zadanú dokumentáciu sa nepodarilo nájsť. Možno ste použili nesprávny alebo zastaraný odkaz.',
  'Extends' => 'Rozširuje',
  'Expected "%s" node but found "%s" (on line %d:%d).' => 'Očakával sa uzol „%s“, ale našiel sa „%s“ (na riadku %d:%d).',
  'Found %s obsolete atom(s) in graph.' => array(
    'V grafe bol nájdený %s zastaraný atóm.',
    'V grafe boli nájdené %s zastarané atómy.',
    'V grafe bolo nájdených %s zastaraných atómov.',
  ),
  'No such atom with node hash \'%s\'!' => 'Neexistuje atóm s hašom uzla „%s“!',
  'Atomization complete.' => 'Atomizácia dokončená.',
  'Documentation specifies `%s` multiple times.' => 'Dokumentácia uvádza `%s` viackrát.',
  'CLEARING CACHES' => 'VYPRÁZDŇOVANIE VYROVNÁVACÍCH PAMÄTÍ',
  'Diviner User Guide' => 'Používateľská príručka k Diviner',
  'Edit Book: %s' => 'Upraviť knihu: %s',
  'Found %s file(s) to atomize.' => array(
    'Nájdený %s súbor na atomizáciu.',
    'Nájdené %s súbory na atomizáciu.',
    'Nájdených %s súborov na atomizáciu.',
  ),
  'Found %s unatomized, uncached file(s).' => array(
    'Nájdený %s neatomizovaný súbor bez vyrovnávacej pamäte.',
    'Nájdené %s neatomizovaný súbory bez vyrovnávacej pamäte.',
    'Nájdených %s neatomizovaný súborov bez vyrovnávacej pamäte.',
  ),
  'Method `%s` has explicitly documented `%s`. The `%s` method always returns `%s`. Diviner documents this implicitly.' => 'Metóda `%s` má výslovne zdokumentované `%s`. Metóda `%s` vždy vracia `%s`. Diviner to dokumentuje implicitne.',
  'Build atoms from source.' => 'Zostaviť atómy zo zdrojového kódu.',
  'This function is not documented.' => 'Táto funkcia nie je zdokumentovaná.',
  'Find' => 'Nájsť',
  'Other Methods' => 'Ďalšie metódy',
  'Expected to find atom while disambiguating!' => 'Pri rozlišovaní sa očakávalo nájdenie atómu!',
  'This %s is not documented.' => 'Tento %s nie je zdokumentovaný.',
  'Documentation Books' => 'Knihy dokumentácie',
  'Atom cache is up to date, no files to atomize.' => 'Vyrovnávacia pamäť atómov je aktuálna, nie sú žiadne súbory na atomizáciu.',
  'Repository "%s" does not exist.' => 'Repozitár „%s“ neexistuje.',
  'Book' => 'Kniha',
  'Specify one or more files to atomize.' => 'Zadajte jeden alebo viac súborov na atomizáciu.',
  'Atomizing %s...' => 'Atomizuje sa %s...',
  'Completed generation of "%s".' => 'Generovanie „%s“ bolo dokončené.',
  'Atomizing %s file(s).' => array(
    'Atomizuje sa %s súbor.',
    'Atomizuje sa %s súbory.',
    'Atomizuje sa %s súborov.',
  ),
  'Atom has no symbol map entry!' => 'Atóm nemá položku v mape symbolov!',
  'Browse Books' => 'Prehliadať knihy',
  'FINDING DOCUMENTATION BOOKS' => 'HĽADANIE KNÍH DOKUMENTÁCIE',
);
  }

}
